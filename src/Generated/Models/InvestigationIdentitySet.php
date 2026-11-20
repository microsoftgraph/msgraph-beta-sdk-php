<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Open investigation provenance extending shared user, application, and device identities with the recorded agent principal. This computed parent provenance grants no execution credentials or cross-tenant authorization.
*/
class InvestigationIdentitySet extends IdentitySet implements Parsable 
{
    /**
     * Instantiates a new InvestigationIdentitySet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.investigationIdentitySet');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvestigationIdentitySet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InvestigationIdentitySet {
        return new InvestigationIdentitySet();
    }

    /**
     * Gets the agent property value. The initiating agent principal, when recorded by the service.
     * @return Identity|null
    */
    public function getAgent(): ?Identity {
        $val = $this->getBackingStore()->get('agent');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agent'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agent' => fn(ParseNode $n) => $o->setAgent($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

    /**
     * Sets the agent property value. The initiating agent principal, when recorded by the service.
     * @param Identity|null $value Value to set for the agent property.
    */
    public function setAgent(?Identity $value): void {
        $this->getBackingStore()->set('agent', $value);
    }

}
