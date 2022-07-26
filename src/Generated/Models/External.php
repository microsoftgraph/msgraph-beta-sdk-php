<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class External extends Entity implements Parsable 
{
    /**
     * @var array<ExternalConnection>|null $connections The connections property
    */
    private ?array $connections = null;
    
    /**
     * Instantiates a new External and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.external');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return External
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): External {
        return new External();
    }

    /**
     * Gets the connections property value. The connections property
     * @return array<ExternalConnection>|null
    */
    public function getConnections(): ?array {
        return $this->connections;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'connections' => function (ParseNode $n) use ($o) { $o->setConnections($n->getCollectionOfObjectValues(array(ExternalConnection::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('connections', $this->connections);
    }

    /**
     * Sets the connections property value. The connections property
     *  @param array<ExternalConnection>|null $value Value to set for the connections property.
    */
    public function setConnections(?array $value ): void {
        $this->connections = $value;
    }

}
