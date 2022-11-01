<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsNotAutopilotReadyDevice extends Entity implements Parsable 
{
    /**
     * @var bool|null $autoPilotProfileAssigned The intune device's autopilotProfileAssigned.
    */
    private ?bool $autoPilotProfileAssigned = null;
    
    /**
     * @var bool|null $autoPilotRegistered The intune device's autopilotRegistered.
    */
    private ?bool $autoPilotRegistered = null;
    
    /**
     * @var string|null $azureAdJoinType The intune device's azure Ad joinType.
    */
    private ?string $azureAdJoinType = null;
    
    /**
     * @var bool|null $azureAdRegistered The intune device's azureAdRegistered.
    */
    private ?bool $azureAdRegistered = null;
    
    /**
     * @var string|null $deviceName The intune device's name.
    */
    private ?string $deviceName = null;
    
    /**
     * @var string|null $managedBy The intune device's managed by.
    */
    private ?string $managedBy = null;
    
    /**
     * @var string|null $manufacturer The intune device's manufacturer.
    */
    private ?string $manufacturer = null;
    
    /**
     * @var string|null $model The intune device's model.
    */
    private ?string $model = null;
    
    /**
     * @var string|null $serialNumber The intune device's serial number.
    */
    private ?string $serialNumber = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsNotAutopilotReadyDevice and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userExperienceAnalyticsNotAutopilotReadyDevice');
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
        return $this->autoPilotProfileAssigned;
    }

    /**
     * Gets the autoPilotRegistered property value. The intune device's autopilotRegistered.
     * @return bool|null
    */
    public function getAutoPilotRegistered(): ?bool {
        return $this->autoPilotRegistered;
    }

    /**
     * Gets the azureAdJoinType property value. The intune device's azure Ad joinType.
     * @return string|null
    */
    public function getAzureAdJoinType(): ?string {
        return $this->azureAdJoinType;
    }

    /**
     * Gets the azureAdRegistered property value. The intune device's azureAdRegistered.
     * @return bool|null
    */
    public function getAzureAdRegistered(): ?bool {
        return $this->azureAdRegistered;
    }

    /**
     * Gets the deviceName property value. The intune device's name.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
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
        return $this->managedBy;
    }

    /**
     * Gets the manufacturer property value. The intune device's manufacturer.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->manufacturer;
    }

    /**
     * Gets the model property value. The intune device's model.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->model;
    }

    /**
     * Gets the serialNumber property value. The intune device's serial number.
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        return $this->serialNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('autoPilotProfileAssigned', $this->autoPilotProfileAssigned);
        $writer->writeBooleanValue('autoPilotRegistered', $this->autoPilotRegistered);
        $writer->writeStringValue('azureAdJoinType', $this->azureAdJoinType);
        $writer->writeBooleanValue('azureAdRegistered', $this->azureAdRegistered);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeStringValue('managedBy', $this->managedBy);
        $writer->writeStringValue('manufacturer', $this->manufacturer);
        $writer->writeStringValue('model', $this->model);
        $writer->writeStringValue('serialNumber', $this->serialNumber);
    }

    /**
     * Sets the autoPilotProfileAssigned property value. The intune device's autopilotProfileAssigned.
     *  @param bool|null $value Value to set for the autoPilotProfileAssigned property.
    */
    public function setAutoPilotProfileAssigned(?bool $value ): void {
        $this->autoPilotProfileAssigned = $value;
    }

    /**
     * Sets the autoPilotRegistered property value. The intune device's autopilotRegistered.
     *  @param bool|null $value Value to set for the autoPilotRegistered property.
    */
    public function setAutoPilotRegistered(?bool $value ): void {
        $this->autoPilotRegistered = $value;
    }

    /**
     * Sets the azureAdJoinType property value. The intune device's azure Ad joinType.
     *  @param string|null $value Value to set for the azureAdJoinType property.
    */
    public function setAzureAdJoinType(?string $value ): void {
        $this->azureAdJoinType = $value;
    }

    /**
     * Sets the azureAdRegistered property value. The intune device's azureAdRegistered.
     *  @param bool|null $value Value to set for the azureAdRegistered property.
    */
    public function setAzureAdRegistered(?bool $value ): void {
        $this->azureAdRegistered = $value;
    }

    /**
     * Sets the deviceName property value. The intune device's name.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the managedBy property value. The intune device's managed by.
     *  @param string|null $value Value to set for the managedBy property.
    */
    public function setManagedBy(?string $value ): void {
        $this->managedBy = $value;
    }

    /**
     * Sets the manufacturer property value. The intune device's manufacturer.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value ): void {
        $this->manufacturer = $value;
    }

    /**
     * Sets the model property value. The intune device's model.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value ): void {
        $this->model = $value;
    }

    /**
     * Sets the serialNumber property value. The intune device's serial number.
     *  @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value ): void {
        $this->serialNumber = $value;
    }

}
