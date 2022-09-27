<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessTemplate extends Entity implements Parsable 
{
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var ConditionalAccessPolicyDetail|null $details The details property
    */
    private ?ConditionalAccessPolicyDetail $details = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var TemplateScenarios|null $scenarios The scenarios property
    */
    private ?TemplateScenarios $scenarios = null;
    
    /**
     * Instantiates a new ConditionalAccessTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.conditionalAccessTemplate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessTemplate {
        return new ConditionalAccessTemplate();
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the details property value. The details property
     * @return ConditionalAccessPolicyDetail|null
    */
    public function getDetails(): ?ConditionalAccessPolicyDetail {
        return $this->details;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'details' => function (ParseNode $n) use ($o) { $o->setDetails($n->getObjectValue(array(ConditionalAccessPolicyDetail::class, 'createFromDiscriminatorValue'))); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'scenarios' => function (ParseNode $n) use ($o) { $o->setScenarios($n->getEnumValue(TemplateScenarios::class)); },
        ]);
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the scenarios property value. The scenarios property
     * @return TemplateScenarios|null
    */
    public function getScenarios(): ?TemplateScenarios {
        return $this->scenarios;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeObjectValue('details', $this->details);
        $writer->writeStringValue('name', $this->name);
        $writer->writeEnumValue('scenarios', $this->scenarios);
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the details property value. The details property
     *  @param ConditionalAccessPolicyDetail|null $value Value to set for the details property.
    */
    public function setDetails(?ConditionalAccessPolicyDetail $value ): void {
        $this->details = $value;
    }

    /**
     * Sets the name property value. The name property
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the scenarios property value. The scenarios property
     *  @param TemplateScenarios|null $value Value to set for the scenarios property.
    */
    public function setScenarios(?TemplateScenarios $value ): void {
        $this->scenarios = $value;
    }

}
