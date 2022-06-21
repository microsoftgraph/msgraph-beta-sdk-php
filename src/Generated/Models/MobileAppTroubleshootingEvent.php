<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppTroubleshootingEvent extends DeviceManagementTroubleshootingEvent 
{
    /** @var string|null $applicationId Intune application identifier. */
    private ?string $applicationId = null;
    
    /** @var array<AppLogCollectionRequest>|null $appLogCollectionRequests The collection property of AppLogUploadRequest. */
    private ?array $appLogCollectionRequests = null;
    
    /** @var array<MobileAppTroubleshootingHistoryItem>|null $history Intune Mobile Application Troubleshooting History Item */
    private ?array $history = null;
    
    /** @var string|null $managedDeviceIdentifier Device identifier created or collected by Intune. */
    private ?string $managedDeviceIdentifier = null;
    
    /** @var string|null $userId Identifier for the user that tried to enroll the device. */
    private ?string $userId = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppTroubleshootingEvent {
        return new MobileAppTroubleshootingEvent();
    }

    /**
     * Gets the applicationId property value. Intune application identifier.
     * @return string|null
    */
    public function getApplicationId(): ?string {
        return $this->applicationId;
    }

    /**
     * Gets the appLogCollectionRequests property value. The collection property of AppLogUploadRequest.
     * @return array<AppLogCollectionRequest>|null
    */
    public function getAppLogCollectionRequests(): ?array {
        return $this->appLogCollectionRequests;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'applicationId' => function (self $o, ParseNode $n) { $o->setApplicationId($n->getStringValue()); },
            'appLogCollectionRequests' => function (self $o, ParseNode $n) { $o->setAppLogCollectionRequests($n->getCollectionOfObjectValues(AppLogCollectionRequest::class)); },
            'history' => function (self $o, ParseNode $n) { $o->setHistory($n->getCollectionOfObjectValues(MobileAppTroubleshootingHistoryItem::class)); },
            'managedDeviceIdentifier' => function (self $o, ParseNode $n) { $o->setManagedDeviceIdentifier($n->getStringValue()); },
            'userId' => function (self $o, ParseNode $n) { $o->setUserId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the history property value. Intune Mobile Application Troubleshooting History Item
     * @return array<MobileAppTroubleshootingHistoryItem>|null
    */
    public function getHistory(): ?array {
        return $this->history;
    }

    /**
     * Gets the managedDeviceIdentifier property value. Device identifier created or collected by Intune.
     * @return string|null
    */
    public function getManagedDeviceIdentifier(): ?string {
        return $this->managedDeviceIdentifier;
    }

    /**
     * Gets the userId property value. Identifier for the user that tried to enroll the device.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('applicationId', $this->applicationId);
        $writer->writeCollectionOfObjectValues('appLogCollectionRequests', $this->appLogCollectionRequests);
        $writer->writeCollectionOfObjectValues('history', $this->history);
        $writer->writeStringValue('managedDeviceIdentifier', $this->managedDeviceIdentifier);
        $writer->writeStringValue('userId', $this->userId);
    }

    /**
     * Sets the applicationId property value. Intune application identifier.
     *  @param string|null $value Value to set for the applicationId property.
    */
    public function setApplicationId(?string $value ): void {
        $this->applicationId = $value;
    }

    /**
     * Sets the appLogCollectionRequests property value. The collection property of AppLogUploadRequest.
     *  @param array<AppLogCollectionRequest>|null $value Value to set for the appLogCollectionRequests property.
    */
    public function setAppLogCollectionRequests(?array $value ): void {
        $this->appLogCollectionRequests = $value;
    }

    /**
     * Sets the history property value. Intune Mobile Application Troubleshooting History Item
     *  @param array<MobileAppTroubleshootingHistoryItem>|null $value Value to set for the history property.
    */
    public function setHistory(?array $value ): void {
        $this->history = $value;
    }

    /**
     * Sets the managedDeviceIdentifier property value. Device identifier created or collected by Intune.
     *  @param string|null $value Value to set for the managedDeviceIdentifier property.
    */
    public function setManagedDeviceIdentifier(?string $value ): void {
        $this->managedDeviceIdentifier = $value;
    }

    /**
     * Sets the userId property value. Identifier for the user that tried to enroll the device.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
