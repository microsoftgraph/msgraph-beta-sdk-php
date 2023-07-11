<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class PurchaseInvoiceLine extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PurchaseInvoiceLine {
        return new PurchaseInvoiceLine();
    }

    /**
     * Gets the account property value. The account property
     * @return Account|null
    */
    public function getAccount(): ?Account {
        $val = $this->getBackingStore()->get('account');
        if (is_null($val) || $val instanceof Account) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'account'");
    }

    /**
     * Gets the accountId property value. The accountId property
     * @return string|null
    */
    public function getAccountId(): ?string {
        $val = $this->getBackingStore()->get('accountId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountId'");
    }

    /**
     * Gets the amountExcludingTax property value. The amountExcludingTax property
     * @return string|null
    */
    public function getAmountExcludingTax(): ?string {
        $val = $this->getBackingStore()->get('amountExcludingTax');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'amountExcludingTax'");
    }

    /**
     * Gets the amountIncludingTax property value. The amountIncludingTax property
     * @return string|null
    */
    public function getAmountIncludingTax(): ?string {
        $val = $this->getBackingStore()->get('amountIncludingTax');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'amountIncludingTax'");
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
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
     * Gets the discountPercent property value. The discountPercent property
     * @return string|null
    */
    public function getDiscountPercent(): ?string {
        $val = $this->getBackingStore()->get('discountPercent');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'discountPercent'");
    }

    /**
     * Gets the documentId property value. The documentId property
     * @return string|null
    */
    public function getDocumentId(): ?string {
        $val = $this->getBackingStore()->get('documentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'documentId'");
    }

    /**
     * Gets the expectedReceiptDate property value. The expectedReceiptDate property
     * @return Date|null
    */
    public function getExpectedReceiptDate(): ?Date {
        $val = $this->getBackingStore()->get('expectedReceiptDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expectedReceiptDate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'account' => fn(ParseNode $n) => $o->setAccount($n->getObjectValue([Account::class, 'createFromDiscriminatorValue'])),
            'accountId' => fn(ParseNode $n) => $o->setAccountId($n->getStringValue()),
            'amountExcludingTax' => fn(ParseNode $n) => $o->setAmountExcludingTax($n->getStringValue()),
            'amountIncludingTax' => fn(ParseNode $n) => $o->setAmountIncludingTax($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'discountAmount' => fn(ParseNode $n) => $o->setDiscountAmount($n->getStringValue()),
            'discountAppliedBeforeTax' => fn(ParseNode $n) => $o->setDiscountAppliedBeforeTax($n->getBooleanValue()),
            'discountPercent' => fn(ParseNode $n) => $o->setDiscountPercent($n->getStringValue()),
            'documentId' => fn(ParseNode $n) => $o->setDocumentId($n->getStringValue()),
            'expectedReceiptDate' => fn(ParseNode $n) => $o->setExpectedReceiptDate($n->getDateValue()),
            'invoiceDiscountAllocation' => fn(ParseNode $n) => $o->setInvoiceDiscountAllocation($n->getStringValue()),
            'item' => fn(ParseNode $n) => $o->setItem($n->getObjectValue([Item::class, 'createFromDiscriminatorValue'])),
            'itemId' => fn(ParseNode $n) => $o->setItemId($n->getStringValue()),
            'lineType' => fn(ParseNode $n) => $o->setLineType($n->getStringValue()),
            'netAmount' => fn(ParseNode $n) => $o->setNetAmount($n->getStringValue()),
            'netAmountIncludingTax' => fn(ParseNode $n) => $o->setNetAmountIncludingTax($n->getStringValue()),
            'netTaxAmount' => fn(ParseNode $n) => $o->setNetTaxAmount($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getStringValue()),
            'sequence' => fn(ParseNode $n) => $o->setSequence($n->getIntegerValue()),
            'taxCode' => fn(ParseNode $n) => $o->setTaxCode($n->getStringValue()),
            'taxPercent' => fn(ParseNode $n) => $o->setTaxPercent($n->getStringValue()),
            'totalTaxAmount' => fn(ParseNode $n) => $o->setTotalTaxAmount($n->getStringValue()),
            'unitCost' => fn(ParseNode $n) => $o->setUnitCost($n->getStringValue()),
        ]);
    }

    /**
     * Gets the invoiceDiscountAllocation property value. The invoiceDiscountAllocation property
     * @return string|null
    */
    public function getInvoiceDiscountAllocation(): ?string {
        $val = $this->getBackingStore()->get('invoiceDiscountAllocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'invoiceDiscountAllocation'");
    }

    /**
     * Gets the item property value. The item property
     * @return Item|null
    */
    public function getItem(): ?Item {
        $val = $this->getBackingStore()->get('item');
        if (is_null($val) || $val instanceof Item) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'item'");
    }

    /**
     * Gets the itemId property value. The itemId property
     * @return string|null
    */
    public function getItemId(): ?string {
        $val = $this->getBackingStore()->get('itemId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'itemId'");
    }

    /**
     * Gets the lineType property value. The lineType property
     * @return string|null
    */
    public function getLineType(): ?string {
        $val = $this->getBackingStore()->get('lineType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lineType'");
    }

    /**
     * Gets the netAmount property value. The netAmount property
     * @return string|null
    */
    public function getNetAmount(): ?string {
        $val = $this->getBackingStore()->get('netAmount');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'netAmount'");
    }

    /**
     * Gets the netAmountIncludingTax property value. The netAmountIncludingTax property
     * @return string|null
    */
    public function getNetAmountIncludingTax(): ?string {
        $val = $this->getBackingStore()->get('netAmountIncludingTax');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'netAmountIncludingTax'");
    }

    /**
     * Gets the netTaxAmount property value. The netTaxAmount property
     * @return string|null
    */
    public function getNetTaxAmount(): ?string {
        $val = $this->getBackingStore()->get('netTaxAmount');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'netTaxAmount'");
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
     * Gets the quantity property value. The quantity property
     * @return string|null
    */
    public function getQuantity(): ?string {
        $val = $this->getBackingStore()->get('quantity');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'quantity'");
    }

    /**
     * Gets the sequence property value. The sequence property
     * @return int|null
    */
    public function getSequence(): ?int {
        $val = $this->getBackingStore()->get('sequence');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sequence'");
    }

    /**
     * Gets the taxCode property value. The taxCode property
     * @return string|null
    */
    public function getTaxCode(): ?string {
        $val = $this->getBackingStore()->get('taxCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taxCode'");
    }

    /**
     * Gets the taxPercent property value. The taxPercent property
     * @return string|null
    */
    public function getTaxPercent(): ?string {
        $val = $this->getBackingStore()->get('taxPercent');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taxPercent'");
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
     * Gets the unitCost property value. The unitCost property
     * @return string|null
    */
    public function getUnitCost(): ?string {
        $val = $this->getBackingStore()->get('unitCost');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unitCost'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('account', $this->getAccount());
        $writer->writeStringValue('accountId', $this->getAccountId());
        $writer->writeStringValue('amountExcludingTax', $this->getAmountExcludingTax());
        $writer->writeStringValue('amountIncludingTax', $this->getAmountIncludingTax());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('discountAmount', $this->getDiscountAmount());
        $writer->writeBooleanValue('discountAppliedBeforeTax', $this->getDiscountAppliedBeforeTax());
        $writer->writeStringValue('discountPercent', $this->getDiscountPercent());
        $writer->writeStringValue('documentId', $this->getDocumentId());
        $writer->writeDateValue('expectedReceiptDate', $this->getExpectedReceiptDate());
        $writer->writeStringValue('invoiceDiscountAllocation', $this->getInvoiceDiscountAllocation());
        $writer->writeObjectValue('item', $this->getItem());
        $writer->writeStringValue('itemId', $this->getItemId());
        $writer->writeStringValue('lineType', $this->getLineType());
        $writer->writeStringValue('netAmount', $this->getNetAmount());
        $writer->writeStringValue('netAmountIncludingTax', $this->getNetAmountIncludingTax());
        $writer->writeStringValue('netTaxAmount', $this->getNetTaxAmount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('quantity', $this->getQuantity());
        $writer->writeIntegerValue('sequence', $this->getSequence());
        $writer->writeStringValue('taxCode', $this->getTaxCode());
        $writer->writeStringValue('taxPercent', $this->getTaxPercent());
        $writer->writeStringValue('totalTaxAmount', $this->getTotalTaxAmount());
        $writer->writeStringValue('unitCost', $this->getUnitCost());
    }

    /**
     * Sets the account property value. The account property
     * @param Account|null $value Value to set for the account property.
    */
    public function setAccount(?Account $value): void {
        $this->getBackingStore()->set('account', $value);
    }

    /**
     * Sets the accountId property value. The accountId property
     * @param string|null $value Value to set for the accountId property.
    */
    public function setAccountId(?string $value): void {
        $this->getBackingStore()->set('accountId', $value);
    }

    /**
     * Sets the amountExcludingTax property value. The amountExcludingTax property
     * @param string|null $value Value to set for the amountExcludingTax property.
    */
    public function setAmountExcludingTax(?string $value): void {
        $this->getBackingStore()->set('amountExcludingTax', $value);
    }

    /**
     * Sets the amountIncludingTax property value. The amountIncludingTax property
     * @param string|null $value Value to set for the amountIncludingTax property.
    */
    public function setAmountIncludingTax(?string $value): void {
        $this->getBackingStore()->set('amountIncludingTax', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
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
     * Sets the discountPercent property value. The discountPercent property
     * @param string|null $value Value to set for the discountPercent property.
    */
    public function setDiscountPercent(?string $value): void {
        $this->getBackingStore()->set('discountPercent', $value);
    }

    /**
     * Sets the documentId property value. The documentId property
     * @param string|null $value Value to set for the documentId property.
    */
    public function setDocumentId(?string $value): void {
        $this->getBackingStore()->set('documentId', $value);
    }

    /**
     * Sets the expectedReceiptDate property value. The expectedReceiptDate property
     * @param Date|null $value Value to set for the expectedReceiptDate property.
    */
    public function setExpectedReceiptDate(?Date $value): void {
        $this->getBackingStore()->set('expectedReceiptDate', $value);
    }

    /**
     * Sets the invoiceDiscountAllocation property value. The invoiceDiscountAllocation property
     * @param string|null $value Value to set for the invoiceDiscountAllocation property.
    */
    public function setInvoiceDiscountAllocation(?string $value): void {
        $this->getBackingStore()->set('invoiceDiscountAllocation', $value);
    }

    /**
     * Sets the item property value. The item property
     * @param Item|null $value Value to set for the item property.
    */
    public function setItem(?Item $value): void {
        $this->getBackingStore()->set('item', $value);
    }

    /**
     * Sets the itemId property value. The itemId property
     * @param string|null $value Value to set for the itemId property.
    */
    public function setItemId(?string $value): void {
        $this->getBackingStore()->set('itemId', $value);
    }

    /**
     * Sets the lineType property value. The lineType property
     * @param string|null $value Value to set for the lineType property.
    */
    public function setLineType(?string $value): void {
        $this->getBackingStore()->set('lineType', $value);
    }

    /**
     * Sets the netAmount property value. The netAmount property
     * @param string|null $value Value to set for the netAmount property.
    */
    public function setNetAmount(?string $value): void {
        $this->getBackingStore()->set('netAmount', $value);
    }

    /**
     * Sets the netAmountIncludingTax property value. The netAmountIncludingTax property
     * @param string|null $value Value to set for the netAmountIncludingTax property.
    */
    public function setNetAmountIncludingTax(?string $value): void {
        $this->getBackingStore()->set('netAmountIncludingTax', $value);
    }

    /**
     * Sets the netTaxAmount property value. The netTaxAmount property
     * @param string|null $value Value to set for the netTaxAmount property.
    */
    public function setNetTaxAmount(?string $value): void {
        $this->getBackingStore()->set('netTaxAmount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the quantity property value. The quantity property
     * @param string|null $value Value to set for the quantity property.
    */
    public function setQuantity(?string $value): void {
        $this->getBackingStore()->set('quantity', $value);
    }

    /**
     * Sets the sequence property value. The sequence property
     * @param int|null $value Value to set for the sequence property.
    */
    public function setSequence(?int $value): void {
        $this->getBackingStore()->set('sequence', $value);
    }

    /**
     * Sets the taxCode property value. The taxCode property
     * @param string|null $value Value to set for the taxCode property.
    */
    public function setTaxCode(?string $value): void {
        $this->getBackingStore()->set('taxCode', $value);
    }

    /**
     * Sets the taxPercent property value. The taxPercent property
     * @param string|null $value Value to set for the taxPercent property.
    */
    public function setTaxPercent(?string $value): void {
        $this->getBackingStore()->set('taxPercent', $value);
    }

    /**
     * Sets the totalTaxAmount property value. The totalTaxAmount property
     * @param string|null $value Value to set for the totalTaxAmount property.
    */
    public function setTotalTaxAmount(?string $value): void {
        $this->getBackingStore()->set('totalTaxAmount', $value);
    }

    /**
     * Sets the unitCost property value. The unitCost property
     * @param string|null $value Value to set for the unitCost property.
    */
    public function setUnitCost(?string $value): void {
        $this->getBackingStore()->set('unitCost', $value);
    }

}
