<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsWorkFromAnywhereModelPerformance extends Entity implements Parsable 
{
    /**
     * @var float|null $cloudIdentityScore The user experience work from anywhere's cloud identity score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    */
    private ?float $cloudIdentityScore = null;
    
    /**
     * @var float|null $cloudManagementScore The user experience work from anywhere's cloud management score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    */
    private ?float $cloudManagementScore = null;
    
    /**
     * @var float|null $cloudProvisioningScore The user experience work from anywhere's cloud provisioning score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    */
    private ?float $cloudProvisioningScore = null;
    
    /**
     * @var UserExperienceAnalyticsHealthState|null $healthStatus The health state of the user experience analytics work from anywhere model. Possible values are: unknown, insufficientData, needsAttention, meetingGoals.
    */
    private ?UserExperienceAnalyticsHealthState $healthStatus = null;
    
    /**
     * @var string|null $manufacturer The user experience work from anywhere's manufacturer name of the devices.
    */
    private ?string $manufacturer = null;
    
    /**
     * @var string|null $model The user experience work from anywhere's model name of the devices.
    */
    private ?string $model = null;
    
    /**
     * @var int|null $modelDeviceCount The user experience work from anywhere's devices count for the model. Valid values -2147483648 to 2147483647
    */
    private ?int $modelDeviceCount = null;
    
    /**
     * @var float|null $windowsScore The user experience work from anywhere windows score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    */
    private ?float $windowsScore = null;
    
    /**
     * @var float|null $workFromAnywhereScore The user experience work from anywhere overall score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    */
    private ?float $workFromAnywhereScore = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsWorkFromAnywhereModelPerformance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsWorkFromAnywhereModelPerformance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsWorkFromAnywhereModelPerformance {
        return new UserExperienceAnalyticsWorkFromAnywhereModelPerformance();
    }

    /**
     * Gets the cloudIdentityScore property value. The user experience work from anywhere's cloud identity score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getCloudIdentityScore(): ?float {
        return $this->cloudIdentityScore;
    }

    /**
     * Gets the cloudManagementScore property value. The user experience work from anywhere's cloud management score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getCloudManagementScore(): ?float {
        return $this->cloudManagementScore;
    }

    /**
     * Gets the cloudProvisioningScore property value. The user experience work from anywhere's cloud provisioning score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getCloudProvisioningScore(): ?float {
        return $this->cloudProvisioningScore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cloudIdentityScore' => function (ParseNode $n) use ($o) { $o->setCloudIdentityScore($n->getFloatValue()); },
            'cloudManagementScore' => function (ParseNode $n) use ($o) { $o->setCloudManagementScore($n->getFloatValue()); },
            'cloudProvisioningScore' => function (ParseNode $n) use ($o) { $o->setCloudProvisioningScore($n->getFloatValue()); },
            'healthStatus' => function (ParseNode $n) use ($o) { $o->setHealthStatus($n->getEnumValue(UserExperienceAnalyticsHealthState::class)); },
            'manufacturer' => function (ParseNode $n) use ($o) { $o->setManufacturer($n->getStringValue()); },
            'model' => function (ParseNode $n) use ($o) { $o->setModel($n->getStringValue()); },
            'modelDeviceCount' => function (ParseNode $n) use ($o) { $o->setModelDeviceCount($n->getIntegerValue()); },
            'windowsScore' => function (ParseNode $n) use ($o) { $o->setWindowsScore($n->getFloatValue()); },
            'workFromAnywhereScore' => function (ParseNode $n) use ($o) { $o->setWorkFromAnywhereScore($n->getFloatValue()); },
        ]);
    }

    /**
     * Gets the healthStatus property value. The health state of the user experience analytics work from anywhere model. Possible values are: unknown, insufficientData, needsAttention, meetingGoals.
     * @return UserExperienceAnalyticsHealthState|null
    */
    public function getHealthStatus(): ?UserExperienceAnalyticsHealthState {
        return $this->healthStatus;
    }

    /**
     * Gets the manufacturer property value. The user experience work from anywhere's manufacturer name of the devices.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->manufacturer;
    }

    /**
     * Gets the model property value. The user experience work from anywhere's model name of the devices.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->model;
    }

    /**
     * Gets the modelDeviceCount property value. The user experience work from anywhere's devices count for the model. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getModelDeviceCount(): ?int {
        return $this->modelDeviceCount;
    }

    /**
     * Gets the windowsScore property value. The user experience work from anywhere windows score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getWindowsScore(): ?float {
        return $this->windowsScore;
    }

    /**
     * Gets the workFromAnywhereScore property value. The user experience work from anywhere overall score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getWorkFromAnywhereScore(): ?float {
        return $this->workFromAnywhereScore;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeFloatValue('cloudIdentityScore', $this->cloudIdentityScore);
        $writer->writeFloatValue('cloudManagementScore', $this->cloudManagementScore);
        $writer->writeFloatValue('cloudProvisioningScore', $this->cloudProvisioningScore);
        $writer->writeEnumValue('healthStatus', $this->healthStatus);
        $writer->writeStringValue('manufacturer', $this->manufacturer);
        $writer->writeStringValue('model', $this->model);
        $writer->writeIntegerValue('modelDeviceCount', $this->modelDeviceCount);
        $writer->writeFloatValue('windowsScore', $this->windowsScore);
        $writer->writeFloatValue('workFromAnywhereScore', $this->workFromAnywhereScore);
    }

    /**
     * Sets the cloudIdentityScore property value. The user experience work from anywhere's cloud identity score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the cloudIdentityScore property.
    */
    public function setCloudIdentityScore(?float $value ): void {
        $this->cloudIdentityScore = $value;
    }

    /**
     * Sets the cloudManagementScore property value. The user experience work from anywhere's cloud management score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the cloudManagementScore property.
    */
    public function setCloudManagementScore(?float $value ): void {
        $this->cloudManagementScore = $value;
    }

    /**
     * Sets the cloudProvisioningScore property value. The user experience work from anywhere's cloud provisioning score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the cloudProvisioningScore property.
    */
    public function setCloudProvisioningScore(?float $value ): void {
        $this->cloudProvisioningScore = $value;
    }

    /**
     * Sets the healthStatus property value. The health state of the user experience analytics work from anywhere model. Possible values are: unknown, insufficientData, needsAttention, meetingGoals.
     *  @param UserExperienceAnalyticsHealthState|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?UserExperienceAnalyticsHealthState $value ): void {
        $this->healthStatus = $value;
    }

    /**
     * Sets the manufacturer property value. The user experience work from anywhere's manufacturer name of the devices.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value ): void {
        $this->manufacturer = $value;
    }

    /**
     * Sets the model property value. The user experience work from anywhere's model name of the devices.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value ): void {
        $this->model = $value;
    }

    /**
     * Sets the modelDeviceCount property value. The user experience work from anywhere's devices count for the model. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the modelDeviceCount property.
    */
    public function setModelDeviceCount(?int $value ): void {
        $this->modelDeviceCount = $value;
    }

    /**
     * Sets the windowsScore property value. The user experience work from anywhere windows score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the windowsScore property.
    */
    public function setWindowsScore(?float $value ): void {
        $this->windowsScore = $value;
    }

    /**
     * Sets the workFromAnywhereScore property value. The user experience work from anywhere overall score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the workFromAnywhereScore property.
    */
    public function setWorkFromAnywhereScore(?float $value ): void {
        $this->workFromAnywhereScore = $value;
    }

}
