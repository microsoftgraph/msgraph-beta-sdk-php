<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceConfigurationGroupAssignment extends Entity 
{
    /** @var DeviceConfiguration|null $deviceConfiguration The navigation link to the Device Configuration being targeted. */
    private ?DeviceConfiguration $deviceConfiguration = null;
    
    /** @var bool|null $excludeGroup Indicates if this group is should be excluded. Defaults that the group should be included */
    private ?bool $excludeGroup = null;
    
    /** @var string|null $targetGroupId The Id of the AAD group we are targeting the device configuration to. */
    private ?string $targetGroupId = null;
    
    /**
     * Instantiates a new deviceConfigurationGroupAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceConfigurationGroupAssignment
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceConfigurationGroupAssignment {
        return new DeviceConfigurationGroupAssignment();
    }

    /**
     * Gets the deviceConfiguration property value. The navigation link to the Device Configuration being targeted.
     * @return DeviceConfiguration|null
    */
    public function getDeviceConfiguration(): ?DeviceConfiguration {
        return $this->deviceConfiguration;
    }

    /**
     * Gets the excludeGroup property value. Indicates if this group is should be excluded. Defaults that the group should be included
     * @return bool|null
    */
    public function getExcludeGroup(): ?bool {
        return $this->excludeGroup;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'deviceConfiguration' => function (self $o, ParseNode $n) { $o->setDeviceConfiguration($n->getObjectValue(DeviceConfiguration::class)); },
            'excludeGroup' => function (self $o, ParseNode $n) { $o->setExcludeGroup($n->getBooleanValue()); },
            'targetGroupId' => function (self $o, ParseNode $n) { $o->setTargetGroupId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the targetGroupId property value. The Id of the AAD group we are targeting the device configuration to.
     * @return string|null
    */
    public function getTargetGroupId(): ?string {
        return $this->targetGroupId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('deviceConfiguration', $this->deviceConfiguration);
        $writer->writeBooleanValue('excludeGroup', $this->excludeGroup);
        $writer->writeStringValue('targetGroupId', $this->targetGroupId);
    }

    /**
     * Sets the deviceConfiguration property value. The navigation link to the Device Configuration being targeted.
     *  @param DeviceConfiguration|null $value Value to set for the deviceConfiguration property.
    */
    public function setDeviceConfiguration(?DeviceConfiguration $value ): void {
        $this->deviceConfiguration = $value;
    }

    /**
     * Sets the excludeGroup property value. Indicates if this group is should be excluded. Defaults that the group should be included
     *  @param bool|null $value Value to set for the excludeGroup property.
    */
    public function setExcludeGroup(?bool $value ): void {
        $this->excludeGroup = $value;
    }

    /**
     * Sets the targetGroupId property value. The Id of the AAD group we are targeting the device configuration to.
     *  @param string|null $value Value to set for the targetGroupId property.
    */
    public function setTargetGroupId(?string $value ): void {
        $this->targetGroupId = $value;
    }

}
