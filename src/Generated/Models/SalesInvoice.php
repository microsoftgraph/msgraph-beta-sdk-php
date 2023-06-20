<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\Date;

class SalesInvoice implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SalesInvoice and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SalesInvoice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SalesInvoice {
        return new SalesInvoice();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the billingPostalAddress property value. The billingPostalAddress property
     * @return PostalAddressType|null
    */
    public function getBillingPostalAddress(): ?PostalAddressType {
        return $this->getBackingStore()->get('billingPostalAddress');
    }

    /**
     * Gets the billToCustomerId property value. The billToCustomerId property
     * @return string|null
    */
    public function getBillToCustomerId(): ?string {
        return $this->getBackingStore()->get('billToCustomerId');
    }

    /**
     * Gets the billToCustomerNumber property value. The billToCustomerNumber property
     * @return string|null
    */
    public function getBillToCustomerNumber(): ?string {
        return $this->getBackingStore()->get('billToCustomerNumber');
    }

    /**
     * Gets the billToName property value. The billToName property
     * @return string|null
    */
    public function getBillToName(): ?string {
        return $this->getBackingStore()->get('billToName');
    }

    /**
     * Gets the currency property value. The currency property
     * @return Currency|null
    */
    public function getCurrency(): ?Currency {
        return $this->getBackingStore()->get('currency');
    }

    /**
     * Gets the currencyCode property value. The currencyCode property
     * @return string|null
    */
    public function getCurrencyCode(): ?string {
        return $this->getBackingStore()->get('currencyCode');
    }

    /**
     * Gets the currencyId property value. The currencyId property
     * @return string|null
    */
    public function getCurrencyId(): ?string {
        return $this->getBackingStore()->get('currencyId');
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
     * Gets the customerName property value. The customerName property
     * @return string|null
    */
    public function getCustomerName(): ?string {
        return $this->getBackingStore()->get('customerName');
    }

    /**
     * Gets the customerNumber property value. The customerNumber property
     * @return string|null
    */
    public function getCustomerNumber(): ?string {
        return $this->getBackingStore()->get('customerNumber');
    }

    /**
     * Gets the customerPurchaseOrderReference property value. The customerPurchaseOrderReference property
     * @return string|null
    */
    public function getCustomerPurchaseOrderReference(): ?string {
        return $this->getBackingStore()->get('customerPurchaseOrderReference');
    }

    /**
     * Gets the discountAmount property value. The discountAmount property
     * @return string|null
    */
    public function getDiscountAmount(): ?string {
        return $this->getBackingStore()->get('discountAmount');
    }

    /**
     * Gets the discountAppliedBeforeTax property value. The discountAppliedBeforeTax property
     * @return bool|null
    */
    public function getDiscountAppliedBeforeTax(): ?bool {
        return $this->getBackingStore()->get('discountAppliedBeforeTax');
    }

    /**
     * Gets the dueDate property value. The dueDate property
     * @return Date|null
    */
    public function getDueDate(): ?Date {
        return $this->getBackingStore()->get('dueDate');
    }

    /**
     * Gets the email property value. The email property
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->getBackingStore()->get('email');
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
        return  [
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
            'customerPurchaseOrderReference' => fn(ParseNode $n) => $o->setCustomerPurchaseOrderReference($n->getStringValue()),
            'discountAmount' => fn(ParseNode $n) => $o->setDiscountAmount($n->getStringValue()),
            'discountAppliedBeforeTax' => fn(ParseNode $n) => $o->setDiscountAppliedBeforeTax($n->getBooleanValue()),
            'dueDate' => fn(ParseNode $n) => $o->setDueDate($n->getDateValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'externalDocumentNumber' => fn(ParseNode $n) => $o->setExternalDocumentNumber($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'invoiceDate' => fn(ParseNode $n) => $o->setInvoiceDate($n->getDateValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'orderId' => fn(ParseNode $n) => $o->setOrderId($n->getStringValue()),
            'orderNumber' => fn(ParseNode $n) => $o->setOrderNumber($n->getStringValue()),
            'paymentTerm' => fn(ParseNode $n) => $o->setPaymentTerm($n->getObjectValue([PaymentTerm::class, 'createFromDiscriminatorValue'])),
            'paymentTermsId' => fn(ParseNode $n) => $o->setPaymentTermsId($n->getStringValue()),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'pricesIncludeTax' => fn(ParseNode $n) => $o->setPricesIncludeTax($n->getBooleanValue()),
            'salesInvoiceLines' => fn(ParseNode $n) => $o->setSalesInvoiceLines($n->getCollectionOfObjectValues([SalesInvoiceLine::class, 'createFromDiscriminatorValue'])),
            'salesperson' => fn(ParseNode $n) => $o->setSalesperson($n->getStringValue()),
            'sellingPostalAddress' => fn(ParseNode $n) => $o->setSellingPostalAddress($n->getObjectValue([PostalAddressType::class, 'createFromDiscriminatorValue'])),
            'shipmentMethod' => fn(ParseNode $n) => $o->setShipmentMethod($n->getObjectValue([ShipmentMethod::class, 'createFromDiscriminatorValue'])),
            'shipmentMethodId' => fn(ParseNode $n) => $o->setShipmentMethodId($n->getStringValue()),
            'shippingPostalAddress' => fn(ParseNode $n) => $o->setShippingPostalAddress($n->getObjectValue([PostalAddressType::class, 'createFromDiscriminatorValue'])),
            'shipToContact' => fn(ParseNode $n) => $o->setShipToContact($n->getStringValue()),
            'shipToName' => fn(ParseNode $n) => $o->setShipToName($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'totalAmountExcludingTax' => fn(ParseNode $n) => $o->setTotalAmountExcludingTax($n->getStringValue()),
            'totalAmountIncludingTax' => fn(ParseNode $n) => $o->setTotalAmountIncludingTax($n->getStringValue()),
            'totalTaxAmount' => fn(ParseNode $n) => $o->setTotalTaxAmount($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->getBackingStore()->get('id');
    }

    /**
     * Gets the invoiceDate property value. The invoiceDate property
     * @return Date|null
    */
    public function getInvoiceDate(): ?Date {
        return $this->getBackingStore()->get('invoiceDate');
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the number property value. The number property
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->getBackingStore()->get('number');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the orderId property value. The orderId property
     * @return string|null
    */
    public function getOrderId(): ?string {
        return $this->getBackingStore()->get('orderId');
    }

    /**
     * Gets the orderNumber property value. The orderNumber property
     * @return string|null
    */
    public function getOrderNumber(): ?string {
        return $this->getBackingStore()->get('orderNumber');
    }

    /**
     * Gets the paymentTerm property value. The paymentTerm property
     * @return PaymentTerm|null
    */
    public function getPaymentTerm(): ?PaymentTerm {
        return $this->getBackingStore()->get('paymentTerm');
    }

    /**
     * Gets the paymentTermsId property value. The paymentTermsId property
     * @return string|null
    */
    public function getPaymentTermsId(): ?string {
        return $this->getBackingStore()->get('paymentTermsId');
    }

    /**
     * Gets the phoneNumber property value. The phoneNumber property
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->getBackingStore()->get('phoneNumber');
    }

    /**
     * Gets the pricesIncludeTax property value. The pricesIncludeTax property
     * @return bool|null
    */
    public function getPricesIncludeTax(): ?bool {
        return $this->getBackingStore()->get('pricesIncludeTax');
    }

    /**
     * Gets the salesInvoiceLines property value. The salesInvoiceLines property
     * @return array<SalesInvoiceLine>|null
    */
    public function getSalesInvoiceLines(): ?array {
        return $this->getBackingStore()->get('salesInvoiceLines');
    }

    /**
     * Gets the salesperson property value. The salesperson property
     * @return string|null
    */
    public function getSalesperson(): ?string {
        return $this->getBackingStore()->get('salesperson');
    }

    /**
     * Gets the sellingPostalAddress property value. The sellingPostalAddress property
     * @return PostalAddressType|null
    */
    public function getSellingPostalAddress(): ?PostalAddressType {
        return $this->getBackingStore()->get('sellingPostalAddress');
    }

    /**
     * Gets the shipmentMethod property value. The shipmentMethod property
     * @return ShipmentMethod|null
    */
    public function getShipmentMethod(): ?ShipmentMethod {
        return $this->getBackingStore()->get('shipmentMethod');
    }

    /**
     * Gets the shipmentMethodId property value. The shipmentMethodId property
     * @return string|null
    */
    public function getShipmentMethodId(): ?string {
        return $this->getBackingStore()->get('shipmentMethodId');
    }

    /**
     * Gets the shippingPostalAddress property value. The shippingPostalAddress property
     * @return PostalAddressType|null
    */
    public function getShippingPostalAddress(): ?PostalAddressType {
        return $this->getBackingStore()->get('shippingPostalAddress');
    }

    /**
     * Gets the shipToContact property value. The shipToContact property
     * @return string|null
    */
    public function getShipToContact(): ?string {
        return $this->getBackingStore()->get('shipToContact');
    }

    /**
     * Gets the shipToName property value. The shipToName property
     * @return string|null
    */
    public function getShipToName(): ?string {
        return $this->getBackingStore()->get('shipToName');
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the totalAmountExcludingTax property value. The totalAmountExcludingTax property
     * @return string|null
    */
    public function getTotalAmountExcludingTax(): ?string {
        return $this->getBackingStore()->get('totalAmountExcludingTax');
    }

    /**
     * Gets the totalAmountIncludingTax property value. The totalAmountIncludingTax property
     * @return string|null
    */
    public function getTotalAmountIncludingTax(): ?string {
        return $this->getBackingStore()->get('totalAmountIncludingTax');
    }

    /**
     * Gets the totalTaxAmount property value. The totalTaxAmount property
     * @return string|null
    */
    public function getTotalTaxAmount(): ?string {
        return $this->getBackingStore()->get('totalTaxAmount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('billingPostalAddress', $this->getBillingPostalAddress());
        $writer->writeStringValue('billToCustomerId', $this->getBillToCustomerId());
        $writer->writeStringValue('billToCustomerNumber', $this->getBillToCustomerNumber());
        $writer->writeStringValue('billToName', $this->getBillToName());
        $writer->writeObjectValue('currency', $this->getCurrency());
        $writer->writeStringValue('currencyCode', $this->getCurrencyCode());
        $writer->writeStringValue('currencyId', $this->getCurrencyId());
        $writer->writeObjectValue('customer', $this->getCustomer());
        $writer->writeStringValue('customerId', $this->getCustomerId());
        $writer->writeStringValue('customerName', $this->getCustomerName());
        $writer->writeStringValue('customerNumber', $this->getCustomerNumber());
        $writer->writeStringValue('customerPurchaseOrderReference', $this->getCustomerPurchaseOrderReference());
        $writer->writeStringValue('discountAmount', $this->getDiscountAmount());
        $writer->writeBooleanValue('discountAppliedBeforeTax', $this->getDiscountAppliedBeforeTax());
        $writer->writeDateValue('dueDate', $this->getDueDate());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('externalDocumentNumber', $this->getExternalDocumentNumber());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateValue('invoiceDate', $this->getInvoiceDate());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('orderId', $this->getOrderId());
        $writer->writeStringValue('orderNumber', $this->getOrderNumber());
        $writer->writeObjectValue('paymentTerm', $this->getPaymentTerm());
        $writer->writeStringValue('paymentTermsId', $this->getPaymentTermsId());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeBooleanValue('pricesIncludeTax', $this->getPricesIncludeTax());
        $writer->writeCollectionOfObjectValues('salesInvoiceLines', $this->getSalesInvoiceLines());
        $writer->writeStringValue('salesperson', $this->getSalesperson());
        $writer->writeObjectValue('sellingPostalAddress', $this->getSellingPostalAddress());
        $writer->writeObjectValue('shipmentMethod', $this->getShipmentMethod());
        $writer->writeStringValue('shipmentMethodId', $this->getShipmentMethodId());
        $writer->writeObjectValue('shippingPostalAddress', $this->getShippingPostalAddress());
        $writer->writeStringValue('shipToContact', $this->getShipToContact());
        $writer->writeStringValue('shipToName', $this->getShipToName());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('totalAmountExcludingTax', $this->getTotalAmountExcludingTax());
        $writer->writeStringValue('totalAmountIncludingTax', $this->getTotalAmountIncludingTax());
        $writer->writeStringValue('totalTaxAmount', $this->getTotalTaxAmount());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the billingPostalAddress property value. The billingPostalAddress property
     * @param PostalAddressType|null $value Value to set for the billingPostalAddress property.
    */
    public function setBillingPostalAddress(?PostalAddressType $value): void {
        $this->getBackingStore()->set('billingPostalAddress', $value);
    }

    /**
     * Sets the billToCustomerId property value. The billToCustomerId property
     * @param string|null $value Value to set for the billToCustomerId property.
    */
    public function setBillToCustomerId(?string $value): void {
        $this->getBackingStore()->set('billToCustomerId', $value);
    }

    /**
     * Sets the billToCustomerNumber property value. The billToCustomerNumber property
     * @param string|null $value Value to set for the billToCustomerNumber property.
    */
    public function setBillToCustomerNumber(?string $value): void {
        $this->getBackingStore()->set('billToCustomerNumber', $value);
    }

    /**
     * Sets the billToName property value. The billToName property
     * @param string|null $value Value to set for the billToName property.
    */
    public function setBillToName(?string $value): void {
        $this->getBackingStore()->set('billToName', $value);
    }

    /**
     * Sets the currency property value. The currency property
     * @param Currency|null $value Value to set for the currency property.
    */
    public function setCurrency(?Currency $value): void {
        $this->getBackingStore()->set('currency', $value);
    }

    /**
     * Sets the currencyCode property value. The currencyCode property
     * @param string|null $value Value to set for the currencyCode property.
    */
    public function setCurrencyCode(?string $value): void {
        $this->getBackingStore()->set('currencyCode', $value);
    }

    /**
     * Sets the currencyId property value. The currencyId property
     * @param string|null $value Value to set for the currencyId property.
    */
    public function setCurrencyId(?string $value): void {
        $this->getBackingStore()->set('currencyId', $value);
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
     * Sets the customerName property value. The customerName property
     * @param string|null $value Value to set for the customerName property.
    */
    public function setCustomerName(?string $value): void {
        $this->getBackingStore()->set('customerName', $value);
    }

    /**
     * Sets the customerNumber property value. The customerNumber property
     * @param string|null $value Value to set for the customerNumber property.
    */
    public function setCustomerNumber(?string $value): void {
        $this->getBackingStore()->set('customerNumber', $value);
    }

    /**
     * Sets the customerPurchaseOrderReference property value. The customerPurchaseOrderReference property
     * @param string|null $value Value to set for the customerPurchaseOrderReference property.
    */
    public function setCustomerPurchaseOrderReference(?string $value): void {
        $this->getBackingStore()->set('customerPurchaseOrderReference', $value);
    }

    /**
     * Sets the discountAmount property value. The discountAmount property
     * @param string|null $value Value to set for the discountAmount property.
    */
    public function setDiscountAmount(?string $value): void {
        $this->getBackingStore()->set('discountAmount', $value);
    }

    /**
     * Sets the discountAppliedBeforeTax property value. The discountAppliedBeforeTax property
     * @param bool|null $value Value to set for the discountAppliedBeforeTax property.
    */
    public function setDiscountAppliedBeforeTax(?bool $value): void {
        $this->getBackingStore()->set('discountAppliedBeforeTax', $value);
    }

    /**
     * Sets the dueDate property value. The dueDate property
     * @param Date|null $value Value to set for the dueDate property.
    */
    public function setDueDate(?Date $value): void {
        $this->getBackingStore()->set('dueDate', $value);
    }

    /**
     * Sets the email property value. The email property
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->getBackingStore()->set('email', $value);
    }

    /**
     * Sets the externalDocumentNumber property value. The externalDocumentNumber property
     * @param string|null $value Value to set for the externalDocumentNumber property.
    */
    public function setExternalDocumentNumber(?string $value): void {
        $this->getBackingStore()->set('externalDocumentNumber', $value);
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the invoiceDate property value. The invoiceDate property
     * @param Date|null $value Value to set for the invoiceDate property.
    */
    public function setInvoiceDate(?Date $value): void {
        $this->getBackingStore()->set('invoiceDate', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the number property value. The number property
     * @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->getBackingStore()->set('number', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the orderId property value. The orderId property
     * @param string|null $value Value to set for the orderId property.
    */
    public function setOrderId(?string $value): void {
        $this->getBackingStore()->set('orderId', $value);
    }

    /**
     * Sets the orderNumber property value. The orderNumber property
     * @param string|null $value Value to set for the orderNumber property.
    */
    public function setOrderNumber(?string $value): void {
        $this->getBackingStore()->set('orderNumber', $value);
    }

    /**
     * Sets the paymentTerm property value. The paymentTerm property
     * @param PaymentTerm|null $value Value to set for the paymentTerm property.
    */
    public function setPaymentTerm(?PaymentTerm $value): void {
        $this->getBackingStore()->set('paymentTerm', $value);
    }

    /**
     * Sets the paymentTermsId property value. The paymentTermsId property
     * @param string|null $value Value to set for the paymentTermsId property.
    */
    public function setPaymentTermsId(?string $value): void {
        $this->getBackingStore()->set('paymentTermsId', $value);
    }

    /**
     * Sets the phoneNumber property value. The phoneNumber property
     * @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value): void {
        $this->getBackingStore()->set('phoneNumber', $value);
    }

    /**
     * Sets the pricesIncludeTax property value. The pricesIncludeTax property
     * @param bool|null $value Value to set for the pricesIncludeTax property.
    */
    public function setPricesIncludeTax(?bool $value): void {
        $this->getBackingStore()->set('pricesIncludeTax', $value);
    }

    /**
     * Sets the salesInvoiceLines property value. The salesInvoiceLines property
     * @param array<SalesInvoiceLine>|null $value Value to set for the salesInvoiceLines property.
    */
    public function setSalesInvoiceLines(?array $value): void {
        $this->getBackingStore()->set('salesInvoiceLines', $value);
    }

    /**
     * Sets the salesperson property value. The salesperson property
     * @param string|null $value Value to set for the salesperson property.
    */
    public function setSalesperson(?string $value): void {
        $this->getBackingStore()->set('salesperson', $value);
    }

    /**
     * Sets the sellingPostalAddress property value. The sellingPostalAddress property
     * @param PostalAddressType|null $value Value to set for the sellingPostalAddress property.
    */
    public function setSellingPostalAddress(?PostalAddressType $value): void {
        $this->getBackingStore()->set('sellingPostalAddress', $value);
    }

    /**
     * Sets the shipmentMethod property value. The shipmentMethod property
     * @param ShipmentMethod|null $value Value to set for the shipmentMethod property.
    */
    public function setShipmentMethod(?ShipmentMethod $value): void {
        $this->getBackingStore()->set('shipmentMethod', $value);
    }

    /**
     * Sets the shipmentMethodId property value. The shipmentMethodId property
     * @param string|null $value Value to set for the shipmentMethodId property.
    */
    public function setShipmentMethodId(?string $value): void {
        $this->getBackingStore()->set('shipmentMethodId', $value);
    }

    /**
     * Sets the shippingPostalAddress property value. The shippingPostalAddress property
     * @param PostalAddressType|null $value Value to set for the shippingPostalAddress property.
    */
    public function setShippingPostalAddress(?PostalAddressType $value): void {
        $this->getBackingStore()->set('shippingPostalAddress', $value);
    }

    /**
     * Sets the shipToContact property value. The shipToContact property
     * @param string|null $value Value to set for the shipToContact property.
    */
    public function setShipToContact(?string $value): void {
        $this->getBackingStore()->set('shipToContact', $value);
    }

    /**
     * Sets the shipToName property value. The shipToName property
     * @param string|null $value Value to set for the shipToName property.
    */
    public function setShipToName(?string $value): void {
        $this->getBackingStore()->set('shipToName', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the totalAmountExcludingTax property value. The totalAmountExcludingTax property
     * @param string|null $value Value to set for the totalAmountExcludingTax property.
    */
    public function setTotalAmountExcludingTax(?string $value): void {
        $this->getBackingStore()->set('totalAmountExcludingTax', $value);
    }

    /**
     * Sets the totalAmountIncludingTax property value. The totalAmountIncludingTax property
     * @param string|null $value Value to set for the totalAmountIncludingTax property.
    */
    public function setTotalAmountIncludingTax(?string $value): void {
        $this->getBackingStore()->set('totalAmountIncludingTax', $value);
    }

    /**
     * Sets the totalTaxAmount property value. The totalTaxAmount property
     * @param string|null $value Value to set for the totalTaxAmount property.
    */
    public function setTotalTaxAmount(?string $value): void {
        $this->getBackingStore()->set('totalTaxAmount', $value);
    }

}
