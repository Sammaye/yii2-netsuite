# Yii2 NetSuite plugin
A NetSuite plugin for Yii2

## Configuration

In your configuration file(s), for example; `main.php`:

```
'ns' => [
	'class' => 'sammaye\netsuite\NetSuite',
	'host' => 'https://webservices.netsuite.com',
	'role' => 3,
	'email' => 'email_for_user@whatever.co.uk',
	'account' => '######',
	'password' => 'lalalalaomg'
],
```

## Usage Example
```php
$service = Yii::$app->ns->service;

$request = new \GetDataCenterUrlsRequest();
$request->account = Yii::$app->ns->account;
$Response = $service->getDataCenterUrls($request);
	
if(!$Response->getDataCenterUrlsResult->status->isSuccess){
}else{
	$rest = $Response->getDataCenterUrlsResult->dataCenterUrls->restDomain;
	$system = $Response->getDataCenterUrlsResult->dataCenterUrls->systemDomain;
	$webservices = $Response->getDataCenterUrlsResult->dataCenterUrls->webservicesDomain;
}
```