<div class="events_big">
	<h2>NÁSLEDUJÍCÍ KONCERTY</h2>
	<?php
		require('req/conn.php');
		$livetime = date("Y-m-d");
		$sql = "SELECT id, name, time, date, place, text FROM events WHERE date > '$livetime' ORDER BY date";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
    	// output data of each row
    		while($row = $result->fetch_assoc()) {
				$date = $row["date"];
				$formated =date_create($date);
        		echo "<div class='event_big'><p class='einfo'><strong>" . date_format($formated, "d. m. Y") . " " . $row["name"]. "</strong><br>" . $row["time"]. " " . $row["place"] . "</p><p class='notes'>" . $row["text"] . "</p></div>";
    		}
		} else {
    	echo "Žádné eventy";
		}
		$conn->close();
	
	?>
</div>