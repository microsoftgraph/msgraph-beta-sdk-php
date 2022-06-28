<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceConfigurationGroupAssignment extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DeviceConfiguration|null $deviceConfiguration The navigation link to the Device Configuration being targeted.
    */
    private ?DeviceConfiguration $deviceConfiguration = null;
    
    /**
     * @var bool|null $excludeGroup Indicates if this group is should be excluded. Defaults that the group should be included
    */
    private ?bool $excludeGroup = null;
    
    /**
     * @var string|null $targetGroupId The Id of the AAD group we are targeting the device configuration to.
    */
    private ?string $targetGroupId = null;
    
    /**
     * Instantiates a new deviceConfigurationGroupAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceConfigurationGroupAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceConfigurationGroupAssignment {
        return new DeviceConfigurationGroupAssignment();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceConfiguration' => function (ParseNode $n) use ($o) { $o->setDeviceConfiguration($n->getObjectValue(array(DeviceConfiguration::class, 'createFromDiscriminatorValue'))); },
            'excludeGroup' => function (ParseNode $n) use ($o) { $o->setExcludeGroup($n->getBooleanValue()); },
            'targetGroupId' => function (ParseNode $n) use ($o) { $o->setTargetGroupId($n->getStringValue()); },
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
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
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
