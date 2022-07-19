<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationGroupSettingValueTemplate implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<DeviceManagementConfigurationSettingInstanceTemplate>|null $children Group setting value children
    */
    private ?array $children = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $settingValueTemplateId Setting Value Template Id
    */
    private ?string $settingValueTemplateId = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationGroupSettingValueTemplate and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationGroupSettingValueTemplate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationGroupSettingValueTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationGroupSettingValueTemplate {
        return new DeviceManagementConfigurationGroupSettingValueTemplate();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the children property value. Group setting value children
     * @return array<DeviceManagementConfigurationSettingInstanceTemplate>|null
    */
    public function getChildren(): ?array {
        return $this->children;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'children' => function (ParseNode $n) use ($o) { $o->setChildren($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationSettingInstanceTemplate::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'settingValueTemplateId' => function (ParseNode $n) use ($o) { $o->setSettingValueTemplateId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the settingValueTemplateId property value. Setting Value Template Id
     * @return string|null
    */
    public function getSettingValueTemplateId(): ?string {
        return $this->settingValueTemplateId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('children', $this->children);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('settingValueTemplateId', $this->settingValueTemplateId);
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
     * Sets the children property value. Group setting value children
     *  @param array<DeviceManagementConfigurationSettingInstanceTemplate>|null $value Value to set for the children property.
    */
    public function setChildren(?array $value ): void {
        $this->children = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the settingValueTemplateId property value. Setting Value Template Id
     *  @param string|null $value Value to set for the settingValueTemplateId property.
    */
    public function setSettingValueTemplateId(?string $value ): void {
        $this->settingValueTemplateId = $value;
    }

}
