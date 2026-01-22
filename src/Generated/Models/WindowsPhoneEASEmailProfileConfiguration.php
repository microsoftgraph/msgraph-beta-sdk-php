<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * By providing configurations in this profile you can instruct the native email client on Windows Phone to communicate with an Exchange server and get email, contacts, calendar, and tasks. Furthermore, you can also specify how much email to sync and how often the device should sync.
*/
class WindowsPhoneEASEmailProfileConfiguration extends EasEmailProfileConfigurationBase implements Parsable 
{
    /**
     * Instantiates a new WindowsPhoneEASEmailProfileConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsPhoneEASEmailProfileConfiguration');
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
        $val = $this->getBackingStore()->get('accountName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountName'");
    }

    /**
     * Gets the applyOnlyToWindowsPhone81 property value. Value indicating whether this policy only applies to Windows 8.1. This property is read-only.
     * @return bool|null
    */
    public function getApplyOnlyToWindowsPhone81(): ?bool {
        $val = $this->getBackingStore()->get('applyOnlyToWindowsPhone81');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applyOnlyToWindowsPhone81'");
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
     * Gets the emailAddressSource property value. Email attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: userPrincipalName, primarySmtpAddress.
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
     * Gets the emailSyncSchedule property value. Possible values for email sync schedule.
     * @return EmailSyncSchedule|null
    */
    public function getEmailSyncSchedule(): ?EmailSyncSchedule {
        $val = $this->getBackingStore()->get('emailSyncSchedule');
        if (is_null($val) || $val instanceof EmailSyncSchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailSyncSchedule'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountName' => fn(ParseNode $n) => $o->setAccountName($n->getStringValue()),
            'applyOnlyToWindowsPhone81' => fn(ParseNode $n) => $o->setApplyOnlyToWindowsPhone81($n->getBooleanValue()),
            'durationOfEmailToSync' => fn(ParseNode $n) => $o->setDurationOfEmailToSync($n->getEnumValue(EmailSyncDuration::class)),
            'emailAddressSource' => fn(ParseNode $n) => $o->setEmailAddressSource($n->getEnumValue(UserEmailSource::class)),
            'emailSyncSchedule' => fn(ParseNode $n) => $o->setEmailSyncSchedule($n->getEnumValue(EmailSyncSchedule::class)),
            'hostName' => fn(ParseNode $n) => $o->setHostName($n->getStringValue()),
            'requireSsl' => fn(ParseNode $n) => $o->setRequireSsl($n->getBooleanValue()),
            'syncCalendar' => fn(ParseNode $n) => $o->setSyncCalendar($n->getBooleanValue()),
            'syncContacts' => fn(ParseNode $n) => $o->setSyncContacts($n->getBooleanValue()),
            'syncTasks' => fn(ParseNode $n) => $o->setSyncTasks($n->getBooleanValue()),
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
     * Gets the syncCalendar property value. Whether or not to sync the calendar.
     * @return bool|null
    */
    public function getSyncCalendar(): ?bool {
        $val = $this->getBackingStore()->get('syncCalendar');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'syncCalendar'");
    }

    /**
     * Gets the syncContacts property value. Whether or not to sync contacts.
     * @return bool|null
    */
    public function getSyncContacts(): ?bool {
        $val = $this->getBackingStore()->get('syncContacts');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'syncContacts'");
    }

    /**
     * Gets the syncTasks property value. Whether or not to sync tasks.
     * @return bool|null
    */
    public function getSyncTasks(): ?bool {
        $val = $this->getBackingStore()->get('syncTasks');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'syncTasks'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accountName', $this->getAccountName());
        $writer->writeEnumValue('durationOfEmailToSync', $this->getDurationOfEmailToSync());
        $writer->writeEnumValue('emailAddressSource', $this->getEmailAddressSource());
        $writer->writeEnumValue('emailSyncSchedule', $this->getEmailSyncSchedule());
        $writer->writeStringValue('hostName', $this->getHostName());
        $writer->writeBooleanValue('requireSsl', $this->getRequireSsl());
        $writer->writeBooleanValue('syncCalendar', $this->getSyncCalendar());
        $writer->writeBooleanValue('syncContacts', $this->getSyncContacts());
        $writer->writeBooleanValue('syncTasks', $this->getSyncTasks());
    }

    /**
     * Sets the accountName property value. Account name.
     * @param string|null $value Value to set for the accountName property.
    */
    public function setAccountName(?string $value): void {
        $this->getBackingStore()->set('accountName', $value);
    }

    /**
     * Sets the applyOnlyToWindowsPhone81 property value. Value indicating whether this policy only applies to Windows 8.1. This property is read-only.
     * @param bool|null $value Value to set for the applyOnlyToWindowsPhone81 property.
    */
    public function setApplyOnlyToWindowsPhone81(?bool $value): void {
        $this->getBackingStore()->set('applyOnlyToWindowsPhone81', $value);
    }

    /**
     * Sets the durationOfEmailToSync property value. Possible values for email sync duration.
     * @param EmailSyncDuration|null $value Value to set for the durationOfEmailToSync property.
    */
    public function setDurationOfEmailToSync(?EmailSyncDuration $value): void {
        $this->getBackingStore()->set('durationOfEmailToSync', $value);
    }

    /**
     * Sets the emailAddressSource property value. Email attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: userPrincipalName, primarySmtpAddress.
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
     * Sets the hostName property value. Exchange location that (URL) that the native mail app connects to.
     * @param string|null $value Value to set for the hostName property.
    */
    public function setHostName(?string $value): void {
        $this->getBackingStore()->set('hostName', $value);
    }

    /**
     * Sets the requireSsl property value. Indicates whether or not to use SSL.
     * @param bool|null $value Value to set for the requireSsl property.
    */
    public function setRequireSsl(?bool $value): void {
        $this->getBackingStore()->set('requireSsl', $value);
    }

    /**
     * Sets the syncCalendar property value. Whether or not to sync the calendar.
     * @param bool|null $value Value to set for the syncCalendar property.
    */
    public function setSyncCalendar(?bool $value): void {
        $this->getBackingStore()->set('syncCalendar', $value);
    }

    /**
     * Sets the syncContacts property value. Whether or not to sync contacts.
     * @param bool|null $value Value to set for the syncContacts property.
    */
    public function setSyncContacts(?bool $value): void {
        $this->getBackingStore()->set('syncContacts', $value);
    }

    /**
     * Sets the syncTasks property value. Whether or not to sync tasks.
     * @param bool|null $value Value to set for the syncTasks property.
    */
    public function setSyncTasks(?bool $value): void {
        $this->getBackingStore()->set('syncTasks', $value);
    }

}
