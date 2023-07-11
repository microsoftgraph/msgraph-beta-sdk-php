<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Device action result
*/
class ConfigurationManagerActionResult extends DeviceActionResult implements Parsable 
{
    /**
     * Instantiates a new configurationManagerActionResult and sets the default values.
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
        $val = $this->getBackingStore()->get('actionDeliveryStatus');
        if (is_null($val) || $val instanceof ConfigurationManagerActionDeliveryStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionDeliveryStatus'");
    }

    /**
     * Gets the errorCode property value. Error code of Configuration Manager action from client
     * @return int|null
    */
    public function getErrorCode(): ?int {
        $val = $this->getBackingStore()->get('errorCode');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorCode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionDeliveryStatus' => fn(ParseNode $n) => $o->setActionDeliveryStatus($n->getEnumValue(ConfigurationManagerActionDeliveryStatus::class)),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
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
        parent::serialize($writer);
        $writer->writeEnumValue('actionDeliveryStatus', $this->getActionDeliveryStatus());
        $writer->writeIntegerValue('errorCode', $this->getErrorCode());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
