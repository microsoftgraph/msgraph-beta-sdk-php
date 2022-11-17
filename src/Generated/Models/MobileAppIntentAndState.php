<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppIntentAndState extends Entity implements Parsable 
{
    /**
     * Instantiates a new mobileAppIntentAndState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.mobileAppIntentAndState');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppIntentAndState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppIntentAndState {
        return new MobileAppIntentAndState();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'managedDeviceIdentifier' => fn(ParseNode $n) => $o->setManagedDeviceIdentifier($n->getStringValue()),
            'mobileAppList' => fn(ParseNode $n) => $o->setMobileAppList($n->getCollectionOfObjectValues([MobileAppIntentAndStateDetail::class, 'createFromDiscriminatorValue'])),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the managedDeviceIdentifier property value. Device identifier created or collected by Intune.
     * @return string|null
    */
    public function getManagedDeviceIdentifier(): ?string {
        return $this->getBackingStore()->get('managedDeviceIdentifier');
    }

    /**
     * Gets the mobileAppList property value. The list of payload intents and states for the tenant.
     * @return array<MobileAppIntentAndStateDetail>|null
    */
    public function getMobileAppList(): ?array {
        return $this->getBackingStore()->get('mobileAppList');
    }

    /**
     * Gets the userId property value. Identifier for the user that tried to enroll the device.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->getBackingStore()->get('userId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('managedDeviceIdentifier', $this->getManagedDeviceIdentifier());
        $writer->writeCollectionOfObjectValues('mobileAppList', $this->getMobileAppList());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the managedDeviceIdentifier property value. Device identifier created or collected by Intune.
     *  @param string|null $value Value to set for the managedDeviceIdentifier property.
    */
    public function setManagedDeviceIdentifier(?string $value): void {
        $this->getBackingStore()->set('managedDeviceIdentifier', $value);
    }

    /**
     * Sets the mobileAppList property value. The list of payload intents and states for the tenant.
     *  @param array<MobileAppIntentAndStateDetail>|null $value Value to set for the mobileAppList property.
    */
    public function setMobileAppList(?array $value): void {
        $this->getBackingStore()->set('mobileAppList', $value);
    }

    /**
     * Sets the userId property value. Identifier for the user that tried to enroll the device.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
