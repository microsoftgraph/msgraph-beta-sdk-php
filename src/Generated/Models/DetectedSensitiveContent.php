<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DetectedSensitiveContent extends DetectedSensitiveContentBase implements Parsable 
{
    /**
     * Instantiates a new detectedSensitiveContent and sets the default values.
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
        $val = $this->getBackingStore()->get('classificationAttributes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ClassificationAttribute::class);
            /** @var array<ClassificationAttribute>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classificationAttributes'");
    }

    /**
     * Gets the classificationMethod property value. The classificationMethod property
     * @return DetectedSensitiveContent_classificationMethod|null
    */
    public function getClassificationMethod(): ?DetectedSensitiveContent_classificationMethod {
        $val = $this->getBackingStore()->get('classificationMethod');
        if (is_null($val) || $val instanceof DetectedSensitiveContent_classificationMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classificationMethod'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'classificationAttributes' => fn(ParseNode $n) => $o->setClassificationAttributes($n->getCollectionOfObjectValues([ClassificationAttribute::class, 'createFromDiscriminatorValue'])),
            'classificationMethod' => fn(ParseNode $n) => $o->setClassificationMethod($n->getEnumValue(DetectedSensitiveContent_classificationMethod::class)),
            'matches' => fn(ParseNode $n) => $o->setMatches($n->getCollectionOfObjectValues([SensitiveContentLocation::class, 'createFromDiscriminatorValue'])),
            'scope' => fn(ParseNode $n) => $o->setScope($n->getEnumValue(DetectedSensitiveContent_scope::class)),
            'sensitiveTypeSource' => fn(ParseNode $n) => $o->setSensitiveTypeSource($n->getEnumValue(DetectedSensitiveContent_sensitiveTypeSource::class)),
        ]);
    }

    /**
     * Gets the matches property value. The matches property
     * @return array<SensitiveContentLocation>|null
    */
    public function getMatches(): ?array {
        $val = $this->getBackingStore()->get('matches');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SensitiveContentLocation::class);
            /** @var array<SensitiveContentLocation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'matches'");
    }

    /**
     * Gets the scope property value. The scope property
     * @return DetectedSensitiveContent_scope|null
    */
    public function getScope(): ?DetectedSensitiveContent_scope {
        $val = $this->getBackingStore()->get('scope');
        if (is_null($val) || $val instanceof DetectedSensitiveContent_scope) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scope'");
    }

    /**
     * Gets the sensitiveTypeSource property value. The sensitiveTypeSource property
     * @return DetectedSensitiveContent_sensitiveTypeSource|null
    */
    public function getSensitiveTypeSource(): ?DetectedSensitiveContent_sensitiveTypeSource {
        $val = $this->getBackingStore()->get('sensitiveTypeSource');
        if (is_null($val) || $val instanceof DetectedSensitiveContent_sensitiveTypeSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitiveTypeSource'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('classificationAttributes', $this->getClassificationAttributes());
        $writer->writeEnumValue('classificationMethod', $this->getClassificationMethod());
        $writer->writeCollectionOfObjectValues('matches', $this->getMatches());
        $writer->writeEnumValue('scope', $this->getScope());
        $writer->writeEnumValue('sensitiveTypeSource', $this->getSensitiveTypeSource());
    }

    /**
     * Sets the classificationAttributes property value. The classificationAttributes property
     * @param array<ClassificationAttribute>|null $value Value to set for the classificationAttributes property.
    */
    public function setClassificationAttributes(?array $value): void {
        $this->getBackingStore()->set('classificationAttributes', $value);
    }

    /**
     * Sets the classificationMethod property value. The classificationMethod property
     * @param DetectedSensitiveContent_classificationMethod|null $value Value to set for the classificationMethod property.
    */
    public function setClassificationMethod(?DetectedSensitiveContent_classificationMethod $value): void {
        $this->getBackingStore()->set('classificationMethod', $value);
    }

    /**
     * Sets the matches property value. The matches property
     * @param array<SensitiveContentLocation>|null $value Value to set for the matches property.
    */
    public function setMatches(?array $value): void {
        $this->getBackingStore()->set('matches', $value);
    }

    /**
     * Sets the scope property value. The scope property
     * @param DetectedSensitiveContent_scope|null $value Value to set for the scope property.
    */
    public function setScope(?DetectedSensitiveContent_scope $value): void {
        $this->getBackingStore()->set('scope', $value);
    }

    /**
     * Sets the sensitiveTypeSource property value. The sensitiveTypeSource property
     * @param DetectedSensitiveContent_sensitiveTypeSource|null $value Value to set for the sensitiveTypeSource property.
    */
    public function setSensitiveTypeSource(?DetectedSensitiveContent_sensitiveTypeSource $value): void {
        $this->getBackingStore()->set('sensitiveTypeSource', $value);
    }

}
