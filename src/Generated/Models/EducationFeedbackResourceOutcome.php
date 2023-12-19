<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationFeedbackResourceOutcome extends EducationOutcome implements Parsable 
{
    /**
     * Instantiates a new educationFeedbackResourceOutcome and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationFeedbackResourceOutcome');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationFeedbackResourceOutcome
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationFeedbackResourceOutcome {
        return new EducationFeedbackResourceOutcome();
    }

    /**
     * Gets the feedbackResource property value. The actual feedback resource.
     * @return EducationResource|null
    */
    public function getFeedbackResource(): ?EducationResource {
        $val = $this->getBackingStore()->get('feedbackResource');
        if (is_null($val) || $val instanceof EducationResource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'feedbackResource'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'feedbackResource' => fn(ParseNode $n) => $o->setFeedbackResource($n->getObjectValue([EducationResource::class, 'createFromDiscriminatorValue'])),
            'resourceStatus' => fn(ParseNode $n) => $o->setResourceStatus($n->getEnumValue(EducationFeedbackResourceOutcome_resourceStatus::class)),
        ]);
    }

    /**
     * Gets the resourceStatus property value. The status of the feedback resource. The possible values are: notPublished, pendingPublish, published, failedPublish, unknownFutureValue.
     * @return EducationFeedbackResourceOutcome_resourceStatus|null
    */
    public function getResourceStatus(): ?EducationFeedbackResourceOutcome_resourceStatus {
        $val = $this->getBackingStore()->get('resourceStatus');
        if (is_null($val) || $val instanceof EducationFeedbackResourceOutcome_resourceStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('feedbackResource', $this->getFeedbackResource());
        $writer->writeEnumValue('resourceStatus', $this->getResourceStatus());
    }

    /**
     * Sets the feedbackResource property value. The actual feedback resource.
     * @param EducationResource|null $value Value to set for the feedbackResource property.
    */
    public function setFeedbackResource(?EducationResource $value): void {
        $this->getBackingStore()->set('feedbackResource', $value);
    }

    /**
     * Sets the resourceStatus property value. The status of the feedback resource. The possible values are: notPublished, pendingPublish, published, failedPublish, unknownFutureValue.
     * @param EducationFeedbackResourceOutcome_resourceStatus|null $value Value to set for the resourceStatus property.
    */
    public function setResourceStatus(?EducationFeedbackResourceOutcome_resourceStatus $value): void {
        $this->getBackingStore()->set('resourceStatus', $value);
    }

}
