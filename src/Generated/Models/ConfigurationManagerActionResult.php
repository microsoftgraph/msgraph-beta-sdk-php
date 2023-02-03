<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConfigurationManagerActionResult extends DeviceActionResult implements Parsable 
{
    /**
     * Instantiates a new ConfigurationManagerActionResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConfigurationManagerActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConfigurationManagerActionResult {
        return new ConfigurationManagerActionResult();
    }

    /**
     * Gets the actionDeliveryStatus property value. Delivery state of Configuration Manager device action
     * @return ConfigurationManagerActionDeliveryStatus|null
    */
    public function getActionDeliveryStatus(): ?ConfigurationManagerActionDeliveryStatus {
        return $this->getBackingStore()->get('actionDeliveryStatus');
    }

    /**
     * Gets the errorCode property value. Error code of Configuration Manager action from client
     * @return int|null
    */
    public function getErrorCode(): ?int {
        return $this->getBackingStore()->get('errorCode');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionDeliveryStatus' => fn(ParseNode $n) => $o->setActionDeliveryStatus($n->getEnumValue(ConfigurationManagerActionDeliveryStatus::class)),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getIntegerValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('actionDeliveryStatus', $this->getActionDeliveryStatus());
        $writer->writeIntegerValue('errorCode', $this->getErrorCode());
    }

    /**
     * Sets the actionDeliveryStatus property value. Delivery state of Configuration Manager device action
     * @param ConfigurationManagerActionDeliveryStatus|null $value Value to set for the actionDeliveryStatus property.
    */
    public function setActionDeliveryStatus(?ConfigurationManagerActionDeliveryStatus $value): void {
        $this->getBackingStore()->set('actionDeliveryStatus', $value);
    }

    /**
     * Sets the errorCode property value. Error code of Configuration Manager action from client
     * @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value): void {
        $this->getBackingStore()->set('errorCode', $value);
    }

}
