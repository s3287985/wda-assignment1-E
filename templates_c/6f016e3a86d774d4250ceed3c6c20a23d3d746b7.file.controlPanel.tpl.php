<?php /* Smarty version Smarty-3.1.11, created on 2012-08-15 12:46:58
         compiled from "/home/stud/s3287985/.HTMLinfo/winestoreD/templates/controlPanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:986702643502b0a42dd7514-38864201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f016e3a86d774d4250ceed3c6c20a23d3d746b7' => 
    array (
      0 => '/home/stud/s3287985/.HTMLinfo/winestoreD/templates/controlPanel.tpl',
      1 => 1344998640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '986702643502b0a42dd7514-38864201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_502b0a42e9d537_00041190',
  'variables' => 
  array (
    'current_view' => 0,
    'WEB_ROOT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502b0a42e9d537_00041190')) {function content_502b0a42e9d537_00041190($_smarty_tpl) {?><div id="controlPanel">
	<?php if ($_smarty_tpl->tpl_vars['current_view']->value!="search"){?>
		<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/search.php">Search</a>
	<?php }?>
	<?php if ($_SESSION['session']==true){?>
		<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/result.php?submit=history">History</a>
		<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/search.php?session=end">Logout</a>
	<?php }else{ ?>
		<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/search.php?session=start">Login</a>
	<?php }?>
</div><?php }} ?>