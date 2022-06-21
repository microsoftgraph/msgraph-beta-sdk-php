<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ArchivedPrintJob implements AdditionalDataHolder, Parsable 
{
    /** @var bool|null $acquiredByPrinter True if the job was acquired by a printer; false otherwise. Read-only. */
    private ?bool $acquiredByPrinter = null;
    
    /** @var DateTime|null $acquiredDateTime The dateTimeOffset when the job was acquired by the printer, if any. Read-only. */
    private ?DateTime $acquiredDateTime = null;
    
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $blackAndWhitePageCount The number of black and white pages that were printed. Read-only. */
    private ?int $blackAndWhitePageCount = null;
    
    /** @var int|null $colorPageCount The number of color pages that were printed. Read-only. */
    private ?int $colorPageCount = null;
    
    /** @var DateTime|null $completionDateTime The dateTimeOffset when the job was completed, canceled or aborted. Read-only. */
    private ?DateTime $completionDateTime = null;
    
    /** @var int|null $copiesPrinted The number of copies that were printed. Read-only. */
    private ?int $copiesPrinted = null;
    
    /** @var UserIdentity|null $createdBy The user who created the print job. Read-only. */
    private ?UserIdentity $createdBy = null;
    
    /** @var DateTime|null $createdDateTime The dateTimeOffset when the job was created. Read-only. */
    private ?DateTime $createdDateTime = null;
    
    /** @var int|null $duplexPageCount The number of duplex (double-sided) pages that were printed. Read-only. */
    private ?int $duplexPageCount = null;
    
    /** @var string|null $id The archived print job's GUID. Read-only. */
    private ?string $id = null;
    
    /** @var int|null $pageCount The total number of pages that were printed. Read-only. */
    private ?int $pageCount = null;
    
    /** @var string|null $printerId The printer ID that the job was queued for. Read-only. */
    private ?string $printerId = null;
    
    /** @var PrintJobProcessingState|null $processingState The print job's final processing state. Read-only. */
    private ?PrintJobProcessingState $processingState = null;
    
    /** @var int|null $simplexPageCount The number of simplex (single-sided) pages that were printed. Read-only. */
    private ?int $simplexPageCount = null;
    
    /**
     * Instantiates a new archivedPrintJob and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ArchivedPrintJob
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ArchivedPrintJob {
        return new ArchivedPrintJob();
    }

    /**
     * Gets the acquiredByPrinter property value. True if the job was acquired by a printer; false otherwise. Read-only.
     * @return bool|null
    */
    public function getAcquiredByPrinter(): ?bool {
        return $this->acquiredByPrinter;
    }

    /**
     * Gets the acquiredDateTime property value. The dateTimeOffset when the job was acquired by the printer, if any. Read-only.
     * @return DateTime|null
    */
    public function getAcquiredDateTime(): ?DateTime {
        return $this->acquiredDateTime;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the blackAndWhitePageCount property value. The number of black and white pages that were printed. Read-only.
     * @return int|null
    */
    public function getBlackAndWhitePageCount(): ?int {
        return $this->blackAndWhitePageCount;
    }

    /**
     * Gets the colorPageCount property value. The number of color pages that were printed. Read-only.
     * @return int|null
    */
    public function getColorPageCount(): ?int {
        return $this->colorPageCount;
    }

    /**
     * Gets the completionDateTime property value. The dateTimeOffset when the job was completed, canceled or aborted. Read-only.
     * @return DateTime|null
    */
    public function getCompletionDateTime(): ?DateTime {
        return $this->completionDateTime;
    }

    /**
     * Gets the copiesPrinted property value. The number of copies that were printed. Read-only.
     * @return int|null
    */
    public function getCopiesPrinted(): ?int {
        return $this->copiesPrinted;
    }

    /**
     * Gets the createdBy property value. The user who created the print job. Read-only.
     * @return UserIdentity|null
    */
    public function getCreatedBy(): ?UserIdentity {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The dateTimeOffset when the job was created. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the duplexPageCount property value. The number of duplex (double-sided) pages that were printed. Read-only.
     * @return int|null
    */
    public function getDuplexPageCount(): ?int {
        return $this->duplexPageCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'acquiredByPrinter' => function (self $o, ParseNode $n) { $o->setAcquiredByPrinter($n->getBooleanValue()); },
            'acquiredDateTime' => function (self $o, ParseNode $n) { $o->setAcquiredDateTime($n->getDateTimeValue()); },
            'blackAndWhitePageCount' => function (self $o, ParseNode $n) { $o->setBlackAndWhitePageCount($n->getIntegerValue()); },
            'colorPageCount' => function (self $o, ParseNode $n) { $o->setColorPageCount($n->getIntegerValue()); },
            'completionDateTime' => function (self $o, ParseNode $n) { $o->setCompletionDateTime($n->getDateTimeValue()); },
            'copiesPrinted' => function (self $o, ParseNode $n) { $o->setCopiesPrinted($n->getIntegerValue()); },
            'createdBy' => function (self $o, ParseNode $n) { $o->setCreatedBy($n->getObjectValue(UserIdentity::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'duplexPageCount' => function (self $o, ParseNode $n) { $o->setDuplexPageCount($n->getIntegerValue()); },
            'id' => function (self $o, ParseNode $n) { $o->setId($n->getStringValue()); },
            'pageCount' => function (self $o, ParseNode $n) { $o->setPageCount($n->getIntegerValue()); },
            'printerId' => function (self $o, ParseNode $n) { $o->setPrinterId($n->getStringValue()); },
            'processingState' => function (self $o, ParseNode $n) { $o->setProcessingState($n->getEnumValue(PrintJobProcessingState::class)); },
            'simplexPageCount' => function (self $o, ParseNode $n) { $o->setSimplexPageCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the id property value. The archived print job's GUID. Read-only.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the pageCount property value. The total number of pages that were printed. Read-only.
     * @return int|null
    */
    public function getPageCount(): ?int {
        return $this->pageCount;
    }

    /**
     * Gets the printerId property value. The printer ID that the job was queued for. Read-only.
     * @return string|null
    */
    public function getPrinterId(): ?string {
        return $this->printerId;
    }

    /**
     * Gets the processingState property value. The print job's final processing state. Read-only.
     * @return PrintJobProcessingState|null
    */
    public function getProcessingState(): ?PrintJobProcessingState {
        return $this->processingState;
    }

    /**
     * Gets the simplexPageCount property value. The number of simplex (single-sided) pages that were printed. Read-only.
     * @return int|null
    */
    public function getSimplexPageCount(): ?int {
        return $this->simplexPageCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('acquiredByPrinter', $this->acquiredByPrinter);
        $writer->writeDateTimeValue('acquiredDateTime', $this->acquiredDateTime);
        $writer->writeIntegerValue('blackAndWhitePageCount', $this->blackAndWhitePageCount);
        $writer->writeIntegerValue('colorPageCount', $this->colorPageCount);
        $writer->writeDateTimeValue('completionDateTime', $this->completionDateTime);
        $writer->writeIntegerValue('copiesPrinted', $this->copiesPrinted);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeIntegerValue('duplexPageCount', $this->duplexPageCount);
        $writer->writeStringValue('id', $this->id);
        $writer->writeIntegerValue('pageCount', $this->pageCount);
        $writer->writeStringValue('printerId', $this->printerId);
        $writer->writeEnumValue('processingState', $this->processingState);
        $writer->writeIntegerValue('simplexPageCount', $this->simplexPageCount);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the acquiredByPrinter property value. True if the job was acquired by a printer; false otherwise. Read-only.
     *  @param bool|null $value Value to set for the acquiredByPrinter property.
    */
    public function setAcquiredByPrinter(?bool $value ): void {
        $this->acquiredByPrinter = $value;
    }

    /**
     * Sets the acquiredDateTime property value. The dateTimeOffset when the job was acquired by the printer, if any. Read-only.
     *  @param DateTime|null $value Value to set for the acquiredDateTime property.
    */
    public function setAcquiredDateTime(?DateTime $value ): void {
        $this->acquiredDateTime = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the blackAndWhitePageCount property value. The number of black and white pages that were printed. Read-only.
     *  @param int|null $value Value to set for the blackAndWhitePageCount property.
    */
    public function setBlackAndWhitePageCount(?int $value ): void {
        $this->blackAndWhitePageCount = $value;
    }

    /**
     * Sets the colorPageCount property value. The number of color pages that were printed. Read-only.
     *  @param int|null $value Value to set for the colorPageCount property.
    */
    public function setColorPageCount(?int $value ): void {
        $this->colorPageCount = $value;
    }

    /**
     * Sets the completionDateTime property value. The dateTimeOffset when the job was completed, canceled or aborted. Read-only.
     *  @param DateTime|null $value Value to set for the completionDateTime property.
    */
    public function setCompletionDateTime(?DateTime $value ): void {
        $this->completionDateTime = $value;
    }

    /**
     * Sets the copiesPrinted property value. The number of copies that were printed. Read-only.
     *  @param int|null $value Value to set for the copiesPrinted property.
    */
    public function setCopiesPrinted(?int $value ): void {
        $this->copiesPrinted = $value;
    }

    /**
     * Sets the createdBy property value. The user who created the print job. Read-only.
     *  @param UserIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?UserIdentity $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The dateTimeOffset when the job was created. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the duplexPageCount property value. The number of duplex (double-sided) pages that were printed. Read-only.
     *  @param int|null $value Value to set for the duplexPageCount property.
    */
    public function setDuplexPageCount(?int $value ): void {
        $this->duplexPageCount = $value;
    }

    /**
     * Sets the id property value. The archived print job's GUID. Read-only.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the pageCount property value. The total number of pages that were printed. Read-only.
     *  @param int|null $value Value to set for the pageCount property.
    */
    public function setPageCount(?int $value ): void {
        $this->pageCount = $value;
    }

    /**
     * Sets the printerId property value. The printer ID that the job was queued for. Read-only.
     *  @param string|null $value Value to set for the printerId property.
    */
    public function setPrinterId(?string $value ): void {
        $this->printerId = $value;
    }

    /**
     * Sets the processingState property value. The print job's final processing state. Read-only.
     *  @param PrintJobProcessingState|null $value Value to set for the processingState property.
    */
    public function setProcessingState(?PrintJobProcessingState $value ): void {
        $this->processingState = $value;
    }

    /**
     * Sets the simplexPageCount property value. The number of simplex (single-sided) pages that were printed. Read-only.
     *  @param int|null $value Value to set for the simplexPageCount property.
    */
    public function setSimplexPageCount(?int $value ): void {
        $this->simplexPageCount = $value;
    }

}
