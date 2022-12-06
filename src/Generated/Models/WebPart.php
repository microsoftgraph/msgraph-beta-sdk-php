<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WebPart extends Entity implements Parsable 
{
    /**
     * Instantiates a new webPart and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WebPart
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WebPart {
        return new WebPart();
    }

    /**
     * Gets the data property value. The data property
     * @return SitePageData|null
    */
    public function getData(): ?SitePageData {
        return $this->getBackingStore()->get('data');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'data' => fn(ParseNode $n) => $o->setData($n->getObjectValue([SitePageData::class, 'createFromDiscriminatorValue'])),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('data', $this->getData());
        $writer->writeStringValue('type', $this->getType());
    }

    /**
     * Sets the data property value. The data property
     *  @param SitePageData|null $value Value to set for the data property.
    */
    public function setData(?SitePageData $value): void {
        $this->getBackingStore()->set('data', $value);
    }

    /**
     * Sets the type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
