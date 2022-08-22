<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosEasEmailProfileConfiguration extends EasEmailProfileConfigurationBase implements Parsable 
{
    /**
     * @var string|null $accountName Account name.
    */
    private ?string $accountName = null;
    
    /**
     * @var EasAuthenticationMethod|null $authenticationMethod Authentication method for this Email profile. Possible values are: usernameAndPassword, certificate, derivedCredential.
    */
    private ?EasAuthenticationMethod $authenticationMethod = null;
    
    /**
     * @var bool|null $blockMovingMessagesToOtherEmailAccounts Indicates whether or not to block moving messages to other email accounts.
    */
    private ?bool $blockMovingMessagesToOtherEmailAccounts = null;
    
    /**
     * @var bool|null $blockSendingEmailFromThirdPartyApps Indicates whether or not to block sending email from third party apps.
    */
    private ?bool $blockSendingEmailFromThirdPartyApps = null;
    
    /**
     * @var bool|null $blockSyncingRecentlyUsedEmailAddresses Indicates whether or not to block syncing recently used email addresses, for instance - when composing new email.
    */
    private ?bool $blockSyncingRecentlyUsedEmailAddresses = null;
    
    /**
     * @var DeviceManagementDerivedCredentialSettings|null $derivedCredentialSettings Tenant level settings for the Derived Credentials to be used for authentication.
    */
    private ?DeviceManagementDerivedCredentialSettings $derivedCredentialSettings = null;
    
    /**
     * @var EmailSyncDuration|null $durationOfEmailToSync Possible values for email sync duration.
    */
    private ?EmailSyncDuration $durationOfEmailToSync = null;
    
    /**
     * @var EasServices|null $easServices Exchange data to sync. Possible values are: none, calendars, contacts, email, notes, reminders.
    */
    private ?EasServices $easServices = null;
    
    /**
     * @var bool|null $easServicesUserOverrideEnabled Allow users to change sync settings.
    */
    private ?bool $easServicesUserOverrideEnabled = null;
    
    /**
     * @var UserEmailSource|null $emailAddressSource Possible values for username source or email source.
    */
    private ?UserEmailSource $emailAddressSource = null;
    
    /**
     * @var EmailCertificateType|null $encryptionCertificateType Encryption Certificate type for this Email profile. Possible values are: none, certificate, derivedCredential.
    */
    private ?EmailCertificateType $encryptionCertificateType = null;
    
    /**
     * @var string|null $hostName Exchange location that (URL) that the native mail app connects to.
    */
    private ?string $hostName = null;
    
    /**
     * @var IosCertificateProfileBase|null $identityCertificate Identity certificate.
    */
    private ?IosCertificateProfileBase $identityCertificate = null;
    
    /**
     * @var string|null $perAppVPNProfileId Profile ID of the Per-App VPN policy to be used to access emails from the native Mail client
    */
    private ?string $perAppVPNProfileId = null;
    
    /**
     * @var bool|null $requireSmime Indicates whether or not to use S/MIME certificate.
    */
    private ?bool $requireSmime = null;
    
    /**
     * @var bool|null $requireSsl Indicates whether or not to use SSL.
    */
    private ?bool $requireSsl = null;
    
    /**
     * @var EmailCertificateType|null $signingCertificateType Signing Certificate type for this Email profile. Possible values are: none, certificate, derivedCredential.
    */
    private ?EmailCertificateType $signingCertificateType = null;
    
    /**
     * @var bool|null $smimeEnablePerMessageSwitch Indicates whether or not to allow unencrypted emails.
    */
    private ?bool $smimeEnablePerMessageSwitch = null;
    
    /**
     * @var bool|null $smimeEncryptByDefaultEnabled If set to true S/MIME encryption is enabled by default.
    */
    private ?bool $smimeEncryptByDefaultEnabled = null;
    
    /**
     * @var bool|null $smimeEncryptByDefaultUserOverrideEnabled If set to true, the user can toggle the encryption by default setting.
    */
    private ?bool $smimeEncryptByDefaultUserOverrideEnabled = null;
    
    /**
     * @var IosCertificateProfile|null $smimeEncryptionCertificate S/MIME encryption certificate.
    */
    private ?IosCertificateProfile $smimeEncryptionCertificate = null;
    
    /**
     * @var bool|null $smimeEncryptionCertificateUserOverrideEnabled If set to true the user can select the S/MIME encryption identity.
    */
    private ?bool $smimeEncryptionCertificateUserOverrideEnabled = null;
    
    /**
     * @var IosCertificateProfile|null $smimeSigningCertificate S/MIME signing certificate.
    */
    private ?IosCertificateProfile $smimeSigningCertificate = null;
    
    /**
     * @var bool|null $smimeSigningCertificateUserOverrideEnabled If set to true, the user can select the signing identity.
    */
    private ?bool $smimeSigningCertificateUserOverrideEnabled = null;
    
    /**
     * @var bool|null $smimeSigningEnabled If set to true S/MIME signing is enabled for this account
    */
    private ?bool $smimeSigningEnabled = null;
    
    /**
     * @var bool|null $smimeSigningUserOverrideEnabled If set to true, the user can toggle S/MIME signing on or off.
    */
    private ?bool $smimeSigningUserOverrideEnabled = null;
    
    /**
     * @var bool|null $useOAuth Specifies whether the connection should use OAuth for authentication.
    */
    private ?bool $useOAuth = null;
    
    /**
     * Instantiates a new IosEasEmailProfileConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosEasEmailProfileConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosEasEmailProfileConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosEasEmailProfileConfiguration {
        return new IosEasEmailProfileConfiguration();
    }

    /**
     * Gets the accountName property value. Account name.
     * @return string|null
    */
    public function getAccountName(): ?string {
        return $this->accountName;
    }

    /**
     * Gets the authenticationMethod property value. Authentication method for this Email profile. Possible values are: usernameAndPassword, certificate, derivedCredential.
     * @return EasAuthenticationMethod|null
    */
    public function getAuthenticationMethod(): ?EasAuthenticationMethod {
        return $this->authenticationMethod;
    }

    /**
     * Gets the blockMovingMessagesToOtherEmailAccounts property value. Indicates whether or not to block moving messages to other email accounts.
     * @return bool|null
    */
    public function getBlockMovingMessagesToOtherEmailAccounts(): ?bool {
        return $this->blockMovingMessagesToOtherEmailAccounts;
    }

    /**
     * Gets the blockSendingEmailFromThirdPartyApps property value. Indicates whether or not to block sending email from third party apps.
     * @return bool|null
    */
    public function getBlockSendingEmailFromThirdPartyApps(): ?bool {
        return $this->blockSendingEmailFromThirdPartyApps;
    }

    /**
     * Gets the blockSyncingRecentlyUsedEmailAddresses property value. Indicates whether or not to block syncing recently used email addresses, for instance - when composing new email.
     * @return bool|null
    */
    public function getBlockSyncingRecentlyUsedEmailAddresses(): ?bool {
        return $this->blockSyncingRecentlyUsedEmailAddresses;
    }

    /**
     * Gets the derivedCredentialSettings property value. Tenant level settings for the Derived Credentials to be used for authentication.
     * @return DeviceManagementDerivedCredentialSettings|null
    */
    public function getDerivedCredentialSettings(): ?DeviceManagementDerivedCredentialSettings {
        return $this->derivedCredentialSettings;
    }

    /**
     * Gets the durationOfEmailToSync property value. Possible values for email sync duration.
     * @return EmailSyncDuration|null
    */
    public function getDurationOfEmailToSync(): ?EmailSyncDuration {
        return $this->durationOfEmailToSync;
    }

    /**
     * Gets the easServices property value. Exchange data to sync. Possible values are: none, calendars, contacts, email, notes, reminders.
     * @return EasServices|null
    */
    public function getEasServices(): ?EasServices {
        return $this->easServices;
    }

    /**
     * Gets the easServicesUserOverrideEnabled property value. Allow users to change sync settings.
     * @return bool|null
    */
    public function getEasServicesUserOverrideEnabled(): ?bool {
        return $this->easServicesUserOverrideEnabled;
    }

    /**
     * Gets the emailAddressSource property value. Possible values for username source or email source.
     * @return UserEmailSource|null
    */
    public function getEmailAddressSource(): ?UserEmailSource {
        return $this->emailAddressSource;
    }

    /**
     * Gets the encryptionCertificateType property value. Encryption Certificate type for this Email profile. Possible values are: none, certificate, derivedCredential.
     * @return EmailCertificateType|null
    */
    public function getEncryptionCertificateType(): ?EmailCertificateType {
        return $this->encryptionCertificateType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountName' => function (ParseNode $n) use ($o) { $o->setAccountName($n->getStringValue()); },
            'authenticationMethod' => function (ParseNode $n) use ($o) { $o->setAuthenticationMethod($n->getEnumValue(EasAuthenticationMethod::class)); },
            'blockMovingMessagesToOtherEmailAccounts' => function (ParseNode $n) use ($o) { $o->setBlockMovingMessagesToOtherEmailAccounts($n->getBooleanValue()); },
            'blockSendingEmailFromThirdPartyApps' => function (ParseNode $n) use ($o) { $o->setBlockSendingEmailFromThirdPartyApps($n->getBooleanValue()); },
            'blockSyncingRecentlyUsedEmailAddresses' => function (ParseNode $n) use ($o) { $o->setBlockSyncingRecentlyUsedEmailAddresses($n->getBooleanValue()); },
            'derivedCredentialSettings' => function (ParseNode $n) use ($o) { $o->setDerivedCredentialSettings($n->getObjectValue(array(DeviceManagementDerivedCredentialSettings::class, 'createFromDiscriminatorValue'))); },
            'durationOfEmailToSync' => function (ParseNode $n) use ($o) { $o->setDurationOfEmailToSync($n->getEnumValue(EmailSyncDuration::class)); },
            'easServices' => function (ParseNode $n) use ($o) { $o->setEasServices($n->getEnumValue(EasServices::class)); },
            'easServicesUserOverrideEnabled' => function (ParseNode $n) use ($o) { $o->setEasServicesUserOverrideEnabled($n->getBooleanValue()); },
            'emailAddressSource' => function (ParseNode $n) use ($o) { $o->setEmailAddressSource($n->getEnumValue(UserEmailSource::class)); },
            'encryptionCertificateType' => function (ParseNode $n) use ($o) { $o->setEncryptionCertificateType($n->getEnumValue(EmailCertificateType::class)); },
            'hostName' => function (ParseNode $n) use ($o) { $o->setHostName($n->getStringValue()); },
            'identityCertificate' => function (ParseNode $n) use ($o) { $o->setIdentityCertificate($n->getObjectValue(array(IosCertificateProfileBase::class, 'createFromDiscriminatorValue'))); },
            'perAppVPNProfileId' => function (ParseNode $n) use ($o) { $o->setPerAppVPNProfileId($n->getStringValue()); },
            'requireSmime' => function (ParseNode $n) use ($o) { $o->setRequireSmime($n->getBooleanValue()); },
            'requireSsl' => function (ParseNode $n) use ($o) { $o->setRequireSsl($n->getBooleanValue()); },
            'signingCertificateType' => function (ParseNode $n) use ($o) { $o->setSigningCertificateType($n->getEnumValue(EmailCertificateType::class)); },
            'smimeEnablePerMessageSwitch' => function (ParseNode $n) use ($o) { $o->setSmimeEnablePerMessageSwitch($n->getBooleanValue()); },
            'smimeEncryptByDefaultEnabled' => function (ParseNode $n) use ($o) { $o->setSmimeEncryptByDefaultEnabled($n->getBooleanValue()); },
            'smimeEncryptByDefaultUserOverrideEnabled' => function (ParseNode $n) use ($o) { $o->setSmimeEncryptByDefaultUserOverrideEnabled($n->getBooleanValue()); },
            'smimeEncryptionCertificate' => function (ParseNode $n) use ($o) { $o->setSmimeEncryptionCertificate($n->getObjectValue(array(IosCertificateProfile::class, 'createFromDiscriminatorValue'))); },
            'smimeEncryptionCertificateUserOverrideEnabled' => function (ParseNode $n) use ($o) { $o->setSmimeEncryptionCertificateUserOverrideEnabled($n->getBooleanValue()); },
            'smimeSigningCertificate' => function (ParseNode $n) use ($o) { $o->setSmimeSigningCertificate($n->getObjectValue(array(IosCertificateProfile::class, 'createFromDiscriminatorValue'))); },
            'smimeSigningCertificateUserOverrideEnabled' => function (ParseNode $n) use ($o) { $o->setSmimeSigningCertificateUserOverrideEnabled($n->getBooleanValue()); },
            'smimeSigningEnabled' => function (ParseNode $n) use ($o) { $o->setSmimeSigningEnabled($n->getBooleanValue()); },
            'smimeSigningUserOverrideEnabled' => function (ParseNode $n) use ($o) { $o->setSmimeSigningUserOverrideEnabled($n->getBooleanValue()); },
            'useOAuth' => function (ParseNode $n) use ($o) { $o->setUseOAuth($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the hostName property value. Exchange location that (URL) that the native mail app connects to.
     * @return string|null
    */
    public function getHostName(): ?string {
        return $this->hostName;
    }

    /**
     * Gets the identityCertificate property value. Identity certificate.
     * @return IosCertificateProfileBase|null
    */
    public function getIdentityCertificate(): ?IosCertificateProfileBase {
        return $this->identityCertificate;
    }

    /**
     * Gets the perAppVPNProfileId property value. Profile ID of the Per-App VPN policy to be used to access emails from the native Mail client
     * @return string|null
    */
    public function getPerAppVPNProfileId(): ?string {
        return $this->perAppVPNProfileId;
    }

    /**
     * Gets the requireSmime property value. Indicates whether or not to use S/MIME certificate.
     * @return bool|null
    */
    public function getRequireSmime(): ?bool {
        return $this->requireSmime;
    }

    /**
     * Gets the requireSsl property value. Indicates whether or not to use SSL.
     * @return bool|null
    */
    public function getRequireSsl(): ?bool {
        return $this->requireSsl;
    }

    /**
     * Gets the signingCertificateType property value. Signing Certificate type for this Email profile. Possible values are: none, certificate, derivedCredential.
     * @return EmailCertificateType|null
    */
    public function getSigningCertificateType(): ?EmailCertificateType {
        return $this->signingCertificateType;
    }

    /**
     * Gets the smimeEnablePerMessageSwitch property value. Indicates whether or not to allow unencrypted emails.
     * @return bool|null
    */
    public function getSmimeEnablePerMessageSwitch(): ?bool {
        return $this->smimeEnablePerMessageSwitch;
    }

    /**
     * Gets the smimeEncryptByDefaultEnabled property value. If set to true S/MIME encryption is enabled by default.
     * @return bool|null
    */
    public function getSmimeEncryptByDefaultEnabled(): ?bool {
        return $this->smimeEncryptByDefaultEnabled;
    }

    /**
     * Gets the smimeEncryptByDefaultUserOverrideEnabled property value. If set to true, the user can toggle the encryption by default setting.
     * @return bool|null
    */
    public function getSmimeEncryptByDefaultUserOverrideEnabled(): ?bool {
        return $this->smimeEncryptByDefaultUserOverrideEnabled;
    }

    /**
     * Gets the smimeEncryptionCertificate property value. S/MIME encryption certificate.
     * @return IosCertificateProfile|null
    */
    public function getSmimeEncryptionCertificate(): ?IosCertificateProfile {
        return $this->smimeEncryptionCertificate;
    }

    /**
     * Gets the smimeEncryptionCertificateUserOverrideEnabled property value. If set to true the user can select the S/MIME encryption identity.
     * @return bool|null
    */
    public function getSmimeEncryptionCertificateUserOverrideEnabled(): ?bool {
        return $this->smimeEncryptionCertificateUserOverrideEnabled;
    }

    /**
     * Gets the smimeSigningCertificate property value. S/MIME signing certificate.
     * @return IosCertificateProfile|null
    */
    public function getSmimeSigningCertificate(): ?IosCertificateProfile {
        return $this->smimeSigningCertificate;
    }

    /**
     * Gets the smimeSigningCertificateUserOverrideEnabled property value. If set to true, the user can select the signing identity.
     * @return bool|null
    */
    public function getSmimeSigningCertificateUserOverrideEnabled(): ?bool {
        return $this->smimeSigningCertificateUserOverrideEnabled;
    }

    /**
     * Gets the smimeSigningEnabled property value. If set to true S/MIME signing is enabled for this account
     * @return bool|null
    */
    public function getSmimeSigningEnabled(): ?bool {
        return $this->smimeSigningEnabled;
    }

    /**
     * Gets the smimeSigningUserOverrideEnabled property value. If set to true, the user can toggle S/MIME signing on or off.
     * @return bool|null
    */
    public function getSmimeSigningUserOverrideEnabled(): ?bool {
        return $this->smimeSigningUserOverrideEnabled;
    }

    /**
     * Gets the useOAuth property value. Specifies whether the connection should use OAuth for authentication.
     * @return bool|null
    */
    public function getUseOAuth(): ?bool {
        return $this->useOAuth;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accountName', $this->accountName);
        $writer->writeEnumValue('authenticationMethod', $this->authenticationMethod);
        $writer->writeBooleanValue('blockMovingMessagesToOtherEmailAccounts', $this->blockMovingMessagesToOtherEmailAccounts);
        $writer->writeBooleanValue('blockSendingEmailFromThirdPartyApps', $this->blockSendingEmailFromThirdPartyApps);
        $writer->writeBooleanValue('blockSyncingRecentlyUsedEmailAddresses', $this->blockSyncingRecentlyUsedEmailAddresses);
        $writer->writeObjectValue('derivedCredentialSettings', $this->derivedCredentialSettings);
        $writer->writeEnumValue('durationOfEmailToSync', $this->durationOfEmailToSync);
        $writer->writeEnumValue('easServices', $this->easServices);
        $writer->writeBooleanValue('easServicesUserOverrideEnabled', $this->easServicesUserOverrideEnabled);
        $writer->writeEnumValue('emailAddressSource', $this->emailAddressSource);
        $writer->writeEnumValue('encryptionCertificateType', $this->encryptionCertificateType);
        $writer->writeStringValue('hostName', $this->hostName);
        $writer->writeObjectValue('identityCertificate', $this->identityCertificate);
        $writer->writeStringValue('perAppVPNProfileId', $this->perAppVPNProfileId);
        $writer->writeBooleanValue('requireSmime', $this->requireSmime);
        $writer->writeBooleanValue('requireSsl', $this->requireSsl);
        $writer->writeEnumValue('signingCertificateType', $this->signingCertificateType);
        $writer->writeBooleanValue('smimeEnablePerMessageSwitch', $this->smimeEnablePerMessageSwitch);
        $writer->writeBooleanValue('smimeEncryptByDefaultEnabled', $this->smimeEncryptByDefaultEnabled);
        $writer->writeBooleanValue('smimeEncryptByDefaultUserOverrideEnabled', $this->smimeEncryptByDefaultUserOverrideEnabled);
        $writer->writeObjectValue('smimeEncryptionCertificate', $this->smimeEncryptionCertificate);
        $writer->writeBooleanValue('smimeEncryptionCertificateUserOverrideEnabled', $this->smimeEncryptionCertificateUserOverrideEnabled);
        $writer->writeObjectValue('smimeSigningCertificate', $this->smimeSigningCertificate);
        $writer->writeBooleanValue('smimeSigningCertificateUserOverrideEnabled', $this->smimeSigningCertificateUserOverrideEnabled);
        $writer->writeBooleanValue('smimeSigningEnabled', $this->smimeSigningEnabled);
        $writer->writeBooleanValue('smimeSigningUserOverrideEnabled', $this->smimeSigningUserOverrideEnabled);
        $writer->writeBooleanValue('useOAuth', $this->useOAuth);
    }

    /**
     * Sets the accountName property value. Account name.
     *  @param string|null $value Value to set for the accountName property.
    */
    public function setAccountName(?string $value ): void {
        $this->accountName = $value;
    }

    /**
     * Sets the authenticationMethod property value. Authentication method for this Email profile. Possible values are: usernameAndPassword, certificate, derivedCredential.
     *  @param EasAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?EasAuthenticationMethod $value ): void {
        $this->authenticationMethod = $value;
    }

    /**
     * Sets the blockMovingMessagesToOtherEmailAccounts property value. Indicates whether or not to block moving messages to other email accounts.
     *  @param bool|null $value Value to set for the blockMovingMessagesToOtherEmailAccounts property.
    */
    public function setBlockMovingMessagesToOtherEmailAccounts(?bool $value ): void {
        $this->blockMovingMessagesToOtherEmailAccounts = $value;
    }

    /**
     * Sets the blockSendingEmailFromThirdPartyApps property value. Indicates whether or not to block sending email from third party apps.
     *  @param bool|null $value Value to set for the blockSendingEmailFromThirdPartyApps property.
    */
    public function setBlockSendingEmailFromThirdPartyApps(?bool $value ): void {
        $this->blockSendingEmailFromThirdPartyApps = $value;
    }

    /**
     * Sets the blockSyncingRecentlyUsedEmailAddresses property value. Indicates whether or not to block syncing recently used email addresses, for instance - when composing new email.
     *  @param bool|null $value Value to set for the blockSyncingRecentlyUsedEmailAddresses property.
    */
    public function setBlockSyncingRecentlyUsedEmailAddresses(?bool $value ): void {
        $this->blockSyncingRecentlyUsedEmailAddresses = $value;
    }

    /**
     * Sets the derivedCredentialSettings property value. Tenant level settings for the Derived Credentials to be used for authentication.
     *  @param DeviceManagementDerivedCredentialSettings|null $value Value to set for the derivedCredentialSettings property.
    */
    public function setDerivedCredentialSettings(?DeviceManagementDerivedCredentialSettings $value ): void {
        $this->derivedCredentialSettings = $value;
    }

    /**
     * Sets the durationOfEmailToSync property value. Possible values for email sync duration.
     *  @param EmailSyncDuration|null $value Value to set for the durationOfEmailToSync property.
    */
    public function setDurationOfEmailToSync(?EmailSyncDuration $value ): void {
        $this->durationOfEmailToSync = $value;
    }

    /**
     * Sets the easServices property value. Exchange data to sync. Possible values are: none, calendars, contacts, email, notes, reminders.
     *  @param EasServices|null $value Value to set for the easServices property.
    */
    public function setEasServices(?EasServices $value ): void {
        $this->easServices = $value;
    }

    /**
     * Sets the easServicesUserOverrideEnabled property value. Allow users to change sync settings.
     *  @param bool|null $value Value to set for the easServicesUserOverrideEnabled property.
    */
    public function setEasServicesUserOverrideEnabled(?bool $value ): void {
        $this->easServicesUserOverrideEnabled = $value;
    }

    /**
     * Sets the emailAddressSource property value. Possible values for username source or email source.
     *  @param UserEmailSource|null $value Value to set for the emailAddressSource property.
    */
    public function setEmailAddressSource(?UserEmailSource $value ): void {
        $this->emailAddressSource = $value;
    }

    /**
     * Sets the encryptionCertificateType property value. Encryption Certificate type for this Email profile. Possible values are: none, certificate, derivedCredential.
     *  @param EmailCertificateType|null $value Value to set for the encryptionCertificateType property.
    */
    public function setEncryptionCertificateType(?EmailCertificateType $value ): void {
        $this->encryptionCertificateType = $value;
    }

    /**
     * Sets the hostName property value. Exchange location that (URL) that the native mail app connects to.
     *  @param string|null $value Value to set for the hostName property.
    */
    public function setHostName(?string $value ): void {
        $this->hostName = $value;
    }

    /**
     * Sets the identityCertificate property value. Identity certificate.
     *  @param IosCertificateProfileBase|null $value Value to set for the identityCertificate property.
    */
    public function setIdentityCertificate(?IosCertificateProfileBase $value ): void {
        $this->identityCertificate = $value;
    }

    /**
     * Sets the perAppVPNProfileId property value. Profile ID of the Per-App VPN policy to be used to access emails from the native Mail client
     *  @param string|null $value Value to set for the perAppVPNProfileId property.
    */
    public function setPerAppVPNProfileId(?string $value ): void {
        $this->perAppVPNProfileId = $value;
    }

    /**
     * Sets the requireSmime property value. Indicates whether or not to use S/MIME certificate.
     *  @param bool|null $value Value to set for the requireSmime property.
    */
    public function setRequireSmime(?bool $value ): void {
        $this->requireSmime = $value;
    }

    /**
     * Sets the requireSsl property value. Indicates whether or not to use SSL.
     *  @param bool|null $value Value to set for the requireSsl property.
    */
    public function setRequireSsl(?bool $value ): void {
        $this->requireSsl = $value;
    }

    /**
     * Sets the signingCertificateType property value. Signing Certificate type for this Email profile. Possible values are: none, certificate, derivedCredential.
     *  @param EmailCertificateType|null $value Value to set for the signingCertificateType property.
    */
    public function setSigningCertificateType(?EmailCertificateType $value ): void {
        $this->signingCertificateType = $value;
    }

    /**
     * Sets the smimeEnablePerMessageSwitch property value. Indicates whether or not to allow unencrypted emails.
     *  @param bool|null $value Value to set for the smimeEnablePerMessageSwitch property.
    */
    public function setSmimeEnablePerMessageSwitch(?bool $value ): void {
        $this->smimeEnablePerMessageSwitch = $value;
    }

    /**
     * Sets the smimeEncryptByDefaultEnabled property value. If set to true S/MIME encryption is enabled by default.
     *  @param bool|null $value Value to set for the smimeEncryptByDefaultEnabled property.
    */
    public function setSmimeEncryptByDefaultEnabled(?bool $value ): void {
        $this->smimeEncryptByDefaultEnabled = $value;
    }

    /**
     * Sets the smimeEncryptByDefaultUserOverrideEnabled property value. If set to true, the user can toggle the encryption by default setting.
     *  @param bool|null $value Value to set for the smimeEncryptByDefaultUserOverrideEnabled property.
    */
    public function setSmimeEncryptByDefaultUserOverrideEnabled(?bool $value ): void {
        $this->smimeEncryptByDefaultUserOverrideEnabled = $value;
    }

    /**
     * Sets the smimeEncryptionCertificate property value. S/MIME encryption certificate.
     *  @param IosCertificateProfile|null $value Value to set for the smimeEncryptionCertificate property.
    */
    public function setSmimeEncryptionCertificate(?IosCertificateProfile $value ): void {
        $this->smimeEncryptionCertificate = $value;
    }

    /**
     * Sets the smimeEncryptionCertificateUserOverrideEnabled property value. If set to true the user can select the S/MIME encryption identity.
     *  @param bool|null $value Value to set for the smimeEncryptionCertificateUserOverrideEnabled property.
    */
    public function setSmimeEncryptionCertificateUserOverrideEnabled(?bool $value ): void {
        $this->smimeEncryptionCertificateUserOverrideEnabled = $value;
    }

    /**
     * Sets the smimeSigningCertificate property value. S/MIME signing certificate.
     *  @param IosCertificateProfile|null $value Value to set for the smimeSigningCertificate property.
    */
    public function setSmimeSigningCertificate(?IosCertificateProfile $value ): void {
        $this->smimeSigningCertificate = $value;
    }

    /**
     * Sets the smimeSigningCertificateUserOverrideEnabled property value. If set to true, the user can select the signing identity.
     *  @param bool|null $value Value to set for the smimeSigningCertificateUserOverrideEnabled property.
    */
    public function setSmimeSigningCertificateUserOverrideEnabled(?bool $value ): void {
        $this->smimeSigningCertificateUserOverrideEnabled = $value;
    }

    /**
     * Sets the smimeSigningEnabled property value. If set to true S/MIME signing is enabled for this account
     *  @param bool|null $value Value to set for the smimeSigningEnabled property.
    */
    public function setSmimeSigningEnabled(?bool $value ): void {
        $this->smimeSigningEnabled = $value;
    }

    /**
     * Sets the smimeSigningUserOverrideEnabled property value. If set to true, the user can toggle S/MIME signing on or off.
     *  @param bool|null $value Value to set for the smimeSigningUserOverrideEnabled property.
    */
    public function setSmimeSigningUserOverrideEnabled(?bool $value ): void {
        $this->smimeSigningUserOverrideEnabled = $value;
    }

    /**
     * Sets the useOAuth property value. Specifies whether the connection should use OAuth for authentication.
     *  @param bool|null $value Value to set for the useOAuth property.
    */
    public function setUseOAuth(?bool $value ): void {
        $this->useOAuth = $value;
    }

}
