# District09\DeLijnCoreAPI\LijnenApi

All URIs are relative to https://api.delijn.be/DLKernOpenData/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**geefDienstregelingVoorLijnrichting()**](LijnenApi.md#geefDienstregelingVoorLijnrichting) | **GET** /lijnen/{entiteitnummer}/{lijnnummer}/lijnrichtingen/{richting}/dienstregelingen | geef de dienstregeling voor de opgegeven lijnrichting |
| [**geefDoorkomstVoorLijnrichting()**](LijnenApi.md#geefDoorkomstVoorLijnrichting) | **GET** /lijnen/{entiteitnummer}/{lijnnummer}/lijnrichtingen/{richting}/real-time | geef de real-time doorkomsten voor de opgegeven lijnrichting |
| [**geefGemeentenVoorLijn()**](LijnenApi.md#geefGemeentenVoorLijn) | **GET** /lijnen/{entiteitnummer}/{lijnnummer}/gemeenten | geef de gemeenten die bediend worden voor de opgegeven lijn |
| [**geefGeplandeStoringenVoorLijnrichting()**](LijnenApi.md#geefGeplandeStoringenVoorLijnrichting) | **GET** /lijnen/{entiteitnummer}/{lijnnummer}/lijnrichtingen/{richting}/omleidingen | geef de omleidingen voor de opgegeven lijnrichting |
| [**geefGeplandeStoringenVoorLijnrichtingenLijst()**](LijnenApi.md#geefGeplandeStoringenVoorLijnrichtingenLijst) | **GET** /lijnen/lijst/{lijnrichtingsleutels}/omleidingen | geef de omleidingen voor de opgegeven lijst van lijnrichtingen |
| [**geefHaltesVoorLijnrichting()**](LijnenApi.md#geefHaltesVoorLijnrichting) | **GET** /lijnen/{entiteitnummer}/{lijnnummer}/lijnrichtingen/{richting}/haltes | geef de haltes die de door opgegeven lijnrichting worden bediend |
| [**geefLijn()**](LijnenApi.md#geefLijn) | **GET** /lijnen/{entiteitnummer}/{lijnnummer} | geef een lijn op basis van het opgegeven lijnnummer |
| [**geefLijnLijst()**](LijnenApi.md#geefLijnLijst) | **GET** /lijnen/lijst/{lijnsleutels} | geef een lijst van lijnen op basis van een lijst van lijn sleutels |
| [**geefLijnen()**](LijnenApi.md#geefLijnen) | **GET** /lijnen | geef alle lijnen |
| [**geefLijnkleur()**](LijnenApi.md#geefLijnkleur) | **GET** /lijnen/{entiteitnummer}/{lijnnummer}/lijnkleuren | geef de lijnkleuren voor het opgegeven lijnnummer |
| [**geefLijnkleurLijst()**](LijnenApi.md#geefLijnkleurLijst) | **GET** /lijnen/lijst/{lijnsleutels}/lijnkleuren | geef de lijnkleuren van lijnen op basis van een lijst van lijn sleutels |
| [**geefLijnrichting()**](LijnenApi.md#geefLijnrichting) | **GET** /lijnen/{entiteitnummer}/{lijnnummer}/lijnrichtingen/{richting} | geef een lijnrichting voor de opgegeven lijnrichtingcode |
| [**geefLijnrichtingen()**](LijnenApi.md#geefLijnrichtingen) | **GET** /lijnen/{entiteitnummer}/{lijnnummer}/lijnrichtingen | geef de lijnrichtingen voor het opgegeven lijnnummer |
| [**geefLijnrichtingenLijst()**](LijnenApi.md#geefLijnrichtingenLijst) | **GET** /lijnen/lijst/{lijnsleutels}/lijnrichtingen | geef de lijnrichtingen van lijnen op basis van een lijst van lijn sleutels |
| [**geefOnGeplandeStoringenVoorLijnrichting()**](LijnenApi.md#geefOnGeplandeStoringenVoorLijnrichting) | **GET** /lijnen/{entiteitnummer}/{lijnnummer}/lijnrichtingen/{richting}/storingen | geef de storingen voor de opgegeven lijnrichting |
| [**geefOnGeplandeStoringenVoorLijnrichtingenLijst()**](LijnenApi.md#geefOnGeplandeStoringenVoorLijnrichtingenLijst) | **GET** /lijnen/lijst/{lijnrichtingsleutels}/storingen | geef de storingen voor de opgegeven lijst van lijnrichtingen |
| [**geefRitVoorLijnrichting()**](LijnenApi.md#geefRitVoorLijnrichting) | **GET** /lijnen/{entiteitnummer}/{lijnnummer}/lijnrichtingen/{richting}/rit/{ritnummer} | geef rit(ten) voor de opgegeven lijnrichting |


## `geefDienstregelingVoorLijnrichting()`

```php
geefDienstregelingVoorLijnrichting($entiteitnummer, $lijnnummer, $richting, $datum): \District09\DeLijnCoreAPI\Model\Ritten
```

geef de dienstregeling voor de opgegeven lijnrichting

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


$apiInstance = new District09\DeLijnCoreAPI\Api\LijnenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entiteitnummer = 56; // int | Format - int32. nummer van de entiteit
$lijnnummer = 56; // int | Format - int32. nummer van de lijn
$richting = 'richting_example'; // string | richting van de lijn
$datum = 'datum_example'; // string | datum in formaat yyyy-MM-dd met als default waarde de huidige datum

try {
    $result = $apiInstance->geefDienstregelingVoorLijnrichting($entiteitnummer, $lijnnummer, $richting, $datum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LijnenApi->geefDienstregelingVoorLijnrichting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entiteitnummer** | **int**| Format - int32. nummer van de entiteit | |
| **lijnnummer** | **int**| Format - int32. nummer van de lijn | |
| **richting** | **string**| richting van de lijn | |
| **datum** | **string**| datum in formaat yyyy-MM-dd met als default waarde de huidige datum | [optional] |

### Return type

[**\District09\DeLijnCoreAPI\Model\Ritten**](../Model/Ritten.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefDoorkomstVoorLijnrichting()`

```php
geefDoorkomstVoorLijnrichting($entiteitnummer, $lijnnummer, $richting): \District09\DeLijnCoreAPI\Model\Ritten
```

geef de real-time doorkomsten voor de opgegeven lijnrichting

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


$apiInstance = new District09\DeLijnCoreAPI\Api\LijnenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entiteitnummer = 56; // int | Format - int32. nummer van de entiteit
$lijnnummer = 56; // int | Format - int32. nummer van de lijn
$richting = 'richting_example'; // string | richting van de lijn

try {
    $result = $apiInstance->geefDoorkomstVoorLijnrichting($entiteitnummer, $lijnnummer, $richting);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LijnenApi->geefDoorkomstVoorLijnrichting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entiteitnummer** | **int**| Format - int32. nummer van de entiteit | |
| **lijnnummer** | **int**| Format - int32. nummer van de lijn | |
| **richting** | **string**| richting van de lijn | |

### Return type

[**\District09\DeLijnCoreAPI\Model\Ritten**](../Model/Ritten.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefGemeentenVoorLijn()`

```php
geefGemeentenVoorLijn($entiteitnummer, $lijnnummer): \District09\DeLijnCoreAPI\Model\Gemeenten
```

geef de gemeenten die bediend worden voor de opgegeven lijn

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


$apiInstance = new District09\DeLijnCoreAPI\Api\LijnenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entiteitnummer = 56; // int | Format - int32. nummer van de entiteit
$lijnnummer = 56; // int | Format - int32. nummer van de lijn

try {
    $result = $apiInstance->geefGemeentenVoorLijn($entiteitnummer, $lijnnummer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LijnenApi->geefGemeentenVoorLijn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entiteitnummer** | **int**| Format - int32. nummer van de entiteit | |
| **lijnnummer** | **int**| Format - int32. nummer van de lijn | |

### Return type

[**\District09\DeLijnCoreAPI\Model\Gemeenten**](../Model/Gemeenten.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefGeplandeStoringenVoorLijnrichting()`

```php
geefGeplandeStoringenVoorLijnrichting($entiteitnummer, $lijnnummer, $richting, $datum): \District09\DeLijnCoreAPI\Model\Omleidingen
```

geef de omleidingen voor de opgegeven lijnrichting

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


$apiInstance = new District09\DeLijnCoreAPI\Api\LijnenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entiteitnummer = 56; // int | Format - int32. nummer van de entiteit
$lijnnummer = 56; // int | Format - int32. nummer van de lijn
$richting = 'richting_example'; // string | richting van de lijn
$datum = 'datum_example'; // string | datum in formaat yyyy-MM-dd met als default waarde de huidige datum

try {
    $result = $apiInstance->geefGeplandeStoringenVoorLijnrichting($entiteitnummer, $lijnnummer, $richting, $datum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LijnenApi->geefGeplandeStoringenVoorLijnrichting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entiteitnummer** | **int**| Format - int32. nummer van de entiteit | |
| **lijnnummer** | **int**| Format - int32. nummer van de lijn | |
| **richting** | **string**| richting van de lijn | |
| **datum** | **string**| datum in formaat yyyy-MM-dd met als default waarde de huidige datum | [optional] |

### Return type

[**\District09\DeLijnCoreAPI\Model\Omleidingen**](../Model/Omleidingen.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefGeplandeStoringenVoorLijnrichtingenLijst()`

```php
geefGeplandeStoringenVoorLijnrichtingenLijst($lijnrichtingsleutels, $datum): \District09\DeLijnCoreAPI\Model\Omleidingen
```

geef de omleidingen voor de opgegeven lijst van lijnrichtingen

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


$apiInstance = new District09\DeLijnCoreAPI\Api\LijnenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lijnrichtingsleutels = 'lijnrichtingsleutels_example'; // string | lijst van lijnrichtingen (bv 1_500_HEEN_1_550_TERUG)
$datum = 'datum_example'; // string | datum in formaat yyyy-MM-dd met als default waarde de huidige datum

try {
    $result = $apiInstance->geefGeplandeStoringenVoorLijnrichtingenLijst($lijnrichtingsleutels, $datum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LijnenApi->geefGeplandeStoringenVoorLijnrichtingenLijst: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lijnrichtingsleutels** | **string**| lijst van lijnrichtingen (bv 1_500_HEEN_1_550_TERUG) | |
| **datum** | **string**| datum in formaat yyyy-MM-dd met als default waarde de huidige datum | [optional] |

### Return type

[**\District09\DeLijnCoreAPI\Model\Omleidingen**](../Model/Omleidingen.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefHaltesVoorLijnrichting()`

```php
geefHaltesVoorLijnrichting($entiteitnummer, $lijnnummer, $richting): \District09\DeLijnCoreAPI\Model\Haltes
```

geef de haltes die de door opgegeven lijnrichting worden bediend

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


$apiInstance = new District09\DeLijnCoreAPI\Api\LijnenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entiteitnummer = 56; // int | Format - int32.
$lijnnummer = 56; // int | Format - int32.
$richting = 'richting_example'; // string

try {
    $result = $apiInstance->geefHaltesVoorLijnrichting($entiteitnummer, $lijnnummer, $richting);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LijnenApi->geefHaltesVoorLijnrichting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entiteitnummer** | **int**| Format - int32. | |
| **lijnnummer** | **int**| Format - int32. | |
| **richting** | **string**|  | |

### Return type

[**\District09\DeLijnCoreAPI\Model\Haltes**](../Model/Haltes.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefLijn()`

```php
geefLijn($entiteitnummer, $lijnnummer): \District09\DeLijnCoreAPI\Model\Lijn
```

geef een lijn op basis van het opgegeven lijnnummer

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


$apiInstance = new District09\DeLijnCoreAPI\Api\LijnenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entiteitnummer = 56; // int | Format - int32.
$lijnnummer = 56; // int | Format - int32.

try {
    $result = $apiInstance->geefLijn($entiteitnummer, $lijnnummer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LijnenApi->geefLijn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entiteitnummer** | **int**| Format - int32. | |
| **lijnnummer** | **int**| Format - int32. | |

### Return type

[**\District09\DeLijnCoreAPI\Model\Lijn**](../Model/Lijn.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefLijnLijst()`

```php
geefLijnLijst($lijnsleutels): \District09\DeLijnCoreAPI\Model\Lijnen
```

geef een lijst van lijnen op basis van een lijst van lijn sleutels

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


$apiInstance = new District09\DeLijnCoreAPI\Api\LijnenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lijnsleutels = 'lijnsleutels_example'; // string | lijst van lijn sleutels (bv 1_500_1_550)

try {
    $result = $apiInstance->geefLijnLijst($lijnsleutels);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LijnenApi->geefLijnLijst: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lijnsleutels** | **string**| lijst van lijn sleutels (bv 1_500_1_550) | |

### Return type

[**\District09\DeLijnCoreAPI\Model\Lijnen**](../Model/Lijnen.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefLijnen()`

```php
geefLijnen(): \District09\DeLijnCoreAPI\Model\Lijnen
```

geef alle lijnen

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


$apiInstance = new District09\DeLijnCoreAPI\Api\LijnenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->geefLijnen();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LijnenApi->geefLijnen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\District09\DeLijnCoreAPI\Model\Lijnen**](../Model/Lijnen.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefLijnkleur()`

```php
geefLijnkleur($entiteitnummer, $lijnnummer): \District09\DeLijnCoreAPI\Model\LijnkleurCodes
```

geef de lijnkleuren voor het opgegeven lijnnummer

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


$apiInstance = new District09\DeLijnCoreAPI\Api\LijnenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entiteitnummer = 56; // int | Format - int32.
$lijnnummer = 56; // int | Format - int32.

try {
    $result = $apiInstance->geefLijnkleur($entiteitnummer, $lijnnummer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LijnenApi->geefLijnkleur: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entiteitnummer** | **int**| Format - int32. | |
| **lijnnummer** | **int**| Format - int32. | |

### Return type

[**\District09\DeLijnCoreAPI\Model\LijnkleurCodes**](../Model/LijnkleurCodes.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefLijnkleurLijst()`

```php
geefLijnkleurLijst($lijnsleutels): \District09\DeLijnCoreAPI\Model\LijnkleurCodes
```

geef de lijnkleuren van lijnen op basis van een lijst van lijn sleutels

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


$apiInstance = new District09\DeLijnCoreAPI\Api\LijnenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lijnsleutels = 'lijnsleutels_example'; // string | lijst van lijn sleutels (bv 1_500_1_550)

try {
    $result = $apiInstance->geefLijnkleurLijst($lijnsleutels);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LijnenApi->geefLijnkleurLijst: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lijnsleutels** | **string**| lijst van lijn sleutels (bv 1_500_1_550) | |

### Return type

[**\District09\DeLijnCoreAPI\Model\LijnkleurCodes**](../Model/LijnkleurCodes.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefLijnrichting()`

```php
geefLijnrichting($entiteitnummer, $lijnnummer, $richting): \District09\DeLijnCoreAPI\Model\Lijnrichting
```

geef een lijnrichting voor de opgegeven lijnrichtingcode

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


$apiInstance = new District09\DeLijnCoreAPI\Api\LijnenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entiteitnummer = 56; // int | Format - int32.
$lijnnummer = 56; // int | Format - int32.
$richting = 'richting_example'; // string

try {
    $result = $apiInstance->geefLijnrichting($entiteitnummer, $lijnnummer, $richting);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LijnenApi->geefLijnrichting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entiteitnummer** | **int**| Format - int32. | |
| **lijnnummer** | **int**| Format - int32. | |
| **richting** | **string**|  | |

### Return type

[**\District09\DeLijnCoreAPI\Model\Lijnrichting**](../Model/Lijnrichting.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefLijnrichtingen()`

```php
geefLijnrichtingen($entiteitnummer, $lijnnummer): \District09\DeLijnCoreAPI\Model\Lijnrichtingen
```

geef de lijnrichtingen voor het opgegeven lijnnummer

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


$apiInstance = new District09\DeLijnCoreAPI\Api\LijnenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entiteitnummer = 56; // int | Format - int32.
$lijnnummer = 56; // int | Format - int32.

try {
    $result = $apiInstance->geefLijnrichtingen($entiteitnummer, $lijnnummer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LijnenApi->geefLijnrichtingen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entiteitnummer** | **int**| Format - int32. | |
| **lijnnummer** | **int**| Format - int32. | |

### Return type

[**\District09\DeLijnCoreAPI\Model\Lijnrichtingen**](../Model/Lijnrichtingen.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefLijnrichtingenLijst()`

```php
geefLijnrichtingenLijst($lijnsleutels): \District09\DeLijnCoreAPI\Model\LijnLijnrichtingenLijst
```

geef de lijnrichtingen van lijnen op basis van een lijst van lijn sleutels

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


$apiInstance = new District09\DeLijnCoreAPI\Api\LijnenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lijnsleutels = 'lijnsleutels_example'; // string | lijst van lijn sleutels (bv 1_500_1_550)

try {
    $result = $apiInstance->geefLijnrichtingenLijst($lijnsleutels);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LijnenApi->geefLijnrichtingenLijst: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lijnsleutels** | **string**| lijst van lijn sleutels (bv 1_500_1_550) | |

### Return type

[**\District09\DeLijnCoreAPI\Model\LijnLijnrichtingenLijst**](../Model/LijnLijnrichtingenLijst.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefOnGeplandeStoringenVoorLijnrichting()`

```php
geefOnGeplandeStoringenVoorLijnrichting($entiteitnummer, $lijnnummer, $richting, $datum): \District09\DeLijnCoreAPI\Model\Omleidingen
```

geef de storingen voor de opgegeven lijnrichting

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


$apiInstance = new District09\DeLijnCoreAPI\Api\LijnenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entiteitnummer = 56; // int | Format - int32. nummer van de entiteit
$lijnnummer = 56; // int | Format - int32. nummer van de lijn
$richting = 'richting_example'; // string | richting van de lijn
$datum = 'datum_example'; // string | datum in formaat yyyy-MM-dd met als default waarde de huidige datum

try {
    $result = $apiInstance->geefOnGeplandeStoringenVoorLijnrichting($entiteitnummer, $lijnnummer, $richting, $datum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LijnenApi->geefOnGeplandeStoringenVoorLijnrichting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entiteitnummer** | **int**| Format - int32. nummer van de entiteit | |
| **lijnnummer** | **int**| Format - int32. nummer van de lijn | |
| **richting** | **string**| richting van de lijn | |
| **datum** | **string**| datum in formaat yyyy-MM-dd met als default waarde de huidige datum | [optional] |

### Return type

[**\District09\DeLijnCoreAPI\Model\Omleidingen**](../Model/Omleidingen.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefOnGeplandeStoringenVoorLijnrichtingenLijst()`

```php
geefOnGeplandeStoringenVoorLijnrichtingenLijst($lijnrichtingsleutels, $datum): \District09\DeLijnCoreAPI\Model\Omleidingen
```

geef de storingen voor de opgegeven lijst van lijnrichtingen

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


$apiInstance = new District09\DeLijnCoreAPI\Api\LijnenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lijnrichtingsleutels = 'lijnrichtingsleutels_example'; // string | lijst van lijnrichtingen (bv 1_500_HEEN_1_550_TERUG)
$datum = 'datum_example'; // string | datum in formaat yyyy-MM-dd met als default waarde de huidige datum

try {
    $result = $apiInstance->geefOnGeplandeStoringenVoorLijnrichtingenLijst($lijnrichtingsleutels, $datum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LijnenApi->geefOnGeplandeStoringenVoorLijnrichtingenLijst: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lijnrichtingsleutels** | **string**| lijst van lijnrichtingen (bv 1_500_HEEN_1_550_TERUG) | |
| **datum** | **string**| datum in formaat yyyy-MM-dd met als default waarde de huidige datum | [optional] |

### Return type

[**\District09\DeLijnCoreAPI\Model\Omleidingen**](../Model/Omleidingen.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefRitVoorLijnrichting()`

```php
geefRitVoorLijnrichting($entiteitnummer, $lijnnummer, $richting, $ritnummer, $datum): \District09\DeLijnCoreAPI\Model\Ritten
```

geef rit(ten) voor de opgegeven lijnrichting

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


$apiInstance = new District09\DeLijnCoreAPI\Api\LijnenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entiteitnummer = 56; // int | Format - int32. nummer van de entiteit
$lijnnummer = 56; // int | Format - int32. nummer van de lijn
$richting = 'richting_example'; // string | richting van de lijn
$ritnummer = 'ritnummer_example'; // string | nummer van de rit
$datum = 'datum_example'; // string | exploitatie datum in formaat yyyy-MM-dd met huidige datum als default

try {
    $result = $apiInstance->geefRitVoorLijnrichting($entiteitnummer, $lijnnummer, $richting, $ritnummer, $datum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LijnenApi->geefRitVoorLijnrichting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entiteitnummer** | **int**| Format - int32. nummer van de entiteit | |
| **lijnnummer** | **int**| Format - int32. nummer van de lijn | |
| **richting** | **string**| richting van de lijn | |
| **ritnummer** | **string**| nummer van de rit | |
| **datum** | **string**| exploitatie datum in formaat yyyy-MM-dd met huidige datum als default | [optional] |

### Return type

[**\District09\DeLijnCoreAPI\Model\Ritten**](../Model/Ritten.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
