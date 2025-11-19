<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExternallyAccessibleGcpStorageBucketFinding extends Finding implements Parsable 
{
    /**
     * Instantiates a new ExternallyAccessibleGcpStorageBucketFinding and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExternallyAccessibleGcpStorageBucketFinding
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExternallyAccessibleGcpStorageBucketFinding {
        return new ExternallyAccessibleGcpStorageBucketFinding();
    }

    /**
     * Gets the accessibility property value. The accessibility property
     * @return GcpAccessType|null
    */
    public function getAccessibility(): ?GcpAccessType {
        $val = $this->getBackingStore()->get('accessibility');
        if (is_null($val) || $val instanceof GcpAccessType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessibility'");
    }

    /**
     * Gets the encryptionManagedBy property value. The encryptionManagedBy property
     * @return GcpEncryption|null
    */
    public function getEncryptionManagedBy(): ?GcpEncryption {
        $val = $this->getBackingStore()->get('encryptionManagedBy');
        if (is_null($val) || $val instanceof GcpEncryption) {
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
            'accessibility' => fn(ParseNode $n) => $o->setAccessibility($n->getEnumValue(GcpAccessType::class)),
            'encryptionManagedBy' => fn(ParseNode $n) => $o->setEncryptionManagedBy($n->getEnumValue(GcpEncryption::class)),
            'storageBucket' => fn(ParseNode $n) => $o->setStorageBucket($n->getObjectValue([AuthorizationSystemResource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the storageBucket property value. The storageBucket property
     * @return AuthorizationSystemResource|null
    */
    public function getStorageBucket(): ?AuthorizationSystemResource {
        $val = $this->getBackingStore()->get('storageBucket');
        if (is_null($val) || $val instanceof AuthorizationSystemResource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageBucket'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('accessibility', $this->getAccessibility());
        $writer->writeEnumValue('encryptionManagedBy', $this->getEncryptionManagedBy());
        $writer->writeObjectValue('storageBucket', $this->getStorageBucket());
    }

    /**
     * Sets the accessibility property value. The accessibility property
     * @param GcpAccessType|null $value Value to set for the accessibility property.
    */
    public function setAccessibility(?GcpAccessType $value): void {
        $this->getBackingStore()->set('accessibility', $value);
    }

    /**
     * Sets the encryptionManagedBy property value. The encryptionManagedBy property
     * @param GcpEncryption|null $value Value to set for the encryptionManagedBy property.
    */
    public function setEncryptionManagedBy(?GcpEncryption $value): void {
        $this->getBackingStore()->set('encryptionManagedBy', $value);
    }

    /**
     * Sets the storageBucket property value. The storageBucket property
     * @param AuthorizationSystemResource|null $value Value to set for the storageBucket property.
    */
    public function setStorageBucket(?AuthorizationSystemResource $value): void {
        $this->getBackingStore()->set('storageBucket', $value);
    }

}
