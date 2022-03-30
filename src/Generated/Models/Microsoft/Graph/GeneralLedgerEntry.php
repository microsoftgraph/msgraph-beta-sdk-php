<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class GeneralLedgerEntry extends Entity 
{
    /** @var Account|null $account  */
    private ?Account $account = null;
    
    /** @var string|null $accountId  */
    private ?string $accountId = null;
    
    /** @var string|null $accountNumber  */
    private ?string $accountNumber = null;
    
    /** @var float|null $creditAmount  */
    private ?float $creditAmount = null;
    
    /** @var float|null $debitAmount  */
    private ?float $debitAmount = null;
    
    /** @var string|null $description  */
    private ?string $description = null;
    
    /** @var string|null $documentNumber  */
    private ?string $documentNumber = null;
    
    /** @var string|null $documentType  */
    private ?string $documentType = null;
    
    /** @var DateTime|null $lastModifiedDateTime  */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var Date|null $postingDate  */
    private ?Date $postingDate = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): GeneralLedgerEntry {
        return new GeneralLedgerEntry();
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
     * Gets the creditAmount property value. 
     * @return float|null
    */
    public function getCreditAmount(): ?float {
        return $this->creditAmount;
    }

    /**
     * Gets the debitAmount property value. 
     * @return float|null
    */
    public function getDebitAmount(): ?float {
        return $this->debitAmount;
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
     * Gets the documentType property value. 
     * @return string|null
    */
    public function getDocumentType(): ?string {
        return $this->documentType;
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
            'creditAmount' => function (self $o, ParseNode $n) { $o->setCreditAmount($n->getFloatValue()); },
            'debitAmount' => function (self $o, ParseNode $n) { $o->setDebitAmount($n->getFloatValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'documentNumber' => function (self $o, ParseNode $n) { $o->setDocumentNumber($n->getStringValue()); },
            'documentType' => function (self $o, ParseNode $n) { $o->setDocumentType($n->getStringValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'postingDate' => function (self $o, ParseNode $n) { $o->setPostingDate($n->getDateValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. 
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
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
        $writer->writeFloatValue('creditAmount', $this->creditAmount);
        $writer->writeFloatValue('debitAmount', $this->debitAmount);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('documentNumber', $this->documentNumber);
        $writer->writeStringValue('documentType', $this->documentType);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
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
     * Sets the creditAmount property value. 
     *  @param float|null $value Value to set for the creditAmount property.
    */
    public function setCreditAmount(?float $value ): void {
        $this->creditAmount = $value;
    }

    /**
     * Sets the debitAmount property value. 
     *  @param float|null $value Value to set for the debitAmount property.
    */
    public function setDebitAmount(?float $value ): void {
        $this->debitAmount = $value;
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
     * Sets the documentType property value. 
     *  @param string|null $value Value to set for the documentType property.
    */
    public function setDocumentType(?string $value ): void {
        $this->documentType = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the postingDate property value. 
     *  @param Date|null $value Value to set for the postingDate property.
    */
    public function setPostingDate(?Date $value ): void {
        $this->postingDate = $value;
    }

}
