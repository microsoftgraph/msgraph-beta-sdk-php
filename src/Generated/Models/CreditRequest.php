<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A credit request submitted by a user and acted on by an administrator.Derives from entity; the client-visible identifier is id.ETag-based optimistic concurrency is enforced via the standard OData ETag mechanism.Individual PATCH uses If-Match; the bulk action uses each item's etag field.
*/
class CreditRequest extends Entity implements Parsable 
{
    /**
     * Instantiates a new CreditRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreditRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreditRequest {
        return new CreditRequest();
    }

    /**
     * Gets the createdDateTime property value. The date and time the request was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the decisionBy property value. The identity of the administrator who approved or rejected the request.Only the user facet is populated. Null until the request is decided.
     * @return IdentitySet|null
    */
    public function getDecisionBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('decisionBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'decisionBy'");
    }

    /**
     * Gets the expirationDateTime property value. The date and time the request expires. The backing service sets this to 90 days aftercreation and resets it to 90 days after a state-changing update.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'decisionBy' => fn(ParseNode $n) => $o->setDecisionBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'requestedBy' => fn(ParseNode $n) => $o->setRequestedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'requestType' => fn(ParseNode $n) => $o->setRequestType($n->getEnumValue(CreditRequestType::class)),
            'serviceId' => fn(ParseNode $n) => $o->setServiceId($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(CreditRequestState::class)),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the request was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the requestedBy property value. The requestedBy property
     * @return IdentitySet|null
    */
    public function getRequestedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('requestedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestedBy'");
    }

    /**
     * Gets the requestType property value. The reason or trigger that caused a credit request to be created.
     * @return CreditRequestType|null
    */
    public function getRequestType(): ?CreditRequestType {
        $val = $this->getBackingStore()->get('requestType');
        if (is_null($val) || $val instanceof CreditRequestType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestType'");
    }

    /**
     * Gets the serviceId property value. The open, extensible service identifier associated with this credit request,using the same values as other Copilot Cost Management APIs, such as cowork and workIQ.
     * @return string|null
    */
    public function getServiceId(): ?string {
        $val = $this->getBackingStore()->get('serviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceId'");
    }

    /**
     * Gets the state property value. The state of a credit request in the approval workflow.
     * @return CreditRequestState|null
    */
    public function getState(): ?CreditRequestState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof CreditRequestState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('requestedBy', $this->getRequestedBy());
        $writer->writeEnumValue('requestType', $this->getRequestType());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the createdDateTime property value. The date and time the request was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the decisionBy property value. The identity of the administrator who approved or rejected the request.Only the user facet is populated. Null until the request is decided.
     * @param IdentitySet|null $value Value to set for the decisionBy property.
    */
    public function setDecisionBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('decisionBy', $value);
    }

    /**
     * Sets the expirationDateTime property value. The date and time the request expires. The backing service sets this to 90 days aftercreation and resets it to 90 days after a state-changing update.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the request was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the requestedBy property value. The requestedBy property
     * @param IdentitySet|null $value Value to set for the requestedBy property.
    */
    public function setRequestedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('requestedBy', $value);
    }

    /**
     * Sets the requestType property value. The reason or trigger that caused a credit request to be created.
     * @param CreditRequestType|null $value Value to set for the requestType property.
    */
    public function setRequestType(?CreditRequestType $value): void {
        $this->getBackingStore()->set('requestType', $value);
    }

    /**
     * Sets the serviceId property value. The open, extensible service identifier associated with this credit request,using the same values as other Copilot Cost Management APIs, such as cowork and workIQ.
     * @param string|null $value Value to set for the serviceId property.
    */
    public function setServiceId(?string $value): void {
        $this->getBackingStore()->set('serviceId', $value);
    }

    /**
     * Sets the state property value. The state of a credit request in the approval workflow.
     * @param CreditRequestState|null $value Value to set for the state property.
    */
    public function setState(?CreditRequestState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
