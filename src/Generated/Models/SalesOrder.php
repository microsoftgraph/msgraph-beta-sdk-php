<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class SalesOrder extends Entity implements Parsable 
{
    /**
     * @var PostalAddressType|null $billingPostalAddress The billingPostalAddress property
    */
    private ?PostalAddressType $billingPostalAddress = null;
    
    /**
     * @var string|null $billToCustomerId The billToCustomerId property
    */
    private ?string $billToCustomerId = null;
    
    /**
     * @var string|null $billToCustomerNumber The billToCustomerNumber property
    */
    private ?string $billToCustomerNumber = null;
    
    /**
     * @var string|null $billToName The billToName property
    */
    private ?string $billToName = null;
    
    /**
     * @var Currency|null $currency The currency property
    */
    private ?Currency $currency = null;
    
    /**
     * @var string|null $currencyCode The currencyCode property
    */
    private ?string $currencyCode = null;
    
    /**
     * @var string|null $currencyId The currencyId property
    */
    private ?string $currencyId = null;
    
    /**
     * @var Customer|null $customer The customer property
    */
    private ?Customer $customer = null;
    
    /**
     * @var string|null $customerId The customerId property
    */
    private ?string $customerId = null;
    
    /**
     * @var string|null $customerName The customerName property
    */
    private ?string $customerName = null;
    
    /**
     * @var string|null $customerNumber The customerNumber property
    */
    private ?string $customerNumber = null;
    
    /**
     * @var string|null $discountAmount The discountAmount property
    */
    private ?string $discountAmount = null;
    
    /**
     * @var bool|null $discountAppliedBeforeTax The discountAppliedBeforeTax property
    */
    private ?bool $discountAppliedBeforeTax = null;
    
    /**
     * @var string|null $email The email property
    */
    private ?string $email = null;
    
    /**
     * @var string|null $externalDocumentNumber The externalDocumentNumber property
    */
    private ?string $externalDocumentNumber = null;
    
    /**
     * @var bool|null $fullyShipped The fullyShipped property
    */
    private ?bool $fullyShipped = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $number The number property
    */
    private ?string $number = null;
    
    /**
     * @var Date|null $orderDate The orderDate property
    */
    private ?Date $orderDate = null;
    
    /**
     * @var bool|null $partialShipping The partialShipping property
    */
    private ?bool $partialShipping = null;
    
    /**
     * @var PaymentTerm|null $paymentTerm The paymentTerm property
    */
    private ?PaymentTerm $paymentTerm = null;
    
    /**
     * @var string|null $paymentTermsId The paymentTermsId property
    */
    private ?string $paymentTermsId = null;
    
    /**
     * @var string|null $phoneNumber The phoneNumber property
    */
    private ?string $phoneNumber = null;
    
    /**
     * @var bool|null $pricesIncludeTax The pricesIncludeTax property
    */
    private ?bool $pricesIncludeTax = null;
    
    /**
     * @var Date|null $requestedDeliveryDate The requestedDeliveryDate property
    */
    private ?Date $requestedDeliveryDate = null;
    
    /**
     * @var array<SalesOrderLine>|null $salesOrderLines The salesOrderLines property
    */
    private ?array $salesOrderLines = null;
    
    /**
     * @var string|null $salesperson The salesperson property
    */
    private ?string $salesperson = null;
    
    /**
     * @var PostalAddressType|null $sellingPostalAddress The sellingPostalAddress property
    */
    private ?PostalAddressType $sellingPostalAddress = null;
    
    /**
     * @var PostalAddressType|null $shippingPostalAddress The shippingPostalAddress property
    */
    private ?PostalAddressType $shippingPostalAddress = null;
    
    /**
     * @var string|null $shipToContact The shipToContact property
    */
    private ?string $shipToContact = null;
    
    /**
     * @var string|null $shipToName The shipToName property
    */
    private ?string $shipToName = null;
    
    /**
     * @var string|null $status The status property
    */
    private ?string $status = null;
    
    /**
     * @var string|null $totalAmountExcludingTax The totalAmountExcludingTax property
    */
    private ?string $totalAmountExcludingTax = null;
    
    /**
     * @var string|null $totalAmountIncludingTax The totalAmountIncludingTax property
    */
    private ?string $totalAmountIncludingTax = null;
    
    /**
     * @var string|null $totalTaxAmount The totalTaxAmount property
    */
    private ?string $totalTaxAmount = null;
    
    /**
     * Instantiates a new salesOrder and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.salesOrder');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SalesOrder
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SalesOrder {
        return new SalesOrder();
    }

    /**
     * Gets the billingPostalAddress property value. The billingPostalAddress property
     * @return PostalAddressType|null
    */
    public function getBillingPostalAddress(): ?PostalAddressType {
        return $this->billingPostalAddress;
    }

    /**
     * Gets the billToCustomerId property value. The billToCustomerId property
     * @return string|null
    */
    public function getBillToCustomerId(): ?string {
        return $this->billToCustomerId;
    }

    /**
     * Gets the billToCustomerNumber property value. The billToCustomerNumber property
     * @return string|null
    */
    public function getBillToCustomerNumber(): ?string {
        return $this->billToCustomerNumber;
    }

    /**
     * Gets the billToName property value. The billToName property
     * @return string|null
    */
    public function getBillToName(): ?string {
        return $this->billToName;
    }

    /**
     * Gets the currency property value. The currency property
     * @return Currency|null
    */
    public function getCurrency(): ?Currency {
        return $this->currency;
    }

    /**
     * Gets the currencyCode property value. The currencyCode property
     * @return string|null
    */
    public function getCurrencyCode(): ?string {
        return $this->currencyCode;
    }

    /**
     * Gets the currencyId property value. The currencyId property
     * @return string|null
    */
    public function getCurrencyId(): ?string {
        return $this->currencyId;
    }

    /**
     * Gets the customer property value. The customer property
     * @return Customer|null
    */
    public function getCustomer(): ?Customer {
        return $this->customer;
    }

    /**
     * Gets the customerId property value. The customerId property
     * @return string|null
    */
    public function getCustomerId(): ?string {
        return $this->customerId;
    }

    /**
     * Gets the customerName property value. The customerName property
     * @return string|null
    */
    public function getCustomerName(): ?string {
        return $this->customerName;
    }

    /**
     * Gets the customerNumber property value. The customerNumber property
     * @return string|null
    */
    public function getCustomerNumber(): ?string {
        return $this->customerNumber;
    }

    /**
     * Gets the discountAmount property value. The discountAmount property
     * @return string|null
    */
    public function getDiscountAmount(): ?string {
        return $this->discountAmount;
    }

    /**
     * Gets the discountAppliedBeforeTax property value. The discountAppliedBeforeTax property
     * @return bool|null
    */
    public function getDiscountAppliedBeforeTax(): ?bool {
        return $this->discountAppliedBeforeTax;
    }

    /**
     * Gets the email property value. The email property
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
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
            'billingPostalAddress' => fn(ParseNode $n) => $o->setBillingPostalAddress($n->getObjectValue([PostalAddressType::class, 'createFromDiscriminatorValue'])),
            'billToCustomerId' => fn(ParseNode $n) => $o->setBillToCustomerId($n->getStringValue()),
            'billToCustomerNumber' => fn(ParseNode $n) => $o->setBillToCustomerNumber($n->getStringValue()),
            'billToName' => fn(ParseNode $n) => $o->setBillToName($n->getStringValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getObjectValue([Currency::class, 'createFromDiscriminatorValue'])),
            'currencyCode' => fn(ParseNode $n) => $o->setCurrencyCode($n->getStringValue()),
            'currencyId' => fn(ParseNode $n) => $o->setCurrencyId($n->getStringValue()),
            'customer' => fn(ParseNode $n) => $o->setCustomer($n->getObjectValue([Customer::class, 'createFromDiscriminatorValue'])),
            'customerId' => fn(ParseNode $n) => $o->setCustomerId($n->getStringValue()),
            'customerName' => fn(ParseNode $n) => $o->setCustomerName($n->getStringValue()),
            'customerNumber' => fn(ParseNode $n) => $o->setCustomerNumber($n->getStringValue()),
            'discountAmount' => fn(ParseNode $n) => $o->setDiscountAmount($n->getStringValue()),
            'discountAppliedBeforeTax' => fn(ParseNode $n) => $o->setDiscountAppliedBeforeTax($n->getBooleanValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'externalDocumentNumber' => fn(ParseNode $n) => $o->setExternalDocumentNumber($n->getStringValue()),
            'fullyShipped' => fn(ParseNode $n) => $o->setFullyShipped($n->getBooleanValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            'orderDate' => fn(ParseNode $n) => $o->setOrderDate($n->getDateValue()),
            'partialShipping' => fn(ParseNode $n) => $o->setPartialShipping($n->getBooleanValue()),
            'paymentTerm' => fn(ParseNode $n) => $o->setPaymentTerm($n->getObjectValue([PaymentTerm::class, 'createFromDiscriminatorValue'])),
            'paymentTermsId' => fn(ParseNode $n) => $o->setPaymentTermsId($n->getStringValue()),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'pricesIncludeTax' => fn(ParseNode $n) => $o->setPricesIncludeTax($n->getBooleanValue()),
            'requestedDeliveryDate' => fn(ParseNode $n) => $o->setRequestedDeliveryDate($n->getDateValue()),
            'salesOrderLines' => fn(ParseNode $n) => $o->setSalesOrderLines($n->getCollectionOfObjectValues([SalesOrderLine::class, 'createFromDiscriminatorValue'])),
            'salesperson' => fn(ParseNode $n) => $o->setSalesperson($n->getStringValue()),
            'sellingPostalAddress' => fn(ParseNode $n) => $o->setSellingPostalAddress($n->getObjectValue([PostalAddressType::class, 'createFromDiscriminatorValue'])),
            'shippingPostalAddress' => fn(ParseNode $n) => $o->setShippingPostalAddress($n->getObjectValue([PostalAddressType::class, 'createFromDiscriminatorValue'])),
            'shipToContact' => fn(ParseNode $n) => $o->setShipToContact($n->getStringValue()),
            'shipToName' => fn(ParseNode $n) => $o->setShipToName($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'totalAmountExcludingTax' => fn(ParseNode $n) => $o->setTotalAmountExcludingTax($n->getStringValue()),
            'totalAmountIncludingTax' => fn(ParseNode $n) => $o->setTotalAmountIncludingTax($n->getStringValue()),
            'totalTaxAmount' => fn(ParseNode $n) => $o->setTotalTaxAmount($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fullyShipped property value. The fullyShipped property
     * @return bool|null
    */
    public function getFullyShipped(): ?bool {
        return $this->fullyShipped;
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the number property value. The number property
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Gets the orderDate property value. The orderDate property
     * @return Date|null
    */
    public function getOrderDate(): ?Date {
        return $this->orderDate;
    }

    /**
     * Gets the partialShipping property value. The partialShipping property
     * @return bool|null
    */
    public function getPartialShipping(): ?bool {
        return $this->partialShipping;
    }

    /**
     * Gets the paymentTerm property value. The paymentTerm property
     * @return PaymentTerm|null
    */
    public function getPaymentTerm(): ?PaymentTerm {
        return $this->paymentTerm;
    }

    /**
     * Gets the paymentTermsId property value. The paymentTermsId property
     * @return string|null
    */
    public function getPaymentTermsId(): ?string {
        return $this->paymentTermsId;
    }

    /**
     * Gets the phoneNumber property value. The phoneNumber property
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Gets the pricesIncludeTax property value. The pricesIncludeTax property
     * @return bool|null
    */
    public function getPricesIncludeTax(): ?bool {
        return $this->pricesIncludeTax;
    }

    /**
     * Gets the requestedDeliveryDate property value. The requestedDeliveryDate property
     * @return Date|null
    */
    public function getRequestedDeliveryDate(): ?Date {
        return $this->requestedDeliveryDate;
    }

    /**
     * Gets the salesOrderLines property value. The salesOrderLines property
     * @return array<SalesOrderLine>|null
    */
    public function getSalesOrderLines(): ?array {
        return $this->salesOrderLines;
    }

    /**
     * Gets the salesperson property value. The salesperson property
     * @return string|null
    */
    public function getSalesperson(): ?string {
        return $this->salesperson;
    }

    /**
     * Gets the sellingPostalAddress property value. The sellingPostalAddress property
     * @return PostalAddressType|null
    */
    public function getSellingPostalAddress(): ?PostalAddressType {
        return $this->sellingPostalAddress;
    }

    /**
     * Gets the shippingPostalAddress property value. The shippingPostalAddress property
     * @return PostalAddressType|null
    */
    public function getShippingPostalAddress(): ?PostalAddressType {
        return $this->shippingPostalAddress;
    }

    /**
     * Gets the shipToContact property value. The shipToContact property
     * @return string|null
    */
    public function getShipToContact(): ?string {
        return $this->shipToContact;
    }

    /**
     * Gets the shipToName property value. The shipToName property
     * @return string|null
    */
    public function getShipToName(): ?string {
        return $this->shipToName;
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the totalAmountExcludingTax property value. The totalAmountExcludingTax property
     * @return string|null
    */
    public function getTotalAmountExcludingTax(): ?string {
        return $this->totalAmountExcludingTax;
    }

    /**
     * Gets the totalAmountIncludingTax property value. The totalAmountIncludingTax property
     * @return string|null
    */
    public function getTotalAmountIncludingTax(): ?string {
        return $this->totalAmountIncludingTax;
    }

    /**
     * Gets the totalTaxAmount property value. The totalTaxAmount property
     * @return string|null
    */
    public function getTotalTaxAmount(): ?string {
        return $this->totalTaxAmount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
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
        $writer->writeStringValue('discountAmount', $this->discountAmount);
        $writer->writeBooleanValue('discountAppliedBeforeTax', $this->discountAppliedBeforeTax);
        $writer->writeStringValue('email', $this->email);
        $writer->writeStringValue('externalDocumentNumber', $this->externalDocumentNumber);
        $writer->writeBooleanValue('fullyShipped', $this->fullyShipped);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('number', $this->number);
        $writer->writeDateValue('orderDate', $this->orderDate);
        $writer->writeBooleanValue('partialShipping', $this->partialShipping);
        $writer->writeObjectValue('paymentTerm', $this->paymentTerm);
        $writer->writeStringValue('paymentTermsId', $this->paymentTermsId);
        $writer->writeStringValue('phoneNumber', $this->phoneNumber);
        $writer->writeBooleanValue('pricesIncludeTax', $this->pricesIncludeTax);
        $writer->writeDateValue('requestedDeliveryDate', $this->requestedDeliveryDate);
        $writer->writeCollectionOfObjectValues('salesOrderLines', $this->salesOrderLines);
        $writer->writeStringValue('salesperson', $this->salesperson);
        $writer->writeObjectValue('sellingPostalAddress', $this->sellingPostalAddress);
        $writer->writeObjectValue('shippingPostalAddress', $this->shippingPostalAddress);
        $writer->writeStringValue('shipToContact', $this->shipToContact);
        $writer->writeStringValue('shipToName', $this->shipToName);
        $writer->writeStringValue('status', $this->status);
        $writer->writeStringValue('totalAmountExcludingTax', $this->totalAmountExcludingTax);
        $writer->writeStringValue('totalAmountIncludingTax', $this->totalAmountIncludingTax);
        $writer->writeStringValue('totalTaxAmount', $this->totalTaxAmount);
    }

    /**
     * Sets the billingPostalAddress property value. The billingPostalAddress property
     *  @param PostalAddressType|null $value Value to set for the billingPostalAddress property.
    */
    public function setBillingPostalAddress(?PostalAddressType $value ): void {
        $this->billingPostalAddress = $value;
    }

    /**
     * Sets the billToCustomerId property value. The billToCustomerId property
     *  @param string|null $value Value to set for the billToCustomerId property.
    */
    public function setBillToCustomerId(?string $value ): void {
        $this->billToCustomerId = $value;
    }

    /**
     * Sets the billToCustomerNumber property value. The billToCustomerNumber property
     *  @param string|null $value Value to set for the billToCustomerNumber property.
    */
    public function setBillToCustomerNumber(?string $value ): void {
        $this->billToCustomerNumber = $value;
    }

    /**
     * Sets the billToName property value. The billToName property
     *  @param string|null $value Value to set for the billToName property.
    */
    public function setBillToName(?string $value ): void {
        $this->billToName = $value;
    }

    /**
     * Sets the currency property value. The currency property
     *  @param Currency|null $value Value to set for the currency property.
    */
    public function setCurrency(?Currency $value ): void {
        $this->currency = $value;
    }

    /**
     * Sets the currencyCode property value. The currencyCode property
     *  @param string|null $value Value to set for the currencyCode property.
    */
    public function setCurrencyCode(?string $value ): void {
        $this->currencyCode = $value;
    }

    /**
     * Sets the currencyId property value. The currencyId property
     *  @param string|null $value Value to set for the currencyId property.
    */
    public function setCurrencyId(?string $value ): void {
        $this->currencyId = $value;
    }

    /**
     * Sets the customer property value. The customer property
     *  @param Customer|null $value Value to set for the customer property.
    */
    public function setCustomer(?Customer $value ): void {
        $this->customer = $value;
    }

    /**
     * Sets the customerId property value. The customerId property
     *  @param string|null $value Value to set for the customerId property.
    */
    public function setCustomerId(?string $value ): void {
        $this->customerId = $value;
    }

    /**
     * Sets the customerName property value. The customerName property
     *  @param string|null $value Value to set for the customerName property.
    */
    public function setCustomerName(?string $value ): void {
        $this->customerName = $value;
    }

    /**
     * Sets the customerNumber property value. The customerNumber property
     *  @param string|null $value Value to set for the customerNumber property.
    */
    public function setCustomerNumber(?string $value ): void {
        $this->customerNumber = $value;
    }

    /**
     * Sets the discountAmount property value. The discountAmount property
     *  @param string|null $value Value to set for the discountAmount property.
    */
    public function setDiscountAmount(?string $value ): void {
        $this->discountAmount = $value;
    }

    /**
     * Sets the discountAppliedBeforeTax property value. The discountAppliedBeforeTax property
     *  @param bool|null $value Value to set for the discountAppliedBeforeTax property.
    */
    public function setDiscountAppliedBeforeTax(?bool $value ): void {
        $this->discountAppliedBeforeTax = $value;
    }

    /**
     * Sets the email property value. The email property
     *  @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value ): void {
        $this->email = $value;
    }

    /**
     * Sets the externalDocumentNumber property value. The externalDocumentNumber property
     *  @param string|null $value Value to set for the externalDocumentNumber property.
    */
    public function setExternalDocumentNumber(?string $value ): void {
        $this->externalDocumentNumber = $value;
    }

    /**
     * Sets the fullyShipped property value. The fullyShipped property
     *  @param bool|null $value Value to set for the fullyShipped property.
    */
    public function setFullyShipped(?bool $value ): void {
        $this->fullyShipped = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the number property value. The number property
     *  @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value ): void {
        $this->number = $value;
    }

    /**
     * Sets the orderDate property value. The orderDate property
     *  @param Date|null $value Value to set for the orderDate property.
    */
    public function setOrderDate(?Date $value ): void {
        $this->orderDate = $value;
    }

    /**
     * Sets the partialShipping property value. The partialShipping property
     *  @param bool|null $value Value to set for the partialShipping property.
    */
    public function setPartialShipping(?bool $value ): void {
        $this->partialShipping = $value;
    }

    /**
     * Sets the paymentTerm property value. The paymentTerm property
     *  @param PaymentTerm|null $value Value to set for the paymentTerm property.
    */
    public function setPaymentTerm(?PaymentTerm $value ): void {
        $this->paymentTerm = $value;
    }

    /**
     * Sets the paymentTermsId property value. The paymentTermsId property
     *  @param string|null $value Value to set for the paymentTermsId property.
    */
    public function setPaymentTermsId(?string $value ): void {
        $this->paymentTermsId = $value;
    }

    /**
     * Sets the phoneNumber property value. The phoneNumber property
     *  @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value ): void {
        $this->phoneNumber = $value;
    }

    /**
     * Sets the pricesIncludeTax property value. The pricesIncludeTax property
     *  @param bool|null $value Value to set for the pricesIncludeTax property.
    */
    public function setPricesIncludeTax(?bool $value ): void {
        $this->pricesIncludeTax = $value;
    }

    /**
     * Sets the requestedDeliveryDate property value. The requestedDeliveryDate property
     *  @param Date|null $value Value to set for the requestedDeliveryDate property.
    */
    public function setRequestedDeliveryDate(?Date $value ): void {
        $this->requestedDeliveryDate = $value;
    }

    /**
     * Sets the salesOrderLines property value. The salesOrderLines property
     *  @param array<SalesOrderLine>|null $value Value to set for the salesOrderLines property.
    */
    public function setSalesOrderLines(?array $value ): void {
        $this->salesOrderLines = $value;
    }

    /**
     * Sets the salesperson property value. The salesperson property
     *  @param string|null $value Value to set for the salesperson property.
    */
    public function setSalesperson(?string $value ): void {
        $this->salesperson = $value;
    }

    /**
     * Sets the sellingPostalAddress property value. The sellingPostalAddress property
     *  @param PostalAddressType|null $value Value to set for the sellingPostalAddress property.
    */
    public function setSellingPostalAddress(?PostalAddressType $value ): void {
        $this->sellingPostalAddress = $value;
    }

    /**
     * Sets the shippingPostalAddress property value. The shippingPostalAddress property
     *  @param PostalAddressType|null $value Value to set for the shippingPostalAddress property.
    */
    public function setShippingPostalAddress(?PostalAddressType $value ): void {
        $this->shippingPostalAddress = $value;
    }

    /**
     * Sets the shipToContact property value. The shipToContact property
     *  @param string|null $value Value to set for the shipToContact property.
    */
    public function setShipToContact(?string $value ): void {
        $this->shipToContact = $value;
    }

    /**
     * Sets the shipToName property value. The shipToName property
     *  @param string|null $value Value to set for the shipToName property.
    */
    public function setShipToName(?string $value ): void {
        $this->shipToName = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the totalAmountExcludingTax property value. The totalAmountExcludingTax property
     *  @param string|null $value Value to set for the totalAmountExcludingTax property.
    */
    public function setTotalAmountExcludingTax(?string $value ): void {
        $this->totalAmountExcludingTax = $value;
    }

    /**
     * Sets the totalAmountIncludingTax property value. The totalAmountIncludingTax property
     *  @param string|null $value Value to set for the totalAmountIncludingTax property.
    */
    public function setTotalAmountIncludingTax(?string $value ): void {
        $this->totalAmountIncludingTax = $value;
    }

    /**
     * Sets the totalTaxAmount property value. The totalTaxAmount property
     *  @param string|null $value Value to set for the totalTaxAmount property.
    */
    public function setTotalTaxAmount(?string $value ): void {
        $this->totalTaxAmount = $value;
    }

}
