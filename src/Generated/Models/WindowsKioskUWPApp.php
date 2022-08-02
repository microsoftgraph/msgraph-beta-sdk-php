<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsKioskUWPApp extends WindowsKioskAppBase implements Parsable 
{
    /**
     * @var string|null $appId This references an Intune App that will be target to the same assignments as Kiosk configuration
    */
    private ?string $appId = null;
    
    /**
     * @var string|null $appUserModelId This is the only Application User Model ID (AUMID) that will be available to launch use while in Kiosk Mode
    */
    private ?string $appUserModelId = null;
    
    /**
     * @var string|null $containedAppId This references an contained App from an Intune App
    */
    private ?string $containedAppId = null;
    
    /**
     * Instantiates a new WindowsKioskUWPApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsKioskUWPApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsKioskUWPApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsKioskUWPApp {
        return new WindowsKioskUWPApp();
    }

    /**
     * Gets the appId property value. This references an Intune App that will be target to the same assignments as Kiosk configuration
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->appId;
    }

    /**
     * Gets the appUserModelId property value. This is the only Application User Model ID (AUMID) that will be available to launch use while in Kiosk Mode
     * @return string|null
    */
    public function getAppUserModelId(): ?string {
        return $this->appUserModelId;
    }

    /**
     * Gets the containedAppId property value. This references an contained App from an Intune App
     * @return string|null
    */
    public function getContainedAppId(): ?string {
        return $this->containedAppId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appId' => function (ParseNode $n) use ($o) { $o->setAppId($n->getStringValue()); },
            'appUserModelId' => function (ParseNode $n) use ($o) { $o->setAppUserModelId($n->getStringValue()); },
            'containedAppId' => function (ParseNode $n) use ($o) { $o->setContainedAppId($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appId', $this->appId);
        $writer->writeStringValue('appUserModelId', $this->appUserModelId);
        $writer->writeStringValue('containedAppId', $this->containedAppId);
    }

    /**
     * Sets the appId property value. This references an Intune App that will be target to the same assignments as Kiosk configuration
     *  @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value ): void {
        $this->appId = $value;
    }

    /**
     * Sets the appUserModelId property value. This is the only Application User Model ID (AUMID) that will be available to launch use while in Kiosk Mode
     *  @param string|null $value Value to set for the appUserModelId property.
    */
    public function setAppUserModelId(?string $value ): void {
        $this->appUserModelId = $value;
    }

    /**
     * Sets the containedAppId property value. This references an contained App from an Intune App
     *  @param string|null $value Value to set for the containedAppId property.
    */
    public function setContainedAppId(?string $value ): void {
        $this->containedAppId = $value;
    }

}
