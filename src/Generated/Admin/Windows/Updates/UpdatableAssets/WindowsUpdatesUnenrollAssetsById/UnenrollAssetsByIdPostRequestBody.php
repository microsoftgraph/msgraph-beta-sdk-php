<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatableAssets\WindowsUpdatesUnenrollAssetsById;

use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\UpdateCategory;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UnenrollAssetsByIdPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new unenrollAssetsByIdPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnenrollAssetsByIdPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnenrollAssetsByIdPostRequestBody {
        return new UnenrollAssetsByIdPostRequestBody();
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'ids' => fn(ParseNode $n) => $o->setIds($n->getCollectionOfPrimitiveValues()),
            'memberEntityType' => fn(ParseNode $n) => $o->setMemberEntityType($n->getStringValue()),
            'updateCategory' => fn(ParseNode $n) => $o->setUpdateCategory($n->getEnumValue(UpdateCategory::class)),
        ];
    }

    /**
     * Gets the ids property value. The ids property
     * @return array<string>|null
    */
    public function getIds(): ?array {
        return $this->getBackingStore()->get('ids');
    }

    /**
     * Gets the memberEntityType property value. The memberEntityType property
     * @return string|null
    */
    public function getMemberEntityType(): ?string {
        return $this->getBackingStore()->get('memberEntityType');
    }

    /**
     * Gets the updateCategory property value. The updateCategory property
     * @return UpdateCategory|null
    */
    public function getUpdateCategory(): ?UpdateCategory {
        return $this->getBackingStore()->get('updateCategory');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('ids', $this->getIds());
        $writer->writeStringValue('memberEntityType', $this->getMemberEntityType());
        $writer->writeEnumValue('updateCategory', $this->getUpdateCategory());
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
     * Sets the ids property value. The ids property
     * @param array<string>|null $value Value to set for the ids property.
    */
    public function setIds(?array $value): void {
        $this->getBackingStore()->set('ids', $value);
    }

    /**
     * Sets the memberEntityType property value. The memberEntityType property
     * @param string|null $value Value to set for the memberEntityType property.
    */
    public function setMemberEntityType(?string $value): void {
        $this->getBackingStore()->set('memberEntityType', $value);
    }

    /**
     * Sets the updateCategory property value. The updateCategory property
     * @param UpdateCategory|null $value Value to set for the updateCategory property.
    */
    public function setUpdateCategory(?UpdateCategory $value): void {
        $this->getBackingStore()->set('updateCategory', $value);
    }

}
