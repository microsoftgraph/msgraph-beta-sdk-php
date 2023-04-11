<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomerPaymentJournal extends Entity implements Parsable 
{
    /**
     * Instantiates a new CustomerPaymentJournal and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerPaymentJournal
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerPaymentJournal {
        return new CustomerPaymentJournal();
    }

    /**
     * Gets the account property value. The account property
     * @return Account|null
    */
    public function getAccount(): ?Account {
        return $this->getBackingStore()->get('account');
    }

    /**
     * Gets the balancingAccountId property value. The balancingAccountId property
     * @return string|null
    */
    public function getBalancingAccountId(): ?string {
        return $this->getBackingStore()->get('balancingAccountId');
    }

    /**
     * Gets the balancingAccountNumber property value. The balancingAccountNumber property
     * @return string|null
    */
    public function getBalancingAccountNumber(): ?string {
        return $this->getBackingStore()->get('balancingAccountNumber');
    }

    /**
     * Gets the code property value. The code property
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->getBackingStore()->get('code');
    }

    /**
     * Gets the customerPayments property value. The customerPayments property
     * @return array<CustomerPayment>|null
    */
    public function getCustomerPayments(): ?array {
        return $this->getBackingStore()->get('customerPayments');
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'account' => fn(ParseNode $n) => $o->setAccount($n->getObjectValue([Account::class, 'createFromDiscriminatorValue'])),
            'balancingAccountId' => fn(ParseNode $n) => $o->setBalancingAccountId($n->getStringValue()),
            'balancingAccountNumber' => fn(ParseNode $n) => $o->setBalancingAccountNumber($n->getStringValue()),
            'code' => fn(ParseNode $n) => $o->setCode($n->getStringValue()),
            'customerPayments' => fn(ParseNode $n) => $o->setCustomerPayments($n->getCollectionOfObjectValues([CustomerPayment::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('account', $this->getAccount());
        $writer->writeStringValue('balancingAccountId', $this->getBalancingAccountId());
        $writer->writeStringValue('balancingAccountNumber', $this->getBalancingAccountNumber());
        $writer->writeStringValue('code', $this->getCode());
        $writer->writeCollectionOfObjectValues('customerPayments', $this->getCustomerPayments());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
    }

    /**
     * Sets the account property value. The account property
     * @param Account|null $value Value to set for the account property.
    */
    public function setAccount(?Account $value): void {
        $this->getBackingStore()->set('account', $value);
    }

    /**
     * Sets the balancingAccountId property value. The balancingAccountId property
     * @param string|null $value Value to set for the balancingAccountId property.
    */
    public function setBalancingAccountId(?string $value): void {
        $this->getBackingStore()->set('balancingAccountId', $value);
    }

    /**
     * Sets the balancingAccountNumber property value. The balancingAccountNumber property
     * @param string|null $value Value to set for the balancingAccountNumber property.
    */
    public function setBalancingAccountNumber(?string $value): void {
        $this->getBackingStore()->set('balancingAccountNumber', $value);
    }

    /**
     * Sets the code property value. The code property
     * @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value): void {
        $this->getBackingStore()->set('code', $value);
    }

    /**
     * Sets the customerPayments property value. The customerPayments property
     * @param array<CustomerPayment>|null $value Value to set for the customerPayments property.
    */
    public function setCustomerPayments(?array $value): void {
        $this->getBackingStore()->set('customerPayments', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

}
