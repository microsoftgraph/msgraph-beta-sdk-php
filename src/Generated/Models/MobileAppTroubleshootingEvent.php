<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Event representing a users device application install status.
*/
class MobileAppTroubleshootingEvent extends DeviceManagementTroubleshootingEvent implements Parsable 
{
    /**
     * Instantiates a new mobileAppTroubleshootingEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppTroubleshootingEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppTroubleshootingEvent {
        return new MobileAppTroubleshootingEvent();
    }

    /**
     * Gets the applicationId property value. Intune application identifier.
     * @return string|null
    */
    public function getApplicationId(): ?string {
        $val = $this->getBackingStore()->get('applicationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationId'");
    }

    /**
     * Gets the appLogCollectionRequests property value. The collection property of AppLogUploadRequest.
     * @return array<AppLogCollectionRequest>|null
    */
    public function getAppLogCollectionRequests(): ?array {
        $val = $this->getBackingStore()->get('appLogCollectionRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppLogCollectionRequest::class);
            /** @var array<AppLogCollectionRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appLogCollectionRequests'");
    }

    /**
     * Gets the deviceId property value. Device identifier created or collected by Intune.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationId' => fn(ParseNode $n) => $o->setApplicationId($n->getStringValue()),
            'appLogCollectionRequests' => fn(ParseNode $n) => $o->setAppLogCollectionRequests($n->getCollectionOfObjectValues([AppLogCollectionRequest::class, 'createFromDiscriminatorValue'])),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'history' => fn(ParseNode $n) => $o->setHistory($n->getCollectionOfObjectValues([MobileAppTroubleshootingHistoryItem::class, 'createFromDiscriminatorValue'])),
            'managedDeviceIdentifier' => fn(ParseNode $n) => $o->setManagedDeviceIdentifier($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the history property value. Intune Mobile Application Troubleshooting History Item
     * @return array<MobileAppTroubleshootingHistoryItem>|null
    */
    public function getHistory(): ?array {
        $val = $this->getBackingStore()->get('history');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MobileAppTroubleshootingHistoryItem::class);
            /** @var array<MobileAppTroubleshootingHistoryItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'history'");
    }

    /**
     * Gets the managedDeviceIdentifier property value. Device identifier created or collected by Intune.
     * @return string|null
    */
    public function getManagedDeviceIdentifier(): ?string {
        $val = $this->getBackingStore()->get('managedDeviceIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceIdentifier'");
    }

    /**
     * Gets the userId property value. Identifier for the user that tried to enroll the device.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('applicationId', $this->getApplicationId());
        $writer->writeCollectionOfObjectValues('appLogCollectionRequests', $this->getAppLogCollectionRequests());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeCollectionOfObjectValues('history', $this->getHistory());
        $writer->writeStringValue('managedDeviceIdentifier', $this->getManagedDeviceIdentifier());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the applicationId property value. Intune application identifier.
     * @param string|null $value Value to set for the applicationId property.
    */
    public function setApplicationId(?string $value): void {
        $this->getBackingStore()->set('applicationId', $value);
    }

    /**
     * Sets the appLogCollectionRequests property value. The collection property of AppLogUploadRequest.
     * @param array<AppLogCollectionRequest>|null $value Value to set for the appLogCollectionRequests property.
    */
    public function setAppLogCollectionRequests(?array $value): void {
        $this->getBackingStore()->set('appLogCollectionRequests', $value);
    }

    /**
     * Sets the deviceId property value. Device identifier created or collected by Intune.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the history property value. Intune Mobile Application Troubleshooting History Item
     * @param array<MobileAppTroubleshootingHistoryItem>|null $value Value to set for the history property.
    */
    public function setHistory(?array $value): void {
        $this->getBackingStore()->set('history', $value);
    }

    /**
     * Sets the managedDeviceIdentifier property value. Device identifier created or collected by Intune.
     * @param string|null $value Value to set for the managedDeviceIdentifier property.
    */
    public function setManagedDeviceIdentifier(?string $value): void {
        $this->getBackingStore()->set('managedDeviceIdentifier', $value);
    }

    /**
     * Sets the userId property value. Identifier for the user that tried to enroll the device.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
