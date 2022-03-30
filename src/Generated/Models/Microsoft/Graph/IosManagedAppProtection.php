<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosManagedAppProtection extends TargetedManagedAppProtection 
{
    /** @var string|null $allowedIosDeviceModels Semicolon seperated list of device models allowed, as a string, for the managed app to work. */
    private ?string $allowedIosDeviceModels = null;
    
    /** @var ManagedAppRemediationAction|null $appActionIfIosDeviceModelNotAllowed Defines a managed app behavior, either block or wipe, if the specified device model is not allowed. Possible values are: block, wipe, warn. */
    private ?ManagedAppRemediationAction $appActionIfIosDeviceModelNotAllowed = null;
    
    /** @var ManagedAppDataEncryptionType|null $appDataEncryptionType Type of encryption which should be used for data in a managed app. Possible values are: useDeviceSettings, afterDeviceRestart, whenDeviceLockedExceptOpenFiles, whenDeviceLocked. */
    private ?ManagedAppDataEncryptionType $appDataEncryptionType = null;
    
    /** @var array<ManagedMobileApp>|null $apps List of apps to which the policy is deployed. */
    private ?array $apps = null;
    
    /** @var string|null $customBrowserProtocol A custom browser protocol to open weblink on iOS. When this property is configured, ManagedBrowserToOpenLinksRequired should be true. */
    private ?string $customBrowserProtocol = null;
    
    /** @var string|null $customDialerAppProtocol Protocol of a custom dialer app to click-to-open a phone number on iOS, for example, skype:. */
    private ?string $customDialerAppProtocol = null;
    
    /** @var int|null $deployedAppCount Count of apps to which the current policy is deployed. */
    private ?int $deployedAppCount = null;
    
    /** @var ManagedAppPolicyDeploymentSummary|null $deploymentSummary Navigation property to deployment summary of the configuration. */
    private ?ManagedAppPolicyDeploymentSummary $deploymentSummary = null;
    
    /** @var bool|null $disableProtectionOfManagedOutboundOpenInData Disable protection of data transferred to other apps through IOS OpenIn option. This setting is only allowed to be True when AllowedOutboundDataTransferDestinations is set to ManagedApps. */
    private ?bool $disableProtectionOfManagedOutboundOpenInData = null;
    
    /** @var array<KeyValuePair>|null $exemptedAppProtocols Apps in this list will be exempt from the policy and will be able to receive data from managed apps. */
    private ?array $exemptedAppProtocols = null;
    
    /** @var array<string>|null $exemptedUniversalLinks A list of custom urls that are allowed to invocate an unmanaged app */
    private ?array $exemptedUniversalLinks = null;
    
    /** @var bool|null $faceIdBlocked Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True. */
    private ?bool $faceIdBlocked = null;
    
    /** @var bool|null $filterOpenInToOnlyManagedApps Defines if open-in operation is supported from the managed app to the filesharing locations selected. This setting only applies when AllowedOutboundDataTransferDestinations is set to ManagedApps and DisableProtectionOfManagedOutboundOpenInData is set to False. */
    private ?bool $filterOpenInToOnlyManagedApps = null;
    
    /** @var array<string>|null $managedUniversalLinks A list of custom urls that are allowed to invocate a managed app */
    private ?array $managedUniversalLinks = null;
    
    /** @var string|null $minimumRequiredSdkVersion Versions less than the specified version will block the managed app from accessing company data. */
    private ?string $minimumRequiredSdkVersion = null;
    
    /** @var string|null $minimumWipeSdkVersion Versions less than the specified version will block the managed app from accessing company data. */
    private ?string $minimumWipeSdkVersion = null;
    
    /** @var bool|null $protectInboundDataFromUnknownSources Protect incoming data from unknown source. This setting is only allowed to be True when AllowedInboundDataTransferSources is set to AllApps. */
    private ?bool $protectInboundDataFromUnknownSources = null;
    
    /** @var bool|null $thirdPartyKeyboardsBlocked Defines if third party keyboards are allowed while accessing a managed app */
    private ?bool $thirdPartyKeyboardsBlocked = null;
    
    /**
     * Instantiates a new iosManagedAppProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosManagedAppProtection
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): IosManagedAppProtection {
        return new IosManagedAppProtection();
    }

    /**
     * Gets the allowedIosDeviceModels property value. Semicolon seperated list of device models allowed, as a string, for the managed app to work.
     * @return string|null
    */
    public function getAllowedIosDeviceModels(): ?string {
        return $this->allowedIosDeviceModels;
    }

    /**
     * Gets the appActionIfIosDeviceModelNotAllowed property value. Defines a managed app behavior, either block or wipe, if the specified device model is not allowed. Possible values are: block, wipe, warn.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfIosDeviceModelNotAllowed(): ?ManagedAppRemediationAction {
        return $this->appActionIfIosDeviceModelNotAllowed;
    }

    /**
     * Gets the appDataEncryptionType property value. Type of encryption which should be used for data in a managed app. Possible values are: useDeviceSettings, afterDeviceRestart, whenDeviceLockedExceptOpenFiles, whenDeviceLocked.
     * @return ManagedAppDataEncryptionType|null
    */
    public function getAppDataEncryptionType(): ?ManagedAppDataEncryptionType {
        return $this->appDataEncryptionType;
    }

    /**
     * Gets the apps property value. List of apps to which the policy is deployed.
     * @return array<ManagedMobileApp>|null
    */
    public function getApps(): ?array {
        return $this->apps;
    }

    /**
     * Gets the customBrowserProtocol property value. A custom browser protocol to open weblink on iOS. When this property is configured, ManagedBrowserToOpenLinksRequired should be true.
     * @return string|null
    */
    public function getCustomBrowserProtocol(): ?string {
        return $this->customBrowserProtocol;
    }

    /**
     * Gets the customDialerAppProtocol property value. Protocol of a custom dialer app to click-to-open a phone number on iOS, for example, skype:.
     * @return string|null
    */
    public function getCustomDialerAppProtocol(): ?string {
        return $this->customDialerAppProtocol;
    }

    /**
     * Gets the deployedAppCount property value. Count of apps to which the current policy is deployed.
     * @return int|null
    */
    public function getDeployedAppCount(): ?int {
        return $this->deployedAppCount;
    }

    /**
     * Gets the deploymentSummary property value. Navigation property to deployment summary of the configuration.
     * @return ManagedAppPolicyDeploymentSummary|null
    */
    public function getDeploymentSummary(): ?ManagedAppPolicyDeploymentSummary {
        return $this->deploymentSummary;
    }

    /**
     * Gets the disableProtectionOfManagedOutboundOpenInData property value. Disable protection of data transferred to other apps through IOS OpenIn option. This setting is only allowed to be True when AllowedOutboundDataTransferDestinations is set to ManagedApps.
     * @return bool|null
    */
    public function getDisableProtectionOfManagedOutboundOpenInData(): ?bool {
        return $this->disableProtectionOfManagedOutboundOpenInData;
    }

    /**
     * Gets the exemptedAppProtocols property value. Apps in this list will be exempt from the policy and will be able to receive data from managed apps.
     * @return array<KeyValuePair>|null
    */
    public function getExemptedAppProtocols(): ?array {
        return $this->exemptedAppProtocols;
    }

    /**
     * Gets the exemptedUniversalLinks property value. A list of custom urls that are allowed to invocate an unmanaged app
     * @return array<string>|null
    */
    public function getExemptedUniversalLinks(): ?array {
        return $this->exemptedUniversalLinks;
    }

    /**
     * Gets the faceIdBlocked property value. Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True.
     * @return bool|null
    */
    public function getFaceIdBlocked(): ?bool {
        return $this->faceIdBlocked;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'allowedIosDeviceModels' => function (self $o, ParseNode $n) { $o->setAllowedIosDeviceModels($n->getStringValue()); },
            'appActionIfIosDeviceModelNotAllowed' => function (self $o, ParseNode $n) { $o->setAppActionIfIosDeviceModelNotAllowed($n->getEnumValue(ManagedAppRemediationAction::class)); },
            'appDataEncryptionType' => function (self $o, ParseNode $n) { $o->setAppDataEncryptionType($n->getEnumValue(ManagedAppDataEncryptionType::class)); },
            'apps' => function (self $o, ParseNode $n) { $o->setApps($n->getCollectionOfObjectValues(ManagedMobileApp::class)); },
            'customBrowserProtocol' => function (self $o, ParseNode $n) { $o->setCustomBrowserProtocol($n->getStringValue()); },
            'customDialerAppProtocol' => function (self $o, ParseNode $n) { $o->setCustomDialerAppProtocol($n->getStringValue()); },
            'deployedAppCount' => function (self $o, ParseNode $n) { $o->setDeployedAppCount($n->getIntegerValue()); },
            'deploymentSummary' => function (self $o, ParseNode $n) { $o->setDeploymentSummary($n->getObjectValue(ManagedAppPolicyDeploymentSummary::class)); },
            'disableProtectionOfManagedOutboundOpenInData' => function (self $o, ParseNode $n) { $o->setDisableProtectionOfManagedOutboundOpenInData($n->getBooleanValue()); },
            'exemptedAppProtocols' => function (self $o, ParseNode $n) { $o->setExemptedAppProtocols($n->getCollectionOfObjectValues(KeyValuePair::class)); },
            'exemptedUniversalLinks' => function (self $o, ParseNode $n) { $o->setExemptedUniversalLinks($n->getCollectionOfPrimitiveValues()); },
            'faceIdBlocked' => function (self $o, ParseNode $n) { $o->setFaceIdBlocked($n->getBooleanValue()); },
            'filterOpenInToOnlyManagedApps' => function (self $o, ParseNode $n) { $o->setFilterOpenInToOnlyManagedApps($n->getBooleanValue()); },
            'managedUniversalLinks' => function (self $o, ParseNode $n) { $o->setManagedUniversalLinks($n->getCollectionOfPrimitiveValues()); },
            'minimumRequiredSdkVersion' => function (self $o, ParseNode $n) { $o->setMinimumRequiredSdkVersion($n->getStringValue()); },
            'minimumWipeSdkVersion' => function (self $o, ParseNode $n) { $o->setMinimumWipeSdkVersion($n->getStringValue()); },
            'protectInboundDataFromUnknownSources' => function (self $o, ParseNode $n) { $o->setProtectInboundDataFromUnknownSources($n->getBooleanValue()); },
            'thirdPartyKeyboardsBlocked' => function (self $o, ParseNode $n) { $o->setThirdPartyKeyboardsBlocked($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the filterOpenInToOnlyManagedApps property value. Defines if open-in operation is supported from the managed app to the filesharing locations selected. This setting only applies when AllowedOutboundDataTransferDestinations is set to ManagedApps and DisableProtectionOfManagedOutboundOpenInData is set to False.
     * @return bool|null
    */
    public function getFilterOpenInToOnlyManagedApps(): ?bool {
        return $this->filterOpenInToOnlyManagedApps;
    }

    /**
     * Gets the managedUniversalLinks property value. A list of custom urls that are allowed to invocate a managed app
     * @return array<string>|null
    */
    public function getManagedUniversalLinks(): ?array {
        return $this->managedUniversalLinks;
    }

    /**
     * Gets the minimumRequiredSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     * @return string|null
    */
    public function getMinimumRequiredSdkVersion(): ?string {
        return $this->minimumRequiredSdkVersion;
    }

    /**
     * Gets the minimumWipeSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     * @return string|null
    */
    public function getMinimumWipeSdkVersion(): ?string {
        return $this->minimumWipeSdkVersion;
    }

    /**
     * Gets the protectInboundDataFromUnknownSources property value. Protect incoming data from unknown source. This setting is only allowed to be True when AllowedInboundDataTransferSources is set to AllApps.
     * @return bool|null
    */
    public function getProtectInboundDataFromUnknownSources(): ?bool {
        return $this->protectInboundDataFromUnknownSources;
    }

    /**
     * Gets the thirdPartyKeyboardsBlocked property value. Defines if third party keyboards are allowed while accessing a managed app
     * @return bool|null
    */
    public function getThirdPartyKeyboardsBlocked(): ?bool {
        return $this->thirdPartyKeyboardsBlocked;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('allowedIosDeviceModels', $this->allowedIosDeviceModels);
        $writer->writeEnumValue('appActionIfIosDeviceModelNotAllowed', $this->appActionIfIosDeviceModelNotAllowed);
        $writer->writeEnumValue('appDataEncryptionType', $this->appDataEncryptionType);
        $writer->writeCollectionOfObjectValues('apps', $this->apps);
        $writer->writeStringValue('customBrowserProtocol', $this->customBrowserProtocol);
        $writer->writeStringValue('customDialerAppProtocol', $this->customDialerAppProtocol);
        $writer->writeIntegerValue('deployedAppCount', $this->deployedAppCount);
        $writer->writeObjectValue('deploymentSummary', $this->deploymentSummary);
        $writer->writeBooleanValue('disableProtectionOfManagedOutboundOpenInData', $this->disableProtectionOfManagedOutboundOpenInData);
        $writer->writeCollectionOfObjectValues('exemptedAppProtocols', $this->exemptedAppProtocols);
        $writer->writeCollectionOfPrimitiveValues('exemptedUniversalLinks', $this->exemptedUniversalLinks);
        $writer->writeBooleanValue('faceIdBlocked', $this->faceIdBlocked);
        $writer->writeBooleanValue('filterOpenInToOnlyManagedApps', $this->filterOpenInToOnlyManagedApps);
        $writer->writeCollectionOfPrimitiveValues('managedUniversalLinks', $this->managedUniversalLinks);
        $writer->writeStringValue('minimumRequiredSdkVersion', $this->minimumRequiredSdkVersion);
        $writer->writeStringValue('minimumWipeSdkVersion', $this->minimumWipeSdkVersion);
        $writer->writeBooleanValue('protectInboundDataFromUnknownSources', $this->protectInboundDataFromUnknownSources);
        $writer->writeBooleanValue('thirdPartyKeyboardsBlocked', $this->thirdPartyKeyboardsBlocked);
    }

    /**
     * Sets the allowedIosDeviceModels property value. Semicolon seperated list of device models allowed, as a string, for the managed app to work.
     *  @param string|null $value Value to set for the allowedIosDeviceModels property.
    */
    public function setAllowedIosDeviceModels(?string $value ): void {
        $this->allowedIosDeviceModels = $value;
    }

    /**
     * Sets the appActionIfIosDeviceModelNotAllowed property value. Defines a managed app behavior, either block or wipe, if the specified device model is not allowed. Possible values are: block, wipe, warn.
     *  @param ManagedAppRemediationAction|null $value Value to set for the appActionIfIosDeviceModelNotAllowed property.
    */
    public function setAppActionIfIosDeviceModelNotAllowed(?ManagedAppRemediationAction $value ): void {
        $this->appActionIfIosDeviceModelNotAllowed = $value;
    }

    /**
     * Sets the appDataEncryptionType property value. Type of encryption which should be used for data in a managed app. Possible values are: useDeviceSettings, afterDeviceRestart, whenDeviceLockedExceptOpenFiles, whenDeviceLocked.
     *  @param ManagedAppDataEncryptionType|null $value Value to set for the appDataEncryptionType property.
    */
    public function setAppDataEncryptionType(?ManagedAppDataEncryptionType $value ): void {
        $this->appDataEncryptionType = $value;
    }

    /**
     * Sets the apps property value. List of apps to which the policy is deployed.
     *  @param array<ManagedMobileApp>|null $value Value to set for the apps property.
    */
    public function setApps(?array $value ): void {
        $this->apps = $value;
    }

    /**
     * Sets the customBrowserProtocol property value. A custom browser protocol to open weblink on iOS. When this property is configured, ManagedBrowserToOpenLinksRequired should be true.
     *  @param string|null $value Value to set for the customBrowserProtocol property.
    */
    public function setCustomBrowserProtocol(?string $value ): void {
        $this->customBrowserProtocol = $value;
    }

    /**
     * Sets the customDialerAppProtocol property value. Protocol of a custom dialer app to click-to-open a phone number on iOS, for example, skype:.
     *  @param string|null $value Value to set for the customDialerAppProtocol property.
    */
    public function setCustomDialerAppProtocol(?string $value ): void {
        $this->customDialerAppProtocol = $value;
    }

    /**
     * Sets the deployedAppCount property value. Count of apps to which the current policy is deployed.
     *  @param int|null $value Value to set for the deployedAppCount property.
    */
    public function setDeployedAppCount(?int $value ): void {
        $this->deployedAppCount = $value;
    }

    /**
     * Sets the deploymentSummary property value. Navigation property to deployment summary of the configuration.
     *  @param ManagedAppPolicyDeploymentSummary|null $value Value to set for the deploymentSummary property.
    */
    public function setDeploymentSummary(?ManagedAppPolicyDeploymentSummary $value ): void {
        $this->deploymentSummary = $value;
    }

    /**
     * Sets the disableProtectionOfManagedOutboundOpenInData property value. Disable protection of data transferred to other apps through IOS OpenIn option. This setting is only allowed to be True when AllowedOutboundDataTransferDestinations is set to ManagedApps.
     *  @param bool|null $value Value to set for the disableProtectionOfManagedOutboundOpenInData property.
    */
    public function setDisableProtectionOfManagedOutboundOpenInData(?bool $value ): void {
        $this->disableProtectionOfManagedOutboundOpenInData = $value;
    }

    /**
     * Sets the exemptedAppProtocols property value. Apps in this list will be exempt from the policy and will be able to receive data from managed apps.
     *  @param array<KeyValuePair>|null $value Value to set for the exemptedAppProtocols property.
    */
    public function setExemptedAppProtocols(?array $value ): void {
        $this->exemptedAppProtocols = $value;
    }

    /**
     * Sets the exemptedUniversalLinks property value. A list of custom urls that are allowed to invocate an unmanaged app
     *  @param array<string>|null $value Value to set for the exemptedUniversalLinks property.
    */
    public function setExemptedUniversalLinks(?array $value ): void {
        $this->exemptedUniversalLinks = $value;
    }

    /**
     * Sets the faceIdBlocked property value. Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True.
     *  @param bool|null $value Value to set for the faceIdBlocked property.
    */
    public function setFaceIdBlocked(?bool $value ): void {
        $this->faceIdBlocked = $value;
    }

    /**
     * Sets the filterOpenInToOnlyManagedApps property value. Defines if open-in operation is supported from the managed app to the filesharing locations selected. This setting only applies when AllowedOutboundDataTransferDestinations is set to ManagedApps and DisableProtectionOfManagedOutboundOpenInData is set to False.
     *  @param bool|null $value Value to set for the filterOpenInToOnlyManagedApps property.
    */
    public function setFilterOpenInToOnlyManagedApps(?bool $value ): void {
        $this->filterOpenInToOnlyManagedApps = $value;
    }

    /**
     * Sets the managedUniversalLinks property value. A list of custom urls that are allowed to invocate a managed app
     *  @param array<string>|null $value Value to set for the managedUniversalLinks property.
    */
    public function setManagedUniversalLinks(?array $value ): void {
        $this->managedUniversalLinks = $value;
    }

    /**
     * Sets the minimumRequiredSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     *  @param string|null $value Value to set for the minimumRequiredSdkVersion property.
    */
    public function setMinimumRequiredSdkVersion(?string $value ): void {
        $this->minimumRequiredSdkVersion = $value;
    }

    /**
     * Sets the minimumWipeSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     *  @param string|null $value Value to set for the minimumWipeSdkVersion property.
    */
    public function setMinimumWipeSdkVersion(?string $value ): void {
        $this->minimumWipeSdkVersion = $value;
    }

    /**
     * Sets the protectInboundDataFromUnknownSources property value. Protect incoming data from unknown source. This setting is only allowed to be True when AllowedInboundDataTransferSources is set to AllApps.
     *  @param bool|null $value Value to set for the protectInboundDataFromUnknownSources property.
    */
    public function setProtectInboundDataFromUnknownSources(?bool $value ): void {
        $this->protectInboundDataFromUnknownSources = $value;
    }

    /**
     * Sets the thirdPartyKeyboardsBlocked property value. Defines if third party keyboards are allowed while accessing a managed app
     *  @param bool|null $value Value to set for the thirdPartyKeyboardsBlocked property.
    */
    public function setThirdPartyKeyboardsBlocked(?bool $value ): void {
        $this->thirdPartyKeyboardsBlocked = $value;
    }

}
