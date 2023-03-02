<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosManagedAppProtection extends TargetedManagedAppProtection implements Parsable 
{
    /**
     * Instantiates a new IosManagedAppProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosManagedAppProtection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosManagedAppProtection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosManagedAppProtection {
        return new IosManagedAppProtection();
    }

    /**
     * Gets the allowedIosDeviceModels property value. Semicolon seperated list of device models allowed, as a string, for the managed app to work.
     * @return string|null
    */
    public function getAllowedIosDeviceModels(): ?string {
        return $this->getBackingStore()->get('allowedIosDeviceModels');
    }

    /**
     * Gets the appActionIfIosDeviceModelNotAllowed property value. An admin initiated action to be applied on a managed app.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfIosDeviceModelNotAllowed(): ?ManagedAppRemediationAction {
        return $this->getBackingStore()->get('appActionIfIosDeviceModelNotAllowed');
    }

    /**
     * Gets the appDataEncryptionType property value. Represents the level to which app data is encrypted for managed apps
     * @return ManagedAppDataEncryptionType|null
    */
    public function getAppDataEncryptionType(): ?ManagedAppDataEncryptionType {
        return $this->getBackingStore()->get('appDataEncryptionType');
    }

    /**
     * Gets the apps property value. List of apps to which the policy is deployed.
     * @return array<ManagedMobileApp>|null
    */
    public function getApps(): ?array {
        return $this->getBackingStore()->get('apps');
    }

    /**
     * Gets the customBrowserProtocol property value. A custom browser protocol to open weblink on iOS.
     * @return string|null
    */
    public function getCustomBrowserProtocol(): ?string {
        return $this->getBackingStore()->get('customBrowserProtocol');
    }

    /**
     * Gets the customDialerAppProtocol property value. Protocol of a custom dialer app to click-to-open a phone number on iOS, for example, skype:.
     * @return string|null
    */
    public function getCustomDialerAppProtocol(): ?string {
        return $this->getBackingStore()->get('customDialerAppProtocol');
    }

    /**
     * Gets the deployedAppCount property value. Count of apps to which the current policy is deployed.
     * @return int|null
    */
    public function getDeployedAppCount(): ?int {
        return $this->getBackingStore()->get('deployedAppCount');
    }

    /**
     * Gets the deploymentSummary property value. Navigation property to deployment summary of the configuration.
     * @return ManagedAppPolicyDeploymentSummary|null
    */
    public function getDeploymentSummary(): ?ManagedAppPolicyDeploymentSummary {
        return $this->getBackingStore()->get('deploymentSummary');
    }

    /**
     * Gets the disableProtectionOfManagedOutboundOpenInData property value. Disable protection of data transferred to other apps through IOS OpenIn option. This setting is only allowed to be True when AllowedOutboundDataTransferDestinations is set to ManagedApps.
     * @return bool|null
    */
    public function getDisableProtectionOfManagedOutboundOpenInData(): ?bool {
        return $this->getBackingStore()->get('disableProtectionOfManagedOutboundOpenInData');
    }

    /**
     * Gets the exemptedAppProtocols property value. Apps in this list will be exempt from the policy and will be able to receive data from managed apps.
     * @return array<KeyValuePair>|null
    */
    public function getExemptedAppProtocols(): ?array {
        return $this->getBackingStore()->get('exemptedAppProtocols');
    }

    /**
     * Gets the exemptedUniversalLinks property value. A list of custom urls that are allowed to invocate an unmanaged app
     * @return array<string>|null
    */
    public function getExemptedUniversalLinks(): ?array {
        return $this->getBackingStore()->get('exemptedUniversalLinks');
    }

    /**
     * Gets the faceIdBlocked property value. Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True.
     * @return bool|null
    */
    public function getFaceIdBlocked(): ?bool {
        return $this->getBackingStore()->get('faceIdBlocked');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedIosDeviceModels' => fn(ParseNode $n) => $o->setAllowedIosDeviceModels($n->getStringValue()),
            'appActionIfIosDeviceModelNotAllowed' => fn(ParseNode $n) => $o->setAppActionIfIosDeviceModelNotAllowed($n->getEnumValue(ManagedAppRemediationAction::class)),
            'appDataEncryptionType' => fn(ParseNode $n) => $o->setAppDataEncryptionType($n->getEnumValue(ManagedAppDataEncryptionType::class)),
            'apps' => fn(ParseNode $n) => $o->setApps($n->getCollectionOfObjectValues([ManagedMobileApp::class, 'createFromDiscriminatorValue'])),
            'customBrowserProtocol' => fn(ParseNode $n) => $o->setCustomBrowserProtocol($n->getStringValue()),
            'customDialerAppProtocol' => fn(ParseNode $n) => $o->setCustomDialerAppProtocol($n->getStringValue()),
            'deployedAppCount' => fn(ParseNode $n) => $o->setDeployedAppCount($n->getIntegerValue()),
            'deploymentSummary' => fn(ParseNode $n) => $o->setDeploymentSummary($n->getObjectValue([ManagedAppPolicyDeploymentSummary::class, 'createFromDiscriminatorValue'])),
            'disableProtectionOfManagedOutboundOpenInData' => fn(ParseNode $n) => $o->setDisableProtectionOfManagedOutboundOpenInData($n->getBooleanValue()),
            'exemptedAppProtocols' => fn(ParseNode $n) => $o->setExemptedAppProtocols($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'exemptedUniversalLinks' => fn(ParseNode $n) => $o->setExemptedUniversalLinks($n->getCollectionOfPrimitiveValues()),
            'faceIdBlocked' => fn(ParseNode $n) => $o->setFaceIdBlocked($n->getBooleanValue()),
            'filterOpenInToOnlyManagedApps' => fn(ParseNode $n) => $o->setFilterOpenInToOnlyManagedApps($n->getBooleanValue()),
            'managedUniversalLinks' => fn(ParseNode $n) => $o->setManagedUniversalLinks($n->getCollectionOfPrimitiveValues()),
            'minimumRequiredSdkVersion' => fn(ParseNode $n) => $o->setMinimumRequiredSdkVersion($n->getStringValue()),
            'minimumWarningSdkVersion' => fn(ParseNode $n) => $o->setMinimumWarningSdkVersion($n->getStringValue()),
            'minimumWipeSdkVersion' => fn(ParseNode $n) => $o->setMinimumWipeSdkVersion($n->getStringValue()),
            'protectInboundDataFromUnknownSources' => fn(ParseNode $n) => $o->setProtectInboundDataFromUnknownSources($n->getBooleanValue()),
            'thirdPartyKeyboardsBlocked' => fn(ParseNode $n) => $o->setThirdPartyKeyboardsBlocked($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the filterOpenInToOnlyManagedApps property value. Defines if open-in operation is supported from the managed app to the filesharing locations selected. This setting only applies when AllowedOutboundDataTransferDestinations is set to ManagedApps and DisableProtectionOfManagedOutboundOpenInData is set to False.
     * @return bool|null
    */
    public function getFilterOpenInToOnlyManagedApps(): ?bool {
        return $this->getBackingStore()->get('filterOpenInToOnlyManagedApps');
    }

    /**
     * Gets the managedUniversalLinks property value. A list of custom urls that are allowed to invocate a managed app
     * @return array<string>|null
    */
    public function getManagedUniversalLinks(): ?array {
        return $this->getBackingStore()->get('managedUniversalLinks');
    }

    /**
     * Gets the minimumRequiredSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     * @return string|null
    */
    public function getMinimumRequiredSdkVersion(): ?string {
        return $this->getBackingStore()->get('minimumRequiredSdkVersion');
    }

    /**
     * Gets the minimumWarningSdkVersion property value. Versions less than the specified version will result in warning message on the managed app from accessing company data.
     * @return string|null
    */
    public function getMinimumWarningSdkVersion(): ?string {
        return $this->getBackingStore()->get('minimumWarningSdkVersion');
    }

    /**
     * Gets the minimumWipeSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     * @return string|null
    */
    public function getMinimumWipeSdkVersion(): ?string {
        return $this->getBackingStore()->get('minimumWipeSdkVersion');
    }

    /**
     * Gets the protectInboundDataFromUnknownSources property value. Protect incoming data from unknown source. This setting is only allowed to be True when AllowedInboundDataTransferSources is set to AllApps.
     * @return bool|null
    */
    public function getProtectInboundDataFromUnknownSources(): ?bool {
        return $this->getBackingStore()->get('protectInboundDataFromUnknownSources');
    }

    /**
     * Gets the thirdPartyKeyboardsBlocked property value. Defines if third party keyboards are allowed while accessing a managed app
     * @return bool|null
    */
    public function getThirdPartyKeyboardsBlocked(): ?bool {
        return $this->getBackingStore()->get('thirdPartyKeyboardsBlocked');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('allowedIosDeviceModels', $this->getAllowedIosDeviceModels());
        $writer->writeEnumValue('appActionIfIosDeviceModelNotAllowed', $this->getAppActionIfIosDeviceModelNotAllowed());
        $writer->writeEnumValue('appDataEncryptionType', $this->getAppDataEncryptionType());
        $writer->writeCollectionOfObjectValues('apps', $this->getApps());
        $writer->writeStringValue('customBrowserProtocol', $this->getCustomBrowserProtocol());
        $writer->writeStringValue('customDialerAppProtocol', $this->getCustomDialerAppProtocol());
        $writer->writeIntegerValue('deployedAppCount', $this->getDeployedAppCount());
        $writer->writeObjectValue('deploymentSummary', $this->getDeploymentSummary());
        $writer->writeBooleanValue('disableProtectionOfManagedOutboundOpenInData', $this->getDisableProtectionOfManagedOutboundOpenInData());
        $writer->writeCollectionOfObjectValues('exemptedAppProtocols', $this->getExemptedAppProtocols());
        $writer->writeCollectionOfPrimitiveValues('exemptedUniversalLinks', $this->getExemptedUniversalLinks());
        $writer->writeBooleanValue('faceIdBlocked', $this->getFaceIdBlocked());
        $writer->writeBooleanValue('filterOpenInToOnlyManagedApps', $this->getFilterOpenInToOnlyManagedApps());
        $writer->writeCollectionOfPrimitiveValues('managedUniversalLinks', $this->getManagedUniversalLinks());
        $writer->writeStringValue('minimumRequiredSdkVersion', $this->getMinimumRequiredSdkVersion());
        $writer->writeStringValue('minimumWarningSdkVersion', $this->getMinimumWarningSdkVersion());
        $writer->writeStringValue('minimumWipeSdkVersion', $this->getMinimumWipeSdkVersion());
        $writer->writeBooleanValue('protectInboundDataFromUnknownSources', $this->getProtectInboundDataFromUnknownSources());
        $writer->writeBooleanValue('thirdPartyKeyboardsBlocked', $this->getThirdPartyKeyboardsBlocked());
    }

    /**
     * Sets the allowedIosDeviceModels property value. Semicolon seperated list of device models allowed, as a string, for the managed app to work.
     * @param string|null $value Value to set for the allowedIosDeviceModels property.
    */
    public function setAllowedIosDeviceModels(?string $value): void {
        $this->getBackingStore()->set('allowedIosDeviceModels', $value);
    }

    /**
     * Sets the appActionIfIosDeviceModelNotAllowed property value. An admin initiated action to be applied on a managed app.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfIosDeviceModelNotAllowed property.
    */
    public function setAppActionIfIosDeviceModelNotAllowed(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfIosDeviceModelNotAllowed', $value);
    }

    /**
     * Sets the appDataEncryptionType property value. Represents the level to which app data is encrypted for managed apps
     * @param ManagedAppDataEncryptionType|null $value Value to set for the appDataEncryptionType property.
    */
    public function setAppDataEncryptionType(?ManagedAppDataEncryptionType $value): void {
        $this->getBackingStore()->set('appDataEncryptionType', $value);
    }

    /**
     * Sets the apps property value. List of apps to which the policy is deployed.
     * @param array<ManagedMobileApp>|null $value Value to set for the apps property.
    */
    public function setApps(?array $value): void {
        $this->getBackingStore()->set('apps', $value);
    }

    /**
     * Sets the customBrowserProtocol property value. A custom browser protocol to open weblink on iOS.
     * @param string|null $value Value to set for the customBrowserProtocol property.
    */
    public function setCustomBrowserProtocol(?string $value): void {
        $this->getBackingStore()->set('customBrowserProtocol', $value);
    }

    /**
     * Sets the customDialerAppProtocol property value. Protocol of a custom dialer app to click-to-open a phone number on iOS, for example, skype:.
     * @param string|null $value Value to set for the customDialerAppProtocol property.
    */
    public function setCustomDialerAppProtocol(?string $value): void {
        $this->getBackingStore()->set('customDialerAppProtocol', $value);
    }

    /**
     * Sets the deployedAppCount property value. Count of apps to which the current policy is deployed.
     * @param int|null $value Value to set for the deployedAppCount property.
    */
    public function setDeployedAppCount(?int $value): void {
        $this->getBackingStore()->set('deployedAppCount', $value);
    }

    /**
     * Sets the deploymentSummary property value. Navigation property to deployment summary of the configuration.
     * @param ManagedAppPolicyDeploymentSummary|null $value Value to set for the deploymentSummary property.
    */
    public function setDeploymentSummary(?ManagedAppPolicyDeploymentSummary $value): void {
        $this->getBackingStore()->set('deploymentSummary', $value);
    }

    /**
     * Sets the disableProtectionOfManagedOutboundOpenInData property value. Disable protection of data transferred to other apps through IOS OpenIn option. This setting is only allowed to be True when AllowedOutboundDataTransferDestinations is set to ManagedApps.
     * @param bool|null $value Value to set for the disableProtectionOfManagedOutboundOpenInData property.
    */
    public function setDisableProtectionOfManagedOutboundOpenInData(?bool $value): void {
        $this->getBackingStore()->set('disableProtectionOfManagedOutboundOpenInData', $value);
    }

    /**
     * Sets the exemptedAppProtocols property value. Apps in this list will be exempt from the policy and will be able to receive data from managed apps.
     * @param array<KeyValuePair>|null $value Value to set for the exemptedAppProtocols property.
    */
    public function setExemptedAppProtocols(?array $value): void {
        $this->getBackingStore()->set('exemptedAppProtocols', $value);
    }

    /**
     * Sets the exemptedUniversalLinks property value. A list of custom urls that are allowed to invocate an unmanaged app
     * @param array<string>|null $value Value to set for the exemptedUniversalLinks property.
    */
    public function setExemptedUniversalLinks(?array $value): void {
        $this->getBackingStore()->set('exemptedUniversalLinks', $value);
    }

    /**
     * Sets the faceIdBlocked property value. Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True.
     * @param bool|null $value Value to set for the faceIdBlocked property.
    */
    public function setFaceIdBlocked(?bool $value): void {
        $this->getBackingStore()->set('faceIdBlocked', $value);
    }

    /**
     * Sets the filterOpenInToOnlyManagedApps property value. Defines if open-in operation is supported from the managed app to the filesharing locations selected. This setting only applies when AllowedOutboundDataTransferDestinations is set to ManagedApps and DisableProtectionOfManagedOutboundOpenInData is set to False.
     * @param bool|null $value Value to set for the filterOpenInToOnlyManagedApps property.
    */
    public function setFilterOpenInToOnlyManagedApps(?bool $value): void {
        $this->getBackingStore()->set('filterOpenInToOnlyManagedApps', $value);
    }

    /**
     * Sets the managedUniversalLinks property value. A list of custom urls that are allowed to invocate a managed app
     * @param array<string>|null $value Value to set for the managedUniversalLinks property.
    */
    public function setManagedUniversalLinks(?array $value): void {
        $this->getBackingStore()->set('managedUniversalLinks', $value);
    }

    /**
     * Sets the minimumRequiredSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     * @param string|null $value Value to set for the minimumRequiredSdkVersion property.
    */
    public function setMinimumRequiredSdkVersion(?string $value): void {
        $this->getBackingStore()->set('minimumRequiredSdkVersion', $value);
    }

    /**
     * Sets the minimumWarningSdkVersion property value. Versions less than the specified version will result in warning message on the managed app from accessing company data.
     * @param string|null $value Value to set for the minimumWarningSdkVersion property.
    */
    public function setMinimumWarningSdkVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWarningSdkVersion', $value);
    }

    /**
     * Sets the minimumWipeSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     * @param string|null $value Value to set for the minimumWipeSdkVersion property.
    */
    public function setMinimumWipeSdkVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWipeSdkVersion', $value);
    }

    /**
     * Sets the protectInboundDataFromUnknownSources property value. Protect incoming data from unknown source. This setting is only allowed to be True when AllowedInboundDataTransferSources is set to AllApps.
     * @param bool|null $value Value to set for the protectInboundDataFromUnknownSources property.
    */
    public function setProtectInboundDataFromUnknownSources(?bool $value): void {
        $this->getBackingStore()->set('protectInboundDataFromUnknownSources', $value);
    }

    /**
     * Sets the thirdPartyKeyboardsBlocked property value. Defines if third party keyboards are allowed while accessing a managed app
     * @param bool|null $value Value to set for the thirdPartyKeyboardsBlocked property.
    */
    public function setThirdPartyKeyboardsBlocked(?bool $value): void {
        $this->getBackingStore()->set('thirdPartyKeyboardsBlocked', $value);
    }

}
