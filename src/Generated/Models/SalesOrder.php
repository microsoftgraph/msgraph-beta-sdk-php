<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\Date;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SalesOrder implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SalesOrder and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
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
        $val = $this->getBackingStore()->get('billingPostalAddress');
        if (is_null($val) || $val instanceof PostalAddressType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'billingPostalAddress'");
    }

    /**
     * Gets the billToCustomerId property value. The billToCustomerId property
     * @return string|null
    */
    public function getBillToCustomerId(): ?string {
        $val = $this->getBackingStore()->get('billToCustomerId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'billToCustomerId'");
    }

    /**
     * Gets the billToCustomerNumber property value. The billToCustomerNumber property
     * @return string|null
    */
    public function getBillToCustomerNumber(): ?string {
        $val = $this->getBackingStore()->get('billToCustomerNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'billToCustomerNumber'");
    }

    /**
     * Gets the billToName property value. The billToName property
     * @return string|null
    */
    public function getBillToName(): ?string {
        $val = $this->getBackingStore()->get('billToName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'billToName'");
    }

    /**
     * Gets the currency property value. The currency property
     * @return Currency|null
    */
    public function getCurrency(): ?Currency {
        $val = $this->getBackingStore()->get('currency');
        if (is_null($val) || $val instanceof Currency) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'currency'");
    }

    /**
     * Gets the currencyCode property value. The currencyCode property
     * @return string|null
    */
    public function getCurrencyCode(): ?string {
        $val = $this->getBackingStore()->get('currencyCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'currencyCode'");
    }

    /**
     * Gets the currencyId property value. The currencyId property
     * @return string|null
    */
    public function getCurrencyId(): ?string {
        $val = $this->getBackingStore()->get('currencyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'currencyId'");
    }

    /**
     * Gets the customer property value. The customer property
     * @return Customer|null
    */
    public function getCustomer(): ?Customer {
        $val = $this->getBackingStore()->get('customer');
        if (is_null($val) || $val instanceof Customer) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customer'");
    }

    /**
     * Gets the customerId property value. The customerId property
     * @return string|null
    */
    public function getCustomerId(): ?string {
        $val = $this->getBackingStore()->get('customerId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customerId'");
    }

    /**
     * Gets the customerName property value. The customerName property
     * @return string|null
    */
    public function getCustomerName(): ?string {
        $val = $this->getBackingStore()->get('customerName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customerName'");
    }

    /**
     * Gets the customerNumber property value. The customerNumber property
     * @return string|null
    */
    public function getCustomerNumber(): ?string {
        $val = $this->getBackingStore()->get('customerNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customerNumber'");
    }

    /**
     * Gets the discountAmount property value. The discountAmount property
     * @return string|null
    */
    public function getDiscountAmount(): ?string {
        $val = $this->getBackingStore()->get('discountAmount');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'discountAmount'");
    }

    /**
     * Gets the discountAppliedBeforeTax property value. The discountAppliedBeforeTax property
     * @return bool|null
    */
    public function getDiscountAppliedBeforeTax(): ?bool {
        $val = $this->getBackingStore()->get('discountAppliedBeforeTax');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'discountAppliedBeforeTax'");
    }

    /**
     * Gets the email property value. The email property
     * @return string|null
    */
    public function getEmail(): ?string {
        $val = $this->getBackingStore()->get('email');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'email'");
    }

    /**
     * Gets the externalDocumentNumber property value. The externalDocumentNumber property
     * @return string|null
    */
    public function getExternalDocumentNumber(): ?string {
        $val = $this->getBackingStore()->get('externalDocumentNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalDocumentNumber'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
            'discountAmount' => fn(ParseNode $n) => $o->setDiscountAmount($n->getStringValue()),
            'discountAppliedBeforeTax' => fn(ParseNode $n) => $o->setDiscountAppliedBeforeTax($n->getBooleanValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'externalDocumentNumber' => fn(ParseNode $n) => $o->setExternalDocumentNumber($n->getStringValue()),
            'fullyShipped' => fn(ParseNode $n) => $o->setFullyShipped($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
        ];
    }

    /**
     * Gets the fullyShipped property value. The fullyShipped property
     * @return bool|null
    */
    public function getFullyShipped(): ?bool {
        $val = $this->getBackingStore()->get('fullyShipped');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fullyShipped'");
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the number property value. The number property
     * @return string|null
    */
    public function getNumber(): ?string {
        $val = $this->getBackingStore()->get('number');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'number'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the orderDate property value. The orderDate property
     * @return Date|null
    */
    public function getOrderDate(): ?Date {
        $val = $this->getBackingStore()->get('orderDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'orderDate'");
    }

    /**
     * Gets the partialShipping property value. The partialShipping property
     * @return bool|null
    */
    public function getPartialShipping(): ?bool {
        $val = $this->getBackingStore()->get('partialShipping');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'partialShipping'");
    }

    /**
     * Gets the paymentTerm property value. The paymentTerm property
     * @return PaymentTerm|null
    */
    public function getPaymentTerm(): ?PaymentTerm {
        $val = $this->getBackingStore()->get('paymentTerm');
        if (is_null($val) || $val instanceof PaymentTerm) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'paymentTerm'");
    }

    /**
     * Gets the paymentTermsId property value. The paymentTermsId property
     * @return string|null
    */
    public function getPaymentTermsId(): ?string {
        $val = $this->getBackingStore()->get('paymentTermsId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'paymentTermsId'");
    }

    /**
     * Gets the phoneNumber property value. The phoneNumber property
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        $val = $this->getBackingStore()->get('phoneNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phoneNumber'");
    }

    /**
     * Gets the pricesIncludeTax property value. The pricesIncludeTax property
     * @return bool|null
    */
    public function getPricesIncludeTax(): ?bool {
        $val = $this->getBackingStore()->get('pricesIncludeTax');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pricesIncludeTax'");
    }

    /**
     * Gets the requestedDeliveryDate property value. The requestedDeliveryDate property
     * @return Date|null
    */
    public function getRequestedDeliveryDate(): ?Date {
        $val = $this->getBackingStore()->get('requestedDeliveryDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestedDeliveryDate'");
    }

    /**
     * Gets the salesOrderLines property value. The salesOrderLines property
     * @return array<SalesOrderLine>|null
    */
    public function getSalesOrderLines(): ?array {
        $val = $this->getBackingStore()->get('salesOrderLines');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SalesOrderLine::class);
            /** @var array<SalesOrderLine>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'salesOrderLines'");
    }

    /**
     * Gets the salesperson property value. The salesperson property
     * @return string|null
    */
    public function getSalesperson(): ?string {
        $val = $this->getBackingStore()->get('salesperson');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'salesperson'");
    }

    /**
     * Gets the sellingPostalAddress property value. The sellingPostalAddress property
     * @return PostalAddressType|null
    */
    public function getSellingPostalAddress(): ?PostalAddressType {
        $val = $this->getBackingStore()->get('sellingPostalAddress');
        if (is_null($val) || $val instanceof PostalAddressType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sellingPostalAddress'");
    }

    /**
     * Gets the shippingPostalAddress property value. The shippingPostalAddress property
     * @return PostalAddressType|null
    */
    public function getShippingPostalAddress(): ?PostalAddressType {
        $val = $this->getBackingStore()->get('shippingPostalAddress');
        if (is_null($val) || $val instanceof PostalAddressType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shippingPostalAddress'");
    }

    /**
     * Gets the shipToContact property value. The shipToContact property
     * @return string|null
    */
    public function getShipToContact(): ?string {
        $val = $this->getBackingStore()->get('shipToContact');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shipToContact'");
    }

    /**
     * Gets the shipToName property value. The shipToName property
     * @return string|null
    */
    public function getShipToName(): ?string {
        $val = $this->getBackingStore()->get('shipToName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shipToName'");
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the totalAmountExcludingTax property value. The totalAmountExcludingTax property
     * @return string|null
    */
    public function getTotalAmountExcludingTax(): ?string {
        $val = $this->getBackingStore()->get('totalAmountExcludingTax');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalAmountExcludingTax'");
    }

    /**
     * Gets the totalAmountIncludingTax property value. The totalAmountIncludingTax property
     * @return string|null
    */
    public function getTotalAmountIncludingTax(): ?string {
        $val = $this->getBackingStore()->get('totalAmountIncludingTax');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalAmountIncludingTax'");
    }

    /**
     * Gets the totalTaxAmount property value. The totalTaxAmount property
     * @return string|null
    */
    public function getTotalTaxAmount(): ?string {
        $val = $this->getBackingStore()->get('totalTaxAmount');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalTaxAmount'");
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
        $writer->writeStringValue('discountAmount', $this->getDiscountAmount());
        $writer->writeBooleanValue('discountAppliedBeforeTax', $this->getDiscountAppliedBeforeTax());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('externalDocumentNumber', $this->getExternalDocumentNumber());
        $writer->writeBooleanValue('fullyShipped', $this->getFullyShipped());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateValue('orderDate', $this->getOrderDate());
        $writer->writeBooleanValue('partialShipping', $this->getPartialShipping());
        $writer->writeObjectValue('paymentTerm', $this->getPaymentTerm());
        $writer->writeStringValue('paymentTermsId', $this->getPaymentTermsId());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeBooleanValue('pricesIncludeTax', $this->getPricesIncludeTax());
        $writer->writeDateValue('requestedDeliveryDate', $this->getRequestedDeliveryDate());
        $writer->writeCollectionOfObjectValues('salesOrderLines', $this->getSalesOrderLines());
        $writer->writeStringValue('salesperson', $this->getSalesperson());
        $writer->writeObjectValue('sellingPostalAddress', $this->getSellingPostalAddress());
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
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
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
     * Sets the fullyShipped property value. The fullyShipped property
     * @param bool|null $value Value to set for the fullyShipped property.
    */
    public function setFullyShipped(?bool $value): void {
        $this->getBackingStore()->set('fullyShipped', $value);
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
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
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the orderDate property value. The orderDate property
     * @param Date|null $value Value to set for the orderDate property.
    */
    public function setOrderDate(?Date $value): void {
        $this->getBackingStore()->set('orderDate', $value);
    }

    /**
     * Sets the partialShipping property value. The partialShipping property
     * @param bool|null $value Value to set for the partialShipping property.
    */
    public function setPartialShipping(?bool $value): void {
        $this->getBackingStore()->set('partialShipping', $value);
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
     * Sets the requestedDeliveryDate property value. The requestedDeliveryDate property
     * @param Date|null $value Value to set for the requestedDeliveryDate property.
    */
    public function setRequestedDeliveryDate(?Date $value): void {
        $this->getBackingStore()->set('requestedDeliveryDate', $value);
    }

    /**
     * Sets the salesOrderLines property value. The salesOrderLines property
     * @param array<SalesOrderLine>|null $value Value to set for the salesOrderLines property.
    */
    public function setSalesOrderLines(?array $value): void {
        $this->getBackingStore()->set('salesOrderLines', $value);
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
