<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class BgpConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new BgpConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BgpConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BgpConfiguration {
        return new BgpConfiguration();
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
     * Gets the asn property value. Specifies the ASN of the BGP.
     * @return int|null
    */
    public function getAsn(): ?int {
        $val = $this->getBackingStore()->get('asn');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'asn'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'asn' => fn(ParseNode $n) => $o->setAsn($n->getIntegerValue()),
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getStringValue()),
            'localIpAddress' => fn(ParseNode $n) => $o->setLocalIpAddress($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'peerIpAddress' => fn(ParseNode $n) => $o->setPeerIpAddress($n->getStringValue()),
        ];
    }

    /**
     * Gets the ipAddress property value. The ipAddress property
     * @return string|null
    */
    public function getIpAddress(): ?string {
        $val = $this->getBackingStore()->get('ipAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipAddress'");
    }

    /**
     * Gets the localIpAddress property value. Specifies the BGP IP address of peer (Microsoft, in this case).
     * @return string|null
    */
    public function getLocalIpAddress(): ?string {
        $val = $this->getBackingStore()->get('localIpAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localIpAddress'");
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
     * Gets the peerIpAddress property value. Specifies the BGP IP address of customer's on-premise VPN router configuration.
     * @return string|null
    */
    public function getPeerIpAddress(): ?string {
        $val = $this->getBackingStore()->get('peerIpAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'peerIpAddress'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('asn', $this->getAsn());
        $writer->writeStringValue('ipAddress', $this->getIpAddress());
        $writer->writeStringValue('localIpAddress', $this->getLocalIpAddress());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('peerIpAddress', $this->getPeerIpAddress());
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
     * Sets the asn property value. Specifies the ASN of the BGP.
     * @param int|null $value Value to set for the asn property.
    */
    public function setAsn(?int $value): void {
        $this->getBackingStore()->set('asn', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the ipAddress property value. The ipAddress property
     * @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value): void {
        $this->getBackingStore()->set('ipAddress', $value);
    }

    /**
     * Sets the localIpAddress property value. Specifies the BGP IP address of peer (Microsoft, in this case).
     * @param string|null $value Value to set for the localIpAddress property.
    */
    public function setLocalIpAddress(?string $value): void {
        $this->getBackingStore()->set('localIpAddress', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the peerIpAddress property value. Specifies the BGP IP address of customer's on-premise VPN router configuration.
     * @param string|null $value Value to set for the peerIpAddress property.
    */
    public function setPeerIpAddress(?string $value): void {
        $this->getBackingStore()->set('peerIpAddress', $value);
    }

}
