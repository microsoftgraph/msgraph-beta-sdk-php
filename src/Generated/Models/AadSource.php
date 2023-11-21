<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AadSource extends AuthorizationSystemIdentitySource implements Parsable 
{
    /**
     * Instantiates a new aadSource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.aadSource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AadSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AadSource {
        return new AadSource();
    }

    /**
     * Gets the domain property value. Domain name
     * @return string|null
    */
    public function getDomain(): ?string {
        $val = $this->getBackingStore()->get('domain');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domain'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'domain' => fn(ParseNode $n) => $o->setDomain($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('domain', $this->getDomain());
    }

    /**
     * Sets the domain property value. Domain name
     * @param string|null $value Value to set for the domain property.
    */
    public function setDomain(?string $value): void {
        $this->getBackingStore()->set('domain', $value);
    }

}
