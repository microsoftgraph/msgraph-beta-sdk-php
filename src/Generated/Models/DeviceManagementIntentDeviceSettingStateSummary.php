<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementIntentDeviceSettingStateSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceManagementIntentDeviceSettingStateSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementIntentDeviceSettingStateSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementIntentDeviceSettingStateSummary {
        return new DeviceManagementIntentDeviceSettingStateSummary();
    }

    /**
     * Gets the compliantCount property value. Number of compliant devices
     * @return int|null
    */
    public function getCompliantCount(): ?int {
        return $this->getBackingStore()->get('compliantCount');
    }

    /**
     * Gets the conflictCount property value. Number of devices in conflict
     * @return int|null
    */
    public function getConflictCount(): ?int {
        return $this->getBackingStore()->get('conflictCount');
    }

    /**
     * Gets the errorCount property value. Number of error devices
     * @return int|null
    */
    public function getErrorCount(): ?int {
        return $this->getBackingStore()->get('errorCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'compliantCount' => fn(ParseNode $n) => $o->setCompliantCount($n->getIntegerValue()),
            'conflictCount' => fn(ParseNode $n) => $o->setConflictCount($n->getIntegerValue()),
            'errorCount' => fn(ParseNode $n) => $o->setErrorCount($n->getIntegerValue()),
            'nonCompliantCount' => fn(ParseNode $n) => $o->setNonCompliantCount($n->getIntegerValue()),
            'notApplicableCount' => fn(ParseNode $n) => $o->setNotApplicableCount($n->getIntegerValue()),
            'remediatedCount' => fn(ParseNode $n) => $o->setRemediatedCount($n->getIntegerValue()),
            'settingName' => fn(ParseNode $n) => $o->setSettingName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the nonCompliantCount property value. Number of non compliant devices
     * @return int|null
    */
    public function getNonCompliantCount(): ?int {
        return $this->getBackingStore()->get('nonCompliantCount');
    }

    /**
     * Gets the notApplicableCount property value. Number of not applicable devices
     * @return int|null
    */
    public function getNotApplicableCount(): ?int {
        return $this->getBackingStore()->get('notApplicableCount');
    }

    /**
     * Gets the remediatedCount property value. Number of remediated devices
     * @return int|null
    */
    public function getRemediatedCount(): ?int {
        return $this->getBackingStore()->get('remediatedCount');
    }

    /**
     * Gets the settingName property value. Name of a setting
     * @return string|null
    */
    public function getSettingName(): ?string {
        return $this->getBackingStore()->get('settingName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('compliantCount', $this->getCompliantCount());
        $writer->writeIntegerValue('conflictCount', $this->getConflictCount());
        $writer->writeIntegerValue('errorCount', $this->getErrorCount());
        $writer->writeIntegerValue('nonCompliantCount', $this->getNonCompliantCount());
        $writer->writeIntegerValue('notApplicableCount', $this->getNotApplicableCount());
        $writer->writeIntegerValue('remediatedCount', $this->getRemediatedCount());
        $writer->writeStringValue('settingName', $this->getSettingName());
    }

    /**
     * Sets the compliantCount property value. Number of compliant devices
     *  @param int|null $value Value to set for the compliantCount property.
    */
    public function setCompliantCount(?int $value): void {
        $this->getBackingStore()->set('compliantCount', $value);
    }

    /**
     * Sets the conflictCount property value. Number of devices in conflict
     *  @param int|null $value Value to set for the conflictCount property.
    */
    public function setConflictCount(?int $value): void {
        $this->getBackingStore()->set('conflictCount', $value);
    }

    /**
     * Sets the errorCount property value. Number of error devices
     *  @param int|null $value Value to set for the errorCount property.
    */
    public function setErrorCount(?int $value): void {
        $this->getBackingStore()->set('errorCount', $value);
    }

    /**
     * Sets the nonCompliantCount property value. Number of non compliant devices
     *  @param int|null $value Value to set for the nonCompliantCount property.
    */
    public function setNonCompliantCount(?int $value): void {
        $this->getBackingStore()->set('nonCompliantCount', $value);
    }

    /**
     * Sets the notApplicableCount property value. Number of not applicable devices
     *  @param int|null $value Value to set for the notApplicableCount property.
    */
    public function setNotApplicableCount(?int $value): void {
        $this->getBackingStore()->set('notApplicableCount', $value);
    }

    /**
     * Sets the remediatedCount property value. Number of remediated devices
     *  @param int|null $value Value to set for the remediatedCount property.
    */
    public function setRemediatedCount(?int $value): void {
        $this->getBackingStore()->set('remediatedCount', $value);
    }

    /**
     * Sets the settingName property value. Name of a setting
     *  @param string|null $value Value to set for the settingName property.
    */
    public function setSettingName(?string $value): void {
        $this->getBackingStore()->set('settingName', $value);
    }

}
