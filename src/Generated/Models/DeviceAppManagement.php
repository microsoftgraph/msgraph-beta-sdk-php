<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Singleton entity that acts as a container for all device app management functionality.
*/
class DeviceAppManagement extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceAppManagement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceAppManagement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceAppManagement {
        return new DeviceAppManagement();
    }

    /**
     * Gets the androidManagedAppProtections property value. Android managed app policies.
     * @return array<AndroidManagedAppProtection>|null
    */
    public function getAndroidManagedAppProtections(): ?array {
        $val = $this->getBackingStore()->get('androidManagedAppProtections');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AndroidManagedAppProtection::class);
            /** @var array<AndroidManagedAppProtection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidManagedAppProtections'");
    }

    /**
     * Gets the defaultManagedAppProtections property value. Default managed app policies.
     * @return array<DefaultManagedAppProtection>|null
    */
    public function getDefaultManagedAppProtections(): ?array {
        $val = $this->getBackingStore()->get('defaultManagedAppProtections');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DefaultManagedAppProtection::class);
            /** @var array<DefaultManagedAppProtection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultManagedAppProtections'");
    }

    /**
     * Gets the deviceAppManagementTasks property value. Device app management tasks.
     * @return array<DeviceAppManagementTask>|null
    */
    public function getDeviceAppManagementTasks(): ?array {
        $val = $this->getBackingStore()->get('deviceAppManagementTasks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceAppManagementTask::class);
            /** @var array<DeviceAppManagementTask>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceAppManagementTasks'");
    }

    /**
     * Gets the enterpriseCodeSigningCertificates property value. The Windows Enterprise Code Signing Certificate.
     * @return array<EnterpriseCodeSigningCertificate>|null
    */
    public function getEnterpriseCodeSigningCertificates(): ?array {
        $val = $this->getBackingStore()->get('enterpriseCodeSigningCertificates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EnterpriseCodeSigningCertificate::class);
            /** @var array<EnterpriseCodeSigningCertificate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseCodeSigningCertificates'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'androidManagedAppProtections' => fn(ParseNode $n) => $o->setAndroidManagedAppProtections($n->getCollectionOfObjectValues([AndroidManagedAppProtection::class, 'createFromDiscriminatorValue'])),
            'defaultManagedAppProtections' => fn(ParseNode $n) => $o->setDefaultManagedAppProtections($n->getCollectionOfObjectValues([DefaultManagedAppProtection::class, 'createFromDiscriminatorValue'])),
            'deviceAppManagementTasks' => fn(ParseNode $n) => $o->setDeviceAppManagementTasks($n->getCollectionOfObjectValues([DeviceAppManagementTask::class, 'createFromDiscriminatorValue'])),
            'enterpriseCodeSigningCertificates' => fn(ParseNode $n) => $o->setEnterpriseCodeSigningCertificates($n->getCollectionOfObjectValues([EnterpriseCodeSigningCertificate::class, 'createFromDiscriminatorValue'])),
            'iosLobAppProvisioningConfigurations' => fn(ParseNode $n) => $o->setIosLobAppProvisioningConfigurations($n->getCollectionOfObjectValues([IosLobAppProvisioningConfiguration::class, 'createFromDiscriminatorValue'])),
            'iosManagedAppProtections' => fn(ParseNode $n) => $o->setIosManagedAppProtections($n->getCollectionOfObjectValues([IosManagedAppProtection::class, 'createFromDiscriminatorValue'])),
            'isEnabledForMicrosoftStoreForBusiness' => fn(ParseNode $n) => $o->setIsEnabledForMicrosoftStoreForBusiness($n->getBooleanValue()),
            'managedAppPolicies' => fn(ParseNode $n) => $o->setManagedAppPolicies($n->getCollectionOfObjectValues([ManagedAppPolicy::class, 'createFromDiscriminatorValue'])),
            'managedAppRegistrations' => fn(ParseNode $n) => $o->setManagedAppRegistrations($n->getCollectionOfObjectValues([ManagedAppRegistration::class, 'createFromDiscriminatorValue'])),
            'managedAppStatuses' => fn(ParseNode $n) => $o->setManagedAppStatuses($n->getCollectionOfObjectValues([ManagedAppStatus::class, 'createFromDiscriminatorValue'])),
            'managedEBookCategories' => fn(ParseNode $n) => $o->setManagedEBookCategories($n->getCollectionOfObjectValues([ManagedEBookCategory::class, 'createFromDiscriminatorValue'])),
            'managedEBooks' => fn(ParseNode $n) => $o->setManagedEBooks($n->getCollectionOfObjectValues([ManagedEBook::class, 'createFromDiscriminatorValue'])),
            'mdmWindowsInformationProtectionPolicies' => fn(ParseNode $n) => $o->setMdmWindowsInformationProtectionPolicies($n->getCollectionOfObjectValues([MdmWindowsInformationProtectionPolicy::class, 'createFromDiscriminatorValue'])),
            'microsoftStoreForBusinessLanguage' => fn(ParseNode $n) => $o->setMicrosoftStoreForBusinessLanguage($n->getStringValue()),
            'microsoftStoreForBusinessLastCompletedApplicationSyncTime' => fn(ParseNode $n) => $o->setMicrosoftStoreForBusinessLastCompletedApplicationSyncTime($n->getDateTimeValue()),
            'microsoftStoreForBusinessLastSuccessfulSyncDateTime' => fn(ParseNode $n) => $o->setMicrosoftStoreForBusinessLastSuccessfulSyncDateTime($n->getDateTimeValue()),
            'microsoftStoreForBusinessPortalSelection' => fn(ParseNode $n) => $o->setMicrosoftStoreForBusinessPortalSelection($n->getEnumValue(MicrosoftStoreForBusinessPortalSelectionOptions::class)),
            'mobileAppCategories' => fn(ParseNode $n) => $o->setMobileAppCategories($n->getCollectionOfObjectValues([MobileAppCategory::class, 'createFromDiscriminatorValue'])),
            'mobileAppConfigurations' => fn(ParseNode $n) => $o->setMobileAppConfigurations($n->getCollectionOfObjectValues([ManagedDeviceMobileAppConfiguration::class, 'createFromDiscriminatorValue'])),
            'mobileApps' => fn(ParseNode $n) => $o->setMobileApps($n->getCollectionOfObjectValues([MobileApp::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'policySets' => fn(ParseNode $n) => $o->setPolicySets($n->getCollectionOfObjectValues([PolicySet::class, 'createFromDiscriminatorValue'])),
            'symantecCodeSigningCertificate' => fn(ParseNode $n) => $o->setSymantecCodeSigningCertificate($n->getObjectValue([SymantecCodeSigningCertificate::class, 'createFromDiscriminatorValue'])),
            'targetedManagedAppConfigurations' => fn(ParseNode $n) => $o->setTargetedManagedAppConfigurations($n->getCollectionOfObjectValues([TargetedManagedAppConfiguration::class, 'createFromDiscriminatorValue'])),
            'vppTokens' => fn(ParseNode $n) => $o->setVppTokens($n->getCollectionOfObjectValues([VppToken::class, 'createFromDiscriminatorValue'])),
            'wdacSupplementalPolicies' => fn(ParseNode $n) => $o->setWdacSupplementalPolicies($n->getCollectionOfObjectValues([WindowsDefenderApplicationControlSupplementalPolicy::class, 'createFromDiscriminatorValue'])),
            'windowsInformationProtectionDeviceRegistrations' => fn(ParseNode $n) => $o->setWindowsInformationProtectionDeviceRegistrations($n->getCollectionOfObjectValues([WindowsInformationProtectionDeviceRegistration::class, 'createFromDiscriminatorValue'])),
            'windowsInformationProtectionPolicies' => fn(ParseNode $n) => $o->setWindowsInformationProtectionPolicies($n->getCollectionOfObjectValues([WindowsInformationProtectionPolicy::class, 'createFromDiscriminatorValue'])),
            'windowsInformationProtectionWipeActions' => fn(ParseNode $n) => $o->setWindowsInformationProtectionWipeActions($n->getCollectionOfObjectValues([WindowsInformationProtectionWipeAction::class, 'createFromDiscriminatorValue'])),
            'windowsManagedAppProtections' => fn(ParseNode $n) => $o->setWindowsManagedAppProtections($n->getCollectionOfObjectValues([WindowsManagedAppProtection::class, 'createFromDiscriminatorValue'])),
            'windowsManagementApp' => fn(ParseNode $n) => $o->setWindowsManagementApp($n->getObjectValue([WindowsManagementApp::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the iosLobAppProvisioningConfigurations property value. The IOS Lob App Provisioning Configurations.
     * @return array<IosLobAppProvisioningConfiguration>|null
    */
    public function getIosLobAppProvisioningConfigurations(): ?array {
        $val = $this->getBackingStore()->get('iosLobAppProvisioningConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IosLobAppProvisioningConfiguration::class);
            /** @var array<IosLobAppProvisioningConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iosLobAppProvisioningConfigurations'");
    }

    /**
     * Gets the iosManagedAppProtections property value. iOS managed app policies.
     * @return array<IosManagedAppProtection>|null
    */
    public function getIosManagedAppProtections(): ?array {
        $val = $this->getBackingStore()->get('iosManagedAppProtections');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IosManagedAppProtection::class);
            /** @var array<IosManagedAppProtection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iosManagedAppProtections'");
    }

    /**
     * Gets the isEnabledForMicrosoftStoreForBusiness property value. Whether the account is enabled for syncing applications from the Microsoft Store for Business.
     * @return bool|null
    */
    public function getIsEnabledForMicrosoftStoreForBusiness(): ?bool {
        $val = $this->getBackingStore()->get('isEnabledForMicrosoftStoreForBusiness');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabledForMicrosoftStoreForBusiness'");
    }

    /**
     * Gets the managedAppPolicies property value. Managed app policies.
     * @return array<ManagedAppPolicy>|null
    */
    public function getManagedAppPolicies(): ?array {
        $val = $this->getBackingStore()->get('managedAppPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedAppPolicy::class);
            /** @var array<ManagedAppPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedAppPolicies'");
    }

    /**
     * Gets the managedAppRegistrations property value. The managed app registrations.
     * @return array<ManagedAppRegistration>|null
    */
    public function getManagedAppRegistrations(): ?array {
        $val = $this->getBackingStore()->get('managedAppRegistrations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedAppRegistration::class);
            /** @var array<ManagedAppRegistration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedAppRegistrations'");
    }

    /**
     * Gets the managedAppStatuses property value. The managed app statuses.
     * @return array<ManagedAppStatus>|null
    */
    public function getManagedAppStatuses(): ?array {
        $val = $this->getBackingStore()->get('managedAppStatuses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedAppStatus::class);
            /** @var array<ManagedAppStatus>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedAppStatuses'");
    }

    /**
     * Gets the managedEBookCategories property value. The mobile eBook categories.
     * @return array<ManagedEBookCategory>|null
    */
    public function getManagedEBookCategories(): ?array {
        $val = $this->getBackingStore()->get('managedEBookCategories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedEBookCategory::class);
            /** @var array<ManagedEBookCategory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedEBookCategories'");
    }

    /**
     * Gets the managedEBooks property value. The Managed eBook.
     * @return array<ManagedEBook>|null
    */
    public function getManagedEBooks(): ?array {
        $val = $this->getBackingStore()->get('managedEBooks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedEBook::class);
            /** @var array<ManagedEBook>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedEBooks'");
    }

    /**
     * Gets the mdmWindowsInformationProtectionPolicies property value. Windows information protection for apps running on devices which are MDM enrolled.
     * @return array<MdmWindowsInformationProtectionPolicy>|null
    */
    public function getMdmWindowsInformationProtectionPolicies(): ?array {
        $val = $this->getBackingStore()->get('mdmWindowsInformationProtectionPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MdmWindowsInformationProtectionPolicy::class);
            /** @var array<MdmWindowsInformationProtectionPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mdmWindowsInformationProtectionPolicies'");
    }

    /**
     * Gets the microsoftStoreForBusinessLanguage property value. The locale information used to sync applications from the Microsoft Store for Business. Cultures that are specific to a country/region. The names of these cultures follow RFC 4646 (Windows Vista and later). The format is -<country/regioncode2>, where  is a lowercase two-letter code derived from ISO 639-1 and <country/regioncode2> is an uppercase two-letter code derived from ISO 3166. For example, en-US for English (United States) is a specific culture.
     * @return string|null
    */
    public function getMicrosoftStoreForBusinessLanguage(): ?string {
        $val = $this->getBackingStore()->get('microsoftStoreForBusinessLanguage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoftStoreForBusinessLanguage'");
    }

    /**
     * Gets the microsoftStoreForBusinessLastCompletedApplicationSyncTime property value. The last time an application sync from the Microsoft Store for Business was completed.
     * @return DateTime|null
    */
    public function getMicrosoftStoreForBusinessLastCompletedApplicationSyncTime(): ?DateTime {
        $val = $this->getBackingStore()->get('microsoftStoreForBusinessLastCompletedApplicationSyncTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoftStoreForBusinessLastCompletedApplicationSyncTime'");
    }

    /**
     * Gets the microsoftStoreForBusinessLastSuccessfulSyncDateTime property value. The last time the apps from the Microsoft Store for Business were synced successfully for the account.
     * @return DateTime|null
    */
    public function getMicrosoftStoreForBusinessLastSuccessfulSyncDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('microsoftStoreForBusinessLastSuccessfulSyncDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoftStoreForBusinessLastSuccessfulSyncDateTime'");
    }

    /**
     * Gets the microsoftStoreForBusinessPortalSelection property value. Portal to which admin syncs available Microsoft Store for Business apps. This is available in the Intune Admin Console.
     * @return MicrosoftStoreForBusinessPortalSelectionOptions|null
    */
    public function getMicrosoftStoreForBusinessPortalSelection(): ?MicrosoftStoreForBusinessPortalSelectionOptions {
        $val = $this->getBackingStore()->get('microsoftStoreForBusinessPortalSelection');
        if (is_null($val) || $val instanceof MicrosoftStoreForBusinessPortalSelectionOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoftStoreForBusinessPortalSelection'");
    }

    /**
     * Gets the mobileAppCategories property value. The mobile app categories.
     * @return array<MobileAppCategory>|null
    */
    public function getMobileAppCategories(): ?array {
        $val = $this->getBackingStore()->get('mobileAppCategories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MobileAppCategory::class);
            /** @var array<MobileAppCategory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobileAppCategories'");
    }

    /**
     * Gets the mobileAppConfigurations property value. The Managed Device Mobile Application Configurations.
     * @return array<ManagedDeviceMobileAppConfiguration>|null
    */
    public function getMobileAppConfigurations(): ?array {
        $val = $this->getBackingStore()->get('mobileAppConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedDeviceMobileAppConfiguration::class);
            /** @var array<ManagedDeviceMobileAppConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobileAppConfigurations'");
    }

    /**
     * Gets the mobileApps property value. The mobile apps.
     * @return array<MobileApp>|null
    */
    public function getMobileApps(): ?array {
        $val = $this->getBackingStore()->get('mobileApps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MobileApp::class);
            /** @var array<MobileApp>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobileApps'");
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
     * Gets the policySets property value. The PolicySet of Policies and Applications
     * @return array<PolicySet>|null
    */
    public function getPolicySets(): ?array {
        $val = $this->getBackingStore()->get('policySets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PolicySet::class);
            /** @var array<PolicySet>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policySets'");
    }

    /**
     * Gets the symantecCodeSigningCertificate property value. The WinPhone Symantec Code Signing Certificate.
     * @return SymantecCodeSigningCertificate|null
    */
    public function getSymantecCodeSigningCertificate(): ?SymantecCodeSigningCertificate {
        $val = $this->getBackingStore()->get('symantecCodeSigningCertificate');
        if (is_null($val) || $val instanceof SymantecCodeSigningCertificate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'symantecCodeSigningCertificate'");
    }

    /**
     * Gets the targetedManagedAppConfigurations property value. Targeted managed app configurations.
     * @return array<TargetedManagedAppConfiguration>|null
    */
    public function getTargetedManagedAppConfigurations(): ?array {
        $val = $this->getBackingStore()->get('targetedManagedAppConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TargetedManagedAppConfiguration::class);
            /** @var array<TargetedManagedAppConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetedManagedAppConfigurations'");
    }

    /**
     * Gets the vppTokens property value. List of Vpp tokens for this organization.
     * @return array<VppToken>|null
    */
    public function getVppTokens(): ?array {
        $val = $this->getBackingStore()->get('vppTokens');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VppToken::class);
            /** @var array<VppToken>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vppTokens'");
    }

    /**
     * Gets the wdacSupplementalPolicies property value. The collection of Windows Defender Application Control Supplemental Policies.
     * @return array<WindowsDefenderApplicationControlSupplementalPolicy>|null
    */
    public function getWdacSupplementalPolicies(): ?array {
        $val = $this->getBackingStore()->get('wdacSupplementalPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsDefenderApplicationControlSupplementalPolicy::class);
            /** @var array<WindowsDefenderApplicationControlSupplementalPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wdacSupplementalPolicies'");
    }

    /**
     * Gets the windowsInformationProtectionDeviceRegistrations property value. Windows information protection device registrations that are not MDM enrolled.
     * @return array<WindowsInformationProtectionDeviceRegistration>|null
    */
    public function getWindowsInformationProtectionDeviceRegistrations(): ?array {
        $val = $this->getBackingStore()->get('windowsInformationProtectionDeviceRegistrations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsInformationProtectionDeviceRegistration::class);
            /** @var array<WindowsInformationProtectionDeviceRegistration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsInformationProtectionDeviceRegistrations'");
    }

    /**
     * Gets the windowsInformationProtectionPolicies property value. Windows information protection for apps running on devices which are not MDM enrolled.
     * @return array<WindowsInformationProtectionPolicy>|null
    */
    public function getWindowsInformationProtectionPolicies(): ?array {
        $val = $this->getBackingStore()->get('windowsInformationProtectionPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsInformationProtectionPolicy::class);
            /** @var array<WindowsInformationProtectionPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsInformationProtectionPolicies'");
    }

    /**
     * Gets the windowsInformationProtectionWipeActions property value. Windows information protection wipe actions.
     * @return array<WindowsInformationProtectionWipeAction>|null
    */
    public function getWindowsInformationProtectionWipeActions(): ?array {
        $val = $this->getBackingStore()->get('windowsInformationProtectionWipeActions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsInformationProtectionWipeAction::class);
            /** @var array<WindowsInformationProtectionWipeAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsInformationProtectionWipeActions'");
    }

    /**
     * Gets the windowsManagedAppProtections property value. Windows managed app policies.
     * @return array<WindowsManagedAppProtection>|null
    */
    public function getWindowsManagedAppProtections(): ?array {
        $val = $this->getBackingStore()->get('windowsManagedAppProtections');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsManagedAppProtection::class);
            /** @var array<WindowsManagedAppProtection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsManagedAppProtections'");
    }

    /**
     * Gets the windowsManagementApp property value. Windows management app.
     * @return WindowsManagementApp|null
    */
    public function getWindowsManagementApp(): ?WindowsManagementApp {
        $val = $this->getBackingStore()->get('windowsManagementApp');
        if (is_null($val) || $val instanceof WindowsManagementApp) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsManagementApp'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('androidManagedAppProtections', $this->getAndroidManagedAppProtections());
        $writer->writeCollectionOfObjectValues('defaultManagedAppProtections', $this->getDefaultManagedAppProtections());
        $writer->writeCollectionOfObjectValues('deviceAppManagementTasks', $this->getDeviceAppManagementTasks());
        $writer->writeCollectionOfObjectValues('enterpriseCodeSigningCertificates', $this->getEnterpriseCodeSigningCertificates());
        $writer->writeCollectionOfObjectValues('iosLobAppProvisioningConfigurations', $this->getIosLobAppProvisioningConfigurations());
        $writer->writeCollectionOfObjectValues('iosManagedAppProtections', $this->getIosManagedAppProtections());
        $writer->writeBooleanValue('isEnabledForMicrosoftStoreForBusiness', $this->getIsEnabledForMicrosoftStoreForBusiness());
        $writer->writeCollectionOfObjectValues('managedAppPolicies', $this->getManagedAppPolicies());
        $writer->writeCollectionOfObjectValues('managedAppRegistrations', $this->getManagedAppRegistrations());
        $writer->writeCollectionOfObjectValues('managedAppStatuses', $this->getManagedAppStatuses());
        $writer->writeCollectionOfObjectValues('managedEBookCategories', $this->getManagedEBookCategories());
        $writer->writeCollectionOfObjectValues('managedEBooks', $this->getManagedEBooks());
        $writer->writeCollectionOfObjectValues('mdmWindowsInformationProtectionPolicies', $this->getMdmWindowsInformationProtectionPolicies());
        $writer->writeStringValue('microsoftStoreForBusinessLanguage', $this->getMicrosoftStoreForBusinessLanguage());
        $writer->writeDateTimeValue('microsoftStoreForBusinessLastCompletedApplicationSyncTime', $this->getMicrosoftStoreForBusinessLastCompletedApplicationSyncTime());
        $writer->writeDateTimeValue('microsoftStoreForBusinessLastSuccessfulSyncDateTime', $this->getMicrosoftStoreForBusinessLastSuccessfulSyncDateTime());
        $writer->writeEnumValue('microsoftStoreForBusinessPortalSelection', $this->getMicrosoftStoreForBusinessPortalSelection());
        $writer->writeCollectionOfObjectValues('mobileAppCategories', $this->getMobileAppCategories());
        $writer->writeCollectionOfObjectValues('mobileAppConfigurations', $this->getMobileAppConfigurations());
        $writer->writeCollectionOfObjectValues('mobileApps', $this->getMobileApps());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('policySets', $this->getPolicySets());
        $writer->writeObjectValue('symantecCodeSigningCertificate', $this->getSymantecCodeSigningCertificate());
        $writer->writeCollectionOfObjectValues('targetedManagedAppConfigurations', $this->getTargetedManagedAppConfigurations());
        $writer->writeCollectionOfObjectValues('vppTokens', $this->getVppTokens());
        $writer->writeCollectionOfObjectValues('wdacSupplementalPolicies', $this->getWdacSupplementalPolicies());
        $writer->writeCollectionOfObjectValues('windowsInformationProtectionDeviceRegistrations', $this->getWindowsInformationProtectionDeviceRegistrations());
        $writer->writeCollectionOfObjectValues('windowsInformationProtectionPolicies', $this->getWindowsInformationProtectionPolicies());
        $writer->writeCollectionOfObjectValues('windowsInformationProtectionWipeActions', $this->getWindowsInformationProtectionWipeActions());
        $writer->writeCollectionOfObjectValues('windowsManagedAppProtections', $this->getWindowsManagedAppProtections());
        $writer->writeObjectValue('windowsManagementApp', $this->getWindowsManagementApp());
    }

    /**
     * Sets the androidManagedAppProtections property value. Android managed app policies.
     * @param array<AndroidManagedAppProtection>|null $value Value to set for the androidManagedAppProtections property.
    */
    public function setAndroidManagedAppProtections(?array $value): void {
        $this->getBackingStore()->set('androidManagedAppProtections', $value);
    }

    /**
     * Sets the defaultManagedAppProtections property value. Default managed app policies.
     * @param array<DefaultManagedAppProtection>|null $value Value to set for the defaultManagedAppProtections property.
    */
    public function setDefaultManagedAppProtections(?array $value): void {
        $this->getBackingStore()->set('defaultManagedAppProtections', $value);
    }

    /**
     * Sets the deviceAppManagementTasks property value. Device app management tasks.
     * @param array<DeviceAppManagementTask>|null $value Value to set for the deviceAppManagementTasks property.
    */
    public function setDeviceAppManagementTasks(?array $value): void {
        $this->getBackingStore()->set('deviceAppManagementTasks', $value);
    }

    /**
     * Sets the enterpriseCodeSigningCertificates property value. The Windows Enterprise Code Signing Certificate.
     * @param array<EnterpriseCodeSigningCertificate>|null $value Value to set for the enterpriseCodeSigningCertificates property.
    */
    public function setEnterpriseCodeSigningCertificates(?array $value): void {
        $this->getBackingStore()->set('enterpriseCodeSigningCertificates', $value);
    }

    /**
     * Sets the iosLobAppProvisioningConfigurations property value. The IOS Lob App Provisioning Configurations.
     * @param array<IosLobAppProvisioningConfiguration>|null $value Value to set for the iosLobAppProvisioningConfigurations property.
    */
    public function setIosLobAppProvisioningConfigurations(?array $value): void {
        $this->getBackingStore()->set('iosLobAppProvisioningConfigurations', $value);
    }

    /**
     * Sets the iosManagedAppProtections property value. iOS managed app policies.
     * @param array<IosManagedAppProtection>|null $value Value to set for the iosManagedAppProtections property.
    */
    public function setIosManagedAppProtections(?array $value): void {
        $this->getBackingStore()->set('iosManagedAppProtections', $value);
    }

    /**
     * Sets the isEnabledForMicrosoftStoreForBusiness property value. Whether the account is enabled for syncing applications from the Microsoft Store for Business.
     * @param bool|null $value Value to set for the isEnabledForMicrosoftStoreForBusiness property.
    */
    public function setIsEnabledForMicrosoftStoreForBusiness(?bool $value): void {
        $this->getBackingStore()->set('isEnabledForMicrosoftStoreForBusiness', $value);
    }

    /**
     * Sets the managedAppPolicies property value. Managed app policies.
     * @param array<ManagedAppPolicy>|null $value Value to set for the managedAppPolicies property.
    */
    public function setManagedAppPolicies(?array $value): void {
        $this->getBackingStore()->set('managedAppPolicies', $value);
    }

    /**
     * Sets the managedAppRegistrations property value. The managed app registrations.
     * @param array<ManagedAppRegistration>|null $value Value to set for the managedAppRegistrations property.
    */
    public function setManagedAppRegistrations(?array $value): void {
        $this->getBackingStore()->set('managedAppRegistrations', $value);
    }

    /**
     * Sets the managedAppStatuses property value. The managed app statuses.
     * @param array<ManagedAppStatus>|null $value Value to set for the managedAppStatuses property.
    */
    public function setManagedAppStatuses(?array $value): void {
        $this->getBackingStore()->set('managedAppStatuses', $value);
    }

    /**
     * Sets the managedEBookCategories property value. The mobile eBook categories.
     * @param array<ManagedEBookCategory>|null $value Value to set for the managedEBookCategories property.
    */
    public function setManagedEBookCategories(?array $value): void {
        $this->getBackingStore()->set('managedEBookCategories', $value);
    }

    /**
     * Sets the managedEBooks property value. The Managed eBook.
     * @param array<ManagedEBook>|null $value Value to set for the managedEBooks property.
    */
    public function setManagedEBooks(?array $value): void {
        $this->getBackingStore()->set('managedEBooks', $value);
    }

    /**
     * Sets the mdmWindowsInformationProtectionPolicies property value. Windows information protection for apps running on devices which are MDM enrolled.
     * @param array<MdmWindowsInformationProtectionPolicy>|null $value Value to set for the mdmWindowsInformationProtectionPolicies property.
    */
    public function setMdmWindowsInformationProtectionPolicies(?array $value): void {
        $this->getBackingStore()->set('mdmWindowsInformationProtectionPolicies', $value);
    }

    /**
     * Sets the microsoftStoreForBusinessLanguage property value. The locale information used to sync applications from the Microsoft Store for Business. Cultures that are specific to a country/region. The names of these cultures follow RFC 4646 (Windows Vista and later). The format is -<country/regioncode2>, where  is a lowercase two-letter code derived from ISO 639-1 and <country/regioncode2> is an uppercase two-letter code derived from ISO 3166. For example, en-US for English (United States) is a specific culture.
     * @param string|null $value Value to set for the microsoftStoreForBusinessLanguage property.
    */
    public function setMicrosoftStoreForBusinessLanguage(?string $value): void {
        $this->getBackingStore()->set('microsoftStoreForBusinessLanguage', $value);
    }

    /**
     * Sets the microsoftStoreForBusinessLastCompletedApplicationSyncTime property value. The last time an application sync from the Microsoft Store for Business was completed.
     * @param DateTime|null $value Value to set for the microsoftStoreForBusinessLastCompletedApplicationSyncTime property.
    */
    public function setMicrosoftStoreForBusinessLastCompletedApplicationSyncTime(?DateTime $value): void {
        $this->getBackingStore()->set('microsoftStoreForBusinessLastCompletedApplicationSyncTime', $value);
    }

    /**
     * Sets the microsoftStoreForBusinessLastSuccessfulSyncDateTime property value. The last time the apps from the Microsoft Store for Business were synced successfully for the account.
     * @param DateTime|null $value Value to set for the microsoftStoreForBusinessLastSuccessfulSyncDateTime property.
    */
    public function setMicrosoftStoreForBusinessLastSuccessfulSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('microsoftStoreForBusinessLastSuccessfulSyncDateTime', $value);
    }

    /**
     * Sets the microsoftStoreForBusinessPortalSelection property value. Portal to which admin syncs available Microsoft Store for Business apps. This is available in the Intune Admin Console.
     * @param MicrosoftStoreForBusinessPortalSelectionOptions|null $value Value to set for the microsoftStoreForBusinessPortalSelection property.
    */
    public function setMicrosoftStoreForBusinessPortalSelection(?MicrosoftStoreForBusinessPortalSelectionOptions $value): void {
        $this->getBackingStore()->set('microsoftStoreForBusinessPortalSelection', $value);
    }

    /**
     * Sets the mobileAppCategories property value. The mobile app categories.
     * @param array<MobileAppCategory>|null $value Value to set for the mobileAppCategories property.
    */
    public function setMobileAppCategories(?array $value): void {
        $this->getBackingStore()->set('mobileAppCategories', $value);
    }

    /**
     * Sets the mobileAppConfigurations property value. The Managed Device Mobile Application Configurations.
     * @param array<ManagedDeviceMobileAppConfiguration>|null $value Value to set for the mobileAppConfigurations property.
    */
    public function setMobileAppConfigurations(?array $value): void {
        $this->getBackingStore()->set('mobileAppConfigurations', $value);
    }

    /**
     * Sets the mobileApps property value. The mobile apps.
     * @param array<MobileApp>|null $value Value to set for the mobileApps property.
    */
    public function setMobileApps(?array $value): void {
        $this->getBackingStore()->set('mobileApps', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the policySets property value. The PolicySet of Policies and Applications
     * @param array<PolicySet>|null $value Value to set for the policySets property.
    */
    public function setPolicySets(?array $value): void {
        $this->getBackingStore()->set('policySets', $value);
    }

    /**
     * Sets the symantecCodeSigningCertificate property value. The WinPhone Symantec Code Signing Certificate.
     * @param SymantecCodeSigningCertificate|null $value Value to set for the symantecCodeSigningCertificate property.
    */
    public function setSymantecCodeSigningCertificate(?SymantecCodeSigningCertificate $value): void {
        $this->getBackingStore()->set('symantecCodeSigningCertificate', $value);
    }

    /**
     * Sets the targetedManagedAppConfigurations property value. Targeted managed app configurations.
     * @param array<TargetedManagedAppConfiguration>|null $value Value to set for the targetedManagedAppConfigurations property.
    */
    public function setTargetedManagedAppConfigurations(?array $value): void {
        $this->getBackingStore()->set('targetedManagedAppConfigurations', $value);
    }

    /**
     * Sets the vppTokens property value. List of Vpp tokens for this organization.
     * @param array<VppToken>|null $value Value to set for the vppTokens property.
    */
    public function setVppTokens(?array $value): void {
        $this->getBackingStore()->set('vppTokens', $value);
    }

    /**
     * Sets the wdacSupplementalPolicies property value. The collection of Windows Defender Application Control Supplemental Policies.
     * @param array<WindowsDefenderApplicationControlSupplementalPolicy>|null $value Value to set for the wdacSupplementalPolicies property.
    */
    public function setWdacSupplementalPolicies(?array $value): void {
        $this->getBackingStore()->set('wdacSupplementalPolicies', $value);
    }

    /**
     * Sets the windowsInformationProtectionDeviceRegistrations property value. Windows information protection device registrations that are not MDM enrolled.
     * @param array<WindowsInformationProtectionDeviceRegistration>|null $value Value to set for the windowsInformationProtectionDeviceRegistrations property.
    */
    public function setWindowsInformationProtectionDeviceRegistrations(?array $value): void {
        $this->getBackingStore()->set('windowsInformationProtectionDeviceRegistrations', $value);
    }

    /**
     * Sets the windowsInformationProtectionPolicies property value. Windows information protection for apps running on devices which are not MDM enrolled.
     * @param array<WindowsInformationProtectionPolicy>|null $value Value to set for the windowsInformationProtectionPolicies property.
    */
    public function setWindowsInformationProtectionPolicies(?array $value): void {
        $this->getBackingStore()->set('windowsInformationProtectionPolicies', $value);
    }

    /**
     * Sets the windowsInformationProtectionWipeActions property value. Windows information protection wipe actions.
     * @param array<WindowsInformationProtectionWipeAction>|null $value Value to set for the windowsInformationProtectionWipeActions property.
    */
    public function setWindowsInformationProtectionWipeActions(?array $value): void {
        $this->getBackingStore()->set('windowsInformationProtectionWipeActions', $value);
    }

    /**
     * Sets the windowsManagedAppProtections property value. Windows managed app policies.
     * @param array<WindowsManagedAppProtection>|null $value Value to set for the windowsManagedAppProtections property.
    */
    public function setWindowsManagedAppProtections(?array $value): void {
        $this->getBackingStore()->set('windowsManagedAppProtections', $value);
    }

    /**
     * Sets the windowsManagementApp property value. Windows management app.
     * @param WindowsManagementApp|null $value Value to set for the windowsManagementApp property.
    */
    public function setWindowsManagementApp(?WindowsManagementApp $value): void {
        $this->getBackingStore()->set('windowsManagementApp', $value);
    }

}
