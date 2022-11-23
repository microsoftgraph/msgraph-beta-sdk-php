<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamTemplate extends Entity implements Parsable 
{
    /**
     * Instantiates a new TeamTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamTemplate {
        return new TeamTemplate();
    }

    /**
     * Gets the definitions property value. The definitions property
     * @return array<TeamTemplateDefinition>|null
    */
    public function getDefinitions(): ?array {
        return $this->getBackingStore()->get('definitions');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'definitions' => fn(ParseNode $n) => $o->setDefinitions($n->getCollectionOfObjectValues([TeamTemplateDefinition::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('definitions', $this->getDefinitions());
    }

    /**
     * Sets the definitions property value. The definitions property
     *  @param array<TeamTemplateDefinition>|null $value Value to set for the definitions property.
    */
    public function setDefinitions(?array $value): void {
        $this->getBackingStore()->set('definitions', $value);
    }

}
