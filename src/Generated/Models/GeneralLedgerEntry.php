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
     * @var string|null $creditAmount The creditAmount property
    */
    private ?string $creditAmount = null;
    
    /**
     * @var string|null $debitAmount The debitAmount property
    */
    private ?string $debitAmount = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $documentNumber The documentNumber property
    */
    private ?string $documentNumber = null;
    
    /**
     * @var string|null $documentType The documentType property
    */
    private ?string $documentType = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var Date|null $postingDate The postingDate property
    */
    private ?Date $postingDate = null;
    
    /**
     * Instantiates a new GeneralLedgerEntry and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.generalLedgerEntry');
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
     * Gets the creditAmount property value. The creditAmount property
     * @return string|null
    */
    public function getCreditAmount(): ?string {
        return $this->creditAmount;
    }

    /**
     * Gets the debitAmount property value. The debitAmount property
     * @return string|null
    */
    public function getDebitAmount(): ?string {
        return $this->debitAmount;
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
     * Gets the documentType property value. The documentType property
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'account' => function (ParseNode $n) use ($o) { $o->setAccount($n->getObjectValue(array(Account::class, 'createFromDiscriminatorValue'))); },
            'accountId' => function (ParseNode $n) use ($o) { $o->setAccountId($n->getStringValue()); },
            'accountNumber' => function (ParseNode $n) use ($o) { $o->setAccountNumber($n->getStringValue()); },
            'creditAmount' => function (ParseNode $n) use ($o) { $o->setCreditAmount($n->getStringValue()); },
            'debitAmount' => function (ParseNode $n) use ($o) { $o->setDebitAmount($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'documentNumber' => function (ParseNode $n) use ($o) { $o->setDocumentNumber($n->getStringValue()); },
            'documentType' => function (ParseNode $n) use ($o) { $o->setDocumentType($n->getStringValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'postingDate' => function (ParseNode $n) use ($o) { $o->setPostingDate($n->getDateValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
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
        $writer->writeStringValue('creditAmount', $this->creditAmount);
        $writer->writeStringValue('debitAmount', $this->debitAmount);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('documentNumber', $this->documentNumber);
        $writer->writeStringValue('documentType', $this->documentType);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
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
     * Sets the creditAmount property value. The creditAmount property
     *  @param string|null $value Value to set for the creditAmount property.
    */
    public function setCreditAmount(?string $value ): void {
        $this->creditAmount = $value;
    }

    /**
     * Sets the debitAmount property value. The debitAmount property
     *  @param string|null $value Value to set for the debitAmount property.
    */
    public function setDebitAmount(?string $value ): void {
        $this->debitAmount = $value;
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
     * Sets the documentType property value. The documentType property
     *  @param string|null $value Value to set for the documentType property.
    */
    public function setDocumentType(?string $value ): void {
        $this->documentType = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the postingDate property value. The postingDate property
     *  @param Date|null $value Value to set for the postingDate property.
    */
    public function setPostingDate(?Date $value ): void {
        $this->postingDate = $value;
    }

}
