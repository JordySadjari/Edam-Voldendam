<?php

    $sql = 'SELECT * FROM vereniginge';
    $result = $mysqli->query($sql);

echo '<div class="body" style="margin-left: 75px;">';
    foreach($result as $row) {
        echo'
        <ul class="img-list">
        <li>
        <img src="' . $row['fotoVereniging'] . '" width="360" height="203" />
        <span class="text-content"><span>' . $row['naamVereniging'] . ' 
        <br>
        <a href="?action=organisationUpdateForm&id=' . $row["id"] . '"class="btn btn-succes">Update</a>
        <a href="?action=organisationDelete&id=' . $row["id"] . '"class="btn btn-danger">Delete</a>
        </span></span>
        </a>
        </li>
        </ul>
        
        ';
    }
echo '</div>';
?>





