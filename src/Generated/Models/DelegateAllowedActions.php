<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DelegateAllowedActions implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DelegateAllowedActions and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DelegateAllowedActions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DelegateAllowedActions {
        return new DelegateAllowedActions();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'joinActiveCalls' => fn(ParseNode $n) => $o->setJoinActiveCalls($n->getBooleanValue()),
            'makeCalls' => fn(ParseNode $n) => $o->setMakeCalls($n->getBooleanValue()),
            'manageCallAndDelegateSettings' => fn(ParseNode $n) => $o->setManageCallAndDelegateSettings($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'pickUpHeldCalls' => fn(ParseNode $n) => $o->setPickUpHeldCalls($n->getBooleanValue()),
            'receiveCalls' => fn(ParseNode $n) => $o->setReceiveCalls($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the joinActiveCalls property value. Indicates whether the delegator or delegate allows participation in active calls.
     * @return bool|null
    */
    public function getJoinActiveCalls(): ?bool {
        $val = $this->getBackingStore()->get('joinActiveCalls');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'joinActiveCalls'");
    }

    /**
     * Gets the makeCalls property value. Indicates whether the delegator or delegate allows calls to be made on their behalf.
     * @return bool|null
    */
    public function getMakeCalls(): ?bool {
        $val = $this->getBackingStore()->get('makeCalls');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'makeCalls'");
    }

    /**
     * Gets the manageCallAndDelegateSettings property value. Indicates whether the delegator or delegate allows the management of call and delegation settings.
     * @return bool|null
    */
    public function getManageCallAndDelegateSettings(): ?bool {
        $val = $this->getBackingStore()->get('manageCallAndDelegateSettings');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'manageCallAndDelegateSettings'");
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
     * Gets the pickUpHeldCalls property value. Indicates whether the delegator or delegate allows held calls to be picked up.
     * @return bool|null
    */
    public function getPickUpHeldCalls(): ?bool {
        $val = $this->getBackingStore()->get('pickUpHeldCalls');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pickUpHeldCalls'");
    }

    /**
     * Gets the receiveCalls property value. Indicates whether the delegator or delegate allows calls to be received on their behalf.
     * @return bool|null
    */
    public function getReceiveCalls(): ?bool {
        $val = $this->getBackingStore()->get('receiveCalls');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'receiveCalls'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('joinActiveCalls', $this->getJoinActiveCalls());
        $writer->writeBooleanValue('makeCalls', $this->getMakeCalls());
        $writer->writeBooleanValue('manageCallAndDelegateSettings', $this->getManageCallAndDelegateSettings());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('pickUpHeldCalls', $this->getPickUpHeldCalls());
        $writer->writeBooleanValue('receiveCalls', $this->getReceiveCalls());
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
     * Sets the joinActiveCalls property value. Indicates whether the delegator or delegate allows participation in active calls.
     * @param bool|null $value Value to set for the joinActiveCalls property.
    */
    public function setJoinActiveCalls(?bool $value): void {
        $this->getBackingStore()->set('joinActiveCalls', $value);
    }

    /**
     * Sets the makeCalls property value. Indicates whether the delegator or delegate allows calls to be made on their behalf.
     * @param bool|null $value Value to set for the makeCalls property.
    */
    public function setMakeCalls(?bool $value): void {
        $this->getBackingStore()->set('makeCalls', $value);
    }

    /**
     * Sets the manageCallAndDelegateSettings property value. Indicates whether the delegator or delegate allows the management of call and delegation settings.
     * @param bool|null $value Value to set for the manageCallAndDelegateSettings property.
    */
    public function setManageCallAndDelegateSettings(?bool $value): void {
        $this->getBackingStore()->set('manageCallAndDelegateSettings', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the pickUpHeldCalls property value. Indicates whether the delegator or delegate allows held calls to be picked up.
     * @param bool|null $value Value to set for the pickUpHeldCalls property.
    */
    public function setPickUpHeldCalls(?bool $value): void {
        $this->getBackingStore()->set('pickUpHeldCalls', $value);
    }

    /**
     * Sets the receiveCalls property value. Indicates whether the delegator or delegate allows calls to be received on their behalf.
     * @param bool|null $value Value to set for the receiveCalls property.
    */
    public function setReceiveCalls(?bool $value): void {
        $this->getBackingStore()->set('receiveCalls', $value);
    }

}
