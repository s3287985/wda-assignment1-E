<?php
require_once('smartySetup.php');
require_once('db.php');
require_once('connectPDO.php');
require_once('class.WineSearchController.php');
require_once('sessionHandler.php');
require_once('twitter.php');

$smarty->assign('title','resultView');
$smarty->assign('current_view','result');
$smarty->assign('style_sheet_link','connect-style.css');

$sessionHandler = new SessionHandler();
$sessionHandler->onLoad();

if($_GET['submit']=='search')
{
	$wineSearcher = new wineSearchController($dbh);
	$result = $wineSearcher->search($_GET);
	if(count($result)>0){
		$smarty->assign('result_headers', array_keys($result[0]));
		$smarty->assign('results', $result);
	}
	else
	{
		$smarty->assign('result_headers',array('Sorry bro,'));
		$smarty->assign('results',array(array('Couldn\'t found the thing you were searching for! Better check yo input or look elsewhere!')));
	}
}
else if($_GET['submit']=='history')
{
	$smarty->assign('current_view','history');
	$smarty->assign('result_headers',array('Wine(s) found in this session:'));
		$smarty->assign('results',$_SESSION['history']);
}
else if($_GET['submit']=='share')
{
	shareWineList($_SESSION['history']);	
}
else if($_GET['submit']=='')
{
	$smarty->assign('result_headers',array('Hola, amigo! Cómo está??'));
	$smarty->assign('results',array(array('It appears that you end up on this page by mistake. If you are looking for an item in our wine store, please click the button on the left of this message!')));
}




$smarty->display('resultView.tpl');
?>