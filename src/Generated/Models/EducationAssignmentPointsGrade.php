<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationAssignmentPointsGrade extends EducationAssignmentGrade implements Parsable 
{
    /**
     * Instantiates a new EducationAssignmentPointsGrade and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationAssignmentPointsGrade');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationAssignmentPointsGrade
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationAssignmentPointsGrade {
        return new EducationAssignmentPointsGrade();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'grade' => fn(ParseNode $n) => $o->setGrade($n->getStringValue()),
            'points' => fn(ParseNode $n) => $o->setPoints($n->getFloatValue()),
        ]);
    }

    /**
     * Gets the grade property value. The grade letter from the grading scheme that corresponds to the given number of points.
     * @return string|null
    */
    public function getGrade(): ?string {
        $val = $this->getBackingStore()->get('grade');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'grade'");
    }

    /**
     * Gets the points property value. Number of points a teacher gives to this submission object.
     * @return float|null
    */
    public function getPoints(): ?float {
        $val = $this->getBackingStore()->get('points');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'points'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('grade', $this->getGrade());
        $writer->writeFloatValue('points', $this->getPoints());
    }

    /**
     * Sets the grade property value. The grade letter from the grading scheme that corresponds to the given number of points.
     * @param string|null $value Value to set for the grade property.
    */
    public function setGrade(?string $value): void {
        $this->getBackingStore()->set('grade', $value);
    }

    /**
     * Sets the points property value. Number of points a teacher gives to this submission object.
     * @param float|null $value Value to set for the points property.
    */
    public function setPoints(?float $value): void {
        $this->getBackingStore()->set('points', $value);
    }

}
