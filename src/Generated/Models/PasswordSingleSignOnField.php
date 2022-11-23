<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PasswordSingleSignOnField implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new passwordSingleSignOnField and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PasswordSingleSignOnField
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PasswordSingleSignOnField {
        return new PasswordSingleSignOnField();
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
     * Gets the customizedLabel property value. Title/label override for customization.
     * @return string|null
    */
    public function getCustomizedLabel(): ?string {
        return $this->getBackingStore()->get('customizedLabel');
    }

    /**
     * Gets the defaultLabel property value. Label that would be used if no customizedLabel is provided. Read only.
     * @return string|null
    */
    public function getDefaultLabel(): ?string {
        return $this->getBackingStore()->get('defaultLabel');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'customizedLabel' => fn(ParseNode $n) => $o->setCustomizedLabel($n->getStringValue()),
            'defaultLabel' => fn(ParseNode $n) => $o->setDefaultLabel($n->getStringValue()),
            'fieldId' => fn(ParseNode $n) => $o->setFieldId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the fieldId property value. Id used to identity the field type. This is an internal id and possible values are param_1, param_2, param_userName, param_password.
     * @return string|null
    */
    public function getFieldId(): ?string {
        return $this->getBackingStore()->get('fieldId');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the type property value. Type of the credential. The values can be text, password.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('customizedLabel', $this->getCustomizedLabel());
        $writer->writeStringValue('defaultLabel', $this->getDefaultLabel());
        $writer->writeStringValue('fieldId', $this->getFieldId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('type', $this->getType());
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
     * Sets the customizedLabel property value. Title/label override for customization.
     *  @param string|null $value Value to set for the customizedLabel property.
    */
    public function setCustomizedLabel(?string $value): void {
        $this->getBackingStore()->set('customizedLabel', $value);
    }

    /**
     * Sets the defaultLabel property value. Label that would be used if no customizedLabel is provided. Read only.
     *  @param string|null $value Value to set for the defaultLabel property.
    */
    public function setDefaultLabel(?string $value): void {
        $this->getBackingStore()->set('defaultLabel', $value);
    }

    /**
     * Sets the fieldId property value. Id used to identity the field type. This is an internal id and possible values are param_1, param_2, param_userName, param_password.
     *  @param string|null $value Value to set for the fieldId property.
    */
    public function setFieldId(?string $value): void {
        $this->getBackingStore()->set('fieldId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the type property value. Type of the credential. The values can be text, password.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
