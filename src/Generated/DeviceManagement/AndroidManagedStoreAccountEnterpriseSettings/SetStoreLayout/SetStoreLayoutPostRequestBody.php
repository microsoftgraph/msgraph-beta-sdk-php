<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAccountEnterpriseSettings\SetStoreLayout;

use Microsoft\Graph\Beta\Generated\Models\AndroidManagedStoreLayoutType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SetStoreLayoutPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SetStoreLayoutPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetStoreLayoutPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SetStoreLayoutPostRequestBody {
        return new SetStoreLayoutPostRequestBody();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'storeLayoutType' => fn(ParseNode $n) => $o->setStoreLayoutType($n->getEnumValue(AndroidManagedStoreLayoutType::class)),
        ];
    }

    /**
     * Gets the storeLayoutType property value. The store layout types for Managed Google Play. Values correspond directly to the store layout types of Google enterprise objects.
     * @return AndroidManagedStoreLayoutType|null
    */
    public function getStoreLayoutType(): ?AndroidManagedStoreLayoutType {
        $val = $this->getBackingStore()->get('storeLayoutType');
        if (is_null($val) || $val instanceof AndroidManagedStoreLayoutType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storeLayoutType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('storeLayoutType', $this->getStoreLayoutType());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the storeLayoutType property value. The store layout types for Managed Google Play. Values correspond directly to the store layout types of Google enterprise objects.
     * @param AndroidManagedStoreLayoutType|null $value Value to set for the storeLayoutType property.
    */
    public function setStoreLayoutType(?AndroidManagedStoreLayoutType $value): void {
        $this->getBackingStore()->set('storeLayoutType', $value);
    }

}
