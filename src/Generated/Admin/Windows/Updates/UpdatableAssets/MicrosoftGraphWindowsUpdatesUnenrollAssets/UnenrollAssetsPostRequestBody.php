<?php

namespace Microsoft\\Graph\\Beta\\Generated\Admin\Windows\Updates\UpdatableAssets\MicrosoftGraphWindowsUpdatesUnenrollAssets;

use Microsoft\\Graph\\Beta\\Generated\Models\WindowsUpdates\UpdatableAsset;
use Microsoft\\Graph\\Beta\\Generated\Models\WindowsUpdates\UpdateCategory;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UnenrollAssetsPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UnenrollAssetsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnenrollAssetsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnenrollAssetsPostRequestBody {
        return new UnenrollAssetsPostRequestBody();
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
     * Gets the assets property value. The assets property
     * @return array<UpdatableAsset>|null
    */
    public function getAssets(): ?array {
        $val = $this->getBackingStore()->get('assets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UpdatableAsset::class);
            /** @var array<UpdatableAsset>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assets'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
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
            'assets' => fn(ParseNode $n) => $o->setAssets($n->getCollectionOfObjectValues([UpdatableAsset::class, 'createFromDiscriminatorValue'])),
            'updateCategory' => fn(ParseNode $n) => $o->setUpdateCategory($n->getEnumValue(UpdateCategory::class)),
        ];
    }

    /**
     * Gets the updateCategory property value. The updateCategory property
     * @return UpdateCategory|null
    */
    public function getUpdateCategory(): ?UpdateCategory {
        $val = $this->getBackingStore()->get('updateCategory');
        if (is_null($val) || $val instanceof UpdateCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updateCategory'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('assets', $this->getAssets());
        $writer->writeEnumValue('updateCategory', $this->getUpdateCategory());
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
     * Sets the assets property value. The assets property
     * @param array<UpdatableAsset>|null $value Value to set for the assets property.
    */
    public function setAssets(?array $value): void {
        $this->getBackingStore()->set('assets', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the updateCategory property value. The updateCategory property
     * @param UpdateCategory|null $value Value to set for the updateCategory property.
    */
    public function setUpdateCategory(?UpdateCategory $value): void {
        $this->getBackingStore()->set('updateCategory', $value);
    }

}
