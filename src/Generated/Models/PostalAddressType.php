<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PostalAddressType implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PostalAddressType and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PostalAddressType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PostalAddressType {
        return new PostalAddressType();
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
     * Gets the countryLetterCode property value. The countryLetterCode property
     * @return string|null
    */
    public function getCountryLetterCode(): ?string {
        $val = $this->getBackingStore()->get('countryLetterCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countryLetterCode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'countryLetterCode' => fn(ParseNode $n) => $o->setCountryLetterCode($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'postalCode' => fn(ParseNode $n) => $o->setPostalCode($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
            'street' => fn(ParseNode $n) => $o->setStreet($n->getStringValue()),
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
     * Gets the postalCode property value. The postalCode property
     * @return string|null
    */
    public function getPostalCode(): ?string {
        $val = $this->getBackingStore()->get('postalCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'postalCode'");
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
     * Gets the street property value. The street property
     * @return string|null
    */
    public function getStreet(): ?string {
        $val = $this->getBackingStore()->get('street');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'street'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeStringValue('countryLetterCode', $this->getCountryLetterCode());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('postalCode', $this->getPostalCode());
        $writer->writeStringValue('state', $this->getState());
        $writer->writeStringValue('street', $this->getStreet());
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
     * Sets the city property value. The city property
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->getBackingStore()->set('city', $value);
    }

    /**
     * Sets the countryLetterCode property value. The countryLetterCode property
     * @param string|null $value Value to set for the countryLetterCode property.
    */
    public function setCountryLetterCode(?string $value): void {
        $this->getBackingStore()->set('countryLetterCode', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the postalCode property value. The postalCode property
     * @param string|null $value Value to set for the postalCode property.
    */
    public function setPostalCode(?string $value): void {
        $this->getBackingStore()->set('postalCode', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the street property value. The street property
     * @param string|null $value Value to set for the street property.
    */
    public function setStreet(?string $value): void {
        $this->getBackingStore()->set('street', $value);
    }

}
