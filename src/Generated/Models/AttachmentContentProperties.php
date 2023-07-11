<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AttachmentContentProperties extends ContentProperties implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new attachmentContentProperties and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.attachmentContentProperties');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttachmentContentProperties
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttachmentContentProperties {
        return new AttachmentContentProperties();
    }

    /**
     * Gets the currentLabel property value. The currentLabel property
     * @return CurrentLabel|null
    */
    public function getCurrentLabel(): ?CurrentLabel {
        $val = $this->getBackingStore()->get('currentLabel');
        if (is_null($val) || $val instanceof CurrentLabel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'currentLabel'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'currentLabel' => fn(ParseNode $n) => $o->setCurrentLabel($n->getObjectValue([CurrentLabel::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('currentLabel', $this->getCurrentLabel());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the currentLabel property value. The currentLabel property
     * @param CurrentLabel|null $value Value to set for the currentLabel property.
    */
    public function setCurrentLabel(?CurrentLabel $value): void {
        $this->getBackingStore()->set('currentLabel', $value);
    }

}
