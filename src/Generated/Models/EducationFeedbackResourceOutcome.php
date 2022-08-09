<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationFeedbackResourceOutcome extends EducationOutcome implements Parsable 
{
    /**
     * @var EducationResource|null $feedbackResource The actual feedback resource.
    */
    private ?EducationResource $feedbackResource = null;
    
    /**
     * @var EducationFeedbackResourceOutcomeStatus|null $resourceStatus The status of the feedback resource. The possible values are: notPublished, pendingPublish, published, failedPublish, and unknownFutureValue.
    */
    private ?EducationFeedbackResourceOutcomeStatus $resourceStatus = null;
    
    /**
     * Instantiates a new EducationFeedbackResourceOutcome and sets the default values.
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
        return $this->feedbackResource;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'feedbackResource' => function (ParseNode $n) use ($o) { $o->setFeedbackResource($n->getObjectValue(array(EducationResource::class, 'createFromDiscriminatorValue'))); },
            'resourceStatus' => function (ParseNode $n) use ($o) { $o->setResourceStatus($n->getEnumValue(EducationFeedbackResourceOutcomeStatus::class)); },
        ]);
    }

    /**
     * Gets the resourceStatus property value. The status of the feedback resource. The possible values are: notPublished, pendingPublish, published, failedPublish, and unknownFutureValue.
     * @return EducationFeedbackResourceOutcomeStatus|null
    */
    public function getResourceStatus(): ?EducationFeedbackResourceOutcomeStatus {
        return $this->resourceStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('feedbackResource', $this->feedbackResource);
        $writer->writeEnumValue('resourceStatus', $this->resourceStatus);
    }

    /**
     * Sets the feedbackResource property value. The actual feedback resource.
     *  @param EducationResource|null $value Value to set for the feedbackResource property.
    */
    public function setFeedbackResource(?EducationResource $value ): void {
        $this->feedbackResource = $value;
    }

    /**
     * Sets the resourceStatus property value. The status of the feedback resource. The possible values are: notPublished, pendingPublish, published, failedPublish, and unknownFutureValue.
     *  @param EducationFeedbackResourceOutcomeStatus|null $value Value to set for the resourceStatus property.
    */
    public function setResourceStatus(?EducationFeedbackResourceOutcomeStatus $value ): void {
        $this->resourceStatus = $value;
    }

}
