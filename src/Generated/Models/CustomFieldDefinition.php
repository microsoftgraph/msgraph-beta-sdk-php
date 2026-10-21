<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CustomFieldDefinition extends PlannerDelta implements Parsable 
{
    /**
     * Instantiates a new CustomFieldDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomFieldDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomFieldDefinition {
        return new CustomFieldDefinition();
    }

    /**
     * Gets the archivalInfo property value. Information about whether the entity is archived, and when it was archived.
     * @return PlannerArchivalInfo|null
    */
    public function getArchivalInfo(): ?PlannerArchivalInfo {
        $val = $this->getBackingStore()->get('archivalInfo');
        if (is_null($val) || $val instanceof PlannerArchivalInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'archivalInfo'");
    }

    /**
     * Gets the choiceOptions property value. The collection of selectable choice options for a single-choice or multiple-choice custom field. Read-only. Nullable.
     * @return array<CustomChoiceOption>|null
    */
    public function getChoiceOptions(): ?array {
        $val = $this->getBackingStore()->get('choiceOptions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomChoiceOption::class);
            /** @var array<CustomChoiceOption>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'choiceOptions'");
    }

    /**
     * Gets the createdBy property value. Identity of the user (or application) who created the entity. Read-only.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. Date and time the entity was created. The value is represented in ISO 8601 format and is always in UTC time. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the deletedBy property value. Identity of the user who deleted the custom field definition, if it was deleted.
     * @return IdentitySet|null
    */
    public function getDeletedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('deletedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deletedBy'");
    }

    /**
     * Gets the deletedDateTime property value. Date and time the custom field definition was deleted, if applicable.
     * @return DateTime|null
    */
    public function getDeletedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('deletedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deletedDateTime'");
    }

    /**
     * Gets the displayName property value. Name of the custom field.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'archivalInfo' => fn(ParseNode $n) => $o->setArchivalInfo($n->getObjectValue([PlannerArchivalInfo::class, 'createFromDiscriminatorValue'])),
            'choiceOptions' => fn(ParseNode $n) => $o->setChoiceOptions($n->getCollectionOfObjectValues([CustomChoiceOption::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deletedBy' => fn(ParseNode $n) => $o->setDeletedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'deletedDateTime' => fn(ParseNode $n) => $o->setDeletedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'planId' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
            'rollupType' => fn(ParseNode $n) => $o->setRollupType($n->getEnumValue(CustomFieldRollupType::class)),
            'valueType' => fn(ParseNode $n) => $o->setValueType($n->getEnumValue(CustomFieldValueType::class)),
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the user (or application) who last modified the entity. Read-only.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Date and time the entity was last modified. The value is represented in ISO 8601 format and is always in UTC time. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the planId property value. ID of the plan the custom field is defined on. Required, and immutable after creation.
     * @return string|null
    */
    public function getPlanId(): ?string {
        $val = $this->getBackingStore()->get('planId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'planId'");
    }

    /**
     * Gets the rollupType property value. How values of this custom field are rolled up across tasks. The possible values are: noRollup, max, min, sum, average, unknownFutureValue.
     * @return CustomFieldRollupType|null
    */
    public function getRollupType(): ?CustomFieldRollupType {
        $val = $this->getBackingStore()->get('rollupType');
        if (is_null($val) || $val instanceof CustomFieldRollupType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rollupType'");
    }

    /**
     * Gets the valueType property value. Data type of the custom field's values.. The possible values are: text, date, utcDateTime, number, decimal, flag, singleChoiceText, multipleChoiceText, unknownFutureValue.
     * @return CustomFieldValueType|null
    */
    public function getValueType(): ?CustomFieldValueType {
        $val = $this->getBackingStore()->get('valueType');
        if (is_null($val) || $val instanceof CustomFieldValueType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'valueType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('archivalInfo', $this->getArchivalInfo());
        $writer->writeCollectionOfObjectValues('choiceOptions', $this->getChoiceOptions());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('planId', $this->getPlanId());
        $writer->writeEnumValue('rollupType', $this->getRollupType());
        $writer->writeEnumValue('valueType', $this->getValueType());
    }

    /**
     * Sets the archivalInfo property value. Information about whether the entity is archived, and when it was archived.
     * @param PlannerArchivalInfo|null $value Value to set for the archivalInfo property.
    */
    public function setArchivalInfo(?PlannerArchivalInfo $value): void {
        $this->getBackingStore()->set('archivalInfo', $value);
    }

    /**
     * Sets the choiceOptions property value. The collection of selectable choice options for a single-choice or multiple-choice custom field. Read-only. Nullable.
     * @param array<CustomChoiceOption>|null $value Value to set for the choiceOptions property.
    */
    public function setChoiceOptions(?array $value): void {
        $this->getBackingStore()->set('choiceOptions', $value);
    }

    /**
     * Sets the createdBy property value. Identity of the user (or application) who created the entity. Read-only.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time the entity was created. The value is represented in ISO 8601 format and is always in UTC time. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deletedBy property value. Identity of the user who deleted the custom field definition, if it was deleted.
     * @param IdentitySet|null $value Value to set for the deletedBy property.
    */
    public function setDeletedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('deletedBy', $value);
    }

    /**
     * Sets the deletedDateTime property value. Date and time the custom field definition was deleted, if applicable.
     * @param DateTime|null $value Value to set for the deletedDateTime property.
    */
    public function setDeletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('deletedDateTime', $value);
    }

    /**
     * Sets the displayName property value. Name of the custom field.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the user (or application) who last modified the entity. Read-only.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Date and time the entity was last modified. The value is represented in ISO 8601 format and is always in UTC time. Read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the planId property value. ID of the plan the custom field is defined on. Required, and immutable after creation.
     * @param string|null $value Value to set for the planId property.
    */
    public function setPlanId(?string $value): void {
        $this->getBackingStore()->set('planId', $value);
    }

    /**
     * Sets the rollupType property value. How values of this custom field are rolled up across tasks. The possible values are: noRollup, max, min, sum, average, unknownFutureValue.
     * @param CustomFieldRollupType|null $value Value to set for the rollupType property.
    */
    public function setRollupType(?CustomFieldRollupType $value): void {
        $this->getBackingStore()->set('rollupType', $value);
    }

    /**
     * Sets the valueType property value. Data type of the custom field's values.. The possible values are: text, date, utcDateTime, number, decimal, flag, singleChoiceText, multipleChoiceText, unknownFutureValue.
     * @param CustomFieldValueType|null $value Value to set for the valueType property.
    */
    public function setValueType(?CustomFieldValueType $value): void {
        $this->getBackingStore()->set('valueType', $value);
    }

}
