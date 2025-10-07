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
 * Collection of app diagnostics associated with a user.
*/
class PowerliftIncidentMetadata implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PowerliftIncidentMetadata and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PowerliftIncidentMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PowerliftIncidentMetadata {
        return new PowerliftIncidentMetadata();
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
     * Gets the application property value. The name of the application the diagnostic is from. Example: com.microsoft.CompanyPortal
     * @return string|null
    */
    public function getApplication(): ?string {
        $val = $this->getBackingStore()->get('application');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'application'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the clientVersion property value. The version of the application. Example: 5.2203.1
     * @return string|null
    */
    public function getClientVersion(): ?string {
        $val = $this->getBackingStore()->get('clientVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientVersion'");
    }

    /**
     * Gets the createdAtDateTime property value. The time the app diagnostic was created. Example: 2022-04-19T17:24:45.313Z
     * @return DateTime|null
    */
    public function getCreatedAtDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdAtDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdAtDateTime'");
    }

    /**
     * Gets the easyId property value. The unique app diagnostic identifier as a user friendly 8 character hexadecimal string. Example: 8520467A
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
            'application' => fn(ParseNode $n) => $o->setApplication($n->getStringValue()),
            'clientVersion' => fn(ParseNode $n) => $o->setClientVersion($n->getStringValue()),
            'createdAtDateTime' => fn(ParseNode $n) => $o->setCreatedAtDateTime($n->getDateTimeValue()),
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
            'platform' => fn(ParseNode $n) => $o->setPlatform($n->getStringValue()),
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
     * Gets the locale property value. The locale information of the application. Example: en-US
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
     * Gets the platform property value. The device's OS the diagnostic is from. Example: iOS
     * @return string|null
    */
    public function getPlatform(): ?string {
        $val = $this->getBackingStore()->get('platform');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'platform'");
    }

    /**
     * Gets the powerliftId property value. The unique identifier of the app diagnostic. Example: 8520467a-49a9-44a4-8447-8dfb8bec6726
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
        $writer->writeStringValue('application', $this->getApplication());
        $writer->writeStringValue('clientVersion', $this->getClientVersion());
        $writer->writeDateTimeValue('createdAtDateTime', $this->getCreatedAtDateTime());
        $writer->writeStringValue('easyId', $this->getEasyId());
        $writer->writeCollectionOfPrimitiveValues('fileNames', $this->getFileNames());
        $writer->writeStringValue('locale', $this->getLocale());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('platform', $this->getPlatform());
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
     * Sets the application property value. The name of the application the diagnostic is from. Example: com.microsoft.CompanyPortal
     * @param string|null $value Value to set for the application property.
    */
    public function setApplication(?string $value): void {
        $this->getBackingStore()->set('application', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the clientVersion property value. The version of the application. Example: 5.2203.1
     * @param string|null $value Value to set for the clientVersion property.
    */
    public function setClientVersion(?string $value): void {
        $this->getBackingStore()->set('clientVersion', $value);
    }

    /**
     * Sets the createdAtDateTime property value. The time the app diagnostic was created. Example: 2022-04-19T17:24:45.313Z
     * @param DateTime|null $value Value to set for the createdAtDateTime property.
    */
    public function setCreatedAtDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdAtDateTime', $value);
    }

    /**
     * Sets the easyId property value. The unique app diagnostic identifier as a user friendly 8 character hexadecimal string. Example: 8520467A
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
     * Sets the locale property value. The locale information of the application. Example: en-US
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
     * Sets the platform property value. The device's OS the diagnostic is from. Example: iOS
     * @param string|null $value Value to set for the platform property.
    */
    public function setPlatform(?string $value): void {
        $this->getBackingStore()->set('platform', $value);
    }

    /**
     * Sets the powerliftId property value. The unique identifier of the app diagnostic. Example: 8520467a-49a9-44a4-8447-8dfb8bec6726
     * @param string|null $value Value to set for the powerliftId property.
    */
    public function setPowerliftId(?string $value): void {
        $this->getBackingStore()->set('powerliftId', $value);
    }

}
