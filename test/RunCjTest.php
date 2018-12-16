<?php

class RunCjTest {
	
	public $conn;
	
  	public function getProduct()
	{
		$cj = new \CJQuery\Src\CjConn([
			'8804478',
			'j32qtb4rcwbzx7rkp5nz0ypk0'
		]);
		
		$p = $cj->assignApi('product-search')->runApi(array(
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
			'8804478',
			'j32qtb4rcwbzx7rkp5nz0ypk0'
		]);
		
		$ad = $cj->assignApi('advertiser-lookup')->runApi(array(
			'requestor-cid' => '',
         'keywords' => 'kitchen sink',
         'records-per-page' => 100,
         'page-number' => 1
		))->parseXML();
		
		return $ad;
	}
    
}

$run = new RunCjTest;

echo $run->getProduct();
