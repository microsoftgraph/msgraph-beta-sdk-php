<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProgramResource extends Identity implements Parsable 
{
    /**
     * @var string|null $type Type of the resource, indicating whether it is a group or an app.
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new programResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProgramResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProgramResource {
        return new ProgramResource();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the type property value. Type of the resource, indicating whether it is a group or an app.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('type', $this->type);
    }

    /**
     * Sets the type property value. Type of the resource, indicating whether it is a group or an app.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

}
