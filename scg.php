<?php
system('clear');
function banner()
{
	echo "\e[31;01m\e[5;01m=========================\e[0;01m\n";
	echo "\n";
	echo "SCRIPT DEFACE GENERATOR V.2 !\n";
	echo "\n";
	echo "\e[33;01mCoded By M3L0n_T ft. BKX-U0NH\n";
	echo "\n";
	echo "\e[36;01mCopyright @M3L0n_T | ".date('Y')."\n";
	echo "\n";
	echo "\e[31;01m========================\e[0;01m\e[37;01m\n\n";
}


echo banner();
sleep(2);
echo "NB:  Jika ingin Menggunakan Warna Bg Isilah \n Warna Dengan Bhs. Inggris dan \n Gambar Bg Tidak Usah Di Isi Begitupun Sebaliknya,\n Dan Juga Warna Text Menggunakan Bahasa Inggris. Trims\n";
sleep(5);
echo "\e[31;01m===============================\e[0;01m\n";
echo "
Saran :\n
- Ukuran Teks Nick : 20
- Ukuran Teks Kata : 4

Cara menulis Kata Kata :
- Gunakan <br> Jika ingin memberi enter
- GUNAKAN SYNTAX HTML PADA PEMBUATAN KATA KATA

-THANKS;
- M3L0n_T

===============================\n
";
echo "\n";
echo "\e[31;01mNick\e[0;01m : "; $nama = trim(fgets(STDIN));
sleep(1);
echo "\e[31;01mTitle\e[0;01m : "; $title = trim(fgets(STDIN));
sleep(1);
echo "\e[31;01mKata Kata\e[0;01m : "; $kata = trim(fgets(STDIN));
sleep(2);
echo "\e[31;01mWarna Background\e[0;01m : "; $bg = trim(fgets(STDIN));
sleep(1);
echo "\e[31;01mGambar Background\e[0;01m : "; $wall = trim(fgets(STDIN));
sleep(1);
echo "\e[31;01mwarna tulisan\e[0;01m : "; $text = trim(fgets(STDIN));
sleep(1);
echo "\e[31;01mUkuran tulisan Nick\e[0;01m : "; $uktextnick = trim(fgets(STDIN));
sleep(1);
echo "\e[31;01mUkuran tulisan Kata\e[0;01m : "; $uktextkata = trim(fgets(STDIN));
sleep(1);
echo "\e[31;01mKode Lagu Dari Doundcloud\e[0;01m : "; $kodelagu = trim(fgets(STDIN));
sleep(1);
echo "\e[31;01mTeam\e[0;01m : "; $team = trim(fgets(STDIN));
sleep(5);

echo "\e[34;01mWait.. Program Is Running...\n";

sleep(10);

echo "Generate Script...\n";


echo "===================================================\n\n";
sleep(5);
system('clear');

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link href="https://fonts.googleapis.com/css?family=Courier+Prime&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		body{
			background-color: <?php echo $bg;?>;
			background-image: url(<?php echo $wall;?>);
			color: <?php echo $text; ?>
  background-repeat: no-repeat;
  background-position: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
color: <?php echo $text;?>
}
</style>
<body>
<div id="main-bg"></div>
</body>
</html>
	</style>
<div class="container" align="center">
	<br><Br><br><br><br><br>
<!-- 	<div class="row"> -->
		<center>
			<font face="Courier Prime" size="<?php echo $uktextnick; ?>px"> Hacked By <?php echo $nama;?></font>
		</center>
<!--</div>-->

		<center>
			<font face="Courier Prime" size="<?php echo $uktextkata; ?>px"><?php echo $kata;?></font>
		</center>

<center>

	<font face="Courier Prime" size="4px"><i>Shoot :</i></font><br>
	<font face="Courier Prime" size="4px"><?php echo $team;?></font>
</center>
</div>
<!-- gausah DI APA APAIN! -->
<!-- <iframe width="0%" height="0" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?php //echo $kodelagu;?>&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe> -->


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

<?php

echo "\e[0;01mSILAHKAN COPY HASIL GENERATE SCRIPT DEFACE DIATAS :)\n";

echo "THX TELAH MENGGUNAKAN TOOLS AING :)";



?>