<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Connector extends Entity implements Parsable 
{
    /**
     * Instantiates a new Connector and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Connector
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Connector {
        return new Connector();
    }

    /**
     * Gets the externalIp property value. The external IP address as detected by the connector server. Read-only.
     * @return string|null
    */
    public function getExternalIp(): ?string {
        $val = $this->getBackingStore()->get('externalIp');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalIp'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'externalIp' => fn(ParseNode $n) => $o->setExternalIp($n->getStringValue()),
            'machineName' => fn(ParseNode $n) => $o->setMachineName($n->getStringValue()),
            'memberOf' => fn(ParseNode $n) => $o->setMemberOf($n->getCollectionOfObjectValues([ConnectorGroup::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ConnectorStatus::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the machineName property value. The name of the computer on which the connector is installed and runs on.
     * @return string|null
    */
    public function getMachineName(): ?string {
        $val = $this->getBackingStore()->get('machineName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'machineName'");
    }

    /**
     * Gets the memberOf property value. The connectorGroup that the connector is a member of. Read-only.
     * @return array<ConnectorGroup>|null
    */
    public function getMemberOf(): ?array {
        $val = $this->getBackingStore()->get('memberOf');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConnectorGroup::class);
            /** @var array<ConnectorGroup>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'memberOf'");
    }

    /**
     * Gets the status property value. The status property
     * @return ConnectorStatus|null
    */
    public function getStatus(): ?ConnectorStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof ConnectorStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the version property value. The version of the connector.
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('externalIp', $this->getExternalIp());
        $writer->writeStringValue('machineName', $this->getMachineName());
        $writer->writeCollectionOfObjectValues('memberOf', $this->getMemberOf());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the externalIp property value. The external IP address as detected by the connector server. Read-only.
     * @param string|null $value Value to set for the externalIp property.
    */
    public function setExternalIp(?string $value): void {
        $this->getBackingStore()->set('externalIp', $value);
    }

    /**
     * Sets the machineName property value. The name of the computer on which the connector is installed and runs on.
     * @param string|null $value Value to set for the machineName property.
    */
    public function setMachineName(?string $value): void {
        $this->getBackingStore()->set('machineName', $value);
    }

    /**
     * Sets the memberOf property value. The connectorGroup that the connector is a member of. Read-only.
     * @param array<ConnectorGroup>|null $value Value to set for the memberOf property.
    */
    public function setMemberOf(?array $value): void {
        $this->getBackingStore()->set('memberOf', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param ConnectorStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ConnectorStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the version property value. The version of the connector.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
