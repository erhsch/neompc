<?php /* Smarty version 2.6.9, created on 2009-07-01 08:31:00
         compiled from default/browse.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'default/browse.html', 6, false),)), $this); ?>

			<ul id="crumb_trail">
				<li><a href="<?php echo $this->_tpl_vars['home_link']; ?>
"><img src="templates/<?php echo $this->_tpl_vars['template']; ?>
/images/home.gif" alt="Home" /></a></li>

				<?php $_from = $this->_tpl_vars['dir_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dir_list_item']):
?>
					<li>&bull; <a href="index.php?browse=<?php echo $this->_tpl_vars['dir_list_item']['path']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['dir_list_item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>

			</ul>

			<div id="buttons"><a href="index.php?action=playall"><img src="templates/<?php echo $this->_tpl_vars['template']; ?>
/images/playall.gif" /></a> <a href="index.php?action=addall"><img src="templates/<?php echo $this->_tpl_vars['template']; ?>
/images/addall.gif" /></a></div>

			<ul class="list">
				<?php $_from = $this->_tpl_vars['browselist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['browselist_item']):
?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/browselist_item.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endforeach; endif; unset($_from); ?>
			</ul>