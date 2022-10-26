<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WinGetAppAssignmentSettings extends MobileAppAssignmentSettings implements Parsable 
{
    /**
     * @var WinGetAppInstallTimeSettings|null $installTimeSettings The install time settings to apply for this app assignment.
    */
    private ?WinGetAppInstallTimeSettings $installTimeSettings = null;
    
    /**
     * @var WinGetAppNotification|null $notifications Contains value for notification status.
    */
    private ?WinGetAppNotification $notifications = null;
    
    /**
     * @var WinGetAppRestartSettings|null $restartSettings The reboot settings to apply for this app assignment.
    */
    private ?WinGetAppRestartSettings $restartSettings = null;
    
    /**
     * Instantiates a new WinGetAppAssignmentSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.winGetAppAssignmentSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WinGetAppAssignmentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WinGetAppAssignmentSettings {
        return new WinGetAppAssignmentSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'installTimeSettings' => fn(ParseNode $n) => $o->setInstallTimeSettings($n->getObjectValue([WinGetAppInstallTimeSettings::class, 'createFromDiscriminatorValue'])),
            'notifications' => fn(ParseNode $n) => $o->setNotifications($n->getEnumValue(WinGetAppNotification::class)),
            'restartSettings' => fn(ParseNode $n) => $o->setRestartSettings($n->getObjectValue([WinGetAppRestartSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the installTimeSettings property value. The install time settings to apply for this app assignment.
     * @return WinGetAppInstallTimeSettings|null
    */
    public function getInstallTimeSettings(): ?WinGetAppInstallTimeSettings {
        return $this->installTimeSettings;
    }

    /**
     * Gets the notifications property value. Contains value for notification status.
     * @return WinGetAppNotification|null
    */
    public function getNotifications(): ?WinGetAppNotification {
        return $this->notifications;
    }

    /**
     * Gets the restartSettings property value. The reboot settings to apply for this app assignment.
     * @return WinGetAppRestartSettings|null
    */
    public function getRestartSettings(): ?WinGetAppRestartSettings {
        return $this->restartSettings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('installTimeSettings', $this->installTimeSettings);
        $writer->writeEnumValue('notifications', $this->notifications);
        $writer->writeObjectValue('restartSettings', $this->restartSettings);
    }

    /**
     * Sets the installTimeSettings property value. The install time settings to apply for this app assignment.
     *  @param WinGetAppInstallTimeSettings|null $value Value to set for the installTimeSettings property.
    */
    public function setInstallTimeSettings(?WinGetAppInstallTimeSettings $value ): void {
        $this->installTimeSettings = $value;
    }

    /**
     * Sets the notifications property value. Contains value for notification status.
     *  @param WinGetAppNotification|null $value Value to set for the notifications property.
    */
    public function setNotifications(?WinGetAppNotification $value ): void {
        $this->notifications = $value;
    }

    /**
     * Sets the restartSettings property value. The reboot settings to apply for this app assignment.
     *  @param WinGetAppRestartSettings|null $value Value to set for the restartSettings property.
    */
    public function setRestartSettings(?WinGetAppRestartSettings $value ): void {
        $this->restartSettings = $value;
    }

}
