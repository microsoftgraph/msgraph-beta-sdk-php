<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SlaPolicyDefinition extends CaseManagementEntity implements Parsable 
{
    /**
     * Instantiates a new SlaPolicyDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.caseManagement.slaPolicyDefinition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SlaPolicyDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SlaPolicyDefinition {
        return new SlaPolicyDefinition();
    }

    /**
     * Gets the description property value. The description of the policy. Maximum length: 5,000 characters.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The display name of the policy. Must be unique across the tenant, using a case-insensitive comparison. Maximum length: 150 characters.
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
     * Gets the exitCriteria property value. The condition that removes a case from the policy's scope.
     * @return SlaPolicyCriteriaBlock|null
    */
    public function getExitCriteria(): ?SlaPolicyCriteriaBlock {
        $val = $this->getBackingStore()->get('exitCriteria');
        if (is_null($val) || $val instanceof SlaPolicyCriteriaBlock) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exitCriteria'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'exitCriteria' => fn(ParseNode $n) => $o->setExitCriteria($n->getObjectValue([SlaPolicyCriteriaBlock::class, 'createFromDiscriminatorValue'])),
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
            'pauseCriteria' => fn(ParseNode $n) => $o->setPauseCriteria($n->getObjectValue([SlaPolicyCriteriaBlock::class, 'createFromDiscriminatorValue'])),
            'recalculateCondition' => fn(ParseNode $n) => $o->setRecalculateCondition($n->getObjectValue([SlaPolicyRecalculateCondition::class, 'createFromDiscriminatorValue'])),
            'setCriteria' => fn(ParseNode $n) => $o->setSetCriteria($n->getObjectValue([SlaPolicyCriteriaBlock::class, 'createFromDiscriminatorValue'])),
            'timers' => fn(ParseNode $n) => $o->setTimers($n->getCollectionOfObjectValues([SlaPolicyTimer::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isActive property value. Whether the policy is actively evaluated. Inactive policies are excluded from new case evaluations. The default value on creation is true.
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        $val = $this->getBackingStore()->get('isActive');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isActive'");
    }

    /**
     * Gets the pauseCriteria property value. The condition that pauses the timer while a case matches it.
     * @return SlaPolicyCriteriaBlock|null
    */
    public function getPauseCriteria(): ?SlaPolicyCriteriaBlock {
        $val = $this->getBackingStore()->get('pauseCriteria');
        if (is_null($val) || $val instanceof SlaPolicyCriteriaBlock) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pauseCriteria'");
    }

    /**
     * Gets the recalculateCondition property value. The settings that control whether elapsed time resets when the policy is recalculated.
     * @return SlaPolicyRecalculateCondition|null
    */
    public function getRecalculateCondition(): ?SlaPolicyRecalculateCondition {
        $val = $this->getBackingStore()->get('recalculateCondition');
        if (is_null($val) || $val instanceof SlaPolicyRecalculateCondition) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recalculateCondition'");
    }

    /**
     * Gets the setCriteria property value. The condition a case must match to enter the policy's scope. When omitted, the policy applies to all cases of its owning case type. The maximum nesting depth is two.
     * @return SlaPolicyCriteriaBlock|null
    */
    public function getSetCriteria(): ?SlaPolicyCriteriaBlock {
        $val = $this->getBackingStore()->get('setCriteria');
        if (is_null($val) || $val instanceof SlaPolicyCriteriaBlock) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'setCriteria'");
    }

    /**
     * Gets the timers property value. The embedded warning and breach timers, evaluated in order, lowest first. Maximum: 15 timers. Exactly one timer must have isDefault set to true. Updating this property replaces the entire collection.
     * @return array<SlaPolicyTimer>|null
    */
    public function getTimers(): ?array {
        $val = $this->getBackingStore()->get('timers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SlaPolicyTimer::class);
            /** @var array<SlaPolicyTimer>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timers'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('exitCriteria', $this->getExitCriteria());
        $writer->writeBooleanValue('isActive', $this->getIsActive());
        $writer->writeObjectValue('pauseCriteria', $this->getPauseCriteria());
        $writer->writeObjectValue('recalculateCondition', $this->getRecalculateCondition());
        $writer->writeObjectValue('setCriteria', $this->getSetCriteria());
        $writer->writeCollectionOfObjectValues('timers', $this->getTimers());
    }

    /**
     * Sets the description property value. The description of the policy. Maximum length: 5,000 characters.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the policy. Must be unique across the tenant, using a case-insensitive comparison. Maximum length: 150 characters.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the exitCriteria property value. The condition that removes a case from the policy's scope.
     * @param SlaPolicyCriteriaBlock|null $value Value to set for the exitCriteria property.
    */
    public function setExitCriteria(?SlaPolicyCriteriaBlock $value): void {
        $this->getBackingStore()->set('exitCriteria', $value);
    }

    /**
     * Sets the isActive property value. Whether the policy is actively evaluated. Inactive policies are excluded from new case evaluations. The default value on creation is true.
     * @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value): void {
        $this->getBackingStore()->set('isActive', $value);
    }

    /**
     * Sets the pauseCriteria property value. The condition that pauses the timer while a case matches it.
     * @param SlaPolicyCriteriaBlock|null $value Value to set for the pauseCriteria property.
    */
    public function setPauseCriteria(?SlaPolicyCriteriaBlock $value): void {
        $this->getBackingStore()->set('pauseCriteria', $value);
    }

    /**
     * Sets the recalculateCondition property value. The settings that control whether elapsed time resets when the policy is recalculated.
     * @param SlaPolicyRecalculateCondition|null $value Value to set for the recalculateCondition property.
    */
    public function setRecalculateCondition(?SlaPolicyRecalculateCondition $value): void {
        $this->getBackingStore()->set('recalculateCondition', $value);
    }

    /**
     * Sets the setCriteria property value. The condition a case must match to enter the policy's scope. When omitted, the policy applies to all cases of its owning case type. The maximum nesting depth is two.
     * @param SlaPolicyCriteriaBlock|null $value Value to set for the setCriteria property.
    */
    public function setSetCriteria(?SlaPolicyCriteriaBlock $value): void {
        $this->getBackingStore()->set('setCriteria', $value);
    }

    /**
     * Sets the timers property value. The embedded warning and breach timers, evaluated in order, lowest first. Maximum: 15 timers. Exactly one timer must have isDefault set to true. Updating this property replaces the entire collection.
     * @param array<SlaPolicyTimer>|null $value Value to set for the timers property.
    */
    public function setTimers(?array $value): void {
        $this->getBackingStore()->set('timers', $value);
    }

}
