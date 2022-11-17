<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsDeviceScopes\Item\TriggerDeviceScopeAction;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TriggerDeviceScopeActionPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new triggerDeviceScopeActionPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TriggerDeviceScopeActionPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TriggerDeviceScopeActionPostRequestBody {
        return new TriggerDeviceScopeActionPostRequestBody();
    }

    /**
     * Gets the actionName property value. Trigger on the service to either START or STOP computing metrics data based on a device scope configuration.
     * @return string|null
    */
    public function getActionName(): ?string {
        return $this->getBackingStore()->get('actionName');
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
     * Gets the deviceScopeId property value. The deviceScopeId property
     * @return string|null
    */
    public function getDeviceScopeId(): ?string {
        return $this->getBackingStore()->get('deviceScopeId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionName' => fn(ParseNode $n) => $o->setActionName($n->getStringValue()),
            'deviceScopeId' => fn(ParseNode $n) => $o->setDeviceScopeId($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actionName', $this->getActionName());
        $writer->writeStringValue('deviceScopeId', $this->getDeviceScopeId());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionName property value. Trigger on the service to either START or STOP computing metrics data based on a device scope configuration.
     *  @param string|null $value Value to set for the actionName property.
    */
    public function setActionName(?string $value): void {
        $this->getBackingStore()->set('actionName', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the deviceScopeId property value. The deviceScopeId property
     *  @param string|null $value Value to set for the deviceScopeId property.
    */
    public function setDeviceScopeId(?string $value): void {
        $this->getBackingStore()->set('deviceScopeId', $value);
    }

}
