<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Win32LobAppAssignmentSettings extends MobileAppAssignmentSettings implements Parsable 
{
    /**
     * @var Win32LobAppDeliveryOptimizationPriority|null $deliveryOptimizationPriority The delivery optimization priority for this app assignment. This setting is not supported in National Cloud environments. Possible values are: notConfigured, foreground.
    */
    private ?Win32LobAppDeliveryOptimizationPriority $deliveryOptimizationPriority = null;
    
    /**
     * @var MobileAppInstallTimeSettings|null $installTimeSettings The install time settings to apply for this app assignment.
    */
    private ?MobileAppInstallTimeSettings $installTimeSettings = null;
    
    /**
     * @var Win32LobAppNotification|null $notifications The notification status for this app assignment. Possible values are: showAll, showReboot, hideAll.
    */
    private ?Win32LobAppNotification $notifications = null;
    
    /**
     * @var Win32LobAppRestartSettings|null $restartSettings The reboot settings to apply for this app assignment.
    */
    private ?Win32LobAppRestartSettings $restartSettings = null;
    
    /**
     * Instantiates a new Win32LobAppAssignmentSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppAssignmentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppAssignmentSettings {
        return new Win32LobAppAssignmentSettings();
    }

    /**
     * Gets the deliveryOptimizationPriority property value. The delivery optimization priority for this app assignment. This setting is not supported in National Cloud environments. Possible values are: notConfigured, foreground.
     * @return Win32LobAppDeliveryOptimizationPriority|null
    */
    public function getDeliveryOptimizationPriority(): ?Win32LobAppDeliveryOptimizationPriority {
        return $this->deliveryOptimizationPriority;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deliveryOptimizationPriority' => function (ParseNode $n) use ($o) { $o->setDeliveryOptimizationPriority($n->getEnumValue(Win32LobAppDeliveryOptimizationPriority::class)); },
            'installTimeSettings' => function (ParseNode $n) use ($o) { $o->setInstallTimeSettings($n->getObjectValue(array(MobileAppInstallTimeSettings::class, 'createFromDiscriminatorValue'))); },
            'notifications' => function (ParseNode $n) use ($o) { $o->setNotifications($n->getEnumValue(Win32LobAppNotification::class)); },
            'restartSettings' => function (ParseNode $n) use ($o) { $o->setRestartSettings($n->getObjectValue(array(Win32LobAppRestartSettings::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the installTimeSettings property value. The install time settings to apply for this app assignment.
     * @return MobileAppInstallTimeSettings|null
    */
    public function getInstallTimeSettings(): ?MobileAppInstallTimeSettings {
        return $this->installTimeSettings;
    }

    /**
     * Gets the notifications property value. The notification status for this app assignment. Possible values are: showAll, showReboot, hideAll.
     * @return Win32LobAppNotification|null
    */
    public function getNotifications(): ?Win32LobAppNotification {
        return $this->notifications;
    }

    /**
     * Gets the restartSettings property value. The reboot settings to apply for this app assignment.
     * @return Win32LobAppRestartSettings|null
    */
    public function getRestartSettings(): ?Win32LobAppRestartSettings {
        return $this->restartSettings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('deliveryOptimizationPriority', $this->deliveryOptimizationPriority);
        $writer->writeObjectValue('installTimeSettings', $this->installTimeSettings);
        $writer->writeEnumValue('notifications', $this->notifications);
        $writer->writeObjectValue('restartSettings', $this->restartSettings);
    }

    /**
     * Sets the deliveryOptimizationPriority property value. The delivery optimization priority for this app assignment. This setting is not supported in National Cloud environments. Possible values are: notConfigured, foreground.
     *  @param Win32LobAppDeliveryOptimizationPriority|null $value Value to set for the deliveryOptimizationPriority property.
    */
    public function setDeliveryOptimizationPriority(?Win32LobAppDeliveryOptimizationPriority $value ): void {
        $this->deliveryOptimizationPriority = $value;
    }

    /**
     * Sets the installTimeSettings property value. The install time settings to apply for this app assignment.
     *  @param MobileAppInstallTimeSettings|null $value Value to set for the installTimeSettings property.
    */
    public function setInstallTimeSettings(?MobileAppInstallTimeSettings $value ): void {
        $this->installTimeSettings = $value;
    }

    /**
     * Sets the notifications property value. The notification status for this app assignment. Possible values are: showAll, showReboot, hideAll.
     *  @param Win32LobAppNotification|null $value Value to set for the notifications property.
    */
    public function setNotifications(?Win32LobAppNotification $value ): void {
        $this->notifications = $value;
    }

    /**
     * Sets the restartSettings property value. The reboot settings to apply for this app assignment.
     *  @param Win32LobAppRestartSettings|null $value Value to set for the restartSettings property.
    */
    public function setRestartSettings(?Win32LobAppRestartSettings $value ): void {
        $this->restartSettings = $value;
    }

}
