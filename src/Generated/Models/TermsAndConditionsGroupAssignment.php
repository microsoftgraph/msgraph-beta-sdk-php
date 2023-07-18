<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A termsAndConditionsGroupAssignment entity represents the assignment of a given Terms and Conditions (T&C) policy to a given group. Users in the group will be required to accept the terms in order to have devices enrolled into Intune.
*/
class TermsAndConditionsGroupAssignment extends Entity implements Parsable 
{
    /**
     * Instantiates a new termsAndConditionsGroupAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TermsAndConditionsGroupAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TermsAndConditionsGroupAssignment {
        return new TermsAndConditionsGroupAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'targetGroupId' => fn(ParseNode $n) => $o->setTargetGroupId($n->getStringValue()),
            'termsAndConditions' => fn(ParseNode $n) => $o->setTermsAndConditions($n->getObjectValue([TermsAndConditions::class, 'createFromDiscriminatorValue'])),
        ]);
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
     * Gets the targetGroupId property value. Unique identifier of a group that the T&C policy is assigned to.
     * @return string|null
    */
    public function getTargetGroupId(): ?string {
        $val = $this->getBackingStore()->get('targetGroupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetGroupId'");
    }

    /**
     * Gets the termsAndConditions property value. Navigation link to the terms and conditions that are assigned.
     * @return TermsAndConditions|null
    */
    public function getTermsAndConditions(): ?TermsAndConditions {
        $val = $this->getBackingStore()->get('termsAndConditions');
        if (is_null($val) || $val instanceof TermsAndConditions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'termsAndConditions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('targetGroupId', $this->getTargetGroupId());
        $writer->writeObjectValue('termsAndConditions', $this->getTermsAndConditions());
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the targetGroupId property value. Unique identifier of a group that the T&C policy is assigned to.
     * @param string|null $value Value to set for the targetGroupId property.
    */
    public function setTargetGroupId(?string $value): void {
        $this->getBackingStore()->set('targetGroupId', $value);
    }

    /**
     * Sets the termsAndConditions property value. Navigation link to the terms and conditions that are assigned.
     * @param TermsAndConditions|null $value Value to set for the termsAndConditions property.
    */
    public function setTermsAndConditions(?TermsAndConditions $value): void {
        $this->getBackingStore()->set('termsAndConditions', $value);
    }

}
