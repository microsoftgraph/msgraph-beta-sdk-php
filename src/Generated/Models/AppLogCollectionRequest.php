<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppLogCollectionRequest extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $completedDateTime Time at which the upload log request reached a terminal state
    */
    private ?DateTime $completedDateTime = null;
    
    /**
     * @var array<string>|null $customLogFolders List of log folders.
    */
    private ?array $customLogFolders = null;
    
    /**
     * @var string|null $errorMessage Error message if any during the upload process
    */
    private ?string $errorMessage = null;
    
    /**
     * @var AppLogUploadState|null $status AppLogUploadStatus
    */
    private ?AppLogUploadState $status = null;
    
    /**
     * Instantiates a new appLogCollectionRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.appLogCollectionRequest');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppLogCollectionRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppLogCollectionRequest {
        return new AppLogCollectionRequest();
    }

    /**
     * Gets the completedDateTime property value. Time at which the upload log request reached a terminal state
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        return $this->completedDateTime;
    }

    /**
     * Gets the customLogFolders property value. List of log folders.
     * @return array<string>|null
    */
    public function getCustomLogFolders(): ?array {
        return $this->customLogFolders;
    }

    /**
     * Gets the errorMessage property value. Error message if any during the upload process
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
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'customLogFolders' => fn(ParseNode $n) => $o->setCustomLogFolders($n->getCollectionOfPrimitiveValues()),
            'errorMessage' => fn(ParseNode $n) => $o->setErrorMessage($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(AppLogUploadState::class)),
        ]);
    }

    /**
     * Gets the status property value. AppLogUploadStatus
     * @return AppLogUploadState|null
    */
    public function getStatus(): ?AppLogUploadState {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('completedDateTime', $this->completedDateTime);
        $writer->writeCollectionOfPrimitiveValues('customLogFolders', $this->customLogFolders);
        $writer->writeStringValue('errorMessage', $this->errorMessage);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the completedDateTime property value. Time at which the upload log request reached a terminal state
     *  @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value ): void {
        $this->completedDateTime = $value;
    }

    /**
     * Sets the customLogFolders property value. List of log folders.
     *  @param array<string>|null $value Value to set for the customLogFolders property.
    */
    public function setCustomLogFolders(?array $value ): void {
        $this->customLogFolders = $value;
    }

    /**
     * Sets the errorMessage property value. Error message if any during the upload process
     *  @param string|null $value Value to set for the errorMessage property.
    */
    public function setErrorMessage(?string $value ): void {
        $this->errorMessage = $value;
    }

    /**
     * Sets the status property value. AppLogUploadStatus
     *  @param AppLogUploadState|null $value Value to set for the status property.
    */
    public function setStatus(?AppLogUploadState $value ): void {
        $this->status = $value;
    }

}
