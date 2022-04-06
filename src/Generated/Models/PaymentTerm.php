<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PaymentTerm extends Entity 
{
    /** @var bool|null $calculateDiscountOnCreditMemos The calculateDiscountOnCreditMemos property */
    private ?bool $calculateDiscountOnCreditMemos = null;
    
    /** @var string|null $code The code property */
    private ?string $code = null;
    
    /** @var string|null $discountDateCalculation The discountDateCalculation property */
    private ?string $discountDateCalculation = null;
    
    /** @var float|null $discountPercent The discountPercent property */
    private ?float $discountPercent = null;
    
    /** @var string|null $displayName The displayName property */
    private ?string $displayName = null;
    
    /** @var string|null $dueDateCalculation The dueDateCalculation property */
    private ?string $dueDateCalculation = null;
    
    /** @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property */
    private ?DateTime $lastModifiedDateTime = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): PaymentTerm {
        return new PaymentTerm();
    }

    /**
     * Gets the calculateDiscountOnCreditMemos property value. The calculateDiscountOnCreditMemos property
     * @return bool|null
    */
    public function getCalculateDiscountOnCreditMemos(): ?bool {
        return $this->calculateDiscountOnCreditMemos;
    }

    /**
     * Gets the code property value. The code property
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Gets the discountDateCalculation property value. The discountDateCalculation property
     * @return string|null
    */
    public function getDiscountDateCalculation(): ?string {
        return $this->discountDateCalculation;
    }

    /**
     * Gets the discountPercent property value. The discountPercent property
     * @return float|null
    */
    public function getDiscountPercent(): ?float {
        return $this->discountPercent;
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the dueDateCalculation property value. The dueDateCalculation property
     * @return string|null
    */
    public function getDueDateCalculation(): ?string {
        return $this->dueDateCalculation;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'calculateDiscountOnCreditMemos' => function (self $o, ParseNode $n) { $o->setCalculateDiscountOnCreditMemos($n->getBooleanValue()); },
            'code' => function (self $o, ParseNode $n) { $o->setCode($n->getStringValue()); },
            'discountDateCalculation' => function (self $o, ParseNode $n) { $o->setDiscountDateCalculation($n->getStringValue()); },
            'discountPercent' => function (self $o, ParseNode $n) { $o->setDiscountPercent($n->getFloatValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'dueDateCalculation' => function (self $o, ParseNode $n) { $o->setDueDateCalculation($n->getStringValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('calculateDiscountOnCreditMemos', $this->calculateDiscountOnCreditMemos);
        $writer->writeStringValue('code', $this->code);
        $writer->writeStringValue('discountDateCalculation', $this->discountDateCalculation);
        $writer->writeFloatValue('discountPercent', $this->discountPercent);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('dueDateCalculation', $this->dueDateCalculation);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
    }

    /**
     * Sets the calculateDiscountOnCreditMemos property value. The calculateDiscountOnCreditMemos property
     *  @param bool|null $value Value to set for the calculateDiscountOnCreditMemos property.
    */
    public function setCalculateDiscountOnCreditMemos(?bool $value ): void {
        $this->calculateDiscountOnCreditMemos = $value;
    }

    /**
     * Sets the code property value. The code property
     *  @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value ): void {
        $this->code = $value;
    }

    /**
     * Sets the discountDateCalculation property value. The discountDateCalculation property
     *  @param string|null $value Value to set for the discountDateCalculation property.
    */
    public function setDiscountDateCalculation(?string $value ): void {
        $this->discountDateCalculation = $value;
    }

    /**
     * Sets the discountPercent property value. The discountPercent property
     *  @param float|null $value Value to set for the discountPercent property.
    */
    public function setDiscountPercent(?float $value ): void {
        $this->discountPercent = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the dueDateCalculation property value. The dueDateCalculation property
     *  @param string|null $value Value to set for the dueDateCalculation property.
    */
    public function setDueDateCalculation(?string $value ): void {
        $this->dueDateCalculation = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

}
