<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ControlScore implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $controlCategory The controlCategory property
    */
    private ?string $controlCategory = null;
    
    /**
     * @var string|null $controlName The controlName property
    */
    private ?string $controlName = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var float|null $score The score property
    */
    private ?float $score = null;
    
    /**
     * Instantiates a new controlScore and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.controlScore');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ControlScore
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ControlScore {
        return new ControlScore();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the controlCategory property value. The controlCategory property
     * @return string|null
    */
    public function getControlCategory(): ?string {
        return $this->controlCategory;
    }

    /**
     * Gets the controlName property value. The controlName property
     * @return string|null
    */
    public function getControlName(): ?string {
        return $this->controlName;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'controlCategory' => function (ParseNode $n) use ($o) { $o->setControlCategory($n->getStringValue()); },
            'controlName' => function (ParseNode $n) use ($o) { $o->setControlName($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'score' => function (ParseNode $n) use ($o) { $o->setScore($n->getFloatValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the score property value. The score property
     * @return float|null
    */
    public function getScore(): ?float {
        return $this->score;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('controlCategory', $this->controlCategory);
        $writer->writeStringValue('controlName', $this->controlName);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeFloatValue('score', $this->score);
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
     * Sets the controlCategory property value. The controlCategory property
     *  @param string|null $value Value to set for the controlCategory property.
    */
    public function setControlCategory(?string $value ): void {
        $this->controlCategory = $value;
    }

    /**
     * Sets the controlName property value. The controlName property
     *  @param string|null $value Value to set for the controlName property.
    */
    public function setControlName(?string $value ): void {
        $this->controlName = $value;
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the score property value. The score property
     *  @param float|null $value Value to set for the score property.
    */
    public function setScore(?float $value ): void {
        $this->score = $value;
    }

}
