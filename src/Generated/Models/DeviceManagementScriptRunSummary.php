<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties for the run summary of a device management script.
*/
class DeviceManagementScriptRunSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceManagementScriptRunSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementScriptRunSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementScriptRunSummary {
        return new DeviceManagementScriptRunSummary();
    }

    /**
     * Gets the errorDeviceCount property value. Error device count.
     * @return int|null
    */
    public function getErrorDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('errorDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorDeviceCount'");
    }

    /**
     * Gets the errorUserCount property value. Error user count.
     * @return int|null
    */
    public function getErrorUserCount(): ?int {
        $val = $this->getBackingStore()->get('errorUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorUserCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'errorDeviceCount' => fn(ParseNode $n) => $o->setErrorDeviceCount($n->getIntegerValue()),
            'errorUserCount' => fn(ParseNode $n) => $o->setErrorUserCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'successDeviceCount' => fn(ParseNode $n) => $o->setSuccessDeviceCount($n->getIntegerValue()),
            'successUserCount' => fn(ParseNode $n) => $o->setSuccessUserCount($n->getIntegerValue()),
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
     * Gets the successDeviceCount property value. Success device count.
     * @return int|null
    */
    public function getSuccessDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('successDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successDeviceCount'");
    }

    /**
     * Gets the successUserCount property value. Success user count.
     * @return int|null
    */
    public function getSuccessUserCount(): ?int {
        $val = $this->getBackingStore()->get('successUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successUserCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('errorDeviceCount', $this->getErrorDeviceCount());
        $writer->writeIntegerValue('errorUserCount', $this->getErrorUserCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('successDeviceCount', $this->getSuccessDeviceCount());
        $writer->writeIntegerValue('successUserCount', $this->getSuccessUserCount());
    }

    /**
     * Sets the errorDeviceCount property value. Error device count.
     * @param int|null $value Value to set for the errorDeviceCount property.
    */
    public function setErrorDeviceCount(?int $value): void {
        $this->getBackingStore()->set('errorDeviceCount', $value);
    }

    /**
     * Sets the errorUserCount property value. Error user count.
     * @param int|null $value Value to set for the errorUserCount property.
    */
    public function setErrorUserCount(?int $value): void {
        $this->getBackingStore()->set('errorUserCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the successDeviceCount property value. Success device count.
     * @param int|null $value Value to set for the successDeviceCount property.
    */
    public function setSuccessDeviceCount(?int $value): void {
        $this->getBackingStore()->set('successDeviceCount', $value);
    }

    /**
     * Sets the successUserCount property value. Success user count.
     * @param int|null $value Value to set for the successUserCount property.
    */
    public function setSuccessUserCount(?int $value): void {
        $this->getBackingStore()->set('successUserCount', $value);
    }

}
