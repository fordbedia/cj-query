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
		 * Pass the cj key
		 */
		$this->cjkey = $config[0];
		
		/**
		 * Pass the website id
		 */
		$this->websiteId = $config[1];
		
		/**
		 * Product Search Endpoint
		 */
		$this->productSearchEndpoint = 'https://product-search.api.cj.com/v2/product-search?website-id='.$this->websiteId;
		
		/**
		 * Advertiser Look Up Endpoint
		 */
		$this->advertiserLookupEndpoint = 'https://advertiser-lookup.api.cj.com/v2/advertiser-lookup?requestor-cid='.$this->websiteId;
		
		/**
		 * Advertiser Look Up Endpoint
		 */
    $this->linkSearchEndpoint = 'https://link-search.api.cj.com/v2/link-search?website-id='.$this->websiteId;
	}
	
}
