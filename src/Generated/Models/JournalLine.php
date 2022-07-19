<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class JournalLine extends Entity implements Parsable 
{
    /**
     * @var Account|null $account The account property
    */
    private ?Account $account = null;
    
    /**
     * @var string|null $accountId The accountId property
    */
    private ?string $accountId = null;
    
    /**
     * @var string|null $accountNumber The accountNumber property
    */
    private ?string $accountNumber = null;
    
    /**
     * @var string|null $amount The amount property
    */
    private ?string $amount = null;
    
    /**
     * @var string|null $comment The comment property
    */
    private ?string $comment = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $documentNumber The documentNumber property
    */
    private ?string $documentNumber = null;
    
    /**
     * @var string|null $externalDocumentNumber The externalDocumentNumber property
    */
    private ?string $externalDocumentNumber = null;
    
    /**
     * @var string|null $journalDisplayName The journalDisplayName property
    */
    private ?string $journalDisplayName = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var int|null $lineNumber The lineNumber property
    */
    private ?int $lineNumber = null;
    
    /**
     * @var Date|null $postingDate The postingDate property
    */
    private ?Date $postingDate = null;
    
    /**
     * Instantiates a new journalLine and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.journalLine');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return JournalLine
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): JournalLine {
        return new JournalLine();
    }

    /**
     * Gets the account property value. The account property
     * @return Account|null
    */
    public function getAccount(): ?Account {
        return $this->account;
    }

    /**
     * Gets the accountId property value. The accountId property
     * @return string|null
    */
    public function getAccountId(): ?string {
        return $this->accountId;
    }

    /**
     * Gets the accountNumber property value. The accountNumber property
     * @return string|null
    */
    public function getAccountNumber(): ?string {
        return $this->accountNumber;
    }

    /**
     * Gets the amount property value. The amount property
     * @return string|null
    */
    public function getAmount(): ?string {
        return $this->amount;
    }

    /**
     * Gets the comment property value. The comment property
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->comment;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the documentNumber property value. The documentNumber property
     * @return string|null
    */
    public function getDocumentNumber(): ?string {
        return $this->documentNumber;
    }

    /**
     * Gets the externalDocumentNumber property value. The externalDocumentNumber property
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'account' => function (ParseNode $n) use ($o) { $o->setAccount($n->getObjectValue(array(Account::class, 'createFromDiscriminatorValue'))); },
            'accountId' => function (ParseNode $n) use ($o) { $o->setAccountId($n->getStringValue()); },
            'accountNumber' => function (ParseNode $n) use ($o) { $o->setAccountNumber($n->getStringValue()); },
            'amount' => function (ParseNode $n) use ($o) { $o->setAmount($n->getStringValue()); },
            'comment' => function (ParseNode $n) use ($o) { $o->setComment($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'documentNumber' => function (ParseNode $n) use ($o) { $o->setDocumentNumber($n->getStringValue()); },
            'externalDocumentNumber' => function (ParseNode $n) use ($o) { $o->setExternalDocumentNumber($n->getStringValue()); },
            'journalDisplayName' => function (ParseNode $n) use ($o) { $o->setJournalDisplayName($n->getStringValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'lineNumber' => function (ParseNode $n) use ($o) { $o->setLineNumber($n->getIntegerValue()); },
            'postingDate' => function (ParseNode $n) use ($o) { $o->setPostingDate($n->getDateValue()); },
        ]);
    }

    /**
     * Gets the journalDisplayName property value. The journalDisplayName property
     * @return string|null
    */
    public function getJournalDisplayName(): ?string {
        return $this->journalDisplayName;
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the lineNumber property value. The lineNumber property
     * @return int|null
    */
    public function getLineNumber(): ?int {
        return $this->lineNumber;
    }

    /**
     * Gets the postingDate property value. The postingDate property
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
        $writer->writeStringValue('amount', $this->amount);
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
     * Sets the account property value. The account property
     *  @param Account|null $value Value to set for the account property.
    */
    public function setAccount(?Account $value ): void {
        $this->account = $value;
    }

    /**
     * Sets the accountId property value. The accountId property
     *  @param string|null $value Value to set for the accountId property.
    */
    public function setAccountId(?string $value ): void {
        $this->accountId = $value;
    }

    /**
     * Sets the accountNumber property value. The accountNumber property
     *  @param string|null $value Value to set for the accountNumber property.
    */
    public function setAccountNumber(?string $value ): void {
        $this->accountNumber = $value;
    }

    /**
     * Sets the amount property value. The amount property
     *  @param string|null $value Value to set for the amount property.
    */
    public function setAmount(?string $value ): void {
        $this->amount = $value;
    }

    /**
     * Sets the comment property value. The comment property
     *  @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value ): void {
        $this->comment = $value;
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the documentNumber property value. The documentNumber property
     *  @param string|null $value Value to set for the documentNumber property.
    */
    public function setDocumentNumber(?string $value ): void {
        $this->documentNumber = $value;
    }

    /**
     * Sets the externalDocumentNumber property value. The externalDocumentNumber property
     *  @param string|null $value Value to set for the externalDocumentNumber property.
    */
    public function setExternalDocumentNumber(?string $value ): void {
        $this->externalDocumentNumber = $value;
    }

    /**
     * Sets the journalDisplayName property value. The journalDisplayName property
     *  @param string|null $value Value to set for the journalDisplayName property.
    */
    public function setJournalDisplayName(?string $value ): void {
        $this->journalDisplayName = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the lineNumber property value. The lineNumber property
     *  @param int|null $value Value to set for the lineNumber property.
    */
    public function setLineNumber(?int $value ): void {
        $this->lineNumber = $value;
    }

    /**
     * Sets the postingDate property value. The postingDate property
     *  @param Date|null $value Value to set for the postingDate property.
    */
    public function setPostingDate(?Date $value ): void {
        $this->postingDate = $value;
    }

}
