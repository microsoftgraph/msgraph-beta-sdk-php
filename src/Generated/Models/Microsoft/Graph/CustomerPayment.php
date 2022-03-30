<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class CustomerPayment extends Entity 
{
    /** @var float|null $amount  */
    private ?float $amount = null;
    
    /** @var string|null $appliesToInvoiceId  */
    private ?string $appliesToInvoiceId = null;
    
    /** @var string|null $appliesToInvoiceNumber  */
    private ?string $appliesToInvoiceNumber = null;
    
    /** @var string|null $comment  */
    private ?string $comment = null;
    
    /** @var string|null $contactId  */
    private ?string $contactId = null;
    
    /** @var Customer|null $customer  */
    private ?Customer $customer = null;
    
    /** @var string|null $customerId  */
    private ?string $customerId = null;
    
    /** @var string|null $customerNumber  */
    private ?string $customerNumber = null;
    
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
     * Instantiates a new customerPayment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerPayment
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CustomerPayment {
        return new CustomerPayment();
    }

    /**
     * Gets the amount property value. 
     * @return float|null
    */
    public function getAmount(): ?float {
        return $this->amount;
    }

    /**
     * Gets the appliesToInvoiceId property value. 
     * @return string|null
    */
    public function getAppliesToInvoiceId(): ?string {
        return $this->appliesToInvoiceId;
    }

    /**
     * Gets the appliesToInvoiceNumber property value. 
     * @return string|null
    */
    public function getAppliesToInvoiceNumber(): ?string {
        return $this->appliesToInvoiceNumber;
    }

    /**
     * Gets the comment property value. 
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->comment;
    }

    /**
     * Gets the contactId property value. 
     * @return string|null
    */
    public function getContactId(): ?string {
        return $this->contactId;
    }

    /**
     * Gets the customer property value. 
     * @return Customer|null
    */
    public function getCustomer(): ?Customer {
        return $this->customer;
    }

    /**
     * Gets the customerId property value. 
     * @return string|null
    */
    public function getCustomerId(): ?string {
        return $this->customerId;
    }

    /**
     * Gets the customerNumber property value. 
     * @return string|null
    */
    public function getCustomerNumber(): ?string {
        return $this->customerNumber;
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
            'amount' => function (self $o, ParseNode $n) { $o->setAmount($n->getFloatValue()); },
            'appliesToInvoiceId' => function (self $o, ParseNode $n) { $o->setAppliesToInvoiceId($n->getStringValue()); },
            'appliesToInvoiceNumber' => function (self $o, ParseNode $n) { $o->setAppliesToInvoiceNumber($n->getStringValue()); },
            'comment' => function (self $o, ParseNode $n) { $o->setComment($n->getStringValue()); },
            'contactId' => function (self $o, ParseNode $n) { $o->setContactId($n->getStringValue()); },
            'customer' => function (self $o, ParseNode $n) { $o->setCustomer($n->getObjectValue(Customer::class)); },
            'customerId' => function (self $o, ParseNode $n) { $o->setCustomerId($n->getStringValue()); },
            'customerNumber' => function (self $o, ParseNode $n) { $o->setCustomerNumber($n->getStringValue()); },
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
        $writer->writeFloatValue('amount', $this->amount);
        $writer->writeStringValue('appliesToInvoiceId', $this->appliesToInvoiceId);
        $writer->writeStringValue('appliesToInvoiceNumber', $this->appliesToInvoiceNumber);
        $writer->writeStringValue('comment', $this->comment);
        $writer->writeStringValue('contactId', $this->contactId);
        $writer->writeObjectValue('customer', $this->customer);
        $writer->writeStringValue('customerId', $this->customerId);
        $writer->writeStringValue('customerNumber', $this->customerNumber);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('documentNumber', $this->documentNumber);
        $writer->writeStringValue('externalDocumentNumber', $this->externalDocumentNumber);
        $writer->writeStringValue('journalDisplayName', $this->journalDisplayName);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeIntegerValue('lineNumber', $this->lineNumber);
        $writer->writeDateValue('postingDate', $this->postingDate);
    }

    /**
     * Sets the amount property value. 
     *  @param float|null $value Value to set for the amount property.
    */
    public function setAmount(?float $value ): void {
        $this->amount = $value;
    }

    /**
     * Sets the appliesToInvoiceId property value. 
     *  @param string|null $value Value to set for the appliesToInvoiceId property.
    */
    public function setAppliesToInvoiceId(?string $value ): void {
        $this->appliesToInvoiceId = $value;
    }

    /**
     * Sets the appliesToInvoiceNumber property value. 
     *  @param string|null $value Value to set for the appliesToInvoiceNumber property.
    */
    public function setAppliesToInvoiceNumber(?string $value ): void {
        $this->appliesToInvoiceNumber = $value;
    }

    /**
     * Sets the comment property value. 
     *  @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value ): void {
        $this->comment = $value;
    }

    /**
     * Sets the contactId property value. 
     *  @param string|null $value Value to set for the contactId property.
    */
    public function setContactId(?string $value ): void {
        $this->contactId = $value;
    }

    /**
     * Sets the customer property value. 
     *  @param Customer|null $value Value to set for the customer property.
    */
    public function setCustomer(?Customer $value ): void {
        $this->customer = $value;
    }

    /**
     * Sets the customerId property value. 
     *  @param string|null $value Value to set for the customerId property.
    */
    public function setCustomerId(?string $value ): void {
        $this->customerId = $value;
    }

    /**
     * Sets the customerNumber property value. 
     *  @param string|null $value Value to set for the customerNumber property.
    */
    public function setCustomerNumber(?string $value ): void {
        $this->customerNumber = $value;
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
