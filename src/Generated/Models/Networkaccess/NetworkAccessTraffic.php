<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class NetworkAccessTraffic implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new networkAccessTraffic and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NetworkAccessTraffic
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NetworkAccessTraffic {
        return new NetworkAccessTraffic();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the agentVersion property value. Represents the version of the Global Secure Access client agent software. Supports $filter (eq) and $orderby.
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the connectionId property value. Represents a unique identifier assigned to a connection. Supports $filter (eq) and $orderby.
     * @return string|null
    */
    public function getConnectionId(): ?string {
        $val = $this->getBackingStore()->get('connectionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectionId'");
    }

    /**
     * Gets the createdDateTime property value. Represents the date and time when a network access traffic log entry was created. Supports $filter (eq) and $orderby.
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
     * Gets the destinationFQDN property value. Represents the Fully Qualified Domain Name (FQDN) of the destination host or server in a network communication. Supports $filter (eq) and $orderby.
     * @return string|null
    */
    public function getDestinationFQDN(): ?string {
        $val = $this->getBackingStore()->get('destinationFQDN');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationFQDN'");
    }

    /**
     * Gets the destinationIp property value. Represents the IP address of the destination host or server in a network communication. Supports $filter (eq) and $orderby.
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
     * Gets the destinationPort property value. Represents the network port number on the destination host or server in a network communication. Supports $filter (eq) and $orderby.
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
     * Gets the deviceCategory property value. Represents the category classification of a device within a network infrastructure. The possible values are: client, branch, unknownFutureValue. Supports $filter (eq) and $orderby.
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
     * Gets the deviceId property value. Represents a unique identifier assigned to a device within a network infrastructure. Supports $filter (eq) and $orderby.
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
     * Gets the deviceOperatingSystem property value. Represents the operating system installed on a device within a network infrastructure. Supports $filter (eq) and $orderby.
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
     * Gets the deviceOperatingSystemVersion property value. Represents the version or release number of the operating system installed on a device within a network infrastructure. Supports $filter (eq) and $orderby.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'agentVersion' => fn(ParseNode $n) => $o->setAgentVersion($n->getStringValue()),
            'connectionId' => fn(ParseNode $n) => $o->setConnectionId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'destinationFQDN' => fn(ParseNode $n) => $o->setDestinationFQDN($n->getStringValue()),
            'destinationIp' => fn(ParseNode $n) => $o->setDestinationIp($n->getStringValue()),
            'destinationPort' => fn(ParseNode $n) => $o->setDestinationPort($n->getIntegerValue()),
            'deviceCategory' => fn(ParseNode $n) => $o->setDeviceCategory($n->getEnumValue(DeviceCategory::class)),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceOperatingSystem' => fn(ParseNode $n) => $o->setDeviceOperatingSystem($n->getStringValue()),
            'deviceOperatingSystemVersion' => fn(ParseNode $n) => $o->setDeviceOperatingSystemVersion($n->getStringValue()),
            'headers' => fn(ParseNode $n) => $o->setHeaders($n->getObjectValue([Headers::class, 'createFromDiscriminatorValue'])),
            'networkProtocol' => fn(ParseNode $n) => $o->setNetworkProtocol($n->getEnumValue(NetworkingProtocol::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'policyId' => fn(ParseNode $n) => $o->setPolicyId($n->getStringValue()),
            'policyRuleId' => fn(ParseNode $n) => $o->setPolicyRuleId($n->getStringValue()),
            'receivedBytes' => fn(ParseNode $n) => $o->setReceivedBytes($n->getIntegerValue()),
            'sentBytes' => fn(ParseNode $n) => $o->setSentBytes($n->getIntegerValue()),
            'sessionId' => fn(ParseNode $n) => $o->setSessionId($n->getStringValue()),
            'sourceIp' => fn(ParseNode $n) => $o->setSourceIp($n->getStringValue()),
            'sourcePort' => fn(ParseNode $n) => $o->setSourcePort($n->getIntegerValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'trafficType' => fn(ParseNode $n) => $o->setTrafficType($n->getEnumValue(TrafficType::class)),
            'transactionId' => fn(ParseNode $n) => $o->setTransactionId($n->getStringValue()),
            'transportProtocol' => fn(ParseNode $n) => $o->setTransportProtocol($n->getEnumValue(NetworkingProtocol::class)),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ];
    }

    /**
     * Gets the headers property value. Represents the headers included in a network request or response. Supports $filter (eq) and $orderby.
     * @return Headers|null
    */
    public function getHeaders(): ?Headers {
        $val = $this->getBackingStore()->get('headers');
        if (is_null($val) || $val instanceof Headers) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'headers'");
    }

    /**
     * Gets the networkProtocol property value. Represents the networking protocol used for communication.The possible values are: ip, icmp, igmp, ggp, ipv4, tcp, pup, udp, idp, ipv6, ipv6RoutingHeader, ipv6FragmentHeader, ipSecEncapsulatingSecurityPayload, ipSecAuthenticationHeader, icmpV6, ipv6NoNextHeader, ipv6DestinationOptions, nd, raw, ipx, spx, spxII, unknownFutureValue. Supports $filter (eq) and $orderby.
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
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the policyId property value. Represents a unique identifier assigned to a policy. Supports $filter (eq) and $orderby.
     * @return string|null
    */
    public function getPolicyId(): ?string {
        $val = $this->getBackingStore()->get('policyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyId'");
    }

    /**
     * Gets the policyRuleId property value. Represents a unique identifier assigned to a policy rule. Supports $filter (eq) and $orderby.
     * @return string|null
    */
    public function getPolicyRuleId(): ?string {
        $val = $this->getBackingStore()->get('policyRuleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyRuleId'");
    }

    /**
     * Gets the receivedBytes property value. Represents the total number of bytes received in a network communication or data transfer. Supports $filter (eq) and $orderby.
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
     * Gets the sentBytes property value. Represents the total number of bytes sent in a network communication or data transfer. Supports $filter (eq) and $orderby.
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
     * Gets the sessionId property value. Represents a unique identifier assigned to a session or connection within a network infrastructure. Supports $filter (eq) and $orderby.
     * @return string|null
    */
    public function getSessionId(): ?string {
        $val = $this->getBackingStore()->get('sessionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sessionId'");
    }

    /**
     * Gets the sourceIp property value. Represents the source IP address in a network communication. Supports $filter (eq) and $orderby.
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
     * Gets the sourcePort property value. Represents the network port number on the source host or device in a network communication. Supports $filter (eq) and $orderby.
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
     * Gets the tenantId property value. Represents a unique identifier assigned to a tenant within a network infrastructure. Supports $filter (eq) and $orderby.
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
     * Gets the transactionId property value. Represents a unique identifier assigned to a specific transaction or operation. Key. Supports $filter (eq) and $orderby.
     * @return string|null
    */
    public function getTransactionId(): ?string {
        $val = $this->getBackingStore()->get('transactionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transactionId'");
    }

    /**
     * Gets the transportProtocol property value. Represents the transport protocol used for communication.The possible values are: ip, icmp, igmp, ggp, ipv4, tcp, pup, udp, idp, ipv6, ipv6RoutingHeader, ipv6FragmentHeader, ipSecEncapsulatingSecurityPayload, ipSecAuthenticationHeader, icmpV6, ipv6NoNextHeader, ipv6DestinationOptions, nd, raw, ipx, spx, spxII, unknownFutureValue. Supports $filter (eq) and $orderby.
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
     * Gets the userId property value. Represents a unique identifier assigned to a user. Supports $filter (eq) and $orderby.
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
     * Gets the userPrincipalName property value. Represents the user principal name (UPN) associated with a user. Supports $filter (eq) and $orderby.
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
        $writer->writeStringValue('agentVersion', $this->getAgentVersion());
        $writer->writeStringValue('connectionId', $this->getConnectionId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('destinationFQDN', $this->getDestinationFQDN());
        $writer->writeStringValue('destinationIp', $this->getDestinationIp());
        $writer->writeIntegerValue('destinationPort', $this->getDestinationPort());
        $writer->writeEnumValue('deviceCategory', $this->getDeviceCategory());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceOperatingSystem', $this->getDeviceOperatingSystem());
        $writer->writeStringValue('deviceOperatingSystemVersion', $this->getDeviceOperatingSystemVersion());
        $writer->writeObjectValue('headers', $this->getHeaders());
        $writer->writeEnumValue('networkProtocol', $this->getNetworkProtocol());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('policyId', $this->getPolicyId());
        $writer->writeStringValue('policyRuleId', $this->getPolicyRuleId());
        $writer->writeIntegerValue('receivedBytes', $this->getReceivedBytes());
        $writer->writeIntegerValue('sentBytes', $this->getSentBytes());
        $writer->writeStringValue('sessionId', $this->getSessionId());
        $writer->writeStringValue('sourceIp', $this->getSourceIp());
        $writer->writeIntegerValue('sourcePort', $this->getSourcePort());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeEnumValue('trafficType', $this->getTrafficType());
        $writer->writeStringValue('transactionId', $this->getTransactionId());
        $writer->writeEnumValue('transportProtocol', $this->getTransportProtocol());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the agentVersion property value. Represents the version of the Global Secure Access client agent software. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the agentVersion property.
    */
    public function setAgentVersion(?string $value): void {
        $this->getBackingStore()->set('agentVersion', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the connectionId property value. Represents a unique identifier assigned to a connection. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the connectionId property.
    */
    public function setConnectionId(?string $value): void {
        $this->getBackingStore()->set('connectionId', $value);
    }

    /**
     * Sets the createdDateTime property value. Represents the date and time when a network access traffic log entry was created. Supports $filter (eq) and $orderby.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the destinationFQDN property value. Represents the Fully Qualified Domain Name (FQDN) of the destination host or server in a network communication. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the destinationFQDN property.
    */
    public function setDestinationFQDN(?string $value): void {
        $this->getBackingStore()->set('destinationFQDN', $value);
    }

    /**
     * Sets the destinationIp property value. Represents the IP address of the destination host or server in a network communication. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the destinationIp property.
    */
    public function setDestinationIp(?string $value): void {
        $this->getBackingStore()->set('destinationIp', $value);
    }

    /**
     * Sets the destinationPort property value. Represents the network port number on the destination host or server in a network communication. Supports $filter (eq) and $orderby.
     * @param int|null $value Value to set for the destinationPort property.
    */
    public function setDestinationPort(?int $value): void {
        $this->getBackingStore()->set('destinationPort', $value);
    }

    /**
     * Sets the deviceCategory property value. Represents the category classification of a device within a network infrastructure. The possible values are: client, branch, unknownFutureValue. Supports $filter (eq) and $orderby.
     * @param DeviceCategory|null $value Value to set for the deviceCategory property.
    */
    public function setDeviceCategory(?DeviceCategory $value): void {
        $this->getBackingStore()->set('deviceCategory', $value);
    }

    /**
     * Sets the deviceId property value. Represents a unique identifier assigned to a device within a network infrastructure. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceOperatingSystem property value. Represents the operating system installed on a device within a network infrastructure. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the deviceOperatingSystem property.
    */
    public function setDeviceOperatingSystem(?string $value): void {
        $this->getBackingStore()->set('deviceOperatingSystem', $value);
    }

    /**
     * Sets the deviceOperatingSystemVersion property value. Represents the version or release number of the operating system installed on a device within a network infrastructure. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the deviceOperatingSystemVersion property.
    */
    public function setDeviceOperatingSystemVersion(?string $value): void {
        $this->getBackingStore()->set('deviceOperatingSystemVersion', $value);
    }

    /**
     * Sets the headers property value. Represents the headers included in a network request or response. Supports $filter (eq) and $orderby.
     * @param Headers|null $value Value to set for the headers property.
    */
    public function setHeaders(?Headers $value): void {
        $this->getBackingStore()->set('headers', $value);
    }

    /**
     * Sets the networkProtocol property value. Represents the networking protocol used for communication.The possible values are: ip, icmp, igmp, ggp, ipv4, tcp, pup, udp, idp, ipv6, ipv6RoutingHeader, ipv6FragmentHeader, ipSecEncapsulatingSecurityPayload, ipSecAuthenticationHeader, icmpV6, ipv6NoNextHeader, ipv6DestinationOptions, nd, raw, ipx, spx, spxII, unknownFutureValue. Supports $filter (eq) and $orderby.
     * @param NetworkingProtocol|null $value Value to set for the networkProtocol property.
    */
    public function setNetworkProtocol(?NetworkingProtocol $value): void {
        $this->getBackingStore()->set('networkProtocol', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the policyId property value. Represents a unique identifier assigned to a policy. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value): void {
        $this->getBackingStore()->set('policyId', $value);
    }

    /**
     * Sets the policyRuleId property value. Represents a unique identifier assigned to a policy rule. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the policyRuleId property.
    */
    public function setPolicyRuleId(?string $value): void {
        $this->getBackingStore()->set('policyRuleId', $value);
    }

    /**
     * Sets the receivedBytes property value. Represents the total number of bytes received in a network communication or data transfer. Supports $filter (eq) and $orderby.
     * @param int|null $value Value to set for the receivedBytes property.
    */
    public function setReceivedBytes(?int $value): void {
        $this->getBackingStore()->set('receivedBytes', $value);
    }

    /**
     * Sets the sentBytes property value. Represents the total number of bytes sent in a network communication or data transfer. Supports $filter (eq) and $orderby.
     * @param int|null $value Value to set for the sentBytes property.
    */
    public function setSentBytes(?int $value): void {
        $this->getBackingStore()->set('sentBytes', $value);
    }

    /**
     * Sets the sessionId property value. Represents a unique identifier assigned to a session or connection within a network infrastructure. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the sessionId property.
    */
    public function setSessionId(?string $value): void {
        $this->getBackingStore()->set('sessionId', $value);
    }

    /**
     * Sets the sourceIp property value. Represents the source IP address in a network communication. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the sourceIp property.
    */
    public function setSourceIp(?string $value): void {
        $this->getBackingStore()->set('sourceIp', $value);
    }

    /**
     * Sets the sourcePort property value. Represents the network port number on the source host or device in a network communication. Supports $filter (eq) and $orderby.
     * @param int|null $value Value to set for the sourcePort property.
    */
    public function setSourcePort(?int $value): void {
        $this->getBackingStore()->set('sourcePort', $value);
    }

    /**
     * Sets the tenantId property value. Represents a unique identifier assigned to a tenant within a network infrastructure. Supports $filter (eq) and $orderby.
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
     * Sets the transactionId property value. Represents a unique identifier assigned to a specific transaction or operation. Key. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the transactionId property.
    */
    public function setTransactionId(?string $value): void {
        $this->getBackingStore()->set('transactionId', $value);
    }

    /**
     * Sets the transportProtocol property value. Represents the transport protocol used for communication.The possible values are: ip, icmp, igmp, ggp, ipv4, tcp, pup, udp, idp, ipv6, ipv6RoutingHeader, ipv6FragmentHeader, ipSecEncapsulatingSecurityPayload, ipSecAuthenticationHeader, icmpV6, ipv6NoNextHeader, ipv6DestinationOptions, nd, raw, ipx, spx, spxII, unknownFutureValue. Supports $filter (eq) and $orderby.
     * @param NetworkingProtocol|null $value Value to set for the transportProtocol property.
    */
    public function setTransportProtocol(?NetworkingProtocol $value): void {
        $this->getBackingStore()->set('transportProtocol', $value);
    }

    /**
     * Sets the userId property value. Represents a unique identifier assigned to a user. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userPrincipalName property value. Represents the user principal name (UPN) associated with a user. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
