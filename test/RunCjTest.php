<?php

class RunCjTest {
	
	public $conn;
	
  	public function getProduct()
	{
		$cj = new \CJQuery\Src\CjConn([
			'<perosnal-token>',
			'<website-id>'
		]);
		
		$p = $cj->assignScope('product-search')->addParams(array(
			// 'advertiser-ids' => $data['adid'],
			'keywords' => 'samsung',
			'records-per-page' => 10,
			'page-number' => 1
		))->parseXML();
		
		return $p;
	}
	
	public function getAdvertiser()
	{
		$cj = new \CJQuery\Src\CjConn([
			'<perosnal-token>',
			'<website-id>',
		]);
		
		$ad = $cj->assignScope('advertiser-lookup')->addParams(array(
			'keywords' => 'kitchen sink',
			'records-per-page' => 100,
			'page-number' => 1,
			'advertiser-ids' => 'joined'
		))->parseXML();
		
		return $ad;
	}
	
	public function getAdvertiserLookup()
	{
		$cj = new \CJQuery\Src\CjConn([
			'<perosnal-token>',
			'<website-id>',
		]);
		
		return $cj->advertiserLookup(array(
			'records-per-page' => 100,
			'page-number' => 1,
			'advertiser-ids' => 'joined'
		));
	}
	
	public function searchProduct()
	{
		$cj = new \CJQuery\Src\CjConn([
			'<perosnal-token>',
			'<website-id>',
		]);
		
		return $cj->productSearch(array(
			'keywords' => 'samsung',
			'records-per-page' => 10,
			'page-number' => 1
		));
	}
    
}

$run = new RunCjTest;

print_r($run->getAdvertiserLookup());
