<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignmentFilterTypeAndEvaluationResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DeviceAndAppManagementAssignmentFilterType|null $assignmentFilterType Represents type of the assignment filter.
    */
    private ?DeviceAndAppManagementAssignmentFilterType $assignmentFilterType = null;
    
    /**
     * @var AssignmentFilterEvaluationResult|null $evaluationResult Supported evaluation results for filter.
    */
    private ?AssignmentFilterEvaluationResult $evaluationResult = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new assignmentFilterTypeAndEvaluationResult and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.assignmentFilterTypeAndEvaluationResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignmentFilterTypeAndEvaluationResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignmentFilterTypeAndEvaluationResult {
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
     * Gets the assignmentFilterType property value. Represents type of the assignment filter.
     * @return DeviceAndAppManagementAssignmentFilterType|null
    */
    public function getAssignmentFilterType(): ?DeviceAndAppManagementAssignmentFilterType {
        return $this->assignmentFilterType;
    }

    /**
     * Gets the evaluationResult property value. Supported evaluation results for filter.
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
        $o = $this;
        return  [
            'assignmentFilterType' => function (ParseNode $n) use ($o) { $o->setAssignmentFilterType($n->getEnumValue(DeviceAndAppManagementAssignmentFilterType::class)); },
            'evaluationResult' => function (ParseNode $n) use ($o) { $o->setEvaluationResult($n->getEnumValue(AssignmentFilterEvaluationResult::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('assignmentFilterType', $this->assignmentFilterType);
        $writer->writeEnumValue('evaluationResult', $this->evaluationResult);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the assignmentFilterType property value. Represents type of the assignment filter.
     *  @param DeviceAndAppManagementAssignmentFilterType|null $value Value to set for the assignmentFilterType property.
    */
    public function setAssignmentFilterType(?DeviceAndAppManagementAssignmentFilterType $value ): void {
        $this->assignmentFilterType = $value;
    }

    /**
     * Sets the evaluationResult property value. Supported evaluation results for filter.
     *  @param AssignmentFilterEvaluationResult|null $value Value to set for the evaluationResult property.
    */
    public function setEvaluationResult(?AssignmentFilterEvaluationResult $value ): void {
        $this->evaluationResult = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
