<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class External extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new external and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('connections');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ExternalConnection::class);
            /** @var array<ExternalConnection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connections'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'connections' => fn(ParseNode $n) => $o->setConnections($n->getCollectionOfObjectValues([ExternalConnection::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('connections', $this->getConnections());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the connections property value. The connections property
     * @param array<ExternalConnection>|null $value Value to set for the connections property.
    */
    public function setConnections(?array $value): void {
        $this->getBackingStore()->set('connections', $value);
    }

}
