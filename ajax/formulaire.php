<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    
    <script src="com.js"></script>

    <?php    
        require_once('../init/style.php');
    ?>

    <title>AJOUTER UN COMMENTAIRE </title>
</head>

<body>
<nav class="navbar navbar-dark bg-dark mainMenu">
        <ul class="menu">
            <li><a class="navbar-brand" href="../index.php">Revenir au site</a></li>
        </ul>
    </nav>
    <div class="container">
        <h3 class="display-4 text-center m-4"> Nouveau Commentaire : </h3>

        <div id="resultat"></div>
        
        <form methode = "post" id="formulaire" class = "col-md-6 offset-md-3 my-3">
            <div class="form-group">

                <label for="exampleInputEmail1">Pseudo</label>
                <input type="text" class="form-control" id="pseudo" name ="pseudo" placeholder="Votre pseudo" required>
                <br>

                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="email" name ="email" placeholder="Votre email" required >
                <br> 
                
                <label for="exampleInputEmail1">Date et Heure</label>
                <input type="text" class="form-control text-center" id="date" name ="date" value=" <?=date('d-m-Y - H:i:s')?> " readonly >
                <br> 

                <label for="exampleInputEmail1">Commentaire</label>
                <textarea id="commentaire" class="form-control" name="commentaire" placeholder="Votre commentaire" 
                rows="10" required></textarea>   
                <br> 

    
                <button type="submit" id="insert" class="col-md-4 my-5 offset-md-4 btn btn-dark">Ajouter mon Commentaire</button>

                
                

            </div>

            
    </div>

    </form>
</body>

</html>