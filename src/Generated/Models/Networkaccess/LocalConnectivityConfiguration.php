<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class LocalConnectivityConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new LocalConnectivityConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LocalConnectivityConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LocalConnectivityConfiguration {
        return new LocalConnectivityConfiguration();
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
     * Gets the asn property value. Specifies ASN of one end of IPSec tunnel (local or peer).
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
     * Gets the bgpAddress property value. Specifies BGP IPv4 address of one end of IPSec tunnel (local or peer).
     * @return string|null
    */
    public function getBgpAddress(): ?string {
        $val = $this->getBackingStore()->get('bgpAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bgpAddress'");
    }

    /**
     * Gets the endpoint property value. Specifies public IPv4 address of one end of IPSec tunnel (local or peer).
     * @return string|null
    */
    public function getEndpoint(): ?string {
        $val = $this->getBackingStore()->get('endpoint');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endpoint'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'asn' => fn(ParseNode $n) => $o->setAsn($n->getIntegerValue()),
            'bgpAddress' => fn(ParseNode $n) => $o->setBgpAddress($n->getStringValue()),
            'endpoint' => fn(ParseNode $n) => $o->setEndpoint($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'region' => fn(ParseNode $n) => $o->setRegion($n->getEnumValue(Region::class)),
        ];
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
     * Gets the region property value. The region property
     * @return Region|null
    */
    public function getRegion(): ?Region {
        $val = $this->getBackingStore()->get('region');
        if (is_null($val) || $val instanceof Region) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'region'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('asn', $this->getAsn());
        $writer->writeStringValue('bgpAddress', $this->getBgpAddress());
        $writer->writeStringValue('endpoint', $this->getEndpoint());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('region', $this->getRegion());
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
     * Sets the asn property value. Specifies ASN of one end of IPSec tunnel (local or peer).
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
     * Sets the bgpAddress property value. Specifies BGP IPv4 address of one end of IPSec tunnel (local or peer).
     * @param string|null $value Value to set for the bgpAddress property.
    */
    public function setBgpAddress(?string $value): void {
        $this->getBackingStore()->set('bgpAddress', $value);
    }

    /**
     * Sets the endpoint property value. Specifies public IPv4 address of one end of IPSec tunnel (local or peer).
     * @param string|null $value Value to set for the endpoint property.
    */
    public function setEndpoint(?string $value): void {
        $this->getBackingStore()->set('endpoint', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the region property value. The region property
     * @param Region|null $value Value to set for the region property.
    */
    public function setRegion(?Region $value): void {
        $this->getBackingStore()->set('region', $value);
    }

}
