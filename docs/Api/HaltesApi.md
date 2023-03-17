# District09\DeLijnCoreAPI\HaltesApi

All URIs are relative to https://api.delijn.be/DLKernOpenData/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**geefDienstregelingVoorHalte()**](HaltesApi.md#geefDienstregelingVoorHalte) | **GET** /haltes/{entiteitnummer}/{haltenummer}/dienstregelingen | geef de dienstregeling voor de opgegeven halte |
| [**geefDienstregelingVoorHalteLijst()**](HaltesApi.md#geefDienstregelingVoorHalteLijst) | **GET** /haltes/lijst/{haltesleutels}/dienstregelingen | geef de dienstregeling voor de opgegeven halte sleutels |
| [**geefDoorkomstenVoorHalte()**](HaltesApi.md#geefDoorkomstenVoorHalte) | **GET** /haltes/{entiteitnummer}/{haltenummer}/real-time | geef de real-time doorkomsten voor de opgegeven halte |
| [**geefDoorkomstenVoorHalteLijst()**](HaltesApi.md#geefDoorkomstenVoorHalteLijst) | **GET** /haltes/lijst/{haltesleutels}/real-time | geef de real-time doorkomsten voor de opgegeven halte sleutels |
| [**geefHalte()**](HaltesApi.md#geefHalte) | **GET** /haltes/{entiteitnummer}/{haltenummer} | geef een halte op basis van het opgegeven haltenummer |
| [**geefHalteLijnrichtingenLijst()**](HaltesApi.md#geefHalteLijnrichtingenLijst) | **GET** /haltes/lijst/{haltesleutels}/lijnrichtingen | geef de lijnrichtingen die de opgegeven halte bedienen op basis van een lijst van halte sleutels |
| [**geefHalteLijst()**](HaltesApi.md#geefHalteLijst) | **GET** /haltes/lijst/{haltesleutels} | geef een lijst van haltes op basis van een lijst van halte sleutels |
| [**geefHaltes()**](HaltesApi.md#geefHaltes) | **GET** /haltes | geef alle haltes |
| [**geefHaltesIndebuurt()**](HaltesApi.md#geefHaltesIndebuurt) | **GET** /haltes/indebuurt/{latlng} | geef de haltes van de verschillende vervoersmaatschappijen in de buurt van de opgegeven coordinaten |
| [**geefLijnrichtingenVoorHalte()**](HaltesApi.md#geefLijnrichtingenVoorHalte) | **GET** /haltes/{entiteitnummer}/{haltenummer}/lijnrichtingen | geef de lijnrichtingen die de opgegeven halte bedienen |
| [**geefOmleidingenVoorHalte()**](HaltesApi.md#geefOmleidingenVoorHalte) | **GET** /haltes/{entiteitnummer}/{haltenummer}/omleidingen | geef de omleidingen voor de opgegeven halte |
| [**geefOmleidingenVoorHalteLijst()**](HaltesApi.md#geefOmleidingenVoorHalteLijst) | **GET** /haltes/lijst/{haltesleutels}/omleidingen | geef de omleidingen voor de opgegeven halte sleutels |
| [**geefStoringenVoorHalte()**](HaltesApi.md#geefStoringenVoorHalte) | **GET** /haltes/{entiteitnummer}/{haltenummer}/storingen | geef de storingen voor de opgegeven halte |
| [**geefStoringenVoorHalteLijst()**](HaltesApi.md#geefStoringenVoorHalteLijst) | **GET** /haltes/lijst/{haltesleutels}/storingen | geef de storingen de opgegeven halte sleutels |


## `geefDienstregelingVoorHalte()`

```php
geefDienstregelingVoorHalte($entiteitnummer, $haltenummer, $datum, $inclusief_ritnummer): \District09\DeLijnCoreAPI\Model\Ritten
```

geef de dienstregeling voor de opgegeven halte

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


$apiInstance = new District09\DeLijnCoreAPI\Api\HaltesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entiteitnummer = 56; // int | Format - int32. nummer van de entiteit
$haltenummer = 56; // int | Format - int32. nummer van de halte
$datum = 'datum_example'; // string | datum in formaat yyyy-MM-dd met als default waarde de huidige datum
$inclusief_ritnummer = true; // bool | het ritnummer is gewenst in het resultaat (performance impact)

try {
    $result = $apiInstance->geefDienstregelingVoorHalte($entiteitnummer, $haltenummer, $datum, $inclusief_ritnummer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HaltesApi->geefDienstregelingVoorHalte: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entiteitnummer** | **int**| Format - int32. nummer van de entiteit | |
| **haltenummer** | **int**| Format - int32. nummer van de halte | |
| **datum** | **string**| datum in formaat yyyy-MM-dd met als default waarde de huidige datum | [optional] |
| **inclusief_ritnummer** | **bool**| het ritnummer is gewenst in het resultaat (performance impact) | [optional] [default to true] |

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

## `geefDienstregelingVoorHalteLijst()`

```php
geefDienstregelingVoorHalteLijst($haltesleutels, $datum, $inclusief_ritnummer): \District09\DeLijnCoreAPI\Model\HalteDoorkomstenLijst
```

geef de dienstregeling voor de opgegeven halte sleutels

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


$apiInstance = new District09\DeLijnCoreAPI\Api\HaltesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$haltesleutels = 'haltesleutels_example'; // string | lijst van halte sleutels (bv 1_201302_5_5024541)
$datum = 'datum_example'; // string | datum in formaat yyyy-MM-dd met als default waarde de huidige datum
$inclusief_ritnummer = true; // bool | het ritnummer is gewenst in het resultaat (performance impact)

try {
    $result = $apiInstance->geefDienstregelingVoorHalteLijst($haltesleutels, $datum, $inclusief_ritnummer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HaltesApi->geefDienstregelingVoorHalteLijst: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **haltesleutels** | **string**| lijst van halte sleutels (bv 1_201302_5_5024541) | |
| **datum** | **string**| datum in formaat yyyy-MM-dd met als default waarde de huidige datum | [optional] |
| **inclusief_ritnummer** | **bool**| het ritnummer is gewenst in het resultaat (performance impact) | [optional] [default to true] |

### Return type

[**\District09\DeLijnCoreAPI\Model\HalteDoorkomstenLijst**](../Model/HalteDoorkomstenLijst.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefDoorkomstenVoorHalte()`

```php
geefDoorkomstenVoorHalte($entiteitnummer, $haltenummer, $max_aantal_doorkomsten, $ocp_apim_subscription_key): \District09\DeLijnCoreAPI\Model\Ritten
```

geef de real-time doorkomsten voor de opgegeven halte

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


$apiInstance = new District09\DeLijnCoreAPI\Api\HaltesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entiteitnummer = 56; // int | Format - int32. nummer van de entiteit
$haltenummer = 56; // int | Format - int32. nummer van de halte
$max_aantal_doorkomsten = 10; // int | Format - int32. maximaal aantal doorkomsten voor de opgegeven halte
$ocp_apim_subscription_key = 'ocp_apim_subscription_key_example'; // string

try {
    $result = $apiInstance->geefDoorkomstenVoorHalte($entiteitnummer, $haltenummer, $max_aantal_doorkomsten, $ocp_apim_subscription_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HaltesApi->geefDoorkomstenVoorHalte: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entiteitnummer** | **int**| Format - int32. nummer van de entiteit | |
| **haltenummer** | **int**| Format - int32. nummer van de halte | |
| **max_aantal_doorkomsten** | **int**| Format - int32. maximaal aantal doorkomsten voor de opgegeven halte | [optional] [default to 10] |
| **ocp_apim_subscription_key** | **string**|  | [optional] |

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

## `geefDoorkomstenVoorHalteLijst()`

```php
geefDoorkomstenVoorHalteLijst($haltesleutels, $max_aantal_doorkomsten): \District09\DeLijnCoreAPI\Model\HalteDoorkomstenLijst
```

geef de real-time doorkomsten voor de opgegeven halte sleutels

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


$apiInstance = new District09\DeLijnCoreAPI\Api\HaltesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$haltesleutels = 'haltesleutels_example'; // string | lijst van halte sleutels (bv 1_201302_5_5024541)
$max_aantal_doorkomsten = 10; // int | Format - int32. maximaal aantal doorkomsten voor de opgegeven halte

try {
    $result = $apiInstance->geefDoorkomstenVoorHalteLijst($haltesleutels, $max_aantal_doorkomsten);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HaltesApi->geefDoorkomstenVoorHalteLijst: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **haltesleutels** | **string**| lijst van halte sleutels (bv 1_201302_5_5024541) | |
| **max_aantal_doorkomsten** | **int**| Format - int32. maximaal aantal doorkomsten voor de opgegeven halte | [optional] [default to 10] |

### Return type

[**\District09\DeLijnCoreAPI\Model\HalteDoorkomstenLijst**](../Model/HalteDoorkomstenLijst.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefHalte()`

```php
geefHalte($entiteitnummer, $haltenummer): \District09\DeLijnCoreAPI\Model\Halte
```

geef een halte op basis van het opgegeven haltenummer

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


$apiInstance = new District09\DeLijnCoreAPI\Api\HaltesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entiteitnummer = 56; // int | Format - int32. nummer van de entiteit
$haltenummer = 56; // int | Format - int32. nummer van de entiteit

try {
    $result = $apiInstance->geefHalte($entiteitnummer, $haltenummer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HaltesApi->geefHalte: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entiteitnummer** | **int**| Format - int32. nummer van de entiteit | |
| **haltenummer** | **int**| Format - int32. nummer van de entiteit | |

### Return type

[**\District09\DeLijnCoreAPI\Model\Halte**](../Model/Halte.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefHalteLijnrichtingenLijst()`

```php
geefHalteLijnrichtingenLijst($haltesleutels): \District09\DeLijnCoreAPI\Model\Lijnrichtingen
```

geef de lijnrichtingen die de opgegeven halte bedienen op basis van een lijst van halte sleutels

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


$apiInstance = new District09\DeLijnCoreAPI\Api\HaltesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$haltesleutels = 'haltesleutels_example'; // string | lijst van halte sleutels (bv 1_201302_5_5024541)

try {
    $result = $apiInstance->geefHalteLijnrichtingenLijst($haltesleutels);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HaltesApi->geefHalteLijnrichtingenLijst: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **haltesleutels** | **string**| lijst van halte sleutels (bv 1_201302_5_5024541) | |

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

## `geefHalteLijst()`

```php
geefHalteLijst($haltesleutels): \District09\DeLijnCoreAPI\Model\Haltes
```

geef een lijst van haltes op basis van een lijst van halte sleutels

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


$apiInstance = new District09\DeLijnCoreAPI\Api\HaltesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$haltesleutels = 'haltesleutels_example'; // string | lijst van halte sleutels (bv 1_201302_5_5024541)

try {
    $result = $apiInstance->geefHalteLijst($haltesleutels);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HaltesApi->geefHalteLijst: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **haltesleutels** | **string**| lijst van halte sleutels (bv 1_201302_5_5024541) | |

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

## `geefHaltes()`

```php
geefHaltes(): \District09\DeLijnCoreAPI\Model\Haltes
```

geef alle haltes

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


$apiInstance = new District09\DeLijnCoreAPI\Api\HaltesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->geefHaltes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HaltesApi->geefHaltes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `geefHaltesIndebuurt()`

```php
geefHaltesIndebuurt($latlng, $radius, $max_aantal_haltes): \District09\DeLijnCoreAPI\Model\Punten
```

geef de haltes van de verschillende vervoersmaatschappijen in de buurt van de opgegeven coordinaten

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


$apiInstance = new District09\DeLijnCoreAPI\Api\HaltesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$latlng = 'latlng_example'; // string | latitude en longitude gescheiden door komma bv, 51.056064,3.797336
$radius = 750; // int | Format - int32. de radius in meters binnen de welke naar haltes gezocht wordt
$max_aantal_haltes = 999; // int | Format - int32. het maximaal aantal haltes die van de operatie verwacht wordt

try {
    $result = $apiInstance->geefHaltesIndebuurt($latlng, $radius, $max_aantal_haltes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HaltesApi->geefHaltesIndebuurt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **latlng** | **string**| latitude en longitude gescheiden door komma bv, 51.056064,3.797336 | |
| **radius** | **int**| Format - int32. de radius in meters binnen de welke naar haltes gezocht wordt | [optional] [default to 750] |
| **max_aantal_haltes** | **int**| Format - int32. het maximaal aantal haltes die van de operatie verwacht wordt | [optional] [default to 999] |

### Return type

[**\District09\DeLijnCoreAPI\Model\Punten**](../Model/Punten.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefLijnrichtingenVoorHalte()`

```php
geefLijnrichtingenVoorHalte($entiteitnummer, $haltenummer): \District09\DeLijnCoreAPI\Model\Lijnrichtingen
```

geef de lijnrichtingen die de opgegeven halte bedienen

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


$apiInstance = new District09\DeLijnCoreAPI\Api\HaltesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entiteitnummer = 56; // int | Format - int32. nummer van de entiteit
$haltenummer = 56; // int | Format - int32. nummer van de halte

try {
    $result = $apiInstance->geefLijnrichtingenVoorHalte($entiteitnummer, $haltenummer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HaltesApi->geefLijnrichtingenVoorHalte: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entiteitnummer** | **int**| Format - int32. nummer van de entiteit | |
| **haltenummer** | **int**| Format - int32. nummer van de halte | |

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

## `geefOmleidingenVoorHalte()`

```php
geefOmleidingenVoorHalte($entiteitnummer, $haltenummer, $datum): \District09\DeLijnCoreAPI\Model\Omleidingen
```

geef de omleidingen voor de opgegeven halte

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


$apiInstance = new District09\DeLijnCoreAPI\Api\HaltesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entiteitnummer = 56; // int | Format - int32. nummer van de entiteit
$haltenummer = 56; // int | Format - int32. nummer van de halte
$datum = 'datum_example'; // string | datum in formaat yyyy-MM-dd met als default waarde de huidige datum

try {
    $result = $apiInstance->geefOmleidingenVoorHalte($entiteitnummer, $haltenummer, $datum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HaltesApi->geefOmleidingenVoorHalte: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entiteitnummer** | **int**| Format - int32. nummer van de entiteit | |
| **haltenummer** | **int**| Format - int32. nummer van de halte | |
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

## `geefOmleidingenVoorHalteLijst()`

```php
geefOmleidingenVoorHalteLijst($haltesleutels, $datum): \District09\DeLijnCoreAPI\Model\HalteOmleidingenLijst
```

geef de omleidingen voor de opgegeven halte sleutels

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


$apiInstance = new District09\DeLijnCoreAPI\Api\HaltesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$haltesleutels = 'haltesleutels_example'; // string | lijst van halte sleutels (bv 1_201302_5_5024541)
$datum = 'datum_example'; // string | datum in formaat yyyy-MM-dd met als default waarde de huidige datum

try {
    $result = $apiInstance->geefOmleidingenVoorHalteLijst($haltesleutels, $datum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HaltesApi->geefOmleidingenVoorHalteLijst: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **haltesleutels** | **string**| lijst van halte sleutels (bv 1_201302_5_5024541) | |
| **datum** | **string**| datum in formaat yyyy-MM-dd met als default waarde de huidige datum | [optional] |

### Return type

[**\District09\DeLijnCoreAPI\Model\HalteOmleidingenLijst**](../Model/HalteOmleidingenLijst.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geefStoringenVoorHalte()`

```php
geefStoringenVoorHalte($entiteitnummer, $haltenummer, $datum): \District09\DeLijnCoreAPI\Model\Omleidingen
```

geef de storingen voor de opgegeven halte

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


$apiInstance = new District09\DeLijnCoreAPI\Api\HaltesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entiteitnummer = 56; // int | Format - int32. nummer van de entiteit
$haltenummer = 56; // int | Format - int32. nummer van de halte
$datum = 'datum_example'; // string | datum in formaat yyyy-MM-dd met als default waarde de huidige datum

try {
    $result = $apiInstance->geefStoringenVoorHalte($entiteitnummer, $haltenummer, $datum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HaltesApi->geefStoringenVoorHalte: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entiteitnummer** | **int**| Format - int32. nummer van de entiteit | |
| **haltenummer** | **int**| Format - int32. nummer van de halte | |
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

## `geefStoringenVoorHalteLijst()`

```php
geefStoringenVoorHalteLijst($haltesleutels, $datum): \District09\DeLijnCoreAPI\Model\Omleidingen
```

geef de storingen de opgegeven halte sleutels

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


$apiInstance = new District09\DeLijnCoreAPI\Api\HaltesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$haltesleutels = 'haltesleutels_example'; // string | lijst van halte sleutels (bv 1_201302_5_5024541)
$datum = 'datum_example'; // string | datum in formaat yyyy-MM-dd met als default waarde de huidige datum

try {
    $result = $apiInstance->geefStoringenVoorHalteLijst($haltesleutels, $datum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HaltesApi->geefStoringenVoorHalteLijst: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **haltesleutels** | **string**| lijst van halte sleutels (bv 1_201302_5_5024541) | |
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
