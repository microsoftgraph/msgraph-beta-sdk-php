<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationAssignmentGrade implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var IdentitySet|null $gradedBy User who did the grading.
    */
    private ?IdentitySet $gradedBy = null;
    
    /**
     * @var DateTime|null $gradedDateTime Moment in time when the grade was applied to this submission object. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $gradedDateTime = null;
    
    /**
     * Instantiates a new educationAssignmentGrade and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationAssignmentGrade
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationAssignmentGrade {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.educationAssignmentPointsGrade': return new EducationAssignmentPointsGrade();
            }
        }
        return new EducationAssignmentGrade();
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
            'gradedBy' => function (ParseNode $n) use ($o) { $o->setGradedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'gradedDateTime' => function (ParseNode $n) use ($o) { $o->setGradedDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the gradedBy property value. User who did the grading.
     * @return IdentitySet|null
    */
    public function getGradedBy(): ?IdentitySet {
        return $this->gradedBy;
    }

    /**
     * Gets the gradedDateTime property value. Moment in time when the grade was applied to this submission object. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getGradedDateTime(): ?DateTime {
        return $this->gradedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('gradedBy', $this->gradedBy);
        $writer->writeDateTimeValue('gradedDateTime', $this->gradedDateTime);
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
     * Sets the gradedBy property value. User who did the grading.
     *  @param IdentitySet|null $value Value to set for the gradedBy property.
    */
    public function setGradedBy(?IdentitySet $value ): void {
        $this->gradedBy = $value;
    }

    /**
     * Sets the gradedDateTime property value. Moment in time when the grade was applied to this submission object. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the gradedDateTime property.
    */
    public function setGradedDateTime(?DateTime $value ): void {
        $this->gradedDateTime = $value;
    }

}
