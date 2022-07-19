<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidEasEmailProfileConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var string|null $accountName Exchange ActiveSync account name, displayed to users as name of EAS (this) profile.
    */
    private ?string $accountName = null;
    
    /**
     * @var EasAuthenticationMethod|null $authenticationMethod Exchange Active Sync authentication method.
    */
    private ?EasAuthenticationMethod $authenticationMethod = null;
    
    /**
     * @var string|null $customDomainName Custom domain name value used while generating an email profile before installing on the device.
    */
    private ?string $customDomainName = null;
    
    /**
     * @var EmailSyncDuration|null $durationOfEmailToSync Possible values for email sync duration.
    */
    private ?EmailSyncDuration $durationOfEmailToSync = null;
    
    /**
     * @var UserEmailSource|null $emailAddressSource Possible values for username source or email source.
    */
    private ?UserEmailSource $emailAddressSource = null;
    
    /**
     * @var EmailSyncSchedule|null $emailSyncSchedule Possible values for email sync schedule.
    */
    private ?EmailSyncSchedule $emailSyncSchedule = null;
    
    /**
     * @var string|null $hostName Exchange location (URL) that the native mail app connects to.
    */
    private ?string $hostName = null;
    
    /**
     * @var AndroidCertificateProfileBase|null $identityCertificate Identity certificate.
    */
    private ?AndroidCertificateProfileBase $identityCertificate = null;
    
    /**
     * @var bool|null $requireSmime Indicates whether or not to use S/MIME certificate.
    */
    private ?bool $requireSmime = null;
    
    /**
     * @var bool|null $requireSsl Indicates whether or not to use SSL.
    */
    private ?bool $requireSsl = null;
    
    /**
     * @var AndroidCertificateProfileBase|null $smimeSigningCertificate S/MIME signing certificate.
    */
    private ?AndroidCertificateProfileBase $smimeSigningCertificate = null;
    
    /**
     * @var bool|null $syncCalendar Toggles syncing the calendar. If set to false calendar is turned off on the device.
    */
    private ?bool $syncCalendar = null;
    
    /**
     * @var bool|null $syncContacts Toggles syncing contacts. If set to false contacts are turned off on the device.
    */
    private ?bool $syncContacts = null;
    
    /**
     * @var bool|null $syncNotes Toggles syncing notes. If set to false notes are turned off on the device.
    */
    private ?bool $syncNotes = null;
    
    /**
     * @var bool|null $syncTasks Toggles syncing tasks. If set to false tasks are turned off on the device.
    */
    private ?bool $syncTasks = null;
    
    /**
     * @var DomainNameSource|null $userDomainNameSource UserDomainname attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: fullDomainName, netBiosDomainName.
    */
    private ?DomainNameSource $userDomainNameSource = null;
    
    /**
     * @var AndroidUsernameSource|null $usernameSource Android username source.
    */
    private ?AndroidUsernameSource $usernameSource = null;
    
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
        return $this->accountName;
    }

    /**
     * Gets the authenticationMethod property value. Exchange Active Sync authentication method.
     * @return EasAuthenticationMethod|null
    */
    public function getAuthenticationMethod(): ?EasAuthenticationMethod {
        return $this->authenticationMethod;
    }

    /**
     * Gets the customDomainName property value. Custom domain name value used while generating an email profile before installing on the device.
     * @return string|null
    */
    public function getCustomDomainName(): ?string {
        return $this->customDomainName;
    }

    /**
     * Gets the durationOfEmailToSync property value. Possible values for email sync duration.
     * @return EmailSyncDuration|null
    */
    public function getDurationOfEmailToSync(): ?EmailSyncDuration {
        return $this->durationOfEmailToSync;
    }

    /**
     * Gets the emailAddressSource property value. Possible values for username source or email source.
     * @return UserEmailSource|null
    */
    public function getEmailAddressSource(): ?UserEmailSource {
        return $this->emailAddressSource;
    }

    /**
     * Gets the emailSyncSchedule property value. Possible values for email sync schedule.
     * @return EmailSyncSchedule|null
    */
    public function getEmailSyncSchedule(): ?EmailSyncSchedule {
        return $this->emailSyncSchedule;
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
            'customDomainName' => function (ParseNode $n) use ($o) { $o->setCustomDomainName($n->getStringValue()); },
            'durationOfEmailToSync' => function (ParseNode $n) use ($o) { $o->setDurationOfEmailToSync($n->getEnumValue(EmailSyncDuration::class)); },
            'emailAddressSource' => function (ParseNode $n) use ($o) { $o->setEmailAddressSource($n->getEnumValue(UserEmailSource::class)); },
            'emailSyncSchedule' => function (ParseNode $n) use ($o) { $o->setEmailSyncSchedule($n->getEnumValue(EmailSyncSchedule::class)); },
            'hostName' => function (ParseNode $n) use ($o) { $o->setHostName($n->getStringValue()); },
            'identityCertificate' => function (ParseNode $n) use ($o) { $o->setIdentityCertificate($n->getObjectValue(array(AndroidCertificateProfileBase::class, 'createFromDiscriminatorValue'))); },
            'requireSmime' => function (ParseNode $n) use ($o) { $o->setRequireSmime($n->getBooleanValue()); },
            'requireSsl' => function (ParseNode $n) use ($o) { $o->setRequireSsl($n->getBooleanValue()); },
            'smimeSigningCertificate' => function (ParseNode $n) use ($o) { $o->setSmimeSigningCertificate($n->getObjectValue(array(AndroidCertificateProfileBase::class, 'createFromDiscriminatorValue'))); },
            'syncCalendar' => function (ParseNode $n) use ($o) { $o->setSyncCalendar($n->getBooleanValue()); },
            'syncContacts' => function (ParseNode $n) use ($o) { $o->setSyncContacts($n->getBooleanValue()); },
            'syncNotes' => function (ParseNode $n) use ($o) { $o->setSyncNotes($n->getBooleanValue()); },
            'syncTasks' => function (ParseNode $n) use ($o) { $o->setSyncTasks($n->getBooleanValue()); },
            'userDomainNameSource' => function (ParseNode $n) use ($o) { $o->setUserDomainNameSource($n->getEnumValue(DomainNameSource::class)); },
            'usernameSource' => function (ParseNode $n) use ($o) { $o->setUsernameSource($n->getEnumValue(AndroidUsernameSource::class)); },
        ]);
    }

    /**
     * Gets the hostName property value. Exchange location (URL) that the native mail app connects to.
     * @return string|null
    */
    public function getHostName(): ?string {
        return $this->hostName;
    }

    /**
     * Gets the identityCertificate property value. Identity certificate.
     * @return AndroidCertificateProfileBase|null
    */
    public function getIdentityCertificate(): ?AndroidCertificateProfileBase {
        return $this->identityCertificate;
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
     * Gets the smimeSigningCertificate property value. S/MIME signing certificate.
     * @return AndroidCertificateProfileBase|null
    */
    public function getSmimeSigningCertificate(): ?AndroidCertificateProfileBase {
        return $this->smimeSigningCertificate;
    }

    /**
     * Gets the syncCalendar property value. Toggles syncing the calendar. If set to false calendar is turned off on the device.
     * @return bool|null
    */
    public function getSyncCalendar(): ?bool {
        return $this->syncCalendar;
    }

    /**
     * Gets the syncContacts property value. Toggles syncing contacts. If set to false contacts are turned off on the device.
     * @return bool|null
    */
    public function getSyncContacts(): ?bool {
        return $this->syncContacts;
    }

    /**
     * Gets the syncNotes property value. Toggles syncing notes. If set to false notes are turned off on the device.
     * @return bool|null
    */
    public function getSyncNotes(): ?bool {
        return $this->syncNotes;
    }

    /**
     * Gets the syncTasks property value. Toggles syncing tasks. If set to false tasks are turned off on the device.
     * @return bool|null
    */
    public function getSyncTasks(): ?bool {
        return $this->syncTasks;
    }

    /**
     * Gets the userDomainNameSource property value. UserDomainname attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: fullDomainName, netBiosDomainName.
     * @return DomainNameSource|null
    */
    public function getUserDomainNameSource(): ?DomainNameSource {
        return $this->userDomainNameSource;
    }

    /**
     * Gets the usernameSource property value. Android username source.
     * @return AndroidUsernameSource|null
    */
    public function getUsernameSource(): ?AndroidUsernameSource {
        return $this->usernameSource;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accountName', $this->accountName);
        $writer->writeEnumValue('authenticationMethod', $this->authenticationMethod);
        $writer->writeStringValue('customDomainName', $this->customDomainName);
        $writer->writeEnumValue('durationOfEmailToSync', $this->durationOfEmailToSync);
        $writer->writeEnumValue('emailAddressSource', $this->emailAddressSource);
        $writer->writeEnumValue('emailSyncSchedule', $this->emailSyncSchedule);
        $writer->writeStringValue('hostName', $this->hostName);
        $writer->writeObjectValue('identityCertificate', $this->identityCertificate);
        $writer->writeBooleanValue('requireSmime', $this->requireSmime);
        $writer->writeBooleanValue('requireSsl', $this->requireSsl);
        $writer->writeObjectValue('smimeSigningCertificate', $this->smimeSigningCertificate);
        $writer->writeBooleanValue('syncCalendar', $this->syncCalendar);
        $writer->writeBooleanValue('syncContacts', $this->syncContacts);
        $writer->writeBooleanValue('syncNotes', $this->syncNotes);
        $writer->writeBooleanValue('syncTasks', $this->syncTasks);
        $writer->writeEnumValue('userDomainNameSource', $this->userDomainNameSource);
        $writer->writeEnumValue('usernameSource', $this->usernameSource);
    }

    /**
     * Sets the accountName property value. Exchange ActiveSync account name, displayed to users as name of EAS (this) profile.
     *  @param string|null $value Value to set for the accountName property.
    */
    public function setAccountName(?string $value ): void {
        $this->accountName = $value;
    }

    /**
     * Sets the authenticationMethod property value. Exchange Active Sync authentication method.
     *  @param EasAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?EasAuthenticationMethod $value ): void {
        $this->authenticationMethod = $value;
    }

    /**
     * Sets the customDomainName property value. Custom domain name value used while generating an email profile before installing on the device.
     *  @param string|null $value Value to set for the customDomainName property.
    */
    public function setCustomDomainName(?string $value ): void {
        $this->customDomainName = $value;
    }

    /**
     * Sets the durationOfEmailToSync property value. Possible values for email sync duration.
     *  @param EmailSyncDuration|null $value Value to set for the durationOfEmailToSync property.
    */
    public function setDurationOfEmailToSync(?EmailSyncDuration $value ): void {
        $this->durationOfEmailToSync = $value;
    }

    /**
     * Sets the emailAddressSource property value. Possible values for username source or email source.
     *  @param UserEmailSource|null $value Value to set for the emailAddressSource property.
    */
    public function setEmailAddressSource(?UserEmailSource $value ): void {
        $this->emailAddressSource = $value;
    }

    /**
     * Sets the emailSyncSchedule property value. Possible values for email sync schedule.
     *  @param EmailSyncSchedule|null $value Value to set for the emailSyncSchedule property.
    */
    public function setEmailSyncSchedule(?EmailSyncSchedule $value ): void {
        $this->emailSyncSchedule = $value;
    }

    /**
     * Sets the hostName property value. Exchange location (URL) that the native mail app connects to.
     *  @param string|null $value Value to set for the hostName property.
    */
    public function setHostName(?string $value ): void {
        $this->hostName = $value;
    }

    /**
     * Sets the identityCertificate property value. Identity certificate.
     *  @param AndroidCertificateProfileBase|null $value Value to set for the identityCertificate property.
    */
    public function setIdentityCertificate(?AndroidCertificateProfileBase $value ): void {
        $this->identityCertificate = $value;
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
     * Sets the smimeSigningCertificate property value. S/MIME signing certificate.
     *  @param AndroidCertificateProfileBase|null $value Value to set for the smimeSigningCertificate property.
    */
    public function setSmimeSigningCertificate(?AndroidCertificateProfileBase $value ): void {
        $this->smimeSigningCertificate = $value;
    }

    /**
     * Sets the syncCalendar property value. Toggles syncing the calendar. If set to false calendar is turned off on the device.
     *  @param bool|null $value Value to set for the syncCalendar property.
    */
    public function setSyncCalendar(?bool $value ): void {
        $this->syncCalendar = $value;
    }

    /**
     * Sets the syncContacts property value. Toggles syncing contacts. If set to false contacts are turned off on the device.
     *  @param bool|null $value Value to set for the syncContacts property.
    */
    public function setSyncContacts(?bool $value ): void {
        $this->syncContacts = $value;
    }

    /**
     * Sets the syncNotes property value. Toggles syncing notes. If set to false notes are turned off on the device.
     *  @param bool|null $value Value to set for the syncNotes property.
    */
    public function setSyncNotes(?bool $value ): void {
        $this->syncNotes = $value;
    }

    /**
     * Sets the syncTasks property value. Toggles syncing tasks. If set to false tasks are turned off on the device.
     *  @param bool|null $value Value to set for the syncTasks property.
    */
    public function setSyncTasks(?bool $value ): void {
        $this->syncTasks = $value;
    }

    /**
     * Sets the userDomainNameSource property value. UserDomainname attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: fullDomainName, netBiosDomainName.
     *  @param DomainNameSource|null $value Value to set for the userDomainNameSource property.
    */
    public function setUserDomainNameSource(?DomainNameSource $value ): void {
        $this->userDomainNameSource = $value;
    }

    /**
     * Sets the usernameSource property value. Android username source.
     *  @param AndroidUsernameSource|null $value Value to set for the usernameSource property.
    */
    public function setUsernameSource(?AndroidUsernameSource $value ): void {
        $this->usernameSource = $value;
    }

}
