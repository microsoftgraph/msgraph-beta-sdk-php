<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcBulkCreateSnapshot extends CloudPcBulkAction implements Parsable 
{
    /**
     * Instantiates a new CloudPcBulkCreateSnapshot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcBulkCreateSnapshot');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcBulkCreateSnapshot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcBulkCreateSnapshot {
        return new CloudPcBulkCreateSnapshot();
    }

    /**
     * Gets the accessTier property value. Indicates the access tier of the blob file that the snapshot is copied to. Possible values are hot, cool, cold, archive, and unknownFutureValue. The default value is hot. Read-Only.
     * @return CloudPcBlobAccessTier|null
    */
    public function getAccessTier(): ?CloudPcBlobAccessTier {
        $val = $this->getBackingStore()->get('accessTier');
        if (is_null($val) || $val instanceof CloudPcBlobAccessTier) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessTier'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessTier' => fn(ParseNode $n) => $o->setAccessTier($n->getEnumValue(CloudPcBlobAccessTier::class)),
            'storageAccountId' => fn(ParseNode $n) => $o->setStorageAccountId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the storageAccountId property value. Indicates the unique identifier for Secure Azure Storage Account, which receives the restore points (snapshots). The value can't be modified after it's created. For example, '/subscriptions/06199b73-30a1-4922-8734-93feca64cdf6/resourceGroups/res2627/providers/Microsoft.Storage/storageAccounts/sto1125'. Read-Only.
     * @return string|null
    */
    public function getStorageAccountId(): ?string {
        $val = $this->getBackingStore()->get('storageAccountId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageAccountId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('accessTier', $this->getAccessTier());
        $writer->writeStringValue('storageAccountId', $this->getStorageAccountId());
    }

    /**
     * Sets the accessTier property value. Indicates the access tier of the blob file that the snapshot is copied to. Possible values are hot, cool, cold, archive, and unknownFutureValue. The default value is hot. Read-Only.
     * @param CloudPcBlobAccessTier|null $value Value to set for the accessTier property.
    */
    public function setAccessTier(?CloudPcBlobAccessTier $value): void {
        $this->getBackingStore()->set('accessTier', $value);
    }

    /**
     * Sets the storageAccountId property value. Indicates the unique identifier for Secure Azure Storage Account, which receives the restore points (snapshots). The value can't be modified after it's created. For example, '/subscriptions/06199b73-30a1-4922-8734-93feca64cdf6/resourceGroups/res2627/providers/Microsoft.Storage/storageAccounts/sto1125'. Read-Only.
     * @param string|null $value Value to set for the storageAccountId property.
    */
    public function setStorageAccountId(?string $value): void {
        $this->getBackingStore()->set('storageAccountId', $value);
    }

}
