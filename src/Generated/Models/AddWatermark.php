<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AddWatermark extends MarkContent implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new addWatermark and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.addWatermark');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AddWatermark
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AddWatermark {
        return new AddWatermark();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'orientation' => fn(ParseNode $n) => $o->setOrientation($n->getEnumValue(PageOrientation::class)),
        ]);
    }

    /**
     * Gets the orientation property value. The orientation property
     * @return PageOrientation|null
    */
    public function getOrientation(): ?PageOrientation {
        $val = $this->getBackingStore()->get('orientation');
        if (is_null($val) || $val instanceof PageOrientation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'orientation'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('orientation', $this->getOrientation());
    }

    /**
     * Sets the orientation property value. The orientation property
     * @param PageOrientation|null $value Value to set for the orientation property.
    */
    public function setOrientation(?PageOrientation $value): void {
        $this->getBackingStore()->set('orientation', $value);
    }

}
