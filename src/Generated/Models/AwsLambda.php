<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AwsLambda extends AwsIdentity implements Parsable 
{
    /**
     * Instantiates a new awsLambda and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.awsLambda');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AwsLambda
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AwsLambda {
        return new AwsLambda();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'resource' => fn(ParseNode $n) => $o->setResource($n->getObjectValue([AwsAuthorizationSystemResource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the resource property value. The resource property
     * @return AwsAuthorizationSystemResource|null
    */
    public function getResource(): ?AwsAuthorizationSystemResource {
        $val = $this->getBackingStore()->get('resource');
        if (is_null($val) || $val instanceof AwsAuthorizationSystemResource) {
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
     * Sets the resource property value. The resource property
     * @param AwsAuthorizationSystemResource|null $value Value to set for the resource property.
    */
    public function setResource(?AwsAuthorizationSystemResource $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

}
