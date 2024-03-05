<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class OpenNetworkAzureSecurityGroupFinding extends Finding implements Parsable 
{
    /**
     * Instantiates a new OpenNetworkAzureSecurityGroupFinding and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OpenNetworkAzureSecurityGroupFinding
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OpenNetworkAzureSecurityGroupFinding {
        return new OpenNetworkAzureSecurityGroupFinding();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'inboundPorts' => fn(ParseNode $n) => $o->setInboundPorts($n->getObjectValue([InboundPorts::class, 'createFromDiscriminatorValue'])),
            'securityGroup' => fn(ParseNode $n) => $o->setSecurityGroup($n->getObjectValue([AuthorizationSystemResource::class, 'createFromDiscriminatorValue'])),
            'virtualMachines' => fn(ParseNode $n) => $o->setVirtualMachines($n->getCollectionOfObjectValues([VirtualMachineDetails::class, 'createFromDiscriminatorValue'])),
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
     * @return AuthorizationSystemResource|null
    */
    public function getSecurityGroup(): ?AuthorizationSystemResource {
        $val = $this->getBackingStore()->get('securityGroup');
        if (is_null($val) || $val instanceof AuthorizationSystemResource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityGroup'");
    }

    /**
     * Gets the virtualMachines property value. Represents a virtual machine in an authorization system.
     * @return array<VirtualMachineDetails>|null
    */
    public function getVirtualMachines(): ?array {
        $val = $this->getBackingStore()->get('virtualMachines');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VirtualMachineDetails::class);
            /** @var array<VirtualMachineDetails>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'virtualMachines'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('inboundPorts', $this->getInboundPorts());
        $writer->writeObjectValue('securityGroup', $this->getSecurityGroup());
        $writer->writeCollectionOfObjectValues('virtualMachines', $this->getVirtualMachines());
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
     * @param AuthorizationSystemResource|null $value Value to set for the securityGroup property.
    */
    public function setSecurityGroup(?AuthorizationSystemResource $value): void {
        $this->getBackingStore()->set('securityGroup', $value);
    }

    /**
     * Sets the virtualMachines property value. Represents a virtual machine in an authorization system.
     * @param array<VirtualMachineDetails>|null $value Value to set for the virtualMachines property.
    */
    public function setVirtualMachines(?array $value): void {
        $this->getBackingStore()->set('virtualMachines', $value);
    }

}
