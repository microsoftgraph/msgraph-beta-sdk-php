<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharePointMigrationTask extends Entity implements Parsable 
{
    /**
     * Instantiates a new SharePointMigrationTask and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointMigrationTask
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointMigrationTask {
        return new SharePointMigrationTask();
    }

    /**
     * Gets the error property value. The error property
     * @return PublicError|null
    */
    public function getError(): ?PublicError {
        $val = $this->getBackingStore()->get('error');
        if (is_null($val) || $val instanceof PublicError) {
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
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([PublicError::class, 'createFromDiscriminatorValue'])),
            'finishedDateTime' => fn(ParseNode $n) => $o->setFinishedDateTime($n->getDateTimeValue()),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'parameters' => fn(ParseNode $n) => $o->setParameters($n->getObjectValue([SharePointMigrationTaskParameters::class, 'createFromDiscriminatorValue'])),
            'startedDateTime' => fn(ParseNode $n) => $o->setStartedDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SharePointMigrationTaskStatus::class)),
        ]);
    }

    /**
     * Gets the finishedDateTime property value. The finishedDateTime property
     * @return DateTime|null
    */
    public function getFinishedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('finishedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'finishedDateTime'");
    }

    /**
     * Gets the lastUpdatedDateTime property value. The lastUpdatedDateTime property
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastUpdatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUpdatedDateTime'");
    }

    /**
     * Gets the parameters property value. The parameters property
     * @return SharePointMigrationTaskParameters|null
    */
    public function getParameters(): ?SharePointMigrationTaskParameters {
        $val = $this->getBackingStore()->get('parameters');
        if (is_null($val) || $val instanceof SharePointMigrationTaskParameters) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parameters'");
    }

    /**
     * Gets the startedDateTime property value. The startedDateTime property
     * @return DateTime|null
    */
    public function getStartedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startedDateTime'");
    }

    /**
     * Gets the status property value. The status property
     * @return SharePointMigrationTaskStatus|null
    */
    public function getStatus(): ?SharePointMigrationTaskStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof SharePointMigrationTaskStatus) {
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
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeDateTimeValue('finishedDateTime', $this->getFinishedDateTime());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeObjectValue('parameters', $this->getParameters());
        $writer->writeDateTimeValue('startedDateTime', $this->getStartedDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the error property value. The error property
     * @param PublicError|null $value Value to set for the error property.
    */
    public function setError(?PublicError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the finishedDateTime property value. The finishedDateTime property
     * @param DateTime|null $value Value to set for the finishedDateTime property.
    */
    public function setFinishedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('finishedDateTime', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. The lastUpdatedDateTime property
     * @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the parameters property value. The parameters property
     * @param SharePointMigrationTaskParameters|null $value Value to set for the parameters property.
    */
    public function setParameters(?SharePointMigrationTaskParameters $value): void {
        $this->getBackingStore()->set('parameters', $value);
    }

    /**
     * Sets the startedDateTime property value. The startedDateTime property
     * @param DateTime|null $value Value to set for the startedDateTime property.
    */
    public function setStartedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startedDateTime', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param SharePointMigrationTaskStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SharePointMigrationTaskStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
