<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Beta\Generated\Models\SubjectSet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TriggerAndScopeBasedConditions extends WorkflowExecutionConditions implements Parsable 
{
    /**
     * @var SubjectSet|null $scope The scope property
    */
    private ?SubjectSet $scope = null;
    
    /**
     * @var WorkflowExecutionTrigger|null $trigger The trigger property
    */
    private ?WorkflowExecutionTrigger $trigger = null;
    
    /**
     * Instantiates a new TriggerAndScopeBasedConditions and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.triggerAndScopeBasedConditions');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TriggerAndScopeBasedConditions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TriggerAndScopeBasedConditions {
        return new TriggerAndScopeBasedConditions();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'scope' => function (ParseNode $n) use ($o) { $o->setScope($n->getObjectValue(array(SubjectSet::class, 'createFromDiscriminatorValue'))); },
            'trigger' => function (ParseNode $n) use ($o) { $o->setTrigger($n->getObjectValue(array(WorkflowExecutionTrigger::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the scope property value. The scope property
     * @return SubjectSet|null
    */
    public function getScope(): ?SubjectSet {
        return $this->scope;
    }

    /**
     * Gets the trigger property value. The trigger property
     * @return WorkflowExecutionTrigger|null
    */
    public function getTrigger(): ?WorkflowExecutionTrigger {
        return $this->trigger;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('scope', $this->scope);
        $writer->writeObjectValue('trigger', $this->trigger);
    }

    /**
     * Sets the scope property value. The scope property
     *  @param SubjectSet|null $value Value to set for the scope property.
    */
    public function setScope(?SubjectSet $value ): void {
        $this->scope = $value;
    }

    /**
     * Sets the trigger property value. The trigger property
     *  @param WorkflowExecutionTrigger|null $value Value to set for the trigger property.
    */
    public function setTrigger(?WorkflowExecutionTrigger $value ): void {
        $this->trigger = $value;
    }

}
