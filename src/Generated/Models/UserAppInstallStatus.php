<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties for the installation status for a user.
*/
class UserAppInstallStatus extends Entity implements Parsable 
{
    /**
     * Instantiates a new userAppInstallStatus and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserAppInstallStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserAppInstallStatus {
        return new UserAppInstallStatus();
    }

    /**
     * Gets the app property value. The navigation link to the mobile app.
     * @return MobileApp|null
    */
    public function getApp(): ?MobileApp {
        return $this->getBackingStore()->get('app');
    }

    /**
     * Gets the deviceStatuses property value. The install state of the app on devices.
     * @return array<MobileAppInstallStatus>|null
    */
    public function getDeviceStatuses(): ?array {
        return $this->getBackingStore()->get('deviceStatuses');
    }

    /**
     * Gets the failedDeviceCount property value. Failed Device Count.
     * @return int|null
    */
    public function getFailedDeviceCount(): ?int {
        return $this->getBackingStore()->get('failedDeviceCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'app' => fn(ParseNode $n) => $o->setApp($n->getObjectValue([MobileApp::class, 'createFromDiscriminatorValue'])),
            'deviceStatuses' => fn(ParseNode $n) => $o->setDeviceStatuses($n->getCollectionOfObjectValues([MobileAppInstallStatus::class, 'createFromDiscriminatorValue'])),
            'failedDeviceCount' => fn(ParseNode $n) => $o->setFailedDeviceCount($n->getIntegerValue()),
            'installedDeviceCount' => fn(ParseNode $n) => $o->setInstalledDeviceCount($n->getIntegerValue()),
            'notInstalledDeviceCount' => fn(ParseNode $n) => $o->setNotInstalledDeviceCount($n->getIntegerValue()),
            'userName' => fn(ParseNode $n) => $o->setUserName($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the installedDeviceCount property value. Installed Device Count.
     * @return int|null
    */
    public function getInstalledDeviceCount(): ?int {
        return $this->getBackingStore()->get('installedDeviceCount');
    }

    /**
     * Gets the notInstalledDeviceCount property value. Not installed device count.
     * @return int|null
    */
    public function getNotInstalledDeviceCount(): ?int {
        return $this->getBackingStore()->get('notInstalledDeviceCount');
    }

    /**
     * Gets the userName property value. User name.
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->getBackingStore()->get('userName');
    }

    /**
     * Gets the userPrincipalName property value. User Principal Name.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('app', $this->getApp());
        $writer->writeCollectionOfObjectValues('deviceStatuses', $this->getDeviceStatuses());
        $writer->writeIntegerValue('failedDeviceCount', $this->getFailedDeviceCount());
        $writer->writeIntegerValue('installedDeviceCount', $this->getInstalledDeviceCount());
        $writer->writeIntegerValue('notInstalledDeviceCount', $this->getNotInstalledDeviceCount());
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
     * Sets the deviceStatuses property value. The install state of the app on devices.
     * @param array<MobileAppInstallStatus>|null $value Value to set for the deviceStatuses property.
    */
    public function setDeviceStatuses(?array $value): void {
        $this->getBackingStore()->set('deviceStatuses', $value);
    }

    /**
     * Sets the failedDeviceCount property value. Failed Device Count.
     * @param int|null $value Value to set for the failedDeviceCount property.
    */
    public function setFailedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('failedDeviceCount', $value);
    }

    /**
     * Sets the installedDeviceCount property value. Installed Device Count.
     * @param int|null $value Value to set for the installedDeviceCount property.
    */
    public function setInstalledDeviceCount(?int $value): void {
        $this->getBackingStore()->set('installedDeviceCount', $value);
    }

    /**
     * Sets the notInstalledDeviceCount property value. Not installed device count.
     * @param int|null $value Value to set for the notInstalledDeviceCount property.
    */
    public function setNotInstalledDeviceCount(?int $value): void {
        $this->getBackingStore()->set('notInstalledDeviceCount', $value);
    }

    /**
     * Sets the userName property value. User name.
     * @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value): void {
        $this->getBackingStore()->set('userName', $value);
    }

    /**
     * Sets the userPrincipalName property value. User Principal Name.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
