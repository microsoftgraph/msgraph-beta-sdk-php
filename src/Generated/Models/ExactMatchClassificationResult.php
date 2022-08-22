<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExactMatchClassificationResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<ExactMatchDetectedSensitiveContent>|null $classification The classification property
    */
    private ?array $classification = null;
    
    /**
     * @var array<ClassificationError>|null $errors The errors property
    */
    private ?array $errors = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new exactMatchClassificationResult and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.exactMatchClassificationResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExactMatchClassificationResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExactMatchClassificationResult {
        return new ExactMatchClassificationResult();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the classification property value. The classification property
     * @return array<ExactMatchDetectedSensitiveContent>|null
    */
    public function getClassification(): ?array {
        return $this->classification;
    }

    /**
     * Gets the errors property value. The errors property
     * @return array<ClassificationError>|null
    */
    public function getErrors(): ?array {
        return $this->errors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'classification' => function (ParseNode $n) use ($o) { $o->setClassification($n->getCollectionOfObjectValues(array(ExactMatchDetectedSensitiveContent::class, 'createFromDiscriminatorValue'))); },
            'errors' => function (ParseNode $n) use ($o) { $o->setErrors($n->getCollectionOfObjectValues(array(ClassificationError::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('classification', $this->classification);
        $writer->writeCollectionOfObjectValues('errors', $this->errors);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the classification property value. The classification property
     *  @param array<ExactMatchDetectedSensitiveContent>|null $value Value to set for the classification property.
    */
    public function setClassification(?array $value ): void {
        $this->classification = $value;
    }

    /**
     * Sets the errors property value. The errors property
     *  @param array<ClassificationError>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value ): void {
        $this->errors = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
