<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>


<?php echo $this->Html->script('jquery-1.7.1.min.js'); ?>
<?php echo $this->Html->script('jquery-1.8.2.min.js'); ?>
<?php echo $this->Html->script('jquery.dataTables.yadcf.js'); ?>
<?php echo $this->Html->script('jquery.dataTables.min.js'); ?>
<?php echo $this->Html->script('jquery-ui.1.9.0.js'); ?>

<?php echo  $this->Html->css('jquery-ui.1.9.0.css');?>
<?php echo $this->Html->css('jquery.dataTables.yadcf.css');?>
<?php echo $this->Html->css('jquery.dataTables_themeroller.css');?>

	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo "CNAF-PORTAL"; ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('Blog.common.css', null, array('plugin' => false));
		echo $this->Html->css('Blog.common.css', null, array('plugin' => false));
		echo $this->Html->css('Blog.common.css', null, array('plugin' => false));
		echo $this->Html->css('Blog.common.css', null, array('plugin' => false));
		echo $this->Html->css('Blog.common.css', null, array('plugin' => false));
		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
