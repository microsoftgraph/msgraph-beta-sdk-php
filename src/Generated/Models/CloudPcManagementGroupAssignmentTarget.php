<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcManagementGroupAssignmentTarget extends CloudPcManagementAssignmentTarget implements Parsable 
{
    /**
     * Instantiates a new CloudPcManagementGroupAssignmentTarget and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcManagementGroupAssignmentTarget');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcManagementGroupAssignmentTarget
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcManagementGroupAssignmentTarget {
        return new CloudPcManagementGroupAssignmentTarget();
    }

    /**
     * Gets the allotmentDisplayName property value. The allotmentDisplayName property
     * @return string|null
    */
    public function getAllotmentDisplayName(): ?string {
        $val = $this->getBackingStore()->get('allotmentDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allotmentDisplayName'");
    }

    /**
     * Gets the allotmentLicensesCount property value. The allotmentLicensesCount property
     * @return int|null
    */
    public function getAllotmentLicensesCount(): ?int {
        $val = $this->getBackingStore()->get('allotmentLicensesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allotmentLicensesCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allotmentDisplayName' => fn(ParseNode $n) => $o->setAllotmentDisplayName($n->getStringValue()),
            'allotmentLicensesCount' => fn(ParseNode $n) => $o->setAllotmentLicensesCount($n->getIntegerValue()),
            'groupId' => fn(ParseNode $n) => $o->setGroupId($n->getStringValue()),
            'servicePlanId' => fn(ParseNode $n) => $o->setServicePlanId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the groupId property value. The ID of the target group for the assignment.
     * @return string|null
    */
    public function getGroupId(): ?string {
        $val = $this->getBackingStore()->get('groupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupId'");
    }

    /**
     * Gets the servicePlanId property value. The unique identifier for the service plan that indicates which size of the Cloud PC to provision for the user. Use a null value, when the provisioningType is dedicated.
     * @return string|null
    */
    public function getServicePlanId(): ?string {
        $val = $this->getBackingStore()->get('servicePlanId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePlanId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('allotmentDisplayName', $this->getAllotmentDisplayName());
        $writer->writeIntegerValue('allotmentLicensesCount', $this->getAllotmentLicensesCount());
        $writer->writeStringValue('groupId', $this->getGroupId());
        $writer->writeStringValue('servicePlanId', $this->getServicePlanId());
    }

    /**
     * Sets the allotmentDisplayName property value. The allotmentDisplayName property
     * @param string|null $value Value to set for the allotmentDisplayName property.
    */
    public function setAllotmentDisplayName(?string $value): void {
        $this->getBackingStore()->set('allotmentDisplayName', $value);
    }

    /**
     * Sets the allotmentLicensesCount property value. The allotmentLicensesCount property
     * @param int|null $value Value to set for the allotmentLicensesCount property.
    */
    public function setAllotmentLicensesCount(?int $value): void {
        $this->getBackingStore()->set('allotmentLicensesCount', $value);
    }

    /**
     * Sets the groupId property value. The ID of the target group for the assignment.
     * @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value): void {
        $this->getBackingStore()->set('groupId', $value);
    }

    /**
     * Sets the servicePlanId property value. The unique identifier for the service plan that indicates which size of the Cloud PC to provision for the user. Use a null value, when the provisioningType is dedicated.
     * @param string|null $value Value to set for the servicePlanId property.
    */
    public function setServicePlanId(?string $value): void {
        $this->getBackingStore()->set('servicePlanId', $value);
    }

}
