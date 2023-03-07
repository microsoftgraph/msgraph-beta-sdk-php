<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class CustomerPayment extends Entity implements Parsable 
{
    /**
     * Instantiates a new CustomerPayment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerPayment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerPayment {
        return new CustomerPayment();
    }

    /**
     * Gets the amount property value. The amount property
     * @return string|null
    */
    public function getAmount(): ?string {
        return $this->getBackingStore()->get('amount');
    }

    /**
     * Gets the appliesToInvoiceId property value. The appliesToInvoiceId property
     * @return string|null
    */
    public function getAppliesToInvoiceId(): ?string {
        return $this->getBackingStore()->get('appliesToInvoiceId');
    }

    /**
     * Gets the appliesToInvoiceNumber property value. The appliesToInvoiceNumber property
     * @return string|null
    */
    public function getAppliesToInvoiceNumber(): ?string {
        return $this->getBackingStore()->get('appliesToInvoiceNumber');
    }

    /**
     * Gets the comment property value. The comment property
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->getBackingStore()->get('comment');
    }

    /**
     * Gets the contactId property value. The contactId property
     * @return string|null
    */
    public function getContactId(): ?string {
        return $this->getBackingStore()->get('contactId');
    }

    /**
     * Gets the customer property value. The customer property
     * @return Customer|null
    */
    public function getCustomer(): ?Customer {
        return $this->getBackingStore()->get('customer');
    }

    /**
     * Gets the customerId property value. The customerId property
     * @return string|null
    */
    public function getCustomerId(): ?string {
        return $this->getBackingStore()->get('customerId');
    }

    /**
     * Gets the customerNumber property value. The customerNumber property
     * @return string|null
    */
    public function getCustomerNumber(): ?string {
        return $this->getBackingStore()->get('customerNumber');
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
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getStringValue()),
            'appliesToInvoiceId' => fn(ParseNode $n) => $o->setAppliesToInvoiceId($n->getStringValue()),
            'appliesToInvoiceNumber' => fn(ParseNode $n) => $o->setAppliesToInvoiceNumber($n->getStringValue()),
            'comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'contactId' => fn(ParseNode $n) => $o->setContactId($n->getStringValue()),
            'customer' => fn(ParseNode $n) => $o->setCustomer($n->getObjectValue([Customer::class, 'createFromDiscriminatorValue'])),
            'customerId' => fn(ParseNode $n) => $o->setCustomerId($n->getStringValue()),
            'customerNumber' => fn(ParseNode $n) => $o->setCustomerNumber($n->getStringValue()),
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
        $writer->writeStringValue('amount', $this->getAmount());
        $writer->writeStringValue('appliesToInvoiceId', $this->getAppliesToInvoiceId());
        $writer->writeStringValue('appliesToInvoiceNumber', $this->getAppliesToInvoiceNumber());
        $writer->writeStringValue('comment', $this->getComment());
        $writer->writeStringValue('contactId', $this->getContactId());
        $writer->writeObjectValue('customer', $this->getCustomer());
        $writer->writeStringValue('customerId', $this->getCustomerId());
        $writer->writeStringValue('customerNumber', $this->getCustomerNumber());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('documentNumber', $this->getDocumentNumber());
        $writer->writeStringValue('externalDocumentNumber', $this->getExternalDocumentNumber());
        $writer->writeStringValue('journalDisplayName', $this->getJournalDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeIntegerValue('lineNumber', $this->getLineNumber());
        $writer->writeDateValue('postingDate', $this->getPostingDate());
    }

    /**
     * Sets the amount property value. The amount property
     * @param string|null $value Value to set for the amount property.
    */
    public function setAmount(?string $value): void {
        $this->getBackingStore()->set('amount', $value);
    }

    /**
     * Sets the appliesToInvoiceId property value. The appliesToInvoiceId property
     * @param string|null $value Value to set for the appliesToInvoiceId property.
    */
    public function setAppliesToInvoiceId(?string $value): void {
        $this->getBackingStore()->set('appliesToInvoiceId', $value);
    }

    /**
     * Sets the appliesToInvoiceNumber property value. The appliesToInvoiceNumber property
     * @param string|null $value Value to set for the appliesToInvoiceNumber property.
    */
    public function setAppliesToInvoiceNumber(?string $value): void {
        $this->getBackingStore()->set('appliesToInvoiceNumber', $value);
    }

    /**
     * Sets the comment property value. The comment property
     * @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value): void {
        $this->getBackingStore()->set('comment', $value);
    }

    /**
     * Sets the contactId property value. The contactId property
     * @param string|null $value Value to set for the contactId property.
    */
    public function setContactId(?string $value): void {
        $this->getBackingStore()->set('contactId', $value);
    }

    /**
     * Sets the customer property value. The customer property
     * @param Customer|null $value Value to set for the customer property.
    */
    public function setCustomer(?Customer $value): void {
        $this->getBackingStore()->set('customer', $value);
    }

    /**
     * Sets the customerId property value. The customerId property
     * @param string|null $value Value to set for the customerId property.
    */
    public function setCustomerId(?string $value): void {
        $this->getBackingStore()->set('customerId', $value);
    }

    /**
     * Sets the customerNumber property value. The customerNumber property
     * @param string|null $value Value to set for the customerNumber property.
    */
    public function setCustomerNumber(?string $value): void {
        $this->getBackingStore()->set('customerNumber', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the documentNumber property value. The documentNumber property
     * @param string|null $value Value to set for the documentNumber property.
    */
    public function setDocumentNumber(?string $value): void {
        $this->getBackingStore()->set('documentNumber', $value);
    }

    /**
     * Sets the externalDocumentNumber property value. The externalDocumentNumber property
     * @param string|null $value Value to set for the externalDocumentNumber property.
    */
    public function setExternalDocumentNumber(?string $value): void {
        $this->getBackingStore()->set('externalDocumentNumber', $value);
    }

    /**
     * Sets the journalDisplayName property value. The journalDisplayName property
     * @param string|null $value Value to set for the journalDisplayName property.
    */
    public function setJournalDisplayName(?string $value): void {
        $this->getBackingStore()->set('journalDisplayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the lineNumber property value. The lineNumber property
     * @param int|null $value Value to set for the lineNumber property.
    */
    public function setLineNumber(?int $value): void {
        $this->getBackingStore()->set('lineNumber', $value);
    }

    /**
     * Sets the postingDate property value. The postingDate property
     * @param Date|null $value Value to set for the postingDate property.
    */
    public function setPostingDate(?Date $value): void {
        $this->getBackingStore()->set('postingDate', $value);
    }

}
