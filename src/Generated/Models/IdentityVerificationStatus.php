<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Per-user singleton tracking identity verification state and bounded event history.
*/
class IdentityVerificationStatus extends Entity implements Parsable 
{
    /**
     * Instantiates a new IdentityVerificationStatus and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityVerificationStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentityVerificationStatus {
        return new IdentityVerificationStatus();
    }

    /**
     * Gets the expiryDateTime property value. The effective expiry of the user's overall verified state, computed as the latest expiresDateTime across active verification events. null when no active event has an expiry. Read-only.
     * @return DateTime|null
    */
    public function getExpiryDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expiryDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expiryDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'expiryDateTime' => fn(ParseNode $n) => $o->setExpiryDateTime($n->getDateTimeValue()),
            'lastVerifiedDateTime' => fn(ParseNode $n) => $o->setLastVerifiedDateTime($n->getDateTimeValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(VerificationState::class)),
            'verificationEvents' => fn(ParseNode $n) => $o->setVerificationEvents($n->getCollectionOfObjectValues([IdentityVerificationEvent::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastVerifiedDateTime property value. The date and time of the most recent successful identity verification. null when state is unverified. Read-only.
     * @return DateTime|null
    */
    public function getLastVerifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastVerifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastVerifiedDateTime'");
    }

    /**
     * Gets the state property value. The state property
     * @return VerificationState|null
    */
    public function getState(): ?VerificationState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof VerificationState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Gets the verificationEvents property value. The user's recent verification events, automatically included when the status is retrieved. Contains up to 10 events, ordered by recency. Older events are removed when the limit is reached.
     * @return array<IdentityVerificationEvent>|null
    */
    public function getVerificationEvents(): ?array {
        $val = $this->getBackingStore()->get('verificationEvents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IdentityVerificationEvent::class);
            /** @var array<IdentityVerificationEvent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verificationEvents'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeCollectionOfObjectValues('verificationEvents', $this->getVerificationEvents());
    }

    /**
     * Sets the expiryDateTime property value. The effective expiry of the user's overall verified state, computed as the latest expiresDateTime across active verification events. null when no active event has an expiry. Read-only.
     * @param DateTime|null $value Value to set for the expiryDateTime property.
    */
    public function setExpiryDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expiryDateTime', $value);
    }

    /**
     * Sets the lastVerifiedDateTime property value. The date and time of the most recent successful identity verification. null when state is unverified. Read-only.
     * @param DateTime|null $value Value to set for the lastVerifiedDateTime property.
    */
    public function setLastVerifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastVerifiedDateTime', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param VerificationState|null $value Value to set for the state property.
    */
    public function setState(?VerificationState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the verificationEvents property value. The user's recent verification events, automatically included when the status is retrieved. Contains up to 10 events, ordered by recency. Older events are removed when the limit is reached.
     * @param array<IdentityVerificationEvent>|null $value Value to set for the verificationEvents property.
    */
    public function setVerificationEvents(?array $value): void {
        $this->getBackingStore()->set('verificationEvents', $value);
    }

}
