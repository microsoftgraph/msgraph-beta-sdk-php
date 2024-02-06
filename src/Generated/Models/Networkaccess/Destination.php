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

class Destination implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new destination and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Destination
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Destination {
        return new Destination();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the deviceCount property value. The number of unique devices that were seen.
     * @return int|null
    */
    public function getDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('deviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceCount' => fn(ParseNode $n) => $o->setDeviceCount($n->getIntegerValue()),
            'firstAccessDateTime' => fn(ParseNode $n) => $o->setFirstAccessDateTime($n->getDateTimeValue()),
            'fqdn' => fn(ParseNode $n) => $o->setFqdn($n->getStringValue()),
            'ip' => fn(ParseNode $n) => $o->setIp($n->getStringValue()),
            'lastAccessDateTime' => fn(ParseNode $n) => $o->setLastAccessDateTime($n->getDateTimeValue()),
            'networkingProtocol' => fn(ParseNode $n) => $o->setNetworkingProtocol($n->getEnumValue(NetworkingProtocol::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'port' => fn(ParseNode $n) => $o->setPort($n->getIntegerValue()),
            'threatCount' => fn(ParseNode $n) => $o->setThreatCount($n->getIntegerValue()),
            'totalBytesReceived' => fn(ParseNode $n) => $o->setTotalBytesReceived($n->getIntegerValue()),
            'totalBytesSent' => fn(ParseNode $n) => $o->setTotalBytesSent($n->getIntegerValue()),
            'trafficType' => fn(ParseNode $n) => $o->setTrafficType($n->getEnumValue(TrafficType::class)),
            'transactionCount' => fn(ParseNode $n) => $o->setTransactionCount($n->getIntegerValue()),
            'userCount' => fn(ParseNode $n) => $o->setUserCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the firstAccessDateTime property value. The firstAccessDateTime property
     * @return DateTime|null
    */
    public function getFirstAccessDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('firstAccessDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firstAccessDateTime'");
    }

    /**
     * Gets the fqdn property value. The fully qualified domain name (FQDN) of the destination.
     * @return string|null
    */
    public function getFqdn(): ?string {
        $val = $this->getBackingStore()->get('fqdn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fqdn'");
    }

    /**
     * Gets the ip property value. The internet protocol (IP) used to access the destination.
     * @return string|null
    */
    public function getIp(): ?string {
        $val = $this->getBackingStore()->get('ip');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ip'");
    }

    /**
     * Gets the lastAccessDateTime property value. The most recent access DateTime.
     * @return DateTime|null
    */
    public function getLastAccessDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastAccessDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastAccessDateTime'");
    }

    /**
     * Gets the networkingProtocol property value. The networkingProtocol property
     * @return NetworkingProtocol|null
    */
    public function getNetworkingProtocol(): ?NetworkingProtocol {
        $val = $this->getBackingStore()->get('networkingProtocol');
        if (is_null($val) || $val instanceof NetworkingProtocol) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkingProtocol'");
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
     * Gets the port property value. The numeric identifier that is associated with a specific endpoint in a network.
     * @return int|null
    */
    public function getPort(): ?int {
        $val = $this->getBackingStore()->get('port');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'port'");
    }

    /**
     * Gets the threatCount property value. The threatCount property
     * @return int|null
    */
    public function getThreatCount(): ?int {
        $val = $this->getBackingStore()->get('threatCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'threatCount'");
    }

    /**
     * Gets the totalBytesReceived property value. The totalBytesReceived property
     * @return int|null
    */
    public function getTotalBytesReceived(): ?int {
        $val = $this->getBackingStore()->get('totalBytesReceived');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalBytesReceived'");
    }

    /**
     * Gets the totalBytesSent property value. The totalBytesSent property
     * @return int|null
    */
    public function getTotalBytesSent(): ?int {
        $val = $this->getBackingStore()->get('totalBytesSent');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalBytesSent'");
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
     * Gets the transactionCount property value. The number of transactions.
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
     * Gets the userCount property value. The number of unique Microsoft Entra ID users that were seen.
     * @return int|null
    */
    public function getUserCount(): ?int {
        $val = $this->getBackingStore()->get('userCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('deviceCount', $this->getDeviceCount());
        $writer->writeDateTimeValue('firstAccessDateTime', $this->getFirstAccessDateTime());
        $writer->writeStringValue('fqdn', $this->getFqdn());
        $writer->writeStringValue('ip', $this->getIp());
        $writer->writeDateTimeValue('lastAccessDateTime', $this->getLastAccessDateTime());
        $writer->writeEnumValue('networkingProtocol', $this->getNetworkingProtocol());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('port', $this->getPort());
        $writer->writeIntegerValue('threatCount', $this->getThreatCount());
        $writer->writeIntegerValue('totalBytesReceived', $this->getTotalBytesReceived());
        $writer->writeIntegerValue('totalBytesSent', $this->getTotalBytesSent());
        $writer->writeEnumValue('trafficType', $this->getTrafficType());
        $writer->writeIntegerValue('transactionCount', $this->getTransactionCount());
        $writer->writeIntegerValue('userCount', $this->getUserCount());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the deviceCount property value. The number of unique devices that were seen.
     * @param int|null $value Value to set for the deviceCount property.
    */
    public function setDeviceCount(?int $value): void {
        $this->getBackingStore()->set('deviceCount', $value);
    }

    /**
     * Sets the firstAccessDateTime property value. The firstAccessDateTime property
     * @param DateTime|null $value Value to set for the firstAccessDateTime property.
    */
    public function setFirstAccessDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstAccessDateTime', $value);
    }

    /**
     * Sets the fqdn property value. The fully qualified domain name (FQDN) of the destination.
     * @param string|null $value Value to set for the fqdn property.
    */
    public function setFqdn(?string $value): void {
        $this->getBackingStore()->set('fqdn', $value);
    }

    /**
     * Sets the ip property value. The internet protocol (IP) used to access the destination.
     * @param string|null $value Value to set for the ip property.
    */
    public function setIp(?string $value): void {
        $this->getBackingStore()->set('ip', $value);
    }

    /**
     * Sets the lastAccessDateTime property value. The most recent access DateTime.
     * @param DateTime|null $value Value to set for the lastAccessDateTime property.
    */
    public function setLastAccessDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastAccessDateTime', $value);
    }

    /**
     * Sets the networkingProtocol property value. The networkingProtocol property
     * @param NetworkingProtocol|null $value Value to set for the networkingProtocol property.
    */
    public function setNetworkingProtocol(?NetworkingProtocol $value): void {
        $this->getBackingStore()->set('networkingProtocol', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the port property value. The numeric identifier that is associated with a specific endpoint in a network.
     * @param int|null $value Value to set for the port property.
    */
    public function setPort(?int $value): void {
        $this->getBackingStore()->set('port', $value);
    }

    /**
     * Sets the threatCount property value. The threatCount property
     * @param int|null $value Value to set for the threatCount property.
    */
    public function setThreatCount(?int $value): void {
        $this->getBackingStore()->set('threatCount', $value);
    }

    /**
     * Sets the totalBytesReceived property value. The totalBytesReceived property
     * @param int|null $value Value to set for the totalBytesReceived property.
    */
    public function setTotalBytesReceived(?int $value): void {
        $this->getBackingStore()->set('totalBytesReceived', $value);
    }

    /**
     * Sets the totalBytesSent property value. The totalBytesSent property
     * @param int|null $value Value to set for the totalBytesSent property.
    */
    public function setTotalBytesSent(?int $value): void {
        $this->getBackingStore()->set('totalBytesSent', $value);
    }

    /**
     * Sets the trafficType property value. The trafficType property
     * @param TrafficType|null $value Value to set for the trafficType property.
    */
    public function setTrafficType(?TrafficType $value): void {
        $this->getBackingStore()->set('trafficType', $value);
    }

    /**
     * Sets the transactionCount property value. The number of transactions.
     * @param int|null $value Value to set for the transactionCount property.
    */
    public function setTransactionCount(?int $value): void {
        $this->getBackingStore()->set('transactionCount', $value);
    }

    /**
     * Sets the userCount property value. The number of unique Microsoft Entra ID users that were seen.
     * @param int|null $value Value to set for the userCount property.
    */
    public function setUserCount(?int $value): void {
        $this->getBackingStore()->set('userCount', $value);
    }

}
