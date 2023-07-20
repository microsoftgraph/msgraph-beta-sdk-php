<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\BulkSetCloudPcReviewStatus;

use Microsoft\Graph\Beta\Generated\Models\CloudPcReviewStatus;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class BulkSetCloudPcReviewStatusPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new bulkSetCloudPcReviewStatusPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BulkSetCloudPcReviewStatusPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BulkSetCloudPcReviewStatusPostRequestBody {
        return new BulkSetCloudPcReviewStatusPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
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
            'managedDeviceIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setManagedDeviceIds($val);
            },
            'reviewStatus' => fn(ParseNode $n) => $o->setReviewStatus($n->getObjectValue([CloudPcReviewStatus::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the managedDeviceIds property value. The managedDeviceIds property
     * @return array<string>|null
    */
    public function getManagedDeviceIds(): ?array {
        $val = $this->getBackingStore()->get('managedDeviceIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceIds'");
    }

    /**
     * Gets the reviewStatus property value. The reviewStatus property
     * @return CloudPcReviewStatus|null
    */
    public function getReviewStatus(): ?CloudPcReviewStatus {
        $val = $this->getBackingStore()->get('reviewStatus');
        if (is_null($val) || $val instanceof CloudPcReviewStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('managedDeviceIds', $this->getManagedDeviceIds());
        $writer->writeObjectValue('reviewStatus', $this->getReviewStatus());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the managedDeviceIds property value. The managedDeviceIds property
     * @param array<string>|null $value Value to set for the managedDeviceIds property.
    */
    public function setManagedDeviceIds(?array $value): void {
        $this->getBackingStore()->set('managedDeviceIds', $value);
    }

    /**
     * Sets the reviewStatus property value. The reviewStatus property
     * @param CloudPcReviewStatus|null $value Value to set for the reviewStatus property.
    */
    public function setReviewStatus(?CloudPcReviewStatus $value): void {
        $this->getBackingStore()->set('reviewStatus', $value);
    }

}
