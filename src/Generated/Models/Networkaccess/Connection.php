<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Networkaccess;

use DateTime;
use Microsoft\\Graph\\Beta\\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Connection extends Entity implements Parsable 
{
    /**
     * Instantiates a new Connection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Connection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Connection {
        return new Connection();
    }

    /**
     * Gets the agentVersion property value. The version of the client that initiated the connection.
     * @return string|null
    */
    public function getAgentVersion(): ?string {
        $val = $this->getBackingStore()->get('agentVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentVersion'");
    }

    /**
     * Gets the applicationSnapshot property value. appId (or client ID) of the destination Microsoft Entra application.
     * @return ApplicationSnapshot|null
    */
    public function getApplicationSnapshot(): ?ApplicationSnapshot {
        $val = $this->getBackingStore()->get('applicationSnapshot');
        if (is_null($val) || $val instanceof ApplicationSnapshot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationSnapshot'");
    }

    /**
     * Gets the createdDateTime property value. The time the connection was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the destinationFqdn property value. The destination FQDN of the connection.
     * @return string|null
    */
    public function getDestinationFqdn(): ?string {
        $val = $this->getBackingStore()->get('destinationFqdn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationFqdn'");
    }

    /**
     * Gets the destinationIp property value. The destination IP of the connection.
     * @return string|null
    */
    public function getDestinationIp(): ?string {
        $val = $this->getBackingStore()->get('destinationIp');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationIp'");
    }

    /**
     * Gets the destinationPort property value. The destination port of the connection.
     * @return int|null
    */
    public function getDestinationPort(): ?int {
        $val = $this->getBackingStore()->get('destinationPort');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationPort'");
    }

    /**
     * Gets the deviceCategory property value. The category of the device. The possible values are: client, branch, unknownFutureValue, remoteNetwork. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: remoteNetwork.
     * @return DeviceCategory|null
    */
    public function getDeviceCategory(): ?DeviceCategory {
        $val = $this->getBackingStore()->get('deviceCategory');
        if (is_null($val) || $val instanceof DeviceCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCategory'");
    }

    /**
     * Gets the deviceId property value. The DeviceID.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        $val = $this->getBackingStore()->get('deviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceId'");
    }

    /**
     * Gets the deviceOperatingSystem property value. The device operating system type.
     * @return string|null
    */
    public function getDeviceOperatingSystem(): ?string {
        $val = $this->getBackingStore()->get('deviceOperatingSystem');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceOperatingSystem'");
    }

    /**
     * Gets the deviceOperatingSystemVersion property value. The device operating system version.
     * @return string|null
    */
    public function getDeviceOperatingSystemVersion(): ?string {
        $val = $this->getBackingStore()->get('deviceOperatingSystemVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceOperatingSystemVersion'");
    }

    /**
     * Gets the endDateTime property value. The time the connection was terminated.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('endDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agentVersion' => fn(ParseNode $n) => $o->setAgentVersion($n->getStringValue()),
            'applicationSnapshot' => fn(ParseNode $n) => $o->setApplicationSnapshot($n->getObjectValue([ApplicationSnapshot::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'destinationFqdn' => fn(ParseNode $n) => $o->setDestinationFqdn($n->getStringValue()),
            'destinationIp' => fn(ParseNode $n) => $o->setDestinationIp($n->getStringValue()),
            'destinationPort' => fn(ParseNode $n) => $o->setDestinationPort($n->getIntegerValue()),
            'deviceCategory' => fn(ParseNode $n) => $o->setDeviceCategory($n->getEnumValue(DeviceCategory::class)),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceOperatingSystem' => fn(ParseNode $n) => $o->setDeviceOperatingSystem($n->getStringValue()),
            'deviceOperatingSystemVersion' => fn(ParseNode $n) => $o->setDeviceOperatingSystemVersion($n->getStringValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'initiatingProcessName' => fn(ParseNode $n) => $o->setInitiatingProcessName($n->getStringValue()),
            'lastUpdateDateTime' => fn(ParseNode $n) => $o->setLastUpdateDateTime($n->getDateTimeValue()),
            'networkProtocol' => fn(ParseNode $n) => $o->setNetworkProtocol($n->getEnumValue(NetworkingProtocol::class)),
            'popProcessingRegion' => fn(ParseNode $n) => $o->setPopProcessingRegion($n->getStringValue()),
            'privateAccessDetails' => fn(ParseNode $n) => $o->setPrivateAccessDetails($n->getObjectValue([PrivateAccessDetails::class, 'createFromDiscriminatorValue'])),
            'receivedBytes' => fn(ParseNode $n) => $o->setReceivedBytes($n->getIntegerValue()),
            'sentBytes' => fn(ParseNode $n) => $o->setSentBytes($n->getIntegerValue()),
            'sourceIp' => fn(ParseNode $n) => $o->setSourceIp($n->getStringValue()),
            'sourcePort' => fn(ParseNode $n) => $o->setSourcePort($n->getIntegerValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ConnectionStatus::class)),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'trafficType' => fn(ParseNode $n) => $o->setTrafficType($n->getEnumValue(TrafficType::class)),
            'transactionBlockCount' => fn(ParseNode $n) => $o->setTransactionBlockCount($n->getIntegerValue()),
            'transactionCount' => fn(ParseNode $n) => $o->setTransactionCount($n->getIntegerValue()),
            'transportProtocol' => fn(ParseNode $n) => $o->setTransportProtocol($n->getEnumValue(NetworkingProtocol::class)),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the initiatingProcessName property value. The process initiating the traffic connection.
     * @return string|null
    */
    public function getInitiatingProcessName(): ?string {
        $val = $this->getBackingStore()->get('initiatingProcessName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initiatingProcessName'");
    }

    /**
     * Gets the lastUpdateDateTime property value. When the connection was last updated.
     * @return DateTime|null
    */
    public function getLastUpdateDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastUpdateDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUpdateDateTime'");
    }

    /**
     * Gets the networkProtocol property value. The network protocol of the connection. The possible values are: ip, icmp, igmp, ggp, ipv4, tcp, pup, udp, idp, ipv6, ipv6RoutingHeader, ipv6FragmentHeader, ipSecEncapsulatingSecurityPayload, ipSecAuthenticationHeader, icmpV6, ipv6NoNextHeader, ipv6DestinationOptions, nd, raw, ipx, spx, spxII, unknownFutureValue.
     * @return NetworkingProtocol|null
    */
    public function getNetworkProtocol(): ?NetworkingProtocol {
        $val = $this->getBackingStore()->get('networkProtocol');
        if (is_null($val) || $val instanceof NetworkingProtocol) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkProtocol'");
    }

    /**
     * Gets the popProcessingRegion property value. The Point-of-Presence processing region of the traffic.
     * @return string|null
    */
    public function getPopProcessingRegion(): ?string {
        $val = $this->getBackingStore()->get('popProcessingRegion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'popProcessingRegion'");
    }

    /**
     * Gets the privateAccessDetails property value. Private access details.
     * @return PrivateAccessDetails|null
    */
    public function getPrivateAccessDetails(): ?PrivateAccessDetails {
        $val = $this->getBackingStore()->get('privateAccessDetails');
        if (is_null($val) || $val instanceof PrivateAccessDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'privateAccessDetails'");
    }

    /**
     * Gets the receivedBytes property value. Accumulative bytes received.
     * @return int|null
    */
    public function getReceivedBytes(): ?int {
        $val = $this->getBackingStore()->get('receivedBytes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'receivedBytes'");
    }

    /**
     * Gets the sentBytes property value. Accumulative bytes sent.
     * @return int|null
    */
    public function getSentBytes(): ?int {
        $val = $this->getBackingStore()->get('sentBytes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sentBytes'");
    }

    /**
     * Gets the sourceIp property value. The source IP of the connection.
     * @return string|null
    */
    public function getSourceIp(): ?string {
        $val = $this->getBackingStore()->get('sourceIp');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceIp'");
    }

    /**
     * Gets the sourcePort property value. The source port of the connection.
     * @return int|null
    */
    public function getSourcePort(): ?int {
        $val = $this->getBackingStore()->get('sourcePort');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourcePort'");
    }

    /**
     * Gets the status property value. Status of the connection. The possible values are: open, active, closed, unknownFutureValue.
     * @return ConnectionStatus|null
    */
    public function getStatus(): ?ConnectionStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof ConnectionStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the tenantId property value. The ID of the tenant where the connection was initiated.
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Gets the trafficType property value. The trafficType property
     * @return TrafficType|null
    */
    public function getTrafficType(): ?TrafficType {
        $val = $this->getBackingStore()->get('trafficType');
        if (is_null($val) || $val instanceof TrafficType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trafficType'");
    }

    /**
     * Gets the transactionBlockCount property value. The number of blocked transactions belonging to the connection.
     * @return int|null
    */
    public function getTransactionBlockCount(): ?int {
        $val = $this->getBackingStore()->get('transactionBlockCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transactionBlockCount'");
    }

    /**
     * Gets the transactionCount property value. The number of transactions belonging to the connection.
     * @return int|null
    */
    public function getTransactionCount(): ?int {
        $val = $this->getBackingStore()->get('transactionCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transactionCount'");
    }

    /**
     * Gets the transportProtocol property value. The transport protocol of the connection. The possible values are: ip, icmp, igmp, ggp, ipv4, tcp, pup, udp, idp, ipv6, ipv6RoutingHeader, ipv6FragmentHeader, ipSecEncapsulatingSecurityPayload, ipSecAuthenticationHeader, icmpV6, ipv6NoNextHeader, ipv6DestinationOptions, nd, raw, ipx, spx, spxII, unknownFutureValue.
     * @return NetworkingProtocol|null
    */
    public function getTransportProtocol(): ?NetworkingProtocol {
        $val = $this->getBackingStore()->get('transportProtocol');
        if (is_null($val) || $val instanceof NetworkingProtocol) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transportProtocol'");
    }

    /**
     * Gets the userId property value. The user ID.
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Gets the userPrincipalName property value. The principal name of the user.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('agentVersion', $this->getAgentVersion());
        $writer->writeObjectValue('applicationSnapshot', $this->getApplicationSnapshot());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('destinationFqdn', $this->getDestinationFqdn());
        $writer->writeStringValue('destinationIp', $this->getDestinationIp());
        $writer->writeIntegerValue('destinationPort', $this->getDestinationPort());
        $writer->writeEnumValue('deviceCategory', $this->getDeviceCategory());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceOperatingSystem', $this->getDeviceOperatingSystem());
        $writer->writeStringValue('deviceOperatingSystemVersion', $this->getDeviceOperatingSystemVersion());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeStringValue('initiatingProcessName', $this->getInitiatingProcessName());
        $writer->writeDateTimeValue('lastUpdateDateTime', $this->getLastUpdateDateTime());
        $writer->writeEnumValue('networkProtocol', $this->getNetworkProtocol());
        $writer->writeStringValue('popProcessingRegion', $this->getPopProcessingRegion());
        $writer->writeObjectValue('privateAccessDetails', $this->getPrivateAccessDetails());
        $writer->writeIntegerValue('receivedBytes', $this->getReceivedBytes());
        $writer->writeIntegerValue('sentBytes', $this->getSentBytes());
        $writer->writeStringValue('sourceIp', $this->getSourceIp());
        $writer->writeIntegerValue('sourcePort', $this->getSourcePort());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeEnumValue('trafficType', $this->getTrafficType());
        $writer->writeIntegerValue('transactionBlockCount', $this->getTransactionBlockCount());
        $writer->writeIntegerValue('transactionCount', $this->getTransactionCount());
        $writer->writeEnumValue('transportProtocol', $this->getTransportProtocol());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the agentVersion property value. The version of the client that initiated the connection.
     * @param string|null $value Value to set for the agentVersion property.
    */
    public function setAgentVersion(?string $value): void {
        $this->getBackingStore()->set('agentVersion', $value);
    }

    /**
     * Sets the applicationSnapshot property value. appId (or client ID) of the destination Microsoft Entra application.
     * @param ApplicationSnapshot|null $value Value to set for the applicationSnapshot property.
    */
    public function setApplicationSnapshot(?ApplicationSnapshot $value): void {
        $this->getBackingStore()->set('applicationSnapshot', $value);
    }

    /**
     * Sets the createdDateTime property value. The time the connection was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the destinationFqdn property value. The destination FQDN of the connection.
     * @param string|null $value Value to set for the destinationFqdn property.
    */
    public function setDestinationFqdn(?string $value): void {
        $this->getBackingStore()->set('destinationFqdn', $value);
    }

    /**
     * Sets the destinationIp property value. The destination IP of the connection.
     * @param string|null $value Value to set for the destinationIp property.
    */
    public function setDestinationIp(?string $value): void {
        $this->getBackingStore()->set('destinationIp', $value);
    }

    /**
     * Sets the destinationPort property value. The destination port of the connection.
     * @param int|null $value Value to set for the destinationPort property.
    */
    public function setDestinationPort(?int $value): void {
        $this->getBackingStore()->set('destinationPort', $value);
    }

    /**
     * Sets the deviceCategory property value. The category of the device. The possible values are: client, branch, unknownFutureValue, remoteNetwork. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: remoteNetwork.
     * @param DeviceCategory|null $value Value to set for the deviceCategory property.
    */
    public function setDeviceCategory(?DeviceCategory $value): void {
        $this->getBackingStore()->set('deviceCategory', $value);
    }

    /**
     * Sets the deviceId property value. The DeviceID.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceOperatingSystem property value. The device operating system type.
     * @param string|null $value Value to set for the deviceOperatingSystem property.
    */
    public function setDeviceOperatingSystem(?string $value): void {
        $this->getBackingStore()->set('deviceOperatingSystem', $value);
    }

    /**
     * Sets the deviceOperatingSystemVersion property value. The device operating system version.
     * @param string|null $value Value to set for the deviceOperatingSystemVersion property.
    */
    public function setDeviceOperatingSystemVersion(?string $value): void {
        $this->getBackingStore()->set('deviceOperatingSystemVersion', $value);
    }

    /**
     * Sets the endDateTime property value. The time the connection was terminated.
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the initiatingProcessName property value. The process initiating the traffic connection.
     * @param string|null $value Value to set for the initiatingProcessName property.
    */
    public function setInitiatingProcessName(?string $value): void {
        $this->getBackingStore()->set('initiatingProcessName', $value);
    }

    /**
     * Sets the lastUpdateDateTime property value. When the connection was last updated.
     * @param DateTime|null $value Value to set for the lastUpdateDateTime property.
    */
    public function setLastUpdateDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdateDateTime', $value);
    }

    /**
     * Sets the networkProtocol property value. The network protocol of the connection. The possible values are: ip, icmp, igmp, ggp, ipv4, tcp, pup, udp, idp, ipv6, ipv6RoutingHeader, ipv6FragmentHeader, ipSecEncapsulatingSecurityPayload, ipSecAuthenticationHeader, icmpV6, ipv6NoNextHeader, ipv6DestinationOptions, nd, raw, ipx, spx, spxII, unknownFutureValue.
     * @param NetworkingProtocol|null $value Value to set for the networkProtocol property.
    */
    public function setNetworkProtocol(?NetworkingProtocol $value): void {
        $this->getBackingStore()->set('networkProtocol', $value);
    }

    /**
     * Sets the popProcessingRegion property value. The Point-of-Presence processing region of the traffic.
     * @param string|null $value Value to set for the popProcessingRegion property.
    */
    public function setPopProcessingRegion(?string $value): void {
        $this->getBackingStore()->set('popProcessingRegion', $value);
    }

    /**
     * Sets the privateAccessDetails property value. Private access details.
     * @param PrivateAccessDetails|null $value Value to set for the privateAccessDetails property.
    */
    public function setPrivateAccessDetails(?PrivateAccessDetails $value): void {
        $this->getBackingStore()->set('privateAccessDetails', $value);
    }

    /**
     * Sets the receivedBytes property value. Accumulative bytes received.
     * @param int|null $value Value to set for the receivedBytes property.
    */
    public function setReceivedBytes(?int $value): void {
        $this->getBackingStore()->set('receivedBytes', $value);
    }

    /**
     * Sets the sentBytes property value. Accumulative bytes sent.
     * @param int|null $value Value to set for the sentBytes property.
    */
    public function setSentBytes(?int $value): void {
        $this->getBackingStore()->set('sentBytes', $value);
    }

    /**
     * Sets the sourceIp property value. The source IP of the connection.
     * @param string|null $value Value to set for the sourceIp property.
    */
    public function setSourceIp(?string $value): void {
        $this->getBackingStore()->set('sourceIp', $value);
    }

    /**
     * Sets the sourcePort property value. The source port of the connection.
     * @param int|null $value Value to set for the sourcePort property.
    */
    public function setSourcePort(?int $value): void {
        $this->getBackingStore()->set('sourcePort', $value);
    }

    /**
     * Sets the status property value. Status of the connection. The possible values are: open, active, closed, unknownFutureValue.
     * @param ConnectionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ConnectionStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the tenantId property value. The ID of the tenant where the connection was initiated.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the trafficType property value. The trafficType property
     * @param TrafficType|null $value Value to set for the trafficType property.
    */
    public function setTrafficType(?TrafficType $value): void {
        $this->getBackingStore()->set('trafficType', $value);
    }

    /**
     * Sets the transactionBlockCount property value. The number of blocked transactions belonging to the connection.
     * @param int|null $value Value to set for the transactionBlockCount property.
    */
    public function setTransactionBlockCount(?int $value): void {
        $this->getBackingStore()->set('transactionBlockCount', $value);
    }

    /**
     * Sets the transactionCount property value. The number of transactions belonging to the connection.
     * @param int|null $value Value to set for the transactionCount property.
    */
    public function setTransactionCount(?int $value): void {
        $this->getBackingStore()->set('transactionCount', $value);
    }

    /**
     * Sets the transportProtocol property value. The transport protocol of the connection. The possible values are: ip, icmp, igmp, ggp, ipv4, tcp, pup, udp, idp, ipv6, ipv6RoutingHeader, ipv6FragmentHeader, ipSecEncapsulatingSecurityPayload, ipSecAuthenticationHeader, icmpV6, ipv6NoNextHeader, ipv6DestinationOptions, nd, raw, ipx, spx, spxII, unknownFutureValue.
     * @param NetworkingProtocol|null $value Value to set for the transportProtocol property.
    */
    public function setTransportProtocol(?NetworkingProtocol $value): void {
        $this->getBackingStore()->set('transportProtocol', $value);
    }

    /**
     * Sets the userId property value. The user ID.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userPrincipalName property value. The principal name of the user.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
