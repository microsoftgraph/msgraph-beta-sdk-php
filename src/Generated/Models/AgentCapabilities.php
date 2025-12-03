<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AgentCapabilities implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AgentCapabilities and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgentCapabilities
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgentCapabilities {
        return new AgentCapabilities();
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
     * Gets the extensions property value. A list of protocol extensions supported by the agent.
     * @return array<AgentExtension>|null
    */
    public function getExtensions(): ?array {
        $val = $this->getBackingStore()->get('extensions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AgentExtension::class);
            /** @var array<AgentExtension>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getCollectionOfObjectValues([AgentExtension::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'pushNotifications' => fn(ParseNode $n) => $o->setPushNotifications($n->getBooleanValue()),
            'stateTransitionHistory' => fn(ParseNode $n) => $o->setStateTransitionHistory($n->getBooleanValue()),
            'streaming' => fn(ParseNode $n) => $o->setStreaming($n->getBooleanValue()),
        ];
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
     * Gets the pushNotifications property value. Indicates if the agent supports sending push notifications for asynchronous task updates.
     * @return bool|null
    */
    public function getPushNotifications(): ?bool {
        $val = $this->getBackingStore()->get('pushNotifications');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pushNotifications'");
    }

    /**
     * Gets the stateTransitionHistory property value. Indicates if the agent provides a history of state transitions for a task.
     * @return bool|null
    */
    public function getStateTransitionHistory(): ?bool {
        $val = $this->getBackingStore()->get('stateTransitionHistory');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'stateTransitionHistory'");
    }

    /**
     * Gets the streaming property value. Indicates if the agent supports Server-Sent Events (SSE) for streaming responses.
     * @return bool|null
    */
    public function getStreaming(): ?bool {
        $val = $this->getBackingStore()->get('streaming');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'streaming'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('extensions', $this->getExtensions());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('pushNotifications', $this->getPushNotifications());
        $writer->writeBooleanValue('stateTransitionHistory', $this->getStateTransitionHistory());
        $writer->writeBooleanValue('streaming', $this->getStreaming());
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
     * Sets the extensions property value. A list of protocol extensions supported by the agent.
     * @param array<AgentExtension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the pushNotifications property value. Indicates if the agent supports sending push notifications for asynchronous task updates.
     * @param bool|null $value Value to set for the pushNotifications property.
    */
    public function setPushNotifications(?bool $value): void {
        $this->getBackingStore()->set('pushNotifications', $value);
    }

    /**
     * Sets the stateTransitionHistory property value. Indicates if the agent provides a history of state transitions for a task.
     * @param bool|null $value Value to set for the stateTransitionHistory property.
    */
    public function setStateTransitionHistory(?bool $value): void {
        $this->getBackingStore()->set('stateTransitionHistory', $value);
    }

    /**
     * Sets the streaming property value. Indicates if the agent supports Server-Sent Events (SSE) for streaming responses.
     * @param bool|null $value Value to set for the streaming property.
    */
    public function setStreaming(?bool $value): void {
        $this->getBackingStore()->set('streaming', $value);
    }

}
