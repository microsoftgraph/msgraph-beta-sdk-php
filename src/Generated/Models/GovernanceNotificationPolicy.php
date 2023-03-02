<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class GovernanceNotificationPolicy implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new governanceNotificationPolicy and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernanceNotificationPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GovernanceNotificationPolicy {
        return new GovernanceNotificationPolicy();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
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
     * Gets the enabledTemplateTypes property value. The enabledTemplateTypes property
     * @return array<string>|null
    */
    public function getEnabledTemplateTypes(): ?array {
        return $this->getBackingStore()->get('enabledTemplateTypes');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enabledTemplateTypes' => fn(ParseNode $n) => $o->setEnabledTemplateTypes($n->getCollectionOfPrimitiveValues()),
            'notificationTemplates' => fn(ParseNode $n) => $o->setNotificationTemplates($n->getCollectionOfObjectValues([GovernanceNotificationTemplate::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the notificationTemplates property value. The notificationTemplates property
     * @return array<GovernanceNotificationTemplate>|null
    */
    public function getNotificationTemplates(): ?array {
        return $this->getBackingStore()->get('notificationTemplates');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('enabledTemplateTypes', $this->getEnabledTemplateTypes());
        $writer->writeCollectionOfObjectValues('notificationTemplates', $this->getNotificationTemplates());
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
     * Sets the enabledTemplateTypes property value. The enabledTemplateTypes property
     * @param array<string>|null $value Value to set for the enabledTemplateTypes property.
    */
    public function setEnabledTemplateTypes(?array $value): void {
        $this->getBackingStore()->set('enabledTemplateTypes', $value);
    }

    /**
     * Sets the notificationTemplates property value. The notificationTemplates property
     * @param array<GovernanceNotificationTemplate>|null $value Value to set for the notificationTemplates property.
    */
    public function setNotificationTemplates(?array $value): void {
        $this->getBackingStore()->set('notificationTemplates', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
