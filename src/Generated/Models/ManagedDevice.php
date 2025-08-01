<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Devices that are managed or pre-enrolled through Intune. Limited support for $filter: Only properties whose descriptions mention support for $filter may be used, and combinations of those filtered properties must use 'and', not 'or'.
*/
class ManagedDevice extends Entity implements Parsable 
{
    /**
     * Instantiates a new ManagedDevice and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedDevice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedDevice {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.windowsManagedDevice': return new WindowsManagedDevice();
            }
        }
        return new ManagedDevice();
    }

    /**
     * Gets the aadRegistered property value. Whether the device is Azure Active Directory registered. This property is read-only.
     * @return bool|null
    */
    public function getAadRegistered(): ?bool {
        $val = $this->getBackingStore()->get('aadRegistered');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aadRegistered'");
    }

    /**
     * Gets the activationLockBypassCode property value. The code that allows the Activation Lock on managed device to be bypassed. Default, is Null (Non-Default property) for this property when returned as part of managedDevice entity in LIST call. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. $Search is not supported. Read-only. This property is read-only.
     * @return string|null
    */
    public function getActivationLockBypassCode(): ?string {
        $val = $this->getBackingStore()->get('activationLockBypassCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activationLockBypassCode'");
    }

    /**
     * Gets the androidSecurityPatchLevel property value. Android security patch level. This property is read-only.
     * @return string|null
    */
    public function getAndroidSecurityPatchLevel(): ?string {
        $val = $this->getBackingStore()->get('androidSecurityPatchLevel');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidSecurityPatchLevel'");
    }

    /**
     * Gets the assignmentFilterEvaluationStatusDetails property value. Managed device mobile app configuration states for this device.
     * @return array<AssignmentFilterEvaluationStatusDetails>|null
    */
    public function getAssignmentFilterEvaluationStatusDetails(): ?array {
        $val = $this->getBackingStore()->get('assignmentFilterEvaluationStatusDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AssignmentFilterEvaluationStatusDetails::class);
            /** @var array<AssignmentFilterEvaluationStatusDetails>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentFilterEvaluationStatusDetails'");
    }

    /**
     * Gets the autopilotEnrolled property value. Reports if the managed device is enrolled via auto-pilot. This property is read-only.
     * @return bool|null
    */
    public function getAutopilotEnrolled(): ?bool {
        $val = $this->getBackingStore()->get('autopilotEnrolled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autopilotEnrolled'");
    }

    /**
     * Gets the azureActiveDirectoryDeviceId property value. The unique identifier for the Azure Active Directory device. Read only. This property is read-only.
     * @return string|null
    */
    public function getAzureActiveDirectoryDeviceId(): ?string {
        $val = $this->getBackingStore()->get('azureActiveDirectoryDeviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureActiveDirectoryDeviceId'");
    }

    /**
     * Gets the azureADDeviceId property value. The unique identifier for the Azure Active Directory device. Read only. This property is read-only.
     * @return string|null
    */
    public function getAzureADDeviceId(): ?string {
        $val = $this->getBackingStore()->get('azureADDeviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureADDeviceId'");
    }

    /**
     * Gets the azureADRegistered property value. Whether the device is Azure Active Directory registered. This property is read-only.
     * @return bool|null
    */
    public function getAzureADRegistered(): ?bool {
        $val = $this->getBackingStore()->get('azureADRegistered');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureADRegistered'");
    }

    /**
     * Gets the bootstrapTokenEscrowed property value. Reports if the managed device has an escrowed Bootstrap Token. This is only for macOS devices. To get, include BootstrapTokenEscrowed in the select clause and query with a device id. If FALSE, no bootstrap token is escrowed. If TRUE, the device has escrowed a bootstrap token with Intune. This property is read-only.
     * @return bool|null
    */
    public function getBootstrapTokenEscrowed(): ?bool {
        $val = $this->getBackingStore()->get('bootstrapTokenEscrowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bootstrapTokenEscrowed'");
    }

    /**
     * Gets the chassisType property value. Chassis type.
     * @return ChassisType|null
    */
    public function getChassisType(): ?ChassisType {
        $val = $this->getBackingStore()->get('chassisType');
        if (is_null($val) || $val instanceof ChassisType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'chassisType'");
    }

    /**
     * Gets the chromeOSDeviceInfo property value. List of properties of the ChromeOS Device. Default is an empty list. To retrieve actual values GET call needs to be made, with device id and included in select parameter.
     * @return array<ChromeOSDeviceProperty>|null
    */
    public function getChromeOSDeviceInfo(): ?array {
        $val = $this->getBackingStore()->get('chromeOSDeviceInfo');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ChromeOSDeviceProperty::class);
            /** @var array<ChromeOSDeviceProperty>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'chromeOSDeviceInfo'");
    }

    /**
     * Gets the cloudPcRemoteActionResults property value. The cloudPcRemoteActionResults property
     * @return array<CloudPcRemoteActionResult>|null
    */
    public function getCloudPcRemoteActionResults(): ?array {
        $val = $this->getBackingStore()->get('cloudPcRemoteActionResults');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcRemoteActionResult::class);
            /** @var array<CloudPcRemoteActionResult>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPcRemoteActionResults'");
    }

    /**
     * Gets the complianceGracePeriodExpirationDateTime property value. The DateTime when device compliance grace period expires. This property is read-only.
     * @return DateTime|null
    */
    public function getComplianceGracePeriodExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('complianceGracePeriodExpirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'complianceGracePeriodExpirationDateTime'");
    }

    /**
     * Gets the complianceState property value. Compliance state.
     * @return ComplianceState|null
    */
    public function getComplianceState(): ?ComplianceState {
        $val = $this->getBackingStore()->get('complianceState');
        if (is_null($val) || $val instanceof ComplianceState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'complianceState'");
    }

    /**
     * Gets the configurationManagerClientEnabledFeatures property value. ConfigrMgr client enabled features. This property is read-only.
     * @return ConfigurationManagerClientEnabledFeatures|null
    */
    public function getConfigurationManagerClientEnabledFeatures(): ?ConfigurationManagerClientEnabledFeatures {
        $val = $this->getBackingStore()->get('configurationManagerClientEnabledFeatures');
        if (is_null($val) || $val instanceof ConfigurationManagerClientEnabledFeatures) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationManagerClientEnabledFeatures'");
    }

    /**
     * Gets the configurationManagerClientHealthState property value. Configuration manager client health state, valid only for devices managed by MDM/ConfigMgr Agent
     * @return ConfigurationManagerClientHealthState|null
    */
    public function getConfigurationManagerClientHealthState(): ?ConfigurationManagerClientHealthState {
        $val = $this->getBackingStore()->get('configurationManagerClientHealthState');
        if (is_null($val) || $val instanceof ConfigurationManagerClientHealthState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationManagerClientHealthState'");
    }

    /**
     * Gets the configurationManagerClientInformation property value. Configuration manager client information, valid only for devices managed, duel-managed or tri-managed by ConfigMgr Agent
     * @return ConfigurationManagerClientInformation|null
    */
    public function getConfigurationManagerClientInformation(): ?ConfigurationManagerClientInformation {
        $val = $this->getBackingStore()->get('configurationManagerClientInformation');
        if (is_null($val) || $val instanceof ConfigurationManagerClientInformation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationManagerClientInformation'");
    }

    /**
     * Gets the detectedApps property value. All applications currently installed on the device
     * @return array<DetectedApp>|null
    */
    public function getDetectedApps(): ?array {
        $val = $this->getBackingStore()->get('detectedApps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DetectedApp::class);
            /** @var array<DetectedApp>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectedApps'");
    }

    /**
     * Gets the deviceActionResults property value. List of ComplexType deviceActionResult objects. This property is read-only.
     * @return array<DeviceActionResult>|null
    */
    public function getDeviceActionResults(): ?array {
        $val = $this->getBackingStore()->get('deviceActionResults');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceActionResult::class);
            /** @var array<DeviceActionResult>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceActionResults'");
    }

    /**
     * Gets the deviceCategory property value. Device category
     * @return DeviceCategory|null
    */
    public function getDeviceCategory(): ?DeviceCategory {
        $val = $this->getBackingStore()->get('deviceCategory');
        if (is_null($val) || $val instanceof DeviceCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCategory'");
    }

    /**
     * Gets the deviceCategoryDisplayName property value. Device category display name. Default is an empty string. Supports $filter operator 'eq' and 'or'. This property is read-only.
     * @return string|null
    */
    public function getDeviceCategoryDisplayName(): ?string {
        $val = $this->getBackingStore()->get('deviceCategoryDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCategoryDisplayName'");
    }

    /**
     * Gets the deviceCompliancePolicyStates property value. Device compliance policy states for this device.
     * @return array<DeviceCompliancePolicyState>|null
    */
    public function getDeviceCompliancePolicyStates(): ?array {
        $val = $this->getBackingStore()->get('deviceCompliancePolicyStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceCompliancePolicyState::class);
            /** @var array<DeviceCompliancePolicyState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCompliancePolicyStates'");
    }

    /**
     * Gets the deviceConfigurationStates property value. Device configuration states for this device.
     * @return array<DeviceConfigurationState>|null
    */
    public function getDeviceConfigurationStates(): ?array {
        $val = $this->getBackingStore()->get('deviceConfigurationStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceConfigurationState::class);
            /** @var array<DeviceConfigurationState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceConfigurationStates'");
    }

    /**
     * Gets the deviceEnrollmentType property value. Possible ways of adding a mobile device to management.
     * @return DeviceEnrollmentType|null
    */
    public function getDeviceEnrollmentType(): ?DeviceEnrollmentType {
        $val = $this->getBackingStore()->get('deviceEnrollmentType');
        if (is_null($val) || $val instanceof DeviceEnrollmentType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceEnrollmentType'");
    }

    /**
     * Gets the deviceFirmwareConfigurationInterfaceManaged property value. Indicates whether the device is DFCI managed. When TRUE the device is DFCI managed. When FALSE, the device is not DFCI managed. The default value is FALSE.
     * @return bool|null
    */
    public function getDeviceFirmwareConfigurationInterfaceManaged(): ?bool {
        $val = $this->getBackingStore()->get('deviceFirmwareConfigurationInterfaceManaged');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceFirmwareConfigurationInterfaceManaged'");
    }

    /**
     * Gets the deviceHealthAttestationState property value. The device health attestation state. This property is read-only.
     * @return DeviceHealthAttestationState|null
    */
    public function getDeviceHealthAttestationState(): ?DeviceHealthAttestationState {
        $val = $this->getBackingStore()->get('deviceHealthAttestationState');
        if (is_null($val) || $val instanceof DeviceHealthAttestationState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceHealthAttestationState'");
    }

    /**
     * Gets the deviceHealthScriptStates property value. Results of device health scripts that ran for this device. Default is empty list. This property is read-only.
     * @return array<DeviceHealthScriptPolicyState>|null
    */
    public function getDeviceHealthScriptStates(): ?array {
        $val = $this->getBackingStore()->get('deviceHealthScriptStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceHealthScriptPolicyState::class);
            /** @var array<DeviceHealthScriptPolicyState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceHealthScriptStates'");
    }

    /**
     * Gets the deviceName property value. Name of the device. Supports $filter operator 'eq' and 'contains'. This property is read-only.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        $val = $this->getBackingStore()->get('deviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceName'");
    }

    /**
     * Gets the deviceRegistrationState property value. Device registration status.
     * @return DeviceRegistrationState|null
    */
    public function getDeviceRegistrationState(): ?DeviceRegistrationState {
        $val = $this->getBackingStore()->get('deviceRegistrationState');
        if (is_null($val) || $val instanceof DeviceRegistrationState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceRegistrationState'");
    }

    /**
     * Gets the deviceType property value. Device type.
     * @return DeviceType|null
    */
    public function getDeviceType(): ?DeviceType {
        $val = $this->getBackingStore()->get('deviceType');
        if (is_null($val) || $val instanceof DeviceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceType'");
    }

    /**
     * Gets the easActivated property value. Whether the device is Exchange ActiveSync activated. This property is read-only.
     * @return bool|null
    */
    public function getEasActivated(): ?bool {
        $val = $this->getBackingStore()->get('easActivated');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'easActivated'");
    }

    /**
     * Gets the easActivationDateTime property value. Exchange ActivationSync activation time of the device. This property is read-only.
     * @return DateTime|null
    */
    public function getEasActivationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('easActivationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'easActivationDateTime'");
    }

    /**
     * Gets the easDeviceId property value. Exchange ActiveSync Id of the device. This property is read-only.
     * @return string|null
    */
    public function getEasDeviceId(): ?string {
        $val = $this->getBackingStore()->get('easDeviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'easDeviceId'");
    }

    /**
     * Gets the emailAddress property value. Email(s) for the user associated with the device. This property is read-only.
     * @return string|null
    */
    public function getEmailAddress(): ?string {
        $val = $this->getBackingStore()->get('emailAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailAddress'");
    }

    /**
     * Gets the enrolledByUserPrincipalName property value. The Entra (Azure AD) User Principal Name (UPN) of the user responsible for the enrollment of the device. This property is read-only.
     * @return string|null
    */
    public function getEnrolledByUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('enrolledByUserPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrolledByUserPrincipalName'");
    }

    /**
     * Gets the enrolledDateTime property value. Enrollment time of the device. Supports $filter operator 'lt' and 'gt'. This property is read-only.
     * @return DateTime|null
    */
    public function getEnrolledDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('enrolledDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrolledDateTime'");
    }

    /**
     * Gets the enrollmentProfileName property value. Name of the enrollment profile assigned to the device. Default value is empty string, indicating no enrollment profile was assgined. This property is read-only.
     * @return string|null
    */
    public function getEnrollmentProfileName(): ?string {
        $val = $this->getBackingStore()->get('enrollmentProfileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentProfileName'");
    }

    /**
     * Gets the ethernetMacAddress property value. Indicates Ethernet MAC Address of the device. Default, is Null (Non-Default property) for this property when returned as part of managedDevice entity. Individual get call with select query options is needed to retrieve actual values. Example: deviceManagement/managedDevices({managedDeviceId})?$select=ethernetMacAddress Supports: $select. $Search is not supported. Read-only. This property is read-only.
     * @return string|null
    */
    public function getEthernetMacAddress(): ?string {
        $val = $this->getBackingStore()->get('ethernetMacAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ethernetMacAddress'");
    }

    /**
     * Gets the exchangeAccessState property value. Device Exchange Access State.
     * @return DeviceManagementExchangeAccessState|null
    */
    public function getExchangeAccessState(): ?DeviceManagementExchangeAccessState {
        $val = $this->getBackingStore()->get('exchangeAccessState');
        if (is_null($val) || $val instanceof DeviceManagementExchangeAccessState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchangeAccessState'");
    }

    /**
     * Gets the exchangeAccessStateReason property value. Device Exchange Access State Reason.
     * @return DeviceManagementExchangeAccessStateReason|null
    */
    public function getExchangeAccessStateReason(): ?DeviceManagementExchangeAccessStateReason {
        $val = $this->getBackingStore()->get('exchangeAccessStateReason');
        if (is_null($val) || $val instanceof DeviceManagementExchangeAccessStateReason) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchangeAccessStateReason'");
    }

    /**
     * Gets the exchangeLastSuccessfulSyncDateTime property value. Last time the device contacted Exchange. This property is read-only.
     * @return DateTime|null
    */
    public function getExchangeLastSuccessfulSyncDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('exchangeLastSuccessfulSyncDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchangeLastSuccessfulSyncDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'aadRegistered' => fn(ParseNode $n) => $o->setAadRegistered($n->getBooleanValue()),
            'activationLockBypassCode' => fn(ParseNode $n) => $o->setActivationLockBypassCode($n->getStringValue()),
            'androidSecurityPatchLevel' => fn(ParseNode $n) => $o->setAndroidSecurityPatchLevel($n->getStringValue()),
            'assignmentFilterEvaluationStatusDetails' => fn(ParseNode $n) => $o->setAssignmentFilterEvaluationStatusDetails($n->getCollectionOfObjectValues([AssignmentFilterEvaluationStatusDetails::class, 'createFromDiscriminatorValue'])),
            'autopilotEnrolled' => fn(ParseNode $n) => $o->setAutopilotEnrolled($n->getBooleanValue()),
            'azureActiveDirectoryDeviceId' => fn(ParseNode $n) => $o->setAzureActiveDirectoryDeviceId($n->getStringValue()),
            'azureADDeviceId' => fn(ParseNode $n) => $o->setAzureADDeviceId($n->getStringValue()),
            'azureADRegistered' => fn(ParseNode $n) => $o->setAzureADRegistered($n->getBooleanValue()),
            'bootstrapTokenEscrowed' => fn(ParseNode $n) => $o->setBootstrapTokenEscrowed($n->getBooleanValue()),
            'chassisType' => fn(ParseNode $n) => $o->setChassisType($n->getEnumValue(ChassisType::class)),
            'chromeOSDeviceInfo' => fn(ParseNode $n) => $o->setChromeOSDeviceInfo($n->getCollectionOfObjectValues([ChromeOSDeviceProperty::class, 'createFromDiscriminatorValue'])),
            'cloudPcRemoteActionResults' => fn(ParseNode $n) => $o->setCloudPcRemoteActionResults($n->getCollectionOfObjectValues([CloudPcRemoteActionResult::class, 'createFromDiscriminatorValue'])),
            'complianceGracePeriodExpirationDateTime' => fn(ParseNode $n) => $o->setComplianceGracePeriodExpirationDateTime($n->getDateTimeValue()),
            'complianceState' => fn(ParseNode $n) => $o->setComplianceState($n->getEnumValue(ComplianceState::class)),
            'configurationManagerClientEnabledFeatures' => fn(ParseNode $n) => $o->setConfigurationManagerClientEnabledFeatures($n->getObjectValue([ConfigurationManagerClientEnabledFeatures::class, 'createFromDiscriminatorValue'])),
            'configurationManagerClientHealthState' => fn(ParseNode $n) => $o->setConfigurationManagerClientHealthState($n->getObjectValue([ConfigurationManagerClientHealthState::class, 'createFromDiscriminatorValue'])),
            'configurationManagerClientInformation' => fn(ParseNode $n) => $o->setConfigurationManagerClientInformation($n->getObjectValue([ConfigurationManagerClientInformation::class, 'createFromDiscriminatorValue'])),
            'detectedApps' => fn(ParseNode $n) => $o->setDetectedApps($n->getCollectionOfObjectValues([DetectedApp::class, 'createFromDiscriminatorValue'])),
            'deviceActionResults' => fn(ParseNode $n) => $o->setDeviceActionResults($n->getCollectionOfObjectValues([DeviceActionResult::class, 'createFromDiscriminatorValue'])),
            'deviceCategory' => fn(ParseNode $n) => $o->setDeviceCategory($n->getObjectValue([DeviceCategory::class, 'createFromDiscriminatorValue'])),
            'deviceCategoryDisplayName' => fn(ParseNode $n) => $o->setDeviceCategoryDisplayName($n->getStringValue()),
            'deviceCompliancePolicyStates' => fn(ParseNode $n) => $o->setDeviceCompliancePolicyStates($n->getCollectionOfObjectValues([DeviceCompliancePolicyState::class, 'createFromDiscriminatorValue'])),
            'deviceConfigurationStates' => fn(ParseNode $n) => $o->setDeviceConfigurationStates($n->getCollectionOfObjectValues([DeviceConfigurationState::class, 'createFromDiscriminatorValue'])),
            'deviceEnrollmentType' => fn(ParseNode $n) => $o->setDeviceEnrollmentType($n->getEnumValue(DeviceEnrollmentType::class)),
            'deviceFirmwareConfigurationInterfaceManaged' => fn(ParseNode $n) => $o->setDeviceFirmwareConfigurationInterfaceManaged($n->getBooleanValue()),
            'deviceHealthAttestationState' => fn(ParseNode $n) => $o->setDeviceHealthAttestationState($n->getObjectValue([DeviceHealthAttestationState::class, 'createFromDiscriminatorValue'])),
            'deviceHealthScriptStates' => fn(ParseNode $n) => $o->setDeviceHealthScriptStates($n->getCollectionOfObjectValues([DeviceHealthScriptPolicyState::class, 'createFromDiscriminatorValue'])),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'deviceRegistrationState' => fn(ParseNode $n) => $o->setDeviceRegistrationState($n->getEnumValue(DeviceRegistrationState::class)),
            'deviceType' => fn(ParseNode $n) => $o->setDeviceType($n->getEnumValue(DeviceType::class)),
            'easActivated' => fn(ParseNode $n) => $o->setEasActivated($n->getBooleanValue()),
            'easActivationDateTime' => fn(ParseNode $n) => $o->setEasActivationDateTime($n->getDateTimeValue()),
            'easDeviceId' => fn(ParseNode $n) => $o->setEasDeviceId($n->getStringValue()),
            'emailAddress' => fn(ParseNode $n) => $o->setEmailAddress($n->getStringValue()),
            'enrolledByUserPrincipalName' => fn(ParseNode $n) => $o->setEnrolledByUserPrincipalName($n->getStringValue()),
            'enrolledDateTime' => fn(ParseNode $n) => $o->setEnrolledDateTime($n->getDateTimeValue()),
            'enrollmentProfileName' => fn(ParseNode $n) => $o->setEnrollmentProfileName($n->getStringValue()),
            'ethernetMacAddress' => fn(ParseNode $n) => $o->setEthernetMacAddress($n->getStringValue()),
            'exchangeAccessState' => fn(ParseNode $n) => $o->setExchangeAccessState($n->getEnumValue(DeviceManagementExchangeAccessState::class)),
            'exchangeAccessStateReason' => fn(ParseNode $n) => $o->setExchangeAccessStateReason($n->getEnumValue(DeviceManagementExchangeAccessStateReason::class)),
            'exchangeLastSuccessfulSyncDateTime' => fn(ParseNode $n) => $o->setExchangeLastSuccessfulSyncDateTime($n->getDateTimeValue()),
            'freeStorageSpaceInBytes' => fn(ParseNode $n) => $o->setFreeStorageSpaceInBytes($n->getIntegerValue()),
            'hardwareInformation' => fn(ParseNode $n) => $o->setHardwareInformation($n->getObjectValue([HardwareInformation::class, 'createFromDiscriminatorValue'])),
            'iccid' => fn(ParseNode $n) => $o->setIccid($n->getStringValue()),
            'imei' => fn(ParseNode $n) => $o->setImei($n->getStringValue()),
            'isEncrypted' => fn(ParseNode $n) => $o->setIsEncrypted($n->getBooleanValue()),
            'isSupervised' => fn(ParseNode $n) => $o->setIsSupervised($n->getBooleanValue()),
            'jailBroken' => fn(ParseNode $n) => $o->setJailBroken($n->getStringValue()),
            'joinType' => fn(ParseNode $n) => $o->setJoinType($n->getEnumValue(JoinType::class)),
            'lastSyncDateTime' => fn(ParseNode $n) => $o->setLastSyncDateTime($n->getDateTimeValue()),
            'logCollectionRequests' => fn(ParseNode $n) => $o->setLogCollectionRequests($n->getCollectionOfObjectValues([DeviceLogCollectionResponse::class, 'createFromDiscriminatorValue'])),
            'lostModeState' => fn(ParseNode $n) => $o->setLostModeState($n->getEnumValue(LostModeState::class)),
            'managedDeviceMobileAppConfigurationStates' => fn(ParseNode $n) => $o->setManagedDeviceMobileAppConfigurationStates($n->getCollectionOfObjectValues([ManagedDeviceMobileAppConfigurationState::class, 'createFromDiscriminatorValue'])),
            'managedDeviceName' => fn(ParseNode $n) => $o->setManagedDeviceName($n->getStringValue()),
            'managedDeviceOwnerType' => fn(ParseNode $n) => $o->setManagedDeviceOwnerType($n->getEnumValue(ManagedDeviceOwnerType::class)),
            'managementAgent' => fn(ParseNode $n) => $o->setManagementAgent($n->getEnumValue(ManagementAgentType::class)),
            'managementCertificateExpirationDate' => fn(ParseNode $n) => $o->setManagementCertificateExpirationDate($n->getDateTimeValue()),
            'managementFeatures' => fn(ParseNode $n) => $o->setManagementFeatures($n->getEnumValue(ManagedDeviceManagementFeatures::class)),
            'managementState' => fn(ParseNode $n) => $o->setManagementState($n->getEnumValue(ManagementState::class)),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'meid' => fn(ParseNode $n) => $o->setMeid($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getStringValue()),
            'operatingSystem' => fn(ParseNode $n) => $o->setOperatingSystem($n->getStringValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
            'ownerType' => fn(ParseNode $n) => $o->setOwnerType($n->getEnumValue(OwnerType::class)),
            'partnerReportedThreatState' => fn(ParseNode $n) => $o->setPartnerReportedThreatState($n->getEnumValue(ManagedDevicePartnerReportedHealthState::class)),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'physicalMemoryInBytes' => fn(ParseNode $n) => $o->setPhysicalMemoryInBytes($n->getIntegerValue()),
            'preferMdmOverGroupPolicyAppliedDateTime' => fn(ParseNode $n) => $o->setPreferMdmOverGroupPolicyAppliedDateTime($n->getDateTimeValue()),
            'processorArchitecture' => fn(ParseNode $n) => $o->setProcessorArchitecture($n->getEnumValue(ManagedDeviceArchitecture::class)),
            'remoteAssistanceSessionErrorDetails' => fn(ParseNode $n) => $o->setRemoteAssistanceSessionErrorDetails($n->getStringValue()),
            'remoteAssistanceSessionUrl' => fn(ParseNode $n) => $o->setRemoteAssistanceSessionUrl($n->getStringValue()),
            'requireUserEnrollmentApproval' => fn(ParseNode $n) => $o->setRequireUserEnrollmentApproval($n->getBooleanValue()),
            'retireAfterDateTime' => fn(ParseNode $n) => $o->setRetireAfterDateTime($n->getDateTimeValue()),
            'roleScopeTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoleScopeTagIds($val);
            },
            'securityBaselineStates' => fn(ParseNode $n) => $o->setSecurityBaselineStates($n->getCollectionOfObjectValues([SecurityBaselineState::class, 'createFromDiscriminatorValue'])),
            'securityPatchLevel' => fn(ParseNode $n) => $o->setSecurityPatchLevel($n->getStringValue()),
            'serialNumber' => fn(ParseNode $n) => $o->setSerialNumber($n->getStringValue()),
            'skuFamily' => fn(ParseNode $n) => $o->setSkuFamily($n->getStringValue()),
            'skuNumber' => fn(ParseNode $n) => $o->setSkuNumber($n->getIntegerValue()),
            'specificationVersion' => fn(ParseNode $n) => $o->setSpecificationVersion($n->getStringValue()),
            'subscriberCarrier' => fn(ParseNode $n) => $o->setSubscriberCarrier($n->getStringValue()),
            'totalStorageSpaceInBytes' => fn(ParseNode $n) => $o->setTotalStorageSpaceInBytes($n->getIntegerValue()),
            'udid' => fn(ParseNode $n) => $o->setUdid($n->getStringValue()),
            'userDisplayName' => fn(ParseNode $n) => $o->setUserDisplayName($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
            'users' => fn(ParseNode $n) => $o->setUsers($n->getCollectionOfObjectValues([User::class, 'createFromDiscriminatorValue'])),
            'usersLoggedOn' => fn(ParseNode $n) => $o->setUsersLoggedOn($n->getCollectionOfObjectValues([LoggedOnUser::class, 'createFromDiscriminatorValue'])),
            'wiFiMacAddress' => fn(ParseNode $n) => $o->setWiFiMacAddress($n->getStringValue()),
            'windowsActiveMalwareCount' => fn(ParseNode $n) => $o->setWindowsActiveMalwareCount($n->getIntegerValue()),
            'windowsProtectionState' => fn(ParseNode $n) => $o->setWindowsProtectionState($n->getObjectValue([WindowsProtectionState::class, 'createFromDiscriminatorValue'])),
            'windowsRemediatedMalwareCount' => fn(ParseNode $n) => $o->setWindowsRemediatedMalwareCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the freeStorageSpaceInBytes property value. Free Storage in Bytes. Default value is 0. Read-only. This property is read-only.
     * @return int|null
    */
    public function getFreeStorageSpaceInBytes(): ?int {
        $val = $this->getBackingStore()->get('freeStorageSpaceInBytes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'freeStorageSpaceInBytes'");
    }

    /**
     * Gets the hardwareInformation property value. The hardward details for the device. Includes information such as storage space, manufacturer, serial number, etc. By default most property of this type are set to null/0/false and enum defaults for associated types. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. $Search is not supported. Read-only. This property is read-only.
     * @return HardwareInformation|null
    */
    public function getHardwareInformation(): ?HardwareInformation {
        $val = $this->getBackingStore()->get('hardwareInformation');
        if (is_null($val) || $val instanceof HardwareInformation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hardwareInformation'");
    }

    /**
     * Gets the iccid property value. Integrated Circuit Card Identifier, it is A SIM card's unique identification number. Default is an empty string. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. $Search is not supported. Read-only. This property is read-only.
     * @return string|null
    */
    public function getIccid(): ?string {
        $val = $this->getBackingStore()->get('iccid');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iccid'");
    }

    /**
     * Gets the imei property value. IMEI. This property is read-only.
     * @return string|null
    */
    public function getImei(): ?string {
        $val = $this->getBackingStore()->get('imei');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'imei'");
    }

    /**
     * Gets the isEncrypted property value. Device encryption status. This property is read-only.
     * @return bool|null
    */
    public function getIsEncrypted(): ?bool {
        $val = $this->getBackingStore()->get('isEncrypted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEncrypted'");
    }

    /**
     * Gets the isSupervised property value. Device supervised status. This property is read-only.
     * @return bool|null
    */
    public function getIsSupervised(): ?bool {
        $val = $this->getBackingStore()->get('isSupervised');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSupervised'");
    }

    /**
     * Gets the jailBroken property value. Whether the device is jail broken or rooted. Default is an empty string. Supports $filter operator 'eq' and 'or'. This property is read-only.
     * @return string|null
    */
    public function getJailBroken(): ?string {
        $val = $this->getBackingStore()->get('jailBroken');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'jailBroken'");
    }

    /**
     * Gets the joinType property value. Device enrollment join type.
     * @return JoinType|null
    */
    public function getJoinType(): ?JoinType {
        $val = $this->getBackingStore()->get('joinType');
        if (is_null($val) || $val instanceof JoinType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'joinType'");
    }

    /**
     * Gets the lastSyncDateTime property value. The date and time that the device last completed a successful sync with Intune. Supports $filter operator 'lt' and 'gt'. This property is read-only.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSyncDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSyncDateTime'");
    }

    /**
     * Gets the logCollectionRequests property value. List of log collection requests
     * @return array<DeviceLogCollectionResponse>|null
    */
    public function getLogCollectionRequests(): ?array {
        $val = $this->getBackingStore()->get('logCollectionRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceLogCollectionResponse::class);
            /** @var array<DeviceLogCollectionResponse>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'logCollectionRequests'");
    }

    /**
     * Gets the lostModeState property value. State of lost mode, indicating if lost mode is enabled or disabled
     * @return LostModeState|null
    */
    public function getLostModeState(): ?LostModeState {
        $val = $this->getBackingStore()->get('lostModeState');
        if (is_null($val) || $val instanceof LostModeState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lostModeState'");
    }

    /**
     * Gets the managedDeviceMobileAppConfigurationStates property value. Managed device mobile app configuration states for this device.
     * @return array<ManagedDeviceMobileAppConfigurationState>|null
    */
    public function getManagedDeviceMobileAppConfigurationStates(): ?array {
        $val = $this->getBackingStore()->get('managedDeviceMobileAppConfigurationStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedDeviceMobileAppConfigurationState::class);
            /** @var array<ManagedDeviceMobileAppConfigurationState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceMobileAppConfigurationStates'");
    }

    /**
     * Gets the managedDeviceName property value. Automatically generated name to identify a device. Can be overwritten to a user friendly name.
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
     * Gets the managedDeviceOwnerType property value. Owner type of device.
     * @return ManagedDeviceOwnerType|null
    */
    public function getManagedDeviceOwnerType(): ?ManagedDeviceOwnerType {
        $val = $this->getBackingStore()->get('managedDeviceOwnerType');
        if (is_null($val) || $val instanceof ManagedDeviceOwnerType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceOwnerType'");
    }

    /**
     * Gets the managementAgent property value. Management agent type.
     * @return ManagementAgentType|null
    */
    public function getManagementAgent(): ?ManagementAgentType {
        $val = $this->getBackingStore()->get('managementAgent');
        if (is_null($val) || $val instanceof ManagementAgentType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managementAgent'");
    }

    /**
     * Gets the managementCertificateExpirationDate property value. Reports device management certificate expiration date. This property is read-only.
     * @return DateTime|null
    */
    public function getManagementCertificateExpirationDate(): ?DateTime {
        $val = $this->getBackingStore()->get('managementCertificateExpirationDate');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managementCertificateExpirationDate'");
    }

    /**
     * Gets the managementFeatures property value. Device management features.
     * @return ManagedDeviceManagementFeatures|null
    */
    public function getManagementFeatures(): ?ManagedDeviceManagementFeatures {
        $val = $this->getBackingStore()->get('managementFeatures');
        if (is_null($val) || $val instanceof ManagedDeviceManagementFeatures) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managementFeatures'");
    }

    /**
     * Gets the managementState property value. Management state of device in Microsoft Intune.
     * @return ManagementState|null
    */
    public function getManagementState(): ?ManagementState {
        $val = $this->getBackingStore()->get('managementState');
        if (is_null($val) || $val instanceof ManagementState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managementState'");
    }

    /**
     * Gets the manufacturer property value. Manufacturer of the device. This property is read-only.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        $val = $this->getBackingStore()->get('manufacturer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'manufacturer'");
    }

    /**
     * Gets the meid property value. MEID. This property is read-only.
     * @return string|null
    */
    public function getMeid(): ?string {
        $val = $this->getBackingStore()->get('meid');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'meid'");
    }

    /**
     * Gets the model property value. Model of the device. This property is read-only.
     * @return string|null
    */
    public function getModel(): ?string {
        $val = $this->getBackingStore()->get('model');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'model'");
    }

    /**
     * Gets the notes property value. Notes on the device created by IT Admin. Default is null. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. $Search is not supported.
     * @return string|null
    */
    public function getNotes(): ?string {
        $val = $this->getBackingStore()->get('notes');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notes'");
    }

    /**
     * Gets the operatingSystem property value. Operating system of the device. Windows, iOS, etc. This property is read-only.
     * @return string|null
    */
    public function getOperatingSystem(): ?string {
        $val = $this->getBackingStore()->get('operatingSystem');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operatingSystem'");
    }

    /**
     * Gets the osVersion property value. Operating system version of the device. This property is read-only.
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
     * Gets the ownerType property value. Owner type of device.
     * @return OwnerType|null
    */
    public function getOwnerType(): ?OwnerType {
        $val = $this->getBackingStore()->get('ownerType');
        if (is_null($val) || $val instanceof OwnerType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ownerType'");
    }

    /**
     * Gets the partnerReportedThreatState property value. Available health states for the Device Health API
     * @return ManagedDevicePartnerReportedHealthState|null
    */
    public function getPartnerReportedThreatState(): ?ManagedDevicePartnerReportedHealthState {
        $val = $this->getBackingStore()->get('partnerReportedThreatState');
        if (is_null($val) || $val instanceof ManagedDevicePartnerReportedHealthState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'partnerReportedThreatState'");
    }

    /**
     * Gets the phoneNumber property value. Phone number of the device. This property is read-only.
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        $val = $this->getBackingStore()->get('phoneNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phoneNumber'");
    }

    /**
     * Gets the physicalMemoryInBytes property value. Total Memory in Bytes. Default is 0. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. Read-only. This property is read-only.
     * @return int|null
    */
    public function getPhysicalMemoryInBytes(): ?int {
        $val = $this->getBackingStore()->get('physicalMemoryInBytes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'physicalMemoryInBytes'");
    }

    /**
     * Gets the preferMdmOverGroupPolicyAppliedDateTime property value. Reports the DateTime the preferMdmOverGroupPolicy setting was set.  When set, the Intune MDM settings will override Group Policy settings if there is a conflict. Read Only. This property is read-only.
     * @return DateTime|null
    */
    public function getPreferMdmOverGroupPolicyAppliedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('preferMdmOverGroupPolicyAppliedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preferMdmOverGroupPolicyAppliedDateTime'");
    }

    /**
     * Gets the processorArchitecture property value. Processor architecture
     * @return ManagedDeviceArchitecture|null
    */
    public function getProcessorArchitecture(): ?ManagedDeviceArchitecture {
        $val = $this->getBackingStore()->get('processorArchitecture');
        if (is_null($val) || $val instanceof ManagedDeviceArchitecture) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processorArchitecture'");
    }

    /**
     * Gets the remoteAssistanceSessionErrorDetails property value. An error string that identifies issues when creating Remote Assistance session objects. This property is read-only.
     * @return string|null
    */
    public function getRemoteAssistanceSessionErrorDetails(): ?string {
        $val = $this->getBackingStore()->get('remoteAssistanceSessionErrorDetails');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteAssistanceSessionErrorDetails'");
    }

    /**
     * Gets the remoteAssistanceSessionUrl property value. Url that allows a Remote Assistance session to be established with the device. Default is an empty string. To retrieve actual values GET call needs to be made, with device id and included in select parameter. This property is read-only.
     * @return string|null
    */
    public function getRemoteAssistanceSessionUrl(): ?string {
        $val = $this->getBackingStore()->get('remoteAssistanceSessionUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteAssistanceSessionUrl'");
    }

    /**
     * Gets the requireUserEnrollmentApproval property value. Reports if the managed iOS device is user approval enrollment. This property is read-only.
     * @return bool|null
    */
    public function getRequireUserEnrollmentApproval(): ?bool {
        $val = $this->getBackingStore()->get('requireUserEnrollmentApproval');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requireUserEnrollmentApproval'");
    }

    /**
     * Gets the retireAfterDateTime property value. Indicates the time after when a device will be auto retired because of scheduled action. This property is read-only.
     * @return DateTime|null
    */
    public function getRetireAfterDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('retireAfterDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'retireAfterDateTime'");
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tag IDs for this Device instance.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        $val = $this->getBackingStore()->get('roleScopeTagIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleScopeTagIds'");
    }

    /**
     * Gets the securityBaselineStates property value. Security baseline states for this device.
     * @return array<SecurityBaselineState>|null
    */
    public function getSecurityBaselineStates(): ?array {
        $val = $this->getBackingStore()->get('securityBaselineStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SecurityBaselineState::class);
            /** @var array<SecurityBaselineState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityBaselineStates'");
    }

    /**
     * Gets the securityPatchLevel property value. This indicates the security patch level of the operating system. These special updates contain important security fixes. For iOS/MacOS they are in (a) format. For android its in 2017-08-07 format. This property is read-only.
     * @return string|null
    */
    public function getSecurityPatchLevel(): ?string {
        $val = $this->getBackingStore()->get('securityPatchLevel');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityPatchLevel'");
    }

    /**
     * Gets the serialNumber property value. SerialNumber. This property is read-only.
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        $val = $this->getBackingStore()->get('serialNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serialNumber'");
    }

    /**
     * Gets the skuFamily property value. Device sku family
     * @return string|null
    */
    public function getSkuFamily(): ?string {
        $val = $this->getBackingStore()->get('skuFamily');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skuFamily'");
    }

    /**
     * Gets the skuNumber property value. Device sku number, see also: https://learn.microsoft.com/windows/win32/api/sysinfoapi/nf-sysinfoapi-getproductinfo. Valid values 0 to 2147483647. This property is read-only.
     * @return int|null
    */
    public function getSkuNumber(): ?int {
        $val = $this->getBackingStore()->get('skuNumber');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skuNumber'");
    }

    /**
     * Gets the specificationVersion property value. Specification version. This property is read-only.
     * @return string|null
    */
    public function getSpecificationVersion(): ?string {
        $val = $this->getBackingStore()->get('specificationVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'specificationVersion'");
    }

    /**
     * Gets the subscriberCarrier property value. Subscriber Carrier. This property is read-only.
     * @return string|null
    */
    public function getSubscriberCarrier(): ?string {
        $val = $this->getBackingStore()->get('subscriberCarrier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subscriberCarrier'");
    }

    /**
     * Gets the totalStorageSpaceInBytes property value. Total Storage in Bytes. This property is read-only.
     * @return int|null
    */
    public function getTotalStorageSpaceInBytes(): ?int {
        $val = $this->getBackingStore()->get('totalStorageSpaceInBytes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalStorageSpaceInBytes'");
    }

    /**
     * Gets the udid property value. Unique Device Identifier for iOS and macOS devices. Default is an empty string. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. $Search is not supported. Read-only. This property is read-only.
     * @return string|null
    */
    public function getUdid(): ?string {
        $val = $this->getBackingStore()->get('udid');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'udid'");
    }

    /**
     * Gets the userDisplayName property value. User display name. This property is read-only.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        $val = $this->getBackingStore()->get('userDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userDisplayName'");
    }

    /**
     * Gets the userId property value. Unique Identifier for the user associated with the device. This property is read-only.
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Gets the userPrincipalName property value. Device user principal name. This property is read-only.
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
     * Gets the users property value. The primary users associated with the managed device.
     * @return array<User>|null
    */
    public function getUsers(): ?array {
        $val = $this->getBackingStore()->get('users');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, User::class);
            /** @var array<User>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'users'");
    }

    /**
     * Gets the usersLoggedOn property value. Indicates the last logged on users of a device. This property is read-only.
     * @return array<LoggedOnUser>|null
    */
    public function getUsersLoggedOn(): ?array {
        $val = $this->getBackingStore()->get('usersLoggedOn');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LoggedOnUser::class);
            /** @var array<LoggedOnUser>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usersLoggedOn'");
    }

    /**
     * Gets the wiFiMacAddress property value. Wi-Fi MAC. This property is read-only.
     * @return string|null
    */
    public function getWiFiMacAddress(): ?string {
        $val = $this->getBackingStore()->get('wiFiMacAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wiFiMacAddress'");
    }

    /**
     * Gets the windowsActiveMalwareCount property value. Count of active malware for this windows device. Default is 0. To retrieve actual values GET call needs to be made, with device id and included in select parameter. This property is read-only.
     * @return int|null
    */
    public function getWindowsActiveMalwareCount(): ?int {
        $val = $this->getBackingStore()->get('windowsActiveMalwareCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsActiveMalwareCount'");
    }

    /**
     * Gets the windowsProtectionState property value. The device protection status. This property is read-only.
     * @return WindowsProtectionState|null
    */
    public function getWindowsProtectionState(): ?WindowsProtectionState {
        $val = $this->getBackingStore()->get('windowsProtectionState');
        if (is_null($val) || $val instanceof WindowsProtectionState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsProtectionState'");
    }

    /**
     * Gets the windowsRemediatedMalwareCount property value. Count of remediated malware for this windows device. Default is 0. To retrieve actual values GET call needs to be made, with device id and included in select parameter. This property is read-only.
     * @return int|null
    */
    public function getWindowsRemediatedMalwareCount(): ?int {
        $val = $this->getBackingStore()->get('windowsRemediatedMalwareCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsRemediatedMalwareCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignmentFilterEvaluationStatusDetails', $this->getAssignmentFilterEvaluationStatusDetails());
        $writer->writeEnumValue('chassisType', $this->getChassisType());
        $writer->writeCollectionOfObjectValues('chromeOSDeviceInfo', $this->getChromeOSDeviceInfo());
        $writer->writeCollectionOfObjectValues('cloudPcRemoteActionResults', $this->getCloudPcRemoteActionResults());
        $writer->writeEnumValue('complianceState', $this->getComplianceState());
        $writer->writeObjectValue('configurationManagerClientHealthState', $this->getConfigurationManagerClientHealthState());
        $writer->writeObjectValue('configurationManagerClientInformation', $this->getConfigurationManagerClientInformation());
        $writer->writeCollectionOfObjectValues('detectedApps', $this->getDetectedApps());
        $writer->writeObjectValue('deviceCategory', $this->getDeviceCategory());
        $writer->writeCollectionOfObjectValues('deviceCompliancePolicyStates', $this->getDeviceCompliancePolicyStates());
        $writer->writeCollectionOfObjectValues('deviceConfigurationStates', $this->getDeviceConfigurationStates());
        $writer->writeEnumValue('deviceEnrollmentType', $this->getDeviceEnrollmentType());
        $writer->writeBooleanValue('deviceFirmwareConfigurationInterfaceManaged', $this->getDeviceFirmwareConfigurationInterfaceManaged());
        $writer->writeCollectionOfObjectValues('deviceHealthScriptStates', $this->getDeviceHealthScriptStates());
        $writer->writeEnumValue('deviceRegistrationState', $this->getDeviceRegistrationState());
        $writer->writeEnumValue('deviceType', $this->getDeviceType());
        $writer->writeEnumValue('exchangeAccessState', $this->getExchangeAccessState());
        $writer->writeEnumValue('exchangeAccessStateReason', $this->getExchangeAccessStateReason());
        $writer->writeEnumValue('joinType', $this->getJoinType());
        $writer->writeCollectionOfObjectValues('logCollectionRequests', $this->getLogCollectionRequests());
        $writer->writeEnumValue('lostModeState', $this->getLostModeState());
        $writer->writeCollectionOfObjectValues('managedDeviceMobileAppConfigurationStates', $this->getManagedDeviceMobileAppConfigurationStates());
        $writer->writeStringValue('managedDeviceName', $this->getManagedDeviceName());
        $writer->writeEnumValue('managedDeviceOwnerType', $this->getManagedDeviceOwnerType());
        $writer->writeEnumValue('managementAgent', $this->getManagementAgent());
        $writer->writeEnumValue('managementFeatures', $this->getManagementFeatures());
        $writer->writeEnumValue('managementState', $this->getManagementState());
        $writer->writeStringValue('notes', $this->getNotes());
        $writer->writeEnumValue('ownerType', $this->getOwnerType());
        $writer->writeEnumValue('partnerReportedThreatState', $this->getPartnerReportedThreatState());
        $writer->writeEnumValue('processorArchitecture', $this->getProcessorArchitecture());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeCollectionOfObjectValues('securityBaselineStates', $this->getSecurityBaselineStates());
        $writer->writeStringValue('skuFamily', $this->getSkuFamily());
        $writer->writeCollectionOfObjectValues('users', $this->getUsers());
        $writer->writeObjectValue('windowsProtectionState', $this->getWindowsProtectionState());
    }

    /**
     * Sets the aadRegistered property value. Whether the device is Azure Active Directory registered. This property is read-only.
     * @param bool|null $value Value to set for the aadRegistered property.
    */
    public function setAadRegistered(?bool $value): void {
        $this->getBackingStore()->set('aadRegistered', $value);
    }

    /**
     * Sets the activationLockBypassCode property value. The code that allows the Activation Lock on managed device to be bypassed. Default, is Null (Non-Default property) for this property when returned as part of managedDevice entity in LIST call. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. $Search is not supported. Read-only. This property is read-only.
     * @param string|null $value Value to set for the activationLockBypassCode property.
    */
    public function setActivationLockBypassCode(?string $value): void {
        $this->getBackingStore()->set('activationLockBypassCode', $value);
    }

    /**
     * Sets the androidSecurityPatchLevel property value. Android security patch level. This property is read-only.
     * @param string|null $value Value to set for the androidSecurityPatchLevel property.
    */
    public function setAndroidSecurityPatchLevel(?string $value): void {
        $this->getBackingStore()->set('androidSecurityPatchLevel', $value);
    }

    /**
     * Sets the assignmentFilterEvaluationStatusDetails property value. Managed device mobile app configuration states for this device.
     * @param array<AssignmentFilterEvaluationStatusDetails>|null $value Value to set for the assignmentFilterEvaluationStatusDetails property.
    */
    public function setAssignmentFilterEvaluationStatusDetails(?array $value): void {
        $this->getBackingStore()->set('assignmentFilterEvaluationStatusDetails', $value);
    }

    /**
     * Sets the autopilotEnrolled property value. Reports if the managed device is enrolled via auto-pilot. This property is read-only.
     * @param bool|null $value Value to set for the autopilotEnrolled property.
    */
    public function setAutopilotEnrolled(?bool $value): void {
        $this->getBackingStore()->set('autopilotEnrolled', $value);
    }

    /**
     * Sets the azureActiveDirectoryDeviceId property value. The unique identifier for the Azure Active Directory device. Read only. This property is read-only.
     * @param string|null $value Value to set for the azureActiveDirectoryDeviceId property.
    */
    public function setAzureActiveDirectoryDeviceId(?string $value): void {
        $this->getBackingStore()->set('azureActiveDirectoryDeviceId', $value);
    }

    /**
     * Sets the azureADDeviceId property value. The unique identifier for the Azure Active Directory device. Read only. This property is read-only.
     * @param string|null $value Value to set for the azureADDeviceId property.
    */
    public function setAzureADDeviceId(?string $value): void {
        $this->getBackingStore()->set('azureADDeviceId', $value);
    }

    /**
     * Sets the azureADRegistered property value. Whether the device is Azure Active Directory registered. This property is read-only.
     * @param bool|null $value Value to set for the azureADRegistered property.
    */
    public function setAzureADRegistered(?bool $value): void {
        $this->getBackingStore()->set('azureADRegistered', $value);
    }

    /**
     * Sets the bootstrapTokenEscrowed property value. Reports if the managed device has an escrowed Bootstrap Token. This is only for macOS devices. To get, include BootstrapTokenEscrowed in the select clause and query with a device id. If FALSE, no bootstrap token is escrowed. If TRUE, the device has escrowed a bootstrap token with Intune. This property is read-only.
     * @param bool|null $value Value to set for the bootstrapTokenEscrowed property.
    */
    public function setBootstrapTokenEscrowed(?bool $value): void {
        $this->getBackingStore()->set('bootstrapTokenEscrowed', $value);
    }

    /**
     * Sets the chassisType property value. Chassis type.
     * @param ChassisType|null $value Value to set for the chassisType property.
    */
    public function setChassisType(?ChassisType $value): void {
        $this->getBackingStore()->set('chassisType', $value);
    }

    /**
     * Sets the chromeOSDeviceInfo property value. List of properties of the ChromeOS Device. Default is an empty list. To retrieve actual values GET call needs to be made, with device id and included in select parameter.
     * @param array<ChromeOSDeviceProperty>|null $value Value to set for the chromeOSDeviceInfo property.
    */
    public function setChromeOSDeviceInfo(?array $value): void {
        $this->getBackingStore()->set('chromeOSDeviceInfo', $value);
    }

    /**
     * Sets the cloudPcRemoteActionResults property value. The cloudPcRemoteActionResults property
     * @param array<CloudPcRemoteActionResult>|null $value Value to set for the cloudPcRemoteActionResults property.
    */
    public function setCloudPcRemoteActionResults(?array $value): void {
        $this->getBackingStore()->set('cloudPcRemoteActionResults', $value);
    }

    /**
     * Sets the complianceGracePeriodExpirationDateTime property value. The DateTime when device compliance grace period expires. This property is read-only.
     * @param DateTime|null $value Value to set for the complianceGracePeriodExpirationDateTime property.
    */
    public function setComplianceGracePeriodExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('complianceGracePeriodExpirationDateTime', $value);
    }

    /**
     * Sets the complianceState property value. Compliance state.
     * @param ComplianceState|null $value Value to set for the complianceState property.
    */
    public function setComplianceState(?ComplianceState $value): void {
        $this->getBackingStore()->set('complianceState', $value);
    }

    /**
     * Sets the configurationManagerClientEnabledFeatures property value. ConfigrMgr client enabled features. This property is read-only.
     * @param ConfigurationManagerClientEnabledFeatures|null $value Value to set for the configurationManagerClientEnabledFeatures property.
    */
    public function setConfigurationManagerClientEnabledFeatures(?ConfigurationManagerClientEnabledFeatures $value): void {
        $this->getBackingStore()->set('configurationManagerClientEnabledFeatures', $value);
    }

    /**
     * Sets the configurationManagerClientHealthState property value. Configuration manager client health state, valid only for devices managed by MDM/ConfigMgr Agent
     * @param ConfigurationManagerClientHealthState|null $value Value to set for the configurationManagerClientHealthState property.
    */
    public function setConfigurationManagerClientHealthState(?ConfigurationManagerClientHealthState $value): void {
        $this->getBackingStore()->set('configurationManagerClientHealthState', $value);
    }

    /**
     * Sets the configurationManagerClientInformation property value. Configuration manager client information, valid only for devices managed, duel-managed or tri-managed by ConfigMgr Agent
     * @param ConfigurationManagerClientInformation|null $value Value to set for the configurationManagerClientInformation property.
    */
    public function setConfigurationManagerClientInformation(?ConfigurationManagerClientInformation $value): void {
        $this->getBackingStore()->set('configurationManagerClientInformation', $value);
    }

    /**
     * Sets the detectedApps property value. All applications currently installed on the device
     * @param array<DetectedApp>|null $value Value to set for the detectedApps property.
    */
    public function setDetectedApps(?array $value): void {
        $this->getBackingStore()->set('detectedApps', $value);
    }

    /**
     * Sets the deviceActionResults property value. List of ComplexType deviceActionResult objects. This property is read-only.
     * @param array<DeviceActionResult>|null $value Value to set for the deviceActionResults property.
    */
    public function setDeviceActionResults(?array $value): void {
        $this->getBackingStore()->set('deviceActionResults', $value);
    }

    /**
     * Sets the deviceCategory property value. Device category
     * @param DeviceCategory|null $value Value to set for the deviceCategory property.
    */
    public function setDeviceCategory(?DeviceCategory $value): void {
        $this->getBackingStore()->set('deviceCategory', $value);
    }

    /**
     * Sets the deviceCategoryDisplayName property value. Device category display name. Default is an empty string. Supports $filter operator 'eq' and 'or'. This property is read-only.
     * @param string|null $value Value to set for the deviceCategoryDisplayName property.
    */
    public function setDeviceCategoryDisplayName(?string $value): void {
        $this->getBackingStore()->set('deviceCategoryDisplayName', $value);
    }

    /**
     * Sets the deviceCompliancePolicyStates property value. Device compliance policy states for this device.
     * @param array<DeviceCompliancePolicyState>|null $value Value to set for the deviceCompliancePolicyStates property.
    */
    public function setDeviceCompliancePolicyStates(?array $value): void {
        $this->getBackingStore()->set('deviceCompliancePolicyStates', $value);
    }

    /**
     * Sets the deviceConfigurationStates property value. Device configuration states for this device.
     * @param array<DeviceConfigurationState>|null $value Value to set for the deviceConfigurationStates property.
    */
    public function setDeviceConfigurationStates(?array $value): void {
        $this->getBackingStore()->set('deviceConfigurationStates', $value);
    }

    /**
     * Sets the deviceEnrollmentType property value. Possible ways of adding a mobile device to management.
     * @param DeviceEnrollmentType|null $value Value to set for the deviceEnrollmentType property.
    */
    public function setDeviceEnrollmentType(?DeviceEnrollmentType $value): void {
        $this->getBackingStore()->set('deviceEnrollmentType', $value);
    }

    /**
     * Sets the deviceFirmwareConfigurationInterfaceManaged property value. Indicates whether the device is DFCI managed. When TRUE the device is DFCI managed. When FALSE, the device is not DFCI managed. The default value is FALSE.
     * @param bool|null $value Value to set for the deviceFirmwareConfigurationInterfaceManaged property.
    */
    public function setDeviceFirmwareConfigurationInterfaceManaged(?bool $value): void {
        $this->getBackingStore()->set('deviceFirmwareConfigurationInterfaceManaged', $value);
    }

    /**
     * Sets the deviceHealthAttestationState property value. The device health attestation state. This property is read-only.
     * @param DeviceHealthAttestationState|null $value Value to set for the deviceHealthAttestationState property.
    */
    public function setDeviceHealthAttestationState(?DeviceHealthAttestationState $value): void {
        $this->getBackingStore()->set('deviceHealthAttestationState', $value);
    }

    /**
     * Sets the deviceHealthScriptStates property value. Results of device health scripts that ran for this device. Default is empty list. This property is read-only.
     * @param array<DeviceHealthScriptPolicyState>|null $value Value to set for the deviceHealthScriptStates property.
    */
    public function setDeviceHealthScriptStates(?array $value): void {
        $this->getBackingStore()->set('deviceHealthScriptStates', $value);
    }

    /**
     * Sets the deviceName property value. Name of the device. Supports $filter operator 'eq' and 'contains'. This property is read-only.
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the deviceRegistrationState property value. Device registration status.
     * @param DeviceRegistrationState|null $value Value to set for the deviceRegistrationState property.
    */
    public function setDeviceRegistrationState(?DeviceRegistrationState $value): void {
        $this->getBackingStore()->set('deviceRegistrationState', $value);
    }

    /**
     * Sets the deviceType property value. Device type.
     * @param DeviceType|null $value Value to set for the deviceType property.
    */
    public function setDeviceType(?DeviceType $value): void {
        $this->getBackingStore()->set('deviceType', $value);
    }

    /**
     * Sets the easActivated property value. Whether the device is Exchange ActiveSync activated. This property is read-only.
     * @param bool|null $value Value to set for the easActivated property.
    */
    public function setEasActivated(?bool $value): void {
        $this->getBackingStore()->set('easActivated', $value);
    }

    /**
     * Sets the easActivationDateTime property value. Exchange ActivationSync activation time of the device. This property is read-only.
     * @param DateTime|null $value Value to set for the easActivationDateTime property.
    */
    public function setEasActivationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('easActivationDateTime', $value);
    }

    /**
     * Sets the easDeviceId property value. Exchange ActiveSync Id of the device. This property is read-only.
     * @param string|null $value Value to set for the easDeviceId property.
    */
    public function setEasDeviceId(?string $value): void {
        $this->getBackingStore()->set('easDeviceId', $value);
    }

    /**
     * Sets the emailAddress property value. Email(s) for the user associated with the device. This property is read-only.
     * @param string|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?string $value): void {
        $this->getBackingStore()->set('emailAddress', $value);
    }

    /**
     * Sets the enrolledByUserPrincipalName property value. The Entra (Azure AD) User Principal Name (UPN) of the user responsible for the enrollment of the device. This property is read-only.
     * @param string|null $value Value to set for the enrolledByUserPrincipalName property.
    */
    public function setEnrolledByUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('enrolledByUserPrincipalName', $value);
    }

    /**
     * Sets the enrolledDateTime property value. Enrollment time of the device. Supports $filter operator 'lt' and 'gt'. This property is read-only.
     * @param DateTime|null $value Value to set for the enrolledDateTime property.
    */
    public function setEnrolledDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('enrolledDateTime', $value);
    }

    /**
     * Sets the enrollmentProfileName property value. Name of the enrollment profile assigned to the device. Default value is empty string, indicating no enrollment profile was assgined. This property is read-only.
     * @param string|null $value Value to set for the enrollmentProfileName property.
    */
    public function setEnrollmentProfileName(?string $value): void {
        $this->getBackingStore()->set('enrollmentProfileName', $value);
    }

    /**
     * Sets the ethernetMacAddress property value. Indicates Ethernet MAC Address of the device. Default, is Null (Non-Default property) for this property when returned as part of managedDevice entity. Individual get call with select query options is needed to retrieve actual values. Example: deviceManagement/managedDevices({managedDeviceId})?$select=ethernetMacAddress Supports: $select. $Search is not supported. Read-only. This property is read-only.
     * @param string|null $value Value to set for the ethernetMacAddress property.
    */
    public function setEthernetMacAddress(?string $value): void {
        $this->getBackingStore()->set('ethernetMacAddress', $value);
    }

    /**
     * Sets the exchangeAccessState property value. Device Exchange Access State.
     * @param DeviceManagementExchangeAccessState|null $value Value to set for the exchangeAccessState property.
    */
    public function setExchangeAccessState(?DeviceManagementExchangeAccessState $value): void {
        $this->getBackingStore()->set('exchangeAccessState', $value);
    }

    /**
     * Sets the exchangeAccessStateReason property value. Device Exchange Access State Reason.
     * @param DeviceManagementExchangeAccessStateReason|null $value Value to set for the exchangeAccessStateReason property.
    */
    public function setExchangeAccessStateReason(?DeviceManagementExchangeAccessStateReason $value): void {
        $this->getBackingStore()->set('exchangeAccessStateReason', $value);
    }

    /**
     * Sets the exchangeLastSuccessfulSyncDateTime property value. Last time the device contacted Exchange. This property is read-only.
     * @param DateTime|null $value Value to set for the exchangeLastSuccessfulSyncDateTime property.
    */
    public function setExchangeLastSuccessfulSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('exchangeLastSuccessfulSyncDateTime', $value);
    }

    /**
     * Sets the freeStorageSpaceInBytes property value. Free Storage in Bytes. Default value is 0. Read-only. This property is read-only.
     * @param int|null $value Value to set for the freeStorageSpaceInBytes property.
    */
    public function setFreeStorageSpaceInBytes(?int $value): void {
        $this->getBackingStore()->set('freeStorageSpaceInBytes', $value);
    }

    /**
     * Sets the hardwareInformation property value. The hardward details for the device. Includes information such as storage space, manufacturer, serial number, etc. By default most property of this type are set to null/0/false and enum defaults for associated types. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. $Search is not supported. Read-only. This property is read-only.
     * @param HardwareInformation|null $value Value to set for the hardwareInformation property.
    */
    public function setHardwareInformation(?HardwareInformation $value): void {
        $this->getBackingStore()->set('hardwareInformation', $value);
    }

    /**
     * Sets the iccid property value. Integrated Circuit Card Identifier, it is A SIM card's unique identification number. Default is an empty string. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. $Search is not supported. Read-only. This property is read-only.
     * @param string|null $value Value to set for the iccid property.
    */
    public function setIccid(?string $value): void {
        $this->getBackingStore()->set('iccid', $value);
    }

    /**
     * Sets the imei property value. IMEI. This property is read-only.
     * @param string|null $value Value to set for the imei property.
    */
    public function setImei(?string $value): void {
        $this->getBackingStore()->set('imei', $value);
    }

    /**
     * Sets the isEncrypted property value. Device encryption status. This property is read-only.
     * @param bool|null $value Value to set for the isEncrypted property.
    */
    public function setIsEncrypted(?bool $value): void {
        $this->getBackingStore()->set('isEncrypted', $value);
    }

    /**
     * Sets the isSupervised property value. Device supervised status. This property is read-only.
     * @param bool|null $value Value to set for the isSupervised property.
    */
    public function setIsSupervised(?bool $value): void {
        $this->getBackingStore()->set('isSupervised', $value);
    }

    /**
     * Sets the jailBroken property value. Whether the device is jail broken or rooted. Default is an empty string. Supports $filter operator 'eq' and 'or'. This property is read-only.
     * @param string|null $value Value to set for the jailBroken property.
    */
    public function setJailBroken(?string $value): void {
        $this->getBackingStore()->set('jailBroken', $value);
    }

    /**
     * Sets the joinType property value. Device enrollment join type.
     * @param JoinType|null $value Value to set for the joinType property.
    */
    public function setJoinType(?JoinType $value): void {
        $this->getBackingStore()->set('joinType', $value);
    }

    /**
     * Sets the lastSyncDateTime property value. The date and time that the device last completed a successful sync with Intune. Supports $filter operator 'lt' and 'gt'. This property is read-only.
     * @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSyncDateTime', $value);
    }

    /**
     * Sets the logCollectionRequests property value. List of log collection requests
     * @param array<DeviceLogCollectionResponse>|null $value Value to set for the logCollectionRequests property.
    */
    public function setLogCollectionRequests(?array $value): void {
        $this->getBackingStore()->set('logCollectionRequests', $value);
    }

    /**
     * Sets the lostModeState property value. State of lost mode, indicating if lost mode is enabled or disabled
     * @param LostModeState|null $value Value to set for the lostModeState property.
    */
    public function setLostModeState(?LostModeState $value): void {
        $this->getBackingStore()->set('lostModeState', $value);
    }

    /**
     * Sets the managedDeviceMobileAppConfigurationStates property value. Managed device mobile app configuration states for this device.
     * @param array<ManagedDeviceMobileAppConfigurationState>|null $value Value to set for the managedDeviceMobileAppConfigurationStates property.
    */
    public function setManagedDeviceMobileAppConfigurationStates(?array $value): void {
        $this->getBackingStore()->set('managedDeviceMobileAppConfigurationStates', $value);
    }

    /**
     * Sets the managedDeviceName property value. Automatically generated name to identify a device. Can be overwritten to a user friendly name.
     * @param string|null $value Value to set for the managedDeviceName property.
    */
    public function setManagedDeviceName(?string $value): void {
        $this->getBackingStore()->set('managedDeviceName', $value);
    }

    /**
     * Sets the managedDeviceOwnerType property value. Owner type of device.
     * @param ManagedDeviceOwnerType|null $value Value to set for the managedDeviceOwnerType property.
    */
    public function setManagedDeviceOwnerType(?ManagedDeviceOwnerType $value): void {
        $this->getBackingStore()->set('managedDeviceOwnerType', $value);
    }

    /**
     * Sets the managementAgent property value. Management agent type.
     * @param ManagementAgentType|null $value Value to set for the managementAgent property.
    */
    public function setManagementAgent(?ManagementAgentType $value): void {
        $this->getBackingStore()->set('managementAgent', $value);
    }

    /**
     * Sets the managementCertificateExpirationDate property value. Reports device management certificate expiration date. This property is read-only.
     * @param DateTime|null $value Value to set for the managementCertificateExpirationDate property.
    */
    public function setManagementCertificateExpirationDate(?DateTime $value): void {
        $this->getBackingStore()->set('managementCertificateExpirationDate', $value);
    }

    /**
     * Sets the managementFeatures property value. Device management features.
     * @param ManagedDeviceManagementFeatures|null $value Value to set for the managementFeatures property.
    */
    public function setManagementFeatures(?ManagedDeviceManagementFeatures $value): void {
        $this->getBackingStore()->set('managementFeatures', $value);
    }

    /**
     * Sets the managementState property value. Management state of device in Microsoft Intune.
     * @param ManagementState|null $value Value to set for the managementState property.
    */
    public function setManagementState(?ManagementState $value): void {
        $this->getBackingStore()->set('managementState', $value);
    }

    /**
     * Sets the manufacturer property value. Manufacturer of the device. This property is read-only.
     * @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the meid property value. MEID. This property is read-only.
     * @param string|null $value Value to set for the meid property.
    */
    public function setMeid(?string $value): void {
        $this->getBackingStore()->set('meid', $value);
    }

    /**
     * Sets the model property value. Model of the device. This property is read-only.
     * @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

    /**
     * Sets the notes property value. Notes on the device created by IT Admin. Default is null. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. $Search is not supported.
     * @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value): void {
        $this->getBackingStore()->set('notes', $value);
    }

    /**
     * Sets the operatingSystem property value. Operating system of the device. Windows, iOS, etc. This property is read-only.
     * @param string|null $value Value to set for the operatingSystem property.
    */
    public function setOperatingSystem(?string $value): void {
        $this->getBackingStore()->set('operatingSystem', $value);
    }

    /**
     * Sets the osVersion property value. Operating system version of the device. This property is read-only.
     * @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the ownerType property value. Owner type of device.
     * @param OwnerType|null $value Value to set for the ownerType property.
    */
    public function setOwnerType(?OwnerType $value): void {
        $this->getBackingStore()->set('ownerType', $value);
    }

    /**
     * Sets the partnerReportedThreatState property value. Available health states for the Device Health API
     * @param ManagedDevicePartnerReportedHealthState|null $value Value to set for the partnerReportedThreatState property.
    */
    public function setPartnerReportedThreatState(?ManagedDevicePartnerReportedHealthState $value): void {
        $this->getBackingStore()->set('partnerReportedThreatState', $value);
    }

    /**
     * Sets the phoneNumber property value. Phone number of the device. This property is read-only.
     * @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value): void {
        $this->getBackingStore()->set('phoneNumber', $value);
    }

    /**
     * Sets the physicalMemoryInBytes property value. Total Memory in Bytes. Default is 0. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. Read-only. This property is read-only.
     * @param int|null $value Value to set for the physicalMemoryInBytes property.
    */
    public function setPhysicalMemoryInBytes(?int $value): void {
        $this->getBackingStore()->set('physicalMemoryInBytes', $value);
    }

    /**
     * Sets the preferMdmOverGroupPolicyAppliedDateTime property value. Reports the DateTime the preferMdmOverGroupPolicy setting was set.  When set, the Intune MDM settings will override Group Policy settings if there is a conflict. Read Only. This property is read-only.
     * @param DateTime|null $value Value to set for the preferMdmOverGroupPolicyAppliedDateTime property.
    */
    public function setPreferMdmOverGroupPolicyAppliedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('preferMdmOverGroupPolicyAppliedDateTime', $value);
    }

    /**
     * Sets the processorArchitecture property value. Processor architecture
     * @param ManagedDeviceArchitecture|null $value Value to set for the processorArchitecture property.
    */
    public function setProcessorArchitecture(?ManagedDeviceArchitecture $value): void {
        $this->getBackingStore()->set('processorArchitecture', $value);
    }

    /**
     * Sets the remoteAssistanceSessionErrorDetails property value. An error string that identifies issues when creating Remote Assistance session objects. This property is read-only.
     * @param string|null $value Value to set for the remoteAssistanceSessionErrorDetails property.
    */
    public function setRemoteAssistanceSessionErrorDetails(?string $value): void {
        $this->getBackingStore()->set('remoteAssistanceSessionErrorDetails', $value);
    }

    /**
     * Sets the remoteAssistanceSessionUrl property value. Url that allows a Remote Assistance session to be established with the device. Default is an empty string. To retrieve actual values GET call needs to be made, with device id and included in select parameter. This property is read-only.
     * @param string|null $value Value to set for the remoteAssistanceSessionUrl property.
    */
    public function setRemoteAssistanceSessionUrl(?string $value): void {
        $this->getBackingStore()->set('remoteAssistanceSessionUrl', $value);
    }

    /**
     * Sets the requireUserEnrollmentApproval property value. Reports if the managed iOS device is user approval enrollment. This property is read-only.
     * @param bool|null $value Value to set for the requireUserEnrollmentApproval property.
    */
    public function setRequireUserEnrollmentApproval(?bool $value): void {
        $this->getBackingStore()->set('requireUserEnrollmentApproval', $value);
    }

    /**
     * Sets the retireAfterDateTime property value. Indicates the time after when a device will be auto retired because of scheduled action. This property is read-only.
     * @param DateTime|null $value Value to set for the retireAfterDateTime property.
    */
    public function setRetireAfterDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('retireAfterDateTime', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tag IDs for this Device instance.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the securityBaselineStates property value. Security baseline states for this device.
     * @param array<SecurityBaselineState>|null $value Value to set for the securityBaselineStates property.
    */
    public function setSecurityBaselineStates(?array $value): void {
        $this->getBackingStore()->set('securityBaselineStates', $value);
    }

    /**
     * Sets the securityPatchLevel property value. This indicates the security patch level of the operating system. These special updates contain important security fixes. For iOS/MacOS they are in (a) format. For android its in 2017-08-07 format. This property is read-only.
     * @param string|null $value Value to set for the securityPatchLevel property.
    */
    public function setSecurityPatchLevel(?string $value): void {
        $this->getBackingStore()->set('securityPatchLevel', $value);
    }

    /**
     * Sets the serialNumber property value. SerialNumber. This property is read-only.
     * @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value): void {
        $this->getBackingStore()->set('serialNumber', $value);
    }

    /**
     * Sets the skuFamily property value. Device sku family
     * @param string|null $value Value to set for the skuFamily property.
    */
    public function setSkuFamily(?string $value): void {
        $this->getBackingStore()->set('skuFamily', $value);
    }

    /**
     * Sets the skuNumber property value. Device sku number, see also: https://learn.microsoft.com/windows/win32/api/sysinfoapi/nf-sysinfoapi-getproductinfo. Valid values 0 to 2147483647. This property is read-only.
     * @param int|null $value Value to set for the skuNumber property.
    */
    public function setSkuNumber(?int $value): void {
        $this->getBackingStore()->set('skuNumber', $value);
    }

    /**
     * Sets the specificationVersion property value. Specification version. This property is read-only.
     * @param string|null $value Value to set for the specificationVersion property.
    */
    public function setSpecificationVersion(?string $value): void {
        $this->getBackingStore()->set('specificationVersion', $value);
    }

    /**
     * Sets the subscriberCarrier property value. Subscriber Carrier. This property is read-only.
     * @param string|null $value Value to set for the subscriberCarrier property.
    */
    public function setSubscriberCarrier(?string $value): void {
        $this->getBackingStore()->set('subscriberCarrier', $value);
    }

    /**
     * Sets the totalStorageSpaceInBytes property value. Total Storage in Bytes. This property is read-only.
     * @param int|null $value Value to set for the totalStorageSpaceInBytes property.
    */
    public function setTotalStorageSpaceInBytes(?int $value): void {
        $this->getBackingStore()->set('totalStorageSpaceInBytes', $value);
    }

    /**
     * Sets the udid property value. Unique Device Identifier for iOS and macOS devices. Default is an empty string. To retrieve actual values GET call needs to be made, with device id and included in select parameter. Supports: $select. $Search is not supported. Read-only. This property is read-only.
     * @param string|null $value Value to set for the udid property.
    */
    public function setUdid(?string $value): void {
        $this->getBackingStore()->set('udid', $value);
    }

    /**
     * Sets the userDisplayName property value. User display name. This property is read-only.
     * @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value): void {
        $this->getBackingStore()->set('userDisplayName', $value);
    }

    /**
     * Sets the userId property value. Unique Identifier for the user associated with the device. This property is read-only.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userPrincipalName property value. Device user principal name. This property is read-only.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

    /**
     * Sets the users property value. The primary users associated with the managed device.
     * @param array<User>|null $value Value to set for the users property.
    */
    public function setUsers(?array $value): void {
        $this->getBackingStore()->set('users', $value);
    }

    /**
     * Sets the usersLoggedOn property value. Indicates the last logged on users of a device. This property is read-only.
     * @param array<LoggedOnUser>|null $value Value to set for the usersLoggedOn property.
    */
    public function setUsersLoggedOn(?array $value): void {
        $this->getBackingStore()->set('usersLoggedOn', $value);
    }

    /**
     * Sets the wiFiMacAddress property value. Wi-Fi MAC. This property is read-only.
     * @param string|null $value Value to set for the wiFiMacAddress property.
    */
    public function setWiFiMacAddress(?string $value): void {
        $this->getBackingStore()->set('wiFiMacAddress', $value);
    }

    /**
     * Sets the windowsActiveMalwareCount property value. Count of active malware for this windows device. Default is 0. To retrieve actual values GET call needs to be made, with device id and included in select parameter. This property is read-only.
     * @param int|null $value Value to set for the windowsActiveMalwareCount property.
    */
    public function setWindowsActiveMalwareCount(?int $value): void {
        $this->getBackingStore()->set('windowsActiveMalwareCount', $value);
    }

    /**
     * Sets the windowsProtectionState property value. The device protection status. This property is read-only.
     * @param WindowsProtectionState|null $value Value to set for the windowsProtectionState property.
    */
    public function setWindowsProtectionState(?WindowsProtectionState $value): void {
        $this->getBackingStore()->set('windowsProtectionState', $value);
    }

    /**
     * Sets the windowsRemediatedMalwareCount property value. Count of remediated malware for this windows device. Default is 0. To retrieve actual values GET call needs to be made, with device id and included in select parameter. This property is read-only.
     * @param int|null $value Value to set for the windowsRemediatedMalwareCount property.
    */
    public function setWindowsRemediatedMalwareCount(?int $value): void {
        $this->getBackingStore()->set('windowsRemediatedMalwareCount', $value);
    }

}
