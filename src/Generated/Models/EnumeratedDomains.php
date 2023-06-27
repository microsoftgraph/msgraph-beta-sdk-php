<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EnumeratedDomains extends ValidatingDomains implements Parsable 
{
    /**
     * Instantiates a new EnumeratedDomains and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.enumeratedDomains');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EnumeratedDomains
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EnumeratedDomains {
        return new EnumeratedDomains();
    }

    /**
     * Gets the domainNames property value. The domainNames property
     * @return array<string>|null
    */
    public function getDomainNames(): ?array {
        return $this->getBackingStore()->get('domainNames');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'domainNames' => fn(ParseNode $n) => $o->setDomainNames($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('domainNames', $this->getDomainNames());
    }

    /**
     * Sets the domainNames property value. The domainNames property
     * @param array<string>|null $value Value to set for the domainNames property.
    */
    public function setDomainNames(?array $value): void {
        $this->getBackingStore()->set('domainNames', $value);
    }

}
