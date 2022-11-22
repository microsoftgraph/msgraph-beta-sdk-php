<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PolicySetItem extends Entity implements Parsable 
{
    /**
     * Instantiates a new policySetItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PolicySetItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PolicySetItem {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceCompliancePolicyPolicySetItem': return new DeviceCompliancePolicyPolicySetItem();
                case '#microsoft.graph.deviceConfigurationPolicySetItem': return new DeviceConfigurationPolicySetItem();
                case '#microsoft.graph.deviceManagementConfigurationPolicyPolicySetItem': return new DeviceManagementConfigurationPolicyPolicySetItem();
                case '#microsoft.graph.deviceManagementScriptPolicySetItem': return new DeviceManagementScriptPolicySetItem();
                case '#microsoft.graph.enrollmentRestrictionsConfigurationPolicySetItem': return new EnrollmentRestrictionsConfigurationPolicySetItem();
                case '#microsoft.graph.iosLobAppProvisioningConfigurationPolicySetItem': return new IosLobAppProvisioningConfigurationPolicySetItem();
                case '#microsoft.graph.managedAppProtectionPolicySetItem': return new ManagedAppProtectionPolicySetItem();
                case '#microsoft.graph.managedDeviceMobileAppConfigurationPolicySetItem': return new ManagedDeviceMobileAppConfigurationPolicySetItem();
                case '#microsoft.graph.mdmWindowsInformationProtectionPolicyPolicySetItem': return new MdmWindowsInformationProtectionPolicyPolicySetItem();
                case '#microsoft.graph.mobileAppPolicySetItem': return new MobileAppPolicySetItem();
                case '#microsoft.graph.targetedManagedAppConfigurationPolicySetItem': return new TargetedManagedAppConfigurationPolicySetItem();
                case '#microsoft.graph.windows10EnrollmentCompletionPageConfigurationPolicySetItem': return new Windows10EnrollmentCompletionPageConfigurationPolicySetItem();
                case '#microsoft.graph.windowsAutopilotDeploymentProfilePolicySetItem': return new WindowsAutopilotDeploymentProfilePolicySetItem();
            }
        }
        return new PolicySetItem();
    }

    /**
     * Gets the createdDateTime property value. Creation time of the PolicySetItem.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the displayName property value. DisplayName of the PolicySetItem.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the errorCode property value. The errorCode property
     * @return ErrorCode|null
    */
    public function getErrorCode(): ?ErrorCode {
        return $this->getBackingStore()->get('errorCode');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getEnumValue(ErrorCode::class)),
            'guidedDeploymentTags' => fn(ParseNode $n) => $o->setGuidedDeploymentTags($n->getCollectionOfPrimitiveValues()),
            'itemType' => fn(ParseNode $n) => $o->setItemType($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'payloadId' => fn(ParseNode $n) => $o->setPayloadId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(PolicySetStatus::class)),
        ]);
    }

    /**
     * Gets the guidedDeploymentTags property value. Tags of the guided deployment
     * @return array<string>|null
    */
    public function getGuidedDeploymentTags(): ?array {
        return $this->getBackingStore()->get('guidedDeploymentTags');
    }

    /**
     * Gets the itemType property value. policySetType of the PolicySetItem.
     * @return string|null
    */
    public function getItemType(): ?string {
        return $this->getBackingStore()->get('itemType');
    }

    /**
     * Gets the lastModifiedDateTime property value. Last modified time of the PolicySetItem.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the payloadId property value. PayloadId of the PolicySetItem.
     * @return string|null
    */
    public function getPayloadId(): ?string {
        return $this->getBackingStore()->get('payloadId');
    }

    /**
     * Gets the status property value. The enum to specify the status of PolicySet.
     * @return PolicySetStatus|null
    */
    public function getStatus(): ?PolicySetStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('errorCode', $this->getErrorCode());
        $writer->writeCollectionOfPrimitiveValues('guidedDeploymentTags', $this->getGuidedDeploymentTags());
        $writer->writeStringValue('itemType', $this->getItemType());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('payloadId', $this->getPayloadId());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the createdDateTime property value. Creation time of the PolicySetItem.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. DisplayName of the PolicySetItem.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the errorCode property value. The errorCode property
     *  @param ErrorCode|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?ErrorCode $value): void {
        $this->getBackingStore()->set('errorCode', $value);
    }

    /**
     * Sets the guidedDeploymentTags property value. Tags of the guided deployment
     *  @param array<string>|null $value Value to set for the guidedDeploymentTags property.
    */
    public function setGuidedDeploymentTags(?array $value): void {
        $this->getBackingStore()->set('guidedDeploymentTags', $value);
    }

    /**
     * Sets the itemType property value. policySetType of the PolicySetItem.
     *  @param string|null $value Value to set for the itemType property.
    */
    public function setItemType(?string $value): void {
        $this->getBackingStore()->set('itemType', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Last modified time of the PolicySetItem.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the payloadId property value. PayloadId of the PolicySetItem.
     *  @param string|null $value Value to set for the payloadId property.
    */
    public function setPayloadId(?string $value): void {
        $this->getBackingStore()->set('payloadId', $value);
    }

    /**
     * Sets the status property value. The enum to specify the status of PolicySet.
     *  @param PolicySetStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PolicySetStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
