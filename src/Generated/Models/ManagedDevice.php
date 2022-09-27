<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedDevice extends Entity implements Parsable 
{
    /**
     * @var bool|null $aadRegistered Whether the device is Azure Active Directory registered. This property is read-only.
    */
    private ?bool $aadRegistered = null;
    
    /**
     * @var string|null $activationLockBypassCode Code that allows the Activation Lock on a device to be bypassed. This property is read-only.
    */
    private ?string $activationLockBypassCode = null;
    
    /**
     * @var string|null $androidSecurityPatchLevel Android security patch level. This property is read-only.
    */
    private ?string $androidSecurityPatchLevel = null;
    
    /**
     * @var array<AssignmentFilterEvaluationStatusDetails>|null $assignmentFilterEvaluationStatusDetails Managed device mobile app configuration states for this device.
    */
    private ?array $assignmentFilterEvaluationStatusDetails = null;
    
    /**
     * @var bool|null $autopilotEnrolled Reports if the managed device is enrolled via auto-pilot. This property is read-only.
    */
    private ?bool $autopilotEnrolled = null;
    
    /**
     * @var string|null $azureActiveDirectoryDeviceId The unique identifier for the Azure Active Directory device. Read only. This property is read-only.
    */
    private ?string $azureActiveDirectoryDeviceId = null;
    
    /**
     * @var string|null $azureADDeviceId The unique identifier for the Azure Active Directory device. Read only. This property is read-only.
    */
    private ?string $azureADDeviceId = null;
    
    /**
     * @var bool|null $azureADRegistered Whether the device is Azure Active Directory registered. This property is read-only.
    */
    private ?bool $azureADRegistered = null;
    
    /**
     * @var bool|null $bootstrapTokenEscrowed Reports if the managed device has an escrowed Bootstrap Token. This is only for macOS devices. To get, include BootstrapTokenEscrowed in the select clause and query with a device id. If FALSE, no bootstrap token is escrowed. If TRUE, the device has escrowed a bootstrap token with Intune. This property is read-only.
    */
    private ?bool $bootstrapTokenEscrowed = null;
    
    /**
     * @var ChassisType|null $chassisType Chassis type.
    */
    private ?ChassisType $chassisType = null;
    
    /**
     * @var array<ChromeOSDeviceProperty>|null $chromeOSDeviceInfo List of properties of the ChromeOS Device.
    */
    private ?array $chromeOSDeviceInfo = null;
    
    /**
     * @var array<CloudPcRemoteActionResult>|null $cloudPcRemoteActionResults The cloudPcRemoteActionResults property
    */
    private ?array $cloudPcRemoteActionResults = null;
    
    /**
     * @var DateTime|null $complianceGracePeriodExpirationDateTime The DateTime when device compliance grace period expires. This property is read-only.
    */
    private ?DateTime $complianceGracePeriodExpirationDateTime = null;
    
    /**
     * @var ComplianceState|null $complianceState Compliance state.
    */
    private ?ComplianceState $complianceState = null;
    
    /**
     * @var ConfigurationManagerClientEnabledFeatures|null $configurationManagerClientEnabledFeatures ConfigrMgr client enabled features. This property is read-only.
    */
    private ?ConfigurationManagerClientEnabledFeatures $configurationManagerClientEnabledFeatures = null;
    
    /**
     * @var ConfigurationManagerClientHealthState|null $configurationManagerClientHealthState Configuration manager client health state, valid only for devices managed by MDM/ConfigMgr Agent
    */
    private ?ConfigurationManagerClientHealthState $configurationManagerClientHealthState = null;
    
    /**
     * @var ConfigurationManagerClientInformation|null $configurationManagerClientInformation Configuration manager client information, valid only for devices managed, duel-managed or tri-managed by ConfigMgr Agent
    */
    private ?ConfigurationManagerClientInformation $configurationManagerClientInformation = null;
    
    /**
     * @var array<DetectedApp>|null $detectedApps All applications currently installed on the device
    */
    private ?array $detectedApps = null;
    
    /**
     * @var array<DeviceActionResult>|null $deviceActionResults List of ComplexType deviceActionResult objects. This property is read-only.
    */
    private ?array $deviceActionResults = null;
    
    /**
     * @var DeviceCategory|null $deviceCategory Device category
    */
    private ?DeviceCategory $deviceCategory = null;
    
    /**
     * @var string|null $deviceCategoryDisplayName Device category display name. This property is read-only.
    */
    private ?string $deviceCategoryDisplayName = null;
    
    /**
     * @var array<DeviceCompliancePolicyState>|null $deviceCompliancePolicyStates Device compliance policy states for this device.
    */
    private ?array $deviceCompliancePolicyStates = null;
    
    /**
     * @var array<DeviceConfigurationState>|null $deviceConfigurationStates Device configuration states for this device.
    */
    private ?array $deviceConfigurationStates = null;
    
    /**
     * @var DeviceEnrollmentType|null $deviceEnrollmentType Possible ways of adding a mobile device to management.
    */
    private ?DeviceEnrollmentType $deviceEnrollmentType = null;
    
    /**
     * @var bool|null $deviceFirmwareConfigurationInterfaceManaged Indicates whether the device is DFCI managed. When TRUE the device is DFCI managed. When FALSE, the device is not DFCI managed. The default value is FALSE.
    */
    private ?bool $deviceFirmwareConfigurationInterfaceManaged = null;
    
    /**
     * @var DeviceHealthAttestationState|null $deviceHealthAttestationState The device health attestation state. This property is read-only.
    */
    private ?DeviceHealthAttestationState $deviceHealthAttestationState = null;
    
    /**
     * @var string|null $deviceName Name of the device. This property is read-only.
    */
    private ?string $deviceName = null;
    
    /**
     * @var DeviceRegistrationState|null $deviceRegistrationState Device registration status.
    */
    private ?DeviceRegistrationState $deviceRegistrationState = null;
    
    /**
     * @var DeviceType|null $deviceType Device type.
    */
    private ?DeviceType $deviceType = null;
    
    /**
     * @var bool|null $easActivated Whether the device is Exchange ActiveSync activated. This property is read-only.
    */
    private ?bool $easActivated = null;
    
    /**
     * @var DateTime|null $easActivationDateTime Exchange ActivationSync activation time of the device. This property is read-only.
    */
    private ?DateTime $easActivationDateTime = null;
    
    /**
     * @var string|null $easDeviceId Exchange ActiveSync Id of the device. This property is read-only.
    */
    private ?string $easDeviceId = null;
    
    /**
     * @var string|null $emailAddress Email(s) for the user associated with the device. This property is read-only.
    */
    private ?string $emailAddress = null;
    
    /**
     * @var DateTime|null $enrolledDateTime Enrollment time of the device. This property is read-only.
    */
    private ?DateTime $enrolledDateTime = null;
    
    /**
     * @var string|null $enrollmentProfileName Name of the enrollment profile assigned to the device. Default value is empty string, indicating no enrollment profile was assgined. This property is read-only.
    */
    private ?string $enrollmentProfileName = null;
    
    /**
     * @var string|null $ethernetMacAddress Ethernet MAC. This property is read-only.
    */
    private ?string $ethernetMacAddress = null;
    
    /**
     * @var DeviceManagementExchangeAccessState|null $exchangeAccessState Device Exchange Access State.
    */
    private ?DeviceManagementExchangeAccessState $exchangeAccessState = null;
    
    /**
     * @var DeviceManagementExchangeAccessStateReason|null $exchangeAccessStateReason Device Exchange Access State Reason.
    */
    private ?DeviceManagementExchangeAccessStateReason $exchangeAccessStateReason = null;
    
    /**
     * @var DateTime|null $exchangeLastSuccessfulSyncDateTime Last time the device contacted Exchange. This property is read-only.
    */
    private ?DateTime $exchangeLastSuccessfulSyncDateTime = null;
    
    /**
     * @var int|null $freeStorageSpaceInBytes Free Storage in Bytes. This property is read-only.
    */
    private ?int $freeStorageSpaceInBytes = null;
    
    /**
     * @var HardwareInformation|null $hardwareInformation The hardward details for the device.  Includes information such as storage space, manufacturer, serial number, etc. This property is read-only.
    */
    private ?HardwareInformation $hardwareInformation = null;
    
    /**
     * @var string|null $iccid Integrated Circuit Card Identifier, it is A SIM card's unique identification number. This property is read-only.
    */
    private ?string $iccid = null;
    
    /**
     * @var string|null $imei IMEI. This property is read-only.
    */
    private ?string $imei = null;
    
    /**
     * @var bool|null $isEncrypted Device encryption status. This property is read-only.
    */
    private ?bool $isEncrypted = null;
    
    /**
     * @var bool|null $isSupervised Device supervised status. This property is read-only.
    */
    private ?bool $isSupervised = null;
    
    /**
     * @var string|null $jailBroken whether the device is jail broken or rooted. This property is read-only.
    */
    private ?string $jailBroken = null;
    
    /**
     * @var JoinType|null $joinType Device enrollment join type.
    */
    private ?JoinType $joinType = null;
    
    /**
     * @var DateTime|null $lastSyncDateTime The date and time that the device last completed a successful sync with Intune. This property is read-only.
    */
    private ?DateTime $lastSyncDateTime = null;
    
    /**
     * @var array<DeviceLogCollectionResponse>|null $logCollectionRequests List of log collection requests
    */
    private ?array $logCollectionRequests = null;
    
    /**
     * @var LostModeState|null $lostModeState State of lost mode, indicating if lost mode is enabled or disabled
    */
    private ?LostModeState $lostModeState = null;
    
    /**
     * @var array<ManagedDeviceMobileAppConfigurationState>|null $managedDeviceMobileAppConfigurationStates Managed device mobile app configuration states for this device.
    */
    private ?array $managedDeviceMobileAppConfigurationStates = null;
    
    /**
     * @var string|null $managedDeviceName Automatically generated name to identify a device. Can be overwritten to a user friendly name.
    */
    private ?string $managedDeviceName = null;
    
    /**
     * @var ManagedDeviceOwnerType|null $managedDeviceOwnerType Owner type of device.
    */
    private ?ManagedDeviceOwnerType $managedDeviceOwnerType = null;
    
    /**
     * @var ManagementAgentType|null $managementAgent Management agent type.
    */
    private ?ManagementAgentType $managementAgent = null;
    
    /**
     * @var DateTime|null $managementCertificateExpirationDate Reports device management certificate expiration date. This property is read-only.
    */
    private ?DateTime $managementCertificateExpirationDate = null;
    
    /**
     * @var ManagedDeviceManagementFeatures|null $managementFeatures Device management features.
    */
    private ?ManagedDeviceManagementFeatures $managementFeatures = null;
    
    /**
     * @var ManagementState|null $managementState Management state of device in Microsoft Intune.
    */
    private ?ManagementState $managementState = null;
    
    /**
     * @var string|null $manufacturer Manufacturer of the device. This property is read-only.
    */
    private ?string $manufacturer = null;
    
    /**
     * @var string|null $meid MEID. This property is read-only.
    */
    private ?string $meid = null;
    
    /**
     * @var string|null $model Model of the device. This property is read-only.
    */
    private ?string $model = null;
    
    /**
     * @var string|null $notes Notes on the device created by IT Admin
    */
    private ?string $notes = null;
    
    /**
     * @var string|null $operatingSystem Operating system of the device. Windows, iOS, etc. This property is read-only.
    */
    private ?string $operatingSystem = null;
    
    /**
     * @var string|null $osVersion Operating system version of the device. This property is read-only.
    */
    private ?string $osVersion = null;
    
    /**
     * @var OwnerType|null $ownerType Owner type of device.
    */
    private ?OwnerType $ownerType = null;
    
    /**
     * @var ManagedDevicePartnerReportedHealthState|null $partnerReportedThreatState Available health states for the Device Health API
    */
    private ?ManagedDevicePartnerReportedHealthState $partnerReportedThreatState = null;
    
    /**
     * @var string|null $phoneNumber Phone number of the device. This property is read-only.
    */
    private ?string $phoneNumber = null;
    
    /**
     * @var int|null $physicalMemoryInBytes Total Memory in Bytes. This property is read-only.
    */
    private ?int $physicalMemoryInBytes = null;
    
    /**
     * @var DateTime|null $preferMdmOverGroupPolicyAppliedDateTime Reports the DateTime the preferMdmOverGroupPolicy setting was set.  When set, the Intune MDM settings will override Group Policy settings if there is a conflict. Read Only. This property is read-only.
    */
    private ?DateTime $preferMdmOverGroupPolicyAppliedDateTime = null;
    
    /**
     * @var ManagedDeviceArchitecture|null $processorArchitecture Processor architecture
    */
    private ?ManagedDeviceArchitecture $processorArchitecture = null;
    
    /**
     * @var string|null $remoteAssistanceSessionErrorDetails An error string that identifies issues when creating Remote Assistance session objects. This property is read-only.
    */
    private ?string $remoteAssistanceSessionErrorDetails = null;
    
    /**
     * @var string|null $remoteAssistanceSessionUrl Url that allows a Remote Assistance session to be established with the device. This property is read-only.
    */
    private ?string $remoteAssistanceSessionUrl = null;
    
    /**
     * @var bool|null $requireUserEnrollmentApproval Reports if the managed iOS device is user approval enrollment. This property is read-only.
    */
    private ?bool $requireUserEnrollmentApproval = null;
    
    /**
     * @var DateTime|null $retireAfterDateTime Indicates the time after when a device will be auto retired because of scheduled action. This property is read-only.
    */
    private ?DateTime $retireAfterDateTime = null;
    
    /**
     * @var array<string>|null $roleScopeTagIds List of Scope Tag IDs for this Device instance.
    */
    private ?array $roleScopeTagIds = null;
    
    /**
     * @var array<SecurityBaselineState>|null $securityBaselineStates Security baseline states for this device.
    */
    private ?array $securityBaselineStates = null;
    
    /**
     * @var string|null $serialNumber SerialNumber. This property is read-only.
    */
    private ?string $serialNumber = null;
    
    /**
     * @var string|null $skuFamily Device sku family
    */
    private ?string $skuFamily = null;
    
    /**
     * @var int|null $skuNumber Device sku number, see also: https://docs.microsoft.com/windows/win32/api/sysinfoapi/nf-sysinfoapi-getproductinfo. Valid values 0 to 2147483647. This property is read-only.
    */
    private ?int $skuNumber = null;
    
    /**
     * @var string|null $specificationVersion Specification version. This property is read-only.
    */
    private ?string $specificationVersion = null;
    
    /**
     * @var string|null $subscriberCarrier Subscriber Carrier. This property is read-only.
    */
    private ?string $subscriberCarrier = null;
    
    /**
     * @var int|null $totalStorageSpaceInBytes Total Storage in Bytes. This property is read-only.
    */
    private ?int $totalStorageSpaceInBytes = null;
    
    /**
     * @var string|null $udid Unique Device Identifier for iOS and macOS devices. This property is read-only.
    */
    private ?string $udid = null;
    
    /**
     * @var string|null $userDisplayName User display name. This property is read-only.
    */
    private ?string $userDisplayName = null;
    
    /**
     * @var string|null $userId Unique Identifier for the user associated with the device. This property is read-only.
    */
    private ?string $userId = null;
    
    /**
     * @var string|null $userPrincipalName Device user principal name. This property is read-only.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * @var array<User>|null $users The primary users associated with the managed device.
    */
    private ?array $users = null;
    
    /**
     * @var array<LoggedOnUser>|null $usersLoggedOn Indicates the last logged on users of a device. This property is read-only.
    */
    private ?array $usersLoggedOn = null;
    
    /**
     * @var string|null $wiFiMacAddress Wi-Fi MAC. This property is read-only.
    */
    private ?string $wiFiMacAddress = null;
    
    /**
     * @var int|null $windowsActiveMalwareCount Count of active malware for this windows device. This property is read-only.
    */
    private ?int $windowsActiveMalwareCount = null;
    
    /**
     * @var WindowsProtectionState|null $windowsProtectionState The device protection status. This property is read-only.
    */
    private ?WindowsProtectionState $windowsProtectionState = null;
    
    /**
     * @var int|null $windowsRemediatedMalwareCount Count of remediated malware for this windows device. This property is read-only.
    */
    private ?int $windowsRemediatedMalwareCount = null;
    
    /**
     * Instantiates a new managedDevice and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedDevice');
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
        return $this->aadRegistered;
    }

    /**
     * Gets the activationLockBypassCode property value. Code that allows the Activation Lock on a device to be bypassed. This property is read-only.
     * @return string|null
    */
    public function getActivationLockBypassCode(): ?string {
        return $this->activationLockBypassCode;
    }

    /**
     * Gets the androidSecurityPatchLevel property value. Android security patch level. This property is read-only.
     * @return string|null
    */
    public function getAndroidSecurityPatchLevel(): ?string {
        return $this->androidSecurityPatchLevel;
    }

    /**
     * Gets the assignmentFilterEvaluationStatusDetails property value. Managed device mobile app configuration states for this device.
     * @return array<AssignmentFilterEvaluationStatusDetails>|null
    */
    public function getAssignmentFilterEvaluationStatusDetails(): ?array {
        return $this->assignmentFilterEvaluationStatusDetails;
    }

    /**
     * Gets the autopilotEnrolled property value. Reports if the managed device is enrolled via auto-pilot. This property is read-only.
     * @return bool|null
    */
    public function getAutopilotEnrolled(): ?bool {
        return $this->autopilotEnrolled;
    }

    /**
     * Gets the azureActiveDirectoryDeviceId property value. The unique identifier for the Azure Active Directory device. Read only. This property is read-only.
     * @return string|null
    */
    public function getAzureActiveDirectoryDeviceId(): ?string {
        return $this->azureActiveDirectoryDeviceId;
    }

    /**
     * Gets the azureADDeviceId property value. The unique identifier for the Azure Active Directory device. Read only. This property is read-only.
     * @return string|null
    */
    public function getAzureADDeviceId(): ?string {
        return $this->azureADDeviceId;
    }

    /**
     * Gets the azureADRegistered property value. Whether the device is Azure Active Directory registered. This property is read-only.
     * @return bool|null
    */
    public function getAzureADRegistered(): ?bool {
        return $this->azureADRegistered;
    }

    /**
     * Gets the bootstrapTokenEscrowed property value. Reports if the managed device has an escrowed Bootstrap Token. This is only for macOS devices. To get, include BootstrapTokenEscrowed in the select clause and query with a device id. If FALSE, no bootstrap token is escrowed. If TRUE, the device has escrowed a bootstrap token with Intune. This property is read-only.
     * @return bool|null
    */
    public function getBootstrapTokenEscrowed(): ?bool {
        return $this->bootstrapTokenEscrowed;
    }

    /**
     * Gets the chassisType property value. Chassis type.
     * @return ChassisType|null
    */
    public function getChassisType(): ?ChassisType {
        return $this->chassisType;
    }

    /**
     * Gets the chromeOSDeviceInfo property value. List of properties of the ChromeOS Device.
     * @return array<ChromeOSDeviceProperty>|null
    */
    public function getChromeOSDeviceInfo(): ?array {
        return $this->chromeOSDeviceInfo;
    }

    /**
     * Gets the cloudPcRemoteActionResults property value. The cloudPcRemoteActionResults property
     * @return array<CloudPcRemoteActionResult>|null
    */
    public function getCloudPcRemoteActionResults(): ?array {
        return $this->cloudPcRemoteActionResults;
    }

    /**
     * Gets the complianceGracePeriodExpirationDateTime property value. The DateTime when device compliance grace period expires. This property is read-only.
     * @return DateTime|null
    */
    public function getComplianceGracePeriodExpirationDateTime(): ?DateTime {
        return $this->complianceGracePeriodExpirationDateTime;
    }

    /**
     * Gets the complianceState property value. Compliance state.
     * @return ComplianceState|null
    */
    public function getComplianceState(): ?ComplianceState {
        return $this->complianceState;
    }

    /**
     * Gets the configurationManagerClientEnabledFeatures property value. ConfigrMgr client enabled features. This property is read-only.
     * @return ConfigurationManagerClientEnabledFeatures|null
    */
    public function getConfigurationManagerClientEnabledFeatures(): ?ConfigurationManagerClientEnabledFeatures {
        return $this->configurationManagerClientEnabledFeatures;
    }

    /**
     * Gets the configurationManagerClientHealthState property value. Configuration manager client health state, valid only for devices managed by MDM/ConfigMgr Agent
     * @return ConfigurationManagerClientHealthState|null
    */
    public function getConfigurationManagerClientHealthState(): ?ConfigurationManagerClientHealthState {
        return $this->configurationManagerClientHealthState;
    }

    /**
     * Gets the configurationManagerClientInformation property value. Configuration manager client information, valid only for devices managed, duel-managed or tri-managed by ConfigMgr Agent
     * @return ConfigurationManagerClientInformation|null
    */
    public function getConfigurationManagerClientInformation(): ?ConfigurationManagerClientInformation {
        return $this->configurationManagerClientInformation;
    }

    /**
     * Gets the detectedApps property value. All applications currently installed on the device
     * @return array<DetectedApp>|null
    */
    public function getDetectedApps(): ?array {
        return $this->detectedApps;
    }

    /**
     * Gets the deviceActionResults property value. List of ComplexType deviceActionResult objects. This property is read-only.
     * @return array<DeviceActionResult>|null
    */
    public function getDeviceActionResults(): ?array {
        return $this->deviceActionResults;
    }

    /**
     * Gets the deviceCategory property value. Device category
     * @return DeviceCategory|null
    */
    public function getDeviceCategory(): ?DeviceCategory {
        return $this->deviceCategory;
    }

    /**
     * Gets the deviceCategoryDisplayName property value. Device category display name. This property is read-only.
     * @return string|null
    */
    public function getDeviceCategoryDisplayName(): ?string {
        return $this->deviceCategoryDisplayName;
    }

    /**
     * Gets the deviceCompliancePolicyStates property value. Device compliance policy states for this device.
     * @return array<DeviceCompliancePolicyState>|null
    */
    public function getDeviceCompliancePolicyStates(): ?array {
        return $this->deviceCompliancePolicyStates;
    }

    /**
     * Gets the deviceConfigurationStates property value. Device configuration states for this device.
     * @return array<DeviceConfigurationState>|null
    */
    public function getDeviceConfigurationStates(): ?array {
        return $this->deviceConfigurationStates;
    }

    /**
     * Gets the deviceEnrollmentType property value. Possible ways of adding a mobile device to management.
     * @return DeviceEnrollmentType|null
    */
    public function getDeviceEnrollmentType(): ?DeviceEnrollmentType {
        return $this->deviceEnrollmentType;
    }

    /**
     * Gets the deviceFirmwareConfigurationInterfaceManaged property value. Indicates whether the device is DFCI managed. When TRUE the device is DFCI managed. When FALSE, the device is not DFCI managed. The default value is FALSE.
     * @return bool|null
    */
    public function getDeviceFirmwareConfigurationInterfaceManaged(): ?bool {
        return $this->deviceFirmwareConfigurationInterfaceManaged;
    }

    /**
     * Gets the deviceHealthAttestationState property value. The device health attestation state. This property is read-only.
     * @return DeviceHealthAttestationState|null
    */
    public function getDeviceHealthAttestationState(): ?DeviceHealthAttestationState {
        return $this->deviceHealthAttestationState;
    }

    /**
     * Gets the deviceName property value. Name of the device. This property is read-only.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * Gets the deviceRegistrationState property value. Device registration status.
     * @return DeviceRegistrationState|null
    */
    public function getDeviceRegistrationState(): ?DeviceRegistrationState {
        return $this->deviceRegistrationState;
    }

    /**
     * Gets the deviceType property value. Device type.
     * @return DeviceType|null
    */
    public function getDeviceType(): ?DeviceType {
        return $this->deviceType;
    }

    /**
     * Gets the easActivated property value. Whether the device is Exchange ActiveSync activated. This property is read-only.
     * @return bool|null
    */
    public function getEasActivated(): ?bool {
        return $this->easActivated;
    }

    /**
     * Gets the easActivationDateTime property value. Exchange ActivationSync activation time of the device. This property is read-only.
     * @return DateTime|null
    */
    public function getEasActivationDateTime(): ?DateTime {
        return $this->easActivationDateTime;
    }

    /**
     * Gets the easDeviceId property value. Exchange ActiveSync Id of the device. This property is read-only.
     * @return string|null
    */
    public function getEasDeviceId(): ?string {
        return $this->easDeviceId;
    }

    /**
     * Gets the emailAddress property value. Email(s) for the user associated with the device. This property is read-only.
     * @return string|null
    */
    public function getEmailAddress(): ?string {
        return $this->emailAddress;
    }

    /**
     * Gets the enrolledDateTime property value. Enrollment time of the device. This property is read-only.
     * @return DateTime|null
    */
    public function getEnrolledDateTime(): ?DateTime {
        return $this->enrolledDateTime;
    }

    /**
     * Gets the enrollmentProfileName property value. Name of the enrollment profile assigned to the device. Default value is empty string, indicating no enrollment profile was assgined. This property is read-only.
     * @return string|null
    */
    public function getEnrollmentProfileName(): ?string {
        return $this->enrollmentProfileName;
    }

    /**
     * Gets the ethernetMacAddress property value. Ethernet MAC. This property is read-only.
     * @return string|null
    */
    public function getEthernetMacAddress(): ?string {
        return $this->ethernetMacAddress;
    }

    /**
     * Gets the exchangeAccessState property value. Device Exchange Access State.
     * @return DeviceManagementExchangeAccessState|null
    */
    public function getExchangeAccessState(): ?DeviceManagementExchangeAccessState {
        return $this->exchangeAccessState;
    }

    /**
     * Gets the exchangeAccessStateReason property value. Device Exchange Access State Reason.
     * @return DeviceManagementExchangeAccessStateReason|null
    */
    public function getExchangeAccessStateReason(): ?DeviceManagementExchangeAccessStateReason {
        return $this->exchangeAccessStateReason;
    }

    /**
     * Gets the exchangeLastSuccessfulSyncDateTime property value. Last time the device contacted Exchange. This property is read-only.
     * @return DateTime|null
    */
    public function getExchangeLastSuccessfulSyncDateTime(): ?DateTime {
        return $this->exchangeLastSuccessfulSyncDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignmentFilterEvaluationStatusDetails' => function (ParseNode $n) use ($o) { $o->setAssignmentFilterEvaluationStatusDetails($n->getCollectionOfObjectValues(array(AssignmentFilterEvaluationStatusDetails::class, 'createFromDiscriminatorValue'))); },
            'chassisType' => function (ParseNode $n) use ($o) { $o->setChassisType($n->getEnumValue(ChassisType::class)); },
            'chromeOSDeviceInfo' => function (ParseNode $n) use ($o) { $o->setChromeOSDeviceInfo($n->getCollectionOfObjectValues(array(ChromeOSDeviceProperty::class, 'createFromDiscriminatorValue'))); },
            'cloudPcRemoteActionResults' => function (ParseNode $n) use ($o) { $o->setCloudPcRemoteActionResults($n->getCollectionOfObjectValues(array(CloudPcRemoteActionResult::class, 'createFromDiscriminatorValue'))); },
            'complianceState' => function (ParseNode $n) use ($o) { $o->setComplianceState($n->getEnumValue(ComplianceState::class)); },
            'configurationManagerClientHealthState' => function (ParseNode $n) use ($o) { $o->setConfigurationManagerClientHealthState($n->getObjectValue(array(ConfigurationManagerClientHealthState::class, 'createFromDiscriminatorValue'))); },
            'configurationManagerClientInformation' => function (ParseNode $n) use ($o) { $o->setConfigurationManagerClientInformation($n->getObjectValue(array(ConfigurationManagerClientInformation::class, 'createFromDiscriminatorValue'))); },
            'detectedApps' => function (ParseNode $n) use ($o) { $o->setDetectedApps($n->getCollectionOfObjectValues(array(DetectedApp::class, 'createFromDiscriminatorValue'))); },
            'deviceCategory' => function (ParseNode $n) use ($o) { $o->setDeviceCategory($n->getObjectValue(array(DeviceCategory::class, 'createFromDiscriminatorValue'))); },
            'deviceCompliancePolicyStates' => function (ParseNode $n) use ($o) { $o->setDeviceCompliancePolicyStates($n->getCollectionOfObjectValues(array(DeviceCompliancePolicyState::class, 'createFromDiscriminatorValue'))); },
            'deviceConfigurationStates' => function (ParseNode $n) use ($o) { $o->setDeviceConfigurationStates($n->getCollectionOfObjectValues(array(DeviceConfigurationState::class, 'createFromDiscriminatorValue'))); },
            'deviceEnrollmentType' => function (ParseNode $n) use ($o) { $o->setDeviceEnrollmentType($n->getEnumValue(DeviceEnrollmentType::class)); },
            'deviceFirmwareConfigurationInterfaceManaged' => function (ParseNode $n) use ($o) { $o->setDeviceFirmwareConfigurationInterfaceManaged($n->getBooleanValue()); },
            'deviceRegistrationState' => function (ParseNode $n) use ($o) { $o->setDeviceRegistrationState($n->getEnumValue(DeviceRegistrationState::class)); },
            'deviceType' => function (ParseNode $n) use ($o) { $o->setDeviceType($n->getEnumValue(DeviceType::class)); },
            'exchangeAccessState' => function (ParseNode $n) use ($o) { $o->setExchangeAccessState($n->getEnumValue(DeviceManagementExchangeAccessState::class)); },
            'exchangeAccessStateReason' => function (ParseNode $n) use ($o) { $o->setExchangeAccessStateReason($n->getEnumValue(DeviceManagementExchangeAccessStateReason::class)); },
            'joinType' => function (ParseNode $n) use ($o) { $o->setJoinType($n->getEnumValue(JoinType::class)); },
            'logCollectionRequests' => function (ParseNode $n) use ($o) { $o->setLogCollectionRequests($n->getCollectionOfObjectValues(array(DeviceLogCollectionResponse::class, 'createFromDiscriminatorValue'))); },
            'lostModeState' => function (ParseNode $n) use ($o) { $o->setLostModeState($n->getEnumValue(LostModeState::class)); },
            'managedDeviceMobileAppConfigurationStates' => function (ParseNode $n) use ($o) { $o->setManagedDeviceMobileAppConfigurationStates($n->getCollectionOfObjectValues(array(ManagedDeviceMobileAppConfigurationState::class, 'createFromDiscriminatorValue'))); },
            'managedDeviceName' => function (ParseNode $n) use ($o) { $o->setManagedDeviceName($n->getStringValue()); },
            'managedDeviceOwnerType' => function (ParseNode $n) use ($o) { $o->setManagedDeviceOwnerType($n->getEnumValue(ManagedDeviceOwnerType::class)); },
            'managementAgent' => function (ParseNode $n) use ($o) { $o->setManagementAgent($n->getEnumValue(ManagementAgentType::class)); },
            'managementFeatures' => function (ParseNode $n) use ($o) { $o->setManagementFeatures($n->getEnumValue(ManagedDeviceManagementFeatures::class)); },
            'managementState' => function (ParseNode $n) use ($o) { $o->setManagementState($n->getEnumValue(ManagementState::class)); },
            'notes' => function (ParseNode $n) use ($o) { $o->setNotes($n->getStringValue()); },
            'ownerType' => function (ParseNode $n) use ($o) { $o->setOwnerType($n->getEnumValue(OwnerType::class)); },
            'partnerReportedThreatState' => function (ParseNode $n) use ($o) { $o->setPartnerReportedThreatState($n->getEnumValue(ManagedDevicePartnerReportedHealthState::class)); },
            'processorArchitecture' => function (ParseNode $n) use ($o) { $o->setProcessorArchitecture($n->getEnumValue(ManagedDeviceArchitecture::class)); },
            'roleScopeTagIds' => function (ParseNode $n) use ($o) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
            'securityBaselineStates' => function (ParseNode $n) use ($o) { $o->setSecurityBaselineStates($n->getCollectionOfObjectValues(array(SecurityBaselineState::class, 'createFromDiscriminatorValue'))); },
            'skuFamily' => function (ParseNode $n) use ($o) { $o->setSkuFamily($n->getStringValue()); },
            'users' => function (ParseNode $n) use ($o) { $o->setUsers($n->getCollectionOfObjectValues(array(User::class, 'createFromDiscriminatorValue'))); },
            'windowsProtectionState' => function (ParseNode $n) use ($o) { $o->setWindowsProtectionState($n->getObjectValue(array(WindowsProtectionState::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the freeStorageSpaceInBytes property value. Free Storage in Bytes. This property is read-only.
     * @return int|null
    */
    public function getFreeStorageSpaceInBytes(): ?int {
        return $this->freeStorageSpaceInBytes;
    }

    /**
     * Gets the hardwareInformation property value. The hardward details for the device.  Includes information such as storage space, manufacturer, serial number, etc. This property is read-only.
     * @return HardwareInformation|null
    */
    public function getHardwareInformation(): ?HardwareInformation {
        return $this->hardwareInformation;
    }

    /**
     * Gets the iccid property value. Integrated Circuit Card Identifier, it is A SIM card's unique identification number. This property is read-only.
     * @return string|null
    */
    public function getIccid(): ?string {
        return $this->iccid;
    }

    /**
     * Gets the imei property value. IMEI. This property is read-only.
     * @return string|null
    */
    public function getImei(): ?string {
        return $this->imei;
    }

    /**
     * Gets the isEncrypted property value. Device encryption status. This property is read-only.
     * @return bool|null
    */
    public function getIsEncrypted(): ?bool {
        return $this->isEncrypted;
    }

    /**
     * Gets the isSupervised property value. Device supervised status. This property is read-only.
     * @return bool|null
    */
    public function getIsSupervised(): ?bool {
        return $this->isSupervised;
    }

    /**
     * Gets the jailBroken property value. whether the device is jail broken or rooted. This property is read-only.
     * @return string|null
    */
    public function getJailBroken(): ?string {
        return $this->jailBroken;
    }

    /**
     * Gets the joinType property value. Device enrollment join type.
     * @return JoinType|null
    */
    public function getJoinType(): ?JoinType {
        return $this->joinType;
    }

    /**
     * Gets the lastSyncDateTime property value. The date and time that the device last completed a successful sync with Intune. This property is read-only.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        return $this->lastSyncDateTime;
    }

    /**
     * Gets the logCollectionRequests property value. List of log collection requests
     * @return array<DeviceLogCollectionResponse>|null
    */
    public function getLogCollectionRequests(): ?array {
        return $this->logCollectionRequests;
    }

    /**
     * Gets the lostModeState property value. State of lost mode, indicating if lost mode is enabled or disabled
     * @return LostModeState|null
    */
    public function getLostModeState(): ?LostModeState {
        return $this->lostModeState;
    }

    /**
     * Gets the managedDeviceMobileAppConfigurationStates property value. Managed device mobile app configuration states for this device.
     * @return array<ManagedDeviceMobileAppConfigurationState>|null
    */
    public function getManagedDeviceMobileAppConfigurationStates(): ?array {
        return $this->managedDeviceMobileAppConfigurationStates;
    }

    /**
     * Gets the managedDeviceName property value. Automatically generated name to identify a device. Can be overwritten to a user friendly name.
     * @return string|null
    */
    public function getManagedDeviceName(): ?string {
        return $this->managedDeviceName;
    }

    /**
     * Gets the managedDeviceOwnerType property value. Owner type of device.
     * @return ManagedDeviceOwnerType|null
    */
    public function getManagedDeviceOwnerType(): ?ManagedDeviceOwnerType {
        return $this->managedDeviceOwnerType;
    }

    /**
     * Gets the managementAgent property value. Management agent type.
     * @return ManagementAgentType|null
    */
    public function getManagementAgent(): ?ManagementAgentType {
        return $this->managementAgent;
    }

    /**
     * Gets the managementCertificateExpirationDate property value. Reports device management certificate expiration date. This property is read-only.
     * @return DateTime|null
    */
    public function getManagementCertificateExpirationDate(): ?DateTime {
        return $this->managementCertificateExpirationDate;
    }

    /**
     * Gets the managementFeatures property value. Device management features.
     * @return ManagedDeviceManagementFeatures|null
    */
    public function getManagementFeatures(): ?ManagedDeviceManagementFeatures {
        return $this->managementFeatures;
    }

    /**
     * Gets the managementState property value. Management state of device in Microsoft Intune.
     * @return ManagementState|null
    */
    public function getManagementState(): ?ManagementState {
        return $this->managementState;
    }

    /**
     * Gets the manufacturer property value. Manufacturer of the device. This property is read-only.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->manufacturer;
    }

    /**
     * Gets the meid property value. MEID. This property is read-only.
     * @return string|null
    */
    public function getMeid(): ?string {
        return $this->meid;
    }

    /**
     * Gets the model property value. Model of the device. This property is read-only.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->model;
    }

    /**
     * Gets the notes property value. Notes on the device created by IT Admin
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->notes;
    }

    /**
     * Gets the operatingSystem property value. Operating system of the device. Windows, iOS, etc. This property is read-only.
     * @return string|null
    */
    public function getOperatingSystem(): ?string {
        return $this->operatingSystem;
    }

    /**
     * Gets the osVersion property value. Operating system version of the device. This property is read-only.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->osVersion;
    }

    /**
     * Gets the ownerType property value. Owner type of device.
     * @return OwnerType|null
    */
    public function getOwnerType(): ?OwnerType {
        return $this->ownerType;
    }

    /**
     * Gets the partnerReportedThreatState property value. Available health states for the Device Health API
     * @return ManagedDevicePartnerReportedHealthState|null
    */
    public function getPartnerReportedThreatState(): ?ManagedDevicePartnerReportedHealthState {
        return $this->partnerReportedThreatState;
    }

    /**
     * Gets the phoneNumber property value. Phone number of the device. This property is read-only.
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Gets the physicalMemoryInBytes property value. Total Memory in Bytes. This property is read-only.
     * @return int|null
    */
    public function getPhysicalMemoryInBytes(): ?int {
        return $this->physicalMemoryInBytes;
    }

    /**
     * Gets the preferMdmOverGroupPolicyAppliedDateTime property value. Reports the DateTime the preferMdmOverGroupPolicy setting was set.  When set, the Intune MDM settings will override Group Policy settings if there is a conflict. Read Only. This property is read-only.
     * @return DateTime|null
    */
    public function getPreferMdmOverGroupPolicyAppliedDateTime(): ?DateTime {
        return $this->preferMdmOverGroupPolicyAppliedDateTime;
    }

    /**
     * Gets the processorArchitecture property value. Processor architecture
     * @return ManagedDeviceArchitecture|null
    */
    public function getProcessorArchitecture(): ?ManagedDeviceArchitecture {
        return $this->processorArchitecture;
    }

    /**
     * Gets the remoteAssistanceSessionErrorDetails property value. An error string that identifies issues when creating Remote Assistance session objects. This property is read-only.
     * @return string|null
    */
    public function getRemoteAssistanceSessionErrorDetails(): ?string {
        return $this->remoteAssistanceSessionErrorDetails;
    }

    /**
     * Gets the remoteAssistanceSessionUrl property value. Url that allows a Remote Assistance session to be established with the device. This property is read-only.
     * @return string|null
    */
    public function getRemoteAssistanceSessionUrl(): ?string {
        return $this->remoteAssistanceSessionUrl;
    }

    /**
     * Gets the requireUserEnrollmentApproval property value. Reports if the managed iOS device is user approval enrollment. This property is read-only.
     * @return bool|null
    */
    public function getRequireUserEnrollmentApproval(): ?bool {
        return $this->requireUserEnrollmentApproval;
    }

    /**
     * Gets the retireAfterDateTime property value. Indicates the time after when a device will be auto retired because of scheduled action. This property is read-only.
     * @return DateTime|null
    */
    public function getRetireAfterDateTime(): ?DateTime {
        return $this->retireAfterDateTime;
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tag IDs for this Device instance.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Gets the securityBaselineStates property value. Security baseline states for this device.
     * @return array<SecurityBaselineState>|null
    */
    public function getSecurityBaselineStates(): ?array {
        return $this->securityBaselineStates;
    }

    /**
     * Gets the serialNumber property value. SerialNumber. This property is read-only.
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        return $this->serialNumber;
    }

    /**
     * Gets the skuFamily property value. Device sku family
     * @return string|null
    */
    public function getSkuFamily(): ?string {
        return $this->skuFamily;
    }

    /**
     * Gets the skuNumber property value. Device sku number, see also: https://docs.microsoft.com/windows/win32/api/sysinfoapi/nf-sysinfoapi-getproductinfo. Valid values 0 to 2147483647. This property is read-only.
     * @return int|null
    */
    public function getSkuNumber(): ?int {
        return $this->skuNumber;
    }

    /**
     * Gets the specificationVersion property value. Specification version. This property is read-only.
     * @return string|null
    */
    public function getSpecificationVersion(): ?string {
        return $this->specificationVersion;
    }

    /**
     * Gets the subscriberCarrier property value. Subscriber Carrier. This property is read-only.
     * @return string|null
    */
    public function getSubscriberCarrier(): ?string {
        return $this->subscriberCarrier;
    }

    /**
     * Gets the totalStorageSpaceInBytes property value. Total Storage in Bytes. This property is read-only.
     * @return int|null
    */
    public function getTotalStorageSpaceInBytes(): ?int {
        return $this->totalStorageSpaceInBytes;
    }

    /**
     * Gets the udid property value. Unique Device Identifier for iOS and macOS devices. This property is read-only.
     * @return string|null
    */
    public function getUdid(): ?string {
        return $this->udid;
    }

    /**
     * Gets the userDisplayName property value. User display name. This property is read-only.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->userDisplayName;
    }

    /**
     * Gets the userId property value. Unique Identifier for the user associated with the device. This property is read-only.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userPrincipalName property value. Device user principal name. This property is read-only.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Gets the users property value. The primary users associated with the managed device.
     * @return array<User>|null
    */
    public function getUsers(): ?array {
        return $this->users;
    }

    /**
     * Gets the usersLoggedOn property value. Indicates the last logged on users of a device. This property is read-only.
     * @return array<LoggedOnUser>|null
    */
    public function getUsersLoggedOn(): ?array {
        return $this->usersLoggedOn;
    }

    /**
     * Gets the wiFiMacAddress property value. Wi-Fi MAC. This property is read-only.
     * @return string|null
    */
    public function getWiFiMacAddress(): ?string {
        return $this->wiFiMacAddress;
    }

    /**
     * Gets the windowsActiveMalwareCount property value. Count of active malware for this windows device. This property is read-only.
     * @return int|null
    */
    public function getWindowsActiveMalwareCount(): ?int {
        return $this->windowsActiveMalwareCount;
    }

    /**
     * Gets the windowsProtectionState property value. The device protection status. This property is read-only.
     * @return WindowsProtectionState|null
    */
    public function getWindowsProtectionState(): ?WindowsProtectionState {
        return $this->windowsProtectionState;
    }

    /**
     * Gets the windowsRemediatedMalwareCount property value. Count of remediated malware for this windows device. This property is read-only.
     * @return int|null
    */
    public function getWindowsRemediatedMalwareCount(): ?int {
        return $this->windowsRemediatedMalwareCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignmentFilterEvaluationStatusDetails', $this->assignmentFilterEvaluationStatusDetails);
        $writer->writeEnumValue('chassisType', $this->chassisType);
        $writer->writeCollectionOfObjectValues('chromeOSDeviceInfo', $this->chromeOSDeviceInfo);
        $writer->writeCollectionOfObjectValues('cloudPcRemoteActionResults', $this->cloudPcRemoteActionResults);
        $writer->writeEnumValue('complianceState', $this->complianceState);
        $writer->writeObjectValue('configurationManagerClientHealthState', $this->configurationManagerClientHealthState);
        $writer->writeObjectValue('configurationManagerClientInformation', $this->configurationManagerClientInformation);
        $writer->writeCollectionOfObjectValues('detectedApps', $this->detectedApps);
        $writer->writeObjectValue('deviceCategory', $this->deviceCategory);
        $writer->writeCollectionOfObjectValues('deviceCompliancePolicyStates', $this->deviceCompliancePolicyStates);
        $writer->writeCollectionOfObjectValues('deviceConfigurationStates', $this->deviceConfigurationStates);
        $writer->writeEnumValue('deviceEnrollmentType', $this->deviceEnrollmentType);
        $writer->writeBooleanValue('deviceFirmwareConfigurationInterfaceManaged', $this->deviceFirmwareConfigurationInterfaceManaged);
        $writer->writeEnumValue('deviceRegistrationState', $this->deviceRegistrationState);
        $writer->writeEnumValue('deviceType', $this->deviceType);
        $writer->writeEnumValue('exchangeAccessState', $this->exchangeAccessState);
        $writer->writeEnumValue('exchangeAccessStateReason', $this->exchangeAccessStateReason);
        $writer->writeEnumValue('joinType', $this->joinType);
        $writer->writeCollectionOfObjectValues('logCollectionRequests', $this->logCollectionRequests);
        $writer->writeEnumValue('lostModeState', $this->lostModeState);
        $writer->writeCollectionOfObjectValues('managedDeviceMobileAppConfigurationStates', $this->managedDeviceMobileAppConfigurationStates);
        $writer->writeStringValue('managedDeviceName', $this->managedDeviceName);
        $writer->writeEnumValue('managedDeviceOwnerType', $this->managedDeviceOwnerType);
        $writer->writeEnumValue('managementAgent', $this->managementAgent);
        $writer->writeEnumValue('managementFeatures', $this->managementFeatures);
        $writer->writeEnumValue('managementState', $this->managementState);
        $writer->writeStringValue('notes', $this->notes);
        $writer->writeEnumValue('ownerType', $this->ownerType);
        $writer->writeEnumValue('partnerReportedThreatState', $this->partnerReportedThreatState);
        $writer->writeEnumValue('processorArchitecture', $this->processorArchitecture);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
        $writer->writeCollectionOfObjectValues('securityBaselineStates', $this->securityBaselineStates);
        $writer->writeStringValue('skuFamily', $this->skuFamily);
        $writer->writeCollectionOfObjectValues('users', $this->users);
        $writer->writeObjectValue('windowsProtectionState', $this->windowsProtectionState);
    }

    /**
     * Sets the assignmentFilterEvaluationStatusDetails property value. Managed device mobile app configuration states for this device.
     *  @param array<AssignmentFilterEvaluationStatusDetails>|null $value Value to set for the assignmentFilterEvaluationStatusDetails property.
    */
    public function setAssignmentFilterEvaluationStatusDetails(?array $value ): void {
        $this->assignmentFilterEvaluationStatusDetails = $value;
    }

    /**
     * Sets the chassisType property value. Chassis type.
     *  @param ChassisType|null $value Value to set for the chassisType property.
    */
    public function setChassisType(?ChassisType $value ): void {
        $this->chassisType = $value;
    }

    /**
     * Sets the chromeOSDeviceInfo property value. List of properties of the ChromeOS Device.
     *  @param array<ChromeOSDeviceProperty>|null $value Value to set for the chromeOSDeviceInfo property.
    */
    public function setChromeOSDeviceInfo(?array $value ): void {
        $this->chromeOSDeviceInfo = $value;
    }

    /**
     * Sets the cloudPcRemoteActionResults property value. The cloudPcRemoteActionResults property
     *  @param array<CloudPcRemoteActionResult>|null $value Value to set for the cloudPcRemoteActionResults property.
    */
    public function setCloudPcRemoteActionResults(?array $value ): void {
        $this->cloudPcRemoteActionResults = $value;
    }

    /**
     * Sets the complianceState property value. Compliance state.
     *  @param ComplianceState|null $value Value to set for the complianceState property.
    */
    public function setComplianceState(?ComplianceState $value ): void {
        $this->complianceState = $value;
    }

    /**
     * Sets the configurationManagerClientHealthState property value. Configuration manager client health state, valid only for devices managed by MDM/ConfigMgr Agent
     *  @param ConfigurationManagerClientHealthState|null $value Value to set for the configurationManagerClientHealthState property.
    */
    public function setConfigurationManagerClientHealthState(?ConfigurationManagerClientHealthState $value ): void {
        $this->configurationManagerClientHealthState = $value;
    }

    /**
     * Sets the configurationManagerClientInformation property value. Configuration manager client information, valid only for devices managed, duel-managed or tri-managed by ConfigMgr Agent
     *  @param ConfigurationManagerClientInformation|null $value Value to set for the configurationManagerClientInformation property.
    */
    public function setConfigurationManagerClientInformation(?ConfigurationManagerClientInformation $value ): void {
        $this->configurationManagerClientInformation = $value;
    }

    /**
     * Sets the detectedApps property value. All applications currently installed on the device
     *  @param array<DetectedApp>|null $value Value to set for the detectedApps property.
    */
    public function setDetectedApps(?array $value ): void {
        $this->detectedApps = $value;
    }

    /**
     * Sets the deviceCategory property value. Device category
     *  @param DeviceCategory|null $value Value to set for the deviceCategory property.
    */
    public function setDeviceCategory(?DeviceCategory $value ): void {
        $this->deviceCategory = $value;
    }

    /**
     * Sets the deviceCompliancePolicyStates property value. Device compliance policy states for this device.
     *  @param array<DeviceCompliancePolicyState>|null $value Value to set for the deviceCompliancePolicyStates property.
    */
    public function setDeviceCompliancePolicyStates(?array $value ): void {
        $this->deviceCompliancePolicyStates = $value;
    }

    /**
     * Sets the deviceConfigurationStates property value. Device configuration states for this device.
     *  @param array<DeviceConfigurationState>|null $value Value to set for the deviceConfigurationStates property.
    */
    public function setDeviceConfigurationStates(?array $value ): void {
        $this->deviceConfigurationStates = $value;
    }

    /**
     * Sets the deviceEnrollmentType property value. Possible ways of adding a mobile device to management.
     *  @param DeviceEnrollmentType|null $value Value to set for the deviceEnrollmentType property.
    */
    public function setDeviceEnrollmentType(?DeviceEnrollmentType $value ): void {
        $this->deviceEnrollmentType = $value;
    }

    /**
     * Sets the deviceFirmwareConfigurationInterfaceManaged property value. Indicates whether the device is DFCI managed. When TRUE the device is DFCI managed. When FALSE, the device is not DFCI managed. The default value is FALSE.
     *  @param bool|null $value Value to set for the deviceFirmwareConfigurationInterfaceManaged property.
    */
    public function setDeviceFirmwareConfigurationInterfaceManaged(?bool $value ): void {
        $this->deviceFirmwareConfigurationInterfaceManaged = $value;
    }

    /**
     * Sets the deviceRegistrationState property value. Device registration status.
     *  @param DeviceRegistrationState|null $value Value to set for the deviceRegistrationState property.
    */
    public function setDeviceRegistrationState(?DeviceRegistrationState $value ): void {
        $this->deviceRegistrationState = $value;
    }

    /**
     * Sets the deviceType property value. Device type.
     *  @param DeviceType|null $value Value to set for the deviceType property.
    */
    public function setDeviceType(?DeviceType $value ): void {
        $this->deviceType = $value;
    }

    /**
     * Sets the exchangeAccessState property value. Device Exchange Access State.
     *  @param DeviceManagementExchangeAccessState|null $value Value to set for the exchangeAccessState property.
    */
    public function setExchangeAccessState(?DeviceManagementExchangeAccessState $value ): void {
        $this->exchangeAccessState = $value;
    }

    /**
     * Sets the exchangeAccessStateReason property value. Device Exchange Access State Reason.
     *  @param DeviceManagementExchangeAccessStateReason|null $value Value to set for the exchangeAccessStateReason property.
    */
    public function setExchangeAccessStateReason(?DeviceManagementExchangeAccessStateReason $value ): void {
        $this->exchangeAccessStateReason = $value;
    }

    /**
     * Sets the joinType property value. Device enrollment join type.
     *  @param JoinType|null $value Value to set for the joinType property.
    */
    public function setJoinType(?JoinType $value ): void {
        $this->joinType = $value;
    }

    /**
     * Sets the logCollectionRequests property value. List of log collection requests
     *  @param array<DeviceLogCollectionResponse>|null $value Value to set for the logCollectionRequests property.
    */
    public function setLogCollectionRequests(?array $value ): void {
        $this->logCollectionRequests = $value;
    }

    /**
     * Sets the lostModeState property value. State of lost mode, indicating if lost mode is enabled or disabled
     *  @param LostModeState|null $value Value to set for the lostModeState property.
    */
    public function setLostModeState(?LostModeState $value ): void {
        $this->lostModeState = $value;
    }

    /**
     * Sets the managedDeviceMobileAppConfigurationStates property value. Managed device mobile app configuration states for this device.
     *  @param array<ManagedDeviceMobileAppConfigurationState>|null $value Value to set for the managedDeviceMobileAppConfigurationStates property.
    */
    public function setManagedDeviceMobileAppConfigurationStates(?array $value ): void {
        $this->managedDeviceMobileAppConfigurationStates = $value;
    }

    /**
     * Sets the managedDeviceName property value. Automatically generated name to identify a device. Can be overwritten to a user friendly name.
     *  @param string|null $value Value to set for the managedDeviceName property.
    */
    public function setManagedDeviceName(?string $value ): void {
        $this->managedDeviceName = $value;
    }

    /**
     * Sets the managedDeviceOwnerType property value. Owner type of device.
     *  @param ManagedDeviceOwnerType|null $value Value to set for the managedDeviceOwnerType property.
    */
    public function setManagedDeviceOwnerType(?ManagedDeviceOwnerType $value ): void {
        $this->managedDeviceOwnerType = $value;
    }

    /**
     * Sets the managementAgent property value. Management agent type.
     *  @param ManagementAgentType|null $value Value to set for the managementAgent property.
    */
    public function setManagementAgent(?ManagementAgentType $value ): void {
        $this->managementAgent = $value;
    }

    /**
     * Sets the managementFeatures property value. Device management features.
     *  @param ManagedDeviceManagementFeatures|null $value Value to set for the managementFeatures property.
    */
    public function setManagementFeatures(?ManagedDeviceManagementFeatures $value ): void {
        $this->managementFeatures = $value;
    }

    /**
     * Sets the managementState property value. Management state of device in Microsoft Intune.
     *  @param ManagementState|null $value Value to set for the managementState property.
    */
    public function setManagementState(?ManagementState $value ): void {
        $this->managementState = $value;
    }

    /**
     * Sets the notes property value. Notes on the device created by IT Admin
     *  @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value ): void {
        $this->notes = $value;
    }

    /**
     * Sets the ownerType property value. Owner type of device.
     *  @param OwnerType|null $value Value to set for the ownerType property.
    */
    public function setOwnerType(?OwnerType $value ): void {
        $this->ownerType = $value;
    }

    /**
     * Sets the partnerReportedThreatState property value. Available health states for the Device Health API
     *  @param ManagedDevicePartnerReportedHealthState|null $value Value to set for the partnerReportedThreatState property.
    */
    public function setPartnerReportedThreatState(?ManagedDevicePartnerReportedHealthState $value ): void {
        $this->partnerReportedThreatState = $value;
    }

    /**
     * Sets the processorArchitecture property value. Processor architecture
     *  @param ManagedDeviceArchitecture|null $value Value to set for the processorArchitecture property.
    */
    public function setProcessorArchitecture(?ManagedDeviceArchitecture $value ): void {
        $this->processorArchitecture = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tag IDs for this Device instance.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

    /**
     * Sets the securityBaselineStates property value. Security baseline states for this device.
     *  @param array<SecurityBaselineState>|null $value Value to set for the securityBaselineStates property.
    */
    public function setSecurityBaselineStates(?array $value ): void {
        $this->securityBaselineStates = $value;
    }

    /**
     * Sets the skuFamily property value. Device sku family
     *  @param string|null $value Value to set for the skuFamily property.
    */
    public function setSkuFamily(?string $value ): void {
        $this->skuFamily = $value;
    }

    /**
     * Sets the users property value. The primary users associated with the managed device.
     *  @param array<User>|null $value Value to set for the users property.
    */
    public function setUsers(?array $value ): void {
        $this->users = $value;
    }

    /**
     * Sets the windowsProtectionState property value. The device protection status. This property is read-only.
     *  @param WindowsProtectionState|null $value Value to set for the windowsProtectionState property.
    */
    public function setWindowsProtectionState(?WindowsProtectionState $value ): void {
        $this->windowsProtectionState = $value;
    }

}
