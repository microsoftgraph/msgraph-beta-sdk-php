<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Fido2CombinationConfiguration extends AuthenticationCombinationConfiguration implements Parsable 
{
    /**
     * @var array<string>|null $allowedAAGUIDs The allowedAAGUIDs property
    */
    private ?array $allowedAAGUIDs = null;
    
    /**
     * Instantiates a new Fido2CombinationConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.fido2CombinationConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Fido2CombinationConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Fido2CombinationConfiguration {
        return new Fido2CombinationConfiguration();
    }

    /**
     * Gets the allowedAAGUIDs property value. The allowedAAGUIDs property
     * @return array<string>|null
    */
    public function getAllowedAAGUIDs(): ?array {
        return $this->allowedAAGUIDs;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedAAGUIDs' => function (ParseNode $n) use ($o) { $o->setAllowedAAGUIDs($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('allowedAAGUIDs', $this->allowedAAGUIDs);
    }

    /**
     * Sets the allowedAAGUIDs property value. The allowedAAGUIDs property
     *  @param array<string>|null $value Value to set for the allowedAAGUIDs property.
    */
    public function setAllowedAAGUIDs(?array $value ): void {
        $this->allowedAAGUIDs = $value;
    }

}
