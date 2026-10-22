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

class PlannerArchivalInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PlannerArchivalInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerArchivalInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerArchivalInfo {
        return new PlannerArchivalInfo();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'isArchived' => fn(ParseNode $n) => $o->setIsArchived($n->getBooleanValue()),
            'justification' => fn(ParseNode $n) => $o->setJustification($n->getStringValue()),
            'modifiedBy' => fn(ParseNode $n) => $o->setModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'modifiedDateTime' => fn(ParseNode $n) => $o->setModifiedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'statusChangedBy' => fn(ParseNode $n) => $o->setStatusChangedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'statusChangedDateTime' => fn(ParseNode $n) => $o->setStatusChangedDateTime($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the isArchived property value. Read-only. Indicates whether the entity is archived.
     * @return bool|null
    */
    public function getIsArchived(): ?bool {
        $val = $this->getBackingStore()->get('isArchived');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isArchived'");
    }

    /**
     * Gets the justification property value. Read-only. Reason why the entity was archived or unarchived.
     * @return string|null
    */
    public function getJustification(): ?string {
        $val = $this->getBackingStore()->get('justification');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'justification'");
    }

    /**
     * Gets the modifiedBy property value. Read-only. Identity of the user who archived or unarchived the entity.
     * @return IdentitySet|null
    */
    public function getModifiedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('modifiedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modifiedBy'");
    }

    /**
     * Gets the modifiedDateTime property value. Read-only. Date and time at which the entity's archive status changed.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('modifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modifiedDateTime'");
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
     * Gets the statusChangedBy property value. Read-only. Identity of the user who archived or unarchived the entity
     * @return IdentitySet|null
    */
    public function getStatusChangedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('statusChangedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statusChangedBy'");
    }

    /**
     * Gets the statusChangedDateTime property value. Read-only. Date and time at which the entity's archive status changed.
     * @return DateTime|null
    */
    public function getStatusChangedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('statusChangedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statusChangedDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isArchived', $this->getIsArchived());
        $writer->writeStringValue('justification', $this->getJustification());
        $writer->writeObjectValue('modifiedBy', $this->getModifiedBy());
        $writer->writeDateTimeValue('modifiedDateTime', $this->getModifiedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('statusChangedBy', $this->getStatusChangedBy());
        $writer->writeDateTimeValue('statusChangedDateTime', $this->getStatusChangedDateTime());
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
     * Sets the isArchived property value. Read-only. Indicates whether the entity is archived.
     * @param bool|null $value Value to set for the isArchived property.
    */
    public function setIsArchived(?bool $value): void {
        $this->getBackingStore()->set('isArchived', $value);
    }

    /**
     * Sets the justification property value. Read-only. Reason why the entity was archived or unarchived.
     * @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value): void {
        $this->getBackingStore()->set('justification', $value);
    }

    /**
     * Sets the modifiedBy property value. Read-only. Identity of the user who archived or unarchived the entity.
     * @param IdentitySet|null $value Value to set for the modifiedBy property.
    */
    public function setModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('modifiedBy', $value);
    }

    /**
     * Sets the modifiedDateTime property value. Read-only. Date and time at which the entity's archive status changed.
     * @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('modifiedDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the statusChangedBy property value. Read-only. Identity of the user who archived or unarchived the entity
     * @param IdentitySet|null $value Value to set for the statusChangedBy property.
    */
    public function setStatusChangedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('statusChangedBy', $value);
    }

    /**
     * Sets the statusChangedDateTime property value. Read-only. Date and time at which the entity's archive status changed.
     * @param DateTime|null $value Value to set for the statusChangedDateTime property.
    */
    public function setStatusChangedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('statusChangedDateTime', $value);
    }

}
