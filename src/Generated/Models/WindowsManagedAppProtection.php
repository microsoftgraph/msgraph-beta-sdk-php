<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Policy used to configure detailed management settings targeted to specific security groups and for a specified set of apps on a Windows device
*/
class WindowsManagedAppProtection extends ManagedAppPolicy implements Parsable 
{
    /**
     * Instantiates a new WindowsManagedAppProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsManagedAppProtection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsManagedAppProtection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsManagedAppProtection {
        return new WindowsManagedAppProtection();
    }

    /**
     * Gets the allowedInboundDataTransferSources property value. Data can be transferred from/to these classes of apps
     * @return WindowsManagedAppDataTransferLevel|null
    */
    public function getAllowedInboundDataTransferSources(): ?WindowsManagedAppDataTransferLevel {
        $val = $this->getBackingStore()->get('allowedInboundDataTransferSources');
        if (is_null($val) || $val instanceof WindowsManagedAppDataTransferLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedInboundDataTransferSources'");
    }

    /**
     * Gets the allowedOutboundClipboardSharingLevel property value. Represents the level to which the device's clipboard may be shared between apps
     * @return WindowsManagedAppClipboardSharingLevel|null
    */
    public function getAllowedOutboundClipboardSharingLevel(): ?WindowsManagedAppClipboardSharingLevel {
        $val = $this->getBackingStore()->get('allowedOutboundClipboardSharingLevel');
        if (is_null($val) || $val instanceof WindowsManagedAppClipboardSharingLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedOutboundClipboardSharingLevel'");
    }

    /**
     * Gets the allowedOutboundDataTransferDestinations property value. Data can be transferred from/to these classes of apps
     * @return WindowsManagedAppDataTransferLevel|null
    */
    public function getAllowedOutboundDataTransferDestinations(): ?WindowsManagedAppDataTransferLevel {
        $val = $this->getBackingStore()->get('allowedOutboundDataTransferDestinations');
        if (is_null($val) || $val instanceof WindowsManagedAppDataTransferLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedOutboundDataTransferDestinations'");
    }

    /**
     * Gets the appActionIfUnableToAuthenticateUser property value. If set, it will specify what action to take in the case where the user is unable to checkin because their authentication token is invalid. This happens when the user is deleted or disabled in AAD. Some possible values are block or wipe. If this property is not set, no action will be taken. The possible values are: block, wipe, warn, blockWhenSettingIsSupported.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfUnableToAuthenticateUser(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfUnableToAuthenticateUser');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfUnableToAuthenticateUser'");
    }

    /**
     * Gets the apps property value. List of apps to which the policy is deployed.
     * @return array<ManagedMobileApp>|null
    */
    public function getApps(): ?array {
        $val = $this->getBackingStore()->get('apps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedMobileApp::class);
            /** @var array<ManagedMobileApp>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'apps'");
    }

    /**
     * Gets the assignments property value. Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
     * @return array<TargetedManagedAppPolicyAssignment>|null
    */
    public function getAssignments(): ?array {
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TargetedManagedAppPolicyAssignment::class);
            /** @var array<TargetedManagedAppPolicyAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the deployedAppCount property value. Indicates the total number of applications for which the current policy is deployed.
     * @return int|null
    */
    public function getDeployedAppCount(): ?int {
        $val = $this->getBackingStore()->get('deployedAppCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deployedAppCount'");
    }

    /**
     * Gets the deploymentSummary property value. Navigation property to deployment summary of the configuration.
     * @return ManagedAppPolicyDeploymentSummary|null
    */
    public function getDeploymentSummary(): ?ManagedAppPolicyDeploymentSummary {
        $val = $this->getBackingStore()->get('deploymentSummary');
        if (is_null($val) || $val instanceof ManagedAppPolicyDeploymentSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentSummary'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedInboundDataTransferSources' => fn(ParseNode $n) => $o->setAllowedInboundDataTransferSources($n->getEnumValue(WindowsManagedAppDataTransferLevel::class)),
            'allowedOutboundClipboardSharingLevel' => fn(ParseNode $n) => $o->setAllowedOutboundClipboardSharingLevel($n->getEnumValue(WindowsManagedAppClipboardSharingLevel::class)),
            'allowedOutboundDataTransferDestinations' => fn(ParseNode $n) => $o->setAllowedOutboundDataTransferDestinations($n->getEnumValue(WindowsManagedAppDataTransferLevel::class)),
            'appActionIfUnableToAuthenticateUser' => fn(ParseNode $n) => $o->setAppActionIfUnableToAuthenticateUser($n->getEnumValue(ManagedAppRemediationAction::class)),
            'apps' => fn(ParseNode $n) => $o->setApps($n->getCollectionOfObjectValues([ManagedMobileApp::class, 'createFromDiscriminatorValue'])),
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([TargetedManagedAppPolicyAssignment::class, 'createFromDiscriminatorValue'])),
            'deployedAppCount' => fn(ParseNode $n) => $o->setDeployedAppCount($n->getIntegerValue()),
            'deploymentSummary' => fn(ParseNode $n) => $o->setDeploymentSummary($n->getObjectValue([ManagedAppPolicyDeploymentSummary::class, 'createFromDiscriminatorValue'])),
            'isAssigned' => fn(ParseNode $n) => $o->setIsAssigned($n->getBooleanValue()),
            'maximumAllowedDeviceThreatLevel' => fn(ParseNode $n) => $o->setMaximumAllowedDeviceThreatLevel($n->getEnumValue(ManagedAppDeviceThreatLevel::class)),
            'maximumRequiredOsVersion' => fn(ParseNode $n) => $o->setMaximumRequiredOsVersion($n->getStringValue()),
            'maximumWarningOsVersion' => fn(ParseNode $n) => $o->setMaximumWarningOsVersion($n->getStringValue()),
            'maximumWipeOsVersion' => fn(ParseNode $n) => $o->setMaximumWipeOsVersion($n->getStringValue()),
            'minimumRequiredAppVersion' => fn(ParseNode $n) => $o->setMinimumRequiredAppVersion($n->getStringValue()),
            'minimumRequiredOsVersion' => fn(ParseNode $n) => $o->setMinimumRequiredOsVersion($n->getStringValue()),
            'minimumRequiredSdkVersion' => fn(ParseNode $n) => $o->setMinimumRequiredSdkVersion($n->getStringValue()),
            'minimumWarningAppVersion' => fn(ParseNode $n) => $o->setMinimumWarningAppVersion($n->getStringValue()),
            'minimumWarningOsVersion' => fn(ParseNode $n) => $o->setMinimumWarningOsVersion($n->getStringValue()),
            'minimumWipeAppVersion' => fn(ParseNode $n) => $o->setMinimumWipeAppVersion($n->getStringValue()),
            'minimumWipeOsVersion' => fn(ParseNode $n) => $o->setMinimumWipeOsVersion($n->getStringValue()),
            'minimumWipeSdkVersion' => fn(ParseNode $n) => $o->setMinimumWipeSdkVersion($n->getStringValue()),
            'mobileThreatDefenseRemediationAction' => fn(ParseNode $n) => $o->setMobileThreatDefenseRemediationAction($n->getEnumValue(ManagedAppRemediationAction::class)),
            'periodOfflineBeforeAccessCheck' => fn(ParseNode $n) => $o->setPeriodOfflineBeforeAccessCheck($n->getDateIntervalValue()),
            'periodOfflineBeforeWipeIsEnforced' => fn(ParseNode $n) => $o->setPeriodOfflineBeforeWipeIsEnforced($n->getDateIntervalValue()),
            'printBlocked' => fn(ParseNode $n) => $o->setPrintBlocked($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isAssigned property value. When TRUE, indicates that the policy is deployed to some inclusion groups. When FALSE, indicates that the policy is not deployed to any inclusion groups. Default value is FALSE.
     * @return bool|null
    */
    public function getIsAssigned(): ?bool {
        $val = $this->getBackingStore()->get('isAssigned');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAssigned'");
    }

    /**
     * Gets the maximumAllowedDeviceThreatLevel property value. The maxium threat level allowed for an app to be compliant.
     * @return ManagedAppDeviceThreatLevel|null
    */
    public function getMaximumAllowedDeviceThreatLevel(): ?ManagedAppDeviceThreatLevel {
        $val = $this->getBackingStore()->get('maximumAllowedDeviceThreatLevel');
        if (is_null($val) || $val instanceof ManagedAppDeviceThreatLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumAllowedDeviceThreatLevel'");
    }

    /**
     * Gets the maximumRequiredOsVersion property value. Versions bigger than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     * @return string|null
    */
    public function getMaximumRequiredOsVersion(): ?string {
        $val = $this->getBackingStore()->get('maximumRequiredOsVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumRequiredOsVersion'");
    }

    /**
     * Gets the maximumWarningOsVersion property value. Versions bigger than the specified version will result in warning message on the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     * @return string|null
    */
    public function getMaximumWarningOsVersion(): ?string {
        $val = $this->getBackingStore()->get('maximumWarningOsVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumWarningOsVersion'");
    }

    /**
     * Gets the maximumWipeOsVersion property value. Versions bigger than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
     * @return string|null
    */
    public function getMaximumWipeOsVersion(): ?string {
        $val = $this->getBackingStore()->get('maximumWipeOsVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumWipeOsVersion'");
    }

    /**
     * Gets the minimumRequiredAppVersion property value. Versions less than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     * @return string|null
    */
    public function getMinimumRequiredAppVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumRequiredAppVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumRequiredAppVersion'");
    }

    /**
     * Gets the minimumRequiredOsVersion property value. Versions less than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     * @return string|null
    */
    public function getMinimumRequiredOsVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumRequiredOsVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumRequiredOsVersion'");
    }

    /**
     * Gets the minimumRequiredSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     * @return string|null
    */
    public function getMinimumRequiredSdkVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumRequiredSdkVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumRequiredSdkVersion'");
    }

    /**
     * Gets the minimumWarningAppVersion property value. Versions less than the specified version will result in warning message on the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     * @return string|null
    */
    public function getMinimumWarningAppVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumWarningAppVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumWarningAppVersion'");
    }

    /**
     * Gets the minimumWarningOsVersion property value. Versions less than the specified version will result in warning message on the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     * @return string|null
    */
    public function getMinimumWarningOsVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumWarningOsVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumWarningOsVersion'");
    }

    /**
     * Gets the minimumWipeAppVersion property value. Versions less than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
     * @return string|null
    */
    public function getMinimumWipeAppVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumWipeAppVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumWipeAppVersion'");
    }

    /**
     * Gets the minimumWipeOsVersion property value. Versions less than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
     * @return string|null
    */
    public function getMinimumWipeOsVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumWipeOsVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumWipeOsVersion'");
    }

    /**
     * Gets the minimumWipeSdkVersion property value. Versions less than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
     * @return string|null
    */
    public function getMinimumWipeSdkVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumWipeSdkVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumWipeSdkVersion'");
    }

    /**
     * Gets the mobileThreatDefenseRemediationAction property value. An admin initiated action to be applied on a managed app.
     * @return ManagedAppRemediationAction|null
    */
    public function getMobileThreatDefenseRemediationAction(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('mobileThreatDefenseRemediationAction');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobileThreatDefenseRemediationAction'");
    }

    /**
     * Gets the periodOfflineBeforeAccessCheck property value. The period after which access is checked when the device is not connected to the internet. For example, PT5M indicates that the interval is 5 minutes in duration. A timespan value of PT0S indicates that access will be blocked immediately when the device is not connected to the internet.
     * @return DateInterval|null
    */
    public function getPeriodOfflineBeforeAccessCheck(): ?DateInterval {
        $val = $this->getBackingStore()->get('periodOfflineBeforeAccessCheck');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'periodOfflineBeforeAccessCheck'");
    }

    /**
     * Gets the periodOfflineBeforeWipeIsEnforced property value. The amount of time an app is allowed to remain disconnected from the internet before all managed data it is wiped. For example, P5D indicates that the interval is 5 days in duration. A timespan value of PT0S indicates that managed data will never be wiped when the device is not connected to the internet.
     * @return DateInterval|null
    */
    public function getPeriodOfflineBeforeWipeIsEnforced(): ?DateInterval {
        $val = $this->getBackingStore()->get('periodOfflineBeforeWipeIsEnforced');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'periodOfflineBeforeWipeIsEnforced'");
    }

    /**
     * Gets the printBlocked property value. When TRUE, indicates that printing is blocked from managed apps. When FALSE, indicates that printing is allowed from managed apps. Default value is FALSE.
     * @return bool|null
    */
    public function getPrintBlocked(): ?bool {
        $val = $this->getBackingStore()->get('printBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'printBlocked'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('allowedInboundDataTransferSources', $this->getAllowedInboundDataTransferSources());
        $writer->writeEnumValue('allowedOutboundClipboardSharingLevel', $this->getAllowedOutboundClipboardSharingLevel());
        $writer->writeEnumValue('allowedOutboundDataTransferDestinations', $this->getAllowedOutboundDataTransferDestinations());
        $writer->writeEnumValue('appActionIfUnableToAuthenticateUser', $this->getAppActionIfUnableToAuthenticateUser());
        $writer->writeCollectionOfObjectValues('apps', $this->getApps());
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeIntegerValue('deployedAppCount', $this->getDeployedAppCount());
        $writer->writeObjectValue('deploymentSummary', $this->getDeploymentSummary());
        $writer->writeBooleanValue('isAssigned', $this->getIsAssigned());
        $writer->writeEnumValue('maximumAllowedDeviceThreatLevel', $this->getMaximumAllowedDeviceThreatLevel());
        $writer->writeStringValue('maximumRequiredOsVersion', $this->getMaximumRequiredOsVersion());
        $writer->writeStringValue('maximumWarningOsVersion', $this->getMaximumWarningOsVersion());
        $writer->writeStringValue('maximumWipeOsVersion', $this->getMaximumWipeOsVersion());
        $writer->writeStringValue('minimumRequiredAppVersion', $this->getMinimumRequiredAppVersion());
        $writer->writeStringValue('minimumRequiredOsVersion', $this->getMinimumRequiredOsVersion());
        $writer->writeStringValue('minimumRequiredSdkVersion', $this->getMinimumRequiredSdkVersion());
        $writer->writeStringValue('minimumWarningAppVersion', $this->getMinimumWarningAppVersion());
        $writer->writeStringValue('minimumWarningOsVersion', $this->getMinimumWarningOsVersion());
        $writer->writeStringValue('minimumWipeAppVersion', $this->getMinimumWipeAppVersion());
        $writer->writeStringValue('minimumWipeOsVersion', $this->getMinimumWipeOsVersion());
        $writer->writeStringValue('minimumWipeSdkVersion', $this->getMinimumWipeSdkVersion());
        $writer->writeEnumValue('mobileThreatDefenseRemediationAction', $this->getMobileThreatDefenseRemediationAction());
        $writer->writeDateIntervalValue('periodOfflineBeforeAccessCheck', $this->getPeriodOfflineBeforeAccessCheck());
        $writer->writeDateIntervalValue('periodOfflineBeforeWipeIsEnforced', $this->getPeriodOfflineBeforeWipeIsEnforced());
        $writer->writeBooleanValue('printBlocked', $this->getPrintBlocked());
    }

    /**
     * Sets the allowedInboundDataTransferSources property value. Data can be transferred from/to these classes of apps
     * @param WindowsManagedAppDataTransferLevel|null $value Value to set for the allowedInboundDataTransferSources property.
    */
    public function setAllowedInboundDataTransferSources(?WindowsManagedAppDataTransferLevel $value): void {
        $this->getBackingStore()->set('allowedInboundDataTransferSources', $value);
    }

    /**
     * Sets the allowedOutboundClipboardSharingLevel property value. Represents the level to which the device's clipboard may be shared between apps
     * @param WindowsManagedAppClipboardSharingLevel|null $value Value to set for the allowedOutboundClipboardSharingLevel property.
    */
    public function setAllowedOutboundClipboardSharingLevel(?WindowsManagedAppClipboardSharingLevel $value): void {
        $this->getBackingStore()->set('allowedOutboundClipboardSharingLevel', $value);
    }

    /**
     * Sets the allowedOutboundDataTransferDestinations property value. Data can be transferred from/to these classes of apps
     * @param WindowsManagedAppDataTransferLevel|null $value Value to set for the allowedOutboundDataTransferDestinations property.
    */
    public function setAllowedOutboundDataTransferDestinations(?WindowsManagedAppDataTransferLevel $value): void {
        $this->getBackingStore()->set('allowedOutboundDataTransferDestinations', $value);
    }

    /**
     * Sets the appActionIfUnableToAuthenticateUser property value. If set, it will specify what action to take in the case where the user is unable to checkin because their authentication token is invalid. This happens when the user is deleted or disabled in AAD. Some possible values are block or wipe. If this property is not set, no action will be taken. The possible values are: block, wipe, warn, blockWhenSettingIsSupported.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfUnableToAuthenticateUser property.
    */
    public function setAppActionIfUnableToAuthenticateUser(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfUnableToAuthenticateUser', $value);
    }

    /**
     * Sets the apps property value. List of apps to which the policy is deployed.
     * @param array<ManagedMobileApp>|null $value Value to set for the apps property.
    */
    public function setApps(?array $value): void {
        $this->getBackingStore()->set('apps', $value);
    }

    /**
     * Sets the assignments property value. Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
     * @param array<TargetedManagedAppPolicyAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the deployedAppCount property value. Indicates the total number of applications for which the current policy is deployed.
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
     * Sets the isAssigned property value. When TRUE, indicates that the policy is deployed to some inclusion groups. When FALSE, indicates that the policy is not deployed to any inclusion groups. Default value is FALSE.
     * @param bool|null $value Value to set for the isAssigned property.
    */
    public function setIsAssigned(?bool $value): void {
        $this->getBackingStore()->set('isAssigned', $value);
    }

    /**
     * Sets the maximumAllowedDeviceThreatLevel property value. The maxium threat level allowed for an app to be compliant.
     * @param ManagedAppDeviceThreatLevel|null $value Value to set for the maximumAllowedDeviceThreatLevel property.
    */
    public function setMaximumAllowedDeviceThreatLevel(?ManagedAppDeviceThreatLevel $value): void {
        $this->getBackingStore()->set('maximumAllowedDeviceThreatLevel', $value);
    }

    /**
     * Sets the maximumRequiredOsVersion property value. Versions bigger than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     * @param string|null $value Value to set for the maximumRequiredOsVersion property.
    */
    public function setMaximumRequiredOsVersion(?string $value): void {
        $this->getBackingStore()->set('maximumRequiredOsVersion', $value);
    }

    /**
     * Sets the maximumWarningOsVersion property value. Versions bigger than the specified version will result in warning message on the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     * @param string|null $value Value to set for the maximumWarningOsVersion property.
    */
    public function setMaximumWarningOsVersion(?string $value): void {
        $this->getBackingStore()->set('maximumWarningOsVersion', $value);
    }

    /**
     * Sets the maximumWipeOsVersion property value. Versions bigger than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
     * @param string|null $value Value to set for the maximumWipeOsVersion property.
    */
    public function setMaximumWipeOsVersion(?string $value): void {
        $this->getBackingStore()->set('maximumWipeOsVersion', $value);
    }

    /**
     * Sets the minimumRequiredAppVersion property value. Versions less than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     * @param string|null $value Value to set for the minimumRequiredAppVersion property.
    */
    public function setMinimumRequiredAppVersion(?string $value): void {
        $this->getBackingStore()->set('minimumRequiredAppVersion', $value);
    }

    /**
     * Sets the minimumRequiredOsVersion property value. Versions less than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     * @param string|null $value Value to set for the minimumRequiredOsVersion property.
    */
    public function setMinimumRequiredOsVersion(?string $value): void {
        $this->getBackingStore()->set('minimumRequiredOsVersion', $value);
    }

    /**
     * Sets the minimumRequiredSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     * @param string|null $value Value to set for the minimumRequiredSdkVersion property.
    */
    public function setMinimumRequiredSdkVersion(?string $value): void {
        $this->getBackingStore()->set('minimumRequiredSdkVersion', $value);
    }

    /**
     * Sets the minimumWarningAppVersion property value. Versions less than the specified version will result in warning message on the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     * @param string|null $value Value to set for the minimumWarningAppVersion property.
    */
    public function setMinimumWarningAppVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWarningAppVersion', $value);
    }

    /**
     * Sets the minimumWarningOsVersion property value. Versions less than the specified version will result in warning message on the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     * @param string|null $value Value to set for the minimumWarningOsVersion property.
    */
    public function setMinimumWarningOsVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWarningOsVersion', $value);
    }

    /**
     * Sets the minimumWipeAppVersion property value. Versions less than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
     * @param string|null $value Value to set for the minimumWipeAppVersion property.
    */
    public function setMinimumWipeAppVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWipeAppVersion', $value);
    }

    /**
     * Sets the minimumWipeOsVersion property value. Versions less than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
     * @param string|null $value Value to set for the minimumWipeOsVersion property.
    */
    public function setMinimumWipeOsVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWipeOsVersion', $value);
    }

    /**
     * Sets the minimumWipeSdkVersion property value. Versions less than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
     * @param string|null $value Value to set for the minimumWipeSdkVersion property.
    */
    public function setMinimumWipeSdkVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWipeSdkVersion', $value);
    }

    /**
     * Sets the mobileThreatDefenseRemediationAction property value. An admin initiated action to be applied on a managed app.
     * @param ManagedAppRemediationAction|null $value Value to set for the mobileThreatDefenseRemediationAction property.
    */
    public function setMobileThreatDefenseRemediationAction(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('mobileThreatDefenseRemediationAction', $value);
    }

    /**
     * Sets the periodOfflineBeforeAccessCheck property value. The period after which access is checked when the device is not connected to the internet. For example, PT5M indicates that the interval is 5 minutes in duration. A timespan value of PT0S indicates that access will be blocked immediately when the device is not connected to the internet.
     * @param DateInterval|null $value Value to set for the periodOfflineBeforeAccessCheck property.
    */
    public function setPeriodOfflineBeforeAccessCheck(?DateInterval $value): void {
        $this->getBackingStore()->set('periodOfflineBeforeAccessCheck', $value);
    }

    /**
     * Sets the periodOfflineBeforeWipeIsEnforced property value. The amount of time an app is allowed to remain disconnected from the internet before all managed data it is wiped. For example, P5D indicates that the interval is 5 days in duration. A timespan value of PT0S indicates that managed data will never be wiped when the device is not connected to the internet.
     * @param DateInterval|null $value Value to set for the periodOfflineBeforeWipeIsEnforced property.
    */
    public function setPeriodOfflineBeforeWipeIsEnforced(?DateInterval $value): void {
        $this->getBackingStore()->set('periodOfflineBeforeWipeIsEnforced', $value);
    }

    /**
     * Sets the printBlocked property value. When TRUE, indicates that printing is blocked from managed apps. When FALSE, indicates that printing is allowed from managed apps. Default value is FALSE.
     * @param bool|null $value Value to set for the printBlocked property.
    */
    public function setPrintBlocked(?bool $value): void {
        $this->getBackingStore()->set('printBlocked', $value);
    }

}
