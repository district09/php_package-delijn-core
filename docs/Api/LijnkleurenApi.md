# District09\DeLijnCoreAPI\LijnkleurenApi

All URIs are relative to https://api.delijn.be/DLKernOpenData/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**geefLijnkleurcode()**](LijnkleurenApi.md#geefLijnkleurcode) | **GET** /kleuren/{code} | geef een lijnkleur op basis van de opgegeven code |
| [**geefLijnkleuren()**](LijnkleurenApi.md#geefLijnkleuren) | **GET** /kleuren | geef alle lijnkleuren |


## `geefLijnkleurcode()`

```php
geefLijnkleurcode($code): \District09\DeLijnCoreAPI\Model\Lijnkleur
```

geef een lijnkleur op basis van de opgegeven code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = District09\DeLijnCoreAPI\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = District09\DeLijnCoreAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = District09\DeLijnCoreAPI\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = District09\DeLijnCoreAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new District09\DeLijnCoreAPI\Api\LijnkleurenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | code van de lijnkleur

try {
    $result = $apiInstance->geefLijnkleurcode($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LijnkleurenApi->geefLijnkleurcode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| code van de lijnkleur | |

### Return type

[**\District09\DeLijnCoreAPI\Model\Lijnkleur**](../Model/Lijnkleur.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefLijnkleuren()`

```php
geefLijnkleuren(): \District09\DeLijnCoreAPI\Model\Lijnkleuren
```

geef alle lijnkleuren

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = District09\DeLijnCoreAPI\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = District09\DeLijnCoreAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = District09\DeLijnCoreAPI\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = District09\DeLijnCoreAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new District09\DeLijnCoreAPI\Api\LijnkleurenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->geefLijnkleuren();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LijnkleurenApi->geefLijnkleuren: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\District09\DeLijnCoreAPI\Model\Lijnkleuren**](../Model/Lijnkleuren.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
