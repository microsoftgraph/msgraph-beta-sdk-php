<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamworkContentCameraConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new teamworkContentCameraConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkContentCameraConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkContentCameraConfiguration {
        return new TeamworkContentCameraConfiguration();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'isContentCameraInverted' => fn(ParseNode $n) => $o->setIsContentCameraInverted($n->getBooleanValue()),
            'isContentCameraOptional' => fn(ParseNode $n) => $o->setIsContentCameraOptional($n->getBooleanValue()),
            'isContentEnhancementEnabled' => fn(ParseNode $n) => $o->setIsContentEnhancementEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isContentCameraInverted property value. True if the content camera is inverted.
     * @return bool|null
    */
    public function getIsContentCameraInverted(): ?bool {
        $val = $this->getBackingStore()->get('isContentCameraInverted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isContentCameraInverted'");
    }

    /**
     * Gets the isContentCameraOptional property value. True if the content camera is optional.
     * @return bool|null
    */
    public function getIsContentCameraOptional(): ?bool {
        $val = $this->getBackingStore()->get('isContentCameraOptional');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isContentCameraOptional'");
    }

    /**
     * Gets the isContentEnhancementEnabled property value. True if the content enhancement is enabled.
     * @return bool|null
    */
    public function getIsContentEnhancementEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isContentEnhancementEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isContentEnhancementEnabled'");
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
        $writer->writeBooleanValue('isContentCameraInverted', $this->getIsContentCameraInverted());
        $writer->writeBooleanValue('isContentCameraOptional', $this->getIsContentCameraOptional());
        $writer->writeBooleanValue('isContentEnhancementEnabled', $this->getIsContentEnhancementEnabled());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the isContentCameraInverted property value. True if the content camera is inverted.
     * @param bool|null $value Value to set for the isContentCameraInverted property.
    */
    public function setIsContentCameraInverted(?bool $value): void {
        $this->getBackingStore()->set('isContentCameraInverted', $value);
    }

    /**
     * Sets the isContentCameraOptional property value. True if the content camera is optional.
     * @param bool|null $value Value to set for the isContentCameraOptional property.
    */
    public function setIsContentCameraOptional(?bool $value): void {
        $this->getBackingStore()->set('isContentCameraOptional', $value);
    }

    /**
     * Sets the isContentEnhancementEnabled property value. True if the content enhancement is enabled.
     * @param bool|null $value Value to set for the isContentEnhancementEnabled property.
    */
    public function setIsContentEnhancementEnabled(?bool $value): void {
        $this->getBackingStore()->set('isContentEnhancementEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
