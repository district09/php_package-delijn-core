# OpenAPIClient-php

Dit document beschrijft de kern operaties van de Open Data API (v1)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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


$apiInstance = new District09\DeLijnCoreAPI\Api\DistrictenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string

try {
    $result = $apiInstance->geefDistrict($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistrictenApi->geefDistrict: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.delijn.be/DLKernOpenData/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DistrictenApi* | [**geefDistrict**](docs/Api/DistrictenApi.md#geefdistrict) | **GET** /districten/{code} | geef district
*DistrictenApi* | [**geefDistricten**](docs/Api/DistrictenApi.md#geefdistricten) | **GET** /districten | geef alle districten
*DistrictenApi* | [**geefHaltesInDistrict**](docs/Api/DistrictenApi.md#geefhaltesindistrict) | **GET** /districten/{code}/haltes | geef haltes in district
*EntiteitenApi* | [**geefEntiteit**](docs/Api/EntiteitenApi.md#geefentiteit) | **GET** /entiteiten/{entiteitnummer} | geef een entiteit op basis van het opgegeven entiteitnummer
*EntiteitenApi* | [**geefEntiteiten**](docs/Api/EntiteitenApi.md#geefentiteiten) | **GET** /entiteiten | geef alle entiteiten
*EntiteitenApi* | [**geefGemeentenVoorEntiteit**](docs/Api/EntiteitenApi.md#geefgemeentenvoorentiteit) | **GET** /entiteiten/{entiteitnummer}/gemeenten | geef alle gemeenten die beheerd worden door een entiteit
*EntiteitenApi* | [**geefHaltesVoorEntiteit**](docs/Api/EntiteitenApi.md#geefhaltesvoorentiteit) | **GET** /entiteiten/{entiteitnummer}/haltes | geef alle haltes die beheerd worden door een entiteit
*EntiteitenApi* | [**geefLijnenVoorEntiteit**](docs/Api/EntiteitenApi.md#geeflijnenvoorentiteit) | **GET** /entiteiten/{entiteitnummer}/lijnen | geef alle lijnen die beheerd worden door een entiteit
*GemeentenApi* | [**geefGemeente**](docs/Api/GemeentenApi.md#geefgemeente) | **GET** /gemeenten/{gemeenteNummer} | geef een gemeente op basis van het opgegeven gemeentenummer
*GemeentenApi* | [**geefGemeenten**](docs/Api/GemeentenApi.md#geefgemeenten) | **GET** /gemeenten | geef alle gemeenten
*GemeentenApi* | [**geefHaltesVoorGemeente**](docs/Api/GemeentenApi.md#geefhaltesvoorgemeente) | **GET** /gemeenten/{gemeenteNummer}/haltes | geef alle haltes binnen een gemeente
*GemeentenApi* | [**geefHaltesVoorGemeentes**](docs/Api/GemeentenApi.md#geefhaltesvoorgemeentes) | **GET** /gemeenten/lijst/{gemeenteNummers}/haltes | geef alle haltes voor de lijst van gemeentenummers
*GemeentenApi* | [**geefLijnenVoorGemeente**](docs/Api/GemeentenApi.md#geeflijnenvoorgemeente) | **GET** /gemeenten/{gemeenteNummer}/lijnen | geef alle lijnen die een gemeente bedienen
*HaltesApi* | [**geefDienstregelingVoorHalte**](docs/Api/HaltesApi.md#geefdienstregelingvoorhalte) | **GET** /haltes/{entiteitnummer}/{haltenummer}/dienstregelingen | geef de dienstregeling voor de opgegeven halte
*HaltesApi* | [**geefDienstregelingVoorHalteLijst**](docs/Api/HaltesApi.md#geefdienstregelingvoorhaltelijst) | **GET** /haltes/lijst/{haltesleutels}/dienstregelingen | geef de dienstregeling voor de opgegeven halte sleutels
*HaltesApi* | [**geefDoorkomstenVoorHalte**](docs/Api/HaltesApi.md#geefdoorkomstenvoorhalte) | **GET** /haltes/{entiteitnummer}/{haltenummer}/real-time | geef de real-time doorkomsten voor de opgegeven halte
*HaltesApi* | [**geefDoorkomstenVoorHalteLijst**](docs/Api/HaltesApi.md#geefdoorkomstenvoorhaltelijst) | **GET** /haltes/lijst/{haltesleutels}/real-time | geef de real-time doorkomsten voor de opgegeven halte sleutels
*HaltesApi* | [**geefHalte**](docs/Api/HaltesApi.md#geefhalte) | **GET** /haltes/{entiteitnummer}/{haltenummer} | geef een halte op basis van het opgegeven haltenummer
*HaltesApi* | [**geefHalteLijnrichtingenLijst**](docs/Api/HaltesApi.md#geefhaltelijnrichtingenlijst) | **GET** /haltes/lijst/{haltesleutels}/lijnrichtingen | geef de lijnrichtingen die de opgegeven halte bedienen op basis van een lijst van halte sleutels
*HaltesApi* | [**geefHalteLijst**](docs/Api/HaltesApi.md#geefhaltelijst) | **GET** /haltes/lijst/{haltesleutels} | geef een lijst van haltes op basis van een lijst van halte sleutels
*HaltesApi* | [**geefHaltes**](docs/Api/HaltesApi.md#geefhaltes) | **GET** /haltes | geef alle haltes
*HaltesApi* | [**geefHaltesIndebuurt**](docs/Api/HaltesApi.md#geefhaltesindebuurt) | **GET** /haltes/indebuurt/{latlng} | geef de haltes van de verschillende vervoersmaatschappijen in de buurt van de opgegeven coordinaten
*HaltesApi* | [**geefLijnrichtingenVoorHalte**](docs/Api/HaltesApi.md#geeflijnrichtingenvoorhalte) | **GET** /haltes/{entiteitnummer}/{haltenummer}/lijnrichtingen | geef de lijnrichtingen die de opgegeven halte bedienen
*HaltesApi* | [**geefOmleidingenVoorHalte**](docs/Api/HaltesApi.md#geefomleidingenvoorhalte) | **GET** /haltes/{entiteitnummer}/{haltenummer}/omleidingen | geef de omleidingen voor de opgegeven halte
*HaltesApi* | [**geefOmleidingenVoorHalteLijst**](docs/Api/HaltesApi.md#geefomleidingenvoorhaltelijst) | **GET** /haltes/lijst/{haltesleutels}/omleidingen | geef de omleidingen voor de opgegeven halte sleutels
*HaltesApi* | [**geefStoringenVoorHalte**](docs/Api/HaltesApi.md#geefstoringenvoorhalte) | **GET** /haltes/{entiteitnummer}/{haltenummer}/storingen | geef de storingen voor de opgegeven halte
*HaltesApi* | [**geefStoringenVoorHalteLijst**](docs/Api/HaltesApi.md#geefstoringenvoorhaltelijst) | **GET** /haltes/lijst/{haltesleutels}/storingen | geef de storingen de opgegeven halte sleutels
*LijnenApi* | [**geefDienstregelingVoorLijnrichting**](docs/Api/LijnenApi.md#geefdienstregelingvoorlijnrichting) | **GET** /lijnen/{entiteitnummer}/{lijnnummer}/lijnrichtingen/{richting}/dienstregelingen | geef de dienstregeling voor de opgegeven lijnrichting
*LijnenApi* | [**geefDoorkomstVoorLijnrichting**](docs/Api/LijnenApi.md#geefdoorkomstvoorlijnrichting) | **GET** /lijnen/{entiteitnummer}/{lijnnummer}/lijnrichtingen/{richting}/real-time | geef de real-time doorkomsten voor de opgegeven lijnrichting
*LijnenApi* | [**geefGemeentenVoorLijn**](docs/Api/LijnenApi.md#geefgemeentenvoorlijn) | **GET** /lijnen/{entiteitnummer}/{lijnnummer}/gemeenten | geef de gemeenten die bediend worden voor de opgegeven lijn
*LijnenApi* | [**geefGeplandeStoringenVoorLijnrichting**](docs/Api/LijnenApi.md#geefgeplandestoringenvoorlijnrichting) | **GET** /lijnen/{entiteitnummer}/{lijnnummer}/lijnrichtingen/{richting}/omleidingen | geef de omleidingen voor de opgegeven lijnrichting
*LijnenApi* | [**geefGeplandeStoringenVoorLijnrichtingenLijst**](docs/Api/LijnenApi.md#geefgeplandestoringenvoorlijnrichtingenlijst) | **GET** /lijnen/lijst/{lijnrichtingsleutels}/omleidingen | geef de omleidingen voor de opgegeven lijst van lijnrichtingen
*LijnenApi* | [**geefHaltesVoorLijnrichting**](docs/Api/LijnenApi.md#geefhaltesvoorlijnrichting) | **GET** /lijnen/{entiteitnummer}/{lijnnummer}/lijnrichtingen/{richting}/haltes | geef de haltes die de door opgegeven lijnrichting worden bediend
*LijnenApi* | [**geefLijn**](docs/Api/LijnenApi.md#geeflijn) | **GET** /lijnen/{entiteitnummer}/{lijnnummer} | geef een lijn op basis van het opgegeven lijnnummer
*LijnenApi* | [**geefLijnLijst**](docs/Api/LijnenApi.md#geeflijnlijst) | **GET** /lijnen/lijst/{lijnsleutels} | geef een lijst van lijnen op basis van een lijst van lijn sleutels
*LijnenApi* | [**geefLijnen**](docs/Api/LijnenApi.md#geeflijnen) | **GET** /lijnen | geef alle lijnen
*LijnenApi* | [**geefLijnkleur**](docs/Api/LijnenApi.md#geeflijnkleur) | **GET** /lijnen/{entiteitnummer}/{lijnnummer}/lijnkleuren | geef de lijnkleuren voor het opgegeven lijnnummer
*LijnenApi* | [**geefLijnkleurLijst**](docs/Api/LijnenApi.md#geeflijnkleurlijst) | **GET** /lijnen/lijst/{lijnsleutels}/lijnkleuren | geef de lijnkleuren van lijnen op basis van een lijst van lijn sleutels
*LijnenApi* | [**geefLijnrichting**](docs/Api/LijnenApi.md#geeflijnrichting) | **GET** /lijnen/{entiteitnummer}/{lijnnummer}/lijnrichtingen/{richting} | geef een lijnrichting voor de opgegeven lijnrichtingcode
*LijnenApi* | [**geefLijnrichtingen**](docs/Api/LijnenApi.md#geeflijnrichtingen) | **GET** /lijnen/{entiteitnummer}/{lijnnummer}/lijnrichtingen | geef de lijnrichtingen voor het opgegeven lijnnummer
*LijnenApi* | [**geefLijnrichtingenLijst**](docs/Api/LijnenApi.md#geeflijnrichtingenlijst) | **GET** /lijnen/lijst/{lijnsleutels}/lijnrichtingen | geef de lijnrichtingen van lijnen op basis van een lijst van lijn sleutels
*LijnenApi* | [**geefOnGeplandeStoringenVoorLijnrichting**](docs/Api/LijnenApi.md#geefongeplandestoringenvoorlijnrichting) | **GET** /lijnen/{entiteitnummer}/{lijnnummer}/lijnrichtingen/{richting}/storingen | geef de storingen voor de opgegeven lijnrichting
*LijnenApi* | [**geefOnGeplandeStoringenVoorLijnrichtingenLijst**](docs/Api/LijnenApi.md#geefongeplandestoringenvoorlijnrichtingenlijst) | **GET** /lijnen/lijst/{lijnrichtingsleutels}/storingen | geef de storingen voor de opgegeven lijst van lijnrichtingen
*LijnenApi* | [**geefRitVoorLijnrichting**](docs/Api/LijnenApi.md#geefritvoorlijnrichting) | **GET** /lijnen/{entiteitnummer}/{lijnnummer}/lijnrichtingen/{richting}/rit/{ritnummer} | geef rit(ten) voor de opgegeven lijnrichting
*LijnkleurenApi* | [**geefLijnkleurcode**](docs/Api/LijnkleurenApi.md#geeflijnkleurcode) | **GET** /kleuren/{code} | geef een lijnkleur op basis van de opgegeven code
*LijnkleurenApi* | [**geefLijnkleuren**](docs/Api/LijnkleurenApi.md#geeflijnkleuren) | **GET** /kleuren | geef alle lijnkleuren
*OmleidingenApi* | [**geefOmleiding**](docs/Api/OmleidingenApi.md#geefomleiding) | **GET** /omleidingen/{referentieOmleiding} | geef de omleiding op basis van zijn referentie id
*OmleidingenApi* | [**geefOmleidingen**](docs/Api/OmleidingenApi.md#geefomleidingen) | **GET** /omleidingen | geef alle omleidingen voor een periode van hoogstens een maand
*RouteplanApi* | [**geefRouteplan**](docs/Api/RouteplanApi.md#geefrouteplan) | **GET** /routeplan/{vertrekLatlng}/{bestemmingLatlng} | geef een initëel, vroeger, later of laatste routeplan
*VervoerregiosApi* | [**geefLijnenVoorVervoerRegio**](docs/Api/VervoerregiosApi.md#geeflijnenvoorvervoerregio) | **GET** /vervoerregios/{code}/lijnen | geef alle lijnen in een vervoerregio
*VervoerregiosApi* | [**geefVervoerRegio**](docs/Api/VervoerregiosApi.md#geefvervoerregio) | **GET** /vervoerregios/{code} | geef vervoerregio
*VervoerregiosApi* | [**geefVervoerRegios**](docs/Api/VervoerregiosApi.md#geefvervoerregios) | **GET** /vervoerregios | geef alle vervoerregios

## Models

- [DeLijnPunt](docs/Model/DeLijnPunt.md)
- [District](docs/Model/District.md)
- [Districten](docs/Model/Districten.md)
- [Doorkomst](docs/Model/Doorkomst.md)
- [Duration](docs/Model/Duration.md)
- [Duur](docs/Model/Duur.md)
- [Entiteit](docs/Model/Entiteit.md)
- [Entiteiten](docs/Model/Entiteiten.md)
- [Gemeente](docs/Model/Gemeente.md)
- [Gemeenten](docs/Model/Gemeenten.md)
- [GeoCoordinaat](docs/Model/GeoCoordinaat.md)
- [Halte](docs/Model/Halte.md)
- [HalteDoorkomst](docs/Model/HalteDoorkomst.md)
- [HalteDoorkomsten](docs/Model/HalteDoorkomsten.md)
- [HalteDoorkomstenLijst](docs/Model/HalteDoorkomstenLijst.md)
- [HalteOmleidingen](docs/Model/HalteOmleidingen.md)
- [HalteOmleidingenLijst](docs/Model/HalteOmleidingenLijst.md)
- [Haltes](docs/Model/Haltes.md)
- [Lijn](docs/Model/Lijn.md)
- [LijnKleurCode](docs/Model/LijnKleurCode.md)
- [LijnLijnrichtingen](docs/Model/LijnLijnrichtingen.md)
- [LijnLijnrichtingenLijst](docs/Model/LijnLijnrichtingenLijst.md)
- [Lijnen](docs/Model/Lijnen.md)
- [Lijnkleur](docs/Model/Lijnkleur.md)
- [LijnkleurCodes](docs/Model/LijnkleurCodes.md)
- [Lijnkleuren](docs/Model/Lijnkleuren.md)
- [Lijnrichting](docs/Model/Lijnrichting.md)
- [Lijnrichtingen](docs/Model/Lijnrichtingen.md)
- [Link](docs/Model/Link.md)
- [MIVBPunt](docs/Model/MIVBPunt.md)
- [NMBSPunt](docs/Model/NMBSPunt.md)
- [Nota](docs/Model/Nota.md)
- [Omleiding](docs/Model/Omleiding.md)
- [Omleidingen](docs/Model/Omleidingen.md)
- [Periode](docs/Model/Periode.md)
- [Punt](docs/Model/Punt.md)
- [Punten](docs/Model/Punten.md)
- [QName](docs/Model/QName.md)
- [RGB](docs/Model/RGB.md)
- [Reisweg](docs/Model/Reisweg.md)
- [ReiswegStap](docs/Model/ReiswegStap.md)
- [Rit](docs/Model/Rit.md)
- [Ritten](docs/Model/Ritten.md)
- [Routeplan](docs/Model/Routeplan.md)
- [TECPunt](docs/Model/TECPunt.md)
- [VervoerRegio](docs/Model/VervoerRegio.md)
- [VervoerRegios](docs/Model/VervoerRegios.md)
- [VoertuigReiswegStap](docs/Model/VoertuigReiswegStap.md)
- [VoertuigReiswegStapAllOf](docs/Model/VoertuigReiswegStapAllOf.md)
- [WachtenReiswegStap](docs/Model/WachtenReiswegStap.md)
- [WandelReiswegStap](docs/Model/WandelReiswegStap.md)
- [WandelReiswegStapAllOf](docs/Model/WandelReiswegStapAllOf.md)

## Authorization

### apiKeyHeader

- **Type**: API key
- **API key parameter name**: Ocp-Apim-Subscription-Key
- **Location**: HTTP header



### apiKeyQuery

- **Type**: API key
- **API key parameter name**: subscription-key
- **Location**: URL query string


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1`
    - Package version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
