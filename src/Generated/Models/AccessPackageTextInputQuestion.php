<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageTextInputQuestion extends AccessPackageQuestion implements Parsable 
{
    /**
     * Instantiates a new AccessPackageTextInputQuestion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessPackageTextInputQuestion');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageTextInputQuestion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageTextInputQuestion {
        return new AccessPackageTextInputQuestion();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isSingleLineQuestion' => fn(ParseNode $n) => $o->setIsSingleLineQuestion($n->getBooleanValue()),
            'regexPattern' => fn(ParseNode $n) => $o->setRegexPattern($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isSingleLineQuestion property value. Indicates whether the answer will be in single or multiple line format.
     * @return bool|null
    */
    public function getIsSingleLineQuestion(): ?bool {
        return $this->getBackingStore()->get('isSingleLineQuestion');
    }

    /**
     * Gets the regexPattern property value. This is the regex pattern that the corresponding text answer must follow.
     * @return string|null
    */
    public function getRegexPattern(): ?string {
        return $this->getBackingStore()->get('regexPattern');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isSingleLineQuestion', $this->getIsSingleLineQuestion());
        $writer->writeStringValue('regexPattern', $this->getRegexPattern());
    }

    /**
     * Sets the isSingleLineQuestion property value. Indicates whether the answer will be in single or multiple line format.
     * @param bool|null $value Value to set for the isSingleLineQuestion property.
    */
    public function setIsSingleLineQuestion(?bool $value): void {
        $this->getBackingStore()->set('isSingleLineQuestion', $value);
    }

    /**
     * Sets the regexPattern property value. This is the regex pattern that the corresponding text answer must follow.
     * @param string|null $value Value to set for the regexPattern property.
    */
    public function setRegexPattern(?string $value): void {
        $this->getBackingStore()->set('regexPattern', $value);
    }

}
