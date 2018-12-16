# Simple SDK for Commission Juntion pull request

## Installation

You can install the package via composer:

`composer require fordbedia/cj-query`

## Usage

Add your credentials website id and your personal access token

```
$cj = new \CJQuery\Src\CjConn([
	'<website-id>',
	'<personal-access-token>'
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

## Aditional parameters

Please refer to the commission junction [developer docs](https://developers.cj.com/).