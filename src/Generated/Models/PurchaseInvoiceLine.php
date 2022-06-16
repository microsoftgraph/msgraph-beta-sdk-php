<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class PurchaseInvoiceLine extends Entity 
{
    /** @var Account|null $account The account property */
    private ?Account $account = null;
    
    /** @var string|null $accountId The accountId property */
    private ?string $accountId = null;
    
    /** @var float|null $amountExcludingTax The amountExcludingTax property */
    private ?float $amountExcludingTax = null;
    
    /** @var float|null $amountIncludingTax The amountIncludingTax property */
    private ?float $amountIncludingTax = null;
    
    /** @var string|null $description The description property */
    private ?string $description = null;
    
    /** @var float|null $discountAmount The discountAmount property */
    private ?float $discountAmount = null;
    
    /** @var bool|null $discountAppliedBeforeTax The discountAppliedBeforeTax property */
    private ?bool $discountAppliedBeforeTax = null;
    
    /** @var float|null $discountPercent The discountPercent property */
    private ?float $discountPercent = null;
    
    /** @var string|null $documentId The documentId property */
    private ?string $documentId = null;
    
    /** @var Date|null $expectedReceiptDate The expectedReceiptDate property */
    private ?Date $expectedReceiptDate = null;
    
    /** @var float|null $invoiceDiscountAllocation The invoiceDiscountAllocation property */
    private ?float $invoiceDiscountAllocation = null;
    
    /** @var Item|null $item The item property */
    private ?Item $item = null;
    
    /** @var string|null $itemId The itemId property */
    private ?string $itemId = null;
    
    /** @var string|null $lineType The lineType property */
    private ?string $lineType = null;
    
    /** @var float|null $netAmount The netAmount property */
    private ?float $netAmount = null;
    
    /** @var float|null $netAmountIncludingTax The netAmountIncludingTax property */
    private ?float $netAmountIncludingTax = null;
    
    /** @var float|null $netTaxAmount The netTaxAmount property */
    private ?float $netTaxAmount = null;
    
    /** @var float|null $quantity The quantity property */
    private ?float $quantity = null;
    
    /** @var int|null $sequence The sequence property */
    private ?int $sequence = null;
    
    /** @var string|null $taxCode The taxCode property */
    private ?string $taxCode = null;
    
    /** @var float|null $taxPercent The taxPercent property */
    private ?float $taxPercent = null;
    
    /** @var float|null $totalTaxAmount The totalTaxAmount property */
    private ?float $totalTaxAmount = null;
    
    /** @var float|null $unitCost The unitCost property */
    private ?float $unitCost = null;
    
    /**
     * Instantiates a new purchaseInvoiceLine and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PurchaseInvoiceLine
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PurchaseInvoiceLine {
        return new PurchaseInvoiceLine();
    }

    /**
     * Gets the account property value. The account property
     * @return Account|null
    */
    public function getAccount(): ?Account {
        return $this->account;
    }

    /**
     * Gets the accountId property value. The accountId property
     * @return string|null
    */
    public function getAccountId(): ?string {
        return $this->accountId;
    }

    /**
     * Gets the amountExcludingTax property value. The amountExcludingTax property
     * @return float|null
    */
    public function getAmountExcludingTax(): ?float {
        return $this->amountExcludingTax;
    }

    /**
     * Gets the amountIncludingTax property value. The amountIncludingTax property
     * @return float|null
    */
    public function getAmountIncludingTax(): ?float {
        return $this->amountIncludingTax;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
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
     * Gets the discountPercent property value. The discountPercent property
     * @return float|null
    */
    public function getDiscountPercent(): ?float {
        return $this->discountPercent;
    }

    /**
     * Gets the documentId property value. The documentId property
     * @return string|null
    */
    public function getDocumentId(): ?string {
        return $this->documentId;
    }

    /**
     * Gets the expectedReceiptDate property value. The expectedReceiptDate property
     * @return Date|null
    */
    public function getExpectedReceiptDate(): ?Date {
        return $this->expectedReceiptDate;
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
            'expectedReceiptDate' => function (self $o, ParseNode $n) { $o->setExpectedReceiptDate($n->getDateValue()); },
            'invoiceDiscountAllocation' => function (self $o, ParseNode $n) { $o->setInvoiceDiscountAllocation($n->getFloatValue()); },
            'item' => function (self $o, ParseNode $n) { $o->setItem($n->getObjectValue(Item::class)); },
            'itemId' => function (self $o, ParseNode $n) { $o->setItemId($n->getStringValue()); },
            'lineType' => function (self $o, ParseNode $n) { $o->setLineType($n->getStringValue()); },
            'netAmount' => function (self $o, ParseNode $n) { $o->setNetAmount($n->getFloatValue()); },
            'netAmountIncludingTax' => function (self $o, ParseNode $n) { $o->setNetAmountIncludingTax($n->getFloatValue()); },
            'netTaxAmount' => function (self $o, ParseNode $n) { $o->setNetTaxAmount($n->getFloatValue()); },
            'quantity' => function (self $o, ParseNode $n) { $o->setQuantity($n->getFloatValue()); },
            'sequence' => function (self $o, ParseNode $n) { $o->setSequence($n->getIntegerValue()); },
            'taxCode' => function (self $o, ParseNode $n) { $o->setTaxCode($n->getStringValue()); },
            'taxPercent' => function (self $o, ParseNode $n) { $o->setTaxPercent($n->getFloatValue()); },
            'totalTaxAmount' => function (self $o, ParseNode $n) { $o->setTotalTaxAmount($n->getFloatValue()); },
            'unitCost' => function (self $o, ParseNode $n) { $o->setUnitCost($n->getFloatValue()); },
        ]);
    }

    /**
     * Gets the invoiceDiscountAllocation property value. The invoiceDiscountAllocation property
     * @return float|null
    */
    public function getInvoiceDiscountAllocation(): ?float {
        return $this->invoiceDiscountAllocation;
    }

    /**
     * Gets the item property value. The item property
     * @return Item|null
    */
    public function getItem(): ?Item {
        return $this->item;
    }

    /**
     * Gets the itemId property value. The itemId property
     * @return string|null
    */
    public function getItemId(): ?string {
        return $this->itemId;
    }

    /**
     * Gets the lineType property value. The lineType property
     * @return string|null
    */
    public function getLineType(): ?string {
        return $this->lineType;
    }

    /**
     * Gets the netAmount property value. The netAmount property
     * @return float|null
    */
    public function getNetAmount(): ?float {
        return $this->netAmount;
    }

    /**
     * Gets the netAmountIncludingTax property value. The netAmountIncludingTax property
     * @return float|null
    */
    public function getNetAmountIncludingTax(): ?float {
        return $this->netAmountIncludingTax;
    }

    /**
     * Gets the netTaxAmount property value. The netTaxAmount property
     * @return float|null
    */
    public function getNetTaxAmount(): ?float {
        return $this->netTaxAmount;
    }

    /**
     * Gets the quantity property value. The quantity property
     * @return float|null
    */
    public function getQuantity(): ?float {
        return $this->quantity;
    }

    /**
     * Gets the sequence property value. The sequence property
     * @return int|null
    */
    public function getSequence(): ?int {
        return $this->sequence;
    }

    /**
     * Gets the taxCode property value. The taxCode property
     * @return string|null
    */
    public function getTaxCode(): ?string {
        return $this->taxCode;
    }

    /**
     * Gets the taxPercent property value. The taxPercent property
     * @return float|null
    */
    public function getTaxPercent(): ?float {
        return $this->taxPercent;
    }

    /**
     * Gets the totalTaxAmount property value. The totalTaxAmount property
     * @return float|null
    */
    public function getTotalTaxAmount(): ?float {
        return $this->totalTaxAmount;
    }

    /**
     * Gets the unitCost property value. The unitCost property
     * @return float|null
    */
    public function getUnitCost(): ?float {
        return $this->unitCost;
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
        $writer->writeDateValue('expectedReceiptDate', $this->expectedReceiptDate);
        $writer->writeFloatValue('invoiceDiscountAllocation', $this->invoiceDiscountAllocation);
        $writer->writeObjectValue('item', $this->item);
        $writer->writeStringValue('itemId', $this->itemId);
        $writer->writeStringValue('lineType', $this->lineType);
        $writer->writeFloatValue('netAmount', $this->netAmount);
        $writer->writeFloatValue('netAmountIncludingTax', $this->netAmountIncludingTax);
        $writer->writeFloatValue('netTaxAmount', $this->netTaxAmount);
        $writer->writeFloatValue('quantity', $this->quantity);
        $writer->writeIntegerValue('sequence', $this->sequence);
        $writer->writeStringValue('taxCode', $this->taxCode);
        $writer->writeFloatValue('taxPercent', $this->taxPercent);
        $writer->writeFloatValue('totalTaxAmount', $this->totalTaxAmount);
        $writer->writeFloatValue('unitCost', $this->unitCost);
    }

    /**
     * Sets the account property value. The account property
     *  @param Account|null $value Value to set for the account property.
    */
    public function setAccount(?Account $value ): void {
        $this->account = $value;
    }

    /**
     * Sets the accountId property value. The accountId property
     *  @param string|null $value Value to set for the accountId property.
    */
    public function setAccountId(?string $value ): void {
        $this->accountId = $value;
    }

    /**
     * Sets the amountExcludingTax property value. The amountExcludingTax property
     *  @param float|null $value Value to set for the amountExcludingTax property.
    */
    public function setAmountExcludingTax(?float $value ): void {
        $this->amountExcludingTax = $value;
    }

    /**
     * Sets the amountIncludingTax property value. The amountIncludingTax property
     *  @param float|null $value Value to set for the amountIncludingTax property.
    */
    public function setAmountIncludingTax(?float $value ): void {
        $this->amountIncludingTax = $value;
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
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
     * Sets the discountPercent property value. The discountPercent property
     *  @param float|null $value Value to set for the discountPercent property.
    */
    public function setDiscountPercent(?float $value ): void {
        $this->discountPercent = $value;
    }

    /**
     * Sets the documentId property value. The documentId property
     *  @param string|null $value Value to set for the documentId property.
    */
    public function setDocumentId(?string $value ): void {
        $this->documentId = $value;
    }

    /**
     * Sets the expectedReceiptDate property value. The expectedReceiptDate property
     *  @param Date|null $value Value to set for the expectedReceiptDate property.
    */
    public function setExpectedReceiptDate(?Date $value ): void {
        $this->expectedReceiptDate = $value;
    }

    /**
     * Sets the invoiceDiscountAllocation property value. The invoiceDiscountAllocation property
     *  @param float|null $value Value to set for the invoiceDiscountAllocation property.
    */
    public function setInvoiceDiscountAllocation(?float $value ): void {
        $this->invoiceDiscountAllocation = $value;
    }

    /**
     * Sets the item property value. The item property
     *  @param Item|null $value Value to set for the item property.
    */
    public function setItem(?Item $value ): void {
        $this->item = $value;
    }

    /**
     * Sets the itemId property value. The itemId property
     *  @param string|null $value Value to set for the itemId property.
    */
    public function setItemId(?string $value ): void {
        $this->itemId = $value;
    }

    /**
     * Sets the lineType property value. The lineType property
     *  @param string|null $value Value to set for the lineType property.
    */
    public function setLineType(?string $value ): void {
        $this->lineType = $value;
    }

    /**
     * Sets the netAmount property value. The netAmount property
     *  @param float|null $value Value to set for the netAmount property.
    */
    public function setNetAmount(?float $value ): void {
        $this->netAmount = $value;
    }

    /**
     * Sets the netAmountIncludingTax property value. The netAmountIncludingTax property
     *  @param float|null $value Value to set for the netAmountIncludingTax property.
    */
    public function setNetAmountIncludingTax(?float $value ): void {
        $this->netAmountIncludingTax = $value;
    }

    /**
     * Sets the netTaxAmount property value. The netTaxAmount property
     *  @param float|null $value Value to set for the netTaxAmount property.
    */
    public function setNetTaxAmount(?float $value ): void {
        $this->netTaxAmount = $value;
    }

    /**
     * Sets the quantity property value. The quantity property
     *  @param float|null $value Value to set for the quantity property.
    */
    public function setQuantity(?float $value ): void {
        $this->quantity = $value;
    }

    /**
     * Sets the sequence property value. The sequence property
     *  @param int|null $value Value to set for the sequence property.
    */
    public function setSequence(?int $value ): void {
        $this->sequence = $value;
    }

    /**
     * Sets the taxCode property value. The taxCode property
     *  @param string|null $value Value to set for the taxCode property.
    */
    public function setTaxCode(?string $value ): void {
        $this->taxCode = $value;
    }

    /**
     * Sets the taxPercent property value. The taxPercent property
     *  @param float|null $value Value to set for the taxPercent property.
    */
    public function setTaxPercent(?float $value ): void {
        $this->taxPercent = $value;
    }

    /**
     * Sets the totalTaxAmount property value. The totalTaxAmount property
     *  @param float|null $value Value to set for the totalTaxAmount property.
    */
    public function setTotalTaxAmount(?float $value ): void {
        $this->totalTaxAmount = $value;
    }

    /**
     * Sets the unitCost property value. The unitCost property
     *  @param float|null $value Value to set for the unitCost property.
    */
    public function setUnitCost(?float $value ): void {
        $this->unitCost = $value;
    }

}
