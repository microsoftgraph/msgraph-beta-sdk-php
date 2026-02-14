<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Environment extends Entity implements Parsable 
{
    /**
     * Instantiates a new Environment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Environment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Environment {
        return new Environment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'kind' => fn(ParseNode $n) => $o->setKind($n->getEnumValue(EnvironmentKind::class)),
        ]);
    }

    /**
     * Gets the kind property value. The kind property
     * @return EnvironmentKind|null
    */
    public function getKind(): ?EnvironmentKind {
        $val = $this->getBackingStore()->get('kind');
        if (is_null($val) || $val instanceof EnvironmentKind) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kind'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('kind', $this->getKind());
    }

    /**
     * Sets the kind property value. The kind property
     * @param EnvironmentKind|null $value Value to set for the kind property.
    */
    public function setKind(?EnvironmentKind $value): void {
        $this->getBackingStore()->set('kind', $value);
    }

}
