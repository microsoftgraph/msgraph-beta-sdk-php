<?php

namespace Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Preview;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PreviewPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PreviewPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PreviewPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PreviewPostRequestBody {
        return new PreviewPostRequestBody();
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
     * Gets the allowEdit property value. The allowEdit property
     * @return bool|null
    */
    public function getAllowEdit(): ?bool {
        $val = $this->getBackingStore()->get('allowEdit');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowEdit'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the chromeless property value. The chromeless property
     * @return bool|null
    */
    public function getChromeless(): ?bool {
        $val = $this->getBackingStore()->get('chromeless');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'chromeless'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowEdit' => fn(ParseNode $n) => $o->setAllowEdit($n->getBooleanValue()),
            'chromeless' => fn(ParseNode $n) => $o->setChromeless($n->getBooleanValue()),
            'page' => fn(ParseNode $n) => $o->setPage($n->getStringValue()),
            'viewer' => fn(ParseNode $n) => $o->setViewer($n->getStringValue()),
            'zoom' => fn(ParseNode $n) => $o->setZoom($n->getObjectValue([PreviewPostRequestBody_zoom::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the page property value. The page property
     * @return string|null
    */
    public function getPage(): ?string {
        $val = $this->getBackingStore()->get('page');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'page'");
    }

    /**
     * Gets the viewer property value. The viewer property
     * @return string|null
    */
    public function getViewer(): ?string {
        $val = $this->getBackingStore()->get('viewer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'viewer'");
    }

    /**
     * Gets the zoom property value. The zoom property
     * @return PreviewPostRequestBody_zoom|null
    */
    public function getZoom(): ?PreviewPostRequestBody_zoom {
        $val = $this->getBackingStore()->get('zoom');
        if (is_null($val) || $val instanceof PreviewPostRequestBody_zoom) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'zoom'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowEdit', $this->getAllowEdit());
        $writer->writeBooleanValue('chromeless', $this->getChromeless());
        $writer->writeStringValue('page', $this->getPage());
        $writer->writeStringValue('viewer', $this->getViewer());
        $writer->writeObjectValue('zoom', $this->getZoom());
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
     * Sets the allowEdit property value. The allowEdit property
     * @param bool|null $value Value to set for the allowEdit property.
    */
    public function setAllowEdit(?bool $value): void {
        $this->getBackingStore()->set('allowEdit', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the chromeless property value. The chromeless property
     * @param bool|null $value Value to set for the chromeless property.
    */
    public function setChromeless(?bool $value): void {
        $this->getBackingStore()->set('chromeless', $value);
    }

    /**
     * Sets the page property value. The page property
     * @param string|null $value Value to set for the page property.
    */
    public function setPage(?string $value): void {
        $this->getBackingStore()->set('page', $value);
    }

    /**
     * Sets the viewer property value. The viewer property
     * @param string|null $value Value to set for the viewer property.
    */
    public function setViewer(?string $value): void {
        $this->getBackingStore()->set('viewer', $value);
    }

    /**
     * Sets the zoom property value. The zoom property
     * @param PreviewPostRequestBody_zoom|null $value Value to set for the zoom property.
    */
    public function setZoom(?PreviewPostRequestBody_zoom $value): void {
        $this->getBackingStore()->set('zoom', $value);
    }

}
