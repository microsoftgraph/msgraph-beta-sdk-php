<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserIdentityLifecycle extends IdentityLifecycle implements Parsable 
{
    /**
     * Instantiates a new UserIdentityLifecycle and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.userIdentityLifecycle');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserIdentityLifecycle
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserIdentityLifecycle {
        return new UserIdentityLifecycle();
    }

    /**
     * Gets the complianceState property value. The complianceState property
     * @return ComplianceState|null
    */
    public function getComplianceState(): ?ComplianceState {
        $val = $this->getBackingStore()->get('complianceState');
        if (is_null($val) || $val instanceof ComplianceState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'complianceState'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'complianceState' => fn(ParseNode $n) => $o->setComplianceState($n->getEnumValue(ComplianceState::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('complianceState', $this->getComplianceState());
    }

    /**
     * Sets the complianceState property value. The complianceState property
     * @param ComplianceState|null $value Value to set for the complianceState property.
    */
    public function setComplianceState(?ComplianceState $value): void {
        $this->getBackingStore()->set('complianceState', $value);
    }

}
