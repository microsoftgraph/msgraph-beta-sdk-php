<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type contains specific information regarding a Powerlift incident, such as when it was uploaded, the platform the device was on, and a string array of files associated to the incident.
*/
class PowerliftIncidentDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PowerliftIncidentDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PowerliftIncidentDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PowerliftIncidentDetail {
        return new PowerliftIncidentDetail();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the applicationName property value. TThe name of the application for which the diagnostic is collected. Example: com.microsoft.CompanyPortal
     * @return string|null
    */
    public function getApplicationName(): ?string {
        $val = $this->getBackingStore()->get('applicationName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationName'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the clientApplicationVersion property value. The version of the application for which the diagnostic is collected. Example: 5.2203.1
     * @return string|null
    */
    public function getClientApplicationVersion(): ?string {
        $val = $this->getBackingStore()->get('clientApplicationVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientApplicationVersion'");
    }

    /**
     * Gets the createdDateTime property value. The time the app diagnostic was created. The value cannot be modified and is automatically populated when the diagnostic is uploaded. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time.Example: 2022-04-19T17:24:45.313Z
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the easyId property value. The unique app diagnostic identifier as a user friendly 8 character hexadecimal string. This id is smaller compared to the powerliftId. Th Example: 8520467A
     * @return string|null
    */
    public function getEasyId(): ?string {
        $val = $this->getBackingStore()->get('easyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'easyId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicationName' => fn(ParseNode $n) => $o->setApplicationName($n->getStringValue()),
            'clientApplicationVersion' => fn(ParseNode $n) => $o->setClientApplicationVersion($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'easyId' => fn(ParseNode $n) => $o->setEasyId($n->getStringValue()),
            'fileNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setFileNames($val);
            },
            'locale' => fn(ParseNode $n) => $o->setLocale($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'platformDisplayName' => fn(ParseNode $n) => $o->setPlatformDisplayName($n->getStringValue()),
            'powerliftId' => fn(ParseNode $n) => $o->setPowerliftId($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileNames property value. A list of files that are associated with the diagnostic.
     * @return array<string>|null
    */
    public function getFileNames(): ?array {
        $val = $this->getBackingStore()->get('fileNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileNames'");
    }

    /**
     * Gets the locale property value. The locale information of the application for which the diagnostic is collected. Example: en-US
     * @return string|null
    */
    public function getLocale(): ?string {
        $val = $this->getBackingStore()->get('locale');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locale'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the platformDisplayName property value. The operating system of the device from which diagnostics are collected. Example: iOS
     * @return string|null
    */
    public function getPlatformDisplayName(): ?string {
        $val = $this->getBackingStore()->get('platformDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'platformDisplayName'");
    }

    /**
     * Gets the powerliftId property value. The unique identifier of the app diagnostic. This id is assigned to a diagnostic when it is uploaded to Powerlift. Example: 8520467a-49a9-44a4-8447-8dfb8bec6726
     * @return string|null
    */
    public function getPowerliftId(): ?string {
        $val = $this->getBackingStore()->get('powerliftId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'powerliftId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('applicationName', $this->getApplicationName());
        $writer->writeStringValue('clientApplicationVersion', $this->getClientApplicationVersion());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('easyId', $this->getEasyId());
        $writer->writeCollectionOfPrimitiveValues('fileNames', $this->getFileNames());
        $writer->writeStringValue('locale', $this->getLocale());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('platformDisplayName', $this->getPlatformDisplayName());
        $writer->writeStringValue('powerliftId', $this->getPowerliftId());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the applicationName property value. TThe name of the application for which the diagnostic is collected. Example: com.microsoft.CompanyPortal
     * @param string|null $value Value to set for the applicationName property.
    */
    public function setApplicationName(?string $value): void {
        $this->getBackingStore()->set('applicationName', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the clientApplicationVersion property value. The version of the application for which the diagnostic is collected. Example: 5.2203.1
     * @param string|null $value Value to set for the clientApplicationVersion property.
    */
    public function setClientApplicationVersion(?string $value): void {
        $this->getBackingStore()->set('clientApplicationVersion', $value);
    }

    /**
     * Sets the createdDateTime property value. The time the app diagnostic was created. The value cannot be modified and is automatically populated when the diagnostic is uploaded. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time.Example: 2022-04-19T17:24:45.313Z
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the easyId property value. The unique app diagnostic identifier as a user friendly 8 character hexadecimal string. This id is smaller compared to the powerliftId. Th Example: 8520467A
     * @param string|null $value Value to set for the easyId property.
    */
    public function setEasyId(?string $value): void {
        $this->getBackingStore()->set('easyId', $value);
    }

    /**
     * Sets the fileNames property value. A list of files that are associated with the diagnostic.
     * @param array<string>|null $value Value to set for the fileNames property.
    */
    public function setFileNames(?array $value): void {
        $this->getBackingStore()->set('fileNames', $value);
    }

    /**
     * Sets the locale property value. The locale information of the application for which the diagnostic is collected. Example: en-US
     * @param string|null $value Value to set for the locale property.
    */
    public function setLocale(?string $value): void {
        $this->getBackingStore()->set('locale', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the platformDisplayName property value. The operating system of the device from which diagnostics are collected. Example: iOS
     * @param string|null $value Value to set for the platformDisplayName property.
    */
    public function setPlatformDisplayName(?string $value): void {
        $this->getBackingStore()->set('platformDisplayName', $value);
    }

    /**
     * Sets the powerliftId property value. The unique identifier of the app diagnostic. This id is assigned to a diagnostic when it is uploaded to Powerlift. Example: 8520467a-49a9-44a4-8447-8dfb8bec6726
     * @param string|null $value Value to set for the powerliftId property.
    */
    public function setPowerliftId(?string $value): void {
        $this->getBackingStore()->set('powerliftId', $value);
    }

}
