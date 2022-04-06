<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Currency extends Entity 
{
    /** @var string|null $amountDecimalPlaces The amountDecimalPlaces property */
    private ?string $amountDecimalPlaces = null;
    
    /** @var float|null $amountRoundingPrecision The amountRoundingPrecision property */
    private ?float $amountRoundingPrecision = null;
    
    /** @var string|null $code The code property */
    private ?string $code = null;
    
    /** @var string|null $displayName The displayName property */
    private ?string $displayName = null;
    
    /** @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var string|null $symbol The symbol property */
    private ?string $symbol = null;
    
    /**
     * Instantiates a new currency and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Currency
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Currency {
        return new Currency();
    }

    /**
     * Gets the amountDecimalPlaces property value. The amountDecimalPlaces property
     * @return string|null
    */
    public function getAmountDecimalPlaces(): ?string {
        return $this->amountDecimalPlaces;
    }

    /**
     * Gets the amountRoundingPrecision property value. The amountRoundingPrecision property
     * @return float|null
    */
    public function getAmountRoundingPrecision(): ?float {
        return $this->amountRoundingPrecision;
    }

    /**
     * Gets the code property value. The code property
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'amountDecimalPlaces' => function (self $o, ParseNode $n) { $o->setAmountDecimalPlaces($n->getStringValue()); },
            'amountRoundingPrecision' => function (self $o, ParseNode $n) { $o->setAmountRoundingPrecision($n->getFloatValue()); },
            'code' => function (self $o, ParseNode $n) { $o->setCode($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'symbol' => function (self $o, ParseNode $n) { $o->setSymbol($n->getStringValue()); },
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
     * Gets the symbol property value. The symbol property
     * @return string|null
    */
    public function getSymbol(): ?string {
        return $this->symbol;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('amountDecimalPlaces', $this->amountDecimalPlaces);
        $writer->writeFloatValue('amountRoundingPrecision', $this->amountRoundingPrecision);
        $writer->writeStringValue('code', $this->code);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('symbol', $this->symbol);
    }

    /**
     * Sets the amountDecimalPlaces property value. The amountDecimalPlaces property
     *  @param string|null $value Value to set for the amountDecimalPlaces property.
    */
    public function setAmountDecimalPlaces(?string $value ): void {
        $this->amountDecimalPlaces = $value;
    }

    /**
     * Sets the amountRoundingPrecision property value. The amountRoundingPrecision property
     *  @param float|null $value Value to set for the amountRoundingPrecision property.
    */
    public function setAmountRoundingPrecision(?float $value ): void {
        $this->amountRoundingPrecision = $value;
    }

    /**
     * Sets the code property value. The code property
     *  @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value ): void {
        $this->code = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the symbol property value. The symbol property
     *  @param string|null $value Value to set for the symbol property.
    */
    public function setSymbol(?string $value ): void {
        $this->symbol = $value;
    }

}
