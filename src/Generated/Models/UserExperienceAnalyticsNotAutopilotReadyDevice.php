<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics Device not windows autopilot ready.
*/
class UserExperienceAnalyticsNotAutopilotReadyDevice extends Entity implements Parsable 
{
    /**
     * Instantiates a new userExperienceAnalyticsNotAutopilotReadyDevice and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsNotAutopilotReadyDevice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsNotAutopilotReadyDevice {
        return new UserExperienceAnalyticsNotAutopilotReadyDevice();
    }

    /**
     * Gets the autoPilotProfileAssigned property value. The intune device's autopilotProfileAssigned.
     * @return bool|null
    */
    public function getAutoPilotProfileAssigned(): ?bool {
        return $this->getBackingStore()->get('autoPilotProfileAssigned');
    }

    /**
     * Gets the autoPilotRegistered property value. The intune device's autopilotRegistered.
     * @return bool|null
    */
    public function getAutoPilotRegistered(): ?bool {
        return $this->getBackingStore()->get('autoPilotRegistered');
    }

    /**
     * Gets the azureAdJoinType property value. The intune device's azure Ad joinType.
     * @return string|null
    */
    public function getAzureAdJoinType(): ?string {
        return $this->getBackingStore()->get('azureAdJoinType');
    }

    /**
     * Gets the azureAdRegistered property value. The intune device's azureAdRegistered.
     * @return bool|null
    */
    public function getAzureAdRegistered(): ?bool {
        return $this->getBackingStore()->get('azureAdRegistered');
    }

    /**
     * Gets the deviceName property value. The intune device's name.
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
            'autoPilotProfileAssigned' => fn(ParseNode $n) => $o->setAutoPilotProfileAssigned($n->getBooleanValue()),
            'autoPilotRegistered' => fn(ParseNode $n) => $o->setAutoPilotRegistered($n->getBooleanValue()),
            'azureAdJoinType' => fn(ParseNode $n) => $o->setAzureAdJoinType($n->getStringValue()),
            'azureAdRegistered' => fn(ParseNode $n) => $o->setAzureAdRegistered($n->getBooleanValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'managedBy' => fn(ParseNode $n) => $o->setManagedBy($n->getStringValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'serialNumber' => fn(ParseNode $n) => $o->setSerialNumber($n->getStringValue()),
        ]);
    }

    /**
     * Gets the managedBy property value. The intune device's managed by.
     * @return string|null
    */
    public function getManagedBy(): ?string {
        return $this->getBackingStore()->get('managedBy');
    }

    /**
     * Gets the manufacturer property value. The intune device's manufacturer.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->getBackingStore()->get('manufacturer');
    }

    /**
     * Gets the model property value. The intune device's model.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->getBackingStore()->get('model');
    }

    /**
     * Gets the serialNumber property value. The intune device's serial number.
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        return $this->getBackingStore()->get('serialNumber');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('autoPilotProfileAssigned', $this->getAutoPilotProfileAssigned());
        $writer->writeBooleanValue('autoPilotRegistered', $this->getAutoPilotRegistered());
        $writer->writeStringValue('azureAdJoinType', $this->getAzureAdJoinType());
        $writer->writeBooleanValue('azureAdRegistered', $this->getAzureAdRegistered());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('managedBy', $this->getManagedBy());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeStringValue('serialNumber', $this->getSerialNumber());
    }

    /**
     * Sets the autoPilotProfileAssigned property value. The intune device's autopilotProfileAssigned.
     * @param bool|null $value Value to set for the autoPilotProfileAssigned property.
    */
    public function setAutoPilotProfileAssigned(?bool $value): void {
        $this->getBackingStore()->set('autoPilotProfileAssigned', $value);
    }

    /**
     * Sets the autoPilotRegistered property value. The intune device's autopilotRegistered.
     * @param bool|null $value Value to set for the autoPilotRegistered property.
    */
    public function setAutoPilotRegistered(?bool $value): void {
        $this->getBackingStore()->set('autoPilotRegistered', $value);
    }

    /**
     * Sets the azureAdJoinType property value. The intune device's azure Ad joinType.
     * @param string|null $value Value to set for the azureAdJoinType property.
    */
    public function setAzureAdJoinType(?string $value): void {
        $this->getBackingStore()->set('azureAdJoinType', $value);
    }

    /**
     * Sets the azureAdRegistered property value. The intune device's azureAdRegistered.
     * @param bool|null $value Value to set for the azureAdRegistered property.
    */
    public function setAzureAdRegistered(?bool $value): void {
        $this->getBackingStore()->set('azureAdRegistered', $value);
    }

    /**
     * Sets the deviceName property value. The intune device's name.
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the managedBy property value. The intune device's managed by.
     * @param string|null $value Value to set for the managedBy property.
    */
    public function setManagedBy(?string $value): void {
        $this->getBackingStore()->set('managedBy', $value);
    }

    /**
     * Sets the manufacturer property value. The intune device's manufacturer.
     * @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the model property value. The intune device's model.
     * @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

    /**
     * Sets the serialNumber property value. The intune device's serial number.
     * @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value): void {
        $this->getBackingStore()->set('serialNumber', $value);
    }

}
