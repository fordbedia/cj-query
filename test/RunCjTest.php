<?php

class RunCjTest {
	
	public $conn;
	
  	public function getProduct()
	{
		$cj = new \CJQuery\Src\CjConn([
			'4002dqdpwd911pndbnz92e2b86',
			'8724259'
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
			'4002dqdpwd911pndbnz92e2b86',
			'5153237',
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
			'4002dqdpwd911pndbnz92e2b86',
			'5054774',
		]);
		
		return $cj->advertiserLookup(array(
			'records-per-page' => 100,
			'page-number' => 1,
			'advertiser-ids' => 'joined'
		));
	}
    
}

$run = new RunCjTest;

print_r($run->getAdvertiserLookup());
