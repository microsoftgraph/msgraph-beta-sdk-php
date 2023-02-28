<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosEasEmailProfileConfiguration extends EasEmailProfileConfigurationBase implements Parsable 
{
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
        return $this->getBackingStore()->get('accountName');
    }

    /**
     * Gets the authenticationMethod property value. Authentication method for this Email profile. Possible values are: usernameAndPassword, certificate, derivedCredential.
     * @return EasAuthenticationMethod|null
    */
    public function getAuthenticationMethod(): ?EasAuthenticationMethod {
        return $this->getBackingStore()->get('authenticationMethod');
    }

    /**
     * Gets the blockMovingMessagesToOtherEmailAccounts property value. Indicates whether or not to block moving messages to other email accounts.
     * @return bool|null
    */
    public function getBlockMovingMessagesToOtherEmailAccounts(): ?bool {
        return $this->getBackingStore()->get('blockMovingMessagesToOtherEmailAccounts');
    }

    /**
     * Gets the blockSendingEmailFromThirdPartyApps property value. Indicates whether or not to block sending email from third party apps.
     * @return bool|null
    */
    public function getBlockSendingEmailFromThirdPartyApps(): ?bool {
        return $this->getBackingStore()->get('blockSendingEmailFromThirdPartyApps');
    }

    /**
     * Gets the blockSyncingRecentlyUsedEmailAddresses property value. Indicates whether or not to block syncing recently used email addresses, for instance - when composing new email.
     * @return bool|null
    */
    public function getBlockSyncingRecentlyUsedEmailAddresses(): ?bool {
        return $this->getBackingStore()->get('blockSyncingRecentlyUsedEmailAddresses');
    }

    /**
     * Gets the derivedCredentialSettings property value. Tenant level settings for the Derived Credentials to be used for authentication.
     * @return DeviceManagementDerivedCredentialSettings|null
    */
    public function getDerivedCredentialSettings(): ?DeviceManagementDerivedCredentialSettings {
        return $this->getBackingStore()->get('derivedCredentialSettings');
    }

    /**
     * Gets the durationOfEmailToSync property value. Possible values for email sync duration.
     * @return EmailSyncDuration|null
    */
    public function getDurationOfEmailToSync(): ?EmailSyncDuration {
        return $this->getBackingStore()->get('durationOfEmailToSync');
    }

    /**
     * Gets the easServices property value. Exchange data to sync. Possible values are: none, calendars, contacts, email, notes, reminders.
     * @return EasServices|null
    */
    public function getEasServices(): ?EasServices {
        return $this->getBackingStore()->get('easServices');
    }

    /**
     * Gets the easServicesUserOverrideEnabled property value. Allow users to change sync settings.
     * @return bool|null
    */
    public function getEasServicesUserOverrideEnabled(): ?bool {
        return $this->getBackingStore()->get('easServicesUserOverrideEnabled');
    }

    /**
     * Gets the emailAddressSource property value. Possible values for username source or email source.
     * @return UserEmailSource|null
    */
    public function getEmailAddressSource(): ?UserEmailSource {
        return $this->getBackingStore()->get('emailAddressSource');
    }

    /**
     * Gets the encryptionCertificateType property value. Encryption Certificate type for this Email profile. Possible values are: none, certificate, derivedCredential.
     * @return EmailCertificateType|null
    */
    public function getEncryptionCertificateType(): ?EmailCertificateType {
        return $this->getBackingStore()->get('encryptionCertificateType');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountName' => fn(ParseNode $n) => $o->setAccountName($n->getStringValue()),
            'authenticationMethod' => fn(ParseNode $n) => $o->setAuthenticationMethod($n->getEnumValue(EasAuthenticationMethod::class)),
            'blockMovingMessagesToOtherEmailAccounts' => fn(ParseNode $n) => $o->setBlockMovingMessagesToOtherEmailAccounts($n->getBooleanValue()),
            'blockSendingEmailFromThirdPartyApps' => fn(ParseNode $n) => $o->setBlockSendingEmailFromThirdPartyApps($n->getBooleanValue()),
            'blockSyncingRecentlyUsedEmailAddresses' => fn(ParseNode $n) => $o->setBlockSyncingRecentlyUsedEmailAddresses($n->getBooleanValue()),
            'derivedCredentialSettings' => fn(ParseNode $n) => $o->setDerivedCredentialSettings($n->getObjectValue([DeviceManagementDerivedCredentialSettings::class, 'createFromDiscriminatorValue'])),
            'durationOfEmailToSync' => fn(ParseNode $n) => $o->setDurationOfEmailToSync($n->getEnumValue(EmailSyncDuration::class)),
            'easServices' => fn(ParseNode $n) => $o->setEasServices($n->getEnumValue(EasServices::class)),
            'easServicesUserOverrideEnabled' => fn(ParseNode $n) => $o->setEasServicesUserOverrideEnabled($n->getBooleanValue()),
            'emailAddressSource' => fn(ParseNode $n) => $o->setEmailAddressSource($n->getEnumValue(UserEmailSource::class)),
            'encryptionCertificateType' => fn(ParseNode $n) => $o->setEncryptionCertificateType($n->getEnumValue(EmailCertificateType::class)),
            'hostName' => fn(ParseNode $n) => $o->setHostName($n->getStringValue()),
            'identityCertificate' => fn(ParseNode $n) => $o->setIdentityCertificate($n->getObjectValue([IosCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'perAppVPNProfileId' => fn(ParseNode $n) => $o->setPerAppVPNProfileId($n->getStringValue()),
            'requireSmime' => fn(ParseNode $n) => $o->setRequireSmime($n->getBooleanValue()),
            'requireSsl' => fn(ParseNode $n) => $o->setRequireSsl($n->getBooleanValue()),
            'signingCertificateType' => fn(ParseNode $n) => $o->setSigningCertificateType($n->getEnumValue(EmailCertificateType::class)),
            'smimeEnablePerMessageSwitch' => fn(ParseNode $n) => $o->setSmimeEnablePerMessageSwitch($n->getBooleanValue()),
            'smimeEncryptByDefaultEnabled' => fn(ParseNode $n) => $o->setSmimeEncryptByDefaultEnabled($n->getBooleanValue()),
            'smimeEncryptByDefaultUserOverrideEnabled' => fn(ParseNode $n) => $o->setSmimeEncryptByDefaultUserOverrideEnabled($n->getBooleanValue()),
            'smimeEncryptionCertificate' => fn(ParseNode $n) => $o->setSmimeEncryptionCertificate($n->getObjectValue([IosCertificateProfile::class, 'createFromDiscriminatorValue'])),
            'smimeEncryptionCertificateUserOverrideEnabled' => fn(ParseNode $n) => $o->setSmimeEncryptionCertificateUserOverrideEnabled($n->getBooleanValue()),
            'smimeSigningCertificate' => fn(ParseNode $n) => $o->setSmimeSigningCertificate($n->getObjectValue([IosCertificateProfile::class, 'createFromDiscriminatorValue'])),
            'smimeSigningCertificateUserOverrideEnabled' => fn(ParseNode $n) => $o->setSmimeSigningCertificateUserOverrideEnabled($n->getBooleanValue()),
            'smimeSigningEnabled' => fn(ParseNode $n) => $o->setSmimeSigningEnabled($n->getBooleanValue()),
            'smimeSigningUserOverrideEnabled' => fn(ParseNode $n) => $o->setSmimeSigningUserOverrideEnabled($n->getBooleanValue()),
            'useOAuth' => fn(ParseNode $n) => $o->setUseOAuth($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the hostName property value. Exchange location that (URL) that the native mail app connects to.
     * @return string|null
    */
    public function getHostName(): ?string {
        return $this->getBackingStore()->get('hostName');
    }

    /**
     * Gets the identityCertificate property value. Identity certificate.
     * @return IosCertificateProfileBase|null
    */
    public function getIdentityCertificate(): ?IosCertificateProfileBase {
        return $this->getBackingStore()->get('identityCertificate');
    }

    /**
     * Gets the perAppVPNProfileId property value. Profile ID of the Per-App VPN policy to be used to access emails from the native Mail client
     * @return string|null
    */
    public function getPerAppVPNProfileId(): ?string {
        return $this->getBackingStore()->get('perAppVPNProfileId');
    }

    /**
     * Gets the requireSmime property value. Indicates whether or not to use S/MIME certificate.
     * @return bool|null
    */
    public function getRequireSmime(): ?bool {
        return $this->getBackingStore()->get('requireSmime');
    }

    /**
     * Gets the requireSsl property value. Indicates whether or not to use SSL.
     * @return bool|null
    */
    public function getRequireSsl(): ?bool {
        return $this->getBackingStore()->get('requireSsl');
    }

    /**
     * Gets the signingCertificateType property value. Signing Certificate type for this Email profile. Possible values are: none, certificate, derivedCredential.
     * @return EmailCertificateType|null
    */
    public function getSigningCertificateType(): ?EmailCertificateType {
        return $this->getBackingStore()->get('signingCertificateType');
    }

    /**
     * Gets the smimeEnablePerMessageSwitch property value. Indicates whether or not to allow unencrypted emails.
     * @return bool|null
    */
    public function getSmimeEnablePerMessageSwitch(): ?bool {
        return $this->getBackingStore()->get('smimeEnablePerMessageSwitch');
    }

    /**
     * Gets the smimeEncryptByDefaultEnabled property value. If set to true S/MIME encryption is enabled by default.
     * @return bool|null
    */
    public function getSmimeEncryptByDefaultEnabled(): ?bool {
        return $this->getBackingStore()->get('smimeEncryptByDefaultEnabled');
    }

    /**
     * Gets the smimeEncryptByDefaultUserOverrideEnabled property value. If set to true, the user can toggle the encryption by default setting.
     * @return bool|null
    */
    public function getSmimeEncryptByDefaultUserOverrideEnabled(): ?bool {
        return $this->getBackingStore()->get('smimeEncryptByDefaultUserOverrideEnabled');
    }

    /**
     * Gets the smimeEncryptionCertificate property value. S/MIME encryption certificate.
     * @return IosCertificateProfile|null
    */
    public function getSmimeEncryptionCertificate(): ?IosCertificateProfile {
        return $this->getBackingStore()->get('smimeEncryptionCertificate');
    }

    /**
     * Gets the smimeEncryptionCertificateUserOverrideEnabled property value. If set to true the user can select the S/MIME encryption identity.
     * @return bool|null
    */
    public function getSmimeEncryptionCertificateUserOverrideEnabled(): ?bool {
        return $this->getBackingStore()->get('smimeEncryptionCertificateUserOverrideEnabled');
    }

    /**
     * Gets the smimeSigningCertificate property value. S/MIME signing certificate.
     * @return IosCertificateProfile|null
    */
    public function getSmimeSigningCertificate(): ?IosCertificateProfile {
        return $this->getBackingStore()->get('smimeSigningCertificate');
    }

    /**
     * Gets the smimeSigningCertificateUserOverrideEnabled property value. If set to true, the user can select the signing identity.
     * @return bool|null
    */
    public function getSmimeSigningCertificateUserOverrideEnabled(): ?bool {
        return $this->getBackingStore()->get('smimeSigningCertificateUserOverrideEnabled');
    }

    /**
     * Gets the smimeSigningEnabled property value. If set to true S/MIME signing is enabled for this account
     * @return bool|null
    */
    public function getSmimeSigningEnabled(): ?bool {
        return $this->getBackingStore()->get('smimeSigningEnabled');
    }

    /**
     * Gets the smimeSigningUserOverrideEnabled property value. If set to true, the user can toggle S/MIME signing on or off.
     * @return bool|null
    */
    public function getSmimeSigningUserOverrideEnabled(): ?bool {
        return $this->getBackingStore()->get('smimeSigningUserOverrideEnabled');
    }

    /**
     * Gets the useOAuth property value. Specifies whether the connection should use OAuth for authentication.
     * @return bool|null
    */
    public function getUseOAuth(): ?bool {
        return $this->getBackingStore()->get('useOAuth');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accountName', $this->getAccountName());
        $writer->writeEnumValue('authenticationMethod', $this->getAuthenticationMethod());
        $writer->writeBooleanValue('blockMovingMessagesToOtherEmailAccounts', $this->getBlockMovingMessagesToOtherEmailAccounts());
        $writer->writeBooleanValue('blockSendingEmailFromThirdPartyApps', $this->getBlockSendingEmailFromThirdPartyApps());
        $writer->writeBooleanValue('blockSyncingRecentlyUsedEmailAddresses', $this->getBlockSyncingRecentlyUsedEmailAddresses());
        $writer->writeObjectValue('derivedCredentialSettings', $this->getDerivedCredentialSettings());
        $writer->writeEnumValue('durationOfEmailToSync', $this->getDurationOfEmailToSync());
        $writer->writeEnumValue('easServices', $this->getEasServices());
        $writer->writeBooleanValue('easServicesUserOverrideEnabled', $this->getEasServicesUserOverrideEnabled());
        $writer->writeEnumValue('emailAddressSource', $this->getEmailAddressSource());
        $writer->writeEnumValue('encryptionCertificateType', $this->getEncryptionCertificateType());
        $writer->writeStringValue('hostName', $this->getHostName());
        $writer->writeObjectValue('identityCertificate', $this->getIdentityCertificate());
        $writer->writeStringValue('perAppVPNProfileId', $this->getPerAppVPNProfileId());
        $writer->writeBooleanValue('requireSmime', $this->getRequireSmime());
        $writer->writeBooleanValue('requireSsl', $this->getRequireSsl());
        $writer->writeEnumValue('signingCertificateType', $this->getSigningCertificateType());
        $writer->writeBooleanValue('smimeEnablePerMessageSwitch', $this->getSmimeEnablePerMessageSwitch());
        $writer->writeBooleanValue('smimeEncryptByDefaultEnabled', $this->getSmimeEncryptByDefaultEnabled());
        $writer->writeBooleanValue('smimeEncryptByDefaultUserOverrideEnabled', $this->getSmimeEncryptByDefaultUserOverrideEnabled());
        $writer->writeObjectValue('smimeEncryptionCertificate', $this->getSmimeEncryptionCertificate());
        $writer->writeBooleanValue('smimeEncryptionCertificateUserOverrideEnabled', $this->getSmimeEncryptionCertificateUserOverrideEnabled());
        $writer->writeObjectValue('smimeSigningCertificate', $this->getSmimeSigningCertificate());
        $writer->writeBooleanValue('smimeSigningCertificateUserOverrideEnabled', $this->getSmimeSigningCertificateUserOverrideEnabled());
        $writer->writeBooleanValue('smimeSigningEnabled', $this->getSmimeSigningEnabled());
        $writer->writeBooleanValue('smimeSigningUserOverrideEnabled', $this->getSmimeSigningUserOverrideEnabled());
        $writer->writeBooleanValue('useOAuth', $this->getUseOAuth());
    }

    /**
     * Sets the accountName property value. Account name.
     * @param string|null $value Value to set for the accountName property.
    */
    public function setAccountName(?string $value): void {
        $this->getBackingStore()->set('accountName', $value);
    }

    /**
     * Sets the authenticationMethod property value. Authentication method for this Email profile. Possible values are: usernameAndPassword, certificate, derivedCredential.
     * @param EasAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?EasAuthenticationMethod $value): void {
        $this->getBackingStore()->set('authenticationMethod', $value);
    }

    /**
     * Sets the blockMovingMessagesToOtherEmailAccounts property value. Indicates whether or not to block moving messages to other email accounts.
     * @param bool|null $value Value to set for the blockMovingMessagesToOtherEmailAccounts property.
    */
    public function setBlockMovingMessagesToOtherEmailAccounts(?bool $value): void {
        $this->getBackingStore()->set('blockMovingMessagesToOtherEmailAccounts', $value);
    }

    /**
     * Sets the blockSendingEmailFromThirdPartyApps property value. Indicates whether or not to block sending email from third party apps.
     * @param bool|null $value Value to set for the blockSendingEmailFromThirdPartyApps property.
    */
    public function setBlockSendingEmailFromThirdPartyApps(?bool $value): void {
        $this->getBackingStore()->set('blockSendingEmailFromThirdPartyApps', $value);
    }

    /**
     * Sets the blockSyncingRecentlyUsedEmailAddresses property value. Indicates whether or not to block syncing recently used email addresses, for instance - when composing new email.
     * @param bool|null $value Value to set for the blockSyncingRecentlyUsedEmailAddresses property.
    */
    public function setBlockSyncingRecentlyUsedEmailAddresses(?bool $value): void {
        $this->getBackingStore()->set('blockSyncingRecentlyUsedEmailAddresses', $value);
    }

    /**
     * Sets the derivedCredentialSettings property value. Tenant level settings for the Derived Credentials to be used for authentication.
     * @param DeviceManagementDerivedCredentialSettings|null $value Value to set for the derivedCredentialSettings property.
    */
    public function setDerivedCredentialSettings(?DeviceManagementDerivedCredentialSettings $value): void {
        $this->getBackingStore()->set('derivedCredentialSettings', $value);
    }

    /**
     * Sets the durationOfEmailToSync property value. Possible values for email sync duration.
     * @param EmailSyncDuration|null $value Value to set for the durationOfEmailToSync property.
    */
    public function setDurationOfEmailToSync(?EmailSyncDuration $value): void {
        $this->getBackingStore()->set('durationOfEmailToSync', $value);
    }

    /**
     * Sets the easServices property value. Exchange data to sync. Possible values are: none, calendars, contacts, email, notes, reminders.
     * @param EasServices|null $value Value to set for the easServices property.
    */
    public function setEasServices(?EasServices $value): void {
        $this->getBackingStore()->set('easServices', $value);
    }

    /**
     * Sets the easServicesUserOverrideEnabled property value. Allow users to change sync settings.
     * @param bool|null $value Value to set for the easServicesUserOverrideEnabled property.
    */
    public function setEasServicesUserOverrideEnabled(?bool $value): void {
        $this->getBackingStore()->set('easServicesUserOverrideEnabled', $value);
    }

    /**
     * Sets the emailAddressSource property value. Possible values for username source or email source.
     * @param UserEmailSource|null $value Value to set for the emailAddressSource property.
    */
    public function setEmailAddressSource(?UserEmailSource $value): void {
        $this->getBackingStore()->set('emailAddressSource', $value);
    }

    /**
     * Sets the encryptionCertificateType property value. Encryption Certificate type for this Email profile. Possible values are: none, certificate, derivedCredential.
     * @param EmailCertificateType|null $value Value to set for the encryptionCertificateType property.
    */
    public function setEncryptionCertificateType(?EmailCertificateType $value): void {
        $this->getBackingStore()->set('encryptionCertificateType', $value);
    }

    /**
     * Sets the hostName property value. Exchange location that (URL) that the native mail app connects to.
     * @param string|null $value Value to set for the hostName property.
    */
    public function setHostName(?string $value): void {
        $this->getBackingStore()->set('hostName', $value);
    }

    /**
     * Sets the identityCertificate property value. Identity certificate.
     * @param IosCertificateProfileBase|null $value Value to set for the identityCertificate property.
    */
    public function setIdentityCertificate(?IosCertificateProfileBase $value): void {
        $this->getBackingStore()->set('identityCertificate', $value);
    }

    /**
     * Sets the perAppVPNProfileId property value. Profile ID of the Per-App VPN policy to be used to access emails from the native Mail client
     * @param string|null $value Value to set for the perAppVPNProfileId property.
    */
    public function setPerAppVPNProfileId(?string $value): void {
        $this->getBackingStore()->set('perAppVPNProfileId', $value);
    }

    /**
     * Sets the requireSmime property value. Indicates whether or not to use S/MIME certificate.
     * @param bool|null $value Value to set for the requireSmime property.
    */
    public function setRequireSmime(?bool $value): void {
        $this->getBackingStore()->set('requireSmime', $value);
    }

    /**
     * Sets the requireSsl property value. Indicates whether or not to use SSL.
     * @param bool|null $value Value to set for the requireSsl property.
    */
    public function setRequireSsl(?bool $value): void {
        $this->getBackingStore()->set('requireSsl', $value);
    }

    /**
     * Sets the signingCertificateType property value. Signing Certificate type for this Email profile. Possible values are: none, certificate, derivedCredential.
     * @param EmailCertificateType|null $value Value to set for the signingCertificateType property.
    */
    public function setSigningCertificateType(?EmailCertificateType $value): void {
        $this->getBackingStore()->set('signingCertificateType', $value);
    }

    /**
     * Sets the smimeEnablePerMessageSwitch property value. Indicates whether or not to allow unencrypted emails.
     * @param bool|null $value Value to set for the smimeEnablePerMessageSwitch property.
    */
    public function setSmimeEnablePerMessageSwitch(?bool $value): void {
        $this->getBackingStore()->set('smimeEnablePerMessageSwitch', $value);
    }

    /**
     * Sets the smimeEncryptByDefaultEnabled property value. If set to true S/MIME encryption is enabled by default.
     * @param bool|null $value Value to set for the smimeEncryptByDefaultEnabled property.
    */
    public function setSmimeEncryptByDefaultEnabled(?bool $value): void {
        $this->getBackingStore()->set('smimeEncryptByDefaultEnabled', $value);
    }

    /**
     * Sets the smimeEncryptByDefaultUserOverrideEnabled property value. If set to true, the user can toggle the encryption by default setting.
     * @param bool|null $value Value to set for the smimeEncryptByDefaultUserOverrideEnabled property.
    */
    public function setSmimeEncryptByDefaultUserOverrideEnabled(?bool $value): void {
        $this->getBackingStore()->set('smimeEncryptByDefaultUserOverrideEnabled', $value);
    }

    /**
     * Sets the smimeEncryptionCertificate property value. S/MIME encryption certificate.
     * @param IosCertificateProfile|null $value Value to set for the smimeEncryptionCertificate property.
    */
    public function setSmimeEncryptionCertificate(?IosCertificateProfile $value): void {
        $this->getBackingStore()->set('smimeEncryptionCertificate', $value);
    }

    /**
     * Sets the smimeEncryptionCertificateUserOverrideEnabled property value. If set to true the user can select the S/MIME encryption identity.
     * @param bool|null $value Value to set for the smimeEncryptionCertificateUserOverrideEnabled property.
    */
    public function setSmimeEncryptionCertificateUserOverrideEnabled(?bool $value): void {
        $this->getBackingStore()->set('smimeEncryptionCertificateUserOverrideEnabled', $value);
    }

    /**
     * Sets the smimeSigningCertificate property value. S/MIME signing certificate.
     * @param IosCertificateProfile|null $value Value to set for the smimeSigningCertificate property.
    */
    public function setSmimeSigningCertificate(?IosCertificateProfile $value): void {
        $this->getBackingStore()->set('smimeSigningCertificate', $value);
    }

    /**
     * Sets the smimeSigningCertificateUserOverrideEnabled property value. If set to true, the user can select the signing identity.
     * @param bool|null $value Value to set for the smimeSigningCertificateUserOverrideEnabled property.
    */
    public function setSmimeSigningCertificateUserOverrideEnabled(?bool $value): void {
        $this->getBackingStore()->set('smimeSigningCertificateUserOverrideEnabled', $value);
    }

    /**
     * Sets the smimeSigningEnabled property value. If set to true S/MIME signing is enabled for this account
     * @param bool|null $value Value to set for the smimeSigningEnabled property.
    */
    public function setSmimeSigningEnabled(?bool $value): void {
        $this->getBackingStore()->set('smimeSigningEnabled', $value);
    }

    /**
     * Sets the smimeSigningUserOverrideEnabled property value. If set to true, the user can toggle S/MIME signing on or off.
     * @param bool|null $value Value to set for the smimeSigningUserOverrideEnabled property.
    */
    public function setSmimeSigningUserOverrideEnabled(?bool $value): void {
        $this->getBackingStore()->set('smimeSigningUserOverrideEnabled', $value);
    }

    /**
     * Sets the useOAuth property value. Specifies whether the connection should use OAuth for authentication.
     * @param bool|null $value Value to set for the useOAuth property.
    */
    public function setUseOAuth(?bool $value): void {
        $this->getBackingStore()->set('useOAuth', $value);
    }

}
