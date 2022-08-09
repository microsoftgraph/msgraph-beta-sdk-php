<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SensitiveContentEvidence implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $length The length property
    */
    private ?int $length = null;
    
    /**
     * @var string|null $match The match property
    */
    private ?string $match = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $offset The offset property
    */
    private ?int $offset = null;
    
    /**
     * Instantiates a new sensitiveContentEvidence and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.sensitiveContentEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SensitiveContentEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SensitiveContentEvidence {
        return new SensitiveContentEvidence();
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
            'length' => function (ParseNode $n) use ($o) { $o->setLength($n->getIntegerValue()); },
            'match' => function (ParseNode $n) use ($o) { $o->setMatch($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'offset' => function (ParseNode $n) use ($o) { $o->setOffset($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the length property value. The length property
     * @return int|null
    */
    public function getLength(): ?int {
        return $this->length;
    }

    /**
     * Gets the match property value. The match property
     * @return string|null
    */
    public function getMatch(): ?string {
        return $this->match;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the offset property value. The offset property
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('length', $this->length);
        $writer->writeStringValue('match', $this->match);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('offset', $this->offset);
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
     * Sets the length property value. The length property
     *  @param int|null $value Value to set for the length property.
    */
    public function setLength(?int $value ): void {
        $this->length = $value;
    }

    /**
     * Sets the match property value. The match property
     *  @param string|null $value Value to set for the match property.
    */
    public function setMatch(?string $value ): void {
        $this->match = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the offset property value. The offset property
     *  @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value ): void {
        $this->offset = $value;
    }

}
