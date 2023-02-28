<?php

namespace Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Functions\TbillYield;

use Microsoft\Graph\Beta\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TbillYieldPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new tbillYieldPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TbillYieldPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TbillYieldPostRequestBody {
        return new TbillYieldPostRequestBody();
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
            'maturity' => fn(ParseNode $n) => $o->setMaturity($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'pr' => fn(ParseNode $n) => $o->setPr($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'settlement' => fn(ParseNode $n) => $o->setSettlement($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the maturity property value. The maturity property
     * @return Json|null
    */
    public function getMaturity(): ?Json {
        return $this->getBackingStore()->get('maturity');
    }

    /**
     * Gets the pr property value. The pr property
     * @return Json|null
    */
    public function getPr(): ?Json {
        return $this->getBackingStore()->get('pr');
    }

    /**
     * Gets the settlement property value. The settlement property
     * @return Json|null
    */
    public function getSettlement(): ?Json {
        return $this->getBackingStore()->get('settlement');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('maturity', $this->getMaturity());
        $writer->writeObjectValue('pr', $this->getPr());
        $writer->writeObjectValue('settlement', $this->getSettlement());
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
     * Sets the maturity property value. The maturity property
     * @param Json|null $value Value to set for the maturity property.
    */
    public function setMaturity(?Json $value): void {
        $this->getBackingStore()->set('maturity', $value);
    }

    /**
     * Sets the pr property value. The pr property
     * @param Json|null $value Value to set for the pr property.
    */
    public function setPr(?Json $value): void {
        $this->getBackingStore()->set('pr', $value);
    }

    /**
     * Sets the settlement property value. The settlement property
     * @param Json|null $value Value to set for the settlement property.
    */
    public function setSettlement(?Json $value): void {
        $this->getBackingStore()->set('settlement', $value);
    }

}
