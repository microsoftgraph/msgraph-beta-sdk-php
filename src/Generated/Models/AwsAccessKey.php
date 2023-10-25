<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AwsAccessKey extends AwsIdentity implements Parsable 
{
    /**
     * Instantiates a new awsAccessKey and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.awsAccessKey');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AwsAccessKey
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AwsAccessKey {
        return new AwsAccessKey();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getObjectValue([AwsUser::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the owner property value. The owner property
     * @return AwsUser|null
    */
    public function getOwner(): ?AwsUser {
        $val = $this->getBackingStore()->get('owner');
        if (is_null($val) || $val instanceof AwsUser) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'owner'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('owner', $this->getOwner());
    }

    /**
     * Sets the owner property value. The owner property
     * @param AwsUser|null $value Value to set for the owner property.
    */
    public function setOwner(?AwsUser $value): void {
        $this->getBackingStore()->set('owner', $value);
    }

}
