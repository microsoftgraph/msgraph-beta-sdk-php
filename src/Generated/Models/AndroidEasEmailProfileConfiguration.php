<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidEasEmailProfileConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new AndroidEasEmailProfileConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidEasEmailProfileConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidEasEmailProfileConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidEasEmailProfileConfiguration {
        return new AndroidEasEmailProfileConfiguration();
    }

    /**
     * Gets the accountName property value. Exchange ActiveSync account name, displayed to users as name of EAS (this) profile.
     * @return string|null
    */
    public function getAccountName(): ?string {
        return $this->getBackingStore()->get('accountName');
    }

    /**
     * Gets the authenticationMethod property value. Exchange Active Sync authentication method.
     * @return EasAuthenticationMethod|null
    */
    public function getAuthenticationMethod(): ?EasAuthenticationMethod {
        return $this->getBackingStore()->get('authenticationMethod');
    }

    /**
     * Gets the customDomainName property value. Custom domain name value used while generating an email profile before installing on the device.
     * @return string|null
    */
    public function getCustomDomainName(): ?string {
        return $this->getBackingStore()->get('customDomainName');
    }

    /**
     * Gets the durationOfEmailToSync property value. Possible values for email sync duration.
     * @return EmailSyncDuration|null
    */
    public function getDurationOfEmailToSync(): ?EmailSyncDuration {
        return $this->getBackingStore()->get('durationOfEmailToSync');
    }

    /**
     * Gets the emailAddressSource property value. Possible values for username source or email source.
     * @return UserEmailSource|null
    */
    public function getEmailAddressSource(): ?UserEmailSource {
        return $this->getBackingStore()->get('emailAddressSource');
    }

    /**
     * Gets the emailSyncSchedule property value. Possible values for email sync schedule.
     * @return EmailSyncSchedule|null
    */
    public function getEmailSyncSchedule(): ?EmailSyncSchedule {
        return $this->getBackingStore()->get('emailSyncSchedule');
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
            'customDomainName' => fn(ParseNode $n) => $o->setCustomDomainName($n->getStringValue()),
            'durationOfEmailToSync' => fn(ParseNode $n) => $o->setDurationOfEmailToSync($n->getEnumValue(EmailSyncDuration::class)),
            'emailAddressSource' => fn(ParseNode $n) => $o->setEmailAddressSource($n->getEnumValue(UserEmailSource::class)),
            'emailSyncSchedule' => fn(ParseNode $n) => $o->setEmailSyncSchedule($n->getEnumValue(EmailSyncSchedule::class)),
            'hostName' => fn(ParseNode $n) => $o->setHostName($n->getStringValue()),
            'identityCertificate' => fn(ParseNode $n) => $o->setIdentityCertificate($n->getObjectValue([AndroidCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'requireSmime' => fn(ParseNode $n) => $o->setRequireSmime($n->getBooleanValue()),
            'requireSsl' => fn(ParseNode $n) => $o->setRequireSsl($n->getBooleanValue()),
            'smimeSigningCertificate' => fn(ParseNode $n) => $o->setSmimeSigningCertificate($n->getObjectValue([AndroidCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'syncCalendar' => fn(ParseNode $n) => $o->setSyncCalendar($n->getBooleanValue()),
            'syncContacts' => fn(ParseNode $n) => $o->setSyncContacts($n->getBooleanValue()),
            'syncNotes' => fn(ParseNode $n) => $o->setSyncNotes($n->getBooleanValue()),
            'syncTasks' => fn(ParseNode $n) => $o->setSyncTasks($n->getBooleanValue()),
            'userDomainNameSource' => fn(ParseNode $n) => $o->setUserDomainNameSource($n->getEnumValue(DomainNameSource::class)),
            'usernameSource' => fn(ParseNode $n) => $o->setUsernameSource($n->getEnumValue(AndroidUsernameSource::class)),
        ]);
    }

    /**
     * Gets the hostName property value. Exchange location (URL) that the native mail app connects to.
     * @return string|null
    */
    public function getHostName(): ?string {
        return $this->getBackingStore()->get('hostName');
    }

    /**
     * Gets the identityCertificate property value. Identity certificate.
     * @return AndroidCertificateProfileBase|null
    */
    public function getIdentityCertificate(): ?AndroidCertificateProfileBase {
        return $this->getBackingStore()->get('identityCertificate');
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
     * Gets the smimeSigningCertificate property value. S/MIME signing certificate.
     * @return AndroidCertificateProfileBase|null
    */
    public function getSmimeSigningCertificate(): ?AndroidCertificateProfileBase {
        return $this->getBackingStore()->get('smimeSigningCertificate');
    }

    /**
     * Gets the syncCalendar property value. Toggles syncing the calendar. If set to false calendar is turned off on the device.
     * @return bool|null
    */
    public function getSyncCalendar(): ?bool {
        return $this->getBackingStore()->get('syncCalendar');
    }

    /**
     * Gets the syncContacts property value. Toggles syncing contacts. If set to false contacts are turned off on the device.
     * @return bool|null
    */
    public function getSyncContacts(): ?bool {
        return $this->getBackingStore()->get('syncContacts');
    }

    /**
     * Gets the syncNotes property value. Toggles syncing notes. If set to false notes are turned off on the device.
     * @return bool|null
    */
    public function getSyncNotes(): ?bool {
        return $this->getBackingStore()->get('syncNotes');
    }

    /**
     * Gets the syncTasks property value. Toggles syncing tasks. If set to false tasks are turned off on the device.
     * @return bool|null
    */
    public function getSyncTasks(): ?bool {
        return $this->getBackingStore()->get('syncTasks');
    }

    /**
     * Gets the userDomainNameSource property value. UserDomainname attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: fullDomainName, netBiosDomainName.
     * @return DomainNameSource|null
    */
    public function getUserDomainNameSource(): ?DomainNameSource {
        return $this->getBackingStore()->get('userDomainNameSource');
    }

    /**
     * Gets the usernameSource property value. Android username source.
     * @return AndroidUsernameSource|null
    */
    public function getUsernameSource(): ?AndroidUsernameSource {
        return $this->getBackingStore()->get('usernameSource');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accountName', $this->getAccountName());
        $writer->writeEnumValue('authenticationMethod', $this->getAuthenticationMethod());
        $writer->writeStringValue('customDomainName', $this->getCustomDomainName());
        $writer->writeEnumValue('durationOfEmailToSync', $this->getDurationOfEmailToSync());
        $writer->writeEnumValue('emailAddressSource', $this->getEmailAddressSource());
        $writer->writeEnumValue('emailSyncSchedule', $this->getEmailSyncSchedule());
        $writer->writeStringValue('hostName', $this->getHostName());
        $writer->writeObjectValue('identityCertificate', $this->getIdentityCertificate());
        $writer->writeBooleanValue('requireSmime', $this->getRequireSmime());
        $writer->writeBooleanValue('requireSsl', $this->getRequireSsl());
        $writer->writeObjectValue('smimeSigningCertificate', $this->getSmimeSigningCertificate());
        $writer->writeBooleanValue('syncCalendar', $this->getSyncCalendar());
        $writer->writeBooleanValue('syncContacts', $this->getSyncContacts());
        $writer->writeBooleanValue('syncNotes', $this->getSyncNotes());
        $writer->writeBooleanValue('syncTasks', $this->getSyncTasks());
        $writer->writeEnumValue('userDomainNameSource', $this->getUserDomainNameSource());
        $writer->writeEnumValue('usernameSource', $this->getUsernameSource());
    }

    /**
     * Sets the accountName property value. Exchange ActiveSync account name, displayed to users as name of EAS (this) profile.
     * @param string|null $value Value to set for the accountName property.
    */
    public function setAccountName(?string $value): void {
        $this->getBackingStore()->set('accountName', $value);
    }

    /**
     * Sets the authenticationMethod property value. Exchange Active Sync authentication method.
     * @param EasAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?EasAuthenticationMethod $value): void {
        $this->getBackingStore()->set('authenticationMethod', $value);
    }

    /**
     * Sets the customDomainName property value. Custom domain name value used while generating an email profile before installing on the device.
     * @param string|null $value Value to set for the customDomainName property.
    */
    public function setCustomDomainName(?string $value): void {
        $this->getBackingStore()->set('customDomainName', $value);
    }

    /**
     * Sets the durationOfEmailToSync property value. Possible values for email sync duration.
     * @param EmailSyncDuration|null $value Value to set for the durationOfEmailToSync property.
    */
    public function setDurationOfEmailToSync(?EmailSyncDuration $value): void {
        $this->getBackingStore()->set('durationOfEmailToSync', $value);
    }

    /**
     * Sets the emailAddressSource property value. Possible values for username source or email source.
     * @param UserEmailSource|null $value Value to set for the emailAddressSource property.
    */
    public function setEmailAddressSource(?UserEmailSource $value): void {
        $this->getBackingStore()->set('emailAddressSource', $value);
    }

    /**
     * Sets the emailSyncSchedule property value. Possible values for email sync schedule.
     * @param EmailSyncSchedule|null $value Value to set for the emailSyncSchedule property.
    */
    public function setEmailSyncSchedule(?EmailSyncSchedule $value): void {
        $this->getBackingStore()->set('emailSyncSchedule', $value);
    }

    /**
     * Sets the hostName property value. Exchange location (URL) that the native mail app connects to.
     * @param string|null $value Value to set for the hostName property.
    */
    public function setHostName(?string $value): void {
        $this->getBackingStore()->set('hostName', $value);
    }

    /**
     * Sets the identityCertificate property value. Identity certificate.
     * @param AndroidCertificateProfileBase|null $value Value to set for the identityCertificate property.
    */
    public function setIdentityCertificate(?AndroidCertificateProfileBase $value): void {
        $this->getBackingStore()->set('identityCertificate', $value);
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
     * Sets the smimeSigningCertificate property value. S/MIME signing certificate.
     * @param AndroidCertificateProfileBase|null $value Value to set for the smimeSigningCertificate property.
    */
    public function setSmimeSigningCertificate(?AndroidCertificateProfileBase $value): void {
        $this->getBackingStore()->set('smimeSigningCertificate', $value);
    }

    /**
     * Sets the syncCalendar property value. Toggles syncing the calendar. If set to false calendar is turned off on the device.
     * @param bool|null $value Value to set for the syncCalendar property.
    */
    public function setSyncCalendar(?bool $value): void {
        $this->getBackingStore()->set('syncCalendar', $value);
    }

    /**
     * Sets the syncContacts property value. Toggles syncing contacts. If set to false contacts are turned off on the device.
     * @param bool|null $value Value to set for the syncContacts property.
    */
    public function setSyncContacts(?bool $value): void {
        $this->getBackingStore()->set('syncContacts', $value);
    }

    /**
     * Sets the syncNotes property value. Toggles syncing notes. If set to false notes are turned off on the device.
     * @param bool|null $value Value to set for the syncNotes property.
    */
    public function setSyncNotes(?bool $value): void {
        $this->getBackingStore()->set('syncNotes', $value);
    }

    /**
     * Sets the syncTasks property value. Toggles syncing tasks. If set to false tasks are turned off on the device.
     * @param bool|null $value Value to set for the syncTasks property.
    */
    public function setSyncTasks(?bool $value): void {
        $this->getBackingStore()->set('syncTasks', $value);
    }

    /**
     * Sets the userDomainNameSource property value. UserDomainname attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: fullDomainName, netBiosDomainName.
     * @param DomainNameSource|null $value Value to set for the userDomainNameSource property.
    */
    public function setUserDomainNameSource(?DomainNameSource $value): void {
        $this->getBackingStore()->set('userDomainNameSource', $value);
    }

    /**
     * Sets the usernameSource property value. Android username source.
     * @param AndroidUsernameSource|null $value Value to set for the usernameSource property.
    */
    public function setUsernameSource(?AndroidUsernameSource $value): void {
        $this->getBackingStore()->set('usernameSource', $value);
    }

}
