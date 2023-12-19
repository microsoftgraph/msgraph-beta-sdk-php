<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * By providing configurations in this profile you can instruct the native email client on iOS devices to communicate with an Exchange server and get email, contacts, calendar, reminders, and notes. Furthermore, you can also specify how much email to sync and how often the device should sync.
*/
class IosEasEmailProfileConfiguration extends EasEmailProfileConfigurationBase implements Parsable 
{
    /**
     * Instantiates a new iosEasEmailProfileConfiguration and sets the default values.
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
        $val = $this->getBackingStore()->get('accountName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountName'");
    }

    /**
     * Gets the authenticationMethod property value. Authentication method for this Email profile. Possible values are: usernameAndPassword, certificate, derivedCredential.
     * @return IosEasEmailProfileConfiguration_authenticationMethod|null
    */
    public function getAuthenticationMethod(): ?IosEasEmailProfileConfiguration_authenticationMethod {
        $val = $this->getBackingStore()->get('authenticationMethod');
        if (is_null($val) || $val instanceof IosEasEmailProfileConfiguration_authenticationMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationMethod'");
    }

    /**
     * Gets the blockMovingMessagesToOtherEmailAccounts property value. Indicates whether or not to block moving messages to other email accounts.
     * @return bool|null
    */
    public function getBlockMovingMessagesToOtherEmailAccounts(): ?bool {
        $val = $this->getBackingStore()->get('blockMovingMessagesToOtherEmailAccounts');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockMovingMessagesToOtherEmailAccounts'");
    }

    /**
     * Gets the blockSendingEmailFromThirdPartyApps property value. Indicates whether or not to block sending email from third party apps.
     * @return bool|null
    */
    public function getBlockSendingEmailFromThirdPartyApps(): ?bool {
        $val = $this->getBackingStore()->get('blockSendingEmailFromThirdPartyApps');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockSendingEmailFromThirdPartyApps'");
    }

    /**
     * Gets the blockSyncingRecentlyUsedEmailAddresses property value. Indicates whether or not to block syncing recently used email addresses, for instance - when composing new email.
     * @return bool|null
    */
    public function getBlockSyncingRecentlyUsedEmailAddresses(): ?bool {
        $val = $this->getBackingStore()->get('blockSyncingRecentlyUsedEmailAddresses');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockSyncingRecentlyUsedEmailAddresses'");
    }

    /**
     * Gets the derivedCredentialSettings property value. Tenant level settings for the Derived Credentials to be used for authentication.
     * @return DeviceManagementDerivedCredentialSettings|null
    */
    public function getDerivedCredentialSettings(): ?DeviceManagementDerivedCredentialSettings {
        $val = $this->getBackingStore()->get('derivedCredentialSettings');
        if (is_null($val) || $val instanceof DeviceManagementDerivedCredentialSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'derivedCredentialSettings'");
    }

    /**
     * Gets the durationOfEmailToSync property value. Possible values for email sync duration.
     * @return EmailSyncDuration|null
    */
    public function getDurationOfEmailToSync(): ?EmailSyncDuration {
        $val = $this->getBackingStore()->get('durationOfEmailToSync');
        if (is_null($val) || $val instanceof EmailSyncDuration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'durationOfEmailToSync'");
    }

    /**
     * Gets the easServices property value. Exchange data to sync. Possible values are: none, calendars, contacts, email, notes, reminders.
     * @return IosEasEmailProfileConfiguration_easServices|null
    */
    public function getEasServices(): ?IosEasEmailProfileConfiguration_easServices {
        $val = $this->getBackingStore()->get('easServices');
        if (is_null($val) || $val instanceof IosEasEmailProfileConfiguration_easServices) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'easServices'");
    }

    /**
     * Gets the easServicesUserOverrideEnabled property value. Allow users to change sync settings.
     * @return bool|null
    */
    public function getEasServicesUserOverrideEnabled(): ?bool {
        $val = $this->getBackingStore()->get('easServicesUserOverrideEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'easServicesUserOverrideEnabled'");
    }

    /**
     * Gets the emailAddressSource property value. Possible values for username source or email source.
     * @return UserEmailSource|null
    */
    public function getEmailAddressSource(): ?UserEmailSource {
        $val = $this->getBackingStore()->get('emailAddressSource');
        if (is_null($val) || $val instanceof UserEmailSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailAddressSource'");
    }

    /**
     * Gets the encryptionCertificateType property value. Encryption Certificate type for this Email profile. Possible values are: none, certificate, derivedCredential.
     * @return IosEasEmailProfileConfiguration_encryptionCertificateType|null
    */
    public function getEncryptionCertificateType(): ?IosEasEmailProfileConfiguration_encryptionCertificateType {
        $val = $this->getBackingStore()->get('encryptionCertificateType');
        if (is_null($val) || $val instanceof IosEasEmailProfileConfiguration_encryptionCertificateType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'encryptionCertificateType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountName' => fn(ParseNode $n) => $o->setAccountName($n->getStringValue()),
            'authenticationMethod' => fn(ParseNode $n) => $o->setAuthenticationMethod($n->getEnumValue(IosEasEmailProfileConfiguration_authenticationMethod::class)),
            'blockMovingMessagesToOtherEmailAccounts' => fn(ParseNode $n) => $o->setBlockMovingMessagesToOtherEmailAccounts($n->getBooleanValue()),
            'blockSendingEmailFromThirdPartyApps' => fn(ParseNode $n) => $o->setBlockSendingEmailFromThirdPartyApps($n->getBooleanValue()),
            'blockSyncingRecentlyUsedEmailAddresses' => fn(ParseNode $n) => $o->setBlockSyncingRecentlyUsedEmailAddresses($n->getBooleanValue()),
            'derivedCredentialSettings' => fn(ParseNode $n) => $o->setDerivedCredentialSettings($n->getObjectValue([DeviceManagementDerivedCredentialSettings::class, 'createFromDiscriminatorValue'])),
            'durationOfEmailToSync' => fn(ParseNode $n) => $o->setDurationOfEmailToSync($n->getEnumValue(EmailSyncDuration::class)),
            'easServices' => fn(ParseNode $n) => $o->setEasServices($n->getEnumValue(IosEasEmailProfileConfiguration_easServices::class)),
            'easServicesUserOverrideEnabled' => fn(ParseNode $n) => $o->setEasServicesUserOverrideEnabled($n->getBooleanValue()),
            'emailAddressSource' => fn(ParseNode $n) => $o->setEmailAddressSource($n->getEnumValue(UserEmailSource::class)),
            'encryptionCertificateType' => fn(ParseNode $n) => $o->setEncryptionCertificateType($n->getEnumValue(IosEasEmailProfileConfiguration_encryptionCertificateType::class)),
            'hostName' => fn(ParseNode $n) => $o->setHostName($n->getStringValue()),
            'identityCertificate' => fn(ParseNode $n) => $o->setIdentityCertificate($n->getObjectValue([IosCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'perAppVPNProfileId' => fn(ParseNode $n) => $o->setPerAppVPNProfileId($n->getStringValue()),
            'requireSmime' => fn(ParseNode $n) => $o->setRequireSmime($n->getBooleanValue()),
            'requireSsl' => fn(ParseNode $n) => $o->setRequireSsl($n->getBooleanValue()),
            'signingCertificateType' => fn(ParseNode $n) => $o->setSigningCertificateType($n->getEnumValue(IosEasEmailProfileConfiguration_signingCertificateType::class)),
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
        $val = $this->getBackingStore()->get('hostName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hostName'");
    }

    /**
     * Gets the identityCertificate property value. Identity certificate.
     * @return IosCertificateProfileBase|null
    */
    public function getIdentityCertificate(): ?IosCertificateProfileBase {
        $val = $this->getBackingStore()->get('identityCertificate');
        if (is_null($val) || $val instanceof IosCertificateProfileBase) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityCertificate'");
    }

    /**
     * Gets the perAppVPNProfileId property value. Profile ID of the Per-App VPN policy to be used to access emails from the native Mail client
     * @return string|null
    */
    public function getPerAppVPNProfileId(): ?string {
        $val = $this->getBackingStore()->get('perAppVPNProfileId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'perAppVPNProfileId'");
    }

    /**
     * Gets the requireSmime property value. Indicates whether or not to use S/MIME certificate.
     * @return bool|null
    */
    public function getRequireSmime(): ?bool {
        $val = $this->getBackingStore()->get('requireSmime');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requireSmime'");
    }

    /**
     * Gets the requireSsl property value. Indicates whether or not to use SSL.
     * @return bool|null
    */
    public function getRequireSsl(): ?bool {
        $val = $this->getBackingStore()->get('requireSsl');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requireSsl'");
    }

    /**
     * Gets the signingCertificateType property value. Signing Certificate type for this Email profile. Possible values are: none, certificate, derivedCredential.
     * @return IosEasEmailProfileConfiguration_signingCertificateType|null
    */
    public function getSigningCertificateType(): ?IosEasEmailProfileConfiguration_signingCertificateType {
        $val = $this->getBackingStore()->get('signingCertificateType');
        if (is_null($val) || $val instanceof IosEasEmailProfileConfiguration_signingCertificateType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signingCertificateType'");
    }

    /**
     * Gets the smimeEnablePerMessageSwitch property value. Indicates whether or not to allow unencrypted emails.
     * @return bool|null
    */
    public function getSmimeEnablePerMessageSwitch(): ?bool {
        $val = $this->getBackingStore()->get('smimeEnablePerMessageSwitch');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smimeEnablePerMessageSwitch'");
    }

    /**
     * Gets the smimeEncryptByDefaultEnabled property value. If set to true S/MIME encryption is enabled by default.
     * @return bool|null
    */
    public function getSmimeEncryptByDefaultEnabled(): ?bool {
        $val = $this->getBackingStore()->get('smimeEncryptByDefaultEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smimeEncryptByDefaultEnabled'");
    }

    /**
     * Gets the smimeEncryptByDefaultUserOverrideEnabled property value. If set to true, the user can toggle the encryption by default setting.
     * @return bool|null
    */
    public function getSmimeEncryptByDefaultUserOverrideEnabled(): ?bool {
        $val = $this->getBackingStore()->get('smimeEncryptByDefaultUserOverrideEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smimeEncryptByDefaultUserOverrideEnabled'");
    }

    /**
     * Gets the smimeEncryptionCertificate property value. S/MIME encryption certificate.
     * @return IosCertificateProfile|null
    */
    public function getSmimeEncryptionCertificate(): ?IosCertificateProfile {
        $val = $this->getBackingStore()->get('smimeEncryptionCertificate');
        if (is_null($val) || $val instanceof IosCertificateProfile) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smimeEncryptionCertificate'");
    }

    /**
     * Gets the smimeEncryptionCertificateUserOverrideEnabled property value. If set to true the user can select the S/MIME encryption identity.
     * @return bool|null
    */
    public function getSmimeEncryptionCertificateUserOverrideEnabled(): ?bool {
        $val = $this->getBackingStore()->get('smimeEncryptionCertificateUserOverrideEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smimeEncryptionCertificateUserOverrideEnabled'");
    }

    /**
     * Gets the smimeSigningCertificate property value. S/MIME signing certificate.
     * @return IosCertificateProfile|null
    */
    public function getSmimeSigningCertificate(): ?IosCertificateProfile {
        $val = $this->getBackingStore()->get('smimeSigningCertificate');
        if (is_null($val) || $val instanceof IosCertificateProfile) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smimeSigningCertificate'");
    }

    /**
     * Gets the smimeSigningCertificateUserOverrideEnabled property value. If set to true, the user can select the signing identity.
     * @return bool|null
    */
    public function getSmimeSigningCertificateUserOverrideEnabled(): ?bool {
        $val = $this->getBackingStore()->get('smimeSigningCertificateUserOverrideEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smimeSigningCertificateUserOverrideEnabled'");
    }

    /**
     * Gets the smimeSigningEnabled property value. If set to true S/MIME signing is enabled for this account
     * @return bool|null
    */
    public function getSmimeSigningEnabled(): ?bool {
        $val = $this->getBackingStore()->get('smimeSigningEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smimeSigningEnabled'");
    }

    /**
     * Gets the smimeSigningUserOverrideEnabled property value. If set to true, the user can toggle S/MIME signing on or off.
     * @return bool|null
    */
    public function getSmimeSigningUserOverrideEnabled(): ?bool {
        $val = $this->getBackingStore()->get('smimeSigningUserOverrideEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smimeSigningUserOverrideEnabled'");
    }

    /**
     * Gets the useOAuth property value. Specifies whether the connection should use OAuth for authentication.
     * @return bool|null
    */
    public function getUseOAuth(): ?bool {
        $val = $this->getBackingStore()->get('useOAuth');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'useOAuth'");
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
     * @param IosEasEmailProfileConfiguration_authenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?IosEasEmailProfileConfiguration_authenticationMethod $value): void {
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
     * @param IosEasEmailProfileConfiguration_easServices|null $value Value to set for the easServices property.
    */
    public function setEasServices(?IosEasEmailProfileConfiguration_easServices $value): void {
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
     * @param IosEasEmailProfileConfiguration_encryptionCertificateType|null $value Value to set for the encryptionCertificateType property.
    */
    public function setEncryptionCertificateType(?IosEasEmailProfileConfiguration_encryptionCertificateType $value): void {
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
     * @param IosEasEmailProfileConfiguration_signingCertificateType|null $value Value to set for the signingCertificateType property.
    */
    public function setSigningCertificateType(?IosEasEmailProfileConfiguration_signingCertificateType $value): void {
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
