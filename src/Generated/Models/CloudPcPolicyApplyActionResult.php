<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcPolicyApplyActionResult extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcPolicyApplyActionResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcPolicyApplyActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcPolicyApplyActionResult {
        return new CloudPcPolicyApplyActionResult();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'finishDateTime' => fn(ParseNode $n) => $o->setFinishDateTime($n->getDateTimeValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CloudPcPolicyApplyActionStatus::class)),
        ]);
    }

    /**
     * Gets the finishDateTime property value. The date and time when the operation finished.
     * @return DateTime|null
    */
    public function getFinishDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('finishDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'finishDateTime'");
    }

    /**
     * Gets the startDateTime property value. The date and time when the operation was applied.
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
     * Gets the status property value. The status property
     * @return CloudPcPolicyApplyActionStatus|null
    */
    public function getStatus(): ?CloudPcPolicyApplyActionStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof CloudPcPolicyApplyActionStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('finishDateTime', $this->getFinishDateTime());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the finishDateTime property value. The date and time when the operation finished.
     * @param DateTime|null $value Value to set for the finishDateTime property.
    */
    public function setFinishDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('finishDateTime', $value);
    }

    /**
     * Sets the startDateTime property value. The date and time when the operation was applied.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param CloudPcPolicyApplyActionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CloudPcPolicyApplyActionStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
