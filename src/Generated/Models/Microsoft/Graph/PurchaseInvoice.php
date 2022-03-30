<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class PurchaseInvoice extends Entity 
{
    /** @var PostalAddressType|null $buyFromAddress  */
    private ?PostalAddressType $buyFromAddress = null;
    
    /** @var Currency|null $currency  */
    private ?Currency $currency = null;
    
    /** @var string|null $currencyCode  */
    private ?string $currencyCode = null;
    
    /** @var string|null $currencyId  */
    private ?string $currencyId = null;
    
    /** @var float|null $discountAmount  */
    private ?float $discountAmount = null;
    
    /** @var bool|null $discountAppliedBeforeTax  */
    private ?bool $discountAppliedBeforeTax = null;
    
    /** @var Date|null $dueDate  */
    private ?Date $dueDate = null;
    
    /** @var Date|null $invoiceDate  */
    private ?Date $invoiceDate = null;
    
    /** @var DateTime|null $lastModifiedDateTime  */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var string|null $number  */
    private ?string $number = null;
    
    /** @var PostalAddressType|null $payToAddress  */
    private ?PostalAddressType $payToAddress = null;
    
    /** @var string|null $payToContact  */
    private ?string $payToContact = null;
    
    /** @var string|null $payToName  */
    private ?string $payToName = null;
    
    /** @var string|null $payToVendorId  */
    private ?string $payToVendorId = null;
    
    /** @var string|null $payToVendorNumber  */
    private ?string $payToVendorNumber = null;
    
    /** @var bool|null $pricesIncludeTax  */
    private ?bool $pricesIncludeTax = null;
    
    /** @var array<PurchaseInvoiceLine>|null $purchaseInvoiceLines  */
    private ?array $purchaseInvoiceLines = null;
    
    /** @var PostalAddressType|null $shipToAddress  */
    private ?PostalAddressType $shipToAddress = null;
    
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
    
    /** @var Vendor|null $vendor  */
    private ?Vendor $vendor = null;
    
    /** @var string|null $vendorId  */
    private ?string $vendorId = null;
    
    /** @var string|null $vendorInvoiceNumber  */
    private ?string $vendorInvoiceNumber = null;
    
    /** @var string|null $vendorName  */
    private ?string $vendorName = null;
    
    /** @var string|null $vendorNumber  */
    private ?string $vendorNumber = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): PurchaseInvoice {
        return new PurchaseInvoice();
    }

    /**
     * Gets the buyFromAddress property value. 
     * @return PostalAddressType|null
    */
    public function getBuyFromAddress(): ?PostalAddressType {
        return $this->buyFromAddress;
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
     * Gets the discountAmount property value. 
     * @return float|null
    */
    public function getDiscountAmount(): ?float {
        return $this->discountAmount;
    }

    /**
     * Gets the discountAppliedBeforeTax property value. 
     * @return bool|null
    */
    public function getDiscountAppliedBeforeTax(): ?bool {
        return $this->discountAppliedBeforeTax;
    }

    /**
     * Gets the dueDate property value. 
     * @return Date|null
    */
    public function getDueDate(): ?Date {
        return $this->dueDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'buyFromAddress' => function (self $o, ParseNode $n) { $o->setBuyFromAddress($n->getObjectValue(PostalAddressType::class)); },
            'currency' => function (self $o, ParseNode $n) { $o->setCurrency($n->getObjectValue(Currency::class)); },
            'currencyCode' => function (self $o, ParseNode $n) { $o->setCurrencyCode($n->getStringValue()); },
            'currencyId' => function (self $o, ParseNode $n) { $o->setCurrencyId($n->getStringValue()); },
            'discountAmount' => function (self $o, ParseNode $n) { $o->setDiscountAmount($n->getFloatValue()); },
            'discountAppliedBeforeTax' => function (self $o, ParseNode $n) { $o->setDiscountAppliedBeforeTax($n->getBooleanValue()); },
            'dueDate' => function (self $o, ParseNode $n) { $o->setDueDate($n->getDateValue()); },
            'invoiceDate' => function (self $o, ParseNode $n) { $o->setInvoiceDate($n->getDateValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'number' => function (self $o, ParseNode $n) { $o->setNumber($n->getStringValue()); },
            'payToAddress' => function (self $o, ParseNode $n) { $o->setPayToAddress($n->getObjectValue(PostalAddressType::class)); },
            'payToContact' => function (self $o, ParseNode $n) { $o->setPayToContact($n->getStringValue()); },
            'payToName' => function (self $o, ParseNode $n) { $o->setPayToName($n->getStringValue()); },
            'payToVendorId' => function (self $o, ParseNode $n) { $o->setPayToVendorId($n->getStringValue()); },
            'payToVendorNumber' => function (self $o, ParseNode $n) { $o->setPayToVendorNumber($n->getStringValue()); },
            'pricesIncludeTax' => function (self $o, ParseNode $n) { $o->setPricesIncludeTax($n->getBooleanValue()); },
            'purchaseInvoiceLines' => function (self $o, ParseNode $n) { $o->setPurchaseInvoiceLines($n->getCollectionOfObjectValues(PurchaseInvoiceLine::class)); },
            'shipToAddress' => function (self $o, ParseNode $n) { $o->setShipToAddress($n->getObjectValue(PostalAddressType::class)); },
            'shipToContact' => function (self $o, ParseNode $n) { $o->setShipToContact($n->getStringValue()); },
            'shipToName' => function (self $o, ParseNode $n) { $o->setShipToName($n->getStringValue()); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getStringValue()); },
            'totalAmountExcludingTax' => function (self $o, ParseNode $n) { $o->setTotalAmountExcludingTax($n->getFloatValue()); },
            'totalAmountIncludingTax' => function (self $o, ParseNode $n) { $o->setTotalAmountIncludingTax($n->getFloatValue()); },
            'totalTaxAmount' => function (self $o, ParseNode $n) { $o->setTotalTaxAmount($n->getFloatValue()); },
            'vendor' => function (self $o, ParseNode $n) { $o->setVendor($n->getObjectValue(Vendor::class)); },
            'vendorId' => function (self $o, ParseNode $n) { $o->setVendorId($n->getStringValue()); },
            'vendorInvoiceNumber' => function (self $o, ParseNode $n) { $o->setVendorInvoiceNumber($n->getStringValue()); },
            'vendorName' => function (self $o, ParseNode $n) { $o->setVendorName($n->getStringValue()); },
            'vendorNumber' => function (self $o, ParseNode $n) { $o->setVendorNumber($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the invoiceDate property value. 
     * @return Date|null
    */
    public function getInvoiceDate(): ?Date {
        return $this->invoiceDate;
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
     * Gets the payToAddress property value. 
     * @return PostalAddressType|null
    */
    public function getPayToAddress(): ?PostalAddressType {
        return $this->payToAddress;
    }

    /**
     * Gets the payToContact property value. 
     * @return string|null
    */
    public function getPayToContact(): ?string {
        return $this->payToContact;
    }

    /**
     * Gets the payToName property value. 
     * @return string|null
    */
    public function getPayToName(): ?string {
        return $this->payToName;
    }

    /**
     * Gets the payToVendorId property value. 
     * @return string|null
    */
    public function getPayToVendorId(): ?string {
        return $this->payToVendorId;
    }

    /**
     * Gets the payToVendorNumber property value. 
     * @return string|null
    */
    public function getPayToVendorNumber(): ?string {
        return $this->payToVendorNumber;
    }

    /**
     * Gets the pricesIncludeTax property value. 
     * @return bool|null
    */
    public function getPricesIncludeTax(): ?bool {
        return $this->pricesIncludeTax;
    }

    /**
     * Gets the purchaseInvoiceLines property value. 
     * @return array<PurchaseInvoiceLine>|null
    */
    public function getPurchaseInvoiceLines(): ?array {
        return $this->purchaseInvoiceLines;
    }

    /**
     * Gets the shipToAddress property value. 
     * @return PostalAddressType|null
    */
    public function getShipToAddress(): ?PostalAddressType {
        return $this->shipToAddress;
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
     * Gets the vendor property value. 
     * @return Vendor|null
    */
    public function getVendor(): ?Vendor {
        return $this->vendor;
    }

    /**
     * Gets the vendorId property value. 
     * @return string|null
    */
    public function getVendorId(): ?string {
        return $this->vendorId;
    }

    /**
     * Gets the vendorInvoiceNumber property value. 
     * @return string|null
    */
    public function getVendorInvoiceNumber(): ?string {
        return $this->vendorInvoiceNumber;
    }

    /**
     * Gets the vendorName property value. 
     * @return string|null
    */
    public function getVendorName(): ?string {
        return $this->vendorName;
    }

    /**
     * Gets the vendorNumber property value. 
     * @return string|null
    */
    public function getVendorNumber(): ?string {
        return $this->vendorNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('buyFromAddress', $this->buyFromAddress);
        $writer->writeObjectValue('currency', $this->currency);
        $writer->writeStringValue('currencyCode', $this->currencyCode);
        $writer->writeStringValue('currencyId', $this->currencyId);
        $writer->writeFloatValue('discountAmount', $this->discountAmount);
        $writer->writeBooleanValue('discountAppliedBeforeTax', $this->discountAppliedBeforeTax);
        $writer->writeDateValue('dueDate', $this->dueDate);
        $writer->writeDateValue('invoiceDate', $this->invoiceDate);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('number', $this->number);
        $writer->writeObjectValue('payToAddress', $this->payToAddress);
        $writer->writeStringValue('payToContact', $this->payToContact);
        $writer->writeStringValue('payToName', $this->payToName);
        $writer->writeStringValue('payToVendorId', $this->payToVendorId);
        $writer->writeStringValue('payToVendorNumber', $this->payToVendorNumber);
        $writer->writeBooleanValue('pricesIncludeTax', $this->pricesIncludeTax);
        $writer->writeCollectionOfObjectValues('purchaseInvoiceLines', $this->purchaseInvoiceLines);
        $writer->writeObjectValue('shipToAddress', $this->shipToAddress);
        $writer->writeStringValue('shipToContact', $this->shipToContact);
        $writer->writeStringValue('shipToName', $this->shipToName);
        $writer->writeStringValue('status', $this->status);
        $writer->writeFloatValue('totalAmountExcludingTax', $this->totalAmountExcludingTax);
        $writer->writeFloatValue('totalAmountIncludingTax', $this->totalAmountIncludingTax);
        $writer->writeFloatValue('totalTaxAmount', $this->totalTaxAmount);
        $writer->writeObjectValue('vendor', $this->vendor);
        $writer->writeStringValue('vendorId', $this->vendorId);
        $writer->writeStringValue('vendorInvoiceNumber', $this->vendorInvoiceNumber);
        $writer->writeStringValue('vendorName', $this->vendorName);
        $writer->writeStringValue('vendorNumber', $this->vendorNumber);
    }

    /**
     * Sets the buyFromAddress property value. 
     *  @param PostalAddressType|null $value Value to set for the buyFromAddress property.
    */
    public function setBuyFromAddress(?PostalAddressType $value ): void {
        $this->buyFromAddress = $value;
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
     * Sets the discountAmount property value. 
     *  @param float|null $value Value to set for the discountAmount property.
    */
    public function setDiscountAmount(?float $value ): void {
        $this->discountAmount = $value;
    }

    /**
     * Sets the discountAppliedBeforeTax property value. 
     *  @param bool|null $value Value to set for the discountAppliedBeforeTax property.
    */
    public function setDiscountAppliedBeforeTax(?bool $value ): void {
        $this->discountAppliedBeforeTax = $value;
    }

    /**
     * Sets the dueDate property value. 
     *  @param Date|null $value Value to set for the dueDate property.
    */
    public function setDueDate(?Date $value ): void {
        $this->dueDate = $value;
    }

    /**
     * Sets the invoiceDate property value. 
     *  @param Date|null $value Value to set for the invoiceDate property.
    */
    public function setInvoiceDate(?Date $value ): void {
        $this->invoiceDate = $value;
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
     * Sets the payToAddress property value. 
     *  @param PostalAddressType|null $value Value to set for the payToAddress property.
    */
    public function setPayToAddress(?PostalAddressType $value ): void {
        $this->payToAddress = $value;
    }

    /**
     * Sets the payToContact property value. 
     *  @param string|null $value Value to set for the payToContact property.
    */
    public function setPayToContact(?string $value ): void {
        $this->payToContact = $value;
    }

    /**
     * Sets the payToName property value. 
     *  @param string|null $value Value to set for the payToName property.
    */
    public function setPayToName(?string $value ): void {
        $this->payToName = $value;
    }

    /**
     * Sets the payToVendorId property value. 
     *  @param string|null $value Value to set for the payToVendorId property.
    */
    public function setPayToVendorId(?string $value ): void {
        $this->payToVendorId = $value;
    }

    /**
     * Sets the payToVendorNumber property value. 
     *  @param string|null $value Value to set for the payToVendorNumber property.
    */
    public function setPayToVendorNumber(?string $value ): void {
        $this->payToVendorNumber = $value;
    }

    /**
     * Sets the pricesIncludeTax property value. 
     *  @param bool|null $value Value to set for the pricesIncludeTax property.
    */
    public function setPricesIncludeTax(?bool $value ): void {
        $this->pricesIncludeTax = $value;
    }

    /**
     * Sets the purchaseInvoiceLines property value. 
     *  @param array<PurchaseInvoiceLine>|null $value Value to set for the purchaseInvoiceLines property.
    */
    public function setPurchaseInvoiceLines(?array $value ): void {
        $this->purchaseInvoiceLines = $value;
    }

    /**
     * Sets the shipToAddress property value. 
     *  @param PostalAddressType|null $value Value to set for the shipToAddress property.
    */
    public function setShipToAddress(?PostalAddressType $value ): void {
        $this->shipToAddress = $value;
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
     * Sets the vendor property value. 
     *  @param Vendor|null $value Value to set for the vendor property.
    */
    public function setVendor(?Vendor $value ): void {
        $this->vendor = $value;
    }

    /**
     * Sets the vendorId property value. 
     *  @param string|null $value Value to set for the vendorId property.
    */
    public function setVendorId(?string $value ): void {
        $this->vendorId = $value;
    }

    /**
     * Sets the vendorInvoiceNumber property value. 
     *  @param string|null $value Value to set for the vendorInvoiceNumber property.
    */
    public function setVendorInvoiceNumber(?string $value ): void {
        $this->vendorInvoiceNumber = $value;
    }

    /**
     * Sets the vendorName property value. 
     *  @param string|null $value Value to set for the vendorName property.
    */
    public function setVendorName(?string $value ): void {
        $this->vendorName = $value;
    }

    /**
     * Sets the vendorNumber property value. 
     *  @param string|null $value Value to set for the vendorNumber property.
    */
    public function setVendorNumber(?string $value ): void {
        $this->vendorNumber = $value;
    }

}
