<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationSynchronizationError extends Entity implements Parsable 
{
    /**
     * @var string|null $entryType Represents the sync entity (school, section, student, teacher).
    */
    private ?string $entryType = null;
    
    /**
     * @var string|null $errorCode Represents the error code for this error.
    */
    private ?string $errorCode = null;
    
    /**
     * @var string|null $errorMessage Contains a description of the error.
    */
    private ?string $errorMessage = null;
    
    /**
     * @var string|null $joiningValue The unique identifier for the entry.
    */
    private ?string $joiningValue = null;
    
    /**
     * @var DateTime|null $recordedDateTime The time of occurrence of this error.
    */
    private ?DateTime $recordedDateTime = null;
    
    /**
     * @var string|null $reportableIdentifier The identifier of this error entry.
    */
    private ?string $reportableIdentifier = null;
    
    /**
     * Instantiates a new educationSynchronizationError and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationSynchronizationError');
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
        return $this->entryType;
    }

    /**
     * Gets the errorCode property value. Represents the error code for this error.
     * @return string|null
    */
    public function getErrorCode(): ?string {
        return $this->errorCode;
    }

    /**
     * Gets the errorMessage property value. Contains a description of the error.
     * @return string|null
    */
    public function getErrorMessage(): ?string {
        return $this->errorMessage;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'entryType' => function (ParseNode $n) use ($o) { $o->setEntryType($n->getStringValue()); },
            'errorCode' => function (ParseNode $n) use ($o) { $o->setErrorCode($n->getStringValue()); },
            'errorMessage' => function (ParseNode $n) use ($o) { $o->setErrorMessage($n->getStringValue()); },
            'joiningValue' => function (ParseNode $n) use ($o) { $o->setJoiningValue($n->getStringValue()); },
            'recordedDateTime' => function (ParseNode $n) use ($o) { $o->setRecordedDateTime($n->getDateTimeValue()); },
            'reportableIdentifier' => function (ParseNode $n) use ($o) { $o->setReportableIdentifier($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the joiningValue property value. The unique identifier for the entry.
     * @return string|null
    */
    public function getJoiningValue(): ?string {
        return $this->joiningValue;
    }

    /**
     * Gets the recordedDateTime property value. The time of occurrence of this error.
     * @return DateTime|null
    */
    public function getRecordedDateTime(): ?DateTime {
        return $this->recordedDateTime;
    }

    /**
     * Gets the reportableIdentifier property value. The identifier of this error entry.
     * @return string|null
    */
    public function getReportableIdentifier(): ?string {
        return $this->reportableIdentifier;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('entryType', $this->entryType);
        $writer->writeStringValue('errorCode', $this->errorCode);
        $writer->writeStringValue('errorMessage', $this->errorMessage);
        $writer->writeStringValue('joiningValue', $this->joiningValue);
        $writer->writeDateTimeValue('recordedDateTime', $this->recordedDateTime);
        $writer->writeStringValue('reportableIdentifier', $this->reportableIdentifier);
    }

    /**
     * Sets the entryType property value. Represents the sync entity (school, section, student, teacher).
     *  @param string|null $value Value to set for the entryType property.
    */
    public function setEntryType(?string $value ): void {
        $this->entryType = $value;
    }

    /**
     * Sets the errorCode property value. Represents the error code for this error.
     *  @param string|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?string $value ): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the errorMessage property value. Contains a description of the error.
     *  @param string|null $value Value to set for the errorMessage property.
    */
    public function setErrorMessage(?string $value ): void {
        $this->errorMessage = $value;
    }

    /**
     * Sets the joiningValue property value. The unique identifier for the entry.
     *  @param string|null $value Value to set for the joiningValue property.
    */
    public function setJoiningValue(?string $value ): void {
        $this->joiningValue = $value;
    }

    /**
     * Sets the recordedDateTime property value. The time of occurrence of this error.
     *  @param DateTime|null $value Value to set for the recordedDateTime property.
    */
    public function setRecordedDateTime(?DateTime $value ): void {
        $this->recordedDateTime = $value;
    }

    /**
     * Sets the reportableIdentifier property value. The identifier of this error entry.
     *  @param string|null $value Value to set for the reportableIdentifier property.
    */
    public function setReportableIdentifier(?string $value ): void {
        $this->reportableIdentifier = $value;
    }

}
