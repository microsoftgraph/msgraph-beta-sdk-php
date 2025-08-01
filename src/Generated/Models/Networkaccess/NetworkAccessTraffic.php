<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Device;
use Microsoft\Graph\Beta\Generated\Models\User;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class NetworkAccessTraffic implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new NetworkAccessTraffic and sets the default values.
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
     * Gets the action property value. Indicates the action taken based on filtering policies. The possible values are: block, allow, unknownFutureValue, bypass, alert. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: bypass , alert.
     * @return FilteringPolicyAction|null
    */
    public function getAction(): ?FilteringPolicyAction {
        $val = $this->getBackingStore()->get('action');
        if (is_null($val) || $val instanceof FilteringPolicyAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'action'");
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the agentVersion property value. Represents the version of the Global Secure Access (GSA) client agent software. Supports $filter (eq) and $orderby.
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
     * Gets the applicationSnapshot property value. Destination Application ID accessed in Azure AD during the transaction. Supports $filter (eq) and $orderby.
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
     * Gets the BackingStore property value. Stores model information.
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
     * Gets the description property value. Informational error message. For example: 'Threat intelligence detected a transaction and triggered an alert.' or 'The Global Secure Access (GSA) policy blocked the destination and triggered an alert.' Supports $filter (eq) and $orderby.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
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
     * Gets the destinationUrl property value. Represents the URL of the destination in a network communication. Supports $filter (eq) and $orderby.
     * @return string|null
    */
    public function getDestinationUrl(): ?string {
        $val = $this->getBackingStore()->get('destinationUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationUrl'");
    }

    /**
     * Gets the destinationWebCategory property value. The destination FQDN's Web Category (e.g., Gambling). Supports $filter (eq) and $orderby.
     * @return WebCategory|null
    */
    public function getDestinationWebCategory(): ?WebCategory {
        $val = $this->getBackingStore()->get('destinationWebCategory');
        if (is_null($val) || $val instanceof WebCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationWebCategory'");
    }

    /**
     * Gets the device property value. Represents the device associated with the network traffic, providing details about the hardware or virtual machine involved in the transaction.
     * @return Device|null
    */
    public function getDevice(): ?Device {
        $val = $this->getBackingStore()->get('device');
        if (is_null($val) || $val instanceof Device) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'device'");
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
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(FilteringPolicyAction::class)),
            'agentVersion' => fn(ParseNode $n) => $o->setAgentVersion($n->getStringValue()),
            'applicationSnapshot' => fn(ParseNode $n) => $o->setApplicationSnapshot($n->getObjectValue([ApplicationSnapshot::class, 'createFromDiscriminatorValue'])),
            'connectionId' => fn(ParseNode $n) => $o->setConnectionId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'destinationFQDN' => fn(ParseNode $n) => $o->setDestinationFQDN($n->getStringValue()),
            'destinationIp' => fn(ParseNode $n) => $o->setDestinationIp($n->getStringValue()),
            'destinationPort' => fn(ParseNode $n) => $o->setDestinationPort($n->getIntegerValue()),
            'destinationUrl' => fn(ParseNode $n) => $o->setDestinationUrl($n->getStringValue()),
            'destinationWebCategory' => fn(ParseNode $n) => $o->setDestinationWebCategory($n->getObjectValue([WebCategory::class, 'createFromDiscriminatorValue'])),
            'device' => fn(ParseNode $n) => $o->setDevice($n->getObjectValue([Device::class, 'createFromDiscriminatorValue'])),
            'deviceCategory' => fn(ParseNode $n) => $o->setDeviceCategory($n->getEnumValue(DeviceCategory::class)),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceOperatingSystem' => fn(ParseNode $n) => $o->setDeviceOperatingSystem($n->getStringValue()),
            'deviceOperatingSystemVersion' => fn(ParseNode $n) => $o->setDeviceOperatingSystemVersion($n->getStringValue()),
            'filteringProfileId' => fn(ParseNode $n) => $o->setFilteringProfileId($n->getStringValue()),
            'filteringProfileName' => fn(ParseNode $n) => $o->setFilteringProfileName($n->getStringValue()),
            'headers' => fn(ParseNode $n) => $o->setHeaders($n->getObjectValue([Headers::class, 'createFromDiscriminatorValue'])),
            'httpMethod' => fn(ParseNode $n) => $o->setHttpMethod($n->getEnumValue(HttpMethod::class)),
            'initiatingProcessName' => fn(ParseNode $n) => $o->setInitiatingProcessName($n->getStringValue()),
            'networkProtocol' => fn(ParseNode $n) => $o->setNetworkProtocol($n->getEnumValue(NetworkingProtocol::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operationStatus' => fn(ParseNode $n) => $o->setOperationStatus($n->getEnumValue(NetworkTrafficOperationStatus::class)),
            'policyId' => fn(ParseNode $n) => $o->setPolicyId($n->getStringValue()),
            'policyName' => fn(ParseNode $n) => $o->setPolicyName($n->getStringValue()),
            'policyRuleId' => fn(ParseNode $n) => $o->setPolicyRuleId($n->getStringValue()),
            'policyRuleName' => fn(ParseNode $n) => $o->setPolicyRuleName($n->getStringValue()),
            'popProcessingRegion' => fn(ParseNode $n) => $o->setPopProcessingRegion($n->getStringValue()),
            'privateAccessDetails' => fn(ParseNode $n) => $o->setPrivateAccessDetails($n->getObjectValue([PrivateAccessDetails::class, 'createFromDiscriminatorValue'])),
            'receivedBytes' => fn(ParseNode $n) => $o->setReceivedBytes($n->getIntegerValue()),
            'remoteNetworkId' => fn(ParseNode $n) => $o->setRemoteNetworkId($n->getStringValue()),
            'resourceTenantId' => fn(ParseNode $n) => $o->setResourceTenantId($n->getStringValue()),
            'responseCode' => fn(ParseNode $n) => $o->setResponseCode($n->getIntegerValue()),
            'sentBytes' => fn(ParseNode $n) => $o->setSentBytes($n->getIntegerValue()),
            'sessionId' => fn(ParseNode $n) => $o->setSessionId($n->getStringValue()),
            'sourceIp' => fn(ParseNode $n) => $o->setSourceIp($n->getStringValue()),
            'sourcePort' => fn(ParseNode $n) => $o->setSourcePort($n->getIntegerValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'threatType' => fn(ParseNode $n) => $o->setThreatType($n->getStringValue()),
            'trafficType' => fn(ParseNode $n) => $o->setTrafficType($n->getEnumValue(TrafficType::class)),
            'transactionId' => fn(ParseNode $n) => $o->setTransactionId($n->getStringValue()),
            'transportProtocol' => fn(ParseNode $n) => $o->setTransportProtocol($n->getEnumValue(NetworkingProtocol::class)),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([User::class, 'createFromDiscriminatorValue'])),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
            'vendorNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setVendorNames($val);
            },
        ];
    }

    /**
     * Gets the filteringProfileId property value. The ID of the Filtering Profile associated with the action performed on traffic. Supports $filter (eq) and $orderby.
     * @return string|null
    */
    public function getFilteringProfileId(): ?string {
        $val = $this->getBackingStore()->get('filteringProfileId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filteringProfileId'");
    }

    /**
     * Gets the filteringProfileName property value. The name of the Filtering Profile associated with the action performed on traffic. Supports $filter (eq) and $orderby.
     * @return string|null
    */
    public function getFilteringProfileName(): ?string {
        $val = $this->getBackingStore()->get('filteringProfileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filteringProfileName'");
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
     * Gets the httpMethod property value. The HTTP method inspected in the intercepted HTTP traffic. Supports $filter (eq) and $orderby.
     * @return HttpMethod|null
    */
    public function getHttpMethod(): ?HttpMethod {
        $val = $this->getBackingStore()->get('httpMethod');
        if (is_null($val) || $val instanceof HttpMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'httpMethod'");
    }

    /**
     * Gets the initiatingProcessName property value. The process initiating the traffic transaction. Supports $filter (eq) and $orderby.
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
     * Gets the networkProtocol property value. Represents the networking protocol used for communication. The possible values are: ip, icmp, igmp, ggp, ipv4, tcp, pup, udp, idp, ipv6, ipv6RoutingHeader, ipv6FragmentHeader, ipSecEncapsulatingSecurityPayload, ipSecAuthenticationHeader, icmpV6, ipv6NoNextHeader, ipv6DestinationOptions, nd, raw, ipx, spx, spxII, unknownFutureValue. Supports $filter (eq) and $orderby.
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
     * Gets the operationStatus property value. Indication if traffic was successfully processed. The possible values are: success, failure, unknownFutureValue. Supports $filter (eq) and $orderby.
     * @return NetworkTrafficOperationStatus|null
    */
    public function getOperationStatus(): ?NetworkTrafficOperationStatus {
        $val = $this->getBackingStore()->get('operationStatus');
        if (is_null($val) || $val instanceof NetworkTrafficOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operationStatus'");
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
     * Gets the policyName property value. The name of the filtering policy associated with the action performed on traffic. Supports $filter (eq) and $orderby.
     * @return string|null
    */
    public function getPolicyName(): ?string {
        $val = $this->getBackingStore()->get('policyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyName'");
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
     * Gets the policyRuleName property value. The name of the rule associated with the action performed on traffic. Supports $filter (eq) and $orderby.
     * @return string|null
    */
    public function getPolicyRuleName(): ?string {
        $val = $this->getBackingStore()->get('policyRuleName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyRuleName'");
    }

    /**
     * Gets the popProcessingRegion property value. The Point-of-Presence processing region of the traffic. Supports $filter (eq) and $orderby.
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
     * Gets the privateAccessDetails property value. Details about private access traffic. Supports $filter (eq) and $orderby.
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
     * Gets the remoteNetworkId property value. The ID from which traffic was sent or received, providing visibility into the origin of the traffic. Supports $filter (eq) and $orderby.
     * @return string|null
    */
    public function getRemoteNetworkId(): ?string {
        $val = $this->getBackingStore()->get('remoteNetworkId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteNetworkId'");
    }

    /**
     * Gets the resourceTenantId property value. Tenant ID that owns the resource. Supports $filter (eq) and $orderby.
     * @return string|null
    */
    public function getResourceTenantId(): ?string {
        $val = $this->getBackingStore()->get('resourceTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceTenantId'");
    }

    /**
     * Gets the responseCode property value. The HTTP response code inspected in the intercepted HTTP traffic. Supports $filter (eq) and $orderby.
     * @return int|null
    */
    public function getResponseCode(): ?int {
        $val = $this->getBackingStore()->get('responseCode');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'responseCode'");
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
     * Gets the threatType property value. The type of threat detected in the traffic. Supports $filter (eq) and $orderby.
     * @return string|null
    */
    public function getThreatType(): ?string {
        $val = $this->getBackingStore()->get('threatType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'threatType'");
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
     * Gets the transportProtocol property value. Represents the transport protocol used for communication. The possible values are: ip, icmp, igmp, ggp, ipv4, tcp, pup, udp, idp, ipv6, ipv6RoutingHeader, ipv6FragmentHeader, ipSecEncapsulatingSecurityPayload, ipSecAuthenticationHeader, icmpV6, ipv6NoNextHeader, ipv6DestinationOptions, nd, raw, ipx, spx, spxII, unknownFutureValue. Supports $filter (eq) and $orderby.
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
     * Gets the user property value. Represents the user associated with the network traffic, providing details about the individual or account initiating the transaction.
     * @return User|null
    */
    public function getUser(): ?User {
        $val = $this->getBackingStore()->get('user');
        if (is_null($val) || $val instanceof User) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'user'");
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
     * Gets the vendorNames property value. The name of the vendors who detected the threat. Supports $filter (eq) and $orderby.
     * @return array<string>|null
    */
    public function getVendorNames(): ?array {
        $val = $this->getBackingStore()->get('vendorNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vendorNames'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('action', $this->getAction());
        $writer->writeStringValue('agentVersion', $this->getAgentVersion());
        $writer->writeObjectValue('applicationSnapshot', $this->getApplicationSnapshot());
        $writer->writeStringValue('connectionId', $this->getConnectionId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('destinationFQDN', $this->getDestinationFQDN());
        $writer->writeStringValue('destinationIp', $this->getDestinationIp());
        $writer->writeIntegerValue('destinationPort', $this->getDestinationPort());
        $writer->writeStringValue('destinationUrl', $this->getDestinationUrl());
        $writer->writeObjectValue('destinationWebCategory', $this->getDestinationWebCategory());
        $writer->writeObjectValue('device', $this->getDevice());
        $writer->writeEnumValue('deviceCategory', $this->getDeviceCategory());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceOperatingSystem', $this->getDeviceOperatingSystem());
        $writer->writeStringValue('deviceOperatingSystemVersion', $this->getDeviceOperatingSystemVersion());
        $writer->writeStringValue('filteringProfileId', $this->getFilteringProfileId());
        $writer->writeStringValue('filteringProfileName', $this->getFilteringProfileName());
        $writer->writeObjectValue('headers', $this->getHeaders());
        $writer->writeEnumValue('httpMethod', $this->getHttpMethod());
        $writer->writeStringValue('initiatingProcessName', $this->getInitiatingProcessName());
        $writer->writeEnumValue('networkProtocol', $this->getNetworkProtocol());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('operationStatus', $this->getOperationStatus());
        $writer->writeStringValue('policyId', $this->getPolicyId());
        $writer->writeStringValue('policyName', $this->getPolicyName());
        $writer->writeStringValue('policyRuleId', $this->getPolicyRuleId());
        $writer->writeStringValue('policyRuleName', $this->getPolicyRuleName());
        $writer->writeStringValue('popProcessingRegion', $this->getPopProcessingRegion());
        $writer->writeObjectValue('privateAccessDetails', $this->getPrivateAccessDetails());
        $writer->writeIntegerValue('receivedBytes', $this->getReceivedBytes());
        $writer->writeStringValue('remoteNetworkId', $this->getRemoteNetworkId());
        $writer->writeStringValue('resourceTenantId', $this->getResourceTenantId());
        $writer->writeIntegerValue('responseCode', $this->getResponseCode());
        $writer->writeIntegerValue('sentBytes', $this->getSentBytes());
        $writer->writeStringValue('sessionId', $this->getSessionId());
        $writer->writeStringValue('sourceIp', $this->getSourceIp());
        $writer->writeIntegerValue('sourcePort', $this->getSourcePort());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeStringValue('threatType', $this->getThreatType());
        $writer->writeEnumValue('trafficType', $this->getTrafficType());
        $writer->writeStringValue('transactionId', $this->getTransactionId());
        $writer->writeEnumValue('transportProtocol', $this->getTransportProtocol());
        $writer->writeObjectValue('user', $this->getUser());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeCollectionOfPrimitiveValues('vendorNames', $this->getVendorNames());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the action property value. Indicates the action taken based on filtering policies. The possible values are: block, allow, unknownFutureValue, bypass, alert. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: bypass , alert.
     * @param FilteringPolicyAction|null $value Value to set for the action property.
    */
    public function setAction(?FilteringPolicyAction $value): void {
        $this->getBackingStore()->set('action', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the agentVersion property value. Represents the version of the Global Secure Access (GSA) client agent software. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the agentVersion property.
    */
    public function setAgentVersion(?string $value): void {
        $this->getBackingStore()->set('agentVersion', $value);
    }

    /**
     * Sets the applicationSnapshot property value. Destination Application ID accessed in Azure AD during the transaction. Supports $filter (eq) and $orderby.
     * @param ApplicationSnapshot|null $value Value to set for the applicationSnapshot property.
    */
    public function setApplicationSnapshot(?ApplicationSnapshot $value): void {
        $this->getBackingStore()->set('applicationSnapshot', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
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
     * Sets the description property value. Informational error message. For example: 'Threat intelligence detected a transaction and triggered an alert.' or 'The Global Secure Access (GSA) policy blocked the destination and triggered an alert.' Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
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
     * Sets the destinationUrl property value. Represents the URL of the destination in a network communication. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the destinationUrl property.
    */
    public function setDestinationUrl(?string $value): void {
        $this->getBackingStore()->set('destinationUrl', $value);
    }

    /**
     * Sets the destinationWebCategory property value. The destination FQDN's Web Category (e.g., Gambling). Supports $filter (eq) and $orderby.
     * @param WebCategory|null $value Value to set for the destinationWebCategory property.
    */
    public function setDestinationWebCategory(?WebCategory $value): void {
        $this->getBackingStore()->set('destinationWebCategory', $value);
    }

    /**
     * Sets the device property value. Represents the device associated with the network traffic, providing details about the hardware or virtual machine involved in the transaction.
     * @param Device|null $value Value to set for the device property.
    */
    public function setDevice(?Device $value): void {
        $this->getBackingStore()->set('device', $value);
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
     * Sets the filteringProfileId property value. The ID of the Filtering Profile associated with the action performed on traffic. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the filteringProfileId property.
    */
    public function setFilteringProfileId(?string $value): void {
        $this->getBackingStore()->set('filteringProfileId', $value);
    }

    /**
     * Sets the filteringProfileName property value. The name of the Filtering Profile associated with the action performed on traffic. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the filteringProfileName property.
    */
    public function setFilteringProfileName(?string $value): void {
        $this->getBackingStore()->set('filteringProfileName', $value);
    }

    /**
     * Sets the headers property value. Represents the headers included in a network request or response. Supports $filter (eq) and $orderby.
     * @param Headers|null $value Value to set for the headers property.
    */
    public function setHeaders(?Headers $value): void {
        $this->getBackingStore()->set('headers', $value);
    }

    /**
     * Sets the httpMethod property value. The HTTP method inspected in the intercepted HTTP traffic. Supports $filter (eq) and $orderby.
     * @param HttpMethod|null $value Value to set for the httpMethod property.
    */
    public function setHttpMethod(?HttpMethod $value): void {
        $this->getBackingStore()->set('httpMethod', $value);
    }

    /**
     * Sets the initiatingProcessName property value. The process initiating the traffic transaction. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the initiatingProcessName property.
    */
    public function setInitiatingProcessName(?string $value): void {
        $this->getBackingStore()->set('initiatingProcessName', $value);
    }

    /**
     * Sets the networkProtocol property value. Represents the networking protocol used for communication. The possible values are: ip, icmp, igmp, ggp, ipv4, tcp, pup, udp, idp, ipv6, ipv6RoutingHeader, ipv6FragmentHeader, ipSecEncapsulatingSecurityPayload, ipSecAuthenticationHeader, icmpV6, ipv6NoNextHeader, ipv6DestinationOptions, nd, raw, ipx, spx, spxII, unknownFutureValue. Supports $filter (eq) and $orderby.
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
     * Sets the operationStatus property value. Indication if traffic was successfully processed. The possible values are: success, failure, unknownFutureValue. Supports $filter (eq) and $orderby.
     * @param NetworkTrafficOperationStatus|null $value Value to set for the operationStatus property.
    */
    public function setOperationStatus(?NetworkTrafficOperationStatus $value): void {
        $this->getBackingStore()->set('operationStatus', $value);
    }

    /**
     * Sets the policyId property value. Represents a unique identifier assigned to a policy. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value): void {
        $this->getBackingStore()->set('policyId', $value);
    }

    /**
     * Sets the policyName property value. The name of the filtering policy associated with the action performed on traffic. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the policyName property.
    */
    public function setPolicyName(?string $value): void {
        $this->getBackingStore()->set('policyName', $value);
    }

    /**
     * Sets the policyRuleId property value. Represents a unique identifier assigned to a policy rule. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the policyRuleId property.
    */
    public function setPolicyRuleId(?string $value): void {
        $this->getBackingStore()->set('policyRuleId', $value);
    }

    /**
     * Sets the policyRuleName property value. The name of the rule associated with the action performed on traffic. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the policyRuleName property.
    */
    public function setPolicyRuleName(?string $value): void {
        $this->getBackingStore()->set('policyRuleName', $value);
    }

    /**
     * Sets the popProcessingRegion property value. The Point-of-Presence processing region of the traffic. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the popProcessingRegion property.
    */
    public function setPopProcessingRegion(?string $value): void {
        $this->getBackingStore()->set('popProcessingRegion', $value);
    }

    /**
     * Sets the privateAccessDetails property value. Details about private access traffic. Supports $filter (eq) and $orderby.
     * @param PrivateAccessDetails|null $value Value to set for the privateAccessDetails property.
    */
    public function setPrivateAccessDetails(?PrivateAccessDetails $value): void {
        $this->getBackingStore()->set('privateAccessDetails', $value);
    }

    /**
     * Sets the receivedBytes property value. Represents the total number of bytes received in a network communication or data transfer. Supports $filter (eq) and $orderby.
     * @param int|null $value Value to set for the receivedBytes property.
    */
    public function setReceivedBytes(?int $value): void {
        $this->getBackingStore()->set('receivedBytes', $value);
    }

    /**
     * Sets the remoteNetworkId property value. The ID from which traffic was sent or received, providing visibility into the origin of the traffic. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the remoteNetworkId property.
    */
    public function setRemoteNetworkId(?string $value): void {
        $this->getBackingStore()->set('remoteNetworkId', $value);
    }

    /**
     * Sets the resourceTenantId property value. Tenant ID that owns the resource. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the resourceTenantId property.
    */
    public function setResourceTenantId(?string $value): void {
        $this->getBackingStore()->set('resourceTenantId', $value);
    }

    /**
     * Sets the responseCode property value. The HTTP response code inspected in the intercepted HTTP traffic. Supports $filter (eq) and $orderby.
     * @param int|null $value Value to set for the responseCode property.
    */
    public function setResponseCode(?int $value): void {
        $this->getBackingStore()->set('responseCode', $value);
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
     * Sets the threatType property value. The type of threat detected in the traffic. Supports $filter (eq) and $orderby.
     * @param string|null $value Value to set for the threatType property.
    */
    public function setThreatType(?string $value): void {
        $this->getBackingStore()->set('threatType', $value);
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
     * Sets the transportProtocol property value. Represents the transport protocol used for communication. The possible values are: ip, icmp, igmp, ggp, ipv4, tcp, pup, udp, idp, ipv6, ipv6RoutingHeader, ipv6FragmentHeader, ipSecEncapsulatingSecurityPayload, ipSecAuthenticationHeader, icmpV6, ipv6NoNextHeader, ipv6DestinationOptions, nd, raw, ipx, spx, spxII, unknownFutureValue. Supports $filter (eq) and $orderby.
     * @param NetworkingProtocol|null $value Value to set for the transportProtocol property.
    */
    public function setTransportProtocol(?NetworkingProtocol $value): void {
        $this->getBackingStore()->set('transportProtocol', $value);
    }

    /**
     * Sets the user property value. Represents the user associated with the network traffic, providing details about the individual or account initiating the transaction.
     * @param User|null $value Value to set for the user property.
    */
    public function setUser(?User $value): void {
        $this->getBackingStore()->set('user', $value);
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

    /**
     * Sets the vendorNames property value. The name of the vendors who detected the threat. Supports $filter (eq) and $orderby.
     * @param array<string>|null $value Value to set for the vendorNames property.
    */
    public function setVendorNames(?array $value): void {
        $this->getBackingStore()->set('vendorNames', $value);
    }

}
