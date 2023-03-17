# # Halte

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entiteitnummer** | **string** | nummer entiteit (key waarde) |
**haltenummer** | **string** | halte nummer (key waarde) |
**omschrijving** | **string** | omschrijving van de halte |
**gemeentenummer** | **int** | nummer gemeente (key waarde) | [optional]
**omschrijving_gemeente** | **string** | naam van de gemeente waar de halte zich bevindt | [optional]
**district_code** | **string** | districtcode van het district waar de halte zich bevindt |
**geo_coordinaat** | [**\District09\DeLijnCoreAPI\Model\GeoCoordinaat**](GeoCoordinaat.md) |  | [optional]
**halte_toegankelijkheden** | **string[]** | omschrijving van de toegankelijkheid van een halte | [optional]
**hoofd_halte** | **bool** | is de halte een hoofdhalte (attribuut voor toekomstig gebruik, geeft momenteel null als waarde) | [optional]
**taal** | **string** | de taal waarin de berichten voor de halte worden weergegeven |
**links** | [**\District09\DeLijnCoreAPI\Model\Link[]**](Link.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
