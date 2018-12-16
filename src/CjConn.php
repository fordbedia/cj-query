<?php
namespace CJQuery\Src;

use CJQuery\Src\Lib\Sdk;

class CjConn extends Sdk {
	
	/**
	 * Connection handler
	 */
	private $conn;
	
	/** 
	 * @param array $config
	*/
	public function __construct(array $config) {
		/**
		 * Add configuration handler
		 */
		$this->conn = $config;
		
		/**
		 * Pass the website id
		 */
		$this->websiteId = $config[0];
		
		/**
		 * Pass the cj key
		 */
		$this->cjkey = $config[1];
		
		/**
		 * Product Search Endpoint
		 */
		$this->productSearchEndpoint = 'https://product-search.api.cj.com/v2/product-search?website-id='.$this->websiteId.'&advertiser-ids=joined';
		
		/**
		 * Advertiser Look Up Endpoint
		 */
    	$this->advertiserLookupEndpoint = 'https://advertiser-lookup.api.cj.com/v2/advertiser-lookup?requestor-cid='.$this->websiteId.'&advertiser-ids=joined';
	}
	
}
