<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class EducationAiFeedbackSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new EducationAiFeedbackSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationAiFeedbackSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationAiFeedbackSettings {
        return new EducationAiFeedbackSettings();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the audienceEngagementSettings property value. The audience engagement related feedback types that students should receive from the AI feedback.
     * @return EducationAiFeedbackAudienceEngagementSettings|null
    */
    public function getAudienceEngagementSettings(): ?EducationAiFeedbackAudienceEngagementSettings {
        $val = $this->getBackingStore()->get('audienceEngagementSettings');
        if (is_null($val) || $val instanceof EducationAiFeedbackAudienceEngagementSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'audienceEngagementSettings'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the contentSettings property value. The content related feedback types that students should receive from the AI feedback.
     * @return EducationAiFeedbackContentSettings|null
    */
    public function getContentSettings(): ?EducationAiFeedbackContentSettings {
        $val = $this->getBackingStore()->get('contentSettings');
        if (is_null($val) || $val instanceof EducationAiFeedbackContentSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentSettings'");
    }

    /**
     * Gets the deliverySettings property value. The delivery related feedback types that students should receive from the AI feedback.
     * @return EducationAiFeedbackDeliverySettings|null
    */
    public function getDeliverySettings(): ?EducationAiFeedbackDeliverySettings {
        $val = $this->getBackingStore()->get('deliverySettings');
        if (is_null($val) || $val instanceof EducationAiFeedbackDeliverySettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deliverySettings'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'audienceEngagementSettings' => fn(ParseNode $n) => $o->setAudienceEngagementSettings($n->getObjectValue([EducationAiFeedbackAudienceEngagementSettings::class, 'createFromDiscriminatorValue'])),
            'contentSettings' => fn(ParseNode $n) => $o->setContentSettings($n->getObjectValue([EducationAiFeedbackContentSettings::class, 'createFromDiscriminatorValue'])),
            'deliverySettings' => fn(ParseNode $n) => $o->setDeliverySettings($n->getObjectValue([EducationAiFeedbackDeliverySettings::class, 'createFromDiscriminatorValue'])),
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
        $writer->writeObjectValue('audienceEngagementSettings', $this->getAudienceEngagementSettings());
        $writer->writeObjectValue('contentSettings', $this->getContentSettings());
        $writer->writeObjectValue('deliverySettings', $this->getDeliverySettings());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the audienceEngagementSettings property value. The audience engagement related feedback types that students should receive from the AI feedback.
     * @param EducationAiFeedbackAudienceEngagementSettings|null $value Value to set for the audienceEngagementSettings property.
    */
    public function setAudienceEngagementSettings(?EducationAiFeedbackAudienceEngagementSettings $value): void {
        $this->getBackingStore()->set('audienceEngagementSettings', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the contentSettings property value. The content related feedback types that students should receive from the AI feedback.
     * @param EducationAiFeedbackContentSettings|null $value Value to set for the contentSettings property.
    */
    public function setContentSettings(?EducationAiFeedbackContentSettings $value): void {
        $this->getBackingStore()->set('contentSettings', $value);
    }

    /**
     * Sets the deliverySettings property value. The delivery related feedback types that students should receive from the AI feedback.
     * @param EducationAiFeedbackDeliverySettings|null $value Value to set for the deliverySettings property.
    */
    public function setDeliverySettings(?EducationAiFeedbackDeliverySettings $value): void {
        $this->getBackingStore()->set('deliverySettings', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
