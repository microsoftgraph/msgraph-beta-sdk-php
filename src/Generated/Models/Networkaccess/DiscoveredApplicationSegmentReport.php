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

class DiscoveredApplicationSegmentReport implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DiscoveredApplicationSegmentReport and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DiscoveredApplicationSegmentReport
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DiscoveredApplicationSegmentReport {
        return new DiscoveredApplicationSegmentReport();
    }

    /**
     * Gets the accessType property value. The accessType property
     * @return AccessType|null
    */
    public function getAccessType(): ?AccessType {
        $val = $this->getBackingStore()->get('accessType');
        if (is_null($val) || $val instanceof AccessType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessType'");
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
     * Gets the deviceCount property value. The deviceCount property
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
     * Gets the discoveredApplicationSegmentId property value. The discoveredApplicationSegmentId property
     * @return string|null
    */
    public function getDiscoveredApplicationSegmentId(): ?string {
        $val = $this->getBackingStore()->get('discoveredApplicationSegmentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'discoveredApplicationSegmentId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessType' => fn(ParseNode $n) => $o->setAccessType($n->getEnumValue(AccessType::class)),
            'deviceCount' => fn(ParseNode $n) => $o->setDeviceCount($n->getIntegerValue()),
            'discoveredApplicationSegmentId' => fn(ParseNode $n) => $o->setDiscoveredApplicationSegmentId($n->getStringValue()),
            'firstAccessDateTime' => fn(ParseNode $n) => $o->setFirstAccessDateTime($n->getDateTimeValue()),
            'fqdn' => fn(ParseNode $n) => $o->setFqdn($n->getStringValue()),
            'ip' => fn(ParseNode $n) => $o->setIp($n->getStringValue()),
            'lastAccessDateTime' => fn(ParseNode $n) => $o->setLastAccessDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'port' => fn(ParseNode $n) => $o->setPort($n->getIntegerValue()),
            'totalBytesReceived' => fn(ParseNode $n) => $o->setTotalBytesReceived($n->getIntegerValue()),
            'totalBytesSent' => fn(ParseNode $n) => $o->setTotalBytesSent($n->getIntegerValue()),
            'transactionCount' => fn(ParseNode $n) => $o->setTransactionCount($n->getIntegerValue()),
            'transportProtocol' => fn(ParseNode $n) => $o->setTransportProtocol($n->getEnumValue(NetworkingProtocol::class)),
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
     * Gets the fqdn property value. The fqdn property
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
     * Gets the ip property value. The ip property
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
     * Gets the lastAccessDateTime property value. The lastAccessDateTime property
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
     * Gets the port property value. The port property
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
     * Gets the transactionCount property value. The transactionCount property
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
     * Gets the transportProtocol property value. The transportProtocol property
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
     * Gets the userCount property value. The userCount property
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
        $writer->writeEnumValue('accessType', $this->getAccessType());
        $writer->writeIntegerValue('deviceCount', $this->getDeviceCount());
        $writer->writeStringValue('discoveredApplicationSegmentId', $this->getDiscoveredApplicationSegmentId());
        $writer->writeDateTimeValue('firstAccessDateTime', $this->getFirstAccessDateTime());
        $writer->writeStringValue('fqdn', $this->getFqdn());
        $writer->writeStringValue('ip', $this->getIp());
        $writer->writeDateTimeValue('lastAccessDateTime', $this->getLastAccessDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('port', $this->getPort());
        $writer->writeIntegerValue('totalBytesReceived', $this->getTotalBytesReceived());
        $writer->writeIntegerValue('totalBytesSent', $this->getTotalBytesSent());
        $writer->writeIntegerValue('transactionCount', $this->getTransactionCount());
        $writer->writeEnumValue('transportProtocol', $this->getTransportProtocol());
        $writer->writeIntegerValue('userCount', $this->getUserCount());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accessType property value. The accessType property
     * @param AccessType|null $value Value to set for the accessType property.
    */
    public function setAccessType(?AccessType $value): void {
        $this->getBackingStore()->set('accessType', $value);
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
     * Sets the deviceCount property value. The deviceCount property
     * @param int|null $value Value to set for the deviceCount property.
    */
    public function setDeviceCount(?int $value): void {
        $this->getBackingStore()->set('deviceCount', $value);
    }

    /**
     * Sets the discoveredApplicationSegmentId property value. The discoveredApplicationSegmentId property
     * @param string|null $value Value to set for the discoveredApplicationSegmentId property.
    */
    public function setDiscoveredApplicationSegmentId(?string $value): void {
        $this->getBackingStore()->set('discoveredApplicationSegmentId', $value);
    }

    /**
     * Sets the firstAccessDateTime property value. The firstAccessDateTime property
     * @param DateTime|null $value Value to set for the firstAccessDateTime property.
    */
    public function setFirstAccessDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstAccessDateTime', $value);
    }

    /**
     * Sets the fqdn property value. The fqdn property
     * @param string|null $value Value to set for the fqdn property.
    */
    public function setFqdn(?string $value): void {
        $this->getBackingStore()->set('fqdn', $value);
    }

    /**
     * Sets the ip property value. The ip property
     * @param string|null $value Value to set for the ip property.
    */
    public function setIp(?string $value): void {
        $this->getBackingStore()->set('ip', $value);
    }

    /**
     * Sets the lastAccessDateTime property value. The lastAccessDateTime property
     * @param DateTime|null $value Value to set for the lastAccessDateTime property.
    */
    public function setLastAccessDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastAccessDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the port property value. The port property
     * @param int|null $value Value to set for the port property.
    */
    public function setPort(?int $value): void {
        $this->getBackingStore()->set('port', $value);
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
     * Sets the transactionCount property value. The transactionCount property
     * @param int|null $value Value to set for the transactionCount property.
    */
    public function setTransactionCount(?int $value): void {
        $this->getBackingStore()->set('transactionCount', $value);
    }

    /**
     * Sets the transportProtocol property value. The transportProtocol property
     * @param NetworkingProtocol|null $value Value to set for the transportProtocol property.
    */
    public function setTransportProtocol(?NetworkingProtocol $value): void {
        $this->getBackingStore()->set('transportProtocol', $value);
    }

    /**
     * Sets the userCount property value. The userCount property
     * @param int|null $value Value to set for the userCount property.
    */
    public function setUserCount(?int $value): void {
        $this->getBackingStore()->set('userCount', $value);
    }

}
