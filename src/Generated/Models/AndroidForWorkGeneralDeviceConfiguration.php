<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidForWorkGeneralDeviceConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var bool|null $passwordBlockFaceUnlock Indicates whether or not to block face unlock.
    */
    private ?bool $passwordBlockFaceUnlock = null;
    
    /**
     * @var bool|null $passwordBlockFingerprintUnlock Indicates whether or not to block fingerprint unlock.
    */
    private ?bool $passwordBlockFingerprintUnlock = null;
    
    /**
     * @var bool|null $passwordBlockIrisUnlock Indicates whether or not to block iris unlock.
    */
    private ?bool $passwordBlockIrisUnlock = null;
    
    /**
     * @var bool|null $passwordBlockTrustAgents Indicates whether or not to block Smart Lock and other trust agents.
    */
    private ?bool $passwordBlockTrustAgents = null;
    
    /**
     * @var int|null $passwordExpirationDays Number of days before the password expires. Valid values 1 to 365
    */
    private ?int $passwordExpirationDays = null;
    
    /**
     * @var int|null $passwordMinimumLength Minimum length of passwords. Valid values 4 to 16
    */
    private ?int $passwordMinimumLength = null;
    
    /**
     * @var int|null $passwordMinutesOfInactivityBeforeScreenTimeout Minutes of inactivity before the screen times out.
    */
    private ?int $passwordMinutesOfInactivityBeforeScreenTimeout = null;
    
    /**
     * @var int|null $passwordPreviousPasswordBlockCount Number of previous passwords to block. Valid values 0 to 24
    */
    private ?int $passwordPreviousPasswordBlockCount = null;
    
    /**
     * @var AndroidForWorkRequiredPasswordType|null $passwordRequiredType Android For Work required password type.
    */
    private ?AndroidForWorkRequiredPasswordType $passwordRequiredType = null;
    
    /**
     * @var int|null $passwordSignInFailureCountBeforeFactoryReset Number of sign in failures allowed before factory reset. Valid values 1 to 16
    */
    private ?int $passwordSignInFailureCountBeforeFactoryReset = null;
    
    /**
     * @var AndroidRequiredPasswordComplexity|null $requiredPasswordComplexity The password complexity types that can be set on Android. One of: NONE, LOW, MEDIUM, HIGH. This is an API targeted to Android 11+.
    */
    private ?AndroidRequiredPasswordComplexity $requiredPasswordComplexity = null;
    
    /**
     * @var bool|null $securityRequireVerifyApps Require the Android Verify apps feature is turned on.
    */
    private ?bool $securityRequireVerifyApps = null;
    
    /**
     * @var string|null $vpnAlwaysOnPackageIdentifier Enable lockdown mode for always-on VPN.
    */
    private ?string $vpnAlwaysOnPackageIdentifier = null;
    
    /**
     * @var bool|null $vpnEnableAlwaysOnLockdownMode Enable lockdown mode for always-on VPN.
    */
    private ?bool $vpnEnableAlwaysOnLockdownMode = null;
    
    /**
     * @var bool|null $workProfileAllowWidgets Allow widgets from work profile apps.
    */
    private ?bool $workProfileAllowWidgets = null;
    
    /**
     * @var bool|null $workProfileBlockAddingAccounts Block users from adding/removing accounts in work profile.
    */
    private ?bool $workProfileBlockAddingAccounts = null;
    
    /**
     * @var bool|null $workProfileBlockCamera Block work profile camera.
    */
    private ?bool $workProfileBlockCamera = null;
    
    /**
     * @var bool|null $workProfileBlockCrossProfileCallerId Block display work profile caller ID in personal profile.
    */
    private ?bool $workProfileBlockCrossProfileCallerId = null;
    
    /**
     * @var bool|null $workProfileBlockCrossProfileContactsSearch Block work profile contacts availability in personal profile.
    */
    private ?bool $workProfileBlockCrossProfileContactsSearch = null;
    
    /**
     * @var bool|null $workProfileBlockCrossProfileCopyPaste Boolean that indicates if the setting disallow cross profile copy/paste is enabled.
    */
    private ?bool $workProfileBlockCrossProfileCopyPaste = null;
    
    /**
     * @var bool|null $workProfileBlockNotificationsWhileDeviceLocked Indicates whether or not to block notifications while device locked.
    */
    private ?bool $workProfileBlockNotificationsWhileDeviceLocked = null;
    
    /**
     * @var bool|null $workProfileBlockPersonalAppInstallsFromUnknownSources Prevent app installations from unknown sources in the personal profile.
    */
    private ?bool $workProfileBlockPersonalAppInstallsFromUnknownSources = null;
    
    /**
     * @var bool|null $workProfileBlockScreenCapture Block screen capture in work profile.
    */
    private ?bool $workProfileBlockScreenCapture = null;
    
    /**
     * @var bool|null $workProfileBluetoothEnableContactSharing Allow bluetooth devices to access enterprise contacts.
    */
    private ?bool $workProfileBluetoothEnableContactSharing = null;
    
    /**
     * @var AndroidForWorkCrossProfileDataSharingType|null $workProfileDataSharingType Android For Work cross profile data sharing type.
    */
    private ?AndroidForWorkCrossProfileDataSharingType $workProfileDataSharingType = null;
    
    /**
     * @var AndroidForWorkDefaultAppPermissionPolicyType|null $workProfileDefaultAppPermissionPolicy Android For Work default app permission policy type.
    */
    private ?AndroidForWorkDefaultAppPermissionPolicyType $workProfileDefaultAppPermissionPolicy = null;
    
    /**
     * @var bool|null $workProfilePasswordBlockFaceUnlock Indicates whether or not to block face unlock for work profile.
    */
    private ?bool $workProfilePasswordBlockFaceUnlock = null;
    
    /**
     * @var bool|null $workProfilePasswordBlockFingerprintUnlock Indicates whether or not to block fingerprint unlock for work profile.
    */
    private ?bool $workProfilePasswordBlockFingerprintUnlock = null;
    
    /**
     * @var bool|null $workProfilePasswordBlockIrisUnlock Indicates whether or not to block iris unlock for work profile.
    */
    private ?bool $workProfilePasswordBlockIrisUnlock = null;
    
    /**
     * @var bool|null $workProfilePasswordBlockTrustAgents Indicates whether or not to block Smart Lock and other trust agents for work profile.
    */
    private ?bool $workProfilePasswordBlockTrustAgents = null;
    
    /**
     * @var int|null $workProfilePasswordExpirationDays Number of days before the work profile password expires. Valid values 1 to 365
    */
    private ?int $workProfilePasswordExpirationDays = null;
    
    /**
     * @var int|null $workProfilePasswordMinimumLength Minimum length of work profile password. Valid values 4 to 16
    */
    private ?int $workProfilePasswordMinimumLength = null;
    
    /**
     * @var int|null $workProfilePasswordMinLetterCharacters Minimum # of letter characters required in work profile password. Valid values 1 to 10
    */
    private ?int $workProfilePasswordMinLetterCharacters = null;
    
    /**
     * @var int|null $workProfilePasswordMinLowerCaseCharacters Minimum # of lower-case characters required in work profile password. Valid values 1 to 10
    */
    private ?int $workProfilePasswordMinLowerCaseCharacters = null;
    
    /**
     * @var int|null $workProfilePasswordMinNonLetterCharacters Minimum # of non-letter characters required in work profile password. Valid values 1 to 10
    */
    private ?int $workProfilePasswordMinNonLetterCharacters = null;
    
    /**
     * @var int|null $workProfilePasswordMinNumericCharacters Minimum # of numeric characters required in work profile password. Valid values 1 to 10
    */
    private ?int $workProfilePasswordMinNumericCharacters = null;
    
    /**
     * @var int|null $workProfilePasswordMinSymbolCharacters Minimum # of symbols required in work profile password. Valid values 1 to 10
    */
    private ?int $workProfilePasswordMinSymbolCharacters = null;
    
    /**
     * @var int|null $workProfilePasswordMinUpperCaseCharacters Minimum # of upper-case characters required in work profile password. Valid values 1 to 10
    */
    private ?int $workProfilePasswordMinUpperCaseCharacters = null;
    
    /**
     * @var int|null $workProfilePasswordMinutesOfInactivityBeforeScreenTimeout Minutes of inactivity before the screen times out.
    */
    private ?int $workProfilePasswordMinutesOfInactivityBeforeScreenTimeout = null;
    
    /**
     * @var int|null $workProfilePasswordPreviousPasswordBlockCount Number of previous work profile passwords to block. Valid values 0 to 24
    */
    private ?int $workProfilePasswordPreviousPasswordBlockCount = null;
    
    /**
     * @var AndroidForWorkRequiredPasswordType|null $workProfilePasswordRequiredType Android For Work required password type.
    */
    private ?AndroidForWorkRequiredPasswordType $workProfilePasswordRequiredType = null;
    
    /**
     * @var int|null $workProfilePasswordSignInFailureCountBeforeFactoryReset Number of sign in failures allowed before work profile is removed and all corporate data deleted. Valid values 1 to 16
    */
    private ?int $workProfilePasswordSignInFailureCountBeforeFactoryReset = null;
    
    /**
     * @var AndroidRequiredPasswordComplexity|null $workProfileRequiredPasswordComplexity The password complexity types that can be set on Android. One of: NONE, LOW, MEDIUM, HIGH. This is an API targeted to Android 11+.
    */
    private ?AndroidRequiredPasswordComplexity $workProfileRequiredPasswordComplexity = null;
    
    /**
     * @var bool|null $workProfileRequirePassword Password is required or not for work profile
    */
    private ?bool $workProfileRequirePassword = null;
    
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
            'passwordBlockFaceUnlock' => function (ParseNode $n) use ($o) { $o->setPasswordBlockFaceUnlock($n->getBooleanValue()); },
            'passwordBlockFingerprintUnlock' => function (ParseNode $n) use ($o) { $o->setPasswordBlockFingerprintUnlock($n->getBooleanValue()); },
            'passwordBlockIrisUnlock' => function (ParseNode $n) use ($o) { $o->setPasswordBlockIrisUnlock($n->getBooleanValue()); },
            'passwordBlockTrustAgents' => function (ParseNode $n) use ($o) { $o->setPasswordBlockTrustAgents($n->getBooleanValue()); },
            'passwordExpirationDays' => function (ParseNode $n) use ($o) { $o->setPasswordExpirationDays($n->getIntegerValue()); },
            'passwordMinimumLength' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumLength($n->getIntegerValue()); },
            'passwordMinutesOfInactivityBeforeScreenTimeout' => function (ParseNode $n) use ($o) { $o->setPasswordMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()); },
            'passwordPreviousPasswordBlockCount' => function (ParseNode $n) use ($o) { $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()); },
            'passwordRequiredType' => function (ParseNode $n) use ($o) { $o->setPasswordRequiredType($n->getEnumValue(AndroidForWorkRequiredPasswordType::class)); },
            'passwordSignInFailureCountBeforeFactoryReset' => function (ParseNode $n) use ($o) { $o->setPasswordSignInFailureCountBeforeFactoryReset($n->getIntegerValue()); },
            'requiredPasswordComplexity' => function (ParseNode $n) use ($o) { $o->setRequiredPasswordComplexity($n->getEnumValue(AndroidRequiredPasswordComplexity::class)); },
            'securityRequireVerifyApps' => function (ParseNode $n) use ($o) { $o->setSecurityRequireVerifyApps($n->getBooleanValue()); },
            'vpnAlwaysOnPackageIdentifier' => function (ParseNode $n) use ($o) { $o->setVpnAlwaysOnPackageIdentifier($n->getStringValue()); },
            'vpnEnableAlwaysOnLockdownMode' => function (ParseNode $n) use ($o) { $o->setVpnEnableAlwaysOnLockdownMode($n->getBooleanValue()); },
            'workProfileAllowWidgets' => function (ParseNode $n) use ($o) { $o->setWorkProfileAllowWidgets($n->getBooleanValue()); },
            'workProfileBlockAddingAccounts' => function (ParseNode $n) use ($o) { $o->setWorkProfileBlockAddingAccounts($n->getBooleanValue()); },
            'workProfileBlockCamera' => function (ParseNode $n) use ($o) { $o->setWorkProfileBlockCamera($n->getBooleanValue()); },
            'workProfileBlockCrossProfileCallerId' => function (ParseNode $n) use ($o) { $o->setWorkProfileBlockCrossProfileCallerId($n->getBooleanValue()); },
            'workProfileBlockCrossProfileContactsSearch' => function (ParseNode $n) use ($o) { $o->setWorkProfileBlockCrossProfileContactsSearch($n->getBooleanValue()); },
            'workProfileBlockCrossProfileCopyPaste' => function (ParseNode $n) use ($o) { $o->setWorkProfileBlockCrossProfileCopyPaste($n->getBooleanValue()); },
            'workProfileBlockNotificationsWhileDeviceLocked' => function (ParseNode $n) use ($o) { $o->setWorkProfileBlockNotificationsWhileDeviceLocked($n->getBooleanValue()); },
            'workProfileBlockPersonalAppInstallsFromUnknownSources' => function (ParseNode $n) use ($o) { $o->setWorkProfileBlockPersonalAppInstallsFromUnknownSources($n->getBooleanValue()); },
            'workProfileBlockScreenCapture' => function (ParseNode $n) use ($o) { $o->setWorkProfileBlockScreenCapture($n->getBooleanValue()); },
            'workProfileBluetoothEnableContactSharing' => function (ParseNode $n) use ($o) { $o->setWorkProfileBluetoothEnableContactSharing($n->getBooleanValue()); },
            'workProfileDataSharingType' => function (ParseNode $n) use ($o) { $o->setWorkProfileDataSharingType($n->getEnumValue(AndroidForWorkCrossProfileDataSharingType::class)); },
            'workProfileDefaultAppPermissionPolicy' => function (ParseNode $n) use ($o) { $o->setWorkProfileDefaultAppPermissionPolicy($n->getEnumValue(AndroidForWorkDefaultAppPermissionPolicyType::class)); },
            'workProfilePasswordBlockFaceUnlock' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordBlockFaceUnlock($n->getBooleanValue()); },
            'workProfilePasswordBlockFingerprintUnlock' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordBlockFingerprintUnlock($n->getBooleanValue()); },
            'workProfilePasswordBlockIrisUnlock' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordBlockIrisUnlock($n->getBooleanValue()); },
            'workProfilePasswordBlockTrustAgents' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordBlockTrustAgents($n->getBooleanValue()); },
            'workProfilePasswordExpirationDays' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordExpirationDays($n->getIntegerValue()); },
            'workProfilePasswordMinimumLength' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinimumLength($n->getIntegerValue()); },
            'workProfilePasswordMinLetterCharacters' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinLetterCharacters($n->getIntegerValue()); },
            'workProfilePasswordMinLowerCaseCharacters' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinLowerCaseCharacters($n->getIntegerValue()); },
            'workProfilePasswordMinNonLetterCharacters' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinNonLetterCharacters($n->getIntegerValue()); },
            'workProfilePasswordMinNumericCharacters' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinNumericCharacters($n->getIntegerValue()); },
            'workProfilePasswordMinSymbolCharacters' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinSymbolCharacters($n->getIntegerValue()); },
            'workProfilePasswordMinUpperCaseCharacters' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinUpperCaseCharacters($n->getIntegerValue()); },
            'workProfilePasswordMinutesOfInactivityBeforeScreenTimeout' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()); },
            'workProfilePasswordPreviousPasswordBlockCount' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordPreviousPasswordBlockCount($n->getIntegerValue()); },
            'workProfilePasswordRequiredType' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordRequiredType($n->getEnumValue(AndroidForWorkRequiredPasswordType::class)); },
            'workProfilePasswordSignInFailureCountBeforeFactoryReset' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordSignInFailureCountBeforeFactoryReset($n->getIntegerValue()); },
            'workProfileRequiredPasswordComplexity' => function (ParseNode $n) use ($o) { $o->setWorkProfileRequiredPasswordComplexity($n->getEnumValue(AndroidRequiredPasswordComplexity::class)); },
            'workProfileRequirePassword' => function (ParseNode $n) use ($o) { $o->setWorkProfileRequirePassword($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the passwordBlockFaceUnlock property value. Indicates whether or not to block face unlock.
     * @return bool|null
    */
    public function getPasswordBlockFaceUnlock(): ?bool {
        return $this->passwordBlockFaceUnlock;
    }

    /**
     * Gets the passwordBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock.
     * @return bool|null
    */
    public function getPasswordBlockFingerprintUnlock(): ?bool {
        return $this->passwordBlockFingerprintUnlock;
    }

    /**
     * Gets the passwordBlockIrisUnlock property value. Indicates whether or not to block iris unlock.
     * @return bool|null
    */
    public function getPasswordBlockIrisUnlock(): ?bool {
        return $this->passwordBlockIrisUnlock;
    }

    /**
     * Gets the passwordBlockTrustAgents property value. Indicates whether or not to block Smart Lock and other trust agents.
     * @return bool|null
    */
    public function getPasswordBlockTrustAgents(): ?bool {
        return $this->passwordBlockTrustAgents;
    }

    /**
     * Gets the passwordExpirationDays property value. Number of days before the password expires. Valid values 1 to 365
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        return $this->passwordExpirationDays;
    }

    /**
     * Gets the passwordMinimumLength property value. Minimum length of passwords. Valid values 4 to 16
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        return $this->passwordMinimumLength;
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout(): ?int {
        return $this->passwordMinutesOfInactivityBeforeScreenTimeout;
    }

    /**
     * Gets the passwordPreviousPasswordBlockCount property value. Number of previous passwords to block. Valid values 0 to 24
     * @return int|null
    */
    public function getPasswordPreviousPasswordBlockCount(): ?int {
        return $this->passwordPreviousPasswordBlockCount;
    }

    /**
     * Gets the passwordRequiredType property value. Android For Work required password type.
     * @return AndroidForWorkRequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?AndroidForWorkRequiredPasswordType {
        return $this->passwordRequiredType;
    }

    /**
     * Gets the passwordSignInFailureCountBeforeFactoryReset property value. Number of sign in failures allowed before factory reset. Valid values 1 to 16
     * @return int|null
    */
    public function getPasswordSignInFailureCountBeforeFactoryReset(): ?int {
        return $this->passwordSignInFailureCountBeforeFactoryReset;
    }

    /**
     * Gets the requiredPasswordComplexity property value. The password complexity types that can be set on Android. One of: NONE, LOW, MEDIUM, HIGH. This is an API targeted to Android 11+.
     * @return AndroidRequiredPasswordComplexity|null
    */
    public function getRequiredPasswordComplexity(): ?AndroidRequiredPasswordComplexity {
        return $this->requiredPasswordComplexity;
    }

    /**
     * Gets the securityRequireVerifyApps property value. Require the Android Verify apps feature is turned on.
     * @return bool|null
    */
    public function getSecurityRequireVerifyApps(): ?bool {
        return $this->securityRequireVerifyApps;
    }

    /**
     * Gets the vpnAlwaysOnPackageIdentifier property value. Enable lockdown mode for always-on VPN.
     * @return string|null
    */
    public function getVpnAlwaysOnPackageIdentifier(): ?string {
        return $this->vpnAlwaysOnPackageIdentifier;
    }

    /**
     * Gets the vpnEnableAlwaysOnLockdownMode property value. Enable lockdown mode for always-on VPN.
     * @return bool|null
    */
    public function getVpnEnableAlwaysOnLockdownMode(): ?bool {
        return $this->vpnEnableAlwaysOnLockdownMode;
    }

    /**
     * Gets the workProfileAllowWidgets property value. Allow widgets from work profile apps.
     * @return bool|null
    */
    public function getWorkProfileAllowWidgets(): ?bool {
        return $this->workProfileAllowWidgets;
    }

    /**
     * Gets the workProfileBlockAddingAccounts property value. Block users from adding/removing accounts in work profile.
     * @return bool|null
    */
    public function getWorkProfileBlockAddingAccounts(): ?bool {
        return $this->workProfileBlockAddingAccounts;
    }

    /**
     * Gets the workProfileBlockCamera property value. Block work profile camera.
     * @return bool|null
    */
    public function getWorkProfileBlockCamera(): ?bool {
        return $this->workProfileBlockCamera;
    }

    /**
     * Gets the workProfileBlockCrossProfileCallerId property value. Block display work profile caller ID in personal profile.
     * @return bool|null
    */
    public function getWorkProfileBlockCrossProfileCallerId(): ?bool {
        return $this->workProfileBlockCrossProfileCallerId;
    }

    /**
     * Gets the workProfileBlockCrossProfileContactsSearch property value. Block work profile contacts availability in personal profile.
     * @return bool|null
    */
    public function getWorkProfileBlockCrossProfileContactsSearch(): ?bool {
        return $this->workProfileBlockCrossProfileContactsSearch;
    }

    /**
     * Gets the workProfileBlockCrossProfileCopyPaste property value. Boolean that indicates if the setting disallow cross profile copy/paste is enabled.
     * @return bool|null
    */
    public function getWorkProfileBlockCrossProfileCopyPaste(): ?bool {
        return $this->workProfileBlockCrossProfileCopyPaste;
    }

    /**
     * Gets the workProfileBlockNotificationsWhileDeviceLocked property value. Indicates whether or not to block notifications while device locked.
     * @return bool|null
    */
    public function getWorkProfileBlockNotificationsWhileDeviceLocked(): ?bool {
        return $this->workProfileBlockNotificationsWhileDeviceLocked;
    }

    /**
     * Gets the workProfileBlockPersonalAppInstallsFromUnknownSources property value. Prevent app installations from unknown sources in the personal profile.
     * @return bool|null
    */
    public function getWorkProfileBlockPersonalAppInstallsFromUnknownSources(): ?bool {
        return $this->workProfileBlockPersonalAppInstallsFromUnknownSources;
    }

    /**
     * Gets the workProfileBlockScreenCapture property value. Block screen capture in work profile.
     * @return bool|null
    */
    public function getWorkProfileBlockScreenCapture(): ?bool {
        return $this->workProfileBlockScreenCapture;
    }

    /**
     * Gets the workProfileBluetoothEnableContactSharing property value. Allow bluetooth devices to access enterprise contacts.
     * @return bool|null
    */
    public function getWorkProfileBluetoothEnableContactSharing(): ?bool {
        return $this->workProfileBluetoothEnableContactSharing;
    }

    /**
     * Gets the workProfileDataSharingType property value. Android For Work cross profile data sharing type.
     * @return AndroidForWorkCrossProfileDataSharingType|null
    */
    public function getWorkProfileDataSharingType(): ?AndroidForWorkCrossProfileDataSharingType {
        return $this->workProfileDataSharingType;
    }

    /**
     * Gets the workProfileDefaultAppPermissionPolicy property value. Android For Work default app permission policy type.
     * @return AndroidForWorkDefaultAppPermissionPolicyType|null
    */
    public function getWorkProfileDefaultAppPermissionPolicy(): ?AndroidForWorkDefaultAppPermissionPolicyType {
        return $this->workProfileDefaultAppPermissionPolicy;
    }

    /**
     * Gets the workProfilePasswordBlockFaceUnlock property value. Indicates whether or not to block face unlock for work profile.
     * @return bool|null
    */
    public function getWorkProfilePasswordBlockFaceUnlock(): ?bool {
        return $this->workProfilePasswordBlockFaceUnlock;
    }

    /**
     * Gets the workProfilePasswordBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock for work profile.
     * @return bool|null
    */
    public function getWorkProfilePasswordBlockFingerprintUnlock(): ?bool {
        return $this->workProfilePasswordBlockFingerprintUnlock;
    }

    /**
     * Gets the workProfilePasswordBlockIrisUnlock property value. Indicates whether or not to block iris unlock for work profile.
     * @return bool|null
    */
    public function getWorkProfilePasswordBlockIrisUnlock(): ?bool {
        return $this->workProfilePasswordBlockIrisUnlock;
    }

    /**
     * Gets the workProfilePasswordBlockTrustAgents property value. Indicates whether or not to block Smart Lock and other trust agents for work profile.
     * @return bool|null
    */
    public function getWorkProfilePasswordBlockTrustAgents(): ?bool {
        return $this->workProfilePasswordBlockTrustAgents;
    }

    /**
     * Gets the workProfilePasswordExpirationDays property value. Number of days before the work profile password expires. Valid values 1 to 365
     * @return int|null
    */
    public function getWorkProfilePasswordExpirationDays(): ?int {
        return $this->workProfilePasswordExpirationDays;
    }

    /**
     * Gets the workProfilePasswordMinimumLength property value. Minimum length of work profile password. Valid values 4 to 16
     * @return int|null
    */
    public function getWorkProfilePasswordMinimumLength(): ?int {
        return $this->workProfilePasswordMinimumLength;
    }

    /**
     * Gets the workProfilePasswordMinLetterCharacters property value. Minimum # of letter characters required in work profile password. Valid values 1 to 10
     * @return int|null
    */
    public function getWorkProfilePasswordMinLetterCharacters(): ?int {
        return $this->workProfilePasswordMinLetterCharacters;
    }

    /**
     * Gets the workProfilePasswordMinLowerCaseCharacters property value. Minimum # of lower-case characters required in work profile password. Valid values 1 to 10
     * @return int|null
    */
    public function getWorkProfilePasswordMinLowerCaseCharacters(): ?int {
        return $this->workProfilePasswordMinLowerCaseCharacters;
    }

    /**
     * Gets the workProfilePasswordMinNonLetterCharacters property value. Minimum # of non-letter characters required in work profile password. Valid values 1 to 10
     * @return int|null
    */
    public function getWorkProfilePasswordMinNonLetterCharacters(): ?int {
        return $this->workProfilePasswordMinNonLetterCharacters;
    }

    /**
     * Gets the workProfilePasswordMinNumericCharacters property value. Minimum # of numeric characters required in work profile password. Valid values 1 to 10
     * @return int|null
    */
    public function getWorkProfilePasswordMinNumericCharacters(): ?int {
        return $this->workProfilePasswordMinNumericCharacters;
    }

    /**
     * Gets the workProfilePasswordMinSymbolCharacters property value. Minimum # of symbols required in work profile password. Valid values 1 to 10
     * @return int|null
    */
    public function getWorkProfilePasswordMinSymbolCharacters(): ?int {
        return $this->workProfilePasswordMinSymbolCharacters;
    }

    /**
     * Gets the workProfilePasswordMinUpperCaseCharacters property value. Minimum # of upper-case characters required in work profile password. Valid values 1 to 10
     * @return int|null
    */
    public function getWorkProfilePasswordMinUpperCaseCharacters(): ?int {
        return $this->workProfilePasswordMinUpperCaseCharacters;
    }

    /**
     * Gets the workProfilePasswordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     * @return int|null
    */
    public function getWorkProfilePasswordMinutesOfInactivityBeforeScreenTimeout(): ?int {
        return $this->workProfilePasswordMinutesOfInactivityBeforeScreenTimeout;
    }

    /**
     * Gets the workProfilePasswordPreviousPasswordBlockCount property value. Number of previous work profile passwords to block. Valid values 0 to 24
     * @return int|null
    */
    public function getWorkProfilePasswordPreviousPasswordBlockCount(): ?int {
        return $this->workProfilePasswordPreviousPasswordBlockCount;
    }

    /**
     * Gets the workProfilePasswordRequiredType property value. Android For Work required password type.
     * @return AndroidForWorkRequiredPasswordType|null
    */
    public function getWorkProfilePasswordRequiredType(): ?AndroidForWorkRequiredPasswordType {
        return $this->workProfilePasswordRequiredType;
    }

    /**
     * Gets the workProfilePasswordSignInFailureCountBeforeFactoryReset property value. Number of sign in failures allowed before work profile is removed and all corporate data deleted. Valid values 1 to 16
     * @return int|null
    */
    public function getWorkProfilePasswordSignInFailureCountBeforeFactoryReset(): ?int {
        return $this->workProfilePasswordSignInFailureCountBeforeFactoryReset;
    }

    /**
     * Gets the workProfileRequiredPasswordComplexity property value. The password complexity types that can be set on Android. One of: NONE, LOW, MEDIUM, HIGH. This is an API targeted to Android 11+.
     * @return AndroidRequiredPasswordComplexity|null
    */
    public function getWorkProfileRequiredPasswordComplexity(): ?AndroidRequiredPasswordComplexity {
        return $this->workProfileRequiredPasswordComplexity;
    }

    /**
     * Gets the workProfileRequirePassword property value. Password is required or not for work profile
     * @return bool|null
    */
    public function getWorkProfileRequirePassword(): ?bool {
        return $this->workProfileRequirePassword;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('passwordBlockFaceUnlock', $this->passwordBlockFaceUnlock);
        $writer->writeBooleanValue('passwordBlockFingerprintUnlock', $this->passwordBlockFingerprintUnlock);
        $writer->writeBooleanValue('passwordBlockIrisUnlock', $this->passwordBlockIrisUnlock);
        $writer->writeBooleanValue('passwordBlockTrustAgents', $this->passwordBlockTrustAgents);
        $writer->writeIntegerValue('passwordExpirationDays', $this->passwordExpirationDays);
        $writer->writeIntegerValue('passwordMinimumLength', $this->passwordMinimumLength);
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeScreenTimeout', $this->passwordMinutesOfInactivityBeforeScreenTimeout);
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->passwordPreviousPasswordBlockCount);
        $writer->writeEnumValue('passwordRequiredType', $this->passwordRequiredType);
        $writer->writeIntegerValue('passwordSignInFailureCountBeforeFactoryReset', $this->passwordSignInFailureCountBeforeFactoryReset);
        $writer->writeEnumValue('requiredPasswordComplexity', $this->requiredPasswordComplexity);
        $writer->writeBooleanValue('securityRequireVerifyApps', $this->securityRequireVerifyApps);
        $writer->writeStringValue('vpnAlwaysOnPackageIdentifier', $this->vpnAlwaysOnPackageIdentifier);
        $writer->writeBooleanValue('vpnEnableAlwaysOnLockdownMode', $this->vpnEnableAlwaysOnLockdownMode);
        $writer->writeBooleanValue('workProfileAllowWidgets', $this->workProfileAllowWidgets);
        $writer->writeBooleanValue('workProfileBlockAddingAccounts', $this->workProfileBlockAddingAccounts);
        $writer->writeBooleanValue('workProfileBlockCamera', $this->workProfileBlockCamera);
        $writer->writeBooleanValue('workProfileBlockCrossProfileCallerId', $this->workProfileBlockCrossProfileCallerId);
        $writer->writeBooleanValue('workProfileBlockCrossProfileContactsSearch', $this->workProfileBlockCrossProfileContactsSearch);
        $writer->writeBooleanValue('workProfileBlockCrossProfileCopyPaste', $this->workProfileBlockCrossProfileCopyPaste);
        $writer->writeBooleanValue('workProfileBlockNotificationsWhileDeviceLocked', $this->workProfileBlockNotificationsWhileDeviceLocked);
        $writer->writeBooleanValue('workProfileBlockPersonalAppInstallsFromUnknownSources', $this->workProfileBlockPersonalAppInstallsFromUnknownSources);
        $writer->writeBooleanValue('workProfileBlockScreenCapture', $this->workProfileBlockScreenCapture);
        $writer->writeBooleanValue('workProfileBluetoothEnableContactSharing', $this->workProfileBluetoothEnableContactSharing);
        $writer->writeEnumValue('workProfileDataSharingType', $this->workProfileDataSharingType);
        $writer->writeEnumValue('workProfileDefaultAppPermissionPolicy', $this->workProfileDefaultAppPermissionPolicy);
        $writer->writeBooleanValue('workProfilePasswordBlockFaceUnlock', $this->workProfilePasswordBlockFaceUnlock);
        $writer->writeBooleanValue('workProfilePasswordBlockFingerprintUnlock', $this->workProfilePasswordBlockFingerprintUnlock);
        $writer->writeBooleanValue('workProfilePasswordBlockIrisUnlock', $this->workProfilePasswordBlockIrisUnlock);
        $writer->writeBooleanValue('workProfilePasswordBlockTrustAgents', $this->workProfilePasswordBlockTrustAgents);
        $writer->writeIntegerValue('workProfilePasswordExpirationDays', $this->workProfilePasswordExpirationDays);
        $writer->writeIntegerValue('workProfilePasswordMinimumLength', $this->workProfilePasswordMinimumLength);
        $writer->writeIntegerValue('workProfilePasswordMinLetterCharacters', $this->workProfilePasswordMinLetterCharacters);
        $writer->writeIntegerValue('workProfilePasswordMinLowerCaseCharacters', $this->workProfilePasswordMinLowerCaseCharacters);
        $writer->writeIntegerValue('workProfilePasswordMinNonLetterCharacters', $this->workProfilePasswordMinNonLetterCharacters);
        $writer->writeIntegerValue('workProfilePasswordMinNumericCharacters', $this->workProfilePasswordMinNumericCharacters);
        $writer->writeIntegerValue('workProfilePasswordMinSymbolCharacters', $this->workProfilePasswordMinSymbolCharacters);
        $writer->writeIntegerValue('workProfilePasswordMinUpperCaseCharacters', $this->workProfilePasswordMinUpperCaseCharacters);
        $writer->writeIntegerValue('workProfilePasswordMinutesOfInactivityBeforeScreenTimeout', $this->workProfilePasswordMinutesOfInactivityBeforeScreenTimeout);
        $writer->writeIntegerValue('workProfilePasswordPreviousPasswordBlockCount', $this->workProfilePasswordPreviousPasswordBlockCount);
        $writer->writeEnumValue('workProfilePasswordRequiredType', $this->workProfilePasswordRequiredType);
        $writer->writeIntegerValue('workProfilePasswordSignInFailureCountBeforeFactoryReset', $this->workProfilePasswordSignInFailureCountBeforeFactoryReset);
        $writer->writeEnumValue('workProfileRequiredPasswordComplexity', $this->workProfileRequiredPasswordComplexity);
        $writer->writeBooleanValue('workProfileRequirePassword', $this->workProfileRequirePassword);
    }

    /**
     * Sets the passwordBlockFaceUnlock property value. Indicates whether or not to block face unlock.
     *  @param bool|null $value Value to set for the passwordBlockFaceUnlock property.
    */
    public function setPasswordBlockFaceUnlock(?bool $value ): void {
        $this->passwordBlockFaceUnlock = $value;
    }

    /**
     * Sets the passwordBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock.
     *  @param bool|null $value Value to set for the passwordBlockFingerprintUnlock property.
    */
    public function setPasswordBlockFingerprintUnlock(?bool $value ): void {
        $this->passwordBlockFingerprintUnlock = $value;
    }

    /**
     * Sets the passwordBlockIrisUnlock property value. Indicates whether or not to block iris unlock.
     *  @param bool|null $value Value to set for the passwordBlockIrisUnlock property.
    */
    public function setPasswordBlockIrisUnlock(?bool $value ): void {
        $this->passwordBlockIrisUnlock = $value;
    }

    /**
     * Sets the passwordBlockTrustAgents property value. Indicates whether or not to block Smart Lock and other trust agents.
     *  @param bool|null $value Value to set for the passwordBlockTrustAgents property.
    */
    public function setPasswordBlockTrustAgents(?bool $value ): void {
        $this->passwordBlockTrustAgents = $value;
    }

    /**
     * Sets the passwordExpirationDays property value. Number of days before the password expires. Valid values 1 to 365
     *  @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value ): void {
        $this->passwordExpirationDays = $value;
    }

    /**
     * Sets the passwordMinimumLength property value. Minimum length of passwords. Valid values 4 to 16
     *  @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value ): void {
        $this->passwordMinimumLength = $value;
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     *  @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout(?int $value ): void {
        $this->passwordMinutesOfInactivityBeforeScreenTimeout = $value;
    }

    /**
     * Sets the passwordPreviousPasswordBlockCount property value. Number of previous passwords to block. Valid values 0 to 24
     *  @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value ): void {
        $this->passwordPreviousPasswordBlockCount = $value;
    }

    /**
     * Sets the passwordRequiredType property value. Android For Work required password type.
     *  @param AndroidForWorkRequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?AndroidForWorkRequiredPasswordType $value ): void {
        $this->passwordRequiredType = $value;
    }

    /**
     * Sets the passwordSignInFailureCountBeforeFactoryReset property value. Number of sign in failures allowed before factory reset. Valid values 1 to 16
     *  @param int|null $value Value to set for the passwordSignInFailureCountBeforeFactoryReset property.
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset(?int $value ): void {
        $this->passwordSignInFailureCountBeforeFactoryReset = $value;
    }

    /**
     * Sets the requiredPasswordComplexity property value. The password complexity types that can be set on Android. One of: NONE, LOW, MEDIUM, HIGH. This is an API targeted to Android 11+.
     *  @param AndroidRequiredPasswordComplexity|null $value Value to set for the requiredPasswordComplexity property.
    */
    public function setRequiredPasswordComplexity(?AndroidRequiredPasswordComplexity $value ): void {
        $this->requiredPasswordComplexity = $value;
    }

    /**
     * Sets the securityRequireVerifyApps property value. Require the Android Verify apps feature is turned on.
     *  @param bool|null $value Value to set for the securityRequireVerifyApps property.
    */
    public function setSecurityRequireVerifyApps(?bool $value ): void {
        $this->securityRequireVerifyApps = $value;
    }

    /**
     * Sets the vpnAlwaysOnPackageIdentifier property value. Enable lockdown mode for always-on VPN.
     *  @param string|null $value Value to set for the vpnAlwaysOnPackageIdentifier property.
    */
    public function setVpnAlwaysOnPackageIdentifier(?string $value ): void {
        $this->vpnAlwaysOnPackageIdentifier = $value;
    }

    /**
     * Sets the vpnEnableAlwaysOnLockdownMode property value. Enable lockdown mode for always-on VPN.
     *  @param bool|null $value Value to set for the vpnEnableAlwaysOnLockdownMode property.
    */
    public function setVpnEnableAlwaysOnLockdownMode(?bool $value ): void {
        $this->vpnEnableAlwaysOnLockdownMode = $value;
    }

    /**
     * Sets the workProfileAllowWidgets property value. Allow widgets from work profile apps.
     *  @param bool|null $value Value to set for the workProfileAllowWidgets property.
    */
    public function setWorkProfileAllowWidgets(?bool $value ): void {
        $this->workProfileAllowWidgets = $value;
    }

    /**
     * Sets the workProfileBlockAddingAccounts property value. Block users from adding/removing accounts in work profile.
     *  @param bool|null $value Value to set for the workProfileBlockAddingAccounts property.
    */
    public function setWorkProfileBlockAddingAccounts(?bool $value ): void {
        $this->workProfileBlockAddingAccounts = $value;
    }

    /**
     * Sets the workProfileBlockCamera property value. Block work profile camera.
     *  @param bool|null $value Value to set for the workProfileBlockCamera property.
    */
    public function setWorkProfileBlockCamera(?bool $value ): void {
        $this->workProfileBlockCamera = $value;
    }

    /**
     * Sets the workProfileBlockCrossProfileCallerId property value. Block display work profile caller ID in personal profile.
     *  @param bool|null $value Value to set for the workProfileBlockCrossProfileCallerId property.
    */
    public function setWorkProfileBlockCrossProfileCallerId(?bool $value ): void {
        $this->workProfileBlockCrossProfileCallerId = $value;
    }

    /**
     * Sets the workProfileBlockCrossProfileContactsSearch property value. Block work profile contacts availability in personal profile.
     *  @param bool|null $value Value to set for the workProfileBlockCrossProfileContactsSearch property.
    */
    public function setWorkProfileBlockCrossProfileContactsSearch(?bool $value ): void {
        $this->workProfileBlockCrossProfileContactsSearch = $value;
    }

    /**
     * Sets the workProfileBlockCrossProfileCopyPaste property value. Boolean that indicates if the setting disallow cross profile copy/paste is enabled.
     *  @param bool|null $value Value to set for the workProfileBlockCrossProfileCopyPaste property.
    */
    public function setWorkProfileBlockCrossProfileCopyPaste(?bool $value ): void {
        $this->workProfileBlockCrossProfileCopyPaste = $value;
    }

    /**
     * Sets the workProfileBlockNotificationsWhileDeviceLocked property value. Indicates whether or not to block notifications while device locked.
     *  @param bool|null $value Value to set for the workProfileBlockNotificationsWhileDeviceLocked property.
    */
    public function setWorkProfileBlockNotificationsWhileDeviceLocked(?bool $value ): void {
        $this->workProfileBlockNotificationsWhileDeviceLocked = $value;
    }

    /**
     * Sets the workProfileBlockPersonalAppInstallsFromUnknownSources property value. Prevent app installations from unknown sources in the personal profile.
     *  @param bool|null $value Value to set for the workProfileBlockPersonalAppInstallsFromUnknownSources property.
    */
    public function setWorkProfileBlockPersonalAppInstallsFromUnknownSources(?bool $value ): void {
        $this->workProfileBlockPersonalAppInstallsFromUnknownSources = $value;
    }

    /**
     * Sets the workProfileBlockScreenCapture property value. Block screen capture in work profile.
     *  @param bool|null $value Value to set for the workProfileBlockScreenCapture property.
    */
    public function setWorkProfileBlockScreenCapture(?bool $value ): void {
        $this->workProfileBlockScreenCapture = $value;
    }

    /**
     * Sets the workProfileBluetoothEnableContactSharing property value. Allow bluetooth devices to access enterprise contacts.
     *  @param bool|null $value Value to set for the workProfileBluetoothEnableContactSharing property.
    */
    public function setWorkProfileBluetoothEnableContactSharing(?bool $value ): void {
        $this->workProfileBluetoothEnableContactSharing = $value;
    }

    /**
     * Sets the workProfileDataSharingType property value. Android For Work cross profile data sharing type.
     *  @param AndroidForWorkCrossProfileDataSharingType|null $value Value to set for the workProfileDataSharingType property.
    */
    public function setWorkProfileDataSharingType(?AndroidForWorkCrossProfileDataSharingType $value ): void {
        $this->workProfileDataSharingType = $value;
    }

    /**
     * Sets the workProfileDefaultAppPermissionPolicy property value. Android For Work default app permission policy type.
     *  @param AndroidForWorkDefaultAppPermissionPolicyType|null $value Value to set for the workProfileDefaultAppPermissionPolicy property.
    */
    public function setWorkProfileDefaultAppPermissionPolicy(?AndroidForWorkDefaultAppPermissionPolicyType $value ): void {
        $this->workProfileDefaultAppPermissionPolicy = $value;
    }

    /**
     * Sets the workProfilePasswordBlockFaceUnlock property value. Indicates whether or not to block face unlock for work profile.
     *  @param bool|null $value Value to set for the workProfilePasswordBlockFaceUnlock property.
    */
    public function setWorkProfilePasswordBlockFaceUnlock(?bool $value ): void {
        $this->workProfilePasswordBlockFaceUnlock = $value;
    }

    /**
     * Sets the workProfilePasswordBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock for work profile.
     *  @param bool|null $value Value to set for the workProfilePasswordBlockFingerprintUnlock property.
    */
    public function setWorkProfilePasswordBlockFingerprintUnlock(?bool $value ): void {
        $this->workProfilePasswordBlockFingerprintUnlock = $value;
    }

    /**
     * Sets the workProfilePasswordBlockIrisUnlock property value. Indicates whether or not to block iris unlock for work profile.
     *  @param bool|null $value Value to set for the workProfilePasswordBlockIrisUnlock property.
    */
    public function setWorkProfilePasswordBlockIrisUnlock(?bool $value ): void {
        $this->workProfilePasswordBlockIrisUnlock = $value;
    }

    /**
     * Sets the workProfilePasswordBlockTrustAgents property value. Indicates whether or not to block Smart Lock and other trust agents for work profile.
     *  @param bool|null $value Value to set for the workProfilePasswordBlockTrustAgents property.
    */
    public function setWorkProfilePasswordBlockTrustAgents(?bool $value ): void {
        $this->workProfilePasswordBlockTrustAgents = $value;
    }

    /**
     * Sets the workProfilePasswordExpirationDays property value. Number of days before the work profile password expires. Valid values 1 to 365
     *  @param int|null $value Value to set for the workProfilePasswordExpirationDays property.
    */
    public function setWorkProfilePasswordExpirationDays(?int $value ): void {
        $this->workProfilePasswordExpirationDays = $value;
    }

    /**
     * Sets the workProfilePasswordMinimumLength property value. Minimum length of work profile password. Valid values 4 to 16
     *  @param int|null $value Value to set for the workProfilePasswordMinimumLength property.
    */
    public function setWorkProfilePasswordMinimumLength(?int $value ): void {
        $this->workProfilePasswordMinimumLength = $value;
    }

    /**
     * Sets the workProfilePasswordMinLetterCharacters property value. Minimum # of letter characters required in work profile password. Valid values 1 to 10
     *  @param int|null $value Value to set for the workProfilePasswordMinLetterCharacters property.
    */
    public function setWorkProfilePasswordMinLetterCharacters(?int $value ): void {
        $this->workProfilePasswordMinLetterCharacters = $value;
    }

    /**
     * Sets the workProfilePasswordMinLowerCaseCharacters property value. Minimum # of lower-case characters required in work profile password. Valid values 1 to 10
     *  @param int|null $value Value to set for the workProfilePasswordMinLowerCaseCharacters property.
    */
    public function setWorkProfilePasswordMinLowerCaseCharacters(?int $value ): void {
        $this->workProfilePasswordMinLowerCaseCharacters = $value;
    }

    /**
     * Sets the workProfilePasswordMinNonLetterCharacters property value. Minimum # of non-letter characters required in work profile password. Valid values 1 to 10
     *  @param int|null $value Value to set for the workProfilePasswordMinNonLetterCharacters property.
    */
    public function setWorkProfilePasswordMinNonLetterCharacters(?int $value ): void {
        $this->workProfilePasswordMinNonLetterCharacters = $value;
    }

    /**
     * Sets the workProfilePasswordMinNumericCharacters property value. Minimum # of numeric characters required in work profile password. Valid values 1 to 10
     *  @param int|null $value Value to set for the workProfilePasswordMinNumericCharacters property.
    */
    public function setWorkProfilePasswordMinNumericCharacters(?int $value ): void {
        $this->workProfilePasswordMinNumericCharacters = $value;
    }

    /**
     * Sets the workProfilePasswordMinSymbolCharacters property value. Minimum # of symbols required in work profile password. Valid values 1 to 10
     *  @param int|null $value Value to set for the workProfilePasswordMinSymbolCharacters property.
    */
    public function setWorkProfilePasswordMinSymbolCharacters(?int $value ): void {
        $this->workProfilePasswordMinSymbolCharacters = $value;
    }

    /**
     * Sets the workProfilePasswordMinUpperCaseCharacters property value. Minimum # of upper-case characters required in work profile password. Valid values 1 to 10
     *  @param int|null $value Value to set for the workProfilePasswordMinUpperCaseCharacters property.
    */
    public function setWorkProfilePasswordMinUpperCaseCharacters(?int $value ): void {
        $this->workProfilePasswordMinUpperCaseCharacters = $value;
    }

    /**
     * Sets the workProfilePasswordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     *  @param int|null $value Value to set for the workProfilePasswordMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setWorkProfilePasswordMinutesOfInactivityBeforeScreenTimeout(?int $value ): void {
        $this->workProfilePasswordMinutesOfInactivityBeforeScreenTimeout = $value;
    }

    /**
     * Sets the workProfilePasswordPreviousPasswordBlockCount property value. Number of previous work profile passwords to block. Valid values 0 to 24
     *  @param int|null $value Value to set for the workProfilePasswordPreviousPasswordBlockCount property.
    */
    public function setWorkProfilePasswordPreviousPasswordBlockCount(?int $value ): void {
        $this->workProfilePasswordPreviousPasswordBlockCount = $value;
    }

    /**
     * Sets the workProfilePasswordRequiredType property value. Android For Work required password type.
     *  @param AndroidForWorkRequiredPasswordType|null $value Value to set for the workProfilePasswordRequiredType property.
    */
    public function setWorkProfilePasswordRequiredType(?AndroidForWorkRequiredPasswordType $value ): void {
        $this->workProfilePasswordRequiredType = $value;
    }

    /**
     * Sets the workProfilePasswordSignInFailureCountBeforeFactoryReset property value. Number of sign in failures allowed before work profile is removed and all corporate data deleted. Valid values 1 to 16
     *  @param int|null $value Value to set for the workProfilePasswordSignInFailureCountBeforeFactoryReset property.
    */
    public function setWorkProfilePasswordSignInFailureCountBeforeFactoryReset(?int $value ): void {
        $this->workProfilePasswordSignInFailureCountBeforeFactoryReset = $value;
    }

    /**
     * Sets the workProfileRequiredPasswordComplexity property value. The password complexity types that can be set on Android. One of: NONE, LOW, MEDIUM, HIGH. This is an API targeted to Android 11+.
     *  @param AndroidRequiredPasswordComplexity|null $value Value to set for the workProfileRequiredPasswordComplexity property.
    */
    public function setWorkProfileRequiredPasswordComplexity(?AndroidRequiredPasswordComplexity $value ): void {
        $this->workProfileRequiredPasswordComplexity = $value;
    }

    /**
     * Sets the workProfileRequirePassword property value. Password is required or not for work profile
     *  @param bool|null $value Value to set for the workProfileRequirePassword property.
    */
    public function setWorkProfileRequirePassword(?bool $value ): void {
        $this->workProfileRequirePassword = $value;
    }

}
