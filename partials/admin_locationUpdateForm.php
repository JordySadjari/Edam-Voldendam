<?php

$sql = 'SELECT * FROM plaats WHERE id_plaats = ' .$id;
$result = $mysqli->query($sql);

echo '<div class="body" style="margin-left: 75px;">';
foreach($result as $row) {
    echo'
        <form action="?action=locationUpdate" method="post">
    <span>Beschrijving: </span><input type="text" value="' . $row['beschrijving'] . '"name="beschrijving">
    <span>foto_url: </span><input type="text" value="' . $row['foto'] . '"name="foto">
    <input type="hidden" name="id" value="' . $id . '">
    <button type="submit" class="btn btn-success">Update</button>
    </form>
        ';
}
echo '</div>';
?>

