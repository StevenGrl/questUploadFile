<?php 
session_start();
$_SESSION['page'] = 'upload';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Upload File quest - Steven Grillon</title>
</head>
<body>
<?php require 'navbar.php'; ?>
<div class="container">
    <form action="transfer.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
        <input type="file" name="fichier[]" multiple="multiple" />
        <input type="submit" value="Envoyer les fichiers" />
    </form>
</div>
</body>
<?php require 'footer.php'; ?>
</html>