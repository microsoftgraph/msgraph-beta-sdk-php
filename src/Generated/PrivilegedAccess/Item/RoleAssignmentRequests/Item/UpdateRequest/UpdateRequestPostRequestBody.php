<?php

namespace Microsoft\Graph\Beta\Generated\PrivilegedAccess\Item\RoleAssignmentRequests\Item\UpdateRequest;

use Microsoft\Graph\Beta\Generated\Models\GovernanceSchedule;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UpdateRequestPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UpdateRequestPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateRequestPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateRequestPostRequestBody {
        return new UpdateRequestPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the assignmentState property value. The assignmentState property
     * @return string|null
    */
    public function getAssignmentState(): ?string {
        $val = $this->getBackingStore()->get('assignmentState');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentState'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the decision property value. The decision property
     * @return string|null
    */
    public function getDecision(): ?string {
        $val = $this->getBackingStore()->get('decision');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'decision'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignmentState' => fn(ParseNode $n) => $o->setAssignmentState($n->getStringValue()),
            'decision' => fn(ParseNode $n) => $o->setDecision($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'schedule' => fn(ParseNode $n) => $o->setSchedule($n->getObjectValue([GovernanceSchedule::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the reason property value. The reason property
     * @return string|null
    */
    public function getReason(): ?string {
        $val = $this->getBackingStore()->get('reason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reason'");
    }

    /**
     * Gets the schedule property value. The schedule property
     * @return GovernanceSchedule|null
    */
    public function getSchedule(): ?GovernanceSchedule {
        $val = $this->getBackingStore()->get('schedule');
        if (is_null($val) || $val instanceof GovernanceSchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schedule'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('assignmentState', $this->getAssignmentState());
        $writer->writeStringValue('decision', $this->getDecision());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeObjectValue('schedule', $this->getSchedule());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the assignmentState property value. The assignmentState property
     * @param string|null $value Value to set for the assignmentState property.
    */
    public function setAssignmentState(?string $value): void {
        $this->getBackingStore()->set('assignmentState', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the decision property value. The decision property
     * @param string|null $value Value to set for the decision property.
    */
    public function setDecision(?string $value): void {
        $this->getBackingStore()->set('decision', $value);
    }

    /**
     * Sets the reason property value. The reason property
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->getBackingStore()->set('reason', $value);
    }

    /**
     * Sets the schedule property value. The schedule property
     * @param GovernanceSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?GovernanceSchedule $value): void {
        $this->getBackingStore()->set('schedule', $value);
    }

}
