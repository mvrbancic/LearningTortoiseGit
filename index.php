<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Title of the document</title>
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
		<section id="intro">
		
		</section>
		<section>
		
		</section>
		<aside>
		
		</aside>
		<footer>
		
		</footer>
	</body>

</html> 