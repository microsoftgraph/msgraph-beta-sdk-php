<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Deployments\Item\Audience\Members\EnrollAssetsById;

use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\UpdateCategory;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EnrollAssetsByIdPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $ids The ids property
    */
    private ?array $ids = null;
    
    /**
     * @var string|null $memberEntityType The memberEntityType property
    */
    private ?string $memberEntityType = null;
    
    /**
     * @var UpdateCategory|null $updateCategory The updateCategory property
    */
    private ?UpdateCategory $updateCategory = null;
    
    /**
     * Instantiates a new enrollAssetsByIdPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EnrollAssetsByIdPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EnrollAssetsByIdPostRequestBody {
        return new EnrollAssetsByIdPostRequestBody();
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
        $o = $this;
        return  [
            'ids' => function (ParseNode $n) use ($o) { $o->setIds($n->getCollectionOfPrimitiveValues()); },
            'memberEntityType' => function (ParseNode $n) use ($o) { $o->setMemberEntityType($n->getStringValue()); },
            'updateCategory' => function (ParseNode $n) use ($o) { $o->setUpdateCategory($n->getEnumValue(UpdateCategory::class)); },
        ];
    }

    /**
     * Gets the ids property value. The ids property
     * @return array<string>|null
    */
    public function getIds(): ?array {
        return $this->ids;
    }

    /**
     * Gets the memberEntityType property value. The memberEntityType property
     * @return string|null
    */
    public function getMemberEntityType(): ?string {
        return $this->memberEntityType;
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
     * Sets the ids property value. The ids property
     *  @param array<string>|null $value Value to set for the ids property.
    */
    public function setIds(?array $value ): void {
        $this->ids = $value;
    }

    /**
     * Sets the memberEntityType property value. The memberEntityType property
     *  @param string|null $value Value to set for the memberEntityType property.
    */
    public function setMemberEntityType(?string $value ): void {
        $this->memberEntityType = $value;
    }

    /**
     * Sets the updateCategory property value. The updateCategory property
     *  @param UpdateCategory|null $value Value to set for the updateCategory property.
    */
    public function setUpdateCategory(?UpdateCategory $value ): void {
        $this->updateCategory = $value;
    }

}
