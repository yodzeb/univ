<?php /* Smarty version 2.6.26, created on 2017-01-29 13:21:38
         compiled from joblogs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'joblogs.tpl', 6, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="nav">
  <ul>
    <li>
      <a class="home" href="index.php" title="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Back to the dashboard<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Dashboard<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
    </li>
    <li><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Job logs<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
  </ul>
</div>

<div class="main_center">
  <h4><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Job id<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <b><?php echo $this->_tpl_vars['jobid']; ?>
</b></h4>
  
  <div class="box">
	<table>
	  <tr>
		<td class="tbl_header"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Time<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td> 
		<td class="tbl_header"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
	  </tr>
	  <?php $_from = $this->_tpl_vars['joblogs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['log']):
?>
	  <tr>
		<td width="150" class="<?php echo $this->_tpl_vars['log']['class']; ?>
"><?php echo $this->_tpl_vars['log']['time']; ?>
</td>
		<td style="text-align: left" class="<?php echo $this->_tpl_vars['log']['class']; ?>
"><?php echo $this->_tpl_vars['log']['logtext']; ?>
</td>		
	  </tr>
	  <?php endforeach; endif; unset($_from); ?>
	</table>
  </div> <!-- end div class=box --> 
  

</div> <!-- end div class=main_center -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>