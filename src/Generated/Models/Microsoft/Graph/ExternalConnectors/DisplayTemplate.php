<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ExternalConnectors;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DisplayTemplate implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $id The text identifier for the display template; for example, contosoTickets. */
    private ?string $id = null;
    
    /** @var Json|null $layout  */
    private ?Json $layout = null;
    
    /** @var int|null $priority Defines the priority of a display template. A display template with priority 1 is evaluated before a template with priority 4. Gaps in priority values are supported. */
    private ?int $priority = null;
    
    /** @var array<PropertyRule>|null $rules Specifies additional rules for selecting this display template based on the item schema. Optional. */
    private ?array $rules = null;
    
    /**
     * Instantiates a new displayTemplate and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DisplayTemplate
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DisplayTemplate {
        return new DisplayTemplate();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'id' => function (self $o, ParseNode $n) { $o->setId($n->getStringValue()); },
            'layout' => function (self $o, ParseNode $n) { $o->setLayout($n->getObjectValue(Json::class)); },
            'priority' => function (self $o, ParseNode $n) { $o->setPriority($n->getIntegerValue()); },
            'rules' => function (self $o, ParseNode $n) { $o->setRules($n->getCollectionOfObjectValues(PropertyRule::class)); },
        ];
    }

    /**
     * Gets the id property value. The text identifier for the display template; for example, contosoTickets.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the layout property value. 
     * @return Json|null
    */
    public function getLayout(): ?Json {
        return $this->layout;
    }

    /**
     * Gets the priority property value. Defines the priority of a display template. A display template with priority 1 is evaluated before a template with priority 4. Gaps in priority values are supported.
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->priority;
    }

    /**
     * Gets the rules property value. Specifies additional rules for selecting this display template based on the item schema. Optional.
     * @return array<PropertyRule>|null
    */
    public function getRules(): ?array {
        return $this->rules;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->id);
        $writer->writeObjectValue('layout', $this->layout);
        $writer->writeIntegerValue('priority', $this->priority);
        $writer->writeCollectionOfObjectValues('rules', $this->rules);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the id property value. The text identifier for the display template; for example, contosoTickets.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the layout property value. 
     *  @param Json|null $value Value to set for the layout property.
    */
    public function setLayout(?Json $value ): void {
        $this->layout = $value;
    }

    /**
     * Sets the priority property value. Defines the priority of a display template. A display template with priority 1 is evaluated before a template with priority 4. Gaps in priority values are supported.
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value ): void {
        $this->priority = $value;
    }

    /**
     * Sets the rules property value. Specifies additional rules for selecting this display template based on the item schema. Optional.
     *  @param array<PropertyRule>|null $value Value to set for the rules property.
    */
    public function setRules(?array $value ): void {
        $this->rules = $value;
    }

}
