<?php
	$sql = 'SELECT * 
			FROM plaats 
			INNER JOIN vereniginge 
			ON plaats.idVereniging=vereniginge.idVereniging 
			WHERE locatie = "'.$location.'"';

$result = $mysqli->query($sql);
while($row = mysqli_fetch_array($result));


?>
<?php foreach($result as $row){echo $row['foto'];} ?>
<!-- Header -->
            <header>
                <div class="container">
                    <div class="image" style="background: url('<?php echo $row['foto']?>') center;">
                        <div class="overlay">
                            <h1><?php echo $row['locatie'];?></h1>
                            <p><?php echo $row['beschrijving'];?></p>
                            <a href="#" class="btn">Evenementen</a>
                        </div>
                    </div>
                </div>
            </header>
    <!-- End Header -->

    <!-- Locaties -->
		<section id="locations">
			<div class="container">

			<aside>
				<div class="btn active" id="btn-all">Alles</div>
				<div class="btn" id="btn-cultuur">Cultuur</div>
				<div class="btn" id="btn-kunst">Kunst</div>
			</aside>

			<div class="thumbs">

                <?php foreach($result as $row){
                    echo '<div class="col-25 filter-' . $row['typeVereniging'] . '" style="background: url(' . $row['fotoVereniging'] . ')">';
					echo '<a href="#">';
					echo '<div class="overlay">';
					echo '<h3>' . $row['naamVereniging'] . '</h3>';
					echo '<p>' . $row['beschrijfingVereniging'] . '</p>';;
					echo '</div>';
					echo '</a>';
					echo '</div>';

                } ?>

				</div>



			<div class="pagination">
				<li>
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
				</li>
			</div>

			</div>
		</section>
	<!-- End Locaties -->


