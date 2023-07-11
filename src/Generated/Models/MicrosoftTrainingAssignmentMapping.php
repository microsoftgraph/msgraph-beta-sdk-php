<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MicrosoftTrainingAssignmentMapping extends TrainingSetting implements Parsable 
{
    /**
     * Instantiates a new microsoftTrainingAssignmentMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.microsoftTrainingAssignmentMapping');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftTrainingAssignmentMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftTrainingAssignmentMapping {
        return new MicrosoftTrainingAssignmentMapping();
    }

    /**
     * Gets the assignedTo property value. The assignedTo property
     * @return array<TrainingAssignedTo>|null
    */
    public function getAssignedTo(): ?array {
        $val = $this->getBackingStore()->get('assignedTo');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TrainingAssignedTo::class);
            /** @var array<TrainingAssignedTo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedTo'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedTo' => fn(ParseNode $n) => $o->setAssignedTo($n->getCollectionOfEnumValues(TrainingAssignedTo::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'training' => fn(ParseNode $n) => $o->setTraining($n->getObjectValue([Training::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the training property value. The training property
     * @return Training|null
    */
    public function getTraining(): ?Training {
        $val = $this->getBackingStore()->get('training');
        if (is_null($val) || $val instanceof Training) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'training'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfEnumValues('assignedTo', $this->getAssignedTo());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('training', $this->getTraining());
    }

    /**
     * Sets the assignedTo property value. The assignedTo property
     * @param array<TrainingAssignedTo>|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?array $value): void {
        $this->getBackingStore()->set('assignedTo', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the training property value. The training property
     * @param Training|null $value Value to set for the training property.
    */
    public function setTraining(?Training $value): void {
        $this->getBackingStore()->set('training', $value);
    }

}
