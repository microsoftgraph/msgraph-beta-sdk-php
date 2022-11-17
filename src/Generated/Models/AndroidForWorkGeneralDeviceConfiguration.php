<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidForWorkGeneralDeviceConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new AndroidForWorkGeneralDeviceConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidForWorkGeneralDeviceConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidForWorkGeneralDeviceConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidForWorkGeneralDeviceConfiguration {
        return new AndroidForWorkGeneralDeviceConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'passwordBlockFaceUnlock' => fn(ParseNode $n) => $o->setPasswordBlockFaceUnlock($n->getBooleanValue()),
            'passwordBlockFingerprintUnlock' => fn(ParseNode $n) => $o->setPasswordBlockFingerprintUnlock($n->getBooleanValue()),
            'passwordBlockIrisUnlock' => fn(ParseNode $n) => $o->setPasswordBlockIrisUnlock($n->getBooleanValue()),
            'passwordBlockTrustAgents' => fn(ParseNode $n) => $o->setPasswordBlockTrustAgents($n->getBooleanValue()),
            'passwordExpirationDays' => fn(ParseNode $n) => $o->setPasswordExpirationDays($n->getIntegerValue()),
            'passwordMinimumLength' => fn(ParseNode $n) => $o->setPasswordMinimumLength($n->getIntegerValue()),
            'passwordMinutesOfInactivityBeforeScreenTimeout' => fn(ParseNode $n) => $o->setPasswordMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()),
            'passwordPreviousPasswordBlockCount' => fn(ParseNode $n) => $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()),
            'passwordRequiredType' => fn(ParseNode $n) => $o->setPasswordRequiredType($n->getEnumValue(AndroidForWorkRequiredPasswordType::class)),
            'passwordSignInFailureCountBeforeFactoryReset' => fn(ParseNode $n) => $o->setPasswordSignInFailureCountBeforeFactoryReset($n->getIntegerValue()),
            'requiredPasswordComplexity' => fn(ParseNode $n) => $o->setRequiredPasswordComplexity($n->getEnumValue(AndroidRequiredPasswordComplexity::class)),
            'securityRequireVerifyApps' => fn(ParseNode $n) => $o->setSecurityRequireVerifyApps($n->getBooleanValue()),
            'vpnAlwaysOnPackageIdentifier' => fn(ParseNode $n) => $o->setVpnAlwaysOnPackageIdentifier($n->getStringValue()),
            'vpnEnableAlwaysOnLockdownMode' => fn(ParseNode $n) => $o->setVpnEnableAlwaysOnLockdownMode($n->getBooleanValue()),
            'workProfileAllowWidgets' => fn(ParseNode $n) => $o->setWorkProfileAllowWidgets($n->getBooleanValue()),
            'workProfileBlockAddingAccounts' => fn(ParseNode $n) => $o->setWorkProfileBlockAddingAccounts($n->getBooleanValue()),
            'workProfileBlockCamera' => fn(ParseNode $n) => $o->setWorkProfileBlockCamera($n->getBooleanValue()),
            'workProfileBlockCrossProfileCallerId' => fn(ParseNode $n) => $o->setWorkProfileBlockCrossProfileCallerId($n->getBooleanValue()),
            'workProfileBlockCrossProfileContactsSearch' => fn(ParseNode $n) => $o->setWorkProfileBlockCrossProfileContactsSearch($n->getBooleanValue()),
            'workProfileBlockCrossProfileCopyPaste' => fn(ParseNode $n) => $o->setWorkProfileBlockCrossProfileCopyPaste($n->getBooleanValue()),
            'workProfileBlockNotificationsWhileDeviceLocked' => fn(ParseNode $n) => $o->setWorkProfileBlockNotificationsWhileDeviceLocked($n->getBooleanValue()),
            'workProfileBlockPersonalAppInstallsFromUnknownSources' => fn(ParseNode $n) => $o->setWorkProfileBlockPersonalAppInstallsFromUnknownSources($n->getBooleanValue()),
            'workProfileBlockScreenCapture' => fn(ParseNode $n) => $o->setWorkProfileBlockScreenCapture($n->getBooleanValue()),
            'workProfileBluetoothEnableContactSharing' => fn(ParseNode $n) => $o->setWorkProfileBluetoothEnableContactSharing($n->getBooleanValue()),
            'workProfileDataSharingType' => fn(ParseNode $n) => $o->setWorkProfileDataSharingType($n->getEnumValue(AndroidForWorkCrossProfileDataSharingType::class)),
            'workProfileDefaultAppPermissionPolicy' => fn(ParseNode $n) => $o->setWorkProfileDefaultAppPermissionPolicy($n->getEnumValue(AndroidForWorkDefaultAppPermissionPolicyType::class)),
            'workProfilePasswordBlockFaceUnlock' => fn(ParseNode $n) => $o->setWorkProfilePasswordBlockFaceUnlock($n->getBooleanValue()),
            'workProfilePasswordBlockFingerprintUnlock' => fn(ParseNode $n) => $o->setWorkProfilePasswordBlockFingerprintUnlock($n->getBooleanValue()),
            'workProfilePasswordBlockIrisUnlock' => fn(ParseNode $n) => $o->setWorkProfilePasswordBlockIrisUnlock($n->getBooleanValue()),
            'workProfilePasswordBlockTrustAgents' => fn(ParseNode $n) => $o->setWorkProfilePasswordBlockTrustAgents($n->getBooleanValue()),
            'workProfilePasswordExpirationDays' => fn(ParseNode $n) => $o->setWorkProfilePasswordExpirationDays($n->getIntegerValue()),
            'workProfilePasswordMinimumLength' => fn(ParseNode $n) => $o->setWorkProfilePasswordMinimumLength($n->getIntegerValue()),
            'workProfilePasswordMinLetterCharacters' => fn(ParseNode $n) => $o->setWorkProfilePasswordMinLetterCharacters($n->getIntegerValue()),
            'workProfilePasswordMinLowerCaseCharacters' => fn(ParseNode $n) => $o->setWorkProfilePasswordMinLowerCaseCharacters($n->getIntegerValue()),
            'workProfilePasswordMinNonLetterCharacters' => fn(ParseNode $n) => $o->setWorkProfilePasswordMinNonLetterCharacters($n->getIntegerValue()),
            'workProfilePasswordMinNumericCharacters' => fn(ParseNode $n) => $o->setWorkProfilePasswordMinNumericCharacters($n->getIntegerValue()),
            'workProfilePasswordMinSymbolCharacters' => fn(ParseNode $n) => $o->setWorkProfilePasswordMinSymbolCharacters($n->getIntegerValue()),
            'workProfilePasswordMinUpperCaseCharacters' => fn(ParseNode $n) => $o->setWorkProfilePasswordMinUpperCaseCharacters($n->getIntegerValue()),
            'workProfilePasswordMinutesOfInactivityBeforeScreenTimeout' => fn(ParseNode $n) => $o->setWorkProfilePasswordMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()),
            'workProfilePasswordPreviousPasswordBlockCount' => fn(ParseNode $n) => $o->setWorkProfilePasswordPreviousPasswordBlockCount($n->getIntegerValue()),
            'workProfilePasswordRequiredType' => fn(ParseNode $n) => $o->setWorkProfilePasswordRequiredType($n->getEnumValue(AndroidForWorkRequiredPasswordType::class)),
            'workProfilePasswordSignInFailureCountBeforeFactoryReset' => fn(ParseNode $n) => $o->setWorkProfilePasswordSignInFailureCountBeforeFactoryReset($n->getIntegerValue()),
            'workProfileRequiredPasswordComplexity' => fn(ParseNode $n) => $o->setWorkProfileRequiredPasswordComplexity($n->getEnumValue(AndroidRequiredPasswordComplexity::class)),
            'workProfileRequirePassword' => fn(ParseNode $n) => $o->setWorkProfileRequirePassword($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the passwordBlockFaceUnlock property value. Indicates whether or not to block face unlock.
     * @return bool|null
    */
    public function getPasswordBlockFaceUnlock(): ?bool {
        return $this->getBackingStore()->get('passwordBlockFaceUnlock');
    }

    /**
     * Gets the passwordBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock.
     * @return bool|null
    */
    public function getPasswordBlockFingerprintUnlock(): ?bool {
        return $this->getBackingStore()->get('passwordBlockFingerprintUnlock');
    }

    /**
     * Gets the passwordBlockIrisUnlock property value. Indicates whether or not to block iris unlock.
     * @return bool|null
    */
    public function getPasswordBlockIrisUnlock(): ?bool {
        return $this->getBackingStore()->get('passwordBlockIrisUnlock');
    }

    /**
     * Gets the passwordBlockTrustAgents property value. Indicates whether or not to block Smart Lock and other trust agents.
     * @return bool|null
    */
    public function getPasswordBlockTrustAgents(): ?bool {
        return $this->getBackingStore()->get('passwordBlockTrustAgents');
    }

    /**
     * Gets the passwordExpirationDays property value. Number of days before the password expires. Valid values 1 to 365
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        return $this->getBackingStore()->get('passwordExpirationDays');
    }

    /**
     * Gets the passwordMinimumLength property value. Minimum length of passwords. Valid values 4 to 16
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        return $this->getBackingStore()->get('passwordMinimumLength');
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout(): ?int {
        return $this->getBackingStore()->get('passwordMinutesOfInactivityBeforeScreenTimeout');
    }

    /**
     * Gets the passwordPreviousPasswordBlockCount property value. Number of previous passwords to block. Valid values 0 to 24
     * @return int|null
    */
    public function getPasswordPreviousPasswordBlockCount(): ?int {
        return $this->getBackingStore()->get('passwordPreviousPasswordBlockCount');
    }

    /**
     * Gets the passwordRequiredType property value. Android For Work required password type.
     * @return AndroidForWorkRequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?AndroidForWorkRequiredPasswordType {
        return $this->getBackingStore()->get('passwordRequiredType');
    }

    /**
     * Gets the passwordSignInFailureCountBeforeFactoryReset property value. Number of sign in failures allowed before factory reset. Valid values 1 to 16
     * @return int|null
    */
    public function getPasswordSignInFailureCountBeforeFactoryReset(): ?int {
        return $this->getBackingStore()->get('passwordSignInFailureCountBeforeFactoryReset');
    }

    /**
     * Gets the requiredPasswordComplexity property value. The password complexity types that can be set on Android. One of: NONE, LOW, MEDIUM, HIGH. This is an API targeted to Android 11+.
     * @return AndroidRequiredPasswordComplexity|null
    */
    public function getRequiredPasswordComplexity(): ?AndroidRequiredPasswordComplexity {
        return $this->getBackingStore()->get('requiredPasswordComplexity');
    }

    /**
     * Gets the securityRequireVerifyApps property value. Require the Android Verify apps feature is turned on.
     * @return bool|null
    */
    public function getSecurityRequireVerifyApps(): ?bool {
        return $this->getBackingStore()->get('securityRequireVerifyApps');
    }

    /**
     * Gets the vpnAlwaysOnPackageIdentifier property value. Enable lockdown mode for always-on VPN.
     * @return string|null
    */
    public function getVpnAlwaysOnPackageIdentifier(): ?string {
        return $this->getBackingStore()->get('vpnAlwaysOnPackageIdentifier');
    }

    /**
     * Gets the vpnEnableAlwaysOnLockdownMode property value. Enable lockdown mode for always-on VPN.
     * @return bool|null
    */
    public function getVpnEnableAlwaysOnLockdownMode(): ?bool {
        return $this->getBackingStore()->get('vpnEnableAlwaysOnLockdownMode');
    }

    /**
     * Gets the workProfileAllowWidgets property value. Allow widgets from work profile apps.
     * @return bool|null
    */
    public function getWorkProfileAllowWidgets(): ?bool {
        return $this->getBackingStore()->get('workProfileAllowWidgets');
    }

    /**
     * Gets the workProfileBlockAddingAccounts property value. Block users from adding/removing accounts in work profile.
     * @return bool|null
    */
    public function getWorkProfileBlockAddingAccounts(): ?bool {
        return $this->getBackingStore()->get('workProfileBlockAddingAccounts');
    }

    /**
     * Gets the workProfileBlockCamera property value. Block work profile camera.
     * @return bool|null
    */
    public function getWorkProfileBlockCamera(): ?bool {
        return $this->getBackingStore()->get('workProfileBlockCamera');
    }

    /**
     * Gets the workProfileBlockCrossProfileCallerId property value. Block display work profile caller ID in personal profile.
     * @return bool|null
    */
    public function getWorkProfileBlockCrossProfileCallerId(): ?bool {
        return $this->getBackingStore()->get('workProfileBlockCrossProfileCallerId');
    }

    /**
     * Gets the workProfileBlockCrossProfileContactsSearch property value. Block work profile contacts availability in personal profile.
     * @return bool|null
    */
    public function getWorkProfileBlockCrossProfileContactsSearch(): ?bool {
        return $this->getBackingStore()->get('workProfileBlockCrossProfileContactsSearch');
    }

    /**
     * Gets the workProfileBlockCrossProfileCopyPaste property value. Boolean that indicates if the setting disallow cross profile copy/paste is enabled.
     * @return bool|null
    */
    public function getWorkProfileBlockCrossProfileCopyPaste(): ?bool {
        return $this->getBackingStore()->get('workProfileBlockCrossProfileCopyPaste');
    }

    /**
     * Gets the workProfileBlockNotificationsWhileDeviceLocked property value. Indicates whether or not to block notifications while device locked.
     * @return bool|null
    */
    public function getWorkProfileBlockNotificationsWhileDeviceLocked(): ?bool {
        return $this->getBackingStore()->get('workProfileBlockNotificationsWhileDeviceLocked');
    }

    /**
     * Gets the workProfileBlockPersonalAppInstallsFromUnknownSources property value. Prevent app installations from unknown sources in the personal profile.
     * @return bool|null
    */
    public function getWorkProfileBlockPersonalAppInstallsFromUnknownSources(): ?bool {
        return $this->getBackingStore()->get('workProfileBlockPersonalAppInstallsFromUnknownSources');
    }

    /**
     * Gets the workProfileBlockScreenCapture property value. Block screen capture in work profile.
     * @return bool|null
    */
    public function getWorkProfileBlockScreenCapture(): ?bool {
        return $this->getBackingStore()->get('workProfileBlockScreenCapture');
    }

    /**
     * Gets the workProfileBluetoothEnableContactSharing property value. Allow bluetooth devices to access enterprise contacts.
     * @return bool|null
    */
    public function getWorkProfileBluetoothEnableContactSharing(): ?bool {
        return $this->getBackingStore()->get('workProfileBluetoothEnableContactSharing');
    }

    /**
     * Gets the workProfileDataSharingType property value. Android For Work cross profile data sharing type.
     * @return AndroidForWorkCrossProfileDataSharingType|null
    */
    public function getWorkProfileDataSharingType(): ?AndroidForWorkCrossProfileDataSharingType {
        return $this->getBackingStore()->get('workProfileDataSharingType');
    }

    /**
     * Gets the workProfileDefaultAppPermissionPolicy property value. Android For Work default app permission policy type.
     * @return AndroidForWorkDefaultAppPermissionPolicyType|null
    */
    public function getWorkProfileDefaultAppPermissionPolicy(): ?AndroidForWorkDefaultAppPermissionPolicyType {
        return $this->getBackingStore()->get('workProfileDefaultAppPermissionPolicy');
    }

    /**
     * Gets the workProfilePasswordBlockFaceUnlock property value. Indicates whether or not to block face unlock for work profile.
     * @return bool|null
    */
    public function getWorkProfilePasswordBlockFaceUnlock(): ?bool {
        return $this->getBackingStore()->get('workProfilePasswordBlockFaceUnlock');
    }

    /**
     * Gets the workProfilePasswordBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock for work profile.
     * @return bool|null
    */
    public function getWorkProfilePasswordBlockFingerprintUnlock(): ?bool {
        return $this->getBackingStore()->get('workProfilePasswordBlockFingerprintUnlock');
    }

    /**
     * Gets the workProfilePasswordBlockIrisUnlock property value. Indicates whether or not to block iris unlock for work profile.
     * @return bool|null
    */
    public function getWorkProfilePasswordBlockIrisUnlock(): ?bool {
        return $this->getBackingStore()->get('workProfilePasswordBlockIrisUnlock');
    }

    /**
     * Gets the workProfilePasswordBlockTrustAgents property value. Indicates whether or not to block Smart Lock and other trust agents for work profile.
     * @return bool|null
    */
    public function getWorkProfilePasswordBlockTrustAgents(): ?bool {
        return $this->getBackingStore()->get('workProfilePasswordBlockTrustAgents');
    }

    /**
     * Gets the workProfilePasswordExpirationDays property value. Number of days before the work profile password expires. Valid values 1 to 365
     * @return int|null
    */
    public function getWorkProfilePasswordExpirationDays(): ?int {
        return $this->getBackingStore()->get('workProfilePasswordExpirationDays');
    }

    /**
     * Gets the workProfilePasswordMinimumLength property value. Minimum length of work profile password. Valid values 4 to 16
     * @return int|null
    */
    public function getWorkProfilePasswordMinimumLength(): ?int {
        return $this->getBackingStore()->get('workProfilePasswordMinimumLength');
    }

    /**
     * Gets the workProfilePasswordMinLetterCharacters property value. Minimum # of letter characters required in work profile password. Valid values 1 to 10
     * @return int|null
    */
    public function getWorkProfilePasswordMinLetterCharacters(): ?int {
        return $this->getBackingStore()->get('workProfilePasswordMinLetterCharacters');
    }

    /**
     * Gets the workProfilePasswordMinLowerCaseCharacters property value. Minimum # of lower-case characters required in work profile password. Valid values 1 to 10
     * @return int|null
    */
    public function getWorkProfilePasswordMinLowerCaseCharacters(): ?int {
        return $this->getBackingStore()->get('workProfilePasswordMinLowerCaseCharacters');
    }

    /**
     * Gets the workProfilePasswordMinNonLetterCharacters property value. Minimum # of non-letter characters required in work profile password. Valid values 1 to 10
     * @return int|null
    */
    public function getWorkProfilePasswordMinNonLetterCharacters(): ?int {
        return $this->getBackingStore()->get('workProfilePasswordMinNonLetterCharacters');
    }

    /**
     * Gets the workProfilePasswordMinNumericCharacters property value. Minimum # of numeric characters required in work profile password. Valid values 1 to 10
     * @return int|null
    */
    public function getWorkProfilePasswordMinNumericCharacters(): ?int {
        return $this->getBackingStore()->get('workProfilePasswordMinNumericCharacters');
    }

    /**
     * Gets the workProfilePasswordMinSymbolCharacters property value. Minimum # of symbols required in work profile password. Valid values 1 to 10
     * @return int|null
    */
    public function getWorkProfilePasswordMinSymbolCharacters(): ?int {
        return $this->getBackingStore()->get('workProfilePasswordMinSymbolCharacters');
    }

    /**
     * Gets the workProfilePasswordMinUpperCaseCharacters property value. Minimum # of upper-case characters required in work profile password. Valid values 1 to 10
     * @return int|null
    */
    public function getWorkProfilePasswordMinUpperCaseCharacters(): ?int {
        return $this->getBackingStore()->get('workProfilePasswordMinUpperCaseCharacters');
    }

    /**
     * Gets the workProfilePasswordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     * @return int|null
    */
    public function getWorkProfilePasswordMinutesOfInactivityBeforeScreenTimeout(): ?int {
        return $this->getBackingStore()->get('workProfilePasswordMinutesOfInactivityBeforeScreenTimeout');
    }

    /**
     * Gets the workProfilePasswordPreviousPasswordBlockCount property value. Number of previous work profile passwords to block. Valid values 0 to 24
     * @return int|null
    */
    public function getWorkProfilePasswordPreviousPasswordBlockCount(): ?int {
        return $this->getBackingStore()->get('workProfilePasswordPreviousPasswordBlockCount');
    }

    /**
     * Gets the workProfilePasswordRequiredType property value. Android For Work required password type.
     * @return AndroidForWorkRequiredPasswordType|null
    */
    public function getWorkProfilePasswordRequiredType(): ?AndroidForWorkRequiredPasswordType {
        return $this->getBackingStore()->get('workProfilePasswordRequiredType');
    }

    /**
     * Gets the workProfilePasswordSignInFailureCountBeforeFactoryReset property value. Number of sign in failures allowed before work profile is removed and all corporate data deleted. Valid values 1 to 16
     * @return int|null
    */
    public function getWorkProfilePasswordSignInFailureCountBeforeFactoryReset(): ?int {
        return $this->getBackingStore()->get('workProfilePasswordSignInFailureCountBeforeFactoryReset');
    }

    /**
     * Gets the workProfileRequiredPasswordComplexity property value. The password complexity types that can be set on Android. One of: NONE, LOW, MEDIUM, HIGH. This is an API targeted to Android 11+.
     * @return AndroidRequiredPasswordComplexity|null
    */
    public function getWorkProfileRequiredPasswordComplexity(): ?AndroidRequiredPasswordComplexity {
        return $this->getBackingStore()->get('workProfileRequiredPasswordComplexity');
    }

    /**
     * Gets the workProfileRequirePassword property value. Password is required or not for work profile
     * @return bool|null
    */
    public function getWorkProfileRequirePassword(): ?bool {
        return $this->getBackingStore()->get('workProfileRequirePassword');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('passwordBlockFaceUnlock', $this->getPasswordBlockFaceUnlock());
        $writer->writeBooleanValue('passwordBlockFingerprintUnlock', $this->getPasswordBlockFingerprintUnlock());
        $writer->writeBooleanValue('passwordBlockIrisUnlock', $this->getPasswordBlockIrisUnlock());
        $writer->writeBooleanValue('passwordBlockTrustAgents', $this->getPasswordBlockTrustAgents());
        $writer->writeIntegerValue('passwordExpirationDays', $this->getPasswordExpirationDays());
        $writer->writeIntegerValue('passwordMinimumLength', $this->getPasswordMinimumLength());
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeScreenTimeout', $this->getPasswordMinutesOfInactivityBeforeScreenTimeout());
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->getPasswordPreviousPasswordBlockCount());
        $writer->writeEnumValue('passwordRequiredType', $this->getPasswordRequiredType());
        $writer->writeIntegerValue('passwordSignInFailureCountBeforeFactoryReset', $this->getPasswordSignInFailureCountBeforeFactoryReset());
        $writer->writeEnumValue('requiredPasswordComplexity', $this->getRequiredPasswordComplexity());
        $writer->writeBooleanValue('securityRequireVerifyApps', $this->getSecurityRequireVerifyApps());
        $writer->writeStringValue('vpnAlwaysOnPackageIdentifier', $this->getVpnAlwaysOnPackageIdentifier());
        $writer->writeBooleanValue('vpnEnableAlwaysOnLockdownMode', $this->getVpnEnableAlwaysOnLockdownMode());
        $writer->writeBooleanValue('workProfileAllowWidgets', $this->getWorkProfileAllowWidgets());
        $writer->writeBooleanValue('workProfileBlockAddingAccounts', $this->getWorkProfileBlockAddingAccounts());
        $writer->writeBooleanValue('workProfileBlockCamera', $this->getWorkProfileBlockCamera());
        $writer->writeBooleanValue('workProfileBlockCrossProfileCallerId', $this->getWorkProfileBlockCrossProfileCallerId());
        $writer->writeBooleanValue('workProfileBlockCrossProfileContactsSearch', $this->getWorkProfileBlockCrossProfileContactsSearch());
        $writer->writeBooleanValue('workProfileBlockCrossProfileCopyPaste', $this->getWorkProfileBlockCrossProfileCopyPaste());
        $writer->writeBooleanValue('workProfileBlockNotificationsWhileDeviceLocked', $this->getWorkProfileBlockNotificationsWhileDeviceLocked());
        $writer->writeBooleanValue('workProfileBlockPersonalAppInstallsFromUnknownSources', $this->getWorkProfileBlockPersonalAppInstallsFromUnknownSources());
        $writer->writeBooleanValue('workProfileBlockScreenCapture', $this->getWorkProfileBlockScreenCapture());
        $writer->writeBooleanValue('workProfileBluetoothEnableContactSharing', $this->getWorkProfileBluetoothEnableContactSharing());
        $writer->writeEnumValue('workProfileDataSharingType', $this->getWorkProfileDataSharingType());
        $writer->writeEnumValue('workProfileDefaultAppPermissionPolicy', $this->getWorkProfileDefaultAppPermissionPolicy());
        $writer->writeBooleanValue('workProfilePasswordBlockFaceUnlock', $this->getWorkProfilePasswordBlockFaceUnlock());
        $writer->writeBooleanValue('workProfilePasswordBlockFingerprintUnlock', $this->getWorkProfilePasswordBlockFingerprintUnlock());
        $writer->writeBooleanValue('workProfilePasswordBlockIrisUnlock', $this->getWorkProfilePasswordBlockIrisUnlock());
        $writer->writeBooleanValue('workProfilePasswordBlockTrustAgents', $this->getWorkProfilePasswordBlockTrustAgents());
        $writer->writeIntegerValue('workProfilePasswordExpirationDays', $this->getWorkProfilePasswordExpirationDays());
        $writer->writeIntegerValue('workProfilePasswordMinimumLength', $this->getWorkProfilePasswordMinimumLength());
        $writer->writeIntegerValue('workProfilePasswordMinLetterCharacters', $this->getWorkProfilePasswordMinLetterCharacters());
        $writer->writeIntegerValue('workProfilePasswordMinLowerCaseCharacters', $this->getWorkProfilePasswordMinLowerCaseCharacters());
        $writer->writeIntegerValue('workProfilePasswordMinNonLetterCharacters', $this->getWorkProfilePasswordMinNonLetterCharacters());
        $writer->writeIntegerValue('workProfilePasswordMinNumericCharacters', $this->getWorkProfilePasswordMinNumericCharacters());
        $writer->writeIntegerValue('workProfilePasswordMinSymbolCharacters', $this->getWorkProfilePasswordMinSymbolCharacters());
        $writer->writeIntegerValue('workProfilePasswordMinUpperCaseCharacters', $this->getWorkProfilePasswordMinUpperCaseCharacters());
        $writer->writeIntegerValue('workProfilePasswordMinutesOfInactivityBeforeScreenTimeout', $this->getWorkProfilePasswordMinutesOfInactivityBeforeScreenTimeout());
        $writer->writeIntegerValue('workProfilePasswordPreviousPasswordBlockCount', $this->getWorkProfilePasswordPreviousPasswordBlockCount());
        $writer->writeEnumValue('workProfilePasswordRequiredType', $this->getWorkProfilePasswordRequiredType());
        $writer->writeIntegerValue('workProfilePasswordSignInFailureCountBeforeFactoryReset', $this->getWorkProfilePasswordSignInFailureCountBeforeFactoryReset());
        $writer->writeEnumValue('workProfileRequiredPasswordComplexity', $this->getWorkProfileRequiredPasswordComplexity());
        $writer->writeBooleanValue('workProfileRequirePassword', $this->getWorkProfileRequirePassword());
    }

    /**
     * Sets the passwordBlockFaceUnlock property value. Indicates whether or not to block face unlock.
     *  @param bool|null $value Value to set for the passwordBlockFaceUnlock property.
    */
    public function setPasswordBlockFaceUnlock(?bool $value): void {
        $this->getBackingStore()->set('passwordBlockFaceUnlock', $value);
    }

    /**
     * Sets the passwordBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock.
     *  @param bool|null $value Value to set for the passwordBlockFingerprintUnlock property.
    */
    public function setPasswordBlockFingerprintUnlock(?bool $value): void {
        $this->getBackingStore()->set('passwordBlockFingerprintUnlock', $value);
    }

    /**
     * Sets the passwordBlockIrisUnlock property value. Indicates whether or not to block iris unlock.
     *  @param bool|null $value Value to set for the passwordBlockIrisUnlock property.
    */
    public function setPasswordBlockIrisUnlock(?bool $value): void {
        $this->getBackingStore()->set('passwordBlockIrisUnlock', $value);
    }

    /**
     * Sets the passwordBlockTrustAgents property value. Indicates whether or not to block Smart Lock and other trust agents.
     *  @param bool|null $value Value to set for the passwordBlockTrustAgents property.
    */
    public function setPasswordBlockTrustAgents(?bool $value): void {
        $this->getBackingStore()->set('passwordBlockTrustAgents', $value);
    }

    /**
     * Sets the passwordExpirationDays property value. Number of days before the password expires. Valid values 1 to 365
     *  @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value): void {
        $this->getBackingStore()->set('passwordExpirationDays', $value);
    }

    /**
     * Sets the passwordMinimumLength property value. Minimum length of passwords. Valid values 4 to 16
     *  @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumLength', $value);
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     *  @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout(?int $value): void {
        $this->getBackingStore()->set('passwordMinutesOfInactivityBeforeScreenTimeout', $value);
    }

    /**
     * Sets the passwordPreviousPasswordBlockCount property value. Number of previous passwords to block. Valid values 0 to 24
     *  @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value): void {
        $this->getBackingStore()->set('passwordPreviousPasswordBlockCount', $value);
    }

    /**
     * Sets the passwordRequiredType property value. Android For Work required password type.
     *  @param AndroidForWorkRequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?AndroidForWorkRequiredPasswordType $value): void {
        $this->getBackingStore()->set('passwordRequiredType', $value);
    }

    /**
     * Sets the passwordSignInFailureCountBeforeFactoryReset property value. Number of sign in failures allowed before factory reset. Valid values 1 to 16
     *  @param int|null $value Value to set for the passwordSignInFailureCountBeforeFactoryReset property.
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset(?int $value): void {
        $this->getBackingStore()->set('passwordSignInFailureCountBeforeFactoryReset', $value);
    }

    /**
     * Sets the requiredPasswordComplexity property value. The password complexity types that can be set on Android. One of: NONE, LOW, MEDIUM, HIGH. This is an API targeted to Android 11+.
     *  @param AndroidRequiredPasswordComplexity|null $value Value to set for the requiredPasswordComplexity property.
    */
    public function setRequiredPasswordComplexity(?AndroidRequiredPasswordComplexity $value): void {
        $this->getBackingStore()->set('requiredPasswordComplexity', $value);
    }

    /**
     * Sets the securityRequireVerifyApps property value. Require the Android Verify apps feature is turned on.
     *  @param bool|null $value Value to set for the securityRequireVerifyApps property.
    */
    public function setSecurityRequireVerifyApps(?bool $value): void {
        $this->getBackingStore()->set('securityRequireVerifyApps', $value);
    }

    /**
     * Sets the vpnAlwaysOnPackageIdentifier property value. Enable lockdown mode for always-on VPN.
     *  @param string|null $value Value to set for the vpnAlwaysOnPackageIdentifier property.
    */
    public function setVpnAlwaysOnPackageIdentifier(?string $value): void {
        $this->getBackingStore()->set('vpnAlwaysOnPackageIdentifier', $value);
    }

    /**
     * Sets the vpnEnableAlwaysOnLockdownMode property value. Enable lockdown mode for always-on VPN.
     *  @param bool|null $value Value to set for the vpnEnableAlwaysOnLockdownMode property.
    */
    public function setVpnEnableAlwaysOnLockdownMode(?bool $value): void {
        $this->getBackingStore()->set('vpnEnableAlwaysOnLockdownMode', $value);
    }

    /**
     * Sets the workProfileAllowWidgets property value. Allow widgets from work profile apps.
     *  @param bool|null $value Value to set for the workProfileAllowWidgets property.
    */
    public function setWorkProfileAllowWidgets(?bool $value): void {
        $this->getBackingStore()->set('workProfileAllowWidgets', $value);
    }

    /**
     * Sets the workProfileBlockAddingAccounts property value. Block users from adding/removing accounts in work profile.
     *  @param bool|null $value Value to set for the workProfileBlockAddingAccounts property.
    */
    public function setWorkProfileBlockAddingAccounts(?bool $value): void {
        $this->getBackingStore()->set('workProfileBlockAddingAccounts', $value);
    }

    /**
     * Sets the workProfileBlockCamera property value. Block work profile camera.
     *  @param bool|null $value Value to set for the workProfileBlockCamera property.
    */
    public function setWorkProfileBlockCamera(?bool $value): void {
        $this->getBackingStore()->set('workProfileBlockCamera', $value);
    }

    /**
     * Sets the workProfileBlockCrossProfileCallerId property value. Block display work profile caller ID in personal profile.
     *  @param bool|null $value Value to set for the workProfileBlockCrossProfileCallerId property.
    */
    public function setWorkProfileBlockCrossProfileCallerId(?bool $value): void {
        $this->getBackingStore()->set('workProfileBlockCrossProfileCallerId', $value);
    }

    /**
     * Sets the workProfileBlockCrossProfileContactsSearch property value. Block work profile contacts availability in personal profile.
     *  @param bool|null $value Value to set for the workProfileBlockCrossProfileContactsSearch property.
    */
    public function setWorkProfileBlockCrossProfileContactsSearch(?bool $value): void {
        $this->getBackingStore()->set('workProfileBlockCrossProfileContactsSearch', $value);
    }

    /**
     * Sets the workProfileBlockCrossProfileCopyPaste property value. Boolean that indicates if the setting disallow cross profile copy/paste is enabled.
     *  @param bool|null $value Value to set for the workProfileBlockCrossProfileCopyPaste property.
    */
    public function setWorkProfileBlockCrossProfileCopyPaste(?bool $value): void {
        $this->getBackingStore()->set('workProfileBlockCrossProfileCopyPaste', $value);
    }

    /**
     * Sets the workProfileBlockNotificationsWhileDeviceLocked property value. Indicates whether or not to block notifications while device locked.
     *  @param bool|null $value Value to set for the workProfileBlockNotificationsWhileDeviceLocked property.
    */
    public function setWorkProfileBlockNotificationsWhileDeviceLocked(?bool $value): void {
        $this->getBackingStore()->set('workProfileBlockNotificationsWhileDeviceLocked', $value);
    }

    /**
     * Sets the workProfileBlockPersonalAppInstallsFromUnknownSources property value. Prevent app installations from unknown sources in the personal profile.
     *  @param bool|null $value Value to set for the workProfileBlockPersonalAppInstallsFromUnknownSources property.
    */
    public function setWorkProfileBlockPersonalAppInstallsFromUnknownSources(?bool $value): void {
        $this->getBackingStore()->set('workProfileBlockPersonalAppInstallsFromUnknownSources', $value);
    }

    /**
     * Sets the workProfileBlockScreenCapture property value. Block screen capture in work profile.
     *  @param bool|null $value Value to set for the workProfileBlockScreenCapture property.
    */
    public function setWorkProfileBlockScreenCapture(?bool $value): void {
        $this->getBackingStore()->set('workProfileBlockScreenCapture', $value);
    }

    /**
     * Sets the workProfileBluetoothEnableContactSharing property value. Allow bluetooth devices to access enterprise contacts.
     *  @param bool|null $value Value to set for the workProfileBluetoothEnableContactSharing property.
    */
    public function setWorkProfileBluetoothEnableContactSharing(?bool $value): void {
        $this->getBackingStore()->set('workProfileBluetoothEnableContactSharing', $value);
    }

    /**
     * Sets the workProfileDataSharingType property value. Android For Work cross profile data sharing type.
     *  @param AndroidForWorkCrossProfileDataSharingType|null $value Value to set for the workProfileDataSharingType property.
    */
    public function setWorkProfileDataSharingType(?AndroidForWorkCrossProfileDataSharingType $value): void {
        $this->getBackingStore()->set('workProfileDataSharingType', $value);
    }

    /**
     * Sets the workProfileDefaultAppPermissionPolicy property value. Android For Work default app permission policy type.
     *  @param AndroidForWorkDefaultAppPermissionPolicyType|null $value Value to set for the workProfileDefaultAppPermissionPolicy property.
    */
    public function setWorkProfileDefaultAppPermissionPolicy(?AndroidForWorkDefaultAppPermissionPolicyType $value): void {
        $this->getBackingStore()->set('workProfileDefaultAppPermissionPolicy', $value);
    }

    /**
     * Sets the workProfilePasswordBlockFaceUnlock property value. Indicates whether or not to block face unlock for work profile.
     *  @param bool|null $value Value to set for the workProfilePasswordBlockFaceUnlock property.
    */
    public function setWorkProfilePasswordBlockFaceUnlock(?bool $value): void {
        $this->getBackingStore()->set('workProfilePasswordBlockFaceUnlock', $value);
    }

    /**
     * Sets the workProfilePasswordBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock for work profile.
     *  @param bool|null $value Value to set for the workProfilePasswordBlockFingerprintUnlock property.
    */
    public function setWorkProfilePasswordBlockFingerprintUnlock(?bool $value): void {
        $this->getBackingStore()->set('workProfilePasswordBlockFingerprintUnlock', $value);
    }

    /**
     * Sets the workProfilePasswordBlockIrisUnlock property value. Indicates whether or not to block iris unlock for work profile.
     *  @param bool|null $value Value to set for the workProfilePasswordBlockIrisUnlock property.
    */
    public function setWorkProfilePasswordBlockIrisUnlock(?bool $value): void {
        $this->getBackingStore()->set('workProfilePasswordBlockIrisUnlock', $value);
    }

    /**
     * Sets the workProfilePasswordBlockTrustAgents property value. Indicates whether or not to block Smart Lock and other trust agents for work profile.
     *  @param bool|null $value Value to set for the workProfilePasswordBlockTrustAgents property.
    */
    public function setWorkProfilePasswordBlockTrustAgents(?bool $value): void {
        $this->getBackingStore()->set('workProfilePasswordBlockTrustAgents', $value);
    }

    /**
     * Sets the workProfilePasswordExpirationDays property value. Number of days before the work profile password expires. Valid values 1 to 365
     *  @param int|null $value Value to set for the workProfilePasswordExpirationDays property.
    */
    public function setWorkProfilePasswordExpirationDays(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordExpirationDays', $value);
    }

    /**
     * Sets the workProfilePasswordMinimumLength property value. Minimum length of work profile password. Valid values 4 to 16
     *  @param int|null $value Value to set for the workProfilePasswordMinimumLength property.
    */
    public function setWorkProfilePasswordMinimumLength(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordMinimumLength', $value);
    }

    /**
     * Sets the workProfilePasswordMinLetterCharacters property value. Minimum # of letter characters required in work profile password. Valid values 1 to 10
     *  @param int|null $value Value to set for the workProfilePasswordMinLetterCharacters property.
    */
    public function setWorkProfilePasswordMinLetterCharacters(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordMinLetterCharacters', $value);
    }

    /**
     * Sets the workProfilePasswordMinLowerCaseCharacters property value. Minimum # of lower-case characters required in work profile password. Valid values 1 to 10
     *  @param int|null $value Value to set for the workProfilePasswordMinLowerCaseCharacters property.
    */
    public function setWorkProfilePasswordMinLowerCaseCharacters(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordMinLowerCaseCharacters', $value);
    }

    /**
     * Sets the workProfilePasswordMinNonLetterCharacters property value. Minimum # of non-letter characters required in work profile password. Valid values 1 to 10
     *  @param int|null $value Value to set for the workProfilePasswordMinNonLetterCharacters property.
    */
    public function setWorkProfilePasswordMinNonLetterCharacters(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordMinNonLetterCharacters', $value);
    }

    /**
     * Sets the workProfilePasswordMinNumericCharacters property value. Minimum # of numeric characters required in work profile password. Valid values 1 to 10
     *  @param int|null $value Value to set for the workProfilePasswordMinNumericCharacters property.
    */
    public function setWorkProfilePasswordMinNumericCharacters(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordMinNumericCharacters', $value);
    }

    /**
     * Sets the workProfilePasswordMinSymbolCharacters property value. Minimum # of symbols required in work profile password. Valid values 1 to 10
     *  @param int|null $value Value to set for the workProfilePasswordMinSymbolCharacters property.
    */
    public function setWorkProfilePasswordMinSymbolCharacters(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordMinSymbolCharacters', $value);
    }

    /**
     * Sets the workProfilePasswordMinUpperCaseCharacters property value. Minimum # of upper-case characters required in work profile password. Valid values 1 to 10
     *  @param int|null $value Value to set for the workProfilePasswordMinUpperCaseCharacters property.
    */
    public function setWorkProfilePasswordMinUpperCaseCharacters(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordMinUpperCaseCharacters', $value);
    }

    /**
     * Sets the workProfilePasswordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     *  @param int|null $value Value to set for the workProfilePasswordMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setWorkProfilePasswordMinutesOfInactivityBeforeScreenTimeout(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordMinutesOfInactivityBeforeScreenTimeout', $value);
    }

    /**
     * Sets the workProfilePasswordPreviousPasswordBlockCount property value. Number of previous work profile passwords to block. Valid values 0 to 24
     *  @param int|null $value Value to set for the workProfilePasswordPreviousPasswordBlockCount property.
    */
    public function setWorkProfilePasswordPreviousPasswordBlockCount(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordPreviousPasswordBlockCount', $value);
    }

    /**
     * Sets the workProfilePasswordRequiredType property value. Android For Work required password type.
     *  @param AndroidForWorkRequiredPasswordType|null $value Value to set for the workProfilePasswordRequiredType property.
    */
    public function setWorkProfilePasswordRequiredType(?AndroidForWorkRequiredPasswordType $value): void {
        $this->getBackingStore()->set('workProfilePasswordRequiredType', $value);
    }

    /**
     * Sets the workProfilePasswordSignInFailureCountBeforeFactoryReset property value. Number of sign in failures allowed before work profile is removed and all corporate data deleted. Valid values 1 to 16
     *  @param int|null $value Value to set for the workProfilePasswordSignInFailureCountBeforeFactoryReset property.
    */
    public function setWorkProfilePasswordSignInFailureCountBeforeFactoryReset(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordSignInFailureCountBeforeFactoryReset', $value);
    }

    /**
     * Sets the workProfileRequiredPasswordComplexity property value. The password complexity types that can be set on Android. One of: NONE, LOW, MEDIUM, HIGH. This is an API targeted to Android 11+.
     *  @param AndroidRequiredPasswordComplexity|null $value Value to set for the workProfileRequiredPasswordComplexity property.
    */
    public function setWorkProfileRequiredPasswordComplexity(?AndroidRequiredPasswordComplexity $value): void {
        $this->getBackingStore()->set('workProfileRequiredPasswordComplexity', $value);
    }

    /**
     * Sets the workProfileRequirePassword property value. Password is required or not for work profile
     *  @param bool|null $value Value to set for the workProfileRequirePassword property.
    */
    public function setWorkProfileRequirePassword(?bool $value): void {
        $this->getBackingStore()->set('workProfileRequirePassword', $value);
    }

}
