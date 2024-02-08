<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics battery health app impact entity contains battery usage related information at an app level for the tenant.
*/
class UserExperienceAnalyticsBatteryHealthAppImpact extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthAppImpact and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsBatteryHealthAppImpact
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsBatteryHealthAppImpact {
        return new UserExperienceAnalyticsBatteryHealthAppImpact();
    }

    /**
     * Gets the activeDevices property value. Number of active devices for using that app over a 14-day period. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getActiveDevices(): ?int {
        $val = $this->getBackingStore()->get('activeDevices');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeDevices'");
    }

    /**
     * Gets the appDisplayName property value. User friendly display name for the app. Eg: Outlook
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        $val = $this->getBackingStore()->get('appDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appDisplayName'");
    }

    /**
     * Gets the appName property value. App name. Eg: oltk.exe
     * @return string|null
    */
    public function getAppName(): ?string {
        $val = $this->getBackingStore()->get('appName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appName'");
    }

    /**
     * Gets the appPublisher property value. App publisher. Eg: Microsoft Corporation
     * @return string|null
    */
    public function getAppPublisher(): ?string {
        $val = $this->getBackingStore()->get('appPublisher');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appPublisher'");
    }

    /**
     * Gets the batteryUsagePercentage property value. The percent of total battery power used by this application when the device was not plugged into AC power, over 14 days computed across all devices in the tenant. Unit in percentage. Valid values 0 to 1.79769313486232E+308
     * @return float|null
    */
    public function getBatteryUsagePercentage(): ?float {
        $val = $this->getBackingStore()->get('batteryUsagePercentage');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'batteryUsagePercentage'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeDevices' => fn(ParseNode $n) => $o->setActiveDevices($n->getIntegerValue()),
            'appDisplayName' => fn(ParseNode $n) => $o->setAppDisplayName($n->getStringValue()),
            'appName' => fn(ParseNode $n) => $o->setAppName($n->getStringValue()),
            'appPublisher' => fn(ParseNode $n) => $o->setAppPublisher($n->getStringValue()),
            'batteryUsagePercentage' => fn(ParseNode $n) => $o->setBatteryUsagePercentage($n->getFloatValue()),
            'isForegroundApp' => fn(ParseNode $n) => $o->setIsForegroundApp($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isForegroundApp property value. true if the user had active interaction with the app.
     * @return bool|null
    */
    public function getIsForegroundApp(): ?bool {
        $val = $this->getBackingStore()->get('isForegroundApp');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isForegroundApp'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('activeDevices', $this->getActiveDevices());
        $writer->writeStringValue('appDisplayName', $this->getAppDisplayName());
        $writer->writeStringValue('appName', $this->getAppName());
        $writer->writeStringValue('appPublisher', $this->getAppPublisher());
        $writer->writeFloatValue('batteryUsagePercentage', $this->getBatteryUsagePercentage());
        $writer->writeBooleanValue('isForegroundApp', $this->getIsForegroundApp());
    }

    /**
     * Sets the activeDevices property value. Number of active devices for using that app over a 14-day period. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the activeDevices property.
    */
    public function setActiveDevices(?int $value): void {
        $this->getBackingStore()->set('activeDevices', $value);
    }

    /**
     * Sets the appDisplayName property value. User friendly display name for the app. Eg: Outlook
     * @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('appDisplayName', $value);
    }

    /**
     * Sets the appName property value. App name. Eg: oltk.exe
     * @param string|null $value Value to set for the appName property.
    */
    public function setAppName(?string $value): void {
        $this->getBackingStore()->set('appName', $value);
    }

    /**
     * Sets the appPublisher property value. App publisher. Eg: Microsoft Corporation
     * @param string|null $value Value to set for the appPublisher property.
    */
    public function setAppPublisher(?string $value): void {
        $this->getBackingStore()->set('appPublisher', $value);
    }

    /**
     * Sets the batteryUsagePercentage property value. The percent of total battery power used by this application when the device was not plugged into AC power, over 14 days computed across all devices in the tenant. Unit in percentage. Valid values 0 to 1.79769313486232E+308
     * @param float|null $value Value to set for the batteryUsagePercentage property.
    */
    public function setBatteryUsagePercentage(?float $value): void {
        $this->getBackingStore()->set('batteryUsagePercentage', $value);
    }

    /**
     * Sets the isForegroundApp property value. true if the user had active interaction with the app.
     * @param bool|null $value Value to set for the isForegroundApp property.
    */
    public function setIsForegroundApp(?bool $value): void {
        $this->getBackingStore()->set('isForegroundApp', $value);
    }

}
