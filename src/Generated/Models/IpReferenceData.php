<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class IpReferenceData implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new IpReferenceData and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IpReferenceData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IpReferenceData {
        return new IpReferenceData();
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
     * Gets the asn property value. The asn property
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
     * Gets the city property value. The city property
     * @return string|null
    */
    public function getCity(): ?string {
        $val = $this->getBackingStore()->get('city');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'city'");
    }

    /**
     * Gets the countryOrRegionCode property value. The countryOrRegionCode property
     * @return string|null
    */
    public function getCountryOrRegionCode(): ?string {
        $val = $this->getBackingStore()->get('countryOrRegionCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countryOrRegionCode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'asn' => fn(ParseNode $n) => $o->setAsn($n->getIntegerValue()),
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'countryOrRegionCode' => fn(ParseNode $n) => $o->setCountryOrRegionCode($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'organization' => fn(ParseNode $n) => $o->setOrganization($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
            'vendor' => fn(ParseNode $n) => $o->setVendor($n->getStringValue()),
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
     * Gets the organization property value. The organization property
     * @return string|null
    */
    public function getOrganization(): ?string {
        $val = $this->getBackingStore()->get('organization');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organization'");
    }

    /**
     * Gets the state property value. The state property
     * @return string|null
    */
    public function getState(): ?string {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Gets the vendor property value. The vendor property
     * @return string|null
    */
    public function getVendor(): ?string {
        $val = $this->getBackingStore()->get('vendor');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vendor'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('asn', $this->getAsn());
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeStringValue('countryOrRegionCode', $this->getCountryOrRegionCode());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('organization', $this->getOrganization());
        $writer->writeStringValue('state', $this->getState());
        $writer->writeStringValue('vendor', $this->getVendor());
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
     * Sets the asn property value. The asn property
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
     * Sets the city property value. The city property
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->getBackingStore()->set('city', $value);
    }

    /**
     * Sets the countryOrRegionCode property value. The countryOrRegionCode property
     * @param string|null $value Value to set for the countryOrRegionCode property.
    */
    public function setCountryOrRegionCode(?string $value): void {
        $this->getBackingStore()->set('countryOrRegionCode', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the organization property value. The organization property
     * @param string|null $value Value to set for the organization property.
    */
    public function setOrganization(?string $value): void {
        $this->getBackingStore()->set('organization', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the vendor property value. The vendor property
     * @param string|null $value Value to set for the vendor property.
    */
    public function setVendor(?string $value): void {
        $this->getBackingStore()->set('vendor', $value);
    }

}
