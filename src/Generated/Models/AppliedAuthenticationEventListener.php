<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AppliedAuthenticationEventListener implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new appliedAuthenticationEventListener and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppliedAuthenticationEventListener
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppliedAuthenticationEventListener {
        return new AppliedAuthenticationEventListener();
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
     * Gets the eventType property value. The eventType property
     * @return AuthenticationEventType|null
    */
    public function getEventType(): ?AuthenticationEventType {
        return $this->getBackingStore()->get('eventType');
    }

    /**
     * Gets the executedListenerId property value. The executedListenerId property
     * @return string|null
    */
    public function getExecutedListenerId(): ?string {
        return $this->getBackingStore()->get('executedListenerId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'eventType' => fn(ParseNode $n) => $o->setEventType($n->getEnumValue(AuthenticationEventType::class)),
            'executedListenerId' => fn(ParseNode $n) => $o->setExecutedListenerId($n->getStringValue()),
            'handlerResult' => fn(ParseNode $n) => $o->setHandlerResult($n->getObjectValue([AuthenticationEventHandlerResult::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the handlerResult property value. The handlerResult property
     * @return AuthenticationEventHandlerResult|null
    */
    public function getHandlerResult(): ?AuthenticationEventHandlerResult {
        return $this->getBackingStore()->get('handlerResult');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('eventType', $this->getEventType());
        $writer->writeStringValue('executedListenerId', $this->getExecutedListenerId());
        $writer->writeObjectValue('handlerResult', $this->getHandlerResult());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the eventType property value. The eventType property
     *  @param AuthenticationEventType|null $value Value to set for the eventType property.
    */
    public function setEventType(?AuthenticationEventType $value): void {
        $this->getBackingStore()->set('eventType', $value);
    }

    /**
     * Sets the executedListenerId property value. The executedListenerId property
     *  @param string|null $value Value to set for the executedListenerId property.
    */
    public function setExecutedListenerId(?string $value): void {
        $this->getBackingStore()->set('executedListenerId', $value);
    }

    /**
     * Sets the handlerResult property value. The handlerResult property
     *  @param AuthenticationEventHandlerResult|null $value Value to set for the handlerResult property.
    */
    public function setHandlerResult(?AuthenticationEventHandlerResult $value): void {
        $this->getBackingStore()->set('handlerResult', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
