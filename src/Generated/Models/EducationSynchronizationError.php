<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationSynchronizationError extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new educationSynchronizationError and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationSynchronizationError
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationSynchronizationError {
        return new EducationSynchronizationError();
    }

    /**
     * Gets the entryType property value. Represents the sync entity (school, section, student, teacher).
     * @return string|null
    */
    public function getEntryType(): ?string {
        $val = $this->getBackingStore()->get('entryType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'entryType'");
    }

    /**
     * Gets the errorCode property value. Represents the error code for this error.
     * @return string|null
    */
    public function getErrorCode(): ?string {
        $val = $this->getBackingStore()->get('errorCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorCode'");
    }

    /**
     * Gets the errorMessage property value. Contains a description of the error.
     * @return string|null
    */
    public function getErrorMessage(): ?string {
        $val = $this->getBackingStore()->get('errorMessage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorMessage'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'entryType' => fn(ParseNode $n) => $o->setEntryType($n->getStringValue()),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getStringValue()),
            'errorMessage' => fn(ParseNode $n) => $o->setErrorMessage($n->getStringValue()),
            'joiningValue' => fn(ParseNode $n) => $o->setJoiningValue($n->getStringValue()),
            'recordedDateTime' => fn(ParseNode $n) => $o->setRecordedDateTime($n->getDateTimeValue()),
            'reportableIdentifier' => fn(ParseNode $n) => $o->setReportableIdentifier($n->getStringValue()),
        ]);
    }

    /**
     * Gets the joiningValue property value. The unique identifier for the entry.
     * @return string|null
    */
    public function getJoiningValue(): ?string {
        $val = $this->getBackingStore()->get('joiningValue');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'joiningValue'");
    }

    /**
     * Gets the recordedDateTime property value. The time of occurrence of this error.
     * @return DateTime|null
    */
    public function getRecordedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('recordedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recordedDateTime'");
    }

    /**
     * Gets the reportableIdentifier property value. The identifier of this error entry.
     * @return string|null
    */
    public function getReportableIdentifier(): ?string {
        $val = $this->getBackingStore()->get('reportableIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reportableIdentifier'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('entryType', $this->getEntryType());
        $writer->writeStringValue('errorCode', $this->getErrorCode());
        $writer->writeStringValue('errorMessage', $this->getErrorMessage());
        $writer->writeStringValue('joiningValue', $this->getJoiningValue());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('recordedDateTime', $this->getRecordedDateTime());
        $writer->writeStringValue('reportableIdentifier', $this->getReportableIdentifier());
    }

    /**
     * Sets the entryType property value. Represents the sync entity (school, section, student, teacher).
     * @param string|null $value Value to set for the entryType property.
    */
    public function setEntryType(?string $value): void {
        $this->getBackingStore()->set('entryType', $value);
    }

    /**
     * Sets the errorCode property value. Represents the error code for this error.
     * @param string|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?string $value): void {
        $this->getBackingStore()->set('errorCode', $value);
    }

    /**
     * Sets the errorMessage property value. Contains a description of the error.
     * @param string|null $value Value to set for the errorMessage property.
    */
    public function setErrorMessage(?string $value): void {
        $this->getBackingStore()->set('errorMessage', $value);
    }

    /**
     * Sets the joiningValue property value. The unique identifier for the entry.
     * @param string|null $value Value to set for the joiningValue property.
    */
    public function setJoiningValue(?string $value): void {
        $this->getBackingStore()->set('joiningValue', $value);
    }

    /**
     * Sets the recordedDateTime property value. The time of occurrence of this error.
     * @param DateTime|null $value Value to set for the recordedDateTime property.
    */
    public function setRecordedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('recordedDateTime', $value);
    }

    /**
     * Sets the reportableIdentifier property value. The identifier of this error entry.
     * @param string|null $value Value to set for the reportableIdentifier property.
    */
    public function setReportableIdentifier(?string $value): void {
        $this->getBackingStore()->set('reportableIdentifier', $value);
    }

}
