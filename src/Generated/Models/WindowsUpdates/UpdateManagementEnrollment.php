<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateManagementEnrollment extends UpdatableAssetEnrollment implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var UpdateCategory|null $updateCategory The category of updates that the service manages. Supports a subset of the values for updateCategory. Possible values are: feature, unknownFutureValue.
    */
    private ?UpdateCategory $updateCategory = null;
    
    /**
     * Instantiates a new UpdateManagementEnrollment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateManagementEnrollment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateManagementEnrollment {
        return new UpdateManagementEnrollment();
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
        return array_merge(parent::getFieldDeserializers(), [
            'updateCategory' => function (ParseNode $n) use ($o) { $o->setUpdateCategory($n->getEnumValue(UpdateCategory::class)); },
        ]);
    }

    /**
     * Gets the updateCategory property value. The category of updates that the service manages. Supports a subset of the values for updateCategory. Possible values are: feature, unknownFutureValue.
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
        parent::serialize($writer);
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
     * Sets the updateCategory property value. The category of updates that the service manages. Supports a subset of the values for updateCategory. Possible values are: feature, unknownFutureValue.
     *  @param UpdateCategory|null $value Value to set for the updateCategory property.
    */
    public function setUpdateCategory(?UpdateCategory $value ): void {
        $this->updateCategory = $value;
    }

}
