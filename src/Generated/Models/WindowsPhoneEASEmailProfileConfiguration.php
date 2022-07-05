<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsPhoneEASEmailProfileConfiguration extends EasEmailProfileConfigurationBase implements Parsable 
{
    /**
     * @var string|null $accountName Account name.
    */
    private ?string $accountName = null;
    
    /**
     * @var bool|null $applyOnlyToWindowsPhone81 Value indicating whether this policy only applies to Windows 8.1. This property is read-only.
    */
    private ?bool $applyOnlyToWindowsPhone81 = null;
    
    /**
     * @var EmailSyncDuration|null $durationOfEmailToSync Duration of email to sync. Possible values are: userDefined, oneDay, threeDays, oneWeek, twoWeeks, oneMonth, unlimited.
    */
    private ?EmailSyncDuration $durationOfEmailToSync = null;
    
    /**
     * @var UserEmailSource|null $emailAddressSource Email attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: userPrincipalName, primarySmtpAddress.
    */
    private ?UserEmailSource $emailAddressSource = null;
    
    /**
     * @var EmailSyncSchedule|null $emailSyncSchedule Email sync schedule. Possible values are: userDefined, asMessagesArrive, manual, fifteenMinutes, thirtyMinutes, sixtyMinutes, basedOnMyUsage.
    */
    private ?EmailSyncSchedule $emailSyncSchedule = null;
    
    /**
     * @var string|null $hostName Exchange location that (URL) that the native mail app connects to.
    */
    private ?string $hostName = null;
    
    /**
     * @var bool|null $requireSsl Indicates whether or not to use SSL.
    */
    private ?bool $requireSsl = null;
    
    /**
     * @var bool|null $syncCalendar Whether or not to sync the calendar.
    */
    private ?bool $syncCalendar = null;
    
    /**
     * @var bool|null $syncContacts Whether or not to sync contacts.
    */
    private ?bool $syncContacts = null;
    
    /**
     * @var bool|null $syncTasks Whether or not to sync tasks.
    */
    private ?bool $syncTasks = null;
    
    /**
     * Instantiates a new WindowsPhoneEASEmailProfileConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsPhoneEASEmailProfileConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsPhoneEASEmailProfileConfiguration {
        return new WindowsPhoneEASEmailProfileConfiguration();
    }

    /**
     * Gets the accountName property value. Account name.
     * @return string|null
    */
    public function getAccountName(): ?string {
        return $this->accountName;
    }

    /**
     * Gets the applyOnlyToWindowsPhone81 property value. Value indicating whether this policy only applies to Windows 8.1. This property is read-only.
     * @return bool|null
    */
    public function getApplyOnlyToWindowsPhone81(): ?bool {
        return $this->applyOnlyToWindowsPhone81;
    }

    /**
     * Gets the durationOfEmailToSync property value. Duration of email to sync. Possible values are: userDefined, oneDay, threeDays, oneWeek, twoWeeks, oneMonth, unlimited.
     * @return EmailSyncDuration|null
    */
    public function getDurationOfEmailToSync(): ?EmailSyncDuration {
        return $this->durationOfEmailToSync;
    }

    /**
     * Gets the emailAddressSource property value. Email attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: userPrincipalName, primarySmtpAddress.
     * @return UserEmailSource|null
    */
    public function getEmailAddressSource(): ?UserEmailSource {
        return $this->emailAddressSource;
    }

    /**
     * Gets the emailSyncSchedule property value. Email sync schedule. Possible values are: userDefined, asMessagesArrive, manual, fifteenMinutes, thirtyMinutes, sixtyMinutes, basedOnMyUsage.
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
            'applyOnlyToWindowsPhone81' => function (ParseNode $n) use ($o) { $o->setApplyOnlyToWindowsPhone81($n->getBooleanValue()); },
            'durationOfEmailToSync' => function (ParseNode $n) use ($o) { $o->setDurationOfEmailToSync($n->getEnumValue(EmailSyncDuration::class)); },
            'emailAddressSource' => function (ParseNode $n) use ($o) { $o->setEmailAddressSource($n->getEnumValue(UserEmailSource::class)); },
            'emailSyncSchedule' => function (ParseNode $n) use ($o) { $o->setEmailSyncSchedule($n->getEnumValue(EmailSyncSchedule::class)); },
            'hostName' => function (ParseNode $n) use ($o) { $o->setHostName($n->getStringValue()); },
            'requireSsl' => function (ParseNode $n) use ($o) { $o->setRequireSsl($n->getBooleanValue()); },
            'syncCalendar' => function (ParseNode $n) use ($o) { $o->setSyncCalendar($n->getBooleanValue()); },
            'syncContacts' => function (ParseNode $n) use ($o) { $o->setSyncContacts($n->getBooleanValue()); },
            'syncTasks' => function (ParseNode $n) use ($o) { $o->setSyncTasks($n->getBooleanValue()); },
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
     * Gets the requireSsl property value. Indicates whether or not to use SSL.
     * @return bool|null
    */
    public function getRequireSsl(): ?bool {
        return $this->requireSsl;
    }

    /**
     * Gets the syncCalendar property value. Whether or not to sync the calendar.
     * @return bool|null
    */
    public function getSyncCalendar(): ?bool {
        return $this->syncCalendar;
    }

    /**
     * Gets the syncContacts property value. Whether or not to sync contacts.
     * @return bool|null
    */
    public function getSyncContacts(): ?bool {
        return $this->syncContacts;
    }

    /**
     * Gets the syncTasks property value. Whether or not to sync tasks.
     * @return bool|null
    */
    public function getSyncTasks(): ?bool {
        return $this->syncTasks;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accountName', $this->accountName);
        $writer->writeBooleanValue('applyOnlyToWindowsPhone81', $this->applyOnlyToWindowsPhone81);
        $writer->writeEnumValue('durationOfEmailToSync', $this->durationOfEmailToSync);
        $writer->writeEnumValue('emailAddressSource', $this->emailAddressSource);
        $writer->writeEnumValue('emailSyncSchedule', $this->emailSyncSchedule);
        $writer->writeStringValue('hostName', $this->hostName);
        $writer->writeBooleanValue('requireSsl', $this->requireSsl);
        $writer->writeBooleanValue('syncCalendar', $this->syncCalendar);
        $writer->writeBooleanValue('syncContacts', $this->syncContacts);
        $writer->writeBooleanValue('syncTasks', $this->syncTasks);
    }

    /**
     * Sets the accountName property value. Account name.
     *  @param string|null $value Value to set for the accountName property.
    */
    public function setAccountName(?string $value ): void {
        $this->accountName = $value;
    }

    /**
     * Sets the applyOnlyToWindowsPhone81 property value. Value indicating whether this policy only applies to Windows 8.1. This property is read-only.
     *  @param bool|null $value Value to set for the applyOnlyToWindowsPhone81 property.
    */
    public function setApplyOnlyToWindowsPhone81(?bool $value ): void {
        $this->applyOnlyToWindowsPhone81 = $value;
    }

    /**
     * Sets the durationOfEmailToSync property value. Duration of email to sync. Possible values are: userDefined, oneDay, threeDays, oneWeek, twoWeeks, oneMonth, unlimited.
     *  @param EmailSyncDuration|null $value Value to set for the durationOfEmailToSync property.
    */
    public function setDurationOfEmailToSync(?EmailSyncDuration $value ): void {
        $this->durationOfEmailToSync = $value;
    }

    /**
     * Sets the emailAddressSource property value. Email attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: userPrincipalName, primarySmtpAddress.
     *  @param UserEmailSource|null $value Value to set for the emailAddressSource property.
    */
    public function setEmailAddressSource(?UserEmailSource $value ): void {
        $this->emailAddressSource = $value;
    }

    /**
     * Sets the emailSyncSchedule property value. Email sync schedule. Possible values are: userDefined, asMessagesArrive, manual, fifteenMinutes, thirtyMinutes, sixtyMinutes, basedOnMyUsage.
     *  @param EmailSyncSchedule|null $value Value to set for the emailSyncSchedule property.
    */
    public function setEmailSyncSchedule(?EmailSyncSchedule $value ): void {
        $this->emailSyncSchedule = $value;
    }

    /**
     * Sets the hostName property value. Exchange location that (URL) that the native mail app connects to.
     *  @param string|null $value Value to set for the hostName property.
    */
    public function setHostName(?string $value ): void {
        $this->hostName = $value;
    }

    /**
     * Sets the requireSsl property value. Indicates whether or not to use SSL.
     *  @param bool|null $value Value to set for the requireSsl property.
    */
    public function setRequireSsl(?bool $value ): void {
        $this->requireSsl = $value;
    }

    /**
     * Sets the syncCalendar property value. Whether or not to sync the calendar.
     *  @param bool|null $value Value to set for the syncCalendar property.
    */
    public function setSyncCalendar(?bool $value ): void {
        $this->syncCalendar = $value;
    }

    /**
     * Sets the syncContacts property value. Whether or not to sync contacts.
     *  @param bool|null $value Value to set for the syncContacts property.
    */
    public function setSyncContacts(?bool $value ): void {
        $this->syncContacts = $value;
    }

    /**
     * Sets the syncTasks property value. Whether or not to sync tasks.
     *  @param bool|null $value Value to set for the syncTasks property.
    */
    public function setSyncTasks(?bool $value ): void {
        $this->syncTasks = $value;
    }

}
