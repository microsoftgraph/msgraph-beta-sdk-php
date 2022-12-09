<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails {
        return new UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails();
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
     * Gets the appVersion property value. The version of the application.
     * @return string|null
    */
    public function getAppVersion(): ?string {
        return $this->getBackingStore()->get('appVersion');
    }

    /**
     * Gets the deviceCountWithCrashes property value. The total number of devices that have reported one or more application crashes for this application and version. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getDeviceCountWithCrashes(): ?int {
        return $this->getBackingStore()->get('deviceCountWithCrashes');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appCrashCount' => fn(ParseNode $n) => $o->setAppCrashCount($n->getIntegerValue()),
            'appDisplayName' => fn(ParseNode $n) => $o->setAppDisplayName($n->getStringValue()),
            'appName' => fn(ParseNode $n) => $o->setAppName($n->getStringValue()),
            'appPublisher' => fn(ParseNode $n) => $o->setAppPublisher($n->getStringValue()),
            'appVersion' => fn(ParseNode $n) => $o->setAppVersion($n->getStringValue()),
            'deviceCountWithCrashes' => fn(ParseNode $n) => $o->setDeviceCountWithCrashes($n->getIntegerValue()),
            'isLatestUsedVersion' => fn(ParseNode $n) => $o->setIsLatestUsedVersion($n->getBooleanValue()),
            'isMostUsedVersion' => fn(ParseNode $n) => $o->setIsMostUsedVersion($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isLatestUsedVersion property value. Is the version of application the latest version for that app that is in use.
     * @return bool|null
    */
    public function getIsLatestUsedVersion(): ?bool {
        return $this->getBackingStore()->get('isLatestUsedVersion');
    }

    /**
     * Gets the isMostUsedVersion property value. Is the version of application the most used version for that app.
     * @return bool|null
    */
    public function getIsMostUsedVersion(): ?bool {
        return $this->getBackingStore()->get('isMostUsedVersion');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('appCrashCount', $this->getAppCrashCount());
        $writer->writeStringValue('appDisplayName', $this->getAppDisplayName());
        $writer->writeStringValue('appName', $this->getAppName());
        $writer->writeStringValue('appPublisher', $this->getAppPublisher());
        $writer->writeStringValue('appVersion', $this->getAppVersion());
        $writer->writeIntegerValue('deviceCountWithCrashes', $this->getDeviceCountWithCrashes());
        $writer->writeBooleanValue('isLatestUsedVersion', $this->getIsLatestUsedVersion());
        $writer->writeBooleanValue('isMostUsedVersion', $this->getIsMostUsedVersion());
    }

    /**
     * Sets the appCrashCount property value. The number of crashes for the app. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the appCrashCount property.
    */
    public function setAppCrashCount(?int $value): void {
        $this->getBackingStore()->set('appCrashCount', $value);
    }

    /**
     * Sets the appDisplayName property value. The friendly name of the application.
     *  @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('appDisplayName', $value);
    }

    /**
     * Sets the appName property value. The name of the application.
     *  @param string|null $value Value to set for the appName property.
    */
    public function setAppName(?string $value): void {
        $this->getBackingStore()->set('appName', $value);
    }

    /**
     * Sets the appPublisher property value. The publisher of the application.
     *  @param string|null $value Value to set for the appPublisher property.
    */
    public function setAppPublisher(?string $value): void {
        $this->getBackingStore()->set('appPublisher', $value);
    }

    /**
     * Sets the appVersion property value. The version of the application.
     *  @param string|null $value Value to set for the appVersion property.
    */
    public function setAppVersion(?string $value): void {
        $this->getBackingStore()->set('appVersion', $value);
    }

    /**
     * Sets the deviceCountWithCrashes property value. The total number of devices that have reported one or more application crashes for this application and version. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the deviceCountWithCrashes property.
    */
    public function setDeviceCountWithCrashes(?int $value): void {
        $this->getBackingStore()->set('deviceCountWithCrashes', $value);
    }

    /**
     * Sets the isLatestUsedVersion property value. Is the version of application the latest version for that app that is in use.
     *  @param bool|null $value Value to set for the isLatestUsedVersion property.
    */
    public function setIsLatestUsedVersion(?bool $value): void {
        $this->getBackingStore()->set('isLatestUsedVersion', $value);
    }

    /**
     * Sets the isMostUsedVersion property value. Is the version of application the most used version for that app.
     *  @param bool|null $value Value to set for the isMostUsedVersion property.
    */
    public function setIsMostUsedVersion(?bool $value): void {
        $this->getBackingStore()->set('isMostUsedVersion', $value);
    }

}
