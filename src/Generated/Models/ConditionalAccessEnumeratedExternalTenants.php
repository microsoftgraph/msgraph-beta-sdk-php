<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessEnumeratedExternalTenants extends ConditionalAccessExternalTenants implements Parsable 
{
    /**
     * @var array<string>|null $members Represents a collection of tenant ids in the scope of Conditional Access for guests and external users policy targeting.
    */
    private ?array $members = null;
    
    /**
     * Instantiates a new ConditionalAccessEnumeratedExternalTenants and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.conditionalAccessEnumeratedExternalTenants');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessEnumeratedExternalTenants
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessEnumeratedExternalTenants {
        return new ConditionalAccessEnumeratedExternalTenants();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the members property value. Represents a collection of tenant ids in the scope of Conditional Access for guests and external users policy targeting.
     * @return array<string>|null
    */
    public function getMembers(): ?array {
        return $this->members;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('members', $this->members);
    }

    /**
     * Sets the members property value. Represents a collection of tenant ids in the scope of Conditional Access for guests and external users policy targeting.
     *  @param array<string>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value ): void {
        $this->members = $value;
    }

}
