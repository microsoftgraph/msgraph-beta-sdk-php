<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\MigrateToTemplate;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class MigrateToTemplatePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new migrateToTemplatePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MigrateToTemplatePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MigrateToTemplatePostRequestBody {
        return new MigrateToTemplatePostRequestBody();
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
            'newTemplateId' => fn(ParseNode $n) => $o->setNewTemplateId($n->getStringValue()),
            'preserveCustomValues' => fn(ParseNode $n) => $o->setPreserveCustomValues($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the newTemplateId property value. The newTemplateId property
     * @return string|null
    */
    public function getNewTemplateId(): ?string {
        return $this->getBackingStore()->get('newTemplateId');
    }

    /**
     * Gets the preserveCustomValues property value. The preserveCustomValues property
     * @return bool|null
    */
    public function getPreserveCustomValues(): ?bool {
        return $this->getBackingStore()->get('preserveCustomValues');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('newTemplateId', $this->getNewTemplateId());
        $writer->writeBooleanValue('preserveCustomValues', $this->getPreserveCustomValues());
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
     * Sets the newTemplateId property value. The newTemplateId property
     *  @param string|null $value Value to set for the newTemplateId property.
    */
    public function setNewTemplateId(?string $value): void {
        $this->getBackingStore()->set('newTemplateId', $value);
    }

    /**
     * Sets the preserveCustomValues property value. The preserveCustomValues property
     *  @param bool|null $value Value to set for the preserveCustomValues property.
    */
    public function setPreserveCustomValues(?bool $value): void {
        $this->getBackingStore()->set('preserveCustomValues', $value);
    }

}
