<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsKioskAppBase implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var WindowsKioskAppType|null $appType The app type. Possible values are: unknown, store, desktop, aumId.
    */
    private ?WindowsKioskAppType $appType = null;
    
    /**
     * @var bool|null $autoLaunch Allow the app to be auto-launched in multi-app kiosk mode
    */
    private ?bool $autoLaunch = null;
    
    /**
     * @var string|null $name Represents the friendly name of an app
    */
    private ?string $name = null;
    
    /**
     * @var WindowsAppStartLayoutTileSize|null $startLayoutTileSize The app tile size for the start layout. Possible values are: hidden, small, medium, wide, large.
    */
    private ?WindowsAppStartLayoutTileSize $startLayoutTileSize = null;
    
    /**
     * Instantiates a new windowsKioskAppBase and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsKioskAppBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsKioskAppBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.windowsKioskDesktopApp': return new WindowsKioskDesktopApp();
                case '#microsoft.graph.windowsKioskUWPApp': return new WindowsKioskUWPApp();
                case '#microsoft.graph.windowsKioskWin32App': return new WindowsKioskWin32App();
            }
        }
        return new WindowsKioskAppBase();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appType property value. The app type. Possible values are: unknown, store, desktop, aumId.
     * @return WindowsKioskAppType|null
    */
    public function getAppType(): ?WindowsKioskAppType {
        return $this->appType;
    }

    /**
     * Gets the autoLaunch property value. Allow the app to be auto-launched in multi-app kiosk mode
     * @return bool|null
    */
    public function getAutoLaunch(): ?bool {
        return $this->autoLaunch;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appType' => function (ParseNode $n) use ($o) { $o->setAppType($n->getEnumValue(WindowsKioskAppType::class)); },
            'autoLaunch' => function (ParseNode $n) use ($o) { $o->setAutoLaunch($n->getBooleanValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'startLayoutTileSize' => function (ParseNode $n) use ($o) { $o->setStartLayoutTileSize($n->getEnumValue(WindowsAppStartLayoutTileSize::class)); },
        ];
    }

    /**
     * Gets the name property value. Represents the friendly name of an app
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the startLayoutTileSize property value. The app tile size for the start layout. Possible values are: hidden, small, medium, wide, large.
     * @return WindowsAppStartLayoutTileSize|null
    */
    public function getStartLayoutTileSize(): ?WindowsAppStartLayoutTileSize {
        return $this->startLayoutTileSize;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('appType', $this->appType);
        $writer->writeBooleanValue('autoLaunch', $this->autoLaunch);
        $writer->writeStringValue('name', $this->name);
        $writer->writeEnumValue('startLayoutTileSize', $this->startLayoutTileSize);
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
     * Sets the appType property value. The app type. Possible values are: unknown, store, desktop, aumId.
     *  @param WindowsKioskAppType|null $value Value to set for the appType property.
    */
    public function setAppType(?WindowsKioskAppType $value ): void {
        $this->appType = $value;
    }

    /**
     * Sets the autoLaunch property value. Allow the app to be auto-launched in multi-app kiosk mode
     *  @param bool|null $value Value to set for the autoLaunch property.
    */
    public function setAutoLaunch(?bool $value ): void {
        $this->autoLaunch = $value;
    }

    /**
     * Sets the name property value. Represents the friendly name of an app
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the startLayoutTileSize property value. The app tile size for the start layout. Possible values are: hidden, small, medium, wide, large.
     *  @param WindowsAppStartLayoutTileSize|null $value Value to set for the startLayoutTileSize property.
    */
    public function setStartLayoutTileSize(?WindowsAppStartLayoutTileSize $value ): void {
        $this->startLayoutTileSize = $value;
    }

}
