<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsAutopilotSettings extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $lastManualSyncTriggerDateTime Last data sync date time with DDS service.
    */
    private ?DateTime $lastManualSyncTriggerDateTime = null;
    
    /**
     * @var DateTime|null $lastSyncDateTime Last data sync date time with DDS service.
    */
    private ?DateTime $lastSyncDateTime = null;
    
    /**
     * @var WindowsAutopilotSyncStatus|null $syncStatus Indicates the status of sync with Device data sync (DDS) service. Possible values are: unknown, inProgress, completed, failed.
    */
    private ?WindowsAutopilotSyncStatus $syncStatus = null;
    
    /**
     * Instantiates a new windowsAutopilotSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lastManualSyncTriggerDateTime' => function (ParseNode $n) use ($o) { $o->setLastManualSyncTriggerDateTime($n->getDateTimeValue()); },
            'lastSyncDateTime' => function (ParseNode $n) use ($o) { $o->setLastSyncDateTime($n->getDateTimeValue()); },
            'syncStatus' => function (ParseNode $n) use ($o) { $o->setSyncStatus($n->getEnumValue(WindowsAutopilotSyncStatus::class)); },
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
