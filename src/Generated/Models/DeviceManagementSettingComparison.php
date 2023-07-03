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
 * Entity representing setting comparison result
*/
class DeviceManagementSettingComparison implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new deviceManagementSettingComparison and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettingComparison
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettingComparison {
        return new DeviceManagementSettingComparison();
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
     * Gets the comparisonResult property value. Setting comparison result type
     * @return DeviceManagementComparisonResult|null
    */
    public function getComparisonResult(): ?DeviceManagementComparisonResult {
        $val = $this->getBackingStore()->get('comparisonResult');
        if (is_null($val) || $val instanceof DeviceManagementComparisonResult) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'comparisonResult'");
    }

    /**
     * Gets the currentValueJson property value. JSON representation of current intent (or) template setting's value
     * @return string|null
    */
    public function getCurrentValueJson(): ?string {
        $val = $this->getBackingStore()->get('currentValueJson');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'currentValueJson'");
    }

    /**
     * Gets the definitionId property value. The ID of the setting definition for this instance
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
     * Gets the displayName property value. The setting's display name
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'comparisonResult' => fn(ParseNode $n) => $o->setComparisonResult($n->getEnumValue(DeviceManagementComparisonResult::class)),
            'currentValueJson' => fn(ParseNode $n) => $o->setCurrentValueJson($n->getStringValue()),
            'definitionId' => fn(ParseNode $n) => $o->setDefinitionId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'newValueJson' => fn(ParseNode $n) => $o->setNewValueJson($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The setting ID
     * @return string|null
    */
    public function getId(): ?string {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
    }

    /**
     * Gets the newValueJson property value. JSON representation of new template setting's value
     * @return string|null
    */
    public function getNewValueJson(): ?string {
        $val = $this->getBackingStore()->get('newValueJson');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'newValueJson'");
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
        $writer->writeEnumValue('comparisonResult', $this->getComparisonResult());
        $writer->writeStringValue('currentValueJson', $this->getCurrentValueJson());
        $writer->writeStringValue('definitionId', $this->getDefinitionId());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('newValueJson', $this->getNewValueJson());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the comparisonResult property value. Setting comparison result type
     * @param DeviceManagementComparisonResult|null $value Value to set for the comparisonResult property.
    */
    public function setComparisonResult(?DeviceManagementComparisonResult $value): void {
        $this->getBackingStore()->set('comparisonResult', $value);
    }

    /**
     * Sets the currentValueJson property value. JSON representation of current intent (or) template setting's value
     * @param string|null $value Value to set for the currentValueJson property.
    */
    public function setCurrentValueJson(?string $value): void {
        $this->getBackingStore()->set('currentValueJson', $value);
    }

    /**
     * Sets the definitionId property value. The ID of the setting definition for this instance
     * @param string|null $value Value to set for the definitionId property.
    */
    public function setDefinitionId(?string $value): void {
        $this->getBackingStore()->set('definitionId', $value);
    }

    /**
     * Sets the displayName property value. The setting's display name
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the id property value. The setting ID
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the newValueJson property value. JSON representation of new template setting's value
     * @param string|null $value Value to set for the newValueJson property.
    */
    public function setNewValueJson(?string $value): void {
        $this->getBackingStore()->set('newValueJson', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
