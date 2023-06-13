<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsKioskConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new WindowsKioskConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsKioskConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsKioskConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsKioskConfiguration {
        return new WindowsKioskConfiguration();
    }

    /**
     * Gets the edgeKioskEnablePublicBrowsing property value. Enable public browsing kiosk mode for the Microsoft Edge browser. The Default is false.
     * @return bool|null
    */
    public function getEdgeKioskEnablePublicBrowsing(): ?bool {
        return $this->getBackingStore()->get('edgeKioskEnablePublicBrowsing');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'edgeKioskEnablePublicBrowsing' => fn(ParseNode $n) => $o->setEdgeKioskEnablePublicBrowsing($n->getBooleanValue()),
            'kioskBrowserBlockedUrlExceptions' => fn(ParseNode $n) => $o->setKioskBrowserBlockedUrlExceptions($n->getCollectionOfPrimitiveValues()),
            'kioskBrowserBlockedURLs' => fn(ParseNode $n) => $o->setKioskBrowserBlockedURLs($n->getCollectionOfPrimitiveValues()),
            'kioskBrowserDefaultUrl' => fn(ParseNode $n) => $o->setKioskBrowserDefaultUrl($n->getStringValue()),
            'kioskBrowserEnableEndSessionButton' => fn(ParseNode $n) => $o->setKioskBrowserEnableEndSessionButton($n->getBooleanValue()),
            'kioskBrowserEnableHomeButton' => fn(ParseNode $n) => $o->setKioskBrowserEnableHomeButton($n->getBooleanValue()),
            'kioskBrowserEnableNavigationButtons' => fn(ParseNode $n) => $o->setKioskBrowserEnableNavigationButtons($n->getBooleanValue()),
            'kioskBrowserRestartOnIdleTimeInMinutes' => fn(ParseNode $n) => $o->setKioskBrowserRestartOnIdleTimeInMinutes($n->getIntegerValue()),
            'kioskProfiles' => fn(ParseNode $n) => $o->setKioskProfiles($n->getCollectionOfObjectValues([WindowsKioskProfile::class, 'createFromDiscriminatorValue'])),
            'windowsKioskForceUpdateSchedule' => fn(ParseNode $n) => $o->setWindowsKioskForceUpdateSchedule($n->getObjectValue([WindowsKioskForceUpdateSchedule::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the kioskBrowserBlockedUrlExceptions property value. Specify URLs that the kiosk browser is allowed to navigate to
     * @return array<string>|null
    */
    public function getKioskBrowserBlockedUrlExceptions(): ?array {
        return $this->getBackingStore()->get('kioskBrowserBlockedUrlExceptions');
    }

    /**
     * Gets the kioskBrowserBlockedURLs property value. Specify URLs that the kiosk browsers should not navigate to
     * @return array<string>|null
    */
    public function getKioskBrowserBlockedURLs(): ?array {
        return $this->getBackingStore()->get('kioskBrowserBlockedURLs');
    }

    /**
     * Gets the kioskBrowserDefaultUrl property value. Specify the default URL the browser should navigate to on launch.
     * @return string|null
    */
    public function getKioskBrowserDefaultUrl(): ?string {
        return $this->getBackingStore()->get('kioskBrowserDefaultUrl');
    }

    /**
     * Gets the kioskBrowserEnableEndSessionButton property value. Enable the kiosk browser's end session button. By default, the end session button is disabled.
     * @return bool|null
    */
    public function getKioskBrowserEnableEndSessionButton(): ?bool {
        return $this->getBackingStore()->get('kioskBrowserEnableEndSessionButton');
    }

    /**
     * Gets the kioskBrowserEnableHomeButton property value. Enable the kiosk browser's home button. By default, the home button is disabled.
     * @return bool|null
    */
    public function getKioskBrowserEnableHomeButton(): ?bool {
        return $this->getBackingStore()->get('kioskBrowserEnableHomeButton');
    }

    /**
     * Gets the kioskBrowserEnableNavigationButtons property value. Enable the kiosk browser's navigation buttons(forward/back). By default, the navigation buttons are disabled.
     * @return bool|null
    */
    public function getKioskBrowserEnableNavigationButtons(): ?bool {
        return $this->getBackingStore()->get('kioskBrowserEnableNavigationButtons');
    }

    /**
     * Gets the kioskBrowserRestartOnIdleTimeInMinutes property value. Specify the number of minutes the session is idle until the kiosk browser restarts in a fresh state.  Valid values are 1-1440. Valid values 1 to 1440
     * @return int|null
    */
    public function getKioskBrowserRestartOnIdleTimeInMinutes(): ?int {
        return $this->getBackingStore()->get('kioskBrowserRestartOnIdleTimeInMinutes');
    }

    /**
     * Gets the kioskProfiles property value. This policy setting allows to define a list of Kiosk profiles for a Kiosk configuration. This collection can contain a maximum of 3 elements.
     * @return array<WindowsKioskProfile>|null
    */
    public function getKioskProfiles(): ?array {
        return $this->getBackingStore()->get('kioskProfiles');
    }

    /**
     * Gets the windowsKioskForceUpdateSchedule property value. force update schedule for Kiosk devices.
     * @return WindowsKioskForceUpdateSchedule|null
    */
    public function getWindowsKioskForceUpdateSchedule(): ?WindowsKioskForceUpdateSchedule {
        return $this->getBackingStore()->get('windowsKioskForceUpdateSchedule');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('edgeKioskEnablePublicBrowsing', $this->getEdgeKioskEnablePublicBrowsing());
        $writer->writeCollectionOfPrimitiveValues('kioskBrowserBlockedUrlExceptions', $this->getKioskBrowserBlockedUrlExceptions());
        $writer->writeCollectionOfPrimitiveValues('kioskBrowserBlockedURLs', $this->getKioskBrowserBlockedURLs());
        $writer->writeStringValue('kioskBrowserDefaultUrl', $this->getKioskBrowserDefaultUrl());
        $writer->writeBooleanValue('kioskBrowserEnableEndSessionButton', $this->getKioskBrowserEnableEndSessionButton());
        $writer->writeBooleanValue('kioskBrowserEnableHomeButton', $this->getKioskBrowserEnableHomeButton());
        $writer->writeBooleanValue('kioskBrowserEnableNavigationButtons', $this->getKioskBrowserEnableNavigationButtons());
        $writer->writeIntegerValue('kioskBrowserRestartOnIdleTimeInMinutes', $this->getKioskBrowserRestartOnIdleTimeInMinutes());
        $writer->writeCollectionOfObjectValues('kioskProfiles', $this->getKioskProfiles());
        $writer->writeObjectValue('windowsKioskForceUpdateSchedule', $this->getWindowsKioskForceUpdateSchedule());
    }

    /**
     * Sets the edgeKioskEnablePublicBrowsing property value. Enable public browsing kiosk mode for the Microsoft Edge browser. The Default is false.
     * @param bool|null $value Value to set for the edgeKioskEnablePublicBrowsing property.
    */
    public function setEdgeKioskEnablePublicBrowsing(?bool $value): void {
        $this->getBackingStore()->set('edgeKioskEnablePublicBrowsing', $value);
    }

    /**
     * Sets the kioskBrowserBlockedUrlExceptions property value. Specify URLs that the kiosk browser is allowed to navigate to
     * @param array<string>|null $value Value to set for the kioskBrowserBlockedUrlExceptions property.
    */
    public function setKioskBrowserBlockedUrlExceptions(?array $value): void {
        $this->getBackingStore()->set('kioskBrowserBlockedUrlExceptions', $value);
    }

    /**
     * Sets the kioskBrowserBlockedURLs property value. Specify URLs that the kiosk browsers should not navigate to
     * @param array<string>|null $value Value to set for the kioskBrowserBlockedURLs property.
    */
    public function setKioskBrowserBlockedURLs(?array $value): void {
        $this->getBackingStore()->set('kioskBrowserBlockedURLs', $value);
    }

    /**
     * Sets the kioskBrowserDefaultUrl property value. Specify the default URL the browser should navigate to on launch.
     * @param string|null $value Value to set for the kioskBrowserDefaultUrl property.
    */
    public function setKioskBrowserDefaultUrl(?string $value): void {
        $this->getBackingStore()->set('kioskBrowserDefaultUrl', $value);
    }

    /**
     * Sets the kioskBrowserEnableEndSessionButton property value. Enable the kiosk browser's end session button. By default, the end session button is disabled.
     * @param bool|null $value Value to set for the kioskBrowserEnableEndSessionButton property.
    */
    public function setKioskBrowserEnableEndSessionButton(?bool $value): void {
        $this->getBackingStore()->set('kioskBrowserEnableEndSessionButton', $value);
    }

    /**
     * Sets the kioskBrowserEnableHomeButton property value. Enable the kiosk browser's home button. By default, the home button is disabled.
     * @param bool|null $value Value to set for the kioskBrowserEnableHomeButton property.
    */
    public function setKioskBrowserEnableHomeButton(?bool $value): void {
        $this->getBackingStore()->set('kioskBrowserEnableHomeButton', $value);
    }

    /**
     * Sets the kioskBrowserEnableNavigationButtons property value. Enable the kiosk browser's navigation buttons(forward/back). By default, the navigation buttons are disabled.
     * @param bool|null $value Value to set for the kioskBrowserEnableNavigationButtons property.
    */
    public function setKioskBrowserEnableNavigationButtons(?bool $value): void {
        $this->getBackingStore()->set('kioskBrowserEnableNavigationButtons', $value);
    }

    /**
     * Sets the kioskBrowserRestartOnIdleTimeInMinutes property value. Specify the number of minutes the session is idle until the kiosk browser restarts in a fresh state.  Valid values are 1-1440. Valid values 1 to 1440
     * @param int|null $value Value to set for the kioskBrowserRestartOnIdleTimeInMinutes property.
    */
    public function setKioskBrowserRestartOnIdleTimeInMinutes(?int $value): void {
        $this->getBackingStore()->set('kioskBrowserRestartOnIdleTimeInMinutes', $value);
    }

    /**
     * Sets the kioskProfiles property value. This policy setting allows to define a list of Kiosk profiles for a Kiosk configuration. This collection can contain a maximum of 3 elements.
     * @param array<WindowsKioskProfile>|null $value Value to set for the kioskProfiles property.
    */
    public function setKioskProfiles(?array $value): void {
        $this->getBackingStore()->set('kioskProfiles', $value);
    }

    /**
     * Sets the windowsKioskForceUpdateSchedule property value. force update schedule for Kiosk devices.
     * @param WindowsKioskForceUpdateSchedule|null $value Value to set for the windowsKioskForceUpdateSchedule property.
    */
    public function setWindowsKioskForceUpdateSchedule(?WindowsKioskForceUpdateSchedule $value): void {
        $this->getBackingStore()->set('windowsKioskForceUpdateSchedule', $value);
    }

}
