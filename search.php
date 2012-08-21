<?php
require_once('smartySetup.php');
require_once('db.php');
require_once('connectPDO.php');
require_once('validate.php');
require_once('sessionHandler.php');
$smarty->assign('title','searchView');
$smarty->assign('current_view','search');
$smarty->assign('style_sheet_link','connect-style.css');


$sessionHandler = new SessionHandler();
$sessionHandler->onLoad();


$wineSearchValidators = new ValidatorGroup();
$yearRangeValidator = new ComparisonValidator("minYear","<=","maxYear");
$stockValidator = new NumberValidator("stock");
$orderedValidator = new NumberValidator("ordered");
$minPriceValidator = new NumberValidator("minPrice");
$maxPriceValidator = new NumberValidator("maxPrice");
$priceRangeValidator = new ComparisonValidator("minPrice","<=","maxPrice");

$wineSearchValidators->addValidator($yearRangeValidator);
$wineSearchValidators->addValidator($stockValidator);
$wineSearchValidators->addValidator($orderedValidator);
$wineSearchValidators->addValidator($minPriceValidator);
$wineSearchValidators->addValidator($maxPriceValidator);
$wineSearchValidators->addValidator($priceRangeValidator);
if($_GET['submit']=='search')
{
	if(!$wineSearchValidators->validate())
	{
		$smarty->assign('result_headers', array("Input Error: "));
		$smarty->assign('results', $wineSearchValidators->messages);
	}
	else
	{
		$url = WEB_ROOT.'/result.php?';
		$variables = $_GET;
		foreach($_GET as $key=>$value)
		{
			$url =$url.'&'.$key.'='.$value;
		}
		header( 'Location: '.$url) ;
	}
}

$result = $dbh->query("Select * from region") or die("failed!");
$regions = array();
while($row = $result->fetch(PDO::FETCH_ASSOC))
{
	$regions[$row["region_name"]] = $row["region_name"];
}
$smarty->assign('regions',$regions);

$result = $dbh->query("Select * from grape_variety") or die("failed!");
$grapes = array();
$grapes["Any"]="Any";
while($row = $result->fetch(PDO::FETCH_ASSOC))
{
	$grapes[$row["variety"]] = $row["variety"];
}
$smarty->assign('varieties',$grapes);
$result = $dbh->query("Select min(year) as min,max(year) as max from wine") or die("failed!");
$years = array();
$row = $result->fetch(PDO::FETCH_ASSOC);
$smarty->assign('minYear',$row["min"]);
$smarty->assign('maxYear',$row['max']);
$smarty->display('searchView.tpl');
?>