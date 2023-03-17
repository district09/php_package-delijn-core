# District09\DeLijnCoreAPI\OmleidingenApi

All URIs are relative to https://api.delijn.be/DLKernOpenData/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**geefOmleiding()**](OmleidingenApi.md#geefOmleiding) | **GET** /omleidingen/{referentieOmleiding} | geef de omleiding op basis van zijn referentie id |
| [**geefOmleidingen()**](OmleidingenApi.md#geefOmleidingen) | **GET** /omleidingen | geef alle omleidingen voor een periode van hoogstens een maand |


## `geefOmleiding()`

```php
geefOmleiding($referentie_omleiding, $taal_code): \District09\DeLijnCoreAPI\Model\Omleiding
```

geef de omleiding op basis van zijn referentie id

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


$apiInstance = new District09\DeLijnCoreAPI\Api\OmleidingenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$referentie_omleiding = 56; // int | Format - int32. referentie id van de omleiding
$taal_code = 'NEDERLANDS'; // string | de taalcode voor de titel en omschrijving van de omleidingen

try {
    $result = $apiInstance->geefOmleiding($referentie_omleiding, $taal_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmleidingenApi->geefOmleiding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **referentie_omleiding** | **int**| Format - int32. referentie id van de omleiding | |
| **taal_code** | **string**| de taalcode voor de titel en omschrijving van de omleidingen | [optional] [default to &#39;NEDERLANDS&#39;] |

### Return type

[**\District09\DeLijnCoreAPI\Model\Omleiding**](../Model/Omleiding.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefOmleidingen()`

```php
geefOmleidingen($start_datum, $eind_datum, $taal_code): \District09\DeLijnCoreAPI\Model\Omleidingen
```

geef alle omleidingen voor een periode van hoogstens een maand

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


$apiInstance = new District09\DeLijnCoreAPI\Api\OmleidingenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_datum = 'start_datum_example'; // string | tijdstip in formaat yyyy-MM-dd'T'HH:mm:ss als start moment voor de opzoeking van de omleidingen met als default waarde de huidige tijdstip
$eind_datum = 'eind_datum_example'; // string | tijdstip in formaat yyyy-MM-dd'T'HH:mm:ss als eind moment voor de opzoeking van de omleidingen  met als default waarde de huidige tijdstip
$taal_code = 'NEDERLANDS'; // string | de taalcode voor de titel en omschrijving van de omleidingen

try {
    $result = $apiInstance->geefOmleidingen($start_datum, $eind_datum, $taal_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmleidingenApi->geefOmleidingen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_datum** | **string**| tijdstip in formaat yyyy-MM-dd&#39;T&#39;HH:mm:ss als start moment voor de opzoeking van de omleidingen met als default waarde de huidige tijdstip | [optional] |
| **eind_datum** | **string**| tijdstip in formaat yyyy-MM-dd&#39;T&#39;HH:mm:ss als eind moment voor de opzoeking van de omleidingen  met als default waarde de huidige tijdstip | [optional] |
| **taal_code** | **string**| de taalcode voor de titel en omschrijving van de omleidingen | [optional] [default to &#39;NEDERLANDS&#39;] |

### Return type

[**\District09\DeLijnCoreAPI\Model\Omleidingen**](../Model/Omleidingen.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
