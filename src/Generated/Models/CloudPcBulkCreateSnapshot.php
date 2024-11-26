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
     * Gets the accessTier property value. The accessTier property
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
     * Gets the storageAccountId property value. The storageAccountId property
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
     * Sets the accessTier property value. The accessTier property
     * @param CloudPcBlobAccessTier|null $value Value to set for the accessTier property.
    */
    public function setAccessTier(?CloudPcBlobAccessTier $value): void {
        $this->getBackingStore()->set('accessTier', $value);
    }

    /**
     * Sets the storageAccountId property value. The storageAccountId property
     * @param string|null $value Value to set for the storageAccountId property.
    */
    public function setStorageAccountId(?string $value): void {
        $this->getBackingStore()->set('storageAccountId', $value);
    }

}
