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
				<li class="gnav01"><a
					href="<?php echo $this->Html->url('/Home', true); ?>">HOME</a></li>
				<li class="gnav02"><a
					href="<?php echo $this->Html->url('/About', true); ?>">ABOUT</a></li>
				<li class="gnav03"><a
					href="<?php echo $this->Html->url('/CourseList', true); ?>">COURSELIST</a></li>
				<li class="gnav04"><a
					href="<?php echo $this->Html->url('/Map', true); ?>">MAP</a></li>
			</ul>
			<form method="post" action="./Map" name="search">
				<input type="text" name="spotName" placeholder="キーワード検索"
					class="text">
			</form>
		</div>
		<div id="content">
		<?php echo $content_for_layout; ?>
		</div>
		<!-- <div id="footer">** this is test. **</div> -->
	</div>
</body>
</html>