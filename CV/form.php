<?php
// require_once('init/header.php');
//Header

?>

<form action="traitement.php" method="post">
<p>
<strong>Nom<span style="color: #ff0000;">*</span> :</strong> <label for="nom"> </label> <input id="nom" name="nom" size="28" type="text" required/> 
<strong>Prénom <span style="color: #ff0000;">*</span> :</strong> <label for="prenom"></label> <input id="prenom" name="prenom" size="27" type="text" /> <br /><br /> 
<strong>Mail <span style="color: #ff0000;">*</span> : </strong><br /> <label for="mail"> </label><input id="mail" name="mail" size="81" type="text" required /></p>
<p><strong>Pour quelle raison nous contactez-vous ?</strong></p>
<label for="motif"></label> <select id="motif" name="motif"> <option value="reglement">Pour un renseignement</option> 
<option value="enquete_commerciales">Pour une question sur mon site?</option>
<option value="enquete_civile">Pour une proposition d'offre d'emploi</option> 
<option value="recouvrement">Pour autre chose</option> 
 </select>
<p><strong> Message </strong> <span style="color: #ff0000;">*</span> :</p>
<p><label for="message"></label> <textarea id="message" cols="52" rows="7" name="message"></textarea></p>
<input type="reset" value="Effacer" /> <input type="submit" value="Envoyer" />
<p> </p>
</form>

<?php
require_once('init/footer.php');
//footer

?>