<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyConfigurations\Item\UpdateDefinitionValues;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\GroupPolicyDefinitionValue;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateDefinitionValuesRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<GroupPolicyDefinitionValue>|null $added  */
    private ?array $added = null;
    
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $deletedIds  */
    private ?array $deletedIds = null;
    
    /** @var array<GroupPolicyDefinitionValue>|null $updated  */
    private ?array $updated = null;
    
    /**
     * Instantiates a new updateDefinitionValuesRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateDefinitionValuesRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UpdateDefinitionValuesRequestBody {
        return new UpdateDefinitionValuesRequestBody();
    }

    /**
     * Gets the added property value. 
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
     * Gets the deletedIds property value. 
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
        return  [
            'added' => function (self $o, ParseNode $n) { $o->setAdded($n->getCollectionOfObjectValues(GroupPolicyDefinitionValue::class)); },
            'deletedIds' => function (self $o, ParseNode $n) { $o->setDeletedIds($n->getCollectionOfPrimitiveValues()); },
            'updated' => function (self $o, ParseNode $n) { $o->setUpdated($n->getCollectionOfObjectValues(GroupPolicyDefinitionValue::class)); },
        ];
    }

    /**
     * Gets the updated property value. 
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
     * Sets the added property value. 
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
     * Sets the deletedIds property value. 
     *  @param array<string>|null $value Value to set for the deletedIds property.
    */
    public function setDeletedIds(?array $value ): void {
        $this->deletedIds = $value;
    }

    /**
     * Sets the updated property value. 
     *  @param array<GroupPolicyDefinitionValue>|null $value Value to set for the updated property.
    */
    public function setUpdated(?array $value ): void {
        $this->updated = $value;
    }

}
