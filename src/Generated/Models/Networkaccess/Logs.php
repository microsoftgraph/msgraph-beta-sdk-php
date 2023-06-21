<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Logs extends Entity implements Parsable 
{
    /**
     * Instantiates a new Logs and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Logs
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Logs {
        return new Logs();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'traffic' => fn(ParseNode $n) => $o->setTraffic($n->getCollectionOfObjectValues([NetworkAccessTraffic::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the traffic property value. The traffic property
     * @return array<NetworkAccessTraffic>|null
    */
    public function getTraffic(): ?array {
        return $this->getBackingStore()->get('traffic');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('traffic', $this->getTraffic());
    }

    /**
     * Sets the traffic property value. The traffic property
     * @param array<NetworkAccessTraffic>|null $value Value to set for the traffic property.
    */
    public function setTraffic(?array $value): void {
        $this->getBackingStore()->set('traffic', $value);
    }

}
