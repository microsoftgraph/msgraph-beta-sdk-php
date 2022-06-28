<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSSoftwareUpdateConfiguration extends DeviceConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var MacOSSoftwareUpdateBehavior|null $allOtherUpdateBehavior Update behavior for all other updates. Possible values are: notConfigured, default, downloadOnly, installASAP, notifyOnly, installLater.
    */
    private ?MacOSSoftwareUpdateBehavior $allOtherUpdateBehavior = null;
    
    /**
     * @var MacOSSoftwareUpdateBehavior|null $configDataUpdateBehavior Update behavior for configuration data file updates. Possible values are: notConfigured, default, downloadOnly, installASAP, notifyOnly, installLater.
    */
    private ?MacOSSoftwareUpdateBehavior $configDataUpdateBehavior = null;
    
    /**
     * @var MacOSSoftwareUpdateBehavior|null $criticalUpdateBehavior Update behavior for critical updates. Possible values are: notConfigured, default, downloadOnly, installASAP, notifyOnly, installLater.
    */
    private ?MacOSSoftwareUpdateBehavior $criticalUpdateBehavior = null;
    
    /**
     * @var array<CustomUpdateTimeWindow>|null $customUpdateTimeWindows Custom Time windows when updates will be allowed or blocked. This collection can contain a maximum of 20 elements.
    */
    private ?array $customUpdateTimeWindows = null;
    
    /**
     * @var MacOSSoftwareUpdateBehavior|null $firmwareUpdateBehavior Update behavior for firmware updates. Possible values are: notConfigured, default, downloadOnly, installASAP, notifyOnly, installLater.
    */
    private ?MacOSSoftwareUpdateBehavior $firmwareUpdateBehavior = null;
    
    /**
     * @var MacOSSoftwareUpdateScheduleType|null $updateScheduleType Update schedule type. Possible values are: alwaysUpdate, updateDuringTimeWindows, updateOutsideOfTimeWindows.
    */
    private ?MacOSSoftwareUpdateScheduleType $updateScheduleType = null;
    
    /**
     * @var int|null $updateTimeWindowUtcOffsetInMinutes Minutes indicating UTC offset for each update time window
    */
    private ?int $updateTimeWindowUtcOffsetInMinutes = null;
    
    /**
     * Instantiates a new MacOSSoftwareUpdateConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSSoftwareUpdateConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSSoftwareUpdateConfiguration {
        return new MacOSSoftwareUpdateConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allOtherUpdateBehavior property value. Update behavior for all other updates. Possible values are: notConfigured, default, downloadOnly, installASAP, notifyOnly, installLater.
     * @return MacOSSoftwareUpdateBehavior|null
    */
    public function getAllOtherUpdateBehavior(): ?MacOSSoftwareUpdateBehavior {
        return $this->allOtherUpdateBehavior;
    }

    /**
     * Gets the configDataUpdateBehavior property value. Update behavior for configuration data file updates. Possible values are: notConfigured, default, downloadOnly, installASAP, notifyOnly, installLater.
     * @return MacOSSoftwareUpdateBehavior|null
    */
    public function getConfigDataUpdateBehavior(): ?MacOSSoftwareUpdateBehavior {
        return $this->configDataUpdateBehavior;
    }

    /**
     * Gets the criticalUpdateBehavior property value. Update behavior for critical updates. Possible values are: notConfigured, default, downloadOnly, installASAP, notifyOnly, installLater.
     * @return MacOSSoftwareUpdateBehavior|null
    */
    public function getCriticalUpdateBehavior(): ?MacOSSoftwareUpdateBehavior {
        return $this->criticalUpdateBehavior;
    }

    /**
     * Gets the customUpdateTimeWindows property value. Custom Time windows when updates will be allowed or blocked. This collection can contain a maximum of 20 elements.
     * @return array<CustomUpdateTimeWindow>|null
    */
    public function getCustomUpdateTimeWindows(): ?array {
        return $this->customUpdateTimeWindows;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allOtherUpdateBehavior' => function (ParseNode $n) use ($o) { $o->setAllOtherUpdateBehavior($n->getEnumValue(MacOSSoftwareUpdateBehavior::class)); },
            'configDataUpdateBehavior' => function (ParseNode $n) use ($o) { $o->setConfigDataUpdateBehavior($n->getEnumValue(MacOSSoftwareUpdateBehavior::class)); },
            'criticalUpdateBehavior' => function (ParseNode $n) use ($o) { $o->setCriticalUpdateBehavior($n->getEnumValue(MacOSSoftwareUpdateBehavior::class)); },
            'customUpdateTimeWindows' => function (ParseNode $n) use ($o) { $o->setCustomUpdateTimeWindows($n->getCollectionOfObjectValues(array(CustomUpdateTimeWindow::class, 'createFromDiscriminatorValue'))); },
            'firmwareUpdateBehavior' => function (ParseNode $n) use ($o) { $o->setFirmwareUpdateBehavior($n->getEnumValue(MacOSSoftwareUpdateBehavior::class)); },
            'updateScheduleType' => function (ParseNode $n) use ($o) { $o->setUpdateScheduleType($n->getEnumValue(MacOSSoftwareUpdateScheduleType::class)); },
            'updateTimeWindowUtcOffsetInMinutes' => function (ParseNode $n) use ($o) { $o->setUpdateTimeWindowUtcOffsetInMinutes($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the firmwareUpdateBehavior property value. Update behavior for firmware updates. Possible values are: notConfigured, default, downloadOnly, installASAP, notifyOnly, installLater.
     * @return MacOSSoftwareUpdateBehavior|null
    */
    public function getFirmwareUpdateBehavior(): ?MacOSSoftwareUpdateBehavior {
        return $this->firmwareUpdateBehavior;
    }

    /**
     * Gets the updateScheduleType property value. Update schedule type. Possible values are: alwaysUpdate, updateDuringTimeWindows, updateOutsideOfTimeWindows.
     * @return MacOSSoftwareUpdateScheduleType|null
    */
    public function getUpdateScheduleType(): ?MacOSSoftwareUpdateScheduleType {
        return $this->updateScheduleType;
    }

    /**
     * Gets the updateTimeWindowUtcOffsetInMinutes property value. Minutes indicating UTC offset for each update time window
     * @return int|null
    */
    public function getUpdateTimeWindowUtcOffsetInMinutes(): ?int {
        return $this->updateTimeWindowUtcOffsetInMinutes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('allOtherUpdateBehavior', $this->allOtherUpdateBehavior);
        $writer->writeEnumValue('configDataUpdateBehavior', $this->configDataUpdateBehavior);
        $writer->writeEnumValue('criticalUpdateBehavior', $this->criticalUpdateBehavior);
        $writer->writeCollectionOfObjectValues('customUpdateTimeWindows', $this->customUpdateTimeWindows);
        $writer->writeEnumValue('firmwareUpdateBehavior', $this->firmwareUpdateBehavior);
        $writer->writeEnumValue('updateScheduleType', $this->updateScheduleType);
        $writer->writeIntegerValue('updateTimeWindowUtcOffsetInMinutes', $this->updateTimeWindowUtcOffsetInMinutes);
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
     * Sets the allOtherUpdateBehavior property value. Update behavior for all other updates. Possible values are: notConfigured, default, downloadOnly, installASAP, notifyOnly, installLater.
     *  @param MacOSSoftwareUpdateBehavior|null $value Value to set for the allOtherUpdateBehavior property.
    */
    public function setAllOtherUpdateBehavior(?MacOSSoftwareUpdateBehavior $value ): void {
        $this->allOtherUpdateBehavior = $value;
    }

    /**
     * Sets the configDataUpdateBehavior property value. Update behavior for configuration data file updates. Possible values are: notConfigured, default, downloadOnly, installASAP, notifyOnly, installLater.
     *  @param MacOSSoftwareUpdateBehavior|null $value Value to set for the configDataUpdateBehavior property.
    */
    public function setConfigDataUpdateBehavior(?MacOSSoftwareUpdateBehavior $value ): void {
        $this->configDataUpdateBehavior = $value;
    }

    /**
     * Sets the criticalUpdateBehavior property value. Update behavior for critical updates. Possible values are: notConfigured, default, downloadOnly, installASAP, notifyOnly, installLater.
     *  @param MacOSSoftwareUpdateBehavior|null $value Value to set for the criticalUpdateBehavior property.
    */
    public function setCriticalUpdateBehavior(?MacOSSoftwareUpdateBehavior $value ): void {
        $this->criticalUpdateBehavior = $value;
    }

    /**
     * Sets the customUpdateTimeWindows property value. Custom Time windows when updates will be allowed or blocked. This collection can contain a maximum of 20 elements.
     *  @param array<CustomUpdateTimeWindow>|null $value Value to set for the customUpdateTimeWindows property.
    */
    public function setCustomUpdateTimeWindows(?array $value ): void {
        $this->customUpdateTimeWindows = $value;
    }

    /**
     * Sets the firmwareUpdateBehavior property value. Update behavior for firmware updates. Possible values are: notConfigured, default, downloadOnly, installASAP, notifyOnly, installLater.
     *  @param MacOSSoftwareUpdateBehavior|null $value Value to set for the firmwareUpdateBehavior property.
    */
    public function setFirmwareUpdateBehavior(?MacOSSoftwareUpdateBehavior $value ): void {
        $this->firmwareUpdateBehavior = $value;
    }

    /**
     * Sets the updateScheduleType property value. Update schedule type. Possible values are: alwaysUpdate, updateDuringTimeWindows, updateOutsideOfTimeWindows.
     *  @param MacOSSoftwareUpdateScheduleType|null $value Value to set for the updateScheduleType property.
    */
    public function setUpdateScheduleType(?MacOSSoftwareUpdateScheduleType $value ): void {
        $this->updateScheduleType = $value;
    }

    /**
     * Sets the updateTimeWindowUtcOffsetInMinutes property value. Minutes indicating UTC offset for each update time window
     *  @param int|null $value Value to set for the updateTimeWindowUtcOffsetInMinutes property.
    */
    public function setUpdateTimeWindowUtcOffsetInMinutes(?int $value ): void {
        $this->updateTimeWindowUtcOffsetInMinutes = $value;
    }

}
