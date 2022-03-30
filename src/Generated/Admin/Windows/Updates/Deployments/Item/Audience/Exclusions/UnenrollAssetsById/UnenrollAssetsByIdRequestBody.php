<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Deployments\Item\Audience\Exclusions\UnenrollAssetsById;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\WindowsUpdates\UpdateCategory;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnenrollAssetsByIdRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $ids  */
    private ?array $ids = null;
    
    /** @var string|null $memberEntityType  */
    private ?string $memberEntityType = null;
    
    /** @var UpdateCategory|null $updateCategory  */
    private ?UpdateCategory $updateCategory = null;
    
    /**
     * Instantiates a new unenrollAssetsByIdRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnenrollAssetsByIdRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UnenrollAssetsByIdRequestBody {
        return new UnenrollAssetsByIdRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'ids' => function (self $o, ParseNode $n) { $o->setIds($n->getCollectionOfPrimitiveValues()); },
            'memberEntityType' => function (self $o, ParseNode $n) { $o->setMemberEntityType($n->getStringValue()); },
            'updateCategory' => function (self $o, ParseNode $n) { $o->setUpdateCategory($n->getEnumValue(UpdateCategory::class)); },
        ];
    }

    /**
     * Gets the ids property value. 
     * @return array<string>|null
    */
    public function getIds(): ?array {
        return $this->ids;
    }

    /**
     * Gets the memberEntityType property value. 
     * @return string|null
    */
    public function getMemberEntityType(): ?string {
        return $this->memberEntityType;
    }

    /**
     * Gets the updateCategory property value. 
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
        $writer->writeCollectionOfPrimitiveValues('ids', $this->ids);
        $writer->writeStringValue('memberEntityType', $this->memberEntityType);
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
     * Sets the ids property value. 
     *  @param array<string>|null $value Value to set for the ids property.
    */
    public function setIds(?array $value ): void {
        $this->ids = $value;
    }

    /**
     * Sets the memberEntityType property value. 
     *  @param string|null $value Value to set for the memberEntityType property.
    */
    public function setMemberEntityType(?string $value ): void {
        $this->memberEntityType = $value;
    }

    /**
     * Sets the updateCategory property value. 
     *  @param UpdateCategory|null $value Value to set for the updateCategory property.
    */
    public function setUpdateCategory(?UpdateCategory $value ): void {
        $this->updateCategory = $value;
    }

}
