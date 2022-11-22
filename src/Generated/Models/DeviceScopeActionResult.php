<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DeviceScopeActionResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new deviceScopeActionResult and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceScopeActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceScopeActionResult {
        return new DeviceScopeActionResult();
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
     * Gets the deviceScopeAction property value. Trigger on the service to either START or STOP computing metrics data based on a device scope configuration.
     * @return string|null
    */
    public function getDeviceScopeAction(): ?string {
        return $this->getBackingStore()->get('deviceScopeAction');
    }

    /**
     * Gets the deviceScopeId property value. The unique identifier of the device scope the action was triggered on.
     * @return string|null
    */
    public function getDeviceScopeId(): ?string {
        return $this->getBackingStore()->get('deviceScopeId');
    }

    /**
     * Gets the failedMessage property value. The message indicates the reason the device scope action failed to trigger.
     * @return string|null
    */
    public function getFailedMessage(): ?string {
        return $this->getBackingStore()->get('failedMessage');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceScopeAction' => fn(ParseNode $n) => $o->setDeviceScopeAction($n->getStringValue()),
            'deviceScopeId' => fn(ParseNode $n) => $o->setDeviceScopeId($n->getStringValue()),
            'failedMessage' => fn(ParseNode $n) => $o->setFailedMessage($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(DeviceScopeActionStatus::class)),
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
     * Gets the status property value. Indicates the status of the attempted device scope action
     * @return DeviceScopeActionStatus|null
    */
    public function getStatus(): ?DeviceScopeActionStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('deviceScopeAction', $this->getDeviceScopeAction());
        $writer->writeStringValue('deviceScopeId', $this->getDeviceScopeId());
        $writer->writeStringValue('failedMessage', $this->getFailedMessage());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the deviceScopeAction property value. Trigger on the service to either START or STOP computing metrics data based on a device scope configuration.
     *  @param string|null $value Value to set for the deviceScopeAction property.
    */
    public function setDeviceScopeAction(?string $value): void {
        $this->getBackingStore()->set('deviceScopeAction', $value);
    }

    /**
     * Sets the deviceScopeId property value. The unique identifier of the device scope the action was triggered on.
     *  @param string|null $value Value to set for the deviceScopeId property.
    */
    public function setDeviceScopeId(?string $value): void {
        $this->getBackingStore()->set('deviceScopeId', $value);
    }

    /**
     * Sets the failedMessage property value. The message indicates the reason the device scope action failed to trigger.
     *  @param string|null $value Value to set for the failedMessage property.
    */
    public function setFailedMessage(?string $value): void {
        $this->getBackingStore()->set('failedMessage', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the status property value. Indicates the status of the attempted device scope action
     *  @param DeviceScopeActionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DeviceScopeActionStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
