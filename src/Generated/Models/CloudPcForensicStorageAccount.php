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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'storageAccountId' => fn(ParseNode $n) => $o->setStorageAccountId($n->getStringValue()),
            'storageAccountName' => fn(ParseNode $n) => $o->setStorageAccountName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the storageAccountId property value. The ID of the storage account.
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
     * Gets the storageAccountName property value. The name of the storage account.
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
        $writer->writeStringValue('storageAccountId', $this->getStorageAccountId());
        $writer->writeStringValue('storageAccountName', $this->getStorageAccountName());
    }

    /**
     * Sets the storageAccountId property value. The ID of the storage account.
     * @param string|null $value Value to set for the storageAccountId property.
    */
    public function setStorageAccountId(?string $value): void {
        $this->getBackingStore()->set('storageAccountId', $value);
    }

    /**
     * Sets the storageAccountName property value. The name of the storage account.
     * @param string|null $value Value to set for the storageAccountName property.
    */
    public function setStorageAccountName(?string $value): void {
        $this->getBackingStore()->set('storageAccountName', $value);
    }

}
