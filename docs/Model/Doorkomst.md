# # Doorkomst

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entiteitnummer** | **string** | entiteit nummer |
**lijnnummer** | **int** | lijn nummer |
**richting** | **string** | richting van de rit |
**ritnummer** | **string** |  | [optional]
**bestemming** | **string** | afgekorte halte naam van de laatste halte van de rit | [optional]
**vias** | **string[]** | lijst van plaatsen die deze rit bedient als afwijkend t.o.v. de reguliere ritten | [optional]
**haltenummer** | **string** | halte nummer (key waarde) |
**dienstregeling_tijdstip** | **\DateTime** | doorkomsttijdstip volgens de dienstregeling van een rit aan de halte |
**real_time_tijdstip** | **\DateTime** | real-time doorkomsttijdstip van een rit aan de halte | [optional] [readonly]
**vrtnum** | **string** | nummer van het voertuig | [optional]
**prediction_statussen** | **string[]** | lijst van statussen van de meting van de realtime doorkomst | [optional]
**links** | [**\District09\DeLijnCoreAPI\Model\Link[]**](Link.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
