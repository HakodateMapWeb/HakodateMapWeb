<html class="no-js"><!--<![endif]-->
    <head>

        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/elastislide.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
		<script src="js/modernizr.custom.17475.js"></script>
    </head>
<body>
<?php
$str = $spotList['1']['image'];
//echo "<img src= ";
//echo $str;
//echo ">";
?>

		<div class="fixed-bar">
					<!-- Elastislide Carousel -->
					<ul id="carousel" class="elastislide-list">
						<li><a href="#"><img src= <?php echo $str;?> width="163" height="163"　alt="image01" /></a></li>
						<li><a href="#"><img src= <?php echo $str;?> width="163" height="163"　alt="image02" /></a></li>
						<li><a href="#"><img src= <?php echo $str;?> width="163" height="163"　alt="image03" /></a></li>
						<li><a href="#"><img src=<?php echo $str;?>  width="163" height="163"alt="image04" /></a></li>
						<li><a href="#"><img src=<?php echo $str;?> width="163" height="163" alt="image05" /></a></li>
						<li><a href="#"><img src=<?php echo $str;?> width="163" height="163" alt="image06" /></a></li>
						<li><a href="#"><img src=<?php echo $str;?> width="163" height="163" alt="image07" /></a></li>
						<li><a href="#"><img src=<?php echo $str;?> width="163" height="163" alt="image08" /></a></li>
						<li><a href="#"><img src=<?php echo $str;?> width="163" height="163" alt="image09" /></a></li>
						<li><a href="#"><img src=<?php echo $str;?> width="163" height="163" alt="image10" /></a></li>
						<li><a href="#"><img src=<?php echo $str;?> width="163" height="163" alt="image11" /></a></li>
						<li><a href="#"><img src=<?php echo $str;?>　width="163" height="163" alt="image12" /></a></li>
						<li><a href="#"><img src=<?php echo $str;?>　width="163" height="163" alt="image13" /></a></li>
						<li><a href="#"><img src=<?php echo $str;?>　width="163" height="163" alt="image14" /></a></li>
						<li><a href="#"><img src=<?php echo $str;?>　width="163" height="163" alt="image15" /></a></li>
						<li><a href="#"><img src=<?php echo $str;?>　width="163" height="163" alt="image16" /></a></li>
						<li><a href="#"><img src=<?php echo $str;?>　width="163" height="163" alt="image17" /></a></li>
						<li><a href="#"><img src=<?php echo $str;?>　width="163" height="163" alt="image18" /></a></li>
						<li><a href="#"><img src=<?php echo $str;?>　width="163" height="163" alt="image19" /></a></li>
						<li><a href="#"><img src=<?php echo $str;?>　width="163" height="163" alt="image20" /></a></li>
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