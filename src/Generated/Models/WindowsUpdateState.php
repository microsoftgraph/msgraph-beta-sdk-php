<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsUpdateState extends Entity implements Parsable 
{
    /**
     * Instantiates a new WindowsUpdateState and sets the default values.
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
        $val = $this->getBackingStore()->get('deviceDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceDisplayName'");
    }

    /**
     * Gets the deviceId property value. The id of the device.
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
     * Gets the featureUpdateVersion property value. The current feature update version of the device.
     * @return string|null
    */
    public function getFeatureUpdateVersion(): ?string {
        $val = $this->getBackingStore()->get('featureUpdateVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'featureUpdateVersion'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceDisplayName' => fn(ParseNode $n) => $o->setDeviceDisplayName($n->getStringValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'featureUpdateVersion' => fn(ParseNode $n) => $o->setFeatureUpdateVersion($n->getStringValue()),
            'lastScanDateTime' => fn(ParseNode $n) => $o->setLastScanDateTime($n->getDateTimeValue()),
            'lastSyncDateTime' => fn(ParseNode $n) => $o->setLastSyncDateTime($n->getDateTimeValue()),
            'qualityUpdateVersion' => fn(ParseNode $n) => $o->setQualityUpdateVersion($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(WindowsUpdateStatus::class)),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastScanDateTime property value. The date time that the Windows Update Agent did a successful scan.
     * @return DateTime|null
    */
    public function getLastScanDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastScanDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastScanDateTime'");
    }

    /**
     * Gets the lastSyncDateTime property value. Last date time that the device sync with with Microsoft Intune.
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
     * Gets the qualityUpdateVersion property value. The Quality Update Version of the device.
     * @return string|null
    */
    public function getQualityUpdateVersion(): ?string {
        $val = $this->getBackingStore()->get('qualityUpdateVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'qualityUpdateVersion'");
    }

    /**
     * Gets the status property value. Windows update for business configuration device states
     * @return WindowsUpdateStatus|null
    */
    public function getStatus(): ?WindowsUpdateStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof WindowsUpdateStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the userId property value. The id of the user.
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Gets the userPrincipalName property value. User principal name.
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
        $writer->writeStringValue('deviceDisplayName', $this->getDeviceDisplayName());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('featureUpdateVersion', $this->getFeatureUpdateVersion());
        $writer->writeDateTimeValue('lastScanDateTime', $this->getLastScanDateTime());
        $writer->writeDateTimeValue('lastSyncDateTime', $this->getLastSyncDateTime());
        $writer->writeStringValue('qualityUpdateVersion', $this->getQualityUpdateVersion());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the deviceDisplayName property value. Device display name.
     * @param string|null $value Value to set for the deviceDisplayName property.
    */
    public function setDeviceDisplayName(?string $value): void {
        $this->getBackingStore()->set('deviceDisplayName', $value);
    }

    /**
     * Sets the deviceId property value. The id of the device.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the featureUpdateVersion property value. The current feature update version of the device.
     * @param string|null $value Value to set for the featureUpdateVersion property.
    */
    public function setFeatureUpdateVersion(?string $value): void {
        $this->getBackingStore()->set('featureUpdateVersion', $value);
    }

    /**
     * Sets the lastScanDateTime property value. The date time that the Windows Update Agent did a successful scan.
     * @param DateTime|null $value Value to set for the lastScanDateTime property.
    */
    public function setLastScanDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastScanDateTime', $value);
    }

    /**
     * Sets the lastSyncDateTime property value. Last date time that the device sync with with Microsoft Intune.
     * @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSyncDateTime', $value);
    }

    /**
     * Sets the qualityUpdateVersion property value. The Quality Update Version of the device.
     * @param string|null $value Value to set for the qualityUpdateVersion property.
    */
    public function setQualityUpdateVersion(?string $value): void {
        $this->getBackingStore()->set('qualityUpdateVersion', $value);
    }

    /**
     * Sets the status property value. Windows update for business configuration device states
     * @param WindowsUpdateStatus|null $value Value to set for the status property.
    */
    public function setStatus(?WindowsUpdateStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the userId property value. The id of the user.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userPrincipalName property value. User principal name.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
