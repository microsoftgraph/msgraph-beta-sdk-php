<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AssignedComputeInstanceDetails extends Entity implements Parsable 
{
    /**
     * Instantiates a new AssignedComputeInstanceDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignedComputeInstanceDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignedComputeInstanceDetails {
        return new AssignedComputeInstanceDetails();
    }

    /**
     * Gets the accessedStorageBuckets property value. Represents a set of S3 buckets accessed by this EC2 instance.
     * @return array<AuthorizationSystemResource>|null
    */
    public function getAccessedStorageBuckets(): ?array {
        $val = $this->getBackingStore()->get('accessedStorageBuckets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthorizationSystemResource::class);
            /** @var array<AuthorizationSystemResource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessedStorageBuckets'");
    }

    /**
     * Gets the assignedComputeInstance property value. assigned EC2 instance.
     * @return AuthorizationSystemResource|null
    */
    public function getAssignedComputeInstance(): ?AuthorizationSystemResource {
        $val = $this->getBackingStore()->get('assignedComputeInstance');
        if (is_null($val) || $val instanceof AuthorizationSystemResource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedComputeInstance'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessedStorageBuckets' => fn(ParseNode $n) => $o->setAccessedStorageBuckets($n->getCollectionOfObjectValues([AuthorizationSystemResource::class, 'createFromDiscriminatorValue'])),
            'assignedComputeInstance' => fn(ParseNode $n) => $o->setAssignedComputeInstance($n->getObjectValue([AuthorizationSystemResource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('accessedStorageBuckets', $this->getAccessedStorageBuckets());
        $writer->writeObjectValue('assignedComputeInstance', $this->getAssignedComputeInstance());
    }

    /**
     * Sets the accessedStorageBuckets property value. Represents a set of S3 buckets accessed by this EC2 instance.
     * @param array<AuthorizationSystemResource>|null $value Value to set for the accessedStorageBuckets property.
    */
    public function setAccessedStorageBuckets(?array $value): void {
        $this->getBackingStore()->set('accessedStorageBuckets', $value);
    }

    /**
     * Sets the assignedComputeInstance property value. assigned EC2 instance.
     * @param AuthorizationSystemResource|null $value Value to set for the assignedComputeInstance property.
    */
    public function setAssignedComputeInstance(?AuthorizationSystemResource $value): void {
        $this->getBackingStore()->set('assignedComputeInstance', $value);
    }

}
