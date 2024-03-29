<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties for the installation state of a mobile app for a device. This will be deprecated starting May, 2023 (Intune Release 2305).
*/
class MobileAppInstallStatus extends Entity implements Parsable 
{
    /**
     * Instantiates a new MobileAppInstallStatus and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('app');
        if (is_null($val) || $val instanceof MobileApp) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'app'");
    }

    /**
     * Gets the deviceId property value. Device ID
     * @return string|null
    */
    public function getDeviceId(): ?string {
        $val = $this->getBackingStore()->get('deviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceId'");
    }

    /**
     * Gets the deviceName property value. Device name
     * @return string|null
    */
    public function getDeviceName(): ?string {
        $val = $this->getBackingStore()->get('deviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceName'");
    }

    /**
     * Gets the displayVersion property value. Human readable version of the application
     * @return string|null
    */
    public function getDisplayVersion(): ?string {
        $val = $this->getBackingStore()->get('displayVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayVersion'");
    }

    /**
     * Gets the errorCode property value. The error code for install or uninstall failures.
     * @return int|null
    */
    public function getErrorCode(): ?int {
        $val = $this->getBackingStore()->get('errorCode');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorCode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'app' => fn(ParseNode $n) => $o->setApp($n->getObjectValue([MobileApp::class, 'createFromDiscriminatorValue'])),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'displayVersion' => fn(ParseNode $n) => $o->setDisplayVersion($n->getStringValue()),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getIntegerValue()),
            'installState' => fn(ParseNode $n) => $o->setInstallState($n->getEnumValue(ResultantAppState::class)),
            'installStateDetail' => fn(ParseNode $n) => $o->setInstallStateDetail($n->getEnumValue(ResultantAppStateDetail::class)),
            'lastSyncDateTime' => fn(ParseNode $n) => $o->setLastSyncDateTime($n->getDateTimeValue()),
            'mobileAppInstallStatusValue' => fn(ParseNode $n) => $o->setMobileAppInstallStatusValue($n->getEnumValue(ResultantAppState::class)),
            'osDescription' => fn(ParseNode $n) => $o->setOsDescription($n->getStringValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
            'userName' => fn(ParseNode $n) => $o->setUserName($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the installState property value. A list of possible states for application status on an individual device. When devices contact the Intune service and find targeted application enforcement intent, the status of the enforcement is recorded and becomes accessible in the Graph API. Since the application status is identified during device interaction with the Intune service, status records do not immediately appear upon application group assignment; it is created only after the assignment is evaluated in the service and devices start receiving the policy during check-ins.
     * @return ResultantAppState|null
    */
    public function getInstallState(): ?ResultantAppState {
        $val = $this->getBackingStore()->get('installState');
        if (is_null($val) || $val instanceof ResultantAppState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installState'");
    }

    /**
     * Gets the installStateDetail property value. Enum indicating additional details regarding why an application has a particular install state.
     * @return ResultantAppStateDetail|null
    */
    public function getInstallStateDetail(): ?ResultantAppStateDetail {
        $val = $this->getBackingStore()->get('installStateDetail');
        if (is_null($val) || $val instanceof ResultantAppStateDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installStateDetail'");
    }

    /**
     * Gets the lastSyncDateTime property value. Last sync date time
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSyncDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSyncDateTime'");
    }

    /**
     * Gets the mobileAppInstallStatusValue property value. A list of possible states for application status on an individual device. When devices contact the Intune service and find targeted application enforcement intent, the status of the enforcement is recorded and becomes accessible in the Graph API. Since the application status is identified during device interaction with the Intune service, status records do not immediately appear upon application group assignment; it is created only after the assignment is evaluated in the service and devices start receiving the policy during check-ins.
     * @return ResultantAppState|null
    */
    public function getMobileAppInstallStatusValue(): ?ResultantAppState {
        $val = $this->getBackingStore()->get('mobileAppInstallStatusValue');
        if (is_null($val) || $val instanceof ResultantAppState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobileAppInstallStatusValue'");
    }

    /**
     * Gets the osDescription property value. OS Description
     * @return string|null
    */
    public function getOsDescription(): ?string {
        $val = $this->getBackingStore()->get('osDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osDescription'");
    }

    /**
     * Gets the osVersion property value. OS Version
     * @return string|null
    */
    public function getOsVersion(): ?string {
        $val = $this->getBackingStore()->get('osVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osVersion'");
    }

    /**
     * Gets the userName property value. Device User Name
     * @return string|null
    */
    public function getUserName(): ?string {
        $val = $this->getBackingStore()->get('userName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userName'");
    }

    /**
     * Gets the userPrincipalName property value. User Principal Name
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('app', $this->getApp());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('displayVersion', $this->getDisplayVersion());
        $writer->writeIntegerValue('errorCode', $this->getErrorCode());
        $writer->writeEnumValue('installState', $this->getInstallState());
        $writer->writeEnumValue('installStateDetail', $this->getInstallStateDetail());
        $writer->writeDateTimeValue('lastSyncDateTime', $this->getLastSyncDateTime());
        $writer->writeEnumValue('mobileAppInstallStatusValue', $this->getMobileAppInstallStatusValue());
        $writer->writeStringValue('osDescription', $this->getOsDescription());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
        $writer->writeStringValue('userName', $this->getUserName());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the app property value. The navigation link to the mobile app.
     * @param MobileApp|null $value Value to set for the app property.
    */
    public function setApp(?MobileApp $value): void {
        $this->getBackingStore()->set('app', $value);
    }

    /**
     * Sets the deviceId property value. Device ID
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceName property value. Device name
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the displayVersion property value. Human readable version of the application
     * @param string|null $value Value to set for the displayVersion property.
    */
    public function setDisplayVersion(?string $value): void {
        $this->getBackingStore()->set('displayVersion', $value);
    }

    /**
     * Sets the errorCode property value. The error code for install or uninstall failures.
     * @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value): void {
        $this->getBackingStore()->set('errorCode', $value);
    }

    /**
     * Sets the installState property value. A list of possible states for application status on an individual device. When devices contact the Intune service and find targeted application enforcement intent, the status of the enforcement is recorded and becomes accessible in the Graph API. Since the application status is identified during device interaction with the Intune service, status records do not immediately appear upon application group assignment; it is created only after the assignment is evaluated in the service and devices start receiving the policy during check-ins.
     * @param ResultantAppState|null $value Value to set for the installState property.
    */
    public function setInstallState(?ResultantAppState $value): void {
        $this->getBackingStore()->set('installState', $value);
    }

    /**
     * Sets the installStateDetail property value. Enum indicating additional details regarding why an application has a particular install state.
     * @param ResultantAppStateDetail|null $value Value to set for the installStateDetail property.
    */
    public function setInstallStateDetail(?ResultantAppStateDetail $value): void {
        $this->getBackingStore()->set('installStateDetail', $value);
    }

    /**
     * Sets the lastSyncDateTime property value. Last sync date time
     * @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSyncDateTime', $value);
    }

    /**
     * Sets the mobileAppInstallStatusValue property value. A list of possible states for application status on an individual device. When devices contact the Intune service and find targeted application enforcement intent, the status of the enforcement is recorded and becomes accessible in the Graph API. Since the application status is identified during device interaction with the Intune service, status records do not immediately appear upon application group assignment; it is created only after the assignment is evaluated in the service and devices start receiving the policy during check-ins.
     * @param ResultantAppState|null $value Value to set for the mobileAppInstallStatusValue property.
    */
    public function setMobileAppInstallStatusValue(?ResultantAppState $value): void {
        $this->getBackingStore()->set('mobileAppInstallStatusValue', $value);
    }

    /**
     * Sets the osDescription property value. OS Description
     * @param string|null $value Value to set for the osDescription property.
    */
    public function setOsDescription(?string $value): void {
        $this->getBackingStore()->set('osDescription', $value);
    }

    /**
     * Sets the osVersion property value. OS Version
     * @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the userName property value. Device User Name
     * @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value): void {
        $this->getBackingStore()->set('userName', $value);
    }

    /**
     * Sets the userPrincipalName property value. User Principal Name
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
