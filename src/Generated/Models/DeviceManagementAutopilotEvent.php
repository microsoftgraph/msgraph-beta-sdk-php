<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Represents an Autopilot flow event.
*/
class DeviceManagementAutopilotEvent extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementAutopilotEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementAutopilotEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementAutopilotEvent {
        return new DeviceManagementAutopilotEvent();
    }

    /**
     * Gets the accountSetupDuration property value. Time spent in user ESP.
     * @return DateInterval|null
    */
    public function getAccountSetupDuration(): ?DateInterval {
        $val = $this->getBackingStore()->get('accountSetupDuration');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountSetupDuration'");
    }

    /**
     * Gets the accountSetupStatus property value. Deployment states for Autopilot devices
     * @return WindowsAutopilotDeploymentState|null
    */
    public function getAccountSetupStatus(): ?WindowsAutopilotDeploymentState {
        $val = $this->getBackingStore()->get('accountSetupStatus');
        if (is_null($val) || $val instanceof WindowsAutopilotDeploymentState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountSetupStatus'");
    }

    /**
     * Gets the deploymentDuration property value. Autopilot deployment duration including enrollment.
     * @return DateInterval|null
    */
    public function getDeploymentDuration(): ?DateInterval {
        $val = $this->getBackingStore()->get('deploymentDuration');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentDuration'");
    }

    /**
     * Gets the deploymentEndDateTime property value. Deployment end time.
     * @return DateTime|null
    */
    public function getDeploymentEndDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('deploymentEndDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentEndDateTime'");
    }

    /**
     * Gets the deploymentStartDateTime property value. Deployment start time.
     * @return DateTime|null
    */
    public function getDeploymentStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('deploymentStartDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentStartDateTime'");
    }

    /**
     * Gets the deploymentState property value. Deployment states for Autopilot devices
     * @return WindowsAutopilotDeploymentState|null
    */
    public function getDeploymentState(): ?WindowsAutopilotDeploymentState {
        $val = $this->getBackingStore()->get('deploymentState');
        if (is_null($val) || $val instanceof WindowsAutopilotDeploymentState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentState'");
    }

    /**
     * Gets the deploymentTotalDuration property value. Total deployment duration from enrollment to Desktop screen.
     * @return DateInterval|null
    */
    public function getDeploymentTotalDuration(): ?DateInterval {
        $val = $this->getBackingStore()->get('deploymentTotalDuration');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentTotalDuration'");
    }

    /**
     * Gets the deviceId property value. Device id associated with the object
     * @return string|null
    */
    public function getDeviceId(): ?string {
        $val = $this->getBackingStore()->get('deviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceId'");
    }

    /**
     * Gets the devicePreparationDuration property value. Time spent in device enrollment.
     * @return DateInterval|null
    */
    public function getDevicePreparationDuration(): ?DateInterval {
        $val = $this->getBackingStore()->get('devicePreparationDuration');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'devicePreparationDuration'");
    }

    /**
     * Gets the deviceRegisteredDateTime property value. Device registration date.
     * @return DateTime|null
    */
    public function getDeviceRegisteredDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('deviceRegisteredDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceRegisteredDateTime'");
    }

    /**
     * Gets the deviceSerialNumber property value. Device serial number.
     * @return string|null
    */
    public function getDeviceSerialNumber(): ?string {
        $val = $this->getBackingStore()->get('deviceSerialNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceSerialNumber'");
    }

    /**
     * Gets the deviceSetupDuration property value. Time spent in device ESP.
     * @return DateInterval|null
    */
    public function getDeviceSetupDuration(): ?DateInterval {
        $val = $this->getBackingStore()->get('deviceSetupDuration');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceSetupDuration'");
    }

    /**
     * Gets the deviceSetupStatus property value. Deployment states for Autopilot devices
     * @return WindowsAutopilotDeploymentState|null
    */
    public function getDeviceSetupStatus(): ?WindowsAutopilotDeploymentState {
        $val = $this->getBackingStore()->get('deviceSetupStatus');
        if (is_null($val) || $val instanceof WindowsAutopilotDeploymentState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceSetupStatus'");
    }

    /**
     * Gets the enrollmentFailureDetails property value. Enrollment failure details.
     * @return string|null
    */
    public function getEnrollmentFailureDetails(): ?string {
        $val = $this->getBackingStore()->get('enrollmentFailureDetails');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentFailureDetails'");
    }

    /**
     * Gets the enrollmentStartDateTime property value. Device enrollment start date.
     * @return DateTime|null
    */
    public function getEnrollmentStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('enrollmentStartDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentStartDateTime'");
    }

    /**
     * Gets the enrollmentState property value. The enrollmentState property
     * @return EnrollmentState|null
    */
    public function getEnrollmentState(): ?EnrollmentState {
        $val = $this->getBackingStore()->get('enrollmentState');
        if (is_null($val) || $val instanceof EnrollmentState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentState'");
    }

    /**
     * Gets the enrollmentType property value. The enrollmentType property
     * @return WindowsAutopilotEnrollmentType|null
    */
    public function getEnrollmentType(): ?WindowsAutopilotEnrollmentType {
        $val = $this->getBackingStore()->get('enrollmentType');
        if (is_null($val) || $val instanceof WindowsAutopilotEnrollmentType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentType'");
    }

    /**
     * Gets the eventDateTime property value. Time when the event occurred .
     * @return DateTime|null
    */
    public function getEventDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('eventDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountSetupDuration' => fn(ParseNode $n) => $o->setAccountSetupDuration($n->getDateIntervalValue()),
            'accountSetupStatus' => fn(ParseNode $n) => $o->setAccountSetupStatus($n->getEnumValue(WindowsAutopilotDeploymentState::class)),
            'deploymentDuration' => fn(ParseNode $n) => $o->setDeploymentDuration($n->getDateIntervalValue()),
            'deploymentEndDateTime' => fn(ParseNode $n) => $o->setDeploymentEndDateTime($n->getDateTimeValue()),
            'deploymentStartDateTime' => fn(ParseNode $n) => $o->setDeploymentStartDateTime($n->getDateTimeValue()),
            'deploymentState' => fn(ParseNode $n) => $o->setDeploymentState($n->getEnumValue(WindowsAutopilotDeploymentState::class)),
            'deploymentTotalDuration' => fn(ParseNode $n) => $o->setDeploymentTotalDuration($n->getDateIntervalValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'devicePreparationDuration' => fn(ParseNode $n) => $o->setDevicePreparationDuration($n->getDateIntervalValue()),
            'deviceRegisteredDateTime' => fn(ParseNode $n) => $o->setDeviceRegisteredDateTime($n->getDateTimeValue()),
            'deviceSerialNumber' => fn(ParseNode $n) => $o->setDeviceSerialNumber($n->getStringValue()),
            'deviceSetupDuration' => fn(ParseNode $n) => $o->setDeviceSetupDuration($n->getDateIntervalValue()),
            'deviceSetupStatus' => fn(ParseNode $n) => $o->setDeviceSetupStatus($n->getEnumValue(WindowsAutopilotDeploymentState::class)),
            'enrollmentFailureDetails' => fn(ParseNode $n) => $o->setEnrollmentFailureDetails($n->getStringValue()),
            'enrollmentStartDateTime' => fn(ParseNode $n) => $o->setEnrollmentStartDateTime($n->getDateTimeValue()),
            'enrollmentState' => fn(ParseNode $n) => $o->setEnrollmentState($n->getEnumValue(EnrollmentState::class)),
            'enrollmentType' => fn(ParseNode $n) => $o->setEnrollmentType($n->getEnumValue(WindowsAutopilotEnrollmentType::class)),
            'eventDateTime' => fn(ParseNode $n) => $o->setEventDateTime($n->getDateTimeValue()),
            'managedDeviceName' => fn(ParseNode $n) => $o->setManagedDeviceName($n->getStringValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
            'policyStatusDetails' => fn(ParseNode $n) => $o->setPolicyStatusDetails($n->getCollectionOfObjectValues([DeviceManagementAutopilotPolicyStatusDetail::class, 'createFromDiscriminatorValue'])),
            'targetedAppCount' => fn(ParseNode $n) => $o->setTargetedAppCount($n->getIntegerValue()),
            'targetedPolicyCount' => fn(ParseNode $n) => $o->setTargetedPolicyCount($n->getIntegerValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
            'windows10EnrollmentCompletionPageConfigurationDisplayName' => fn(ParseNode $n) => $o->setWindows10EnrollmentCompletionPageConfigurationDisplayName($n->getStringValue()),
            'windows10EnrollmentCompletionPageConfigurationId' => fn(ParseNode $n) => $o->setWindows10EnrollmentCompletionPageConfigurationId($n->getStringValue()),
            'windowsAutopilotDeploymentProfileDisplayName' => fn(ParseNode $n) => $o->setWindowsAutopilotDeploymentProfileDisplayName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the managedDeviceName property value. Managed device name.
     * @return string|null
    */
    public function getManagedDeviceName(): ?string {
        $val = $this->getBackingStore()->get('managedDeviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceName'");
    }

    /**
     * Gets the osVersion property value. Device operating system version.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        $val = $this->getBackingStore()->get('osVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osVersion'");
    }

    /**
     * Gets the policyStatusDetails property value. Policy and application status details for this device.
     * @return array<DeviceManagementAutopilotPolicyStatusDetail>|null
    */
    public function getPolicyStatusDetails(): ?array {
        $val = $this->getBackingStore()->get('policyStatusDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementAutopilotPolicyStatusDetail::class);
            /** @var array<DeviceManagementAutopilotPolicyStatusDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyStatusDetails'");
    }

    /**
     * Gets the targetedAppCount property value. Count of applications targeted.
     * @return int|null
    */
    public function getTargetedAppCount(): ?int {
        $val = $this->getBackingStore()->get('targetedAppCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetedAppCount'");
    }

    /**
     * Gets the targetedPolicyCount property value. Count of policies targeted.
     * @return int|null
    */
    public function getTargetedPolicyCount(): ?int {
        $val = $this->getBackingStore()->get('targetedPolicyCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetedPolicyCount'");
    }

    /**
     * Gets the userPrincipalName property value. User principal name used to enroll the device.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Gets the windows10EnrollmentCompletionPageConfigurationDisplayName property value. Enrollment Status Page profile name
     * @return string|null
    */
    public function getWindows10EnrollmentCompletionPageConfigurationDisplayName(): ?string {
        $val = $this->getBackingStore()->get('windows10EnrollmentCompletionPageConfigurationDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windows10EnrollmentCompletionPageConfigurationDisplayName'");
    }

    /**
     * Gets the windows10EnrollmentCompletionPageConfigurationId property value. Enrollment Status Page profile ID
     * @return string|null
    */
    public function getWindows10EnrollmentCompletionPageConfigurationId(): ?string {
        $val = $this->getBackingStore()->get('windows10EnrollmentCompletionPageConfigurationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windows10EnrollmentCompletionPageConfigurationId'");
    }

    /**
     * Gets the windowsAutopilotDeploymentProfileDisplayName property value. Autopilot profile name.
     * @return string|null
    */
    public function getWindowsAutopilotDeploymentProfileDisplayName(): ?string {
        $val = $this->getBackingStore()->get('windowsAutopilotDeploymentProfileDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsAutopilotDeploymentProfileDisplayName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateIntervalValue('accountSetupDuration', $this->getAccountSetupDuration());
        $writer->writeEnumValue('accountSetupStatus', $this->getAccountSetupStatus());
        $writer->writeDateIntervalValue('deploymentDuration', $this->getDeploymentDuration());
        $writer->writeDateTimeValue('deploymentEndDateTime', $this->getDeploymentEndDateTime());
        $writer->writeDateTimeValue('deploymentStartDateTime', $this->getDeploymentStartDateTime());
        $writer->writeEnumValue('deploymentState', $this->getDeploymentState());
        $writer->writeDateIntervalValue('deploymentTotalDuration', $this->getDeploymentTotalDuration());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeDateIntervalValue('devicePreparationDuration', $this->getDevicePreparationDuration());
        $writer->writeDateTimeValue('deviceRegisteredDateTime', $this->getDeviceRegisteredDateTime());
        $writer->writeStringValue('deviceSerialNumber', $this->getDeviceSerialNumber());
        $writer->writeDateIntervalValue('deviceSetupDuration', $this->getDeviceSetupDuration());
        $writer->writeEnumValue('deviceSetupStatus', $this->getDeviceSetupStatus());
        $writer->writeStringValue('enrollmentFailureDetails', $this->getEnrollmentFailureDetails());
        $writer->writeDateTimeValue('enrollmentStartDateTime', $this->getEnrollmentStartDateTime());
        $writer->writeEnumValue('enrollmentState', $this->getEnrollmentState());
        $writer->writeEnumValue('enrollmentType', $this->getEnrollmentType());
        $writer->writeDateTimeValue('eventDateTime', $this->getEventDateTime());
        $writer->writeStringValue('managedDeviceName', $this->getManagedDeviceName());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
        $writer->writeCollectionOfObjectValues('policyStatusDetails', $this->getPolicyStatusDetails());
        $writer->writeIntegerValue('targetedAppCount', $this->getTargetedAppCount());
        $writer->writeIntegerValue('targetedPolicyCount', $this->getTargetedPolicyCount());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeStringValue('windows10EnrollmentCompletionPageConfigurationDisplayName', $this->getWindows10EnrollmentCompletionPageConfigurationDisplayName());
        $writer->writeStringValue('windows10EnrollmentCompletionPageConfigurationId', $this->getWindows10EnrollmentCompletionPageConfigurationId());
        $writer->writeStringValue('windowsAutopilotDeploymentProfileDisplayName', $this->getWindowsAutopilotDeploymentProfileDisplayName());
    }

    /**
     * Sets the accountSetupDuration property value. Time spent in user ESP.
     * @param DateInterval|null $value Value to set for the accountSetupDuration property.
    */
    public function setAccountSetupDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('accountSetupDuration', $value);
    }

    /**
     * Sets the accountSetupStatus property value. Deployment states for Autopilot devices
     * @param WindowsAutopilotDeploymentState|null $value Value to set for the accountSetupStatus property.
    */
    public function setAccountSetupStatus(?WindowsAutopilotDeploymentState $value): void {
        $this->getBackingStore()->set('accountSetupStatus', $value);
    }

    /**
     * Sets the deploymentDuration property value. Autopilot deployment duration including enrollment.
     * @param DateInterval|null $value Value to set for the deploymentDuration property.
    */
    public function setDeploymentDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('deploymentDuration', $value);
    }

    /**
     * Sets the deploymentEndDateTime property value. Deployment end time.
     * @param DateTime|null $value Value to set for the deploymentEndDateTime property.
    */
    public function setDeploymentEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('deploymentEndDateTime', $value);
    }

    /**
     * Sets the deploymentStartDateTime property value. Deployment start time.
     * @param DateTime|null $value Value to set for the deploymentStartDateTime property.
    */
    public function setDeploymentStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('deploymentStartDateTime', $value);
    }

    /**
     * Sets the deploymentState property value. Deployment states for Autopilot devices
     * @param WindowsAutopilotDeploymentState|null $value Value to set for the deploymentState property.
    */
    public function setDeploymentState(?WindowsAutopilotDeploymentState $value): void {
        $this->getBackingStore()->set('deploymentState', $value);
    }

    /**
     * Sets the deploymentTotalDuration property value. Total deployment duration from enrollment to Desktop screen.
     * @param DateInterval|null $value Value to set for the deploymentTotalDuration property.
    */
    public function setDeploymentTotalDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('deploymentTotalDuration', $value);
    }

    /**
     * Sets the deviceId property value. Device id associated with the object
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the devicePreparationDuration property value. Time spent in device enrollment.
     * @param DateInterval|null $value Value to set for the devicePreparationDuration property.
    */
    public function setDevicePreparationDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('devicePreparationDuration', $value);
    }

    /**
     * Sets the deviceRegisteredDateTime property value. Device registration date.
     * @param DateTime|null $value Value to set for the deviceRegisteredDateTime property.
    */
    public function setDeviceRegisteredDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('deviceRegisteredDateTime', $value);
    }

    /**
     * Sets the deviceSerialNumber property value. Device serial number.
     * @param string|null $value Value to set for the deviceSerialNumber property.
    */
    public function setDeviceSerialNumber(?string $value): void {
        $this->getBackingStore()->set('deviceSerialNumber', $value);
    }

    /**
     * Sets the deviceSetupDuration property value. Time spent in device ESP.
     * @param DateInterval|null $value Value to set for the deviceSetupDuration property.
    */
    public function setDeviceSetupDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('deviceSetupDuration', $value);
    }

    /**
     * Sets the deviceSetupStatus property value. Deployment states for Autopilot devices
     * @param WindowsAutopilotDeploymentState|null $value Value to set for the deviceSetupStatus property.
    */
    public function setDeviceSetupStatus(?WindowsAutopilotDeploymentState $value): void {
        $this->getBackingStore()->set('deviceSetupStatus', $value);
    }

    /**
     * Sets the enrollmentFailureDetails property value. Enrollment failure details.
     * @param string|null $value Value to set for the enrollmentFailureDetails property.
    */
    public function setEnrollmentFailureDetails(?string $value): void {
        $this->getBackingStore()->set('enrollmentFailureDetails', $value);
    }

    /**
     * Sets the enrollmentStartDateTime property value. Device enrollment start date.
     * @param DateTime|null $value Value to set for the enrollmentStartDateTime property.
    */
    public function setEnrollmentStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('enrollmentStartDateTime', $value);
    }

    /**
     * Sets the enrollmentState property value. The enrollmentState property
     * @param EnrollmentState|null $value Value to set for the enrollmentState property.
    */
    public function setEnrollmentState(?EnrollmentState $value): void {
        $this->getBackingStore()->set('enrollmentState', $value);
    }

    /**
     * Sets the enrollmentType property value. The enrollmentType property
     * @param WindowsAutopilotEnrollmentType|null $value Value to set for the enrollmentType property.
    */
    public function setEnrollmentType(?WindowsAutopilotEnrollmentType $value): void {
        $this->getBackingStore()->set('enrollmentType', $value);
    }

    /**
     * Sets the eventDateTime property value. Time when the event occurred .
     * @param DateTime|null $value Value to set for the eventDateTime property.
    */
    public function setEventDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('eventDateTime', $value);
    }

    /**
     * Sets the managedDeviceName property value. Managed device name.
     * @param string|null $value Value to set for the managedDeviceName property.
    */
    public function setManagedDeviceName(?string $value): void {
        $this->getBackingStore()->set('managedDeviceName', $value);
    }

    /**
     * Sets the osVersion property value. Device operating system version.
     * @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the policyStatusDetails property value. Policy and application status details for this device.
     * @param array<DeviceManagementAutopilotPolicyStatusDetail>|null $value Value to set for the policyStatusDetails property.
    */
    public function setPolicyStatusDetails(?array $value): void {
        $this->getBackingStore()->set('policyStatusDetails', $value);
    }

    /**
     * Sets the targetedAppCount property value. Count of applications targeted.
     * @param int|null $value Value to set for the targetedAppCount property.
    */
    public function setTargetedAppCount(?int $value): void {
        $this->getBackingStore()->set('targetedAppCount', $value);
    }

    /**
     * Sets the targetedPolicyCount property value. Count of policies targeted.
     * @param int|null $value Value to set for the targetedPolicyCount property.
    */
    public function setTargetedPolicyCount(?int $value): void {
        $this->getBackingStore()->set('targetedPolicyCount', $value);
    }

    /**
     * Sets the userPrincipalName property value. User principal name used to enroll the device.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

    /**
     * Sets the windows10EnrollmentCompletionPageConfigurationDisplayName property value. Enrollment Status Page profile name
     * @param string|null $value Value to set for the windows10EnrollmentCompletionPageConfigurationDisplayName property.
    */
    public function setWindows10EnrollmentCompletionPageConfigurationDisplayName(?string $value): void {
        $this->getBackingStore()->set('windows10EnrollmentCompletionPageConfigurationDisplayName', $value);
    }

    /**
     * Sets the windows10EnrollmentCompletionPageConfigurationId property value. Enrollment Status Page profile ID
     * @param string|null $value Value to set for the windows10EnrollmentCompletionPageConfigurationId property.
    */
    public function setWindows10EnrollmentCompletionPageConfigurationId(?string $value): void {
        $this->getBackingStore()->set('windows10EnrollmentCompletionPageConfigurationId', $value);
    }

    /**
     * Sets the windowsAutopilotDeploymentProfileDisplayName property value. Autopilot profile name.
     * @param string|null $value Value to set for the windowsAutopilotDeploymentProfileDisplayName property.
    */
    public function setWindowsAutopilotDeploymentProfileDisplayName(?string $value): void {
        $this->getBackingStore()->set('windowsAutopilotDeploymentProfileDisplayName', $value);
    }

}
