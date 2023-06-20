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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the agentVersion property value. The agentVersion property
     * @return string|null
    */
    public function getAgentVersion(): ?string {
        return $this->getBackingStore()->get('agentVersion');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the connectionId property value. The connectionId property
     * @return string|null
    */
    public function getConnectionId(): ?string {
        return $this->getBackingStore()->get('connectionId');
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the destinationFQDN property value. The destinationFQDN property
     * @return string|null
    */
    public function getDestinationFQDN(): ?string {
        return $this->getBackingStore()->get('destinationFQDN');
    }

    /**
     * Gets the destinationIp property value. The destinationIp property
     * @return string|null
    */
    public function getDestinationIp(): ?string {
        return $this->getBackingStore()->get('destinationIp');
    }

    /**
     * Gets the destinationPort property value. The destinationPort property
     * @return int|null
    */
    public function getDestinationPort(): ?int {
        return $this->getBackingStore()->get('destinationPort');
    }

    /**
     * Gets the deviceCategory property value. The deviceCategory property
     * @return DeviceCategory|null
    */
    public function getDeviceCategory(): ?DeviceCategory {
        return $this->getBackingStore()->get('deviceCategory');
    }

    /**
     * Gets the deviceId property value. The deviceId property
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->getBackingStore()->get('deviceId');
    }

    /**
     * Gets the deviceOperatingSystem property value. The deviceOperatingSystem property
     * @return string|null
    */
    public function getDeviceOperatingSystem(): ?string {
        return $this->getBackingStore()->get('deviceOperatingSystem');
    }

    /**
     * Gets the deviceOperatingSystemVersion property value. The deviceOperatingSystemVersion property
     * @return string|null
    */
    public function getDeviceOperatingSystemVersion(): ?string {
        return $this->getBackingStore()->get('deviceOperatingSystemVersion');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
     * Gets the headers property value. The headers property
     * @return Headers|null
    */
    public function getHeaders(): ?Headers {
        return $this->getBackingStore()->get('headers');
    }

    /**
     * Gets the networkProtocol property value. The networkProtocol property
     * @return NetworkingProtocol|null
    */
    public function getNetworkProtocol(): ?NetworkingProtocol {
        return $this->getBackingStore()->get('networkProtocol');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the policyId property value. The policyId property
     * @return string|null
    */
    public function getPolicyId(): ?string {
        return $this->getBackingStore()->get('policyId');
    }

    /**
     * Gets the policyRuleId property value. The policyRuleId property
     * @return string|null
    */
    public function getPolicyRuleId(): ?string {
        return $this->getBackingStore()->get('policyRuleId');
    }

    /**
     * Gets the receivedBytes property value. The receivedBytes property
     * @return int|null
    */
    public function getReceivedBytes(): ?int {
        return $this->getBackingStore()->get('receivedBytes');
    }

    /**
     * Gets the sentBytes property value. The sentBytes property
     * @return int|null
    */
    public function getSentBytes(): ?int {
        return $this->getBackingStore()->get('sentBytes');
    }

    /**
     * Gets the sessionId property value. The sessionId property
     * @return string|null
    */
    public function getSessionId(): ?string {
        return $this->getBackingStore()->get('sessionId');
    }

    /**
     * Gets the sourceIp property value. The sourceIp property
     * @return string|null
    */
    public function getSourceIp(): ?string {
        return $this->getBackingStore()->get('sourceIp');
    }

    /**
     * Gets the sourcePort property value. The sourcePort property
     * @return int|null
    */
    public function getSourcePort(): ?int {
        return $this->getBackingStore()->get('sourcePort');
    }

    /**
     * Gets the tenantId property value. The tenantId property
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->getBackingStore()->get('tenantId');
    }

    /**
     * Gets the trafficType property value. The trafficType property
     * @return TrafficType|null
    */
    public function getTrafficType(): ?TrafficType {
        return $this->getBackingStore()->get('trafficType');
    }

    /**
     * Gets the transactionId property value. The transactionId property
     * @return string|null
    */
    public function getTransactionId(): ?string {
        return $this->getBackingStore()->get('transactionId');
    }

    /**
     * Gets the transportProtocol property value. The transportProtocol property
     * @return NetworkingProtocol|null
    */
    public function getTransportProtocol(): ?NetworkingProtocol {
        return $this->getBackingStore()->get('transportProtocol');
    }

    /**
     * Gets the userId property value. The userId property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->getBackingStore()->get('userId');
    }

    /**
     * Gets the userPrincipalName property value. The userPrincipalName property
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
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
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the agentVersion property value. The agentVersion property
     * @param string|null $value Value to set for the agentVersion property.
    */
    public function setAgentVersion(?string $value): void {
        $this->getBackingStore()->set('agentVersion', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the connectionId property value. The connectionId property
     * @param string|null $value Value to set for the connectionId property.
    */
    public function setConnectionId(?string $value): void {
        $this->getBackingStore()->set('connectionId', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the destinationFQDN property value. The destinationFQDN property
     * @param string|null $value Value to set for the destinationFQDN property.
    */
    public function setDestinationFQDN(?string $value): void {
        $this->getBackingStore()->set('destinationFQDN', $value);
    }

    /**
     * Sets the destinationIp property value. The destinationIp property
     * @param string|null $value Value to set for the destinationIp property.
    */
    public function setDestinationIp(?string $value): void {
        $this->getBackingStore()->set('destinationIp', $value);
    }

    /**
     * Sets the destinationPort property value. The destinationPort property
     * @param int|null $value Value to set for the destinationPort property.
    */
    public function setDestinationPort(?int $value): void {
        $this->getBackingStore()->set('destinationPort', $value);
    }

    /**
     * Sets the deviceCategory property value. The deviceCategory property
     * @param DeviceCategory|null $value Value to set for the deviceCategory property.
    */
    public function setDeviceCategory(?DeviceCategory $value): void {
        $this->getBackingStore()->set('deviceCategory', $value);
    }

    /**
     * Sets the deviceId property value. The deviceId property
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceOperatingSystem property value. The deviceOperatingSystem property
     * @param string|null $value Value to set for the deviceOperatingSystem property.
    */
    public function setDeviceOperatingSystem(?string $value): void {
        $this->getBackingStore()->set('deviceOperatingSystem', $value);
    }

    /**
     * Sets the deviceOperatingSystemVersion property value. The deviceOperatingSystemVersion property
     * @param string|null $value Value to set for the deviceOperatingSystemVersion property.
    */
    public function setDeviceOperatingSystemVersion(?string $value): void {
        $this->getBackingStore()->set('deviceOperatingSystemVersion', $value);
    }

    /**
     * Sets the headers property value. The headers property
     * @param Headers|null $value Value to set for the headers property.
    */
    public function setHeaders(?Headers $value): void {
        $this->getBackingStore()->set('headers', $value);
    }

    /**
     * Sets the networkProtocol property value. The networkProtocol property
     * @param NetworkingProtocol|null $value Value to set for the networkProtocol property.
    */
    public function setNetworkProtocol(?NetworkingProtocol $value): void {
        $this->getBackingStore()->set('networkProtocol', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the policyId property value. The policyId property
     * @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value): void {
        $this->getBackingStore()->set('policyId', $value);
    }

    /**
     * Sets the policyRuleId property value. The policyRuleId property
     * @param string|null $value Value to set for the policyRuleId property.
    */
    public function setPolicyRuleId(?string $value): void {
        $this->getBackingStore()->set('policyRuleId', $value);
    }

    /**
     * Sets the receivedBytes property value. The receivedBytes property
     * @param int|null $value Value to set for the receivedBytes property.
    */
    public function setReceivedBytes(?int $value): void {
        $this->getBackingStore()->set('receivedBytes', $value);
    }

    /**
     * Sets the sentBytes property value. The sentBytes property
     * @param int|null $value Value to set for the sentBytes property.
    */
    public function setSentBytes(?int $value): void {
        $this->getBackingStore()->set('sentBytes', $value);
    }

    /**
     * Sets the sessionId property value. The sessionId property
     * @param string|null $value Value to set for the sessionId property.
    */
    public function setSessionId(?string $value): void {
        $this->getBackingStore()->set('sessionId', $value);
    }

    /**
     * Sets the sourceIp property value. The sourceIp property
     * @param string|null $value Value to set for the sourceIp property.
    */
    public function setSourceIp(?string $value): void {
        $this->getBackingStore()->set('sourceIp', $value);
    }

    /**
     * Sets the sourcePort property value. The sourcePort property
     * @param int|null $value Value to set for the sourcePort property.
    */
    public function setSourcePort(?int $value): void {
        $this->getBackingStore()->set('sourcePort', $value);
    }

    /**
     * Sets the tenantId property value. The tenantId property
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
     * Sets the transactionId property value. The transactionId property
     * @param string|null $value Value to set for the transactionId property.
    */
    public function setTransactionId(?string $value): void {
        $this->getBackingStore()->set('transactionId', $value);
    }

    /**
     * Sets the transportProtocol property value. The transportProtocol property
     * @param NetworkingProtocol|null $value Value to set for the transportProtocol property.
    */
    public function setTransportProtocol(?NetworkingProtocol $value): void {
        $this->getBackingStore()->set('transportProtocol', $value);
    }

    /**
     * Sets the userId property value. The userId property
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userPrincipalName property value. The userPrincipalName property
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
