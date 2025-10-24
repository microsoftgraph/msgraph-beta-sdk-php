<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Entity that represents a single Microsoft Tunnel server
*/
class MicrosoftTunnelServer extends Entity implements Parsable 
{
    /**
     * Instantiates a new MicrosoftTunnelServer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftTunnelServer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftTunnelServer {
        return new MicrosoftTunnelServer();
    }

    /**
     * Gets the agentImageDigest property value. The digest of the current agent image running on this server. Supports: $filter, $select, $top, $skip, $orderby. $search is not supported. Read-only.
     * @return string|null
    */
    public function getAgentImageDigest(): ?string {
        $val = $this->getBackingStore()->get('agentImageDigest');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentImageDigest'");
    }

    /**
     * Gets the deploymentMode property value. Microsoft Tunnel server deployment mode. The value is set when the server is registered. Possible values are standaloneRootful, standaloneRootless, podRootful, podRootless. Default value: standaloneRootful. Supports: $filter, $select, $top, $skip, $orderby. $search is not supported. Read-only. Possible values are: standaloneRootful, standaloneRootless, podRootful, podRootless, unknownFutureValue.
     * @return MicrosoftTunnelDeploymentMode|null
    */
    public function getDeploymentMode(): ?MicrosoftTunnelDeploymentMode {
        $val = $this->getBackingStore()->get('deploymentMode');
        if (is_null($val) || $val instanceof MicrosoftTunnelDeploymentMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentMode'");
    }

    /**
     * Gets the displayName property value. The display name of the server. It is the same as the host name during registration and can be changed later. Supports: $filter, $select, $top, $skip, $orderby. $search is not supported. Max allowed length is 200 chars.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agentImageDigest' => fn(ParseNode $n) => $o->setAgentImageDigest($n->getStringValue()),
            'deploymentMode' => fn(ParseNode $n) => $o->setDeploymentMode($n->getEnumValue(MicrosoftTunnelDeploymentMode::class)),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastCheckinDateTime' => fn(ParseNode $n) => $o->setLastCheckinDateTime($n->getDateTimeValue()),
            'serverImageDigest' => fn(ParseNode $n) => $o->setServerImageDigest($n->getStringValue()),
            'tunnelServerHealthStatus' => fn(ParseNode $n) => $o->setTunnelServerHealthStatus($n->getEnumValue(MicrosoftTunnelServerHealthStatus::class)),
        ]);
    }

    /**
     * Gets the lastCheckinDateTime property value. Indicates when the server last checked in. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Supports: $filter, $select, $top, $skip, $orderby. $search is not supported Read-only.
     * @return DateTime|null
    */
    public function getLastCheckinDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastCheckinDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastCheckinDateTime'");
    }

    /**
     * Gets the serverImageDigest property value. The digest of the current server image running on this server. Supports: $filter, $select, $top, $skip, $orderby. $search is not supported. Read-only.
     * @return string|null
    */
    public function getServerImageDigest(): ?string {
        $val = $this->getBackingStore()->get('serverImageDigest');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serverImageDigest'");
    }

    /**
     * Gets the tunnelServerHealthStatus property value. Enum of possible MicrosoftTunnelServer health status types
     * @return MicrosoftTunnelServerHealthStatus|null
    */
    public function getTunnelServerHealthStatus(): ?MicrosoftTunnelServerHealthStatus {
        $val = $this->getBackingStore()->get('tunnelServerHealthStatus');
        if (is_null($val) || $val instanceof MicrosoftTunnelServerHealthStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tunnelServerHealthStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('agentImageDigest', $this->getAgentImageDigest());
        $writer->writeEnumValue('deploymentMode', $this->getDeploymentMode());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastCheckinDateTime', $this->getLastCheckinDateTime());
        $writer->writeStringValue('serverImageDigest', $this->getServerImageDigest());
        $writer->writeEnumValue('tunnelServerHealthStatus', $this->getTunnelServerHealthStatus());
    }

    /**
     * Sets the agentImageDigest property value. The digest of the current agent image running on this server. Supports: $filter, $select, $top, $skip, $orderby. $search is not supported. Read-only.
     * @param string|null $value Value to set for the agentImageDigest property.
    */
    public function setAgentImageDigest(?string $value): void {
        $this->getBackingStore()->set('agentImageDigest', $value);
    }

    /**
     * Sets the deploymentMode property value. Microsoft Tunnel server deployment mode. The value is set when the server is registered. Possible values are standaloneRootful, standaloneRootless, podRootful, podRootless. Default value: standaloneRootful. Supports: $filter, $select, $top, $skip, $orderby. $search is not supported. Read-only. Possible values are: standaloneRootful, standaloneRootless, podRootful, podRootless, unknownFutureValue.
     * @param MicrosoftTunnelDeploymentMode|null $value Value to set for the deploymentMode property.
    */
    public function setDeploymentMode(?MicrosoftTunnelDeploymentMode $value): void {
        $this->getBackingStore()->set('deploymentMode', $value);
    }

    /**
     * Sets the displayName property value. The display name of the server. It is the same as the host name during registration and can be changed later. Supports: $filter, $select, $top, $skip, $orderby. $search is not supported. Max allowed length is 200 chars.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastCheckinDateTime property value. Indicates when the server last checked in. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Supports: $filter, $select, $top, $skip, $orderby. $search is not supported Read-only.
     * @param DateTime|null $value Value to set for the lastCheckinDateTime property.
    */
    public function setLastCheckinDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastCheckinDateTime', $value);
    }

    /**
     * Sets the serverImageDigest property value. The digest of the current server image running on this server. Supports: $filter, $select, $top, $skip, $orderby. $search is not supported. Read-only.
     * @param string|null $value Value to set for the serverImageDigest property.
    */
    public function setServerImageDigest(?string $value): void {
        $this->getBackingStore()->set('serverImageDigest', $value);
    }

    /**
     * Sets the tunnelServerHealthStatus property value. Enum of possible MicrosoftTunnelServer health status types
     * @param MicrosoftTunnelServerHealthStatus|null $value Value to set for the tunnelServerHealthStatus property.
    */
    public function setTunnelServerHealthStatus(?MicrosoftTunnelServerHealthStatus $value): void {
        $this->getBackingStore()->set('tunnelServerHealthStatus', $value);
    }

}
