<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Abstract class to contain properties used to assign a mobile app to a group.
*/
class WinGetAppAssignmentSettings extends MobileAppAssignmentSettings implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new winGetAppAssignmentSettings and sets the default values.
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
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('installTimeSettings');
        if (is_null($val) || $val instanceof WinGetAppInstallTimeSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installTimeSettings'");
    }

    /**
     * Gets the notifications property value. Contains value for notification status.
     * @return WinGetAppNotification|null
    */
    public function getNotifications(): ?WinGetAppNotification {
        $val = $this->getBackingStore()->get('notifications');
        if (is_null($val) || $val instanceof WinGetAppNotification) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notifications'");
    }

    /**
     * Gets the restartSettings property value. The reboot settings to apply for this app assignment.
     * @return WinGetAppRestartSettings|null
    */
    public function getRestartSettings(): ?WinGetAppRestartSettings {
        $val = $this->getBackingStore()->get('restartSettings');
        if (is_null($val) || $val instanceof WinGetAppRestartSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restartSettings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('installTimeSettings', $this->getInstallTimeSettings());
        $writer->writeEnumValue('notifications', $this->getNotifications());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('restartSettings', $this->getRestartSettings());
    }

    /**
     * Sets the installTimeSettings property value. The install time settings to apply for this app assignment.
     * @param WinGetAppInstallTimeSettings|null $value Value to set for the installTimeSettings property.
    */
    public function setInstallTimeSettings(?WinGetAppInstallTimeSettings $value): void {
        $this->getBackingStore()->set('installTimeSettings', $value);
    }

    /**
     * Sets the notifications property value. Contains value for notification status.
     * @param WinGetAppNotification|null $value Value to set for the notifications property.
    */
    public function setNotifications(?WinGetAppNotification $value): void {
        $this->getBackingStore()->set('notifications', $value);
    }

    /**
     * Sets the restartSettings property value. The reboot settings to apply for this app assignment.
     * @param WinGetAppRestartSettings|null $value Value to set for the restartSettings property.
    */
    public function setRestartSettings(?WinGetAppRestartSettings $value): void {
        $this->getBackingStore()->set('restartSettings', $value);
    }

}
