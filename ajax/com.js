$(document).ready(function(){
   
    $("#ajouter").click(function(event){
        // insert est le boutton pour valider le commentaire
        event.preventDefault();
        alert('Vous aller rediriger vers le formulaire !');
        window.location="ajax/formulaire.php";
        
    });

    $("#insert").click(function(event){
        // insert est le boutton pour valider le commentaire
        event.preventDefault();

        alert('Votre commentaire a bien été enregistré, Je vous remercie!');

        window.location="../index.php";
        ajax();
    });
    
    
    //Joint COM.php (Insertion dans la BDD) et les champs du form
    function ajax (){
        var pseudo = $("#pseudo").val();
        var email = $("#email").val();
        var commentaire = $("#commentaire").val();
        var date = $("#date").val();

        // console.log(pseudo + " " + email + '  ' +  commentaire + '  ' +  date);
        console.log(commentaire + '  ' );

        var parameters = "commentaire="+commentaire + "&date="+date + "&pseudo="+pseudo + "&email="+email; 

        console.log(parameters);


        $.post("com.php", parameters, function(data){
            $("#resultat").html(data.resultat);
        }, 'json');

        $('#formulaire').trigger("reset");//reboot le formulaire apres insertion (efface les donnée aprés insertion)
        
    }

});