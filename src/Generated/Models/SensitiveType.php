<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SensitiveType extends Entity implements Parsable 
{
    /**
     * @var ClassificationMethod|null $classificationMethod The classificationMethod property
    */
    private ?ClassificationMethod $classificationMethod = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
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
     * @var SensitiveTypeScope|null $scope The scope property
    */
    private ?SensitiveTypeScope $scope = null;
    
    /**
     * @var SensitiveTypeSource|null $sensitiveTypeSource The sensitiveTypeSource property
    */
    private ?SensitiveTypeSource $sensitiveTypeSource = null;
    
    /**
     * @var string|null $state The state property
    */
    private ?string $state = null;
    
    /**
     * Instantiates a new SensitiveType and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SensitiveType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SensitiveType {
        return new SensitiveType();
    }

    /**
     * Gets the classificationMethod property value. The classificationMethod property
     * @return ClassificationMethod|null
    */
    public function getClassificationMethod(): ?ClassificationMethod {
        return $this->classificationMethod;
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
        return array_merge(parent::getFieldDeserializers(), [
            'classificationMethod' => function (ParseNode $n) use ($o) { $o->setClassificationMethod($n->getEnumValue(ClassificationMethod::class)); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'publisherName' => function (ParseNode $n) use ($o) { $o->setPublisherName($n->getStringValue()); },
            'rulePackageId' => function (ParseNode $n) use ($o) { $o->setRulePackageId($n->getStringValue()); },
            'rulePackageType' => function (ParseNode $n) use ($o) { $o->setRulePackageType($n->getStringValue()); },
            'scope' => function (ParseNode $n) use ($o) { $o->setScope($n->getEnumValue(SensitiveTypeScope::class)); },
            'sensitiveTypeSource' => function (ParseNode $n) use ($o) { $o->setSensitiveTypeSource($n->getEnumValue(SensitiveTypeSource::class)); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getStringValue()); },
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
     * Gets the scope property value. The scope property
     * @return SensitiveTypeScope|null
    */
    public function getScope(): ?SensitiveTypeScope {
        return $this->scope;
    }

    /**
     * Gets the sensitiveTypeSource property value. The sensitiveTypeSource property
     * @return SensitiveTypeSource|null
    */
    public function getSensitiveTypeSource(): ?SensitiveTypeSource {
        return $this->sensitiveTypeSource;
    }

    /**
     * Gets the state property value. The state property
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
     * Sets the classificationMethod property value. The classificationMethod property
     *  @param ClassificationMethod|null $value Value to set for the classificationMethod property.
    */
    public function setClassificationMethod(?ClassificationMethod $value ): void {
        $this->classificationMethod = $value;
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
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

    /**
     * Sets the scope property value. The scope property
     *  @param SensitiveTypeScope|null $value Value to set for the scope property.
    */
    public function setScope(?SensitiveTypeScope $value ): void {
        $this->scope = $value;
    }

    /**
     * Sets the sensitiveTypeSource property value. The sensitiveTypeSource property
     *  @param SensitiveTypeSource|null $value Value to set for the sensitiveTypeSource property.
    */
    public function setSensitiveTypeSource(?SensitiveTypeSource $value ): void {
        $this->sensitiveTypeSource = $value;
    }

    /**
     * Sets the state property value. The state property
     *  @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value ): void {
        $this->state = $value;
    }

}
