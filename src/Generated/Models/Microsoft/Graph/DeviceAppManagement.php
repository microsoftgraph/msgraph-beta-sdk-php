<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceAppManagement extends Entity 
{
    /** @var array<AndroidManagedAppProtection>|null $androidManagedAppProtections Android managed app policies. */
    private ?array $androidManagedAppProtections = null;
    
    /** @var array<DefaultManagedAppProtection>|null $defaultManagedAppProtections Default managed app policies. */
    private ?array $defaultManagedAppProtections = null;
    
    /** @var array<DeviceAppManagementTask>|null $deviceAppManagementTasks Device app management tasks. */
    private ?array $deviceAppManagementTasks = null;
    
    /** @var array<EnterpriseCodeSigningCertificate>|null $enterpriseCodeSigningCertificates The Windows Enterprise Code Signing Certificate. */
    private ?array $enterpriseCodeSigningCertificates = null;
    
    /** @var array<IosLobAppProvisioningConfiguration>|null $iosLobAppProvisioningConfigurations The IOS Lob App Provisioning Configurations. */
    private ?array $iosLobAppProvisioningConfigurations = null;
    
    /** @var array<IosManagedAppProtection>|null $iosManagedAppProtections iOS managed app policies. */
    private ?array $iosManagedAppProtections = null;
    
    /** @var bool|null $isEnabledForMicrosoftStoreForBusiness Whether the account is enabled for syncing applications from the Microsoft Store for Business. */
    private ?bool $isEnabledForMicrosoftStoreForBusiness = null;
    
    /** @var array<ManagedAppPolicy>|null $managedAppPolicies Managed app policies. */
    private ?array $managedAppPolicies = null;
    
    /** @var array<ManagedAppRegistration>|null $managedAppRegistrations The managed app registrations. */
    private ?array $managedAppRegistrations = null;
    
    /** @var array<ManagedAppStatus>|null $managedAppStatuses The managed app statuses. */
    private ?array $managedAppStatuses = null;
    
    /** @var array<ManagedEBookCategory>|null $managedEBookCategories The mobile eBook categories. */
    private ?array $managedEBookCategories = null;
    
    /** @var array<ManagedEBook>|null $managedEBooks The Managed eBook. */
    private ?array $managedEBooks = null;
    
    /** @var array<MdmWindowsInformationProtectionPolicy>|null $mdmWindowsInformationProtectionPolicies Windows information protection for apps running on devices which are MDM enrolled. */
    private ?array $mdmWindowsInformationProtectionPolicies = null;
    
    /** @var string|null $microsoftStoreForBusinessLanguage The locale information used to sync applications from the Microsoft Store for Business. Cultures that are specific to a country/region. The names of these cultures follow RFC 4646 (Windows Vista and later). The format is -<country/regioncode2>, where  is a lowercase two-letter code derived from ISO 639-1 and <country/regioncode2> is an uppercase two-letter code derived from ISO 3166. For example, en-US for English (United States) is a specific culture. */
    private ?string $microsoftStoreForBusinessLanguage = null;
    
    /** @var DateTime|null $microsoftStoreForBusinessLastCompletedApplicationSyncTime The last time an application sync from the Microsoft Store for Business was completed. */
    private ?DateTime $microsoftStoreForBusinessLastCompletedApplicationSyncTime = null;
    
    /** @var DateTime|null $microsoftStoreForBusinessLastSuccessfulSyncDateTime The last time the apps from the Microsoft Store for Business were synced successfully for the account. */
    private ?DateTime $microsoftStoreForBusinessLastSuccessfulSyncDateTime = null;
    
    /** @var MicrosoftStoreForBusinessPortalSelectionOptions|null $microsoftStoreForBusinessPortalSelection The end user portal information is used to sync applications from the Microsoft Store for Business to Intune Company Portal. There are three options to pick from ['Company portal only', 'Company portal and private store', 'Private store only']. Possible values are: none, companyPortal, privateStore. */
    private ?MicrosoftStoreForBusinessPortalSelectionOptions $microsoftStoreForBusinessPortalSelection = null;
    
    /** @var array<MobileAppCategory>|null $mobileAppCategories The mobile app categories. */
    private ?array $mobileAppCategories = null;
    
    /** @var array<ManagedDeviceMobileAppConfiguration>|null $mobileAppConfigurations The Managed Device Mobile Application Configurations. */
    private ?array $mobileAppConfigurations = null;
    
    /** @var array<MobileApp>|null $mobileApps The mobile apps. */
    private ?array $mobileApps = null;
    
    /** @var array<PolicySet>|null $policySets The PolicySet of Policies and Applications */
    private ?array $policySets = null;
    
    /** @var array<SideLoadingKey>|null $sideLoadingKeys Side Loading Keys that are required for the Windows 8 and 8.1 Apps installation. */
    private ?array $sideLoadingKeys = null;
    
    /** @var SymantecCodeSigningCertificate|null $symantecCodeSigningCertificate The WinPhone Symantec Code Signing Certificate. */
    private ?SymantecCodeSigningCertificate $symantecCodeSigningCertificate = null;
    
    /** @var array<TargetedManagedAppConfiguration>|null $targetedManagedAppConfigurations Targeted managed app configurations. */
    private ?array $targetedManagedAppConfigurations = null;
    
    /** @var array<VppToken>|null $vppTokens List of Vpp tokens for this organization. */
    private ?array $vppTokens = null;
    
    /** @var array<WindowsDefenderApplicationControlSupplementalPolicy>|null $wdacSupplementalPolicies The collection of Windows Defender Application Control Supplemental Policies. */
    private ?array $wdacSupplementalPolicies = null;
    
    /** @var array<WindowsInformationProtectionDeviceRegistration>|null $windowsInformationProtectionDeviceRegistrations Windows information protection device registrations that are not MDM enrolled. */
    private ?array $windowsInformationProtectionDeviceRegistrations = null;
    
    /** @var array<WindowsInformationProtectionPolicy>|null $windowsInformationProtectionPolicies Windows information protection for apps running on devices which are not MDM enrolled. */
    private ?array $windowsInformationProtectionPolicies = null;
    
    /** @var array<WindowsInformationProtectionWipeAction>|null $windowsInformationProtectionWipeActions Windows information protection wipe actions. */
    private ?array $windowsInformationProtectionWipeActions = null;
    
    /** @var WindowsManagementApp|null $windowsManagementApp Windows management app. */
    private ?WindowsManagementApp $windowsManagementApp = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceAppManagement {
        return new DeviceAppManagement();
    }

    /**
     * Gets the androidManagedAppProtections property value. Android managed app policies.
     * @return array<AndroidManagedAppProtection>|null
    */
    public function getAndroidManagedAppProtections(): ?array {
        return $this->androidManagedAppProtections;
    }

    /**
     * Gets the defaultManagedAppProtections property value. Default managed app policies.
     * @return array<DefaultManagedAppProtection>|null
    */
    public function getDefaultManagedAppProtections(): ?array {
        return $this->defaultManagedAppProtections;
    }

    /**
     * Gets the deviceAppManagementTasks property value. Device app management tasks.
     * @return array<DeviceAppManagementTask>|null
    */
    public function getDeviceAppManagementTasks(): ?array {
        return $this->deviceAppManagementTasks;
    }

    /**
     * Gets the enterpriseCodeSigningCertificates property value. The Windows Enterprise Code Signing Certificate.
     * @return array<EnterpriseCodeSigningCertificate>|null
    */
    public function getEnterpriseCodeSigningCertificates(): ?array {
        return $this->enterpriseCodeSigningCertificates;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'androidManagedAppProtections' => function (self $o, ParseNode $n) { $o->setAndroidManagedAppProtections($n->getCollectionOfObjectValues(AndroidManagedAppProtection::class)); },
            'defaultManagedAppProtections' => function (self $o, ParseNode $n) { $o->setDefaultManagedAppProtections($n->getCollectionOfObjectValues(DefaultManagedAppProtection::class)); },
            'deviceAppManagementTasks' => function (self $o, ParseNode $n) { $o->setDeviceAppManagementTasks($n->getCollectionOfObjectValues(DeviceAppManagementTask::class)); },
            'enterpriseCodeSigningCertificates' => function (self $o, ParseNode $n) { $o->setEnterpriseCodeSigningCertificates($n->getCollectionOfObjectValues(EnterpriseCodeSigningCertificate::class)); },
            'iosLobAppProvisioningConfigurations' => function (self $o, ParseNode $n) { $o->setIosLobAppProvisioningConfigurations($n->getCollectionOfObjectValues(IosLobAppProvisioningConfiguration::class)); },
            'iosManagedAppProtections' => function (self $o, ParseNode $n) { $o->setIosManagedAppProtections($n->getCollectionOfObjectValues(IosManagedAppProtection::class)); },
            'isEnabledForMicrosoftStoreForBusiness' => function (self $o, ParseNode $n) { $o->setIsEnabledForMicrosoftStoreForBusiness($n->getBooleanValue()); },
            'managedAppPolicies' => function (self $o, ParseNode $n) { $o->setManagedAppPolicies($n->getCollectionOfObjectValues(ManagedAppPolicy::class)); },
            'managedAppRegistrations' => function (self $o, ParseNode $n) { $o->setManagedAppRegistrations($n->getCollectionOfObjectValues(ManagedAppRegistration::class)); },
            'managedAppStatuses' => function (self $o, ParseNode $n) { $o->setManagedAppStatuses($n->getCollectionOfObjectValues(ManagedAppStatus::class)); },
            'managedEBookCategories' => function (self $o, ParseNode $n) { $o->setManagedEBookCategories($n->getCollectionOfObjectValues(ManagedEBookCategory::class)); },
            'managedEBooks' => function (self $o, ParseNode $n) { $o->setManagedEBooks($n->getCollectionOfObjectValues(ManagedEBook::class)); },
            'mdmWindowsInformationProtectionPolicies' => function (self $o, ParseNode $n) { $o->setMdmWindowsInformationProtectionPolicies($n->getCollectionOfObjectValues(MdmWindowsInformationProtectionPolicy::class)); },
            'microsoftStoreForBusinessLanguage' => function (self $o, ParseNode $n) { $o->setMicrosoftStoreForBusinessLanguage($n->getStringValue()); },
            'microsoftStoreForBusinessLastCompletedApplicationSyncTime' => function (self $o, ParseNode $n) { $o->setMicrosoftStoreForBusinessLastCompletedApplicationSyncTime($n->getDateTimeValue()); },
            'microsoftStoreForBusinessLastSuccessfulSyncDateTime' => function (self $o, ParseNode $n) { $o->setMicrosoftStoreForBusinessLastSuccessfulSyncDateTime($n->getDateTimeValue()); },
            'microsoftStoreForBusinessPortalSelection' => function (self $o, ParseNode $n) { $o->setMicrosoftStoreForBusinessPortalSelection($n->getEnumValue(MicrosoftStoreForBusinessPortalSelectionOptions::class)); },
            'mobileAppCategories' => function (self $o, ParseNode $n) { $o->setMobileAppCategories($n->getCollectionOfObjectValues(MobileAppCategory::class)); },
            'mobileAppConfigurations' => function (self $o, ParseNode $n) { $o->setMobileAppConfigurations($n->getCollectionOfObjectValues(ManagedDeviceMobileAppConfiguration::class)); },
            'mobileApps' => function (self $o, ParseNode $n) { $o->setMobileApps($n->getCollectionOfObjectValues(MobileApp::class)); },
            'policySets' => function (self $o, ParseNode $n) { $o->setPolicySets($n->getCollectionOfObjectValues(PolicySet::class)); },
            'sideLoadingKeys' => function (self $o, ParseNode $n) { $o->setSideLoadingKeys($n->getCollectionOfObjectValues(SideLoadingKey::class)); },
            'symantecCodeSigningCertificate' => function (self $o, ParseNode $n) { $o->setSymantecCodeSigningCertificate($n->getObjectValue(SymantecCodeSigningCertificate::class)); },
            'targetedManagedAppConfigurations' => function (self $o, ParseNode $n) { $o->setTargetedManagedAppConfigurations($n->getCollectionOfObjectValues(TargetedManagedAppConfiguration::class)); },
            'vppTokens' => function (self $o, ParseNode $n) { $o->setVppTokens($n->getCollectionOfObjectValues(VppToken::class)); },
            'wdacSupplementalPolicies' => function (self $o, ParseNode $n) { $o->setWdacSupplementalPolicies($n->getCollectionOfObjectValues(WindowsDefenderApplicationControlSupplementalPolicy::class)); },
            'windowsInformationProtectionDeviceRegistrations' => function (self $o, ParseNode $n) { $o->setWindowsInformationProtectionDeviceRegistrations($n->getCollectionOfObjectValues(WindowsInformationProtectionDeviceRegistration::class)); },
            'windowsInformationProtectionPolicies' => function (self $o, ParseNode $n) { $o->setWindowsInformationProtectionPolicies($n->getCollectionOfObjectValues(WindowsInformationProtectionPolicy::class)); },
            'windowsInformationProtectionWipeActions' => function (self $o, ParseNode $n) { $o->setWindowsInformationProtectionWipeActions($n->getCollectionOfObjectValues(WindowsInformationProtectionWipeAction::class)); },
            'windowsManagementApp' => function (self $o, ParseNode $n) { $o->setWindowsManagementApp($n->getObjectValue(WindowsManagementApp::class)); },
        ]);
    }

    /**
     * Gets the iosLobAppProvisioningConfigurations property value. The IOS Lob App Provisioning Configurations.
     * @return array<IosLobAppProvisioningConfiguration>|null
    */
    public function getIosLobAppProvisioningConfigurations(): ?array {
        return $this->iosLobAppProvisioningConfigurations;
    }

    /**
     * Gets the iosManagedAppProtections property value. iOS managed app policies.
     * @return array<IosManagedAppProtection>|null
    */
    public function getIosManagedAppProtections(): ?array {
        return $this->iosManagedAppProtections;
    }

    /**
     * Gets the isEnabledForMicrosoftStoreForBusiness property value. Whether the account is enabled for syncing applications from the Microsoft Store for Business.
     * @return bool|null
    */
    public function getIsEnabledForMicrosoftStoreForBusiness(): ?bool {
        return $this->isEnabledForMicrosoftStoreForBusiness;
    }

    /**
     * Gets the managedAppPolicies property value. Managed app policies.
     * @return array<ManagedAppPolicy>|null
    */
    public function getManagedAppPolicies(): ?array {
        return $this->managedAppPolicies;
    }

    /**
     * Gets the managedAppRegistrations property value. The managed app registrations.
     * @return array<ManagedAppRegistration>|null
    */
    public function getManagedAppRegistrations(): ?array {
        return $this->managedAppRegistrations;
    }

    /**
     * Gets the managedAppStatuses property value. The managed app statuses.
     * @return array<ManagedAppStatus>|null
    */
    public function getManagedAppStatuses(): ?array {
        return $this->managedAppStatuses;
    }

    /**
     * Gets the managedEBookCategories property value. The mobile eBook categories.
     * @return array<ManagedEBookCategory>|null
    */
    public function getManagedEBookCategories(): ?array {
        return $this->managedEBookCategories;
    }

    /**
     * Gets the managedEBooks property value. The Managed eBook.
     * @return array<ManagedEBook>|null
    */
    public function getManagedEBooks(): ?array {
        return $this->managedEBooks;
    }

    /**
     * Gets the mdmWindowsInformationProtectionPolicies property value. Windows information protection for apps running on devices which are MDM enrolled.
     * @return array<MdmWindowsInformationProtectionPolicy>|null
    */
    public function getMdmWindowsInformationProtectionPolicies(): ?array {
        return $this->mdmWindowsInformationProtectionPolicies;
    }

    /**
     * Gets the microsoftStoreForBusinessLanguage property value. The locale information used to sync applications from the Microsoft Store for Business. Cultures that are specific to a country/region. The names of these cultures follow RFC 4646 (Windows Vista and later). The format is -<country/regioncode2>, where  is a lowercase two-letter code derived from ISO 639-1 and <country/regioncode2> is an uppercase two-letter code derived from ISO 3166. For example, en-US for English (United States) is a specific culture.
     * @return string|null
    */
    public function getMicrosoftStoreForBusinessLanguage(): ?string {
        return $this->microsoftStoreForBusinessLanguage;
    }

    /**
     * Gets the microsoftStoreForBusinessLastCompletedApplicationSyncTime property value. The last time an application sync from the Microsoft Store for Business was completed.
     * @return DateTime|null
    */
    public function getMicrosoftStoreForBusinessLastCompletedApplicationSyncTime(): ?DateTime {
        return $this->microsoftStoreForBusinessLastCompletedApplicationSyncTime;
    }

    /**
     * Gets the microsoftStoreForBusinessLastSuccessfulSyncDateTime property value. The last time the apps from the Microsoft Store for Business were synced successfully for the account.
     * @return DateTime|null
    */
    public function getMicrosoftStoreForBusinessLastSuccessfulSyncDateTime(): ?DateTime {
        return $this->microsoftStoreForBusinessLastSuccessfulSyncDateTime;
    }

    /**
     * Gets the microsoftStoreForBusinessPortalSelection property value. The end user portal information is used to sync applications from the Microsoft Store for Business to Intune Company Portal. There are three options to pick from ['Company portal only', 'Company portal and private store', 'Private store only']. Possible values are: none, companyPortal, privateStore.
     * @return MicrosoftStoreForBusinessPortalSelectionOptions|null
    */
    public function getMicrosoftStoreForBusinessPortalSelection(): ?MicrosoftStoreForBusinessPortalSelectionOptions {
        return $this->microsoftStoreForBusinessPortalSelection;
    }

    /**
     * Gets the mobileAppCategories property value. The mobile app categories.
     * @return array<MobileAppCategory>|null
    */
    public function getMobileAppCategories(): ?array {
        return $this->mobileAppCategories;
    }

    /**
     * Gets the mobileAppConfigurations property value. The Managed Device Mobile Application Configurations.
     * @return array<ManagedDeviceMobileAppConfiguration>|null
    */
    public function getMobileAppConfigurations(): ?array {
        return $this->mobileAppConfigurations;
    }

    /**
     * Gets the mobileApps property value. The mobile apps.
     * @return array<MobileApp>|null
    */
    public function getMobileApps(): ?array {
        return $this->mobileApps;
    }

    /**
     * Gets the policySets property value. The PolicySet of Policies and Applications
     * @return array<PolicySet>|null
    */
    public function getPolicySets(): ?array {
        return $this->policySets;
    }

    /**
     * Gets the sideLoadingKeys property value. Side Loading Keys that are required for the Windows 8 and 8.1 Apps installation.
     * @return array<SideLoadingKey>|null
    */
    public function getSideLoadingKeys(): ?array {
        return $this->sideLoadingKeys;
    }

    /**
     * Gets the symantecCodeSigningCertificate property value. The WinPhone Symantec Code Signing Certificate.
     * @return SymantecCodeSigningCertificate|null
    */
    public function getSymantecCodeSigningCertificate(): ?SymantecCodeSigningCertificate {
        return $this->symantecCodeSigningCertificate;
    }

    /**
     * Gets the targetedManagedAppConfigurations property value. Targeted managed app configurations.
     * @return array<TargetedManagedAppConfiguration>|null
    */
    public function getTargetedManagedAppConfigurations(): ?array {
        return $this->targetedManagedAppConfigurations;
    }

    /**
     * Gets the vppTokens property value. List of Vpp tokens for this organization.
     * @return array<VppToken>|null
    */
    public function getVppTokens(): ?array {
        return $this->vppTokens;
    }

    /**
     * Gets the wdacSupplementalPolicies property value. The collection of Windows Defender Application Control Supplemental Policies.
     * @return array<WindowsDefenderApplicationControlSupplementalPolicy>|null
    */
    public function getWdacSupplementalPolicies(): ?array {
        return $this->wdacSupplementalPolicies;
    }

    /**
     * Gets the windowsInformationProtectionDeviceRegistrations property value. Windows information protection device registrations that are not MDM enrolled.
     * @return array<WindowsInformationProtectionDeviceRegistration>|null
    */
    public function getWindowsInformationProtectionDeviceRegistrations(): ?array {
        return $this->windowsInformationProtectionDeviceRegistrations;
    }

    /**
     * Gets the windowsInformationProtectionPolicies property value. Windows information protection for apps running on devices which are not MDM enrolled.
     * @return array<WindowsInformationProtectionPolicy>|null
    */
    public function getWindowsInformationProtectionPolicies(): ?array {
        return $this->windowsInformationProtectionPolicies;
    }

    /**
     * Gets the windowsInformationProtectionWipeActions property value. Windows information protection wipe actions.
     * @return array<WindowsInformationProtectionWipeAction>|null
    */
    public function getWindowsInformationProtectionWipeActions(): ?array {
        return $this->windowsInformationProtectionWipeActions;
    }

    /**
     * Gets the windowsManagementApp property value. Windows management app.
     * @return WindowsManagementApp|null
    */
    public function getWindowsManagementApp(): ?WindowsManagementApp {
        return $this->windowsManagementApp;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('androidManagedAppProtections', $this->androidManagedAppProtections);
        $writer->writeCollectionOfObjectValues('defaultManagedAppProtections', $this->defaultManagedAppProtections);
        $writer->writeCollectionOfObjectValues('deviceAppManagementTasks', $this->deviceAppManagementTasks);
        $writer->writeCollectionOfObjectValues('enterpriseCodeSigningCertificates', $this->enterpriseCodeSigningCertificates);
        $writer->writeCollectionOfObjectValues('iosLobAppProvisioningConfigurations', $this->iosLobAppProvisioningConfigurations);
        $writer->writeCollectionOfObjectValues('iosManagedAppProtections', $this->iosManagedAppProtections);
        $writer->writeBooleanValue('isEnabledForMicrosoftStoreForBusiness', $this->isEnabledForMicrosoftStoreForBusiness);
        $writer->writeCollectionOfObjectValues('managedAppPolicies', $this->managedAppPolicies);
        $writer->writeCollectionOfObjectValues('managedAppRegistrations', $this->managedAppRegistrations);
        $writer->writeCollectionOfObjectValues('managedAppStatuses', $this->managedAppStatuses);
        $writer->writeCollectionOfObjectValues('managedEBookCategories', $this->managedEBookCategories);
        $writer->writeCollectionOfObjectValues('managedEBooks', $this->managedEBooks);
        $writer->writeCollectionOfObjectValues('mdmWindowsInformationProtectionPolicies', $this->mdmWindowsInformationProtectionPolicies);
        $writer->writeStringValue('microsoftStoreForBusinessLanguage', $this->microsoftStoreForBusinessLanguage);
        $writer->writeDateTimeValue('microsoftStoreForBusinessLastCompletedApplicationSyncTime', $this->microsoftStoreForBusinessLastCompletedApplicationSyncTime);
        $writer->writeDateTimeValue('microsoftStoreForBusinessLastSuccessfulSyncDateTime', $this->microsoftStoreForBusinessLastSuccessfulSyncDateTime);
        $writer->writeEnumValue('microsoftStoreForBusinessPortalSelection', $this->microsoftStoreForBusinessPortalSelection);
        $writer->writeCollectionOfObjectValues('mobileAppCategories', $this->mobileAppCategories);
        $writer->writeCollectionOfObjectValues('mobileAppConfigurations', $this->mobileAppConfigurations);
        $writer->writeCollectionOfObjectValues('mobileApps', $this->mobileApps);
        $writer->writeCollectionOfObjectValues('policySets', $this->policySets);
        $writer->writeCollectionOfObjectValues('sideLoadingKeys', $this->sideLoadingKeys);
        $writer->writeObjectValue('symantecCodeSigningCertificate', $this->symantecCodeSigningCertificate);
        $writer->writeCollectionOfObjectValues('targetedManagedAppConfigurations', $this->targetedManagedAppConfigurations);
        $writer->writeCollectionOfObjectValues('vppTokens', $this->vppTokens);
        $writer->writeCollectionOfObjectValues('wdacSupplementalPolicies', $this->wdacSupplementalPolicies);
        $writer->writeCollectionOfObjectValues('windowsInformationProtectionDeviceRegistrations', $this->windowsInformationProtectionDeviceRegistrations);
        $writer->writeCollectionOfObjectValues('windowsInformationProtectionPolicies', $this->windowsInformationProtectionPolicies);
        $writer->writeCollectionOfObjectValues('windowsInformationProtectionWipeActions', $this->windowsInformationProtectionWipeActions);
        $writer->writeObjectValue('windowsManagementApp', $this->windowsManagementApp);
    }

    /**
     * Sets the androidManagedAppProtections property value. Android managed app policies.
     *  @param array<AndroidManagedAppProtection>|null $value Value to set for the androidManagedAppProtections property.
    */
    public function setAndroidManagedAppProtections(?array $value ): void {
        $this->androidManagedAppProtections = $value;
    }

    /**
     * Sets the defaultManagedAppProtections property value. Default managed app policies.
     *  @param array<DefaultManagedAppProtection>|null $value Value to set for the defaultManagedAppProtections property.
    */
    public function setDefaultManagedAppProtections(?array $value ): void {
        $this->defaultManagedAppProtections = $value;
    }

    /**
     * Sets the deviceAppManagementTasks property value. Device app management tasks.
     *  @param array<DeviceAppManagementTask>|null $value Value to set for the deviceAppManagementTasks property.
    */
    public function setDeviceAppManagementTasks(?array $value ): void {
        $this->deviceAppManagementTasks = $value;
    }

    /**
     * Sets the enterpriseCodeSigningCertificates property value. The Windows Enterprise Code Signing Certificate.
     *  @param array<EnterpriseCodeSigningCertificate>|null $value Value to set for the enterpriseCodeSigningCertificates property.
    */
    public function setEnterpriseCodeSigningCertificates(?array $value ): void {
        $this->enterpriseCodeSigningCertificates = $value;
    }

    /**
     * Sets the iosLobAppProvisioningConfigurations property value. The IOS Lob App Provisioning Configurations.
     *  @param array<IosLobAppProvisioningConfiguration>|null $value Value to set for the iosLobAppProvisioningConfigurations property.
    */
    public function setIosLobAppProvisioningConfigurations(?array $value ): void {
        $this->iosLobAppProvisioningConfigurations = $value;
    }

    /**
     * Sets the iosManagedAppProtections property value. iOS managed app policies.
     *  @param array<IosManagedAppProtection>|null $value Value to set for the iosManagedAppProtections property.
    */
    public function setIosManagedAppProtections(?array $value ): void {
        $this->iosManagedAppProtections = $value;
    }

    /**
     * Sets the isEnabledForMicrosoftStoreForBusiness property value. Whether the account is enabled for syncing applications from the Microsoft Store for Business.
     *  @param bool|null $value Value to set for the isEnabledForMicrosoftStoreForBusiness property.
    */
    public function setIsEnabledForMicrosoftStoreForBusiness(?bool $value ): void {
        $this->isEnabledForMicrosoftStoreForBusiness = $value;
    }

    /**
     * Sets the managedAppPolicies property value. Managed app policies.
     *  @param array<ManagedAppPolicy>|null $value Value to set for the managedAppPolicies property.
    */
    public function setManagedAppPolicies(?array $value ): void {
        $this->managedAppPolicies = $value;
    }

    /**
     * Sets the managedAppRegistrations property value. The managed app registrations.
     *  @param array<ManagedAppRegistration>|null $value Value to set for the managedAppRegistrations property.
    */
    public function setManagedAppRegistrations(?array $value ): void {
        $this->managedAppRegistrations = $value;
    }

    /**
     * Sets the managedAppStatuses property value. The managed app statuses.
     *  @param array<ManagedAppStatus>|null $value Value to set for the managedAppStatuses property.
    */
    public function setManagedAppStatuses(?array $value ): void {
        $this->managedAppStatuses = $value;
    }

    /**
     * Sets the managedEBookCategories property value. The mobile eBook categories.
     *  @param array<ManagedEBookCategory>|null $value Value to set for the managedEBookCategories property.
    */
    public function setManagedEBookCategories(?array $value ): void {
        $this->managedEBookCategories = $value;
    }

    /**
     * Sets the managedEBooks property value. The Managed eBook.
     *  @param array<ManagedEBook>|null $value Value to set for the managedEBooks property.
    */
    public function setManagedEBooks(?array $value ): void {
        $this->managedEBooks = $value;
    }

    /**
     * Sets the mdmWindowsInformationProtectionPolicies property value. Windows information protection for apps running on devices which are MDM enrolled.
     *  @param array<MdmWindowsInformationProtectionPolicy>|null $value Value to set for the mdmWindowsInformationProtectionPolicies property.
    */
    public function setMdmWindowsInformationProtectionPolicies(?array $value ): void {
        $this->mdmWindowsInformationProtectionPolicies = $value;
    }

    /**
     * Sets the microsoftStoreForBusinessLanguage property value. The locale information used to sync applications from the Microsoft Store for Business. Cultures that are specific to a country/region. The names of these cultures follow RFC 4646 (Windows Vista and later). The format is -<country/regioncode2>, where  is a lowercase two-letter code derived from ISO 639-1 and <country/regioncode2> is an uppercase two-letter code derived from ISO 3166. For example, en-US for English (United States) is a specific culture.
     *  @param string|null $value Value to set for the microsoftStoreForBusinessLanguage property.
    */
    public function setMicrosoftStoreForBusinessLanguage(?string $value ): void {
        $this->microsoftStoreForBusinessLanguage = $value;
    }

    /**
     * Sets the microsoftStoreForBusinessLastCompletedApplicationSyncTime property value. The last time an application sync from the Microsoft Store for Business was completed.
     *  @param DateTime|null $value Value to set for the microsoftStoreForBusinessLastCompletedApplicationSyncTime property.
    */
    public function setMicrosoftStoreForBusinessLastCompletedApplicationSyncTime(?DateTime $value ): void {
        $this->microsoftStoreForBusinessLastCompletedApplicationSyncTime = $value;
    }

    /**
     * Sets the microsoftStoreForBusinessLastSuccessfulSyncDateTime property value. The last time the apps from the Microsoft Store for Business were synced successfully for the account.
     *  @param DateTime|null $value Value to set for the microsoftStoreForBusinessLastSuccessfulSyncDateTime property.
    */
    public function setMicrosoftStoreForBusinessLastSuccessfulSyncDateTime(?DateTime $value ): void {
        $this->microsoftStoreForBusinessLastSuccessfulSyncDateTime = $value;
    }

    /**
     * Sets the microsoftStoreForBusinessPortalSelection property value. The end user portal information is used to sync applications from the Microsoft Store for Business to Intune Company Portal. There are three options to pick from ['Company portal only', 'Company portal and private store', 'Private store only']. Possible values are: none, companyPortal, privateStore.
     *  @param MicrosoftStoreForBusinessPortalSelectionOptions|null $value Value to set for the microsoftStoreForBusinessPortalSelection property.
    */
    public function setMicrosoftStoreForBusinessPortalSelection(?MicrosoftStoreForBusinessPortalSelectionOptions $value ): void {
        $this->microsoftStoreForBusinessPortalSelection = $value;
    }

    /**
     * Sets the mobileAppCategories property value. The mobile app categories.
     *  @param array<MobileAppCategory>|null $value Value to set for the mobileAppCategories property.
    */
    public function setMobileAppCategories(?array $value ): void {
        $this->mobileAppCategories = $value;
    }

    /**
     * Sets the mobileAppConfigurations property value. The Managed Device Mobile Application Configurations.
     *  @param array<ManagedDeviceMobileAppConfiguration>|null $value Value to set for the mobileAppConfigurations property.
    */
    public function setMobileAppConfigurations(?array $value ): void {
        $this->mobileAppConfigurations = $value;
    }

    /**
     * Sets the mobileApps property value. The mobile apps.
     *  @param array<MobileApp>|null $value Value to set for the mobileApps property.
    */
    public function setMobileApps(?array $value ): void {
        $this->mobileApps = $value;
    }

    /**
     * Sets the policySets property value. The PolicySet of Policies and Applications
     *  @param array<PolicySet>|null $value Value to set for the policySets property.
    */
    public function setPolicySets(?array $value ): void {
        $this->policySets = $value;
    }

    /**
     * Sets the sideLoadingKeys property value. Side Loading Keys that are required for the Windows 8 and 8.1 Apps installation.
     *  @param array<SideLoadingKey>|null $value Value to set for the sideLoadingKeys property.
    */
    public function setSideLoadingKeys(?array $value ): void {
        $this->sideLoadingKeys = $value;
    }

    /**
     * Sets the symantecCodeSigningCertificate property value. The WinPhone Symantec Code Signing Certificate.
     *  @param SymantecCodeSigningCertificate|null $value Value to set for the symantecCodeSigningCertificate property.
    */
    public function setSymantecCodeSigningCertificate(?SymantecCodeSigningCertificate $value ): void {
        $this->symantecCodeSigningCertificate = $value;
    }

    /**
     * Sets the targetedManagedAppConfigurations property value. Targeted managed app configurations.
     *  @param array<TargetedManagedAppConfiguration>|null $value Value to set for the targetedManagedAppConfigurations property.
    */
    public function setTargetedManagedAppConfigurations(?array $value ): void {
        $this->targetedManagedAppConfigurations = $value;
    }

    /**
     * Sets the vppTokens property value. List of Vpp tokens for this organization.
     *  @param array<VppToken>|null $value Value to set for the vppTokens property.
    */
    public function setVppTokens(?array $value ): void {
        $this->vppTokens = $value;
    }

    /**
     * Sets the wdacSupplementalPolicies property value. The collection of Windows Defender Application Control Supplemental Policies.
     *  @param array<WindowsDefenderApplicationControlSupplementalPolicy>|null $value Value to set for the wdacSupplementalPolicies property.
    */
    public function setWdacSupplementalPolicies(?array $value ): void {
        $this->wdacSupplementalPolicies = $value;
    }

    /**
     * Sets the windowsInformationProtectionDeviceRegistrations property value. Windows information protection device registrations that are not MDM enrolled.
     *  @param array<WindowsInformationProtectionDeviceRegistration>|null $value Value to set for the windowsInformationProtectionDeviceRegistrations property.
    */
    public function setWindowsInformationProtectionDeviceRegistrations(?array $value ): void {
        $this->windowsInformationProtectionDeviceRegistrations = $value;
    }

    /**
     * Sets the windowsInformationProtectionPolicies property value. Windows information protection for apps running on devices which are not MDM enrolled.
     *  @param array<WindowsInformationProtectionPolicy>|null $value Value to set for the windowsInformationProtectionPolicies property.
    */
    public function setWindowsInformationProtectionPolicies(?array $value ): void {
        $this->windowsInformationProtectionPolicies = $value;
    }

    /**
     * Sets the windowsInformationProtectionWipeActions property value. Windows information protection wipe actions.
     *  @param array<WindowsInformationProtectionWipeAction>|null $value Value to set for the windowsInformationProtectionWipeActions property.
    */
    public function setWindowsInformationProtectionWipeActions(?array $value ): void {
        $this->windowsInformationProtectionWipeActions = $value;
    }

    /**
     * Sets the windowsManagementApp property value. Windows management app.
     *  @param WindowsManagementApp|null $value Value to set for the windowsManagementApp property.
    */
    public function setWindowsManagementApp(?WindowsManagementApp $value ): void {
        $this->windowsManagementApp = $value;
    }

}
