<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Beta\Generated\Models\SubjectSet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Defines the scope as all agent identities except those created by the specified builder platforms. Agent identity lifecycle policies only; using this scope on another policy type returns HTTP 400.
*/
class AllExcludingAgentBuilderPlatformsSubjectSet extends SubjectSet implements Parsable 
{
    /**
     * Instantiates a new AllExcludingAgentBuilderPlatformsSubjectSet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.allExcludingAgentBuilderPlatformsSubjectSet');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AllExcludingAgentBuilderPlatformsSubjectSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AllExcludingAgentBuilderPlatformsSubjectSet {
        return new AllExcludingAgentBuilderPlatformsSubjectSet();
    }

    /**
     * Gets the excludedAgentBuilderPlatforms property value. The excludedAgentBuilderPlatforms property
     * @return AgentBuilderPlatforms|null
    */
    public function getExcludedAgentBuilderPlatforms(): ?AgentBuilderPlatforms {
        $val = $this->getBackingStore()->get('excludedAgentBuilderPlatforms');
        if (is_null($val) || $val instanceof AgentBuilderPlatforms) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludedAgentBuilderPlatforms'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'excludedAgentBuilderPlatforms' => fn(ParseNode $n) => $o->setExcludedAgentBuilderPlatforms($n->getEnumValue(AgentBuilderPlatforms::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('excludedAgentBuilderPlatforms', $this->getExcludedAgentBuilderPlatforms());
    }

    /**
     * Sets the excludedAgentBuilderPlatforms property value. The excludedAgentBuilderPlatforms property
     * @param AgentBuilderPlatforms|null $value Value to set for the excludedAgentBuilderPlatforms property.
    */
    public function setExcludedAgentBuilderPlatforms(?AgentBuilderPlatforms $value): void {
        $this->getBackingStore()->set('excludedAgentBuilderPlatforms', $value);
    }

}
