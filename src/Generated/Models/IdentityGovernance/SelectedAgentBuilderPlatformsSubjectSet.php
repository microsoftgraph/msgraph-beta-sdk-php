<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Beta\Generated\Models\SubjectSet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Defines the scope as only agent identities created by any of the selected builder platforms. It is valid only for agent identity lifecycle policies; using it on another policy type returns HTTP 400.
*/
class SelectedAgentBuilderPlatformsSubjectSet extends SubjectSet implements Parsable 
{
    /**
     * Instantiates a new SelectedAgentBuilderPlatformsSubjectSet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.selectedAgentBuilderPlatformsSubjectSet');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SelectedAgentBuilderPlatformsSubjectSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SelectedAgentBuilderPlatformsSubjectSet {
        return new SelectedAgentBuilderPlatformsSubjectSet();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'includedAgentBuilderPlatforms' => fn(ParseNode $n) => $o->setIncludedAgentBuilderPlatforms($n->getEnumValue(AgentBuilderPlatforms::class)),
        ]);
    }

    /**
     * Gets the includedAgentBuilderPlatforms property value. The includedAgentBuilderPlatforms property
     * @return AgentBuilderPlatforms|null
    */
    public function getIncludedAgentBuilderPlatforms(): ?AgentBuilderPlatforms {
        $val = $this->getBackingStore()->get('includedAgentBuilderPlatforms');
        if (is_null($val) || $val instanceof AgentBuilderPlatforms) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includedAgentBuilderPlatforms'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('includedAgentBuilderPlatforms', $this->getIncludedAgentBuilderPlatforms());
    }

    /**
     * Sets the includedAgentBuilderPlatforms property value. The includedAgentBuilderPlatforms property
     * @param AgentBuilderPlatforms|null $value Value to set for the includedAgentBuilderPlatforms property.
    */
    public function setIncludedAgentBuilderPlatforms(?AgentBuilderPlatforms $value): void {
        $this->getBackingStore()->set('includedAgentBuilderPlatforms', $value);
    }

}
