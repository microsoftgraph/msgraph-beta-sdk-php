<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppInstallStatus extends Entity implements Parsable 
{
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
     * @var ResultantAppState|null $installState A list of possible states for application status on an individual device. When devices contact the Intune service and find targeted application enforcement intent, the status of the enforcement is recorded and becomes accessible in the Graph API. Since the application status is identified during device interaction with the Intune service, status records do not immediately appear upon application group assignment; it is created only after the assignment is evaluated in the service and devices start receiving the policy during check-ins.
    */
    private ?ResultantAppState $installState = null;
    
    /**
     * @var ResultantAppStateDetail|null $installStateDetail Enum indicating additional details regarding why an application has a particular install state.
    */
    private ?ResultantAppStateDetail $installStateDetail = null;
    
    /**
     * @var DateTime|null $lastSyncDateTime Last sync date time
    */
    private ?DateTime $lastSyncDateTime = null;
    
    /**
     * @var ResultantAppState|null $mobileAppInstallStatusValue A list of possible states for application status on an individual device. When devices contact the Intune service and find targeted application enforcement intent, the status of the enforcement is recorded and becomes accessible in the Graph API. Since the application status is identified during device interaction with the Intune service, status records do not immediately appear upon application group assignment; it is created only after the assignment is evaluated in the service and devices start receiving the policy during check-ins.
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
        $this->setOdataType('#microsoft.graph.mobileAppInstallStatus');
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
     * Gets the installState property value. A list of possible states for application status on an individual device. When devices contact the Intune service and find targeted application enforcement intent, the status of the enforcement is recorded and becomes accessible in the Graph API. Since the application status is identified during device interaction with the Intune service, status records do not immediately appear upon application group assignment; it is created only after the assignment is evaluated in the service and devices start receiving the policy during check-ins.
     * @return ResultantAppState|null
    */
    public function getInstallState(): ?ResultantAppState {
        return $this->installState;
    }

    /**
     * Gets the installStateDetail property value. Enum indicating additional details regarding why an application has a particular install state.
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
     * Gets the mobileAppInstallStatusValue property value. A list of possible states for application status on an individual device. When devices contact the Intune service and find targeted application enforcement intent, the status of the enforcement is recorded and becomes accessible in the Graph API. Since the application status is identified during device interaction with the Intune service, status records do not immediately appear upon application group assignment; it is created only after the assignment is evaluated in the service and devices start receiving the policy during check-ins.
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
     * Sets the installState property value. A list of possible states for application status on an individual device. When devices contact the Intune service and find targeted application enforcement intent, the status of the enforcement is recorded and becomes accessible in the Graph API. Since the application status is identified during device interaction with the Intune service, status records do not immediately appear upon application group assignment; it is created only after the assignment is evaluated in the service and devices start receiving the policy during check-ins.
     *  @param ResultantAppState|null $value Value to set for the installState property.
    */
    public function setInstallState(?ResultantAppState $value ): void {
        $this->installState = $value;
    }

    /**
     * Sets the installStateDetail property value. Enum indicating additional details regarding why an application has a particular install state.
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
     * Sets the mobileAppInstallStatusValue property value. A list of possible states for application status on an individual device. When devices contact the Intune service and find targeted application enforcement intent, the status of the enforcement is recorded and becomes accessible in the Graph API. Since the application status is identified during device interaction with the Intune service, status records do not immediately appear upon application group assignment; it is created only after the assignment is evaluated in the service and devices start receiving the policy during check-ins.
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
