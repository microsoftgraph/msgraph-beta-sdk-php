<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EmbeddedSIMDeviceState extends Entity implements Parsable 
{
    /**
     * Instantiates a new embeddedSIMDeviceState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmbeddedSIMDeviceState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EmbeddedSIMDeviceState {
        return new EmbeddedSIMDeviceState();
    }

    /**
     * Gets the createdDateTime property value. The time the embedded SIM device status was created. Generated service side.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the deviceName property value. Device name to which the subscription was provisioned e.g. DESKTOP-JOE
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->getBackingStore()->get('deviceName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'lastSyncDateTime' => fn(ParseNode $n) => $o->setLastSyncDateTime($n->getDateTimeValue()),
            'modifiedDateTime' => fn(ParseNode $n) => $o->setModifiedDateTime($n->getDateTimeValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(EmbeddedSIMDeviceStateValue::class)),
            'stateDetails' => fn(ParseNode $n) => $o->setStateDetails($n->getStringValue()),
            'universalIntegratedCircuitCardIdentifier' => fn(ParseNode $n) => $o->setUniversalIntegratedCircuitCardIdentifier($n->getStringValue()),
            'userName' => fn(ParseNode $n) => $o->setUserName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastSyncDateTime property value. The time the embedded SIM device last checked in. Updated service side.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastSyncDateTime');
    }

    /**
     * Gets the modifiedDateTime property value. The time the embedded SIM device status was last modified. Updated service side.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('modifiedDateTime');
    }

    /**
     * Gets the state property value. Describes the various states for an embedded SIM activation code.
     * @return EmbeddedSIMDeviceStateValue|null
    */
    public function getState(): ?EmbeddedSIMDeviceStateValue {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Gets the stateDetails property value. String description of the provisioning state.
     * @return string|null
    */
    public function getStateDetails(): ?string {
        return $this->getBackingStore()->get('stateDetails');
    }

    /**
     * Gets the universalIntegratedCircuitCardIdentifier property value. The Universal Integrated Circuit Card Identifier (UICCID) identifying the hardware onto which a profile is to be deployed.
     * @return string|null
    */
    public function getUniversalIntegratedCircuitCardIdentifier(): ?string {
        return $this->getBackingStore()->get('universalIntegratedCircuitCardIdentifier');
    }

    /**
     * Gets the userName property value. Username which the subscription was provisioned to e.g. joe@contoso.com
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->getBackingStore()->get('userName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeDateTimeValue('lastSyncDateTime', $this->getLastSyncDateTime());
        $writer->writeDateTimeValue('modifiedDateTime', $this->getModifiedDateTime());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('stateDetails', $this->getStateDetails());
        $writer->writeStringValue('universalIntegratedCircuitCardIdentifier', $this->getUniversalIntegratedCircuitCardIdentifier());
        $writer->writeStringValue('userName', $this->getUserName());
    }

    /**
     * Sets the createdDateTime property value. The time the embedded SIM device status was created. Generated service side.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deviceName property value. Device name to which the subscription was provisioned e.g. DESKTOP-JOE
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the lastSyncDateTime property value. The time the embedded SIM device last checked in. Updated service side.
     *  @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSyncDateTime', $value);
    }

    /**
     * Sets the modifiedDateTime property value. The time the embedded SIM device status was last modified. Updated service side.
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('modifiedDateTime', $value);
    }

    /**
     * Sets the state property value. Describes the various states for an embedded SIM activation code.
     *  @param EmbeddedSIMDeviceStateValue|null $value Value to set for the state property.
    */
    public function setState(?EmbeddedSIMDeviceStateValue $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the stateDetails property value. String description of the provisioning state.
     *  @param string|null $value Value to set for the stateDetails property.
    */
    public function setStateDetails(?string $value): void {
        $this->getBackingStore()->set('stateDetails', $value);
    }

    /**
     * Sets the universalIntegratedCircuitCardIdentifier property value. The Universal Integrated Circuit Card Identifier (UICCID) identifying the hardware onto which a profile is to be deployed.
     *  @param string|null $value Value to set for the universalIntegratedCircuitCardIdentifier property.
    */
    public function setUniversalIntegratedCircuitCardIdentifier(?string $value): void {
        $this->getBackingStore()->set('universalIntegratedCircuitCardIdentifier', $value);
    }

    /**
     * Sets the userName property value. Username which the subscription was provisioned to e.g. joe@contoso.com
     *  @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value): void {
        $this->getBackingStore()->set('userName', $value);
    }

}
