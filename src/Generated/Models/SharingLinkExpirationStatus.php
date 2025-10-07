<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SharingLinkExpirationStatus implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SharingLinkExpirationStatus and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharingLinkExpirationStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharingLinkExpirationStatus {
        return new SharingLinkExpirationStatus();
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
     * Gets the defaultExpirationInDays property value. Default link expiration in days. Returns -1 if there is no required expiration time.
     * @return int|null
    */
    public function getDefaultExpirationInDays(): ?int {
        $val = $this->getBackingStore()->get('defaultExpirationInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultExpirationInDays'");
    }

    /**
     * Gets the disabledReason property value. Provides a description of why this operation is not enabled. Only returned if this operation is not enabled.
     * @return string|null
    */
    public function getDisabledReason(): ?string {
        $val = $this->getBackingStore()->get('disabledReason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disabledReason'");
    }

    /**
     * Gets the enabled property value. Indicates whether this operation is enabled.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        $val = $this->getBackingStore()->get('enabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enabled'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'defaultExpirationInDays' => fn(ParseNode $n) => $o->setDefaultExpirationInDays($n->getIntegerValue()),
            'disabledReason' => fn(ParseNode $n) => $o->setDisabledReason($n->getStringValue()),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('defaultExpirationInDays', $this->getDefaultExpirationInDays());
        $writer->writeStringValue('disabledReason', $this->getDisabledReason());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the defaultExpirationInDays property value. Default link expiration in days. Returns -1 if there is no required expiration time.
     * @param int|null $value Value to set for the defaultExpirationInDays property.
    */
    public function setDefaultExpirationInDays(?int $value): void {
        $this->getBackingStore()->set('defaultExpirationInDays', $value);
    }

    /**
     * Sets the disabledReason property value. Provides a description of why this operation is not enabled. Only returned if this operation is not enabled.
     * @param string|null $value Value to set for the disabledReason property.
    */
    public function setDisabledReason(?string $value): void {
        $this->getBackingStore()->set('disabledReason', $value);
    }

    /**
     * Sets the enabled property value. Indicates whether this operation is enabled.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->getBackingStore()->set('enabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
