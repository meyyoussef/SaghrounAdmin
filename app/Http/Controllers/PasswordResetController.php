<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\PasswordReset;

class PasswordResetController extends Controller
{
    public function requestPasswordReset(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $token = Str::random(60); // Générer un token unique
        $email = $request->input('email');

        // Enregistrer le token dans la base de données
        PasswordReset::updateOrCreate(
            ['email' => $email],
            ['token' => $token, 'created_at' => now()]
        );

        // Envoyer le token par email
        $this->sendPasswordResetEmail($email, $token);

        return response()->json(['message' => 'Password reset email sent successfully']);
    }

    private function sendPasswordResetEmail($email, $token)
    {
        // Envoyer l'email avec le token de réinitialisation de mot de passe
        Mail::raw("Your password reset token is: $token", function ($message) use ($email) {
            $message->to($email)->subject('Password Reset Token');
        });
    }
}
