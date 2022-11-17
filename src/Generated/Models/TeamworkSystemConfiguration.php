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

class TeamworkSystemConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new teamworkSystemConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.teamworkSystemConfiguration');
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
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the dateTimeConfiguration property value. The date and time configurations for a device.
     * @return TeamworkDateTimeConfiguration|null
    */
    public function getDateTimeConfiguration(): ?TeamworkDateTimeConfiguration {
        return $this->getBackingStore()->get('dateTimeConfiguration');
    }

    /**
     * Gets the defaultPassword property value. The default password for the device. Write-Only.
     * @return string|null
    */
    public function getDefaultPassword(): ?string {
        return $this->getBackingStore()->get('defaultPassword');
    }

    /**
     * Gets the deviceLockTimeout property value. The device lock timeout in seconds.
     * @return DateInterval|null
    */
    public function getDeviceLockTimeout(): ?DateInterval {
        return $this->getBackingStore()->get('deviceLockTimeout');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dateTimeConfiguration' => fn(ParseNode $n) => $o->setDateTimeConfiguration($n->getObjectValue([TeamworkDateTimeConfiguration::class, 'createFromDiscriminatorValue'])),
            'defaultPassword' => fn(ParseNode $n) => $o->setDefaultPassword($n->getStringValue()),
            'deviceLockTimeout' => fn(ParseNode $n) => $o->setDeviceLockTimeout($n->getDateIntervalValue()),
            'isDeviceLockEnabled' => fn(ParseNode $n) => $o->setIsDeviceLockEnabled($n->getBooleanValue()),
            'isLoggingEnabled' => fn(ParseNode $n) => $o->setIsLoggingEnabled($n->getBooleanValue()),
            'isPowerSavingEnabled' => fn(ParseNode $n) => $o->setIsPowerSavingEnabled($n->getBooleanValue()),
            'isScreenCaptureEnabled' => fn(ParseNode $n) => $o->setIsScreenCaptureEnabled($n->getBooleanValue()),
            'isSilentModeEnabled' => fn(ParseNode $n) => $o->setIsSilentModeEnabled($n->getBooleanValue()),
            'language' => fn(ParseNode $n) => $o->setLanguage($n->getStringValue()),
            'lockPin' => fn(ParseNode $n) => $o->setLockPin($n->getStringValue()),
            'loggingLevel' => fn(ParseNode $n) => $o->setLoggingLevel($n->getStringValue()),
            'networkConfiguration' => fn(ParseNode $n) => $o->setNetworkConfiguration($n->getObjectValue([TeamworkNetworkConfiguration::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isDeviceLockEnabled property value. True if the device lock is enabled.
     * @return bool|null
    */
    public function getIsDeviceLockEnabled(): ?bool {
        return $this->getBackingStore()->get('isDeviceLockEnabled');
    }

    /**
     * Gets the isLoggingEnabled property value. True if logging is enabled.
     * @return bool|null
    */
    public function getIsLoggingEnabled(): ?bool {
        return $this->getBackingStore()->get('isLoggingEnabled');
    }

    /**
     * Gets the isPowerSavingEnabled property value. True if power saving is enabled.
     * @return bool|null
    */
    public function getIsPowerSavingEnabled(): ?bool {
        return $this->getBackingStore()->get('isPowerSavingEnabled');
    }

    /**
     * Gets the isScreenCaptureEnabled property value. True if screen capture is enabled.
     * @return bool|null
    */
    public function getIsScreenCaptureEnabled(): ?bool {
        return $this->getBackingStore()->get('isScreenCaptureEnabled');
    }

    /**
     * Gets the isSilentModeEnabled property value. True if silent mode is enabled.
     * @return bool|null
    */
    public function getIsSilentModeEnabled(): ?bool {
        return $this->getBackingStore()->get('isSilentModeEnabled');
    }

    /**
     * Gets the language property value. The language option for the device.
     * @return string|null
    */
    public function getLanguage(): ?string {
        return $this->getBackingStore()->get('language');
    }

    /**
     * Gets the lockPin property value. The pin that unlocks the device. Write-Only.
     * @return string|null
    */
    public function getLockPin(): ?string {
        return $this->getBackingStore()->get('lockPin');
    }

    /**
     * Gets the loggingLevel property value. The logging level for the device.
     * @return string|null
    */
    public function getLoggingLevel(): ?string {
        return $this->getBackingStore()->get('loggingLevel');
    }

    /**
     * Gets the networkConfiguration property value. The network configuration for the device.
     * @return TeamworkNetworkConfiguration|null
    */
    public function getNetworkConfiguration(): ?TeamworkNetworkConfiguration {
        return $this->getBackingStore()->get('networkConfiguration');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('dateTimeConfiguration', $this->getDateTimeConfiguration());
        $writer->writeStringValue('defaultPassword', $this->getDefaultPassword());
        $writer->writeDateIntervalValue('deviceLockTimeout', $this->getDeviceLockTimeout());
        $writer->writeBooleanValue('isDeviceLockEnabled', $this->getIsDeviceLockEnabled());
        $writer->writeBooleanValue('isLoggingEnabled', $this->getIsLoggingEnabled());
        $writer->writeBooleanValue('isPowerSavingEnabled', $this->getIsPowerSavingEnabled());
        $writer->writeBooleanValue('isScreenCaptureEnabled', $this->getIsScreenCaptureEnabled());
        $writer->writeBooleanValue('isSilentModeEnabled', $this->getIsSilentModeEnabled());
        $writer->writeStringValue('language', $this->getLanguage());
        $writer->writeStringValue('lockPin', $this->getLockPin());
        $writer->writeStringValue('loggingLevel', $this->getLoggingLevel());
        $writer->writeObjectValue('networkConfiguration', $this->getNetworkConfiguration());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the dateTimeConfiguration property value. The date and time configurations for a device.
     *  @param TeamworkDateTimeConfiguration|null $value Value to set for the dateTimeConfiguration property.
    */
    public function setDateTimeConfiguration(?TeamworkDateTimeConfiguration $value): void {
        $this->getBackingStore()->set('dateTimeConfiguration', $value);
    }

    /**
     * Sets the defaultPassword property value. The default password for the device. Write-Only.
     *  @param string|null $value Value to set for the defaultPassword property.
    */
    public function setDefaultPassword(?string $value): void {
        $this->getBackingStore()->set('defaultPassword', $value);
    }

    /**
     * Sets the deviceLockTimeout property value. The device lock timeout in seconds.
     *  @param DateInterval|null $value Value to set for the deviceLockTimeout property.
    */
    public function setDeviceLockTimeout(?DateInterval $value): void {
        $this->getBackingStore()->set('deviceLockTimeout', $value);
    }

    /**
     * Sets the isDeviceLockEnabled property value. True if the device lock is enabled.
     *  @param bool|null $value Value to set for the isDeviceLockEnabled property.
    */
    public function setIsDeviceLockEnabled(?bool $value): void {
        $this->getBackingStore()->set('isDeviceLockEnabled', $value);
    }

    /**
     * Sets the isLoggingEnabled property value. True if logging is enabled.
     *  @param bool|null $value Value to set for the isLoggingEnabled property.
    */
    public function setIsLoggingEnabled(?bool $value): void {
        $this->getBackingStore()->set('isLoggingEnabled', $value);
    }

    /**
     * Sets the isPowerSavingEnabled property value. True if power saving is enabled.
     *  @param bool|null $value Value to set for the isPowerSavingEnabled property.
    */
    public function setIsPowerSavingEnabled(?bool $value): void {
        $this->getBackingStore()->set('isPowerSavingEnabled', $value);
    }

    /**
     * Sets the isScreenCaptureEnabled property value. True if screen capture is enabled.
     *  @param bool|null $value Value to set for the isScreenCaptureEnabled property.
    */
    public function setIsScreenCaptureEnabled(?bool $value): void {
        $this->getBackingStore()->set('isScreenCaptureEnabled', $value);
    }

    /**
     * Sets the isSilentModeEnabled property value. True if silent mode is enabled.
     *  @param bool|null $value Value to set for the isSilentModeEnabled property.
    */
    public function setIsSilentModeEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSilentModeEnabled', $value);
    }

    /**
     * Sets the language property value. The language option for the device.
     *  @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value): void {
        $this->getBackingStore()->set('language', $value);
    }

    /**
     * Sets the lockPin property value. The pin that unlocks the device. Write-Only.
     *  @param string|null $value Value to set for the lockPin property.
    */
    public function setLockPin(?string $value): void {
        $this->getBackingStore()->set('lockPin', $value);
    }

    /**
     * Sets the loggingLevel property value. The logging level for the device.
     *  @param string|null $value Value to set for the loggingLevel property.
    */
    public function setLoggingLevel(?string $value): void {
        $this->getBackingStore()->set('loggingLevel', $value);
    }

    /**
     * Sets the networkConfiguration property value. The network configuration for the device.
     *  @param TeamworkNetworkConfiguration|null $value Value to set for the networkConfiguration property.
    */
    public function setNetworkConfiguration(?TeamworkNetworkConfiguration $value): void {
        $this->getBackingStore()->set('networkConfiguration', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
