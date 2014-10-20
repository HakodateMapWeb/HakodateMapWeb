<!DOCTYPE html>
<html lang="ja">
<head>
<?php echo $this->Html->charset(); ?>
<title>
<?php echo $title_for_layout; ?>
</title>
<?php
echo $this->Html->css ('cake.web');
echo $scripts_for_layout;
?>
</head>
<body>
	<div id="container">
		<div id="header">** ここにタイトル？画像？ロゴ？ **</div>
		<!-- グローバルナビゲーション部分 -->
		<div id="gnav">
		<ul>
		<li class="gnav01"><a href="/cake/HakodateMapWeb/HakodateMap/Web/home">ホーム（仮）</a></li>
		<li class="gnav02"><a href="/cake/HakodateMapWeb/HakodateMap/Web/about">はこだてMap+について（仮）</a></li>
		<li class="gnav03"><a href="/cake/HakodateMapWeb/HakodateMap/Web/courselist"class="selected">コースリスト（仮）</a></li>
		<li class="gnav04"><a href="#">マップ（仮）</a></li>
		</ul>
		</div><!-- /gnav -->
		<div id="content">
		<?php echo $content_for_layout; ?>
		</div>
		<div id="footer">** this is test. **</div>
	</div>
</body>
</html>