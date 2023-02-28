<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class PurchaseInvoice extends Entity implements Parsable 
{
    /**
     * Instantiates a new purchaseInvoice and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * Gets the buyFromAddress property value. The buyFromAddress property
     * @return PostalAddressType|null
    */
    public function getBuyFromAddress(): ?PostalAddressType {
        return $this->getBackingStore()->get('buyFromAddress');
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'buyFromAddress' => fn(ParseNode $n) => $o->setBuyFromAddress($n->getObjectValue([PostalAddressType::class, 'createFromDiscriminatorValue'])),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getObjectValue([Currency::class, 'createFromDiscriminatorValue'])),
            'currencyCode' => fn(ParseNode $n) => $o->setCurrencyCode($n->getStringValue()),
            'currencyId' => fn(ParseNode $n) => $o->setCurrencyId($n->getStringValue()),
            'discountAmount' => fn(ParseNode $n) => $o->setDiscountAmount($n->getStringValue()),
            'discountAppliedBeforeTax' => fn(ParseNode $n) => $o->setDiscountAppliedBeforeTax($n->getBooleanValue()),
            'dueDate' => fn(ParseNode $n) => $o->setDueDate($n->getDateValue()),
            'invoiceDate' => fn(ParseNode $n) => $o->setInvoiceDate($n->getDateValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
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
        ]);
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
     * Gets the payToAddress property value. The payToAddress property
     * @return PostalAddressType|null
    */
    public function getPayToAddress(): ?PostalAddressType {
        return $this->getBackingStore()->get('payToAddress');
    }

    /**
     * Gets the payToContact property value. The payToContact property
     * @return string|null
    */
    public function getPayToContact(): ?string {
        return $this->getBackingStore()->get('payToContact');
    }

    /**
     * Gets the payToName property value. The payToName property
     * @return string|null
    */
    public function getPayToName(): ?string {
        return $this->getBackingStore()->get('payToName');
    }

    /**
     * Gets the payToVendorId property value. The payToVendorId property
     * @return string|null
    */
    public function getPayToVendorId(): ?string {
        return $this->getBackingStore()->get('payToVendorId');
    }

    /**
     * Gets the payToVendorNumber property value. The payToVendorNumber property
     * @return string|null
    */
    public function getPayToVendorNumber(): ?string {
        return $this->getBackingStore()->get('payToVendorNumber');
    }

    /**
     * Gets the pricesIncludeTax property value. The pricesIncludeTax property
     * @return bool|null
    */
    public function getPricesIncludeTax(): ?bool {
        return $this->getBackingStore()->get('pricesIncludeTax');
    }

    /**
     * Gets the purchaseInvoiceLines property value. The purchaseInvoiceLines property
     * @return array<PurchaseInvoiceLine>|null
    */
    public function getPurchaseInvoiceLines(): ?array {
        return $this->getBackingStore()->get('purchaseInvoiceLines');
    }

    /**
     * Gets the shipToAddress property value. The shipToAddress property
     * @return PostalAddressType|null
    */
    public function getShipToAddress(): ?PostalAddressType {
        return $this->getBackingStore()->get('shipToAddress');
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
     * Gets the vendor property value. The vendor property
     * @return Vendor|null
    */
    public function getVendor(): ?Vendor {
        return $this->getBackingStore()->get('vendor');
    }

    /**
     * Gets the vendorId property value. The vendorId property
     * @return string|null
    */
    public function getVendorId(): ?string {
        return $this->getBackingStore()->get('vendorId');
    }

    /**
     * Gets the vendorInvoiceNumber property value. The vendorInvoiceNumber property
     * @return string|null
    */
    public function getVendorInvoiceNumber(): ?string {
        return $this->getBackingStore()->get('vendorInvoiceNumber');
    }

    /**
     * Gets the vendorName property value. The vendorName property
     * @return string|null
    */
    public function getVendorName(): ?string {
        return $this->getBackingStore()->get('vendorName');
    }

    /**
     * Gets the vendorNumber property value. The vendorNumber property
     * @return string|null
    */
    public function getVendorNumber(): ?string {
        return $this->getBackingStore()->get('vendorNumber');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('buyFromAddress', $this->getBuyFromAddress());
        $writer->writeObjectValue('currency', $this->getCurrency());
        $writer->writeStringValue('currencyCode', $this->getCurrencyCode());
        $writer->writeStringValue('currencyId', $this->getCurrencyId());
        $writer->writeStringValue('discountAmount', $this->getDiscountAmount());
        $writer->writeBooleanValue('discountAppliedBeforeTax', $this->getDiscountAppliedBeforeTax());
        $writer->writeDateValue('dueDate', $this->getDueDate());
        $writer->writeDateValue('invoiceDate', $this->getInvoiceDate());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('number', $this->getNumber());
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
