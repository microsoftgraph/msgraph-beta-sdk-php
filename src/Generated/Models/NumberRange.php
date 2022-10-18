<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NumberRange implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $lowerNumber Lower number.
    */
    private ?int $lowerNumber = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $upperNumber Upper number.
    */
    private ?int $upperNumber = null;
    
    /**
     * Instantiates a new numberRange and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.numberRange');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NumberRange
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NumberRange {
        return new NumberRange();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'lowerNumber' => fn(ParseNode $n) => $o->setLowerNumber($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'upperNumber' => fn(ParseNode $n) => $o->setUpperNumber($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the lowerNumber property value. Lower number.
     * @return int|null
    */
    public function getLowerNumber(): ?int {
        return $this->lowerNumber;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the upperNumber property value. Upper number.
     * @return int|null
    */
    public function getUpperNumber(): ?int {
        return $this->upperNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('lowerNumber', $this->lowerNumber);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('upperNumber', $this->upperNumber);
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
     * Sets the lowerNumber property value. Lower number.
     *  @param int|null $value Value to set for the lowerNumber property.
    */
    public function setLowerNumber(?int $value ): void {
        $this->lowerNumber = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the upperNumber property value. Upper number.
     *  @param int|null $value Value to set for the upperNumber property.
    */
    public function setUpperNumber(?int $value ): void {
        $this->upperNumber = $value;
    }

}
