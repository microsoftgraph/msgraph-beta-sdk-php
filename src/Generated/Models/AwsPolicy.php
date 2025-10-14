<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AwsPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new AwsPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AwsPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AwsPolicy {
        return new AwsPolicy();
    }

    /**
     * Gets the awsPolicyType property value. The awsPolicyType property
     * @return AwsPolicyType|null
    */
    public function getAwsPolicyType(): ?AwsPolicyType {
        $val = $this->getBackingStore()->get('awsPolicyType');
        if (is_null($val) || $val instanceof AwsPolicyType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'awsPolicyType'");
    }

    /**
     * Gets the displayName property value. The display name for the AWS policy. Read-only. Supports $filter and (eq,contains).
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the externalId property value. The base64 encoded identifier for the AWS policy as defined by AWS. Read-only. Alternate key. Supports $filter and eq.
     * @return string|null
    */
    public function getExternalId(): ?string {
        $val = $this->getBackingStore()->get('externalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'awsPolicyType' => fn(ParseNode $n) => $o->setAwsPolicyType($n->getEnumValue(AwsPolicyType::class)),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('awsPolicyType', $this->getAwsPolicyType());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('externalId', $this->getExternalId());
    }

    /**
     * Sets the awsPolicyType property value. The awsPolicyType property
     * @param AwsPolicyType|null $value Value to set for the awsPolicyType property.
    */
    public function setAwsPolicyType(?AwsPolicyType $value): void {
        $this->getBackingStore()->set('awsPolicyType', $value);
    }

    /**
     * Sets the displayName property value. The display name for the AWS policy. Read-only. Supports $filter and (eq,contains).
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the externalId property value. The base64 encoded identifier for the AWS policy as defined by AWS. Read-only. Alternate key. Supports $filter and eq.
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->getBackingStore()->set('externalId', $value);
    }

}
