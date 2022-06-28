<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileThreatDefenseConnector extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowPartnerToCollectIOSApplicationMetadata For IOS devices, allows the admin to configure whether the data sync partner may also collect metadata about installed applications from Intune
    */
    private ?bool $allowPartnerToCollectIOSApplicationMetadata = null;
    
    /**
     * @var bool|null $allowPartnerToCollectIOSPersonalApplicationMetadata For IOS devices, allows the admin to configure whether the data sync partner may also collect metadata about personally installed applications from Intune
    */
    private ?bool $allowPartnerToCollectIOSPersonalApplicationMetadata = null;
    
    /**
     * @var bool|null $androidDeviceBlockedOnMissingPartnerData For Android, set whether Intune must receive data from the data sync partner prior to marking a device compliant
    */
    private ?bool $androidDeviceBlockedOnMissingPartnerData = null;
    
    /**
     * @var bool|null $androidEnabled For Android, set whether data from the data sync partner should be used during compliance evaluations
    */
    private ?bool $androidEnabled = null;
    
    /**
     * @var bool|null $androidMobileApplicationManagementEnabled For Android, set whether data from the data sync partner should be used during Mobile Application Management (MAM) evaluations. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation.
    */
    private ?bool $androidMobileApplicationManagementEnabled = null;
    
    /**
     * @var bool|null $iosDeviceBlockedOnMissingPartnerData For IOS, set whether Intune must receive data from the data sync partner prior to marking a device compliant
    */
    private ?bool $iosDeviceBlockedOnMissingPartnerData = null;
    
    /**
     * @var bool|null $iosEnabled For IOS, get or set whether data from the data sync partner should be used during compliance evaluations
    */
    private ?bool $iosEnabled = null;
    
    /**
     * @var bool|null $iosMobileApplicationManagementEnabled For IOS, get or set whether data from the data sync partner should be used during Mobile Application Management (MAM) evaluations. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation.
    */
    private ?bool $iosMobileApplicationManagementEnabled = null;
    
    /**
     * @var DateTime|null $lastHeartbeatDateTime DateTime of last Heartbeat recieved from the Data Sync Partner
    */
    private ?DateTime $lastHeartbeatDateTime = null;
    
    /**
     * @var bool|null $macDeviceBlockedOnMissingPartnerData For Mac, get or set whether Intune must receive data from the data sync partner prior to marking a device compliant
    */
    private ?bool $macDeviceBlockedOnMissingPartnerData = null;
    
    /**
     * @var bool|null $macEnabled For Mac, get or set whether data from the data sync partner should be used during compliance evaluations
    */
    private ?bool $macEnabled = null;
    
    /**
     * @var bool|null $microsoftDefenderForEndpointAttachEnabled When TRUE, configuration profile management via Microsoft Defender for Endpoint is enabled. When FALSE, configuration profile management via Microsoft Defender for Endpoint is disabled.
    */
    private ?bool $microsoftDefenderForEndpointAttachEnabled = null;
    
    /**
     * @var MobileThreatPartnerTenantState|null $partnerState Data Sync Partner state for this account. Possible values are: unavailable, available, enabled, unresponsive.
    */
    private ?MobileThreatPartnerTenantState $partnerState = null;
    
    /**
     * @var int|null $partnerUnresponsivenessThresholdInDays Get or Set days the per tenant tolerance to unresponsiveness for this partner integration
    */
    private ?int $partnerUnresponsivenessThresholdInDays = null;
    
    /**
     * @var bool|null $partnerUnsupportedOsVersionBlocked Get or set whether to block devices on the enabled platforms that do not meet the minimum version requirements of the Data Sync Partner
    */
    private ?bool $partnerUnsupportedOsVersionBlocked = null;
    
    /**
     * @var bool|null $windowsDeviceBlockedOnMissingPartnerData For Windows, set whether Intune must receive data from the data sync partner prior to marking a device compliant
    */
    private ?bool $windowsDeviceBlockedOnMissingPartnerData = null;
    
    /**
     * @var bool|null $windowsEnabled For Windows, get or set whether data from the data sync partner should be used during compliance evaluations
    */
    private ?bool $windowsEnabled = null;
    
    /**
     * Instantiates a new mobileThreatDefenseConnector and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileThreatDefenseConnector
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileThreatDefenseConnector {
        return new MobileThreatDefenseConnector();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowPartnerToCollectIOSApplicationMetadata property value. For IOS devices, allows the admin to configure whether the data sync partner may also collect metadata about installed applications from Intune
     * @return bool|null
    */
    public function getAllowPartnerToCollectIOSApplicationMetadata(): ?bool {
        return $this->allowPartnerToCollectIOSApplicationMetadata;
    }

    /**
     * Gets the allowPartnerToCollectIOSPersonalApplicationMetadata property value. For IOS devices, allows the admin to configure whether the data sync partner may also collect metadata about personally installed applications from Intune
     * @return bool|null
    */
    public function getAllowPartnerToCollectIOSPersonalApplicationMetadata(): ?bool {
        return $this->allowPartnerToCollectIOSPersonalApplicationMetadata;
    }

    /**
     * Gets the androidDeviceBlockedOnMissingPartnerData property value. For Android, set whether Intune must receive data from the data sync partner prior to marking a device compliant
     * @return bool|null
    */
    public function getAndroidDeviceBlockedOnMissingPartnerData(): ?bool {
        return $this->androidDeviceBlockedOnMissingPartnerData;
    }

    /**
     * Gets the androidEnabled property value. For Android, set whether data from the data sync partner should be used during compliance evaluations
     * @return bool|null
    */
    public function getAndroidEnabled(): ?bool {
        return $this->androidEnabled;
    }

    /**
     * Gets the androidMobileApplicationManagementEnabled property value. For Android, set whether data from the data sync partner should be used during Mobile Application Management (MAM) evaluations. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation.
     * @return bool|null
    */
    public function getAndroidMobileApplicationManagementEnabled(): ?bool {
        return $this->androidMobileApplicationManagementEnabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowPartnerToCollectIOSApplicationMetadata' => function (ParseNode $n) use ($o) { $o->setAllowPartnerToCollectIOSApplicationMetadata($n->getBooleanValue()); },
            'allowPartnerToCollectIOSPersonalApplicationMetadata' => function (ParseNode $n) use ($o) { $o->setAllowPartnerToCollectIOSPersonalApplicationMetadata($n->getBooleanValue()); },
            'androidDeviceBlockedOnMissingPartnerData' => function (ParseNode $n) use ($o) { $o->setAndroidDeviceBlockedOnMissingPartnerData($n->getBooleanValue()); },
            'androidEnabled' => function (ParseNode $n) use ($o) { $o->setAndroidEnabled($n->getBooleanValue()); },
            'androidMobileApplicationManagementEnabled' => function (ParseNode $n) use ($o) { $o->setAndroidMobileApplicationManagementEnabled($n->getBooleanValue()); },
            'iosDeviceBlockedOnMissingPartnerData' => function (ParseNode $n) use ($o) { $o->setIosDeviceBlockedOnMissingPartnerData($n->getBooleanValue()); },
            'iosEnabled' => function (ParseNode $n) use ($o) { $o->setIosEnabled($n->getBooleanValue()); },
            'iosMobileApplicationManagementEnabled' => function (ParseNode $n) use ($o) { $o->setIosMobileApplicationManagementEnabled($n->getBooleanValue()); },
            'lastHeartbeatDateTime' => function (ParseNode $n) use ($o) { $o->setLastHeartbeatDateTime($n->getDateTimeValue()); },
            'macDeviceBlockedOnMissingPartnerData' => function (ParseNode $n) use ($o) { $o->setMacDeviceBlockedOnMissingPartnerData($n->getBooleanValue()); },
            'macEnabled' => function (ParseNode $n) use ($o) { $o->setMacEnabled($n->getBooleanValue()); },
            'microsoftDefenderForEndpointAttachEnabled' => function (ParseNode $n) use ($o) { $o->setMicrosoftDefenderForEndpointAttachEnabled($n->getBooleanValue()); },
            'partnerState' => function (ParseNode $n) use ($o) { $o->setPartnerState($n->getEnumValue(MobileThreatPartnerTenantState::class)); },
            'partnerUnresponsivenessThresholdInDays' => function (ParseNode $n) use ($o) { $o->setPartnerUnresponsivenessThresholdInDays($n->getIntegerValue()); },
            'partnerUnsupportedOsVersionBlocked' => function (ParseNode $n) use ($o) { $o->setPartnerUnsupportedOsVersionBlocked($n->getBooleanValue()); },
            'windowsDeviceBlockedOnMissingPartnerData' => function (ParseNode $n) use ($o) { $o->setWindowsDeviceBlockedOnMissingPartnerData($n->getBooleanValue()); },
            'windowsEnabled' => function (ParseNode $n) use ($o) { $o->setWindowsEnabled($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the iosDeviceBlockedOnMissingPartnerData property value. For IOS, set whether Intune must receive data from the data sync partner prior to marking a device compliant
     * @return bool|null
    */
    public function getIosDeviceBlockedOnMissingPartnerData(): ?bool {
        return $this->iosDeviceBlockedOnMissingPartnerData;
    }

    /**
     * Gets the iosEnabled property value. For IOS, get or set whether data from the data sync partner should be used during compliance evaluations
     * @return bool|null
    */
    public function getIosEnabled(): ?bool {
        return $this->iosEnabled;
    }

    /**
     * Gets the iosMobileApplicationManagementEnabled property value. For IOS, get or set whether data from the data sync partner should be used during Mobile Application Management (MAM) evaluations. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation.
     * @return bool|null
    */
    public function getIosMobileApplicationManagementEnabled(): ?bool {
        return $this->iosMobileApplicationManagementEnabled;
    }

    /**
     * Gets the lastHeartbeatDateTime property value. DateTime of last Heartbeat recieved from the Data Sync Partner
     * @return DateTime|null
    */
    public function getLastHeartbeatDateTime(): ?DateTime {
        return $this->lastHeartbeatDateTime;
    }

    /**
     * Gets the macDeviceBlockedOnMissingPartnerData property value. For Mac, get or set whether Intune must receive data from the data sync partner prior to marking a device compliant
     * @return bool|null
    */
    public function getMacDeviceBlockedOnMissingPartnerData(): ?bool {
        return $this->macDeviceBlockedOnMissingPartnerData;
    }

    /**
     * Gets the macEnabled property value. For Mac, get or set whether data from the data sync partner should be used during compliance evaluations
     * @return bool|null
    */
    public function getMacEnabled(): ?bool {
        return $this->macEnabled;
    }

    /**
     * Gets the microsoftDefenderForEndpointAttachEnabled property value. When TRUE, configuration profile management via Microsoft Defender for Endpoint is enabled. When FALSE, configuration profile management via Microsoft Defender for Endpoint is disabled.
     * @return bool|null
    */
    public function getMicrosoftDefenderForEndpointAttachEnabled(): ?bool {
        return $this->microsoftDefenderForEndpointAttachEnabled;
    }

    /**
     * Gets the partnerState property value. Data Sync Partner state for this account. Possible values are: unavailable, available, enabled, unresponsive.
     * @return MobileThreatPartnerTenantState|null
    */
    public function getPartnerState(): ?MobileThreatPartnerTenantState {
        return $this->partnerState;
    }

    /**
     * Gets the partnerUnresponsivenessThresholdInDays property value. Get or Set days the per tenant tolerance to unresponsiveness for this partner integration
     * @return int|null
    */
    public function getPartnerUnresponsivenessThresholdInDays(): ?int {
        return $this->partnerUnresponsivenessThresholdInDays;
    }

    /**
     * Gets the partnerUnsupportedOsVersionBlocked property value. Get or set whether to block devices on the enabled platforms that do not meet the minimum version requirements of the Data Sync Partner
     * @return bool|null
    */
    public function getPartnerUnsupportedOsVersionBlocked(): ?bool {
        return $this->partnerUnsupportedOsVersionBlocked;
    }

    /**
     * Gets the windowsDeviceBlockedOnMissingPartnerData property value. For Windows, set whether Intune must receive data from the data sync partner prior to marking a device compliant
     * @return bool|null
    */
    public function getWindowsDeviceBlockedOnMissingPartnerData(): ?bool {
        return $this->windowsDeviceBlockedOnMissingPartnerData;
    }

    /**
     * Gets the windowsEnabled property value. For Windows, get or set whether data from the data sync partner should be used during compliance evaluations
     * @return bool|null
    */
    public function getWindowsEnabled(): ?bool {
        return $this->windowsEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowPartnerToCollectIOSApplicationMetadata', $this->allowPartnerToCollectIOSApplicationMetadata);
        $writer->writeBooleanValue('allowPartnerToCollectIOSPersonalApplicationMetadata', $this->allowPartnerToCollectIOSPersonalApplicationMetadata);
        $writer->writeBooleanValue('androidDeviceBlockedOnMissingPartnerData', $this->androidDeviceBlockedOnMissingPartnerData);
        $writer->writeBooleanValue('androidEnabled', $this->androidEnabled);
        $writer->writeBooleanValue('androidMobileApplicationManagementEnabled', $this->androidMobileApplicationManagementEnabled);
        $writer->writeBooleanValue('iosDeviceBlockedOnMissingPartnerData', $this->iosDeviceBlockedOnMissingPartnerData);
        $writer->writeBooleanValue('iosEnabled', $this->iosEnabled);
        $writer->writeBooleanValue('iosMobileApplicationManagementEnabled', $this->iosMobileApplicationManagementEnabled);
        $writer->writeDateTimeValue('lastHeartbeatDateTime', $this->lastHeartbeatDateTime);
        $writer->writeBooleanValue('macDeviceBlockedOnMissingPartnerData', $this->macDeviceBlockedOnMissingPartnerData);
        $writer->writeBooleanValue('macEnabled', $this->macEnabled);
        $writer->writeBooleanValue('microsoftDefenderForEndpointAttachEnabled', $this->microsoftDefenderForEndpointAttachEnabled);
        $writer->writeEnumValue('partnerState', $this->partnerState);
        $writer->writeIntegerValue('partnerUnresponsivenessThresholdInDays', $this->partnerUnresponsivenessThresholdInDays);
        $writer->writeBooleanValue('partnerUnsupportedOsVersionBlocked', $this->partnerUnsupportedOsVersionBlocked);
        $writer->writeBooleanValue('windowsDeviceBlockedOnMissingPartnerData', $this->windowsDeviceBlockedOnMissingPartnerData);
        $writer->writeBooleanValue('windowsEnabled', $this->windowsEnabled);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the allowPartnerToCollectIOSApplicationMetadata property value. For IOS devices, allows the admin to configure whether the data sync partner may also collect metadata about installed applications from Intune
     *  @param bool|null $value Value to set for the allowPartnerToCollectIOSApplicationMetadata property.
    */
    public function setAllowPartnerToCollectIOSApplicationMetadata(?bool $value ): void {
        $this->allowPartnerToCollectIOSApplicationMetadata = $value;
    }

    /**
     * Sets the allowPartnerToCollectIOSPersonalApplicationMetadata property value. For IOS devices, allows the admin to configure whether the data sync partner may also collect metadata about personally installed applications from Intune
     *  @param bool|null $value Value to set for the allowPartnerToCollectIOSPersonalApplicationMetadata property.
    */
    public function setAllowPartnerToCollectIOSPersonalApplicationMetadata(?bool $value ): void {
        $this->allowPartnerToCollectIOSPersonalApplicationMetadata = $value;
    }

    /**
     * Sets the androidDeviceBlockedOnMissingPartnerData property value. For Android, set whether Intune must receive data from the data sync partner prior to marking a device compliant
     *  @param bool|null $value Value to set for the androidDeviceBlockedOnMissingPartnerData property.
    */
    public function setAndroidDeviceBlockedOnMissingPartnerData(?bool $value ): void {
        $this->androidDeviceBlockedOnMissingPartnerData = $value;
    }

    /**
     * Sets the androidEnabled property value. For Android, set whether data from the data sync partner should be used during compliance evaluations
     *  @param bool|null $value Value to set for the androidEnabled property.
    */
    public function setAndroidEnabled(?bool $value ): void {
        $this->androidEnabled = $value;
    }

    /**
     * Sets the androidMobileApplicationManagementEnabled property value. For Android, set whether data from the data sync partner should be used during Mobile Application Management (MAM) evaluations. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation.
     *  @param bool|null $value Value to set for the androidMobileApplicationManagementEnabled property.
    */
    public function setAndroidMobileApplicationManagementEnabled(?bool $value ): void {
        $this->androidMobileApplicationManagementEnabled = $value;
    }

    /**
     * Sets the iosDeviceBlockedOnMissingPartnerData property value. For IOS, set whether Intune must receive data from the data sync partner prior to marking a device compliant
     *  @param bool|null $value Value to set for the iosDeviceBlockedOnMissingPartnerData property.
    */
    public function setIosDeviceBlockedOnMissingPartnerData(?bool $value ): void {
        $this->iosDeviceBlockedOnMissingPartnerData = $value;
    }

    /**
     * Sets the iosEnabled property value. For IOS, get or set whether data from the data sync partner should be used during compliance evaluations
     *  @param bool|null $value Value to set for the iosEnabled property.
    */
    public function setIosEnabled(?bool $value ): void {
        $this->iosEnabled = $value;
    }

    /**
     * Sets the iosMobileApplicationManagementEnabled property value. For IOS, get or set whether data from the data sync partner should be used during Mobile Application Management (MAM) evaluations. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation.
     *  @param bool|null $value Value to set for the iosMobileApplicationManagementEnabled property.
    */
    public function setIosMobileApplicationManagementEnabled(?bool $value ): void {
        $this->iosMobileApplicationManagementEnabled = $value;
    }

    /**
     * Sets the lastHeartbeatDateTime property value. DateTime of last Heartbeat recieved from the Data Sync Partner
     *  @param DateTime|null $value Value to set for the lastHeartbeatDateTime property.
    */
    public function setLastHeartbeatDateTime(?DateTime $value ): void {
        $this->lastHeartbeatDateTime = $value;
    }

    /**
     * Sets the macDeviceBlockedOnMissingPartnerData property value. For Mac, get or set whether Intune must receive data from the data sync partner prior to marking a device compliant
     *  @param bool|null $value Value to set for the macDeviceBlockedOnMissingPartnerData property.
    */
    public function setMacDeviceBlockedOnMissingPartnerData(?bool $value ): void {
        $this->macDeviceBlockedOnMissingPartnerData = $value;
    }

    /**
     * Sets the macEnabled property value. For Mac, get or set whether data from the data sync partner should be used during compliance evaluations
     *  @param bool|null $value Value to set for the macEnabled property.
    */
    public function setMacEnabled(?bool $value ): void {
        $this->macEnabled = $value;
    }

    /**
     * Sets the microsoftDefenderForEndpointAttachEnabled property value. When TRUE, configuration profile management via Microsoft Defender for Endpoint is enabled. When FALSE, configuration profile management via Microsoft Defender for Endpoint is disabled.
     *  @param bool|null $value Value to set for the microsoftDefenderForEndpointAttachEnabled property.
    */
    public function setMicrosoftDefenderForEndpointAttachEnabled(?bool $value ): void {
        $this->microsoftDefenderForEndpointAttachEnabled = $value;
    }

    /**
     * Sets the partnerState property value. Data Sync Partner state for this account. Possible values are: unavailable, available, enabled, unresponsive.
     *  @param MobileThreatPartnerTenantState|null $value Value to set for the partnerState property.
    */
    public function setPartnerState(?MobileThreatPartnerTenantState $value ): void {
        $this->partnerState = $value;
    }

    /**
     * Sets the partnerUnresponsivenessThresholdInDays property value. Get or Set days the per tenant tolerance to unresponsiveness for this partner integration
     *  @param int|null $value Value to set for the partnerUnresponsivenessThresholdInDays property.
    */
    public function setPartnerUnresponsivenessThresholdInDays(?int $value ): void {
        $this->partnerUnresponsivenessThresholdInDays = $value;
    }

    /**
     * Sets the partnerUnsupportedOsVersionBlocked property value. Get or set whether to block devices on the enabled platforms that do not meet the minimum version requirements of the Data Sync Partner
     *  @param bool|null $value Value to set for the partnerUnsupportedOsVersionBlocked property.
    */
    public function setPartnerUnsupportedOsVersionBlocked(?bool $value ): void {
        $this->partnerUnsupportedOsVersionBlocked = $value;
    }

    /**
     * Sets the windowsDeviceBlockedOnMissingPartnerData property value. For Windows, set whether Intune must receive data from the data sync partner prior to marking a device compliant
     *  @param bool|null $value Value to set for the windowsDeviceBlockedOnMissingPartnerData property.
    */
    public function setWindowsDeviceBlockedOnMissingPartnerData(?bool $value ): void {
        $this->windowsDeviceBlockedOnMissingPartnerData = $value;
    }

    /**
     * Sets the windowsEnabled property value. For Windows, get or set whether data from the data sync partner should be used during compliance evaluations
     *  @param bool|null $value Value to set for the windowsEnabled property.
    */
    public function setWindowsEnabled(?bool $value ): void {
        $this->windowsEnabled = $value;
    }

}
