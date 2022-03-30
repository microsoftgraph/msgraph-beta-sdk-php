<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ExternalConnectors;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConnectionQuota extends Entity 
{
    /** @var int|null $itemsRemaining  */
    private ?int $itemsRemaining = null;
    
    /**
     * Instantiates a new connectionQuota and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConnectionQuota
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ConnectionQuota {
        return new ConnectionQuota();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'itemsRemaining' => function (self $o, ParseNode $n) { $o->setItemsRemaining($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the itemsRemaining property value. 
     * @return int|null
    */
    public function getItemsRemaining(): ?int {
        return $this->itemsRemaining;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('itemsRemaining', $this->itemsRemaining);
    }

    /**
     * Sets the itemsRemaining property value. 
     *  @param int|null $value Value to set for the itemsRemaining property.
    */
    public function setItemsRemaining(?int $value ): void {
        $this->itemsRemaining = $value;
    }

}
