<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows10EasEmailProfileConfiguration extends EasEmailProfileConfigurationBase implements Parsable 
{
    /**
     * Instantiates a new Windows10EasEmailProfileConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows10EasEmailProfileConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10EasEmailProfileConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10EasEmailProfileConfiguration {
        return new Windows10EasEmailProfileConfiguration();
    }

    /**
     * Gets the accountName property value. Account name.
     * @return string|null
    */
    public function getAccountName(): ?string {
        return $this->getBackingStore()->get('accountName');
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
        return $this->getBackingStore()->get('hostName');
    }

    /**
     * Gets the requireSsl property value. Indicates whether or not to use SSL.
     * @return bool|null
    */
    public function getRequireSsl(): ?bool {
        return $this->getBackingStore()->get('requireSsl');
    }

    /**
     * Gets the syncCalendar property value. Whether or not to sync the calendar.
     * @return bool|null
    */
    public function getSyncCalendar(): ?bool {
        return $this->getBackingStore()->get('syncCalendar');
    }

    /**
     * Gets the syncContacts property value. Whether or not to sync contacts.
     * @return bool|null
    */
    public function getSyncContacts(): ?bool {
        return $this->getBackingStore()->get('syncContacts');
    }

    /**
     * Gets the syncTasks property value. Whether or not to sync tasks.
     * @return bool|null
    */
    public function getSyncTasks(): ?bool {
        return $this->getBackingStore()->get('syncTasks');
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
