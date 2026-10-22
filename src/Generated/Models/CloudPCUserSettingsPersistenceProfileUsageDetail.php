<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPCUserSettingsPersistenceProfileUsageDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPCUserSettingsPersistenceProfileUsageDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPCUserSettingsPersistenceProfileUsageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPCUserSettingsPersistenceProfileUsageDetail {
        return new CloudPCUserSettingsPersistenceProfileUsageDetail();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'lastUsedSizeSyncDateTime' => fn(ParseNode $n) => $o->setLastUsedSizeSyncDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'profileUsedSizeInGB' => fn(ParseNode $n) => $o->setProfileUsedSizeInGB($n->getFloatValue()),
        ];
    }

    /**
     * Gets the lastUsedSizeSyncDateTime property value. The lastUsedSizeSyncDateTime property
     * @return DateTime|null
    */
    public function getLastUsedSizeSyncDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastUsedSizeSyncDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUsedSizeSyncDateTime'");
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
     * Gets the profileUsedSizeInGB property value. The profileUsedSizeInGB property
     * @return float|null
    */
    public function getProfileUsedSizeInGB(): ?float {
        $val = $this->getBackingStore()->get('profileUsedSizeInGB');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'profileUsedSizeInGB'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('lastUsedSizeSyncDateTime', $this->getLastUsedSizeSyncDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeFloatValue('profileUsedSizeInGB', $this->getProfileUsedSizeInGB());
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
     * Sets the lastUsedSizeSyncDateTime property value. The lastUsedSizeSyncDateTime property
     * @param DateTime|null $value Value to set for the lastUsedSizeSyncDateTime property.
    */
    public function setLastUsedSizeSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUsedSizeSyncDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the profileUsedSizeInGB property value. The profileUsedSizeInGB property
     * @param float|null $value Value to set for the profileUsedSizeInGB property.
    */
    public function setProfileUsedSizeInGB(?float $value): void {
        $this->getBackingStore()->set('profileUsedSizeInGB', $value);
    }

}
