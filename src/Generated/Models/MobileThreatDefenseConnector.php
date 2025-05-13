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
     * Instantiates a new MobileThreatDefenseConnector and sets the default values.
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
     * Gets the allowPartnerToCollectIOSApplicationMetadata property value. When TRUE, indicates the Mobile Threat Defense partner may collect metadata about installed applications from Intune for iOS devices. When FALSE, indicates the Mobile Threat Defense partner may not collect metadata about installed applications from Intune for iOS devices. Default value is FALSE.
     * @return bool|null
    */
    public function getAllowPartnerToCollectIOSApplicationMetadata(): ?bool {
        $val = $this->getBackingStore()->get('allowPartnerToCollectIOSApplicationMetadata');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowPartnerToCollectIOSApplicationMetadata'");
    }

    /**
     * Gets the allowPartnerToCollectIosCertificateMetadata property value. When TRUE, allows the Mobile Threat Defense partner to request a list of installed certificates on iOS/iPadOS devices from Intune to use for threat analysis. This list of installed certificates will be sent from enrolled iOS/iPadOS devices and will include unmanaged certificates (certificates not deployed through Intune). When FALSE, indicates that metadata about installed certificates will not be collected. Default value is FALSE.
     * @return bool|null
    */
    public function getAllowPartnerToCollectIosCertificateMetadata(): ?bool {
        $val = $this->getBackingStore()->get('allowPartnerToCollectIosCertificateMetadata');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowPartnerToCollectIosCertificateMetadata'");
    }

    /**
     * Gets the allowPartnerToCollectIOSPersonalApplicationMetadata property value. When TRUE, indicates the Mobile Threat Defense partner may collect metadata about personally installed applications from Intune for iOS devices. When FALSE, indicates the Mobile Threat Defense partner may not collect metadata about personally installed applications from Intune for iOS devices. Default value is FALSE.
     * @return bool|null
    */
    public function getAllowPartnerToCollectIOSPersonalApplicationMetadata(): ?bool {
        $val = $this->getBackingStore()->get('allowPartnerToCollectIOSPersonalApplicationMetadata');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowPartnerToCollectIOSPersonalApplicationMetadata'");
    }

    /**
     * Gets the allowPartnerToCollectIosPersonalCertificateMetadata property value. When TRUE, allows the Mobile Threat Defense partner to request a list of installed certificates on personally owned iOS/iPadOS devices from Intune to use for threat analysis. This list of installed certificates will be sent from enrolled personally owned iOS/iPadOS devices and will include unmanaged certificates (certificates not deployed through Intune). When FALSE, no metadata for installed certificates is sent for personally owned iOS/iPadOS devices. Default value is FALSE.
     * @return bool|null
    */
    public function getAllowPartnerToCollectIosPersonalCertificateMetadata(): ?bool {
        $val = $this->getBackingStore()->get('allowPartnerToCollectIosPersonalCertificateMetadata');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowPartnerToCollectIosPersonalCertificateMetadata'");
    }

    /**
     * Gets the androidDeviceBlockedOnMissingPartnerData property value. When TRUE, indicates that Intune must receive data from the Mobile Threat Defense partner prior to marking an Android device compliant. When FALSE, indicates that Intune may mark an Android device compliant before receiving data from the Mobile Threat Defense partner.
     * @return bool|null
    */
    public function getAndroidDeviceBlockedOnMissingPartnerData(): ?bool {
        $val = $this->getBackingStore()->get('androidDeviceBlockedOnMissingPartnerData');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidDeviceBlockedOnMissingPartnerData'");
    }

    /**
     * Gets the androidEnabled property value. When TRUE, indicates that data from the Mobile Threat Defense partner will be used during compliance evaluations for Android devices. When FALSE, indicates that data from the Mobile Threat Defense partner will not be used during compliance evaluations for Android devices. Default value is FALSE.
     * @return bool|null
    */
    public function getAndroidEnabled(): ?bool {
        $val = $this->getBackingStore()->get('androidEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidEnabled'");
    }

    /**
     * Gets the androidMobileApplicationManagementEnabled property value. When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for Android devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for Android devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE.
     * @return bool|null
    */
    public function getAndroidMobileApplicationManagementEnabled(): ?bool {
        $val = $this->getBackingStore()->get('androidMobileApplicationManagementEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidMobileApplicationManagementEnabled'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowPartnerToCollectIOSApplicationMetadata' => fn(ParseNode $n) => $o->setAllowPartnerToCollectIOSApplicationMetadata($n->getBooleanValue()),
            'allowPartnerToCollectIosCertificateMetadata' => fn(ParseNode $n) => $o->setAllowPartnerToCollectIosCertificateMetadata($n->getBooleanValue()),
            'allowPartnerToCollectIOSPersonalApplicationMetadata' => fn(ParseNode $n) => $o->setAllowPartnerToCollectIOSPersonalApplicationMetadata($n->getBooleanValue()),
            'allowPartnerToCollectIosPersonalCertificateMetadata' => fn(ParseNode $n) => $o->setAllowPartnerToCollectIosPersonalCertificateMetadata($n->getBooleanValue()),
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
     * Gets the iosDeviceBlockedOnMissingPartnerData property value. When TRUE, indicates that Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant. When FALSE, indicates that Intune may not recieve data from Mobile Threat Defense partner prior to making device compliant. Default value is FALSE.
     * @return bool|null
    */
    public function getIosDeviceBlockedOnMissingPartnerData(): ?bool {
        $val = $this->getBackingStore()->get('iosDeviceBlockedOnMissingPartnerData');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iosDeviceBlockedOnMissingPartnerData'");
    }

    /**
     * Gets the iosEnabled property value. When TRUE, indicates that data from the Mobile Threat Defense partner will be used during compliance evaluations for iOS devices. When FALSE, indicates that data from the Mobile Threat Defense partner will not be used during compliance evaluations for iOS devices. Default value is FALSE.
     * @return bool|null
    */
    public function getIosEnabled(): ?bool {
        $val = $this->getBackingStore()->get('iosEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iosEnabled'");
    }

    /**
     * Gets the iosMobileApplicationManagementEnabled property value. When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for iOS devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for iOS devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE.
     * @return bool|null
    */
    public function getIosMobileApplicationManagementEnabled(): ?bool {
        $val = $this->getBackingStore()->get('iosMobileApplicationManagementEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iosMobileApplicationManagementEnabled'");
    }

    /**
     * Gets the lastHeartbeatDateTime property value. DateTime of last Heartbeat recieved from the Mobile Threat Defense partner
     * @return DateTime|null
    */
    public function getLastHeartbeatDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastHeartbeatDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastHeartbeatDateTime'");
    }

    /**
     * Gets the macDeviceBlockedOnMissingPartnerData property value. When TRUE, indicates that Intune must receive data from the Mobile Threat Defense partner prior to marking a Mac device compliant. When FALSE, indicates that Intune may mark a Mac device compliant prior to receiving data from the Mobile Threat Defense partner. Default value is FALSE.
     * @return bool|null
    */
    public function getMacDeviceBlockedOnMissingPartnerData(): ?bool {
        $val = $this->getBackingStore()->get('macDeviceBlockedOnMissingPartnerData');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'macDeviceBlockedOnMissingPartnerData'");
    }

    /**
     * Gets the macEnabled property value. When TRUE, indicates that data from the Mobile Threat Defense partner will be used during compliance evaluations for Mac devices. When FALSE, indicates that data from the Mobile Threat Defense partner will not be used during compliance evaluations for Mac devices. Default value is FALSE.
     * @return bool|null
    */
    public function getMacEnabled(): ?bool {
        $val = $this->getBackingStore()->get('macEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'macEnabled'");
    }

    /**
     * Gets the microsoftDefenderForEndpointAttachEnabled property value. When TRUE, inidicates that configuration profile management via Microsoft Defender for Endpoint is enabled. When FALSE, inidicates that configuration profile management via Microsoft Defender for Endpoint is disabled. Default value is FALSE.
     * @return bool|null
    */
    public function getMicrosoftDefenderForEndpointAttachEnabled(): ?bool {
        $val = $this->getBackingStore()->get('microsoftDefenderForEndpointAttachEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoftDefenderForEndpointAttachEnabled'");
    }

    /**
     * Gets the partnerState property value. Partner state of this tenant.
     * @return MobileThreatPartnerTenantState|null
    */
    public function getPartnerState(): ?MobileThreatPartnerTenantState {
        $val = $this->getBackingStore()->get('partnerState');
        if (is_null($val) || $val instanceof MobileThreatPartnerTenantState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'partnerState'");
    }

    /**
     * Gets the partnerUnresponsivenessThresholdInDays property value. Indicates the number of days without receiving a heartbeat from a Mobile Threat Defense partner before the partner is marked as unresponsive. Intune will the ignore the data from this Mobile Threat Defense Partner for next compliance calculation.
     * @return int|null
    */
    public function getPartnerUnresponsivenessThresholdInDays(): ?int {
        $val = $this->getBackingStore()->get('partnerUnresponsivenessThresholdInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'partnerUnresponsivenessThresholdInDays'");
    }

    /**
     * Gets the partnerUnsupportedOsVersionBlocked property value. When TRUE, indicates that Intune will mark devices noncompliant on enabled platforms that do not meet the minimum version requirements of the Mobile Threat Defense partner. When FALSE, indicates that Intune will not mark devices noncompliant on enabled platforms that do not meet the minimum version requirements of the Mobile Threat Defense partner. Default value is FALSE.
     * @return bool|null
    */
    public function getPartnerUnsupportedOsVersionBlocked(): ?bool {
        $val = $this->getBackingStore()->get('partnerUnsupportedOsVersionBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'partnerUnsupportedOsVersionBlocked'");
    }

    /**
     * Gets the windowsDeviceBlockedOnMissingPartnerData property value. When TRUE, indicates that Intune must receive data from the data sync partner prior to marking a device compliant for Windows. When FALSE, indicates that Intune may mark a device compliant without receiving data from the data sync partner for Windows. Default value is FALSE.
     * @return bool|null
    */
    public function getWindowsDeviceBlockedOnMissingPartnerData(): ?bool {
        $val = $this->getBackingStore()->get('windowsDeviceBlockedOnMissingPartnerData');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsDeviceBlockedOnMissingPartnerData'");
    }

    /**
     * Gets the windowsEnabled property value. When TRUE, indicates that data from the Mobile Threat Defense partner will be used during compliance evaluations for Windows. When FALSE, indicates that data from the Mobile Threat Defense partner will not be used during compliance evaluations for Windows. Default value is FALSE.
     * @return bool|null
    */
    public function getWindowsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('windowsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsEnabled'");
    }

    /**
     * Gets the windowsMobileApplicationManagementEnabled property value. When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for iOS devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for iOS devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE.
     * @return bool|null
    */
    public function getWindowsMobileApplicationManagementEnabled(): ?bool {
        $val = $this->getBackingStore()->get('windowsMobileApplicationManagementEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsMobileApplicationManagementEnabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowPartnerToCollectIOSApplicationMetadata', $this->getAllowPartnerToCollectIOSApplicationMetadata());
        $writer->writeBooleanValue('allowPartnerToCollectIosCertificateMetadata', $this->getAllowPartnerToCollectIosCertificateMetadata());
        $writer->writeBooleanValue('allowPartnerToCollectIOSPersonalApplicationMetadata', $this->getAllowPartnerToCollectIOSPersonalApplicationMetadata());
        $writer->writeBooleanValue('allowPartnerToCollectIosPersonalCertificateMetadata', $this->getAllowPartnerToCollectIosPersonalCertificateMetadata());
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
     * Sets the allowPartnerToCollectIOSApplicationMetadata property value. When TRUE, indicates the Mobile Threat Defense partner may collect metadata about installed applications from Intune for iOS devices. When FALSE, indicates the Mobile Threat Defense partner may not collect metadata about installed applications from Intune for iOS devices. Default value is FALSE.
     * @param bool|null $value Value to set for the allowPartnerToCollectIOSApplicationMetadata property.
    */
    public function setAllowPartnerToCollectIOSApplicationMetadata(?bool $value): void {
        $this->getBackingStore()->set('allowPartnerToCollectIOSApplicationMetadata', $value);
    }

    /**
     * Sets the allowPartnerToCollectIosCertificateMetadata property value. When TRUE, allows the Mobile Threat Defense partner to request a list of installed certificates on iOS/iPadOS devices from Intune to use for threat analysis. This list of installed certificates will be sent from enrolled iOS/iPadOS devices and will include unmanaged certificates (certificates not deployed through Intune). When FALSE, indicates that metadata about installed certificates will not be collected. Default value is FALSE.
     * @param bool|null $value Value to set for the allowPartnerToCollectIosCertificateMetadata property.
    */
    public function setAllowPartnerToCollectIosCertificateMetadata(?bool $value): void {
        $this->getBackingStore()->set('allowPartnerToCollectIosCertificateMetadata', $value);
    }

    /**
     * Sets the allowPartnerToCollectIOSPersonalApplicationMetadata property value. When TRUE, indicates the Mobile Threat Defense partner may collect metadata about personally installed applications from Intune for iOS devices. When FALSE, indicates the Mobile Threat Defense partner may not collect metadata about personally installed applications from Intune for iOS devices. Default value is FALSE.
     * @param bool|null $value Value to set for the allowPartnerToCollectIOSPersonalApplicationMetadata property.
    */
    public function setAllowPartnerToCollectIOSPersonalApplicationMetadata(?bool $value): void {
        $this->getBackingStore()->set('allowPartnerToCollectIOSPersonalApplicationMetadata', $value);
    }

    /**
     * Sets the allowPartnerToCollectIosPersonalCertificateMetadata property value. When TRUE, allows the Mobile Threat Defense partner to request a list of installed certificates on personally owned iOS/iPadOS devices from Intune to use for threat analysis. This list of installed certificates will be sent from enrolled personally owned iOS/iPadOS devices and will include unmanaged certificates (certificates not deployed through Intune). When FALSE, no metadata for installed certificates is sent for personally owned iOS/iPadOS devices. Default value is FALSE.
     * @param bool|null $value Value to set for the allowPartnerToCollectIosPersonalCertificateMetadata property.
    */
    public function setAllowPartnerToCollectIosPersonalCertificateMetadata(?bool $value): void {
        $this->getBackingStore()->set('allowPartnerToCollectIosPersonalCertificateMetadata', $value);
    }

    /**
     * Sets the androidDeviceBlockedOnMissingPartnerData property value. When TRUE, indicates that Intune must receive data from the Mobile Threat Defense partner prior to marking an Android device compliant. When FALSE, indicates that Intune may mark an Android device compliant before receiving data from the Mobile Threat Defense partner.
     * @param bool|null $value Value to set for the androidDeviceBlockedOnMissingPartnerData property.
    */
    public function setAndroidDeviceBlockedOnMissingPartnerData(?bool $value): void {
        $this->getBackingStore()->set('androidDeviceBlockedOnMissingPartnerData', $value);
    }

    /**
     * Sets the androidEnabled property value. When TRUE, indicates that data from the Mobile Threat Defense partner will be used during compliance evaluations for Android devices. When FALSE, indicates that data from the Mobile Threat Defense partner will not be used during compliance evaluations for Android devices. Default value is FALSE.
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
     * Sets the iosDeviceBlockedOnMissingPartnerData property value. When TRUE, indicates that Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant. When FALSE, indicates that Intune may not recieve data from Mobile Threat Defense partner prior to making device compliant. Default value is FALSE.
     * @param bool|null $value Value to set for the iosDeviceBlockedOnMissingPartnerData property.
    */
    public function setIosDeviceBlockedOnMissingPartnerData(?bool $value): void {
        $this->getBackingStore()->set('iosDeviceBlockedOnMissingPartnerData', $value);
    }

    /**
     * Sets the iosEnabled property value. When TRUE, indicates that data from the Mobile Threat Defense partner will be used during compliance evaluations for iOS devices. When FALSE, indicates that data from the Mobile Threat Defense partner will not be used during compliance evaluations for iOS devices. Default value is FALSE.
     * @param bool|null $value Value to set for the iosEnabled property.
    */
    public function setIosEnabled(?bool $value): void {
        $this->getBackingStore()->set('iosEnabled', $value);
    }

    /**
     * Sets the iosMobileApplicationManagementEnabled property value. When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for iOS devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for iOS devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE.
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
     * Sets the macDeviceBlockedOnMissingPartnerData property value. When TRUE, indicates that Intune must receive data from the Mobile Threat Defense partner prior to marking a Mac device compliant. When FALSE, indicates that Intune may mark a Mac device compliant prior to receiving data from the Mobile Threat Defense partner. Default value is FALSE.
     * @param bool|null $value Value to set for the macDeviceBlockedOnMissingPartnerData property.
    */
    public function setMacDeviceBlockedOnMissingPartnerData(?bool $value): void {
        $this->getBackingStore()->set('macDeviceBlockedOnMissingPartnerData', $value);
    }

    /**
     * Sets the macEnabled property value. When TRUE, indicates that data from the Mobile Threat Defense partner will be used during compliance evaluations for Mac devices. When FALSE, indicates that data from the Mobile Threat Defense partner will not be used during compliance evaluations for Mac devices. Default value is FALSE.
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
     * Sets the partnerUnresponsivenessThresholdInDays property value. Indicates the number of days without receiving a heartbeat from a Mobile Threat Defense partner before the partner is marked as unresponsive. Intune will the ignore the data from this Mobile Threat Defense Partner for next compliance calculation.
     * @param int|null $value Value to set for the partnerUnresponsivenessThresholdInDays property.
    */
    public function setPartnerUnresponsivenessThresholdInDays(?int $value): void {
        $this->getBackingStore()->set('partnerUnresponsivenessThresholdInDays', $value);
    }

    /**
     * Sets the partnerUnsupportedOsVersionBlocked property value. When TRUE, indicates that Intune will mark devices noncompliant on enabled platforms that do not meet the minimum version requirements of the Mobile Threat Defense partner. When FALSE, indicates that Intune will not mark devices noncompliant on enabled platforms that do not meet the minimum version requirements of the Mobile Threat Defense partner. Default value is FALSE.
     * @param bool|null $value Value to set for the partnerUnsupportedOsVersionBlocked property.
    */
    public function setPartnerUnsupportedOsVersionBlocked(?bool $value): void {
        $this->getBackingStore()->set('partnerUnsupportedOsVersionBlocked', $value);
    }

    /**
     * Sets the windowsDeviceBlockedOnMissingPartnerData property value. When TRUE, indicates that Intune must receive data from the data sync partner prior to marking a device compliant for Windows. When FALSE, indicates that Intune may mark a device compliant without receiving data from the data sync partner for Windows. Default value is FALSE.
     * @param bool|null $value Value to set for the windowsDeviceBlockedOnMissingPartnerData property.
    */
    public function setWindowsDeviceBlockedOnMissingPartnerData(?bool $value): void {
        $this->getBackingStore()->set('windowsDeviceBlockedOnMissingPartnerData', $value);
    }

    /**
     * Sets the windowsEnabled property value. When TRUE, indicates that data from the Mobile Threat Defense partner will be used during compliance evaluations for Windows. When FALSE, indicates that data from the Mobile Threat Defense partner will not be used during compliance evaluations for Windows. Default value is FALSE.
     * @param bool|null $value Value to set for the windowsEnabled property.
    */
    public function setWindowsEnabled(?bool $value): void {
        $this->getBackingStore()->set('windowsEnabled', $value);
    }

    /**
     * Sets the windowsMobileApplicationManagementEnabled property value. When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for iOS devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for iOS devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE.
     * @param bool|null $value Value to set for the windowsMobileApplicationManagementEnabled property.
    */
    public function setWindowsMobileApplicationManagementEnabled(?bool $value): void {
        $this->getBackingStore()->set('windowsMobileApplicationManagementEnabled', $value);
    }

}
