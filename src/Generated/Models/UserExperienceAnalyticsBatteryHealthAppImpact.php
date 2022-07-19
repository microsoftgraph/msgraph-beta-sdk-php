<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsBatteryHealthAppImpact extends Entity implements Parsable 
{
    /**
     * @var int|null $activeDevices Number of active devices for using that app over a 14-day period. Valid values -2147483648 to 2147483647
    */
    private ?int $activeDevices = null;
    
    /**
     * @var string|null $appDisplayName User friendly display name for the app. Eg: Outlook
    */
    private ?string $appDisplayName = null;
    
    /**
     * @var string|null $appName App name. Eg: oltk.exe
    */
    private ?string $appName = null;
    
    /**
     * @var string|null $appPublisher App publisher. Eg: Microsoft Corporation
    */
    private ?string $appPublisher = null;
    
    /**
     * @var float|null $batteryUsagePercentage The percent of total battery power used by this application when the device was not plugged into AC power, over 14 days computed across all devices in the tenant. Unit in percentage. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    */
    private ?float $batteryUsagePercentage = null;
    
    /**
     * @var bool|null $isForegroundApp true if the user had active interaction with the app.
    */
    private ?bool $isForegroundApp = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsBatteryHealthAppImpact and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userExperienceAnalyticsBatteryHealthAppImpact');
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
     * Gets the activeDevices property value. Number of active devices for using that app over a 14-day period. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getActiveDevices(): ?int {
        return $this->activeDevices;
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
     * Gets the batteryUsagePercentage property value. The percent of total battery power used by this application when the device was not plugged into AC power, over 14 days computed across all devices in the tenant. Unit in percentage. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getBatteryUsagePercentage(): ?float {
        return $this->batteryUsagePercentage;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeDevices' => function (ParseNode $n) use ($o) { $o->setActiveDevices($n->getIntegerValue()); },
            'appDisplayName' => function (ParseNode $n) use ($o) { $o->setAppDisplayName($n->getStringValue()); },
            'appName' => function (ParseNode $n) use ($o) { $o->setAppName($n->getStringValue()); },
            'appPublisher' => function (ParseNode $n) use ($o) { $o->setAppPublisher($n->getStringValue()); },
            'batteryUsagePercentage' => function (ParseNode $n) use ($o) { $o->setBatteryUsagePercentage($n->getFloatValue()); },
            'isForegroundApp' => function (ParseNode $n) use ($o) { $o->setIsForegroundApp($n->getBooleanValue()); },
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
        $writer->writeIntegerValue('activeDevices', $this->activeDevices);
        $writer->writeStringValue('appDisplayName', $this->appDisplayName);
        $writer->writeStringValue('appName', $this->appName);
        $writer->writeStringValue('appPublisher', $this->appPublisher);
        $writer->writeFloatValue('batteryUsagePercentage', $this->batteryUsagePercentage);
        $writer->writeBooleanValue('isForegroundApp', $this->isForegroundApp);
    }

    /**
     * Sets the activeDevices property value. Number of active devices for using that app over a 14-day period. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the activeDevices property.
    */
    public function setActiveDevices(?int $value ): void {
        $this->activeDevices = $value;
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
     * Sets the batteryUsagePercentage property value. The percent of total battery power used by this application when the device was not plugged into AC power, over 14 days computed across all devices in the tenant. Unit in percentage. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the batteryUsagePercentage property.
    */
    public function setBatteryUsagePercentage(?float $value ): void {
        $this->batteryUsagePercentage = $value;
    }

    /**
     * Sets the isForegroundApp property value. true if the user had active interaction with the app.
     *  @param bool|null $value Value to set for the isForegroundApp property.
    */
    public function setIsForegroundApp(?bool $value ): void {
        $this->isForegroundApp = $value;
    }

}
