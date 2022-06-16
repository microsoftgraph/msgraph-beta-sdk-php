<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Deployments\Item\Audience\Exclusions\UnenrollAssets;

use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\UpdatableAsset;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\UpdateCategory;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnenrollAssetsRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<UpdatableAsset>|null $assets The assets property */
    private ?array $assets = null;
    
    /** @var UpdateCategory|null $updateCategory The updateCategory property */
    private ?UpdateCategory $updateCategory = null;
    
    /**
     * Instantiates a new unenrollAssetsRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnenrollAssetsRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UnenrollAssetsRequestBody {
        return new UnenrollAssetsRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assets property value. The assets property
     * @return array<UpdatableAsset>|null
    */
    public function getAssets(): ?array {
        return $this->assets;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'assets' => function (self $o, ParseNode $n) { $o->setAssets($n->getCollectionOfObjectValues(UpdatableAsset::class)); },
            'updateCategory' => function (self $o, ParseNode $n) { $o->setUpdateCategory($n->getEnumValue(UpdateCategory::class)); },
        ];
    }

    /**
     * Gets the updateCategory property value. The updateCategory property
     * @return UpdateCategory|null
    */
    public function getUpdateCategory(): ?UpdateCategory {
        return $this->updateCategory;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('assets', $this->assets);
        $writer->writeEnumValue('updateCategory', $this->updateCategory);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the assets property value. The assets property
     *  @param array<UpdatableAsset>|null $value Value to set for the assets property.
    */
    public function setAssets(?array $value ): void {
        $this->assets = $value;
    }

    /**
     * Sets the updateCategory property value. The updateCategory property
     *  @param UpdateCategory|null $value Value to set for the updateCategory property.
    */
    public function setUpdateCategory(?UpdateCategory $value ): void {
        $this->updateCategory = $value;
    }

}
