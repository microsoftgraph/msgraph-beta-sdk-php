<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsDeviceStartupHistory extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserExperienceAnalyticsDeviceStartupHistory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsDeviceStartupHistory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsDeviceStartupHistory {
        return new UserExperienceAnalyticsDeviceStartupHistory();
    }

    /**
     * Gets the coreBootTimeInMs property value. The user experience analytics device core boot time in milliseconds.
     * @return int|null
    */
    public function getCoreBootTimeInMs(): ?int {
        return $this->getBackingStore()->get('coreBootTimeInMs');
    }

    /**
     * Gets the coreLoginTimeInMs property value. The user experience analytics device core login time in milliseconds.
     * @return int|null
    */
    public function getCoreLoginTimeInMs(): ?int {
        return $this->getBackingStore()->get('coreLoginTimeInMs');
    }

    /**
     * Gets the deviceId property value. The user experience analytics device id.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->getBackingStore()->get('deviceId');
    }

    /**
     * Gets the featureUpdateBootTimeInMs property value. The user experience analytics device feature update time in milliseconds.
     * @return int|null
    */
    public function getFeatureUpdateBootTimeInMs(): ?int {
        return $this->getBackingStore()->get('featureUpdateBootTimeInMs');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'coreBootTimeInMs' => fn(ParseNode $n) => $o->setCoreBootTimeInMs($n->getIntegerValue()),
            'coreLoginTimeInMs' => fn(ParseNode $n) => $o->setCoreLoginTimeInMs($n->getIntegerValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'featureUpdateBootTimeInMs' => fn(ParseNode $n) => $o->setFeatureUpdateBootTimeInMs($n->getIntegerValue()),
            'groupPolicyBootTimeInMs' => fn(ParseNode $n) => $o->setGroupPolicyBootTimeInMs($n->getIntegerValue()),
            'groupPolicyLoginTimeInMs' => fn(ParseNode $n) => $o->setGroupPolicyLoginTimeInMs($n->getIntegerValue()),
            'isFeatureUpdate' => fn(ParseNode $n) => $o->setIsFeatureUpdate($n->getBooleanValue()),
            'isFirstLogin' => fn(ParseNode $n) => $o->setIsFirstLogin($n->getBooleanValue()),
            'operatingSystemVersion' => fn(ParseNode $n) => $o->setOperatingSystemVersion($n->getStringValue()),
            'responsiveDesktopTimeInMs' => fn(ParseNode $n) => $o->setResponsiveDesktopTimeInMs($n->getIntegerValue()),
            'restartCategory' => fn(ParseNode $n) => $o->setRestartCategory($n->getEnumValue(UserExperienceAnalyticsOperatingSystemRestartCategory::class)),
            'restartFaultBucket' => fn(ParseNode $n) => $o->setRestartFaultBucket($n->getStringValue()),
            'restartStopCode' => fn(ParseNode $n) => $o->setRestartStopCode($n->getStringValue()),
            'startTime' => fn(ParseNode $n) => $o->setStartTime($n->getDateTimeValue()),
            'totalBootTimeInMs' => fn(ParseNode $n) => $o->setTotalBootTimeInMs($n->getIntegerValue()),
            'totalLoginTimeInMs' => fn(ParseNode $n) => $o->setTotalLoginTimeInMs($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the groupPolicyBootTimeInMs property value. The User experience analytics Device group policy boot time in milliseconds.
     * @return int|null
    */
    public function getGroupPolicyBootTimeInMs(): ?int {
        return $this->getBackingStore()->get('groupPolicyBootTimeInMs');
    }

    /**
     * Gets the groupPolicyLoginTimeInMs property value. The User experience analytics Device group policy login time in milliseconds.
     * @return int|null
    */
    public function getGroupPolicyLoginTimeInMs(): ?int {
        return $this->getBackingStore()->get('groupPolicyLoginTimeInMs');
    }

    /**
     * Gets the isFeatureUpdate property value. The user experience analytics device boot record is a feature update.
     * @return bool|null
    */
    public function getIsFeatureUpdate(): ?bool {
        return $this->getBackingStore()->get('isFeatureUpdate');
    }

    /**
     * Gets the isFirstLogin property value. The user experience analytics device first login.
     * @return bool|null
    */
    public function getIsFirstLogin(): ?bool {
        return $this->getBackingStore()->get('isFirstLogin');
    }

    /**
     * Gets the operatingSystemVersion property value. The user experience analytics device boot record's operating system version.
     * @return string|null
    */
    public function getOperatingSystemVersion(): ?string {
        return $this->getBackingStore()->get('operatingSystemVersion');
    }

    /**
     * Gets the responsiveDesktopTimeInMs property value. The user experience analytics responsive desktop time in milliseconds.
     * @return int|null
    */
    public function getResponsiveDesktopTimeInMs(): ?int {
        return $this->getBackingStore()->get('responsiveDesktopTimeInMs');
    }

    /**
     * Gets the restartCategory property value. Operating System restart category.
     * @return UserExperienceAnalyticsOperatingSystemRestartCategory|null
    */
    public function getRestartCategory(): ?UserExperienceAnalyticsOperatingSystemRestartCategory {
        return $this->getBackingStore()->get('restartCategory');
    }

    /**
     * Gets the restartFaultBucket property value. OS restart fault bucket. The fault bucket is used to find additional information about a system crash.
     * @return string|null
    */
    public function getRestartFaultBucket(): ?string {
        return $this->getBackingStore()->get('restartFaultBucket');
    }

    /**
     * Gets the restartStopCode property value. OS restart stop code. This shows the bug check code which can be used to look up the blue screen reason.
     * @return string|null
    */
    public function getRestartStopCode(): ?string {
        return $this->getBackingStore()->get('restartStopCode');
    }

    /**
     * Gets the startTime property value. The user experience analytics device boot start time.
     * @return DateTime|null
    */
    public function getStartTime(): ?DateTime {
        return $this->getBackingStore()->get('startTime');
    }

    /**
     * Gets the totalBootTimeInMs property value. The user experience analytics device total boot time in milliseconds.
     * @return int|null
    */
    public function getTotalBootTimeInMs(): ?int {
        return $this->getBackingStore()->get('totalBootTimeInMs');
    }

    /**
     * Gets the totalLoginTimeInMs property value. The user experience analytics device total login time in milliseconds.
     * @return int|null
    */
    public function getTotalLoginTimeInMs(): ?int {
        return $this->getBackingStore()->get('totalLoginTimeInMs');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('coreBootTimeInMs', $this->getCoreBootTimeInMs());
        $writer->writeIntegerValue('coreLoginTimeInMs', $this->getCoreLoginTimeInMs());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeIntegerValue('featureUpdateBootTimeInMs', $this->getFeatureUpdateBootTimeInMs());
        $writer->writeIntegerValue('groupPolicyBootTimeInMs', $this->getGroupPolicyBootTimeInMs());
        $writer->writeIntegerValue('groupPolicyLoginTimeInMs', $this->getGroupPolicyLoginTimeInMs());
        $writer->writeBooleanValue('isFeatureUpdate', $this->getIsFeatureUpdate());
        $writer->writeBooleanValue('isFirstLogin', $this->getIsFirstLogin());
        $writer->writeStringValue('operatingSystemVersion', $this->getOperatingSystemVersion());
        $writer->writeIntegerValue('responsiveDesktopTimeInMs', $this->getResponsiveDesktopTimeInMs());
        $writer->writeEnumValue('restartCategory', $this->getRestartCategory());
        $writer->writeStringValue('restartFaultBucket', $this->getRestartFaultBucket());
        $writer->writeStringValue('restartStopCode', $this->getRestartStopCode());
        $writer->writeDateTimeValue('startTime', $this->getStartTime());
        $writer->writeIntegerValue('totalBootTimeInMs', $this->getTotalBootTimeInMs());
        $writer->writeIntegerValue('totalLoginTimeInMs', $this->getTotalLoginTimeInMs());
    }

    /**
     * Sets the coreBootTimeInMs property value. The user experience analytics device core boot time in milliseconds.
     * @param int|null $value Value to set for the coreBootTimeInMs property.
    */
    public function setCoreBootTimeInMs(?int $value): void {
        $this->getBackingStore()->set('coreBootTimeInMs', $value);
    }

    /**
     * Sets the coreLoginTimeInMs property value. The user experience analytics device core login time in milliseconds.
     * @param int|null $value Value to set for the coreLoginTimeInMs property.
    */
    public function setCoreLoginTimeInMs(?int $value): void {
        $this->getBackingStore()->set('coreLoginTimeInMs', $value);
    }

    /**
     * Sets the deviceId property value. The user experience analytics device id.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the featureUpdateBootTimeInMs property value. The user experience analytics device feature update time in milliseconds.
     * @param int|null $value Value to set for the featureUpdateBootTimeInMs property.
    */
    public function setFeatureUpdateBootTimeInMs(?int $value): void {
        $this->getBackingStore()->set('featureUpdateBootTimeInMs', $value);
    }

    /**
     * Sets the groupPolicyBootTimeInMs property value. The User experience analytics Device group policy boot time in milliseconds.
     * @param int|null $value Value to set for the groupPolicyBootTimeInMs property.
    */
    public function setGroupPolicyBootTimeInMs(?int $value): void {
        $this->getBackingStore()->set('groupPolicyBootTimeInMs', $value);
    }

    /**
     * Sets the groupPolicyLoginTimeInMs property value. The User experience analytics Device group policy login time in milliseconds.
     * @param int|null $value Value to set for the groupPolicyLoginTimeInMs property.
    */
    public function setGroupPolicyLoginTimeInMs(?int $value): void {
        $this->getBackingStore()->set('groupPolicyLoginTimeInMs', $value);
    }

    /**
     * Sets the isFeatureUpdate property value. The user experience analytics device boot record is a feature update.
     * @param bool|null $value Value to set for the isFeatureUpdate property.
    */
    public function setIsFeatureUpdate(?bool $value): void {
        $this->getBackingStore()->set('isFeatureUpdate', $value);
    }

    /**
     * Sets the isFirstLogin property value. The user experience analytics device first login.
     * @param bool|null $value Value to set for the isFirstLogin property.
    */
    public function setIsFirstLogin(?bool $value): void {
        $this->getBackingStore()->set('isFirstLogin', $value);
    }

    /**
     * Sets the operatingSystemVersion property value. The user experience analytics device boot record's operating system version.
     * @param string|null $value Value to set for the operatingSystemVersion property.
    */
    public function setOperatingSystemVersion(?string $value): void {
        $this->getBackingStore()->set('operatingSystemVersion', $value);
    }

    /**
     * Sets the responsiveDesktopTimeInMs property value. The user experience analytics responsive desktop time in milliseconds.
     * @param int|null $value Value to set for the responsiveDesktopTimeInMs property.
    */
    public function setResponsiveDesktopTimeInMs(?int $value): void {
        $this->getBackingStore()->set('responsiveDesktopTimeInMs', $value);
    }

    /**
     * Sets the restartCategory property value. Operating System restart category.
     * @param UserExperienceAnalyticsOperatingSystemRestartCategory|null $value Value to set for the restartCategory property.
    */
    public function setRestartCategory(?UserExperienceAnalyticsOperatingSystemRestartCategory $value): void {
        $this->getBackingStore()->set('restartCategory', $value);
    }

    /**
     * Sets the restartFaultBucket property value. OS restart fault bucket. The fault bucket is used to find additional information about a system crash.
     * @param string|null $value Value to set for the restartFaultBucket property.
    */
    public function setRestartFaultBucket(?string $value): void {
        $this->getBackingStore()->set('restartFaultBucket', $value);
    }

    /**
     * Sets the restartStopCode property value. OS restart stop code. This shows the bug check code which can be used to look up the blue screen reason.
     * @param string|null $value Value to set for the restartStopCode property.
    */
    public function setRestartStopCode(?string $value): void {
        $this->getBackingStore()->set('restartStopCode', $value);
    }

    /**
     * Sets the startTime property value. The user experience analytics device boot start time.
     * @param DateTime|null $value Value to set for the startTime property.
    */
    public function setStartTime(?DateTime $value): void {
        $this->getBackingStore()->set('startTime', $value);
    }

    /**
     * Sets the totalBootTimeInMs property value. The user experience analytics device total boot time in milliseconds.
     * @param int|null $value Value to set for the totalBootTimeInMs property.
    */
    public function setTotalBootTimeInMs(?int $value): void {
        $this->getBackingStore()->set('totalBootTimeInMs', $value);
    }

    /**
     * Sets the totalLoginTimeInMs property value. The user experience analytics device total login time in milliseconds.
     * @param int|null $value Value to set for the totalLoginTimeInMs property.
    */
    public function setTotalLoginTimeInMs(?int $value): void {
        $this->getBackingStore()->set('totalLoginTimeInMs', $value);
    }

}
