<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Networkaccess;

use Microsoft\\Graph\\Beta\\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ForwardingOptions extends Entity implements Parsable 
{
    /**
     * Instantiates a new ForwardingOptions and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ForwardingOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ForwardingOptions {
        return new ForwardingOptions();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'skipDnsLookupState' => fn(ParseNode $n) => $o->setSkipDnsLookupState($n->getEnumValue(Status::class)),
        ]);
    }

    /**
     * Gets the skipDnsLookupState property value. The skipDnsLookupState property
     * @return Status|null
    */
    public function getSkipDnsLookupState(): ?Status {
        $val = $this->getBackingStore()->get('skipDnsLookupState');
        if (is_null($val) || $val instanceof Status) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skipDnsLookupState'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('skipDnsLookupState', $this->getSkipDnsLookupState());
    }

    /**
     * Sets the skipDnsLookupState property value. The skipDnsLookupState property
     * @param Status|null $value Value to set for the skipDnsLookupState property.
    */
    public function setSkipDnsLookupState(?Status $value): void {
        $this->getBackingStore()->set('skipDnsLookupState', $value);
    }

}
