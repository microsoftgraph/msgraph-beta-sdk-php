<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkDisplayScreenConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $backlightBrightness The brightness level on the device (0-100). Not applicable for Microsoft Teams Rooms devices.
    */
    private ?int $backlightBrightness = null;
    
    /**
     * @var DateInterval|null $backlightTimeout Timeout for backlight (30-3600 secs). Not applicable for Teams Rooms devices.
    */
    private ?DateInterval $backlightTimeout = null;
    
    /**
     * @var bool|null $isHighContrastEnabled True if high contrast mode is enabled. Not applicable for Teams Rooms devices.
    */
    private ?bool $isHighContrastEnabled = null;
    
    /**
     * @var bool|null $isScreensaverEnabled True if screensaver is enabled. Not applicable for Teams Rooms devices.
    */
    private ?bool $isScreensaverEnabled = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DateInterval|null $screensaverTimeout Screensaver timeout from 30 to 3600 secs. Not applicable for Teams Rooms devices.
    */
    private ?DateInterval $screensaverTimeout = null;
    
    /**
     * Instantiates a new teamworkDisplayScreenConfiguration and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.teamworkDisplayScreenConfiguration');
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the backlightBrightness property value. The brightness level on the device (0-100). Not applicable for Microsoft Teams Rooms devices.
     * @return int|null
    */
    public function getBacklightBrightness(): ?int {
        return $this->backlightBrightness;
    }

    /**
     * Gets the backlightTimeout property value. Timeout for backlight (30-3600 secs). Not applicable for Teams Rooms devices.
     * @return DateInterval|null
    */
    public function getBacklightTimeout(): ?DateInterval {
        return $this->backlightTimeout;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->isHighContrastEnabled;
    }

    /**
     * Gets the isScreensaverEnabled property value. True if screensaver is enabled. Not applicable for Teams Rooms devices.
     * @return bool|null
    */
    public function getIsScreensaverEnabled(): ?bool {
        return $this->isScreensaverEnabled;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the screensaverTimeout property value. Screensaver timeout from 30 to 3600 secs. Not applicable for Teams Rooms devices.
     * @return DateInterval|null
    */
    public function getScreensaverTimeout(): ?DateInterval {
        return $this->screensaverTimeout;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('backlightBrightness', $this->backlightBrightness);
        $writer->writeDateIntervalValue('backlightTimeout', $this->backlightTimeout);
        $writer->writeBooleanValue('isHighContrastEnabled', $this->isHighContrastEnabled);
        $writer->writeBooleanValue('isScreensaverEnabled', $this->isScreensaverEnabled);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeDateIntervalValue('screensaverTimeout', $this->screensaverTimeout);
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
     * Sets the backlightBrightness property value. The brightness level on the device (0-100). Not applicable for Microsoft Teams Rooms devices.
     *  @param int|null $value Value to set for the backlightBrightness property.
    */
    public function setBacklightBrightness(?int $value ): void {
        $this->backlightBrightness = $value;
    }

    /**
     * Sets the backlightTimeout property value. Timeout for backlight (30-3600 secs). Not applicable for Teams Rooms devices.
     *  @param DateInterval|null $value Value to set for the backlightTimeout property.
    */
    public function setBacklightTimeout(?DateInterval $value ): void {
        $this->backlightTimeout = $value;
    }

    /**
     * Sets the isHighContrastEnabled property value. True if high contrast mode is enabled. Not applicable for Teams Rooms devices.
     *  @param bool|null $value Value to set for the isHighContrastEnabled property.
    */
    public function setIsHighContrastEnabled(?bool $value ): void {
        $this->isHighContrastEnabled = $value;
    }

    /**
     * Sets the isScreensaverEnabled property value. True if screensaver is enabled. Not applicable for Teams Rooms devices.
     *  @param bool|null $value Value to set for the isScreensaverEnabled property.
    */
    public function setIsScreensaverEnabled(?bool $value ): void {
        $this->isScreensaverEnabled = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the screensaverTimeout property value. Screensaver timeout from 30 to 3600 secs. Not applicable for Teams Rooms devices.
     *  @param DateInterval|null $value Value to set for the screensaverTimeout property.
    */
    public function setScreensaverTimeout(?DateInterval $value ): void {
        $this->screensaverTimeout = $value;
    }

}
