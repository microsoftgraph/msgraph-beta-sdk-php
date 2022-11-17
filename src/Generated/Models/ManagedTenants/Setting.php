<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Setting implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new setting and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.managedTenants.setting');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Setting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Setting {
        return new Setting();
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
     * Gets the displayName property value. The display name for the setting. Required. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'jsonValue' => fn(ParseNode $n) => $o->setJsonValue($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'overwriteAllowed' => fn(ParseNode $n) => $o->setOverwriteAllowed($n->getBooleanValue()),
            'settingId' => fn(ParseNode $n) => $o->setSettingId($n->getStringValue()),
            'valueType' => fn(ParseNode $n) => $o->setValueType($n->getEnumValue(ManagementParameterValueType::class)),
        ];
    }

    /**
     * Gets the jsonValue property value. The value for the setting serialized as string of JSON. Required. Read-only.
     * @return string|null
    */
    public function getJsonValue(): ?string {
        return $this->getBackingStore()->get('jsonValue');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the overwriteAllowed property value. A flag indicating whether the setting can be override existing configurations when applied. Required. Read-only.
     * @return bool|null
    */
    public function getOverwriteAllowed(): ?bool {
        return $this->getBackingStore()->get('overwriteAllowed');
    }

    /**
     * Gets the settingId property value. The settingId property
     * @return string|null
    */
    public function getSettingId(): ?string {
        return $this->getBackingStore()->get('settingId');
    }

    /**
     * Gets the valueType property value. The valueType property
     * @return ManagementParameterValueType|null
    */
    public function getValueType(): ?ManagementParameterValueType {
        return $this->getBackingStore()->get('valueType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('jsonValue', $this->getJsonValue());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('overwriteAllowed', $this->getOverwriteAllowed());
        $writer->writeStringValue('settingId', $this->getSettingId());
        $writer->writeEnumValue('valueType', $this->getValueType());
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
     * Sets the displayName property value. The display name for the setting. Required. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the jsonValue property value. The value for the setting serialized as string of JSON. Required. Read-only.
     *  @param string|null $value Value to set for the jsonValue property.
    */
    public function setJsonValue(?string $value): void {
        $this->getBackingStore()->set('jsonValue', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the overwriteAllowed property value. A flag indicating whether the setting can be override existing configurations when applied. Required. Read-only.
     *  @param bool|null $value Value to set for the overwriteAllowed property.
    */
    public function setOverwriteAllowed(?bool $value): void {
        $this->getBackingStore()->set('overwriteAllowed', $value);
    }

    /**
     * Sets the settingId property value. The settingId property
     *  @param string|null $value Value to set for the settingId property.
    */
    public function setSettingId(?string $value): void {
        $this->getBackingStore()->set('settingId', $value);
    }

    /**
     * Sets the valueType property value. The valueType property
     *  @param ManagementParameterValueType|null $value Value to set for the valueType property.
    */
    public function setValueType(?ManagementParameterValueType $value): void {
        $this->getBackingStore()->set('valueType', $value);
    }

}
