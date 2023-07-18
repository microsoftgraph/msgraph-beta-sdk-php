<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Policy status detail item contained by an autopilot event.
*/
class DeviceManagementAutopilotPolicyStatusDetail extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new deviceManagementAutopilotPolicyStatusDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * Gets the complianceStatus property value. The complianceStatus property
     * @return DeviceManagementAutopilotPolicyComplianceStatus|null
    */
    public function getComplianceStatus(): ?DeviceManagementAutopilotPolicyComplianceStatus {
        $val = $this->getBackingStore()->get('complianceStatus');
        if (is_null($val) || $val instanceof DeviceManagementAutopilotPolicyComplianceStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'complianceStatus'");
    }

    /**
     * Gets the displayName property value. The friendly name of the policy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the errorCode property value. The errorode associated with the compliance or enforcement status of the policy. Error code for enforcement status takes precedence if it exists.
     * @return int|null
    */
    public function getErrorCode(): ?int {
        $val = $this->getBackingStore()->get('errorCode');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorCode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'complianceStatus' => fn(ParseNode $n) => $o->setComplianceStatus($n->getEnumValue(DeviceManagementAutopilotPolicyComplianceStatus::class)),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getIntegerValue()),
            'lastReportedDateTime' => fn(ParseNode $n) => $o->setLastReportedDateTime($n->getDateTimeValue()),
            'policyType' => fn(ParseNode $n) => $o->setPolicyType($n->getEnumValue(DeviceManagementAutopilotPolicyType::class)),
            'trackedOnEnrollmentStatus' => fn(ParseNode $n) => $o->setTrackedOnEnrollmentStatus($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the lastReportedDateTime property value. Timestamp of the reported policy status
     * @return DateTime|null
    */
    public function getLastReportedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastReportedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastReportedDateTime'");
    }

    /**
     * Gets the policyType property value. The policyType property
     * @return DeviceManagementAutopilotPolicyType|null
    */
    public function getPolicyType(): ?DeviceManagementAutopilotPolicyType {
        $val = $this->getBackingStore()->get('policyType');
        if (is_null($val) || $val instanceof DeviceManagementAutopilotPolicyType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyType'");
    }

    /**
     * Gets the trackedOnEnrollmentStatus property value. Indicates if this prolicy was tracked as part of the autopilot bootstrap enrollment sync session
     * @return bool|null
    */
    public function getTrackedOnEnrollmentStatus(): ?bool {
        $val = $this->getBackingStore()->get('trackedOnEnrollmentStatus');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trackedOnEnrollmentStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('complianceStatus', $this->getComplianceStatus());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeIntegerValue('errorCode', $this->getErrorCode());
        $writer->writeDateTimeValue('lastReportedDateTime', $this->getLastReportedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('policyType', $this->getPolicyType());
        $writer->writeBooleanValue('trackedOnEnrollmentStatus', $this->getTrackedOnEnrollmentStatus());
    }

    /**
     * Sets the complianceStatus property value. The complianceStatus property
     * @param DeviceManagementAutopilotPolicyComplianceStatus|null $value Value to set for the complianceStatus property.
    */
    public function setComplianceStatus(?DeviceManagementAutopilotPolicyComplianceStatus $value): void {
        $this->getBackingStore()->set('complianceStatus', $value);
    }

    /**
     * Sets the displayName property value. The friendly name of the policy.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the errorCode property value. The errorode associated with the compliance or enforcement status of the policy. Error code for enforcement status takes precedence if it exists.
     * @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value): void {
        $this->getBackingStore()->set('errorCode', $value);
    }

    /**
     * Sets the lastReportedDateTime property value. Timestamp of the reported policy status
     * @param DateTime|null $value Value to set for the lastReportedDateTime property.
    */
    public function setLastReportedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastReportedDateTime', $value);
    }

    /**
     * Sets the policyType property value. The policyType property
     * @param DeviceManagementAutopilotPolicyType|null $value Value to set for the policyType property.
    */
    public function setPolicyType(?DeviceManagementAutopilotPolicyType $value): void {
        $this->getBackingStore()->set('policyType', $value);
    }

    /**
     * Sets the trackedOnEnrollmentStatus property value. Indicates if this prolicy was tracked as part of the autopilot bootstrap enrollment sync session
     * @param bool|null $value Value to set for the trackedOnEnrollmentStatus property.
    */
    public function setTrackedOnEnrollmentStatus(?bool $value): void {
        $this->getBackingStore()->set('trackedOnEnrollmentStatus', $value);
    }

}
