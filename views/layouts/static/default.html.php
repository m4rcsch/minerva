<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2010, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->html->charset('UTF-8');?>
	<title>Minerva > <?php echo $this->title(); ?></title>
	<?php echo $this->html->style(array('lithium', '/minerva/css/minerva')); ?>
	<?php $this->html->script(array('https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js'), array('inline' => false)); ?>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
		
	<?php
		echo $this->scripts();
		echo $this->styles();
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>
				<a href="/minerva">Minerva</a>
			</h1>
		</div>
		<div id="content">
			<?php echo $this->content(); ?>
		</div>
		
	<div class="footer">
		Powered by <?php echo $this->html->link('Lithium', 'http://li3.rad-dev.org'); ?>.
	</div>
	<?=$this->minervaHtml->flash(); ?>
	<?=$this->minervaSocial->facebook_init(); ?>
	<!-- layout template: /app/libraries/minerva/views/layouts/static/default.html.php -->
</body>
</html>