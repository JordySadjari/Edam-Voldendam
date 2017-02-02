<?php

if ( !empty($_POST)) {

    $name = $_POST['naam'];
    $beschrijving = $_POST['beschrijving'];
    $foto = $_POST['foto'];
    $id = $_POST['id'];

}

$sql = 'UPDATE plaats
        SET beschrijving="' . $beschrijving . '", foto="' . $foto . '"
        WHERE id_plaats=' . $id . '';

if ($mysqli->query($sql) === TRUE) {
    echo "<br>update succesvol</br>";

    //header("Location: ../index.php");
} else {
    echo "<br>Error: " . $sql . "<br>" . $mysqli->error;
}
echo $sql;
?>