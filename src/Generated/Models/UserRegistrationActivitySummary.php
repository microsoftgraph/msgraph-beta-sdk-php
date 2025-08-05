<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserRegistrationActivitySummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserRegistrationActivitySummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserRegistrationActivitySummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserRegistrationActivitySummary {
        return new UserRegistrationActivitySummary();
    }

    /**
     * Gets the authMethod property value. The authMethod property
     * @return UsageAuthMethod|null
    */
    public function getAuthMethod(): ?UsageAuthMethod {
        $val = $this->getBackingStore()->get('authMethod');
        if (is_null($val) || $val instanceof UsageAuthMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authMethod'");
    }

    /**
     * Gets the failureActivityCount property value. The total number of failed activities for the corresponding authMethod and feature. Supports $filter (eq).
     * @return int|null
    */
    public function getFailureActivityCount(): ?int {
        $val = $this->getBackingStore()->get('failureActivityCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failureActivityCount'");
    }

    /**
     * Gets the feature property value. The feature property
     * @return FeatureType|null
    */
    public function getFeature(): ?FeatureType {
        $val = $this->getBackingStore()->get('feature');
        if (is_null($val) || $val instanceof FeatureType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'feature'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authMethod' => fn(ParseNode $n) => $o->setAuthMethod($n->getEnumValue(UsageAuthMethod::class)),
            'failureActivityCount' => fn(ParseNode $n) => $o->setFailureActivityCount($n->getIntegerValue()),
            'feature' => fn(ParseNode $n) => $o->setFeature($n->getEnumValue(FeatureType::class)),
            'successfulActivityCount' => fn(ParseNode $n) => $o->setSuccessfulActivityCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the successfulActivityCount property value. The total number of successful activities for the corresponding authMethod and feature. Supports $filter (gt, lt).
     * @return int|null
    */
    public function getSuccessfulActivityCount(): ?int {
        $val = $this->getBackingStore()->get('successfulActivityCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successfulActivityCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('authMethod', $this->getAuthMethod());
        $writer->writeIntegerValue('failureActivityCount', $this->getFailureActivityCount());
        $writer->writeEnumValue('feature', $this->getFeature());
        $writer->writeIntegerValue('successfulActivityCount', $this->getSuccessfulActivityCount());
    }

    /**
     * Sets the authMethod property value. The authMethod property
     * @param UsageAuthMethod|null $value Value to set for the authMethod property.
    */
    public function setAuthMethod(?UsageAuthMethod $value): void {
        $this->getBackingStore()->set('authMethod', $value);
    }

    /**
     * Sets the failureActivityCount property value. The total number of failed activities for the corresponding authMethod and feature. Supports $filter (eq).
     * @param int|null $value Value to set for the failureActivityCount property.
    */
    public function setFailureActivityCount(?int $value): void {
        $this->getBackingStore()->set('failureActivityCount', $value);
    }

    /**
     * Sets the feature property value. The feature property
     * @param FeatureType|null $value Value to set for the feature property.
    */
    public function setFeature(?FeatureType $value): void {
        $this->getBackingStore()->set('feature', $value);
    }

    /**
     * Sets the successfulActivityCount property value. The total number of successful activities for the corresponding authMethod and feature. Supports $filter (gt, lt).
     * @param int|null $value Value to set for the successfulActivityCount property.
    */
    public function setSuccessfulActivityCount(?int $value): void {
        $this->getBackingStore()->set('successfulActivityCount', $value);
    }

}
