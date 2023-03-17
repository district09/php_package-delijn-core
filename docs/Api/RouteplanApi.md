# District09\DeLijnCoreAPI\RouteplanApi

All URIs are relative to https://api.delijn.be/DLKernOpenData/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**geefRouteplan()**](RouteplanApi.md#geefRouteplan) | **GET** /routeplan/{vertrekLatlng}/{bestemmingLatlng} | geef een initëel, vroeger, later of laatste routeplan |


## `geefRouteplan()`

```php
geefRouteplan($vertrek_latlng, $bestemming_latlng, $aanvraag_type, $tijdstip, $vertrek_aankomst, $vervoers_optie): \District09\DeLijnCoreAPI\Model\Routeplan
```

geef een initëel, vroeger, later of laatste routeplan

voor een vroeger routeplan dient de parameter tijdstip overeen te komen met het aankomsttijdsip (duurtijd.einde) van de vroegste reisweg, voor een later routeplan dient de parameter tijdstip overeen te komen het het vertrektijdstip (duurtijd.start) van de laatste reisweg

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


$apiInstance = new District09\DeLijnCoreAPI\Api\RouteplanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vertrek_latlng = 'vertrek_latlng_example'; // string | latitude en longitude van de vertrek locatie gescheiden door komma bv, 51.056064,3.797336
$bestemming_latlng = 'bestemming_latlng_example'; // string | latitude en longitude van de aankomst locatie gescheiden door komma bv, 51.056064,3.797336
$aanvraag_type = 'INITIEEL'; // string | bepaalt of de aanvraag gaat over een initiële, vroegere, latere of laatste routeplan
$tijdstip = 'tijdstip_example'; // string | tijdstip van vertrekken of aankomen in formaat yyyy-MM-dd'T'HH:mm:ss bv. 2016-11-11T22:00:00
$vertrek_aankomst = 'VERTREK'; // string | verwijst het tijdstip naar het moment van vertrek of aankomst
$vervoers_optie = array('vervoers_optie_example'); // string[] | Lijst van vervoersopties met als default BUS,TRAM,METRO en TREIN

try {
    $result = $apiInstance->geefRouteplan($vertrek_latlng, $bestemming_latlng, $aanvraag_type, $tijdstip, $vertrek_aankomst, $vervoers_optie);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RouteplanApi->geefRouteplan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vertrek_latlng** | **string**| latitude en longitude van de vertrek locatie gescheiden door komma bv, 51.056064,3.797336 | |
| **bestemming_latlng** | **string**| latitude en longitude van de aankomst locatie gescheiden door komma bv, 51.056064,3.797336 | |
| **aanvraag_type** | **string**| bepaalt of de aanvraag gaat over een initiële, vroegere, latere of laatste routeplan | [optional] [default to &#39;INITIEEL&#39;] |
| **tijdstip** | **string**| tijdstip van vertrekken of aankomen in formaat yyyy-MM-dd&#39;T&#39;HH:mm:ss bv. 2016-11-11T22:00:00 | [optional] |
| **vertrek_aankomst** | **string**| verwijst het tijdstip naar het moment van vertrek of aankomst | [optional] [default to &#39;VERTREK&#39;] |
| **vervoers_optie** | [**string[]**](../Model/string.md)| Lijst van vervoersopties met als default BUS,TRAM,METRO en TREIN | [optional] |

### Return type

[**\District09\DeLijnCoreAPI\Model\Routeplan**](../Model/Routeplan.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
