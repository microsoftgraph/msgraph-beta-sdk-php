<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class StandardWebPart extends WebPart implements Parsable 
{
    /**
     * Instantiates a new StandardWebPart and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.standardWebPart');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StandardWebPart
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StandardWebPart {
        return new StandardWebPart();
    }

    /**
     * Gets the data property value. Data of the webPart.
     * @return WebPartData|null
    */
    public function getData(): ?WebPartData {
        return $this->getBackingStore()->get('data');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'data' => fn(ParseNode $n) => $o->setData($n->getObjectValue([WebPartData::class, 'createFromDiscriminatorValue'])),
            'webPartType' => fn(ParseNode $n) => $o->setWebPartType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the webPartType property value. A Guid which indicates the type of the webParts
     * @return string|null
    */
    public function getWebPartType(): ?string {
        return $this->getBackingStore()->get('webPartType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('data', $this->getData());
        $writer->writeStringValue('webPartType', $this->getWebPartType());
    }

    /**
     * Sets the data property value. Data of the webPart.
     *  @param WebPartData|null $value Value to set for the data property.
    */
    public function setData(?WebPartData $value): void {
        $this->getBackingStore()->set('data', $value);
    }

    /**
     * Sets the webPartType property value. A Guid which indicates the type of the webParts
     *  @param string|null $value Value to set for the webPartType property.
    */
    public function setWebPartType(?string $value): void {
        $this->getBackingStore()->set('webPartType', $value);
    }

}
