<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MarkdownBlockMessageConfiguration extends BlockPageConfigurationBase implements Parsable 
{
    /**
     * Instantiates a new MarkdownBlockMessageConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.networkaccess.markdownBlockMessageConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MarkdownBlockMessageConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MarkdownBlockMessageConfiguration {
        return new MarkdownBlockMessageConfiguration();
    }

    /**
     * Gets the body property value. The body property
     * @return string|null
    */
    public function getBody(): ?string {
        $val = $this->getBackingStore()->get('body');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'body'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'body' => fn(ParseNode $n) => $o->setBody($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('body', $this->getBody());
    }

    /**
     * Sets the body property value. The body property
     * @param string|null $value Value to set for the body property.
    */
    public function setBody(?string $value): void {
        $this->getBackingStore()->set('body', $value);
    }

}
