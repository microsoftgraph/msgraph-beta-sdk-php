<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ResponsibleSensitiveType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $publisherName The publisherName property
    */
    private ?string $publisherName = null;
    
    /**
     * @var string|null $rulePackageId The rulePackageId property
    */
    private ?string $rulePackageId = null;
    
    /**
     * @var string|null $rulePackageType The rulePackageType property
    */
    private ?string $rulePackageType = null;
    
    /**
     * Instantiates a new responsibleSensitiveType and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResponsibleSensitiveType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResponsibleSensitiveType {
        return new ResponsibleSensitiveType();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'id' => function (ParseNode $n) use ($o) { $o->setId($n->getStringValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'publisherName' => function (ParseNode $n) use ($o) { $o->setPublisherName($n->getStringValue()); },
            'rulePackageId' => function (ParseNode $n) use ($o) { $o->setRulePackageId($n->getStringValue()); },
            'rulePackageType' => function (ParseNode $n) use ($o) { $o->setRulePackageType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the publisherName property value. The publisherName property
     * @return string|null
    */
    public function getPublisherName(): ?string {
        return $this->publisherName;
    }

    /**
     * Gets the rulePackageId property value. The rulePackageId property
     * @return string|null
    */
    public function getRulePackageId(): ?string {
        return $this->rulePackageId;
    }

    /**
     * Gets the rulePackageType property value. The rulePackageType property
     * @return string|null
    */
    public function getRulePackageType(): ?string {
        return $this->rulePackageType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('id', $this->id);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('publisherName', $this->publisherName);
        $writer->writeStringValue('rulePackageId', $this->rulePackageId);
        $writer->writeStringValue('rulePackageType', $this->rulePackageType);
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
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the id property value. The id property
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the name property value. The name property
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the publisherName property value. The publisherName property
     *  @param string|null $value Value to set for the publisherName property.
    */
    public function setPublisherName(?string $value ): void {
        $this->publisherName = $value;
    }

    /**
     * Sets the rulePackageId property value. The rulePackageId property
     *  @param string|null $value Value to set for the rulePackageId property.
    */
    public function setRulePackageId(?string $value ): void {
        $this->rulePackageId = $value;
    }

    /**
     * Sets the rulePackageType property value. The rulePackageType property
     *  @param string|null $value Value to set for the rulePackageType property.
    */
    public function setRulePackageType(?string $value ): void {
        $this->rulePackageType = $value;
    }

}
