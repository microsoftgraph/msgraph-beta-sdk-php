<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VirtualMachineWithAwsStorageBucketAccessFinding extends Finding implements Parsable 
{
    /**
     * Instantiates a new VirtualMachineWithAwsStorageBucketAccessFinding and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualMachineWithAwsStorageBucketAccessFinding
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualMachineWithAwsStorageBucketAccessFinding {
        return new VirtualMachineWithAwsStorageBucketAccessFinding();
    }

    /**
     * Gets the accessibleCount property value. The total number of storage buckets that the EC2 instance can access using the role.
     * @return int|null
    */
    public function getAccessibleCount(): ?int {
        $val = $this->getBackingStore()->get('accessibleCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessibleCount'");
    }

    /**
     * Gets the bucketCount property value. The total number of storage buckets in the authorization system that hosts the EC2 instance.
     * @return int|null
    */
    public function getBucketCount(): ?int {
        $val = $this->getBackingStore()->get('bucketCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bucketCount'");
    }

    /**
     * Gets the ec2Instance property value. The ec2Instance property
     * @return AuthorizationSystemResource|null
    */
    public function getEc2Instance(): ?AuthorizationSystemResource {
        $val = $this->getBackingStore()->get('ec2Instance');
        if (is_null($val) || $val instanceof AuthorizationSystemResource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ec2Instance'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessibleCount' => fn(ParseNode $n) => $o->setAccessibleCount($n->getIntegerValue()),
            'bucketCount' => fn(ParseNode $n) => $o->setBucketCount($n->getIntegerValue()),
            'ec2Instance' => fn(ParseNode $n) => $o->setEc2Instance($n->getObjectValue([AuthorizationSystemResource::class, 'createFromDiscriminatorValue'])),
            'permissionsCreepIndex' => fn(ParseNode $n) => $o->setPermissionsCreepIndex($n->getObjectValue([PermissionsCreepIndex::class, 'createFromDiscriminatorValue'])),
            'role' => fn(ParseNode $n) => $o->setRole($n->getObjectValue([AwsRole::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the permissionsCreepIndex property value. The permissionsCreepIndex property
     * @return PermissionsCreepIndex|null
    */
    public function getPermissionsCreepIndex(): ?PermissionsCreepIndex {
        $val = $this->getBackingStore()->get('permissionsCreepIndex');
        if (is_null($val) || $val instanceof PermissionsCreepIndex) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionsCreepIndex'");
    }

    /**
     * Gets the role property value. The role property
     * @return AwsRole|null
    */
    public function getRole(): ?AwsRole {
        $val = $this->getBackingStore()->get('role');
        if (is_null($val) || $val instanceof AwsRole) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'role'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('accessibleCount', $this->getAccessibleCount());
        $writer->writeIntegerValue('bucketCount', $this->getBucketCount());
        $writer->writeObjectValue('ec2Instance', $this->getEc2Instance());
        $writer->writeObjectValue('permissionsCreepIndex', $this->getPermissionsCreepIndex());
        $writer->writeObjectValue('role', $this->getRole());
    }

    /**
     * Sets the accessibleCount property value. The total number of storage buckets that the EC2 instance can access using the role.
     * @param int|null $value Value to set for the accessibleCount property.
    */
    public function setAccessibleCount(?int $value): void {
        $this->getBackingStore()->set('accessibleCount', $value);
    }

    /**
     * Sets the bucketCount property value. The total number of storage buckets in the authorization system that hosts the EC2 instance.
     * @param int|null $value Value to set for the bucketCount property.
    */
    public function setBucketCount(?int $value): void {
        $this->getBackingStore()->set('bucketCount', $value);
    }

    /**
     * Sets the ec2Instance property value. The ec2Instance property
     * @param AuthorizationSystemResource|null $value Value to set for the ec2Instance property.
    */
    public function setEc2Instance(?AuthorizationSystemResource $value): void {
        $this->getBackingStore()->set('ec2Instance', $value);
    }

    /**
     * Sets the permissionsCreepIndex property value. The permissionsCreepIndex property
     * @param PermissionsCreepIndex|null $value Value to set for the permissionsCreepIndex property.
    */
    public function setPermissionsCreepIndex(?PermissionsCreepIndex $value): void {
        $this->getBackingStore()->set('permissionsCreepIndex', $value);
    }

    /**
     * Sets the role property value. The role property
     * @param AwsRole|null $value Value to set for the role property.
    */
    public function setRole(?AwsRole $value): void {
        $this->getBackingStore()->set('role', $value);
    }

}
