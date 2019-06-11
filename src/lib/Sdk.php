<?php
namespace CJQuery\Src\Lib;

use SimpleXMLElement;
use CJQuery\Src\CjConn;

abstract class Sdk {
  
  /**
   * Assign variables
   */
  protected $productSearchEndpoint, 
            $advertiserLookupEndpoint, 
            $params, 
            $cjkey,
            $xml, 
            $websiteId, 
            $scope;
  /**
   * Set parameter
   *
   * @param string $params
   * @return void
   */
  private function setParam($params): CjConn
  {
    switch($this->scope) {
      case 'product-search':
        $endpoint = $this->productSearchEndpoint;
      break;
      case 'advertiser-lookup':
				$endpoint = $this->advertiserLookupEndpoint;
			break;
			case 'link-search':
				$endpoint = $this->linkSearchEndpoint;
			break;
    }
    
    $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $endpoint."&".$this->extract($params));
      curl_setopt($ch, CURLOPT_POST, FAlSE);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$this->cjkey));
      $curl_results = curl_exec($ch);
      $this->xml = $curl_results;

      return $this;
  }
  
  /**
   * Determine what type of api scope
   *
   * @return void
   */
  public function assignScope($scope): CjConn
  {
    $this->scope = $scope;
    
    return $this;
  }
  
  /**
   * Run the api scope
   *
   * @return void
   */
  public function addParams(array $params): CjConn
  {
    return $this->setParam($params);
  }
  
  /**
   * Parse XML
   *
   * @return void
   */
  public function parseXML(): SimpleXMLElement
  {
    return simplexml_load_string($this->xml);
  }
  
  /**
   * Extract string and build an array
   *
   * @param string $p
   * @return void
   */
  private function extract(array $p): string
  {
    if(count($p) !== 0){
      $this->params = http_build_query($p);
    }

    return $this->params;
	}
	
	/**
	 * Undocumented function
	 *
	 * @param array $params
	 * @return Object otherwise false
	 */
	public function advertiserLookup($params=[])
	{
		if (count($params)) {
			return $this->assignScope('advertiser-lookup')->addParams($params)->parseXML();
		}
		
		return false;
	}
	
	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function productSearch($params=[])
	{
		if (count($params)) {
			return $this->assignScope('product-search')->addParams($params)->parseXML();
		}
		
		return false;
	}
	
		public function linkSearch($params=[])
	{
		if (count($params)) {
			return $this->assignScope('link-search')->addParams($params)->parseXML();
		}
		
		return false;
	}
	
}
