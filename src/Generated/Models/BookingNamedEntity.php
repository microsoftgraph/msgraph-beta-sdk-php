<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BookingNamedEntity extends Entity implements Parsable 
{
    /**
     * @var string|null $displayName A name for the derived entity, which interfaces with customers.
    */
    private ?string $displayName = null;
    
    /**
     * Instantiates a new bookingNamedEntity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingNamedEntity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BookingNamedEntity {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.bookingBusiness': return new BookingBusiness();
                case '#microsoft.graph.bookingPerson': return new BookingPerson();
                case '#microsoft.graph.bookingService': return new BookingService();
            }
        }
        return new BookingNamedEntity();
    }

    /**
     * Gets the displayName property value. A name for the derived entity, which interfaces with customers.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
    }

    /**
     * Sets the displayName property value. A name for the derived entity, which interfaces with customers.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

}
