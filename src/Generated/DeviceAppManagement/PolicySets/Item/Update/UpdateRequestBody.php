<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\PolicySets\Item\Update;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\PolicySetAssignment;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\PolicySetItem;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<PolicySetItem>|null $addedPolicySetItems  */
    private ?array $addedPolicySetItems = null;
    
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<PolicySetAssignment>|null $assignments  */
    private ?array $assignments = null;
    
    /** @var array<string>|null $deletedPolicySetItems  */
    private ?array $deletedPolicySetItems = null;
    
    /** @var array<PolicySetItem>|null $updatedPolicySetItems  */
    private ?array $updatedPolicySetItems = null;
    
    /**
     * Instantiates a new updateRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UpdateRequestBody {
        return new UpdateRequestBody();
    }

    /**
     * Gets the addedPolicySetItems property value. 
     * @return array<PolicySetItem>|null
    */
    public function getAddedPolicySetItems(): ?array {
        return $this->addedPolicySetItems;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignments property value. 
     * @return array<PolicySetAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the deletedPolicySetItems property value. 
     * @return array<string>|null
    */
    public function getDeletedPolicySetItems(): ?array {
        return $this->deletedPolicySetItems;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'addedPolicySetItems' => function (self $o, ParseNode $n) { $o->setAddedPolicySetItems($n->getCollectionOfObjectValues(PolicySetItem::class)); },
            'assignments' => function (self $o, ParseNode $n) { $o->setAssignments($n->getCollectionOfObjectValues(PolicySetAssignment::class)); },
            'deletedPolicySetItems' => function (self $o, ParseNode $n) { $o->setDeletedPolicySetItems($n->getCollectionOfPrimitiveValues()); },
            'updatedPolicySetItems' => function (self $o, ParseNode $n) { $o->setUpdatedPolicySetItems($n->getCollectionOfObjectValues(PolicySetItem::class)); },
        ];
    }

    /**
     * Gets the updatedPolicySetItems property value. 
     * @return array<PolicySetItem>|null
    */
    public function getUpdatedPolicySetItems(): ?array {
        return $this->updatedPolicySetItems;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('addedPolicySetItems', $this->addedPolicySetItems);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeCollectionOfPrimitiveValues('deletedPolicySetItems', $this->deletedPolicySetItems);
        $writer->writeCollectionOfObjectValues('updatedPolicySetItems', $this->updatedPolicySetItems);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the addedPolicySetItems property value. 
     *  @param array<PolicySetItem>|null $value Value to set for the addedPolicySetItems property.
    */
    public function setAddedPolicySetItems(?array $value ): void {
        $this->addedPolicySetItems = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the assignments property value. 
     *  @param array<PolicySetAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the deletedPolicySetItems property value. 
     *  @param array<string>|null $value Value to set for the deletedPolicySetItems property.
    */
    public function setDeletedPolicySetItems(?array $value ): void {
        $this->deletedPolicySetItems = $value;
    }

    /**
     * Sets the updatedPolicySetItems property value. 
     *  @param array<PolicySetItem>|null $value Value to set for the updatedPolicySetItems property.
    */
    public function setUpdatedPolicySetItems(?array $value ): void {
        $this->updatedPolicySetItems = $value;
    }

}
