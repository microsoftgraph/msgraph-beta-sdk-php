<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsDeviceStartupHistory extends Entity implements Parsable 
{
    /**
     * @var int|null $coreBootTimeInMs The user experience analytics device core boot time in milliseconds.
    */
    private ?int $coreBootTimeInMs = null;
    
    /**
     * @var int|null $coreLoginTimeInMs The user experience analytics device core login time in milliseconds.
    */
    private ?int $coreLoginTimeInMs = null;
    
    /**
     * @var string|null $deviceId The user experience analytics device id.
    */
    private ?string $deviceId = null;
    
    /**
     * @var int|null $featureUpdateBootTimeInMs The user experience analytics device feature update time in milliseconds.
    */
    private ?int $featureUpdateBootTimeInMs = null;
    
    /**
     * @var int|null $groupPolicyBootTimeInMs The User experience analytics Device group policy boot time in milliseconds.
    */
    private ?int $groupPolicyBootTimeInMs = null;
    
    /**
     * @var int|null $groupPolicyLoginTimeInMs The User experience analytics Device group policy login time in milliseconds.
    */
    private ?int $groupPolicyLoginTimeInMs = null;
    
    /**
     * @var bool|null $isFeatureUpdate The user experience analytics device boot record is a feature update.
    */
    private ?bool $isFeatureUpdate = null;
    
    /**
     * @var bool|null $isFirstLogin The user experience analytics device first login.
    */
    private ?bool $isFirstLogin = null;
    
    /**
     * @var string|null $operatingSystemVersion The user experience analytics device boot record's operating system version.
    */
    private ?string $operatingSystemVersion = null;
    
    /**
     * @var int|null $responsiveDesktopTimeInMs The user experience analytics responsive desktop time in milliseconds.
    */
    private ?int $responsiveDesktopTimeInMs = null;
    
    /**
     * @var UserExperienceAnalyticsOperatingSystemRestartCategory|null $restartCategory Operating System restart category
    */
    private ?UserExperienceAnalyticsOperatingSystemRestartCategory $restartCategory = null;
    
    /**
     * @var string|null $restartFaultBucket OS restart fault bucket. The fault bucket is used to find additional information about a system crash.
    */
    private ?string $restartFaultBucket = null;
    
    /**
     * @var string|null $restartStopCode OS restart stop code. This shows the bug check code which can be used to look up the blue screen reason.
    */
    private ?string $restartStopCode = null;
    
    /**
     * @var DateTime|null $startTime The user experience analytics device boot start time.
    */
    private ?DateTime $startTime = null;
    
    /**
     * @var int|null $totalBootTimeInMs The user experience analytics device total boot time in milliseconds.
    */
    private ?int $totalBootTimeInMs = null;
    
    /**
     * @var int|null $totalLoginTimeInMs The user experience analytics device total login time in milliseconds.
    */
    private ?int $totalLoginTimeInMs = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsDeviceStartupHistory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userExperienceAnalyticsDeviceStartupHistory');
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
        return $this->coreBootTimeInMs;
    }

    /**
     * Gets the coreLoginTimeInMs property value. The user experience analytics device core login time in milliseconds.
     * @return int|null
    */
    public function getCoreLoginTimeInMs(): ?int {
        return $this->coreLoginTimeInMs;
    }

    /**
     * Gets the deviceId property value. The user experience analytics device id.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the featureUpdateBootTimeInMs property value. The user experience analytics device feature update time in milliseconds.
     * @return int|null
    */
    public function getFeatureUpdateBootTimeInMs(): ?int {
        return $this->featureUpdateBootTimeInMs;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'coreBootTimeInMs' => function (ParseNode $n) use ($o) { $o->setCoreBootTimeInMs($n->getIntegerValue()); },
            'coreLoginTimeInMs' => function (ParseNode $n) use ($o) { $o->setCoreLoginTimeInMs($n->getIntegerValue()); },
            'deviceId' => function (ParseNode $n) use ($o) { $o->setDeviceId($n->getStringValue()); },
            'featureUpdateBootTimeInMs' => function (ParseNode $n) use ($o) { $o->setFeatureUpdateBootTimeInMs($n->getIntegerValue()); },
            'groupPolicyBootTimeInMs' => function (ParseNode $n) use ($o) { $o->setGroupPolicyBootTimeInMs($n->getIntegerValue()); },
            'groupPolicyLoginTimeInMs' => function (ParseNode $n) use ($o) { $o->setGroupPolicyLoginTimeInMs($n->getIntegerValue()); },
            'isFeatureUpdate' => function (ParseNode $n) use ($o) { $o->setIsFeatureUpdate($n->getBooleanValue()); },
            'isFirstLogin' => function (ParseNode $n) use ($o) { $o->setIsFirstLogin($n->getBooleanValue()); },
            'operatingSystemVersion' => function (ParseNode $n) use ($o) { $o->setOperatingSystemVersion($n->getStringValue()); },
            'responsiveDesktopTimeInMs' => function (ParseNode $n) use ($o) { $o->setResponsiveDesktopTimeInMs($n->getIntegerValue()); },
            'restartCategory' => function (ParseNode $n) use ($o) { $o->setRestartCategory($n->getEnumValue(UserExperienceAnalyticsOperatingSystemRestartCategory::class)); },
            'restartFaultBucket' => function (ParseNode $n) use ($o) { $o->setRestartFaultBucket($n->getStringValue()); },
            'restartStopCode' => function (ParseNode $n) use ($o) { $o->setRestartStopCode($n->getStringValue()); },
            'startTime' => function (ParseNode $n) use ($o) { $o->setStartTime($n->getDateTimeValue()); },
            'totalBootTimeInMs' => function (ParseNode $n) use ($o) { $o->setTotalBootTimeInMs($n->getIntegerValue()); },
            'totalLoginTimeInMs' => function (ParseNode $n) use ($o) { $o->setTotalLoginTimeInMs($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the groupPolicyBootTimeInMs property value. The User experience analytics Device group policy boot time in milliseconds.
     * @return int|null
    */
    public function getGroupPolicyBootTimeInMs(): ?int {
        return $this->groupPolicyBootTimeInMs;
    }

    /**
     * Gets the groupPolicyLoginTimeInMs property value. The User experience analytics Device group policy login time in milliseconds.
     * @return int|null
    */
    public function getGroupPolicyLoginTimeInMs(): ?int {
        return $this->groupPolicyLoginTimeInMs;
    }

    /**
     * Gets the isFeatureUpdate property value. The user experience analytics device boot record is a feature update.
     * @return bool|null
    */
    public function getIsFeatureUpdate(): ?bool {
        return $this->isFeatureUpdate;
    }

    /**
     * Gets the isFirstLogin property value. The user experience analytics device first login.
     * @return bool|null
    */
    public function getIsFirstLogin(): ?bool {
        return $this->isFirstLogin;
    }

    /**
     * Gets the operatingSystemVersion property value. The user experience analytics device boot record's operating system version.
     * @return string|null
    */
    public function getOperatingSystemVersion(): ?string {
        return $this->operatingSystemVersion;
    }

    /**
     * Gets the responsiveDesktopTimeInMs property value. The user experience analytics responsive desktop time in milliseconds.
     * @return int|null
    */
    public function getResponsiveDesktopTimeInMs(): ?int {
        return $this->responsiveDesktopTimeInMs;
    }

    /**
     * Gets the restartCategory property value. Operating System restart category
     * @return UserExperienceAnalyticsOperatingSystemRestartCategory|null
    */
    public function getRestartCategory(): ?UserExperienceAnalyticsOperatingSystemRestartCategory {
        return $this->restartCategory;
    }

    /**
     * Gets the restartFaultBucket property value. OS restart fault bucket. The fault bucket is used to find additional information about a system crash.
     * @return string|null
    */
    public function getRestartFaultBucket(): ?string {
        return $this->restartFaultBucket;
    }

    /**
     * Gets the restartStopCode property value. OS restart stop code. This shows the bug check code which can be used to look up the blue screen reason.
     * @return string|null
    */
    public function getRestartStopCode(): ?string {
        return $this->restartStopCode;
    }

    /**
     * Gets the startTime property value. The user experience analytics device boot start time.
     * @return DateTime|null
    */
    public function getStartTime(): ?DateTime {
        return $this->startTime;
    }

    /**
     * Gets the totalBootTimeInMs property value. The user experience analytics device total boot time in milliseconds.
     * @return int|null
    */
    public function getTotalBootTimeInMs(): ?int {
        return $this->totalBootTimeInMs;
    }

    /**
     * Gets the totalLoginTimeInMs property value. The user experience analytics device total login time in milliseconds.
     * @return int|null
    */
    public function getTotalLoginTimeInMs(): ?int {
        return $this->totalLoginTimeInMs;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('coreBootTimeInMs', $this->coreBootTimeInMs);
        $writer->writeIntegerValue('coreLoginTimeInMs', $this->coreLoginTimeInMs);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeIntegerValue('featureUpdateBootTimeInMs', $this->featureUpdateBootTimeInMs);
        $writer->writeIntegerValue('groupPolicyBootTimeInMs', $this->groupPolicyBootTimeInMs);
        $writer->writeIntegerValue('groupPolicyLoginTimeInMs', $this->groupPolicyLoginTimeInMs);
        $writer->writeBooleanValue('isFeatureUpdate', $this->isFeatureUpdate);
        $writer->writeBooleanValue('isFirstLogin', $this->isFirstLogin);
        $writer->writeStringValue('operatingSystemVersion', $this->operatingSystemVersion);
        $writer->writeIntegerValue('responsiveDesktopTimeInMs', $this->responsiveDesktopTimeInMs);
        $writer->writeEnumValue('restartCategory', $this->restartCategory);
        $writer->writeStringValue('restartFaultBucket', $this->restartFaultBucket);
        $writer->writeStringValue('restartStopCode', $this->restartStopCode);
        $writer->writeDateTimeValue('startTime', $this->startTime);
        $writer->writeIntegerValue('totalBootTimeInMs', $this->totalBootTimeInMs);
        $writer->writeIntegerValue('totalLoginTimeInMs', $this->totalLoginTimeInMs);
    }

    /**
     * Sets the coreBootTimeInMs property value. The user experience analytics device core boot time in milliseconds.
     *  @param int|null $value Value to set for the coreBootTimeInMs property.
    */
    public function setCoreBootTimeInMs(?int $value ): void {
        $this->coreBootTimeInMs = $value;
    }

    /**
     * Sets the coreLoginTimeInMs property value. The user experience analytics device core login time in milliseconds.
     *  @param int|null $value Value to set for the coreLoginTimeInMs property.
    */
    public function setCoreLoginTimeInMs(?int $value ): void {
        $this->coreLoginTimeInMs = $value;
    }

    /**
     * Sets the deviceId property value. The user experience analytics device id.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the featureUpdateBootTimeInMs property value. The user experience analytics device feature update time in milliseconds.
     *  @param int|null $value Value to set for the featureUpdateBootTimeInMs property.
    */
    public function setFeatureUpdateBootTimeInMs(?int $value ): void {
        $this->featureUpdateBootTimeInMs = $value;
    }

    /**
     * Sets the groupPolicyBootTimeInMs property value. The User experience analytics Device group policy boot time in milliseconds.
     *  @param int|null $value Value to set for the groupPolicyBootTimeInMs property.
    */
    public function setGroupPolicyBootTimeInMs(?int $value ): void {
        $this->groupPolicyBootTimeInMs = $value;
    }

    /**
     * Sets the groupPolicyLoginTimeInMs property value. The User experience analytics Device group policy login time in milliseconds.
     *  @param int|null $value Value to set for the groupPolicyLoginTimeInMs property.
    */
    public function setGroupPolicyLoginTimeInMs(?int $value ): void {
        $this->groupPolicyLoginTimeInMs = $value;
    }

    /**
     * Sets the isFeatureUpdate property value. The user experience analytics device boot record is a feature update.
     *  @param bool|null $value Value to set for the isFeatureUpdate property.
    */
    public function setIsFeatureUpdate(?bool $value ): void {
        $this->isFeatureUpdate = $value;
    }

    /**
     * Sets the isFirstLogin property value. The user experience analytics device first login.
     *  @param bool|null $value Value to set for the isFirstLogin property.
    */
    public function setIsFirstLogin(?bool $value ): void {
        $this->isFirstLogin = $value;
    }

    /**
     * Sets the operatingSystemVersion property value. The user experience analytics device boot record's operating system version.
     *  @param string|null $value Value to set for the operatingSystemVersion property.
    */
    public function setOperatingSystemVersion(?string $value ): void {
        $this->operatingSystemVersion = $value;
    }

    /**
     * Sets the responsiveDesktopTimeInMs property value. The user experience analytics responsive desktop time in milliseconds.
     *  @param int|null $value Value to set for the responsiveDesktopTimeInMs property.
    */
    public function setResponsiveDesktopTimeInMs(?int $value ): void {
        $this->responsiveDesktopTimeInMs = $value;
    }

    /**
     * Sets the restartCategory property value. Operating System restart category
     *  @param UserExperienceAnalyticsOperatingSystemRestartCategory|null $value Value to set for the restartCategory property.
    */
    public function setRestartCategory(?UserExperienceAnalyticsOperatingSystemRestartCategory $value ): void {
        $this->restartCategory = $value;
    }

    /**
     * Sets the restartFaultBucket property value. OS restart fault bucket. The fault bucket is used to find additional information about a system crash.
     *  @param string|null $value Value to set for the restartFaultBucket property.
    */
    public function setRestartFaultBucket(?string $value ): void {
        $this->restartFaultBucket = $value;
    }

    /**
     * Sets the restartStopCode property value. OS restart stop code. This shows the bug check code which can be used to look up the blue screen reason.
     *  @param string|null $value Value to set for the restartStopCode property.
    */
    public function setRestartStopCode(?string $value ): void {
        $this->restartStopCode = $value;
    }

    /**
     * Sets the startTime property value. The user experience analytics device boot start time.
     *  @param DateTime|null $value Value to set for the startTime property.
    */
    public function setStartTime(?DateTime $value ): void {
        $this->startTime = $value;
    }

    /**
     * Sets the totalBootTimeInMs property value. The user experience analytics device total boot time in milliseconds.
     *  @param int|null $value Value to set for the totalBootTimeInMs property.
    */
    public function setTotalBootTimeInMs(?int $value ): void {
        $this->totalBootTimeInMs = $value;
    }

    /**
     * Sets the totalLoginTimeInMs property value. The user experience analytics device total login time in milliseconds.
     *  @param int|null $value Value to set for the totalLoginTimeInMs property.
    */
    public function setTotalLoginTimeInMs(?int $value ): void {
        $this->totalLoginTimeInMs = $value;
    }

}
