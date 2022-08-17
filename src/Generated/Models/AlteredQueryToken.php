<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AlteredQueryToken implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $length Defines the length of a changed segment.
    */
    private ?int $length = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $offset Defines the offset of a changed segment.
    */
    private ?int $offset = null;
    
    /**
     * @var string|null $suggestion Represents the corrected segment string.
    */
    private ?string $suggestion = null;
    
    /**
     * Instantiates a new alteredQueryToken and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.alteredQueryToken');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AlteredQueryToken
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AlteredQueryToken {
        return new AlteredQueryToken();
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
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'offset' => function (ParseNode $n) use ($o) { $o->setOffset($n->getIntegerValue()); },
            'suggestion' => function (ParseNode $n) use ($o) { $o->setSuggestion($n->getStringValue()); },
        ];
    }

    /**
     * Gets the length property value. Defines the length of a changed segment.
     * @return int|null
    */
    public function getLength(): ?int {
        return $this->length;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the offset property value. Defines the offset of a changed segment.
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Gets the suggestion property value. Represents the corrected segment string.
     * @return string|null
    */
    public function getSuggestion(): ?string {
        return $this->suggestion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('length', $this->length);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('offset', $this->offset);
        $writer->writeStringValue('suggestion', $this->suggestion);
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
     * Sets the length property value. Defines the length of a changed segment.
     *  @param int|null $value Value to set for the length property.
    */
    public function setLength(?int $value ): void {
        $this->length = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the offset property value. Defines the offset of a changed segment.
     *  @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value ): void {
        $this->offset = $value;
    }

    /**
     * Sets the suggestion property value. Represents the corrected segment string.
     *  @param string|null $value Value to set for the suggestion property.
    */
    public function setSuggestion(?string $value ): void {
        $this->suggestion = $value;
    }

}
