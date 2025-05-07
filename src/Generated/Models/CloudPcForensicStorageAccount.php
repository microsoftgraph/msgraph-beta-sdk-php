<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcForensicStorageAccount extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcForensicStorageAccount and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcForensicStorageAccount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcForensicStorageAccount {
        return new CloudPcForensicStorageAccount();
    }

    /**
     * Gets the accessTier property value. Indicates the access tier of the storage account. Possible values are hot, cool, premium, cold, and unknownFutureValue. Default value is hot. Read-only.
     * @return CloudPcStorageAccountAccessTier|null
    */
    public function getAccessTier(): ?CloudPcStorageAccountAccessTier {
        $val = $this->getBackingStore()->get('accessTier');
        if (is_null($val) || $val instanceof CloudPcStorageAccountAccessTier) {
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
            'accessTier' => fn(ParseNode $n) => $o->setAccessTier($n->getEnumValue(CloudPcStorageAccountAccessTier::class)),
            'immutableStorage' => fn(ParseNode $n) => $o->setImmutableStorage($n->getBooleanValue()),
            'storageAccountId' => fn(ParseNode $n) => $o->setStorageAccountId($n->getStringValue()),
            'storageAccountName' => fn(ParseNode $n) => $o->setStorageAccountName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the immutableStorage property value. Indicates whether immutability policies are configured for the storage account. When true, the storage account only accepts hot as the snapshot access tier. When false, the storage account accepts all valid access tiers. Read-Only.
     * @return bool|null
    */
    public function getImmutableStorage(): ?bool {
        $val = $this->getBackingStore()->get('immutableStorage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'immutableStorage'");
    }

    /**
     * Gets the storageAccountId property value. Indicates the ID of the storage account. Read-only.
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
     * Gets the storageAccountName property value. Indicates the name of the storage account. Read-only.
     * @return string|null
    */
    public function getStorageAccountName(): ?string {
        $val = $this->getBackingStore()->get('storageAccountName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageAccountName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('accessTier', $this->getAccessTier());
        $writer->writeBooleanValue('immutableStorage', $this->getImmutableStorage());
        $writer->writeStringValue('storageAccountId', $this->getStorageAccountId());
        $writer->writeStringValue('storageAccountName', $this->getStorageAccountName());
    }

    /**
     * Sets the accessTier property value. Indicates the access tier of the storage account. Possible values are hot, cool, premium, cold, and unknownFutureValue. Default value is hot. Read-only.
     * @param CloudPcStorageAccountAccessTier|null $value Value to set for the accessTier property.
    */
    public function setAccessTier(?CloudPcStorageAccountAccessTier $value): void {
        $this->getBackingStore()->set('accessTier', $value);
    }

    /**
     * Sets the immutableStorage property value. Indicates whether immutability policies are configured for the storage account. When true, the storage account only accepts hot as the snapshot access tier. When false, the storage account accepts all valid access tiers. Read-Only.
     * @param bool|null $value Value to set for the immutableStorage property.
    */
    public function setImmutableStorage(?bool $value): void {
        $this->getBackingStore()->set('immutableStorage', $value);
    }

    /**
     * Sets the storageAccountId property value. Indicates the ID of the storage account. Read-only.
     * @param string|null $value Value to set for the storageAccountId property.
    */
    public function setStorageAccountId(?string $value): void {
        $this->getBackingStore()->set('storageAccountId', $value);
    }

    /**
     * Sets the storageAccountName property value. Indicates the name of the storage account. Read-only.
     * @param string|null $value Value to set for the storageAccountName property.
    */
    public function setStorageAccountName(?string $value): void {
        $this->getBackingStore()->set('storageAccountName', $value);
    }

}
