<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InformationProtectionContentLabel implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var AssignmentMethod|null $assignmentMethod Possible values are: standard, privileged, auto. */
    private ?AssignmentMethod $assignmentMethod = null;
    
    /** @var DateTime|null $creationDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    private ?DateTime $creationDateTime = null;
    
    /** @var LabelDetails|null $label Details on the label that is currently applied to the file. */
    private ?LabelDetails $label = null;
    
    /**
     * Instantiates a new informationProtectionContentLabel and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InformationProtectionContentLabel
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): InformationProtectionContentLabel {
        return new InformationProtectionContentLabel();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignmentMethod property value. Possible values are: standard, privileged, auto.
     * @return AssignmentMethod|null
    */
    public function getAssignmentMethod(): ?AssignmentMethod {
        return $this->assignmentMethod;
    }

    /**
     * Gets the creationDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getCreationDateTime(): ?DateTime {
        return $this->creationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'assignmentMethod' => function (self $o, ParseNode $n) { $o->setAssignmentMethod($n->getEnumValue(AssignmentMethod::class)); },
            'creationDateTime' => function (self $o, ParseNode $n) { $o->setCreationDateTime($n->getDateTimeValue()); },
            'label' => function (self $o, ParseNode $n) { $o->setLabel($n->getObjectValue(LabelDetails::class)); },
        ];
    }

    /**
     * Gets the label property value. Details on the label that is currently applied to the file.
     * @return LabelDetails|null
    */
    public function getLabel(): ?LabelDetails {
        return $this->label;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('assignmentMethod', $this->assignmentMethod);
        $writer->writeDateTimeValue('creationDateTime', $this->creationDateTime);
        $writer->writeObjectValue('label', $this->label);
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
     * Sets the assignmentMethod property value. Possible values are: standard, privileged, auto.
     *  @param AssignmentMethod|null $value Value to set for the assignmentMethod property.
    */
    public function setAssignmentMethod(?AssignmentMethod $value ): void {
        $this->assignmentMethod = $value;
    }

    /**
     * Sets the creationDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the creationDateTime property.
    */
    public function setCreationDateTime(?DateTime $value ): void {
        $this->creationDateTime = $value;
    }

    /**
     * Sets the label property value. Details on the label that is currently applied to the file.
     *  @param LabelDetails|null $value Value to set for the label property.
    */
    public function setLabel(?LabelDetails $value ): void {
        $this->label = $value;
    }

}
