<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\Date;

/**
 * Different Windows' versions have Edition specific support timelines. This complex type defines the date until which a particular edition is supported in a Windows' version.
*/
class ManagedDeviceWindowsOperatingSystemEdition implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ManagedDeviceWindowsOperatingSystemEdition and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedDeviceWindowsOperatingSystemEdition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedDeviceWindowsOperatingSystemEdition {
        return new ManagedDeviceWindowsOperatingSystemEdition();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the editionType property value. Windows Operating System is available in different editions, which have a specific set of features available. This enum type defines the corresponding edition.
     * @return ManagedDeviceWindowsOperatingSystemEditionType|null
    */
    public function getEditionType(): ?ManagedDeviceWindowsOperatingSystemEditionType {
        $val = $this->getBackingStore()->get('editionType');
        if (is_null($val) || $val instanceof ManagedDeviceWindowsOperatingSystemEditionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'editionType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'editionType' => fn(ParseNode $n) => $o->setEditionType($n->getEnumValue(ManagedDeviceWindowsOperatingSystemEditionType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'supportEndDate' => fn(ParseNode $n) => $o->setSupportEndDate($n->getDateValue()),
        ];
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
     * Gets the supportEndDate property value. Indicates the Date until which this Operating System edition type is officially supported. The Timestamp type represents date and time information using ISO 8601 format and is always in Pacific Time Zone (PT). For example, 2014-01-01 would mean '2014-01-01T07:00:00Z' in UTC time. Returned by default. Read-only.
     * @return Date|null
    */
    public function getSupportEndDate(): ?Date {
        $val = $this->getBackingStore()->get('supportEndDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportEndDate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('editionType', $this->getEditionType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateValue('supportEndDate', $this->getSupportEndDate());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the editionType property value. Windows Operating System is available in different editions, which have a specific set of features available. This enum type defines the corresponding edition.
     * @param ManagedDeviceWindowsOperatingSystemEditionType|null $value Value to set for the editionType property.
    */
    public function setEditionType(?ManagedDeviceWindowsOperatingSystemEditionType $value): void {
        $this->getBackingStore()->set('editionType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the supportEndDate property value. Indicates the Date until which this Operating System edition type is officially supported. The Timestamp type represents date and time information using ISO 8601 format and is always in Pacific Time Zone (PT). For example, 2014-01-01 would mean '2014-01-01T07:00:00Z' in UTC time. Returned by default. Read-only.
     * @param Date|null $value Value to set for the supportEndDate property.
    */
    public function setSupportEndDate(?Date $value): void {
        $this->getBackingStore()->set('supportEndDate', $value);
    }

}
