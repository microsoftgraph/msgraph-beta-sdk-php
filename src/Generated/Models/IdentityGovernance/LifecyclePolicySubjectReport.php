<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LifecyclePolicySubjectReport extends Entity implements Parsable 
{
    /**
     * Instantiates a new LifecyclePolicySubjectReport and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LifecyclePolicySubjectReport
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LifecyclePolicySubjectReport {
        return new LifecyclePolicySubjectReport();
    }

    /**
     * Gets the compliance property value. The compliance property
     * @return LifecyclePolicySubjectCompliance|null
    */
    public function getCompliance(): ?LifecyclePolicySubjectCompliance {
        $val = $this->getBackingStore()->get('compliance');
        if (is_null($val) || $val instanceof LifecyclePolicySubjectCompliance) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliance'");
    }

    /**
     * Gets the effectivePolicy property value. A reference to the effective lifecycle policy for the subject.
     * @return LifecyclePolicyReference|null
    */
    public function getEffectivePolicy(): ?LifecyclePolicyReference {
        $val = $this->getBackingStore()->get('effectivePolicy');
        if (is_null($val) || $val instanceof LifecyclePolicyReference) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'effectivePolicy'");
    }

    /**
     * Gets the enforcement property value. The enforcement property
     * @return LifecyclePolicySubjectEnforcement|null
    */
    public function getEnforcement(): ?LifecyclePolicySubjectEnforcement {
        $val = $this->getBackingStore()->get('enforcement');
        if (is_null($val) || $val instanceof LifecyclePolicySubjectEnforcement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enforcement'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'compliance' => fn(ParseNode $n) => $o->setCompliance($n->getObjectValue([LifecyclePolicySubjectCompliance::class, 'createFromDiscriminatorValue'])),
            'effectivePolicy' => fn(ParseNode $n) => $o->setEffectivePolicy($n->getObjectValue([LifecyclePolicyReference::class, 'createFromDiscriminatorValue'])),
            'enforcement' => fn(ParseNode $n) => $o->setEnforcement($n->getObjectValue([LifecyclePolicySubjectEnforcement::class, 'createFromDiscriminatorValue'])),
            'relationship' => fn(ParseNode $n) => $o->setRelationship($n->getEnumValue(LifecyclePolicyRelationship::class)),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getObjectValue([LifecyclePolicySubjectReference::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the relationship property value. The relationship property
     * @return LifecyclePolicyRelationship|null
    */
    public function getRelationship(): ?LifecyclePolicyRelationship {
        $val = $this->getBackingStore()->get('relationship');
        if (is_null($val) || $val instanceof LifecyclePolicyRelationship) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'relationship'");
    }

    /**
     * Gets the subject property value. The subject property
     * @return LifecyclePolicySubjectReference|null
    */
    public function getSubject(): ?LifecyclePolicySubjectReference {
        $val = $this->getBackingStore()->get('subject');
        if (is_null($val) || $val instanceof LifecyclePolicySubjectReference) {
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
        $writer->writeObjectValue('compliance', $this->getCompliance());
        $writer->writeObjectValue('effectivePolicy', $this->getEffectivePolicy());
        $writer->writeObjectValue('enforcement', $this->getEnforcement());
        $writer->writeEnumValue('relationship', $this->getRelationship());
        $writer->writeObjectValue('subject', $this->getSubject());
    }

    /**
     * Sets the compliance property value. The compliance property
     * @param LifecyclePolicySubjectCompliance|null $value Value to set for the compliance property.
    */
    public function setCompliance(?LifecyclePolicySubjectCompliance $value): void {
        $this->getBackingStore()->set('compliance', $value);
    }

    /**
     * Sets the effectivePolicy property value. A reference to the effective lifecycle policy for the subject.
     * @param LifecyclePolicyReference|null $value Value to set for the effectivePolicy property.
    */
    public function setEffectivePolicy(?LifecyclePolicyReference $value): void {
        $this->getBackingStore()->set('effectivePolicy', $value);
    }

    /**
     * Sets the enforcement property value. The enforcement property
     * @param LifecyclePolicySubjectEnforcement|null $value Value to set for the enforcement property.
    */
    public function setEnforcement(?LifecyclePolicySubjectEnforcement $value): void {
        $this->getBackingStore()->set('enforcement', $value);
    }

    /**
     * Sets the relationship property value. The relationship property
     * @param LifecyclePolicyRelationship|null $value Value to set for the relationship property.
    */
    public function setRelationship(?LifecyclePolicyRelationship $value): void {
        $this->getBackingStore()->set('relationship', $value);
    }

    /**
     * Sets the subject property value. The subject property
     * @param LifecyclePolicySubjectReference|null $value Value to set for the subject property.
    */
    public function setSubject(?LifecyclePolicySubjectReference $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

}
