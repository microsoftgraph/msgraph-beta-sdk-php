<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OemWarranty implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<WarrantyOffer>|null $additionalWarranties List of additional warranty offers. This collection can contain a maximum of 100 elements. */
    private ?array $additionalWarranties = null;
    
    /** @var array<WarrantyOffer>|null $baseWarranties List of base warranty offers. This collection can contain a maximum of 100 elements. */
    private ?array $baseWarranties = null;
    
    /** @var string|null $deviceConfigurationUrl Device configuration page URL */
    private ?string $deviceConfigurationUrl = null;
    
    /** @var string|null $deviceWarrantyUrl Device warranty page URL */
    private ?string $deviceWarrantyUrl = null;
    
    /**
     * Instantiates a new oemWarranty and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OemWarranty
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): OemWarranty {
        return new OemWarranty();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the additionalWarranties property value. List of additional warranty offers. This collection can contain a maximum of 100 elements.
     * @return array<WarrantyOffer>|null
    */
    public function getAdditionalWarranties(): ?array {
        return $this->additionalWarranties;
    }

    /**
     * Gets the baseWarranties property value. List of base warranty offers. This collection can contain a maximum of 100 elements.
     * @return array<WarrantyOffer>|null
    */
    public function getBaseWarranties(): ?array {
        return $this->baseWarranties;
    }

    /**
     * Gets the deviceConfigurationUrl property value. Device configuration page URL
     * @return string|null
    */
    public function getDeviceConfigurationUrl(): ?string {
        return $this->deviceConfigurationUrl;
    }

    /**
     * Gets the deviceWarrantyUrl property value. Device warranty page URL
     * @return string|null
    */
    public function getDeviceWarrantyUrl(): ?string {
        return $this->deviceWarrantyUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'additionalWarranties' => function (self $o, ParseNode $n) { $o->setAdditionalWarranties($n->getCollectionOfObjectValues(WarrantyOffer::class)); },
            'baseWarranties' => function (self $o, ParseNode $n) { $o->setBaseWarranties($n->getCollectionOfObjectValues(WarrantyOffer::class)); },
            'deviceConfigurationUrl' => function (self $o, ParseNode $n) { $o->setDeviceConfigurationUrl($n->getStringValue()); },
            'deviceWarrantyUrl' => function (self $o, ParseNode $n) { $o->setDeviceWarrantyUrl($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('additionalWarranties', $this->additionalWarranties);
        $writer->writeCollectionOfObjectValues('baseWarranties', $this->baseWarranties);
        $writer->writeStringValue('deviceConfigurationUrl', $this->deviceConfigurationUrl);
        $writer->writeStringValue('deviceWarrantyUrl', $this->deviceWarrantyUrl);
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
     * Sets the additionalWarranties property value. List of additional warranty offers. This collection can contain a maximum of 100 elements.
     *  @param array<WarrantyOffer>|null $value Value to set for the additionalWarranties property.
    */
    public function setAdditionalWarranties(?array $value ): void {
        $this->additionalWarranties = $value;
    }

    /**
     * Sets the baseWarranties property value. List of base warranty offers. This collection can contain a maximum of 100 elements.
     *  @param array<WarrantyOffer>|null $value Value to set for the baseWarranties property.
    */
    public function setBaseWarranties(?array $value ): void {
        $this->baseWarranties = $value;
    }

    /**
     * Sets the deviceConfigurationUrl property value. Device configuration page URL
     *  @param string|null $value Value to set for the deviceConfigurationUrl property.
    */
    public function setDeviceConfigurationUrl(?string $value ): void {
        $this->deviceConfigurationUrl = $value;
    }

    /**
     * Sets the deviceWarrantyUrl property value. Device warranty page URL
     *  @param string|null $value Value to set for the deviceWarrantyUrl property.
    */
    public function setDeviceWarrantyUrl(?string $value ): void {
        $this->deviceWarrantyUrl = $value;
    }

}
