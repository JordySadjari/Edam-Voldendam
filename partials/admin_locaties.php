<?php
$sql = 'SELECT * FROM plaats';
$result = $mysqli->query($sql);

echo '<div class="body" style="margin-left: 75px;">';
foreach($result as $row) {
    echo'
        <ul class="img-list">
        <li>
        <img src="' . $row['foto'] . '" width="360" height="203" />
        <span class="text-content"><span>' . $row['locatie'] . ' 
        <br>
        <a href="?action=locationUpdateForm&id=' . $row["id_plaats"] . '"class="btn btn-succes">Update</a>
        </span></span>
        </a>
        </li>
        </ul>
        
        ';
}
echo '</div>';