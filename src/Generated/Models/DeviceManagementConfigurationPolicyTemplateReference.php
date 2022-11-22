<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DeviceManagementConfigurationPolicyTemplateReference implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new deviceManagementConfigurationPolicyTemplateReference and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'templateDisplayName' => fn(ParseNode $n) => $o->setTemplateDisplayName($n->getStringValue()),
            'templateDisplayVersion' => fn(ParseNode $n) => $o->setTemplateDisplayVersion($n->getStringValue()),
            'templateFamily' => fn(ParseNode $n) => $o->setTemplateFamily($n->getEnumValue(DeviceManagementConfigurationTemplateFamily::class)),
            'templateId' => fn(ParseNode $n) => $o->setTemplateId($n->getStringValue()),
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
     * Gets the templateDisplayName property value. Template Display Name of the referenced template. This property is read-only.
     * @return string|null
    */
    public function getTemplateDisplayName(): ?string {
        return $this->getBackingStore()->get('templateDisplayName');
    }

    /**
     * Gets the templateDisplayVersion property value. Template Display Version of the referenced Template. This property is read-only.
     * @return string|null
    */
    public function getTemplateDisplayVersion(): ?string {
        return $this->getBackingStore()->get('templateDisplayVersion');
    }

    /**
     * Gets the templateFamily property value. Describes the TemplateFamily for the Template entity
     * @return DeviceManagementConfigurationTemplateFamily|null
    */
    public function getTemplateFamily(): ?DeviceManagementConfigurationTemplateFamily {
        return $this->getBackingStore()->get('templateFamily');
    }

    /**
     * Gets the templateId property value. Template id
     * @return string|null
    */
    public function getTemplateId(): ?string {
        return $this->getBackingStore()->get('templateId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('templateFamily', $this->getTemplateFamily());
        $writer->writeStringValue('templateId', $this->getTemplateId());
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the templateDisplayName property value. Template Display Name of the referenced template. This property is read-only.
     *  @param string|null $value Value to set for the templateDisplayName property.
    */
    public function setTemplateDisplayName(?string $value): void {
        $this->getBackingStore()->set('templateDisplayName', $value);
    }

    /**
     * Sets the templateDisplayVersion property value. Template Display Version of the referenced Template. This property is read-only.
     *  @param string|null $value Value to set for the templateDisplayVersion property.
    */
    public function setTemplateDisplayVersion(?string $value): void {
        $this->getBackingStore()->set('templateDisplayVersion', $value);
    }

    /**
     * Sets the templateFamily property value. Describes the TemplateFamily for the Template entity
     *  @param DeviceManagementConfigurationTemplateFamily|null $value Value to set for the templateFamily property.
    */
    public function setTemplateFamily(?DeviceManagementConfigurationTemplateFamily $value): void {
        $this->getBackingStore()->set('templateFamily', $value);
    }

    /**
     * Sets the templateId property value. Template id
     *  @param string|null $value Value to set for the templateId property.
    */
    public function setTemplateId(?string $value): void {
        $this->getBackingStore()->set('templateId', $value);
    }

}
