<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hint-text {
    float: left;
    margin-top: 6px;
    font-size: 95%;
} 
.toast {
        position: fixed;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
    }   
    </style>
</head>
<body>
<div class="modal fade" id="editEducatorModal" tabindex="-1" role="dialog" aria-labelledby="editEducatorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEducatorModalLabel">Edit teacher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulaire pour modifier les informations de l'éducatrice -->
                <form id="editEducatorForm" action="{{ route('update.educatrice', ['id' => $educatrice->id]) }}" method="POST" data-update-url="{{ route('update.educatrice', ['id' => ':id']) }}">
                     @csrf
                     @method('PUT')
                     <input type="hidden" name="_method" value="PUT">
                     <div class="form-group">
            <label for="educatriceId">ID de l'éducatrice</label>
            <p  id="educatriceId"></p>
        </div>
                    <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input type="text" class="form-control" id="nom" name="firstname" value="">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" class="form-control" id="prenom" name="lastname" value="">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone number</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" value="">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="">
                    </div>
                  
                    <div class="form-group">
                        <label for="salary">Salary</label>
                        <input type="text" class="form-control" id="salaire" name="salaire" value="">
                    </div>
                    <div class="form-group">
                        <label for="Level">Level</label>
                        <input type="text" class="form-control" id="level" name="level" value="">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <input type="text" class="form-control" id="gender" name="gender" value="">
                    </div>
                    <div class="form-group">
                        <label for="Status">Social status</label>
                        <input type="text" class="form-control" id="Status" name="Status" value="">
                    </div>
                   
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveChangesBtn">Save</button>
            </div>
        </div>
    </div>
</div>
<script>

// Écoute les clics sur les boutons "Edit"
document.querySelectorAll('.edit').forEach(function(button) {
    button.addEventListener('click', function(event) {
        event.preventDefault();
        var educatrice = JSON.parse(button.dataset.info);
        fillEditForm(educatrice);
        
        // Récupérer l'ID de l'éducatrice depuis l'attribut personnalisé data-educatrice-id
        var educatriceId = button.dataset.educatriceId;
        console.log("ID de l'éducatrice :", educatriceId);

        // Modifier l'action du formulaire pour utiliser l'URL de mise à jour spécifique à cette éducatrice
        var updateUrl = document.getElementById('editEducatorForm').dataset.updateUrl.replace(':id', educatriceId);
        console.log("URL de mise à jour :", updateUrl);
        
        document.getElementById('educatriceId').textContent = "ID : " + educatriceId;
        document.getElementById('editEducatorForm').action = updateUrl;

        $('#editEducatorModal').modal('show'); // Affiche la boîte de dialogue modale
    });
});



// Fonction pour remplir le formulaire de modification avec les informations de l'éducatrice
function fillEditForm(educatrice) {
    document.getElementById('nom').value = educatrice.firstname;
    document.getElementById('prenom').value = educatrice.lastname;

    document.getElementById('salaire').value = educatrice.salary;
    document.getElementById('telephone').value = educatrice.phone;
    document.getElementById('email').value = educatrice.email;
    document.getElementById('Status').value = educatrice.Status;
    document.getElementById('gender').value = educatrice.gender;
    document.getElementById('level').value = educatrice.Level;
}
document.addEventListener('DOMContentLoaded', function() {
    // Placez ici le code JavaScript à exécuter une fois que le DOM est chargé

    // Ajoutez un écouteur d'événement au bouton "Enregistrer"
    document.getElementById('saveChangesBtn').addEventListener('click', function() {
        // Récupère les données modifiées depuis le formulaire
        var editedEducator = {
            nom: document.getElementById('nom').value,
            prenom: document.getElementById('prenom').value,
            telephone: document.getElementById('telephone').value,
            email: document.getElementById('email').value,
            gender: document.getElementById('gender').value,
            Status: document.getElementById('Status').value,
            level: document.getElementById('level').value,

            
            salaire: document.getElementById('salaire').value
        };

        // Récupérer l'URL de mise à jour depuis l'action du formulaire
        var updateUrl = document.getElementById('editEducatorForm').action;

        // Envoie les données modifiées au serveur via une requête AJAX
        $.ajax({
            url: updateUrl,
            method: 'PUT',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: editedEducator,
            success: function(response) {
                // Gérer la réponse du serveur, par exemple, afficher un message de succès
                console.log("Server response :", response);
                showToast("The teacher\'s information has been successfully updated.");
            },
            error: function(xhr, status, error) {
                // Gérer les erreurs, par exemple, afficher un message d'erreur
                console.error("Error during update :", error);
                showToast("An error occurred while updating teacher's information..");
            }
        });

        // Ferme la boîte de dialogue modale
        $('#editEducatorModal').modal('hide');
    });
});


</script>
</body>
</html>