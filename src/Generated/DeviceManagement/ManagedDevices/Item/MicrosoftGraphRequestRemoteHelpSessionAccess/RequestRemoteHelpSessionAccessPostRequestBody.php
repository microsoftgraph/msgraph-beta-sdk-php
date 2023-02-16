<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphRequestRemoteHelpSessionAccess;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class RequestRemoteHelpSessionAccessPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new requestRemoteHelpSessionAccessPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RequestRemoteHelpSessionAccessPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RequestRemoteHelpSessionAccessPostRequestBody {
        return new RequestRemoteHelpSessionAccessPostRequestBody();
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
            'pubSubConnectionId' => fn(ParseNode $n) => $o->setPubSubConnectionId($n->getStringValue()),
            'sessionKey' => fn(ParseNode $n) => $o->setSessionKey($n->getStringValue()),
        ];
    }

    /**
     * Gets the pubSubConnectionId property value. The pubSubConnectionId property
     * @return string|null
    */
    public function getPubSubConnectionId(): ?string {
        return $this->getBackingStore()->get('pubSubConnectionId');
    }

    /**
     * Gets the sessionKey property value. The sessionKey property
     * @return string|null
    */
    public function getSessionKey(): ?string {
        return $this->getBackingStore()->get('sessionKey');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('pubSubConnectionId', $this->getPubSubConnectionId());
        $writer->writeStringValue('sessionKey', $this->getSessionKey());
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
     * Sets the pubSubConnectionId property value. The pubSubConnectionId property
     * @param string|null $value Value to set for the pubSubConnectionId property.
    */
    public function setPubSubConnectionId(?string $value): void {
        $this->getBackingStore()->set('pubSubConnectionId', $value);
    }

    /**
     * Sets the sessionKey property value. The sessionKey property
     * @param string|null $value Value to set for the sessionKey property.
    */
    public function setSessionKey(?string $value): void {
        $this->getBackingStore()->set('sessionKey', $value);
    }

}
