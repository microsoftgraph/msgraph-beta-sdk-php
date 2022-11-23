<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class GeneralLedgerEntry extends Entity implements Parsable 
{
    /**
     * Instantiates a new generalLedgerEntry and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GeneralLedgerEntry
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GeneralLedgerEntry {
        return new GeneralLedgerEntry();
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
     * @return string|null
    */
    public function getAccountId(): ?string {
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
     * Gets the creditAmount property value. The creditAmount property
     * @return string|null
    */
    public function getCreditAmount(): ?string {
        return $this->getBackingStore()->get('creditAmount');
    }

    /**
     * Gets the debitAmount property value. The debitAmount property
     * @return string|null
    */
    public function getDebitAmount(): ?string {
        return $this->getBackingStore()->get('debitAmount');
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
     * Gets the documentType property value. The documentType property
     * @return string|null
    */
    public function getDocumentType(): ?string {
        return $this->getBackingStore()->get('documentType');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'account' => fn(ParseNode $n) => $o->setAccount($n->getObjectValue([Account::class, 'createFromDiscriminatorValue'])),
            'accountId' => fn(ParseNode $n) => $o->setAccountId($n->getStringValue()),
            'accountNumber' => fn(ParseNode $n) => $o->setAccountNumber($n->getStringValue()),
            'creditAmount' => fn(ParseNode $n) => $o->setCreditAmount($n->getStringValue()),
            'debitAmount' => fn(ParseNode $n) => $o->setDebitAmount($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'documentNumber' => fn(ParseNode $n) => $o->setDocumentNumber($n->getStringValue()),
            'documentType' => fn(ParseNode $n) => $o->setDocumentType($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'postingDate' => fn(ParseNode $n) => $o->setPostingDate($n->getDateValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
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
        $writer->writeStringValue('creditAmount', $this->getCreditAmount());
        $writer->writeStringValue('debitAmount', $this->getDebitAmount());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('documentNumber', $this->getDocumentNumber());
        $writer->writeStringValue('documentType', $this->getDocumentType());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
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
     *  @param string|null $value Value to set for the accountId property.
    */
    public function setAccountId(?string $value): void {
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
     * Sets the creditAmount property value. The creditAmount property
     *  @param string|null $value Value to set for the creditAmount property.
    */
    public function setCreditAmount(?string $value): void {
        $this->getBackingStore()->set('creditAmount', $value);
    }

    /**
     * Sets the debitAmount property value. The debitAmount property
     *  @param string|null $value Value to set for the debitAmount property.
    */
    public function setDebitAmount(?string $value): void {
        $this->getBackingStore()->set('debitAmount', $value);
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
     * Sets the documentType property value. The documentType property
     *  @param string|null $value Value to set for the documentType property.
    */
    public function setDocumentType(?string $value): void {
        $this->getBackingStore()->set('documentType', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the postingDate property value. The postingDate property
     *  @param Date|null $value Value to set for the postingDate property.
    */
    public function setPostingDate(?Date $value): void {
        $this->getBackingStore()->set('postingDate', $value);
    }

}
