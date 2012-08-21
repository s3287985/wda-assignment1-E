<?php /* Smarty version Smarty-3.1.11, created on 2012-08-17 05:18:56
         compiled from "/home/stud/s3287985/.HTMLinfo/winestoreE/templates/controlPanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:532784564502b131b108ad8-07681331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31421cca7f16152cd65029cd09d97b29c0cd00ae' => 
    array (
      0 => '/home/stud/s3287985/.HTMLinfo/winestoreE/templates/controlPanel.tpl',
      1 => 1345144662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '532784564502b131b108ad8-07681331',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_502b131b1e1bc3_81366613',
  'variables' => 
  array (
    'current_view' => 0,
    'WEB_ROOT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502b131b1e1bc3_81366613')) {function content_502b131b1e1bc3_81366613($_smarty_tpl) {?><div id="controlPanel">
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
	
	<?php if ($_smarty_tpl->tpl_vars['current_view']->value=="history"){?>
		<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/result.php?submit=share">Share on Twitter</a>
	<?php }?>
</div><?php }} ?>