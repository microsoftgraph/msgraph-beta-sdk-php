<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppInstallStatus extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var MobileApp|null $app The navigation link to the mobile app.
    */
    private ?MobileApp $app = null;
    
    /**
     * @var string|null $deviceId Device ID
    */
    private ?string $deviceId = null;
    
    /**
     * @var string|null $deviceName Device name
    */
    private ?string $deviceName = null;
    
    /**
     * @var string|null $displayVersion Human readable version of the application
    */
    private ?string $displayVersion = null;
    
    /**
     * @var int|null $errorCode The error code for install or uninstall failures.
    */
    private ?int $errorCode = null;
    
    /**
     * @var ResultantAppState|null $installState The install state of the app. Possible values are: installed, failed, notInstalled, uninstallFailed, pendingInstall, unknown, notApplicable.
    */
    private ?ResultantAppState $installState = null;
    
    /**
     * @var ResultantAppStateDetail|null $installStateDetail The install state detail of the app. Possible values are: noAdditionalDetails, dependencyFailedToInstall, dependencyWithRequirementsNotMet, dependencyPendingReboot, dependencyWithAutoInstallDisabled, supersededAppUninstallFailed, supersededAppUninstallPendingReboot, removingSupersededApps, iosAppStoreUpdateFailedToInstall, vppAppHasUpdateAvailable, userRejectedUpdate, uninstallPendingReboot, supersedingAppsDetected, supersededAppsDetected, seeInstallErrorCode, autoInstallDisabled, managedAppNoLongerPresent, userRejectedInstall, userIsNotLoggedIntoAppStore, untargetedSupersedingAppsDetected, appRemovedBySupersedence, seeUninstallErrorCode, pendingReboot, installingDependencies, contentDownloaded, supersedingAppsNotApplicable, powerShellScriptRequirementNotMet, registryRequirementNotMet, fileSystemRequirementNotMet, platformNotApplicable, minimumCpuSpeedNotMet, minimumLogicalProcessorCountNotMet, minimumPhysicalMemoryNotMet, minimumOsVersionNotMet, minimumDiskSpaceNotMet, processorArchitectureNotApplicable.
    */
    private ?ResultantAppStateDetail $installStateDetail = null;
    
    /**
     * @var DateTime|null $lastSyncDateTime Last sync date time
    */
    private ?DateTime $lastSyncDateTime = null;
    
    /**
     * @var ResultantAppState|null $mobileAppInstallStatusValue The install state of the app. Possible values are: installed, failed, notInstalled, uninstallFailed, pendingInstall, unknown, notApplicable.
    */
    private ?ResultantAppState $mobileAppInstallStatusValue = null;
    
    /**
     * @var string|null $osDescription OS Description
    */
    private ?string $osDescription = null;
    
    /**
     * @var string|null $osVersion OS Version
    */
    private ?string $osVersion = null;
    
    /**
     * @var string|null $userName Device User Name
    */
    private ?string $userName = null;
    
    /**
     * @var string|null $userPrincipalName User Principal Name
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new mobileAppInstallStatus and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppInstallStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppInstallStatus {
        return new MobileAppInstallStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the app property value. The navigation link to the mobile app.
     * @return MobileApp|null
    */
    public function getApp(): ?MobileApp {
        return $this->app;
    }

    /**
     * Gets the deviceId property value. Device ID
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the deviceName property value. Device name
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * Gets the displayVersion property value. Human readable version of the application
     * @return string|null
    */
    public function getDisplayVersion(): ?string {
        return $this->displayVersion;
    }

    /**
     * Gets the errorCode property value. The error code for install or uninstall failures.
     * @return int|null
    */
    public function getErrorCode(): ?int {
        return $this->errorCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'app' => function (ParseNode $n) use ($o) { $o->setApp($n->getObjectValue(array(MobileApp::class, 'createFromDiscriminatorValue'))); },
            'deviceId' => function (ParseNode $n) use ($o) { $o->setDeviceId($n->getStringValue()); },
            'deviceName' => function (ParseNode $n) use ($o) { $o->setDeviceName($n->getStringValue()); },
            'displayVersion' => function (ParseNode $n) use ($o) { $o->setDisplayVersion($n->getStringValue()); },
            'errorCode' => function (ParseNode $n) use ($o) { $o->setErrorCode($n->getIntegerValue()); },
            'installState' => function (ParseNode $n) use ($o) { $o->setInstallState($n->getEnumValue(ResultantAppState::class)); },
            'installStateDetail' => function (ParseNode $n) use ($o) { $o->setInstallStateDetail($n->getEnumValue(ResultantAppStateDetail::class)); },
            'lastSyncDateTime' => function (ParseNode $n) use ($o) { $o->setLastSyncDateTime($n->getDateTimeValue()); },
            'mobileAppInstallStatusValue' => function (ParseNode $n) use ($o) { $o->setMobileAppInstallStatusValue($n->getEnumValue(ResultantAppState::class)); },
            'osDescription' => function (ParseNode $n) use ($o) { $o->setOsDescription($n->getStringValue()); },
            'osVersion' => function (ParseNode $n) use ($o) { $o->setOsVersion($n->getStringValue()); },
            'userName' => function (ParseNode $n) use ($o) { $o->setUserName($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the installState property value. The install state of the app. Possible values are: installed, failed, notInstalled, uninstallFailed, pendingInstall, unknown, notApplicable.
     * @return ResultantAppState|null
    */
    public function getInstallState(): ?ResultantAppState {
        return $this->installState;
    }

    /**
     * Gets the installStateDetail property value. The install state detail of the app. Possible values are: noAdditionalDetails, dependencyFailedToInstall, dependencyWithRequirementsNotMet, dependencyPendingReboot, dependencyWithAutoInstallDisabled, supersededAppUninstallFailed, supersededAppUninstallPendingReboot, removingSupersededApps, iosAppStoreUpdateFailedToInstall, vppAppHasUpdateAvailable, userRejectedUpdate, uninstallPendingReboot, supersedingAppsDetected, supersededAppsDetected, seeInstallErrorCode, autoInstallDisabled, managedAppNoLongerPresent, userRejectedInstall, userIsNotLoggedIntoAppStore, untargetedSupersedingAppsDetected, appRemovedBySupersedence, seeUninstallErrorCode, pendingReboot, installingDependencies, contentDownloaded, supersedingAppsNotApplicable, powerShellScriptRequirementNotMet, registryRequirementNotMet, fileSystemRequirementNotMet, platformNotApplicable, minimumCpuSpeedNotMet, minimumLogicalProcessorCountNotMet, minimumPhysicalMemoryNotMet, minimumOsVersionNotMet, minimumDiskSpaceNotMet, processorArchitectureNotApplicable.
     * @return ResultantAppStateDetail|null
    */
    public function getInstallStateDetail(): ?ResultantAppStateDetail {
        return $this->installStateDetail;
    }

    /**
     * Gets the lastSyncDateTime property value. Last sync date time
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        return $this->lastSyncDateTime;
    }

    /**
     * Gets the mobileAppInstallStatusValue property value. The install state of the app. Possible values are: installed, failed, notInstalled, uninstallFailed, pendingInstall, unknown, notApplicable.
     * @return ResultantAppState|null
    */
    public function getMobileAppInstallStatusValue(): ?ResultantAppState {
        return $this->mobileAppInstallStatusValue;
    }

    /**
     * Gets the osDescription property value. OS Description
     * @return string|null
    */
    public function getOsDescription(): ?string {
        return $this->osDescription;
    }

    /**
     * Gets the osVersion property value. OS Version
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->osVersion;
    }

    /**
     * Gets the userName property value. Device User Name
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->userName;
    }

    /**
     * Gets the userPrincipalName property value. User Principal Name
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('app', $this->app);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeStringValue('displayVersion', $this->displayVersion);
        $writer->writeIntegerValue('errorCode', $this->errorCode);
        $writer->writeEnumValue('installState', $this->installState);
        $writer->writeEnumValue('installStateDetail', $this->installStateDetail);
        $writer->writeDateTimeValue('lastSyncDateTime', $this->lastSyncDateTime);
        $writer->writeEnumValue('mobileAppInstallStatusValue', $this->mobileAppInstallStatusValue);
        $writer->writeStringValue('osDescription', $this->osDescription);
        $writer->writeStringValue('osVersion', $this->osVersion);
        $writer->writeStringValue('userName', $this->userName);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the app property value. The navigation link to the mobile app.
     *  @param MobileApp|null $value Value to set for the app property.
    */
    public function setApp(?MobileApp $value ): void {
        $this->app = $value;
    }

    /**
     * Sets the deviceId property value. Device ID
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the deviceName property value. Device name
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the displayVersion property value. Human readable version of the application
     *  @param string|null $value Value to set for the displayVersion property.
    */
    public function setDisplayVersion(?string $value ): void {
        $this->displayVersion = $value;
    }

    /**
     * Sets the errorCode property value. The error code for install or uninstall failures.
     *  @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value ): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the installState property value. The install state of the app. Possible values are: installed, failed, notInstalled, uninstallFailed, pendingInstall, unknown, notApplicable.
     *  @param ResultantAppState|null $value Value to set for the installState property.
    */
    public function setInstallState(?ResultantAppState $value ): void {
        $this->installState = $value;
    }

    /**
     * Sets the installStateDetail property value. The install state detail of the app. Possible values are: noAdditionalDetails, dependencyFailedToInstall, dependencyWithRequirementsNotMet, dependencyPendingReboot, dependencyWithAutoInstallDisabled, supersededAppUninstallFailed, supersededAppUninstallPendingReboot, removingSupersededApps, iosAppStoreUpdateFailedToInstall, vppAppHasUpdateAvailable, userRejectedUpdate, uninstallPendingReboot, supersedingAppsDetected, supersededAppsDetected, seeInstallErrorCode, autoInstallDisabled, managedAppNoLongerPresent, userRejectedInstall, userIsNotLoggedIntoAppStore, untargetedSupersedingAppsDetected, appRemovedBySupersedence, seeUninstallErrorCode, pendingReboot, installingDependencies, contentDownloaded, supersedingAppsNotApplicable, powerShellScriptRequirementNotMet, registryRequirementNotMet, fileSystemRequirementNotMet, platformNotApplicable, minimumCpuSpeedNotMet, minimumLogicalProcessorCountNotMet, minimumPhysicalMemoryNotMet, minimumOsVersionNotMet, minimumDiskSpaceNotMet, processorArchitectureNotApplicable.
     *  @param ResultantAppStateDetail|null $value Value to set for the installStateDetail property.
    */
    public function setInstallStateDetail(?ResultantAppStateDetail $value ): void {
        $this->installStateDetail = $value;
    }

    /**
     * Sets the lastSyncDateTime property value. Last sync date time
     *  @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value ): void {
        $this->lastSyncDateTime = $value;
    }

    /**
     * Sets the mobileAppInstallStatusValue property value. The install state of the app. Possible values are: installed, failed, notInstalled, uninstallFailed, pendingInstall, unknown, notApplicable.
     *  @param ResultantAppState|null $value Value to set for the mobileAppInstallStatusValue property.
    */
    public function setMobileAppInstallStatusValue(?ResultantAppState $value ): void {
        $this->mobileAppInstallStatusValue = $value;
    }

    /**
     * Sets the osDescription property value. OS Description
     *  @param string|null $value Value to set for the osDescription property.
    */
    public function setOsDescription(?string $value ): void {
        $this->osDescription = $value;
    }

    /**
     * Sets the osVersion property value. OS Version
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value ): void {
        $this->osVersion = $value;
    }

    /**
     * Sets the userName property value. Device User Name
     *  @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value ): void {
        $this->userName = $value;
    }

    /**
     * Sets the userPrincipalName property value. User Principal Name
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
