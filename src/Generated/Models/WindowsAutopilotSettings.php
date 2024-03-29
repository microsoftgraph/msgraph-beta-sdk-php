<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The windowsAutopilotSettings resource represents a Windows Autopilot Account to sync data with Windows device data sync service.
*/
class WindowsAutopilotSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new WindowsAutopilotSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsAutopilotSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsAutopilotSettings {
        return new WindowsAutopilotSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lastManualSyncTriggerDateTime' => fn(ParseNode $n) => $o->setLastManualSyncTriggerDateTime($n->getDateTimeValue()),
            'lastSyncDateTime' => fn(ParseNode $n) => $o->setLastSyncDateTime($n->getDateTimeValue()),
            'syncStatus' => fn(ParseNode $n) => $o->setSyncStatus($n->getEnumValue(WindowsAutopilotSyncStatus::class)),
        ]);
    }

    /**
     * Gets the lastManualSyncTriggerDateTime property value. Last data sync date time with DDS service.
     * @return DateTime|null
    */
    public function getLastManualSyncTriggerDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastManualSyncTriggerDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastManualSyncTriggerDateTime'");
    }

    /**
     * Gets the lastSyncDateTime property value. Last data sync date time with DDS service.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSyncDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSyncDateTime'");
    }

    /**
     * Gets the syncStatus property value. The syncStatus property
     * @return WindowsAutopilotSyncStatus|null
    */
    public function getSyncStatus(): ?WindowsAutopilotSyncStatus {
        $val = $this->getBackingStore()->get('syncStatus');
        if (is_null($val) || $val instanceof WindowsAutopilotSyncStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'syncStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('lastManualSyncTriggerDateTime', $this->getLastManualSyncTriggerDateTime());
        $writer->writeDateTimeValue('lastSyncDateTime', $this->getLastSyncDateTime());
        $writer->writeEnumValue('syncStatus', $this->getSyncStatus());
    }

    /**
     * Sets the lastManualSyncTriggerDateTime property value. Last data sync date time with DDS service.
     * @param DateTime|null $value Value to set for the lastManualSyncTriggerDateTime property.
    */
    public function setLastManualSyncTriggerDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastManualSyncTriggerDateTime', $value);
    }

    /**
     * Sets the lastSyncDateTime property value. Last data sync date time with DDS service.
     * @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSyncDateTime', $value);
    }

    /**
     * Sets the syncStatus property value. The syncStatus property
     * @param WindowsAutopilotSyncStatus|null $value Value to set for the syncStatus property.
    */
    public function setSyncStatus(?WindowsAutopilotSyncStatus $value): void {
        $this->getBackingStore()->set('syncStatus', $value);
    }

}
