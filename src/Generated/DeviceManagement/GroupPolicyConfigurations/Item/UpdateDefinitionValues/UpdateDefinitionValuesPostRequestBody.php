<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyConfigurations\Item\UpdateDefinitionValues;

use Microsoft\Graph\Beta\Generated\Models\GroupPolicyDefinitionValue;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateDefinitionValuesPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<GroupPolicyDefinitionValue>|null $added The added property
    */
    private ?array $added = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $deletedIds The deletedIds property
    */
    private ?array $deletedIds = null;
    
    /**
     * @var array<GroupPolicyDefinitionValue>|null $updated The updated property
    */
    private ?array $updated = null;
    
    /**
     * Instantiates a new updateDefinitionValuesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateDefinitionValuesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateDefinitionValuesPostRequestBody {
        return new UpdateDefinitionValuesPostRequestBody();
    }

    /**
     * Gets the added property value. The added property
     * @return array<GroupPolicyDefinitionValue>|null
    */
    public function getAdded(): ?array {
        return $this->added;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deletedIds property value. The deletedIds property
     * @return array<string>|null
    */
    public function getDeletedIds(): ?array {
        return $this->deletedIds;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'added' => function (ParseNode $n) use ($o) { $o->setAdded($n->getCollectionOfObjectValues(array(GroupPolicyDefinitionValue::class, 'createFromDiscriminatorValue'))); },
            'deletedIds' => function (ParseNode $n) use ($o) { $o->setDeletedIds($n->getCollectionOfPrimitiveValues()); },
            'updated' => function (ParseNode $n) use ($o) { $o->setUpdated($n->getCollectionOfObjectValues(array(GroupPolicyDefinitionValue::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the updated property value. The updated property
     * @return array<GroupPolicyDefinitionValue>|null
    */
    public function getUpdated(): ?array {
        return $this->updated;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('added', $this->added);
        $writer->writeCollectionOfPrimitiveValues('deletedIds', $this->deletedIds);
        $writer->writeCollectionOfObjectValues('updated', $this->updated);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the added property value. The added property
     *  @param array<GroupPolicyDefinitionValue>|null $value Value to set for the added property.
    */
    public function setAdded(?array $value ): void {
        $this->added = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the deletedIds property value. The deletedIds property
     *  @param array<string>|null $value Value to set for the deletedIds property.
    */
    public function setDeletedIds(?array $value ): void {
        $this->deletedIds = $value;
    }

    /**
     * Sets the updated property value. The updated property
     *  @param array<GroupPolicyDefinitionValue>|null $value Value to set for the updated property.
    */
    public function setUpdated(?array $value ): void {
        $this->updated = $value;
    }

}
