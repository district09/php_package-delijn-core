# District09\DeLijnCoreAPI\VervoerregiosApi

All URIs are relative to https://api.delijn.be/DLKernOpenData/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**geefLijnenVoorVervoerRegio()**](VervoerregiosApi.md#geefLijnenVoorVervoerRegio) | **GET** /vervoerregios/{code}/lijnen | geef alle lijnen in een vervoerregio |
| [**geefVervoerRegio()**](VervoerregiosApi.md#geefVervoerRegio) | **GET** /vervoerregios/{code} | geef vervoerregio |
| [**geefVervoerRegios()**](VervoerregiosApi.md#geefVervoerRegios) | **GET** /vervoerregios | geef alle vervoerregios |


## `geefLijnenVoorVervoerRegio()`

```php
geefLijnenVoorVervoerRegio($code): \District09\DeLijnCoreAPI\Model\Lijnen
```

geef alle lijnen in een vervoerregio

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


$apiInstance = new District09\DeLijnCoreAPI\Api\VervoerregiosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | vervoerregio code

try {
    $result = $apiInstance->geefLijnenVoorVervoerRegio($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VervoerregiosApi->geefLijnenVoorVervoerRegio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| vervoerregio code | |

### Return type

[**\District09\DeLijnCoreAPI\Model\Lijnen**](../Model/Lijnen.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefVervoerRegio()`

```php
geefVervoerRegio($code): \District09\DeLijnCoreAPI\Model\VervoerRegio
```

geef vervoerregio

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


$apiInstance = new District09\DeLijnCoreAPI\Api\VervoerregiosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string

try {
    $result = $apiInstance->geefVervoerRegio($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VervoerregiosApi->geefVervoerRegio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |

### Return type

[**\District09\DeLijnCoreAPI\Model\VervoerRegio**](../Model/VervoerRegio.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefVervoerRegios()`

```php
geefVervoerRegios(): \District09\DeLijnCoreAPI\Model\VervoerRegios
```

geef alle vervoerregios

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


$apiInstance = new District09\DeLijnCoreAPI\Api\VervoerregiosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->geefVervoerRegios();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VervoerregiosApi->geefVervoerRegios: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\District09\DeLijnCoreAPI\Model\VervoerRegios**](../Model/VervoerRegios.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
