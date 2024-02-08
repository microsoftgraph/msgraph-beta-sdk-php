<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyConfigurations\Item\UpdateDefinitionValues;

use Microsoft\Graph\Beta\Generated\Models\GroupPolicyDefinitionValue;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UpdateDefinitionValuesPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UpdateDefinitionValuesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
        $val = $this->getBackingStore()->get('added');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GroupPolicyDefinitionValue::class);
            /** @var array<GroupPolicyDefinitionValue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'added'");
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the deletedIds property value. The deletedIds property
     * @return array<string>|null
    */
    public function getDeletedIds(): ?array {
        $val = $this->getBackingStore()->get('deletedIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deletedIds'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'added' => fn(ParseNode $n) => $o->setAdded($n->getCollectionOfObjectValues([GroupPolicyDefinitionValue::class, 'createFromDiscriminatorValue'])),
            'deletedIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDeletedIds($val);
            },
            'updated' => fn(ParseNode $n) => $o->setUpdated($n->getCollectionOfObjectValues([GroupPolicyDefinitionValue::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the updated property value. The updated property
     * @return array<GroupPolicyDefinitionValue>|null
    */
    public function getUpdated(): ?array {
        $val = $this->getBackingStore()->get('updated');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GroupPolicyDefinitionValue::class);
            /** @var array<GroupPolicyDefinitionValue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updated'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('added', $this->getAdded());
        $writer->writeCollectionOfPrimitiveValues('deletedIds', $this->getDeletedIds());
        $writer->writeCollectionOfObjectValues('updated', $this->getUpdated());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the added property value. The added property
     * @param array<GroupPolicyDefinitionValue>|null $value Value to set for the added property.
    */
    public function setAdded(?array $value): void {
        $this->getBackingStore()->set('added', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the deletedIds property value. The deletedIds property
     * @param array<string>|null $value Value to set for the deletedIds property.
    */
    public function setDeletedIds(?array $value): void {
        $this->getBackingStore()->set('deletedIds', $value);
    }

    /**
     * Sets the updated property value. The updated property
     * @param array<GroupPolicyDefinitionValue>|null $value Value to set for the updated property.
    */
    public function setUpdated(?array $value): void {
        $this->getBackingStore()->set('updated', $value);
    }

}
