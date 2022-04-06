<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IntegerRange implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $end The inclusive upper bound of the integer range. */
    private ?int $end = null;
    
    /** @var int|null $maximum The maximum property */
    private ?int $maximum = null;
    
    /** @var int|null $minimum The minimum property */
    private ?int $minimum = null;
    
    /** @var int|null $start The inclusive lower bound of the integer range. */
    private ?int $start = null;
    
    /**
     * Instantiates a new integerRange and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IntegerRange
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): IntegerRange {
        return new IntegerRange();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the end property value. The inclusive upper bound of the integer range.
     * @return int|null
    */
    public function getEnd(): ?int {
        return $this->end;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'end' => function (self $o, ParseNode $n) { $o->setEnd($n->getIntegerValue()); },
            'maximum' => function (self $o, ParseNode $n) { $o->setMaximum($n->getIntegerValue()); },
            'minimum' => function (self $o, ParseNode $n) { $o->setMinimum($n->getIntegerValue()); },
            'start' => function (self $o, ParseNode $n) { $o->setStart($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the maximum property value. The maximum property
     * @return int|null
    */
    public function getMaximum(): ?int {
        return $this->maximum;
    }

    /**
     * Gets the minimum property value. The minimum property
     * @return int|null
    */
    public function getMinimum(): ?int {
        return $this->minimum;
    }

    /**
     * Gets the start property value. The inclusive lower bound of the integer range.
     * @return int|null
    */
    public function getStart(): ?int {
        return $this->start;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('end', $this->end);
        $writer->writeIntegerValue('maximum', $this->maximum);
        $writer->writeIntegerValue('minimum', $this->minimum);
        $writer->writeIntegerValue('start', $this->start);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the end property value. The inclusive upper bound of the integer range.
     *  @param int|null $value Value to set for the end property.
    */
    public function setEnd(?int $value ): void {
        $this->end = $value;
    }

    /**
     * Sets the maximum property value. The maximum property
     *  @param int|null $value Value to set for the maximum property.
    */
    public function setMaximum(?int $value ): void {
        $this->maximum = $value;
    }

    /**
     * Sets the minimum property value. The minimum property
     *  @param int|null $value Value to set for the minimum property.
    */
    public function setMinimum(?int $value ): void {
        $this->minimum = $value;
    }

    /**
     * Sets the start property value. The inclusive lower bound of the integer range.
     *  @param int|null $value Value to set for the start property.
    */
    public function setStart(?int $value ): void {
        $this->start = $value;
    }

}
