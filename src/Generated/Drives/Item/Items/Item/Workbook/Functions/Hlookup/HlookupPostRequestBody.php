<?php

namespace Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Functions\Hlookup;

use Microsoft\Graph\Beta\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class HlookupPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new hlookupPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HlookupPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HlookupPostRequestBody {
        return new HlookupPostRequestBody();
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
            'lookupValue' => fn(ParseNode $n) => $o->setLookupValue($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'rangeLookup' => fn(ParseNode $n) => $o->setRangeLookup($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'rowIndexNum' => fn(ParseNode $n) => $o->setRowIndexNum($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'tableArray' => fn(ParseNode $n) => $o->setTableArray($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the lookupValue property value. The lookupValue property
     * @return Json|null
    */
    public function getLookupValue(): ?Json {
        return $this->getBackingStore()->get('lookupValue');
    }

    /**
     * Gets the rangeLookup property value. The rangeLookup property
     * @return Json|null
    */
    public function getRangeLookup(): ?Json {
        return $this->getBackingStore()->get('rangeLookup');
    }

    /**
     * Gets the rowIndexNum property value. The rowIndexNum property
     * @return Json|null
    */
    public function getRowIndexNum(): ?Json {
        return $this->getBackingStore()->get('rowIndexNum');
    }

    /**
     * Gets the tableArray property value. The tableArray property
     * @return Json|null
    */
    public function getTableArray(): ?Json {
        return $this->getBackingStore()->get('tableArray');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('lookupValue', $this->getLookupValue());
        $writer->writeObjectValue('rangeLookup', $this->getRangeLookup());
        $writer->writeObjectValue('rowIndexNum', $this->getRowIndexNum());
        $writer->writeObjectValue('tableArray', $this->getTableArray());
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
     * Sets the lookupValue property value. The lookupValue property
     * @param Json|null $value Value to set for the lookupValue property.
    */
    public function setLookupValue(?Json $value): void {
        $this->getBackingStore()->set('lookupValue', $value);
    }

    /**
     * Sets the rangeLookup property value. The rangeLookup property
     * @param Json|null $value Value to set for the rangeLookup property.
    */
    public function setRangeLookup(?Json $value): void {
        $this->getBackingStore()->set('rangeLookup', $value);
    }

    /**
     * Sets the rowIndexNum property value. The rowIndexNum property
     * @param Json|null $value Value to set for the rowIndexNum property.
    */
    public function setRowIndexNum(?Json $value): void {
        $this->getBackingStore()->set('rowIndexNum', $value);
    }

    /**
     * Sets the tableArray property value. The tableArray property
     * @param Json|null $value Value to set for the tableArray property.
    */
    public function setTableArray(?Json $value): void {
        $this->getBackingStore()->set('tableArray', $value);
    }

}
