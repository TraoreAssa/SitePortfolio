<?php
 // echo '<pre>'; print_r($fields); echo '</pre>';
?>

<form action="" method="post" class="col-md-6 offset-md-3 text-center">

    <?php

    // echo "<pre>";
    // print_r($fields);
    // echo "</pre>";


    foreach ($fields as $value) :

        if ($value['Field'] == "code_postal") {
            $maxlength = '5';
        } elseif ($value['Field'] == "telephone") {
            $maxlength = '10';
        } else {
            $maxlength = null;
        }

        // if($value['Field'] == "mdp"){
        //     sha1($value['mdp']);
        // }

        switch ($value['Field']) {
            case "mdp":
                $type = "password";
                break;
            case "email":
                $type = "email";
                break;
            case "date_naissance":
                $type = 'date';
                break;
            default:
                $type = 'text';
        }
        

        ?>
    <div class="form-group">
        <label for="<?= $value['Field'] ?>"><?= $value['Field'] ?></label>
        <input type="<?= $type ?>" class="form-control" name="<?= $value['Field'] ?>" id="<?= $value['Field'] ?>" aria-describedby="<?= $value['Field'] ?>" placeholder="<?= $value['Field'] ?>" maxlength="<?= $maxlength ?>" value="<?= ($op == 'update') ? $values[$value['Field']] : '' ?>" required>

        <?php endforeach; ?>

    </div>
    <input type="submit" class="col-md-6 btn btn-primary mb-2">
</form>



<?php
 // echo '<pre>';print_r($fields); echo '</pre>';
?> 