# Simple SDK for Commission Junction pull request

## Installation

You can install the package via composer:

`composer require fordbedia/cj-query`

## Usage

Add your credentials website id and your personal access token

```
$cj = new \CJQuery\Src\CjConn([
  '<personal-access-token>',
	'<website-id>'
]);
		
$p = $cj->assignScope('product-search')->addParams(array(
    'keywords' => 'samsung',
    'records-per-page' => 10,
    'page-number' => 1
))->parseXML();

var_dump($p);
```

## Scopes available
`product-search`
`advertiser-lookup`

## Product Search

```
$cj = new \CJQuery\Src\CjConn([
  '<perosnal-token>',
  '<website-id>',
]);

return $cj->productSearch(array(
	'keywords' => 'samsung',
	'records-per-page' => 10,
	'page-number' => 1
));
```

## Link Search
```
$cj = new \CJQuery\Src\CjConn([
	'<perosnal-token>',
	'<website-id>',
]);
		
return $cj->linkSearch(array(
	'keywords' => 'Hilka - -Heavy Duty Stapler with 800 Staples',
	'advertiser-ids' => 849260
));
```

## Advertiser Lookup
```
$cj = new \CJQuery\Src\CjConn([
	'<perosnal-token>',
	'<website-id>',
]);
		
return $cj->advertiserLookup(array(
	'records-per-page' => 100,
	'page-number' => 1,
	'advertiser-ids' => 'joined'
));
```

## Additional parameters

Please refer to the commission junction [developer docs](https://developers.cj.com/).
