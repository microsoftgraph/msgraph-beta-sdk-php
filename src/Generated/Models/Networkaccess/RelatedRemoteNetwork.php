<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RelatedRemoteNetwork extends RelatedResource implements Parsable 
{
    /**
     * Instantiates a new RelatedRemoteNetwork and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.networkaccess.relatedRemoteNetwork');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RelatedRemoteNetwork
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RelatedRemoteNetwork {
        return new RelatedRemoteNetwork();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'remoteNetworkId' => fn(ParseNode $n) => $o->setRemoteNetworkId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the remoteNetworkId property value. The remoteNetworkId property
     * @return string|null
    */
    public function getRemoteNetworkId(): ?string {
        $val = $this->getBackingStore()->get('remoteNetworkId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteNetworkId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('remoteNetworkId', $this->getRemoteNetworkId());
    }

    /**
     * Sets the remoteNetworkId property value. The remoteNetworkId property
     * @param string|null $value Value to set for the remoteNetworkId property.
    */
    public function setRemoteNetworkId(?string $value): void {
        $this->getBackingStore()->set('remoteNetworkId', $value);
    }

}
