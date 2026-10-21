<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EvaluationIncompleteActivityMetadata extends ProcessContentMetadataBase implements Parsable 
{
    /**
     * Instantiates a new EvaluationIncompleteActivityMetadata and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.evaluationIncompleteActivityMetadata');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EvaluationIncompleteActivityMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EvaluationIncompleteActivityMetadata {
        return new EvaluationIncompleteActivityMetadata();
    }

    /**
     * Gets the errorAction property value. The errorAction property
     * @return ErrorActions|null
    */
    public function getErrorAction(): ?ErrorActions {
        $val = $this->getBackingStore()->get('errorAction');
        if (is_null($val) || $val instanceof ErrorActions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorAction'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'errorAction' => fn(ParseNode $n) => $o->setErrorAction($n->getEnumValue(ErrorActions::class)),
            'inspectionIncompleteReason' => fn(ParseNode $n) => $o->setInspectionIncompleteReason($n->getObjectValue([EvaluationErrorDetail::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the inspectionIncompleteReason property value. The inspectionIncompleteReason property
     * @return EvaluationErrorDetail|null
    */
    public function getInspectionIncompleteReason(): ?EvaluationErrorDetail {
        $val = $this->getBackingStore()->get('inspectionIncompleteReason');
        if (is_null($val) || $val instanceof EvaluationErrorDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inspectionIncompleteReason'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('errorAction', $this->getErrorAction());
        $writer->writeObjectValue('inspectionIncompleteReason', $this->getInspectionIncompleteReason());
    }

    /**
     * Sets the errorAction property value. The errorAction property
     * @param ErrorActions|null $value Value to set for the errorAction property.
    */
    public function setErrorAction(?ErrorActions $value): void {
        $this->getBackingStore()->set('errorAction', $value);
    }

    /**
     * Sets the inspectionIncompleteReason property value. The inspectionIncompleteReason property
     * @param EvaluationErrorDetail|null $value Value to set for the inspectionIncompleteReason property.
    */
    public function setInspectionIncompleteReason(?EvaluationErrorDetail $value): void {
        $this->getBackingStore()->set('inspectionIncompleteReason', $value);
    }

}
