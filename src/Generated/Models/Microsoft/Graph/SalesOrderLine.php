<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class SalesOrderLine extends Entity 
{
    /** @var Account|null $account  */
    private ?Account $account = null;
    
    /** @var string|null $accountId  */
    private ?string $accountId = null;
    
    /** @var float|null $amountExcludingTax  */
    private ?float $amountExcludingTax = null;
    
    /** @var float|null $amountIncludingTax  */
    private ?float $amountIncludingTax = null;
    
    /** @var string|null $description  */
    private ?string $description = null;
    
    /** @var float|null $discountAmount  */
    private ?float $discountAmount = null;
    
    /** @var bool|null $discountAppliedBeforeTax  */
    private ?bool $discountAppliedBeforeTax = null;
    
    /** @var float|null $discountPercent  */
    private ?float $discountPercent = null;
    
    /** @var string|null $documentId  */
    private ?string $documentId = null;
    
    /** @var float|null $invoiceDiscountAllocation  */
    private ?float $invoiceDiscountAllocation = null;
    
    /** @var float|null $invoicedQuantity  */
    private ?float $invoicedQuantity = null;
    
    /** @var float|null $invoiceQuantity  */
    private ?float $invoiceQuantity = null;
    
    /** @var Item|null $item  */
    private ?Item $item = null;
    
    /** @var string|null $itemId  */
    private ?string $itemId = null;
    
    /** @var string|null $lineType  */
    private ?string $lineType = null;
    
    /** @var float|null $netAmount  */
    private ?float $netAmount = null;
    
    /** @var float|null $netAmountIncludingTax  */
    private ?float $netAmountIncludingTax = null;
    
    /** @var float|null $netTaxAmount  */
    private ?float $netTaxAmount = null;
    
    /** @var float|null $quantity  */
    private ?float $quantity = null;
    
    /** @var int|null $sequence  */
    private ?int $sequence = null;
    
    /** @var Date|null $shipmentDate  */
    private ?Date $shipmentDate = null;
    
    /** @var float|null $shippedQuantity  */
    private ?float $shippedQuantity = null;
    
    /** @var float|null $shipQuantity  */
    private ?float $shipQuantity = null;
    
    /** @var string|null $taxCode  */
    private ?string $taxCode = null;
    
    /** @var float|null $taxPercent  */
    private ?float $taxPercent = null;
    
    /** @var float|null $totalTaxAmount  */
    private ?float $totalTaxAmount = null;
    
    /** @var string|null $unitOfMeasureId  */
    private ?string $unitOfMeasureId = null;
    
    /** @var float|null $unitPrice  */
    private ?float $unitPrice = null;
    
    /**
     * Instantiates a new salesOrderLine and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SalesOrderLine
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SalesOrderLine {
        return new SalesOrderLine();
    }

    /**
     * Gets the account property value. 
     * @return Account|null
    */
    public function getAccount(): ?Account {
        return $this->account;
    }

    /**
     * Gets the accountId property value. 
     * @return string|null
    */
    public function getAccountId(): ?string {
        return $this->accountId;
    }

    /**
     * Gets the amountExcludingTax property value. 
     * @return float|null
    */
    public function getAmountExcludingTax(): ?float {
        return $this->amountExcludingTax;
    }

    /**
     * Gets the amountIncludingTax property value. 
     * @return float|null
    */
    public function getAmountIncludingTax(): ?float {
        return $this->amountIncludingTax;
    }

    /**
     * Gets the description property value. 
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
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
     * Gets the discountPercent property value. 
     * @return float|null
    */
    public function getDiscountPercent(): ?float {
        return $this->discountPercent;
    }

    /**
     * Gets the documentId property value. 
     * @return string|null
    */
    public function getDocumentId(): ?string {
        return $this->documentId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'account' => function (self $o, ParseNode $n) { $o->setAccount($n->getObjectValue(Account::class)); },
            'accountId' => function (self $o, ParseNode $n) { $o->setAccountId($n->getStringValue()); },
            'amountExcludingTax' => function (self $o, ParseNode $n) { $o->setAmountExcludingTax($n->getFloatValue()); },
            'amountIncludingTax' => function (self $o, ParseNode $n) { $o->setAmountIncludingTax($n->getFloatValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'discountAmount' => function (self $o, ParseNode $n) { $o->setDiscountAmount($n->getFloatValue()); },
            'discountAppliedBeforeTax' => function (self $o, ParseNode $n) { $o->setDiscountAppliedBeforeTax($n->getBooleanValue()); },
            'discountPercent' => function (self $o, ParseNode $n) { $o->setDiscountPercent($n->getFloatValue()); },
            'documentId' => function (self $o, ParseNode $n) { $o->setDocumentId($n->getStringValue()); },
            'invoiceDiscountAllocation' => function (self $o, ParseNode $n) { $o->setInvoiceDiscountAllocation($n->getFloatValue()); },
            'invoicedQuantity' => function (self $o, ParseNode $n) { $o->setInvoicedQuantity($n->getFloatValue()); },
            'invoiceQuantity' => function (self $o, ParseNode $n) { $o->setInvoiceQuantity($n->getFloatValue()); },
            'item' => function (self $o, ParseNode $n) { $o->setItem($n->getObjectValue(Item::class)); },
            'itemId' => function (self $o, ParseNode $n) { $o->setItemId($n->getStringValue()); },
            'lineType' => function (self $o, ParseNode $n) { $o->setLineType($n->getStringValue()); },
            'netAmount' => function (self $o, ParseNode $n) { $o->setNetAmount($n->getFloatValue()); },
            'netAmountIncludingTax' => function (self $o, ParseNode $n) { $o->setNetAmountIncludingTax($n->getFloatValue()); },
            'netTaxAmount' => function (self $o, ParseNode $n) { $o->setNetTaxAmount($n->getFloatValue()); },
            'quantity' => function (self $o, ParseNode $n) { $o->setQuantity($n->getFloatValue()); },
            'sequence' => function (self $o, ParseNode $n) { $o->setSequence($n->getIntegerValue()); },
            'shipmentDate' => function (self $o, ParseNode $n) { $o->setShipmentDate($n->getDateValue()); },
            'shippedQuantity' => function (self $o, ParseNode $n) { $o->setShippedQuantity($n->getFloatValue()); },
            'shipQuantity' => function (self $o, ParseNode $n) { $o->setShipQuantity($n->getFloatValue()); },
            'taxCode' => function (self $o, ParseNode $n) { $o->setTaxCode($n->getStringValue()); },
            'taxPercent' => function (self $o, ParseNode $n) { $o->setTaxPercent($n->getFloatValue()); },
            'totalTaxAmount' => function (self $o, ParseNode $n) { $o->setTotalTaxAmount($n->getFloatValue()); },
            'unitOfMeasureId' => function (self $o, ParseNode $n) { $o->setUnitOfMeasureId($n->getStringValue()); },
            'unitPrice' => function (self $o, ParseNode $n) { $o->setUnitPrice($n->getFloatValue()); },
        ]);
    }

    /**
     * Gets the invoiceDiscountAllocation property value. 
     * @return float|null
    */
    public function getInvoiceDiscountAllocation(): ?float {
        return $this->invoiceDiscountAllocation;
    }

    /**
     * Gets the invoicedQuantity property value. 
     * @return float|null
    */
    public function getInvoicedQuantity(): ?float {
        return $this->invoicedQuantity;
    }

    /**
     * Gets the invoiceQuantity property value. 
     * @return float|null
    */
    public function getInvoiceQuantity(): ?float {
        return $this->invoiceQuantity;
    }

    /**
     * Gets the item property value. 
     * @return Item|null
    */
    public function getItem(): ?Item {
        return $this->item;
    }

    /**
     * Gets the itemId property value. 
     * @return string|null
    */
    public function getItemId(): ?string {
        return $this->itemId;
    }

    /**
     * Gets the lineType property value. 
     * @return string|null
    */
    public function getLineType(): ?string {
        return $this->lineType;
    }

    /**
     * Gets the netAmount property value. 
     * @return float|null
    */
    public function getNetAmount(): ?float {
        return $this->netAmount;
    }

    /**
     * Gets the netAmountIncludingTax property value. 
     * @return float|null
    */
    public function getNetAmountIncludingTax(): ?float {
        return $this->netAmountIncludingTax;
    }

    /**
     * Gets the netTaxAmount property value. 
     * @return float|null
    */
    public function getNetTaxAmount(): ?float {
        return $this->netTaxAmount;
    }

    /**
     * Gets the quantity property value. 
     * @return float|null
    */
    public function getQuantity(): ?float {
        return $this->quantity;
    }

    /**
     * Gets the sequence property value. 
     * @return int|null
    */
    public function getSequence(): ?int {
        return $this->sequence;
    }

    /**
     * Gets the shipmentDate property value. 
     * @return Date|null
    */
    public function getShipmentDate(): ?Date {
        return $this->shipmentDate;
    }

    /**
     * Gets the shippedQuantity property value. 
     * @return float|null
    */
    public function getShippedQuantity(): ?float {
        return $this->shippedQuantity;
    }

    /**
     * Gets the shipQuantity property value. 
     * @return float|null
    */
    public function getShipQuantity(): ?float {
        return $this->shipQuantity;
    }

    /**
     * Gets the taxCode property value. 
     * @return string|null
    */
    public function getTaxCode(): ?string {
        return $this->taxCode;
    }

    /**
     * Gets the taxPercent property value. 
     * @return float|null
    */
    public function getTaxPercent(): ?float {
        return $this->taxPercent;
    }

    /**
     * Gets the totalTaxAmount property value. 
     * @return float|null
    */
    public function getTotalTaxAmount(): ?float {
        return $this->totalTaxAmount;
    }

    /**
     * Gets the unitOfMeasureId property value. 
     * @return string|null
    */
    public function getUnitOfMeasureId(): ?string {
        return $this->unitOfMeasureId;
    }

    /**
     * Gets the unitPrice property value. 
     * @return float|null
    */
    public function getUnitPrice(): ?float {
        return $this->unitPrice;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('account', $this->account);
        $writer->writeStringValue('accountId', $this->accountId);
        $writer->writeFloatValue('amountExcludingTax', $this->amountExcludingTax);
        $writer->writeFloatValue('amountIncludingTax', $this->amountIncludingTax);
        $writer->writeStringValue('description', $this->description);
        $writer->writeFloatValue('discountAmount', $this->discountAmount);
        $writer->writeBooleanValue('discountAppliedBeforeTax', $this->discountAppliedBeforeTax);
        $writer->writeFloatValue('discountPercent', $this->discountPercent);
        $writer->writeStringValue('documentId', $this->documentId);
        $writer->writeFloatValue('invoiceDiscountAllocation', $this->invoiceDiscountAllocation);
        $writer->writeFloatValue('invoicedQuantity', $this->invoicedQuantity);
        $writer->writeFloatValue('invoiceQuantity', $this->invoiceQuantity);
        $writer->writeObjectValue('item', $this->item);
        $writer->writeStringValue('itemId', $this->itemId);
        $writer->writeStringValue('lineType', $this->lineType);
        $writer->writeFloatValue('netAmount', $this->netAmount);
        $writer->writeFloatValue('netAmountIncludingTax', $this->netAmountIncludingTax);
        $writer->writeFloatValue('netTaxAmount', $this->netTaxAmount);
        $writer->writeFloatValue('quantity', $this->quantity);
        $writer->writeIntegerValue('sequence', $this->sequence);
        $writer->writeDateValue('shipmentDate', $this->shipmentDate);
        $writer->writeFloatValue('shippedQuantity', $this->shippedQuantity);
        $writer->writeFloatValue('shipQuantity', $this->shipQuantity);
        $writer->writeStringValue('taxCode', $this->taxCode);
        $writer->writeFloatValue('taxPercent', $this->taxPercent);
        $writer->writeFloatValue('totalTaxAmount', $this->totalTaxAmount);
        $writer->writeStringValue('unitOfMeasureId', $this->unitOfMeasureId);
        $writer->writeFloatValue('unitPrice', $this->unitPrice);
    }

    /**
     * Sets the account property value. 
     *  @param Account|null $value Value to set for the account property.
    */
    public function setAccount(?Account $value ): void {
        $this->account = $value;
    }

    /**
     * Sets the accountId property value. 
     *  @param string|null $value Value to set for the accountId property.
    */
    public function setAccountId(?string $value ): void {
        $this->accountId = $value;
    }

    /**
     * Sets the amountExcludingTax property value. 
     *  @param float|null $value Value to set for the amountExcludingTax property.
    */
    public function setAmountExcludingTax(?float $value ): void {
        $this->amountExcludingTax = $value;
    }

    /**
     * Sets the amountIncludingTax property value. 
     *  @param float|null $value Value to set for the amountIncludingTax property.
    */
    public function setAmountIncludingTax(?float $value ): void {
        $this->amountIncludingTax = $value;
    }

    /**
     * Sets the description property value. 
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
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
     * Sets the discountPercent property value. 
     *  @param float|null $value Value to set for the discountPercent property.
    */
    public function setDiscountPercent(?float $value ): void {
        $this->discountPercent = $value;
    }

    /**
     * Sets the documentId property value. 
     *  @param string|null $value Value to set for the documentId property.
    */
    public function setDocumentId(?string $value ): void {
        $this->documentId = $value;
    }

    /**
     * Sets the invoiceDiscountAllocation property value. 
     *  @param float|null $value Value to set for the invoiceDiscountAllocation property.
    */
    public function setInvoiceDiscountAllocation(?float $value ): void {
        $this->invoiceDiscountAllocation = $value;
    }

    /**
     * Sets the invoicedQuantity property value. 
     *  @param float|null $value Value to set for the invoicedQuantity property.
    */
    public function setInvoicedQuantity(?float $value ): void {
        $this->invoicedQuantity = $value;
    }

    /**
     * Sets the invoiceQuantity property value. 
     *  @param float|null $value Value to set for the invoiceQuantity property.
    */
    public function setInvoiceQuantity(?float $value ): void {
        $this->invoiceQuantity = $value;
    }

    /**
     * Sets the item property value. 
     *  @param Item|null $value Value to set for the item property.
    */
    public function setItem(?Item $value ): void {
        $this->item = $value;
    }

    /**
     * Sets the itemId property value. 
     *  @param string|null $value Value to set for the itemId property.
    */
    public function setItemId(?string $value ): void {
        $this->itemId = $value;
    }

    /**
     * Sets the lineType property value. 
     *  @param string|null $value Value to set for the lineType property.
    */
    public function setLineType(?string $value ): void {
        $this->lineType = $value;
    }

    /**
     * Sets the netAmount property value. 
     *  @param float|null $value Value to set for the netAmount property.
    */
    public function setNetAmount(?float $value ): void {
        $this->netAmount = $value;
    }

    /**
     * Sets the netAmountIncludingTax property value. 
     *  @param float|null $value Value to set for the netAmountIncludingTax property.
    */
    public function setNetAmountIncludingTax(?float $value ): void {
        $this->netAmountIncludingTax = $value;
    }

    /**
     * Sets the netTaxAmount property value. 
     *  @param float|null $value Value to set for the netTaxAmount property.
    */
    public function setNetTaxAmount(?float $value ): void {
        $this->netTaxAmount = $value;
    }

    /**
     * Sets the quantity property value. 
     *  @param float|null $value Value to set for the quantity property.
    */
    public function setQuantity(?float $value ): void {
        $this->quantity = $value;
    }

    /**
     * Sets the sequence property value. 
     *  @param int|null $value Value to set for the sequence property.
    */
    public function setSequence(?int $value ): void {
        $this->sequence = $value;
    }

    /**
     * Sets the shipmentDate property value. 
     *  @param Date|null $value Value to set for the shipmentDate property.
    */
    public function setShipmentDate(?Date $value ): void {
        $this->shipmentDate = $value;
    }

    /**
     * Sets the shippedQuantity property value. 
     *  @param float|null $value Value to set for the shippedQuantity property.
    */
    public function setShippedQuantity(?float $value ): void {
        $this->shippedQuantity = $value;
    }

    /**
     * Sets the shipQuantity property value. 
     *  @param float|null $value Value to set for the shipQuantity property.
    */
    public function setShipQuantity(?float $value ): void {
        $this->shipQuantity = $value;
    }

    /**
     * Sets the taxCode property value. 
     *  @param string|null $value Value to set for the taxCode property.
    */
    public function setTaxCode(?string $value ): void {
        $this->taxCode = $value;
    }

    /**
     * Sets the taxPercent property value. 
     *  @param float|null $value Value to set for the taxPercent property.
    */
    public function setTaxPercent(?float $value ): void {
        $this->taxPercent = $value;
    }

    /**
     * Sets the totalTaxAmount property value. 
     *  @param float|null $value Value to set for the totalTaxAmount property.
    */
    public function setTotalTaxAmount(?float $value ): void {
        $this->totalTaxAmount = $value;
    }

    /**
     * Sets the unitOfMeasureId property value. 
     *  @param string|null $value Value to set for the unitOfMeasureId property.
    */
    public function setUnitOfMeasureId(?string $value ): void {
        $this->unitOfMeasureId = $value;
    }

    /**
     * Sets the unitPrice property value. 
     *  @param float|null $value Value to set for the unitPrice property.
    */
    public function setUnitPrice(?float $value ): void {
        $this->unitPrice = $value;
    }

}
