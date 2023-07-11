<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Represent result summary for assignment filter evaluation
*/
class AssignmentFilterEvaluationSummary implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new assignmentFilterEvaluationSummary and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the assignmentFilterDisplayName property value. The admin defined name for assignment filter.
     * @return string|null
    */
    public function getAssignmentFilterDisplayName(): ?string {
        $val = $this->getBackingStore()->get('assignmentFilterDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentFilterDisplayName'");
    }

    /**
     * Gets the assignmentFilterId property value. Unique identifier for the assignment filter object
     * @return string|null
    */
    public function getAssignmentFilterId(): ?string {
        $val = $this->getBackingStore()->get('assignmentFilterId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentFilterId'");
    }

    /**
     * Gets the assignmentFilterLastModifiedDateTime property value. The time the assignment filter was last modified.
     * @return DateTime|null
    */
    public function getAssignmentFilterLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('assignmentFilterLastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentFilterLastModifiedDateTime'");
    }

    /**
     * Gets the assignmentFilterPlatform property value. Supported platform types.
     * @return DevicePlatformType|null
    */
    public function getAssignmentFilterPlatform(): ?DevicePlatformType {
        $val = $this->getBackingStore()->get('assignmentFilterPlatform');
        if (is_null($val) || $val instanceof DevicePlatformType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentFilterPlatform'");
    }

    /**
     * Gets the assignmentFilterType property value. Represents type of the assignment filter.
     * @return DeviceAndAppManagementAssignmentFilterType|null
    */
    public function getAssignmentFilterType(): ?DeviceAndAppManagementAssignmentFilterType {
        $val = $this->getBackingStore()->get('assignmentFilterType');
        if (is_null($val) || $val instanceof DeviceAndAppManagementAssignmentFilterType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentFilterType'");
    }

    /**
     * Gets the assignmentFilterTypeAndEvaluationResults property value. A collection of filter types and their corresponding evaluation results.
     * @return array<AssignmentFilterTypeAndEvaluationResult>|null
    */
    public function getAssignmentFilterTypeAndEvaluationResults(): ?array {
        $val = $this->getBackingStore()->get('assignmentFilterTypeAndEvaluationResults');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AssignmentFilterTypeAndEvaluationResult::class);
            /** @var array<AssignmentFilterTypeAndEvaluationResult>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentFilterTypeAndEvaluationResults'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the evaluationDateTime property value. The time assignment filter was evaluated.
     * @return DateTime|null
    */
    public function getEvaluationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('evaluationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'evaluationDateTime'");
    }

    /**
     * Gets the evaluationResult property value. Supported evaluation results for filter.
     * @return AssignmentFilterEvaluationResult|null
    */
    public function getEvaluationResult(): ?AssignmentFilterEvaluationResult {
        $val = $this->getBackingStore()->get('evaluationResult');
        if (is_null($val) || $val instanceof AssignmentFilterEvaluationResult) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'evaluationResult'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignmentFilterDisplayName' => fn(ParseNode $n) => $o->setAssignmentFilterDisplayName($n->getStringValue()),
            'assignmentFilterId' => fn(ParseNode $n) => $o->setAssignmentFilterId($n->getStringValue()),
            'assignmentFilterLastModifiedDateTime' => fn(ParseNode $n) => $o->setAssignmentFilterLastModifiedDateTime($n->getDateTimeValue()),
            'assignmentFilterPlatform' => fn(ParseNode $n) => $o->setAssignmentFilterPlatform($n->getEnumValue(DevicePlatformType::class)),
            'assignmentFilterType' => fn(ParseNode $n) => $o->setAssignmentFilterType($n->getEnumValue(DeviceAndAppManagementAssignmentFilterType::class)),
            'assignmentFilterTypeAndEvaluationResults' => fn(ParseNode $n) => $o->setAssignmentFilterTypeAndEvaluationResults($n->getCollectionOfObjectValues([AssignmentFilterTypeAndEvaluationResult::class, 'createFromDiscriminatorValue'])),
            'evaluationDateTime' => fn(ParseNode $n) => $o->setEvaluationDateTime($n->getDateTimeValue()),
            'evaluationResult' => fn(ParseNode $n) => $o->setEvaluationResult($n->getEnumValue(AssignmentFilterEvaluationResult::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('assignmentFilterDisplayName', $this->getAssignmentFilterDisplayName());
        $writer->writeStringValue('assignmentFilterId', $this->getAssignmentFilterId());
        $writer->writeDateTimeValue('assignmentFilterLastModifiedDateTime', $this->getAssignmentFilterLastModifiedDateTime());
        $writer->writeEnumValue('assignmentFilterPlatform', $this->getAssignmentFilterPlatform());
        $writer->writeEnumValue('assignmentFilterType', $this->getAssignmentFilterType());
        $writer->writeCollectionOfObjectValues('assignmentFilterTypeAndEvaluationResults', $this->getAssignmentFilterTypeAndEvaluationResults());
        $writer->writeDateTimeValue('evaluationDateTime', $this->getEvaluationDateTime());
        $writer->writeEnumValue('evaluationResult', $this->getEvaluationResult());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the assignmentFilterDisplayName property value. The admin defined name for assignment filter.
     * @param string|null $value Value to set for the assignmentFilterDisplayName property.
    */
    public function setAssignmentFilterDisplayName(?string $value): void {
        $this->getBackingStore()->set('assignmentFilterDisplayName', $value);
    }

    /**
     * Sets the assignmentFilterId property value. Unique identifier for the assignment filter object
     * @param string|null $value Value to set for the assignmentFilterId property.
    */
    public function setAssignmentFilterId(?string $value): void {
        $this->getBackingStore()->set('assignmentFilterId', $value);
    }

    /**
     * Sets the assignmentFilterLastModifiedDateTime property value. The time the assignment filter was last modified.
     * @param DateTime|null $value Value to set for the assignmentFilterLastModifiedDateTime property.
    */
    public function setAssignmentFilterLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('assignmentFilterLastModifiedDateTime', $value);
    }

    /**
     * Sets the assignmentFilterPlatform property value. Supported platform types.
     * @param DevicePlatformType|null $value Value to set for the assignmentFilterPlatform property.
    */
    public function setAssignmentFilterPlatform(?DevicePlatformType $value): void {
        $this->getBackingStore()->set('assignmentFilterPlatform', $value);
    }

    /**
     * Sets the assignmentFilterType property value. Represents type of the assignment filter.
     * @param DeviceAndAppManagementAssignmentFilterType|null $value Value to set for the assignmentFilterType property.
    */
    public function setAssignmentFilterType(?DeviceAndAppManagementAssignmentFilterType $value): void {
        $this->getBackingStore()->set('assignmentFilterType', $value);
    }

    /**
     * Sets the assignmentFilterTypeAndEvaluationResults property value. A collection of filter types and their corresponding evaluation results.
     * @param array<AssignmentFilterTypeAndEvaluationResult>|null $value Value to set for the assignmentFilterTypeAndEvaluationResults property.
    */
    public function setAssignmentFilterTypeAndEvaluationResults(?array $value): void {
        $this->getBackingStore()->set('assignmentFilterTypeAndEvaluationResults', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the evaluationDateTime property value. The time assignment filter was evaluated.
     * @param DateTime|null $value Value to set for the evaluationDateTime property.
    */
    public function setEvaluationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('evaluationDateTime', $value);
    }

    /**
     * Sets the evaluationResult property value. Supported evaluation results for filter.
     * @param AssignmentFilterEvaluationResult|null $value Value to set for the evaluationResult property.
    */
    public function setEvaluationResult(?AssignmentFilterEvaluationResult $value): void {
        $this->getBackingStore()->set('evaluationResult', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
