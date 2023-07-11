<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Policy used to configure detailed management settings for a specified set of apps
*/
class ManagedAppProtection extends ManagedAppPolicy implements Parsable 
{
    /**
     * Instantiates a new managedAppProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedAppProtection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedAppProtection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedAppProtection {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.androidManagedAppProtection': return new AndroidManagedAppProtection();
                case '#microsoft.graph.defaultManagedAppProtection': return new DefaultManagedAppProtection();
                case '#microsoft.graph.iosManagedAppProtection': return new IosManagedAppProtection();
                case '#microsoft.graph.targetedManagedAppProtection': return new TargetedManagedAppProtection();
            }
        }
        return new ManagedAppProtection();
    }

    /**
     * Gets the allowedDataIngestionLocations property value. Data storage locations where a user may store managed data.
     * @return array<ManagedAppDataIngestionLocation>|null
    */
    public function getAllowedDataIngestionLocations(): ?array {
        $val = $this->getBackingStore()->get('allowedDataIngestionLocations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedAppDataIngestionLocation::class);
            /** @var array<ManagedAppDataIngestionLocation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedDataIngestionLocations'");
    }

    /**
     * Gets the allowedDataStorageLocations property value. Data storage locations where a user may store managed data.
     * @return array<ManagedAppDataStorageLocation>|null
    */
    public function getAllowedDataStorageLocations(): ?array {
        $val = $this->getBackingStore()->get('allowedDataStorageLocations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedAppDataStorageLocation::class);
            /** @var array<ManagedAppDataStorageLocation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedDataStorageLocations'");
    }

    /**
     * Gets the allowedInboundDataTransferSources property value. Data can be transferred from/to these classes of apps
     * @return ManagedAppDataTransferLevel|null
    */
    public function getAllowedInboundDataTransferSources(): ?ManagedAppDataTransferLevel {
        $val = $this->getBackingStore()->get('allowedInboundDataTransferSources');
        if (is_null($val) || $val instanceof ManagedAppDataTransferLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedInboundDataTransferSources'");
    }

    /**
     * Gets the allowedOutboundClipboardSharingExceptionLength property value. Specify the number of characters that may be cut or copied from Org data and accounts to any application. This setting overrides the AllowedOutboundClipboardSharingLevel restriction. Default value of '0' means no exception is allowed.
     * @return int|null
    */
    public function getAllowedOutboundClipboardSharingExceptionLength(): ?int {
        $val = $this->getBackingStore()->get('allowedOutboundClipboardSharingExceptionLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedOutboundClipboardSharingExceptionLength'");
    }

    /**
     * Gets the allowedOutboundClipboardSharingLevel property value. Represents the level to which the device's clipboard may be shared between apps
     * @return ManagedAppClipboardSharingLevel|null
    */
    public function getAllowedOutboundClipboardSharingLevel(): ?ManagedAppClipboardSharingLevel {
        $val = $this->getBackingStore()->get('allowedOutboundClipboardSharingLevel');
        if (is_null($val) || $val instanceof ManagedAppClipboardSharingLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedOutboundClipboardSharingLevel'");
    }

    /**
     * Gets the allowedOutboundDataTransferDestinations property value. Data can be transferred from/to these classes of apps
     * @return ManagedAppDataTransferLevel|null
    */
    public function getAllowedOutboundDataTransferDestinations(): ?ManagedAppDataTransferLevel {
        $val = $this->getBackingStore()->get('allowedOutboundDataTransferDestinations');
        if (is_null($val) || $val instanceof ManagedAppDataTransferLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedOutboundDataTransferDestinations'");
    }

    /**
     * Gets the appActionIfDeviceComplianceRequired property value. An admin initiated action to be applied on a managed app.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfDeviceComplianceRequired(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfDeviceComplianceRequired');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfDeviceComplianceRequired'");
    }

    /**
     * Gets the appActionIfMaximumPinRetriesExceeded property value. An admin initiated action to be applied on a managed app.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfMaximumPinRetriesExceeded(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfMaximumPinRetriesExceeded');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfMaximumPinRetriesExceeded'");
    }

    /**
     * Gets the appActionIfUnableToAuthenticateUser property value. If set, it will specify what action to take in the case where the user is unable to checkin because their authentication token is invalid. This happens when the user is deleted or disabled in AAD. Possible values are: block, wipe, warn.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfUnableToAuthenticateUser(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfUnableToAuthenticateUser');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfUnableToAuthenticateUser'");
    }

    /**
     * Gets the blockDataIngestionIntoOrganizationDocuments property value. Indicates whether a user can bring data into org documents.
     * @return bool|null
    */
    public function getBlockDataIngestionIntoOrganizationDocuments(): ?bool {
        $val = $this->getBackingStore()->get('blockDataIngestionIntoOrganizationDocuments');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockDataIngestionIntoOrganizationDocuments'");
    }

    /**
     * Gets the contactSyncBlocked property value. Indicates whether contacts can be synced to the user's device.
     * @return bool|null
    */
    public function getContactSyncBlocked(): ?bool {
        $val = $this->getBackingStore()->get('contactSyncBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contactSyncBlocked'");
    }

    /**
     * Gets the dataBackupBlocked property value. Indicates whether the backup of a managed app's data is blocked.
     * @return bool|null
    */
    public function getDataBackupBlocked(): ?bool {
        $val = $this->getBackingStore()->get('dataBackupBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataBackupBlocked'");
    }

    /**
     * Gets the deviceComplianceRequired property value. Indicates whether device compliance is required.
     * @return bool|null
    */
    public function getDeviceComplianceRequired(): ?bool {
        $val = $this->getBackingStore()->get('deviceComplianceRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceComplianceRequired'");
    }

    /**
     * Gets the dialerRestrictionLevel property value. The classes of apps that are allowed to click-to-open a phone number, for making phone calls or sending text messages.
     * @return ManagedAppPhoneNumberRedirectLevel|null
    */
    public function getDialerRestrictionLevel(): ?ManagedAppPhoneNumberRedirectLevel {
        $val = $this->getBackingStore()->get('dialerRestrictionLevel');
        if (is_null($val) || $val instanceof ManagedAppPhoneNumberRedirectLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dialerRestrictionLevel'");
    }

    /**
     * Gets the disableAppPinIfDevicePinIsSet property value. Indicates whether use of the app pin is required if the device pin is set.
     * @return bool|null
    */
    public function getDisableAppPinIfDevicePinIsSet(): ?bool {
        $val = $this->getBackingStore()->get('disableAppPinIfDevicePinIsSet');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disableAppPinIfDevicePinIsSet'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedDataIngestionLocations' => fn(ParseNode $n) => $o->setAllowedDataIngestionLocations($n->getCollectionOfEnumValues(ManagedAppDataIngestionLocation::class)),
            'allowedDataStorageLocations' => fn(ParseNode $n) => $o->setAllowedDataStorageLocations($n->getCollectionOfEnumValues(ManagedAppDataStorageLocation::class)),
            'allowedInboundDataTransferSources' => fn(ParseNode $n) => $o->setAllowedInboundDataTransferSources($n->getEnumValue(ManagedAppDataTransferLevel::class)),
            'allowedOutboundClipboardSharingExceptionLength' => fn(ParseNode $n) => $o->setAllowedOutboundClipboardSharingExceptionLength($n->getIntegerValue()),
            'allowedOutboundClipboardSharingLevel' => fn(ParseNode $n) => $o->setAllowedOutboundClipboardSharingLevel($n->getEnumValue(ManagedAppClipboardSharingLevel::class)),
            'allowedOutboundDataTransferDestinations' => fn(ParseNode $n) => $o->setAllowedOutboundDataTransferDestinations($n->getEnumValue(ManagedAppDataTransferLevel::class)),
            'appActionIfDeviceComplianceRequired' => fn(ParseNode $n) => $o->setAppActionIfDeviceComplianceRequired($n->getEnumValue(ManagedAppRemediationAction::class)),
            'appActionIfMaximumPinRetriesExceeded' => fn(ParseNode $n) => $o->setAppActionIfMaximumPinRetriesExceeded($n->getEnumValue(ManagedAppRemediationAction::class)),
            'appActionIfUnableToAuthenticateUser' => fn(ParseNode $n) => $o->setAppActionIfUnableToAuthenticateUser($n->getEnumValue(ManagedAppRemediationAction::class)),
            'blockDataIngestionIntoOrganizationDocuments' => fn(ParseNode $n) => $o->setBlockDataIngestionIntoOrganizationDocuments($n->getBooleanValue()),
            'contactSyncBlocked' => fn(ParseNode $n) => $o->setContactSyncBlocked($n->getBooleanValue()),
            'dataBackupBlocked' => fn(ParseNode $n) => $o->setDataBackupBlocked($n->getBooleanValue()),
            'deviceComplianceRequired' => fn(ParseNode $n) => $o->setDeviceComplianceRequired($n->getBooleanValue()),
            'dialerRestrictionLevel' => fn(ParseNode $n) => $o->setDialerRestrictionLevel($n->getEnumValue(ManagedAppPhoneNumberRedirectLevel::class)),
            'disableAppPinIfDevicePinIsSet' => fn(ParseNode $n) => $o->setDisableAppPinIfDevicePinIsSet($n->getBooleanValue()),
            'fingerprintBlocked' => fn(ParseNode $n) => $o->setFingerprintBlocked($n->getBooleanValue()),
            'gracePeriodToBlockAppsDuringOffClockHours' => fn(ParseNode $n) => $o->setGracePeriodToBlockAppsDuringOffClockHours($n->getDateIntervalValue()),
            'managedBrowser' => fn(ParseNode $n) => $o->setManagedBrowser($n->getEnumValue(ManagedBrowserType::class)),
            'managedBrowserToOpenLinksRequired' => fn(ParseNode $n) => $o->setManagedBrowserToOpenLinksRequired($n->getBooleanValue()),
            'maximumAllowedDeviceThreatLevel' => fn(ParseNode $n) => $o->setMaximumAllowedDeviceThreatLevel($n->getEnumValue(ManagedAppDeviceThreatLevel::class)),
            'maximumPinRetries' => fn(ParseNode $n) => $o->setMaximumPinRetries($n->getIntegerValue()),
            'maximumRequiredOsVersion' => fn(ParseNode $n) => $o->setMaximumRequiredOsVersion($n->getStringValue()),
            'maximumWarningOsVersion' => fn(ParseNode $n) => $o->setMaximumWarningOsVersion($n->getStringValue()),
            'maximumWipeOsVersion' => fn(ParseNode $n) => $o->setMaximumWipeOsVersion($n->getStringValue()),
            'minimumPinLength' => fn(ParseNode $n) => $o->setMinimumPinLength($n->getIntegerValue()),
            'minimumRequiredAppVersion' => fn(ParseNode $n) => $o->setMinimumRequiredAppVersion($n->getStringValue()),
            'minimumRequiredOsVersion' => fn(ParseNode $n) => $o->setMinimumRequiredOsVersion($n->getStringValue()),
            'minimumWarningAppVersion' => fn(ParseNode $n) => $o->setMinimumWarningAppVersion($n->getStringValue()),
            'minimumWarningOsVersion' => fn(ParseNode $n) => $o->setMinimumWarningOsVersion($n->getStringValue()),
            'minimumWipeAppVersion' => fn(ParseNode $n) => $o->setMinimumWipeAppVersion($n->getStringValue()),
            'minimumWipeOsVersion' => fn(ParseNode $n) => $o->setMinimumWipeOsVersion($n->getStringValue()),
            'mobileThreatDefensePartnerPriority' => fn(ParseNode $n) => $o->setMobileThreatDefensePartnerPriority($n->getEnumValue(MobileThreatDefensePartnerPriority::class)),
            'mobileThreatDefenseRemediationAction' => fn(ParseNode $n) => $o->setMobileThreatDefenseRemediationAction($n->getEnumValue(ManagedAppRemediationAction::class)),
            'notificationRestriction' => fn(ParseNode $n) => $o->setNotificationRestriction($n->getEnumValue(ManagedAppNotificationRestriction::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'organizationalCredentialsRequired' => fn(ParseNode $n) => $o->setOrganizationalCredentialsRequired($n->getBooleanValue()),
            'periodBeforePinReset' => fn(ParseNode $n) => $o->setPeriodBeforePinReset($n->getDateIntervalValue()),
            'periodOfflineBeforeAccessCheck' => fn(ParseNode $n) => $o->setPeriodOfflineBeforeAccessCheck($n->getDateIntervalValue()),
            'periodOfflineBeforeWipeIsEnforced' => fn(ParseNode $n) => $o->setPeriodOfflineBeforeWipeIsEnforced($n->getDateIntervalValue()),
            'periodOnlineBeforeAccessCheck' => fn(ParseNode $n) => $o->setPeriodOnlineBeforeAccessCheck($n->getDateIntervalValue()),
            'pinCharacterSet' => fn(ParseNode $n) => $o->setPinCharacterSet($n->getEnumValue(ManagedAppPinCharacterSet::class)),
            'pinRequired' => fn(ParseNode $n) => $o->setPinRequired($n->getBooleanValue()),
            'pinRequiredInsteadOfBiometricTimeout' => fn(ParseNode $n) => $o->setPinRequiredInsteadOfBiometricTimeout($n->getDateIntervalValue()),
            'previousPinBlockCount' => fn(ParseNode $n) => $o->setPreviousPinBlockCount($n->getIntegerValue()),
            'printBlocked' => fn(ParseNode $n) => $o->setPrintBlocked($n->getBooleanValue()),
            'saveAsBlocked' => fn(ParseNode $n) => $o->setSaveAsBlocked($n->getBooleanValue()),
            'simplePinBlocked' => fn(ParseNode $n) => $o->setSimplePinBlocked($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the fingerprintBlocked property value. Indicates whether use of the fingerprint reader is allowed in place of a pin if PinRequired is set to True.
     * @return bool|null
    */
    public function getFingerprintBlocked(): ?bool {
        $val = $this->getBackingStore()->get('fingerprintBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fingerprintBlocked'");
    }

    /**
     * Gets the gracePeriodToBlockAppsDuringOffClockHours property value. A grace period before blocking app access during off clock hours.
     * @return DateInterval|null
    */
    public function getGracePeriodToBlockAppsDuringOffClockHours(): ?DateInterval {
        $val = $this->getBackingStore()->get('gracePeriodToBlockAppsDuringOffClockHours');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gracePeriodToBlockAppsDuringOffClockHours'");
    }

    /**
     * Gets the managedBrowser property value. Type of managed browser
     * @return ManagedBrowserType|null
    */
    public function getManagedBrowser(): ?ManagedBrowserType {
        $val = $this->getBackingStore()->get('managedBrowser');
        if (is_null($val) || $val instanceof ManagedBrowserType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedBrowser'");
    }

    /**
     * Gets the managedBrowserToOpenLinksRequired property value. Indicates whether internet links should be opened in the managed browser app, or any custom browser specified by CustomBrowserProtocol (for iOS) or CustomBrowserPackageId/CustomBrowserDisplayName (for Android)
     * @return bool|null
    */
    public function getManagedBrowserToOpenLinksRequired(): ?bool {
        $val = $this->getBackingStore()->get('managedBrowserToOpenLinksRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedBrowserToOpenLinksRequired'");
    }

    /**
     * Gets the maximumAllowedDeviceThreatLevel property value. The maxium threat level allowed for an app to be compliant.
     * @return ManagedAppDeviceThreatLevel|null
    */
    public function getMaximumAllowedDeviceThreatLevel(): ?ManagedAppDeviceThreatLevel {
        $val = $this->getBackingStore()->get('maximumAllowedDeviceThreatLevel');
        if (is_null($val) || $val instanceof ManagedAppDeviceThreatLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumAllowedDeviceThreatLevel'");
    }

    /**
     * Gets the maximumPinRetries property value. Maximum number of incorrect pin retry attempts before the managed app is either blocked or wiped.
     * @return int|null
    */
    public function getMaximumPinRetries(): ?int {
        $val = $this->getBackingStore()->get('maximumPinRetries');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumPinRetries'");
    }

    /**
     * Gets the maximumRequiredOsVersion property value. Versions bigger than the specified version will block the managed app from accessing company data.
     * @return string|null
    */
    public function getMaximumRequiredOsVersion(): ?string {
        $val = $this->getBackingStore()->get('maximumRequiredOsVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumRequiredOsVersion'");
    }

    /**
     * Gets the maximumWarningOsVersion property value. Versions bigger than the specified version will block the managed app from accessing company data.
     * @return string|null
    */
    public function getMaximumWarningOsVersion(): ?string {
        $val = $this->getBackingStore()->get('maximumWarningOsVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumWarningOsVersion'");
    }

    /**
     * Gets the maximumWipeOsVersion property value. Versions bigger than the specified version will block the managed app from accessing company data.
     * @return string|null
    */
    public function getMaximumWipeOsVersion(): ?string {
        $val = $this->getBackingStore()->get('maximumWipeOsVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumWipeOsVersion'");
    }

    /**
     * Gets the minimumPinLength property value. Minimum pin length required for an app-level pin if PinRequired is set to True
     * @return int|null
    */
    public function getMinimumPinLength(): ?int {
        $val = $this->getBackingStore()->get('minimumPinLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumPinLength'");
    }

    /**
     * Gets the minimumRequiredAppVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     * @return string|null
    */
    public function getMinimumRequiredAppVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumRequiredAppVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumRequiredAppVersion'");
    }

    /**
     * Gets the minimumRequiredOsVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     * @return string|null
    */
    public function getMinimumRequiredOsVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumRequiredOsVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumRequiredOsVersion'");
    }

    /**
     * Gets the minimumWarningAppVersion property value. Versions less than the specified version will result in warning message on the managed app.
     * @return string|null
    */
    public function getMinimumWarningAppVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumWarningAppVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumWarningAppVersion'");
    }

    /**
     * Gets the minimumWarningOsVersion property value. Versions less than the specified version will result in warning message on the managed app from accessing company data.
     * @return string|null
    */
    public function getMinimumWarningOsVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumWarningOsVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumWarningOsVersion'");
    }

    /**
     * Gets the minimumWipeAppVersion property value. Versions less than or equal to the specified version will wipe the managed app and the associated company data.
     * @return string|null
    */
    public function getMinimumWipeAppVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumWipeAppVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumWipeAppVersion'");
    }

    /**
     * Gets the minimumWipeOsVersion property value. Versions less than or equal to the specified version will wipe the managed app and the associated company data.
     * @return string|null
    */
    public function getMinimumWipeOsVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumWipeOsVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumWipeOsVersion'");
    }

    /**
     * Gets the mobileThreatDefensePartnerPriority property value. Indicates how to prioritize which Mobile Threat Defense (MTD) partner is enabled for a given platform, when more than one is enabled. An app can only be actively using a single Mobile Threat Defense partner. When NULL, Microsoft Defender will be given preference. Otherwise setting the value to defenderOverThirdPartyPartner or thirdPartyPartnerOverDefender will make explicit which partner to prioritize. Possible values are: null, defenderOverThirdPartyPartner, thirdPartyPartnerOverDefender and unknownFutureValue. Default value is null. Possible values are: defenderOverThirdPartyPartner, thirdPartyPartnerOverDefender, unknownFutureValue.
     * @return MobileThreatDefensePartnerPriority|null
    */
    public function getMobileThreatDefensePartnerPriority(): ?MobileThreatDefensePartnerPriority {
        $val = $this->getBackingStore()->get('mobileThreatDefensePartnerPriority');
        if (is_null($val) || $val instanceof MobileThreatDefensePartnerPriority) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobileThreatDefensePartnerPriority'");
    }

    /**
     * Gets the mobileThreatDefenseRemediationAction property value. An admin initiated action to be applied on a managed app.
     * @return ManagedAppRemediationAction|null
    */
    public function getMobileThreatDefenseRemediationAction(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('mobileThreatDefenseRemediationAction');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobileThreatDefenseRemediationAction'");
    }

    /**
     * Gets the notificationRestriction property value. Restrict managed app notification
     * @return ManagedAppNotificationRestriction|null
    */
    public function getNotificationRestriction(): ?ManagedAppNotificationRestriction {
        $val = $this->getBackingStore()->get('notificationRestriction');
        if (is_null($val) || $val instanceof ManagedAppNotificationRestriction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationRestriction'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the organizationalCredentialsRequired property value. Indicates whether organizational credentials are required for app use.
     * @return bool|null
    */
    public function getOrganizationalCredentialsRequired(): ?bool {
        $val = $this->getBackingStore()->get('organizationalCredentialsRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizationalCredentialsRequired'");
    }

    /**
     * Gets the periodBeforePinReset property value. TimePeriod before the all-level pin must be reset if PinRequired is set to True.
     * @return DateInterval|null
    */
    public function getPeriodBeforePinReset(): ?DateInterval {
        $val = $this->getBackingStore()->get('periodBeforePinReset');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'periodBeforePinReset'");
    }

    /**
     * Gets the periodOfflineBeforeAccessCheck property value. The period after which access is checked when the device is not connected to the internet.
     * @return DateInterval|null
    */
    public function getPeriodOfflineBeforeAccessCheck(): ?DateInterval {
        $val = $this->getBackingStore()->get('periodOfflineBeforeAccessCheck');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'periodOfflineBeforeAccessCheck'");
    }

    /**
     * Gets the periodOfflineBeforeWipeIsEnforced property value. The amount of time an app is allowed to remain disconnected from the internet before all managed data it is wiped.
     * @return DateInterval|null
    */
    public function getPeriodOfflineBeforeWipeIsEnforced(): ?DateInterval {
        $val = $this->getBackingStore()->get('periodOfflineBeforeWipeIsEnforced');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'periodOfflineBeforeWipeIsEnforced'");
    }

    /**
     * Gets the periodOnlineBeforeAccessCheck property value. The period after which access is checked when the device is connected to the internet.
     * @return DateInterval|null
    */
    public function getPeriodOnlineBeforeAccessCheck(): ?DateInterval {
        $val = $this->getBackingStore()->get('periodOnlineBeforeAccessCheck');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'periodOnlineBeforeAccessCheck'");
    }

    /**
     * Gets the pinCharacterSet property value. Character set which is to be used for a user's app PIN
     * @return ManagedAppPinCharacterSet|null
    */
    public function getPinCharacterSet(): ?ManagedAppPinCharacterSet {
        $val = $this->getBackingStore()->get('pinCharacterSet');
        if (is_null($val) || $val instanceof ManagedAppPinCharacterSet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinCharacterSet'");
    }

    /**
     * Gets the pinRequired property value. Indicates whether an app-level pin is required.
     * @return bool|null
    */
    public function getPinRequired(): ?bool {
        $val = $this->getBackingStore()->get('pinRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinRequired'");
    }

    /**
     * Gets the pinRequiredInsteadOfBiometricTimeout property value. Timeout in minutes for an app pin instead of non biometrics passcode
     * @return DateInterval|null
    */
    public function getPinRequiredInsteadOfBiometricTimeout(): ?DateInterval {
        $val = $this->getBackingStore()->get('pinRequiredInsteadOfBiometricTimeout');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinRequiredInsteadOfBiometricTimeout'");
    }

    /**
     * Gets the previousPinBlockCount property value. Requires a pin to be unique from the number specified in this property.
     * @return int|null
    */
    public function getPreviousPinBlockCount(): ?int {
        $val = $this->getBackingStore()->get('previousPinBlockCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'previousPinBlockCount'");
    }

    /**
     * Gets the printBlocked property value. Indicates whether printing is allowed from managed apps.
     * @return bool|null
    */
    public function getPrintBlocked(): ?bool {
        $val = $this->getBackingStore()->get('printBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'printBlocked'");
    }

    /**
     * Gets the saveAsBlocked property value. Indicates whether users may use the 'Save As' menu item to save a copy of protected files.
     * @return bool|null
    */
    public function getSaveAsBlocked(): ?bool {
        $val = $this->getBackingStore()->get('saveAsBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'saveAsBlocked'");
    }

    /**
     * Gets the simplePinBlocked property value. Indicates whether simplePin is blocked.
     * @return bool|null
    */
    public function getSimplePinBlocked(): ?bool {
        $val = $this->getBackingStore()->get('simplePinBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'simplePinBlocked'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfEnumValues('allowedDataIngestionLocations', $this->getAllowedDataIngestionLocations());
        $writer->writeCollectionOfEnumValues('allowedDataStorageLocations', $this->getAllowedDataStorageLocations());
        $writer->writeEnumValue('allowedInboundDataTransferSources', $this->getAllowedInboundDataTransferSources());
        $writer->writeIntegerValue('allowedOutboundClipboardSharingExceptionLength', $this->getAllowedOutboundClipboardSharingExceptionLength());
        $writer->writeEnumValue('allowedOutboundClipboardSharingLevel', $this->getAllowedOutboundClipboardSharingLevel());
        $writer->writeEnumValue('allowedOutboundDataTransferDestinations', $this->getAllowedOutboundDataTransferDestinations());
        $writer->writeEnumValue('appActionIfDeviceComplianceRequired', $this->getAppActionIfDeviceComplianceRequired());
        $writer->writeEnumValue('appActionIfMaximumPinRetriesExceeded', $this->getAppActionIfMaximumPinRetriesExceeded());
        $writer->writeEnumValue('appActionIfUnableToAuthenticateUser', $this->getAppActionIfUnableToAuthenticateUser());
        $writer->writeBooleanValue('blockDataIngestionIntoOrganizationDocuments', $this->getBlockDataIngestionIntoOrganizationDocuments());
        $writer->writeBooleanValue('contactSyncBlocked', $this->getContactSyncBlocked());
        $writer->writeBooleanValue('dataBackupBlocked', $this->getDataBackupBlocked());
        $writer->writeBooleanValue('deviceComplianceRequired', $this->getDeviceComplianceRequired());
        $writer->writeEnumValue('dialerRestrictionLevel', $this->getDialerRestrictionLevel());
        $writer->writeBooleanValue('disableAppPinIfDevicePinIsSet', $this->getDisableAppPinIfDevicePinIsSet());
        $writer->writeBooleanValue('fingerprintBlocked', $this->getFingerprintBlocked());
        $writer->writeDateIntervalValue('gracePeriodToBlockAppsDuringOffClockHours', $this->getGracePeriodToBlockAppsDuringOffClockHours());
        $writer->writeEnumValue('managedBrowser', $this->getManagedBrowser());
        $writer->writeBooleanValue('managedBrowserToOpenLinksRequired', $this->getManagedBrowserToOpenLinksRequired());
        $writer->writeEnumValue('maximumAllowedDeviceThreatLevel', $this->getMaximumAllowedDeviceThreatLevel());
        $writer->writeIntegerValue('maximumPinRetries', $this->getMaximumPinRetries());
        $writer->writeStringValue('maximumRequiredOsVersion', $this->getMaximumRequiredOsVersion());
        $writer->writeStringValue('maximumWarningOsVersion', $this->getMaximumWarningOsVersion());
        $writer->writeStringValue('maximumWipeOsVersion', $this->getMaximumWipeOsVersion());
        $writer->writeIntegerValue('minimumPinLength', $this->getMinimumPinLength());
        $writer->writeStringValue('minimumRequiredAppVersion', $this->getMinimumRequiredAppVersion());
        $writer->writeStringValue('minimumRequiredOsVersion', $this->getMinimumRequiredOsVersion());
        $writer->writeStringValue('minimumWarningAppVersion', $this->getMinimumWarningAppVersion());
        $writer->writeStringValue('minimumWarningOsVersion', $this->getMinimumWarningOsVersion());
        $writer->writeStringValue('minimumWipeAppVersion', $this->getMinimumWipeAppVersion());
        $writer->writeStringValue('minimumWipeOsVersion', $this->getMinimumWipeOsVersion());
        $writer->writeEnumValue('mobileThreatDefensePartnerPriority', $this->getMobileThreatDefensePartnerPriority());
        $writer->writeEnumValue('mobileThreatDefenseRemediationAction', $this->getMobileThreatDefenseRemediationAction());
        $writer->writeEnumValue('notificationRestriction', $this->getNotificationRestriction());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('organizationalCredentialsRequired', $this->getOrganizationalCredentialsRequired());
        $writer->writeDateIntervalValue('periodBeforePinReset', $this->getPeriodBeforePinReset());
        $writer->writeDateIntervalValue('periodOfflineBeforeAccessCheck', $this->getPeriodOfflineBeforeAccessCheck());
        $writer->writeDateIntervalValue('periodOfflineBeforeWipeIsEnforced', $this->getPeriodOfflineBeforeWipeIsEnforced());
        $writer->writeDateIntervalValue('periodOnlineBeforeAccessCheck', $this->getPeriodOnlineBeforeAccessCheck());
        $writer->writeEnumValue('pinCharacterSet', $this->getPinCharacterSet());
        $writer->writeBooleanValue('pinRequired', $this->getPinRequired());
        $writer->writeDateIntervalValue('pinRequiredInsteadOfBiometricTimeout', $this->getPinRequiredInsteadOfBiometricTimeout());
        $writer->writeIntegerValue('previousPinBlockCount', $this->getPreviousPinBlockCount());
        $writer->writeBooleanValue('printBlocked', $this->getPrintBlocked());
        $writer->writeBooleanValue('saveAsBlocked', $this->getSaveAsBlocked());
        $writer->writeBooleanValue('simplePinBlocked', $this->getSimplePinBlocked());
    }

    /**
     * Sets the allowedDataIngestionLocations property value. Data storage locations where a user may store managed data.
     * @param array<ManagedAppDataIngestionLocation>|null $value Value to set for the allowedDataIngestionLocations property.
    */
    public function setAllowedDataIngestionLocations(?array $value): void {
        $this->getBackingStore()->set('allowedDataIngestionLocations', $value);
    }

    /**
     * Sets the allowedDataStorageLocations property value. Data storage locations where a user may store managed data.
     * @param array<ManagedAppDataStorageLocation>|null $value Value to set for the allowedDataStorageLocations property.
    */
    public function setAllowedDataStorageLocations(?array $value): void {
        $this->getBackingStore()->set('allowedDataStorageLocations', $value);
    }

    /**
     * Sets the allowedInboundDataTransferSources property value. Data can be transferred from/to these classes of apps
     * @param ManagedAppDataTransferLevel|null $value Value to set for the allowedInboundDataTransferSources property.
    */
    public function setAllowedInboundDataTransferSources(?ManagedAppDataTransferLevel $value): void {
        $this->getBackingStore()->set('allowedInboundDataTransferSources', $value);
    }

    /**
     * Sets the allowedOutboundClipboardSharingExceptionLength property value. Specify the number of characters that may be cut or copied from Org data and accounts to any application. This setting overrides the AllowedOutboundClipboardSharingLevel restriction. Default value of '0' means no exception is allowed.
     * @param int|null $value Value to set for the allowedOutboundClipboardSharingExceptionLength property.
    */
    public function setAllowedOutboundClipboardSharingExceptionLength(?int $value): void {
        $this->getBackingStore()->set('allowedOutboundClipboardSharingExceptionLength', $value);
    }

    /**
     * Sets the allowedOutboundClipboardSharingLevel property value. Represents the level to which the device's clipboard may be shared between apps
     * @param ManagedAppClipboardSharingLevel|null $value Value to set for the allowedOutboundClipboardSharingLevel property.
    */
    public function setAllowedOutboundClipboardSharingLevel(?ManagedAppClipboardSharingLevel $value): void {
        $this->getBackingStore()->set('allowedOutboundClipboardSharingLevel', $value);
    }

    /**
     * Sets the allowedOutboundDataTransferDestinations property value. Data can be transferred from/to these classes of apps
     * @param ManagedAppDataTransferLevel|null $value Value to set for the allowedOutboundDataTransferDestinations property.
    */
    public function setAllowedOutboundDataTransferDestinations(?ManagedAppDataTransferLevel $value): void {
        $this->getBackingStore()->set('allowedOutboundDataTransferDestinations', $value);
    }

    /**
     * Sets the appActionIfDeviceComplianceRequired property value. An admin initiated action to be applied on a managed app.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfDeviceComplianceRequired property.
    */
    public function setAppActionIfDeviceComplianceRequired(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfDeviceComplianceRequired', $value);
    }

    /**
     * Sets the appActionIfMaximumPinRetriesExceeded property value. An admin initiated action to be applied on a managed app.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfMaximumPinRetriesExceeded property.
    */
    public function setAppActionIfMaximumPinRetriesExceeded(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfMaximumPinRetriesExceeded', $value);
    }

    /**
     * Sets the appActionIfUnableToAuthenticateUser property value. If set, it will specify what action to take in the case where the user is unable to checkin because their authentication token is invalid. This happens when the user is deleted or disabled in AAD. Possible values are: block, wipe, warn.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfUnableToAuthenticateUser property.
    */
    public function setAppActionIfUnableToAuthenticateUser(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfUnableToAuthenticateUser', $value);
    }

    /**
     * Sets the blockDataIngestionIntoOrganizationDocuments property value. Indicates whether a user can bring data into org documents.
     * @param bool|null $value Value to set for the blockDataIngestionIntoOrganizationDocuments property.
    */
    public function setBlockDataIngestionIntoOrganizationDocuments(?bool $value): void {
        $this->getBackingStore()->set('blockDataIngestionIntoOrganizationDocuments', $value);
    }

    /**
     * Sets the contactSyncBlocked property value. Indicates whether contacts can be synced to the user's device.
     * @param bool|null $value Value to set for the contactSyncBlocked property.
    */
    public function setContactSyncBlocked(?bool $value): void {
        $this->getBackingStore()->set('contactSyncBlocked', $value);
    }

    /**
     * Sets the dataBackupBlocked property value. Indicates whether the backup of a managed app's data is blocked.
     * @param bool|null $value Value to set for the dataBackupBlocked property.
    */
    public function setDataBackupBlocked(?bool $value): void {
        $this->getBackingStore()->set('dataBackupBlocked', $value);
    }

    /**
     * Sets the deviceComplianceRequired property value. Indicates whether device compliance is required.
     * @param bool|null $value Value to set for the deviceComplianceRequired property.
    */
    public function setDeviceComplianceRequired(?bool $value): void {
        $this->getBackingStore()->set('deviceComplianceRequired', $value);
    }

    /**
     * Sets the dialerRestrictionLevel property value. The classes of apps that are allowed to click-to-open a phone number, for making phone calls or sending text messages.
     * @param ManagedAppPhoneNumberRedirectLevel|null $value Value to set for the dialerRestrictionLevel property.
    */
    public function setDialerRestrictionLevel(?ManagedAppPhoneNumberRedirectLevel $value): void {
        $this->getBackingStore()->set('dialerRestrictionLevel', $value);
    }

    /**
     * Sets the disableAppPinIfDevicePinIsSet property value. Indicates whether use of the app pin is required if the device pin is set.
     * @param bool|null $value Value to set for the disableAppPinIfDevicePinIsSet property.
    */
    public function setDisableAppPinIfDevicePinIsSet(?bool $value): void {
        $this->getBackingStore()->set('disableAppPinIfDevicePinIsSet', $value);
    }

    /**
     * Sets the fingerprintBlocked property value. Indicates whether use of the fingerprint reader is allowed in place of a pin if PinRequired is set to True.
     * @param bool|null $value Value to set for the fingerprintBlocked property.
    */
    public function setFingerprintBlocked(?bool $value): void {
        $this->getBackingStore()->set('fingerprintBlocked', $value);
    }

    /**
     * Sets the gracePeriodToBlockAppsDuringOffClockHours property value. A grace period before blocking app access during off clock hours.
     * @param DateInterval|null $value Value to set for the gracePeriodToBlockAppsDuringOffClockHours property.
    */
    public function setGracePeriodToBlockAppsDuringOffClockHours(?DateInterval $value): void {
        $this->getBackingStore()->set('gracePeriodToBlockAppsDuringOffClockHours', $value);
    }

    /**
     * Sets the managedBrowser property value. Type of managed browser
     * @param ManagedBrowserType|null $value Value to set for the managedBrowser property.
    */
    public function setManagedBrowser(?ManagedBrowserType $value): void {
        $this->getBackingStore()->set('managedBrowser', $value);
    }

    /**
     * Sets the managedBrowserToOpenLinksRequired property value. Indicates whether internet links should be opened in the managed browser app, or any custom browser specified by CustomBrowserProtocol (for iOS) or CustomBrowserPackageId/CustomBrowserDisplayName (for Android)
     * @param bool|null $value Value to set for the managedBrowserToOpenLinksRequired property.
    */
    public function setManagedBrowserToOpenLinksRequired(?bool $value): void {
        $this->getBackingStore()->set('managedBrowserToOpenLinksRequired', $value);
    }

    /**
     * Sets the maximumAllowedDeviceThreatLevel property value. The maxium threat level allowed for an app to be compliant.
     * @param ManagedAppDeviceThreatLevel|null $value Value to set for the maximumAllowedDeviceThreatLevel property.
    */
    public function setMaximumAllowedDeviceThreatLevel(?ManagedAppDeviceThreatLevel $value): void {
        $this->getBackingStore()->set('maximumAllowedDeviceThreatLevel', $value);
    }

    /**
     * Sets the maximumPinRetries property value. Maximum number of incorrect pin retry attempts before the managed app is either blocked or wiped.
     * @param int|null $value Value to set for the maximumPinRetries property.
    */
    public function setMaximumPinRetries(?int $value): void {
        $this->getBackingStore()->set('maximumPinRetries', $value);
    }

    /**
     * Sets the maximumRequiredOsVersion property value. Versions bigger than the specified version will block the managed app from accessing company data.
     * @param string|null $value Value to set for the maximumRequiredOsVersion property.
    */
    public function setMaximumRequiredOsVersion(?string $value): void {
        $this->getBackingStore()->set('maximumRequiredOsVersion', $value);
    }

    /**
     * Sets the maximumWarningOsVersion property value. Versions bigger than the specified version will block the managed app from accessing company data.
     * @param string|null $value Value to set for the maximumWarningOsVersion property.
    */
    public function setMaximumWarningOsVersion(?string $value): void {
        $this->getBackingStore()->set('maximumWarningOsVersion', $value);
    }

    /**
     * Sets the maximumWipeOsVersion property value. Versions bigger than the specified version will block the managed app from accessing company data.
     * @param string|null $value Value to set for the maximumWipeOsVersion property.
    */
    public function setMaximumWipeOsVersion(?string $value): void {
        $this->getBackingStore()->set('maximumWipeOsVersion', $value);
    }

    /**
     * Sets the minimumPinLength property value. Minimum pin length required for an app-level pin if PinRequired is set to True
     * @param int|null $value Value to set for the minimumPinLength property.
    */
    public function setMinimumPinLength(?int $value): void {
        $this->getBackingStore()->set('minimumPinLength', $value);
    }

    /**
     * Sets the minimumRequiredAppVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     * @param string|null $value Value to set for the minimumRequiredAppVersion property.
    */
    public function setMinimumRequiredAppVersion(?string $value): void {
        $this->getBackingStore()->set('minimumRequiredAppVersion', $value);
    }

    /**
     * Sets the minimumRequiredOsVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     * @param string|null $value Value to set for the minimumRequiredOsVersion property.
    */
    public function setMinimumRequiredOsVersion(?string $value): void {
        $this->getBackingStore()->set('minimumRequiredOsVersion', $value);
    }

    /**
     * Sets the minimumWarningAppVersion property value. Versions less than the specified version will result in warning message on the managed app.
     * @param string|null $value Value to set for the minimumWarningAppVersion property.
    */
    public function setMinimumWarningAppVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWarningAppVersion', $value);
    }

    /**
     * Sets the minimumWarningOsVersion property value. Versions less than the specified version will result in warning message on the managed app from accessing company data.
     * @param string|null $value Value to set for the minimumWarningOsVersion property.
    */
    public function setMinimumWarningOsVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWarningOsVersion', $value);
    }

    /**
     * Sets the minimumWipeAppVersion property value. Versions less than or equal to the specified version will wipe the managed app and the associated company data.
     * @param string|null $value Value to set for the minimumWipeAppVersion property.
    */
    public function setMinimumWipeAppVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWipeAppVersion', $value);
    }

    /**
     * Sets the minimumWipeOsVersion property value. Versions less than or equal to the specified version will wipe the managed app and the associated company data.
     * @param string|null $value Value to set for the minimumWipeOsVersion property.
    */
    public function setMinimumWipeOsVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWipeOsVersion', $value);
    }

    /**
     * Sets the mobileThreatDefensePartnerPriority property value. Indicates how to prioritize which Mobile Threat Defense (MTD) partner is enabled for a given platform, when more than one is enabled. An app can only be actively using a single Mobile Threat Defense partner. When NULL, Microsoft Defender will be given preference. Otherwise setting the value to defenderOverThirdPartyPartner or thirdPartyPartnerOverDefender will make explicit which partner to prioritize. Possible values are: null, defenderOverThirdPartyPartner, thirdPartyPartnerOverDefender and unknownFutureValue. Default value is null. Possible values are: defenderOverThirdPartyPartner, thirdPartyPartnerOverDefender, unknownFutureValue.
     * @param MobileThreatDefensePartnerPriority|null $value Value to set for the mobileThreatDefensePartnerPriority property.
    */
    public function setMobileThreatDefensePartnerPriority(?MobileThreatDefensePartnerPriority $value): void {
        $this->getBackingStore()->set('mobileThreatDefensePartnerPriority', $value);
    }

    /**
     * Sets the mobileThreatDefenseRemediationAction property value. An admin initiated action to be applied on a managed app.
     * @param ManagedAppRemediationAction|null $value Value to set for the mobileThreatDefenseRemediationAction property.
    */
    public function setMobileThreatDefenseRemediationAction(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('mobileThreatDefenseRemediationAction', $value);
    }

    /**
     * Sets the notificationRestriction property value. Restrict managed app notification
     * @param ManagedAppNotificationRestriction|null $value Value to set for the notificationRestriction property.
    */
    public function setNotificationRestriction(?ManagedAppNotificationRestriction $value): void {
        $this->getBackingStore()->set('notificationRestriction', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the organizationalCredentialsRequired property value. Indicates whether organizational credentials are required for app use.
     * @param bool|null $value Value to set for the organizationalCredentialsRequired property.
    */
    public function setOrganizationalCredentialsRequired(?bool $value): void {
        $this->getBackingStore()->set('organizationalCredentialsRequired', $value);
    }

    /**
     * Sets the periodBeforePinReset property value. TimePeriod before the all-level pin must be reset if PinRequired is set to True.
     * @param DateInterval|null $value Value to set for the periodBeforePinReset property.
    */
    public function setPeriodBeforePinReset(?DateInterval $value): void {
        $this->getBackingStore()->set('periodBeforePinReset', $value);
    }

    /**
     * Sets the periodOfflineBeforeAccessCheck property value. The period after which access is checked when the device is not connected to the internet.
     * @param DateInterval|null $value Value to set for the periodOfflineBeforeAccessCheck property.
    */
    public function setPeriodOfflineBeforeAccessCheck(?DateInterval $value): void {
        $this->getBackingStore()->set('periodOfflineBeforeAccessCheck', $value);
    }

    /**
     * Sets the periodOfflineBeforeWipeIsEnforced property value. The amount of time an app is allowed to remain disconnected from the internet before all managed data it is wiped.
     * @param DateInterval|null $value Value to set for the periodOfflineBeforeWipeIsEnforced property.
    */
    public function setPeriodOfflineBeforeWipeIsEnforced(?DateInterval $value): void {
        $this->getBackingStore()->set('periodOfflineBeforeWipeIsEnforced', $value);
    }

    /**
     * Sets the periodOnlineBeforeAccessCheck property value. The period after which access is checked when the device is connected to the internet.
     * @param DateInterval|null $value Value to set for the periodOnlineBeforeAccessCheck property.
    */
    public function setPeriodOnlineBeforeAccessCheck(?DateInterval $value): void {
        $this->getBackingStore()->set('periodOnlineBeforeAccessCheck', $value);
    }

    /**
     * Sets the pinCharacterSet property value. Character set which is to be used for a user's app PIN
     * @param ManagedAppPinCharacterSet|null $value Value to set for the pinCharacterSet property.
    */
    public function setPinCharacterSet(?ManagedAppPinCharacterSet $value): void {
        $this->getBackingStore()->set('pinCharacterSet', $value);
    }

    /**
     * Sets the pinRequired property value. Indicates whether an app-level pin is required.
     * @param bool|null $value Value to set for the pinRequired property.
    */
    public function setPinRequired(?bool $value): void {
        $this->getBackingStore()->set('pinRequired', $value);
    }

    /**
     * Sets the pinRequiredInsteadOfBiometricTimeout property value. Timeout in minutes for an app pin instead of non biometrics passcode
     * @param DateInterval|null $value Value to set for the pinRequiredInsteadOfBiometricTimeout property.
    */
    public function setPinRequiredInsteadOfBiometricTimeout(?DateInterval $value): void {
        $this->getBackingStore()->set('pinRequiredInsteadOfBiometricTimeout', $value);
    }

    /**
     * Sets the previousPinBlockCount property value. Requires a pin to be unique from the number specified in this property.
     * @param int|null $value Value to set for the previousPinBlockCount property.
    */
    public function setPreviousPinBlockCount(?int $value): void {
        $this->getBackingStore()->set('previousPinBlockCount', $value);
    }

    /**
     * Sets the printBlocked property value. Indicates whether printing is allowed from managed apps.
     * @param bool|null $value Value to set for the printBlocked property.
    */
    public function setPrintBlocked(?bool $value): void {
        $this->getBackingStore()->set('printBlocked', $value);
    }

    /**
     * Sets the saveAsBlocked property value. Indicates whether users may use the 'Save As' menu item to save a copy of protected files.
     * @param bool|null $value Value to set for the saveAsBlocked property.
    */
    public function setSaveAsBlocked(?bool $value): void {
        $this->getBackingStore()->set('saveAsBlocked', $value);
    }

    /**
     * Sets the simplePinBlocked property value. Indicates whether simplePin is blocked.
     * @param bool|null $value Value to set for the simplePinBlocked property.
    */
    public function setSimplePinBlocked(?bool $value): void {
        $this->getBackingStore()->set('simplePinBlocked', $value);
    }

}
