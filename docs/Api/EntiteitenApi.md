# District09\DeLijnCoreAPI\EntiteitenApi

All URIs are relative to https://api.delijn.be/DLKernOpenData/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**geefEntiteit()**](EntiteitenApi.md#geefEntiteit) | **GET** /entiteiten/{entiteitnummer} | geef een entiteit op basis van het opgegeven entiteitnummer |
| [**geefEntiteiten()**](EntiteitenApi.md#geefEntiteiten) | **GET** /entiteiten | geef alle entiteiten |
| [**geefGemeentenVoorEntiteit()**](EntiteitenApi.md#geefGemeentenVoorEntiteit) | **GET** /entiteiten/{entiteitnummer}/gemeenten | geef alle gemeenten die beheerd worden door een entiteit |
| [**geefHaltesVoorEntiteit()**](EntiteitenApi.md#geefHaltesVoorEntiteit) | **GET** /entiteiten/{entiteitnummer}/haltes | geef alle haltes die beheerd worden door een entiteit |
| [**geefLijnenVoorEntiteit()**](EntiteitenApi.md#geefLijnenVoorEntiteit) | **GET** /entiteiten/{entiteitnummer}/lijnen | geef alle lijnen die beheerd worden door een entiteit |


## `geefEntiteit()`

```php
geefEntiteit($entiteitnummer): \District09\DeLijnCoreAPI\Model\Entiteit
```

geef een entiteit op basis van het opgegeven entiteitnummer

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


$apiInstance = new District09\DeLijnCoreAPI\Api\EntiteitenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entiteitnummer = 56; // int | Format - int32. nummer van de entiteit

try {
    $result = $apiInstance->geefEntiteit($entiteitnummer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntiteitenApi->geefEntiteit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entiteitnummer** | **int**| Format - int32. nummer van de entiteit | |

### Return type

[**\District09\DeLijnCoreAPI\Model\Entiteit**](../Model/Entiteit.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefEntiteiten()`

```php
geefEntiteiten(): \District09\DeLijnCoreAPI\Model\Entiteiten
```

geef alle entiteiten

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


$apiInstance = new District09\DeLijnCoreAPI\Api\EntiteitenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->geefEntiteiten();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntiteitenApi->geefEntiteiten: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\District09\DeLijnCoreAPI\Model\Entiteiten**](../Model/Entiteiten.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefGemeentenVoorEntiteit()`

```php
geefGemeentenVoorEntiteit($entiteitnummer): \District09\DeLijnCoreAPI\Model\Gemeenten
```

geef alle gemeenten die beheerd worden door een entiteit

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


$apiInstance = new District09\DeLijnCoreAPI\Api\EntiteitenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entiteitnummer = 56; // int | Format - int32. nummer van de entiteit

try {
    $result = $apiInstance->geefGemeentenVoorEntiteit($entiteitnummer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntiteitenApi->geefGemeentenVoorEntiteit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entiteitnummer** | **int**| Format - int32. nummer van de entiteit | |

### Return type

[**\District09\DeLijnCoreAPI\Model\Gemeenten**](../Model/Gemeenten.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefHaltesVoorEntiteit()`

```php
geefHaltesVoorEntiteit($entiteitnummer): \District09\DeLijnCoreAPI\Model\Haltes
```

geef alle haltes die beheerd worden door een entiteit

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


$apiInstance = new District09\DeLijnCoreAPI\Api\EntiteitenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entiteitnummer = 56; // int | Format - int32. nummer van de entiteit

try {
    $result = $apiInstance->geefHaltesVoorEntiteit($entiteitnummer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntiteitenApi->geefHaltesVoorEntiteit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entiteitnummer** | **int**| Format - int32. nummer van de entiteit | |

### Return type

[**\District09\DeLijnCoreAPI\Model\Haltes**](../Model/Haltes.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefLijnenVoorEntiteit()`

```php
geefLijnenVoorEntiteit($entiteitnummer): \District09\DeLijnCoreAPI\Model\Lijnen
```

geef alle lijnen die beheerd worden door een entiteit

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


$apiInstance = new District09\DeLijnCoreAPI\Api\EntiteitenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entiteitnummer = 'entiteitnummer_example'; // string | nummer van de entiteit

try {
    $result = $apiInstance->geefLijnenVoorEntiteit($entiteitnummer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntiteitenApi->geefLijnenVoorEntiteit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entiteitnummer** | **string**| nummer van de entiteit | |

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
