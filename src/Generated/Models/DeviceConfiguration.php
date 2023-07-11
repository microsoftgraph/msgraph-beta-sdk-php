<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Device Configuration.
*/
class DeviceConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.androidCertificateProfileBase': return new AndroidCertificateProfileBase();
                case '#microsoft.graph.androidCustomConfiguration': return new AndroidCustomConfiguration();
                case '#microsoft.graph.androidDeviceOwnerCertificateProfileBase': return new AndroidDeviceOwnerCertificateProfileBase();
                case '#microsoft.graph.androidDeviceOwnerDerivedCredentialAuthenticationConfiguration': return new AndroidDeviceOwnerDerivedCredentialAuthenticationConfiguration();
                case '#microsoft.graph.androidDeviceOwnerEnterpriseWiFiConfiguration': return new AndroidDeviceOwnerEnterpriseWiFiConfiguration();
                case '#microsoft.graph.androidDeviceOwnerGeneralDeviceConfiguration': return new AndroidDeviceOwnerGeneralDeviceConfiguration();
                case '#microsoft.graph.androidDeviceOwnerImportedPFXCertificateProfile': return new AndroidDeviceOwnerImportedPFXCertificateProfile();
                case '#microsoft.graph.androidDeviceOwnerPkcsCertificateProfile': return new AndroidDeviceOwnerPkcsCertificateProfile();
                case '#microsoft.graph.androidDeviceOwnerScepCertificateProfile': return new AndroidDeviceOwnerScepCertificateProfile();
                case '#microsoft.graph.androidDeviceOwnerTrustedRootCertificate': return new AndroidDeviceOwnerTrustedRootCertificate();
                case '#microsoft.graph.androidDeviceOwnerVpnConfiguration': return new AndroidDeviceOwnerVpnConfiguration();
                case '#microsoft.graph.androidDeviceOwnerWiFiConfiguration': return new AndroidDeviceOwnerWiFiConfiguration();
                case '#microsoft.graph.androidEasEmailProfileConfiguration': return new AndroidEasEmailProfileConfiguration();
                case '#microsoft.graph.androidEnterpriseWiFiConfiguration': return new AndroidEnterpriseWiFiConfiguration();
                case '#microsoft.graph.androidForWorkCertificateProfileBase': return new AndroidForWorkCertificateProfileBase();
                case '#microsoft.graph.androidForWorkCustomConfiguration': return new AndroidForWorkCustomConfiguration();
                case '#microsoft.graph.androidForWorkEasEmailProfileBase': return new AndroidForWorkEasEmailProfileBase();
                case '#microsoft.graph.androidForWorkEnterpriseWiFiConfiguration': return new AndroidForWorkEnterpriseWiFiConfiguration();
                case '#microsoft.graph.androidForWorkGeneralDeviceConfiguration': return new AndroidForWorkGeneralDeviceConfiguration();
                case '#microsoft.graph.androidForWorkGmailEasConfiguration': return new AndroidForWorkGmailEasConfiguration();
                case '#microsoft.graph.androidForWorkImportedPFXCertificateProfile': return new AndroidForWorkImportedPFXCertificateProfile();
                case '#microsoft.graph.androidForWorkNineWorkEasConfiguration': return new AndroidForWorkNineWorkEasConfiguration();
                case '#microsoft.graph.androidForWorkPkcsCertificateProfile': return new AndroidForWorkPkcsCertificateProfile();
                case '#microsoft.graph.androidForWorkScepCertificateProfile': return new AndroidForWorkScepCertificateProfile();
                case '#microsoft.graph.androidForWorkTrustedRootCertificate': return new AndroidForWorkTrustedRootCertificate();
                case '#microsoft.graph.androidForWorkVpnConfiguration': return new AndroidForWorkVpnConfiguration();
                case '#microsoft.graph.androidForWorkWiFiConfiguration': return new AndroidForWorkWiFiConfiguration();
                case '#microsoft.graph.androidGeneralDeviceConfiguration': return new AndroidGeneralDeviceConfiguration();
                case '#microsoft.graph.androidImportedPFXCertificateProfile': return new AndroidImportedPFXCertificateProfile();
                case '#microsoft.graph.androidOmaCpConfiguration': return new AndroidOmaCpConfiguration();
                case '#microsoft.graph.androidPkcsCertificateProfile': return new AndroidPkcsCertificateProfile();
                case '#microsoft.graph.androidScepCertificateProfile': return new AndroidScepCertificateProfile();
                case '#microsoft.graph.androidTrustedRootCertificate': return new AndroidTrustedRootCertificate();
                case '#microsoft.graph.androidVpnConfiguration': return new AndroidVpnConfiguration();
                case '#microsoft.graph.androidWiFiConfiguration': return new AndroidWiFiConfiguration();
                case '#microsoft.graph.androidWorkProfileCertificateProfileBase': return new AndroidWorkProfileCertificateProfileBase();
                case '#microsoft.graph.androidWorkProfileCustomConfiguration': return new AndroidWorkProfileCustomConfiguration();
                case '#microsoft.graph.androidWorkProfileEasEmailProfileBase': return new AndroidWorkProfileEasEmailProfileBase();
                case '#microsoft.graph.androidWorkProfileEnterpriseWiFiConfiguration': return new AndroidWorkProfileEnterpriseWiFiConfiguration();
                case '#microsoft.graph.androidWorkProfileGeneralDeviceConfiguration': return new AndroidWorkProfileGeneralDeviceConfiguration();
                case '#microsoft.graph.androidWorkProfileGmailEasConfiguration': return new AndroidWorkProfileGmailEasConfiguration();
                case '#microsoft.graph.androidWorkProfileNineWorkEasConfiguration': return new AndroidWorkProfileNineWorkEasConfiguration();
                case '#microsoft.graph.androidWorkProfilePkcsCertificateProfile': return new AndroidWorkProfilePkcsCertificateProfile();
                case '#microsoft.graph.androidWorkProfileScepCertificateProfile': return new AndroidWorkProfileScepCertificateProfile();
                case '#microsoft.graph.androidWorkProfileTrustedRootCertificate': return new AndroidWorkProfileTrustedRootCertificate();
                case '#microsoft.graph.androidWorkProfileVpnConfiguration': return new AndroidWorkProfileVpnConfiguration();
                case '#microsoft.graph.androidWorkProfileWiFiConfiguration': return new AndroidWorkProfileWiFiConfiguration();
                case '#microsoft.graph.aospDeviceOwnerCertificateProfileBase': return new AospDeviceOwnerCertificateProfileBase();
                case '#microsoft.graph.aospDeviceOwnerDeviceConfiguration': return new AospDeviceOwnerDeviceConfiguration();
                case '#microsoft.graph.aospDeviceOwnerEnterpriseWiFiConfiguration': return new AospDeviceOwnerEnterpriseWiFiConfiguration();
                case '#microsoft.graph.aospDeviceOwnerPkcsCertificateProfile': return new AospDeviceOwnerPkcsCertificateProfile();
                case '#microsoft.graph.aospDeviceOwnerScepCertificateProfile': return new AospDeviceOwnerScepCertificateProfile();
                case '#microsoft.graph.aospDeviceOwnerTrustedRootCertificate': return new AospDeviceOwnerTrustedRootCertificate();
                case '#microsoft.graph.aospDeviceOwnerWiFiConfiguration': return new AospDeviceOwnerWiFiConfiguration();
                case '#microsoft.graph.appleDeviceFeaturesConfigurationBase': return new AppleDeviceFeaturesConfigurationBase();
                case '#microsoft.graph.appleExpeditedCheckinConfigurationBase': return new AppleExpeditedCheckinConfigurationBase();
                case '#microsoft.graph.appleVpnConfiguration': return new AppleVpnConfiguration();
                case '#microsoft.graph.easEmailProfileConfigurationBase': return new EasEmailProfileConfigurationBase();
                case '#microsoft.graph.editionUpgradeConfiguration': return new EditionUpgradeConfiguration();
                case '#microsoft.graph.iosCertificateProfile': return new IosCertificateProfile();
                case '#microsoft.graph.iosCertificateProfileBase': return new IosCertificateProfileBase();
                case '#microsoft.graph.iosCustomConfiguration': return new IosCustomConfiguration();
                case '#microsoft.graph.iosDerivedCredentialAuthenticationConfiguration': return new IosDerivedCredentialAuthenticationConfiguration();
                case '#microsoft.graph.iosDeviceFeaturesConfiguration': return new IosDeviceFeaturesConfiguration();
                case '#microsoft.graph.iosEasEmailProfileConfiguration': return new IosEasEmailProfileConfiguration();
                case '#microsoft.graph.iosEducationDeviceConfiguration': return new IosEducationDeviceConfiguration();
                case '#microsoft.graph.iosEduDeviceConfiguration': return new IosEduDeviceConfiguration();
                case '#microsoft.graph.iosEnterpriseWiFiConfiguration': return new IosEnterpriseWiFiConfiguration();
                case '#microsoft.graph.iosExpeditedCheckinConfiguration': return new IosExpeditedCheckinConfiguration();
                case '#microsoft.graph.iosGeneralDeviceConfiguration': return new IosGeneralDeviceConfiguration();
                case '#microsoft.graph.iosikEv2VpnConfiguration': return new IosikEv2VpnConfiguration();
                case '#microsoft.graph.iosImportedPFXCertificateProfile': return new IosImportedPFXCertificateProfile();
                case '#microsoft.graph.iosPkcsCertificateProfile': return new IosPkcsCertificateProfile();
                case '#microsoft.graph.iosScepCertificateProfile': return new IosScepCertificateProfile();
                case '#microsoft.graph.iosTrustedRootCertificate': return new IosTrustedRootCertificate();
                case '#microsoft.graph.iosUpdateConfiguration': return new IosUpdateConfiguration();
                case '#microsoft.graph.iosVpnConfiguration': return new IosVpnConfiguration();
                case '#microsoft.graph.iosWiFiConfiguration': return new IosWiFiConfiguration();
                case '#microsoft.graph.macOSCertificateProfileBase': return new MacOSCertificateProfileBase();
                case '#microsoft.graph.macOSCustomAppConfiguration': return new MacOSCustomAppConfiguration();
                case '#microsoft.graph.macOSCustomConfiguration': return new MacOSCustomConfiguration();
                case '#microsoft.graph.macOSDeviceFeaturesConfiguration': return new MacOSDeviceFeaturesConfiguration();
                case '#microsoft.graph.macOSEndpointProtectionConfiguration': return new MacOSEndpointProtectionConfiguration();
                case '#microsoft.graph.macOSEnterpriseWiFiConfiguration': return new MacOSEnterpriseWiFiConfiguration();
                case '#microsoft.graph.macOSExtensionsConfiguration': return new MacOSExtensionsConfiguration();
                case '#microsoft.graph.macOSGeneralDeviceConfiguration': return new MacOSGeneralDeviceConfiguration();
                case '#microsoft.graph.macOSImportedPFXCertificateProfile': return new MacOSImportedPFXCertificateProfile();
                case '#microsoft.graph.macOSPkcsCertificateProfile': return new MacOSPkcsCertificateProfile();
                case '#microsoft.graph.macOSScepCertificateProfile': return new MacOSScepCertificateProfile();
                case '#microsoft.graph.macOSSoftwareUpdateConfiguration': return new MacOSSoftwareUpdateConfiguration();
                case '#microsoft.graph.macOSTrustedRootCertificate': return new MacOSTrustedRootCertificate();
                case '#microsoft.graph.macOSVpnConfiguration': return new MacOSVpnConfiguration();
                case '#microsoft.graph.macOSWiFiConfiguration': return new MacOSWiFiConfiguration();
                case '#microsoft.graph.macOSWiredNetworkConfiguration': return new MacOSWiredNetworkConfiguration();
                case '#microsoft.graph.sharedPCConfiguration': return new SharedPCConfiguration();
                case '#microsoft.graph.unsupportedDeviceConfiguration': return new UnsupportedDeviceConfiguration();
                case '#microsoft.graph.vpnConfiguration': return new VpnConfiguration();
                case '#microsoft.graph.windows10CertificateProfileBase': return new Windows10CertificateProfileBase();
                case '#microsoft.graph.windows10CustomConfiguration': return new Windows10CustomConfiguration();
                case '#microsoft.graph.windows10DeviceFirmwareConfigurationInterface': return new Windows10DeviceFirmwareConfigurationInterface();
                case '#microsoft.graph.windows10EasEmailProfileConfiguration': return new Windows10EasEmailProfileConfiguration();
                case '#microsoft.graph.windows10EndpointProtectionConfiguration': return new Windows10EndpointProtectionConfiguration();
                case '#microsoft.graph.windows10EnterpriseModernAppManagementConfiguration': return new Windows10EnterpriseModernAppManagementConfiguration();
                case '#microsoft.graph.windows10GeneralConfiguration': return new Windows10GeneralConfiguration();
                case '#microsoft.graph.windows10ImportedPFXCertificateProfile': return new Windows10ImportedPFXCertificateProfile();
                case '#microsoft.graph.windows10NetworkBoundaryConfiguration': return new Windows10NetworkBoundaryConfiguration();
                case '#microsoft.graph.windows10PFXImportCertificateProfile': return new Windows10PFXImportCertificateProfile();
                case '#microsoft.graph.windows10PkcsCertificateProfile': return new Windows10PkcsCertificateProfile();
                case '#microsoft.graph.windows10SecureAssessmentConfiguration': return new Windows10SecureAssessmentConfiguration();
                case '#microsoft.graph.windows10TeamGeneralConfiguration': return new Windows10TeamGeneralConfiguration();
                case '#microsoft.graph.windows10VpnConfiguration': return new Windows10VpnConfiguration();
                case '#microsoft.graph.windows81CertificateProfileBase': return new Windows81CertificateProfileBase();
                case '#microsoft.graph.windows81GeneralConfiguration': return new Windows81GeneralConfiguration();
                case '#microsoft.graph.windows81SCEPCertificateProfile': return new Windows81SCEPCertificateProfile();
                case '#microsoft.graph.windows81TrustedRootCertificate': return new Windows81TrustedRootCertificate();
                case '#microsoft.graph.windows81VpnConfiguration': return new Windows81VpnConfiguration();
                case '#microsoft.graph.windows81WifiImportConfiguration': return new Windows81WifiImportConfiguration();
                case '#microsoft.graph.windowsCertificateProfileBase': return new WindowsCertificateProfileBase();
                case '#microsoft.graph.windowsDefenderAdvancedThreatProtectionConfiguration': return new WindowsDefenderAdvancedThreatProtectionConfiguration();
                case '#microsoft.graph.windowsDeliveryOptimizationConfiguration': return new WindowsDeliveryOptimizationConfiguration();
                case '#microsoft.graph.windowsDomainJoinConfiguration': return new WindowsDomainJoinConfiguration();
                case '#microsoft.graph.windowsHealthMonitoringConfiguration': return new WindowsHealthMonitoringConfiguration();
                case '#microsoft.graph.windowsIdentityProtectionConfiguration': return new WindowsIdentityProtectionConfiguration();
                case '#microsoft.graph.windowsKioskConfiguration': return new WindowsKioskConfiguration();
                case '#microsoft.graph.windowsPhone81CertificateProfileBase': return new WindowsPhone81CertificateProfileBase();
                case '#microsoft.graph.windowsPhone81CustomConfiguration': return new WindowsPhone81CustomConfiguration();
                case '#microsoft.graph.windowsPhone81GeneralConfiguration': return new WindowsPhone81GeneralConfiguration();
                case '#microsoft.graph.windowsPhone81ImportedPFXCertificateProfile': return new WindowsPhone81ImportedPFXCertificateProfile();
                case '#microsoft.graph.windowsPhone81SCEPCertificateProfile': return new WindowsPhone81SCEPCertificateProfile();
                case '#microsoft.graph.windowsPhone81TrustedRootCertificate': return new WindowsPhone81TrustedRootCertificate();
                case '#microsoft.graph.windowsPhone81VpnConfiguration': return new WindowsPhone81VpnConfiguration();
                case '#microsoft.graph.windowsPhoneEASEmailProfileConfiguration': return new WindowsPhoneEASEmailProfileConfiguration();
                case '#microsoft.graph.windowsUpdateForBusinessConfiguration': return new WindowsUpdateForBusinessConfiguration();
                case '#microsoft.graph.windowsVpnConfiguration': return new WindowsVpnConfiguration();
                case '#microsoft.graph.windowsWifiConfiguration': return new WindowsWifiConfiguration();
                case '#microsoft.graph.windowsWifiEnterpriseEAPConfiguration': return new WindowsWifiEnterpriseEAPConfiguration();
                case '#microsoft.graph.windowsWiredNetworkConfiguration': return new WindowsWiredNetworkConfiguration();
            }
        }
        return new DeviceConfiguration();
    }

    /**
     * Gets the assignments property value. The list of assignments for the device configuration profile.
     * @return array<DeviceConfigurationAssignment>|null
    */
    public function getAssignments(): ?array {
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceConfigurationAssignment::class);
            /** @var array<DeviceConfigurationAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the createdDateTime property value. DateTime the object was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the description property value. Admin provided description of the Device Configuration.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the deviceManagementApplicabilityRuleDeviceMode property value. The device mode applicability rule for this Policy.
     * @return DeviceManagementApplicabilityRuleDeviceMode|null
    */
    public function getDeviceManagementApplicabilityRuleDeviceMode(): ?DeviceManagementApplicabilityRuleDeviceMode {
        $val = $this->getBackingStore()->get('deviceManagementApplicabilityRuleDeviceMode');
        if (is_null($val) || $val instanceof DeviceManagementApplicabilityRuleDeviceMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceManagementApplicabilityRuleDeviceMode'");
    }

    /**
     * Gets the deviceManagementApplicabilityRuleOsEdition property value. The OS edition applicability for this Policy.
     * @return DeviceManagementApplicabilityRuleOsEdition|null
    */
    public function getDeviceManagementApplicabilityRuleOsEdition(): ?DeviceManagementApplicabilityRuleOsEdition {
        $val = $this->getBackingStore()->get('deviceManagementApplicabilityRuleOsEdition');
        if (is_null($val) || $val instanceof DeviceManagementApplicabilityRuleOsEdition) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceManagementApplicabilityRuleOsEdition'");
    }

    /**
     * Gets the deviceManagementApplicabilityRuleOsVersion property value. The OS version applicability rule for this Policy.
     * @return DeviceManagementApplicabilityRuleOsVersion|null
    */
    public function getDeviceManagementApplicabilityRuleOsVersion(): ?DeviceManagementApplicabilityRuleOsVersion {
        $val = $this->getBackingStore()->get('deviceManagementApplicabilityRuleOsVersion');
        if (is_null($val) || $val instanceof DeviceManagementApplicabilityRuleOsVersion) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceManagementApplicabilityRuleOsVersion'");
    }

    /**
     * Gets the deviceSettingStateSummaries property value. Device Configuration Setting State Device Summary
     * @return array<SettingStateDeviceSummary>|null
    */
    public function getDeviceSettingStateSummaries(): ?array {
        $val = $this->getBackingStore()->get('deviceSettingStateSummaries');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SettingStateDeviceSummary::class);
            /** @var array<SettingStateDeviceSummary>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceSettingStateSummaries'");
    }

    /**
     * Gets the deviceStatuses property value. Device configuration installation status by device.
     * @return array<DeviceConfigurationDeviceStatus>|null
    */
    public function getDeviceStatuses(): ?array {
        $val = $this->getBackingStore()->get('deviceStatuses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceConfigurationDeviceStatus::class);
            /** @var array<DeviceConfigurationDeviceStatus>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceStatuses'");
    }

    /**
     * Gets the deviceStatusOverview property value. Device Configuration devices status overview
     * @return DeviceConfigurationDeviceOverview|null
    */
    public function getDeviceStatusOverview(): ?DeviceConfigurationDeviceOverview {
        $val = $this->getBackingStore()->get('deviceStatusOverview');
        if (is_null($val) || $val instanceof DeviceConfigurationDeviceOverview) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceStatusOverview'");
    }

    /**
     * Gets the displayName property value. Admin provided name of the device configuration.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([DeviceConfigurationAssignment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'deviceManagementApplicabilityRuleDeviceMode' => fn(ParseNode $n) => $o->setDeviceManagementApplicabilityRuleDeviceMode($n->getObjectValue([DeviceManagementApplicabilityRuleDeviceMode::class, 'createFromDiscriminatorValue'])),
            'deviceManagementApplicabilityRuleOsEdition' => fn(ParseNode $n) => $o->setDeviceManagementApplicabilityRuleOsEdition($n->getObjectValue([DeviceManagementApplicabilityRuleOsEdition::class, 'createFromDiscriminatorValue'])),
            'deviceManagementApplicabilityRuleOsVersion' => fn(ParseNode $n) => $o->setDeviceManagementApplicabilityRuleOsVersion($n->getObjectValue([DeviceManagementApplicabilityRuleOsVersion::class, 'createFromDiscriminatorValue'])),
            'deviceSettingStateSummaries' => fn(ParseNode $n) => $o->setDeviceSettingStateSummaries($n->getCollectionOfObjectValues([SettingStateDeviceSummary::class, 'createFromDiscriminatorValue'])),
            'deviceStatuses' => fn(ParseNode $n) => $o->setDeviceStatuses($n->getCollectionOfObjectValues([DeviceConfigurationDeviceStatus::class, 'createFromDiscriminatorValue'])),
            'deviceStatusOverview' => fn(ParseNode $n) => $o->setDeviceStatusOverview($n->getObjectValue([DeviceConfigurationDeviceOverview::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'groupAssignments' => fn(ParseNode $n) => $o->setGroupAssignments($n->getCollectionOfObjectValues([DeviceConfigurationGroupAssignment::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'roleScopeTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoleScopeTagIds($val);
            },
            'supportsScopeTags' => fn(ParseNode $n) => $o->setSupportsScopeTags($n->getBooleanValue()),
            'userStatuses' => fn(ParseNode $n) => $o->setUserStatuses($n->getCollectionOfObjectValues([DeviceConfigurationUserStatus::class, 'createFromDiscriminatorValue'])),
            'userStatusOverview' => fn(ParseNode $n) => $o->setUserStatusOverview($n->getObjectValue([DeviceConfigurationUserOverview::class, 'createFromDiscriminatorValue'])),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the groupAssignments property value. The list of group assignments for the device configuration profile.
     * @return array<DeviceConfigurationGroupAssignment>|null
    */
    public function getGroupAssignments(): ?array {
        $val = $this->getBackingStore()->get('groupAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceConfigurationGroupAssignment::class);
            /** @var array<DeviceConfigurationGroupAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupAssignments'");
    }

    /**
     * Gets the lastModifiedDateTime property value. DateTime the object was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
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
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
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
     * Gets the supportsScopeTags property value. Indicates whether or not the underlying Device Configuration supports the assignment of scope tags. Assigning to the ScopeTags property is not allowed when this value is false and entities will not be visible to scoped users. This occurs for Legacy policies created in Silverlight and can be resolved by deleting and recreating the policy in the Azure Portal. This property is read-only.
     * @return bool|null
    */
    public function getSupportsScopeTags(): ?bool {
        $val = $this->getBackingStore()->get('supportsScopeTags');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportsScopeTags'");
    }

    /**
     * Gets the userStatuses property value. Device configuration installation status by user.
     * @return array<DeviceConfigurationUserStatus>|null
    */
    public function getUserStatuses(): ?array {
        $val = $this->getBackingStore()->get('userStatuses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceConfigurationUserStatus::class);
            /** @var array<DeviceConfigurationUserStatus>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userStatuses'");
    }

    /**
     * Gets the userStatusOverview property value. Device Configuration users status overview
     * @return DeviceConfigurationUserOverview|null
    */
    public function getUserStatusOverview(): ?DeviceConfigurationUserOverview {
        $val = $this->getBackingStore()->get('userStatusOverview');
        if (is_null($val) || $val instanceof DeviceConfigurationUserOverview) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userStatusOverview'");
    }

    /**
     * Gets the version property value. Version of the device configuration.
     * @return int|null
    */
    public function getVersion(): ?int {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeObjectValue('deviceManagementApplicabilityRuleDeviceMode', $this->getDeviceManagementApplicabilityRuleDeviceMode());
        $writer->writeObjectValue('deviceManagementApplicabilityRuleOsEdition', $this->getDeviceManagementApplicabilityRuleOsEdition());
        $writer->writeObjectValue('deviceManagementApplicabilityRuleOsVersion', $this->getDeviceManagementApplicabilityRuleOsVersion());
        $writer->writeCollectionOfObjectValues('deviceSettingStateSummaries', $this->getDeviceSettingStateSummaries());
        $writer->writeCollectionOfObjectValues('deviceStatuses', $this->getDeviceStatuses());
        $writer->writeObjectValue('deviceStatusOverview', $this->getDeviceStatusOverview());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('groupAssignments', $this->getGroupAssignments());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeCollectionOfObjectValues('userStatuses', $this->getUserStatuses());
        $writer->writeObjectValue('userStatusOverview', $this->getUserStatusOverview());
        $writer->writeIntegerValue('version', $this->getVersion());
    }

    /**
     * Sets the assignments property value. The list of assignments for the device configuration profile.
     * @param array<DeviceConfigurationAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the createdDateTime property value. DateTime the object was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Admin provided description of the Device Configuration.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the deviceManagementApplicabilityRuleDeviceMode property value. The device mode applicability rule for this Policy.
     * @param DeviceManagementApplicabilityRuleDeviceMode|null $value Value to set for the deviceManagementApplicabilityRuleDeviceMode property.
    */
    public function setDeviceManagementApplicabilityRuleDeviceMode(?DeviceManagementApplicabilityRuleDeviceMode $value): void {
        $this->getBackingStore()->set('deviceManagementApplicabilityRuleDeviceMode', $value);
    }

    /**
     * Sets the deviceManagementApplicabilityRuleOsEdition property value. The OS edition applicability for this Policy.
     * @param DeviceManagementApplicabilityRuleOsEdition|null $value Value to set for the deviceManagementApplicabilityRuleOsEdition property.
    */
    public function setDeviceManagementApplicabilityRuleOsEdition(?DeviceManagementApplicabilityRuleOsEdition $value): void {
        $this->getBackingStore()->set('deviceManagementApplicabilityRuleOsEdition', $value);
    }

    /**
     * Sets the deviceManagementApplicabilityRuleOsVersion property value. The OS version applicability rule for this Policy.
     * @param DeviceManagementApplicabilityRuleOsVersion|null $value Value to set for the deviceManagementApplicabilityRuleOsVersion property.
    */
    public function setDeviceManagementApplicabilityRuleOsVersion(?DeviceManagementApplicabilityRuleOsVersion $value): void {
        $this->getBackingStore()->set('deviceManagementApplicabilityRuleOsVersion', $value);
    }

    /**
     * Sets the deviceSettingStateSummaries property value. Device Configuration Setting State Device Summary
     * @param array<SettingStateDeviceSummary>|null $value Value to set for the deviceSettingStateSummaries property.
    */
    public function setDeviceSettingStateSummaries(?array $value): void {
        $this->getBackingStore()->set('deviceSettingStateSummaries', $value);
    }

    /**
     * Sets the deviceStatuses property value. Device configuration installation status by device.
     * @param array<DeviceConfigurationDeviceStatus>|null $value Value to set for the deviceStatuses property.
    */
    public function setDeviceStatuses(?array $value): void {
        $this->getBackingStore()->set('deviceStatuses', $value);
    }

    /**
     * Sets the deviceStatusOverview property value. Device Configuration devices status overview
     * @param DeviceConfigurationDeviceOverview|null $value Value to set for the deviceStatusOverview property.
    */
    public function setDeviceStatusOverview(?DeviceConfigurationDeviceOverview $value): void {
        $this->getBackingStore()->set('deviceStatusOverview', $value);
    }

    /**
     * Sets the displayName property value. Admin provided name of the device configuration.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the groupAssignments property value. The list of group assignments for the device configuration profile.
     * @param array<DeviceConfigurationGroupAssignment>|null $value Value to set for the groupAssignments property.
    */
    public function setGroupAssignments(?array $value): void {
        $this->getBackingStore()->set('groupAssignments', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. DateTime the object was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the supportsScopeTags property value. Indicates whether or not the underlying Device Configuration supports the assignment of scope tags. Assigning to the ScopeTags property is not allowed when this value is false and entities will not be visible to scoped users. This occurs for Legacy policies created in Silverlight and can be resolved by deleting and recreating the policy in the Azure Portal. This property is read-only.
     * @param bool|null $value Value to set for the supportsScopeTags property.
    */
    public function setSupportsScopeTags(?bool $value): void {
        $this->getBackingStore()->set('supportsScopeTags', $value);
    }

    /**
     * Sets the userStatuses property value. Device configuration installation status by user.
     * @param array<DeviceConfigurationUserStatus>|null $value Value to set for the userStatuses property.
    */
    public function setUserStatuses(?array $value): void {
        $this->getBackingStore()->set('userStatuses', $value);
    }

    /**
     * Sets the userStatusOverview property value. Device Configuration users status overview
     * @param DeviceConfigurationUserOverview|null $value Value to set for the userStatusOverview property.
    */
    public function setUserStatusOverview(?DeviceConfigurationUserOverview $value): void {
        $this->getBackingStore()->set('userStatusOverview', $value);
    }

    /**
     * Sets the version property value. Version of the device configuration.
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
