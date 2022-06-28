<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceCompliancePolicyGroupAssignment extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DeviceCompliancePolicy|null $deviceCompliancePolicy The navigation link to the  device compliance polic targeted.
    */
    private ?DeviceCompliancePolicy $deviceCompliancePolicy = null;
    
    /**
     * @var bool|null $excludeGroup Indicates if this group is should be excluded. Defaults that the group should be included
    */
    private ?bool $excludeGroup = null;
    
    /**
     * @var string|null $targetGroupId The Id of the AAD group we are targeting the device compliance policy to.
    */
    private ?string $targetGroupId = null;
    
    /**
     * Instantiates a new DeviceCompliancePolicyGroupAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceCompliancePolicyGroupAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceCompliancePolicyGroupAssignment {
        return new DeviceCompliancePolicyGroupAssignment();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceCompliancePolicy property value. The navigation link to the  device compliance polic targeted.
     * @return DeviceCompliancePolicy|null
    */
    public function getDeviceCompliancePolicy(): ?DeviceCompliancePolicy {
        return $this->deviceCompliancePolicy;
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
            'deviceCompliancePolicy' => function (ParseNode $n) use ($o) { $o->setDeviceCompliancePolicy($n->getObjectValue(array(DeviceCompliancePolicy::class, 'createFromDiscriminatorValue'))); },
            'excludeGroup' => function (ParseNode $n) use ($o) { $o->setExcludeGroup($n->getBooleanValue()); },
            'targetGroupId' => function (ParseNode $n) use ($o) { $o->setTargetGroupId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the targetGroupId property value. The Id of the AAD group we are targeting the device compliance policy to.
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
        $writer->writeObjectValue('deviceCompliancePolicy', $this->deviceCompliancePolicy);
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
     * Sets the deviceCompliancePolicy property value. The navigation link to the  device compliance polic targeted.
     *  @param DeviceCompliancePolicy|null $value Value to set for the deviceCompliancePolicy property.
    */
    public function setDeviceCompliancePolicy(?DeviceCompliancePolicy $value ): void {
        $this->deviceCompliancePolicy = $value;
    }

    /**
     * Sets the excludeGroup property value. Indicates if this group is should be excluded. Defaults that the group should be included
     *  @param bool|null $value Value to set for the excludeGroup property.
    */
    public function setExcludeGroup(?bool $value ): void {
        $this->excludeGroup = $value;
    }

    /**
     * Sets the targetGroupId property value. The Id of the AAD group we are targeting the device compliance policy to.
     *  @param string|null $value Value to set for the targetGroupId property.
    */
    public function setTargetGroupId(?string $value ): void {
        $this->targetGroupId = $value;
    }

}
