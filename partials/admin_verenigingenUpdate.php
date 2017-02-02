<?php

if ( !empty($_POST)) {

    $name = $_POST['naam'];
    $beschrijving = $_POST['beschrijving'];
    $foto = $_POST['foto'];
    $id = $_POST['id'];

}

$sql = 'UPDATE vereniginge
        SET naamVereniging="' . $name . '", beschrijfingVereniging="' . $beschrijving . '", fotoVereniging="' . $foto
    . '"
        WHERE id=' . $id . '';

if ($mysqli->query($sql) === TRUE) {
    echo "<br>update succesvol</br>";

    //header("Location: ../index.php");
} else {
    echo "<br>Error: " . $sql . "<br>" . $mysqli->error;
}
?>