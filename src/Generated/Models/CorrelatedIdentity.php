<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CorrelatedIdentity extends Entity implements Parsable 
{
    /**
     * Instantiates a new CorrelatedIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CorrelatedIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CorrelatedIdentity {
        return new CorrelatedIdentity();
    }

    /**
     * Gets the correlatedDateTime property value. The date and time when the identity was correlated.  Supports $orderby.
     * @return DateTime|null
    */
    public function getCorrelatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('correlatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'correlatedDateTime'");
    }

    /**
     * Gets the error property value. Error information if the correlation for this identity failed. null if successful.  Supports $filter (eq).
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
            'correlatedDateTime' => fn(ParseNode $n) => $o->setCorrelatedDateTime($n->getDateTimeValue()),
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([CorrelationError::class, 'createFromDiscriminatorValue'])),
            'sourceIdentity' => fn(ParseNode $n) => $o->setSourceIdentity($n->getObjectValue([IdentityInfo::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'targetIdentity' => fn(ParseNode $n) => $o->setTargetIdentity($n->getObjectValue([IdentityInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the sourceIdentity property value. The source identity information from the on-premises directory.  Supports $filter (eq).
     * @return IdentityInfo|null
    */
    public function getSourceIdentity(): ?IdentityInfo {
        $val = $this->getBackingStore()->get('sourceIdentity');
        if (is_null($val) || $val instanceof IdentityInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceIdentity'");
    }

    /**
     * Gets the status property value. The correlation and assignment status. Possible values include: uncorrelated, correlatedNotAssigned, correlatedAssigned and failToCorrelate.  Supports $filter (eq), $count.
     * @return string|null
    */
    public function getStatus(): ?string {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the targetIdentity property value. The target identity information from Microsoft Entra ID.  Supports $filter (eq).
     * @return IdentityInfo|null
    */
    public function getTargetIdentity(): ?IdentityInfo {
        $val = $this->getBackingStore()->get('targetIdentity');
        if (is_null($val) || $val instanceof IdentityInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetIdentity'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('correlatedDateTime', $this->getCorrelatedDateTime());
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeObjectValue('sourceIdentity', $this->getSourceIdentity());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeObjectValue('targetIdentity', $this->getTargetIdentity());
    }

    /**
     * Sets the correlatedDateTime property value. The date and time when the identity was correlated.  Supports $orderby.
     * @param DateTime|null $value Value to set for the correlatedDateTime property.
    */
    public function setCorrelatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('correlatedDateTime', $value);
    }

    /**
     * Sets the error property value. Error information if the correlation for this identity failed. null if successful.  Supports $filter (eq).
     * @param CorrelationError|null $value Value to set for the error property.
    */
    public function setError(?CorrelationError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the sourceIdentity property value. The source identity information from the on-premises directory.  Supports $filter (eq).
     * @param IdentityInfo|null $value Value to set for the sourceIdentity property.
    */
    public function setSourceIdentity(?IdentityInfo $value): void {
        $this->getBackingStore()->set('sourceIdentity', $value);
    }

    /**
     * Sets the status property value. The correlation and assignment status. Possible values include: uncorrelated, correlatedNotAssigned, correlatedAssigned and failToCorrelate.  Supports $filter (eq), $count.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the targetIdentity property value. The target identity information from Microsoft Entra ID.  Supports $filter (eq).
     * @param IdentityInfo|null $value Value to set for the targetIdentity property.
    */
    public function setTargetIdentity(?IdentityInfo $value): void {
        $this->getBackingStore()->set('targetIdentity', $value);
    }

}
