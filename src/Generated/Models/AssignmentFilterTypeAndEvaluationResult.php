<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignmentFilterTypeAndEvaluationResult implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var DeviceAndAppManagementAssignmentFilterType|null $assignmentFilterType Represents the filter type. Possible values are: none, include, exclude. */
    private ?DeviceAndAppManagementAssignmentFilterType $assignmentFilterType = null;
    
    /** @var AssignmentFilterEvaluationResult|null $evaluationResult Represents the evalaution result of the filter. Possible values are: unknown, match, notMatch, inconclusive, failure, notEvaluated. */
    private ?AssignmentFilterEvaluationResult $evaluationResult = null;
    
    /**
     * Instantiates a new assignmentFilterTypeAndEvaluationResult and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignmentFilterTypeAndEvaluationResult
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AssignmentFilterTypeAndEvaluationResult {
        return new AssignmentFilterTypeAndEvaluationResult();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignmentFilterType property value. Represents the filter type. Possible values are: none, include, exclude.
     * @return DeviceAndAppManagementAssignmentFilterType|null
    */
    public function getAssignmentFilterType(): ?DeviceAndAppManagementAssignmentFilterType {
        return $this->assignmentFilterType;
    }

    /**
     * Gets the evaluationResult property value. Represents the evalaution result of the filter. Possible values are: unknown, match, notMatch, inconclusive, failure, notEvaluated.
     * @return AssignmentFilterEvaluationResult|null
    */
    public function getEvaluationResult(): ?AssignmentFilterEvaluationResult {
        return $this->evaluationResult;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'assignmentFilterType' => function (self $o, ParseNode $n) { $o->setAssignmentFilterType($n->getEnumValue(DeviceAndAppManagementAssignmentFilterType::class)); },
            'evaluationResult' => function (self $o, ParseNode $n) { $o->setEvaluationResult($n->getEnumValue(AssignmentFilterEvaluationResult::class)); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('assignmentFilterType', $this->assignmentFilterType);
        $writer->writeEnumValue('evaluationResult', $this->evaluationResult);
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
     * Sets the assignmentFilterType property value. Represents the filter type. Possible values are: none, include, exclude.
     *  @param DeviceAndAppManagementAssignmentFilterType|null $value Value to set for the assignmentFilterType property.
    */
    public function setAssignmentFilterType(?DeviceAndAppManagementAssignmentFilterType $value ): void {
        $this->assignmentFilterType = $value;
    }

    /**
     * Sets the evaluationResult property value. Represents the evalaution result of the filter. Possible values are: unknown, match, notMatch, inconclusive, failure, notEvaluated.
     *  @param AssignmentFilterEvaluationResult|null $value Value to set for the evaluationResult property.
    */
    public function setEvaluationResult(?AssignmentFilterEvaluationResult $value ): void {
        $this->evaluationResult = $value;
    }

}
