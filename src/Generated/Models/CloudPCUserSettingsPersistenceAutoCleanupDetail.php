<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPCUserSettingsPersistenceAutoCleanupDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPCUserSettingsPersistenceAutoCleanupDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPCUserSettingsPersistenceAutoCleanupDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPCUserSettingsPersistenceAutoCleanupDetail {
        return new CloudPCUserSettingsPersistenceAutoCleanupDetail();
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
     * Gets the autoCleanupMode property value. The autoCleanupMode property
     * @return CloudPcAutoCleanupMode|null
    */
    public function getAutoCleanupMode(): ?CloudPcAutoCleanupMode {
        $val = $this->getBackingStore()->get('autoCleanupMode');
        if (is_null($val) || $val instanceof CloudPcAutoCleanupMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autoCleanupMode'");
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
            'autoCleanupMode' => fn(ParseNode $n) => $o->setAutoCleanupMode($n->getEnumValue(CloudPcAutoCleanupMode::class)),
            'inactiveProfileRetentionDays' => fn(ParseNode $n) => $o->setInactiveProfileRetentionDays($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the inactiveProfileRetentionDays property value. The inactiveProfileRetentionDays property
     * @return int|null
    */
    public function getInactiveProfileRetentionDays(): ?int {
        $val = $this->getBackingStore()->get('inactiveProfileRetentionDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inactiveProfileRetentionDays'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('autoCleanupMode', $this->getAutoCleanupMode());
        $writer->writeIntegerValue('inactiveProfileRetentionDays', $this->getInactiveProfileRetentionDays());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the autoCleanupMode property value. The autoCleanupMode property
     * @param CloudPcAutoCleanupMode|null $value Value to set for the autoCleanupMode property.
    */
    public function setAutoCleanupMode(?CloudPcAutoCleanupMode $value): void {
        $this->getBackingStore()->set('autoCleanupMode', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the inactiveProfileRetentionDays property value. The inactiveProfileRetentionDays property
     * @param int|null $value Value to set for the inactiveProfileRetentionDays property.
    */
    public function setInactiveProfileRetentionDays(?int $value): void {
        $this->getBackingStore()->set('inactiveProfileRetentionDays', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
