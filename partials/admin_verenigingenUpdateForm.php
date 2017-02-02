<?php

$sql = 'SELECT * FROM vereniginge WHERE id = ' .$id;
$result = $mysqli->query($sql);

echo '<div class="body" style="margin-left: 75px;">';
foreach($result as $row) {
    echo'
        <form action="?action=organisationUpdate" method="post">
    <span>Vereniging naam: </span><input type="text" value="' . $row['naamVereniging'] . '" name="naam">
    <span>Beschrijving vereniging: </span><input type="text" value="' . $row['beschrijfingVereniging'] . '"name="beschrijving">
    <span>Vereniging foto_url: </span><input type="text" value="' . $row['fotoVereniging'] . '"name="foto">
    <input type="hidden" name="id" value="' . $id . '">
    <button type="submit" class="btn btn-success">Update</button>
    </form>
        ';
}
echo '</div>';
?>

