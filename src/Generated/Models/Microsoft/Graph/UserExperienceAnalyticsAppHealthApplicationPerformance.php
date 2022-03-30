<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsAppHealthApplicationPerformance extends Entity 
{
    /** @var int|null $activeDeviceCount The number of devices where the app has been active. Valid values -2147483648 to 2147483647 */
    private ?int $activeDeviceCount = null;
    
    /** @var int|null $appCrashCount The number of crashes for the app. Valid values -2147483648 to 2147483647 */
    private ?int $appCrashCount = null;
    
    /** @var string|null $appDisplayName The friendly name of the application. */
    private ?string $appDisplayName = null;
    
    /** @var int|null $appHangCount The number of hangs for the app. Valid values -2147483648 to 2147483647 */
    private ?int $appHangCount = null;
    
    /** @var float|null $appHealthScore The health score of the app. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    private ?float $appHealthScore = null;
    
    /** @var string|null $appHealthStatus The overall health status of the app. */
    private ?string $appHealthStatus = null;
    
    /** @var string|null $appName The name of the application. */
    private ?string $appName = null;
    
    /** @var string|null $appPublisher The publisher of the application. */
    private ?string $appPublisher = null;
    
    /** @var int|null $appUsageDuration The total usage time of the application in minutes. Valid values -2147483648 to 2147483647 */
    private ?int $appUsageDuration = null;
    
    /** @var int|null $meanTimeToFailureInMinutes The mean time to failure for the app in minutes. Valid values -2147483648 to 2147483647 */
    private ?int $meanTimeToFailureInMinutes = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsAppHealthApplicationPerformance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsAppHealthApplicationPerformance
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsAppHealthApplicationPerformance {
        return new UserExperienceAnalyticsAppHealthApplicationPerformance();
    }

    /**
     * Gets the activeDeviceCount property value. The number of devices where the app has been active. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getActiveDeviceCount(): ?int {
        return $this->activeDeviceCount;
    }

    /**
     * Gets the appCrashCount property value. The number of crashes for the app. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getAppCrashCount(): ?int {
        return $this->appCrashCount;
    }

    /**
     * Gets the appDisplayName property value. The friendly name of the application.
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        return $this->appDisplayName;
    }

    /**
     * Gets the appHangCount property value. The number of hangs for the app. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getAppHangCount(): ?int {
        return $this->appHangCount;
    }

    /**
     * Gets the appHealthScore property value. The health score of the app. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getAppHealthScore(): ?float {
        return $this->appHealthScore;
    }

    /**
     * Gets the appHealthStatus property value. The overall health status of the app.
     * @return string|null
    */
    public function getAppHealthStatus(): ?string {
        return $this->appHealthStatus;
    }

    /**
     * Gets the appName property value. The name of the application.
     * @return string|null
    */
    public function getAppName(): ?string {
        return $this->appName;
    }

    /**
     * Gets the appPublisher property value. The publisher of the application.
     * @return string|null
    */
    public function getAppPublisher(): ?string {
        return $this->appPublisher;
    }

    /**
     * Gets the appUsageDuration property value. The total usage time of the application in minutes. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getAppUsageDuration(): ?int {
        return $this->appUsageDuration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'activeDeviceCount' => function (self $o, ParseNode $n) { $o->setActiveDeviceCount($n->getIntegerValue()); },
            'appCrashCount' => function (self $o, ParseNode $n) { $o->setAppCrashCount($n->getIntegerValue()); },
            'appDisplayName' => function (self $o, ParseNode $n) { $o->setAppDisplayName($n->getStringValue()); },
            'appHangCount' => function (self $o, ParseNode $n) { $o->setAppHangCount($n->getIntegerValue()); },
            'appHealthScore' => function (self $o, ParseNode $n) { $o->setAppHealthScore($n->getFloatValue()); },
            'appHealthStatus' => function (self $o, ParseNode $n) { $o->setAppHealthStatus($n->getStringValue()); },
            'appName' => function (self $o, ParseNode $n) { $o->setAppName($n->getStringValue()); },
            'appPublisher' => function (self $o, ParseNode $n) { $o->setAppPublisher($n->getStringValue()); },
            'appUsageDuration' => function (self $o, ParseNode $n) { $o->setAppUsageDuration($n->getIntegerValue()); },
            'meanTimeToFailureInMinutes' => function (self $o, ParseNode $n) { $o->setMeanTimeToFailureInMinutes($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the meanTimeToFailureInMinutes property value. The mean time to failure for the app in minutes. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getMeanTimeToFailureInMinutes(): ?int {
        return $this->meanTimeToFailureInMinutes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('activeDeviceCount', $this->activeDeviceCount);
        $writer->writeIntegerValue('appCrashCount', $this->appCrashCount);
        $writer->writeStringValue('appDisplayName', $this->appDisplayName);
        $writer->writeIntegerValue('appHangCount', $this->appHangCount);
        $writer->writeFloatValue('appHealthScore', $this->appHealthScore);
        $writer->writeStringValue('appHealthStatus', $this->appHealthStatus);
        $writer->writeStringValue('appName', $this->appName);
        $writer->writeStringValue('appPublisher', $this->appPublisher);
        $writer->writeIntegerValue('appUsageDuration', $this->appUsageDuration);
        $writer->writeIntegerValue('meanTimeToFailureInMinutes', $this->meanTimeToFailureInMinutes);
    }

    /**
     * Sets the activeDeviceCount property value. The number of devices where the app has been active. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the activeDeviceCount property.
    */
    public function setActiveDeviceCount(?int $value ): void {
        $this->activeDeviceCount = $value;
    }

    /**
     * Sets the appCrashCount property value. The number of crashes for the app. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the appCrashCount property.
    */
    public function setAppCrashCount(?int $value ): void {
        $this->appCrashCount = $value;
    }

    /**
     * Sets the appDisplayName property value. The friendly name of the application.
     *  @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value ): void {
        $this->appDisplayName = $value;
    }

    /**
     * Sets the appHangCount property value. The number of hangs for the app. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the appHangCount property.
    */
    public function setAppHangCount(?int $value ): void {
        $this->appHangCount = $value;
    }

    /**
     * Sets the appHealthScore property value. The health score of the app. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the appHealthScore property.
    */
    public function setAppHealthScore(?float $value ): void {
        $this->appHealthScore = $value;
    }

    /**
     * Sets the appHealthStatus property value. The overall health status of the app.
     *  @param string|null $value Value to set for the appHealthStatus property.
    */
    public function setAppHealthStatus(?string $value ): void {
        $this->appHealthStatus = $value;
    }

    /**
     * Sets the appName property value. The name of the application.
     *  @param string|null $value Value to set for the appName property.
    */
    public function setAppName(?string $value ): void {
        $this->appName = $value;
    }

    /**
     * Sets the appPublisher property value. The publisher of the application.
     *  @param string|null $value Value to set for the appPublisher property.
    */
    public function setAppPublisher(?string $value ): void {
        $this->appPublisher = $value;
    }

    /**
     * Sets the appUsageDuration property value. The total usage time of the application in minutes. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the appUsageDuration property.
    */
    public function setAppUsageDuration(?int $value ): void {
        $this->appUsageDuration = $value;
    }

    /**
     * Sets the meanTimeToFailureInMinutes property value. The mean time to failure for the app in minutes. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the meanTimeToFailureInMinutes property.
    */
    public function setMeanTimeToFailureInMinutes(?int $value ): void {
        $this->meanTimeToFailureInMinutes = $value;
    }

}
