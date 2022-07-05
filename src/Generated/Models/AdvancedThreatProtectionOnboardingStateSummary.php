<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AdvancedThreatProtectionOnboardingStateSummary extends Entity implements Parsable 
{
    /**
     * @var array<AdvancedThreatProtectionOnboardingDeviceSettingState>|null $advancedThreatProtectionOnboardingDeviceSettingStates Not yet documented
    */
    private ?array $advancedThreatProtectionOnboardingDeviceSettingStates = null;
    
    /**
     * @var int|null $compliantDeviceCount Number of compliant devices
    */
    private ?int $compliantDeviceCount = null;
    
    /**
     * @var int|null $conflictDeviceCount Number of conflict devices
    */
    private ?int $conflictDeviceCount = null;
    
    /**
     * @var int|null $errorDeviceCount Number of error devices
    */
    private ?int $errorDeviceCount = null;
    
    /**
     * @var int|null $nonCompliantDeviceCount Number of NonCompliant devices
    */
    private ?int $nonCompliantDeviceCount = null;
    
    /**
     * @var int|null $notApplicableDeviceCount Number of not applicable devices
    */
    private ?int $notApplicableDeviceCount = null;
    
    /**
     * @var int|null $notAssignedDeviceCount Number of not assigned devices
    */
    private ?int $notAssignedDeviceCount = null;
    
    /**
     * @var int|null $remediatedDeviceCount Number of remediated devices
    */
    private ?int $remediatedDeviceCount = null;
    
    /**
     * @var int|null $unknownDeviceCount Number of unknown devices
    */
    private ?int $unknownDeviceCount = null;
    
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
        return $this->advancedThreatProtectionOnboardingDeviceSettingStates;
    }

    /**
     * Gets the compliantDeviceCount property value. Number of compliant devices
     * @return int|null
    */
    public function getCompliantDeviceCount(): ?int {
        return $this->compliantDeviceCount;
    }

    /**
     * Gets the conflictDeviceCount property value. Number of conflict devices
     * @return int|null
    */
    public function getConflictDeviceCount(): ?int {
        return $this->conflictDeviceCount;
    }

    /**
     * Gets the errorDeviceCount property value. Number of error devices
     * @return int|null
    */
    public function getErrorDeviceCount(): ?int {
        return $this->errorDeviceCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'advancedThreatProtectionOnboardingDeviceSettingStates' => function (ParseNode $n) use ($o) { $o->setAdvancedThreatProtectionOnboardingDeviceSettingStates($n->getCollectionOfObjectValues(array(AdvancedThreatProtectionOnboardingDeviceSettingState::class, 'createFromDiscriminatorValue'))); },
            'compliantDeviceCount' => function (ParseNode $n) use ($o) { $o->setCompliantDeviceCount($n->getIntegerValue()); },
            'conflictDeviceCount' => function (ParseNode $n) use ($o) { $o->setConflictDeviceCount($n->getIntegerValue()); },
            'errorDeviceCount' => function (ParseNode $n) use ($o) { $o->setErrorDeviceCount($n->getIntegerValue()); },
            'nonCompliantDeviceCount' => function (ParseNode $n) use ($o) { $o->setNonCompliantDeviceCount($n->getIntegerValue()); },
            'notApplicableDeviceCount' => function (ParseNode $n) use ($o) { $o->setNotApplicableDeviceCount($n->getIntegerValue()); },
            'notAssignedDeviceCount' => function (ParseNode $n) use ($o) { $o->setNotAssignedDeviceCount($n->getIntegerValue()); },
            'remediatedDeviceCount' => function (ParseNode $n) use ($o) { $o->setRemediatedDeviceCount($n->getIntegerValue()); },
            'unknownDeviceCount' => function (ParseNode $n) use ($o) { $o->setUnknownDeviceCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the nonCompliantDeviceCount property value. Number of NonCompliant devices
     * @return int|null
    */
    public function getNonCompliantDeviceCount(): ?int {
        return $this->nonCompliantDeviceCount;
    }

    /**
     * Gets the notApplicableDeviceCount property value. Number of not applicable devices
     * @return int|null
    */
    public function getNotApplicableDeviceCount(): ?int {
        return $this->notApplicableDeviceCount;
    }

    /**
     * Gets the notAssignedDeviceCount property value. Number of not assigned devices
     * @return int|null
    */
    public function getNotAssignedDeviceCount(): ?int {
        return $this->notAssignedDeviceCount;
    }

    /**
     * Gets the remediatedDeviceCount property value. Number of remediated devices
     * @return int|null
    */
    public function getRemediatedDeviceCount(): ?int {
        return $this->remediatedDeviceCount;
    }

    /**
     * Gets the unknownDeviceCount property value. Number of unknown devices
     * @return int|null
    */
    public function getUnknownDeviceCount(): ?int {
        return $this->unknownDeviceCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('advancedThreatProtectionOnboardingDeviceSettingStates', $this->advancedThreatProtectionOnboardingDeviceSettingStates);
        $writer->writeIntegerValue('compliantDeviceCount', $this->compliantDeviceCount);
        $writer->writeIntegerValue('conflictDeviceCount', $this->conflictDeviceCount);
        $writer->writeIntegerValue('errorDeviceCount', $this->errorDeviceCount);
        $writer->writeIntegerValue('nonCompliantDeviceCount', $this->nonCompliantDeviceCount);
        $writer->writeIntegerValue('notApplicableDeviceCount', $this->notApplicableDeviceCount);
        $writer->writeIntegerValue('notAssignedDeviceCount', $this->notAssignedDeviceCount);
        $writer->writeIntegerValue('remediatedDeviceCount', $this->remediatedDeviceCount);
        $writer->writeIntegerValue('unknownDeviceCount', $this->unknownDeviceCount);
    }

    /**
     * Sets the advancedThreatProtectionOnboardingDeviceSettingStates property value. Not yet documented
     *  @param array<AdvancedThreatProtectionOnboardingDeviceSettingState>|null $value Value to set for the advancedThreatProtectionOnboardingDeviceSettingStates property.
    */
    public function setAdvancedThreatProtectionOnboardingDeviceSettingStates(?array $value ): void {
        $this->advancedThreatProtectionOnboardingDeviceSettingStates = $value;
    }

    /**
     * Sets the compliantDeviceCount property value. Number of compliant devices
     *  @param int|null $value Value to set for the compliantDeviceCount property.
    */
    public function setCompliantDeviceCount(?int $value ): void {
        $this->compliantDeviceCount = $value;
    }

    /**
     * Sets the conflictDeviceCount property value. Number of conflict devices
     *  @param int|null $value Value to set for the conflictDeviceCount property.
    */
    public function setConflictDeviceCount(?int $value ): void {
        $this->conflictDeviceCount = $value;
    }

    /**
     * Sets the errorDeviceCount property value. Number of error devices
     *  @param int|null $value Value to set for the errorDeviceCount property.
    */
    public function setErrorDeviceCount(?int $value ): void {
        $this->errorDeviceCount = $value;
    }

    /**
     * Sets the nonCompliantDeviceCount property value. Number of NonCompliant devices
     *  @param int|null $value Value to set for the nonCompliantDeviceCount property.
    */
    public function setNonCompliantDeviceCount(?int $value ): void {
        $this->nonCompliantDeviceCount = $value;
    }

    /**
     * Sets the notApplicableDeviceCount property value. Number of not applicable devices
     *  @param int|null $value Value to set for the notApplicableDeviceCount property.
    */
    public function setNotApplicableDeviceCount(?int $value ): void {
        $this->notApplicableDeviceCount = $value;
    }

    /**
     * Sets the notAssignedDeviceCount property value. Number of not assigned devices
     *  @param int|null $value Value to set for the notAssignedDeviceCount property.
    */
    public function setNotAssignedDeviceCount(?int $value ): void {
        $this->notAssignedDeviceCount = $value;
    }

    /**
     * Sets the remediatedDeviceCount property value. Number of remediated devices
     *  @param int|null $value Value to set for the remediatedDeviceCount property.
    */
    public function setRemediatedDeviceCount(?int $value ): void {
        $this->remediatedDeviceCount = $value;
    }

    /**
     * Sets the unknownDeviceCount property value. Number of unknown devices
     *  @param int|null $value Value to set for the unknownDeviceCount property.
    */
    public function setUnknownDeviceCount(?int $value ): void {
        $this->unknownDeviceCount = $value;
    }

}
