<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Beta\Generated\Models\SubjectSet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RuleBasedSubjectSet extends SubjectSet implements Parsable 
{
    /**
     * @var string|null $rule The rule for the subject set.
    */
    private ?string $rule = null;
    
    /**
     * Instantiates a new RuleBasedSubjectSet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.ruleBasedSubjectSet');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RuleBasedSubjectSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RuleBasedSubjectSet {
        return new RuleBasedSubjectSet();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'rule' => function (ParseNode $n) use ($o) { $o->setRule($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the rule property value. The rule for the subject set.
     * @return string|null
    */
    public function getRule(): ?string {
        return $this->rule;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('rule', $this->rule);
    }

    /**
     * Sets the rule property value. The rule for the subject set.
     *  @param string|null $value Value to set for the rule property.
    */
    public function setRule(?string $value ): void {
        $this->rule = $value;
    }

}
