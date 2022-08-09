<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationPolicyTemplateReference implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $templateDisplayName Template Display Name of the referenced template. This property is read-only.
    */
    private ?string $templateDisplayName = null;
    
    /**
     * @var string|null $templateDisplayVersion Template Display Version of the referenced Template. This property is read-only.
    */
    private ?string $templateDisplayVersion = null;
    
    /**
     * @var DeviceManagementConfigurationTemplateFamily|null $templateFamily Describes the TemplateFamily for the Template entity
    */
    private ?DeviceManagementConfigurationTemplateFamily $templateFamily = null;
    
    /**
     * @var string|null $templateId Template id
    */
    private ?string $templateId = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationPolicyTemplateReference and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationPolicyTemplateReference');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationPolicyTemplateReference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationPolicyTemplateReference {
        return new DeviceManagementConfigurationPolicyTemplateReference();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'templateDisplayName' => function (ParseNode $n) use ($o) { $o->setTemplateDisplayName($n->getStringValue()); },
            'templateDisplayVersion' => function (ParseNode $n) use ($o) { $o->setTemplateDisplayVersion($n->getStringValue()); },
            'templateFamily' => function (ParseNode $n) use ($o) { $o->setTemplateFamily($n->getEnumValue(DeviceManagementConfigurationTemplateFamily::class)); },
            'templateId' => function (ParseNode $n) use ($o) { $o->setTemplateId($n->getStringValue()); },
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
     * Gets the templateDisplayName property value. Template Display Name of the referenced template. This property is read-only.
     * @return string|null
    */
    public function getTemplateDisplayName(): ?string {
        return $this->templateDisplayName;
    }

    /**
     * Gets the templateDisplayVersion property value. Template Display Version of the referenced Template. This property is read-only.
     * @return string|null
    */
    public function getTemplateDisplayVersion(): ?string {
        return $this->templateDisplayVersion;
    }

    /**
     * Gets the templateFamily property value. Describes the TemplateFamily for the Template entity
     * @return DeviceManagementConfigurationTemplateFamily|null
    */
    public function getTemplateFamily(): ?DeviceManagementConfigurationTemplateFamily {
        return $this->templateFamily;
    }

    /**
     * Gets the templateId property value. Template id
     * @return string|null
    */
    public function getTemplateId(): ?string {
        return $this->templateId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('templateDisplayName', $this->templateDisplayName);
        $writer->writeStringValue('templateDisplayVersion', $this->templateDisplayVersion);
        $writer->writeEnumValue('templateFamily', $this->templateFamily);
        $writer->writeStringValue('templateId', $this->templateId);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the templateDisplayName property value. Template Display Name of the referenced template. This property is read-only.
     *  @param string|null $value Value to set for the templateDisplayName property.
    */
    public function setTemplateDisplayName(?string $value ): void {
        $this->templateDisplayName = $value;
    }

    /**
     * Sets the templateDisplayVersion property value. Template Display Version of the referenced Template. This property is read-only.
     *  @param string|null $value Value to set for the templateDisplayVersion property.
    */
    public function setTemplateDisplayVersion(?string $value ): void {
        $this->templateDisplayVersion = $value;
    }

    /**
     * Sets the templateFamily property value. Describes the TemplateFamily for the Template entity
     *  @param DeviceManagementConfigurationTemplateFamily|null $value Value to set for the templateFamily property.
    */
    public function setTemplateFamily(?DeviceManagementConfigurationTemplateFamily $value ): void {
        $this->templateFamily = $value;
    }

    /**
     * Sets the templateId property value. Template id
     *  @param string|null $value Value to set for the templateId property.
    */
    public function setTemplateId(?string $value ): void {
        $this->templateId = $value;
    }

}
