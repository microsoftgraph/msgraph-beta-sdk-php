<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EncryptedAzureStorageAccountFinding extends Finding implements Parsable 
{
    /**
     * Instantiates a new EncryptedAzureStorageAccountFinding and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EncryptedAzureStorageAccountFinding
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EncryptedAzureStorageAccountFinding {
        return new EncryptedAzureStorageAccountFinding();
    }

    /**
     * Gets the encryptionManagedBy property value. The encryptionManagedBy property
     * @return AzureEncryption|null
    */
    public function getEncryptionManagedBy(): ?AzureEncryption {
        $val = $this->getBackingStore()->get('encryptionManagedBy');
        if (is_null($val) || $val instanceof AzureEncryption) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'encryptionManagedBy'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'encryptionManagedBy' => fn(ParseNode $n) => $o->setEncryptionManagedBy($n->getEnumValue(AzureEncryption::class)),
            'storageAccount' => fn(ParseNode $n) => $o->setStorageAccount($n->getObjectValue([AuthorizationSystemResource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the storageAccount property value. The storageAccount property
     * @return AuthorizationSystemResource|null
    */
    public function getStorageAccount(): ?AuthorizationSystemResource {
        $val = $this->getBackingStore()->get('storageAccount');
        if (is_null($val) || $val instanceof AuthorizationSystemResource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageAccount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('encryptionManagedBy', $this->getEncryptionManagedBy());
        $writer->writeObjectValue('storageAccount', $this->getStorageAccount());
    }

    /**
     * Sets the encryptionManagedBy property value. The encryptionManagedBy property
     * @param AzureEncryption|null $value Value to set for the encryptionManagedBy property.
    */
    public function setEncryptionManagedBy(?AzureEncryption $value): void {
        $this->getBackingStore()->set('encryptionManagedBy', $value);
    }

    /**
     * Sets the storageAccount property value. The storageAccount property
     * @param AuthorizationSystemResource|null $value Value to set for the storageAccount property.
    */
    public function setStorageAccount(?AuthorizationSystemResource $value): void {
        $this->getBackingStore()->set('storageAccount', $value);
    }

}
