<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class Office365GroupsActivityCounts extends Entity implements Parsable 
{
    /**
     * Instantiates a new Office365GroupsActivityCounts and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Office365GroupsActivityCounts
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Office365GroupsActivityCounts {
        return new Office365GroupsActivityCounts();
    }

    /**
     * Gets the exchangeEmailsReceived property value. The number of emails received by Group mailboxes.
     * @return int|null
    */
    public function getExchangeEmailsReceived(): ?int {
        return $this->getBackingStore()->get('exchangeEmailsReceived');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'exchangeEmailsReceived' => fn(ParseNode $n) => $o->setExchangeEmailsReceived($n->getIntegerValue()),
            'reportDate' => fn(ParseNode $n) => $o->setReportDate($n->getDateValue()),
            'reportPeriod' => fn(ParseNode $n) => $o->setReportPeriod($n->getStringValue()),
            'reportRefreshDate' => fn(ParseNode $n) => $o->setReportRefreshDate($n->getDateValue()),
            'teamsChannelMessages' => fn(ParseNode $n) => $o->setTeamsChannelMessages($n->getIntegerValue()),
            'teamsMeetingsOrganized' => fn(ParseNode $n) => $o->setTeamsMeetingsOrganized($n->getIntegerValue()),
            'yammerMessagesLiked' => fn(ParseNode $n) => $o->setYammerMessagesLiked($n->getIntegerValue()),
            'yammerMessagesPosted' => fn(ParseNode $n) => $o->setYammerMessagesPosted($n->getIntegerValue()),
            'yammerMessagesRead' => fn(ParseNode $n) => $o->setYammerMessagesRead($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the reportDate property value. The date on which a number of emails were sent to a group mailbox or a number of messages were posted, read, or liked in a Yammer group
     * @return Date|null
    */
    public function getReportDate(): ?Date {
        return $this->getBackingStore()->get('reportDate');
    }

    /**
     * Gets the reportPeriod property value. The number of days the report covers.
     * @return string|null
    */
    public function getReportPeriod(): ?string {
        return $this->getBackingStore()->get('reportPeriod');
    }

    /**
     * Gets the reportRefreshDate property value. The latest date of the content.
     * @return Date|null
    */
    public function getReportRefreshDate(): ?Date {
        return $this->getBackingStore()->get('reportRefreshDate');
    }

    /**
     * Gets the teamsChannelMessages property value. The number of channel messages in Teams team.
     * @return int|null
    */
    public function getTeamsChannelMessages(): ?int {
        return $this->getBackingStore()->get('teamsChannelMessages');
    }

    /**
     * Gets the teamsMeetingsOrganized property value. The number of meetings organized in Teams team.
     * @return int|null
    */
    public function getTeamsMeetingsOrganized(): ?int {
        return $this->getBackingStore()->get('teamsMeetingsOrganized');
    }

    /**
     * Gets the yammerMessagesLiked property value. The number of messages liked in Yammer groups.
     * @return int|null
    */
    public function getYammerMessagesLiked(): ?int {
        return $this->getBackingStore()->get('yammerMessagesLiked');
    }

    /**
     * Gets the yammerMessagesPosted property value. The number of messages posted to Yammer groups.
     * @return int|null
    */
    public function getYammerMessagesPosted(): ?int {
        return $this->getBackingStore()->get('yammerMessagesPosted');
    }

    /**
     * Gets the yammerMessagesRead property value. The number of messages read in Yammer groups.
     * @return int|null
    */
    public function getYammerMessagesRead(): ?int {
        return $this->getBackingStore()->get('yammerMessagesRead');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('exchangeEmailsReceived', $this->getExchangeEmailsReceived());
        $writer->writeDateValue('reportDate', $this->getReportDate());
        $writer->writeStringValue('reportPeriod', $this->getReportPeriod());
        $writer->writeDateValue('reportRefreshDate', $this->getReportRefreshDate());
        $writer->writeIntegerValue('teamsChannelMessages', $this->getTeamsChannelMessages());
        $writer->writeIntegerValue('teamsMeetingsOrganized', $this->getTeamsMeetingsOrganized());
        $writer->writeIntegerValue('yammerMessagesLiked', $this->getYammerMessagesLiked());
        $writer->writeIntegerValue('yammerMessagesPosted', $this->getYammerMessagesPosted());
        $writer->writeIntegerValue('yammerMessagesRead', $this->getYammerMessagesRead());
    }

    /**
     * Sets the exchangeEmailsReceived property value. The number of emails received by Group mailboxes.
     * @param int|null $value Value to set for the exchangeEmailsReceived property.
    */
    public function setExchangeEmailsReceived(?int $value): void {
        $this->getBackingStore()->set('exchangeEmailsReceived', $value);
    }

    /**
     * Sets the reportDate property value. The date on which a number of emails were sent to a group mailbox or a number of messages were posted, read, or liked in a Yammer group
     * @param Date|null $value Value to set for the reportDate property.
    */
    public function setReportDate(?Date $value): void {
        $this->getBackingStore()->set('reportDate', $value);
    }

    /**
     * Sets the reportPeriod property value. The number of days the report covers.
     * @param string|null $value Value to set for the reportPeriod property.
    */
    public function setReportPeriod(?string $value): void {
        $this->getBackingStore()->set('reportPeriod', $value);
    }

    /**
     * Sets the reportRefreshDate property value. The latest date of the content.
     * @param Date|null $value Value to set for the reportRefreshDate property.
    */
    public function setReportRefreshDate(?Date $value): void {
        $this->getBackingStore()->set('reportRefreshDate', $value);
    }

    /**
     * Sets the teamsChannelMessages property value. The number of channel messages in Teams team.
     * @param int|null $value Value to set for the teamsChannelMessages property.
    */
    public function setTeamsChannelMessages(?int $value): void {
        $this->getBackingStore()->set('teamsChannelMessages', $value);
    }

    /**
     * Sets the teamsMeetingsOrganized property value. The number of meetings organized in Teams team.
     * @param int|null $value Value to set for the teamsMeetingsOrganized property.
    */
    public function setTeamsMeetingsOrganized(?int $value): void {
        $this->getBackingStore()->set('teamsMeetingsOrganized', $value);
    }

    /**
     * Sets the yammerMessagesLiked property value. The number of messages liked in Yammer groups.
     * @param int|null $value Value to set for the yammerMessagesLiked property.
    */
    public function setYammerMessagesLiked(?int $value): void {
        $this->getBackingStore()->set('yammerMessagesLiked', $value);
    }

    /**
     * Sets the yammerMessagesPosted property value. The number of messages posted to Yammer groups.
     * @param int|null $value Value to set for the yammerMessagesPosted property.
    */
    public function setYammerMessagesPosted(?int $value): void {
        $this->getBackingStore()->set('yammerMessagesPosted', $value);
    }

    /**
     * Sets the yammerMessagesRead property value. The number of messages read in Yammer groups.
     * @param int|null $value Value to set for the yammerMessagesRead property.
    */
    public function setYammerMessagesRead(?int $value): void {
        $this->getBackingStore()->set('yammerMessagesRead', $value);
    }

}
