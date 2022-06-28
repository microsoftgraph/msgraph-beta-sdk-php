<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementAutopilotPolicyStatusDetail extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DeviceManagementAutopilotPolicyComplianceStatus|null $complianceStatus The policy compliance status. Possible values are: unknown, compliant, installed, notCompliant, notInstalled, error.
    */
    private ?DeviceManagementAutopilotPolicyComplianceStatus $complianceStatus = null;
    
    /**
     * @var string|null $displayName The friendly name of the policy.
    */
    private ?string $displayName = null;
    
    /**
     * @var int|null $errorCode The errorode associated with the compliance or enforcement status of the policy. Error code for enforcement status takes precedence if it exists.
    */
    private ?int $errorCode = null;
    
    /**
     * @var DateTime|null $lastReportedDateTime Timestamp of the reported policy status
    */
    private ?DateTime $lastReportedDateTime = null;
    
    /**
     * @var DeviceManagementAutopilotPolicyType|null $policyType The type of policy. Possible values are: unknown, application, appModel, configurationPolicy.
    */
    private ?DeviceManagementAutopilotPolicyType $policyType = null;
    
    /**
     * @var bool|null $trackedOnEnrollmentStatus Indicates if this prolicy was tracked as part of the autopilot bootstrap enrollment sync session
    */
    private ?bool $trackedOnEnrollmentStatus = null;
    
    /**
     * Instantiates a new deviceManagementAutopilotPolicyStatusDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementAutopilotPolicyStatusDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementAutopilotPolicyStatusDetail {
        return new DeviceManagementAutopilotPolicyStatusDetail();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the complianceStatus property value. The policy compliance status. Possible values are: unknown, compliant, installed, notCompliant, notInstalled, error.
     * @return DeviceManagementAutopilotPolicyComplianceStatus|null
    */
    public function getComplianceStatus(): ?DeviceManagementAutopilotPolicyComplianceStatus {
        return $this->complianceStatus;
    }

    /**
     * Gets the displayName property value. The friendly name of the policy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the errorCode property value. The errorode associated with the compliance or enforcement status of the policy. Error code for enforcement status takes precedence if it exists.
     * @return int|null
    */
    public function getErrorCode(): ?int {
        return $this->errorCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'complianceStatus' => function (ParseNode $n) use ($o) { $o->setComplianceStatus($n->getEnumValue(DeviceManagementAutopilotPolicyComplianceStatus::class)); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'errorCode' => function (ParseNode $n) use ($o) { $o->setErrorCode($n->getIntegerValue()); },
            'lastReportedDateTime' => function (ParseNode $n) use ($o) { $o->setLastReportedDateTime($n->getDateTimeValue()); },
            'policyType' => function (ParseNode $n) use ($o) { $o->setPolicyType($n->getEnumValue(DeviceManagementAutopilotPolicyType::class)); },
            'trackedOnEnrollmentStatus' => function (ParseNode $n) use ($o) { $o->setTrackedOnEnrollmentStatus($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the lastReportedDateTime property value. Timestamp of the reported policy status
     * @return DateTime|null
    */
    public function getLastReportedDateTime(): ?DateTime {
        return $this->lastReportedDateTime;
    }

    /**
     * Gets the policyType property value. The type of policy. Possible values are: unknown, application, appModel, configurationPolicy.
     * @return DeviceManagementAutopilotPolicyType|null
    */
    public function getPolicyType(): ?DeviceManagementAutopilotPolicyType {
        return $this->policyType;
    }

    /**
     * Gets the trackedOnEnrollmentStatus property value. Indicates if this prolicy was tracked as part of the autopilot bootstrap enrollment sync session
     * @return bool|null
    */
    public function getTrackedOnEnrollmentStatus(): ?bool {
        return $this->trackedOnEnrollmentStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('complianceStatus', $this->complianceStatus);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeIntegerValue('errorCode', $this->errorCode);
        $writer->writeDateTimeValue('lastReportedDateTime', $this->lastReportedDateTime);
        $writer->writeEnumValue('policyType', $this->policyType);
        $writer->writeBooleanValue('trackedOnEnrollmentStatus', $this->trackedOnEnrollmentStatus);
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
     * Sets the complianceStatus property value. The policy compliance status. Possible values are: unknown, compliant, installed, notCompliant, notInstalled, error.
     *  @param DeviceManagementAutopilotPolicyComplianceStatus|null $value Value to set for the complianceStatus property.
    */
    public function setComplianceStatus(?DeviceManagementAutopilotPolicyComplianceStatus $value ): void {
        $this->complianceStatus = $value;
    }

    /**
     * Sets the displayName property value. The friendly name of the policy.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the errorCode property value. The errorode associated with the compliance or enforcement status of the policy. Error code for enforcement status takes precedence if it exists.
     *  @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value ): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the lastReportedDateTime property value. Timestamp of the reported policy status
     *  @param DateTime|null $value Value to set for the lastReportedDateTime property.
    */
    public function setLastReportedDateTime(?DateTime $value ): void {
        $this->lastReportedDateTime = $value;
    }

    /**
     * Sets the policyType property value. The type of policy. Possible values are: unknown, application, appModel, configurationPolicy.
     *  @param DeviceManagementAutopilotPolicyType|null $value Value to set for the policyType property.
    */
    public function setPolicyType(?DeviceManagementAutopilotPolicyType $value ): void {
        $this->policyType = $value;
    }

    /**
     * Sets the trackedOnEnrollmentStatus property value. Indicates if this prolicy was tracked as part of the autopilot bootstrap enrollment sync session
     *  @param bool|null $value Value to set for the trackedOnEnrollmentStatus property.
    */
    public function setTrackedOnEnrollmentStatus(?bool $value ): void {
        $this->trackedOnEnrollmentStatus = $value;
    }

}
