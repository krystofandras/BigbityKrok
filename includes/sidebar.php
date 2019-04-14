<div class="events_small widget">
	<h3>Následující koncerty</h3>
	<?php
		require('req/conn.php');
		$livetime = date("Y-m-d");
		$sql = "SELECT id, name, time, date, place FROM events WHERE date > '$livetime' ORDER BY date LIMIT 3";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
    	// output data of each row
    		while($row = $result->fetch_assoc()) {
				$date = $row["date"];
				$formated =date_create($date);
        		echo "<div class='event_small'><p><strong>" . date_format($formated, "d. m. Y") . "</strong> " . $row["name"]. "<br>" . $row["time"]. " " . $row["place"] . "</p></div>";
    		}
		} else {
    	echo "Žádné eventy";
		}
		$conn->close();
	
	?>
</div>
<div class="fbwidget widget">
	<h3>Facebook</h3>
	<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbigbityrock%2F&tabs&width=337&height=162&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1276819872387545" width="100%" height="160" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
</div>
<div class="widget video">
<h3>Video</h3>
	<iframe width="100%" height="auto" src="https://www.youtube.com/embed/dG4cz0t7T0M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="partners widget">
	<h3>Partneři</h3>
	<div class="partners_box">
		<a target="_blank" href="https://nexx.cz"><div class="partner p1"></div></a>
		<a target="_blank" href="http://gtnet.cz"><div class="partner p2"></div></a>
		<!--<a target="_blank" href="https://www.obec-kostelec.cz/"><div class="partner p3"></div></a>-->
		<a target="_blank" href="http://www.jmtisk.cz/"><div class="partner p4"></div></a>
		<a target="_blank" href="http://www.lmsystemcz.cz/"><div class="partner p5"></div></a>
	</div>
</div>
<div class="widget donate">
	<div style="font-size:16px;margin:0 auto;" class="blockchain-btn"
     data-address="132kccRDDpCPZmAZufHgi5JZtv3wrpXF7z"
     data-shared="false">
    <div style="width:257px;margin:auto;cursor:pointer" class="blockchain stage-begin">
        <img src="http://bigbityrock.cz/img/donate.png"/>
    </div>
    <div class="blockchain stage-loading" style="text-align:center">
    </div>
    <div class="blockchain stage-ready">
         <p align="center">Podpořte nás zasláním BTC na adresu: <b>[[address]]</b></p>
         <p align="center" class="qr-code"></p>
    </div>
    <div class="blockchain stage-paid">
         Příspěvek <b>[[value]] BTC</b> přijat. Děkujeme.
    </div>
    <div class="blockchain stage-error">
        <font color="red">[[error]]</font>
    </div>
</div>
</div>