<!DOCTYPE html>
<html lang="ja">
<head>
<?php echo $this->Html->charset(); ?>
<title>
<?php echo $title_for_layout; ?>
</title>
<?php
echo $this->Html->css ( 'cake.web' );
echo $scripts_for_layout;
?>

</head>
<body>
	<div id="container" class="clearfix">
		<div id="gnav">
			<img src="" alt="">
			<ul>
				<li class="gnav01"><a href="../HakodateMap/Home">HOME</a></li>
				<li class="gnav02"><a href="./About">ABOUT</a></li>
				<li class="gnav03"><a href="../HakodateMap/CourseList">COURSELIST</a></li>
				<li class="gnav04"><a href="../HakodateMap/Map">MAP</a></li>
			</ul>
			<form method="post" action="./Map" name="search">
				<input type="text" name="spotName" class="text"> <input
					type="submit" value="検索" class="submit"> <SELECT name="category">
					<OPTION value="0">カテゴリ</OPTION>
					<OPTION value="イベント">イベント</OPTION>
					<OPTION value="食べる">食べる</OPTION>
					<OPTION value="見る">見る</OPTION>
					<OPTION value="遊ぶ">遊ぶ</OPTION>
					<OPTION value="買う">買う</OPTION>
					<OPTION value="温泉">温泉</OPTION>
				</SELECT>
			</form>
		</div>
		<div id="content">
		<?php echo $content_for_layout; ?>
		</div>
		<!-- <div id="footer">** this is test. **</div> -->
	</div>
</body>
</html>