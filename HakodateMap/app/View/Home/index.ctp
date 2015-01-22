<html class="no-js">
    <head>
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="js/jquery.bxslider.js"></script>
	<style type = "text/css">
	html,/* body, /*div,*/ span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd,/* ol, ul, li,*/
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	font-size: 100%;
	vertical-align: baseline;
	background: transparent;
}
/*body {
	line-height: 1;
}/*
ol, ul {
	list-style: none;
}*/
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
 
/* remember to define focus styles! */
:focus {
	outline: 0;
}
 
/* remember to highlight inserts somehow! */
ins {
	text-decoration: none;
}
del {
	text-decoration: line-through;
}
 
/* tables still need 'cellspacing=&quot;0&quot;' in the markup */
table {
	border-collapse: collapse;
	border-spacing: 0;
}
	</style>

	<style type = "text/css">
div.gazo-box {
margin-left:60px;
margin-top: 30px;
float: left;
}]
</style>

	</head>
<body>

<?php
/*$eatList[$i]
$viewList
$playList
$shopList*/
//var_dump($shopList);
?>
<!--<div style = "background: url(http://www.hakobura.jp/nightview/images/nightview_01.gif);">-->
<BR>
	<p align="center">
<img src = "img/banar.png"/>
</p>

<div class="gazo-box">
<h1>各カテゴリのおすすめスポット</h1>
<ul class="bxslider">
	<?php
			//$count = count($viewList);
					$rand =rand(1, 8);
					echo "<li><img src = \"" .  $eatList[$rand]['image'] ."\" title=\"食べるカテゴリ：". $eatList[$rand]['spotName'] ."\"width= \"700\" height =\"400\"\"/></a></li>";
					echo "<li><img src = \"" . $viewList[$rand]['image'] ."\" title=\"見るカテゴリ：" . $viewList[$rand]['spotName'] ."\"width= \"700\" height =\"400\"\"/></a></li>";
					echo "<li><img src = \"" . $playList[$rand]['image'] ."\" title=\"遊ぶカテゴリ：" . $playList[$rand]['spotName'] ."\"width= \"700\" height =\"400\"\"/></a></li>";
					echo "<li><img src = \"" . $shopList[$rand]['image'] ."\" title=\"買い物カテゴリ：" . $shopList[$rand]['spotName'] ."\"width= \"700\" height =\"400\"\"/></a></li>";
			?>
			</ul>

		</div>
<div class="gazo-box">
<img  src = "img/mozi.png" widht = "40" height= "200"/>
</div>



<script type="text/javascript">
$('.bxslider').bxSlider({
  captions: true
});</script>
</div>

</body>
</html>