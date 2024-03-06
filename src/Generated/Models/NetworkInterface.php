<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class NetworkInterface implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new NetworkInterface and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NetworkInterface
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NetworkInterface {
        return new NetworkInterface();
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
     * Gets the description property value. Description of the NIC (for example, Ethernet adapter, Wireless LAN adapter Local Area Connection, and so on).
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'ipV4Address' => fn(ParseNode $n) => $o->setIpV4Address($n->getStringValue()),
            'ipV6Address' => fn(ParseNode $n) => $o->setIpV6Address($n->getStringValue()),
            'localIpV6Address' => fn(ParseNode $n) => $o->setLocalIpV6Address($n->getStringValue()),
            'macAddress' => fn(ParseNode $n) => $o->setMacAddress($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the ipV4Address property value. Last IPv4 address associated with this NIC.
     * @return string|null
    */
    public function getIpV4Address(): ?string {
        $val = $this->getBackingStore()->get('ipV4Address');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipV4Address'");
    }

    /**
     * Gets the ipV6Address property value. Last Public (also known as global) IPv6 address associated with this NIC.
     * @return string|null
    */
    public function getIpV6Address(): ?string {
        $val = $this->getBackingStore()->get('ipV6Address');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipV6Address'");
    }

    /**
     * Gets the localIpV6Address property value. Last local (link-local or site-local) IPv6 address associated with this NIC.
     * @return string|null
    */
    public function getLocalIpV6Address(): ?string {
        $val = $this->getBackingStore()->get('localIpV6Address');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localIpV6Address'");
    }

    /**
     * Gets the macAddress property value. MAC address of the NIC on this host.
     * @return string|null
    */
    public function getMacAddress(): ?string {
        $val = $this->getBackingStore()->get('macAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'macAddress'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('ipV4Address', $this->getIpV4Address());
        $writer->writeStringValue('ipV6Address', $this->getIpV6Address());
        $writer->writeStringValue('localIpV6Address', $this->getLocalIpV6Address());
        $writer->writeStringValue('macAddress', $this->getMacAddress());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the description property value. Description of the NIC (for example, Ethernet adapter, Wireless LAN adapter Local Area Connection, and so on).
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the ipV4Address property value. Last IPv4 address associated with this NIC.
     * @param string|null $value Value to set for the ipV4Address property.
    */
    public function setIpV4Address(?string $value): void {
        $this->getBackingStore()->set('ipV4Address', $value);
    }

    /**
     * Sets the ipV6Address property value. Last Public (also known as global) IPv6 address associated with this NIC.
     * @param string|null $value Value to set for the ipV6Address property.
    */
    public function setIpV6Address(?string $value): void {
        $this->getBackingStore()->set('ipV6Address', $value);
    }

    /**
     * Sets the localIpV6Address property value. Last local (link-local or site-local) IPv6 address associated with this NIC.
     * @param string|null $value Value to set for the localIpV6Address property.
    */
    public function setLocalIpV6Address(?string $value): void {
        $this->getBackingStore()->set('localIpV6Address', $value);
    }

    /**
     * Sets the macAddress property value. MAC address of the NIC on this host.
     * @param string|null $value Value to set for the macAddress property.
    */
    public function setMacAddress(?string $value): void {
        $this->getBackingStore()->set('macAddress', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
