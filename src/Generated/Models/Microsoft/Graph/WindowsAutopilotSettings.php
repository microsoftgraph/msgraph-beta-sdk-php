<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsAutopilotSettings extends Entity 
{
    /** @var DateTime|null $lastManualSyncTriggerDateTime Last data sync date time with DDS service. */
    private ?DateTime $lastManualSyncTriggerDateTime = null;
    
    /** @var DateTime|null $lastSyncDateTime Last data sync date time with DDS service. */
    private ?DateTime $lastSyncDateTime = null;
    
    /** @var WindowsAutopilotSyncStatus|null $syncStatus Indicates the status of sync with Device data sync (DDS) service. Possible values are: unknown, inProgress, completed, failed. */
    private ?WindowsAutopilotSyncStatus $syncStatus = null;
    
    /**
     * Instantiates a new windowsAutopilotSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsAutopilotSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WindowsAutopilotSettings {
        return new WindowsAutopilotSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'lastManualSyncTriggerDateTime' => function (self $o, ParseNode $n) { $o->setLastManualSyncTriggerDateTime($n->getDateTimeValue()); },
            'lastSyncDateTime' => function (self $o, ParseNode $n) { $o->setLastSyncDateTime($n->getDateTimeValue()); },
            'syncStatus' => function (self $o, ParseNode $n) { $o->setSyncStatus($n->getEnumValue(WindowsAutopilotSyncStatus::class)); },
        ]);
    }

    /**
     * Gets the lastManualSyncTriggerDateTime property value. Last data sync date time with DDS service.
     * @return DateTime|null
    */
    public function getLastManualSyncTriggerDateTime(): ?DateTime {
        return $this->lastManualSyncTriggerDateTime;
    }

    /**
     * Gets the lastSyncDateTime property value. Last data sync date time with DDS service.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        return $this->lastSyncDateTime;
    }

    /**
     * Gets the syncStatus property value. Indicates the status of sync with Device data sync (DDS) service. Possible values are: unknown, inProgress, completed, failed.
     * @return WindowsAutopilotSyncStatus|null
    */
    public function getSyncStatus(): ?WindowsAutopilotSyncStatus {
        return $this->syncStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('lastManualSyncTriggerDateTime', $this->lastManualSyncTriggerDateTime);
        $writer->writeDateTimeValue('lastSyncDateTime', $this->lastSyncDateTime);
        $writer->writeEnumValue('syncStatus', $this->syncStatus);
    }

    /**
     * Sets the lastManualSyncTriggerDateTime property value. Last data sync date time with DDS service.
     *  @param DateTime|null $value Value to set for the lastManualSyncTriggerDateTime property.
    */
    public function setLastManualSyncTriggerDateTime(?DateTime $value ): void {
        $this->lastManualSyncTriggerDateTime = $value;
    }

    /**
     * Sets the lastSyncDateTime property value. Last data sync date time with DDS service.
     *  @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value ): void {
        $this->lastSyncDateTime = $value;
    }

    /**
     * Sets the syncStatus property value. Indicates the status of sync with Device data sync (DDS) service. Possible values are: unknown, inProgress, completed, failed.
     *  @param WindowsAutopilotSyncStatus|null $value Value to set for the syncStatus property.
    */
    public function setSyncStatus(?WindowsAutopilotSyncStatus $value ): void {
        $this->syncStatus = $value;
    }

}
