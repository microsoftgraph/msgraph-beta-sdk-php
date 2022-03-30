<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class JournalLine extends Entity 
{
    /** @var Account|null $account  */
    private ?Account $account = null;
    
    /** @var string|null $accountId  */
    private ?string $accountId = null;
    
    /** @var string|null $accountNumber  */
    private ?string $accountNumber = null;
    
    /** @var float|null $amount  */
    private ?float $amount = null;
    
    /** @var string|null $comment  */
    private ?string $comment = null;
    
    /** @var string|null $description  */
    private ?string $description = null;
    
    /** @var string|null $documentNumber  */
    private ?string $documentNumber = null;
    
    /** @var string|null $externalDocumentNumber  */
    private ?string $externalDocumentNumber = null;
    
    /** @var string|null $journalDisplayName  */
    private ?string $journalDisplayName = null;
    
    /** @var DateTime|null $lastModifiedDateTime  */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var int|null $lineNumber  */
    private ?int $lineNumber = null;
    
    /** @var Date|null $postingDate  */
    private ?Date $postingDate = null;
    
    /**
     * Instantiates a new journalLine and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return JournalLine
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): JournalLine {
        return new JournalLine();
    }

    /**
     * Gets the account property value. 
     * @return Account|null
    */
    public function getAccount(): ?Account {
        return $this->account;
    }

    /**
     * Gets the accountId property value. 
     * @return string|null
    */
    public function getAccountId(): ?string {
        return $this->accountId;
    }

    /**
     * Gets the accountNumber property value. 
     * @return string|null
    */
    public function getAccountNumber(): ?string {
        return $this->accountNumber;
    }

    /**
     * Gets the amount property value. 
     * @return float|null
    */
    public function getAmount(): ?float {
        return $this->amount;
    }

    /**
     * Gets the comment property value. 
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->comment;
    }

    /**
     * Gets the description property value. 
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the documentNumber property value. 
     * @return string|null
    */
    public function getDocumentNumber(): ?string {
        return $this->documentNumber;
    }

    /**
     * Gets the externalDocumentNumber property value. 
     * @return string|null
    */
    public function getExternalDocumentNumber(): ?string {
        return $this->externalDocumentNumber;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'account' => function (self $o, ParseNode $n) { $o->setAccount($n->getObjectValue(Account::class)); },
            'accountId' => function (self $o, ParseNode $n) { $o->setAccountId($n->getStringValue()); },
            'accountNumber' => function (self $o, ParseNode $n) { $o->setAccountNumber($n->getStringValue()); },
            'amount' => function (self $o, ParseNode $n) { $o->setAmount($n->getFloatValue()); },
            'comment' => function (self $o, ParseNode $n) { $o->setComment($n->getStringValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'documentNumber' => function (self $o, ParseNode $n) { $o->setDocumentNumber($n->getStringValue()); },
            'externalDocumentNumber' => function (self $o, ParseNode $n) { $o->setExternalDocumentNumber($n->getStringValue()); },
            'journalDisplayName' => function (self $o, ParseNode $n) { $o->setJournalDisplayName($n->getStringValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'lineNumber' => function (self $o, ParseNode $n) { $o->setLineNumber($n->getIntegerValue()); },
            'postingDate' => function (self $o, ParseNode $n) { $o->setPostingDate($n->getDateValue()); },
        ]);
    }

    /**
     * Gets the journalDisplayName property value. 
     * @return string|null
    */
    public function getJournalDisplayName(): ?string {
        return $this->journalDisplayName;
    }

    /**
     * Gets the lastModifiedDateTime property value. 
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the lineNumber property value. 
     * @return int|null
    */
    public function getLineNumber(): ?int {
        return $this->lineNumber;
    }

    /**
     * Gets the postingDate property value. 
     * @return Date|null
    */
    public function getPostingDate(): ?Date {
        return $this->postingDate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('account', $this->account);
        $writer->writeStringValue('accountId', $this->accountId);
        $writer->writeStringValue('accountNumber', $this->accountNumber);
        $writer->writeFloatValue('amount', $this->amount);
        $writer->writeStringValue('comment', $this->comment);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('documentNumber', $this->documentNumber);
        $writer->writeStringValue('externalDocumentNumber', $this->externalDocumentNumber);
        $writer->writeStringValue('journalDisplayName', $this->journalDisplayName);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeIntegerValue('lineNumber', $this->lineNumber);
        $writer->writeDateValue('postingDate', $this->postingDate);
    }

    /**
     * Sets the account property value. 
     *  @param Account|null $value Value to set for the account property.
    */
    public function setAccount(?Account $value ): void {
        $this->account = $value;
    }

    /**
     * Sets the accountId property value. 
     *  @param string|null $value Value to set for the accountId property.
    */
    public function setAccountId(?string $value ): void {
        $this->accountId = $value;
    }

    /**
     * Sets the accountNumber property value. 
     *  @param string|null $value Value to set for the accountNumber property.
    */
    public function setAccountNumber(?string $value ): void {
        $this->accountNumber = $value;
    }

    /**
     * Sets the amount property value. 
     *  @param float|null $value Value to set for the amount property.
    */
    public function setAmount(?float $value ): void {
        $this->amount = $value;
    }

    /**
     * Sets the comment property value. 
     *  @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value ): void {
        $this->comment = $value;
    }

    /**
     * Sets the description property value. 
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the documentNumber property value. 
     *  @param string|null $value Value to set for the documentNumber property.
    */
    public function setDocumentNumber(?string $value ): void {
        $this->documentNumber = $value;
    }

    /**
     * Sets the externalDocumentNumber property value. 
     *  @param string|null $value Value to set for the externalDocumentNumber property.
    */
    public function setExternalDocumentNumber(?string $value ): void {
        $this->externalDocumentNumber = $value;
    }

    /**
     * Sets the journalDisplayName property value. 
     *  @param string|null $value Value to set for the journalDisplayName property.
    */
    public function setJournalDisplayName(?string $value ): void {
        $this->journalDisplayName = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the lineNumber property value. 
     *  @param int|null $value Value to set for the lineNumber property.
    */
    public function setLineNumber(?int $value ): void {
        $this->lineNumber = $value;
    }

    /**
     * Sets the postingDate property value. 
     *  @param Date|null $value Value to set for the postingDate property.
    */
    public function setPostingDate(?Date $value ): void {
        $this->postingDate = $value;
    }

}
