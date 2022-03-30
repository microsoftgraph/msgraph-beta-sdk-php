<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class Office365GroupsActivityCounts extends Entity 
{
    /** @var int|null $exchangeEmailsReceived The number of emails received by Group mailboxes. */
    private ?int $exchangeEmailsReceived = null;
    
    /** @var Date|null $reportDate The date on which a number of emails were sent to a group mailbox or a number of messages were posted, read, or liked in a Yammer group */
    private ?Date $reportDate = null;
    
    /** @var string|null $reportPeriod The number of days the report covers. */
    private ?string $reportPeriod = null;
    
    /** @var Date|null $reportRefreshDate The latest date of the content. */
    private ?Date $reportRefreshDate = null;
    
    /** @var int|null $yammerMessagesLiked The number of messages liked in Yammer groups. */
    private ?int $yammerMessagesLiked = null;
    
    /** @var int|null $yammerMessagesPosted The number of messages posted to Yammer groups. */
    private ?int $yammerMessagesPosted = null;
    
    /** @var int|null $yammerMessagesRead The number of messages read in Yammer groups. */
    private ?int $yammerMessagesRead = null;
    
    /**
     * Instantiates a new office365GroupsActivityCounts and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Office365GroupsActivityCounts
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Office365GroupsActivityCounts {
        return new Office365GroupsActivityCounts();
    }

    /**
     * Gets the exchangeEmailsReceived property value. The number of emails received by Group mailboxes.
     * @return int|null
    */
    public function getExchangeEmailsReceived(): ?int {
        return $this->exchangeEmailsReceived;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'exchangeEmailsReceived' => function (self $o, ParseNode $n) { $o->setExchangeEmailsReceived($n->getIntegerValue()); },
            'reportDate' => function (self $o, ParseNode $n) { $o->setReportDate($n->getDateValue()); },
            'reportPeriod' => function (self $o, ParseNode $n) { $o->setReportPeriod($n->getStringValue()); },
            'reportRefreshDate' => function (self $o, ParseNode $n) { $o->setReportRefreshDate($n->getDateValue()); },
            'yammerMessagesLiked' => function (self $o, ParseNode $n) { $o->setYammerMessagesLiked($n->getIntegerValue()); },
            'yammerMessagesPosted' => function (self $o, ParseNode $n) { $o->setYammerMessagesPosted($n->getIntegerValue()); },
            'yammerMessagesRead' => function (self $o, ParseNode $n) { $o->setYammerMessagesRead($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the reportDate property value. The date on which a number of emails were sent to a group mailbox or a number of messages were posted, read, or liked in a Yammer group
     * @return Date|null
    */
    public function getReportDate(): ?Date {
        return $this->reportDate;
    }

    /**
     * Gets the reportPeriod property value. The number of days the report covers.
     * @return string|null
    */
    public function getReportPeriod(): ?string {
        return $this->reportPeriod;
    }

    /**
     * Gets the reportRefreshDate property value. The latest date of the content.
     * @return Date|null
    */
    public function getReportRefreshDate(): ?Date {
        return $this->reportRefreshDate;
    }

    /**
     * Gets the yammerMessagesLiked property value. The number of messages liked in Yammer groups.
     * @return int|null
    */
    public function getYammerMessagesLiked(): ?int {
        return $this->yammerMessagesLiked;
    }

    /**
     * Gets the yammerMessagesPosted property value. The number of messages posted to Yammer groups.
     * @return int|null
    */
    public function getYammerMessagesPosted(): ?int {
        return $this->yammerMessagesPosted;
    }

    /**
     * Gets the yammerMessagesRead property value. The number of messages read in Yammer groups.
     * @return int|null
    */
    public function getYammerMessagesRead(): ?int {
        return $this->yammerMessagesRead;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('exchangeEmailsReceived', $this->exchangeEmailsReceived);
        $writer->writeDateValue('reportDate', $this->reportDate);
        $writer->writeStringValue('reportPeriod', $this->reportPeriod);
        $writer->writeDateValue('reportRefreshDate', $this->reportRefreshDate);
        $writer->writeIntegerValue('yammerMessagesLiked', $this->yammerMessagesLiked);
        $writer->writeIntegerValue('yammerMessagesPosted', $this->yammerMessagesPosted);
        $writer->writeIntegerValue('yammerMessagesRead', $this->yammerMessagesRead);
    }

    /**
     * Sets the exchangeEmailsReceived property value. The number of emails received by Group mailboxes.
     *  @param int|null $value Value to set for the exchangeEmailsReceived property.
    */
    public function setExchangeEmailsReceived(?int $value ): void {
        $this->exchangeEmailsReceived = $value;
    }

    /**
     * Sets the reportDate property value. The date on which a number of emails were sent to a group mailbox or a number of messages were posted, read, or liked in a Yammer group
     *  @param Date|null $value Value to set for the reportDate property.
    */
    public function setReportDate(?Date $value ): void {
        $this->reportDate = $value;
    }

    /**
     * Sets the reportPeriod property value. The number of days the report covers.
     *  @param string|null $value Value to set for the reportPeriod property.
    */
    public function setReportPeriod(?string $value ): void {
        $this->reportPeriod = $value;
    }

    /**
     * Sets the reportRefreshDate property value. The latest date of the content.
     *  @param Date|null $value Value to set for the reportRefreshDate property.
    */
    public function setReportRefreshDate(?Date $value ): void {
        $this->reportRefreshDate = $value;
    }

    /**
     * Sets the yammerMessagesLiked property value. The number of messages liked in Yammer groups.
     *  @param int|null $value Value to set for the yammerMessagesLiked property.
    */
    public function setYammerMessagesLiked(?int $value ): void {
        $this->yammerMessagesLiked = $value;
    }

    /**
     * Sets the yammerMessagesPosted property value. The number of messages posted to Yammer groups.
     *  @param int|null $value Value to set for the yammerMessagesPosted property.
    */
    public function setYammerMessagesPosted(?int $value ): void {
        $this->yammerMessagesPosted = $value;
    }

    /**
     * Sets the yammerMessagesRead property value. The number of messages read in Yammer groups.
     *  @param int|null $value Value to set for the yammerMessagesRead property.
    */
    public function setYammerMessagesRead(?int $value ): void {
        $this->yammerMessagesRead = $value;
    }

}
