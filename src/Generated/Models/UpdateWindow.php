<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\Time;

class UpdateWindow implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new updateWindow and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.updateWindow');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateWindow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateWindow {
        return new UpdateWindow();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'updateWindowEndTime' => fn(ParseNode $n) => $o->setUpdateWindowEndTime($n->getTimeValue()),
            'updateWindowStartTime' => fn(ParseNode $n) => $o->setUpdateWindowStartTime($n->getTimeValue()),
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
     * Gets the updateWindowEndTime property value. End of a time window during which agents can receive updates
     * @return Time|null
    */
    public function getUpdateWindowEndTime(): ?Time {
        return $this->getBackingStore()->get('updateWindowEndTime');
    }

    /**
     * Gets the updateWindowStartTime property value. Start of a time window during which agents can receive updates
     * @return Time|null
    */
    public function getUpdateWindowStartTime(): ?Time {
        return $this->getBackingStore()->get('updateWindowStartTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeTimeValue('updateWindowEndTime', $this->getUpdateWindowEndTime());
        $writer->writeTimeValue('updateWindowStartTime', $this->getUpdateWindowStartTime());
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the updateWindowEndTime property value. End of a time window during which agents can receive updates
     *  @param Time|null $value Value to set for the updateWindowEndTime property.
    */
    public function setUpdateWindowEndTime(?Time $value): void {
        $this->getBackingStore()->set('updateWindowEndTime', $value);
    }

    /**
     * Sets the updateWindowStartTime property value. Start of a time window during which agents can receive updates
     *  @param Time|null $value Value to set for the updateWindowStartTime property.
    */
    public function setUpdateWindowStartTime(?Time $value): void {
        $this->getBackingStore()->set('updateWindowStartTime', $value);
    }

}
