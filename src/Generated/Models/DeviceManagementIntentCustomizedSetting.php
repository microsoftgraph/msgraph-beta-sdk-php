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
 * Default and customized value of a setting in a Security Baseline
*/
class DeviceManagementIntentCustomizedSetting implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new deviceManagementIntentCustomizedSetting and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementIntentCustomizedSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementIntentCustomizedSetting {
        return new DeviceManagementIntentCustomizedSetting();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the customizedJson property value. JSON representation of the customized value, if different from default
     * @return string|null
    */
    public function getCustomizedJson(): ?string {
        $val = $this->getBackingStore()->get('customizedJson');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customizedJson'");
    }

    /**
     * Gets the defaultJson property value. JSON representation of the default value from the template
     * @return string|null
    */
    public function getDefaultJson(): ?string {
        $val = $this->getBackingStore()->get('defaultJson');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultJson'");
    }

    /**
     * Gets the definitionId property value. The ID of the setting definition for this setting
     * @return string|null
    */
    public function getDefinitionId(): ?string {
        $val = $this->getBackingStore()->get('definitionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'definitionId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'customizedJson' => fn(ParseNode $n) => $o->setCustomizedJson($n->getStringValue()),
            'defaultJson' => fn(ParseNode $n) => $o->setDefaultJson($n->getStringValue()),
            'definitionId' => fn(ParseNode $n) => $o->setDefinitionId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('customizedJson', $this->getCustomizedJson());
        $writer->writeStringValue('defaultJson', $this->getDefaultJson());
        $writer->writeStringValue('definitionId', $this->getDefinitionId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the customizedJson property value. JSON representation of the customized value, if different from default
     * @param string|null $value Value to set for the customizedJson property.
    */
    public function setCustomizedJson(?string $value): void {
        $this->getBackingStore()->set('customizedJson', $value);
    }

    /**
     * Sets the defaultJson property value. JSON representation of the default value from the template
     * @param string|null $value Value to set for the defaultJson property.
    */
    public function setDefaultJson(?string $value): void {
        $this->getBackingStore()->set('defaultJson', $value);
    }

    /**
     * Sets the definitionId property value. The ID of the setting definition for this setting
     * @param string|null $value Value to set for the definitionId property.
    */
    public function setDefinitionId(?string $value): void {
        $this->getBackingStore()->set('definitionId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
