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

## Additional parameters

Please refer to the commission junction [developer docs](https://developers.cj.com/).
