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
	<div id="container">
		<!-- <div id="header">** ここにタイトル？画像？ロゴ？ **</div> -->
		<div id="gnav">
			<ul>
				<li class="gnav01"><a href="/cake/HakodateMapWeb/HakodateMap/Web/">TOP</a></li>
				<li class="gnav02"><a
					href="/cake/HakodateMapWeb/HakodateMap/Web/about">ABOUT</a></li>
				<li class="gnav03"><a
					href="/cake/HakodateMapWeb/HakodateMap/Web/courselist">COURSELIST</a></li>
				<li class="gnav04"><a href="/cake/HakodateMapWeb/HakodateMap/Map">MAP</a></li>
			</ul>
		</div>
		<div id="content">
		<?php echo $content_for_layout; ?>
		</div>
		<!-- <div id="footer">** this is test. **</div> -->
	</div>
</body>
</html>