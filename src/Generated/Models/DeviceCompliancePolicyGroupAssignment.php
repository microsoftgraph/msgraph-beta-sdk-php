<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceCompliancePolicyGroupAssignment extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceCompliancePolicyGroupAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceCompliancePolicyGroupAssignment');
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
     * Gets the deviceCompliancePolicy property value. The navigation link to the  device compliance polic targeted.
     * @return DeviceCompliancePolicy|null
    */
    public function getDeviceCompliancePolicy(): ?DeviceCompliancePolicy {
        return $this->getBackingStore()->get('deviceCompliancePolicy');
    }

    /**
     * Gets the excludeGroup property value. Indicates if this group is should be excluded. Defaults that the group should be included
     * @return bool|null
    */
    public function getExcludeGroup(): ?bool {
        return $this->getBackingStore()->get('excludeGroup');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceCompliancePolicy' => fn(ParseNode $n) => $o->setDeviceCompliancePolicy($n->getObjectValue([DeviceCompliancePolicy::class, 'createFromDiscriminatorValue'])),
            'excludeGroup' => fn(ParseNode $n) => $o->setExcludeGroup($n->getBooleanValue()),
            'targetGroupId' => fn(ParseNode $n) => $o->setTargetGroupId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the targetGroupId property value. The Id of the AAD group we are targeting the device compliance policy to.
     * @return string|null
    */
    public function getTargetGroupId(): ?string {
        return $this->getBackingStore()->get('targetGroupId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('deviceCompliancePolicy', $this->getDeviceCompliancePolicy());
        $writer->writeBooleanValue('excludeGroup', $this->getExcludeGroup());
        $writer->writeStringValue('targetGroupId', $this->getTargetGroupId());
    }

    /**
     * Sets the deviceCompliancePolicy property value. The navigation link to the  device compliance polic targeted.
     *  @param DeviceCompliancePolicy|null $value Value to set for the deviceCompliancePolicy property.
    */
    public function setDeviceCompliancePolicy(?DeviceCompliancePolicy $value): void {
        $this->getBackingStore()->set('deviceCompliancePolicy', $value);
    }

    /**
     * Sets the excludeGroup property value. Indicates if this group is should be excluded. Defaults that the group should be included
     *  @param bool|null $value Value to set for the excludeGroup property.
    */
    public function setExcludeGroup(?bool $value): void {
        $this->getBackingStore()->set('excludeGroup', $value);
    }

    /**
     * Sets the targetGroupId property value. The Id of the AAD group we are targeting the device compliance policy to.
     *  @param string|null $value Value to set for the targetGroupId property.
    */
    public function setTargetGroupId(?string $value): void {
        $this->getBackingStore()->set('targetGroupId', $value);
    }

}
