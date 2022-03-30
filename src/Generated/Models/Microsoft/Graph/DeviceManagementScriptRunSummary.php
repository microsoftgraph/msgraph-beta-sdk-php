<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementScriptRunSummary extends Entity 
{
    /** @var int|null $errorDeviceCount Error device count. */
    private ?int $errorDeviceCount = null;
    
    /** @var int|null $errorUserCount Error user count. */
    private ?int $errorUserCount = null;
    
    /** @var int|null $successDeviceCount Success device count. */
    private ?int $successDeviceCount = null;
    
    /** @var int|null $successUserCount Success user count. */
    private ?int $successUserCount = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementScriptRunSummary {
        return new DeviceManagementScriptRunSummary();
    }

    /**
     * Gets the errorDeviceCount property value. Error device count.
     * @return int|null
    */
    public function getErrorDeviceCount(): ?int {
        return $this->errorDeviceCount;
    }

    /**
     * Gets the errorUserCount property value. Error user count.
     * @return int|null
    */
    public function getErrorUserCount(): ?int {
        return $this->errorUserCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'errorDeviceCount' => function (self $o, ParseNode $n) { $o->setErrorDeviceCount($n->getIntegerValue()); },
            'errorUserCount' => function (self $o, ParseNode $n) { $o->setErrorUserCount($n->getIntegerValue()); },
            'successDeviceCount' => function (self $o, ParseNode $n) { $o->setSuccessDeviceCount($n->getIntegerValue()); },
            'successUserCount' => function (self $o, ParseNode $n) { $o->setSuccessUserCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the successDeviceCount property value. Success device count.
     * @return int|null
    */
    public function getSuccessDeviceCount(): ?int {
        return $this->successDeviceCount;
    }

    /**
     * Gets the successUserCount property value. Success user count.
     * @return int|null
    */
    public function getSuccessUserCount(): ?int {
        return $this->successUserCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('errorDeviceCount', $this->errorDeviceCount);
        $writer->writeIntegerValue('errorUserCount', $this->errorUserCount);
        $writer->writeIntegerValue('successDeviceCount', $this->successDeviceCount);
        $writer->writeIntegerValue('successUserCount', $this->successUserCount);
    }

    /**
     * Sets the errorDeviceCount property value. Error device count.
     *  @param int|null $value Value to set for the errorDeviceCount property.
    */
    public function setErrorDeviceCount(?int $value ): void {
        $this->errorDeviceCount = $value;
    }

    /**
     * Sets the errorUserCount property value. Error user count.
     *  @param int|null $value Value to set for the errorUserCount property.
    */
    public function setErrorUserCount(?int $value ): void {
        $this->errorUserCount = $value;
    }

    /**
     * Sets the successDeviceCount property value. Success device count.
     *  @param int|null $value Value to set for the successDeviceCount property.
    */
    public function setSuccessDeviceCount(?int $value ): void {
        $this->successDeviceCount = $value;
    }

    /**
     * Sets the successUserCount property value. Success user count.
     *  @param int|null $value Value to set for the successUserCount property.
    */
    public function setSuccessUserCount(?int $value ): void {
        $this->successUserCount = $value;
    }

}
