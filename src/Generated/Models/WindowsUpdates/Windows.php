<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows extends Entity implements Parsable 
{
    /**
     * @var Updates|null $updates Entity that acts as a container for the functionality of the Windows Update for Business deployment service. Read-only.
    */
    private ?Updates $updates = null;
    
    /**
     * Instantiates a new windows and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows {
        return new Windows();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'updates' => function (ParseNode $n) use ($o) { $o->setUpdates($n->getObjectValue(array(Updates::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the updates property value. Entity that acts as a container for the functionality of the Windows Update for Business deployment service. Read-only.
     * @return Updates|null
    */
    public function getUpdates(): ?Updates {
        return $this->updates;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('updates', $this->updates);
    }

    /**
     * Sets the updates property value. Entity that acts as a container for the functionality of the Windows Update for Business deployment service. Read-only.
     *  @param Updates|null $value Value to set for the updates property.
    */
    public function setUpdates(?Updates $value ): void {
        $this->updates = $value;
    }

}
