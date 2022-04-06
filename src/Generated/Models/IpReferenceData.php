<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IpReferenceData implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $asn The asn property */
    private ?int $asn = null;
    
    /** @var string|null $city The city property */
    private ?string $city = null;
    
    /** @var string|null $countryOrRegionCode The countryOrRegionCode property */
    private ?string $countryOrRegionCode = null;
    
    /** @var string|null $organization The organization property */
    private ?string $organization = null;
    
    /** @var string|null $state The state property */
    private ?string $state = null;
    
    /** @var string|null $vendor The vendor property */
    private ?string $vendor = null;
    
    /**
     * Instantiates a new ipReferenceData and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IpReferenceData
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): IpReferenceData {
        return new IpReferenceData();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the asn property value. The asn property
     * @return int|null
    */
    public function getAsn(): ?int {
        return $this->asn;
    }

    /**
     * Gets the city property value. The city property
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the countryOrRegionCode property value. The countryOrRegionCode property
     * @return string|null
    */
    public function getCountryOrRegionCode(): ?string {
        return $this->countryOrRegionCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'asn' => function (self $o, ParseNode $n) { $o->setAsn($n->getIntegerValue()); },
            'city' => function (self $o, ParseNode $n) { $o->setCity($n->getStringValue()); },
            'countryOrRegionCode' => function (self $o, ParseNode $n) { $o->setCountryOrRegionCode($n->getStringValue()); },
            'organization' => function (self $o, ParseNode $n) { $o->setOrganization($n->getStringValue()); },
            'state' => function (self $o, ParseNode $n) { $o->setState($n->getStringValue()); },
            'vendor' => function (self $o, ParseNode $n) { $o->setVendor($n->getStringValue()); },
        ];
    }

    /**
     * Gets the organization property value. The organization property
     * @return string|null
    */
    public function getOrganization(): ?string {
        return $this->organization;
    }

    /**
     * Gets the state property value. The state property
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Gets the vendor property value. The vendor property
     * @return string|null
    */
    public function getVendor(): ?string {
        return $this->vendor;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('asn', $this->asn);
        $writer->writeStringValue('city', $this->city);
        $writer->writeStringValue('countryOrRegionCode', $this->countryOrRegionCode);
        $writer->writeStringValue('organization', $this->organization);
        $writer->writeStringValue('state', $this->state);
        $writer->writeStringValue('vendor', $this->vendor);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the asn property value. The asn property
     *  @param int|null $value Value to set for the asn property.
    */
    public function setAsn(?int $value ): void {
        $this->asn = $value;
    }

    /**
     * Sets the city property value. The city property
     *  @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value ): void {
        $this->city = $value;
    }

    /**
     * Sets the countryOrRegionCode property value. The countryOrRegionCode property
     *  @param string|null $value Value to set for the countryOrRegionCode property.
    */
    public function setCountryOrRegionCode(?string $value ): void {
        $this->countryOrRegionCode = $value;
    }

    /**
     * Sets the organization property value. The organization property
     *  @param string|null $value Value to set for the organization property.
    */
    public function setOrganization(?string $value ): void {
        $this->organization = $value;
    }

    /**
     * Sets the state property value. The state property
     *  @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the vendor property value. The vendor property
     *  @param string|null $value Value to set for the vendor property.
    */
    public function setVendor(?string $value ): void {
        $this->vendor = $value;
    }

}
