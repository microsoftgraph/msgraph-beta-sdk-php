<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicies\MicrosoftGraphSetScheduledRetireState;

use Microsoft\Graph\Beta\Generated\Models\ScheduledRetireState;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SetScheduledRetireStatePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new setScheduledRetireStatePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetScheduledRetireStatePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SetScheduledRetireStatePostRequestBody {
        return new SetScheduledRetireStatePostRequestBody();
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
            'managedDeviceIds' => fn(ParseNode $n) => $o->setManagedDeviceIds($n->getCollectionOfPrimitiveValues()),
            'scopedToAllDevices' => fn(ParseNode $n) => $o->setScopedToAllDevices($n->getBooleanValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(ScheduledRetireState::class)),
        ];
    }

    /**
     * Gets the managedDeviceIds property value. The managedDeviceIds property
     * @return array<string>|null
    */
    public function getManagedDeviceIds(): ?array {
        return $this->getBackingStore()->get('managedDeviceIds');
    }

    /**
     * Gets the scopedToAllDevices property value. The scopedToAllDevices property
     * @return bool|null
    */
    public function getScopedToAllDevices(): ?bool {
        return $this->getBackingStore()->get('scopedToAllDevices');
    }

    /**
     * Gets the state property value. Cancel or confirm scheduled retire 
     * @return ScheduledRetireState|null
    */
    public function getState(): ?ScheduledRetireState {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('managedDeviceIds', $this->getManagedDeviceIds());
        $writer->writeBooleanValue('scopedToAllDevices', $this->getScopedToAllDevices());
        $writer->writeEnumValue('state', $this->getState());
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
     * Sets the managedDeviceIds property value. The managedDeviceIds property
     * @param array<string>|null $value Value to set for the managedDeviceIds property.
    */
    public function setManagedDeviceIds(?array $value): void {
        $this->getBackingStore()->set('managedDeviceIds', $value);
    }

    /**
     * Sets the scopedToAllDevices property value. The scopedToAllDevices property
     * @param bool|null $value Value to set for the scopedToAllDevices property.
    */
    public function setScopedToAllDevices(?bool $value): void {
        $this->getBackingStore()->set('scopedToAllDevices', $value);
    }

    /**
     * Sets the state property value. Cancel or confirm scheduled retire 
     * @param ScheduledRetireState|null $value Value to set for the state property.
    */
    public function setState(?ScheduledRetireState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
