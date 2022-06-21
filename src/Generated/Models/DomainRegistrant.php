<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DomainRegistrant implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $countryOrRegionCode The countryOrRegionCode property
    */
    private ?string $countryOrRegionCode = null;
    
    /**
     * @var string|null $organization The organization property
    */
    private ?string $organization = null;
    
    /**
     * @var string|null $url The url property
    */
    private ?string $url = null;
    
    /**
     * @var string|null $vendor The vendor property
    */
    private ?string $vendor = null;
    
    /**
     * Instantiates a new domainRegistrant and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DomainRegistrant
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DomainRegistrant {
        return new DomainRegistrant();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
        $o = $this;
        return  [
            'countryOrRegionCode' => function (ParseNode $n) use ($o) { $o->setCountryOrRegionCode($n->getStringValue()); },
            'organization' => function (ParseNode $n) use ($o) { $o->setOrganization($n->getStringValue()); },
            'url' => function (ParseNode $n) use ($o) { $o->setUrl($n->getStringValue()); },
            'vendor' => function (ParseNode $n) use ($o) { $o->setVendor($n->getStringValue()); },
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
     * Gets the url property value. The url property
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
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
        $writer->writeStringValue('countryOrRegionCode', $this->countryOrRegionCode);
        $writer->writeStringValue('organization', $this->organization);
        $writer->writeStringValue('url', $this->url);
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
     * Sets the url property value. The url property
     *  @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value ): void {
        $this->url = $value;
    }

    /**
     * Sets the vendor property value. The vendor property
     *  @param string|null $value Value to set for the vendor property.
    */
    public function setVendor(?string $value ): void {
        $this->vendor = $value;
    }

}
