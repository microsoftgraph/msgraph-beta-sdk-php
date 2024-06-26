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

class HybridAgentUpdaterConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new HybridAgentUpdaterConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HybridAgentUpdaterConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HybridAgentUpdaterConfiguration {
        return new HybridAgentUpdaterConfiguration();
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
     * Gets the allowUpdateConfigurationOverride property value. Indicates if updater configuration will be skipped and the agent will receive an update when the next version of the agent is available.
     * @return bool|null
    */
    public function getAllowUpdateConfigurationOverride(): ?bool {
        $val = $this->getBackingStore()->get('allowUpdateConfigurationOverride');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowUpdateConfigurationOverride'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the deferUpdateDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getDeferUpdateDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('deferUpdateDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deferUpdateDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowUpdateConfigurationOverride' => fn(ParseNode $n) => $o->setAllowUpdateConfigurationOverride($n->getBooleanValue()),
            'deferUpdateDateTime' => fn(ParseNode $n) => $o->setDeferUpdateDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'updateWindow' => fn(ParseNode $n) => $o->setUpdateWindow($n->getObjectValue([UpdateWindow::class, 'createFromDiscriminatorValue'])),
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
     * Gets the updateWindow property value. The time window during which the agent can receive updates.
     * @return UpdateWindow|null
    */
    public function getUpdateWindow(): ?UpdateWindow {
        $val = $this->getBackingStore()->get('updateWindow');
        if (is_null($val) || $val instanceof UpdateWindow) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updateWindow'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowUpdateConfigurationOverride', $this->getAllowUpdateConfigurationOverride());
        $writer->writeDateTimeValue('deferUpdateDateTime', $this->getDeferUpdateDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('updateWindow', $this->getUpdateWindow());
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
     * Sets the allowUpdateConfigurationOverride property value. Indicates if updater configuration will be skipped and the agent will receive an update when the next version of the agent is available.
     * @param bool|null $value Value to set for the allowUpdateConfigurationOverride property.
    */
    public function setAllowUpdateConfigurationOverride(?bool $value): void {
        $this->getBackingStore()->set('allowUpdateConfigurationOverride', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the deferUpdateDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the deferUpdateDateTime property.
    */
    public function setDeferUpdateDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('deferUpdateDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the updateWindow property value. The time window during which the agent can receive updates.
     * @param UpdateWindow|null $value Value to set for the updateWindow property.
    */
    public function setUpdateWindow(?UpdateWindow $value): void {
        $this->getBackingStore()->set('updateWindow', $value);
    }

}
