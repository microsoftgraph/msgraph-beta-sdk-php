<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkSystemConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var TeamworkDateTimeConfiguration|null $dateTimeConfiguration The date and time configurations for a device.
    */
    private ?TeamworkDateTimeConfiguration $dateTimeConfiguration = null;
    
    /**
     * @var string|null $defaultPassword The default password for the device. Write-Only.
    */
    private ?string $defaultPassword = null;
    
    /**
     * @var DateInterval|null $deviceLockTimeout The device lock timeout in seconds.
    */
    private ?DateInterval $deviceLockTimeout = null;
    
    /**
     * @var bool|null $isDeviceLockEnabled True if the device lock is enabled.
    */
    private ?bool $isDeviceLockEnabled = null;
    
    /**
     * @var bool|null $isLoggingEnabled True if logging is enabled.
    */
    private ?bool $isLoggingEnabled = null;
    
    /**
     * @var bool|null $isPowerSavingEnabled True if power saving is enabled.
    */
    private ?bool $isPowerSavingEnabled = null;
    
    /**
     * @var bool|null $isScreenCaptureEnabled True if screen capture is enabled.
    */
    private ?bool $isScreenCaptureEnabled = null;
    
    /**
     * @var bool|null $isSilentModeEnabled True if silent mode is enabled.
    */
    private ?bool $isSilentModeEnabled = null;
    
    /**
     * @var string|null $language The language option for the device.
    */
    private ?string $language = null;
    
    /**
     * @var string|null $lockPin The pin that unlocks the device. Write-Only.
    */
    private ?string $lockPin = null;
    
    /**
     * @var string|null $loggingLevel The logging level for the device.
    */
    private ?string $loggingLevel = null;
    
    /**
     * @var TeamworkNetworkConfiguration|null $networkConfiguration The network configuration for the device.
    */
    private ?TeamworkNetworkConfiguration $networkConfiguration = null;
    
    /**
     * Instantiates a new teamworkSystemConfiguration and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkSystemConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkSystemConfiguration {
        return new TeamworkSystemConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the dateTimeConfiguration property value. The date and time configurations for a device.
     * @return TeamworkDateTimeConfiguration|null
    */
    public function getDateTimeConfiguration(): ?TeamworkDateTimeConfiguration {
        return $this->dateTimeConfiguration;
    }

    /**
     * Gets the defaultPassword property value. The default password for the device. Write-Only.
     * @return string|null
    */
    public function getDefaultPassword(): ?string {
        return $this->defaultPassword;
    }

    /**
     * Gets the deviceLockTimeout property value. The device lock timeout in seconds.
     * @return DateInterval|null
    */
    public function getDeviceLockTimeout(): ?DateInterval {
        return $this->deviceLockTimeout;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dateTimeConfiguration' => function (ParseNode $n) use ($o) { $o->setDateTimeConfiguration($n->getObjectValue(array(TeamworkDateTimeConfiguration::class, 'createFromDiscriminatorValue'))); },
            'defaultPassword' => function (ParseNode $n) use ($o) { $o->setDefaultPassword($n->getStringValue()); },
            'deviceLockTimeout' => function (ParseNode $n) use ($o) { $o->setDeviceLockTimeout($n->getDateIntervalValue()); },
            'isDeviceLockEnabled' => function (ParseNode $n) use ($o) { $o->setIsDeviceLockEnabled($n->getBooleanValue()); },
            'isLoggingEnabled' => function (ParseNode $n) use ($o) { $o->setIsLoggingEnabled($n->getBooleanValue()); },
            'isPowerSavingEnabled' => function (ParseNode $n) use ($o) { $o->setIsPowerSavingEnabled($n->getBooleanValue()); },
            'isScreenCaptureEnabled' => function (ParseNode $n) use ($o) { $o->setIsScreenCaptureEnabled($n->getBooleanValue()); },
            'isSilentModeEnabled' => function (ParseNode $n) use ($o) { $o->setIsSilentModeEnabled($n->getBooleanValue()); },
            'language' => function (ParseNode $n) use ($o) { $o->setLanguage($n->getStringValue()); },
            'lockPin' => function (ParseNode $n) use ($o) { $o->setLockPin($n->getStringValue()); },
            'loggingLevel' => function (ParseNode $n) use ($o) { $o->setLoggingLevel($n->getStringValue()); },
            'networkConfiguration' => function (ParseNode $n) use ($o) { $o->setNetworkConfiguration($n->getObjectValue(array(TeamworkNetworkConfiguration::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the isDeviceLockEnabled property value. True if the device lock is enabled.
     * @return bool|null
    */
    public function getIsDeviceLockEnabled(): ?bool {
        return $this->isDeviceLockEnabled;
    }

    /**
     * Gets the isLoggingEnabled property value. True if logging is enabled.
     * @return bool|null
    */
    public function getIsLoggingEnabled(): ?bool {
        return $this->isLoggingEnabled;
    }

    /**
     * Gets the isPowerSavingEnabled property value. True if power saving is enabled.
     * @return bool|null
    */
    public function getIsPowerSavingEnabled(): ?bool {
        return $this->isPowerSavingEnabled;
    }

    /**
     * Gets the isScreenCaptureEnabled property value. True if screen capture is enabled.
     * @return bool|null
    */
    public function getIsScreenCaptureEnabled(): ?bool {
        return $this->isScreenCaptureEnabled;
    }

    /**
     * Gets the isSilentModeEnabled property value. True if silent mode is enabled.
     * @return bool|null
    */
    public function getIsSilentModeEnabled(): ?bool {
        return $this->isSilentModeEnabled;
    }

    /**
     * Gets the language property value. The language option for the device.
     * @return string|null
    */
    public function getLanguage(): ?string {
        return $this->language;
    }

    /**
     * Gets the lockPin property value. The pin that unlocks the device. Write-Only.
     * @return string|null
    */
    public function getLockPin(): ?string {
        return $this->lockPin;
    }

    /**
     * Gets the loggingLevel property value. The logging level for the device.
     * @return string|null
    */
    public function getLoggingLevel(): ?string {
        return $this->loggingLevel;
    }

    /**
     * Gets the networkConfiguration property value. The network configuration for the device.
     * @return TeamworkNetworkConfiguration|null
    */
    public function getNetworkConfiguration(): ?TeamworkNetworkConfiguration {
        return $this->networkConfiguration;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('dateTimeConfiguration', $this->dateTimeConfiguration);
        $writer->writeStringValue('defaultPassword', $this->defaultPassword);
        $writer->writeDateIntervalValue('deviceLockTimeout', $this->deviceLockTimeout);
        $writer->writeBooleanValue('isDeviceLockEnabled', $this->isDeviceLockEnabled);
        $writer->writeBooleanValue('isLoggingEnabled', $this->isLoggingEnabled);
        $writer->writeBooleanValue('isPowerSavingEnabled', $this->isPowerSavingEnabled);
        $writer->writeBooleanValue('isScreenCaptureEnabled', $this->isScreenCaptureEnabled);
        $writer->writeBooleanValue('isSilentModeEnabled', $this->isSilentModeEnabled);
        $writer->writeStringValue('language', $this->language);
        $writer->writeStringValue('lockPin', $this->lockPin);
        $writer->writeStringValue('loggingLevel', $this->loggingLevel);
        $writer->writeObjectValue('networkConfiguration', $this->networkConfiguration);
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
     * Sets the dateTimeConfiguration property value. The date and time configurations for a device.
     *  @param TeamworkDateTimeConfiguration|null $value Value to set for the dateTimeConfiguration property.
    */
    public function setDateTimeConfiguration(?TeamworkDateTimeConfiguration $value ): void {
        $this->dateTimeConfiguration = $value;
    }

    /**
     * Sets the defaultPassword property value. The default password for the device. Write-Only.
     *  @param string|null $value Value to set for the defaultPassword property.
    */
    public function setDefaultPassword(?string $value ): void {
        $this->defaultPassword = $value;
    }

    /**
     * Sets the deviceLockTimeout property value. The device lock timeout in seconds.
     *  @param DateInterval|null $value Value to set for the deviceLockTimeout property.
    */
    public function setDeviceLockTimeout(?DateInterval $value ): void {
        $this->deviceLockTimeout = $value;
    }

    /**
     * Sets the isDeviceLockEnabled property value. True if the device lock is enabled.
     *  @param bool|null $value Value to set for the isDeviceLockEnabled property.
    */
    public function setIsDeviceLockEnabled(?bool $value ): void {
        $this->isDeviceLockEnabled = $value;
    }

    /**
     * Sets the isLoggingEnabled property value. True if logging is enabled.
     *  @param bool|null $value Value to set for the isLoggingEnabled property.
    */
    public function setIsLoggingEnabled(?bool $value ): void {
        $this->isLoggingEnabled = $value;
    }

    /**
     * Sets the isPowerSavingEnabled property value. True if power saving is enabled.
     *  @param bool|null $value Value to set for the isPowerSavingEnabled property.
    */
    public function setIsPowerSavingEnabled(?bool $value ): void {
        $this->isPowerSavingEnabled = $value;
    }

    /**
     * Sets the isScreenCaptureEnabled property value. True if screen capture is enabled.
     *  @param bool|null $value Value to set for the isScreenCaptureEnabled property.
    */
    public function setIsScreenCaptureEnabled(?bool $value ): void {
        $this->isScreenCaptureEnabled = $value;
    }

    /**
     * Sets the isSilentModeEnabled property value. True if silent mode is enabled.
     *  @param bool|null $value Value to set for the isSilentModeEnabled property.
    */
    public function setIsSilentModeEnabled(?bool $value ): void {
        $this->isSilentModeEnabled = $value;
    }

    /**
     * Sets the language property value. The language option for the device.
     *  @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value ): void {
        $this->language = $value;
    }

    /**
     * Sets the lockPin property value. The pin that unlocks the device. Write-Only.
     *  @param string|null $value Value to set for the lockPin property.
    */
    public function setLockPin(?string $value ): void {
        $this->lockPin = $value;
    }

    /**
     * Sets the loggingLevel property value. The logging level for the device.
     *  @param string|null $value Value to set for the loggingLevel property.
    */
    public function setLoggingLevel(?string $value ): void {
        $this->loggingLevel = $value;
    }

    /**
     * Sets the networkConfiguration property value. The network configuration for the device.
     *  @param TeamworkNetworkConfiguration|null $value Value to set for the networkConfiguration property.
    */
    public function setNetworkConfiguration(?TeamworkNetworkConfiguration $value ): void {
        $this->networkConfiguration = $value;
    }

}
