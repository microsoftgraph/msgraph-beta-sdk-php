<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GcpCloudFunction extends GcpIdentity implements Parsable 
{
    /**
     * Instantiates a new GcpCloudFunction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.gcpCloudFunction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GcpCloudFunction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GcpCloudFunction {
        return new GcpCloudFunction();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'resource' => fn(ParseNode $n) => $o->setResource($n->getObjectValue([GcpAuthorizationSystemResource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the resource property value. Represents the resources in an authorization system..
     * @return GcpAuthorizationSystemResource|null
    */
    public function getResource(): ?GcpAuthorizationSystemResource {
        $val = $this->getBackingStore()->get('resource');
        if (is_null($val) || $val instanceof GcpAuthorizationSystemResource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resource'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('resource', $this->getResource());
    }

    /**
     * Sets the resource property value. Represents the resources in an authorization system..
     * @param GcpAuthorizationSystemResource|null $value Value to set for the resource property.
    */
    public function setResource(?GcpAuthorizationSystemResource $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

}
