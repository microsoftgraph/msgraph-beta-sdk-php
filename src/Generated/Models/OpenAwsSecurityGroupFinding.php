<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class OpenAwsSecurityGroupFinding extends Finding implements Parsable 
{
    /**
     * Instantiates a new OpenAwsSecurityGroupFinding and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OpenAwsSecurityGroupFinding
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OpenAwsSecurityGroupFinding {
        return new OpenAwsSecurityGroupFinding();
    }

    /**
     * Gets the assignedComputeInstancesDetails property value. A set of AWS EC2 compute instances related to this open security group.
     * @return array<AssignedComputeInstanceDetails>|null
    */
    public function getAssignedComputeInstancesDetails(): ?array {
        $val = $this->getBackingStore()->get('assignedComputeInstancesDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AssignedComputeInstanceDetails::class);
            /** @var array<AssignedComputeInstanceDetails>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedComputeInstancesDetails'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedComputeInstancesDetails' => fn(ParseNode $n) => $o->setAssignedComputeInstancesDetails($n->getCollectionOfObjectValues([AssignedComputeInstanceDetails::class, 'createFromDiscriminatorValue'])),
            'inboundPorts' => fn(ParseNode $n) => $o->setInboundPorts($n->getObjectValue([InboundPorts::class, 'createFromDiscriminatorValue'])),
            'securityGroup' => fn(ParseNode $n) => $o->setSecurityGroup($n->getObjectValue([AwsAuthorizationSystemResource::class, 'createFromDiscriminatorValue'])),
            'totalStorageBucketCount' => fn(ParseNode $n) => $o->setTotalStorageBucketCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the inboundPorts property value. The inboundPorts property
     * @return InboundPorts|null
    */
    public function getInboundPorts(): ?InboundPorts {
        $val = $this->getBackingStore()->get('inboundPorts');
        if (is_null($val) || $val instanceof InboundPorts) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inboundPorts'");
    }

    /**
     * Gets the securityGroup property value. The securityGroup property
     * @return AwsAuthorizationSystemResource|null
    */
    public function getSecurityGroup(): ?AwsAuthorizationSystemResource {
        $val = $this->getBackingStore()->get('securityGroup');
        if (is_null($val) || $val instanceof AwsAuthorizationSystemResource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityGroup'");
    }

    /**
     * Gets the totalStorageBucketCount property value. The number of storage buckets accessed by the assigned compute instances.
     * @return int|null
    */
    public function getTotalStorageBucketCount(): ?int {
        $val = $this->getBackingStore()->get('totalStorageBucketCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalStorageBucketCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignedComputeInstancesDetails', $this->getAssignedComputeInstancesDetails());
        $writer->writeObjectValue('inboundPorts', $this->getInboundPorts());
        $writer->writeObjectValue('securityGroup', $this->getSecurityGroup());
        $writer->writeIntegerValue('totalStorageBucketCount', $this->getTotalStorageBucketCount());
    }

    /**
     * Sets the assignedComputeInstancesDetails property value. A set of AWS EC2 compute instances related to this open security group.
     * @param array<AssignedComputeInstanceDetails>|null $value Value to set for the assignedComputeInstancesDetails property.
    */
    public function setAssignedComputeInstancesDetails(?array $value): void {
        $this->getBackingStore()->set('assignedComputeInstancesDetails', $value);
    }

    /**
     * Sets the inboundPorts property value. The inboundPorts property
     * @param InboundPorts|null $value Value to set for the inboundPorts property.
    */
    public function setInboundPorts(?InboundPorts $value): void {
        $this->getBackingStore()->set('inboundPorts', $value);
    }

    /**
     * Sets the securityGroup property value. The securityGroup property
     * @param AwsAuthorizationSystemResource|null $value Value to set for the securityGroup property.
    */
    public function setSecurityGroup(?AwsAuthorizationSystemResource $value): void {
        $this->getBackingStore()->set('securityGroup', $value);
    }

    /**
     * Sets the totalStorageBucketCount property value. The number of storage buckets accessed by the assigned compute instances.
     * @param int|null $value Value to set for the totalStorageBucketCount property.
    */
    public function setTotalStorageBucketCount(?int $value): void {
        $this->getBackingStore()->set('totalStorageBucketCount', $value);
    }

}
