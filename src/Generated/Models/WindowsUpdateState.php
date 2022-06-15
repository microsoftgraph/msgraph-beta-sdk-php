<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsUpdateState extends Entity implements Parsable 
{
    /**
     * @var string|null $deviceDisplayName Device display name.
    */
    private ?string $deviceDisplayName = null;
    
    /**
     * @var string|null $deviceId The id of the device.
    */
    private ?string $deviceId = null;
    
    /**
     * @var string|null $featureUpdateVersion The current feature update version of the device.
    */
    private ?string $featureUpdateVersion = null;
    
    /**
     * @var DateTime|null $lastScanDateTime The date time that the Windows Update Agent did a successful scan.
    */
    private ?DateTime $lastScanDateTime = null;
    
    /**
     * @var DateTime|null $lastSyncDateTime Last date time that the device sync with with Microsoft Intune.
    */
    private ?DateTime $lastSyncDateTime = null;
    
    /**
     * @var string|null $qualityUpdateVersion The Quality Update Version of the device.
    */
    private ?string $qualityUpdateVersion = null;
    
    /**
     * @var WindowsUpdateStatus|null $status Windows udpate status. Possible values are: upToDate, pendingInstallation, pendingReboot, failed.
    */
    private ?WindowsUpdateStatus $status = null;
    
    /**
     * @var string|null $userId The id of the user.
    */
    private ?string $userId = null;
    
    /**
     * @var string|null $userPrincipalName User principal name.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new windowsUpdateState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsUpdateState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsUpdateState {
        return new WindowsUpdateState();
    }

    /**
     * Gets the deviceDisplayName property value. Device display name.
     * @return string|null
    */
    public function getDeviceDisplayName(): ?string {
        return $this->deviceDisplayName;
    }

    /**
     * Gets the deviceId property value. The id of the device.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the featureUpdateVersion property value. The current feature update version of the device.
     * @return string|null
    */
    public function getFeatureUpdateVersion(): ?string {
        return $this->featureUpdateVersion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceDisplayName' => function (ParseNode $n) use ($o) { $o->setDeviceDisplayName($n->getStringValue()); },
            'deviceId' => function (ParseNode $n) use ($o) { $o->setDeviceId($n->getStringValue()); },
            'featureUpdateVersion' => function (ParseNode $n) use ($o) { $o->setFeatureUpdateVersion($n->getStringValue()); },
            'lastScanDateTime' => function (ParseNode $n) use ($o) { $o->setLastScanDateTime($n->getDateTimeValue()); },
            'lastSyncDateTime' => function (ParseNode $n) use ($o) { $o->setLastSyncDateTime($n->getDateTimeValue()); },
            'qualityUpdateVersion' => function (ParseNode $n) use ($o) { $o->setQualityUpdateVersion($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(WindowsUpdateStatus::class)); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastScanDateTime property value. The date time that the Windows Update Agent did a successful scan.
     * @return DateTime|null
    */
    public function getLastScanDateTime(): ?DateTime {
        return $this->lastScanDateTime;
    }

    /**
     * Gets the lastSyncDateTime property value. Last date time that the device sync with with Microsoft Intune.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        return $this->lastSyncDateTime;
    }

    /**
     * Gets the qualityUpdateVersion property value. The Quality Update Version of the device.
     * @return string|null
    */
    public function getQualityUpdateVersion(): ?string {
        return $this->qualityUpdateVersion;
    }

    /**
     * Gets the status property value. Windows udpate status. Possible values are: upToDate, pendingInstallation, pendingReboot, failed.
     * @return WindowsUpdateStatus|null
    */
    public function getStatus(): ?WindowsUpdateStatus {
        return $this->status;
    }

    /**
     * Gets the userId property value. The id of the user.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userPrincipalName property value. User principal name.
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
        $writer->writeStringValue('deviceDisplayName', $this->deviceDisplayName);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('featureUpdateVersion', $this->featureUpdateVersion);
        $writer->writeDateTimeValue('lastScanDateTime', $this->lastScanDateTime);
        $writer->writeDateTimeValue('lastSyncDateTime', $this->lastSyncDateTime);
        $writer->writeStringValue('qualityUpdateVersion', $this->qualityUpdateVersion);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the deviceDisplayName property value. Device display name.
     *  @param string|null $value Value to set for the deviceDisplayName property.
    */
    public function setDeviceDisplayName(?string $value ): void {
        $this->deviceDisplayName = $value;
    }

    /**
     * Sets the deviceId property value. The id of the device.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the featureUpdateVersion property value. The current feature update version of the device.
     *  @param string|null $value Value to set for the featureUpdateVersion property.
    */
    public function setFeatureUpdateVersion(?string $value ): void {
        $this->featureUpdateVersion = $value;
    }

    /**
     * Sets the lastScanDateTime property value. The date time that the Windows Update Agent did a successful scan.
     *  @param DateTime|null $value Value to set for the lastScanDateTime property.
    */
    public function setLastScanDateTime(?DateTime $value ): void {
        $this->lastScanDateTime = $value;
    }

    /**
     * Sets the lastSyncDateTime property value. Last date time that the device sync with with Microsoft Intune.
     *  @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value ): void {
        $this->lastSyncDateTime = $value;
    }

    /**
     * Sets the qualityUpdateVersion property value. The Quality Update Version of the device.
     *  @param string|null $value Value to set for the qualityUpdateVersion property.
    */
    public function setQualityUpdateVersion(?string $value ): void {
        $this->qualityUpdateVersion = $value;
    }

    /**
     * Sets the status property value. Windows udpate status. Possible values are: upToDate, pendingInstallation, pendingReboot, failed.
     *  @param WindowsUpdateStatus|null $value Value to set for the status property.
    */
    public function setStatus(?WindowsUpdateStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the userId property value. The id of the user.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the userPrincipalName property value. User principal name.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
