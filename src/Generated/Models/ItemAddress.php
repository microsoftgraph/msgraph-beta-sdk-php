<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemAddress extends ItemFacet implements Parsable 
{
    /**
     * Instantiates a new itemAddress and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.itemAddress');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemAddress
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemAddress {
        return new ItemAddress();
    }

    /**
     * Gets the detail property value. The detail property
     * @return PhysicalAddress|null
    */
    public function getDetail(): ?PhysicalAddress {
        $val = $this->getBackingStore()->get('detail');
        if (is_null($val) || $val instanceof PhysicalAddress) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detail'");
    }

    /**
     * Gets the displayName property value. Friendly name the user has assigned to this address.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'detail' => fn(ParseNode $n) => $o->setDetail($n->getObjectValue([PhysicalAddress::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'geoCoordinates' => fn(ParseNode $n) => $o->setGeoCoordinates($n->getObjectValue([GeoCoordinates::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the geoCoordinates property value. The geocoordinates of the address.
     * @return GeoCoordinates|null
    */
    public function getGeoCoordinates(): ?GeoCoordinates {
        $val = $this->getBackingStore()->get('geoCoordinates');
        if (is_null($val) || $val instanceof GeoCoordinates) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'geoCoordinates'");
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
        parent::serialize($writer);
        $writer->writeObjectValue('detail', $this->getDetail());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('geoCoordinates', $this->getGeoCoordinates());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the detail property value. The detail property
     * @param PhysicalAddress|null $value Value to set for the detail property.
    */
    public function setDetail(?PhysicalAddress $value): void {
        $this->getBackingStore()->set('detail', $value);
    }

    /**
     * Sets the displayName property value. Friendly name the user has assigned to this address.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the geoCoordinates property value. The geocoordinates of the address.
     * @param GeoCoordinates|null $value Value to set for the geoCoordinates property.
    */
    public function setGeoCoordinates(?GeoCoordinates $value): void {
        $this->getBackingStore()->set('geoCoordinates', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
