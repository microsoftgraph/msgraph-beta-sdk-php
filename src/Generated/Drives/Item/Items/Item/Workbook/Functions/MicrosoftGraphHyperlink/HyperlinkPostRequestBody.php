<?php

namespace Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphHyperlink;

use Microsoft\Graph\Beta\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class HyperlinkPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new hyperlinkPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HyperlinkPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HyperlinkPostRequestBody {
        return new HyperlinkPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'friendlyName' => fn(ParseNode $n) => $o->setFriendlyName($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'linkLocation' => fn(ParseNode $n) => $o->setLinkLocation($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the friendlyName property value. The friendlyName property
     * @return Json|null
    */
    public function getFriendlyName(): ?Json {
        return $this->getBackingStore()->get('friendlyName');
    }

    /**
     * Gets the linkLocation property value. The linkLocation property
     * @return Json|null
    */
    public function getLinkLocation(): ?Json {
        return $this->getBackingStore()->get('linkLocation');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('friendlyName', $this->getFriendlyName());
        $writer->writeObjectValue('linkLocation', $this->getLinkLocation());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the friendlyName property value. The friendlyName property
     * @param Json|null $value Value to set for the friendlyName property.
    */
    public function setFriendlyName(?Json $value): void {
        $this->getBackingStore()->set('friendlyName', $value);
    }

    /**
     * Sets the linkLocation property value. The linkLocation property
     * @param Json|null $value Value to set for the linkLocation property.
    */
    public function setLinkLocation(?Json $value): void {
        $this->getBackingStore()->set('linkLocation', $value);
    }

}
