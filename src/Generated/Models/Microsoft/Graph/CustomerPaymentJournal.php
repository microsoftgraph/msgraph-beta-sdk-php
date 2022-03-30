<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomerPaymentJournal extends Entity 
{
    /** @var Account|null $account  */
    private ?Account $account = null;
    
    /** @var string|null $balancingAccountId  */
    private ?string $balancingAccountId = null;
    
    /** @var string|null $balancingAccountNumber  */
    private ?string $balancingAccountNumber = null;
    
    /** @var string|null $code  */
    private ?string $code = null;
    
    /** @var array<CustomerPayment>|null $customerPayments  */
    private ?array $customerPayments = null;
    
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var DateTime|null $lastModifiedDateTime  */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * Instantiates a new customerPaymentJournal and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerPaymentJournal
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CustomerPaymentJournal {
        return new CustomerPaymentJournal();
    }

    /**
     * Gets the account property value. 
     * @return Account|null
    */
    public function getAccount(): ?Account {
        return $this->account;
    }

    /**
     * Gets the balancingAccountId property value. 
     * @return string|null
    */
    public function getBalancingAccountId(): ?string {
        return $this->balancingAccountId;
    }

    /**
     * Gets the balancingAccountNumber property value. 
     * @return string|null
    */
    public function getBalancingAccountNumber(): ?string {
        return $this->balancingAccountNumber;
    }

    /**
     * Gets the code property value. 
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Gets the customerPayments property value. 
     * @return array<CustomerPayment>|null
    */
    public function getCustomerPayments(): ?array {
        return $this->customerPayments;
    }

    /**
     * Gets the displayName property value. 
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'account' => function (self $o, ParseNode $n) { $o->setAccount($n->getObjectValue(Account::class)); },
            'balancingAccountId' => function (self $o, ParseNode $n) { $o->setBalancingAccountId($n->getStringValue()); },
            'balancingAccountNumber' => function (self $o, ParseNode $n) { $o->setBalancingAccountNumber($n->getStringValue()); },
            'code' => function (self $o, ParseNode $n) { $o->setCode($n->getStringValue()); },
            'customerPayments' => function (self $o, ParseNode $n) { $o->setCustomerPayments($n->getCollectionOfObjectValues(CustomerPayment::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('account', $this->account);
        $writer->writeStringValue('balancingAccountId', $this->balancingAccountId);
        $writer->writeStringValue('balancingAccountNumber', $this->balancingAccountNumber);
        $writer->writeStringValue('code', $this->code);
        $writer->writeCollectionOfObjectValues('customerPayments', $this->customerPayments);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
    }

    /**
     * Sets the account property value. 
     *  @param Account|null $value Value to set for the account property.
    */
    public function setAccount(?Account $value ): void {
        $this->account = $value;
    }

    /**
     * Sets the balancingAccountId property value. 
     *  @param string|null $value Value to set for the balancingAccountId property.
    */
    public function setBalancingAccountId(?string $value ): void {
        $this->balancingAccountId = $value;
    }

    /**
     * Sets the balancingAccountNumber property value. 
     *  @param string|null $value Value to set for the balancingAccountNumber property.
    */
    public function setBalancingAccountNumber(?string $value ): void {
        $this->balancingAccountNumber = $value;
    }

    /**
     * Sets the code property value. 
     *  @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value ): void {
        $this->code = $value;
    }

    /**
     * Sets the customerPayments property value. 
     *  @param array<CustomerPayment>|null $value Value to set for the customerPayments property.
    */
    public function setCustomerPayments(?array $value ): void {
        $this->customerPayments = $value;
    }

    /**
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

}
