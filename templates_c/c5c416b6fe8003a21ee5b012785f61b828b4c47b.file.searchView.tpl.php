<?php /* Smarty version Smarty-3.1.11, created on 2012-08-15 12:32:34
         compiled from "/home/stud/s3287985/.HTMLinfo/winestoreD/templates/searchView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1114807109502b01fd4c9064-77428181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5c416b6fe8003a21ee5b012785f61b828b4c47b' => 
    array (
      0 => '/home/stud/s3287985/.HTMLinfo/winestoreD/templates/searchView.tpl',
      1 => 1344995350,
      2 => 'file',
    ),
    '70f134545fcdd3e116e6c82f7aefc858fc2158e9' => 
    array (
      0 => '/home/stud/s3287985/.HTMLinfo/winestoreD/templates/base.tpl',
      1 => 1344997944,
      2 => 'file',
    ),
    'ce16cf15b9fb8eb1f6a22ab046e267c10d89b1d4' => 
    array (
      0 => '/home/stud/s3287985/.HTMLinfo/winestoreD/templates/searchPanel.tpl',
      1 => 1344995350,
      2 => 'file',
    ),
    '5508e3622d77b1e0eaf5a535aac5ae6c7355412c' => 
    array (
      0 => '/home/stud/s3287985/.HTMLinfo/winestoreD/templates/resultPanel.tpl',
      1 => 1344995350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1114807109502b01fd4c9064-77428181',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_502b01fdb89a09_02656067',
  'variables' => 
  array (
    'title' => 0,
    'style_sheet_link' => 0,
    'current_view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502b01fdb89a09_02656067')) {function content_502b01fdb89a09_02656067($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
    <meta name="description" content="winestore result" />  
    <meta name="keywords" content="This, Is, The, Wine, Store, 	" />  
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>  
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style_sheet_link']->value;?>
" type="text/css"/>  
</head>
<body>
	<div id="wrapper">
		<div id="left-pane">
			<div id="title">
				<div id="pageTitle"> WineStore</div>
				<div id="viewTitle"> current view: <?php echo $_smarty_tpl->tpl_vars['current_view']->value;?>
</div>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ("controlPanel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			
	<?php /*  Call merged included template "searchPanel.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("searchPanel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1114807109502b01fd4c9064-77428181');
content_502b0a427fd7d9_68912206($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "searchPanel.tpl" */?> 

		</div>
		<div id="right-pane">
			
	<?php /*  Call merged included template "resultPanel.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("resultPanel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1114807109502b01fd4c9064-77428181');
content_502b0a42c158d9_56330866($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "resultPanel.tpl" */?>

		</div>
		<div class="clear">
		</div>
	</div>
</body><?php }} ?><?php /* Smarty version Smarty-3.1.11, created on 2012-08-15 12:32:34
         compiled from "/home/stud/s3287985/.HTMLinfo/winestoreD/templates/searchPanel.tpl" */ ?>
<?php if ($_valid && !is_callable('content_502b0a427fd7d9_68912206')) {function content_502b0a427fd7d9_68912206($_smarty_tpl) {?><div id="wine_search">
		<form method="GET" action="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" >
<div class="form_field">
	<span >Wine name:</span>
	<input type = "text" value="<?php echo $_GET['wineName'];?>
" name="wineName">
</div>
<div class="form_field">
	<span >Winery name:</span>
	<input type = "text" value="<?php echo $_GET['wineryName'];?>
" name="wineryName">
</div>
<div class="form_field">
	<span >Region: </span>
	<select name="region">
	<?php  $_smarty_tpl->tpl_vars['region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['region']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['regions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['region']->key => $_smarty_tpl->tpl_vars['region']->value){
$_smarty_tpl->tpl_vars['region']->_loop = true;
?>
		<option value = "<?php echo $_smarty_tpl->tpl_vars['region']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['region']->value==$_GET['region']){?>selected = "selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['region']->value;?>
</option>
	<?php } ?>
	</select>
</div>
<div class="form_field">
	<span >Grape Variety: </span>
	<select name="variety">
		<?php  $_smarty_tpl->tpl_vars['variety'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variety']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['varieties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variety']->key => $_smarty_tpl->tpl_vars['variety']->value){
$_smarty_tpl->tpl_vars['variety']->_loop = true;
?>
			<option value = "<?php echo $_smarty_tpl->tpl_vars['variety']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['variety']->value==$_GET['variety']){?>selected = selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['variety']->value;?>
</option>
		<?php } ?>
	</select>
</div>
<div class="form_field">
	<span >Year: </span>
	<span >from </span>
	<select name="minYear">
		<?php $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['year']->step = 1;$_smarty_tpl->tpl_vars['year']->total = (int)ceil(($_smarty_tpl->tpl_vars['year']->step > 0 ? $_smarty_tpl->tpl_vars['maxYear']->value+1 - ($_smarty_tpl->tpl_vars['minYear']->value) : $_smarty_tpl->tpl_vars['minYear']->value-($_smarty_tpl->tpl_vars['maxYear']->value)+1)/abs($_smarty_tpl->tpl_vars['year']->step));
if ($_smarty_tpl->tpl_vars['year']->total > 0){
for ($_smarty_tpl->tpl_vars['year']->value = $_smarty_tpl->tpl_vars['minYear']->value, $_smarty_tpl->tpl_vars['year']->iteration = 1;$_smarty_tpl->tpl_vars['year']->iteration <= $_smarty_tpl->tpl_vars['year']->total;$_smarty_tpl->tpl_vars['year']->value += $_smarty_tpl->tpl_vars['year']->step, $_smarty_tpl->tpl_vars['year']->iteration++){
$_smarty_tpl->tpl_vars['year']->first = $_smarty_tpl->tpl_vars['year']->iteration == 1;$_smarty_tpl->tpl_vars['year']->last = $_smarty_tpl->tpl_vars['year']->iteration == $_smarty_tpl->tpl_vars['year']->total;?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
"
			<?php if ($_smarty_tpl->tpl_vars['year']->value==$_GET['minYear']){?>selected = selected
			<?php }elseif($_smarty_tpl->tpl_vars['year']->value==$_smarty_tpl->tpl_vars['minYear']->value&&$_GET['minYear']==''){?> selected = selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
		<?php }} ?>
	</select>
	<span > to </span>
	<select name="maxYear">
		<?php $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['year']->step = 1;$_smarty_tpl->tpl_vars['year']->total = (int)ceil(($_smarty_tpl->tpl_vars['year']->step > 0 ? $_smarty_tpl->tpl_vars['maxYear']->value+1 - ($_smarty_tpl->tpl_vars['minYear']->value) : $_smarty_tpl->tpl_vars['minYear']->value-($_smarty_tpl->tpl_vars['maxYear']->value)+1)/abs($_smarty_tpl->tpl_vars['year']->step));
if ($_smarty_tpl->tpl_vars['year']->total > 0){
for ($_smarty_tpl->tpl_vars['year']->value = $_smarty_tpl->tpl_vars['minYear']->value, $_smarty_tpl->tpl_vars['year']->iteration = 1;$_smarty_tpl->tpl_vars['year']->iteration <= $_smarty_tpl->tpl_vars['year']->total;$_smarty_tpl->tpl_vars['year']->value += $_smarty_tpl->tpl_vars['year']->step, $_smarty_tpl->tpl_vars['year']->iteration++){
$_smarty_tpl->tpl_vars['year']->first = $_smarty_tpl->tpl_vars['year']->iteration == 1;$_smarty_tpl->tpl_vars['year']->last = $_smarty_tpl->tpl_vars['year']->iteration == $_smarty_tpl->tpl_vars['year']->total;?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
"
			<?php if ($_smarty_tpl->tpl_vars['year']->value==$_GET['maxYear']){?>selected = selected
			<?php }elseif($_smarty_tpl->tpl_vars['year']->value==$_smarty_tpl->tpl_vars['maxYear']->value&&$_GET['maxYear']==''){?> selected = selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
		<?php }} ?>
	</select>
</div>
<div class="form_field">
	<span >Min stock: </span>
	<input type = "text" value="<?php echo $_GET['stock'];?>
" name="stock">
</div>
<div class="form_field">
	<span >Min ordered: </span>
	<input type = "text" value="<?php echo $_GET['ordered'];?>
" name="ordered">
</div>
<span >Price</span>
<div class="form_field">
	<span >from: </span>
	<input type = "text" value="<?php echo $_GET['minPrice'];?>
" name="minPrice">
</div>
<div class="form_field">
	<span >to: </span>
	<input type = "text" value="<?php echo $_GET['maxPrice'];?>
" name="maxPrice">
</div>
<div class="form_field">
	<input type = "submit" value="search" name="submit" class="button"/>
</div>
</form>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.11, created on 2012-08-15 12:32:34
         compiled from "/home/stud/s3287985/.HTMLinfo/winestoreD/templates/resultPanel.tpl" */ ?>
<?php if ($_valid && !is_callable('content_502b0a42c158d9_56330866')) {function content_502b0a42c158d9_56330866($_smarty_tpl) {?><table class="search_result">
	<tr>
		<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result_headers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
			<th><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</th>
		<?php } ?>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<tr>
			<?php  $_smarty_tpl->tpl_vars['cell'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cell']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cell']->key => $_smarty_tpl->tpl_vars['cell']->value){
$_smarty_tpl->tpl_vars['cell']->_loop = true;
?>
				<td>
					<?php echo $_smarty_tpl->tpl_vars['cell']->value;?>

				</td>
			<?php } ?>
		</tr>
	<?php } ?>
</table><?php }} ?>