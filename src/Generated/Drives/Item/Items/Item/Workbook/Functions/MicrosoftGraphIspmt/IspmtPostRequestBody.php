<?php

namespace Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIspmt;

use Microsoft\Graph\Beta\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class IspmtPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ispmtPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IspmtPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IspmtPostRequestBody {
        return new IspmtPostRequestBody();
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
            'nper' => fn(ParseNode $n) => $o->setNper($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'per' => fn(ParseNode $n) => $o->setPer($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'pv' => fn(ParseNode $n) => $o->setPv($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'rate' => fn(ParseNode $n) => $o->setRate($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the nper property value. The nper property
     * @return Json|null
    */
    public function getNper(): ?Json {
        return $this->getBackingStore()->get('nper');
    }

    /**
     * Gets the per property value. The per property
     * @return Json|null
    */
    public function getPer(): ?Json {
        return $this->getBackingStore()->get('per');
    }

    /**
     * Gets the pv property value. The pv property
     * @return Json|null
    */
    public function getPv(): ?Json {
        return $this->getBackingStore()->get('pv');
    }

    /**
     * Gets the rate property value. The rate property
     * @return Json|null
    */
    public function getRate(): ?Json {
        return $this->getBackingStore()->get('rate');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('nper', $this->getNper());
        $writer->writeObjectValue('per', $this->getPer());
        $writer->writeObjectValue('pv', $this->getPv());
        $writer->writeObjectValue('rate', $this->getRate());
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
     * Sets the nper property value. The nper property
     * @param Json|null $value Value to set for the nper property.
    */
    public function setNper(?Json $value): void {
        $this->getBackingStore()->set('nper', $value);
    }

    /**
     * Sets the per property value. The per property
     * @param Json|null $value Value to set for the per property.
    */
    public function setPer(?Json $value): void {
        $this->getBackingStore()->set('per', $value);
    }

    /**
     * Sets the pv property value. The pv property
     * @param Json|null $value Value to set for the pv property.
    */
    public function setPv(?Json $value): void {
        $this->getBackingStore()->set('pv', $value);
    }

    /**
     * Sets the rate property value. The rate property
     * @param Json|null $value Value to set for the rate property.
    */
    public function setRate(?Json $value): void {
        $this->getBackingStore()->set('rate', $value);
    }

}
