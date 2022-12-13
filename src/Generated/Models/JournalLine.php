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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): JournalLine {
        return new JournalLine();
    }

    /**
     * Gets the account property value. The account property
     * @return Account|null
    */
    public function getAccount(): ?Account {
        return $this->getBackingStore()->get('account');
    }

    /**
     * Gets the accountId property value. The accountId property
     * @return Guid|null
    */
    public function getAccountId(): ?Guid {
        return $this->getBackingStore()->get('accountId');
    }

    /**
     * Gets the accountNumber property value. The accountNumber property
     * @return string|null
    */
    public function getAccountNumber(): ?string {
        return $this->getBackingStore()->get('accountNumber');
    }

    /**
     * Gets the amount property value. The amount property
     * @return string|null
    */
    public function getAmount(): ?string {
        return $this->getBackingStore()->get('amount');
    }

    /**
     * Gets the comment property value. The comment property
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->getBackingStore()->get('comment');
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the documentNumber property value. The documentNumber property
     * @return string|null
    */
    public function getDocumentNumber(): ?string {
        return $this->getBackingStore()->get('documentNumber');
    }

    /**
     * Gets the externalDocumentNumber property value. The externalDocumentNumber property
     * @return string|null
    */
    public function getExternalDocumentNumber(): ?string {
        return $this->getBackingStore()->get('externalDocumentNumber');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'account' => fn(ParseNode $n) => $o->setAccount($n->getObjectValue([Account::class, 'createFromDiscriminatorValue'])),
            'accountId' => fn(ParseNode $n) => $o->setAccountId($n->getObjectValue([Guid::class, 'createFromDiscriminatorValue'])),
            'accountNumber' => fn(ParseNode $n) => $o->setAccountNumber($n->getStringValue()),
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getStringValue()),
            'comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'documentNumber' => fn(ParseNode $n) => $o->setDocumentNumber($n->getStringValue()),
            'externalDocumentNumber' => fn(ParseNode $n) => $o->setExternalDocumentNumber($n->getStringValue()),
            'journalDisplayName' => fn(ParseNode $n) => $o->setJournalDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'lineNumber' => fn(ParseNode $n) => $o->setLineNumber($n->getIntegerValue()),
            'postingDate' => fn(ParseNode $n) => $o->setPostingDate($n->getDateValue()),
        ]);
    }

    /**
     * Gets the journalDisplayName property value. The journalDisplayName property
     * @return string|null
    */
    public function getJournalDisplayName(): ?string {
        return $this->getBackingStore()->get('journalDisplayName');
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the lineNumber property value. The lineNumber property
     * @return int|null
    */
    public function getLineNumber(): ?int {
        return $this->getBackingStore()->get('lineNumber');
    }

    /**
     * Gets the postingDate property value. The postingDate property
     * @return Date|null
    */
    public function getPostingDate(): ?Date {
        return $this->getBackingStore()->get('postingDate');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('account', $this->getAccount());
        $writer->writeStringValue('accountId', $this->getAccountId());
        $writer->writeStringValue('accountNumber', $this->getAccountNumber());
        $writer->writeStringValue('amount', $this->getAmount());
        $writer->writeStringValue('comment', $this->getComment());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('documentNumber', $this->getDocumentNumber());
        $writer->writeStringValue('externalDocumentNumber', $this->getExternalDocumentNumber());
        $writer->writeStringValue('journalDisplayName', $this->getJournalDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeIntegerValue('lineNumber', $this->getLineNumber());
        $writer->writeDateValue('postingDate', $this->getPostingDate());
    }

    /**
     * Sets the account property value. The account property
     *  @param Account|null $value Value to set for the account property.
    */
    public function setAccount(?Account $value): void {
        $this->getBackingStore()->set('account', $value);
    }

    /**
     * Sets the accountId property value. The accountId property
     *  @param Guid|null $value Value to set for the accountId property.
    */
    public function setAccountId(?Guid $value): void {
        $this->getBackingStore()->set('accountId', $value);
    }

    /**
     * Sets the accountNumber property value. The accountNumber property
     *  @param string|null $value Value to set for the accountNumber property.
    */
    public function setAccountNumber(?string $value): void {
        $this->getBackingStore()->set('accountNumber', $value);
    }

    /**
     * Sets the amount property value. The amount property
     *  @param string|null $value Value to set for the amount property.
    */
    public function setAmount(?string $value): void {
        $this->getBackingStore()->set('amount', $value);
    }

    /**
     * Sets the comment property value. The comment property
     *  @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value): void {
        $this->getBackingStore()->set('comment', $value);
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the documentNumber property value. The documentNumber property
     *  @param string|null $value Value to set for the documentNumber property.
    */
    public function setDocumentNumber(?string $value): void {
        $this->getBackingStore()->set('documentNumber', $value);
    }

    /**
     * Sets the externalDocumentNumber property value. The externalDocumentNumber property
     *  @param string|null $value Value to set for the externalDocumentNumber property.
    */
    public function setExternalDocumentNumber(?string $value): void {
        $this->getBackingStore()->set('externalDocumentNumber', $value);
    }

    /**
     * Sets the journalDisplayName property value. The journalDisplayName property
     *  @param string|null $value Value to set for the journalDisplayName property.
    */
    public function setJournalDisplayName(?string $value): void {
        $this->getBackingStore()->set('journalDisplayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the lineNumber property value. The lineNumber property
     *  @param int|null $value Value to set for the lineNumber property.
    */
    public function setLineNumber(?int $value): void {
        $this->getBackingStore()->set('lineNumber', $value);
    }

    /**
     * Sets the postingDate property value. The postingDate property
     *  @param Date|null $value Value to set for the postingDate property.
    */
    public function setPostingDate(?Date $value): void {
        $this->getBackingStore()->set('postingDate', $value);
    }

}
