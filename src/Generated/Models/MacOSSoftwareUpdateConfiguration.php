<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * MacOS Software Update Configuration
*/
class MacOSSoftwareUpdateConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new macOSSoftwareUpdateConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSSoftwareUpdateConfiguration');
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
     * Gets the allOtherUpdateBehavior property value. Update behavior options for macOS software updates.
     * @return MacOSSoftwareUpdateBehavior|null
    */
    public function getAllOtherUpdateBehavior(): ?MacOSSoftwareUpdateBehavior {
        $val = $this->getBackingStore()->get('allOtherUpdateBehavior');
        if (is_null($val) || $val instanceof MacOSSoftwareUpdateBehavior) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allOtherUpdateBehavior'");
    }

    /**
     * Gets the configDataUpdateBehavior property value. Update behavior options for macOS software updates.
     * @return MacOSSoftwareUpdateBehavior|null
    */
    public function getConfigDataUpdateBehavior(): ?MacOSSoftwareUpdateBehavior {
        $val = $this->getBackingStore()->get('configDataUpdateBehavior');
        if (is_null($val) || $val instanceof MacOSSoftwareUpdateBehavior) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configDataUpdateBehavior'");
    }

    /**
     * Gets the criticalUpdateBehavior property value. Update behavior options for macOS software updates.
     * @return MacOSSoftwareUpdateBehavior|null
    */
    public function getCriticalUpdateBehavior(): ?MacOSSoftwareUpdateBehavior {
        $val = $this->getBackingStore()->get('criticalUpdateBehavior');
        if (is_null($val) || $val instanceof MacOSSoftwareUpdateBehavior) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'criticalUpdateBehavior'");
    }

    /**
     * Gets the customUpdateTimeWindows property value. Custom Time windows when updates will be allowed or blocked. This collection can contain a maximum of 20 elements.
     * @return array<CustomUpdateTimeWindow>|null
    */
    public function getCustomUpdateTimeWindows(): ?array {
        $val = $this->getBackingStore()->get('customUpdateTimeWindows');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomUpdateTimeWindow::class);
            /** @var array<CustomUpdateTimeWindow>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customUpdateTimeWindows'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allOtherUpdateBehavior' => fn(ParseNode $n) => $o->setAllOtherUpdateBehavior($n->getEnumValue(MacOSSoftwareUpdateBehavior::class)),
            'configDataUpdateBehavior' => fn(ParseNode $n) => $o->setConfigDataUpdateBehavior($n->getEnumValue(MacOSSoftwareUpdateBehavior::class)),
            'criticalUpdateBehavior' => fn(ParseNode $n) => $o->setCriticalUpdateBehavior($n->getEnumValue(MacOSSoftwareUpdateBehavior::class)),
            'customUpdateTimeWindows' => fn(ParseNode $n) => $o->setCustomUpdateTimeWindows($n->getCollectionOfObjectValues([CustomUpdateTimeWindow::class, 'createFromDiscriminatorValue'])),
            'firmwareUpdateBehavior' => fn(ParseNode $n) => $o->setFirmwareUpdateBehavior($n->getEnumValue(MacOSSoftwareUpdateBehavior::class)),
            'maxUserDeferralsCount' => fn(ParseNode $n) => $o->setMaxUserDeferralsCount($n->getIntegerValue()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getEnumValue(MacOSPriority::class)),
            'updateScheduleType' => fn(ParseNode $n) => $o->setUpdateScheduleType($n->getEnumValue(MacOSSoftwareUpdateScheduleType::class)),
            'updateTimeWindowUtcOffsetInMinutes' => fn(ParseNode $n) => $o->setUpdateTimeWindowUtcOffsetInMinutes($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the firmwareUpdateBehavior property value. Update behavior options for macOS software updates.
     * @return MacOSSoftwareUpdateBehavior|null
    */
    public function getFirmwareUpdateBehavior(): ?MacOSSoftwareUpdateBehavior {
        $val = $this->getBackingStore()->get('firmwareUpdateBehavior');
        if (is_null($val) || $val instanceof MacOSSoftwareUpdateBehavior) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firmwareUpdateBehavior'");
    }

    /**
     * Gets the maxUserDeferralsCount property value. The maximum number of times the system allows the user to postpone an update before it’s installed. Supported values: 0 - 366. Valid values 0 to 365
     * @return int|null
    */
    public function getMaxUserDeferralsCount(): ?int {
        $val = $this->getBackingStore()->get('maxUserDeferralsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxUserDeferralsCount'");
    }

    /**
     * Gets the priority property value. The scheduling priority for downloading and preparing the requested update. Default: Low. Possible values: Null, Low, High. Possible values are: low, high, unknownFutureValue.
     * @return MacOSPriority|null
    */
    public function getPriority(): ?MacOSPriority {
        $val = $this->getBackingStore()->get('priority');
        if (is_null($val) || $val instanceof MacOSPriority) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priority'");
    }

    /**
     * Gets the updateScheduleType property value. Update schedule type for macOS software updates.
     * @return MacOSSoftwareUpdateScheduleType|null
    */
    public function getUpdateScheduleType(): ?MacOSSoftwareUpdateScheduleType {
        $val = $this->getBackingStore()->get('updateScheduleType');
        if (is_null($val) || $val instanceof MacOSSoftwareUpdateScheduleType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updateScheduleType'");
    }

    /**
     * Gets the updateTimeWindowUtcOffsetInMinutes property value. Minutes indicating UTC offset for each update time window
     * @return int|null
    */
    public function getUpdateTimeWindowUtcOffsetInMinutes(): ?int {
        $val = $this->getBackingStore()->get('updateTimeWindowUtcOffsetInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updateTimeWindowUtcOffsetInMinutes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('allOtherUpdateBehavior', $this->getAllOtherUpdateBehavior());
        $writer->writeEnumValue('configDataUpdateBehavior', $this->getConfigDataUpdateBehavior());
        $writer->writeEnumValue('criticalUpdateBehavior', $this->getCriticalUpdateBehavior());
        $writer->writeCollectionOfObjectValues('customUpdateTimeWindows', $this->getCustomUpdateTimeWindows());
        $writer->writeEnumValue('firmwareUpdateBehavior', $this->getFirmwareUpdateBehavior());
        $writer->writeIntegerValue('maxUserDeferralsCount', $this->getMaxUserDeferralsCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('priority', $this->getPriority());
        $writer->writeEnumValue('updateScheduleType', $this->getUpdateScheduleType());
        $writer->writeIntegerValue('updateTimeWindowUtcOffsetInMinutes', $this->getUpdateTimeWindowUtcOffsetInMinutes());
    }

    /**
     * Sets the allOtherUpdateBehavior property value. Update behavior options for macOS software updates.
     * @param MacOSSoftwareUpdateBehavior|null $value Value to set for the allOtherUpdateBehavior property.
    */
    public function setAllOtherUpdateBehavior(?MacOSSoftwareUpdateBehavior $value): void {
        $this->getBackingStore()->set('allOtherUpdateBehavior', $value);
    }

    /**
     * Sets the configDataUpdateBehavior property value. Update behavior options for macOS software updates.
     * @param MacOSSoftwareUpdateBehavior|null $value Value to set for the configDataUpdateBehavior property.
    */
    public function setConfigDataUpdateBehavior(?MacOSSoftwareUpdateBehavior $value): void {
        $this->getBackingStore()->set('configDataUpdateBehavior', $value);
    }

    /**
     * Sets the criticalUpdateBehavior property value. Update behavior options for macOS software updates.
     * @param MacOSSoftwareUpdateBehavior|null $value Value to set for the criticalUpdateBehavior property.
    */
    public function setCriticalUpdateBehavior(?MacOSSoftwareUpdateBehavior $value): void {
        $this->getBackingStore()->set('criticalUpdateBehavior', $value);
    }

    /**
     * Sets the customUpdateTimeWindows property value. Custom Time windows when updates will be allowed or blocked. This collection can contain a maximum of 20 elements.
     * @param array<CustomUpdateTimeWindow>|null $value Value to set for the customUpdateTimeWindows property.
    */
    public function setCustomUpdateTimeWindows(?array $value): void {
        $this->getBackingStore()->set('customUpdateTimeWindows', $value);
    }

    /**
     * Sets the firmwareUpdateBehavior property value. Update behavior options for macOS software updates.
     * @param MacOSSoftwareUpdateBehavior|null $value Value to set for the firmwareUpdateBehavior property.
    */
    public function setFirmwareUpdateBehavior(?MacOSSoftwareUpdateBehavior $value): void {
        $this->getBackingStore()->set('firmwareUpdateBehavior', $value);
    }

    /**
     * Sets the maxUserDeferralsCount property value. The maximum number of times the system allows the user to postpone an update before it’s installed. Supported values: 0 - 366. Valid values 0 to 365
     * @param int|null $value Value to set for the maxUserDeferralsCount property.
    */
    public function setMaxUserDeferralsCount(?int $value): void {
        $this->getBackingStore()->set('maxUserDeferralsCount', $value);
    }

    /**
     * Sets the priority property value. The scheduling priority for downloading and preparing the requested update. Default: Low. Possible values: Null, Low, High. Possible values are: low, high, unknownFutureValue.
     * @param MacOSPriority|null $value Value to set for the priority property.
    */
    public function setPriority(?MacOSPriority $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the updateScheduleType property value. Update schedule type for macOS software updates.
     * @param MacOSSoftwareUpdateScheduleType|null $value Value to set for the updateScheduleType property.
    */
    public function setUpdateScheduleType(?MacOSSoftwareUpdateScheduleType $value): void {
        $this->getBackingStore()->set('updateScheduleType', $value);
    }

    /**
     * Sets the updateTimeWindowUtcOffsetInMinutes property value. Minutes indicating UTC offset for each update time window
     * @param int|null $value Value to set for the updateTimeWindowUtcOffsetInMinutes property.
    */
    public function setUpdateTimeWindowUtcOffsetInMinutes(?int $value): void {
        $this->getBackingStore()->set('updateTimeWindowUtcOffsetInMinutes', $value);
    }

}
