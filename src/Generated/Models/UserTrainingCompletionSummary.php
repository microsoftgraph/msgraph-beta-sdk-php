<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UserTrainingCompletionSummary implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UserTrainingCompletionSummary and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserTrainingCompletionSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserTrainingCompletionSummary {
        return new UserTrainingCompletionSummary();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the completedUsersCount property value. The completedUsersCount property
     * @return int|null
    */
    public function getCompletedUsersCount(): ?int {
        $val = $this->getBackingStore()->get('completedUsersCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedUsersCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'completedUsersCount' => fn(ParseNode $n) => $o->setCompletedUsersCount($n->getIntegerValue()),
            'inProgressUsersCount' => fn(ParseNode $n) => $o->setInProgressUsersCount($n->getIntegerValue()),
            'notCompletedUsersCount' => fn(ParseNode $n) => $o->setNotCompletedUsersCount($n->getIntegerValue()),
            'notStartedUsersCount' => fn(ParseNode $n) => $o->setNotStartedUsersCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'previouslyAssignedUsersCount' => fn(ParseNode $n) => $o->setPreviouslyAssignedUsersCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the inProgressUsersCount property value. The inProgressUsersCount property
     * @return int|null
    */
    public function getInProgressUsersCount(): ?int {
        $val = $this->getBackingStore()->get('inProgressUsersCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inProgressUsersCount'");
    }

    /**
     * Gets the notCompletedUsersCount property value. The notCompletedUsersCount property
     * @return int|null
    */
    public function getNotCompletedUsersCount(): ?int {
        $val = $this->getBackingStore()->get('notCompletedUsersCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notCompletedUsersCount'");
    }

    /**
     * Gets the notStartedUsersCount property value. The notStartedUsersCount property
     * @return int|null
    */
    public function getNotStartedUsersCount(): ?int {
        $val = $this->getBackingStore()->get('notStartedUsersCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notStartedUsersCount'");
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
     * Gets the previouslyAssignedUsersCount property value. The previouslyAssignedUsersCount property
     * @return int|null
    */
    public function getPreviouslyAssignedUsersCount(): ?int {
        $val = $this->getBackingStore()->get('previouslyAssignedUsersCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'previouslyAssignedUsersCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('completedUsersCount', $this->getCompletedUsersCount());
        $writer->writeIntegerValue('inProgressUsersCount', $this->getInProgressUsersCount());
        $writer->writeIntegerValue('notCompletedUsersCount', $this->getNotCompletedUsersCount());
        $writer->writeIntegerValue('notStartedUsersCount', $this->getNotStartedUsersCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('previouslyAssignedUsersCount', $this->getPreviouslyAssignedUsersCount());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the completedUsersCount property value. The completedUsersCount property
     * @param int|null $value Value to set for the completedUsersCount property.
    */
    public function setCompletedUsersCount(?int $value): void {
        $this->getBackingStore()->set('completedUsersCount', $value);
    }

    /**
     * Sets the inProgressUsersCount property value. The inProgressUsersCount property
     * @param int|null $value Value to set for the inProgressUsersCount property.
    */
    public function setInProgressUsersCount(?int $value): void {
        $this->getBackingStore()->set('inProgressUsersCount', $value);
    }

    /**
     * Sets the notCompletedUsersCount property value. The notCompletedUsersCount property
     * @param int|null $value Value to set for the notCompletedUsersCount property.
    */
    public function setNotCompletedUsersCount(?int $value): void {
        $this->getBackingStore()->set('notCompletedUsersCount', $value);
    }

    /**
     * Sets the notStartedUsersCount property value. The notStartedUsersCount property
     * @param int|null $value Value to set for the notStartedUsersCount property.
    */
    public function setNotStartedUsersCount(?int $value): void {
        $this->getBackingStore()->set('notStartedUsersCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the previouslyAssignedUsersCount property value. The previouslyAssignedUsersCount property
     * @param int|null $value Value to set for the previouslyAssignedUsersCount property.
    */
    public function setPreviouslyAssignedUsersCount(?int $value): void {
        $this->getBackingStore()->set('previouslyAssignedUsersCount', $value);
    }

}
