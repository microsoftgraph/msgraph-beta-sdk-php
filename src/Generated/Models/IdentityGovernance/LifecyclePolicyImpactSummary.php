<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Beta\Generated\Models\DirectoryObject;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class LifecyclePolicyImpactSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new LifecyclePolicyImpactSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LifecyclePolicyImpactSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LifecyclePolicyImpactSummary {
        return new LifecyclePolicyImpactSummary();
    }

    /**
     * Gets the actionsTaken property value. The policy actions taken for the subject during the evaluation period.
     * @return array<LifecyclePolicyImpactAction>|null
    */
    public function getActionsTaken(): ?array {
        $val = $this->getBackingStore()->get('actionsTaken');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LifecyclePolicyImpactAction::class);
            /** @var array<LifecyclePolicyImpactAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionsTaken'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionsTaken' => fn(ParseNode $n) => $o->setActionsTaken($n->getCollectionOfObjectValues([LifecyclePolicyImpactAction::class, 'createFromDiscriminatorValue'])),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getObjectValue([DirectoryObject::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the subject property value. The subject evaluated by the policy.
     * @return DirectoryObject|null
    */
    public function getSubject(): ?DirectoryObject {
        $val = $this->getBackingStore()->get('subject');
        if (is_null($val) || $val instanceof DirectoryObject) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subject'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('actionsTaken', $this->getActionsTaken());
        $writer->writeObjectValue('subject', $this->getSubject());
    }

    /**
     * Sets the actionsTaken property value. The policy actions taken for the subject during the evaluation period.
     * @param array<LifecyclePolicyImpactAction>|null $value Value to set for the actionsTaken property.
    */
    public function setActionsTaken(?array $value): void {
        $this->getBackingStore()->set('actionsTaken', $value);
    }

    /**
     * Sets the subject property value. The subject evaluated by the policy.
     * @param DirectoryObject|null $value Value to set for the subject property.
    */
    public function setSubject(?DirectoryObject $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

}
