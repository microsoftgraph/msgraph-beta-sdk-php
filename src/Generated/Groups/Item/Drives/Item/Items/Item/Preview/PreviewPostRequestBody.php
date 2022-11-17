<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\Drives\Item\Items\Item\Preview;

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
     * Instantiates a new previewPostRequestBody and sets the default values.
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the allowEdit property value. The allowEdit property
     * @return bool|null
    */
    public function getAllowEdit(): ?bool {
        return $this->getBackingStore()->get('allowEdit');
    }

    /**
     * Gets the backingStore property value. Stores model information.
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
        return $this->getBackingStore()->get('chromeless');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowEdit' => fn(ParseNode $n) => $o->setAllowEdit($n->getBooleanValue()),
            'chromeless' => fn(ParseNode $n) => $o->setChromeless($n->getBooleanValue()),
            'page' => fn(ParseNode $n) => $o->setPage($n->getStringValue()),
            'viewer' => fn(ParseNode $n) => $o->setViewer($n->getStringValue()),
            'zoom' => fn(ParseNode $n) => $o->setZoom($n->getFloatValue()),
        ];
    }

    /**
     * Gets the page property value. The page property
     * @return string|null
    */
    public function getPage(): ?string {
        return $this->getBackingStore()->get('page');
    }

    /**
     * Gets the viewer property value. The viewer property
     * @return string|null
    */
    public function getViewer(): ?string {
        return $this->getBackingStore()->get('viewer');
    }

    /**
     * Gets the zoom property value. The zoom property
     * @return float|null
    */
    public function getZoom(): ?float {
        return $this->getBackingStore()->get('zoom');
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
        $writer->writeFloatValue('zoom', $this->getZoom());
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
     * Sets the allowEdit property value. The allowEdit property
     *  @param bool|null $value Value to set for the allowEdit property.
    */
    public function setAllowEdit(?bool $value): void {
        $this->getBackingStore()->set('allowEdit', $value);
    }

    /**
     * Sets the chromeless property value. The chromeless property
     *  @param bool|null $value Value to set for the chromeless property.
    */
    public function setChromeless(?bool $value): void {
        $this->getBackingStore()->set('chromeless', $value);
    }

    /**
     * Sets the page property value. The page property
     *  @param string|null $value Value to set for the page property.
    */
    public function setPage(?string $value): void {
        $this->getBackingStore()->set('page', $value);
    }

    /**
     * Sets the viewer property value. The viewer property
     *  @param string|null $value Value to set for the viewer property.
    */
    public function setViewer(?string $value): void {
        $this->getBackingStore()->set('viewer', $value);
    }

    /**
     * Sets the zoom property value. The zoom property
     *  @param float|null $value Value to set for the zoom property.
    */
    public function setZoom(?float $value): void {
        $this->getBackingStore()->set('zoom', $value);
    }

}
