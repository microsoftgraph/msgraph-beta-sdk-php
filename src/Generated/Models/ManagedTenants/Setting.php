<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Setting implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $displayName The display name for the setting. Required. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $jsonValue The value for the setting serialized as string of JSON. Required. Read-only.
    */
    private ?string $jsonValue = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var bool|null $overwriteAllowed A flag indicating whether the setting can be override existing configurations when applied. Required. Read-only.
    */
    private ?bool $overwriteAllowed = null;
    
    /**
     * @var string|null $settingId The settingId property
    */
    private ?string $settingId = null;
    
    /**
     * @var ManagementParameterValueType|null $valueType The valueType property
    */
    private ?ManagementParameterValueType $valueType = null;
    
    /**
     * Instantiates a new setting and sets the default values.
    */
    public function __construct() {
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. The display name for the setting. Required. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'jsonValue' => function (ParseNode $n) use ($o) { $o->setJsonValue($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'overwriteAllowed' => function (ParseNode $n) use ($o) { $o->setOverwriteAllowed($n->getBooleanValue()); },
            'settingId' => function (ParseNode $n) use ($o) { $o->setSettingId($n->getStringValue()); },
            'valueType' => function (ParseNode $n) use ($o) { $o->setValueType($n->getEnumValue(ManagementParameterValueType::class)); },
        ];
    }

    /**
     * Gets the jsonValue property value. The value for the setting serialized as string of JSON. Required. Read-only.
     * @return string|null
    */
    public function getJsonValue(): ?string {
        return $this->jsonValue;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the overwriteAllowed property value. A flag indicating whether the setting can be override existing configurations when applied. Required. Read-only.
     * @return bool|null
    */
    public function getOverwriteAllowed(): ?bool {
        return $this->overwriteAllowed;
    }

    /**
     * Gets the settingId property value. The settingId property
     * @return string|null
    */
    public function getSettingId(): ?string {
        return $this->settingId;
    }

    /**
     * Gets the valueType property value. The valueType property
     * @return ManagementParameterValueType|null
    */
    public function getValueType(): ?ManagementParameterValueType {
        return $this->valueType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('jsonValue', $this->jsonValue);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeBooleanValue('overwriteAllowed', $this->overwriteAllowed);
        $writer->writeStringValue('settingId', $this->settingId);
        $writer->writeEnumValue('valueType', $this->valueType);
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
     * Sets the displayName property value. The display name for the setting. Required. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the jsonValue property value. The value for the setting serialized as string of JSON. Required. Read-only.
     *  @param string|null $value Value to set for the jsonValue property.
    */
    public function setJsonValue(?string $value ): void {
        $this->jsonValue = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the overwriteAllowed property value. A flag indicating whether the setting can be override existing configurations when applied. Required. Read-only.
     *  @param bool|null $value Value to set for the overwriteAllowed property.
    */
    public function setOverwriteAllowed(?bool $value ): void {
        $this->overwriteAllowed = $value;
    }

    /**
     * Sets the settingId property value. The settingId property
     *  @param string|null $value Value to set for the settingId property.
    */
    public function setSettingId(?string $value ): void {
        $this->settingId = $value;
    }

    /**
     * Sets the valueType property value. The valueType property
     *  @param ManagementParameterValueType|null $value Value to set for the valueType property.
    */
    public function setValueType(?ManagementParameterValueType $value ): void {
        $this->valueType = $value;
    }

}
