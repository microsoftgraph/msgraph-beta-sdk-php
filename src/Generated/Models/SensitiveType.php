<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SensitiveType extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SensitiveType {
        return new SensitiveType();
    }

    /**
     * Gets the classificationMethod property value. The classificationMethod property
     * @return ClassificationMethod|null
    */
    public function getClassificationMethod(): ?ClassificationMethod {
        $val = $this->getBackingStore()->get('classificationMethod');
        if (is_null($val) || $val instanceof ClassificationMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classificationMethod'");
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'classificationMethod' => fn(ParseNode $n) => $o->setClassificationMethod($n->getEnumValue(ClassificationMethod::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'publisherName' => fn(ParseNode $n) => $o->setPublisherName($n->getStringValue()),
            'rulePackageId' => fn(ParseNode $n) => $o->setRulePackageId($n->getStringValue()),
            'rulePackageType' => fn(ParseNode $n) => $o->setRulePackageType($n->getStringValue()),
            'scope' => fn(ParseNode $n) => $o->setScope($n->getEnumValue(SensitiveTypeScope::class)),
            'sensitiveTypeSource' => fn(ParseNode $n) => $o->setSensitiveTypeSource($n->getEnumValue(SensitiveTypeSource::class)),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
        ]);
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the publisherName property value. The publisherName property
     * @return string|null
    */
    public function getPublisherName(): ?string {
        $val = $this->getBackingStore()->get('publisherName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publisherName'");
    }

    /**
     * Gets the rulePackageId property value. The rulePackageId property
     * @return string|null
    */
    public function getRulePackageId(): ?string {
        $val = $this->getBackingStore()->get('rulePackageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rulePackageId'");
    }

    /**
     * Gets the rulePackageType property value. The rulePackageType property
     * @return string|null
    */
    public function getRulePackageType(): ?string {
        $val = $this->getBackingStore()->get('rulePackageType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rulePackageType'");
    }

    /**
     * Gets the scope property value. The scope property
     * @return SensitiveTypeScope|null
    */
    public function getScope(): ?SensitiveTypeScope {
        $val = $this->getBackingStore()->get('scope');
        if (is_null($val) || $val instanceof SensitiveTypeScope) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scope'");
    }

    /**
     * Gets the sensitiveTypeSource property value. The sensitiveTypeSource property
     * @return SensitiveTypeSource|null
    */
    public function getSensitiveTypeSource(): ?SensitiveTypeSource {
        $val = $this->getBackingStore()->get('sensitiveTypeSource');
        if (is_null($val) || $val instanceof SensitiveTypeSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitiveTypeSource'");
    }

    /**
     * Gets the state property value. The state property
     * @return string|null
    */
    public function getState(): ?string {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('classificationMethod', $this->getClassificationMethod());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('publisherName', $this->getPublisherName());
        $writer->writeStringValue('rulePackageId', $this->getRulePackageId());
        $writer->writeStringValue('rulePackageType', $this->getRulePackageType());
        $writer->writeEnumValue('scope', $this->getScope());
        $writer->writeEnumValue('sensitiveTypeSource', $this->getSensitiveTypeSource());
        $writer->writeStringValue('state', $this->getState());
    }

    /**
     * Sets the classificationMethod property value. The classificationMethod property
     * @param ClassificationMethod|null $value Value to set for the classificationMethod property.
    */
    public function setClassificationMethod(?ClassificationMethod $value): void {
        $this->getBackingStore()->set('classificationMethod', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the publisherName property value. The publisherName property
     * @param string|null $value Value to set for the publisherName property.
    */
    public function setPublisherName(?string $value): void {
        $this->getBackingStore()->set('publisherName', $value);
    }

    /**
     * Sets the rulePackageId property value. The rulePackageId property
     * @param string|null $value Value to set for the rulePackageId property.
    */
    public function setRulePackageId(?string $value): void {
        $this->getBackingStore()->set('rulePackageId', $value);
    }

    /**
     * Sets the rulePackageType property value. The rulePackageType property
     * @param string|null $value Value to set for the rulePackageType property.
    */
    public function setRulePackageType(?string $value): void {
        $this->getBackingStore()->set('rulePackageType', $value);
    }

    /**
     * Sets the scope property value. The scope property
     * @param SensitiveTypeScope|null $value Value to set for the scope property.
    */
    public function setScope(?SensitiveTypeScope $value): void {
        $this->getBackingStore()->set('scope', $value);
    }

    /**
     * Sets the sensitiveTypeSource property value. The sensitiveTypeSource property
     * @param SensitiveTypeSource|null $value Value to set for the sensitiveTypeSource property.
    */
    public function setSensitiveTypeSource(?SensitiveTypeSource $value): void {
        $this->getBackingStore()->set('sensitiveTypeSource', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
