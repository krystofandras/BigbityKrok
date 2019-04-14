<div class="mobilemenu">
	<a id="bar" href="javascript:showmenu()"><i class="fas fa-bars"></i></a>
	<div class="mobilemenudown">
		<a href="index" <?php if( $mypage == 'index' || is_null($mypage)) echo 'class="active"'?>>ÚVOD</a>
		<a href="koncerty" <?php if( $mypage == 'koncerty') echo 'class="active"'?>>KDE HRAJEME</a>
		<a href="band" <?php if( $mypage == 'band') echo 'class="active"'?>>ČLENOVÉ</a>
		<a href="fotogalerie" <?php if( $mypage == 'fotogalerie') echo 'class="active"'?>>FOTOGALERIE</a>
		<a href="kontakt" <?php if( $mypage == 'kontakt') echo 'class="active"'?>>KONTAKT</a>
		<a href="#" <?php if( $mypage == 'others') echo 'class="active"'?>>OSTATNÍ</a>
	</div>
</div>
<div class="menu">
	<a href="index" <?php if( $mypage == 'index' || is_null($mypage)) echo 'class="active"'?>>ÚVOD</a>
	<a href="koncerty" <?php if( $mypage == 'koncerty') echo 'class="active"'?>>KDE HRAJEME</a>
	<a href="band" <?php if( $mypage == 'band') echo 'class="active"'?>>ČLENOVÉ</a>
	<a href="fotogalerie" <?php if( $mypage == 'fotogalerie') echo 'class="active"'?>>FOTOGALERIE</a>
	<a href="kontakt" <?php if( $mypage == 'kontakt') echo 'class="active"'?>>KONTAKT</a>
	<a href="#" <?php if( $mypage == 'others') echo 'class="active"'?>>OSTATNÍ</a>
</div>