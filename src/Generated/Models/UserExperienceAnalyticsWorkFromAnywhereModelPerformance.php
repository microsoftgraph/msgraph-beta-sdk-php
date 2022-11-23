<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsWorkFromAnywhereModelPerformance extends Entity implements Parsable 
{
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
        return $this->getBackingStore()->get('cloudIdentityScore');
    }

    /**
     * Gets the cloudManagementScore property value. The user experience work from anywhere's cloud management score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getCloudManagementScore(): ?float {
        return $this->getBackingStore()->get('cloudManagementScore');
    }

    /**
     * Gets the cloudProvisioningScore property value. The user experience work from anywhere's cloud provisioning score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getCloudProvisioningScore(): ?float {
        return $this->getBackingStore()->get('cloudProvisioningScore');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cloudIdentityScore' => fn(ParseNode $n) => $o->setCloudIdentityScore($n->getFloatValue()),
            'cloudManagementScore' => fn(ParseNode $n) => $o->setCloudManagementScore($n->getFloatValue()),
            'cloudProvisioningScore' => fn(ParseNode $n) => $o->setCloudProvisioningScore($n->getFloatValue()),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(UserExperienceAnalyticsHealthState::class)),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'modelDeviceCount' => fn(ParseNode $n) => $o->setModelDeviceCount($n->getIntegerValue()),
            'windowsScore' => fn(ParseNode $n) => $o->setWindowsScore($n->getFloatValue()),
            'workFromAnywhereScore' => fn(ParseNode $n) => $o->setWorkFromAnywhereScore($n->getFloatValue()),
        ]);
    }

    /**
     * Gets the healthStatus property value. The healthStatus property
     * @return UserExperienceAnalyticsHealthState|null
    */
    public function getHealthStatus(): ?UserExperienceAnalyticsHealthState {
        return $this->getBackingStore()->get('healthStatus');
    }

    /**
     * Gets the manufacturer property value. The user experience work from anywhere's manufacturer name of the devices.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->getBackingStore()->get('manufacturer');
    }

    /**
     * Gets the model property value. The user experience work from anywhere's model name of the devices.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->getBackingStore()->get('model');
    }

    /**
     * Gets the modelDeviceCount property value. The user experience work from anywhere's devices count for the model. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getModelDeviceCount(): ?int {
        return $this->getBackingStore()->get('modelDeviceCount');
    }

    /**
     * Gets the windowsScore property value. The user experience work from anywhere windows score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getWindowsScore(): ?float {
        return $this->getBackingStore()->get('windowsScore');
    }

    /**
     * Gets the workFromAnywhereScore property value. The user experience work from anywhere overall score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getWorkFromAnywhereScore(): ?float {
        return $this->getBackingStore()->get('workFromAnywhereScore');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeFloatValue('cloudIdentityScore', $this->getCloudIdentityScore());
        $writer->writeFloatValue('cloudManagementScore', $this->getCloudManagementScore());
        $writer->writeFloatValue('cloudProvisioningScore', $this->getCloudProvisioningScore());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeIntegerValue('modelDeviceCount', $this->getModelDeviceCount());
        $writer->writeFloatValue('windowsScore', $this->getWindowsScore());
        $writer->writeFloatValue('workFromAnywhereScore', $this->getWorkFromAnywhereScore());
    }

    /**
     * Sets the cloudIdentityScore property value. The user experience work from anywhere's cloud identity score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the cloudIdentityScore property.
    */
    public function setCloudIdentityScore(?float $value): void {
        $this->getBackingStore()->set('cloudIdentityScore', $value);
    }

    /**
     * Sets the cloudManagementScore property value. The user experience work from anywhere's cloud management score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the cloudManagementScore property.
    */
    public function setCloudManagementScore(?float $value): void {
        $this->getBackingStore()->set('cloudManagementScore', $value);
    }

    /**
     * Sets the cloudProvisioningScore property value. The user experience work from anywhere's cloud provisioning score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the cloudProvisioningScore property.
    */
    public function setCloudProvisioningScore(?float $value): void {
        $this->getBackingStore()->set('cloudProvisioningScore', $value);
    }

    /**
     * Sets the healthStatus property value. The healthStatus property
     *  @param UserExperienceAnalyticsHealthState|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?UserExperienceAnalyticsHealthState $value): void {
        $this->getBackingStore()->set('healthStatus', $value);
    }

    /**
     * Sets the manufacturer property value. The user experience work from anywhere's manufacturer name of the devices.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the model property value. The user experience work from anywhere's model name of the devices.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

    /**
     * Sets the modelDeviceCount property value. The user experience work from anywhere's devices count for the model. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the modelDeviceCount property.
    */
    public function setModelDeviceCount(?int $value): void {
        $this->getBackingStore()->set('modelDeviceCount', $value);
    }

    /**
     * Sets the windowsScore property value. The user experience work from anywhere windows score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the windowsScore property.
    */
    public function setWindowsScore(?float $value): void {
        $this->getBackingStore()->set('windowsScore', $value);
    }

    /**
     * Sets the workFromAnywhereScore property value. The user experience work from anywhere overall score for the model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the workFromAnywhereScore property.
    */
    public function setWorkFromAnywhereScore(?float $value): void {
        $this->getBackingStore()->set('workFromAnywhereScore', $value);
    }

}
