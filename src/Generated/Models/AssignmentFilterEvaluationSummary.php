<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignmentFilterEvaluationSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $assignmentFilterDisplayName The admin defined name for assignment filter.
    */
    private ?string $assignmentFilterDisplayName = null;
    
    /**
     * @var string|null $assignmentFilterId Unique identifier for the assignment filter object
    */
    private ?string $assignmentFilterId = null;
    
    /**
     * @var DateTime|null $assignmentFilterLastModifiedDateTime The time the assignment filter was last modified.
    */
    private ?DateTime $assignmentFilterLastModifiedDateTime = null;
    
    /**
     * @var DevicePlatformType|null $assignmentFilterPlatform Supported platform types.
    */
    private ?DevicePlatformType $assignmentFilterPlatform = null;
    
    /**
     * @var DeviceAndAppManagementAssignmentFilterType|null $assignmentFilterType Represents type of the assignment filter.
    */
    private ?DeviceAndAppManagementAssignmentFilterType $assignmentFilterType = null;
    
    /**
     * @var array<AssignmentFilterTypeAndEvaluationResult>|null $assignmentFilterTypeAndEvaluationResults A collection of filter types and their corresponding evaluation results.
    */
    private ?array $assignmentFilterTypeAndEvaluationResults = null;
    
    /**
     * @var DateTime|null $evaluationDateTime The time assignment filter was evaluated.
    */
    private ?DateTime $evaluationDateTime = null;
    
    /**
     * @var AssignmentFilterEvaluationResult|null $evaluationResult Supported evaluation results for filter.
    */
    private ?AssignmentFilterEvaluationResult $evaluationResult = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new assignmentFilterEvaluationSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.assignmentFilterEvaluationSummary');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignmentFilterEvaluationSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignmentFilterEvaluationSummary {
        return new AssignmentFilterEvaluationSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignmentFilterDisplayName property value. The admin defined name for assignment filter.
     * @return string|null
    */
    public function getAssignmentFilterDisplayName(): ?string {
        return $this->assignmentFilterDisplayName;
    }

    /**
     * Gets the assignmentFilterId property value. Unique identifier for the assignment filter object
     * @return string|null
    */
    public function getAssignmentFilterId(): ?string {
        return $this->assignmentFilterId;
    }

    /**
     * Gets the assignmentFilterLastModifiedDateTime property value. The time the assignment filter was last modified.
     * @return DateTime|null
    */
    public function getAssignmentFilterLastModifiedDateTime(): ?DateTime {
        return $this->assignmentFilterLastModifiedDateTime;
    }

    /**
     * Gets the assignmentFilterPlatform property value. Supported platform types.
     * @return DevicePlatformType|null
    */
    public function getAssignmentFilterPlatform(): ?DevicePlatformType {
        return $this->assignmentFilterPlatform;
    }

    /**
     * Gets the assignmentFilterType property value. Represents type of the assignment filter.
     * @return DeviceAndAppManagementAssignmentFilterType|null
    */
    public function getAssignmentFilterType(): ?DeviceAndAppManagementAssignmentFilterType {
        return $this->assignmentFilterType;
    }

    /**
     * Gets the assignmentFilterTypeAndEvaluationResults property value. A collection of filter types and their corresponding evaluation results.
     * @return array<AssignmentFilterTypeAndEvaluationResult>|null
    */
    public function getAssignmentFilterTypeAndEvaluationResults(): ?array {
        return $this->assignmentFilterTypeAndEvaluationResults;
    }

    /**
     * Gets the evaluationDateTime property value. The time assignment filter was evaluated.
     * @return DateTime|null
    */
    public function getEvaluationDateTime(): ?DateTime {
        return $this->evaluationDateTime;
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
            'assignmentFilterDisplayName' => function (ParseNode $n) use ($o) { $o->setAssignmentFilterDisplayName($n->getStringValue()); },
            'assignmentFilterId' => function (ParseNode $n) use ($o) { $o->setAssignmentFilterId($n->getStringValue()); },
            'assignmentFilterLastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setAssignmentFilterLastModifiedDateTime($n->getDateTimeValue()); },
            'assignmentFilterPlatform' => function (ParseNode $n) use ($o) { $o->setAssignmentFilterPlatform($n->getEnumValue(DevicePlatformType::class)); },
            'assignmentFilterType' => function (ParseNode $n) use ($o) { $o->setAssignmentFilterType($n->getEnumValue(DeviceAndAppManagementAssignmentFilterType::class)); },
            'assignmentFilterTypeAndEvaluationResults' => function (ParseNode $n) use ($o) { $o->setAssignmentFilterTypeAndEvaluationResults($n->getCollectionOfObjectValues(array(AssignmentFilterTypeAndEvaluationResult::class, 'createFromDiscriminatorValue'))); },
            'evaluationDateTime' => function (ParseNode $n) use ($o) { $o->setEvaluationDateTime($n->getDateTimeValue()); },
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
        $writer->writeStringValue('assignmentFilterDisplayName', $this->assignmentFilterDisplayName);
        $writer->writeStringValue('assignmentFilterId', $this->assignmentFilterId);
        $writer->writeDateTimeValue('assignmentFilterLastModifiedDateTime', $this->assignmentFilterLastModifiedDateTime);
        $writer->writeEnumValue('assignmentFilterPlatform', $this->assignmentFilterPlatform);
        $writer->writeEnumValue('assignmentFilterType', $this->assignmentFilterType);
        $writer->writeCollectionOfObjectValues('assignmentFilterTypeAndEvaluationResults', $this->assignmentFilterTypeAndEvaluationResults);
        $writer->writeDateTimeValue('evaluationDateTime', $this->evaluationDateTime);
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
     * Sets the assignmentFilterDisplayName property value. The admin defined name for assignment filter.
     *  @param string|null $value Value to set for the assignmentFilterDisplayName property.
    */
    public function setAssignmentFilterDisplayName(?string $value ): void {
        $this->assignmentFilterDisplayName = $value;
    }

    /**
     * Sets the assignmentFilterId property value. Unique identifier for the assignment filter object
     *  @param string|null $value Value to set for the assignmentFilterId property.
    */
    public function setAssignmentFilterId(?string $value ): void {
        $this->assignmentFilterId = $value;
    }

    /**
     * Sets the assignmentFilterLastModifiedDateTime property value. The time the assignment filter was last modified.
     *  @param DateTime|null $value Value to set for the assignmentFilterLastModifiedDateTime property.
    */
    public function setAssignmentFilterLastModifiedDateTime(?DateTime $value ): void {
        $this->assignmentFilterLastModifiedDateTime = $value;
    }

    /**
     * Sets the assignmentFilterPlatform property value. Supported platform types.
     *  @param DevicePlatformType|null $value Value to set for the assignmentFilterPlatform property.
    */
    public function setAssignmentFilterPlatform(?DevicePlatformType $value ): void {
        $this->assignmentFilterPlatform = $value;
    }

    /**
     * Sets the assignmentFilterType property value. Represents type of the assignment filter.
     *  @param DeviceAndAppManagementAssignmentFilterType|null $value Value to set for the assignmentFilterType property.
    */
    public function setAssignmentFilterType(?DeviceAndAppManagementAssignmentFilterType $value ): void {
        $this->assignmentFilterType = $value;
    }

    /**
     * Sets the assignmentFilterTypeAndEvaluationResults property value. A collection of filter types and their corresponding evaluation results.
     *  @param array<AssignmentFilterTypeAndEvaluationResult>|null $value Value to set for the assignmentFilterTypeAndEvaluationResults property.
    */
    public function setAssignmentFilterTypeAndEvaluationResults(?array $value ): void {
        $this->assignmentFilterTypeAndEvaluationResults = $value;
    }

    /**
     * Sets the evaluationDateTime property value. The time assignment filter was evaluated.
     *  @param DateTime|null $value Value to set for the evaluationDateTime property.
    */
    public function setEvaluationDateTime(?DateTime $value ): void {
        $this->evaluationDateTime = $value;
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
