<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Entity which represents a connection to Mobile Threat Defense partner.
*/
class MobileThreatDefenseConnector extends Entity implements Parsable 
{
    /**
     * Instantiates a new mobileThreatDefenseConnector and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * Gets the allowPartnerToCollectIOSApplicationMetadata property value. When TRUE, indicates the Mobile Threat Defense partner may collect metadata about installed applications from Intune for IOS devices. When FALSE, indicates the Mobile Threat Defense partner may not collect metadata about installed applications from Intune for IOS devices. Default value is FALSE.
     * @return bool|null
    */
    public function getAllowPartnerToCollectIOSApplicationMetadata(): ?bool {
        return $this->getBackingStore()->get('allowPartnerToCollectIOSApplicationMetadata');
    }

    /**
     * Gets the allowPartnerToCollectIOSPersonalApplicationMetadata property value. When TRUE, indicates the Mobile Threat Defense partner may collect metadata about personally installed applications from Intune for IOS devices. When FALSE, indicates the Mobile Threat Defense partner may not collect metadata about personally installed applications from Intune for IOS devices. Default value is FALSE.
     * @return bool|null
    */
    public function getAllowPartnerToCollectIOSPersonalApplicationMetadata(): ?bool {
        return $this->getBackingStore()->get('allowPartnerToCollectIOSPersonalApplicationMetadata');
    }

    /**
     * Gets the androidDeviceBlockedOnMissingPartnerData property value. For Android, set whether Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant
     * @return bool|null
    */
    public function getAndroidDeviceBlockedOnMissingPartnerData(): ?bool {
        return $this->getBackingStore()->get('androidDeviceBlockedOnMissingPartnerData');
    }

    /**
     * Gets the androidEnabled property value. For Android, set whether data from the Mobile Threat Defense partner should be used during compliance evaluations
     * @return bool|null
    */
    public function getAndroidEnabled(): ?bool {
        return $this->getBackingStore()->get('androidEnabled');
    }

    /**
     * Gets the androidMobileApplicationManagementEnabled property value. When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for Android devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for Android devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE.
     * @return bool|null
    */
    public function getAndroidMobileApplicationManagementEnabled(): ?bool {
        return $this->getBackingStore()->get('androidMobileApplicationManagementEnabled');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowPartnerToCollectIOSApplicationMetadata' => fn(ParseNode $n) => $o->setAllowPartnerToCollectIOSApplicationMetadata($n->getBooleanValue()),
            'allowPartnerToCollectIOSPersonalApplicationMetadata' => fn(ParseNode $n) => $o->setAllowPartnerToCollectIOSPersonalApplicationMetadata($n->getBooleanValue()),
            'androidDeviceBlockedOnMissingPartnerData' => fn(ParseNode $n) => $o->setAndroidDeviceBlockedOnMissingPartnerData($n->getBooleanValue()),
            'androidEnabled' => fn(ParseNode $n) => $o->setAndroidEnabled($n->getBooleanValue()),
            'androidMobileApplicationManagementEnabled' => fn(ParseNode $n) => $o->setAndroidMobileApplicationManagementEnabled($n->getBooleanValue()),
            'iosDeviceBlockedOnMissingPartnerData' => fn(ParseNode $n) => $o->setIosDeviceBlockedOnMissingPartnerData($n->getBooleanValue()),
            'iosEnabled' => fn(ParseNode $n) => $o->setIosEnabled($n->getBooleanValue()),
            'iosMobileApplicationManagementEnabled' => fn(ParseNode $n) => $o->setIosMobileApplicationManagementEnabled($n->getBooleanValue()),
            'lastHeartbeatDateTime' => fn(ParseNode $n) => $o->setLastHeartbeatDateTime($n->getDateTimeValue()),
            'macDeviceBlockedOnMissingPartnerData' => fn(ParseNode $n) => $o->setMacDeviceBlockedOnMissingPartnerData($n->getBooleanValue()),
            'macEnabled' => fn(ParseNode $n) => $o->setMacEnabled($n->getBooleanValue()),
            'microsoftDefenderForEndpointAttachEnabled' => fn(ParseNode $n) => $o->setMicrosoftDefenderForEndpointAttachEnabled($n->getBooleanValue()),
            'partnerState' => fn(ParseNode $n) => $o->setPartnerState($n->getEnumValue(MobileThreatPartnerTenantState::class)),
            'partnerUnresponsivenessThresholdInDays' => fn(ParseNode $n) => $o->setPartnerUnresponsivenessThresholdInDays($n->getIntegerValue()),
            'partnerUnsupportedOsVersionBlocked' => fn(ParseNode $n) => $o->setPartnerUnsupportedOsVersionBlocked($n->getBooleanValue()),
            'windowsDeviceBlockedOnMissingPartnerData' => fn(ParseNode $n) => $o->setWindowsDeviceBlockedOnMissingPartnerData($n->getBooleanValue()),
            'windowsEnabled' => fn(ParseNode $n) => $o->setWindowsEnabled($n->getBooleanValue()),
            'windowsMobileApplicationManagementEnabled' => fn(ParseNode $n) => $o->setWindowsMobileApplicationManagementEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the iosDeviceBlockedOnMissingPartnerData property value. For IOS, set whether Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant
     * @return bool|null
    */
    public function getIosDeviceBlockedOnMissingPartnerData(): ?bool {
        return $this->getBackingStore()->get('iosDeviceBlockedOnMissingPartnerData');
    }

    /**
     * Gets the iosEnabled property value. For IOS, get or set whether data from the Mobile Threat Defense partner should be used during compliance evaluations
     * @return bool|null
    */
    public function getIosEnabled(): ?bool {
        return $this->getBackingStore()->get('iosEnabled');
    }

    /**
     * Gets the iosMobileApplicationManagementEnabled property value. When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for IOS devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for IOS devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE.
     * @return bool|null
    */
    public function getIosMobileApplicationManagementEnabled(): ?bool {
        return $this->getBackingStore()->get('iosMobileApplicationManagementEnabled');
    }

    /**
     * Gets the lastHeartbeatDateTime property value. DateTime of last Heartbeat recieved from the Mobile Threat Defense partner
     * @return DateTime|null
    */
    public function getLastHeartbeatDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastHeartbeatDateTime');
    }

    /**
     * Gets the macDeviceBlockedOnMissingPartnerData property value. For Mac, get or set whether Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant
     * @return bool|null
    */
    public function getMacDeviceBlockedOnMissingPartnerData(): ?bool {
        return $this->getBackingStore()->get('macDeviceBlockedOnMissingPartnerData');
    }

    /**
     * Gets the macEnabled property value. For Mac, get or set whether data from the Mobile Threat Defense partner should be used during compliance evaluations
     * @return bool|null
    */
    public function getMacEnabled(): ?bool {
        return $this->getBackingStore()->get('macEnabled');
    }

    /**
     * Gets the microsoftDefenderForEndpointAttachEnabled property value. When TRUE, inidicates that configuration profile management via Microsoft Defender for Endpoint is enabled. When FALSE, inidicates that configuration profile management via Microsoft Defender for Endpoint is disabled. Default value is FALSE.
     * @return bool|null
    */
    public function getMicrosoftDefenderForEndpointAttachEnabled(): ?bool {
        return $this->getBackingStore()->get('microsoftDefenderForEndpointAttachEnabled');
    }

    /**
     * Gets the partnerState property value. Partner state of this tenant.
     * @return MobileThreatPartnerTenantState|null
    */
    public function getPartnerState(): ?MobileThreatPartnerTenantState {
        return $this->getBackingStore()->get('partnerState');
    }

    /**
     * Gets the partnerUnresponsivenessThresholdInDays property value. Get or Set days the per tenant tolerance to unresponsiveness for this partner integration
     * @return int|null
    */
    public function getPartnerUnresponsivenessThresholdInDays(): ?int {
        return $this->getBackingStore()->get('partnerUnresponsivenessThresholdInDays');
    }

    /**
     * Gets the partnerUnsupportedOsVersionBlocked property value. Get or set whether to block devices on the enabled platforms that do not meet the minimum version requirements of the Mobile Threat Defense partner
     * @return bool|null
    */
    public function getPartnerUnsupportedOsVersionBlocked(): ?bool {
        return $this->getBackingStore()->get('partnerUnsupportedOsVersionBlocked');
    }

    /**
     * Gets the windowsDeviceBlockedOnMissingPartnerData property value. When TRUE, inidicates that Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant for Windows. When FALSE, inidicates that Intune may make a device compliant without receiving data from the Mobile Threat Defense partner for Windows. Default value is FALSE.
     * @return bool|null
    */
    public function getWindowsDeviceBlockedOnMissingPartnerData(): ?bool {
        return $this->getBackingStore()->get('windowsDeviceBlockedOnMissingPartnerData');
    }

    /**
     * Gets the windowsEnabled property value. When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during compliance evaluations for Windows. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during compliance evaluations for Windows. Default value is FALSE.
     * @return bool|null
    */
    public function getWindowsEnabled(): ?bool {
        return $this->getBackingStore()->get('windowsEnabled');
    }

    /**
     * Gets the windowsMobileApplicationManagementEnabled property value. When TRUE, app protection policies using the Device Threat Level rule will evaluate devices including data from this connector for Windows. When FALSE, Intune will not use device risk details sent over this connector during app protection policies calculation for policies with a Device Threat Level configured. Existing devices that are not compliant due to risk levels obtained from this connector will also become compliant.
     * @return bool|null
    */
    public function getWindowsMobileApplicationManagementEnabled(): ?bool {
        return $this->getBackingStore()->get('windowsMobileApplicationManagementEnabled');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowPartnerToCollectIOSApplicationMetadata', $this->getAllowPartnerToCollectIOSApplicationMetadata());
        $writer->writeBooleanValue('allowPartnerToCollectIOSPersonalApplicationMetadata', $this->getAllowPartnerToCollectIOSPersonalApplicationMetadata());
        $writer->writeBooleanValue('androidDeviceBlockedOnMissingPartnerData', $this->getAndroidDeviceBlockedOnMissingPartnerData());
        $writer->writeBooleanValue('androidEnabled', $this->getAndroidEnabled());
        $writer->writeBooleanValue('androidMobileApplicationManagementEnabled', $this->getAndroidMobileApplicationManagementEnabled());
        $writer->writeBooleanValue('iosDeviceBlockedOnMissingPartnerData', $this->getIosDeviceBlockedOnMissingPartnerData());
        $writer->writeBooleanValue('iosEnabled', $this->getIosEnabled());
        $writer->writeBooleanValue('iosMobileApplicationManagementEnabled', $this->getIosMobileApplicationManagementEnabled());
        $writer->writeDateTimeValue('lastHeartbeatDateTime', $this->getLastHeartbeatDateTime());
        $writer->writeBooleanValue('macDeviceBlockedOnMissingPartnerData', $this->getMacDeviceBlockedOnMissingPartnerData());
        $writer->writeBooleanValue('macEnabled', $this->getMacEnabled());
        $writer->writeBooleanValue('microsoftDefenderForEndpointAttachEnabled', $this->getMicrosoftDefenderForEndpointAttachEnabled());
        $writer->writeEnumValue('partnerState', $this->getPartnerState());
        $writer->writeIntegerValue('partnerUnresponsivenessThresholdInDays', $this->getPartnerUnresponsivenessThresholdInDays());
        $writer->writeBooleanValue('partnerUnsupportedOsVersionBlocked', $this->getPartnerUnsupportedOsVersionBlocked());
        $writer->writeBooleanValue('windowsDeviceBlockedOnMissingPartnerData', $this->getWindowsDeviceBlockedOnMissingPartnerData());
        $writer->writeBooleanValue('windowsEnabled', $this->getWindowsEnabled());
        $writer->writeBooleanValue('windowsMobileApplicationManagementEnabled', $this->getWindowsMobileApplicationManagementEnabled());
    }

    /**
     * Sets the allowPartnerToCollectIOSApplicationMetadata property value. When TRUE, indicates the Mobile Threat Defense partner may collect metadata about installed applications from Intune for IOS devices. When FALSE, indicates the Mobile Threat Defense partner may not collect metadata about installed applications from Intune for IOS devices. Default value is FALSE.
     * @param bool|null $value Value to set for the allowPartnerToCollectIOSApplicationMetadata property.
    */
    public function setAllowPartnerToCollectIOSApplicationMetadata(?bool $value): void {
        $this->getBackingStore()->set('allowPartnerToCollectIOSApplicationMetadata', $value);
    }

    /**
     * Sets the allowPartnerToCollectIOSPersonalApplicationMetadata property value. When TRUE, indicates the Mobile Threat Defense partner may collect metadata about personally installed applications from Intune for IOS devices. When FALSE, indicates the Mobile Threat Defense partner may not collect metadata about personally installed applications from Intune for IOS devices. Default value is FALSE.
     * @param bool|null $value Value to set for the allowPartnerToCollectIOSPersonalApplicationMetadata property.
    */
    public function setAllowPartnerToCollectIOSPersonalApplicationMetadata(?bool $value): void {
        $this->getBackingStore()->set('allowPartnerToCollectIOSPersonalApplicationMetadata', $value);
    }

    /**
     * Sets the androidDeviceBlockedOnMissingPartnerData property value. For Android, set whether Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant
     * @param bool|null $value Value to set for the androidDeviceBlockedOnMissingPartnerData property.
    */
    public function setAndroidDeviceBlockedOnMissingPartnerData(?bool $value): void {
        $this->getBackingStore()->set('androidDeviceBlockedOnMissingPartnerData', $value);
    }

    /**
     * Sets the androidEnabled property value. For Android, set whether data from the Mobile Threat Defense partner should be used during compliance evaluations
     * @param bool|null $value Value to set for the androidEnabled property.
    */
    public function setAndroidEnabled(?bool $value): void {
        $this->getBackingStore()->set('androidEnabled', $value);
    }

    /**
     * Sets the androidMobileApplicationManagementEnabled property value. When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for Android devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for Android devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE.
     * @param bool|null $value Value to set for the androidMobileApplicationManagementEnabled property.
    */
    public function setAndroidMobileApplicationManagementEnabled(?bool $value): void {
        $this->getBackingStore()->set('androidMobileApplicationManagementEnabled', $value);
    }

    /**
     * Sets the iosDeviceBlockedOnMissingPartnerData property value. For IOS, set whether Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant
     * @param bool|null $value Value to set for the iosDeviceBlockedOnMissingPartnerData property.
    */
    public function setIosDeviceBlockedOnMissingPartnerData(?bool $value): void {
        $this->getBackingStore()->set('iosDeviceBlockedOnMissingPartnerData', $value);
    }

    /**
     * Sets the iosEnabled property value. For IOS, get or set whether data from the Mobile Threat Defense partner should be used during compliance evaluations
     * @param bool|null $value Value to set for the iosEnabled property.
    */
    public function setIosEnabled(?bool $value): void {
        $this->getBackingStore()->set('iosEnabled', $value);
    }

    /**
     * Sets the iosMobileApplicationManagementEnabled property value. When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for IOS devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for IOS devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE.
     * @param bool|null $value Value to set for the iosMobileApplicationManagementEnabled property.
    */
    public function setIosMobileApplicationManagementEnabled(?bool $value): void {
        $this->getBackingStore()->set('iosMobileApplicationManagementEnabled', $value);
    }

    /**
     * Sets the lastHeartbeatDateTime property value. DateTime of last Heartbeat recieved from the Mobile Threat Defense partner
     * @param DateTime|null $value Value to set for the lastHeartbeatDateTime property.
    */
    public function setLastHeartbeatDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastHeartbeatDateTime', $value);
    }

    /**
     * Sets the macDeviceBlockedOnMissingPartnerData property value. For Mac, get or set whether Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant
     * @param bool|null $value Value to set for the macDeviceBlockedOnMissingPartnerData property.
    */
    public function setMacDeviceBlockedOnMissingPartnerData(?bool $value): void {
        $this->getBackingStore()->set('macDeviceBlockedOnMissingPartnerData', $value);
    }

    /**
     * Sets the macEnabled property value. For Mac, get or set whether data from the Mobile Threat Defense partner should be used during compliance evaluations
     * @param bool|null $value Value to set for the macEnabled property.
    */
    public function setMacEnabled(?bool $value): void {
        $this->getBackingStore()->set('macEnabled', $value);
    }

    /**
     * Sets the microsoftDefenderForEndpointAttachEnabled property value. When TRUE, inidicates that configuration profile management via Microsoft Defender for Endpoint is enabled. When FALSE, inidicates that configuration profile management via Microsoft Defender for Endpoint is disabled. Default value is FALSE.
     * @param bool|null $value Value to set for the microsoftDefenderForEndpointAttachEnabled property.
    */
    public function setMicrosoftDefenderForEndpointAttachEnabled(?bool $value): void {
        $this->getBackingStore()->set('microsoftDefenderForEndpointAttachEnabled', $value);
    }

    /**
     * Sets the partnerState property value. Partner state of this tenant.
     * @param MobileThreatPartnerTenantState|null $value Value to set for the partnerState property.
    */
    public function setPartnerState(?MobileThreatPartnerTenantState $value): void {
        $this->getBackingStore()->set('partnerState', $value);
    }

    /**
     * Sets the partnerUnresponsivenessThresholdInDays property value. Get or Set days the per tenant tolerance to unresponsiveness for this partner integration
     * @param int|null $value Value to set for the partnerUnresponsivenessThresholdInDays property.
    */
    public function setPartnerUnresponsivenessThresholdInDays(?int $value): void {
        $this->getBackingStore()->set('partnerUnresponsivenessThresholdInDays', $value);
    }

    /**
     * Sets the partnerUnsupportedOsVersionBlocked property value. Get or set whether to block devices on the enabled platforms that do not meet the minimum version requirements of the Mobile Threat Defense partner
     * @param bool|null $value Value to set for the partnerUnsupportedOsVersionBlocked property.
    */
    public function setPartnerUnsupportedOsVersionBlocked(?bool $value): void {
        $this->getBackingStore()->set('partnerUnsupportedOsVersionBlocked', $value);
    }

    /**
     * Sets the windowsDeviceBlockedOnMissingPartnerData property value. When TRUE, inidicates that Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant for Windows. When FALSE, inidicates that Intune may make a device compliant without receiving data from the Mobile Threat Defense partner for Windows. Default value is FALSE.
     * @param bool|null $value Value to set for the windowsDeviceBlockedOnMissingPartnerData property.
    */
    public function setWindowsDeviceBlockedOnMissingPartnerData(?bool $value): void {
        $this->getBackingStore()->set('windowsDeviceBlockedOnMissingPartnerData', $value);
    }

    /**
     * Sets the windowsEnabled property value. When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during compliance evaluations for Windows. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during compliance evaluations for Windows. Default value is FALSE.
     * @param bool|null $value Value to set for the windowsEnabled property.
    */
    public function setWindowsEnabled(?bool $value): void {
        $this->getBackingStore()->set('windowsEnabled', $value);
    }

    /**
     * Sets the windowsMobileApplicationManagementEnabled property value. When TRUE, app protection policies using the Device Threat Level rule will evaluate devices including data from this connector for Windows. When FALSE, Intune will not use device risk details sent over this connector during app protection policies calculation for policies with a Device Threat Level configured. Existing devices that are not compliant due to risk levels obtained from this connector will also become compliant.
     * @param bool|null $value Value to set for the windowsMobileApplicationManagementEnabled property.
    */
    public function setWindowsMobileApplicationManagementEnabled(?bool $value): void {
        $this->getBackingStore()->set('windowsMobileApplicationManagementEnabled', $value);
    }

}
