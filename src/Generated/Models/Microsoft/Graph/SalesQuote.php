<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class SalesQuote extends Entity 
{
    /** @var Date|null $acceptedDate  */
    private ?Date $acceptedDate = null;
    
    /** @var PostalAddressType|null $billingPostalAddress  */
    private ?PostalAddressType $billingPostalAddress = null;
    
    /** @var string|null $billToCustomerId  */
    private ?string $billToCustomerId = null;
    
    /** @var string|null $billToCustomerNumber  */
    private ?string $billToCustomerNumber = null;
    
    /** @var string|null $billToName  */
    private ?string $billToName = null;
    
    /** @var Currency|null $currency  */
    private ?Currency $currency = null;
    
    /** @var string|null $currencyCode  */
    private ?string $currencyCode = null;
    
    /** @var string|null $currencyId  */
    private ?string $currencyId = null;
    
    /** @var Customer|null $customer  */
    private ?Customer $customer = null;
    
    /** @var string|null $customerId  */
    private ?string $customerId = null;
    
    /** @var string|null $customerName  */
    private ?string $customerName = null;
    
    /** @var string|null $customerNumber  */
    private ?string $customerNumber = null;
    
    /** @var float|null $discountAmount  */
    private ?float $discountAmount = null;
    
    /** @var Date|null $documentDate  */
    private ?Date $documentDate = null;
    
    /** @var Date|null $dueDate  */
    private ?Date $dueDate = null;
    
    /** @var string|null $email  */
    private ?string $email = null;
    
    /** @var string|null $externalDocumentNumber  */
    private ?string $externalDocumentNumber = null;
    
    /** @var DateTime|null $lastModifiedDateTime  */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var string|null $number  */
    private ?string $number = null;
    
    /** @var PaymentTerm|null $paymentTerm  */
    private ?PaymentTerm $paymentTerm = null;
    
    /** @var string|null $paymentTermsId  */
    private ?string $paymentTermsId = null;
    
    /** @var string|null $phoneNumber  */
    private ?string $phoneNumber = null;
    
    /** @var string|null $salesperson  */
    private ?string $salesperson = null;
    
    /** @var array<SalesQuoteLine>|null $salesQuoteLines  */
    private ?array $salesQuoteLines = null;
    
    /** @var PostalAddressType|null $sellingPostalAddress  */
    private ?PostalAddressType $sellingPostalAddress = null;
    
    /** @var DateTime|null $sentDate  */
    private ?DateTime $sentDate = null;
    
    /** @var ShipmentMethod|null $shipmentMethod  */
    private ?ShipmentMethod $shipmentMethod = null;
    
    /** @var string|null $shipmentMethodId  */
    private ?string $shipmentMethodId = null;
    
    /** @var PostalAddressType|null $shippingPostalAddress  */
    private ?PostalAddressType $shippingPostalAddress = null;
    
    /** @var string|null $shipToContact  */
    private ?string $shipToContact = null;
    
    /** @var string|null $shipToName  */
    private ?string $shipToName = null;
    
    /** @var string|null $status  */
    private ?string $status = null;
    
    /** @var float|null $totalAmountExcludingTax  */
    private ?float $totalAmountExcludingTax = null;
    
    /** @var float|null $totalAmountIncludingTax  */
    private ?float $totalAmountIncludingTax = null;
    
    /** @var float|null $totalTaxAmount  */
    private ?float $totalTaxAmount = null;
    
    /** @var Date|null $validUntilDate  */
    private ?Date $validUntilDate = null;
    
    /**
     * Instantiates a new salesQuote and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SalesQuote
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SalesQuote {
        return new SalesQuote();
    }

    /**
     * Gets the acceptedDate property value. 
     * @return Date|null
    */
    public function getAcceptedDate(): ?Date {
        return $this->acceptedDate;
    }

    /**
     * Gets the billingPostalAddress property value. 
     * @return PostalAddressType|null
    */
    public function getBillingPostalAddress(): ?PostalAddressType {
        return $this->billingPostalAddress;
    }

    /**
     * Gets the billToCustomerId property value. 
     * @return string|null
    */
    public function getBillToCustomerId(): ?string {
        return $this->billToCustomerId;
    }

    /**
     * Gets the billToCustomerNumber property value. 
     * @return string|null
    */
    public function getBillToCustomerNumber(): ?string {
        return $this->billToCustomerNumber;
    }

    /**
     * Gets the billToName property value. 
     * @return string|null
    */
    public function getBillToName(): ?string {
        return $this->billToName;
    }

    /**
     * Gets the currency property value. 
     * @return Currency|null
    */
    public function getCurrency(): ?Currency {
        return $this->currency;
    }

    /**
     * Gets the currencyCode property value. 
     * @return string|null
    */
    public function getCurrencyCode(): ?string {
        return $this->currencyCode;
    }

    /**
     * Gets the currencyId property value. 
     * @return string|null
    */
    public function getCurrencyId(): ?string {
        return $this->currencyId;
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
     * Gets the customerName property value. 
     * @return string|null
    */
    public function getCustomerName(): ?string {
        return $this->customerName;
    }

    /**
     * Gets the customerNumber property value. 
     * @return string|null
    */
    public function getCustomerNumber(): ?string {
        return $this->customerNumber;
    }

    /**
     * Gets the discountAmount property value. 
     * @return float|null
    */
    public function getDiscountAmount(): ?float {
        return $this->discountAmount;
    }

    /**
     * Gets the documentDate property value. 
     * @return Date|null
    */
    public function getDocumentDate(): ?Date {
        return $this->documentDate;
    }

    /**
     * Gets the dueDate property value. 
     * @return Date|null
    */
    public function getDueDate(): ?Date {
        return $this->dueDate;
    }

    /**
     * Gets the email property value. 
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
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
            'acceptedDate' => function (self $o, ParseNode $n) { $o->setAcceptedDate($n->getDateValue()); },
            'billingPostalAddress' => function (self $o, ParseNode $n) { $o->setBillingPostalAddress($n->getObjectValue(PostalAddressType::class)); },
            'billToCustomerId' => function (self $o, ParseNode $n) { $o->setBillToCustomerId($n->getStringValue()); },
            'billToCustomerNumber' => function (self $o, ParseNode $n) { $o->setBillToCustomerNumber($n->getStringValue()); },
            'billToName' => function (self $o, ParseNode $n) { $o->setBillToName($n->getStringValue()); },
            'currency' => function (self $o, ParseNode $n) { $o->setCurrency($n->getObjectValue(Currency::class)); },
            'currencyCode' => function (self $o, ParseNode $n) { $o->setCurrencyCode($n->getStringValue()); },
            'currencyId' => function (self $o, ParseNode $n) { $o->setCurrencyId($n->getStringValue()); },
            'customer' => function (self $o, ParseNode $n) { $o->setCustomer($n->getObjectValue(Customer::class)); },
            'customerId' => function (self $o, ParseNode $n) { $o->setCustomerId($n->getStringValue()); },
            'customerName' => function (self $o, ParseNode $n) { $o->setCustomerName($n->getStringValue()); },
            'customerNumber' => function (self $o, ParseNode $n) { $o->setCustomerNumber($n->getStringValue()); },
            'discountAmount' => function (self $o, ParseNode $n) { $o->setDiscountAmount($n->getFloatValue()); },
            'documentDate' => function (self $o, ParseNode $n) { $o->setDocumentDate($n->getDateValue()); },
            'dueDate' => function (self $o, ParseNode $n) { $o->setDueDate($n->getDateValue()); },
            'email' => function (self $o, ParseNode $n) { $o->setEmail($n->getStringValue()); },
            'externalDocumentNumber' => function (self $o, ParseNode $n) { $o->setExternalDocumentNumber($n->getStringValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'number' => function (self $o, ParseNode $n) { $o->setNumber($n->getStringValue()); },
            'paymentTerm' => function (self $o, ParseNode $n) { $o->setPaymentTerm($n->getObjectValue(PaymentTerm::class)); },
            'paymentTermsId' => function (self $o, ParseNode $n) { $o->setPaymentTermsId($n->getStringValue()); },
            'phoneNumber' => function (self $o, ParseNode $n) { $o->setPhoneNumber($n->getStringValue()); },
            'salesperson' => function (self $o, ParseNode $n) { $o->setSalesperson($n->getStringValue()); },
            'salesQuoteLines' => function (self $o, ParseNode $n) { $o->setSalesQuoteLines($n->getCollectionOfObjectValues(SalesQuoteLine::class)); },
            'sellingPostalAddress' => function (self $o, ParseNode $n) { $o->setSellingPostalAddress($n->getObjectValue(PostalAddressType::class)); },
            'sentDate' => function (self $o, ParseNode $n) { $o->setSentDate($n->getDateTimeValue()); },
            'shipmentMethod' => function (self $o, ParseNode $n) { $o->setShipmentMethod($n->getObjectValue(ShipmentMethod::class)); },
            'shipmentMethodId' => function (self $o, ParseNode $n) { $o->setShipmentMethodId($n->getStringValue()); },
            'shippingPostalAddress' => function (self $o, ParseNode $n) { $o->setShippingPostalAddress($n->getObjectValue(PostalAddressType::class)); },
            'shipToContact' => function (self $o, ParseNode $n) { $o->setShipToContact($n->getStringValue()); },
            'shipToName' => function (self $o, ParseNode $n) { $o->setShipToName($n->getStringValue()); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getStringValue()); },
            'totalAmountExcludingTax' => function (self $o, ParseNode $n) { $o->setTotalAmountExcludingTax($n->getFloatValue()); },
            'totalAmountIncludingTax' => function (self $o, ParseNode $n) { $o->setTotalAmountIncludingTax($n->getFloatValue()); },
            'totalTaxAmount' => function (self $o, ParseNode $n) { $o->setTotalTaxAmount($n->getFloatValue()); },
            'validUntilDate' => function (self $o, ParseNode $n) { $o->setValidUntilDate($n->getDateValue()); },
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
     * Gets the number property value. 
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Gets the paymentTerm property value. 
     * @return PaymentTerm|null
    */
    public function getPaymentTerm(): ?PaymentTerm {
        return $this->paymentTerm;
    }

    /**
     * Gets the paymentTermsId property value. 
     * @return string|null
    */
    public function getPaymentTermsId(): ?string {
        return $this->paymentTermsId;
    }

    /**
     * Gets the phoneNumber property value. 
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Gets the salesperson property value. 
     * @return string|null
    */
    public function getSalesperson(): ?string {
        return $this->salesperson;
    }

    /**
     * Gets the salesQuoteLines property value. 
     * @return array<SalesQuoteLine>|null
    */
    public function getSalesQuoteLines(): ?array {
        return $this->salesQuoteLines;
    }

    /**
     * Gets the sellingPostalAddress property value. 
     * @return PostalAddressType|null
    */
    public function getSellingPostalAddress(): ?PostalAddressType {
        return $this->sellingPostalAddress;
    }

    /**
     * Gets the sentDate property value. 
     * @return DateTime|null
    */
    public function getSentDate(): ?DateTime {
        return $this->sentDate;
    }

    /**
     * Gets the shipmentMethod property value. 
     * @return ShipmentMethod|null
    */
    public function getShipmentMethod(): ?ShipmentMethod {
        return $this->shipmentMethod;
    }

    /**
     * Gets the shipmentMethodId property value. 
     * @return string|null
    */
    public function getShipmentMethodId(): ?string {
        return $this->shipmentMethodId;
    }

    /**
     * Gets the shippingPostalAddress property value. 
     * @return PostalAddressType|null
    */
    public function getShippingPostalAddress(): ?PostalAddressType {
        return $this->shippingPostalAddress;
    }

    /**
     * Gets the shipToContact property value. 
     * @return string|null
    */
    public function getShipToContact(): ?string {
        return $this->shipToContact;
    }

    /**
     * Gets the shipToName property value. 
     * @return string|null
    */
    public function getShipToName(): ?string {
        return $this->shipToName;
    }

    /**
     * Gets the status property value. 
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the totalAmountExcludingTax property value. 
     * @return float|null
    */
    public function getTotalAmountExcludingTax(): ?float {
        return $this->totalAmountExcludingTax;
    }

    /**
     * Gets the totalAmountIncludingTax property value. 
     * @return float|null
    */
    public function getTotalAmountIncludingTax(): ?float {
        return $this->totalAmountIncludingTax;
    }

    /**
     * Gets the totalTaxAmount property value. 
     * @return float|null
    */
    public function getTotalTaxAmount(): ?float {
        return $this->totalTaxAmount;
    }

    /**
     * Gets the validUntilDate property value. 
     * @return Date|null
    */
    public function getValidUntilDate(): ?Date {
        return $this->validUntilDate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateValue('acceptedDate', $this->acceptedDate);
        $writer->writeObjectValue('billingPostalAddress', $this->billingPostalAddress);
        $writer->writeStringValue('billToCustomerId', $this->billToCustomerId);
        $writer->writeStringValue('billToCustomerNumber', $this->billToCustomerNumber);
        $writer->writeStringValue('billToName', $this->billToName);
        $writer->writeObjectValue('currency', $this->currency);
        $writer->writeStringValue('currencyCode', $this->currencyCode);
        $writer->writeStringValue('currencyId', $this->currencyId);
        $writer->writeObjectValue('customer', $this->customer);
        $writer->writeStringValue('customerId', $this->customerId);
        $writer->writeStringValue('customerName', $this->customerName);
        $writer->writeStringValue('customerNumber', $this->customerNumber);
        $writer->writeFloatValue('discountAmount', $this->discountAmount);
        $writer->writeDateValue('documentDate', $this->documentDate);
        $writer->writeDateValue('dueDate', $this->dueDate);
        $writer->writeStringValue('email', $this->email);
        $writer->writeStringValue('externalDocumentNumber', $this->externalDocumentNumber);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('number', $this->number);
        $writer->writeObjectValue('paymentTerm', $this->paymentTerm);
        $writer->writeStringValue('paymentTermsId', $this->paymentTermsId);
        $writer->writeStringValue('phoneNumber', $this->phoneNumber);
        $writer->writeStringValue('salesperson', $this->salesperson);
        $writer->writeCollectionOfObjectValues('salesQuoteLines', $this->salesQuoteLines);
        $writer->writeObjectValue('sellingPostalAddress', $this->sellingPostalAddress);
        $writer->writeDateTimeValue('sentDate', $this->sentDate);
        $writer->writeObjectValue('shipmentMethod', $this->shipmentMethod);
        $writer->writeStringValue('shipmentMethodId', $this->shipmentMethodId);
        $writer->writeObjectValue('shippingPostalAddress', $this->shippingPostalAddress);
        $writer->writeStringValue('shipToContact', $this->shipToContact);
        $writer->writeStringValue('shipToName', $this->shipToName);
        $writer->writeStringValue('status', $this->status);
        $writer->writeFloatValue('totalAmountExcludingTax', $this->totalAmountExcludingTax);
        $writer->writeFloatValue('totalAmountIncludingTax', $this->totalAmountIncludingTax);
        $writer->writeFloatValue('totalTaxAmount', $this->totalTaxAmount);
        $writer->writeDateValue('validUntilDate', $this->validUntilDate);
    }

    /**
     * Sets the acceptedDate property value. 
     *  @param Date|null $value Value to set for the acceptedDate property.
    */
    public function setAcceptedDate(?Date $value ): void {
        $this->acceptedDate = $value;
    }

    /**
     * Sets the billingPostalAddress property value. 
     *  @param PostalAddressType|null $value Value to set for the billingPostalAddress property.
    */
    public function setBillingPostalAddress(?PostalAddressType $value ): void {
        $this->billingPostalAddress = $value;
    }

    /**
     * Sets the billToCustomerId property value. 
     *  @param string|null $value Value to set for the billToCustomerId property.
    */
    public function setBillToCustomerId(?string $value ): void {
        $this->billToCustomerId = $value;
    }

    /**
     * Sets the billToCustomerNumber property value. 
     *  @param string|null $value Value to set for the billToCustomerNumber property.
    */
    public function setBillToCustomerNumber(?string $value ): void {
        $this->billToCustomerNumber = $value;
    }

    /**
     * Sets the billToName property value. 
     *  @param string|null $value Value to set for the billToName property.
    */
    public function setBillToName(?string $value ): void {
        $this->billToName = $value;
    }

    /**
     * Sets the currency property value. 
     *  @param Currency|null $value Value to set for the currency property.
    */
    public function setCurrency(?Currency $value ): void {
        $this->currency = $value;
    }

    /**
     * Sets the currencyCode property value. 
     *  @param string|null $value Value to set for the currencyCode property.
    */
    public function setCurrencyCode(?string $value ): void {
        $this->currencyCode = $value;
    }

    /**
     * Sets the currencyId property value. 
     *  @param string|null $value Value to set for the currencyId property.
    */
    public function setCurrencyId(?string $value ): void {
        $this->currencyId = $value;
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
     * Sets the customerName property value. 
     *  @param string|null $value Value to set for the customerName property.
    */
    public function setCustomerName(?string $value ): void {
        $this->customerName = $value;
    }

    /**
     * Sets the customerNumber property value. 
     *  @param string|null $value Value to set for the customerNumber property.
    */
    public function setCustomerNumber(?string $value ): void {
        $this->customerNumber = $value;
    }

    /**
     * Sets the discountAmount property value. 
     *  @param float|null $value Value to set for the discountAmount property.
    */
    public function setDiscountAmount(?float $value ): void {
        $this->discountAmount = $value;
    }

    /**
     * Sets the documentDate property value. 
     *  @param Date|null $value Value to set for the documentDate property.
    */
    public function setDocumentDate(?Date $value ): void {
        $this->documentDate = $value;
    }

    /**
     * Sets the dueDate property value. 
     *  @param Date|null $value Value to set for the dueDate property.
    */
    public function setDueDate(?Date $value ): void {
        $this->dueDate = $value;
    }

    /**
     * Sets the email property value. 
     *  @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value ): void {
        $this->email = $value;
    }

    /**
     * Sets the externalDocumentNumber property value. 
     *  @param string|null $value Value to set for the externalDocumentNumber property.
    */
    public function setExternalDocumentNumber(?string $value ): void {
        $this->externalDocumentNumber = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the number property value. 
     *  @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value ): void {
        $this->number = $value;
    }

    /**
     * Sets the paymentTerm property value. 
     *  @param PaymentTerm|null $value Value to set for the paymentTerm property.
    */
    public function setPaymentTerm(?PaymentTerm $value ): void {
        $this->paymentTerm = $value;
    }

    /**
     * Sets the paymentTermsId property value. 
     *  @param string|null $value Value to set for the paymentTermsId property.
    */
    public function setPaymentTermsId(?string $value ): void {
        $this->paymentTermsId = $value;
    }

    /**
     * Sets the phoneNumber property value. 
     *  @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value ): void {
        $this->phoneNumber = $value;
    }

    /**
     * Sets the salesperson property value. 
     *  @param string|null $value Value to set for the salesperson property.
    */
    public function setSalesperson(?string $value ): void {
        $this->salesperson = $value;
    }

    /**
     * Sets the salesQuoteLines property value. 
     *  @param array<SalesQuoteLine>|null $value Value to set for the salesQuoteLines property.
    */
    public function setSalesQuoteLines(?array $value ): void {
        $this->salesQuoteLines = $value;
    }

    /**
     * Sets the sellingPostalAddress property value. 
     *  @param PostalAddressType|null $value Value to set for the sellingPostalAddress property.
    */
    public function setSellingPostalAddress(?PostalAddressType $value ): void {
        $this->sellingPostalAddress = $value;
    }

    /**
     * Sets the sentDate property value. 
     *  @param DateTime|null $value Value to set for the sentDate property.
    */
    public function setSentDate(?DateTime $value ): void {
        $this->sentDate = $value;
    }

    /**
     * Sets the shipmentMethod property value. 
     *  @param ShipmentMethod|null $value Value to set for the shipmentMethod property.
    */
    public function setShipmentMethod(?ShipmentMethod $value ): void {
        $this->shipmentMethod = $value;
    }

    /**
     * Sets the shipmentMethodId property value. 
     *  @param string|null $value Value to set for the shipmentMethodId property.
    */
    public function setShipmentMethodId(?string $value ): void {
        $this->shipmentMethodId = $value;
    }

    /**
     * Sets the shippingPostalAddress property value. 
     *  @param PostalAddressType|null $value Value to set for the shippingPostalAddress property.
    */
    public function setShippingPostalAddress(?PostalAddressType $value ): void {
        $this->shippingPostalAddress = $value;
    }

    /**
     * Sets the shipToContact property value. 
     *  @param string|null $value Value to set for the shipToContact property.
    */
    public function setShipToContact(?string $value ): void {
        $this->shipToContact = $value;
    }

    /**
     * Sets the shipToName property value. 
     *  @param string|null $value Value to set for the shipToName property.
    */
    public function setShipToName(?string $value ): void {
        $this->shipToName = $value;
    }

    /**
     * Sets the status property value. 
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the totalAmountExcludingTax property value. 
     *  @param float|null $value Value to set for the totalAmountExcludingTax property.
    */
    public function setTotalAmountExcludingTax(?float $value ): void {
        $this->totalAmountExcludingTax = $value;
    }

    /**
     * Sets the totalAmountIncludingTax property value. 
     *  @param float|null $value Value to set for the totalAmountIncludingTax property.
    */
    public function setTotalAmountIncludingTax(?float $value ): void {
        $this->totalAmountIncludingTax = $value;
    }

    /**
     * Sets the totalTaxAmount property value. 
     *  @param float|null $value Value to set for the totalTaxAmount property.
    */
    public function setTotalTaxAmount(?float $value ): void {
        $this->totalTaxAmount = $value;
    }

    /**
     * Sets the validUntilDate property value. 
     *  @param Date|null $value Value to set for the validUntilDate property.
    */
    public function setValidUntilDate(?Date $value ): void {
        $this->validUntilDate = $value;
    }

}
