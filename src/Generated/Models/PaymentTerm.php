<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PaymentTerm extends Entity implements Parsable 
{
    /**
     * Instantiates a new paymentTerm and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentTerm
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentTerm {
        return new PaymentTerm();
    }

    /**
     * Gets the calculateDiscountOnCreditMemos property value. The calculateDiscountOnCreditMemos property
     * @return bool|null
    */
    public function getCalculateDiscountOnCreditMemos(): ?bool {
        return $this->getBackingStore()->get('calculateDiscountOnCreditMemos');
    }

    /**
     * Gets the code property value. The code property
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->getBackingStore()->get('code');
    }

    /**
     * Gets the discountDateCalculation property value. The discountDateCalculation property
     * @return string|null
    */
    public function getDiscountDateCalculation(): ?string {
        return $this->getBackingStore()->get('discountDateCalculation');
    }

    /**
     * Gets the discountPercent property value. The discountPercent property
     * @return string|null
    */
    public function getDiscountPercent(): ?string {
        return $this->getBackingStore()->get('discountPercent');
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the dueDateCalculation property value. The dueDateCalculation property
     * @return string|null
    */
    public function getDueDateCalculation(): ?string {
        return $this->getBackingStore()->get('dueDateCalculation');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'calculateDiscountOnCreditMemos' => fn(ParseNode $n) => $o->setCalculateDiscountOnCreditMemos($n->getBooleanValue()),
            'code' => fn(ParseNode $n) => $o->setCode($n->getStringValue()),
            'discountDateCalculation' => fn(ParseNode $n) => $o->setDiscountDateCalculation($n->getStringValue()),
            'discountPercent' => fn(ParseNode $n) => $o->setDiscountPercent($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'dueDateCalculation' => fn(ParseNode $n) => $o->setDueDateCalculation($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('calculateDiscountOnCreditMemos', $this->getCalculateDiscountOnCreditMemos());
        $writer->writeStringValue('code', $this->getCode());
        $writer->writeStringValue('discountDateCalculation', $this->getDiscountDateCalculation());
        $writer->writeStringValue('discountPercent', $this->getDiscountPercent());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('dueDateCalculation', $this->getDueDateCalculation());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
    }

    /**
     * Sets the calculateDiscountOnCreditMemos property value. The calculateDiscountOnCreditMemos property
     *  @param bool|null $value Value to set for the calculateDiscountOnCreditMemos property.
    */
    public function setCalculateDiscountOnCreditMemos(?bool $value): void {
        $this->getBackingStore()->set('calculateDiscountOnCreditMemos', $value);
    }

    /**
     * Sets the code property value. The code property
     *  @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value): void {
        $this->getBackingStore()->set('code', $value);
    }

    /**
     * Sets the discountDateCalculation property value. The discountDateCalculation property
     *  @param string|null $value Value to set for the discountDateCalculation property.
    */
    public function setDiscountDateCalculation(?string $value): void {
        $this->getBackingStore()->set('discountDateCalculation', $value);
    }

    /**
     * Sets the discountPercent property value. The discountPercent property
     *  @param string|null $value Value to set for the discountPercent property.
    */
    public function setDiscountPercent(?string $value): void {
        $this->getBackingStore()->set('discountPercent', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the dueDateCalculation property value. The dueDateCalculation property
     *  @param string|null $value Value to set for the dueDateCalculation property.
    */
    public function setDueDateCalculation(?string $value): void {
        $this->getBackingStore()->set('dueDateCalculation', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

}
