<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Policy used to configure detailed management settings for a specified set of apps for all users not targeted by a TargetedManagedAppProtection Policy
*/
class DefaultManagedAppProtection extends ManagedAppProtection implements Parsable 
{
    /**
     * Instantiates a new DefaultManagedAppProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.defaultManagedAppProtection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DefaultManagedAppProtection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DefaultManagedAppProtection {
        return new DefaultManagedAppProtection();
    }

    /**
     * Gets the allowedAndroidDeviceManufacturers property value. Semicolon seperated list of device manufacturers allowed, as a string, for the managed app to work. (Android only)
     * @return string|null
    */
    public function getAllowedAndroidDeviceManufacturers(): ?string {
        $val = $this->getBackingStore()->get('allowedAndroidDeviceManufacturers');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedAndroidDeviceManufacturers'");
    }

    /**
     * Gets the allowedAndroidDeviceModels property value. List of device models allowed, as a string, for the managed app to work. (Android Only)
     * @return array<string>|null
    */
    public function getAllowedAndroidDeviceModels(): ?array {
        $val = $this->getBackingStore()->get('allowedAndroidDeviceModels');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedAndroidDeviceModels'");
    }

    /**
     * Gets the allowedIosDeviceModels property value. Semicolon seperated list of device models allowed, as a string, for the managed app to work. (iOS Only)
     * @return string|null
    */
    public function getAllowedIosDeviceModels(): ?string {
        $val = $this->getBackingStore()->get('allowedIosDeviceModels');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedIosDeviceModels'");
    }

    /**
     * Gets the allowWidgetContentSync property value. Indicates  if content sync for widgets is allowed for iOS on App Protection Policies
     * @return bool|null
    */
    public function getAllowWidgetContentSync(): ?bool {
        $val = $this->getBackingStore()->get('allowWidgetContentSync');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowWidgetContentSync'");
    }

    /**
     * Gets the appActionIfAccountIsClockedOut property value. Defines a managed app behavior, either block or warn, if the user is clocked out (non-working time). Possible values are: block, wipe, warn, blockWhenSettingIsSupported.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfAccountIsClockedOut(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfAccountIsClockedOut');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfAccountIsClockedOut'");
    }

    /**
     * Gets the appActionIfAndroidDeviceManufacturerNotAllowed property value. An admin initiated action to be applied on a managed app.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfAndroidDeviceManufacturerNotAllowed(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfAndroidDeviceManufacturerNotAllowed');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfAndroidDeviceManufacturerNotAllowed'");
    }

    /**
     * Gets the appActionIfAndroidDeviceModelNotAllowed property value. An admin initiated action to be applied on a managed app.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfAndroidDeviceModelNotAllowed(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfAndroidDeviceModelNotAllowed');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfAndroidDeviceModelNotAllowed'");
    }

    /**
     * Gets the appActionIfAndroidSafetyNetAppsVerificationFailed property value. An admin initiated action to be applied on a managed app.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfAndroidSafetyNetAppsVerificationFailed(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfAndroidSafetyNetAppsVerificationFailed');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfAndroidSafetyNetAppsVerificationFailed'");
    }

    /**
     * Gets the appActionIfAndroidSafetyNetDeviceAttestationFailed property value. An admin initiated action to be applied on a managed app.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfAndroidSafetyNetDeviceAttestationFailed(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfAndroidSafetyNetDeviceAttestationFailed');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfAndroidSafetyNetDeviceAttestationFailed'");
    }

    /**
     * Gets the appActionIfDeviceLockNotSet property value. An admin initiated action to be applied on a managed app.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfDeviceLockNotSet(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfDeviceLockNotSet');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfDeviceLockNotSet'");
    }

    /**
     * Gets the appActionIfDevicePasscodeComplexityLessThanHigh property value. If the device does not have a passcode of high complexity or higher, trigger the stored action. Possible values are: block, wipe, warn, blockWhenSettingIsSupported.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfDevicePasscodeComplexityLessThanHigh(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfDevicePasscodeComplexityLessThanHigh');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfDevicePasscodeComplexityLessThanHigh'");
    }

    /**
     * Gets the appActionIfDevicePasscodeComplexityLessThanLow property value. If the device does not have a passcode of low complexity or higher, trigger the stored action. Possible values are: block, wipe, warn, blockWhenSettingIsSupported.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfDevicePasscodeComplexityLessThanLow(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfDevicePasscodeComplexityLessThanLow');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfDevicePasscodeComplexityLessThanLow'");
    }

    /**
     * Gets the appActionIfDevicePasscodeComplexityLessThanMedium property value. If the device does not have a passcode of medium complexity or higher, trigger the stored action. Possible values are: block, wipe, warn, blockWhenSettingIsSupported.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfDevicePasscodeComplexityLessThanMedium(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfDevicePasscodeComplexityLessThanMedium');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfDevicePasscodeComplexityLessThanMedium'");
    }

    /**
     * Gets the appActionIfIosDeviceModelNotAllowed property value. An admin initiated action to be applied on a managed app.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfIosDeviceModelNotAllowed(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfIosDeviceModelNotAllowed');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfIosDeviceModelNotAllowed'");
    }

    /**
     * Gets the appDataEncryptionType property value. Represents the level to which app data is encrypted for managed apps
     * @return ManagedAppDataEncryptionType|null
    */
    public function getAppDataEncryptionType(): ?ManagedAppDataEncryptionType {
        $val = $this->getBackingStore()->get('appDataEncryptionType');
        if (is_null($val) || $val instanceof ManagedAppDataEncryptionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appDataEncryptionType'");
    }

    /**
     * Gets the apps property value. List of apps to which the policy is deployed.
     * @return array<ManagedMobileApp>|null
    */
    public function getApps(): ?array {
        $val = $this->getBackingStore()->get('apps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedMobileApp::class);
            /** @var array<ManagedMobileApp>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'apps'");
    }

    /**
     * Gets the biometricAuthenticationBlocked property value. Indicates whether use of the biometric authentication is allowed in place of a pin if PinRequired is set to True. (Android Only)
     * @return bool|null
    */
    public function getBiometricAuthenticationBlocked(): ?bool {
        $val = $this->getBackingStore()->get('biometricAuthenticationBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'biometricAuthenticationBlocked'");
    }

    /**
     * Gets the blockAfterCompanyPortalUpdateDeferralInDays property value. Maximum number of days Company Portal update can be deferred on the device or app access will be blocked.
     * @return int|null
    */
    public function getBlockAfterCompanyPortalUpdateDeferralInDays(): ?int {
        $val = $this->getBackingStore()->get('blockAfterCompanyPortalUpdateDeferralInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockAfterCompanyPortalUpdateDeferralInDays'");
    }

    /**
     * Gets the connectToVpnOnLaunch property value. Whether the app should connect to the configured VPN on launch (Android only).
     * @return bool|null
    */
    public function getConnectToVpnOnLaunch(): ?bool {
        $val = $this->getBackingStore()->get('connectToVpnOnLaunch');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectToVpnOnLaunch'");
    }

    /**
     * Gets the customBrowserDisplayName property value. Friendly name of the preferred custom browser to open weblink on Android. (Android only)
     * @return string|null
    */
    public function getCustomBrowserDisplayName(): ?string {
        $val = $this->getBackingStore()->get('customBrowserDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customBrowserDisplayName'");
    }

    /**
     * Gets the customBrowserPackageId property value. Unique identifier of a custom browser to open weblink on Android. (Android only)
     * @return string|null
    */
    public function getCustomBrowserPackageId(): ?string {
        $val = $this->getBackingStore()->get('customBrowserPackageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customBrowserPackageId'");
    }

    /**
     * Gets the customBrowserProtocol property value. A custom browser protocol to open weblink on iOS. (iOS only)
     * @return string|null
    */
    public function getCustomBrowserProtocol(): ?string {
        $val = $this->getBackingStore()->get('customBrowserProtocol');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customBrowserProtocol'");
    }

    /**
     * Gets the customDialerAppDisplayName property value. Friendly name of a custom dialer app to click-to-open a phone number on Android.
     * @return string|null
    */
    public function getCustomDialerAppDisplayName(): ?string {
        $val = $this->getBackingStore()->get('customDialerAppDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customDialerAppDisplayName'");
    }

    /**
     * Gets the customDialerAppPackageId property value. PackageId of a custom dialer app to click-to-open a phone number on Android.
     * @return string|null
    */
    public function getCustomDialerAppPackageId(): ?string {
        $val = $this->getBackingStore()->get('customDialerAppPackageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customDialerAppPackageId'");
    }

    /**
     * Gets the customDialerAppProtocol property value. Protocol of a custom dialer app to click-to-open a phone number on iOS, for example, skype:.
     * @return string|null
    */
    public function getCustomDialerAppProtocol(): ?string {
        $val = $this->getBackingStore()->get('customDialerAppProtocol');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customDialerAppProtocol'");
    }

    /**
     * Gets the customSettings property value. A set of string key and string value pairs to be sent to the affected users, unalterned by this service
     * @return array<KeyValuePair>|null
    */
    public function getCustomSettings(): ?array {
        $val = $this->getBackingStore()->get('customSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValuePair::class);
            /** @var array<KeyValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customSettings'");
    }

    /**
     * Gets the deployedAppCount property value. Count of apps to which the current policy is deployed.
     * @return int|null
    */
    public function getDeployedAppCount(): ?int {
        $val = $this->getBackingStore()->get('deployedAppCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deployedAppCount'");
    }

    /**
     * Gets the deploymentSummary property value. Navigation property to deployment summary of the configuration.
     * @return ManagedAppPolicyDeploymentSummary|null
    */
    public function getDeploymentSummary(): ?ManagedAppPolicyDeploymentSummary {
        $val = $this->getBackingStore()->get('deploymentSummary');
        if (is_null($val) || $val instanceof ManagedAppPolicyDeploymentSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentSummary'");
    }

    /**
     * Gets the deviceLockRequired property value. Defines if any kind of lock must be required on device. (android only)
     * @return bool|null
    */
    public function getDeviceLockRequired(): ?bool {
        $val = $this->getBackingStore()->get('deviceLockRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceLockRequired'");
    }

    /**
     * Gets the disableAppEncryptionIfDeviceEncryptionIsEnabled property value. When this setting is enabled, app level encryption is disabled if device level encryption is enabled. (Android only)
     * @return bool|null
    */
    public function getDisableAppEncryptionIfDeviceEncryptionIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('disableAppEncryptionIfDeviceEncryptionIsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disableAppEncryptionIfDeviceEncryptionIsEnabled'");
    }

    /**
     * Gets the disableProtectionOfManagedOutboundOpenInData property value. Disable protection of data transferred to other apps through IOS OpenIn option. This setting is only allowed to be True when AllowedOutboundDataTransferDestinations is set to ManagedApps. (iOS Only)
     * @return bool|null
    */
    public function getDisableProtectionOfManagedOutboundOpenInData(): ?bool {
        $val = $this->getBackingStore()->get('disableProtectionOfManagedOutboundOpenInData');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disableProtectionOfManagedOutboundOpenInData'");
    }

    /**
     * Gets the encryptAppData property value. Indicates whether managed-app data should be encrypted. (Android only)
     * @return bool|null
    */
    public function getEncryptAppData(): ?bool {
        $val = $this->getBackingStore()->get('encryptAppData');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'encryptAppData'");
    }

    /**
     * Gets the exemptedAppPackages property value. Android App packages in this list will be exempt from the policy and will be able to receive data from managed apps. (Android only)
     * @return array<KeyValuePair>|null
    */
    public function getExemptedAppPackages(): ?array {
        $val = $this->getBackingStore()->get('exemptedAppPackages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValuePair::class);
            /** @var array<KeyValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exemptedAppPackages'");
    }

    /**
     * Gets the exemptedAppProtocols property value. iOS Apps in this list will be exempt from the policy and will be able to receive data from managed apps. (iOS Only)
     * @return array<KeyValuePair>|null
    */
    public function getExemptedAppProtocols(): ?array {
        $val = $this->getBackingStore()->get('exemptedAppProtocols');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValuePair::class);
            /** @var array<KeyValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exemptedAppProtocols'");
    }

    /**
     * Gets the faceIdBlocked property value. Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True. (iOS Only)
     * @return bool|null
    */
    public function getFaceIdBlocked(): ?bool {
        $val = $this->getBackingStore()->get('faceIdBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'faceIdBlocked'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedAndroidDeviceManufacturers' => fn(ParseNode $n) => $o->setAllowedAndroidDeviceManufacturers($n->getStringValue()),
            'allowedAndroidDeviceModels' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedAndroidDeviceModels($val);
            },
            'allowedIosDeviceModels' => fn(ParseNode $n) => $o->setAllowedIosDeviceModels($n->getStringValue()),
            'allowWidgetContentSync' => fn(ParseNode $n) => $o->setAllowWidgetContentSync($n->getBooleanValue()),
            'appActionIfAccountIsClockedOut' => fn(ParseNode $n) => $o->setAppActionIfAccountIsClockedOut($n->getEnumValue(ManagedAppRemediationAction::class)),
            'appActionIfAndroidDeviceManufacturerNotAllowed' => fn(ParseNode $n) => $o->setAppActionIfAndroidDeviceManufacturerNotAllowed($n->getEnumValue(ManagedAppRemediationAction::class)),
            'appActionIfAndroidDeviceModelNotAllowed' => fn(ParseNode $n) => $o->setAppActionIfAndroidDeviceModelNotAllowed($n->getEnumValue(ManagedAppRemediationAction::class)),
            'appActionIfAndroidSafetyNetAppsVerificationFailed' => fn(ParseNode $n) => $o->setAppActionIfAndroidSafetyNetAppsVerificationFailed($n->getEnumValue(ManagedAppRemediationAction::class)),
            'appActionIfAndroidSafetyNetDeviceAttestationFailed' => fn(ParseNode $n) => $o->setAppActionIfAndroidSafetyNetDeviceAttestationFailed($n->getEnumValue(ManagedAppRemediationAction::class)),
            'appActionIfDeviceLockNotSet' => fn(ParseNode $n) => $o->setAppActionIfDeviceLockNotSet($n->getEnumValue(ManagedAppRemediationAction::class)),
            'appActionIfDevicePasscodeComplexityLessThanHigh' => fn(ParseNode $n) => $o->setAppActionIfDevicePasscodeComplexityLessThanHigh($n->getEnumValue(ManagedAppRemediationAction::class)),
            'appActionIfDevicePasscodeComplexityLessThanLow' => fn(ParseNode $n) => $o->setAppActionIfDevicePasscodeComplexityLessThanLow($n->getEnumValue(ManagedAppRemediationAction::class)),
            'appActionIfDevicePasscodeComplexityLessThanMedium' => fn(ParseNode $n) => $o->setAppActionIfDevicePasscodeComplexityLessThanMedium($n->getEnumValue(ManagedAppRemediationAction::class)),
            'appActionIfIosDeviceModelNotAllowed' => fn(ParseNode $n) => $o->setAppActionIfIosDeviceModelNotAllowed($n->getEnumValue(ManagedAppRemediationAction::class)),
            'appDataEncryptionType' => fn(ParseNode $n) => $o->setAppDataEncryptionType($n->getEnumValue(ManagedAppDataEncryptionType::class)),
            'apps' => fn(ParseNode $n) => $o->setApps($n->getCollectionOfObjectValues([ManagedMobileApp::class, 'createFromDiscriminatorValue'])),
            'biometricAuthenticationBlocked' => fn(ParseNode $n) => $o->setBiometricAuthenticationBlocked($n->getBooleanValue()),
            'blockAfterCompanyPortalUpdateDeferralInDays' => fn(ParseNode $n) => $o->setBlockAfterCompanyPortalUpdateDeferralInDays($n->getIntegerValue()),
            'connectToVpnOnLaunch' => fn(ParseNode $n) => $o->setConnectToVpnOnLaunch($n->getBooleanValue()),
            'customBrowserDisplayName' => fn(ParseNode $n) => $o->setCustomBrowserDisplayName($n->getStringValue()),
            'customBrowserPackageId' => fn(ParseNode $n) => $o->setCustomBrowserPackageId($n->getStringValue()),
            'customBrowserProtocol' => fn(ParseNode $n) => $o->setCustomBrowserProtocol($n->getStringValue()),
            'customDialerAppDisplayName' => fn(ParseNode $n) => $o->setCustomDialerAppDisplayName($n->getStringValue()),
            'customDialerAppPackageId' => fn(ParseNode $n) => $o->setCustomDialerAppPackageId($n->getStringValue()),
            'customDialerAppProtocol' => fn(ParseNode $n) => $o->setCustomDialerAppProtocol($n->getStringValue()),
            'customSettings' => fn(ParseNode $n) => $o->setCustomSettings($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'deployedAppCount' => fn(ParseNode $n) => $o->setDeployedAppCount($n->getIntegerValue()),
            'deploymentSummary' => fn(ParseNode $n) => $o->setDeploymentSummary($n->getObjectValue([ManagedAppPolicyDeploymentSummary::class, 'createFromDiscriminatorValue'])),
            'deviceLockRequired' => fn(ParseNode $n) => $o->setDeviceLockRequired($n->getBooleanValue()),
            'disableAppEncryptionIfDeviceEncryptionIsEnabled' => fn(ParseNode $n) => $o->setDisableAppEncryptionIfDeviceEncryptionIsEnabled($n->getBooleanValue()),
            'disableProtectionOfManagedOutboundOpenInData' => fn(ParseNode $n) => $o->setDisableProtectionOfManagedOutboundOpenInData($n->getBooleanValue()),
            'encryptAppData' => fn(ParseNode $n) => $o->setEncryptAppData($n->getBooleanValue()),
            'exemptedAppPackages' => fn(ParseNode $n) => $o->setExemptedAppPackages($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'exemptedAppProtocols' => fn(ParseNode $n) => $o->setExemptedAppProtocols($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'faceIdBlocked' => fn(ParseNode $n) => $o->setFaceIdBlocked($n->getBooleanValue()),
            'filterOpenInToOnlyManagedApps' => fn(ParseNode $n) => $o->setFilterOpenInToOnlyManagedApps($n->getBooleanValue()),
            'fingerprintAndBiometricEnabled' => fn(ParseNode $n) => $o->setFingerprintAndBiometricEnabled($n->getBooleanValue()),
            'messagingRedirectAppDisplayName' => fn(ParseNode $n) => $o->setMessagingRedirectAppDisplayName($n->getStringValue()),
            'messagingRedirectAppPackageId' => fn(ParseNode $n) => $o->setMessagingRedirectAppPackageId($n->getStringValue()),
            'messagingRedirectAppUrlScheme' => fn(ParseNode $n) => $o->setMessagingRedirectAppUrlScheme($n->getStringValue()),
            'minimumRequiredCompanyPortalVersion' => fn(ParseNode $n) => $o->setMinimumRequiredCompanyPortalVersion($n->getStringValue()),
            'minimumRequiredPatchVersion' => fn(ParseNode $n) => $o->setMinimumRequiredPatchVersion($n->getStringValue()),
            'minimumRequiredSdkVersion' => fn(ParseNode $n) => $o->setMinimumRequiredSdkVersion($n->getStringValue()),
            'minimumWarningCompanyPortalVersion' => fn(ParseNode $n) => $o->setMinimumWarningCompanyPortalVersion($n->getStringValue()),
            'minimumWarningPatchVersion' => fn(ParseNode $n) => $o->setMinimumWarningPatchVersion($n->getStringValue()),
            'minimumWarningSdkVersion' => fn(ParseNode $n) => $o->setMinimumWarningSdkVersion($n->getStringValue()),
            'minimumWipeCompanyPortalVersion' => fn(ParseNode $n) => $o->setMinimumWipeCompanyPortalVersion($n->getStringValue()),
            'minimumWipePatchVersion' => fn(ParseNode $n) => $o->setMinimumWipePatchVersion($n->getStringValue()),
            'minimumWipeSdkVersion' => fn(ParseNode $n) => $o->setMinimumWipeSdkVersion($n->getStringValue()),
            'protectInboundDataFromUnknownSources' => fn(ParseNode $n) => $o->setProtectInboundDataFromUnknownSources($n->getBooleanValue()),
            'requireClass3Biometrics' => fn(ParseNode $n) => $o->setRequireClass3Biometrics($n->getBooleanValue()),
            'requiredAndroidSafetyNetAppsVerificationType' => fn(ParseNode $n) => $o->setRequiredAndroidSafetyNetAppsVerificationType($n->getEnumValue(AndroidManagedAppSafetyNetAppsVerificationType::class)),
            'requiredAndroidSafetyNetDeviceAttestationType' => fn(ParseNode $n) => $o->setRequiredAndroidSafetyNetDeviceAttestationType($n->getEnumValue(AndroidManagedAppSafetyNetDeviceAttestationType::class)),
            'requiredAndroidSafetyNetEvaluationType' => fn(ParseNode $n) => $o->setRequiredAndroidSafetyNetEvaluationType($n->getEnumValue(AndroidManagedAppSafetyNetEvaluationType::class)),
            'requirePinAfterBiometricChange' => fn(ParseNode $n) => $o->setRequirePinAfterBiometricChange($n->getBooleanValue()),
            'screenCaptureBlocked' => fn(ParseNode $n) => $o->setScreenCaptureBlocked($n->getBooleanValue()),
            'thirdPartyKeyboardsBlocked' => fn(ParseNode $n) => $o->setThirdPartyKeyboardsBlocked($n->getBooleanValue()),
            'warnAfterCompanyPortalUpdateDeferralInDays' => fn(ParseNode $n) => $o->setWarnAfterCompanyPortalUpdateDeferralInDays($n->getIntegerValue()),
            'wipeAfterCompanyPortalUpdateDeferralInDays' => fn(ParseNode $n) => $o->setWipeAfterCompanyPortalUpdateDeferralInDays($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the filterOpenInToOnlyManagedApps property value. Defines if open-in operation is supported from the managed app to the filesharing locations selected. This setting only applies when AllowedOutboundDataTransferDestinations is set to ManagedApps and DisableProtectionOfManagedOutboundOpenInData is set to False. (iOS Only)
     * @return bool|null
    */
    public function getFilterOpenInToOnlyManagedApps(): ?bool {
        $val = $this->getBackingStore()->get('filterOpenInToOnlyManagedApps');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filterOpenInToOnlyManagedApps'");
    }

    /**
     * Gets the fingerprintAndBiometricEnabled property value. Indicate to the client to enable both biometrics and fingerprints for the app.
     * @return bool|null
    */
    public function getFingerprintAndBiometricEnabled(): ?bool {
        $val = $this->getBackingStore()->get('fingerprintAndBiometricEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fingerprintAndBiometricEnabled'");
    }

    /**
     * Gets the messagingRedirectAppDisplayName property value. When a specific app redirection is enforced by protectedMessagingRedirectAppType in an App Protection Policy, this value defines the app name which are allowed to be used.
     * @return string|null
    */
    public function getMessagingRedirectAppDisplayName(): ?string {
        $val = $this->getBackingStore()->get('messagingRedirectAppDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messagingRedirectAppDisplayName'");
    }

    /**
     * Gets the messagingRedirectAppPackageId property value. When a specific app redirection is enforced by protectedMessagingRedirectAppType in an App Protection Policy, this value defines the app package ids which are allowed to be used.
     * @return string|null
    */
    public function getMessagingRedirectAppPackageId(): ?string {
        $val = $this->getBackingStore()->get('messagingRedirectAppPackageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messagingRedirectAppPackageId'");
    }

    /**
     * Gets the messagingRedirectAppUrlScheme property value. When a specific app redirection is enforced by protectedMessagingRedirectAppType in an App Protection Policy, this value defines the app url redirect schemes which are allowed to be used.
     * @return string|null
    */
    public function getMessagingRedirectAppUrlScheme(): ?string {
        $val = $this->getBackingStore()->get('messagingRedirectAppUrlScheme');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messagingRedirectAppUrlScheme'");
    }

    /**
     * Gets the minimumRequiredCompanyPortalVersion property value. Minimum version of the Company portal that must be installed on the device or app access will be blocked
     * @return string|null
    */
    public function getMinimumRequiredCompanyPortalVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumRequiredCompanyPortalVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumRequiredCompanyPortalVersion'");
    }

    /**
     * Gets the minimumRequiredPatchVersion property value. Define the oldest required Android security patch level a user can have to gain secure access to the app. (Android only)
     * @return string|null
    */
    public function getMinimumRequiredPatchVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumRequiredPatchVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumRequiredPatchVersion'");
    }

    /**
     * Gets the minimumRequiredSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data. (iOS Only)
     * @return string|null
    */
    public function getMinimumRequiredSdkVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumRequiredSdkVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumRequiredSdkVersion'");
    }

    /**
     * Gets the minimumWarningCompanyPortalVersion property value. Minimum version of the Company portal that must be installed on the device or the user will receive a warning
     * @return string|null
    */
    public function getMinimumWarningCompanyPortalVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumWarningCompanyPortalVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumWarningCompanyPortalVersion'");
    }

    /**
     * Gets the minimumWarningPatchVersion property value. Define the oldest recommended Android security patch level a user can have for secure access to the app. (Android only)
     * @return string|null
    */
    public function getMinimumWarningPatchVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumWarningPatchVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumWarningPatchVersion'");
    }

    /**
     * Gets the minimumWarningSdkVersion property value. Versions less than the specified version will result in warning message on the managed app from accessing company data. (iOS only)
     * @return string|null
    */
    public function getMinimumWarningSdkVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumWarningSdkVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumWarningSdkVersion'");
    }

    /**
     * Gets the minimumWipeCompanyPortalVersion property value. Minimum version of the Company portal that must be installed on the device or the company data on the app will be wiped
     * @return string|null
    */
    public function getMinimumWipeCompanyPortalVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumWipeCompanyPortalVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumWipeCompanyPortalVersion'");
    }

    /**
     * Gets the minimumWipePatchVersion property value. Android security patch level  less than or equal to the specified value will wipe the managed app and the associated company data. (Android only)
     * @return string|null
    */
    public function getMinimumWipePatchVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumWipePatchVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumWipePatchVersion'");
    }

    /**
     * Gets the minimumWipeSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     * @return string|null
    */
    public function getMinimumWipeSdkVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumWipeSdkVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumWipeSdkVersion'");
    }

    /**
     * Gets the protectInboundDataFromUnknownSources property value. Protect incoming data from unknown source. This setting is only allowed to be True when AllowedInboundDataTransferSources is set to AllApps. (iOS Only)
     * @return bool|null
    */
    public function getProtectInboundDataFromUnknownSources(): ?bool {
        $val = $this->getBackingStore()->get('protectInboundDataFromUnknownSources');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protectInboundDataFromUnknownSources'");
    }

    /**
     * Gets the requireClass3Biometrics property value. Require user to apply Class 3 Biometrics on their Android device.
     * @return bool|null
    */
    public function getRequireClass3Biometrics(): ?bool {
        $val = $this->getBackingStore()->get('requireClass3Biometrics');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requireClass3Biometrics'");
    }

    /**
     * Gets the requiredAndroidSafetyNetAppsVerificationType property value. An admin enforced Android SafetyNet Device Attestation requirement on a managed app.
     * @return AndroidManagedAppSafetyNetAppsVerificationType|null
    */
    public function getRequiredAndroidSafetyNetAppsVerificationType(): ?AndroidManagedAppSafetyNetAppsVerificationType {
        $val = $this->getBackingStore()->get('requiredAndroidSafetyNetAppsVerificationType');
        if (is_null($val) || $val instanceof AndroidManagedAppSafetyNetAppsVerificationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requiredAndroidSafetyNetAppsVerificationType'");
    }

    /**
     * Gets the requiredAndroidSafetyNetDeviceAttestationType property value. An admin enforced Android SafetyNet Device Attestation requirement on a managed app.
     * @return AndroidManagedAppSafetyNetDeviceAttestationType|null
    */
    public function getRequiredAndroidSafetyNetDeviceAttestationType(): ?AndroidManagedAppSafetyNetDeviceAttestationType {
        $val = $this->getBackingStore()->get('requiredAndroidSafetyNetDeviceAttestationType');
        if (is_null($val) || $val instanceof AndroidManagedAppSafetyNetDeviceAttestationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requiredAndroidSafetyNetDeviceAttestationType'");
    }

    /**
     * Gets the requiredAndroidSafetyNetEvaluationType property value. An admin enforced Android SafetyNet evaluation type requirement on a managed app.
     * @return AndroidManagedAppSafetyNetEvaluationType|null
    */
    public function getRequiredAndroidSafetyNetEvaluationType(): ?AndroidManagedAppSafetyNetEvaluationType {
        $val = $this->getBackingStore()->get('requiredAndroidSafetyNetEvaluationType');
        if (is_null($val) || $val instanceof AndroidManagedAppSafetyNetEvaluationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requiredAndroidSafetyNetEvaluationType'");
    }

    /**
     * Gets the requirePinAfterBiometricChange property value. A PIN prompt will override biometric prompts if class 3 biometrics are updated on the device.
     * @return bool|null
    */
    public function getRequirePinAfterBiometricChange(): ?bool {
        $val = $this->getBackingStore()->get('requirePinAfterBiometricChange');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requirePinAfterBiometricChange'");
    }

    /**
     * Gets the screenCaptureBlocked property value. Indicates whether screen capture is blocked. (Android only)
     * @return bool|null
    */
    public function getScreenCaptureBlocked(): ?bool {
        $val = $this->getBackingStore()->get('screenCaptureBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'screenCaptureBlocked'");
    }

    /**
     * Gets the thirdPartyKeyboardsBlocked property value. Defines if third party keyboards are allowed while accessing a managed app. (iOS Only)
     * @return bool|null
    */
    public function getThirdPartyKeyboardsBlocked(): ?bool {
        $val = $this->getBackingStore()->get('thirdPartyKeyboardsBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'thirdPartyKeyboardsBlocked'");
    }

    /**
     * Gets the warnAfterCompanyPortalUpdateDeferralInDays property value. Maximum number of days Company Portal update can be deferred on the device or the user will receive the warning
     * @return int|null
    */
    public function getWarnAfterCompanyPortalUpdateDeferralInDays(): ?int {
        $val = $this->getBackingStore()->get('warnAfterCompanyPortalUpdateDeferralInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'warnAfterCompanyPortalUpdateDeferralInDays'");
    }

    /**
     * Gets the wipeAfterCompanyPortalUpdateDeferralInDays property value. Maximum number of days Company Portal update can be deferred on the device or the company data on the app will be wiped
     * @return int|null
    */
    public function getWipeAfterCompanyPortalUpdateDeferralInDays(): ?int {
        $val = $this->getBackingStore()->get('wipeAfterCompanyPortalUpdateDeferralInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wipeAfterCompanyPortalUpdateDeferralInDays'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('allowedAndroidDeviceManufacturers', $this->getAllowedAndroidDeviceManufacturers());
        $writer->writeCollectionOfPrimitiveValues('allowedAndroidDeviceModels', $this->getAllowedAndroidDeviceModels());
        $writer->writeStringValue('allowedIosDeviceModels', $this->getAllowedIosDeviceModels());
        $writer->writeBooleanValue('allowWidgetContentSync', $this->getAllowWidgetContentSync());
        $writer->writeEnumValue('appActionIfAccountIsClockedOut', $this->getAppActionIfAccountIsClockedOut());
        $writer->writeEnumValue('appActionIfAndroidDeviceManufacturerNotAllowed', $this->getAppActionIfAndroidDeviceManufacturerNotAllowed());
        $writer->writeEnumValue('appActionIfAndroidDeviceModelNotAllowed', $this->getAppActionIfAndroidDeviceModelNotAllowed());
        $writer->writeEnumValue('appActionIfAndroidSafetyNetAppsVerificationFailed', $this->getAppActionIfAndroidSafetyNetAppsVerificationFailed());
        $writer->writeEnumValue('appActionIfAndroidSafetyNetDeviceAttestationFailed', $this->getAppActionIfAndroidSafetyNetDeviceAttestationFailed());
        $writer->writeEnumValue('appActionIfDeviceLockNotSet', $this->getAppActionIfDeviceLockNotSet());
        $writer->writeEnumValue('appActionIfDevicePasscodeComplexityLessThanHigh', $this->getAppActionIfDevicePasscodeComplexityLessThanHigh());
        $writer->writeEnumValue('appActionIfDevicePasscodeComplexityLessThanLow', $this->getAppActionIfDevicePasscodeComplexityLessThanLow());
        $writer->writeEnumValue('appActionIfDevicePasscodeComplexityLessThanMedium', $this->getAppActionIfDevicePasscodeComplexityLessThanMedium());
        $writer->writeEnumValue('appActionIfIosDeviceModelNotAllowed', $this->getAppActionIfIosDeviceModelNotAllowed());
        $writer->writeEnumValue('appDataEncryptionType', $this->getAppDataEncryptionType());
        $writer->writeCollectionOfObjectValues('apps', $this->getApps());
        $writer->writeBooleanValue('biometricAuthenticationBlocked', $this->getBiometricAuthenticationBlocked());
        $writer->writeIntegerValue('blockAfterCompanyPortalUpdateDeferralInDays', $this->getBlockAfterCompanyPortalUpdateDeferralInDays());
        $writer->writeBooleanValue('connectToVpnOnLaunch', $this->getConnectToVpnOnLaunch());
        $writer->writeStringValue('customBrowserDisplayName', $this->getCustomBrowserDisplayName());
        $writer->writeStringValue('customBrowserPackageId', $this->getCustomBrowserPackageId());
        $writer->writeStringValue('customBrowserProtocol', $this->getCustomBrowserProtocol());
        $writer->writeStringValue('customDialerAppDisplayName', $this->getCustomDialerAppDisplayName());
        $writer->writeStringValue('customDialerAppPackageId', $this->getCustomDialerAppPackageId());
        $writer->writeStringValue('customDialerAppProtocol', $this->getCustomDialerAppProtocol());
        $writer->writeCollectionOfObjectValues('customSettings', $this->getCustomSettings());
        $writer->writeIntegerValue('deployedAppCount', $this->getDeployedAppCount());
        $writer->writeObjectValue('deploymentSummary', $this->getDeploymentSummary());
        $writer->writeBooleanValue('deviceLockRequired', $this->getDeviceLockRequired());
        $writer->writeBooleanValue('disableAppEncryptionIfDeviceEncryptionIsEnabled', $this->getDisableAppEncryptionIfDeviceEncryptionIsEnabled());
        $writer->writeBooleanValue('disableProtectionOfManagedOutboundOpenInData', $this->getDisableProtectionOfManagedOutboundOpenInData());
        $writer->writeBooleanValue('encryptAppData', $this->getEncryptAppData());
        $writer->writeCollectionOfObjectValues('exemptedAppPackages', $this->getExemptedAppPackages());
        $writer->writeCollectionOfObjectValues('exemptedAppProtocols', $this->getExemptedAppProtocols());
        $writer->writeBooleanValue('faceIdBlocked', $this->getFaceIdBlocked());
        $writer->writeBooleanValue('filterOpenInToOnlyManagedApps', $this->getFilterOpenInToOnlyManagedApps());
        $writer->writeBooleanValue('fingerprintAndBiometricEnabled', $this->getFingerprintAndBiometricEnabled());
        $writer->writeStringValue('messagingRedirectAppDisplayName', $this->getMessagingRedirectAppDisplayName());
        $writer->writeStringValue('messagingRedirectAppPackageId', $this->getMessagingRedirectAppPackageId());
        $writer->writeStringValue('messagingRedirectAppUrlScheme', $this->getMessagingRedirectAppUrlScheme());
        $writer->writeStringValue('minimumRequiredCompanyPortalVersion', $this->getMinimumRequiredCompanyPortalVersion());
        $writer->writeStringValue('minimumRequiredPatchVersion', $this->getMinimumRequiredPatchVersion());
        $writer->writeStringValue('minimumRequiredSdkVersion', $this->getMinimumRequiredSdkVersion());
        $writer->writeStringValue('minimumWarningCompanyPortalVersion', $this->getMinimumWarningCompanyPortalVersion());
        $writer->writeStringValue('minimumWarningPatchVersion', $this->getMinimumWarningPatchVersion());
        $writer->writeStringValue('minimumWarningSdkVersion', $this->getMinimumWarningSdkVersion());
        $writer->writeStringValue('minimumWipeCompanyPortalVersion', $this->getMinimumWipeCompanyPortalVersion());
        $writer->writeStringValue('minimumWipePatchVersion', $this->getMinimumWipePatchVersion());
        $writer->writeStringValue('minimumWipeSdkVersion', $this->getMinimumWipeSdkVersion());
        $writer->writeBooleanValue('protectInboundDataFromUnknownSources', $this->getProtectInboundDataFromUnknownSources());
        $writer->writeBooleanValue('requireClass3Biometrics', $this->getRequireClass3Biometrics());
        $writer->writeEnumValue('requiredAndroidSafetyNetAppsVerificationType', $this->getRequiredAndroidSafetyNetAppsVerificationType());
        $writer->writeEnumValue('requiredAndroidSafetyNetDeviceAttestationType', $this->getRequiredAndroidSafetyNetDeviceAttestationType());
        $writer->writeEnumValue('requiredAndroidSafetyNetEvaluationType', $this->getRequiredAndroidSafetyNetEvaluationType());
        $writer->writeBooleanValue('requirePinAfterBiometricChange', $this->getRequirePinAfterBiometricChange());
        $writer->writeBooleanValue('screenCaptureBlocked', $this->getScreenCaptureBlocked());
        $writer->writeBooleanValue('thirdPartyKeyboardsBlocked', $this->getThirdPartyKeyboardsBlocked());
        $writer->writeIntegerValue('warnAfterCompanyPortalUpdateDeferralInDays', $this->getWarnAfterCompanyPortalUpdateDeferralInDays());
        $writer->writeIntegerValue('wipeAfterCompanyPortalUpdateDeferralInDays', $this->getWipeAfterCompanyPortalUpdateDeferralInDays());
    }

    /**
     * Sets the allowedAndroidDeviceManufacturers property value. Semicolon seperated list of device manufacturers allowed, as a string, for the managed app to work. (Android only)
     * @param string|null $value Value to set for the allowedAndroidDeviceManufacturers property.
    */
    public function setAllowedAndroidDeviceManufacturers(?string $value): void {
        $this->getBackingStore()->set('allowedAndroidDeviceManufacturers', $value);
    }

    /**
     * Sets the allowedAndroidDeviceModels property value. List of device models allowed, as a string, for the managed app to work. (Android Only)
     * @param array<string>|null $value Value to set for the allowedAndroidDeviceModels property.
    */
    public function setAllowedAndroidDeviceModels(?array $value): void {
        $this->getBackingStore()->set('allowedAndroidDeviceModels', $value);
    }

    /**
     * Sets the allowedIosDeviceModels property value. Semicolon seperated list of device models allowed, as a string, for the managed app to work. (iOS Only)
     * @param string|null $value Value to set for the allowedIosDeviceModels property.
    */
    public function setAllowedIosDeviceModels(?string $value): void {
        $this->getBackingStore()->set('allowedIosDeviceModels', $value);
    }

    /**
     * Sets the allowWidgetContentSync property value. Indicates  if content sync for widgets is allowed for iOS on App Protection Policies
     * @param bool|null $value Value to set for the allowWidgetContentSync property.
    */
    public function setAllowWidgetContentSync(?bool $value): void {
        $this->getBackingStore()->set('allowWidgetContentSync', $value);
    }

    /**
     * Sets the appActionIfAccountIsClockedOut property value. Defines a managed app behavior, either block or warn, if the user is clocked out (non-working time). Possible values are: block, wipe, warn, blockWhenSettingIsSupported.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfAccountIsClockedOut property.
    */
    public function setAppActionIfAccountIsClockedOut(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfAccountIsClockedOut', $value);
    }

    /**
     * Sets the appActionIfAndroidDeviceManufacturerNotAllowed property value. An admin initiated action to be applied on a managed app.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfAndroidDeviceManufacturerNotAllowed property.
    */
    public function setAppActionIfAndroidDeviceManufacturerNotAllowed(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfAndroidDeviceManufacturerNotAllowed', $value);
    }

    /**
     * Sets the appActionIfAndroidDeviceModelNotAllowed property value. An admin initiated action to be applied on a managed app.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfAndroidDeviceModelNotAllowed property.
    */
    public function setAppActionIfAndroidDeviceModelNotAllowed(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfAndroidDeviceModelNotAllowed', $value);
    }

    /**
     * Sets the appActionIfAndroidSafetyNetAppsVerificationFailed property value. An admin initiated action to be applied on a managed app.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfAndroidSafetyNetAppsVerificationFailed property.
    */
    public function setAppActionIfAndroidSafetyNetAppsVerificationFailed(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfAndroidSafetyNetAppsVerificationFailed', $value);
    }

    /**
     * Sets the appActionIfAndroidSafetyNetDeviceAttestationFailed property value. An admin initiated action to be applied on a managed app.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfAndroidSafetyNetDeviceAttestationFailed property.
    */
    public function setAppActionIfAndroidSafetyNetDeviceAttestationFailed(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfAndroidSafetyNetDeviceAttestationFailed', $value);
    }

    /**
     * Sets the appActionIfDeviceLockNotSet property value. An admin initiated action to be applied on a managed app.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfDeviceLockNotSet property.
    */
    public function setAppActionIfDeviceLockNotSet(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfDeviceLockNotSet', $value);
    }

    /**
     * Sets the appActionIfDevicePasscodeComplexityLessThanHigh property value. If the device does not have a passcode of high complexity or higher, trigger the stored action. Possible values are: block, wipe, warn, blockWhenSettingIsSupported.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfDevicePasscodeComplexityLessThanHigh property.
    */
    public function setAppActionIfDevicePasscodeComplexityLessThanHigh(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfDevicePasscodeComplexityLessThanHigh', $value);
    }

    /**
     * Sets the appActionIfDevicePasscodeComplexityLessThanLow property value. If the device does not have a passcode of low complexity or higher, trigger the stored action. Possible values are: block, wipe, warn, blockWhenSettingIsSupported.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfDevicePasscodeComplexityLessThanLow property.
    */
    public function setAppActionIfDevicePasscodeComplexityLessThanLow(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfDevicePasscodeComplexityLessThanLow', $value);
    }

    /**
     * Sets the appActionIfDevicePasscodeComplexityLessThanMedium property value. If the device does not have a passcode of medium complexity or higher, trigger the stored action. Possible values are: block, wipe, warn, blockWhenSettingIsSupported.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfDevicePasscodeComplexityLessThanMedium property.
    */
    public function setAppActionIfDevicePasscodeComplexityLessThanMedium(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfDevicePasscodeComplexityLessThanMedium', $value);
    }

    /**
     * Sets the appActionIfIosDeviceModelNotAllowed property value. An admin initiated action to be applied on a managed app.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfIosDeviceModelNotAllowed property.
    */
    public function setAppActionIfIosDeviceModelNotAllowed(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfIosDeviceModelNotAllowed', $value);
    }

    /**
     * Sets the appDataEncryptionType property value. Represents the level to which app data is encrypted for managed apps
     * @param ManagedAppDataEncryptionType|null $value Value to set for the appDataEncryptionType property.
    */
    public function setAppDataEncryptionType(?ManagedAppDataEncryptionType $value): void {
        $this->getBackingStore()->set('appDataEncryptionType', $value);
    }

    /**
     * Sets the apps property value. List of apps to which the policy is deployed.
     * @param array<ManagedMobileApp>|null $value Value to set for the apps property.
    */
    public function setApps(?array $value): void {
        $this->getBackingStore()->set('apps', $value);
    }

    /**
     * Sets the biometricAuthenticationBlocked property value. Indicates whether use of the biometric authentication is allowed in place of a pin if PinRequired is set to True. (Android Only)
     * @param bool|null $value Value to set for the biometricAuthenticationBlocked property.
    */
    public function setBiometricAuthenticationBlocked(?bool $value): void {
        $this->getBackingStore()->set('biometricAuthenticationBlocked', $value);
    }

    /**
     * Sets the blockAfterCompanyPortalUpdateDeferralInDays property value. Maximum number of days Company Portal update can be deferred on the device or app access will be blocked.
     * @param int|null $value Value to set for the blockAfterCompanyPortalUpdateDeferralInDays property.
    */
    public function setBlockAfterCompanyPortalUpdateDeferralInDays(?int $value): void {
        $this->getBackingStore()->set('blockAfterCompanyPortalUpdateDeferralInDays', $value);
    }

    /**
     * Sets the connectToVpnOnLaunch property value. Whether the app should connect to the configured VPN on launch (Android only).
     * @param bool|null $value Value to set for the connectToVpnOnLaunch property.
    */
    public function setConnectToVpnOnLaunch(?bool $value): void {
        $this->getBackingStore()->set('connectToVpnOnLaunch', $value);
    }

    /**
     * Sets the customBrowserDisplayName property value. Friendly name of the preferred custom browser to open weblink on Android. (Android only)
     * @param string|null $value Value to set for the customBrowserDisplayName property.
    */
    public function setCustomBrowserDisplayName(?string $value): void {
        $this->getBackingStore()->set('customBrowserDisplayName', $value);
    }

    /**
     * Sets the customBrowserPackageId property value. Unique identifier of a custom browser to open weblink on Android. (Android only)
     * @param string|null $value Value to set for the customBrowserPackageId property.
    */
    public function setCustomBrowserPackageId(?string $value): void {
        $this->getBackingStore()->set('customBrowserPackageId', $value);
    }

    /**
     * Sets the customBrowserProtocol property value. A custom browser protocol to open weblink on iOS. (iOS only)
     * @param string|null $value Value to set for the customBrowserProtocol property.
    */
    public function setCustomBrowserProtocol(?string $value): void {
        $this->getBackingStore()->set('customBrowserProtocol', $value);
    }

    /**
     * Sets the customDialerAppDisplayName property value. Friendly name of a custom dialer app to click-to-open a phone number on Android.
     * @param string|null $value Value to set for the customDialerAppDisplayName property.
    */
    public function setCustomDialerAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('customDialerAppDisplayName', $value);
    }

    /**
     * Sets the customDialerAppPackageId property value. PackageId of a custom dialer app to click-to-open a phone number on Android.
     * @param string|null $value Value to set for the customDialerAppPackageId property.
    */
    public function setCustomDialerAppPackageId(?string $value): void {
        $this->getBackingStore()->set('customDialerAppPackageId', $value);
    }

    /**
     * Sets the customDialerAppProtocol property value. Protocol of a custom dialer app to click-to-open a phone number on iOS, for example, skype:.
     * @param string|null $value Value to set for the customDialerAppProtocol property.
    */
    public function setCustomDialerAppProtocol(?string $value): void {
        $this->getBackingStore()->set('customDialerAppProtocol', $value);
    }

    /**
     * Sets the customSettings property value. A set of string key and string value pairs to be sent to the affected users, unalterned by this service
     * @param array<KeyValuePair>|null $value Value to set for the customSettings property.
    */
    public function setCustomSettings(?array $value): void {
        $this->getBackingStore()->set('customSettings', $value);
    }

    /**
     * Sets the deployedAppCount property value. Count of apps to which the current policy is deployed.
     * @param int|null $value Value to set for the deployedAppCount property.
    */
    public function setDeployedAppCount(?int $value): void {
        $this->getBackingStore()->set('deployedAppCount', $value);
    }

    /**
     * Sets the deploymentSummary property value. Navigation property to deployment summary of the configuration.
     * @param ManagedAppPolicyDeploymentSummary|null $value Value to set for the deploymentSummary property.
    */
    public function setDeploymentSummary(?ManagedAppPolicyDeploymentSummary $value): void {
        $this->getBackingStore()->set('deploymentSummary', $value);
    }

    /**
     * Sets the deviceLockRequired property value. Defines if any kind of lock must be required on device. (android only)
     * @param bool|null $value Value to set for the deviceLockRequired property.
    */
    public function setDeviceLockRequired(?bool $value): void {
        $this->getBackingStore()->set('deviceLockRequired', $value);
    }

    /**
     * Sets the disableAppEncryptionIfDeviceEncryptionIsEnabled property value. When this setting is enabled, app level encryption is disabled if device level encryption is enabled. (Android only)
     * @param bool|null $value Value to set for the disableAppEncryptionIfDeviceEncryptionIsEnabled property.
    */
    public function setDisableAppEncryptionIfDeviceEncryptionIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('disableAppEncryptionIfDeviceEncryptionIsEnabled', $value);
    }

    /**
     * Sets the disableProtectionOfManagedOutboundOpenInData property value. Disable protection of data transferred to other apps through IOS OpenIn option. This setting is only allowed to be True when AllowedOutboundDataTransferDestinations is set to ManagedApps. (iOS Only)
     * @param bool|null $value Value to set for the disableProtectionOfManagedOutboundOpenInData property.
    */
    public function setDisableProtectionOfManagedOutboundOpenInData(?bool $value): void {
        $this->getBackingStore()->set('disableProtectionOfManagedOutboundOpenInData', $value);
    }

    /**
     * Sets the encryptAppData property value. Indicates whether managed-app data should be encrypted. (Android only)
     * @param bool|null $value Value to set for the encryptAppData property.
    */
    public function setEncryptAppData(?bool $value): void {
        $this->getBackingStore()->set('encryptAppData', $value);
    }

    /**
     * Sets the exemptedAppPackages property value. Android App packages in this list will be exempt from the policy and will be able to receive data from managed apps. (Android only)
     * @param array<KeyValuePair>|null $value Value to set for the exemptedAppPackages property.
    */
    public function setExemptedAppPackages(?array $value): void {
        $this->getBackingStore()->set('exemptedAppPackages', $value);
    }

    /**
     * Sets the exemptedAppProtocols property value. iOS Apps in this list will be exempt from the policy and will be able to receive data from managed apps. (iOS Only)
     * @param array<KeyValuePair>|null $value Value to set for the exemptedAppProtocols property.
    */
    public function setExemptedAppProtocols(?array $value): void {
        $this->getBackingStore()->set('exemptedAppProtocols', $value);
    }

    /**
     * Sets the faceIdBlocked property value. Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True. (iOS Only)
     * @param bool|null $value Value to set for the faceIdBlocked property.
    */
    public function setFaceIdBlocked(?bool $value): void {
        $this->getBackingStore()->set('faceIdBlocked', $value);
    }

    /**
     * Sets the filterOpenInToOnlyManagedApps property value. Defines if open-in operation is supported from the managed app to the filesharing locations selected. This setting only applies when AllowedOutboundDataTransferDestinations is set to ManagedApps and DisableProtectionOfManagedOutboundOpenInData is set to False. (iOS Only)
     * @param bool|null $value Value to set for the filterOpenInToOnlyManagedApps property.
    */
    public function setFilterOpenInToOnlyManagedApps(?bool $value): void {
        $this->getBackingStore()->set('filterOpenInToOnlyManagedApps', $value);
    }

    /**
     * Sets the fingerprintAndBiometricEnabled property value. Indicate to the client to enable both biometrics and fingerprints for the app.
     * @param bool|null $value Value to set for the fingerprintAndBiometricEnabled property.
    */
    public function setFingerprintAndBiometricEnabled(?bool $value): void {
        $this->getBackingStore()->set('fingerprintAndBiometricEnabled', $value);
    }

    /**
     * Sets the messagingRedirectAppDisplayName property value. When a specific app redirection is enforced by protectedMessagingRedirectAppType in an App Protection Policy, this value defines the app name which are allowed to be used.
     * @param string|null $value Value to set for the messagingRedirectAppDisplayName property.
    */
    public function setMessagingRedirectAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('messagingRedirectAppDisplayName', $value);
    }

    /**
     * Sets the messagingRedirectAppPackageId property value. When a specific app redirection is enforced by protectedMessagingRedirectAppType in an App Protection Policy, this value defines the app package ids which are allowed to be used.
     * @param string|null $value Value to set for the messagingRedirectAppPackageId property.
    */
    public function setMessagingRedirectAppPackageId(?string $value): void {
        $this->getBackingStore()->set('messagingRedirectAppPackageId', $value);
    }

    /**
     * Sets the messagingRedirectAppUrlScheme property value. When a specific app redirection is enforced by protectedMessagingRedirectAppType in an App Protection Policy, this value defines the app url redirect schemes which are allowed to be used.
     * @param string|null $value Value to set for the messagingRedirectAppUrlScheme property.
    */
    public function setMessagingRedirectAppUrlScheme(?string $value): void {
        $this->getBackingStore()->set('messagingRedirectAppUrlScheme', $value);
    }

    /**
     * Sets the minimumRequiredCompanyPortalVersion property value. Minimum version of the Company portal that must be installed on the device or app access will be blocked
     * @param string|null $value Value to set for the minimumRequiredCompanyPortalVersion property.
    */
    public function setMinimumRequiredCompanyPortalVersion(?string $value): void {
        $this->getBackingStore()->set('minimumRequiredCompanyPortalVersion', $value);
    }

    /**
     * Sets the minimumRequiredPatchVersion property value. Define the oldest required Android security patch level a user can have to gain secure access to the app. (Android only)
     * @param string|null $value Value to set for the minimumRequiredPatchVersion property.
    */
    public function setMinimumRequiredPatchVersion(?string $value): void {
        $this->getBackingStore()->set('minimumRequiredPatchVersion', $value);
    }

    /**
     * Sets the minimumRequiredSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data. (iOS Only)
     * @param string|null $value Value to set for the minimumRequiredSdkVersion property.
    */
    public function setMinimumRequiredSdkVersion(?string $value): void {
        $this->getBackingStore()->set('minimumRequiredSdkVersion', $value);
    }

    /**
     * Sets the minimumWarningCompanyPortalVersion property value. Minimum version of the Company portal that must be installed on the device or the user will receive a warning
     * @param string|null $value Value to set for the minimumWarningCompanyPortalVersion property.
    */
    public function setMinimumWarningCompanyPortalVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWarningCompanyPortalVersion', $value);
    }

    /**
     * Sets the minimumWarningPatchVersion property value. Define the oldest recommended Android security patch level a user can have for secure access to the app. (Android only)
     * @param string|null $value Value to set for the minimumWarningPatchVersion property.
    */
    public function setMinimumWarningPatchVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWarningPatchVersion', $value);
    }

    /**
     * Sets the minimumWarningSdkVersion property value. Versions less than the specified version will result in warning message on the managed app from accessing company data. (iOS only)
     * @param string|null $value Value to set for the minimumWarningSdkVersion property.
    */
    public function setMinimumWarningSdkVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWarningSdkVersion', $value);
    }

    /**
     * Sets the minimumWipeCompanyPortalVersion property value. Minimum version of the Company portal that must be installed on the device or the company data on the app will be wiped
     * @param string|null $value Value to set for the minimumWipeCompanyPortalVersion property.
    */
    public function setMinimumWipeCompanyPortalVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWipeCompanyPortalVersion', $value);
    }

    /**
     * Sets the minimumWipePatchVersion property value. Android security patch level  less than or equal to the specified value will wipe the managed app and the associated company data. (Android only)
     * @param string|null $value Value to set for the minimumWipePatchVersion property.
    */
    public function setMinimumWipePatchVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWipePatchVersion', $value);
    }

    /**
     * Sets the minimumWipeSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     * @param string|null $value Value to set for the minimumWipeSdkVersion property.
    */
    public function setMinimumWipeSdkVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWipeSdkVersion', $value);
    }

    /**
     * Sets the protectInboundDataFromUnknownSources property value. Protect incoming data from unknown source. This setting is only allowed to be True when AllowedInboundDataTransferSources is set to AllApps. (iOS Only)
     * @param bool|null $value Value to set for the protectInboundDataFromUnknownSources property.
    */
    public function setProtectInboundDataFromUnknownSources(?bool $value): void {
        $this->getBackingStore()->set('protectInboundDataFromUnknownSources', $value);
    }

    /**
     * Sets the requireClass3Biometrics property value. Require user to apply Class 3 Biometrics on their Android device.
     * @param bool|null $value Value to set for the requireClass3Biometrics property.
    */
    public function setRequireClass3Biometrics(?bool $value): void {
        $this->getBackingStore()->set('requireClass3Biometrics', $value);
    }

    /**
     * Sets the requiredAndroidSafetyNetAppsVerificationType property value. An admin enforced Android SafetyNet Device Attestation requirement on a managed app.
     * @param AndroidManagedAppSafetyNetAppsVerificationType|null $value Value to set for the requiredAndroidSafetyNetAppsVerificationType property.
    */
    public function setRequiredAndroidSafetyNetAppsVerificationType(?AndroidManagedAppSafetyNetAppsVerificationType $value): void {
        $this->getBackingStore()->set('requiredAndroidSafetyNetAppsVerificationType', $value);
    }

    /**
     * Sets the requiredAndroidSafetyNetDeviceAttestationType property value. An admin enforced Android SafetyNet Device Attestation requirement on a managed app.
     * @param AndroidManagedAppSafetyNetDeviceAttestationType|null $value Value to set for the requiredAndroidSafetyNetDeviceAttestationType property.
    */
    public function setRequiredAndroidSafetyNetDeviceAttestationType(?AndroidManagedAppSafetyNetDeviceAttestationType $value): void {
        $this->getBackingStore()->set('requiredAndroidSafetyNetDeviceAttestationType', $value);
    }

    /**
     * Sets the requiredAndroidSafetyNetEvaluationType property value. An admin enforced Android SafetyNet evaluation type requirement on a managed app.
     * @param AndroidManagedAppSafetyNetEvaluationType|null $value Value to set for the requiredAndroidSafetyNetEvaluationType property.
    */
    public function setRequiredAndroidSafetyNetEvaluationType(?AndroidManagedAppSafetyNetEvaluationType $value): void {
        $this->getBackingStore()->set('requiredAndroidSafetyNetEvaluationType', $value);
    }

    /**
     * Sets the requirePinAfterBiometricChange property value. A PIN prompt will override biometric prompts if class 3 biometrics are updated on the device.
     * @param bool|null $value Value to set for the requirePinAfterBiometricChange property.
    */
    public function setRequirePinAfterBiometricChange(?bool $value): void {
        $this->getBackingStore()->set('requirePinAfterBiometricChange', $value);
    }

    /**
     * Sets the screenCaptureBlocked property value. Indicates whether screen capture is blocked. (Android only)
     * @param bool|null $value Value to set for the screenCaptureBlocked property.
    */
    public function setScreenCaptureBlocked(?bool $value): void {
        $this->getBackingStore()->set('screenCaptureBlocked', $value);
    }

    /**
     * Sets the thirdPartyKeyboardsBlocked property value. Defines if third party keyboards are allowed while accessing a managed app. (iOS Only)
     * @param bool|null $value Value to set for the thirdPartyKeyboardsBlocked property.
    */
    public function setThirdPartyKeyboardsBlocked(?bool $value): void {
        $this->getBackingStore()->set('thirdPartyKeyboardsBlocked', $value);
    }

    /**
     * Sets the warnAfterCompanyPortalUpdateDeferralInDays property value. Maximum number of days Company Portal update can be deferred on the device or the user will receive the warning
     * @param int|null $value Value to set for the warnAfterCompanyPortalUpdateDeferralInDays property.
    */
    public function setWarnAfterCompanyPortalUpdateDeferralInDays(?int $value): void {
        $this->getBackingStore()->set('warnAfterCompanyPortalUpdateDeferralInDays', $value);
    }

    /**
     * Sets the wipeAfterCompanyPortalUpdateDeferralInDays property value. Maximum number of days Company Portal update can be deferred on the device or the company data on the app will be wiped
     * @param int|null $value Value to set for the wipeAfterCompanyPortalUpdateDeferralInDays property.
    */
    public function setWipeAfterCompanyPortalUpdateDeferralInDays(?int $value): void {
        $this->getBackingStore()->set('wipeAfterCompanyPortalUpdateDeferralInDays', $value);
    }

}
