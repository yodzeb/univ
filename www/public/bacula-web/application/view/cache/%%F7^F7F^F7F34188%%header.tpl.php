<?php /* Smarty version 2.6.26, created on 2017-01-29 13:21:38
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'header.tpl', 22, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
  "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
<title>bacula-web</title>
<link rel="stylesheet" type="text/css" href="application/view/style/default.css">
<link rel="stylesheet" type="text/css" href="application/view/style/header.css">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
</head>
<body>

<div id="toplinks">
 <ul>
	<li> <a href="http://www.bacula-web.org/bugs" target="_blank">Bugs</a> </li>
	<li> <a href="http://www.bacula-web.org" target="_blank">About</a> </li>

	<!-- Condifitional catalog selection if more than 1 catalog is defined in the configuration -->
	<?php if ($this->_tpl_vars['catalog_nb'] > 1): ?>
	<li>
		<form method="post" action="index.php">
			Select catalog&nbsp;
			<?php echo smarty_function_html_options(array('name' => 'catalog_id','options' => $this->_tpl_vars['catalogs'],'selected' => $this->_tpl_vars['catalog_current_id'],'onchange' => "submit();"), $this);?>

		</form>
	</li>
	<?php endif; ?>
 </ul>
</div> <!-- end div toplinks -->

<!-- Header -->
<div id="header">
   <div class="app_name">Bacula-Web</div>
</div> <!-- end div header -->

<div class="app_version">Version 5.2.10</div>
<!-- End Header -->