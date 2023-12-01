<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RemoteNetworkHealthEvent extends Entity implements Parsable 
{
    /**
     * Instantiates a new remoteNetworkHealthEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemoteNetworkHealthEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RemoteNetworkHealthEvent {
        return new RemoteNetworkHealthEvent();
    }

    /**
     * Gets the bgpRoutesAdvertisedCount property value. The number of BGP routes advertised through tunnel.
     * @return int|null
    */
    public function getBgpRoutesAdvertisedCount(): ?int {
        $val = $this->getBackingStore()->get('bgpRoutesAdvertisedCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bgpRoutesAdvertisedCount'");
    }

    /**
     * Gets the createdDateTime property value. The time of the original event generation in UTC. Supports $filter (ge, le) and $orderby.
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
     * Gets the description property value. The description of the event.
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
     * Gets the destinationIp property value. The IP address of the destination.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bgpRoutesAdvertisedCount' => fn(ParseNode $n) => $o->setBgpRoutesAdvertisedCount($n->getIntegerValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'destinationIp' => fn(ParseNode $n) => $o->setDestinationIp($n->getStringValue()),
            'receivedBytes' => fn(ParseNode $n) => $o->setReceivedBytes($n->getIntegerValue()),
            'remoteNetworkId' => fn(ParseNode $n) => $o->setRemoteNetworkId($n->getStringValue()),
            'sentBytes' => fn(ParseNode $n) => $o->setSentBytes($n->getIntegerValue()),
            'sourceIp' => fn(ParseNode $n) => $o->setSourceIp($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(RemoteNetworkStatus::class)),
        ]);
    }

    /**
     * Gets the receivedBytes property value. The number of bytes sent from the destination to the source.
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
     * Gets the remoteNetworkId property value. A unique identifier for each remoteNetwork site. Supports $filter (eq).
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
     * Gets the sentBytes property value. The number of bytes sent from the source to the destination for the connection or session.
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
     * Gets the sourceIp property value. The public IP address.
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
     * Gets the status property value. The status property
     * @return RemoteNetworkStatus|null
    */
    public function getStatus(): ?RemoteNetworkStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof RemoteNetworkStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('bgpRoutesAdvertisedCount', $this->getBgpRoutesAdvertisedCount());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('destinationIp', $this->getDestinationIp());
        $writer->writeIntegerValue('receivedBytes', $this->getReceivedBytes());
        $writer->writeStringValue('remoteNetworkId', $this->getRemoteNetworkId());
        $writer->writeIntegerValue('sentBytes', $this->getSentBytes());
        $writer->writeStringValue('sourceIp', $this->getSourceIp());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the bgpRoutesAdvertisedCount property value. The number of BGP routes advertised through tunnel.
     * @param int|null $value Value to set for the bgpRoutesAdvertisedCount property.
    */
    public function setBgpRoutesAdvertisedCount(?int $value): void {
        $this->getBackingStore()->set('bgpRoutesAdvertisedCount', $value);
    }

    /**
     * Sets the createdDateTime property value. The time of the original event generation in UTC. Supports $filter (ge, le) and $orderby.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description of the event.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the destinationIp property value. The IP address of the destination.
     * @param string|null $value Value to set for the destinationIp property.
    */
    public function setDestinationIp(?string $value): void {
        $this->getBackingStore()->set('destinationIp', $value);
    }

    /**
     * Sets the receivedBytes property value. The number of bytes sent from the destination to the source.
     * @param int|null $value Value to set for the receivedBytes property.
    */
    public function setReceivedBytes(?int $value): void {
        $this->getBackingStore()->set('receivedBytes', $value);
    }

    /**
     * Sets the remoteNetworkId property value. A unique identifier for each remoteNetwork site. Supports $filter (eq).
     * @param string|null $value Value to set for the remoteNetworkId property.
    */
    public function setRemoteNetworkId(?string $value): void {
        $this->getBackingStore()->set('remoteNetworkId', $value);
    }

    /**
     * Sets the sentBytes property value. The number of bytes sent from the source to the destination for the connection or session.
     * @param int|null $value Value to set for the sentBytes property.
    */
    public function setSentBytes(?int $value): void {
        $this->getBackingStore()->set('sentBytes', $value);
    }

    /**
     * Sets the sourceIp property value. The public IP address.
     * @param string|null $value Value to set for the sourceIp property.
    */
    public function setSourceIp(?string $value): void {
        $this->getBackingStore()->set('sourceIp', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param RemoteNetworkStatus|null $value Value to set for the status property.
    */
    public function setStatus(?RemoteNetworkStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
