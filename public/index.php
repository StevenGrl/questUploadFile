<?php 
session_start();
$_SESSION['page'] = 'index';
$dir = 'img';
$files = scandir($dir);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Upload File quest - Steven Grillon</title>
</head>
<body>
<?php require 'navbar.php'; ?>
<?php
$i = 0;
    foreach ($files as $file => $value) {
        if (!in_array($value, array(".",".."))) {
            if ($i % 4) { ?>
                <div class="row">
           <?php
            } ?>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="img/<?= $value ?>" alt="<?= $value ?>">
                    <div class="caption">
                        <h3><?= $value ?></h3>
                        <form action="supprImage.php" method="POST">
                        <input type="hidden" name="name" value="<?= $value ?>">
                            <input type="submit" value="Supprimer">
                        </form>                    
                    </div>
                </div>
            </div>
        
        <?php
        }
        if ($i % 4) { ?>
            </div>
        <?php
         $i++;
        }
       
    }

?>  
</body>
<?php require 'footer.php'; ?>
</html>
