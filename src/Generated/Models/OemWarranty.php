<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class OemWarranty implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new oemWarranty and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OemWarranty
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OemWarranty {
        return new OemWarranty();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the additionalWarranties property value. List of additional warranty offers. This collection can contain a maximum of 100 elements.
     * @return array<WarrantyOffer>|null
    */
    public function getAdditionalWarranties(): ?array {
        return $this->getBackingStore()->get('additionalWarranties');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the baseWarranties property value. List of base warranty offers. This collection can contain a maximum of 100 elements.
     * @return array<WarrantyOffer>|null
    */
    public function getBaseWarranties(): ?array {
        return $this->getBackingStore()->get('baseWarranties');
    }

    /**
     * Gets the deviceConfigurationUrl property value. Device configuration page URL
     * @return string|null
    */
    public function getDeviceConfigurationUrl(): ?string {
        return $this->getBackingStore()->get('deviceConfigurationUrl');
    }

    /**
     * Gets the deviceWarrantyUrl property value. Device warranty page URL
     * @return string|null
    */
    public function getDeviceWarrantyUrl(): ?string {
        return $this->getBackingStore()->get('deviceWarrantyUrl');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalWarranties' => fn(ParseNode $n) => $o->setAdditionalWarranties($n->getCollectionOfObjectValues([WarrantyOffer::class, 'createFromDiscriminatorValue'])),
            'baseWarranties' => fn(ParseNode $n) => $o->setBaseWarranties($n->getCollectionOfObjectValues([WarrantyOffer::class, 'createFromDiscriminatorValue'])),
            'deviceConfigurationUrl' => fn(ParseNode $n) => $o->setDeviceConfigurationUrl($n->getStringValue()),
            'deviceWarrantyUrl' => fn(ParseNode $n) => $o->setDeviceWarrantyUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('additionalWarranties', $this->getAdditionalWarranties());
        $writer->writeCollectionOfObjectValues('baseWarranties', $this->getBaseWarranties());
        $writer->writeStringValue('deviceConfigurationUrl', $this->getDeviceConfigurationUrl());
        $writer->writeStringValue('deviceWarrantyUrl', $this->getDeviceWarrantyUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the additionalWarranties property value. List of additional warranty offers. This collection can contain a maximum of 100 elements.
     *  @param array<WarrantyOffer>|null $value Value to set for the additionalWarranties property.
    */
    public function setAdditionalWarranties(?array $value): void {
        $this->getBackingStore()->set('additionalWarranties', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the baseWarranties property value. List of base warranty offers. This collection can contain a maximum of 100 elements.
     *  @param array<WarrantyOffer>|null $value Value to set for the baseWarranties property.
    */
    public function setBaseWarranties(?array $value): void {
        $this->getBackingStore()->set('baseWarranties', $value);
    }

    /**
     * Sets the deviceConfigurationUrl property value. Device configuration page URL
     *  @param string|null $value Value to set for the deviceConfigurationUrl property.
    */
    public function setDeviceConfigurationUrl(?string $value): void {
        $this->getBackingStore()->set('deviceConfigurationUrl', $value);
    }

    /**
     * Sets the deviceWarrantyUrl property value. Device warranty page URL
     *  @param string|null $value Value to set for the deviceWarrantyUrl property.
    */
    public function setDeviceWarrantyUrl(?string $value): void {
        $this->getBackingStore()->set('deviceWarrantyUrl', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
