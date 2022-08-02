<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion extends Entity implements Parsable 
{
    /**
     * @var int|null $activeDeviceCount The number of devices where the app has been active. Valid values -2147483648 to 2147483647
    */
    private ?int $activeDeviceCount = null;
    
    /**
     * @var int|null $appCrashCount The number of crashes for the app. Valid values -2147483648 to 2147483647
    */
    private ?int $appCrashCount = null;
    
    /**
     * @var string|null $appDisplayName The friendly name of the application.
    */
    private ?string $appDisplayName = null;
    
    /**
     * @var string|null $appName The name of the application.
    */
    private ?string $appName = null;
    
    /**
     * @var string|null $appPublisher The publisher of the application.
    */
    private ?string $appPublisher = null;
    
    /**
     * @var int|null $appUsageDuration The total usage time of the application in minutes. Valid values -2147483648 to 2147483647
    */
    private ?int $appUsageDuration = null;
    
    /**
     * @var int|null $meanTimeToFailureInMinutes The mean time to failure for the app in minutes. Valid values -2147483648 to 2147483647
    */
    private ?int $meanTimeToFailureInMinutes = null;
    
    /**
     * @var string|null $osBuildNumber The os build number of the application.
    */
    private ?string $osBuildNumber = null;
    
    /**
     * @var string|null $osVersion The os version of the application.
    */
    private ?string $osVersion = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userExperienceAnalyticsAppHealthAppPerformanceByOSVersion');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion {
        return new UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion();
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeDeviceCount' => function (ParseNode $n) use ($o) { $o->setActiveDeviceCount($n->getIntegerValue()); },
            'appCrashCount' => function (ParseNode $n) use ($o) { $o->setAppCrashCount($n->getIntegerValue()); },
            'appDisplayName' => function (ParseNode $n) use ($o) { $o->setAppDisplayName($n->getStringValue()); },
            'appName' => function (ParseNode $n) use ($o) { $o->setAppName($n->getStringValue()); },
            'appPublisher' => function (ParseNode $n) use ($o) { $o->setAppPublisher($n->getStringValue()); },
            'appUsageDuration' => function (ParseNode $n) use ($o) { $o->setAppUsageDuration($n->getIntegerValue()); },
            'meanTimeToFailureInMinutes' => function (ParseNode $n) use ($o) { $o->setMeanTimeToFailureInMinutes($n->getIntegerValue()); },
            'osBuildNumber' => function (ParseNode $n) use ($o) { $o->setOsBuildNumber($n->getStringValue()); },
            'osVersion' => function (ParseNode $n) use ($o) { $o->setOsVersion($n->getStringValue()); },
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
     * Gets the osBuildNumber property value. The os build number of the application.
     * @return string|null
    */
    public function getOsBuildNumber(): ?string {
        return $this->osBuildNumber;
    }

    /**
     * Gets the osVersion property value. The os version of the application.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->osVersion;
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
        $writer->writeStringValue('appName', $this->appName);
        $writer->writeStringValue('appPublisher', $this->appPublisher);
        $writer->writeIntegerValue('appUsageDuration', $this->appUsageDuration);
        $writer->writeIntegerValue('meanTimeToFailureInMinutes', $this->meanTimeToFailureInMinutes);
        $writer->writeStringValue('osBuildNumber', $this->osBuildNumber);
        $writer->writeStringValue('osVersion', $this->osVersion);
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

    /**
     * Sets the osBuildNumber property value. The os build number of the application.
     *  @param string|null $value Value to set for the osBuildNumber property.
    */
    public function setOsBuildNumber(?string $value ): void {
        $this->osBuildNumber = $value;
    }

    /**
     * Sets the osVersion property value. The os version of the application.
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value ): void {
        $this->osVersion = $value;
    }

}
