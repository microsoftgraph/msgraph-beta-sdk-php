<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemAddress extends ItemFacet implements Parsable 
{
    /**
     * @var PhysicalAddress|null $detail The detail property
    */
    private ?PhysicalAddress $detail = null;
    
    /**
     * @var string|null $displayName Friendly name the user has assigned to this address.
    */
    private ?string $displayName = null;
    
    /**
     * @var GeoCoordinates|null $geoCoordinates The geocoordinates of the address.
    */
    private ?GeoCoordinates $geoCoordinates = null;
    
    /**
     * Instantiates a new ItemAddress and sets the default values.
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
        return $this->detail;
    }

    /**
     * Gets the displayName property value. Friendly name the user has assigned to this address.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'detail' => function (ParseNode $n) use ($o) { $o->setDetail($n->getObjectValue(array(PhysicalAddress::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'geoCoordinates' => function (ParseNode $n) use ($o) { $o->setGeoCoordinates($n->getObjectValue(array(GeoCoordinates::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the geoCoordinates property value. The geocoordinates of the address.
     * @return GeoCoordinates|null
    */
    public function getGeoCoordinates(): ?GeoCoordinates {
        return $this->geoCoordinates;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('detail', $this->detail);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('geoCoordinates', $this->geoCoordinates);
    }

    /**
     * Sets the detail property value. The detail property
     *  @param PhysicalAddress|null $value Value to set for the detail property.
    */
    public function setDetail(?PhysicalAddress $value ): void {
        $this->detail = $value;
    }

    /**
     * Sets the displayName property value. Friendly name the user has assigned to this address.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the geoCoordinates property value. The geocoordinates of the address.
     *  @param GeoCoordinates|null $value Value to set for the geoCoordinates property.
    */
    public function setGeoCoordinates(?GeoCoordinates $value ): void {
        $this->geoCoordinates = $value;
    }

}
