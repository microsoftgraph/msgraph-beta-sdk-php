<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsBatteryHealthDeviceAppImpact extends Entity implements Parsable 
{
    /**
     * Instantiates a new userExperienceAnalyticsBatteryHealthDeviceAppImpact and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userExperienceAnalyticsBatteryHealthDeviceAppImpact');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsBatteryHealthDeviceAppImpact
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsBatteryHealthDeviceAppImpact {
        return new UserExperienceAnalyticsBatteryHealthDeviceAppImpact();
    }

    /**
     * Gets the appDisplayName property value. User friendly display name for the app. Eg: Outlook
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        return $this->getBackingStore()->get('appDisplayName');
    }

    /**
     * Gets the appName property value. App name. Eg: oltk.exe
     * @return string|null
    */
    public function getAppName(): ?string {
        return $this->getBackingStore()->get('appName');
    }

    /**
     * Gets the appPublisher property value. App publisher. Eg: Microsoft Corporation
     * @return string|null
    */
    public function getAppPublisher(): ?string {
        return $this->getBackingStore()->get('appPublisher');
    }

    /**
     * Gets the batteryUsagePercentage property value. The percent of total battery power used by this application when the device was not plugged into AC power, over 14 days. Unit in percentage. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getBatteryUsagePercentage(): ?float {
        return $this->getBackingStore()->get('batteryUsagePercentage');
    }

    /**
     * Gets the deviceId property value. The unique identifier of the device, Intune DeviceID or SCCM device id.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->getBackingStore()->get('deviceId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appDisplayName' => fn(ParseNode $n) => $o->setAppDisplayName($n->getStringValue()),
            'appName' => fn(ParseNode $n) => $o->setAppName($n->getStringValue()),
            'appPublisher' => fn(ParseNode $n) => $o->setAppPublisher($n->getStringValue()),
            'batteryUsagePercentage' => fn(ParseNode $n) => $o->setBatteryUsagePercentage($n->getFloatValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'isForegroundApp' => fn(ParseNode $n) => $o->setIsForegroundApp($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isForegroundApp property value. true if the user had active interaction with the app.
     * @return bool|null
    */
    public function getIsForegroundApp(): ?bool {
        return $this->getBackingStore()->get('isForegroundApp');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appDisplayName', $this->getAppDisplayName());
        $writer->writeStringValue('appName', $this->getAppName());
        $writer->writeStringValue('appPublisher', $this->getAppPublisher());
        $writer->writeFloatValue('batteryUsagePercentage', $this->getBatteryUsagePercentage());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeBooleanValue('isForegroundApp', $this->getIsForegroundApp());
    }

    /**
     * Sets the appDisplayName property value. User friendly display name for the app. Eg: Outlook
     *  @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('appDisplayName', $value);
    }

    /**
     * Sets the appName property value. App name. Eg: oltk.exe
     *  @param string|null $value Value to set for the appName property.
    */
    public function setAppName(?string $value): void {
        $this->getBackingStore()->set('appName', $value);
    }

    /**
     * Sets the appPublisher property value. App publisher. Eg: Microsoft Corporation
     *  @param string|null $value Value to set for the appPublisher property.
    */
    public function setAppPublisher(?string $value): void {
        $this->getBackingStore()->set('appPublisher', $value);
    }

    /**
     * Sets the batteryUsagePercentage property value. The percent of total battery power used by this application when the device was not plugged into AC power, over 14 days. Unit in percentage. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the batteryUsagePercentage property.
    */
    public function setBatteryUsagePercentage(?float $value): void {
        $this->getBackingStore()->set('batteryUsagePercentage', $value);
    }

    /**
     * Sets the deviceId property value. The unique identifier of the device, Intune DeviceID or SCCM device id.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the isForegroundApp property value. true if the user had active interaction with the app.
     *  @param bool|null $value Value to set for the isForegroundApp property.
    */
    public function setIsForegroundApp(?bool $value): void {
        $this->getBackingStore()->set('isForegroundApp', $value);
    }

}
