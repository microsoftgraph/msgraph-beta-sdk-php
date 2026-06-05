<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class IdentityCorrelation extends Entity implements Parsable 
{
    /**
     * Instantiates a new IdentityCorrelation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityCorrelation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentityCorrelation {
        return new IdentityCorrelation();
    }

    /**
     * Gets the endDateTime property value. The date and time when the correlation process completed.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('endDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDateTime'");
    }

    /**
     * Gets the error property value. Error information if the correlation process failed. null if successful.  Supports $filter (eq).
     * @return CorrelationError|null
    */
    public function getError(): ?CorrelationError {
        $val = $this->getBackingStore()->get('error');
        if (is_null($val) || $val instanceof CorrelationError) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'error'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([CorrelationError::class, 'createFromDiscriminatorValue'])),
            'identities' => fn(ParseNode $n) => $o->setIdentities($n->getCollectionOfObjectValues([CorrelatedIdentity::class, 'createFromDiscriminatorValue'])),
            'servicePrincipal' => fn(ParseNode $n) => $o->setServicePrincipal($n->getObjectValue([ServicePrincipal::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the identities property value. The collection of correlated identity results for this correlation report.
     * @return array<CorrelatedIdentity>|null
    */
    public function getIdentities(): ?array {
        $val = $this->getBackingStore()->get('identities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CorrelatedIdentity::class);
            /** @var array<CorrelatedIdentity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identities'");
    }

    /**
     * Gets the servicePrincipal property value. The servicePrincipal property
     * @return ServicePrincipal|null
    */
    public function getServicePrincipal(): ?ServicePrincipal {
        $val = $this->getBackingStore()->get('servicePrincipal');
        if (is_null($val) || $val instanceof ServicePrincipal) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipal'");
    }

    /**
     * Gets the startDateTime property value. The date and time when the correlation process started.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeCollectionOfObjectValues('identities', $this->getIdentities());
        $writer->writeObjectValue('servicePrincipal', $this->getServicePrincipal());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
    }

    /**
     * Sets the endDateTime property value. The date and time when the correlation process completed.
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the error property value. Error information if the correlation process failed. null if successful.  Supports $filter (eq).
     * @param CorrelationError|null $value Value to set for the error property.
    */
    public function setError(?CorrelationError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the identities property value. The collection of correlated identity results for this correlation report.
     * @param array<CorrelatedIdentity>|null $value Value to set for the identities property.
    */
    public function setIdentities(?array $value): void {
        $this->getBackingStore()->set('identities', $value);
    }

    /**
     * Sets the servicePrincipal property value. The servicePrincipal property
     * @param ServicePrincipal|null $value Value to set for the servicePrincipal property.
    */
    public function setServicePrincipal(?ServicePrincipal $value): void {
        $this->getBackingStore()->set('servicePrincipal', $value);
    }

    /**
     * Sets the startDateTime property value. The date and time when the correlation process started.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

}
