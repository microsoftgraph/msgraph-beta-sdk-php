<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernanceNotificationTemplate implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $culture  */
    private ?string $culture = null;
    
    /** @var string|null $id  */
    private ?string $id = null;
    
    /** @var string|null $source  */
    private ?string $source = null;
    
    /** @var string|null $type  */
    private ?string $type = null;
    
    /** @var string|null $version  */
    private ?string $version = null;
    
    /**
     * Instantiates a new governanceNotificationTemplate and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernanceNotificationTemplate
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): GovernanceNotificationTemplate {
        return new GovernanceNotificationTemplate();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the culture property value. 
     * @return string|null
    */
    public function getCulture(): ?string {
        return $this->culture;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'culture' => function (self $o, ParseNode $n) { $o->setCulture($n->getStringValue()); },
            'id' => function (self $o, ParseNode $n) { $o->setId($n->getStringValue()); },
            'source' => function (self $o, ParseNode $n) { $o->setSource($n->getStringValue()); },
            'type' => function (self $o, ParseNode $n) { $o->setType($n->getStringValue()); },
            'version' => function (self $o, ParseNode $n) { $o->setVersion($n->getStringValue()); },
        ];
    }

    /**
     * Gets the id property value. 
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the source property value. 
     * @return string|null
    */
    public function getSource(): ?string {
        return $this->source;
    }

    /**
     * Gets the type property value. 
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Gets the version property value. 
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('culture', $this->culture);
        $writer->writeStringValue('id', $this->id);
        $writer->writeStringValue('source', $this->source);
        $writer->writeStringValue('type', $this->type);
        $writer->writeStringValue('version', $this->version);
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
     * Sets the culture property value. 
     *  @param string|null $value Value to set for the culture property.
    */
    public function setCulture(?string $value ): void {
        $this->culture = $value;
    }

    /**
     * Sets the id property value. 
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the source property value. 
     *  @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value ): void {
        $this->source = $value;
    }

    /**
     * Sets the type property value. 
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the version property value. 
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

}
