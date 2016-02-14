<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Title of the document</title>
		<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="screen" />
		<script src="assets/js/myScript.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="assets/js/jQuery.js"></script>
	</head>

	<body>
		<header>
			<h1>Git training</h1>
		</header>
		<nav>
			<ul>
				<?php
					$nav = array( '0' => 'BLog', '1'=>'About', '2' => 'Archives', '3' => 'Contact');
					for($i = 0; $i<count($nav); $i++)
					{
						echo '<li><a href="#">'.$nav[$i].'</a></li>';
					}
				?>
			</ul>
		</nav>
		<section id="intro"">
			<header>
				<h2>Umjesto epiduralne Mamić će rodiljama vikati AJMOOO kako bi što lakše obavile porod</h2>
			</header>
			<p>Iz Petrove bolnice u Zagrebu stižu sjajne vijesti za sve buduće rodilje. Njima će na porodu od sada društvo praviti Zdravko Mamić. Radi se o programu ušteda u zdravstvu koje je novi ministar zdravlja Dario Nakić upravo predstavio. Donedavni izvršni dopredsjednik Dinama Zdravko Mamić dao je jučer ostavku na svoju funkciju u klubu, pa je slobodan za nove angažmane, a prvi će biti pilot projekt u Petrovoj bolnici gdje bi umjesto epiduralne injekcije, žene bile izložene mahnitom Mamićevom AJMOOOO kako bi što lakše i brže rodile.</p>
		</section>
		<section id="demo">
			<article>
				<header>
					<h2 id="flip">Zoran Mamić objavio da Zdravko postaje novi igrač Dinama</h2>
					<p id="panel">I ako je prije dva dana na konferenciji za medije objavio kako odlazi s funkcije izvršnog predsjednika Dinama, Zdravko Mamić vjerojatno neće postati samo najobičniji consigliere.

Zdravkova ljepša polovica - njegov brat Zoran, s novinarima je jutros podijelio vijest kako će Zdravko ubuduće biti član Dinamove udarne momčadi, i to kao igrač od kojeg se puno očekuje.

Zdravko je kao mladić igrao za juniore Dinama te u nižim županijskim ligama gdje nikad nije uspio ostaviti veći trag. Prije tridesetak godina Zdravko se proslavio izjavom nakon juniorske utakmice Dinama i Segeste kad je izjavio kako voli igrati na lijevom beku jer je ta pozicija jako blizu bijele linije. Osim toga, Zdravko je solidan zadnji vezni koji jako dobro blokira napredak i tranziciju bilo koga tko nije u njegovoj momčadi.

Dinamovi igrači su oduševljeni činjenicom da će Zdravko postati članom njihove svlačionice, a jedan od igrača je izjavio da jedva čeka tuširanje nakon treninga kako bi vidio koliki je taj ponos na koji Zdravko voli nabijati svoje neistomišljenike. Osim toga, i Zdravku će biti sada jednostavnije galamiti i istresati se na Dinamove igrače odmah na terenu, a ne da se mora iz svečane lože spuštati u svlačionicu.

Dodajmo još i to kako je Zoran Mamić otkrio da Zdravko vjerojatno neće nositi kapetansku traku Dinama jer je nju već nosio Arijan Ademi, pa stoga smatra da Dinamu ne treba još jedan dopingirani igrač na tako važnoj poziciji. </p>
				</header>
			</article>
		</section>
		<button type="button" onclick="myFunction()">Try it</button>
		<p>If you click on me, I will disappear.</p>
		<aside>
		
		</aside>
		<footer>
		
		</footer>
	</body>

</html> 