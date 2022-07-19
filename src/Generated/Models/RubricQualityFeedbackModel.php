<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RubricQualityFeedbackModel implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var EducationItemBody|null $feedback Specific feedback for one quality of this rubric.
    */
    private ?EducationItemBody $feedback = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $qualityId The ID of the rubricQuality that this feedback is related to.
    */
    private ?string $qualityId = null;
    
    /**
     * Instantiates a new rubricQualityFeedbackModel and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.rubricQualityFeedbackModel');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RubricQualityFeedbackModel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RubricQualityFeedbackModel {
        return new RubricQualityFeedbackModel();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the feedback property value. Specific feedback for one quality of this rubric.
     * @return EducationItemBody|null
    */
    public function getFeedback(): ?EducationItemBody {
        return $this->feedback;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'feedback' => function (ParseNode $n) use ($o) { $o->setFeedback($n->getObjectValue(array(EducationItemBody::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'qualityId' => function (ParseNode $n) use ($o) { $o->setQualityId($n->getStringValue()); },
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
     * Gets the qualityId property value. The ID of the rubricQuality that this feedback is related to.
     * @return string|null
    */
    public function getQualityId(): ?string {
        return $this->qualityId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('feedback', $this->feedback);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('qualityId', $this->qualityId);
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
     * Sets the feedback property value. Specific feedback for one quality of this rubric.
     *  @param EducationItemBody|null $value Value to set for the feedback property.
    */
    public function setFeedback(?EducationItemBody $value ): void {
        $this->feedback = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the qualityId property value. The ID of the rubricQuality that this feedback is related to.
     *  @param string|null $value Value to set for the qualityId property.
    */
    public function setQualityId(?string $value ): void {
        $this->qualityId = $value;
    }

}
