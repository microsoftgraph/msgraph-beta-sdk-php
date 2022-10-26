<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppliedAuthenticationEventListener implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AuthenticationEventType|null $eventType The eventType property
    */
    private ?AuthenticationEventType $eventType = null;
    
    /**
     * @var string|null $executedListenerId The executedListenerId property
    */
    private ?string $executedListenerId = null;
    
    /**
     * @var AuthenticationEventHandlerResult|null $handlerResult The handlerResult property
    */
    private ?AuthenticationEventHandlerResult $handlerResult = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new appliedAuthenticationEventListener and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.appliedAuthenticationEventListener');
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the eventType property value. The eventType property
     * @return AuthenticationEventType|null
    */
    public function getEventType(): ?AuthenticationEventType {
        return $this->eventType;
    }

    /**
     * Gets the executedListenerId property value. The executedListenerId property
     * @return string|null
    */
    public function getExecutedListenerId(): ?string {
        return $this->executedListenerId;
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
        return $this->handlerResult;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('eventType', $this->eventType);
        $writer->writeStringValue('executedListenerId', $this->executedListenerId);
        $writer->writeObjectValue('handlerResult', $this->handlerResult);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the eventType property value. The eventType property
     *  @param AuthenticationEventType|null $value Value to set for the eventType property.
    */
    public function setEventType(?AuthenticationEventType $value ): void {
        $this->eventType = $value;
    }

    /**
     * Sets the executedListenerId property value. The executedListenerId property
     *  @param string|null $value Value to set for the executedListenerId property.
    */
    public function setExecutedListenerId(?string $value ): void {
        $this->executedListenerId = $value;
    }

    /**
     * Sets the handlerResult property value. The handlerResult property
     *  @param AuthenticationEventHandlerResult|null $value Value to set for the handlerResult property.
    */
    public function setHandlerResult(?AuthenticationEventHandlerResult $value ): void {
        $this->handlerResult = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
