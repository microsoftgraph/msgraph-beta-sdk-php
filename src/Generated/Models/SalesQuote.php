<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class SalesQuote extends Entity implements Parsable 
{
    /**
     * @var Date|null $acceptedDate The acceptedDate property
    */
    private ?Date $acceptedDate = null;
    
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
     * @var Date|null $documentDate The documentDate property
    */
    private ?Date $documentDate = null;
    
    /**
     * @var Date|null $dueDate The dueDate property
    */
    private ?Date $dueDate = null;
    
    /**
     * @var string|null $email The email property
    */
    private ?string $email = null;
    
    /**
     * @var string|null $externalDocumentNumber The externalDocumentNumber property
    */
    private ?string $externalDocumentNumber = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $number The number property
    */
    private ?string $number = null;
    
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
     * @var string|null $salesperson The salesperson property
    */
    private ?string $salesperson = null;
    
    /**
     * @var array<SalesQuoteLine>|null $salesQuoteLines The salesQuoteLines property
    */
    private ?array $salesQuoteLines = null;
    
    /**
     * @var PostalAddressType|null $sellingPostalAddress The sellingPostalAddress property
    */
    private ?PostalAddressType $sellingPostalAddress = null;
    
    /**
     * @var DateTime|null $sentDate The sentDate property
    */
    private ?DateTime $sentDate = null;
    
    /**
     * @var ShipmentMethod|null $shipmentMethod The shipmentMethod property
    */
    private ?ShipmentMethod $shipmentMethod = null;
    
    /**
     * @var string|null $shipmentMethodId The shipmentMethodId property
    */
    private ?string $shipmentMethodId = null;
    
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
     * @var Date|null $validUntilDate The validUntilDate property
    */
    private ?Date $validUntilDate = null;
    
    /**
     * Instantiates a new SalesQuote and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SalesQuote
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SalesQuote {
        return new SalesQuote();
    }

    /**
     * Gets the acceptedDate property value. The acceptedDate property
     * @return Date|null
    */
    public function getAcceptedDate(): ?Date {
        return $this->acceptedDate;
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
     * Gets the documentDate property value. The documentDate property
     * @return Date|null
    */
    public function getDocumentDate(): ?Date {
        return $this->documentDate;
    }

    /**
     * Gets the dueDate property value. The dueDate property
     * @return Date|null
    */
    public function getDueDate(): ?Date {
        return $this->dueDate;
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
            'acceptedDate' => function (ParseNode $n) use ($o) { $o->setAcceptedDate($n->getDateValue()); },
            'billingPostalAddress' => function (ParseNode $n) use ($o) { $o->setBillingPostalAddress($n->getObjectValue(array(PostalAddressType::class, 'createFromDiscriminatorValue'))); },
            'billToCustomerId' => function (ParseNode $n) use ($o) { $o->setBillToCustomerId($n->getStringValue()); },
            'billToCustomerNumber' => function (ParseNode $n) use ($o) { $o->setBillToCustomerNumber($n->getStringValue()); },
            'billToName' => function (ParseNode $n) use ($o) { $o->setBillToName($n->getStringValue()); },
            'currency' => function (ParseNode $n) use ($o) { $o->setCurrency($n->getObjectValue(array(Currency::class, 'createFromDiscriminatorValue'))); },
            'currencyCode' => function (ParseNode $n) use ($o) { $o->setCurrencyCode($n->getStringValue()); },
            'currencyId' => function (ParseNode $n) use ($o) { $o->setCurrencyId($n->getStringValue()); },
            'customer' => function (ParseNode $n) use ($o) { $o->setCustomer($n->getObjectValue(array(Customer::class, 'createFromDiscriminatorValue'))); },
            'customerId' => function (ParseNode $n) use ($o) { $o->setCustomerId($n->getStringValue()); },
            'customerName' => function (ParseNode $n) use ($o) { $o->setCustomerName($n->getStringValue()); },
            'customerNumber' => function (ParseNode $n) use ($o) { $o->setCustomerNumber($n->getStringValue()); },
            'discountAmount' => function (ParseNode $n) use ($o) { $o->setDiscountAmount($n->getStringValue()); },
            'documentDate' => function (ParseNode $n) use ($o) { $o->setDocumentDate($n->getDateValue()); },
            'dueDate' => function (ParseNode $n) use ($o) { $o->setDueDate($n->getDateValue()); },
            'email' => function (ParseNode $n) use ($o) { $o->setEmail($n->getStringValue()); },
            'externalDocumentNumber' => function (ParseNode $n) use ($o) { $o->setExternalDocumentNumber($n->getStringValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'number' => function (ParseNode $n) use ($o) { $o->setNumber($n->getStringValue()); },
            'paymentTerm' => function (ParseNode $n) use ($o) { $o->setPaymentTerm($n->getObjectValue(array(PaymentTerm::class, 'createFromDiscriminatorValue'))); },
            'paymentTermsId' => function (ParseNode $n) use ($o) { $o->setPaymentTermsId($n->getStringValue()); },
            'phoneNumber' => function (ParseNode $n) use ($o) { $o->setPhoneNumber($n->getStringValue()); },
            'salesperson' => function (ParseNode $n) use ($o) { $o->setSalesperson($n->getStringValue()); },
            'salesQuoteLines' => function (ParseNode $n) use ($o) { $o->setSalesQuoteLines($n->getCollectionOfObjectValues(array(SalesQuoteLine::class, 'createFromDiscriminatorValue'))); },
            'sellingPostalAddress' => function (ParseNode $n) use ($o) { $o->setSellingPostalAddress($n->getObjectValue(array(PostalAddressType::class, 'createFromDiscriminatorValue'))); },
            'sentDate' => function (ParseNode $n) use ($o) { $o->setSentDate($n->getDateTimeValue()); },
            'shipmentMethod' => function (ParseNode $n) use ($o) { $o->setShipmentMethod($n->getObjectValue(array(ShipmentMethod::class, 'createFromDiscriminatorValue'))); },
            'shipmentMethodId' => function (ParseNode $n) use ($o) { $o->setShipmentMethodId($n->getStringValue()); },
            'shippingPostalAddress' => function (ParseNode $n) use ($o) { $o->setShippingPostalAddress($n->getObjectValue(array(PostalAddressType::class, 'createFromDiscriminatorValue'))); },
            'shipToContact' => function (ParseNode $n) use ($o) { $o->setShipToContact($n->getStringValue()); },
            'shipToName' => function (ParseNode $n) use ($o) { $o->setShipToName($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getStringValue()); },
            'totalAmountExcludingTax' => function (ParseNode $n) use ($o) { $o->setTotalAmountExcludingTax($n->getStringValue()); },
            'totalAmountIncludingTax' => function (ParseNode $n) use ($o) { $o->setTotalAmountIncludingTax($n->getStringValue()); },
            'totalTaxAmount' => function (ParseNode $n) use ($o) { $o->setTotalTaxAmount($n->getStringValue()); },
            'validUntilDate' => function (ParseNode $n) use ($o) { $o->setValidUntilDate($n->getDateValue()); },
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
     * Gets the number property value. The number property
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
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
     * Gets the salesperson property value. The salesperson property
     * @return string|null
    */
    public function getSalesperson(): ?string {
        return $this->salesperson;
    }

    /**
     * Gets the salesQuoteLines property value. The salesQuoteLines property
     * @return array<SalesQuoteLine>|null
    */
    public function getSalesQuoteLines(): ?array {
        return $this->salesQuoteLines;
    }

    /**
     * Gets the sellingPostalAddress property value. The sellingPostalAddress property
     * @return PostalAddressType|null
    */
    public function getSellingPostalAddress(): ?PostalAddressType {
        return $this->sellingPostalAddress;
    }

    /**
     * Gets the sentDate property value. The sentDate property
     * @return DateTime|null
    */
    public function getSentDate(): ?DateTime {
        return $this->sentDate;
    }

    /**
     * Gets the shipmentMethod property value. The shipmentMethod property
     * @return ShipmentMethod|null
    */
    public function getShipmentMethod(): ?ShipmentMethod {
        return $this->shipmentMethod;
    }

    /**
     * Gets the shipmentMethodId property value. The shipmentMethodId property
     * @return string|null
    */
    public function getShipmentMethodId(): ?string {
        return $this->shipmentMethodId;
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
     * Gets the validUntilDate property value. The validUntilDate property
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
        $writer->writeStringValue('discountAmount', $this->discountAmount);
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
        $writer->writeStringValue('totalAmountExcludingTax', $this->totalAmountExcludingTax);
        $writer->writeStringValue('totalAmountIncludingTax', $this->totalAmountIncludingTax);
        $writer->writeStringValue('totalTaxAmount', $this->totalTaxAmount);
        $writer->writeDateValue('validUntilDate', $this->validUntilDate);
    }

    /**
     * Sets the acceptedDate property value. The acceptedDate property
     *  @param Date|null $value Value to set for the acceptedDate property.
    */
    public function setAcceptedDate(?Date $value ): void {
        $this->acceptedDate = $value;
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
     * Sets the documentDate property value. The documentDate property
     *  @param Date|null $value Value to set for the documentDate property.
    */
    public function setDocumentDate(?Date $value ): void {
        $this->documentDate = $value;
    }

    /**
     * Sets the dueDate property value. The dueDate property
     *  @param Date|null $value Value to set for the dueDate property.
    */
    public function setDueDate(?Date $value ): void {
        $this->dueDate = $value;
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
     * Sets the salesperson property value. The salesperson property
     *  @param string|null $value Value to set for the salesperson property.
    */
    public function setSalesperson(?string $value ): void {
        $this->salesperson = $value;
    }

    /**
     * Sets the salesQuoteLines property value. The salesQuoteLines property
     *  @param array<SalesQuoteLine>|null $value Value to set for the salesQuoteLines property.
    */
    public function setSalesQuoteLines(?array $value ): void {
        $this->salesQuoteLines = $value;
    }

    /**
     * Sets the sellingPostalAddress property value. The sellingPostalAddress property
     *  @param PostalAddressType|null $value Value to set for the sellingPostalAddress property.
    */
    public function setSellingPostalAddress(?PostalAddressType $value ): void {
        $this->sellingPostalAddress = $value;
    }

    /**
     * Sets the sentDate property value. The sentDate property
     *  @param DateTime|null $value Value to set for the sentDate property.
    */
    public function setSentDate(?DateTime $value ): void {
        $this->sentDate = $value;
    }

    /**
     * Sets the shipmentMethod property value. The shipmentMethod property
     *  @param ShipmentMethod|null $value Value to set for the shipmentMethod property.
    */
    public function setShipmentMethod(?ShipmentMethod $value ): void {
        $this->shipmentMethod = $value;
    }

    /**
     * Sets the shipmentMethodId property value. The shipmentMethodId property
     *  @param string|null $value Value to set for the shipmentMethodId property.
    */
    public function setShipmentMethodId(?string $value ): void {
        $this->shipmentMethodId = $value;
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

    /**
     * Sets the validUntilDate property value. The validUntilDate property
     *  @param Date|null $value Value to set for the validUntilDate property.
    */
    public function setValidUntilDate(?Date $value ): void {
        $this->validUntilDate = $value;
    }

}
