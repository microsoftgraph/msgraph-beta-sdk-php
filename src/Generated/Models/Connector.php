<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Connector extends Entity implements Parsable 
{
    /**
     * @var string|null $externalIp The external IP address as detected by the the connector server. Read-only.
    */
    private ?string $externalIp = null;
    
    /**
     * @var string|null $machineName The machine name the connector is installed and running on.
    */
    private ?string $machineName = null;
    
    /**
     * @var array<ConnectorGroup>|null $memberOf The connectorGroup that the connector is a member of. Read-only.
    */
    private ?array $memberOf = null;
    
    /**
     * @var ConnectorStatus|null $status Indicates the status of the connector. Possible values are: active, inactive. Read-only.
    */
    private ?ConnectorStatus $status = null;
    
    /**
     * Instantiates a new connector and sets the default values.
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
     * Gets the externalIp property value. The external IP address as detected by the the connector server. Read-only.
     * @return string|null
    */
    public function getExternalIp(): ?string {
        return $this->externalIp;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'externalIp' => function (ParseNode $n) use ($o) { $o->setExternalIp($n->getStringValue()); },
            'machineName' => function (ParseNode $n) use ($o) { $o->setMachineName($n->getStringValue()); },
            'memberOf' => function (ParseNode $n) use ($o) { $o->setMemberOf($n->getCollectionOfObjectValues(array(ConnectorGroup::class, 'createFromDiscriminatorValue'))); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(ConnectorStatus::class)); },
        ]);
    }

    /**
     * Gets the machineName property value. The machine name the connector is installed and running on.
     * @return string|null
    */
    public function getMachineName(): ?string {
        return $this->machineName;
    }

    /**
     * Gets the memberOf property value. The connectorGroup that the connector is a member of. Read-only.
     * @return array<ConnectorGroup>|null
    */
    public function getMemberOf(): ?array {
        return $this->memberOf;
    }

    /**
     * Gets the status property value. Indicates the status of the connector. Possible values are: active, inactive. Read-only.
     * @return ConnectorStatus|null
    */
    public function getStatus(): ?ConnectorStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('externalIp', $this->externalIp);
        $writer->writeStringValue('machineName', $this->machineName);
        $writer->writeCollectionOfObjectValues('memberOf', $this->memberOf);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the externalIp property value. The external IP address as detected by the the connector server. Read-only.
     *  @param string|null $value Value to set for the externalIp property.
    */
    public function setExternalIp(?string $value ): void {
        $this->externalIp = $value;
    }

    /**
     * Sets the machineName property value. The machine name the connector is installed and running on.
     *  @param string|null $value Value to set for the machineName property.
    */
    public function setMachineName(?string $value ): void {
        $this->machineName = $value;
    }

    /**
     * Sets the memberOf property value. The connectorGroup that the connector is a member of. Read-only.
     *  @param array<ConnectorGroup>|null $value Value to set for the memberOf property.
    */
    public function setMemberOf(?array $value ): void {
        $this->memberOf = $value;
    }

    /**
     * Sets the status property value. Indicates the status of the connector. Possible values are: active, inactive. Read-only.
     *  @param ConnectorStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ConnectorStatus $value ): void {
        $this->status = $value;
    }

}
