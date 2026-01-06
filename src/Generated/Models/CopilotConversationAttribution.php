<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CopilotConversationAttribution implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CopilotConversationAttribution and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopilotConversationAttribution
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopilotConversationAttribution {
        return new CopilotConversationAttribution();
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
     * Gets the attributionSource property value. The source of the attribution.
     * @return CopilotConversationAttributionSource|null
    */
    public function getAttributionSource(): ?CopilotConversationAttributionSource {
        $val = $this->getBackingStore()->get('attributionSource');
        if (is_null($val) || $val instanceof CopilotConversationAttributionSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attributionSource'");
    }

    /**
     * Gets the attributionType property value. The type of attribution.
     * @return CopilotConversationAttributionType|null
    */
    public function getAttributionType(): ?CopilotConversationAttributionType {
        $val = $this->getBackingStore()->get('attributionType');
        if (is_null($val) || $val instanceof CopilotConversationAttributionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attributionType'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attributionSource' => fn(ParseNode $n) => $o->setAttributionSource($n->getEnumValue(CopilotConversationAttributionSource::class)),
            'attributionType' => fn(ParseNode $n) => $o->setAttributionType($n->getEnumValue(CopilotConversationAttributionType::class)),
            'imageFavIcon' => fn(ParseNode $n) => $o->setImageFavIcon($n->getStringValue()),
            'imageHeight' => fn(ParseNode $n) => $o->setImageHeight($n->getIntegerValue()),
            'imageWebUrl' => fn(ParseNode $n) => $o->setImageWebUrl($n->getStringValue()),
            'imageWidth' => fn(ParseNode $n) => $o->setImageWidth($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'providerDisplayName' => fn(ParseNode $n) => $o->setProviderDisplayName($n->getStringValue()),
            'seeMoreWebUrl' => fn(ParseNode $n) => $o->setSeeMoreWebUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the imageFavIcon property value. The imageFavIcon property
     * @return string|null
    */
    public function getImageFavIcon(): ?string {
        $val = $this->getBackingStore()->get('imageFavIcon');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'imageFavIcon'");
    }

    /**
     * Gets the imageHeight property value. The imageHeight property
     * @return int|null
    */
    public function getImageHeight(): ?int {
        $val = $this->getBackingStore()->get('imageHeight');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'imageHeight'");
    }

    /**
     * Gets the imageWebUrl property value. The imageWebUrl property
     * @return string|null
    */
    public function getImageWebUrl(): ?string {
        $val = $this->getBackingStore()->get('imageWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'imageWebUrl'");
    }

    /**
     * Gets the imageWidth property value. The imageWidth property
     * @return int|null
    */
    public function getImageWidth(): ?int {
        $val = $this->getBackingStore()->get('imageWidth');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'imageWidth'");
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
     * Gets the providerDisplayName property value. The providerDisplayName property
     * @return string|null
    */
    public function getProviderDisplayName(): ?string {
        $val = $this->getBackingStore()->get('providerDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'providerDisplayName'");
    }

    /**
     * Gets the seeMoreWebUrl property value. The seeMoreWebUrl property
     * @return string|null
    */
    public function getSeeMoreWebUrl(): ?string {
        $val = $this->getBackingStore()->get('seeMoreWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'seeMoreWebUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('attributionSource', $this->getAttributionSource());
        $writer->writeEnumValue('attributionType', $this->getAttributionType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the attributionSource property value. The source of the attribution.
     * @param CopilotConversationAttributionSource|null $value Value to set for the attributionSource property.
    */
    public function setAttributionSource(?CopilotConversationAttributionSource $value): void {
        $this->getBackingStore()->set('attributionSource', $value);
    }

    /**
     * Sets the attributionType property value. The type of attribution.
     * @param CopilotConversationAttributionType|null $value Value to set for the attributionType property.
    */
    public function setAttributionType(?CopilotConversationAttributionType $value): void {
        $this->getBackingStore()->set('attributionType', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the imageFavIcon property value. The imageFavIcon property
     * @param string|null $value Value to set for the imageFavIcon property.
    */
    public function setImageFavIcon(?string $value): void {
        $this->getBackingStore()->set('imageFavIcon', $value);
    }

    /**
     * Sets the imageHeight property value. The imageHeight property
     * @param int|null $value Value to set for the imageHeight property.
    */
    public function setImageHeight(?int $value): void {
        $this->getBackingStore()->set('imageHeight', $value);
    }

    /**
     * Sets the imageWebUrl property value. The imageWebUrl property
     * @param string|null $value Value to set for the imageWebUrl property.
    */
    public function setImageWebUrl(?string $value): void {
        $this->getBackingStore()->set('imageWebUrl', $value);
    }

    /**
     * Sets the imageWidth property value. The imageWidth property
     * @param int|null $value Value to set for the imageWidth property.
    */
    public function setImageWidth(?int $value): void {
        $this->getBackingStore()->set('imageWidth', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the providerDisplayName property value. The providerDisplayName property
     * @param string|null $value Value to set for the providerDisplayName property.
    */
    public function setProviderDisplayName(?string $value): void {
        $this->getBackingStore()->set('providerDisplayName', $value);
    }

    /**
     * Sets the seeMoreWebUrl property value. The seeMoreWebUrl property
     * @param string|null $value Value to set for the seeMoreWebUrl property.
    */
    public function setSeeMoreWebUrl(?string $value): void {
        $this->getBackingStore()->set('seeMoreWebUrl', $value);
    }

}
