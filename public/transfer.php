<?php
session_start();
if (!empty($_FILES)) {
    $count = count($_FILES['fichier']['name']);

    $maxFileSize = 1000000;

    $extAuth = ['image/png', 'image/jpeg', 'image/jpg', 'image/gif'];

    for ($i = 0; $i < $count; $i++) {
        $mime = $_FILES['fichier']['type'][$i];
        
        if ($maxFileSize < $_FILES['fichier']['size'][$i]) {
            $errors = ["La taille maximale est dépassée"];
        } elseif (!in_array($mime, $extAuth)) {
            $errors = ["L'extension de votre fichier n'est pas autorisée"];
        } else {
            // on récupère l'extension, par exemple "pdf"
            $extension = '.' . pathinfo($_FILES['fichier']['name'][$i], PATHINFO_EXTENSION);

            $filename = 'image' . uniqid() . $extension;

            $uploadDir = 'img/';
            move_uploaded_file($_FILES['fichier']['tmp_name'][$i], $uploadDir . $filename);
        }
    }
}

header('Location:index.php');
