<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\PolicySets\Item\Update;

use Microsoft\Graph\Beta\Generated\Models\PolicySetAssignment;
use Microsoft\Graph\Beta\Generated\Models\PolicySetItem;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UpdatePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UpdatePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdatePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdatePostRequestBody {
        return new UpdatePostRequestBody();
    }

    /**
     * Gets the addedPolicySetItems property value. The addedPolicySetItems property
     * @return array<PolicySetItem>|null
    */
    public function getAddedPolicySetItems(): ?array {
        $val = $this->getBackingStore()->get('addedPolicySetItems');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PolicySetItem::class);
            /** @var array<PolicySetItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addedPolicySetItems'");
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
     * Gets the assignments property value. The assignments property
     * @return array<PolicySetAssignment>|null
    */
    public function getAssignments(): ?array {
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PolicySetAssignment::class);
            /** @var array<PolicySetAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the deletedPolicySetItems property value. The deletedPolicySetItems property
     * @return array<string>|null
    */
    public function getDeletedPolicySetItems(): ?array {
        $val = $this->getBackingStore()->get('deletedPolicySetItems');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deletedPolicySetItems'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'addedPolicySetItems' => fn(ParseNode $n) => $o->setAddedPolicySetItems($n->getCollectionOfObjectValues([PolicySetItem::class, 'createFromDiscriminatorValue'])),
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([PolicySetAssignment::class, 'createFromDiscriminatorValue'])),
            'deletedPolicySetItems' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDeletedPolicySetItems($val);
            },
            'updatedPolicySetItems' => fn(ParseNode $n) => $o->setUpdatedPolicySetItems($n->getCollectionOfObjectValues([PolicySetItem::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the updatedPolicySetItems property value. The updatedPolicySetItems property
     * @return array<PolicySetItem>|null
    */
    public function getUpdatedPolicySetItems(): ?array {
        $val = $this->getBackingStore()->get('updatedPolicySetItems');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PolicySetItem::class);
            /** @var array<PolicySetItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updatedPolicySetItems'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('addedPolicySetItems', $this->getAddedPolicySetItems());
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeCollectionOfPrimitiveValues('deletedPolicySetItems', $this->getDeletedPolicySetItems());
        $writer->writeCollectionOfObjectValues('updatedPolicySetItems', $this->getUpdatedPolicySetItems());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the addedPolicySetItems property value. The addedPolicySetItems property
     * @param array<PolicySetItem>|null $value Value to set for the addedPolicySetItems property.
    */
    public function setAddedPolicySetItems(?array $value): void {
        $this->getBackingStore()->set('addedPolicySetItems', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the assignments property value. The assignments property
     * @param array<PolicySetAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the deletedPolicySetItems property value. The deletedPolicySetItems property
     * @param array<string>|null $value Value to set for the deletedPolicySetItems property.
    */
    public function setDeletedPolicySetItems(?array $value): void {
        $this->getBackingStore()->set('deletedPolicySetItems', $value);
    }

    /**
     * Sets the updatedPolicySetItems property value. The updatedPolicySetItems property
     * @param array<PolicySetItem>|null $value Value to set for the updatedPolicySetItems property.
    */
    public function setUpdatedPolicySetItems(?array $value): void {
        $this->getBackingStore()->set('updatedPolicySetItems', $value);
    }

}
