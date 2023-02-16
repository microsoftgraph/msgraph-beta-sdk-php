<?php

namespace Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphF_Inv_RT;

use Microsoft\Graph\Beta\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class F_Inv_RTPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new f_Inv_RTPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return F_Inv_RTPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): F_Inv_RTPostRequestBody {
        return new F_Inv_RTPostRequestBody();
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
     * Gets the degFreedom1 property value. The degFreedom1 property
     * @return Json|null
    */
    public function getDegFreedom1(): ?Json {
        return $this->getBackingStore()->get('degFreedom1');
    }

    /**
     * Gets the degFreedom2 property value. The degFreedom2 property
     * @return Json|null
    */
    public function getDegFreedom2(): ?Json {
        return $this->getBackingStore()->get('degFreedom2');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'degFreedom1' => fn(ParseNode $n) => $o->setDegFreedom1($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'degFreedom2' => fn(ParseNode $n) => $o->setDegFreedom2($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'probability' => fn(ParseNode $n) => $o->setProbability($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the probability property value. The probability property
     * @return Json|null
    */
    public function getProbability(): ?Json {
        return $this->getBackingStore()->get('probability');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('degFreedom1', $this->getDegFreedom1());
        $writer->writeObjectValue('degFreedom2', $this->getDegFreedom2());
        $writer->writeObjectValue('probability', $this->getProbability());
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
     * Sets the degFreedom1 property value. The degFreedom1 property
     * @param Json|null $value Value to set for the degFreedom1 property.
    */
    public function setDegFreedom1(?Json $value): void {
        $this->getBackingStore()->set('degFreedom1', $value);
    }

    /**
     * Sets the degFreedom2 property value. The degFreedom2 property
     * @param Json|null $value Value to set for the degFreedom2 property.
    */
    public function setDegFreedom2(?Json $value): void {
        $this->getBackingStore()->set('degFreedom2', $value);
    }

    /**
     * Sets the probability property value. The probability property
     * @param Json|null $value Value to set for the probability property.
    */
    public function setProbability(?Json $value): void {
        $this->getBackingStore()->set('probability', $value);
    }

}
