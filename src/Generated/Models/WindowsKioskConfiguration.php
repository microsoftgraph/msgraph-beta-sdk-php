<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsKioskConfiguration extends DeviceConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $edgeKioskEnablePublicBrowsing Enable public browsing kiosk mode for the Microsoft Edge browser. The Default is false.
    */
    private ?bool $edgeKioskEnablePublicBrowsing = null;
    
    /**
     * @var array<string>|null $kioskBrowserBlockedUrlExceptions Specify URLs that the kiosk browser is allowed to navigate to
    */
    private ?array $kioskBrowserBlockedUrlExceptions = null;
    
    /**
     * @var array<string>|null $kioskBrowserBlockedURLs Specify URLs that the kiosk browsers should not navigate to
    */
    private ?array $kioskBrowserBlockedURLs = null;
    
    /**
     * @var string|null $kioskBrowserDefaultUrl Specify the default URL the browser should navigate to on launch.
    */
    private ?string $kioskBrowserDefaultUrl = null;
    
    /**
     * @var bool|null $kioskBrowserEnableEndSessionButton Enable the kiosk browser's end session button. By default, the end session button is disabled.
    */
    private ?bool $kioskBrowserEnableEndSessionButton = null;
    
    /**
     * @var bool|null $kioskBrowserEnableHomeButton Enable the kiosk browser's home button. By default, the home button is disabled.
    */
    private ?bool $kioskBrowserEnableHomeButton = null;
    
    /**
     * @var bool|null $kioskBrowserEnableNavigationButtons Enable the kiosk browser's navigation buttons(forward/back). By default, the navigation buttons are disabled.
    */
    private ?bool $kioskBrowserEnableNavigationButtons = null;
    
    /**
     * @var int|null $kioskBrowserRestartOnIdleTimeInMinutes Specify the number of minutes the session is idle until the kiosk browser restarts in a fresh state.  Valid values are 1-1440. Valid values 1 to 1440
    */
    private ?int $kioskBrowserRestartOnIdleTimeInMinutes = null;
    
    /**
     * @var array<WindowsKioskProfile>|null $kioskProfiles This policy setting allows to define a list of Kiosk profiles for a Kiosk configuration. This collection can contain a maximum of 3 elements.
    */
    private ?array $kioskProfiles = null;
    
    /**
     * @var WindowsKioskForceUpdateSchedule|null $windowsKioskForceUpdateSchedule force update schedule for Kiosk devices.
    */
    private ?WindowsKioskForceUpdateSchedule $windowsKioskForceUpdateSchedule = null;
    
    /**
     * Instantiates a new WindowsKioskConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the edgeKioskEnablePublicBrowsing property value. Enable public browsing kiosk mode for the Microsoft Edge browser. The Default is false.
     * @return bool|null
    */
    public function getEdgeKioskEnablePublicBrowsing(): ?bool {
        return $this->edgeKioskEnablePublicBrowsing;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'edgeKioskEnablePublicBrowsing' => function (ParseNode $n) use ($o) { $o->setEdgeKioskEnablePublicBrowsing($n->getBooleanValue()); },
            'kioskBrowserBlockedUrlExceptions' => function (ParseNode $n) use ($o) { $o->setKioskBrowserBlockedUrlExceptions($n->getCollectionOfPrimitiveValues()); },
            'kioskBrowserBlockedURLs' => function (ParseNode $n) use ($o) { $o->setKioskBrowserBlockedURLs($n->getCollectionOfPrimitiveValues()); },
            'kioskBrowserDefaultUrl' => function (ParseNode $n) use ($o) { $o->setKioskBrowserDefaultUrl($n->getStringValue()); },
            'kioskBrowserEnableEndSessionButton' => function (ParseNode $n) use ($o) { $o->setKioskBrowserEnableEndSessionButton($n->getBooleanValue()); },
            'kioskBrowserEnableHomeButton' => function (ParseNode $n) use ($o) { $o->setKioskBrowserEnableHomeButton($n->getBooleanValue()); },
            'kioskBrowserEnableNavigationButtons' => function (ParseNode $n) use ($o) { $o->setKioskBrowserEnableNavigationButtons($n->getBooleanValue()); },
            'kioskBrowserRestartOnIdleTimeInMinutes' => function (ParseNode $n) use ($o) { $o->setKioskBrowserRestartOnIdleTimeInMinutes($n->getIntegerValue()); },
            'kioskProfiles' => function (ParseNode $n) use ($o) { $o->setKioskProfiles($n->getCollectionOfObjectValues(array(WindowsKioskProfile::class, 'createFromDiscriminatorValue'))); },
            'windowsKioskForceUpdateSchedule' => function (ParseNode $n) use ($o) { $o->setWindowsKioskForceUpdateSchedule($n->getObjectValue(array(WindowsKioskForceUpdateSchedule::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the kioskBrowserBlockedUrlExceptions property value. Specify URLs that the kiosk browser is allowed to navigate to
     * @return array<string>|null
    */
    public function getKioskBrowserBlockedUrlExceptions(): ?array {
        return $this->kioskBrowserBlockedUrlExceptions;
    }

    /**
     * Gets the kioskBrowserBlockedURLs property value. Specify URLs that the kiosk browsers should not navigate to
     * @return array<string>|null
    */
    public function getKioskBrowserBlockedURLs(): ?array {
        return $this->kioskBrowserBlockedURLs;
    }

    /**
     * Gets the kioskBrowserDefaultUrl property value. Specify the default URL the browser should navigate to on launch.
     * @return string|null
    */
    public function getKioskBrowserDefaultUrl(): ?string {
        return $this->kioskBrowserDefaultUrl;
    }

    /**
     * Gets the kioskBrowserEnableEndSessionButton property value. Enable the kiosk browser's end session button. By default, the end session button is disabled.
     * @return bool|null
    */
    public function getKioskBrowserEnableEndSessionButton(): ?bool {
        return $this->kioskBrowserEnableEndSessionButton;
    }

    /**
     * Gets the kioskBrowserEnableHomeButton property value. Enable the kiosk browser's home button. By default, the home button is disabled.
     * @return bool|null
    */
    public function getKioskBrowserEnableHomeButton(): ?bool {
        return $this->kioskBrowserEnableHomeButton;
    }

    /**
     * Gets the kioskBrowserEnableNavigationButtons property value. Enable the kiosk browser's navigation buttons(forward/back). By default, the navigation buttons are disabled.
     * @return bool|null
    */
    public function getKioskBrowserEnableNavigationButtons(): ?bool {
        return $this->kioskBrowserEnableNavigationButtons;
    }

    /**
     * Gets the kioskBrowserRestartOnIdleTimeInMinutes property value. Specify the number of minutes the session is idle until the kiosk browser restarts in a fresh state.  Valid values are 1-1440. Valid values 1 to 1440
     * @return int|null
    */
    public function getKioskBrowserRestartOnIdleTimeInMinutes(): ?int {
        return $this->kioskBrowserRestartOnIdleTimeInMinutes;
    }

    /**
     * Gets the kioskProfiles property value. This policy setting allows to define a list of Kiosk profiles for a Kiosk configuration. This collection can contain a maximum of 3 elements.
     * @return array<WindowsKioskProfile>|null
    */
    public function getKioskProfiles(): ?array {
        return $this->kioskProfiles;
    }

    /**
     * Gets the windowsKioskForceUpdateSchedule property value. force update schedule for Kiosk devices.
     * @return WindowsKioskForceUpdateSchedule|null
    */
    public function getWindowsKioskForceUpdateSchedule(): ?WindowsKioskForceUpdateSchedule {
        return $this->windowsKioskForceUpdateSchedule;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('edgeKioskEnablePublicBrowsing', $this->edgeKioskEnablePublicBrowsing);
        $writer->writeCollectionOfPrimitiveValues('kioskBrowserBlockedUrlExceptions', $this->kioskBrowserBlockedUrlExceptions);
        $writer->writeCollectionOfPrimitiveValues('kioskBrowserBlockedURLs', $this->kioskBrowserBlockedURLs);
        $writer->writeStringValue('kioskBrowserDefaultUrl', $this->kioskBrowserDefaultUrl);
        $writer->writeBooleanValue('kioskBrowserEnableEndSessionButton', $this->kioskBrowserEnableEndSessionButton);
        $writer->writeBooleanValue('kioskBrowserEnableHomeButton', $this->kioskBrowserEnableHomeButton);
        $writer->writeBooleanValue('kioskBrowserEnableNavigationButtons', $this->kioskBrowserEnableNavigationButtons);
        $writer->writeIntegerValue('kioskBrowserRestartOnIdleTimeInMinutes', $this->kioskBrowserRestartOnIdleTimeInMinutes);
        $writer->writeCollectionOfObjectValues('kioskProfiles', $this->kioskProfiles);
        $writer->writeObjectValue('windowsKioskForceUpdateSchedule', $this->windowsKioskForceUpdateSchedule);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the edgeKioskEnablePublicBrowsing property value. Enable public browsing kiosk mode for the Microsoft Edge browser. The Default is false.
     *  @param bool|null $value Value to set for the edgeKioskEnablePublicBrowsing property.
    */
    public function setEdgeKioskEnablePublicBrowsing(?bool $value ): void {
        $this->edgeKioskEnablePublicBrowsing = $value;
    }

    /**
     * Sets the kioskBrowserBlockedUrlExceptions property value. Specify URLs that the kiosk browser is allowed to navigate to
     *  @param array<string>|null $value Value to set for the kioskBrowserBlockedUrlExceptions property.
    */
    public function setKioskBrowserBlockedUrlExceptions(?array $value ): void {
        $this->kioskBrowserBlockedUrlExceptions = $value;
    }

    /**
     * Sets the kioskBrowserBlockedURLs property value. Specify URLs that the kiosk browsers should not navigate to
     *  @param array<string>|null $value Value to set for the kioskBrowserBlockedURLs property.
    */
    public function setKioskBrowserBlockedURLs(?array $value ): void {
        $this->kioskBrowserBlockedURLs = $value;
    }

    /**
     * Sets the kioskBrowserDefaultUrl property value. Specify the default URL the browser should navigate to on launch.
     *  @param string|null $value Value to set for the kioskBrowserDefaultUrl property.
    */
    public function setKioskBrowserDefaultUrl(?string $value ): void {
        $this->kioskBrowserDefaultUrl = $value;
    }

    /**
     * Sets the kioskBrowserEnableEndSessionButton property value. Enable the kiosk browser's end session button. By default, the end session button is disabled.
     *  @param bool|null $value Value to set for the kioskBrowserEnableEndSessionButton property.
    */
    public function setKioskBrowserEnableEndSessionButton(?bool $value ): void {
        $this->kioskBrowserEnableEndSessionButton = $value;
    }

    /**
     * Sets the kioskBrowserEnableHomeButton property value. Enable the kiosk browser's home button. By default, the home button is disabled.
     *  @param bool|null $value Value to set for the kioskBrowserEnableHomeButton property.
    */
    public function setKioskBrowserEnableHomeButton(?bool $value ): void {
        $this->kioskBrowserEnableHomeButton = $value;
    }

    /**
     * Sets the kioskBrowserEnableNavigationButtons property value. Enable the kiosk browser's navigation buttons(forward/back). By default, the navigation buttons are disabled.
     *  @param bool|null $value Value to set for the kioskBrowserEnableNavigationButtons property.
    */
    public function setKioskBrowserEnableNavigationButtons(?bool $value ): void {
        $this->kioskBrowserEnableNavigationButtons = $value;
    }

    /**
     * Sets the kioskBrowserRestartOnIdleTimeInMinutes property value. Specify the number of minutes the session is idle until the kiosk browser restarts in a fresh state.  Valid values are 1-1440. Valid values 1 to 1440
     *  @param int|null $value Value to set for the kioskBrowserRestartOnIdleTimeInMinutes property.
    */
    public function setKioskBrowserRestartOnIdleTimeInMinutes(?int $value ): void {
        $this->kioskBrowserRestartOnIdleTimeInMinutes = $value;
    }

    /**
     * Sets the kioskProfiles property value. This policy setting allows to define a list of Kiosk profiles for a Kiosk configuration. This collection can contain a maximum of 3 elements.
     *  @param array<WindowsKioskProfile>|null $value Value to set for the kioskProfiles property.
    */
    public function setKioskProfiles(?array $value ): void {
        $this->kioskProfiles = $value;
    }

    /**
     * Sets the windowsKioskForceUpdateSchedule property value. force update schedule for Kiosk devices.
     *  @param WindowsKioskForceUpdateSchedule|null $value Value to set for the windowsKioskForceUpdateSchedule property.
    */
    public function setWindowsKioskForceUpdateSchedule(?WindowsKioskForceUpdateSchedule $value ): void {
        $this->windowsKioskForceUpdateSchedule = $value;
    }

}
