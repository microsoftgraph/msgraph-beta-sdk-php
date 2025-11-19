<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivateAccessSensor extends Entity implements Parsable 
{
    /**
     * Instantiates a new PrivateAccessSensor and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivateAccessSensor
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivateAccessSensor {
        return new PrivateAccessSensor();
    }

    /**
     * Gets the externalIp property value. External IP of sensor.
     * @return string|null
    */
    public function getExternalIp(): ?string {
        $val = $this->getBackingStore()->get('externalIp');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalIp'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'externalIp' => fn(ParseNode $n) => $o->setExternalIp($n->getStringValue()),
            'isAuditMode' => fn(ParseNode $n) => $o->setIsAuditMode($n->getBooleanValue()),
            'isBreakglassEnabled' => fn(ParseNode $n) => $o->setIsBreakglassEnabled($n->getBooleanValue()),
            'machineName' => fn(ParseNode $n) => $o->setMachineName($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SensorStatus::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isAuditMode property value. Not Implementated.
     * @return bool|null
    */
    public function getIsAuditMode(): ?bool {
        $val = $this->getBackingStore()->get('isAuditMode');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAuditMode'");
    }

    /**
     * Gets the isBreakglassEnabled property value. Not Implemented.
     * @return bool|null
    */
    public function getIsBreakglassEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isBreakglassEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isBreakglassEnabled'");
    }

    /**
     * Gets the machineName property value. Machine name of sensor.
     * @return string|null
    */
    public function getMachineName(): ?string {
        $val = $this->getBackingStore()->get('machineName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'machineName'");
    }

    /**
     * Gets the status property value. The status property
     * @return SensorStatus|null
    */
    public function getStatus(): ?SensorStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof SensorStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the version property value. Version of sensor.
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('externalIp', $this->getExternalIp());
        $writer->writeBooleanValue('isAuditMode', $this->getIsAuditMode());
        $writer->writeBooleanValue('isBreakglassEnabled', $this->getIsBreakglassEnabled());
        $writer->writeStringValue('machineName', $this->getMachineName());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the externalIp property value. External IP of sensor.
     * @param string|null $value Value to set for the externalIp property.
    */
    public function setExternalIp(?string $value): void {
        $this->getBackingStore()->set('externalIp', $value);
    }

    /**
     * Sets the isAuditMode property value. Not Implementated.
     * @param bool|null $value Value to set for the isAuditMode property.
    */
    public function setIsAuditMode(?bool $value): void {
        $this->getBackingStore()->set('isAuditMode', $value);
    }

    /**
     * Sets the isBreakglassEnabled property value. Not Implemented.
     * @param bool|null $value Value to set for the isBreakglassEnabled property.
    */
    public function setIsBreakglassEnabled(?bool $value): void {
        $this->getBackingStore()->set('isBreakglassEnabled', $value);
    }

    /**
     * Sets the machineName property value. Machine name of sensor.
     * @param string|null $value Value to set for the machineName property.
    */
    public function setMachineName(?string $value): void {
        $this->getBackingStore()->set('machineName', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param SensorStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SensorStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the version property value. Version of sensor.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
