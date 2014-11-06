<html class="no-js"><!--<![endif]-->
    <head>

        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/elastislide.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
		<script src="js/modernizr.custom.17475.js"></script>
    </head>
<body>



		<div class="fixed-bar">
					<!-- Elastislide Carousel -->
			<ul id="carousel" class="elastislide-list">
			<?php
				for ($i = 1; $i <= 10; $i++) {
					$str = $spotList[$i]['image'];
					echo "<li><a href= \"#\">";
					echo "<img src = \"";
 					echo $str;
 					echo "\"width=\"163\" height=\"163\" alt=\"image";
 					echo $i;
 					echo "\"/>";
 					echo "</a></li>";
				}
			?>
			</ul>

				</div>
			</div>
		</div>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquerypp.custom.js"></script>
		<script type="text/javascript" src="js/jquery.elastislide.js"></script>
		<script type="text/javascript">
			
		
			$( '#carousel' ).elastislide( {
				minItems : 2
			} );
		</script>
</body>
</html>