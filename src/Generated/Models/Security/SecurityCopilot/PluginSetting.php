<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\SecurityCopilot;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PluginSetting implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PluginSetting and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PluginSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PluginSetting {
        return new PluginSetting();
    }

    /**
     * Gets the acceptableValues property value. Acceptable values for plugin type
     * @return array<string>|null
    */
    public function getAcceptableValues(): ?array {
        $val = $this->getBackingStore()->get('acceptableValues');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'acceptableValues'");
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
     * Gets the defaultValue property value. Default value available for the plugin if not configured
     * @return string|null
    */
    public function getDefaultValue(): ?string {
        $val = $this->getBackingStore()->get('defaultValue');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultValue'");
    }

    /**
     * Gets the description property value. Description of the value requested
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayType property value. The displayType property
     * @return PluginSettingDisplayType|null
    */
    public function getDisplayType(): ?PluginSettingDisplayType {
        $val = $this->getBackingStore()->get('displayType');
        if (is_null($val) || $val instanceof PluginSettingDisplayType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'acceptableValues' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAcceptableValues($val);
            },
            'defaultValue' => fn(ParseNode $n) => $o->setDefaultValue($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayType' => fn(ParseNode $n) => $o->setDisplayType($n->getEnumValue(PluginSettingDisplayType::class)),
            'hintText' => fn(ParseNode $n) => $o->setHintText($n->getStringValue()),
            'isRequired' => fn(ParseNode $n) => $o->setIsRequired($n->getBooleanValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'settingValue' => fn(ParseNode $n) => $o->setSettingValue($n->getEnumValue(PluginSettingType::class)),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the hintText property value. Hint for the plugin
     * @return string|null
    */
    public function getHintText(): ?string {
        $val = $this->getBackingStore()->get('hintText');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hintText'");
    }

    /**
     * Gets the isRequired property value. Setting whether the value is required
     * @return bool|null
    */
    public function getIsRequired(): ?bool {
        $val = $this->getBackingStore()->get('isRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRequired'");
    }

    /**
     * Gets the label property value. Label for the setting
     * @return string|null
    */
    public function getLabel(): ?string {
        $val = $this->getBackingStore()->get('label');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'label'");
    }

    /**
     * Gets the name property value. Name of the setting
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
     * Gets the settingValue property value. The settingValue property
     * @return PluginSettingType|null
    */
    public function getSettingValue(): ?PluginSettingType {
        $val = $this->getBackingStore()->get('settingValue');
        if (is_null($val) || $val instanceof PluginSettingType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingValue'");
    }

    /**
     * Gets the value property value. Value
     * @return string|null
    */
    public function getValue(): ?string {
        $val = $this->getBackingStore()->get('value');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('acceptableValues', $this->getAcceptableValues());
        $writer->writeStringValue('defaultValue', $this->getDefaultValue());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeEnumValue('displayType', $this->getDisplayType());
        $writer->writeStringValue('hintText', $this->getHintText());
        $writer->writeBooleanValue('isRequired', $this->getIsRequired());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('settingValue', $this->getSettingValue());
        $writer->writeStringValue('value', $this->getValue());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the acceptableValues property value. Acceptable values for plugin type
     * @param array<string>|null $value Value to set for the acceptableValues property.
    */
    public function setAcceptableValues(?array $value): void {
        $this->getBackingStore()->set('acceptableValues', $value);
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
     * Sets the defaultValue property value. Default value available for the plugin if not configured
     * @param string|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?string $value): void {
        $this->getBackingStore()->set('defaultValue', $value);
    }

    /**
     * Sets the description property value. Description of the value requested
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayType property value. The displayType property
     * @param PluginSettingDisplayType|null $value Value to set for the displayType property.
    */
    public function setDisplayType(?PluginSettingDisplayType $value): void {
        $this->getBackingStore()->set('displayType', $value);
    }

    /**
     * Sets the hintText property value. Hint for the plugin
     * @param string|null $value Value to set for the hintText property.
    */
    public function setHintText(?string $value): void {
        $this->getBackingStore()->set('hintText', $value);
    }

    /**
     * Sets the isRequired property value. Setting whether the value is required
     * @param bool|null $value Value to set for the isRequired property.
    */
    public function setIsRequired(?bool $value): void {
        $this->getBackingStore()->set('isRequired', $value);
    }

    /**
     * Sets the label property value. Label for the setting
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->getBackingStore()->set('label', $value);
    }

    /**
     * Sets the name property value. Name of the setting
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
     * Sets the settingValue property value. The settingValue property
     * @param PluginSettingType|null $value Value to set for the settingValue property.
    */
    public function setSettingValue(?PluginSettingType $value): void {
        $this->getBackingStore()->set('settingValue', $value);
    }

    /**
     * Sets the value property value. Value
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
