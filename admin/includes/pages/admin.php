<?php
if(isset($_SESSION['username']) && $_SESSION['username'] == "admin") {
}
else {
	header("Location: bigbityrock.cz");
}
?>
	<form id="logoutb" action="req/logout.php" method="post"><input name="logout" type="submit" value="Odhlásit"></form>
<div class="addEvent">
<h3>Přidání události</h3>
	<form action="req/eadd.php" method="post">
		<input name="ename" type="text" placeholder="NAME" required>
		<input name="time" type="text" placeholder="TIME" required>
		<input name="date" type="date" placeholder="DATUM" required>
		<input name="place" type="text" placeholder="Místo" required>
		<!--<input name="text" type="textarea" placeholder="Poznámky">-->
		<textarea name="text" rows="4" cols="50"></textarea>
		<input name="submit" type="submit" value="Přidat">
	</form>
</div>
<div class="remEvent">
	<h3>Události</h3>
	<table>
		<tr>
			<th>Událost</th>
			<th>Místo</th>
			<th>Datum</th>
			<th>Akce</th>
		</tr>
		<?php
		require('req/conn.php');
		$sql = "SELECT id, name, time, date, place FROM events ORDER BY date";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
    	// output data of each row
    		while($row = $result->fetch_assoc()) {
				$date = $row["date"];
				$formated =date_create($date);
				$idofe = $row["id"];
				$idofed = $row["id"];
        		echo "<tr><td>" . $row["name"] . "</td><td>" . $row["place"]. "</td><td>" . date_format($formated, "d. m. Y") . "</td><td><form method='post' action='req/edel.php'><input type='hidden' value='$idofe' name='d'><input type='submit' name='del$idofe' value='Smazat'></form><form method='post' action='#'><input type='hidden' value='$idofed' name='e'><input type='submit' name='edit$idofed' value='Upravit'></form></tr>";
    		}
		} else {
    	echo "Žádné eventy";
		}
		$conn->close();
	?>
	</table>
</div>
<div class="editEvent">
	<h3>Upravit událost</h3>
	<table>
		<tr>
			<th>Událost</th>
			<th>Datum</th>
			<th>Místo</th>
			<th>Čas</th>
			<th>Uložit</th>
		</tr>
		<?php
		if(isset($_POST['e'])){
			$editevent = $_POST['e'];
			
			require('req/conn.php');
			$sql = "SELECT id, name, time, date, place FROM events WHERE id=$editevent";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
    		// output data of each row
    			while($row = $result->fetch_assoc()) {
					$date = $row["date"];
					$formated =date_create($date);
					$idofed = $row["id"];
					
					$editname=$row["name"];
					$editdate=$row["date"];
					$editplace=$row["place"];
					$edittime=$row["time"];
					
        			echo "<form method='post' action='#'><tr><td><input type='text' name='editname' value='$editname'></td>
					<td><input type='date' name='editdate' value='$editdate'></td>
					<td><input type='text' name='editplace' value='$editplace'></td>
					<td><input type='text' name='edittime' value='$edittime'></td>
					<td><input type='hidden' name='editidevent' value='$idofed'><input type='submit' name='okedit' value='Uložit'></td>
					<form>
					
					</tr>";
    			}
			} else {
    		echo "Žádné eventy";
			}
		$conn->close();
			
		}
		if (isset($_POST['okedit'])){
			
			require('req/conn.php');

			$editedname = $_POST['editname'];
			$jebanychuj = $_POST['editidevent'];

			$editedtime = $_POST['edittime'];
			$editeddate = $_POST['editdate'];
			$editedf =date_create($date);
			$editedfo = date_format($editedf, "YYYY-MM-DD");
			$editedplace = $_POST['editplace'];
		$sql = "UPDATE events SET name='$editedname', time='$editedtime', place='$editedplace', date='$editeddate' WHERE id=$jebanychuj";

				if ($conn->query($sql) === TRUE) {
    	echo "Událost úspěšně upravena <a href='http://bigbityrock.cz/admin/'>Klikni pro projevení změn</a>";
					
				} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
				}

				$conn->close();
			
		}
	?>
	</table>
</div>