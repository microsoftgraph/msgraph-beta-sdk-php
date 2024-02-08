<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InitiateInvestigationResponseAction extends ResponseAction implements Parsable 
{
    /**
     * Instantiates a new InitiateInvestigationResponseAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.initiateInvestigationResponseAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InitiateInvestigationResponseAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InitiateInvestigationResponseAction {
        return new InitiateInvestigationResponseAction();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'identifier' => fn(ParseNode $n) => $o->setIdentifier($n->getEnumValue(DeviceIdEntityIdentifier::class)),
        ]);
    }

    /**
     * Gets the identifier property value. The identifier property
     * @return DeviceIdEntityIdentifier|null
    */
    public function getIdentifier(): ?DeviceIdEntityIdentifier {
        $val = $this->getBackingStore()->get('identifier');
        if (is_null($val) || $val instanceof DeviceIdEntityIdentifier) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identifier'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('identifier', $this->getIdentifier());
    }

    /**
     * Sets the identifier property value. The identifier property
     * @param DeviceIdEntityIdentifier|null $value Value to set for the identifier property.
    */
    public function setIdentifier(?DeviceIdEntityIdentifier $value): void {
        $this->getBackingStore()->set('identifier', $value);
    }

}
