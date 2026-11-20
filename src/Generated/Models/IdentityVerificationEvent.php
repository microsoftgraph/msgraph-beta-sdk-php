<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A single identity verification event with its verification, lifecycle, and optional override details.
*/
class IdentityVerificationEvent extends Entity implements Parsable 
{
    /**
     * Instantiates a new IdentityVerificationEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityVerificationEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentityVerificationEvent {
        return new IdentityVerificationEvent();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lifecycle' => fn(ParseNode $n) => $o->setLifecycle($n->getObjectValue([VerificationEventLifecycle::class, 'createFromDiscriminatorValue'])),
            'overrideDetails' => fn(ParseNode $n) => $o->setOverrideDetails($n->getObjectValue([VerificationEventOverride::class, 'createFromDiscriminatorValue'])),
            'verification' => fn(ParseNode $n) => $o->setVerification($n->getObjectValue([VerificationEventDetail::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lifecycle property value. The source and current lifecycle state of the event.
     * @return VerificationEventLifecycle|null
    */
    public function getLifecycle(): ?VerificationEventLifecycle {
        $val = $this->getBackingStore()->get('lifecycle');
        if (is_null($val) || $val instanceof VerificationEventLifecycle) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lifecycle'");
    }

    /**
     * Gets the overrideDetails property value. The administrative or programmatic override applied to the event. null when no override was applied.
     * @return VerificationEventOverride|null
    */
    public function getOverrideDetails(): ?VerificationEventOverride {
        $val = $this->getBackingStore()->get('overrideDetails');
        if (is_null($val) || $val instanceof VerificationEventOverride) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'overrideDetails'");
    }

    /**
     * Gets the verification property value. The verification state, provider, credential identifiers, and timestamps.
     * @return VerificationEventDetail|null
    */
    public function getVerification(): ?VerificationEventDetail {
        $val = $this->getBackingStore()->get('verification');
        if (is_null($val) || $val instanceof VerificationEventDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verification'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('lifecycle', $this->getLifecycle());
        $writer->writeObjectValue('overrideDetails', $this->getOverrideDetails());
        $writer->writeObjectValue('verification', $this->getVerification());
    }

    /**
     * Sets the lifecycle property value. The source and current lifecycle state of the event.
     * @param VerificationEventLifecycle|null $value Value to set for the lifecycle property.
    */
    public function setLifecycle(?VerificationEventLifecycle $value): void {
        $this->getBackingStore()->set('lifecycle', $value);
    }

    /**
     * Sets the overrideDetails property value. The administrative or programmatic override applied to the event. null when no override was applied.
     * @param VerificationEventOverride|null $value Value to set for the overrideDetails property.
    */
    public function setOverrideDetails(?VerificationEventOverride $value): void {
        $this->getBackingStore()->set('overrideDetails', $value);
    }

    /**
     * Sets the verification property value. The verification state, provider, credential identifiers, and timestamps.
     * @param VerificationEventDetail|null $value Value to set for the verification property.
    */
    public function setVerification(?VerificationEventDetail $value): void {
        $this->getBackingStore()->set('verification', $value);
    }

}
