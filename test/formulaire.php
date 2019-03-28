<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="ajax5.js"></script>

    <title>AJAX INSERT ALL JQUERY </title>
</head>

<body>
    <div class="container">
        <h1 class="display-5 text-center m-5">Nouveau Commentaire : </h1>

        <div id="resultat"></div>
        
        <form methode = "post" id="formulaire" class = "col-md-6 offset-md-3">
            <div class="form-group">

                <label for="exampleInputEmail1">Pseudo</label>
                <input type="text" class="form-control" id="pseudo" name ="pseudo" placeholder="Votre pseudo" required>
                <br>

                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="email" name ="email" placeholder="Votre email" required >
                <br> 
                
                <label for="exampleInputEmail1">Date</label>
                <input type="text" class="form-control" id="date" name ="date" value=" <?=date('d-m-Y - H:i:s')?> " readonly >
                <br> 

                <label for="exampleInputEmail1">Commentaire</label>
                <textarea  class="form-control" id="commentaire" name="commentaire" placeholder="Votre commentaire" 
                rows="10" required></textarea>   
                <br> 

    
                <button type="submit" id="action" class="col-md-4 offset-md-4 btn btn-primary">Insérer</button>

                
                

            </div>

            
    </div>

    </form>


    

   


</body>

</html>