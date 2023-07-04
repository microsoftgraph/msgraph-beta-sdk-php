<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class FormsSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new FormsSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FormsSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FormsSettings {
        return new FormsSettings();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'isBingImageSearchEnabled' => fn(ParseNode $n) => $o->setIsBingImageSearchEnabled($n->getBooleanValue()),
            'isExternalSendFormEnabled' => fn(ParseNode $n) => $o->setIsExternalSendFormEnabled($n->getBooleanValue()),
            'isExternalShareCollaborationEnabled' => fn(ParseNode $n) => $o->setIsExternalShareCollaborationEnabled($n->getBooleanValue()),
            'isExternalShareResultEnabled' => fn(ParseNode $n) => $o->setIsExternalShareResultEnabled($n->getBooleanValue()),
            'isExternalShareTemplateEnabled' => fn(ParseNode $n) => $o->setIsExternalShareTemplateEnabled($n->getBooleanValue()),
            'isInOrgFormsPhishingScanEnabled' => fn(ParseNode $n) => $o->setIsInOrgFormsPhishingScanEnabled($n->getBooleanValue()),
            'isRecordIdentityByDefaultEnabled' => fn(ParseNode $n) => $o->setIsRecordIdentityByDefaultEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isBingImageSearchEnabled property value. The isBingImageSearchEnabled property
     * @return bool|null
    */
    public function getIsBingImageSearchEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isBingImageSearchEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isBingImageSearchEnabled'");
    }

    /**
     * Gets the isExternalSendFormEnabled property value. The isExternalSendFormEnabled property
     * @return bool|null
    */
    public function getIsExternalSendFormEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isExternalSendFormEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isExternalSendFormEnabled'");
    }

    /**
     * Gets the isExternalShareCollaborationEnabled property value. The isExternalShareCollaborationEnabled property
     * @return bool|null
    */
    public function getIsExternalShareCollaborationEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isExternalShareCollaborationEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isExternalShareCollaborationEnabled'");
    }

    /**
     * Gets the isExternalShareResultEnabled property value. The isExternalShareResultEnabled property
     * @return bool|null
    */
    public function getIsExternalShareResultEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isExternalShareResultEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isExternalShareResultEnabled'");
    }

    /**
     * Gets the isExternalShareTemplateEnabled property value. The isExternalShareTemplateEnabled property
     * @return bool|null
    */
    public function getIsExternalShareTemplateEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isExternalShareTemplateEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isExternalShareTemplateEnabled'");
    }

    /**
     * Gets the isInOrgFormsPhishingScanEnabled property value. The isInOrgFormsPhishingScanEnabled property
     * @return bool|null
    */
    public function getIsInOrgFormsPhishingScanEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isInOrgFormsPhishingScanEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isInOrgFormsPhishingScanEnabled'");
    }

    /**
     * Gets the isRecordIdentityByDefaultEnabled property value. The isRecordIdentityByDefaultEnabled property
     * @return bool|null
    */
    public function getIsRecordIdentityByDefaultEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isRecordIdentityByDefaultEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRecordIdentityByDefaultEnabled'");
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
        $writer->writeBooleanValue('isBingImageSearchEnabled', $this->getIsBingImageSearchEnabled());
        $writer->writeBooleanValue('isExternalSendFormEnabled', $this->getIsExternalSendFormEnabled());
        $writer->writeBooleanValue('isExternalShareCollaborationEnabled', $this->getIsExternalShareCollaborationEnabled());
        $writer->writeBooleanValue('isExternalShareResultEnabled', $this->getIsExternalShareResultEnabled());
        $writer->writeBooleanValue('isExternalShareTemplateEnabled', $this->getIsExternalShareTemplateEnabled());
        $writer->writeBooleanValue('isInOrgFormsPhishingScanEnabled', $this->getIsInOrgFormsPhishingScanEnabled());
        $writer->writeBooleanValue('isRecordIdentityByDefaultEnabled', $this->getIsRecordIdentityByDefaultEnabled());
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
     * Sets the isBingImageSearchEnabled property value. The isBingImageSearchEnabled property
     * @param bool|null $value Value to set for the isBingImageSearchEnabled property.
    */
    public function setIsBingImageSearchEnabled(?bool $value): void {
        $this->getBackingStore()->set('isBingImageSearchEnabled', $value);
    }

    /**
     * Sets the isExternalSendFormEnabled property value. The isExternalSendFormEnabled property
     * @param bool|null $value Value to set for the isExternalSendFormEnabled property.
    */
    public function setIsExternalSendFormEnabled(?bool $value): void {
        $this->getBackingStore()->set('isExternalSendFormEnabled', $value);
    }

    /**
     * Sets the isExternalShareCollaborationEnabled property value. The isExternalShareCollaborationEnabled property
     * @param bool|null $value Value to set for the isExternalShareCollaborationEnabled property.
    */
    public function setIsExternalShareCollaborationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isExternalShareCollaborationEnabled', $value);
    }

    /**
     * Sets the isExternalShareResultEnabled property value. The isExternalShareResultEnabled property
     * @param bool|null $value Value to set for the isExternalShareResultEnabled property.
    */
    public function setIsExternalShareResultEnabled(?bool $value): void {
        $this->getBackingStore()->set('isExternalShareResultEnabled', $value);
    }

    /**
     * Sets the isExternalShareTemplateEnabled property value. The isExternalShareTemplateEnabled property
     * @param bool|null $value Value to set for the isExternalShareTemplateEnabled property.
    */
    public function setIsExternalShareTemplateEnabled(?bool $value): void {
        $this->getBackingStore()->set('isExternalShareTemplateEnabled', $value);
    }

    /**
     * Sets the isInOrgFormsPhishingScanEnabled property value. The isInOrgFormsPhishingScanEnabled property
     * @param bool|null $value Value to set for the isInOrgFormsPhishingScanEnabled property.
    */
    public function setIsInOrgFormsPhishingScanEnabled(?bool $value): void {
        $this->getBackingStore()->set('isInOrgFormsPhishingScanEnabled', $value);
    }

    /**
     * Sets the isRecordIdentityByDefaultEnabled property value. The isRecordIdentityByDefaultEnabled property
     * @param bool|null $value Value to set for the isRecordIdentityByDefaultEnabled property.
    */
    public function setIsRecordIdentityByDefaultEnabled(?bool $value): void {
        $this->getBackingStore()->set('isRecordIdentityByDefaultEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
