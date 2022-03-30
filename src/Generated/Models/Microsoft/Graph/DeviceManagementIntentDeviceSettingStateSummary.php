<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementIntentDeviceSettingStateSummary extends Entity 
{
    /** @var int|null $compliantCount Number of compliant devices */
    private ?int $compliantCount = null;
    
    /** @var int|null $conflictCount Number of devices in conflict */
    private ?int $conflictCount = null;
    
    /** @var int|null $errorCount Number of error devices */
    private ?int $errorCount = null;
    
    /** @var int|null $nonCompliantCount Number of non compliant devices */
    private ?int $nonCompliantCount = null;
    
    /** @var int|null $notApplicableCount Number of not applicable devices */
    private ?int $notApplicableCount = null;
    
    /** @var int|null $remediatedCount Number of remediated devices */
    private ?int $remediatedCount = null;
    
    /** @var string|null $settingName Name of a setting */
    private ?string $settingName = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementIntentDeviceSettingStateSummary {
        return new DeviceManagementIntentDeviceSettingStateSummary();
    }

    /**
     * Gets the compliantCount property value. Number of compliant devices
     * @return int|null
    */
    public function getCompliantCount(): ?int {
        return $this->compliantCount;
    }

    /**
     * Gets the conflictCount property value. Number of devices in conflict
     * @return int|null
    */
    public function getConflictCount(): ?int {
        return $this->conflictCount;
    }

    /**
     * Gets the errorCount property value. Number of error devices
     * @return int|null
    */
    public function getErrorCount(): ?int {
        return $this->errorCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'compliantCount' => function (self $o, ParseNode $n) { $o->setCompliantCount($n->getIntegerValue()); },
            'conflictCount' => function (self $o, ParseNode $n) { $o->setConflictCount($n->getIntegerValue()); },
            'errorCount' => function (self $o, ParseNode $n) { $o->setErrorCount($n->getIntegerValue()); },
            'nonCompliantCount' => function (self $o, ParseNode $n) { $o->setNonCompliantCount($n->getIntegerValue()); },
            'notApplicableCount' => function (self $o, ParseNode $n) { $o->setNotApplicableCount($n->getIntegerValue()); },
            'remediatedCount' => function (self $o, ParseNode $n) { $o->setRemediatedCount($n->getIntegerValue()); },
            'settingName' => function (self $o, ParseNode $n) { $o->setSettingName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the nonCompliantCount property value. Number of non compliant devices
     * @return int|null
    */
    public function getNonCompliantCount(): ?int {
        return $this->nonCompliantCount;
    }

    /**
     * Gets the notApplicableCount property value. Number of not applicable devices
     * @return int|null
    */
    public function getNotApplicableCount(): ?int {
        return $this->notApplicableCount;
    }

    /**
     * Gets the remediatedCount property value. Number of remediated devices
     * @return int|null
    */
    public function getRemediatedCount(): ?int {
        return $this->remediatedCount;
    }

    /**
     * Gets the settingName property value. Name of a setting
     * @return string|null
    */
    public function getSettingName(): ?string {
        return $this->settingName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('compliantCount', $this->compliantCount);
        $writer->writeIntegerValue('conflictCount', $this->conflictCount);
        $writer->writeIntegerValue('errorCount', $this->errorCount);
        $writer->writeIntegerValue('nonCompliantCount', $this->nonCompliantCount);
        $writer->writeIntegerValue('notApplicableCount', $this->notApplicableCount);
        $writer->writeIntegerValue('remediatedCount', $this->remediatedCount);
        $writer->writeStringValue('settingName', $this->settingName);
    }

    /**
     * Sets the compliantCount property value. Number of compliant devices
     *  @param int|null $value Value to set for the compliantCount property.
    */
    public function setCompliantCount(?int $value ): void {
        $this->compliantCount = $value;
    }

    /**
     * Sets the conflictCount property value. Number of devices in conflict
     *  @param int|null $value Value to set for the conflictCount property.
    */
    public function setConflictCount(?int $value ): void {
        $this->conflictCount = $value;
    }

    /**
     * Sets the errorCount property value. Number of error devices
     *  @param int|null $value Value to set for the errorCount property.
    */
    public function setErrorCount(?int $value ): void {
        $this->errorCount = $value;
    }

    /**
     * Sets the nonCompliantCount property value. Number of non compliant devices
     *  @param int|null $value Value to set for the nonCompliantCount property.
    */
    public function setNonCompliantCount(?int $value ): void {
        $this->nonCompliantCount = $value;
    }

    /**
     * Sets the notApplicableCount property value. Number of not applicable devices
     *  @param int|null $value Value to set for the notApplicableCount property.
    */
    public function setNotApplicableCount(?int $value ): void {
        $this->notApplicableCount = $value;
    }

    /**
     * Sets the remediatedCount property value. Number of remediated devices
     *  @param int|null $value Value to set for the remediatedCount property.
    */
    public function setRemediatedCount(?int $value ): void {
        $this->remediatedCount = $value;
    }

    /**
     * Sets the settingName property value. Name of a setting
     *  @param string|null $value Value to set for the settingName property.
    */
    public function setSettingName(?string $value ): void {
        $this->settingName = $value;
    }

}
