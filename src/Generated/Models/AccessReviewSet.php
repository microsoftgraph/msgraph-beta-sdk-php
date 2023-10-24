<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessReviewSet extends Entity implements Parsable 
{
    /**
     * Instantiates a new accessReviewSet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewSet {
        return new AccessReviewSet();
    }

    /**
     * Gets the decisions property value. Represents a Microsoft Entra access review decision on an instance of a review.
     * @return array<AccessReviewInstanceDecisionItem>|null
    */
    public function getDecisions(): ?array {
        $val = $this->getBackingStore()->get('decisions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessReviewInstanceDecisionItem::class);
            /** @var array<AccessReviewInstanceDecisionItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'decisions'");
    }

    /**
     * Gets the definitions property value. Represents the template and scheduling for an access review.
     * @return array<AccessReviewScheduleDefinition>|null
    */
    public function getDefinitions(): ?array {
        $val = $this->getBackingStore()->get('definitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessReviewScheduleDefinition::class);
            /** @var array<AccessReviewScheduleDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'definitions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'decisions' => fn(ParseNode $n) => $o->setDecisions($n->getCollectionOfObjectValues([AccessReviewInstanceDecisionItem::class, 'createFromDiscriminatorValue'])),
            'definitions' => fn(ParseNode $n) => $o->setDefinitions($n->getCollectionOfObjectValues([AccessReviewScheduleDefinition::class, 'createFromDiscriminatorValue'])),
            'historyDefinitions' => fn(ParseNode $n) => $o->setHistoryDefinitions($n->getCollectionOfObjectValues([AccessReviewHistoryDefinition::class, 'createFromDiscriminatorValue'])),
            'policy' => fn(ParseNode $n) => $o->setPolicy($n->getObjectValue([AccessReviewPolicy::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the historyDefinitions property value. Represents a collection of access review history data and the scopes used to collect that data.
     * @return array<AccessReviewHistoryDefinition>|null
    */
    public function getHistoryDefinitions(): ?array {
        $val = $this->getBackingStore()->get('historyDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessReviewHistoryDefinition::class);
            /** @var array<AccessReviewHistoryDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'historyDefinitions'");
    }

    /**
     * Gets the policy property value. Resource that enables administrators to manage directory-level access review policies in their tenant.
     * @return AccessReviewPolicy|null
    */
    public function getPolicy(): ?AccessReviewPolicy {
        $val = $this->getBackingStore()->get('policy');
        if (is_null($val) || $val instanceof AccessReviewPolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policy'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('decisions', $this->getDecisions());
        $writer->writeCollectionOfObjectValues('definitions', $this->getDefinitions());
        $writer->writeCollectionOfObjectValues('historyDefinitions', $this->getHistoryDefinitions());
        $writer->writeObjectValue('policy', $this->getPolicy());
    }

    /**
     * Sets the decisions property value. Represents a Microsoft Entra access review decision on an instance of a review.
     * @param array<AccessReviewInstanceDecisionItem>|null $value Value to set for the decisions property.
    */
    public function setDecisions(?array $value): void {
        $this->getBackingStore()->set('decisions', $value);
    }

    /**
     * Sets the definitions property value. Represents the template and scheduling for an access review.
     * @param array<AccessReviewScheduleDefinition>|null $value Value to set for the definitions property.
    */
    public function setDefinitions(?array $value): void {
        $this->getBackingStore()->set('definitions', $value);
    }

    /**
     * Sets the historyDefinitions property value. Represents a collection of access review history data and the scopes used to collect that data.
     * @param array<AccessReviewHistoryDefinition>|null $value Value to set for the historyDefinitions property.
    */
    public function setHistoryDefinitions(?array $value): void {
        $this->getBackingStore()->set('historyDefinitions', $value);
    }

    /**
     * Sets the policy property value. Resource that enables administrators to manage directory-level access review policies in their tenant.
     * @param AccessReviewPolicy|null $value Value to set for the policy property.
    */
    public function setPolicy(?AccessReviewPolicy $value): void {
        $this->getBackingStore()->set('policy', $value);
    }

}
