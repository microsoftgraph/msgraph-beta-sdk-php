<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class PurchaseInvoice extends Entity 
{
    /** @var PostalAddressType|null $buyFromAddress The buyFromAddress property */
    private ?PostalAddressType $buyFromAddress = null;
    
    /** @var Currency|null $currency The currency property */
    private ?Currency $currency = null;
    
    /** @var string|null $currencyCode The currencyCode property */
    private ?string $currencyCode = null;
    
    /** @var string|null $currencyId The currencyId property */
    private ?string $currencyId = null;
    
    /** @var float|null $discountAmount The discountAmount property */
    private ?float $discountAmount = null;
    
    /** @var bool|null $discountAppliedBeforeTax The discountAppliedBeforeTax property */
    private ?bool $discountAppliedBeforeTax = null;
    
    /** @var Date|null $dueDate The dueDate property */
    private ?Date $dueDate = null;
    
    /** @var Date|null $invoiceDate The invoiceDate property */
    private ?Date $invoiceDate = null;
    
    /** @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var string|null $number The number property */
    private ?string $number = null;
    
    /** @var PostalAddressType|null $payToAddress The payToAddress property */
    private ?PostalAddressType $payToAddress = null;
    
    /** @var string|null $payToContact The payToContact property */
    private ?string $payToContact = null;
    
    /** @var string|null $payToName The payToName property */
    private ?string $payToName = null;
    
    /** @var string|null $payToVendorId The payToVendorId property */
    private ?string $payToVendorId = null;
    
    /** @var string|null $payToVendorNumber The payToVendorNumber property */
    private ?string $payToVendorNumber = null;
    
    /** @var bool|null $pricesIncludeTax The pricesIncludeTax property */
    private ?bool $pricesIncludeTax = null;
    
    /** @var array<PurchaseInvoiceLine>|null $purchaseInvoiceLines The purchaseInvoiceLines property */
    private ?array $purchaseInvoiceLines = null;
    
    /** @var PostalAddressType|null $shipToAddress The shipToAddress property */
    private ?PostalAddressType $shipToAddress = null;
    
    /** @var string|null $shipToContact The shipToContact property */
    private ?string $shipToContact = null;
    
    /** @var string|null $shipToName The shipToName property */
    private ?string $shipToName = null;
    
    /** @var string|null $status The status property */
    private ?string $status = null;
    
    /** @var float|null $totalAmountExcludingTax The totalAmountExcludingTax property */
    private ?float $totalAmountExcludingTax = null;
    
    /** @var float|null $totalAmountIncludingTax The totalAmountIncludingTax property */
    private ?float $totalAmountIncludingTax = null;
    
    /** @var float|null $totalTaxAmount The totalTaxAmount property */
    private ?float $totalTaxAmount = null;
    
    /** @var Vendor|null $vendor The vendor property */
    private ?Vendor $vendor = null;
    
    /** @var string|null $vendorId The vendorId property */
    private ?string $vendorId = null;
    
    /** @var string|null $vendorInvoiceNumber The vendorInvoiceNumber property */
    private ?string $vendorInvoiceNumber = null;
    
    /** @var string|null $vendorName The vendorName property */
    private ?string $vendorName = null;
    
    /** @var string|null $vendorNumber The vendorNumber property */
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
     * Gets the buyFromAddress property value. The buyFromAddress property
     * @return PostalAddressType|null
    */
    public function getBuyFromAddress(): ?PostalAddressType {
        return $this->buyFromAddress;
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
     * Gets the discountAmount property value. The discountAmount property
     * @return float|null
    */
    public function getDiscountAmount(): ?float {
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
     * Gets the dueDate property value. The dueDate property
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
     * Gets the invoiceDate property value. The invoiceDate property
     * @return Date|null
    */
    public function getInvoiceDate(): ?Date {
        return $this->invoiceDate;
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
     * Gets the payToAddress property value. The payToAddress property
     * @return PostalAddressType|null
    */
    public function getPayToAddress(): ?PostalAddressType {
        return $this->payToAddress;
    }

    /**
     * Gets the payToContact property value. The payToContact property
     * @return string|null
    */
    public function getPayToContact(): ?string {
        return $this->payToContact;
    }

    /**
     * Gets the payToName property value. The payToName property
     * @return string|null
    */
    public function getPayToName(): ?string {
        return $this->payToName;
    }

    /**
     * Gets the payToVendorId property value. The payToVendorId property
     * @return string|null
    */
    public function getPayToVendorId(): ?string {
        return $this->payToVendorId;
    }

    /**
     * Gets the payToVendorNumber property value. The payToVendorNumber property
     * @return string|null
    */
    public function getPayToVendorNumber(): ?string {
        return $this->payToVendorNumber;
    }

    /**
     * Gets the pricesIncludeTax property value. The pricesIncludeTax property
     * @return bool|null
    */
    public function getPricesIncludeTax(): ?bool {
        return $this->pricesIncludeTax;
    }

    /**
     * Gets the purchaseInvoiceLines property value. The purchaseInvoiceLines property
     * @return array<PurchaseInvoiceLine>|null
    */
    public function getPurchaseInvoiceLines(): ?array {
        return $this->purchaseInvoiceLines;
    }

    /**
     * Gets the shipToAddress property value. The shipToAddress property
     * @return PostalAddressType|null
    */
    public function getShipToAddress(): ?PostalAddressType {
        return $this->shipToAddress;
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
     * @return float|null
    */
    public function getTotalAmountExcludingTax(): ?float {
        return $this->totalAmountExcludingTax;
    }

    /**
     * Gets the totalAmountIncludingTax property value. The totalAmountIncludingTax property
     * @return float|null
    */
    public function getTotalAmountIncludingTax(): ?float {
        return $this->totalAmountIncludingTax;
    }

    /**
     * Gets the totalTaxAmount property value. The totalTaxAmount property
     * @return float|null
    */
    public function getTotalTaxAmount(): ?float {
        return $this->totalTaxAmount;
    }

    /**
     * Gets the vendor property value. The vendor property
     * @return Vendor|null
    */
    public function getVendor(): ?Vendor {
        return $this->vendor;
    }

    /**
     * Gets the vendorId property value. The vendorId property
     * @return string|null
    */
    public function getVendorId(): ?string {
        return $this->vendorId;
    }

    /**
     * Gets the vendorInvoiceNumber property value. The vendorInvoiceNumber property
     * @return string|null
    */
    public function getVendorInvoiceNumber(): ?string {
        return $this->vendorInvoiceNumber;
    }

    /**
     * Gets the vendorName property value. The vendorName property
     * @return string|null
    */
    public function getVendorName(): ?string {
        return $this->vendorName;
    }

    /**
     * Gets the vendorNumber property value. The vendorNumber property
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
     * Sets the buyFromAddress property value. The buyFromAddress property
     *  @param PostalAddressType|null $value Value to set for the buyFromAddress property.
    */
    public function setBuyFromAddress(?PostalAddressType $value ): void {
        $this->buyFromAddress = $value;
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
     * Sets the discountAmount property value. The discountAmount property
     *  @param float|null $value Value to set for the discountAmount property.
    */
    public function setDiscountAmount(?float $value ): void {
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
     * Sets the dueDate property value. The dueDate property
     *  @param Date|null $value Value to set for the dueDate property.
    */
    public function setDueDate(?Date $value ): void {
        $this->dueDate = $value;
    }

    /**
     * Sets the invoiceDate property value. The invoiceDate property
     *  @param Date|null $value Value to set for the invoiceDate property.
    */
    public function setInvoiceDate(?Date $value ): void {
        $this->invoiceDate = $value;
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
     * Sets the payToAddress property value. The payToAddress property
     *  @param PostalAddressType|null $value Value to set for the payToAddress property.
    */
    public function setPayToAddress(?PostalAddressType $value ): void {
        $this->payToAddress = $value;
    }

    /**
     * Sets the payToContact property value. The payToContact property
     *  @param string|null $value Value to set for the payToContact property.
    */
    public function setPayToContact(?string $value ): void {
        $this->payToContact = $value;
    }

    /**
     * Sets the payToName property value. The payToName property
     *  @param string|null $value Value to set for the payToName property.
    */
    public function setPayToName(?string $value ): void {
        $this->payToName = $value;
    }

    /**
     * Sets the payToVendorId property value. The payToVendorId property
     *  @param string|null $value Value to set for the payToVendorId property.
    */
    public function setPayToVendorId(?string $value ): void {
        $this->payToVendorId = $value;
    }

    /**
     * Sets the payToVendorNumber property value. The payToVendorNumber property
     *  @param string|null $value Value to set for the payToVendorNumber property.
    */
    public function setPayToVendorNumber(?string $value ): void {
        $this->payToVendorNumber = $value;
    }

    /**
     * Sets the pricesIncludeTax property value. The pricesIncludeTax property
     *  @param bool|null $value Value to set for the pricesIncludeTax property.
    */
    public function setPricesIncludeTax(?bool $value ): void {
        $this->pricesIncludeTax = $value;
    }

    /**
     * Sets the purchaseInvoiceLines property value. The purchaseInvoiceLines property
     *  @param array<PurchaseInvoiceLine>|null $value Value to set for the purchaseInvoiceLines property.
    */
    public function setPurchaseInvoiceLines(?array $value ): void {
        $this->purchaseInvoiceLines = $value;
    }

    /**
     * Sets the shipToAddress property value. The shipToAddress property
     *  @param PostalAddressType|null $value Value to set for the shipToAddress property.
    */
    public function setShipToAddress(?PostalAddressType $value ): void {
        $this->shipToAddress = $value;
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
     *  @param float|null $value Value to set for the totalAmountExcludingTax property.
    */
    public function setTotalAmountExcludingTax(?float $value ): void {
        $this->totalAmountExcludingTax = $value;
    }

    /**
     * Sets the totalAmountIncludingTax property value. The totalAmountIncludingTax property
     *  @param float|null $value Value to set for the totalAmountIncludingTax property.
    */
    public function setTotalAmountIncludingTax(?float $value ): void {
        $this->totalAmountIncludingTax = $value;
    }

    /**
     * Sets the totalTaxAmount property value. The totalTaxAmount property
     *  @param float|null $value Value to set for the totalTaxAmount property.
    */
    public function setTotalTaxAmount(?float $value ): void {
        $this->totalTaxAmount = $value;
    }

    /**
     * Sets the vendor property value. The vendor property
     *  @param Vendor|null $value Value to set for the vendor property.
    */
    public function setVendor(?Vendor $value ): void {
        $this->vendor = $value;
    }

    /**
     * Sets the vendorId property value. The vendorId property
     *  @param string|null $value Value to set for the vendorId property.
    */
    public function setVendorId(?string $value ): void {
        $this->vendorId = $value;
    }

    /**
     * Sets the vendorInvoiceNumber property value. The vendorInvoiceNumber property
     *  @param string|null $value Value to set for the vendorInvoiceNumber property.
    */
    public function setVendorInvoiceNumber(?string $value ): void {
        $this->vendorInvoiceNumber = $value;
    }

    /**
     * Sets the vendorName property value. The vendorName property
     *  @param string|null $value Value to set for the vendorName property.
    */
    public function setVendorName(?string $value ): void {
        $this->vendorName = $value;
    }

    /**
     * Sets the vendorNumber property value. The vendorNumber property
     *  @param string|null $value Value to set for the vendorNumber property.
    */
    public function setVendorNumber(?string $value ): void {
        $this->vendorNumber = $value;
    }

}
