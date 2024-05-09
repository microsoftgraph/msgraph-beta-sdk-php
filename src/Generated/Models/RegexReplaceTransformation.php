<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RegexReplaceTransformation extends CustomClaimTransformation implements Parsable 
{
    /**
     * Instantiates a new RegexReplaceTransformation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.regexReplaceTransformation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RegexReplaceTransformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RegexReplaceTransformation {
        return new RegexReplaceTransformation();
    }

    /**
     * Gets the additionalAttributes property value. The additionalAttributes property
     * @return array<SourcedAttribute>|null
    */
    public function getAdditionalAttributes(): ?array {
        $val = $this->getBackingStore()->get('additionalAttributes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SourcedAttribute::class);
            /** @var array<SourcedAttribute>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalAttributes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalAttributes' => fn(ParseNode $n) => $o->setAdditionalAttributes($n->getCollectionOfObjectValues([SourcedAttribute::class, 'createFromDiscriminatorValue'])),
            'regex' => fn(ParseNode $n) => $o->setRegex($n->getStringValue()),
            'replacement' => fn(ParseNode $n) => $o->setReplacement($n->getStringValue()),
        ]);
    }

    /**
     * Gets the regex property value. The regex property
     * @return string|null
    */
    public function getRegex(): ?string {
        $val = $this->getBackingStore()->get('regex');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'regex'");
    }

    /**
     * Gets the replacement property value. The replacement property
     * @return string|null
    */
    public function getReplacement(): ?string {
        $val = $this->getBackingStore()->get('replacement');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'replacement'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('additionalAttributes', $this->getAdditionalAttributes());
        $writer->writeStringValue('regex', $this->getRegex());
        $writer->writeStringValue('replacement', $this->getReplacement());
    }

    /**
     * Sets the additionalAttributes property value. The additionalAttributes property
     * @param array<SourcedAttribute>|null $value Value to set for the additionalAttributes property.
    */
    public function setAdditionalAttributes(?array $value): void {
        $this->getBackingStore()->set('additionalAttributes', $value);
    }

    /**
     * Sets the regex property value. The regex property
     * @param string|null $value Value to set for the regex property.
    */
    public function setRegex(?string $value): void {
        $this->getBackingStore()->set('regex', $value);
    }

    /**
     * Sets the replacement property value. The replacement property
     * @param string|null $value Value to set for the replacement property.
    */
    public function setReplacement(?string $value): void {
        $this->getBackingStore()->set('replacement', $value);
    }

}
