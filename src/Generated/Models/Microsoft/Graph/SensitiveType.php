<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SensitiveType extends Entity 
{
    /** @var ClassificationMethod|null $classificationMethod  */
    private ?ClassificationMethod $classificationMethod = null;
    
    /** @var string|null $description  */
    private ?string $description = null;
    
    /** @var string|null $name  */
    private ?string $name = null;
    
    /** @var string|null $publisherName  */
    private ?string $publisherName = null;
    
    /** @var string|null $rulePackageId  */
    private ?string $rulePackageId = null;
    
    /** @var string|null $rulePackageType  */
    private ?string $rulePackageType = null;
    
    /** @var SensitiveTypeScope|null $scope  */
    private ?SensitiveTypeScope $scope = null;
    
    /** @var SensitiveTypeSource|null $sensitiveTypeSource  */
    private ?SensitiveTypeSource $sensitiveTypeSource = null;
    
    /** @var string|null $state  */
    private ?string $state = null;
    
    /**
     * Instantiates a new sensitiveType and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SensitiveType
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SensitiveType {
        return new SensitiveType();
    }

    /**
     * Gets the classificationMethod property value. 
     * @return ClassificationMethod|null
    */
    public function getClassificationMethod(): ?ClassificationMethod {
        return $this->classificationMethod;
    }

    /**
     * Gets the description property value. 
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
        return array_merge(parent::getFieldDeserializers(), [
            'classificationMethod' => function (self $o, ParseNode $n) { $o->setClassificationMethod($n->getEnumValue(ClassificationMethod::class)); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'publisherName' => function (self $o, ParseNode $n) { $o->setPublisherName($n->getStringValue()); },
            'rulePackageId' => function (self $o, ParseNode $n) { $o->setRulePackageId($n->getStringValue()); },
            'rulePackageType' => function (self $o, ParseNode $n) { $o->setRulePackageType($n->getStringValue()); },
            'scope' => function (self $o, ParseNode $n) { $o->setScope($n->getEnumValue(SensitiveTypeScope::class)); },
            'sensitiveTypeSource' => function (self $o, ParseNode $n) { $o->setSensitiveTypeSource($n->getEnumValue(SensitiveTypeSource::class)); },
            'state' => function (self $o, ParseNode $n) { $o->setState($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the name property value. 
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the publisherName property value. 
     * @return string|null
    */
    public function getPublisherName(): ?string {
        return $this->publisherName;
    }

    /**
     * Gets the rulePackageId property value. 
     * @return string|null
    */
    public function getRulePackageId(): ?string {
        return $this->rulePackageId;
    }

    /**
     * Gets the rulePackageType property value. 
     * @return string|null
    */
    public function getRulePackageType(): ?string {
        return $this->rulePackageType;
    }

    /**
     * Gets the scope property value. 
     * @return SensitiveTypeScope|null
    */
    public function getScope(): ?SensitiveTypeScope {
        return $this->scope;
    }

    /**
     * Gets the sensitiveTypeSource property value. 
     * @return SensitiveTypeSource|null
    */
    public function getSensitiveTypeSource(): ?SensitiveTypeSource {
        return $this->sensitiveTypeSource;
    }

    /**
     * Gets the state property value. 
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('classificationMethod', $this->classificationMethod);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('publisherName', $this->publisherName);
        $writer->writeStringValue('rulePackageId', $this->rulePackageId);
        $writer->writeStringValue('rulePackageType', $this->rulePackageType);
        $writer->writeEnumValue('scope', $this->scope);
        $writer->writeEnumValue('sensitiveTypeSource', $this->sensitiveTypeSource);
        $writer->writeStringValue('state', $this->state);
    }

    /**
     * Sets the classificationMethod property value. 
     *  @param ClassificationMethod|null $value Value to set for the classificationMethod property.
    */
    public function setClassificationMethod(?ClassificationMethod $value ): void {
        $this->classificationMethod = $value;
    }

    /**
     * Sets the description property value. 
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the name property value. 
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the publisherName property value. 
     *  @param string|null $value Value to set for the publisherName property.
    */
    public function setPublisherName(?string $value ): void {
        $this->publisherName = $value;
    }

    /**
     * Sets the rulePackageId property value. 
     *  @param string|null $value Value to set for the rulePackageId property.
    */
    public function setRulePackageId(?string $value ): void {
        $this->rulePackageId = $value;
    }

    /**
     * Sets the rulePackageType property value. 
     *  @param string|null $value Value to set for the rulePackageType property.
    */
    public function setRulePackageType(?string $value ): void {
        $this->rulePackageType = $value;
    }

    /**
     * Sets the scope property value. 
     *  @param SensitiveTypeScope|null $value Value to set for the scope property.
    */
    public function setScope(?SensitiveTypeScope $value ): void {
        $this->scope = $value;
    }

    /**
     * Sets the sensitiveTypeSource property value. 
     *  @param SensitiveTypeSource|null $value Value to set for the sensitiveTypeSource property.
    */
    public function setSensitiveTypeSource(?SensitiveTypeSource $value ): void {
        $this->sensitiveTypeSource = $value;
    }

    /**
     * Sets the state property value. 
     *  @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value ): void {
        $this->state = $value;
    }

}
