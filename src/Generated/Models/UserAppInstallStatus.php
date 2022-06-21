<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserAppInstallStatus extends Entity 
{
    /** @var MobileApp|null $app The navigation link to the mobile app. */
    private ?MobileApp $app = null;
    
    /** @var array<MobileAppInstallStatus>|null $deviceStatuses The install state of the app on devices. */
    private ?array $deviceStatuses = null;
    
    /** @var int|null $failedDeviceCount Failed Device Count. */
    private ?int $failedDeviceCount = null;
    
    /** @var int|null $installedDeviceCount Installed Device Count. */
    private ?int $installedDeviceCount = null;
    
    /** @var int|null $notInstalledDeviceCount Not installed device count. */
    private ?int $notInstalledDeviceCount = null;
    
    /** @var string|null $userName User name. */
    private ?string $userName = null;
    
    /** @var string|null $userPrincipalName User Principal Name. */
    private ?string $userPrincipalName = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): UserAppInstallStatus {
        return new UserAppInstallStatus();
    }

    /**
     * Gets the app property value. The navigation link to the mobile app.
     * @return MobileApp|null
    */
    public function getApp(): ?MobileApp {
        return $this->app;
    }

    /**
     * Gets the deviceStatuses property value. The install state of the app on devices.
     * @return array<MobileAppInstallStatus>|null
    */
    public function getDeviceStatuses(): ?array {
        return $this->deviceStatuses;
    }

    /**
     * Gets the failedDeviceCount property value. Failed Device Count.
     * @return int|null
    */
    public function getFailedDeviceCount(): ?int {
        return $this->failedDeviceCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'app' => function (self $o, ParseNode $n) { $o->setApp($n->getObjectValue(MobileApp::class)); },
            'deviceStatuses' => function (self $o, ParseNode $n) { $o->setDeviceStatuses($n->getCollectionOfObjectValues(MobileAppInstallStatus::class)); },
            'failedDeviceCount' => function (self $o, ParseNode $n) { $o->setFailedDeviceCount($n->getIntegerValue()); },
            'installedDeviceCount' => function (self $o, ParseNode $n) { $o->setInstalledDeviceCount($n->getIntegerValue()); },
            'notInstalledDeviceCount' => function (self $o, ParseNode $n) { $o->setNotInstalledDeviceCount($n->getIntegerValue()); },
            'userName' => function (self $o, ParseNode $n) { $o->setUserName($n->getStringValue()); },
            'userPrincipalName' => function (self $o, ParseNode $n) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the installedDeviceCount property value. Installed Device Count.
     * @return int|null
    */
    public function getInstalledDeviceCount(): ?int {
        return $this->installedDeviceCount;
    }

    /**
     * Gets the notInstalledDeviceCount property value. Not installed device count.
     * @return int|null
    */
    public function getNotInstalledDeviceCount(): ?int {
        return $this->notInstalledDeviceCount;
    }

    /**
     * Gets the userName property value. User name.
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->userName;
    }

    /**
     * Gets the userPrincipalName property value. User Principal Name.
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
        $writer->writeCollectionOfObjectValues('deviceStatuses', $this->deviceStatuses);
        $writer->writeIntegerValue('failedDeviceCount', $this->failedDeviceCount);
        $writer->writeIntegerValue('installedDeviceCount', $this->installedDeviceCount);
        $writer->writeIntegerValue('notInstalledDeviceCount', $this->notInstalledDeviceCount);
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
     * Sets the deviceStatuses property value. The install state of the app on devices.
     *  @param array<MobileAppInstallStatus>|null $value Value to set for the deviceStatuses property.
    */
    public function setDeviceStatuses(?array $value ): void {
        $this->deviceStatuses = $value;
    }

    /**
     * Sets the failedDeviceCount property value. Failed Device Count.
     *  @param int|null $value Value to set for the failedDeviceCount property.
    */
    public function setFailedDeviceCount(?int $value ): void {
        $this->failedDeviceCount = $value;
    }

    /**
     * Sets the installedDeviceCount property value. Installed Device Count.
     *  @param int|null $value Value to set for the installedDeviceCount property.
    */
    public function setInstalledDeviceCount(?int $value ): void {
        $this->installedDeviceCount = $value;
    }

    /**
     * Sets the notInstalledDeviceCount property value. Not installed device count.
     *  @param int|null $value Value to set for the notInstalledDeviceCount property.
    */
    public function setNotInstalledDeviceCount(?int $value ): void {
        $this->notInstalledDeviceCount = $value;
    }

    /**
     * Sets the userName property value. User name.
     *  @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value ): void {
        $this->userName = $value;
    }

    /**
     * Sets the userPrincipalName property value. User Principal Name.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
