<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics application performance entity contains app performance details by OS version.
*/
class UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion extends Entity implements Parsable 
{
    /**
     * Instantiates a new userExperienceAnalyticsAppHealthAppPerformanceByOSVersion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('activeDeviceCount');
    }

    /**
     * Gets the appCrashCount property value. The number of crashes for the app. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getAppCrashCount(): ?int {
        return $this->getBackingStore()->get('appCrashCount');
    }

    /**
     * Gets the appDisplayName property value. The friendly name of the application.
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        return $this->getBackingStore()->get('appDisplayName');
    }

    /**
     * Gets the appName property value. The name of the application.
     * @return string|null
    */
    public function getAppName(): ?string {
        return $this->getBackingStore()->get('appName');
    }

    /**
     * Gets the appPublisher property value. The publisher of the application.
     * @return string|null
    */
    public function getAppPublisher(): ?string {
        return $this->getBackingStore()->get('appPublisher');
    }

    /**
     * Gets the appUsageDuration property value. The total usage time of the application in minutes. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getAppUsageDuration(): ?int {
        return $this->getBackingStore()->get('appUsageDuration');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeDeviceCount' => fn(ParseNode $n) => $o->setActiveDeviceCount($n->getIntegerValue()),
            'appCrashCount' => fn(ParseNode $n) => $o->setAppCrashCount($n->getIntegerValue()),
            'appDisplayName' => fn(ParseNode $n) => $o->setAppDisplayName($n->getStringValue()),
            'appName' => fn(ParseNode $n) => $o->setAppName($n->getStringValue()),
            'appPublisher' => fn(ParseNode $n) => $o->setAppPublisher($n->getStringValue()),
            'appUsageDuration' => fn(ParseNode $n) => $o->setAppUsageDuration($n->getIntegerValue()),
            'meanTimeToFailureInMinutes' => fn(ParseNode $n) => $o->setMeanTimeToFailureInMinutes($n->getIntegerValue()),
            'osBuildNumber' => fn(ParseNode $n) => $o->setOsBuildNumber($n->getStringValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the meanTimeToFailureInMinutes property value. The mean time to failure for the app in minutes. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getMeanTimeToFailureInMinutes(): ?int {
        return $this->getBackingStore()->get('meanTimeToFailureInMinutes');
    }

    /**
     * Gets the osBuildNumber property value. The os build number of the application.
     * @return string|null
    */
    public function getOsBuildNumber(): ?string {
        return $this->getBackingStore()->get('osBuildNumber');
    }

    /**
     * Gets the osVersion property value. The os version of the application.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->getBackingStore()->get('osVersion');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('activeDeviceCount', $this->getActiveDeviceCount());
        $writer->writeIntegerValue('appCrashCount', $this->getAppCrashCount());
        $writer->writeStringValue('appDisplayName', $this->getAppDisplayName());
        $writer->writeStringValue('appName', $this->getAppName());
        $writer->writeStringValue('appPublisher', $this->getAppPublisher());
        $writer->writeIntegerValue('appUsageDuration', $this->getAppUsageDuration());
        $writer->writeIntegerValue('meanTimeToFailureInMinutes', $this->getMeanTimeToFailureInMinutes());
        $writer->writeStringValue('osBuildNumber', $this->getOsBuildNumber());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
    }

    /**
     * Sets the activeDeviceCount property value. The number of devices where the app has been active. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the activeDeviceCount property.
    */
    public function setActiveDeviceCount(?int $value): void {
        $this->getBackingStore()->set('activeDeviceCount', $value);
    }

    /**
     * Sets the appCrashCount property value. The number of crashes for the app. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the appCrashCount property.
    */
    public function setAppCrashCount(?int $value): void {
        $this->getBackingStore()->set('appCrashCount', $value);
    }

    /**
     * Sets the appDisplayName property value. The friendly name of the application.
     * @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('appDisplayName', $value);
    }

    /**
     * Sets the appName property value. The name of the application.
     * @param string|null $value Value to set for the appName property.
    */
    public function setAppName(?string $value): void {
        $this->getBackingStore()->set('appName', $value);
    }

    /**
     * Sets the appPublisher property value. The publisher of the application.
     * @param string|null $value Value to set for the appPublisher property.
    */
    public function setAppPublisher(?string $value): void {
        $this->getBackingStore()->set('appPublisher', $value);
    }

    /**
     * Sets the appUsageDuration property value. The total usage time of the application in minutes. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the appUsageDuration property.
    */
    public function setAppUsageDuration(?int $value): void {
        $this->getBackingStore()->set('appUsageDuration', $value);
    }

    /**
     * Sets the meanTimeToFailureInMinutes property value. The mean time to failure for the app in minutes. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the meanTimeToFailureInMinutes property.
    */
    public function setMeanTimeToFailureInMinutes(?int $value): void {
        $this->getBackingStore()->set('meanTimeToFailureInMinutes', $value);
    }

    /**
     * Sets the osBuildNumber property value. The os build number of the application.
     * @param string|null $value Value to set for the osBuildNumber property.
    */
    public function setOsBuildNumber(?string $value): void {
        $this->getBackingStore()->set('osBuildNumber', $value);
    }

    /**
     * Sets the osVersion property value. The os version of the application.
     * @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

}
