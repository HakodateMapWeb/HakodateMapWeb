<!DOCTYPE html>
<html lang="ja">
<head>
<?php echo $this->Html->charset(); ?>
<title>
<?php echo $title_for_layout; ?>
</title>
<?php
echo $this->Html->css('cake.web');
echo $scripts_for_layout;
?>
</head>
<body>
	<div id="container" class="clearfix">
		<!-- <div id="header">** ここにタイトル？画像？ロゴ？ **</div> -->
		<div id="gnav">
			<ul>
				<li class="gnav01"><a href="./">TOP</a></li>
				<li class="gnav02"><a href="./about">ABOUT</a></li>
				<li class="gnav03"><a href="./courselist">COURSELIST</a></li>
				<li class="gnav04"><a href="../Map">MAP</a></li>
			</ul>
		</div>
		<div id="content">
		<?php echo $content_for_layout; ?>
		</div>
		<!-- <div id="footer">** this is test. **</div> -->
	</div>
</body>
</html>