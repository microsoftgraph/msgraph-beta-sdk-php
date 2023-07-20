<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CustomerVoiceSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new customerVoiceSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerVoiceSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerVoiceSettings {
        return new CustomerVoiceSettings();
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
            'isInOrgFormsPhishingScanEnabled' => fn(ParseNode $n) => $o->setIsInOrgFormsPhishingScanEnabled($n->getBooleanValue()),
            'isRecordIdentityByDefaultEnabled' => fn(ParseNode $n) => $o->setIsRecordIdentityByDefaultEnabled($n->getBooleanValue()),
            'isRestrictedSurveyAccessEnabled' => fn(ParseNode $n) => $o->setIsRestrictedSurveyAccessEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isInOrgFormsPhishingScanEnabled property value. Controls whether phishing protection is run on forms created by users, blocking the creation of forms if common phishing questions are detected.
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
     * Gets the isRecordIdentityByDefaultEnabled property value. Controls whether the names of users who fill out forms are recorded.
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
     * Gets the isRestrictedSurveyAccessEnabled property value. Controls whether only users inside your organization can submit a response.
     * @return bool|null
    */
    public function getIsRestrictedSurveyAccessEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isRestrictedSurveyAccessEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRestrictedSurveyAccessEnabled'");
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
        $writer->writeBooleanValue('isInOrgFormsPhishingScanEnabled', $this->getIsInOrgFormsPhishingScanEnabled());
        $writer->writeBooleanValue('isRecordIdentityByDefaultEnabled', $this->getIsRecordIdentityByDefaultEnabled());
        $writer->writeBooleanValue('isRestrictedSurveyAccessEnabled', $this->getIsRestrictedSurveyAccessEnabled());
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
     * Sets the isInOrgFormsPhishingScanEnabled property value. Controls whether phishing protection is run on forms created by users, blocking the creation of forms if common phishing questions are detected.
     * @param bool|null $value Value to set for the isInOrgFormsPhishingScanEnabled property.
    */
    public function setIsInOrgFormsPhishingScanEnabled(?bool $value): void {
        $this->getBackingStore()->set('isInOrgFormsPhishingScanEnabled', $value);
    }

    /**
     * Sets the isRecordIdentityByDefaultEnabled property value. Controls whether the names of users who fill out forms are recorded.
     * @param bool|null $value Value to set for the isRecordIdentityByDefaultEnabled property.
    */
    public function setIsRecordIdentityByDefaultEnabled(?bool $value): void {
        $this->getBackingStore()->set('isRecordIdentityByDefaultEnabled', $value);
    }

    /**
     * Sets the isRestrictedSurveyAccessEnabled property value. Controls whether only users inside your organization can submit a response.
     * @param bool|null $value Value to set for the isRestrictedSurveyAccessEnabled property.
    */
    public function setIsRestrictedSurveyAccessEnabled(?bool $value): void {
        $this->getBackingStore()->set('isRestrictedSurveyAccessEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
