<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains per-group deployment configuration for a windowsAutoUpdateCatalogApp. These settings control the end-user experience when the app is deployed to a specific group—including whether notifications are shown, how delivery bandwidth is used, when the app must be installed by, and how the device coordinates restarts afterward.
*/
class WindowsAutoUpdateCatalogAppAssignmentSettings extends MobileAppAssignmentSettings implements Parsable 
{
    /**
     * Instantiates a new WindowsAutoUpdateCatalogAppAssignmentSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsAutoUpdateCatalogAppAssignmentSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsAutoUpdateCatalogAppAssignmentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsAutoUpdateCatalogAppAssignmentSettings {
        return new WindowsAutoUpdateCatalogAppAssignmentSettings();
    }

    /**
     * Gets the deliveryOptimizationPriority property value. Indicates the delivery optimization download priority level for app content. This controls whether the download uses background bandwidth (minimal impact on other network activity) or foreground bandwidth (prioritized download at the expense of other network traffic).
     * @return WindowsAutoUpdateCatalogAppDeliveryOptimizationPriority|null
    */
    public function getDeliveryOptimizationPriority(): ?WindowsAutoUpdateCatalogAppDeliveryOptimizationPriority {
        $val = $this->getBackingStore()->get('deliveryOptimizationPriority');
        if (is_null($val) || $val instanceof WindowsAutoUpdateCatalogAppDeliveryOptimizationPriority) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deliveryOptimizationPriority'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deliveryOptimizationPriority' => fn(ParseNode $n) => $o->setDeliveryOptimizationPriority($n->getEnumValue(WindowsAutoUpdateCatalogAppDeliveryOptimizationPriority::class)),
            'installTimeSettings' => fn(ParseNode $n) => $o->setInstallTimeSettings($n->getObjectValue([WindowsAutoUpdateCatalogAppInstallTimeSettings::class, 'createFromDiscriminatorValue'])),
            'notificationType' => fn(ParseNode $n) => $o->setNotificationType($n->getEnumValue(WindowsAutoUpdateCatalogAppNotificationType::class)),
            'restartSettings' => fn(ParseNode $n) => $o->setRestartSettings($n->getObjectValue([WindowsAutoUpdateCatalogAppRestartSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the installTimeSettings property value. Specifies the deadline by which the app must be installed on the device. When null, the app is offered for immediate installation with no enforced deadline.
     * @return WindowsAutoUpdateCatalogAppInstallTimeSettings|null
    */
    public function getInstallTimeSettings(): ?WindowsAutoUpdateCatalogAppInstallTimeSettings {
        $val = $this->getBackingStore()->get('installTimeSettings');
        if (is_null($val) || $val instanceof WindowsAutoUpdateCatalogAppInstallTimeSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installTimeSettings'");
    }

    /**
     * Gets the notificationType property value. Indicates which notifications the Intune management extension displays to the end user during the app installation and restart lifecycle on managed devices.
     * @return WindowsAutoUpdateCatalogAppNotificationType|null
    */
    public function getNotificationType(): ?WindowsAutoUpdateCatalogAppNotificationType {
        $val = $this->getBackingStore()->get('notificationType');
        if (is_null($val) || $val instanceof WindowsAutoUpdateCatalogAppNotificationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationType'");
    }

    /**
     * Gets the restartSettings property value. Specifies the restart coordination behavior after the app is installed—including how long to wait before restarting, when to show a countdown, and how long the user can snooze. When null, no restart coordination is applied (the device may still restart based on the app's deviceRestartBehavior setting). Note: the service accepts restart settings regardless of the app's deviceRestartBehavior value; the device agent determines which settings are actually honored at runtime.
     * @return WindowsAutoUpdateCatalogAppRestartSettings|null
    */
    public function getRestartSettings(): ?WindowsAutoUpdateCatalogAppRestartSettings {
        $val = $this->getBackingStore()->get('restartSettings');
        if (is_null($val) || $val instanceof WindowsAutoUpdateCatalogAppRestartSettings) {
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
        $writer->writeEnumValue('deliveryOptimizationPriority', $this->getDeliveryOptimizationPriority());
        $writer->writeObjectValue('installTimeSettings', $this->getInstallTimeSettings());
        $writer->writeEnumValue('notificationType', $this->getNotificationType());
        $writer->writeObjectValue('restartSettings', $this->getRestartSettings());
    }

    /**
     * Sets the deliveryOptimizationPriority property value. Indicates the delivery optimization download priority level for app content. This controls whether the download uses background bandwidth (minimal impact on other network activity) or foreground bandwidth (prioritized download at the expense of other network traffic).
     * @param WindowsAutoUpdateCatalogAppDeliveryOptimizationPriority|null $value Value to set for the deliveryOptimizationPriority property.
    */
    public function setDeliveryOptimizationPriority(?WindowsAutoUpdateCatalogAppDeliveryOptimizationPriority $value): void {
        $this->getBackingStore()->set('deliveryOptimizationPriority', $value);
    }

    /**
     * Sets the installTimeSettings property value. Specifies the deadline by which the app must be installed on the device. When null, the app is offered for immediate installation with no enforced deadline.
     * @param WindowsAutoUpdateCatalogAppInstallTimeSettings|null $value Value to set for the installTimeSettings property.
    */
    public function setInstallTimeSettings(?WindowsAutoUpdateCatalogAppInstallTimeSettings $value): void {
        $this->getBackingStore()->set('installTimeSettings', $value);
    }

    /**
     * Sets the notificationType property value. Indicates which notifications the Intune management extension displays to the end user during the app installation and restart lifecycle on managed devices.
     * @param WindowsAutoUpdateCatalogAppNotificationType|null $value Value to set for the notificationType property.
    */
    public function setNotificationType(?WindowsAutoUpdateCatalogAppNotificationType $value): void {
        $this->getBackingStore()->set('notificationType', $value);
    }

    /**
     * Sets the restartSettings property value. Specifies the restart coordination behavior after the app is installed—including how long to wait before restarting, when to show a countdown, and how long the user can snooze. When null, no restart coordination is applied (the device may still restart based on the app's deviceRestartBehavior setting). Note: the service accepts restart settings regardless of the app's deviceRestartBehavior value; the device agent determines which settings are actually honored at runtime.
     * @param WindowsAutoUpdateCatalogAppRestartSettings|null $value Value to set for the restartSettings property.
    */
    public function setRestartSettings(?WindowsAutoUpdateCatalogAppRestartSettings $value): void {
        $this->getBackingStore()->set('restartSettings', $value);
    }

}
