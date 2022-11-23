<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

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
        return $this->getBackingStore()->get('errorDeviceCount');
    }

    /**
     * Gets the errorUserCount property value. Error user count.
     * @return int|null
    */
    public function getErrorUserCount(): ?int {
        return $this->getBackingStore()->get('errorUserCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'errorDeviceCount' => fn(ParseNode $n) => $o->setErrorDeviceCount($n->getIntegerValue()),
            'errorUserCount' => fn(ParseNode $n) => $o->setErrorUserCount($n->getIntegerValue()),
            'successDeviceCount' => fn(ParseNode $n) => $o->setSuccessDeviceCount($n->getIntegerValue()),
            'successUserCount' => fn(ParseNode $n) => $o->setSuccessUserCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the successDeviceCount property value. Success device count.
     * @return int|null
    */
    public function getSuccessDeviceCount(): ?int {
        return $this->getBackingStore()->get('successDeviceCount');
    }

    /**
     * Gets the successUserCount property value. Success user count.
     * @return int|null
    */
    public function getSuccessUserCount(): ?int {
        return $this->getBackingStore()->get('successUserCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('errorDeviceCount', $this->getErrorDeviceCount());
        $writer->writeIntegerValue('errorUserCount', $this->getErrorUserCount());
        $writer->writeIntegerValue('successDeviceCount', $this->getSuccessDeviceCount());
        $writer->writeIntegerValue('successUserCount', $this->getSuccessUserCount());
    }

    /**
     * Sets the errorDeviceCount property value. Error device count.
     *  @param int|null $value Value to set for the errorDeviceCount property.
    */
    public function setErrorDeviceCount(?int $value): void {
        $this->getBackingStore()->set('errorDeviceCount', $value);
    }

    /**
     * Sets the errorUserCount property value. Error user count.
     *  @param int|null $value Value to set for the errorUserCount property.
    */
    public function setErrorUserCount(?int $value): void {
        $this->getBackingStore()->set('errorUserCount', $value);
    }

    /**
     * Sets the successDeviceCount property value. Success device count.
     *  @param int|null $value Value to set for the successDeviceCount property.
    */
    public function setSuccessDeviceCount(?int $value): void {
        $this->getBackingStore()->set('successDeviceCount', $value);
    }

    /**
     * Sets the successUserCount property value. Success user count.
     *  @param int|null $value Value to set for the successUserCount property.
    */
    public function setSuccessUserCount(?int $value): void {
        $this->getBackingStore()->set('successUserCount', $value);
    }

}
