<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Deployments\Item\Audience\UpdateAudience;

use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\UpdatableAsset;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UpdateAudiencePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new updateAudiencePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateAudiencePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateAudiencePostRequestBody {
        return new UpdateAudiencePostRequestBody();
    }

    /**
     * Gets the addExclusions property value. The addExclusions property
     * @return array<UpdatableAsset>|null
    */
    public function getAddExclusions(): ?array {
        return $this->getBackingStore()->get('addExclusions');
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the addMembers property value. The addMembers property
     * @return array<UpdatableAsset>|null
    */
    public function getAddMembers(): ?array {
        return $this->getBackingStore()->get('addMembers');
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
            'addExclusions' => fn(ParseNode $n) => $o->setAddExclusions($n->getCollectionOfObjectValues([UpdatableAsset::class, 'createFromDiscriminatorValue'])),
            'addMembers' => fn(ParseNode $n) => $o->setAddMembers($n->getCollectionOfObjectValues([UpdatableAsset::class, 'createFromDiscriminatorValue'])),
            'removeExclusions' => fn(ParseNode $n) => $o->setRemoveExclusions($n->getCollectionOfObjectValues([UpdatableAsset::class, 'createFromDiscriminatorValue'])),
            'removeMembers' => fn(ParseNode $n) => $o->setRemoveMembers($n->getCollectionOfObjectValues([UpdatableAsset::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the removeExclusions property value. The removeExclusions property
     * @return array<UpdatableAsset>|null
    */
    public function getRemoveExclusions(): ?array {
        return $this->getBackingStore()->get('removeExclusions');
    }

    /**
     * Gets the removeMembers property value. The removeMembers property
     * @return array<UpdatableAsset>|null
    */
    public function getRemoveMembers(): ?array {
        return $this->getBackingStore()->get('removeMembers');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('addExclusions', $this->getAddExclusions());
        $writer->writeCollectionOfObjectValues('addMembers', $this->getAddMembers());
        $writer->writeCollectionOfObjectValues('removeExclusions', $this->getRemoveExclusions());
        $writer->writeCollectionOfObjectValues('removeMembers', $this->getRemoveMembers());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the addExclusions property value. The addExclusions property
     *  @param array<UpdatableAsset>|null $value Value to set for the addExclusions property.
    */
    public function setAddExclusions(?array $value): void {
        $this->getBackingStore()->set('addExclusions', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the addMembers property value. The addMembers property
     *  @param array<UpdatableAsset>|null $value Value to set for the addMembers property.
    */
    public function setAddMembers(?array $value): void {
        $this->getBackingStore()->set('addMembers', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the removeExclusions property value. The removeExclusions property
     *  @param array<UpdatableAsset>|null $value Value to set for the removeExclusions property.
    */
    public function setRemoveExclusions(?array $value): void {
        $this->getBackingStore()->set('removeExclusions', $value);
    }

    /**
     * Sets the removeMembers property value. The removeMembers property
     *  @param array<UpdatableAsset>|null $value Value to set for the removeMembers property.
    */
    public function setRemoveMembers(?array $value): void {
        $this->getBackingStore()->set('removeMembers', $value);
    }

}
