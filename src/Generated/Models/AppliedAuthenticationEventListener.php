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
     * Instantiates a new AppliedAuthenticationEventListener and sets the default values.
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
     * Gets the eventType property value. The type of authentication event that triggered the custom authentication extension request. The possible values are: tokenIssuanceStart, pageRenderStart, unknownFutureValue, attributeCollectionStart, attributeCollectionSubmit, emailOtpSend. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: attributeCollectionStart, attributeCollectionSubmit, emailOtpSend.
     * @return AuthenticationEventType|null
    */
    public function getEventType(): ?AuthenticationEventType {
        $val = $this->getBackingStore()->get('eventType');
        if (is_null($val) || $val instanceof AuthenticationEventType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventType'");
    }

    /**
     * Gets the executedListenerId property value. ID of the authentication event listener that was executed.
     * @return string|null
    */
    public function getExecutedListenerId(): ?string {
        $val = $this->getBackingStore()->get('executedListenerId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'executedListenerId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
     * Gets the handlerResult property value. The result from the listening client, such as an Azure Logic App and Azure Functions, of this authentication event.
     * @return AuthenticationEventHandlerResult|null
    */
    public function getHandlerResult(): ?AuthenticationEventHandlerResult {
        $val = $this->getBackingStore()->get('handlerResult');
        if (is_null($val) || $val instanceof AuthenticationEventHandlerResult) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'handlerResult'");
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
        $writer->writeEnumValue('eventType', $this->getEventType());
        $writer->writeStringValue('executedListenerId', $this->getExecutedListenerId());
        $writer->writeObjectValue('handlerResult', $this->getHandlerResult());
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
     * Sets the eventType property value. The type of authentication event that triggered the custom authentication extension request. The possible values are: tokenIssuanceStart, pageRenderStart, unknownFutureValue, attributeCollectionStart, attributeCollectionSubmit, emailOtpSend. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: attributeCollectionStart, attributeCollectionSubmit, emailOtpSend.
     * @param AuthenticationEventType|null $value Value to set for the eventType property.
    */
    public function setEventType(?AuthenticationEventType $value): void {
        $this->getBackingStore()->set('eventType', $value);
    }

    /**
     * Sets the executedListenerId property value. ID of the authentication event listener that was executed.
     * @param string|null $value Value to set for the executedListenerId property.
    */
    public function setExecutedListenerId(?string $value): void {
        $this->getBackingStore()->set('executedListenerId', $value);
    }

    /**
     * Sets the handlerResult property value. The result from the listening client, such as an Azure Logic App and Azure Functions, of this authentication event.
     * @param AuthenticationEventHandlerResult|null $value Value to set for the handlerResult property.
    */
    public function setHandlerResult(?AuthenticationEventHandlerResult $value): void {
        $this->getBackingStore()->set('handlerResult', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
