<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PostalAddressType implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $city The city property */
    private ?string $city = null;
    
    /** @var string|null $countryLetterCode The countryLetterCode property */
    private ?string $countryLetterCode = null;
    
    /** @var string|null $postalCode The postalCode property */
    private ?string $postalCode = null;
    
    /** @var string|null $state The state property */
    private ?string $state = null;
    
    /** @var string|null $street The street property */
    private ?string $street = null;
    
    /**
     * Instantiates a new postalAddressType and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PostalAddressType
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PostalAddressType {
        return new PostalAddressType();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the city property value. The city property
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the countryLetterCode property value. The countryLetterCode property
     * @return string|null
    */
    public function getCountryLetterCode(): ?string {
        return $this->countryLetterCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'city' => function (self $o, ParseNode $n) { $o->setCity($n->getStringValue()); },
            'countryLetterCode' => function (self $o, ParseNode $n) { $o->setCountryLetterCode($n->getStringValue()); },
            'postalCode' => function (self $o, ParseNode $n) { $o->setPostalCode($n->getStringValue()); },
            'state' => function (self $o, ParseNode $n) { $o->setState($n->getStringValue()); },
            'street' => function (self $o, ParseNode $n) { $o->setStreet($n->getStringValue()); },
        ];
    }

    /**
     * Gets the postalCode property value. The postalCode property
     * @return string|null
    */
    public function getPostalCode(): ?string {
        return $this->postalCode;
    }

    /**
     * Gets the state property value. The state property
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Gets the street property value. The street property
     * @return string|null
    */
    public function getStreet(): ?string {
        return $this->street;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('city', $this->city);
        $writer->writeStringValue('countryLetterCode', $this->countryLetterCode);
        $writer->writeStringValue('postalCode', $this->postalCode);
        $writer->writeStringValue('state', $this->state);
        $writer->writeStringValue('street', $this->street);
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
     * Sets the city property value. The city property
     *  @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value ): void {
        $this->city = $value;
    }

    /**
     * Sets the countryLetterCode property value. The countryLetterCode property
     *  @param string|null $value Value to set for the countryLetterCode property.
    */
    public function setCountryLetterCode(?string $value ): void {
        $this->countryLetterCode = $value;
    }

    /**
     * Sets the postalCode property value. The postalCode property
     *  @param string|null $value Value to set for the postalCode property.
    */
    public function setPostalCode(?string $value ): void {
        $this->postalCode = $value;
    }

    /**
     * Sets the state property value. The state property
     *  @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the street property value. The street property
     *  @param string|null $value Value to set for the street property.
    */
    public function setStreet(?string $value ): void {
        $this->street = $value;
    }

}
