<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Windows defender advanced threat protection onboarding state summary across the account.
*/
class AdvancedThreatProtectionOnboardingStateSummary extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new advancedThreatProtectionOnboardingStateSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdvancedThreatProtectionOnboardingStateSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdvancedThreatProtectionOnboardingStateSummary {
        return new AdvancedThreatProtectionOnboardingStateSummary();
    }

    /**
     * Gets the advancedThreatProtectionOnboardingDeviceSettingStates property value. Not yet documented
     * @return array<AdvancedThreatProtectionOnboardingDeviceSettingState>|null
    */
    public function getAdvancedThreatProtectionOnboardingDeviceSettingStates(): ?array {
        $val = $this->getBackingStore()->get('advancedThreatProtectionOnboardingDeviceSettingStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AdvancedThreatProtectionOnboardingDeviceSettingState::class);
            /** @var array<AdvancedThreatProtectionOnboardingDeviceSettingState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'advancedThreatProtectionOnboardingDeviceSettingStates'");
    }

    /**
     * Gets the compliantDeviceCount property value. Number of compliant devices
     * @return int|null
    */
    public function getCompliantDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('compliantDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliantDeviceCount'");
    }

    /**
     * Gets the conflictDeviceCount property value. Number of conflict devices
     * @return int|null
    */
    public function getConflictDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('conflictDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conflictDeviceCount'");
    }

    /**
     * Gets the errorDeviceCount property value. Number of error devices
     * @return int|null
    */
    public function getErrorDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('errorDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorDeviceCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'advancedThreatProtectionOnboardingDeviceSettingStates' => fn(ParseNode $n) => $o->setAdvancedThreatProtectionOnboardingDeviceSettingStates($n->getCollectionOfObjectValues([AdvancedThreatProtectionOnboardingDeviceSettingState::class, 'createFromDiscriminatorValue'])),
            'compliantDeviceCount' => fn(ParseNode $n) => $o->setCompliantDeviceCount($n->getIntegerValue()),
            'conflictDeviceCount' => fn(ParseNode $n) => $o->setConflictDeviceCount($n->getIntegerValue()),
            'errorDeviceCount' => fn(ParseNode $n) => $o->setErrorDeviceCount($n->getIntegerValue()),
            'nonCompliantDeviceCount' => fn(ParseNode $n) => $o->setNonCompliantDeviceCount($n->getIntegerValue()),
            'notApplicableDeviceCount' => fn(ParseNode $n) => $o->setNotApplicableDeviceCount($n->getIntegerValue()),
            'notAssignedDeviceCount' => fn(ParseNode $n) => $o->setNotAssignedDeviceCount($n->getIntegerValue()),
            'remediatedDeviceCount' => fn(ParseNode $n) => $o->setRemediatedDeviceCount($n->getIntegerValue()),
            'unknownDeviceCount' => fn(ParseNode $n) => $o->setUnknownDeviceCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the nonCompliantDeviceCount property value. Number of NonCompliant devices
     * @return int|null
    */
    public function getNonCompliantDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('nonCompliantDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nonCompliantDeviceCount'");
    }

    /**
     * Gets the notApplicableDeviceCount property value. Number of not applicable devices
     * @return int|null
    */
    public function getNotApplicableDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('notApplicableDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notApplicableDeviceCount'");
    }

    /**
     * Gets the notAssignedDeviceCount property value. Number of not assigned devices
     * @return int|null
    */
    public function getNotAssignedDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('notAssignedDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notAssignedDeviceCount'");
    }

    /**
     * Gets the remediatedDeviceCount property value. Number of remediated devices
     * @return int|null
    */
    public function getRemediatedDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('remediatedDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remediatedDeviceCount'");
    }

    /**
     * Gets the unknownDeviceCount property value. Number of unknown devices
     * @return int|null
    */
    public function getUnknownDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('unknownDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unknownDeviceCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('advancedThreatProtectionOnboardingDeviceSettingStates', $this->getAdvancedThreatProtectionOnboardingDeviceSettingStates());
        $writer->writeIntegerValue('compliantDeviceCount', $this->getCompliantDeviceCount());
        $writer->writeIntegerValue('conflictDeviceCount', $this->getConflictDeviceCount());
        $writer->writeIntegerValue('errorDeviceCount', $this->getErrorDeviceCount());
        $writer->writeIntegerValue('nonCompliantDeviceCount', $this->getNonCompliantDeviceCount());
        $writer->writeIntegerValue('notApplicableDeviceCount', $this->getNotApplicableDeviceCount());
        $writer->writeIntegerValue('notAssignedDeviceCount', $this->getNotAssignedDeviceCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('remediatedDeviceCount', $this->getRemediatedDeviceCount());
        $writer->writeIntegerValue('unknownDeviceCount', $this->getUnknownDeviceCount());
    }

    /**
     * Sets the advancedThreatProtectionOnboardingDeviceSettingStates property value. Not yet documented
     * @param array<AdvancedThreatProtectionOnboardingDeviceSettingState>|null $value Value to set for the advancedThreatProtectionOnboardingDeviceSettingStates property.
    */
    public function setAdvancedThreatProtectionOnboardingDeviceSettingStates(?array $value): void {
        $this->getBackingStore()->set('advancedThreatProtectionOnboardingDeviceSettingStates', $value);
    }

    /**
     * Sets the compliantDeviceCount property value. Number of compliant devices
     * @param int|null $value Value to set for the compliantDeviceCount property.
    */
    public function setCompliantDeviceCount(?int $value): void {
        $this->getBackingStore()->set('compliantDeviceCount', $value);
    }

    /**
     * Sets the conflictDeviceCount property value. Number of conflict devices
     * @param int|null $value Value to set for the conflictDeviceCount property.
    */
    public function setConflictDeviceCount(?int $value): void {
        $this->getBackingStore()->set('conflictDeviceCount', $value);
    }

    /**
     * Sets the errorDeviceCount property value. Number of error devices
     * @param int|null $value Value to set for the errorDeviceCount property.
    */
    public function setErrorDeviceCount(?int $value): void {
        $this->getBackingStore()->set('errorDeviceCount', $value);
    }

    /**
     * Sets the nonCompliantDeviceCount property value. Number of NonCompliant devices
     * @param int|null $value Value to set for the nonCompliantDeviceCount property.
    */
    public function setNonCompliantDeviceCount(?int $value): void {
        $this->getBackingStore()->set('nonCompliantDeviceCount', $value);
    }

    /**
     * Sets the notApplicableDeviceCount property value. Number of not applicable devices
     * @param int|null $value Value to set for the notApplicableDeviceCount property.
    */
    public function setNotApplicableDeviceCount(?int $value): void {
        $this->getBackingStore()->set('notApplicableDeviceCount', $value);
    }

    /**
     * Sets the notAssignedDeviceCount property value. Number of not assigned devices
     * @param int|null $value Value to set for the notAssignedDeviceCount property.
    */
    public function setNotAssignedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('notAssignedDeviceCount', $value);
    }

    /**
     * Sets the remediatedDeviceCount property value. Number of remediated devices
     * @param int|null $value Value to set for the remediatedDeviceCount property.
    */
    public function setRemediatedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('remediatedDeviceCount', $value);
    }

    /**
     * Sets the unknownDeviceCount property value. Number of unknown devices
     * @param int|null $value Value to set for the unknownDeviceCount property.
    */
    public function setUnknownDeviceCount(?int $value): void {
        $this->getBackingStore()->set('unknownDeviceCount', $value);
    }

}
