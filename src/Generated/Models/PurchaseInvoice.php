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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PurchaseInvoice implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new purchaseInvoice and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PurchaseInvoice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PurchaseInvoice {
        return new PurchaseInvoice();
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
     * Gets the buyFromAddress property value. The buyFromAddress property
     * @return PostalAddressType|null
    */
    public function getBuyFromAddress(): ?PostalAddressType {
        $val = $this->getBackingStore()->get('buyFromAddress');
        if (is_null($val) || $val instanceof PostalAddressType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'buyFromAddress'");
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
     * Gets the dueDate property value. The dueDate property
     * @return Date|null
    */
    public function getDueDate(): ?Date {
        $val = $this->getBackingStore()->get('dueDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dueDate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'buyFromAddress' => fn(ParseNode $n) => $o->setBuyFromAddress($n->getObjectValue([PostalAddressType::class, 'createFromDiscriminatorValue'])),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getObjectValue([Currency::class, 'createFromDiscriminatorValue'])),
            'currencyCode' => fn(ParseNode $n) => $o->setCurrencyCode($n->getStringValue()),
            'currencyId' => fn(ParseNode $n) => $o->setCurrencyId($n->getStringValue()),
            'discountAmount' => fn(ParseNode $n) => $o->setDiscountAmount($n->getStringValue()),
            'discountAppliedBeforeTax' => fn(ParseNode $n) => $o->setDiscountAppliedBeforeTax($n->getBooleanValue()),
            'dueDate' => fn(ParseNode $n) => $o->setDueDate($n->getDateValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'invoiceDate' => fn(ParseNode $n) => $o->setInvoiceDate($n->getDateValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'payToAddress' => fn(ParseNode $n) => $o->setPayToAddress($n->getObjectValue([PostalAddressType::class, 'createFromDiscriminatorValue'])),
            'payToContact' => fn(ParseNode $n) => $o->setPayToContact($n->getStringValue()),
            'payToName' => fn(ParseNode $n) => $o->setPayToName($n->getStringValue()),
            'payToVendorId' => fn(ParseNode $n) => $o->setPayToVendorId($n->getStringValue()),
            'payToVendorNumber' => fn(ParseNode $n) => $o->setPayToVendorNumber($n->getStringValue()),
            'pricesIncludeTax' => fn(ParseNode $n) => $o->setPricesIncludeTax($n->getBooleanValue()),
            'purchaseInvoiceLines' => fn(ParseNode $n) => $o->setPurchaseInvoiceLines($n->getCollectionOfObjectValues([PurchaseInvoiceLine::class, 'createFromDiscriminatorValue'])),
            'shipToAddress' => fn(ParseNode $n) => $o->setShipToAddress($n->getObjectValue([PostalAddressType::class, 'createFromDiscriminatorValue'])),
            'shipToContact' => fn(ParseNode $n) => $o->setShipToContact($n->getStringValue()),
            'shipToName' => fn(ParseNode $n) => $o->setShipToName($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'totalAmountExcludingTax' => fn(ParseNode $n) => $o->setTotalAmountExcludingTax($n->getStringValue()),
            'totalAmountIncludingTax' => fn(ParseNode $n) => $o->setTotalAmountIncludingTax($n->getStringValue()),
            'totalTaxAmount' => fn(ParseNode $n) => $o->setTotalTaxAmount($n->getStringValue()),
            'vendor' => fn(ParseNode $n) => $o->setVendor($n->getObjectValue([Vendor::class, 'createFromDiscriminatorValue'])),
            'vendorId' => fn(ParseNode $n) => $o->setVendorId($n->getStringValue()),
            'vendorInvoiceNumber' => fn(ParseNode $n) => $o->setVendorInvoiceNumber($n->getStringValue()),
            'vendorName' => fn(ParseNode $n) => $o->setVendorName($n->getStringValue()),
            'vendorNumber' => fn(ParseNode $n) => $o->setVendorNumber($n->getStringValue()),
        ];
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
     * Gets the invoiceDate property value. The invoiceDate property
     * @return Date|null
    */
    public function getInvoiceDate(): ?Date {
        $val = $this->getBackingStore()->get('invoiceDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'invoiceDate'");
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
     * Gets the payToAddress property value. The payToAddress property
     * @return PostalAddressType|null
    */
    public function getPayToAddress(): ?PostalAddressType {
        $val = $this->getBackingStore()->get('payToAddress');
        if (is_null($val) || $val instanceof PostalAddressType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'payToAddress'");
    }

    /**
     * Gets the payToContact property value. The payToContact property
     * @return string|null
    */
    public function getPayToContact(): ?string {
        $val = $this->getBackingStore()->get('payToContact');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'payToContact'");
    }

    /**
     * Gets the payToName property value. The payToName property
     * @return string|null
    */
    public function getPayToName(): ?string {
        $val = $this->getBackingStore()->get('payToName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'payToName'");
    }

    /**
     * Gets the payToVendorId property value. The payToVendorId property
     * @return string|null
    */
    public function getPayToVendorId(): ?string {
        $val = $this->getBackingStore()->get('payToVendorId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'payToVendorId'");
    }

    /**
     * Gets the payToVendorNumber property value. The payToVendorNumber property
     * @return string|null
    */
    public function getPayToVendorNumber(): ?string {
        $val = $this->getBackingStore()->get('payToVendorNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'payToVendorNumber'");
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
     * Gets the purchaseInvoiceLines property value. The purchaseInvoiceLines property
     * @return array<PurchaseInvoiceLine>|null
    */
    public function getPurchaseInvoiceLines(): ?array {
        $val = $this->getBackingStore()->get('purchaseInvoiceLines');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PurchaseInvoiceLine::class);
            /** @var array<PurchaseInvoiceLine>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'purchaseInvoiceLines'");
    }

    /**
     * Gets the shipToAddress property value. The shipToAddress property
     * @return PostalAddressType|null
    */
    public function getShipToAddress(): ?PostalAddressType {
        $val = $this->getBackingStore()->get('shipToAddress');
        if (is_null($val) || $val instanceof PostalAddressType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shipToAddress'");
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
     * Gets the vendor property value. The vendor property
     * @return Vendor|null
    */
    public function getVendor(): ?Vendor {
        $val = $this->getBackingStore()->get('vendor');
        if (is_null($val) || $val instanceof Vendor) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vendor'");
    }

    /**
     * Gets the vendorId property value. The vendorId property
     * @return string|null
    */
    public function getVendorId(): ?string {
        $val = $this->getBackingStore()->get('vendorId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vendorId'");
    }

    /**
     * Gets the vendorInvoiceNumber property value. The vendorInvoiceNumber property
     * @return string|null
    */
    public function getVendorInvoiceNumber(): ?string {
        $val = $this->getBackingStore()->get('vendorInvoiceNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vendorInvoiceNumber'");
    }

    /**
     * Gets the vendorName property value. The vendorName property
     * @return string|null
    */
    public function getVendorName(): ?string {
        $val = $this->getBackingStore()->get('vendorName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vendorName'");
    }

    /**
     * Gets the vendorNumber property value. The vendorNumber property
     * @return string|null
    */
    public function getVendorNumber(): ?string {
        $val = $this->getBackingStore()->get('vendorNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vendorNumber'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('buyFromAddress', $this->getBuyFromAddress());
        $writer->writeObjectValue('currency', $this->getCurrency());
        $writer->writeStringValue('currencyCode', $this->getCurrencyCode());
        $writer->writeStringValue('currencyId', $this->getCurrencyId());
        $writer->writeStringValue('discountAmount', $this->getDiscountAmount());
        $writer->writeBooleanValue('discountAppliedBeforeTax', $this->getDiscountAppliedBeforeTax());
        $writer->writeDateValue('dueDate', $this->getDueDate());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateValue('invoiceDate', $this->getInvoiceDate());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('payToAddress', $this->getPayToAddress());
        $writer->writeStringValue('payToContact', $this->getPayToContact());
        $writer->writeStringValue('payToName', $this->getPayToName());
        $writer->writeStringValue('payToVendorId', $this->getPayToVendorId());
        $writer->writeStringValue('payToVendorNumber', $this->getPayToVendorNumber());
        $writer->writeBooleanValue('pricesIncludeTax', $this->getPricesIncludeTax());
        $writer->writeCollectionOfObjectValues('purchaseInvoiceLines', $this->getPurchaseInvoiceLines());
        $writer->writeObjectValue('shipToAddress', $this->getShipToAddress());
        $writer->writeStringValue('shipToContact', $this->getShipToContact());
        $writer->writeStringValue('shipToName', $this->getShipToName());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('totalAmountExcludingTax', $this->getTotalAmountExcludingTax());
        $writer->writeStringValue('totalAmountIncludingTax', $this->getTotalAmountIncludingTax());
        $writer->writeStringValue('totalTaxAmount', $this->getTotalTaxAmount());
        $writer->writeObjectValue('vendor', $this->getVendor());
        $writer->writeStringValue('vendorId', $this->getVendorId());
        $writer->writeStringValue('vendorInvoiceNumber', $this->getVendorInvoiceNumber());
        $writer->writeStringValue('vendorName', $this->getVendorName());
        $writer->writeStringValue('vendorNumber', $this->getVendorNumber());
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
     * Sets the buyFromAddress property value. The buyFromAddress property
     * @param PostalAddressType|null $value Value to set for the buyFromAddress property.
    */
    public function setBuyFromAddress(?PostalAddressType $value): void {
        $this->getBackingStore()->set('buyFromAddress', $value);
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
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the payToAddress property value. The payToAddress property
     * @param PostalAddressType|null $value Value to set for the payToAddress property.
    */
    public function setPayToAddress(?PostalAddressType $value): void {
        $this->getBackingStore()->set('payToAddress', $value);
    }

    /**
     * Sets the payToContact property value. The payToContact property
     * @param string|null $value Value to set for the payToContact property.
    */
    public function setPayToContact(?string $value): void {
        $this->getBackingStore()->set('payToContact', $value);
    }

    /**
     * Sets the payToName property value. The payToName property
     * @param string|null $value Value to set for the payToName property.
    */
    public function setPayToName(?string $value): void {
        $this->getBackingStore()->set('payToName', $value);
    }

    /**
     * Sets the payToVendorId property value. The payToVendorId property
     * @param string|null $value Value to set for the payToVendorId property.
    */
    public function setPayToVendorId(?string $value): void {
        $this->getBackingStore()->set('payToVendorId', $value);
    }

    /**
     * Sets the payToVendorNumber property value. The payToVendorNumber property
     * @param string|null $value Value to set for the payToVendorNumber property.
    */
    public function setPayToVendorNumber(?string $value): void {
        $this->getBackingStore()->set('payToVendorNumber', $value);
    }

    /**
     * Sets the pricesIncludeTax property value. The pricesIncludeTax property
     * @param bool|null $value Value to set for the pricesIncludeTax property.
    */
    public function setPricesIncludeTax(?bool $value): void {
        $this->getBackingStore()->set('pricesIncludeTax', $value);
    }

    /**
     * Sets the purchaseInvoiceLines property value. The purchaseInvoiceLines property
     * @param array<PurchaseInvoiceLine>|null $value Value to set for the purchaseInvoiceLines property.
    */
    public function setPurchaseInvoiceLines(?array $value): void {
        $this->getBackingStore()->set('purchaseInvoiceLines', $value);
    }

    /**
     * Sets the shipToAddress property value. The shipToAddress property
     * @param PostalAddressType|null $value Value to set for the shipToAddress property.
    */
    public function setShipToAddress(?PostalAddressType $value): void {
        $this->getBackingStore()->set('shipToAddress', $value);
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

    /**
     * Sets the vendor property value. The vendor property
     * @param Vendor|null $value Value to set for the vendor property.
    */
    public function setVendor(?Vendor $value): void {
        $this->getBackingStore()->set('vendor', $value);
    }

    /**
     * Sets the vendorId property value. The vendorId property
     * @param string|null $value Value to set for the vendorId property.
    */
    public function setVendorId(?string $value): void {
        $this->getBackingStore()->set('vendorId', $value);
    }

    /**
     * Sets the vendorInvoiceNumber property value. The vendorInvoiceNumber property
     * @param string|null $value Value to set for the vendorInvoiceNumber property.
    */
    public function setVendorInvoiceNumber(?string $value): void {
        $this->getBackingStore()->set('vendorInvoiceNumber', $value);
    }

    /**
     * Sets the vendorName property value. The vendorName property
     * @param string|null $value Value to set for the vendorName property.
    */
    public function setVendorName(?string $value): void {
        $this->getBackingStore()->set('vendorName', $value);
    }

    /**
     * Sets the vendorNumber property value. The vendorNumber property
     * @param string|null $value Value to set for the vendorNumber property.
    */
    public function setVendorNumber(?string $value): void {
        $this->getBackingStore()->set('vendorNumber', $value);
    }

}
