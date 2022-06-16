<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsBatteryHealthDeviceAppImpact extends Entity 
{
    /** @var string|null $appDisplayName User friendly display name for the app. Eg: Outlook */
    private ?string $appDisplayName = null;
    
    /** @var string|null $appName App name. Eg: oltk.exe */
    private ?string $appName = null;
    
    /** @var string|null $appPublisher App publisher. Eg: Microsoft Corporation */
    private ?string $appPublisher = null;
    
    /** @var float|null $batteryUsagePercentage The percent of total battery power used by this application when the device was not plugged into AC power, over 14 days. Unit in percentage. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    private ?float $batteryUsagePercentage = null;
    
    /** @var string|null $deviceId The unique identifier of the device, Intune DeviceID or SCCM device id. */
    private ?string $deviceId = null;
    
    /** @var bool|null $isForegroundApp true if the user had active interaction with the app. */
    private ?bool $isForegroundApp = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsBatteryHealthDeviceAppImpact and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsBatteryHealthDeviceAppImpact
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsBatteryHealthDeviceAppImpact {
        return new UserExperienceAnalyticsBatteryHealthDeviceAppImpact();
    }

    /**
     * Gets the appDisplayName property value. User friendly display name for the app. Eg: Outlook
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        return $this->appDisplayName;
    }

    /**
     * Gets the appName property value. App name. Eg: oltk.exe
     * @return string|null
    */
    public function getAppName(): ?string {
        return $this->appName;
    }

    /**
     * Gets the appPublisher property value. App publisher. Eg: Microsoft Corporation
     * @return string|null
    */
    public function getAppPublisher(): ?string {
        return $this->appPublisher;
    }

    /**
     * Gets the batteryUsagePercentage property value. The percent of total battery power used by this application when the device was not plugged into AC power, over 14 days. Unit in percentage. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getBatteryUsagePercentage(): ?float {
        return $this->batteryUsagePercentage;
    }

    /**
     * Gets the deviceId property value. The unique identifier of the device, Intune DeviceID or SCCM device id.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'appDisplayName' => function (self $o, ParseNode $n) { $o->setAppDisplayName($n->getStringValue()); },
            'appName' => function (self $o, ParseNode $n) { $o->setAppName($n->getStringValue()); },
            'appPublisher' => function (self $o, ParseNode $n) { $o->setAppPublisher($n->getStringValue()); },
            'batteryUsagePercentage' => function (self $o, ParseNode $n) { $o->setBatteryUsagePercentage($n->getFloatValue()); },
            'deviceId' => function (self $o, ParseNode $n) { $o->setDeviceId($n->getStringValue()); },
            'isForegroundApp' => function (self $o, ParseNode $n) { $o->setIsForegroundApp($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the isForegroundApp property value. true if the user had active interaction with the app.
     * @return bool|null
    */
    public function getIsForegroundApp(): ?bool {
        return $this->isForegroundApp;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appDisplayName', $this->appDisplayName);
        $writer->writeStringValue('appName', $this->appName);
        $writer->writeStringValue('appPublisher', $this->appPublisher);
        $writer->writeFloatValue('batteryUsagePercentage', $this->batteryUsagePercentage);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeBooleanValue('isForegroundApp', $this->isForegroundApp);
    }

    /**
     * Sets the appDisplayName property value. User friendly display name for the app. Eg: Outlook
     *  @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value ): void {
        $this->appDisplayName = $value;
    }

    /**
     * Sets the appName property value. App name. Eg: oltk.exe
     *  @param string|null $value Value to set for the appName property.
    */
    public function setAppName(?string $value ): void {
        $this->appName = $value;
    }

    /**
     * Sets the appPublisher property value. App publisher. Eg: Microsoft Corporation
     *  @param string|null $value Value to set for the appPublisher property.
    */
    public function setAppPublisher(?string $value ): void {
        $this->appPublisher = $value;
    }

    /**
     * Sets the batteryUsagePercentage property value. The percent of total battery power used by this application when the device was not plugged into AC power, over 14 days. Unit in percentage. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the batteryUsagePercentage property.
    */
    public function setBatteryUsagePercentage(?float $value ): void {
        $this->batteryUsagePercentage = $value;
    }

    /**
     * Sets the deviceId property value. The unique identifier of the device, Intune DeviceID or SCCM device id.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the isForegroundApp property value. true if the user had active interaction with the app.
     *  @param bool|null $value Value to set for the isForegroundApp property.
    */
    public function setIsForegroundApp(?bool $value ): void {
        $this->isForegroundApp = $value;
    }

}
