<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ResourceConnection extends Entity implements Parsable 
{
    /**
     * @var ResourceConnectionState|null $state The state property
    */
    private ?ResourceConnectionState $state = null;
    
    /**
     * Instantiates a new resourceConnection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResourceConnection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResourceConnection {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.windowsUpdates.operationalInsightsConnection': return new OperationalInsightsConnection();
            }
        }
        return new ResourceConnection();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(ResourceConnectionState::class)); },
        ]);
    }

    /**
     * Gets the state property value. The state property
     * @return ResourceConnectionState|null
    */
    public function getState(): ?ResourceConnectionState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('state', $this->state);
    }

    /**
     * Sets the state property value. The state property
     *  @param ResourceConnectionState|null $value Value to set for the state property.
    */
    public function setState(?ResourceConnectionState $value ): void {
        $this->state = $value;
    }

}
