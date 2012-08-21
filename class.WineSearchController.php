<?php
class WineSearchController
{
	var $databaseHandler;
	function __construct($databaseHandler)
	{
		$this->databaseHandler = $databaseHandler;
	}
	function search($params)
	{
		$query = "SELECT * from wine_detail as wd
			WHERE
			( :wineName ='' OR wd.wine_name LIKE :wineNameSearchString ) AND
			( :wineryName ='' OR wd.winery_name LIKE :wineryNameSearchString ) AND
			( :region ='All' OR region_name LIKE :regionSearchString ) AND
			( :grape ='any' OR variety LIKE :grapeSearchString ) AND
			year >= :minYear AND year <= :maxYear AND stock >= :stock AND sold >= :sold
			AND cost >= :minPrice AND cost <= :maxPrice ";
		$statement = $this->databaseHandler->prepare($query);
		
		//prepare query variables
		$wineName = $params["wineName"];
		$wineNameSearchString = "%".$params["wineName"]."%";
		
		$wineryName = $params["wineryName"];
		$wineryNameSearchString = "%".$params["wineryName"]."%";
		
		$region = $params["winery"];
		$regionSearchString = "%".$params["winery"]."%";
		
		$grape = $params["grape"];
		$grapeSearchString = "%".$params["grape"]."%";
		
		$minYear = $params["minYear"];
		$minYear=$minYear==''?0:$minYear;
		
		$maxYear = $params["maxYear"];
		$maxYear=$maxYear==''?9999:$maxYear;
		
		$stock = $params["stock"];
		$stock=$stock==''?0:$stock;
		
		$sold = $params["sold"];
		$sold=$sold==''?0:$stock;
		
		$minPrice = $params["minPrice"];
		$minPrice=$minPrice==''?0:$minPrice;
		
		$maxPrice = $params["maxPrice"];
		$maxPrice=$maxPrice==''?9999:$maxYear;
		
		//
		
		$statement->execute(array(
		':wineName'=>$wineName,
		':wineNameSearchString'=>$wineNameSearchString,
		':wineryName'=>$wineryName,
		':wineryNameSearchString'=>$wineryNameSearchString,
		':region'=>$region,
		':regionSearchString'=>$regionSearchString,
		':grape'=>$grape,
		':grapeSearchString'=>$grapeSearchString,
		':minYear'=>$minYear,
		':maxYear'=>$maxYear,
		':stock'=>$stock,
		':sold'=>$sold,
		':minPrice'=>$minPrice,
		':maxPrice'=>$maxPrice
		));
		
		$statement->setFetchMode(PDO::FETCH_ASSOC);
		$resultList = array();
		$i=0;
		while($row = $statement->fetch()){
			$resultList[] = $row;
			if($_SESSION['session']==true)
				$_SESSION['history'][$row['wine_name']]= $row['wine_name'];
		}
		return $resultList;
	}
}
?>