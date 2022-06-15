<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PolicySetItem extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $createdDateTime Creation time of the PolicySetItem.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $displayName DisplayName of the PolicySetItem.
    */
    private ?string $displayName = null;
    
    /**
     * @var ErrorCode|null $errorCode Error code if any occured. Possible values are: noError, unauthorized, notFound, deleted.
    */
    private ?ErrorCode $errorCode = null;
    
    /**
     * @var array<string>|null $guidedDeploymentTags Tags of the guided deployment
    */
    private ?array $guidedDeploymentTags = null;
    
    /**
     * @var string|null $itemType policySetType of the PolicySetItem.
    */
    private ?string $itemType = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Last modified time of the PolicySetItem.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $payloadId PayloadId of the PolicySetItem.
    */
    private ?string $payloadId = null;
    
    /**
     * @var PolicySetStatus|null $status Status of the PolicySetItem. Possible values are: unknown, validating, partialSuccess, success, error, notAssigned.
    */
    private ?PolicySetStatus $status = null;
    
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
        $mappingValueNode = ParseNode::getChildNode("@odata.type");
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
        return $this->createdDateTime;
    }

    /**
     * Gets the displayName property value. DisplayName of the PolicySetItem.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the errorCode property value. Error code if any occured. Possible values are: noError, unauthorized, notFound, deleted.
     * @return ErrorCode|null
    */
    public function getErrorCode(): ?ErrorCode {
        return $this->errorCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'errorCode' => function (ParseNode $n) use ($o) { $o->setErrorCode($n->getEnumValue(ErrorCode::class)); },
            'guidedDeploymentTags' => function (ParseNode $n) use ($o) { $o->setGuidedDeploymentTags($n->getCollectionOfPrimitiveValues()); },
            'itemType' => function (ParseNode $n) use ($o) { $o->setItemType($n->getStringValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'payloadId' => function (ParseNode $n) use ($o) { $o->setPayloadId($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(PolicySetStatus::class)); },
        ]);
    }

    /**
     * Gets the guidedDeploymentTags property value. Tags of the guided deployment
     * @return array<string>|null
    */
    public function getGuidedDeploymentTags(): ?array {
        return $this->guidedDeploymentTags;
    }

    /**
     * Gets the itemType property value. policySetType of the PolicySetItem.
     * @return string|null
    */
    public function getItemType(): ?string {
        return $this->itemType;
    }

    /**
     * Gets the lastModifiedDateTime property value. Last modified time of the PolicySetItem.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the payloadId property value. PayloadId of the PolicySetItem.
     * @return string|null
    */
    public function getPayloadId(): ?string {
        return $this->payloadId;
    }

    /**
     * Gets the status property value. Status of the PolicySetItem. Possible values are: unknown, validating, partialSuccess, success, error, notAssigned.
     * @return PolicySetStatus|null
    */
    public function getStatus(): ?PolicySetStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('errorCode', $this->errorCode);
        $writer->writeCollectionOfPrimitiveValues('guidedDeploymentTags', $this->guidedDeploymentTags);
        $writer->writeStringValue('itemType', $this->itemType);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('payloadId', $this->payloadId);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the createdDateTime property value. Creation time of the PolicySetItem.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the displayName property value. DisplayName of the PolicySetItem.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the errorCode property value. Error code if any occured. Possible values are: noError, unauthorized, notFound, deleted.
     *  @param ErrorCode|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?ErrorCode $value ): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the guidedDeploymentTags property value. Tags of the guided deployment
     *  @param array<string>|null $value Value to set for the guidedDeploymentTags property.
    */
    public function setGuidedDeploymentTags(?array $value ): void {
        $this->guidedDeploymentTags = $value;
    }

    /**
     * Sets the itemType property value. policySetType of the PolicySetItem.
     *  @param string|null $value Value to set for the itemType property.
    */
    public function setItemType(?string $value ): void {
        $this->itemType = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Last modified time of the PolicySetItem.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the payloadId property value. PayloadId of the PolicySetItem.
     *  @param string|null $value Value to set for the payloadId property.
    */
    public function setPayloadId(?string $value ): void {
        $this->payloadId = $value;
    }

    /**
     * Sets the status property value. Status of the PolicySetItem. Possible values are: unknown, validating, partialSuccess, success, error, notAssigned.
     *  @param PolicySetStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PolicySetStatus $value ): void {
        $this->status = $value;
    }

}
