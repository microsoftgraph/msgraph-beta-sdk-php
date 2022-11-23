<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DeviceManagementConfigurationSettingApplicability implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new deviceManagementConfigurationSettingApplicability and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSettingApplicability
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSettingApplicability {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceManagementConfigurationExchangeOnlineSettingApplicability': return new DeviceManagementConfigurationExchangeOnlineSettingApplicability();
                case '#microsoft.graph.deviceManagementConfigurationWindowsSettingApplicability': return new DeviceManagementConfigurationWindowsSettingApplicability();
            }
        }
        return new DeviceManagementConfigurationSettingApplicability();
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
     * Gets the description property value. description of the setting
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the deviceMode property value. Describes applicability for the mode the device is in
     * @return DeviceManagementConfigurationDeviceMode|null
    */
    public function getDeviceMode(): ?DeviceManagementConfigurationDeviceMode {
        return $this->getBackingStore()->get('deviceMode');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'deviceMode' => fn(ParseNode $n) => $o->setDeviceMode($n->getEnumValue(DeviceManagementConfigurationDeviceMode::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'platform' => fn(ParseNode $n) => $o->setPlatform($n->getEnumValue(DeviceManagementConfigurationPlatforms::class)),
            'technologies' => fn(ParseNode $n) => $o->setTechnologies($n->getEnumValue(DeviceManagementConfigurationTechnologies::class)),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the platform property value. Supported platform types.
     * @return DeviceManagementConfigurationPlatforms|null
    */
    public function getPlatform(): ?DeviceManagementConfigurationPlatforms {
        return $this->getBackingStore()->get('platform');
    }

    /**
     * Gets the technologies property value. Describes which technology this setting can be deployed with
     * @return DeviceManagementConfigurationTechnologies|null
    */
    public function getTechnologies(): ?DeviceManagementConfigurationTechnologies {
        return $this->getBackingStore()->get('technologies');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeEnumValue('deviceMode', $this->getDeviceMode());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('platform', $this->getPlatform());
        $writer->writeEnumValue('technologies', $this->getTechnologies());
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
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the description property value. description of the setting
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the deviceMode property value. Describes applicability for the mode the device is in
     *  @param DeviceManagementConfigurationDeviceMode|null $value Value to set for the deviceMode property.
    */
    public function setDeviceMode(?DeviceManagementConfigurationDeviceMode $value): void {
        $this->getBackingStore()->set('deviceMode', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the platform property value. Supported platform types.
     *  @param DeviceManagementConfigurationPlatforms|null $value Value to set for the platform property.
    */
    public function setPlatform(?DeviceManagementConfigurationPlatforms $value): void {
        $this->getBackingStore()->set('platform', $value);
    }

    /**
     * Sets the technologies property value. Describes which technology this setting can be deployed with
     *  @param DeviceManagementConfigurationTechnologies|null $value Value to set for the technologies property.
    */
    public function setTechnologies(?DeviceManagementConfigurationTechnologies $value): void {
        $this->getBackingStore()->set('technologies', $value);
    }

}
