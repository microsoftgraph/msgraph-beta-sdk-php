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
 * Represents the applicable versions for an Apple setting.
*/
class DeviceManagementConfigurationAppleSettingVersionApplicability implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DeviceManagementConfigurationAppleSettingVersionApplicability and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationAppleSettingVersionApplicability
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationAppleSettingVersionApplicability {
        return new DeviceManagementConfigurationAppleSettingVersionApplicability();
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
     * Gets the constraints property value. Indicates the supported channel types for an Apple setting.
     * @return DeviceManagementConfigurationAppleApplicabilityConstraint|null
    */
    public function getConstraints(): ?DeviceManagementConfigurationAppleApplicabilityConstraint {
        $val = $this->getBackingStore()->get('constraints');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationAppleApplicabilityConstraint) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'constraints'");
    }

    /**
     * Gets the deviceType property value. Indicates the supported device type for an apple setting.
     * @return DeviceManagementConfigurationAppleApplicabilityDeviceType|null
    */
    public function getDeviceType(): ?DeviceManagementConfigurationAppleApplicabilityDeviceType {
        $val = $this->getBackingStore()->get('deviceType');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationAppleApplicabilityDeviceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'constraints' => fn(ParseNode $n) => $o->setConstraints($n->getEnumValue(DeviceManagementConfigurationAppleApplicabilityConstraint::class)),
            'deviceType' => fn(ParseNode $n) => $o->setDeviceType($n->getEnumValue(DeviceManagementConfigurationAppleApplicabilityDeviceType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'supportedVersions' => fn(ParseNode $n) => $o->setSupportedVersions($n->getObjectValue([DeviceManagementConfigurationAppleOSSupportedVersions::class, 'createFromDiscriminatorValue'])),
        ];
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
     * Gets the supportedVersions property value. Indicates the version range for an apple setting.
     * @return DeviceManagementConfigurationAppleOSSupportedVersions|null
    */
    public function getSupportedVersions(): ?DeviceManagementConfigurationAppleOSSupportedVersions {
        $val = $this->getBackingStore()->get('supportedVersions');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationAppleOSSupportedVersions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedVersions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('constraints', $this->getConstraints());
        $writer->writeEnumValue('deviceType', $this->getDeviceType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('supportedVersions', $this->getSupportedVersions());
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
     * Sets the constraints property value. Indicates the supported channel types for an Apple setting.
     * @param DeviceManagementConfigurationAppleApplicabilityConstraint|null $value Value to set for the constraints property.
    */
    public function setConstraints(?DeviceManagementConfigurationAppleApplicabilityConstraint $value): void {
        $this->getBackingStore()->set('constraints', $value);
    }

    /**
     * Sets the deviceType property value. Indicates the supported device type for an apple setting.
     * @param DeviceManagementConfigurationAppleApplicabilityDeviceType|null $value Value to set for the deviceType property.
    */
    public function setDeviceType(?DeviceManagementConfigurationAppleApplicabilityDeviceType $value): void {
        $this->getBackingStore()->set('deviceType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the supportedVersions property value. Indicates the version range for an apple setting.
     * @param DeviceManagementConfigurationAppleOSSupportedVersions|null $value Value to set for the supportedVersions property.
    */
    public function setSupportedVersions(?DeviceManagementConfigurationAppleOSSupportedVersions $value): void {
        $this->getBackingStore()->set('supportedVersions', $value);
    }

}
