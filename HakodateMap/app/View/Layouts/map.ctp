<!DOCTYPE html>
<html lang="ja">
<head>
<?php echo $this->Html->charset(); ?>
<title>
<?php echo $title_for_layout; ?>
</title>
<?php
echo $this->Html->css ( 'cake.map' );
echo $scripts_for_layout;
?>
</head>
<body>
	<div id="site-box">
		<div id="header">** Header **</div>
		<div id="content"><?php echo $content_for_layout; ?></div>
		<div id="footer">** this is set. **</div>
	</div>
</body>
</html>