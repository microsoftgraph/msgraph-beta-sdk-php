<?php

namespace Microsoft\Graph\Beta\Generated\Models\ExternalConnectors;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConnectionQuota extends Entity implements Parsable 
{
    /**
     * @var int|null $itemsRemaining The minimum of two values, one representing the items remaining in the connection and the other remaining items at tenant-level. The following equation represents the formula used to calculate the minimum number: min ({max capacity in the connection} – {number of items in the connection}, {tenant quota} – {number of items indexed in all connections}). If the connection is not monetized, such as in a preview connector or preview content experience, then this property is simply the number of remaining items in the connection.
    */
    private ?int $itemsRemaining = null;
    
    /**
     * Instantiates a new ConnectionQuota and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.externalConnectors.connectionQuota');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConnectionQuota
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConnectionQuota {
        return new ConnectionQuota();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'itemsRemaining' => fn(ParseNode $n) => $o->setItemsRemaining($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the itemsRemaining property value. The minimum of two values, one representing the items remaining in the connection and the other remaining items at tenant-level. The following equation represents the formula used to calculate the minimum number: min ({max capacity in the connection} – {number of items in the connection}, {tenant quota} – {number of items indexed in all connections}). If the connection is not monetized, such as in a preview connector or preview content experience, then this property is simply the number of remaining items in the connection.
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
     * Sets the itemsRemaining property value. The minimum of two values, one representing the items remaining in the connection and the other remaining items at tenant-level. The following equation represents the formula used to calculate the minimum number: min ({max capacity in the connection} – {number of items in the connection}, {tenant quota} – {number of items indexed in all connections}). If the connection is not monetized, such as in a preview connector or preview content experience, then this property is simply the number of remaining items in the connection.
     *  @param int|null $value Value to set for the itemsRemaining property.
    */
    public function setItemsRemaining(?int $value ): void {
        $this->itemsRemaining = $value;
    }

}
