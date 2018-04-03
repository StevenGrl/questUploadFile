<?php

if(!empty($_POST)) {
    if (file_exists('img/' . $_POST['name'])) {
        unlink('img/' . $_POST['name']);
    }
}

header('Location:index.php');