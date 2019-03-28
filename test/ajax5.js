$(document).ready(function () {
    $("#action").click(function (event) {
        event.preventDefault();
        // alert('Votre commentaire a bien été enregistré <br> nous vous remercions!')
        ajax();
    });


    function ajax() {
        var pseudo = $("#pseudo").val();
        var email = $("#email").val();
        var commentaire = $("#commentaire").val();
        var date = $("#date").val();

        console.log(pseudo + " " + email + '  ' + commentaire + '  ' + date);

        var parameters = "date=" + date + "&pseudo=" + pseudo + "&email=" + email + "&commentaire=" + commentaire;

        console.log(parameters);


        $.post("index.php", parameters, function (data) {
            $("#resultat").html(data.resultat);
        }, 'json');

        $('#formulaire').trigger("reset");//reboot le formulaire apres insertion (efface les donnée aprés insertion)
        alert('Merci pour votre commentaire');
        window.location = "index.php";
    }

    $.ajax({
        url: "formulaire.php", // URL de destination
        dataType: "text", // Type de donnée
        success: function (data) {
            //data est la reponse de ma requete (requete retour (success))
            /* 
            En cas de succes de requetes, la réponse de la requete est stockée dans 'data
            La methode "ajax()" se charge de tout faire, la réponse de la requete est parsé au format JSON, sinon on ne pourrais pas vévivuler des données en HTTP
            */
            $('#demo').html(data);
            /* 
            On séléctionne la div id " demo" dans la quelle on accroche le resultat de la requete AJAX contenu dans data 
            */
        }
    });





});