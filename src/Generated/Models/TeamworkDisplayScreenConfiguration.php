<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamworkDisplayScreenConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new teamworkDisplayScreenConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkDisplayScreenConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkDisplayScreenConfiguration {
        return new TeamworkDisplayScreenConfiguration();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the backlightBrightness property value. The brightness level on the device (0-100). Not applicable for Microsoft Teams Rooms devices.
     * @return int|null
    */
    public function getBacklightBrightness(): ?int {
        $val = $this->getBackingStore()->get('backlightBrightness');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'backlightBrightness'");
    }

    /**
     * Gets the backlightTimeout property value. Timeout for backlight (30-3600 secs). Not applicable for Teams Rooms devices.
     * @return DateInterval|null
    */
    public function getBacklightTimeout(): ?DateInterval {
        $val = $this->getBackingStore()->get('backlightTimeout');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'backlightTimeout'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'backlightBrightness' => fn(ParseNode $n) => $o->setBacklightBrightness($n->getIntegerValue()),
            'backlightTimeout' => fn(ParseNode $n) => $o->setBacklightTimeout($n->getDateIntervalValue()),
            'isHighContrastEnabled' => fn(ParseNode $n) => $o->setIsHighContrastEnabled($n->getBooleanValue()),
            'isScreensaverEnabled' => fn(ParseNode $n) => $o->setIsScreensaverEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'screensaverTimeout' => fn(ParseNode $n) => $o->setScreensaverTimeout($n->getDateIntervalValue()),
        ];
    }

    /**
     * Gets the isHighContrastEnabled property value. True if high contrast mode is enabled. Not applicable for Teams Rooms devices.
     * @return bool|null
    */
    public function getIsHighContrastEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isHighContrastEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isHighContrastEnabled'");
    }

    /**
     * Gets the isScreensaverEnabled property value. True if screensaver is enabled. Not applicable for Teams Rooms devices.
     * @return bool|null
    */
    public function getIsScreensaverEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isScreensaverEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isScreensaverEnabled'");
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
     * Gets the screensaverTimeout property value. Screensaver timeout from 30 to 3600 secs. Not applicable for Teams Rooms devices.
     * @return DateInterval|null
    */
    public function getScreensaverTimeout(): ?DateInterval {
        $val = $this->getBackingStore()->get('screensaverTimeout');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'screensaverTimeout'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('backlightBrightness', $this->getBacklightBrightness());
        $writer->writeDateIntervalValue('backlightTimeout', $this->getBacklightTimeout());
        $writer->writeBooleanValue('isHighContrastEnabled', $this->getIsHighContrastEnabled());
        $writer->writeBooleanValue('isScreensaverEnabled', $this->getIsScreensaverEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateIntervalValue('screensaverTimeout', $this->getScreensaverTimeout());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the backlightBrightness property value. The brightness level on the device (0-100). Not applicable for Microsoft Teams Rooms devices.
     * @param int|null $value Value to set for the backlightBrightness property.
    */
    public function setBacklightBrightness(?int $value): void {
        $this->getBackingStore()->set('backlightBrightness', $value);
    }

    /**
     * Sets the backlightTimeout property value. Timeout for backlight (30-3600 secs). Not applicable for Teams Rooms devices.
     * @param DateInterval|null $value Value to set for the backlightTimeout property.
    */
    public function setBacklightTimeout(?DateInterval $value): void {
        $this->getBackingStore()->set('backlightTimeout', $value);
    }

    /**
     * Sets the isHighContrastEnabled property value. True if high contrast mode is enabled. Not applicable for Teams Rooms devices.
     * @param bool|null $value Value to set for the isHighContrastEnabled property.
    */
    public function setIsHighContrastEnabled(?bool $value): void {
        $this->getBackingStore()->set('isHighContrastEnabled', $value);
    }

    /**
     * Sets the isScreensaverEnabled property value. True if screensaver is enabled. Not applicable for Teams Rooms devices.
     * @param bool|null $value Value to set for the isScreensaverEnabled property.
    */
    public function setIsScreensaverEnabled(?bool $value): void {
        $this->getBackingStore()->set('isScreensaverEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the screensaverTimeout property value. Screensaver timeout from 30 to 3600 secs. Not applicable for Teams Rooms devices.
     * @param DateInterval|null $value Value to set for the screensaverTimeout property.
    */
    public function setScreensaverTimeout(?DateInterval $value): void {
        $this->getBackingStore()->set('screensaverTimeout', $value);
    }

}
