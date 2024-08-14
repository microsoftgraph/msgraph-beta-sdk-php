<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DocumentProcessingJob extends Entity implements Parsable 
{
    /**
     * Instantiates a new DocumentProcessingJob and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DocumentProcessingJob
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DocumentProcessingJob {
        return new DocumentProcessingJob();
    }

    /**
     * Gets the createdDateTime property value. Date and time of item creation. Read-only.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'jobType' => fn(ParseNode $n) => $o->setJobType($n->getEnumValue(DocumentProcessingJobType::class)),
            'listItemUniqueId' => fn(ParseNode $n) => $o->setListItemUniqueId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(DocumentProcessingJobStatus::class)),
        ]);
    }

    /**
     * Gets the jobType property value. The document processing job type. The possible values are: file, folder
     * @return DocumentProcessingJobType|null
    */
    public function getJobType(): ?DocumentProcessingJobType {
        $val = $this->getBackingStore()->get('jobType');
        if (is_null($val) || $val instanceof DocumentProcessingJobType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'jobType'");
    }

    /**
     * Gets the listItemUniqueId property value. The listItemUniqueId of the file, or folder to process. Use GET driveItem resource operation and read  sharepointIds property to get listItemUniqueId.
     * @return string|null
    */
    public function getListItemUniqueId(): ?string {
        $val = $this->getBackingStore()->get('listItemUniqueId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'listItemUniqueId'");
    }

    /**
     * Gets the status property value. The document processing Job status. The possible values are: inProgress, completed, failed, unknownFutureValue.
     * @return DocumentProcessingJobStatus|null
    */
    public function getStatus(): ?DocumentProcessingJobStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof DocumentProcessingJobStatus) {
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
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeEnumValue('jobType', $this->getJobType());
        $writer->writeStringValue('listItemUniqueId', $this->getListItemUniqueId());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the createdDateTime property value. Date and time of item creation. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the jobType property value. The document processing job type. The possible values are: file, folder
     * @param DocumentProcessingJobType|null $value Value to set for the jobType property.
    */
    public function setJobType(?DocumentProcessingJobType $value): void {
        $this->getBackingStore()->set('jobType', $value);
    }

    /**
     * Sets the listItemUniqueId property value. The listItemUniqueId of the file, or folder to process. Use GET driveItem resource operation and read  sharepointIds property to get listItemUniqueId.
     * @param string|null $value Value to set for the listItemUniqueId property.
    */
    public function setListItemUniqueId(?string $value): void {
        $this->getBackingStore()->set('listItemUniqueId', $value);
    }

    /**
     * Sets the status property value. The document processing Job status. The possible values are: inProgress, completed, failed, unknownFutureValue.
     * @param DocumentProcessingJobStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DocumentProcessingJobStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
