<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * The base class for a type of apps
*/
class WindowsKioskAppBase implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new windowsKioskAppBase and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the appType property value. The type of Windows kiosk app.
     * @return WindowsKioskAppType|null
    */
    public function getAppType(): ?WindowsKioskAppType {
        $val = $this->getBackingStore()->get('appType');
        if (is_null($val) || $val instanceof WindowsKioskAppType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appType'");
    }

    /**
     * Gets the autoLaunch property value. Allow the app to be auto-launched in multi-app kiosk mode
     * @return bool|null
    */
    public function getAutoLaunch(): ?bool {
        $val = $this->getBackingStore()->get('autoLaunch');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autoLaunch'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appType' => fn(ParseNode $n) => $o->setAppType($n->getEnumValue(WindowsKioskAppType::class)),
            'autoLaunch' => fn(ParseNode $n) => $o->setAutoLaunch($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'startLayoutTileSize' => fn(ParseNode $n) => $o->setStartLayoutTileSize($n->getEnumValue(WindowsAppStartLayoutTileSize::class)),
        ];
    }

    /**
     * Gets the name property value. Represents the friendly name of an app
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the startLayoutTileSize property value. The tile size of Windows app in the start layout.
     * @return WindowsAppStartLayoutTileSize|null
    */
    public function getStartLayoutTileSize(): ?WindowsAppStartLayoutTileSize {
        $val = $this->getBackingStore()->get('startLayoutTileSize');
        if (is_null($val) || $val instanceof WindowsAppStartLayoutTileSize) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startLayoutTileSize'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('appType', $this->getAppType());
        $writer->writeBooleanValue('autoLaunch', $this->getAutoLaunch());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('startLayoutTileSize', $this->getStartLayoutTileSize());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the appType property value. The type of Windows kiosk app.
     * @param WindowsKioskAppType|null $value Value to set for the appType property.
    */
    public function setAppType(?WindowsKioskAppType $value): void {
        $this->getBackingStore()->set('appType', $value);
    }

    /**
     * Sets the autoLaunch property value. Allow the app to be auto-launched in multi-app kiosk mode
     * @param bool|null $value Value to set for the autoLaunch property.
    */
    public function setAutoLaunch(?bool $value): void {
        $this->getBackingStore()->set('autoLaunch', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the name property value. Represents the friendly name of an app
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the startLayoutTileSize property value. The tile size of Windows app in the start layout.
     * @param WindowsAppStartLayoutTileSize|null $value Value to set for the startLayoutTileSize property.
    */
    public function setStartLayoutTileSize(?WindowsAppStartLayoutTileSize $value): void {
        $this->getBackingStore()->set('startLayoutTileSize', $value);
    }

}
