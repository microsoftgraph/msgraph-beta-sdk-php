<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsManagedAppProtection extends ManagedAppPolicy implements Parsable 
{
    /**
     * @var WindowsManagedAppDataTransferLevel|null $allowedInboundDataTransferSources Data can be transferred from/to these classes of apps
    */
    private ?WindowsManagedAppDataTransferLevel $allowedInboundDataTransferSources = null;
    
    /**
     * @var WindowsManagedAppClipboardSharingLevel|null $allowedOutboundClipboardSharingLevel Represents the level to which the device's clipboard may be shared between apps
    */
    private ?WindowsManagedAppClipboardSharingLevel $allowedOutboundClipboardSharingLevel = null;
    
    /**
     * @var WindowsManagedAppDataTransferLevel|null $allowedOutboundDataTransferDestinations Data can be transferred from/to these classes of apps
    */
    private ?WindowsManagedAppDataTransferLevel $allowedOutboundDataTransferDestinations = null;
    
    /**
     * @var ManagedAppRemediationAction|null $appActionIfUnableToAuthenticateUser If set, it will specify what action to take in the case where the user is unable to checkin because their authentication token is invalid. This happens when the user is deleted or disabled in AAD. Some possible values are block or wipe. If this property is not set, no action will be taken. Possible values are: block, wipe, warn.
    */
    private ?ManagedAppRemediationAction $appActionIfUnableToAuthenticateUser = null;
    
    /**
     * @var array<ManagedMobileApp>|null $apps List of apps to which the policy is deployed.
    */
    private ?array $apps = null;
    
    /**
     * @var array<TargetedManagedAppPolicyAssignment>|null $assignments Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
    */
    private ?array $assignments = null;
    
    /**
     * @var int|null $deployedAppCount Indicates the total number of applications for which the current policy is deployed.
    */
    private ?int $deployedAppCount = null;
    
    /**
     * @var bool|null $isAssigned When TRUE, indicates that the policy is deployed to some inclusion groups. When FALSE, indicates that the policy is not deployed to any inclusion groups. Default value is FALSE.
    */
    private ?bool $isAssigned = null;
    
    /**
     * @var ManagedAppDeviceThreatLevel|null $maximumAllowedDeviceThreatLevel The maxium threat level allowed for an app to be compliant.
    */
    private ?ManagedAppDeviceThreatLevel $maximumAllowedDeviceThreatLevel = null;
    
    /**
     * @var string|null $maximumRequiredOsVersion Versions bigger than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
    */
    private ?string $maximumRequiredOsVersion = null;
    
    /**
     * @var string|null $maximumWarningOsVersion Versions bigger than the specified version will result in warning message on the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
    */
    private ?string $maximumWarningOsVersion = null;
    
    /**
     * @var string|null $maximumWipeOsVersion Versions bigger than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
    */
    private ?string $maximumWipeOsVersion = null;
    
    /**
     * @var string|null $minimumRequiredAppVersion Versions less than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
    */
    private ?string $minimumRequiredAppVersion = null;
    
    /**
     * @var string|null $minimumRequiredOsVersion Versions less than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
    */
    private ?string $minimumRequiredOsVersion = null;
    
    /**
     * @var string|null $minimumRequiredSdkVersion Versions less than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
    */
    private ?string $minimumRequiredSdkVersion = null;
    
    /**
     * @var string|null $minimumWarningAppVersion Versions less than the specified version will result in warning message on the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
    */
    private ?string $minimumWarningAppVersion = null;
    
    /**
     * @var string|null $minimumWarningOsVersion Versions less than the specified version will result in warning message on the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
    */
    private ?string $minimumWarningOsVersion = null;
    
    /**
     * @var string|null $minimumWipeAppVersion Versions less than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
    */
    private ?string $minimumWipeAppVersion = null;
    
    /**
     * @var string|null $minimumWipeOsVersion Versions less than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
    */
    private ?string $minimumWipeOsVersion = null;
    
    /**
     * @var string|null $minimumWipeSdkVersion Versions less than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
    */
    private ?string $minimumWipeSdkVersion = null;
    
    /**
     * @var ManagedAppRemediationAction|null $mobileThreatDefenseRemediationAction An admin initiated action to be applied on a managed app.
    */
    private ?ManagedAppRemediationAction $mobileThreatDefenseRemediationAction = null;
    
    /**
     * @var DateInterval|null $periodOfflineBeforeAccessCheck The period after which access is checked when the device is not connected to the internet. For example, PT5M indicates that the interval is 5 minutes in duration. A timespan value of PT0S indicates that access will be blocked immediately when the device is not connected to the internet.
    */
    private ?DateInterval $periodOfflineBeforeAccessCheck = null;
    
    /**
     * @var DateInterval|null $periodOfflineBeforeWipeIsEnforced The amount of time an app is allowed to remain disconnected from the internet before all managed data it is wiped. For example, P5D indicates that the interval is 5 days in duration. A timespan value of PT0S indicates that managed data will never be wiped when the device is not connected to the internet.
    */
    private ?DateInterval $periodOfflineBeforeWipeIsEnforced = null;
    
    /**
     * @var bool|null $printBlocked When TRUE, indicates that printing is blocked from managed apps. When FALSE, indicates that printing is allowed from managed apps. Default value is FALSE.
    */
    private ?bool $printBlocked = null;
    
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
        return $this->allowedInboundDataTransferSources;
    }

    /**
     * Gets the allowedOutboundClipboardSharingLevel property value. Represents the level to which the device's clipboard may be shared between apps
     * @return WindowsManagedAppClipboardSharingLevel|null
    */
    public function getAllowedOutboundClipboardSharingLevel(): ?WindowsManagedAppClipboardSharingLevel {
        return $this->allowedOutboundClipboardSharingLevel;
    }

    /**
     * Gets the allowedOutboundDataTransferDestinations property value. Data can be transferred from/to these classes of apps
     * @return WindowsManagedAppDataTransferLevel|null
    */
    public function getAllowedOutboundDataTransferDestinations(): ?WindowsManagedAppDataTransferLevel {
        return $this->allowedOutboundDataTransferDestinations;
    }

    /**
     * Gets the appActionIfUnableToAuthenticateUser property value. If set, it will specify what action to take in the case where the user is unable to checkin because their authentication token is invalid. This happens when the user is deleted or disabled in AAD. Some possible values are block or wipe. If this property is not set, no action will be taken. Possible values are: block, wipe, warn.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfUnableToAuthenticateUser(): ?ManagedAppRemediationAction {
        return $this->appActionIfUnableToAuthenticateUser;
    }

    /**
     * Gets the apps property value. List of apps to which the policy is deployed.
     * @return array<ManagedMobileApp>|null
    */
    public function getApps(): ?array {
        return $this->apps;
    }

    /**
     * Gets the assignments property value. Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
     * @return array<TargetedManagedAppPolicyAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the deployedAppCount property value. Indicates the total number of applications for which the current policy is deployed.
     * @return int|null
    */
    public function getDeployedAppCount(): ?int {
        return $this->deployedAppCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->isAssigned;
    }

    /**
     * Gets the maximumAllowedDeviceThreatLevel property value. The maxium threat level allowed for an app to be compliant.
     * @return ManagedAppDeviceThreatLevel|null
    */
    public function getMaximumAllowedDeviceThreatLevel(): ?ManagedAppDeviceThreatLevel {
        return $this->maximumAllowedDeviceThreatLevel;
    }

    /**
     * Gets the maximumRequiredOsVersion property value. Versions bigger than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     * @return string|null
    */
    public function getMaximumRequiredOsVersion(): ?string {
        return $this->maximumRequiredOsVersion;
    }

    /**
     * Gets the maximumWarningOsVersion property value. Versions bigger than the specified version will result in warning message on the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     * @return string|null
    */
    public function getMaximumWarningOsVersion(): ?string {
        return $this->maximumWarningOsVersion;
    }

    /**
     * Gets the maximumWipeOsVersion property value. Versions bigger than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
     * @return string|null
    */
    public function getMaximumWipeOsVersion(): ?string {
        return $this->maximumWipeOsVersion;
    }

    /**
     * Gets the minimumRequiredAppVersion property value. Versions less than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     * @return string|null
    */
    public function getMinimumRequiredAppVersion(): ?string {
        return $this->minimumRequiredAppVersion;
    }

    /**
     * Gets the minimumRequiredOsVersion property value. Versions less than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     * @return string|null
    */
    public function getMinimumRequiredOsVersion(): ?string {
        return $this->minimumRequiredOsVersion;
    }

    /**
     * Gets the minimumRequiredSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     * @return string|null
    */
    public function getMinimumRequiredSdkVersion(): ?string {
        return $this->minimumRequiredSdkVersion;
    }

    /**
     * Gets the minimumWarningAppVersion property value. Versions less than the specified version will result in warning message on the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     * @return string|null
    */
    public function getMinimumWarningAppVersion(): ?string {
        return $this->minimumWarningAppVersion;
    }

    /**
     * Gets the minimumWarningOsVersion property value. Versions less than the specified version will result in warning message on the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     * @return string|null
    */
    public function getMinimumWarningOsVersion(): ?string {
        return $this->minimumWarningOsVersion;
    }

    /**
     * Gets the minimumWipeAppVersion property value. Versions less than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
     * @return string|null
    */
    public function getMinimumWipeAppVersion(): ?string {
        return $this->minimumWipeAppVersion;
    }

    /**
     * Gets the minimumWipeOsVersion property value. Versions less than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
     * @return string|null
    */
    public function getMinimumWipeOsVersion(): ?string {
        return $this->minimumWipeOsVersion;
    }

    /**
     * Gets the minimumWipeSdkVersion property value. Versions less than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
     * @return string|null
    */
    public function getMinimumWipeSdkVersion(): ?string {
        return $this->minimumWipeSdkVersion;
    }

    /**
     * Gets the mobileThreatDefenseRemediationAction property value. An admin initiated action to be applied on a managed app.
     * @return ManagedAppRemediationAction|null
    */
    public function getMobileThreatDefenseRemediationAction(): ?ManagedAppRemediationAction {
        return $this->mobileThreatDefenseRemediationAction;
    }

    /**
     * Gets the periodOfflineBeforeAccessCheck property value. The period after which access is checked when the device is not connected to the internet. For example, PT5M indicates that the interval is 5 minutes in duration. A timespan value of PT0S indicates that access will be blocked immediately when the device is not connected to the internet.
     * @return DateInterval|null
    */
    public function getPeriodOfflineBeforeAccessCheck(): ?DateInterval {
        return $this->periodOfflineBeforeAccessCheck;
    }

    /**
     * Gets the periodOfflineBeforeWipeIsEnforced property value. The amount of time an app is allowed to remain disconnected from the internet before all managed data it is wiped. For example, P5D indicates that the interval is 5 days in duration. A timespan value of PT0S indicates that managed data will never be wiped when the device is not connected to the internet.
     * @return DateInterval|null
    */
    public function getPeriodOfflineBeforeWipeIsEnforced(): ?DateInterval {
        return $this->periodOfflineBeforeWipeIsEnforced;
    }

    /**
     * Gets the printBlocked property value. When TRUE, indicates that printing is blocked from managed apps. When FALSE, indicates that printing is allowed from managed apps. Default value is FALSE.
     * @return bool|null
    */
    public function getPrintBlocked(): ?bool {
        return $this->printBlocked;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('allowedInboundDataTransferSources', $this->allowedInboundDataTransferSources);
        $writer->writeEnumValue('allowedOutboundClipboardSharingLevel', $this->allowedOutboundClipboardSharingLevel);
        $writer->writeEnumValue('allowedOutboundDataTransferDestinations', $this->allowedOutboundDataTransferDestinations);
        $writer->writeEnumValue('appActionIfUnableToAuthenticateUser', $this->appActionIfUnableToAuthenticateUser);
        $writer->writeCollectionOfObjectValues('apps', $this->apps);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeIntegerValue('deployedAppCount', $this->deployedAppCount);
        $writer->writeBooleanValue('isAssigned', $this->isAssigned);
        $writer->writeEnumValue('maximumAllowedDeviceThreatLevel', $this->maximumAllowedDeviceThreatLevel);
        $writer->writeStringValue('maximumRequiredOsVersion', $this->maximumRequiredOsVersion);
        $writer->writeStringValue('maximumWarningOsVersion', $this->maximumWarningOsVersion);
        $writer->writeStringValue('maximumWipeOsVersion', $this->maximumWipeOsVersion);
        $writer->writeStringValue('minimumRequiredAppVersion', $this->minimumRequiredAppVersion);
        $writer->writeStringValue('minimumRequiredOsVersion', $this->minimumRequiredOsVersion);
        $writer->writeStringValue('minimumRequiredSdkVersion', $this->minimumRequiredSdkVersion);
        $writer->writeStringValue('minimumWarningAppVersion', $this->minimumWarningAppVersion);
        $writer->writeStringValue('minimumWarningOsVersion', $this->minimumWarningOsVersion);
        $writer->writeStringValue('minimumWipeAppVersion', $this->minimumWipeAppVersion);
        $writer->writeStringValue('minimumWipeOsVersion', $this->minimumWipeOsVersion);
        $writer->writeStringValue('minimumWipeSdkVersion', $this->minimumWipeSdkVersion);
        $writer->writeEnumValue('mobileThreatDefenseRemediationAction', $this->mobileThreatDefenseRemediationAction);
        $writer->writeDateIntervalValue('periodOfflineBeforeAccessCheck', $this->periodOfflineBeforeAccessCheck);
        $writer->writeDateIntervalValue('periodOfflineBeforeWipeIsEnforced', $this->periodOfflineBeforeWipeIsEnforced);
        $writer->writeBooleanValue('printBlocked', $this->printBlocked);
    }

    /**
     * Sets the allowedInboundDataTransferSources property value. Data can be transferred from/to these classes of apps
     *  @param WindowsManagedAppDataTransferLevel|null $value Value to set for the allowedInboundDataTransferSources property.
    */
    public function setAllowedInboundDataTransferSources(?WindowsManagedAppDataTransferLevel $value ): void {
        $this->allowedInboundDataTransferSources = $value;
    }

    /**
     * Sets the allowedOutboundClipboardSharingLevel property value. Represents the level to which the device's clipboard may be shared between apps
     *  @param WindowsManagedAppClipboardSharingLevel|null $value Value to set for the allowedOutboundClipboardSharingLevel property.
    */
    public function setAllowedOutboundClipboardSharingLevel(?WindowsManagedAppClipboardSharingLevel $value ): void {
        $this->allowedOutboundClipboardSharingLevel = $value;
    }

    /**
     * Sets the allowedOutboundDataTransferDestinations property value. Data can be transferred from/to these classes of apps
     *  @param WindowsManagedAppDataTransferLevel|null $value Value to set for the allowedOutboundDataTransferDestinations property.
    */
    public function setAllowedOutboundDataTransferDestinations(?WindowsManagedAppDataTransferLevel $value ): void {
        $this->allowedOutboundDataTransferDestinations = $value;
    }

    /**
     * Sets the appActionIfUnableToAuthenticateUser property value. If set, it will specify what action to take in the case where the user is unable to checkin because their authentication token is invalid. This happens when the user is deleted or disabled in AAD. Some possible values are block or wipe. If this property is not set, no action will be taken. Possible values are: block, wipe, warn.
     *  @param ManagedAppRemediationAction|null $value Value to set for the appActionIfUnableToAuthenticateUser property.
    */
    public function setAppActionIfUnableToAuthenticateUser(?ManagedAppRemediationAction $value ): void {
        $this->appActionIfUnableToAuthenticateUser = $value;
    }

    /**
     * Sets the apps property value. List of apps to which the policy is deployed.
     *  @param array<ManagedMobileApp>|null $value Value to set for the apps property.
    */
    public function setApps(?array $value ): void {
        $this->apps = $value;
    }

    /**
     * Sets the assignments property value. Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
     *  @param array<TargetedManagedAppPolicyAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the deployedAppCount property value. Indicates the total number of applications for which the current policy is deployed.
     *  @param int|null $value Value to set for the deployedAppCount property.
    */
    public function setDeployedAppCount(?int $value ): void {
        $this->deployedAppCount = $value;
    }

    /**
     * Sets the isAssigned property value. When TRUE, indicates that the policy is deployed to some inclusion groups. When FALSE, indicates that the policy is not deployed to any inclusion groups. Default value is FALSE.
     *  @param bool|null $value Value to set for the isAssigned property.
    */
    public function setIsAssigned(?bool $value ): void {
        $this->isAssigned = $value;
    }

    /**
     * Sets the maximumAllowedDeviceThreatLevel property value. The maxium threat level allowed for an app to be compliant.
     *  @param ManagedAppDeviceThreatLevel|null $value Value to set for the maximumAllowedDeviceThreatLevel property.
    */
    public function setMaximumAllowedDeviceThreatLevel(?ManagedAppDeviceThreatLevel $value ): void {
        $this->maximumAllowedDeviceThreatLevel = $value;
    }

    /**
     * Sets the maximumRequiredOsVersion property value. Versions bigger than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     *  @param string|null $value Value to set for the maximumRequiredOsVersion property.
    */
    public function setMaximumRequiredOsVersion(?string $value ): void {
        $this->maximumRequiredOsVersion = $value;
    }

    /**
     * Sets the maximumWarningOsVersion property value. Versions bigger than the specified version will result in warning message on the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     *  @param string|null $value Value to set for the maximumWarningOsVersion property.
    */
    public function setMaximumWarningOsVersion(?string $value ): void {
        $this->maximumWarningOsVersion = $value;
    }

    /**
     * Sets the maximumWipeOsVersion property value. Versions bigger than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
     *  @param string|null $value Value to set for the maximumWipeOsVersion property.
    */
    public function setMaximumWipeOsVersion(?string $value ): void {
        $this->maximumWipeOsVersion = $value;
    }

    /**
     * Sets the minimumRequiredAppVersion property value. Versions less than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     *  @param string|null $value Value to set for the minimumRequiredAppVersion property.
    */
    public function setMinimumRequiredAppVersion(?string $value ): void {
        $this->minimumRequiredAppVersion = $value;
    }

    /**
     * Sets the minimumRequiredOsVersion property value. Versions less than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     *  @param string|null $value Value to set for the minimumRequiredOsVersion property.
    */
    public function setMinimumRequiredOsVersion(?string $value ): void {
        $this->minimumRequiredOsVersion = $value;
    }

    /**
     * Sets the minimumRequiredSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     *  @param string|null $value Value to set for the minimumRequiredSdkVersion property.
    */
    public function setMinimumRequiredSdkVersion(?string $value ): void {
        $this->minimumRequiredSdkVersion = $value;
    }

    /**
     * Sets the minimumWarningAppVersion property value. Versions less than the specified version will result in warning message on the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     *  @param string|null $value Value to set for the minimumWarningAppVersion property.
    */
    public function setMinimumWarningAppVersion(?string $value ): void {
        $this->minimumWarningAppVersion = $value;
    }

    /**
     * Sets the minimumWarningOsVersion property value. Versions less than the specified version will result in warning message on the managed app from accessing company data. For example: '8.1.0' or '13.1.1'.
     *  @param string|null $value Value to set for the minimumWarningOsVersion property.
    */
    public function setMinimumWarningOsVersion(?string $value ): void {
        $this->minimumWarningOsVersion = $value;
    }

    /**
     * Sets the minimumWipeAppVersion property value. Versions less than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
     *  @param string|null $value Value to set for the minimumWipeAppVersion property.
    */
    public function setMinimumWipeAppVersion(?string $value ): void {
        $this->minimumWipeAppVersion = $value;
    }

    /**
     * Sets the minimumWipeOsVersion property value. Versions less than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
     *  @param string|null $value Value to set for the minimumWipeOsVersion property.
    */
    public function setMinimumWipeOsVersion(?string $value ): void {
        $this->minimumWipeOsVersion = $value;
    }

    /**
     * Sets the minimumWipeSdkVersion property value. Versions less than the specified version will wipe the managed app and the associated company data. For example: '8.1.0' or '13.1.1'.
     *  @param string|null $value Value to set for the minimumWipeSdkVersion property.
    */
    public function setMinimumWipeSdkVersion(?string $value ): void {
        $this->minimumWipeSdkVersion = $value;
    }

    /**
     * Sets the mobileThreatDefenseRemediationAction property value. An admin initiated action to be applied on a managed app.
     *  @param ManagedAppRemediationAction|null $value Value to set for the mobileThreatDefenseRemediationAction property.
    */
    public function setMobileThreatDefenseRemediationAction(?ManagedAppRemediationAction $value ): void {
        $this->mobileThreatDefenseRemediationAction = $value;
    }

    /**
     * Sets the periodOfflineBeforeAccessCheck property value. The period after which access is checked when the device is not connected to the internet. For example, PT5M indicates that the interval is 5 minutes in duration. A timespan value of PT0S indicates that access will be blocked immediately when the device is not connected to the internet.
     *  @param DateInterval|null $value Value to set for the periodOfflineBeforeAccessCheck property.
    */
    public function setPeriodOfflineBeforeAccessCheck(?DateInterval $value ): void {
        $this->periodOfflineBeforeAccessCheck = $value;
    }

    /**
     * Sets the periodOfflineBeforeWipeIsEnforced property value. The amount of time an app is allowed to remain disconnected from the internet before all managed data it is wiped. For example, P5D indicates that the interval is 5 days in duration. A timespan value of PT0S indicates that managed data will never be wiped when the device is not connected to the internet.
     *  @param DateInterval|null $value Value to set for the periodOfflineBeforeWipeIsEnforced property.
    */
    public function setPeriodOfflineBeforeWipeIsEnforced(?DateInterval $value ): void {
        $this->periodOfflineBeforeWipeIsEnforced = $value;
    }

    /**
     * Sets the printBlocked property value. When TRUE, indicates that printing is blocked from managed apps. When FALSE, indicates that printing is allowed from managed apps. Default value is FALSE.
     *  @param bool|null $value Value to set for the printBlocked property.
    */
    public function setPrintBlocked(?bool $value ): void {
        $this->printBlocked = $value;
    }

}
