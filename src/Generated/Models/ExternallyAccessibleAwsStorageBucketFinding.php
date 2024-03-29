<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExternallyAccessibleAwsStorageBucketFinding extends Finding implements Parsable 
{
    /**
     * Instantiates a new ExternallyAccessibleAwsStorageBucketFinding and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExternallyAccessibleAwsStorageBucketFinding
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExternallyAccessibleAwsStorageBucketFinding {
        return new ExternallyAccessibleAwsStorageBucketFinding();
    }

    /**
     * Gets the accessibility property value. The accessibility property
     * @return AwsAccessType|null
    */
    public function getAccessibility(): ?AwsAccessType {
        $val = $this->getBackingStore()->get('accessibility');
        if (is_null($val) || $val instanceof AwsAccessType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessibility'");
    }

    /**
     * Gets the accountsWithAccess property value. The accountsWithAccess property
     * @return AccountsWithAccess|null
    */
    public function getAccountsWithAccess(): ?AccountsWithAccess {
        $val = $this->getBackingStore()->get('accountsWithAccess');
        if (is_null($val) || $val instanceof AccountsWithAccess) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountsWithAccess'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessibility' => fn(ParseNode $n) => $o->setAccessibility($n->getEnumValue(AwsAccessType::class)),
            'accountsWithAccess' => fn(ParseNode $n) => $o->setAccountsWithAccess($n->getObjectValue([AccountsWithAccess::class, 'createFromDiscriminatorValue'])),
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
        $writer->writeObjectValue('accountsWithAccess', $this->getAccountsWithAccess());
        $writer->writeObjectValue('storageBucket', $this->getStorageBucket());
    }

    /**
     * Sets the accessibility property value. The accessibility property
     * @param AwsAccessType|null $value Value to set for the accessibility property.
    */
    public function setAccessibility(?AwsAccessType $value): void {
        $this->getBackingStore()->set('accessibility', $value);
    }

    /**
     * Sets the accountsWithAccess property value. The accountsWithAccess property
     * @param AccountsWithAccess|null $value Value to set for the accountsWithAccess property.
    */
    public function setAccountsWithAccess(?AccountsWithAccess $value): void {
        $this->getBackingStore()->set('accountsWithAccess', $value);
    }

    /**
     * Sets the storageBucket property value. The storageBucket property
     * @param AuthorizationSystemResource|null $value Value to set for the storageBucket property.
    */
    public function setStorageBucket(?AuthorizationSystemResource $value): void {
        $this->getBackingStore()->set('storageBucket', $value);
    }

}
