<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AddWatermark extends MarkContent implements Parsable 
{
    /**
     * @var PageOrientation|null $orientation The orientation property
    */
    private ?PageOrientation $orientation = null;
    
    /**
     * Instantiates a new AddWatermark and sets the default values.
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'orientation' => function (ParseNode $n) use ($o) { $o->setOrientation($n->getEnumValue(PageOrientation::class)); },
        ]);
    }

    /**
     * Gets the orientation property value. The orientation property
     * @return PageOrientation|null
    */
    public function getOrientation(): ?PageOrientation {
        return $this->orientation;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('orientation', $this->orientation);
    }

    /**
     * Sets the orientation property value. The orientation property
     *  @param PageOrientation|null $value Value to set for the orientation property.
    */
    public function setOrientation(?PageOrientation $value ): void {
        $this->orientation = $value;
    }

}
