<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Child;
use App\Models\Chef;
use App\Models\Admin;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Notifications\TeacherAddedNotification;
use App\Notifications\ChefAddedNotification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\PasswordReset; 
class AdminController extends Controller
{
    public function login(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Tentative de connexion de l'administrateur
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentification réussie, rediriger l'administrateur vers la route souhaitée
            return redirect()->route('admin.index');
        }
    
        // Authentification échouée, rediriger l'administrateur vers la page de connexion avec un message d'erreur
        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => ' e-mail or password invalid!.',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout(); // Utiliser la méthode logout pour déconnecter l'utilisateur
        $request->session()->invalidate(); // Invalidons la session
        $request->session()->regenerateToken(); // Régénérons le jeton de session
    
        return redirect()->route('admin.login');// Redirection vers la page de connexion
    }
    //***********************  Add teacher  ********************************//
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'nic'=>'required|string',
            'firstname' => 'required|string|min:3',
            'lastname' => 'required|string|min:3',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required|email|max:100',
            'dateofbirth' => 'required|date_format:d/m/Y'
            
            
           
        ]);
        // Reformater la date de naissance au format attendu par la base de données
    $dateofbirth = Carbon::createFromFormat('d/m/Y', $request->input('dateofbirth'))->format('Y-m-d');
        // Créer une nouvelle instance d'éducatrice
        $educatrice = new Teacher();
        $educatrice->nic = $request->input('nic');
        $educatrice->firstname = $request->input('firstname');
        $educatrice->lastname = $request->input('lastname');
        $educatrice->phone = $request->input('phone');
        $educatrice->address = $request->input('address');
        $educatrice->email = $request->input('email');
        $educatrice->dateofbirth = $dateofbirth;
    
        
        $educatrice->type_degree = "";
        $educatrice->salary = 900; // Valeur par défaut pour le salaire
        $educatrice->gender = "";
        $educatrice->Level = "baby";
        $educatrice->status = "";
        $educatrice->languages = "";
        $educatrice->filename = "";
        $educatrice->imagename = "";
        $educatrice->confirmpassword = "";
        
        // Ajoutez d'autres champs au besoin
    
        // Générer un mot de passe aléatoire pour l'éducatrice
        $password = Str::random(10); // Génère un mot de passe de 10 caractères
        $educatrice->password = Hash::make($password);
    
        // Enregistrer l'éducatrice dans la base de données
        $educatrice->save();
    
    // Envoyer un e-mail à l'éducatrice avec ses données de connexion
         Mail::to($educatrice->email)->send(new TeacherAddedNotification($educatrice, $password));
        // Rediriger l'utilisateur vers une page de succès ou une autre page
        return redirect()->route('show-educatrices')->with('success', 'Teacher added successfully!');

    }
    // ********************Show Teachers********************************//
    public function showTeachers()
    {
        // Récupérer les éducatrices depuis la base de données
        $educatrices = Teacher::all();

        // Passer les éducatrices à la vue
        return view('Teacher.Show', ['educatrices' => $educatrices]);
    }
    //***********************    Show teacher profile********************************************* *//
    public function showProfileEducatrice($id)
    {
        // Rechercher l'éducatrice par son ID
        $educatrice = Teacher::find($id);
    
        // Vérifier si l'éducatrice existe
        if (!$educatrice) {
            return response()->json(['message' => 'Teacher not found.'], 404);
        }
    
        // Retourner les données de l'éducatrice
        return response()->json(['educatrice' => $educatrice]);
    }


      //***********************    delete teacher ********************************************* *//
    public function deleteEducatrice($id)
    {
        // Rechercher l'éducatrice par son ID
        $educatrice = Teacher::find($id);
    
        // Vérifier si l'éducatrice existe
        if (!$educatrice) {
            return response()->json(['message' => 'Teacher not found.'], 404);
        }
    
        // Supprimer l'éducatrice
        $educatrice->delete();
    
        // Retourner une réponse réussie
        return redirect()->route('show-educatrices')->with('success', 'Teacher deleted successfully!');
    }
    //**************************************** edit teacher ************************************************************/
    public function updateEducatrice(Request $request, $id)
    {
        try {
            // Récupérer l'éducatrice depuis la base de données
            $educatrice = Teacher::findOrFail($id);
    
            // Valider les données reçues du formulaire
            $validatedData = $request->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'phone' => 'required',
                'email' => 'required|email',
                'salary' => 'required',
                'Level' => 'required',
                'gender' => 'required',
                'Status' => 'required',
            ]);
    
            // Mettre à jour les données de l'éducatrice avec les données du formulaire
            $educatrice->update($validatedData);
    
            // Retourner les données mises à jour de l'éducatrice au format JSON
            return response()->json(['id' => $educatrice->id]);
        } catch (\Exception $e) {
            // En cas d'erreur, enregistrer les détails de l'erreur dans les journaux
            Log::error('An error occurred while updating the teacher: ' . $e->getMessage());
            // Retourner une réponse d'erreur au format JSON
            return response()->json(['error' => 'An error occurred while updating the teacher. Please try again later'], 500);
        }
    }
    public function edit()
{
    $chef = Chef::first(); // Récupère le premier chef de la base de données
    return view('chef.Edit')->with('chef', $chef);
}

    public function update(Request $request)
    {
        // Récupérer le chef (puisqu'il n'y a qu'un seul chef)
        $chef = Chef::firstOrFail();
    
        // Assurez-vous que seuls les attributs fillables sont mis à jour
        $chef->fill($request->only([
            'nic', 'firstname', 'lastname', 'phone', 'address', 'email', 'dateofbirth', 'password', 'confirmpassword', 'gender', 'status', 'type_degree', 'languages', 'filename', 'imagename', 'salary'
        ]));
    
        // Sauvegarder les modifications
        $chef->save();
    
        return redirect()->route('show-chef')->with('success', 'Utilisateur mis à jour avec succès.');
    }
    public function editTeacher($id)
    {
        // Récupère l'enseignant en fonction de son ID
        $teacher = Teacher::findOrFail($id);
        
        return view('teacher.Edit')->with('teacher', $teacher);
    }
    
    public function updateTeacher(Request $request, $id)
    {
        // Récupérer l'enseignant avec l'ID spécifié
        $teacher = Teacher::findOrFail($id);
        
        // Assurez-vous que seuls les attributs fillables sont mis à jour
        $data = $request->only([
            'nic', 'firstname', 'lastname', 'phone', 'address', 'email', 'dateofbirth', 'password', 'confirmpassword', 'gender', 'status', 'type_degree', 'languages', 'Level','filename', 'imagename', 'salary'
        ]);
        
        // Mettre à jour les données de l'enseignant avec les données provenant de la requête
        $teacher->update($data);
        
        return redirect()->route('show-educatrices')->with('success', 'Enseignant mis à jour avec succès.');
    }
    
    
    public function editChild($id)
    {
        // Récupère l'enfant en fonction de son ID
        $child = Child::findOrFail($id);
        
        return view('child.Edit')->with('child', $child);
    }
    
    public function UpdateChild(Request $request, $id)
    {
        // Récupérer l'enfant avec l'ID spécifié
        $child = Child::findOrFail($id);
        
        // Assurez-vous que seuls les attributs fillables sont mis à jour
        $data = $request->only([
            'firstname', 'lastname', 'activities', 'dateofbirth', 'filename', 'gender', 'allergies', 'conditions', 'message', 'username',
            'phone', 'email', 'password', 'frais',
        ]);
    
        // Mettre à jour les données de l'enfant avec les données provenant de la requête
        $child->update($data);
    
        return redirect()->route('show-enfant')->with('success', 'Enfant mis à jour avec succès.');
    }
    
    
    
    
    public function updateShowEducatrices(Request $request, $id)
    {
        try {
            // Récupérer l'éducatrice depuis la base de données
            $educatrice = Teacher::findOrFail($id);
    
            // Valider les données reçues du formulaire
            $validatedData = $request->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'phone' => 'required',
                'email' => 'required|email',
                'salary' => 'required',
                'Level' => 'required',
                'gender' => 'required',
                'status' => 'required',
            ]);
    
            // Mettre à jour les données de l'éducatrice avec les données du formulaire
            Log::debug('Data received from AJAX request:', $request->all());

            $educatrice->update($validatedData);
    
            // Rediriger l'utilisateur vers la page où il peut voir les détails de l'éducatrice
            return redirect()->route('profile.educatrice', ['id' => $educatrice->id])->with('success', 'The teacher\'s information has been successfully updated');
        } catch (\Exception $e) {
            // En cas d'erreur, enregistrer les détails de l'erreur dans les journaux
            Log::error('An error occurred while updating the teacher: ' . $e->getMessage());
            // Rediriger l'utilisateur vers une page d'erreur avec un message approprié
            return redirect()->back()->with('error', 'An error occurred while updating the teacher. Please try again later');
        }
    }
// ****************************Children**************************************************//
public function showEnfants()
{
    // Récupérer tous les enfants depuis la base de données
    $enfants = Child::all();
    
    // Calculer l'âge pour chaque enfant
    foreach ($enfants as $enfant) {
        $dateofbirth = Carbon::parse($enfant->dateofbirth);
        $aujourdHui = Carbon::now();
        $age = $dateofbirth->diffInYears($aujourdHui);
        $enfant->age = floor($age);
    }
    
    // Passer les enfants à la vue
    return view('Child.Show', ['enfants' => $enfants]);
}
public function showProfileInfant($id)
{
    // Rechercher l'éducatrice par son ID
    $enfant = Child::find($id);

    // Vérifier si l'éducatrice existe
    if (!$enfant) {
        return response()->json(['message' => 'Infant not found.'], 404);
    }

    // Retourner les données de l'éducatrice
    return response()->json(['enfant' => $enfant]);
}
// supprimer l'enfant*
//***************************chef*************************************** */
//show chef 
//Add chef de la cantine
public function storeChef(Request $request)
{
    // Valider les données du formulaire
    $request->validate([
        'nic'=>'required|string',
        'firstname' => 'required|string|min:3',
        'lastname' => 'required|string|min:3',
        'phone' => 'required',
        'address' => 'required',
        'email' => 'required|email|max:100',
        'dateofbirth' => 'required|date_format:d/m/Y'
        
        
       
    ]);
    // Reformater la date de naissance au format attendu par la base de données
$dateofbirth = Carbon::createFromFormat('d/m/Y', $request->input('dateofbirth'))->format('Y-m-d');
    // Créer une nouvelle instance d'éducatrice
    $chef = new Chef();
    $chef->nic = $request->input('nic');
    $chef->firstname = $request->input('firstname');
    $chef->lastname = $request->input('lastname');
    $chef->phone = $request->input('phone');
    $chef->address = $request->input('address');
    $chef->email = $request->input('email');
    $chef->dateofbirth = $dateofbirth;

    
    $chef->type_degree = "";
    $chef->salary = 900; // Valeur par défaut pour le salaire
    $chef->gender = "";
    $chef->status = "";
    $chef->languages = "";
    $chef->filename = "";
    $chef->imagename = "";
    $chef->confirmpassword = "";
    
    // Ajoutez d'autres champs au besoin

    // Générer un mot de passe aléatoire pour l'éducatrice
    $password = Str::random(10); // Génère un mot de passe de 10 caractères
    $chef->password = Hash::make($password);

    // Enregistrer l'éducatrice dans la base de données
    $chef->save();

// Envoyer un e-mail à l'éducatrice avec ses données de connexion
     Mail::to($chef->email)->send(new ChefAddedNotification($chef, $password));
     return redirect()->route('show-chef')->with('success', 'The chef added successfully!');
}
//check chef exists or not
public static  function checkGerantExists()
{
    // Vérifier s'il existe déjà un gérant
    $gerantExists = Chef::exists();

    // Retourner le résultat de la vérification
    return $gerantExists;
}
public function showChef()
{
    // Récupérer les éducatrices depuis la base de données
    $chef = Chef::all();
        
    // Passer les éducatrices à la vue
    return view('Chef.Show', ['chef' => $chef]);
}
public function showAddForm()
{
    return view('Teacher.Add');
}
//showResetPasswordForm
public function showResetPasswordForm()
{
    return view('Admin.ResetPassword');
}
public function showEditVue()
{
    return view('Teacher.Edit');
}
public function showIndex()
{
    return view('Admin.index');
}
public function showEditForm()
{
    return view('Teacher.Edit');
}
public function showOTPForm()
{
    return view('Admin.OTP');
}
public function showChangeForm()
{
 
    return view('Admin.ChangePassword');
}
public function showAddFormChef()
{
    return view('Chef.Add');
}

public function deleteChef()
{
    // Vérifier s'il existe exactement un chef dans la base de données
    $chefCount = Chef::count();
    if ($chefCount !== 1) {
        return response()->json(['message' => 'Il doit y avoir exactement un chef dans la base de données pour effectuer cette action.'], 400);
    }

    // Récupérer le chef
    $chef = Chef::first();

    // Supprimer le chef
    $chef->delete();

    // Rediriger l'utilisateur vers la page show-chef
    return redirect()->route('show-chef')->with('success', 'Le chef a été supprimé avec succès!');
}
public function showProfileChef($id)
{
    // Rechercher l'éducatrice par son ID
    $chef = Chef::find($id);

    // Vérifier si l'éducatrice existe
    if (!$chef) {
        return response()->json(['message' => 'chef non trouvée.'], 404);
    }

    // Retourner les données de l'éducatrice
    return response()->json(['chef' => $chef]);
}
//*****************************************  Reset password     *************************************************** *//
//OTP code 

public function generateAndSaveOTP(Admin $admin)
{
    // Générer un OTP aléatoire de 4 chiffres
    $otp = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);

    // Enregistrer l'OTP dans la base de données pour l'admin donné
    $admin->otp_code = $otp;
    $admin->otp_valid_until = now()->addMinutes(2); // Valide pour 2 minutes
    $admin->save();

    return response()->json(['message' => 'OTP generated and saved successfully', 'otp' => $otp]);
}
public function verifyOTP(Request $request)
{
    // Valider les données de la requête
    $request->validate([
        'otp_code' => 'required|numeric|digits:4',
    ]);

    // Récupérer l'admin actuellement authentifié
    $admin = auth()->guard('admin')->user();

    // Vérifier si l'OTP envoyé correspond à celui enregistré pour l'admin
    if ($admin && $admin->otp_code === $request->otp_code && now()->lt($admin->otp_valid_until)) {
        // OTP valide, vous pouvez ajouter votre logique ici
        return response()->json(['message' => 'OTP verified successfully']);
    } else {
        // OTP invalide
        return response()->json(['message' => 'Invalid OTP'], 422);
    }

}
public function sendOTPByEmail(Admin $admin)
{
    // Récupérer l'OTP généré pour l'admin
    $otp = $admin->otp_code;

    // Envoyer l'e-mail avec l'OTP à l'adresse e-mail de l'admin
    Mail::send('emails.otp', ['otp' => $otp], function($message) use ($admin) {
        $message->to($admin->email, $admin->firstname.' '.$admin->lastname)->subject('Votre code OTP');
    });

    return response()->json(['message' => 'OTP sent successfully to ' . $admin->email]);
}
}
