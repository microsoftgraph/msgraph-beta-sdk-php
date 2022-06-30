<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DetectedSensitiveContent extends DetectedSensitiveContentBase implements Parsable 
{
    /**
     * @var array<ClassificationAttribute>|null $classificationAttributes The classificationAttributes property
    */
    private ?array $classificationAttributes = null;
    
    /**
     * @var ClassificationMethod|null $classificationMethod The classificationMethod property
    */
    private ?ClassificationMethod $classificationMethod = null;
    
    /**
     * @var array<SensitiveContentLocation>|null $matches The matches property
    */
    private ?array $matches = null;
    
    /**
     * @var SensitiveTypeScope|null $scope The scope property
    */
    private ?SensitiveTypeScope $scope = null;
    
    /**
     * @var SensitiveTypeSource|null $sensitiveTypeSource The sensitiveTypeSource property
    */
    private ?SensitiveTypeSource $sensitiveTypeSource = null;
    
    /**
     * Instantiates a new DetectedSensitiveContent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DetectedSensitiveContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DetectedSensitiveContent {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.machineLearningDetectedSensitiveContent': return new MachineLearningDetectedSensitiveContent();
            }
        }
        return new DetectedSensitiveContent();
    }

    /**
     * Gets the classificationAttributes property value. The classificationAttributes property
     * @return array<ClassificationAttribute>|null
    */
    public function getClassificationAttributes(): ?array {
        return $this->classificationAttributes;
    }

    /**
     * Gets the classificationMethod property value. The classificationMethod property
     * @return ClassificationMethod|null
    */
    public function getClassificationMethod(): ?ClassificationMethod {
        return $this->classificationMethod;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'classificationAttributes' => function (ParseNode $n) use ($o) { $o->setClassificationAttributes($n->getCollectionOfObjectValues(array(ClassificationAttribute::class, 'createFromDiscriminatorValue'))); },
            'classificationMethod' => function (ParseNode $n) use ($o) { $o->setClassificationMethod($n->getEnumValue(ClassificationMethod::class)); },
            'matches' => function (ParseNode $n) use ($o) { $o->setMatches($n->getCollectionOfObjectValues(array(SensitiveContentLocation::class, 'createFromDiscriminatorValue'))); },
            'scope' => function (ParseNode $n) use ($o) { $o->setScope($n->getEnumValue(SensitiveTypeScope::class)); },
            'sensitiveTypeSource' => function (ParseNode $n) use ($o) { $o->setSensitiveTypeSource($n->getEnumValue(SensitiveTypeSource::class)); },
        ]);
    }

    /**
     * Gets the matches property value. The matches property
     * @return array<SensitiveContentLocation>|null
    */
    public function getMatches(): ?array {
        return $this->matches;
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('classificationAttributes', $this->classificationAttributes);
        $writer->writeEnumValue('classificationMethod', $this->classificationMethod);
        $writer->writeCollectionOfObjectValues('matches', $this->matches);
        $writer->writeEnumValue('scope', $this->scope);
        $writer->writeEnumValue('sensitiveTypeSource', $this->sensitiveTypeSource);
    }

    /**
     * Sets the classificationAttributes property value. The classificationAttributes property
     *  @param array<ClassificationAttribute>|null $value Value to set for the classificationAttributes property.
    */
    public function setClassificationAttributes(?array $value ): void {
        $this->classificationAttributes = $value;
    }

    /**
     * Sets the classificationMethod property value. The classificationMethod property
     *  @param ClassificationMethod|null $value Value to set for the classificationMethod property.
    */
    public function setClassificationMethod(?ClassificationMethod $value ): void {
        $this->classificationMethod = $value;
    }

    /**
     * Sets the matches property value. The matches property
     *  @param array<SensitiveContentLocation>|null $value Value to set for the matches property.
    */
    public function setMatches(?array $value ): void {
        $this->matches = $value;
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

}
