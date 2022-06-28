<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationAssignmentPointsGradeType extends EducationAssignmentGradeType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var float|null $maxPoints Max points possible for this assignment.
    */
    private ?float $maxPoints = null;
    
    /**
     * Instantiates a new EducationAssignmentPointsGradeType and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationAssignmentPointsGradeType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationAssignmentPointsGradeType {
        return new EducationAssignmentPointsGradeType();
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
        return array_merge(parent::getFieldDeserializers(), [
            'maxPoints' => function (ParseNode $n) use ($o) { $o->setMaxPoints($n->getFloatValue()); },
        ]);
    }

    /**
     * Gets the maxPoints property value. Max points possible for this assignment.
     * @return float|null
    */
    public function getMaxPoints(): ?float {
        return $this->maxPoints;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeFloatValue('maxPoints', $this->maxPoints);
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
     * Sets the maxPoints property value. Max points possible for this assignment.
     *  @param float|null $value Value to set for the maxPoints property.
    */
    public function setMaxPoints(?float $value ): void {
        $this->maxPoints = $value;
    }

}
