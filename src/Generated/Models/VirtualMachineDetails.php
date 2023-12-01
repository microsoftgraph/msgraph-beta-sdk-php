<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VirtualMachineDetails extends Entity implements Parsable 
{
    /**
     * Instantiates a new virtualMachineDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualMachineDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualMachineDetails {
        return new VirtualMachineDetails();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'virtualMachine' => fn(ParseNode $n) => $o->setVirtualMachine($n->getObjectValue([AuthorizationSystemResource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the virtualMachine property value. The virtualMachine property
     * @return AuthorizationSystemResource|null
    */
    public function getVirtualMachine(): ?AuthorizationSystemResource {
        $val = $this->getBackingStore()->get('virtualMachine');
        if (is_null($val) || $val instanceof AuthorizationSystemResource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'virtualMachine'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('virtualMachine', $this->getVirtualMachine());
    }

    /**
     * Sets the virtualMachine property value. The virtualMachine property
     * @param AuthorizationSystemResource|null $value Value to set for the virtualMachine property.
    */
    public function setVirtualMachine(?AuthorizationSystemResource $value): void {
        $this->getBackingStore()->set('virtualMachine', $value);
    }

}
