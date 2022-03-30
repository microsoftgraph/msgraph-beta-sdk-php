<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SynchronizationStatus implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var SynchronizationStatusCode|null $code High-level status code of the synchronization job. Possible values are: NotConfigured, NotRun, Active, Paused, Quarantine. */
    private ?SynchronizationStatusCode $code = null;
    
    /** @var int|null $countSuccessiveCompleteFailures Number of consecutive times this job failed. */
    private ?int $countSuccessiveCompleteFailures = null;
    
    /** @var bool|null $escrowsPruned true if the job's escrows (object-level errors) were pruned during initial synchronization. Escrows can be pruned if during the initial synchronization, you reach the threshold of errors that would normally put the job in quarantine. Instead of going into quarantine, the synchronization process clears the job's errors and continues until the initial synchronization is completed. When the initial synchronization is completed, the job will pause and wait for the customer to clean up the errors. */
    private ?bool $escrowsPruned = null;
    
    /** @var SynchronizationTaskExecution|null $lastExecution Details of the last execution of the job. */
    private ?SynchronizationTaskExecution $lastExecution = null;
    
    /** @var SynchronizationTaskExecution|null $lastSuccessfulExecution Details of the last execution of this job, which didn't have any errors. */
    private ?SynchronizationTaskExecution $lastSuccessfulExecution = null;
    
    /** @var SynchronizationTaskExecution|null $lastSuccessfulExecutionWithExports Details of the last execution of the job, which exported objects into the target directory. */
    private ?SynchronizationTaskExecution $lastSuccessfulExecutionWithExports = null;
    
    /** @var array<SynchronizationProgress>|null $progress Details of the progress of a job toward completion. */
    private ?array $progress = null;
    
    /** @var SynchronizationQuarantine|null $quarantine If job is in quarantine, quarantine details. */
    private ?SynchronizationQuarantine $quarantine = null;
    
    /** @var DateTime|null $steadyStateFirstAchievedTime The time when steady state (no more changes to the process) was first achieved. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    private ?DateTime $steadyStateFirstAchievedTime = null;
    
    /** @var DateTime|null $steadyStateLastAchievedTime The time when steady state (no more changes to the process) was last achieved. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    private ?DateTime $steadyStateLastAchievedTime = null;
    
    /** @var array<StringKeyLongValuePair>|null $synchronizedEntryCountByType Count of synchronized objects, listed by object type. */
    private ?array $synchronizedEntryCountByType = null;
    
    /** @var string|null $troubleshootingUrl In the event of an error, the URL with the troubleshooting steps for the issue. */
    private ?string $troubleshootingUrl = null;
    
    /**
     * Instantiates a new synchronizationStatus and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationStatus
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationStatus {
        return new SynchronizationStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the code property value. High-level status code of the synchronization job. Possible values are: NotConfigured, NotRun, Active, Paused, Quarantine.
     * @return SynchronizationStatusCode|null
    */
    public function getCode(): ?SynchronizationStatusCode {
        return $this->code;
    }

    /**
     * Gets the countSuccessiveCompleteFailures property value. Number of consecutive times this job failed.
     * @return int|null
    */
    public function getCountSuccessiveCompleteFailures(): ?int {
        return $this->countSuccessiveCompleteFailures;
    }

    /**
     * Gets the escrowsPruned property value. true if the job's escrows (object-level errors) were pruned during initial synchronization. Escrows can be pruned if during the initial synchronization, you reach the threshold of errors that would normally put the job in quarantine. Instead of going into quarantine, the synchronization process clears the job's errors and continues until the initial synchronization is completed. When the initial synchronization is completed, the job will pause and wait for the customer to clean up the errors.
     * @return bool|null
    */
    public function getEscrowsPruned(): ?bool {
        return $this->escrowsPruned;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'code' => function (self $o, ParseNode $n) { $o->setCode($n->getEnumValue(SynchronizationStatusCode::class)); },
            'countSuccessiveCompleteFailures' => function (self $o, ParseNode $n) { $o->setCountSuccessiveCompleteFailures($n->getIntegerValue()); },
            'escrowsPruned' => function (self $o, ParseNode $n) { $o->setEscrowsPruned($n->getBooleanValue()); },
            'lastExecution' => function (self $o, ParseNode $n) { $o->setLastExecution($n->getObjectValue(SynchronizationTaskExecution::class)); },
            'lastSuccessfulExecution' => function (self $o, ParseNode $n) { $o->setLastSuccessfulExecution($n->getObjectValue(SynchronizationTaskExecution::class)); },
            'lastSuccessfulExecutionWithExports' => function (self $o, ParseNode $n) { $o->setLastSuccessfulExecutionWithExports($n->getObjectValue(SynchronizationTaskExecution::class)); },
            'progress' => function (self $o, ParseNode $n) { $o->setProgress($n->getCollectionOfObjectValues(SynchronizationProgress::class)); },
            'quarantine' => function (self $o, ParseNode $n) { $o->setQuarantine($n->getObjectValue(SynchronizationQuarantine::class)); },
            'steadyStateFirstAchievedTime' => function (self $o, ParseNode $n) { $o->setSteadyStateFirstAchievedTime($n->getDateTimeValue()); },
            'steadyStateLastAchievedTime' => function (self $o, ParseNode $n) { $o->setSteadyStateLastAchievedTime($n->getDateTimeValue()); },
            'synchronizedEntryCountByType' => function (self $o, ParseNode $n) { $o->setSynchronizedEntryCountByType($n->getCollectionOfObjectValues(StringKeyLongValuePair::class)); },
            'troubleshootingUrl' => function (self $o, ParseNode $n) { $o->setTroubleshootingUrl($n->getStringValue()); },
        ];
    }

    /**
     * Gets the lastExecution property value. Details of the last execution of the job.
     * @return SynchronizationTaskExecution|null
    */
    public function getLastExecution(): ?SynchronizationTaskExecution {
        return $this->lastExecution;
    }

    /**
     * Gets the lastSuccessfulExecution property value. Details of the last execution of this job, which didn't have any errors.
     * @return SynchronizationTaskExecution|null
    */
    public function getLastSuccessfulExecution(): ?SynchronizationTaskExecution {
        return $this->lastSuccessfulExecution;
    }

    /**
     * Gets the lastSuccessfulExecutionWithExports property value. Details of the last execution of the job, which exported objects into the target directory.
     * @return SynchronizationTaskExecution|null
    */
    public function getLastSuccessfulExecutionWithExports(): ?SynchronizationTaskExecution {
        return $this->lastSuccessfulExecutionWithExports;
    }

    /**
     * Gets the progress property value. Details of the progress of a job toward completion.
     * @return array<SynchronizationProgress>|null
    */
    public function getProgress(): ?array {
        return $this->progress;
    }

    /**
     * Gets the quarantine property value. If job is in quarantine, quarantine details.
     * @return SynchronizationQuarantine|null
    */
    public function getQuarantine(): ?SynchronizationQuarantine {
        return $this->quarantine;
    }

    /**
     * Gets the steadyStateFirstAchievedTime property value. The time when steady state (no more changes to the process) was first achieved. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getSteadyStateFirstAchievedTime(): ?DateTime {
        return $this->steadyStateFirstAchievedTime;
    }

    /**
     * Gets the steadyStateLastAchievedTime property value. The time when steady state (no more changes to the process) was last achieved. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getSteadyStateLastAchievedTime(): ?DateTime {
        return $this->steadyStateLastAchievedTime;
    }

    /**
     * Gets the synchronizedEntryCountByType property value. Count of synchronized objects, listed by object type.
     * @return array<StringKeyLongValuePair>|null
    */
    public function getSynchronizedEntryCountByType(): ?array {
        return $this->synchronizedEntryCountByType;
    }

    /**
     * Gets the troubleshootingUrl property value. In the event of an error, the URL with the troubleshooting steps for the issue.
     * @return string|null
    */
    public function getTroubleshootingUrl(): ?string {
        return $this->troubleshootingUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('code', $this->code);
        $writer->writeIntegerValue('countSuccessiveCompleteFailures', $this->countSuccessiveCompleteFailures);
        $writer->writeBooleanValue('escrowsPruned', $this->escrowsPruned);
        $writer->writeObjectValue('lastExecution', $this->lastExecution);
        $writer->writeObjectValue('lastSuccessfulExecution', $this->lastSuccessfulExecution);
        $writer->writeObjectValue('lastSuccessfulExecutionWithExports', $this->lastSuccessfulExecutionWithExports);
        $writer->writeCollectionOfObjectValues('progress', $this->progress);
        $writer->writeObjectValue('quarantine', $this->quarantine);
        $writer->writeDateTimeValue('steadyStateFirstAchievedTime', $this->steadyStateFirstAchievedTime);
        $writer->writeDateTimeValue('steadyStateLastAchievedTime', $this->steadyStateLastAchievedTime);
        $writer->writeCollectionOfObjectValues('synchronizedEntryCountByType', $this->synchronizedEntryCountByType);
        $writer->writeStringValue('troubleshootingUrl', $this->troubleshootingUrl);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the code property value. High-level status code of the synchronization job. Possible values are: NotConfigured, NotRun, Active, Paused, Quarantine.
     *  @param SynchronizationStatusCode|null $value Value to set for the code property.
    */
    public function setCode(?SynchronizationStatusCode $value ): void {
        $this->code = $value;
    }

    /**
     * Sets the countSuccessiveCompleteFailures property value. Number of consecutive times this job failed.
     *  @param int|null $value Value to set for the countSuccessiveCompleteFailures property.
    */
    public function setCountSuccessiveCompleteFailures(?int $value ): void {
        $this->countSuccessiveCompleteFailures = $value;
    }

    /**
     * Sets the escrowsPruned property value. true if the job's escrows (object-level errors) were pruned during initial synchronization. Escrows can be pruned if during the initial synchronization, you reach the threshold of errors that would normally put the job in quarantine. Instead of going into quarantine, the synchronization process clears the job's errors and continues until the initial synchronization is completed. When the initial synchronization is completed, the job will pause and wait for the customer to clean up the errors.
     *  @param bool|null $value Value to set for the escrowsPruned property.
    */
    public function setEscrowsPruned(?bool $value ): void {
        $this->escrowsPruned = $value;
    }

    /**
     * Sets the lastExecution property value. Details of the last execution of the job.
     *  @param SynchronizationTaskExecution|null $value Value to set for the lastExecution property.
    */
    public function setLastExecution(?SynchronizationTaskExecution $value ): void {
        $this->lastExecution = $value;
    }

    /**
     * Sets the lastSuccessfulExecution property value. Details of the last execution of this job, which didn't have any errors.
     *  @param SynchronizationTaskExecution|null $value Value to set for the lastSuccessfulExecution property.
    */
    public function setLastSuccessfulExecution(?SynchronizationTaskExecution $value ): void {
        $this->lastSuccessfulExecution = $value;
    }

    /**
     * Sets the lastSuccessfulExecutionWithExports property value. Details of the last execution of the job, which exported objects into the target directory.
     *  @param SynchronizationTaskExecution|null $value Value to set for the lastSuccessfulExecutionWithExports property.
    */
    public function setLastSuccessfulExecutionWithExports(?SynchronizationTaskExecution $value ): void {
        $this->lastSuccessfulExecutionWithExports = $value;
    }

    /**
     * Sets the progress property value. Details of the progress of a job toward completion.
     *  @param array<SynchronizationProgress>|null $value Value to set for the progress property.
    */
    public function setProgress(?array $value ): void {
        $this->progress = $value;
    }

    /**
     * Sets the quarantine property value. If job is in quarantine, quarantine details.
     *  @param SynchronizationQuarantine|null $value Value to set for the quarantine property.
    */
    public function setQuarantine(?SynchronizationQuarantine $value ): void {
        $this->quarantine = $value;
    }

    /**
     * Sets the steadyStateFirstAchievedTime property value. The time when steady state (no more changes to the process) was first achieved. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the steadyStateFirstAchievedTime property.
    */
    public function setSteadyStateFirstAchievedTime(?DateTime $value ): void {
        $this->steadyStateFirstAchievedTime = $value;
    }

    /**
     * Sets the steadyStateLastAchievedTime property value. The time when steady state (no more changes to the process) was last achieved. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the steadyStateLastAchievedTime property.
    */
    public function setSteadyStateLastAchievedTime(?DateTime $value ): void {
        $this->steadyStateLastAchievedTime = $value;
    }

    /**
     * Sets the synchronizedEntryCountByType property value. Count of synchronized objects, listed by object type.
     *  @param array<StringKeyLongValuePair>|null $value Value to set for the synchronizedEntryCountByType property.
    */
    public function setSynchronizedEntryCountByType(?array $value ): void {
        $this->synchronizedEntryCountByType = $value;
    }

    /**
     * Sets the troubleshootingUrl property value. In the event of an error, the URL with the troubleshooting steps for the issue.
     *  @param string|null $value Value to set for the troubleshootingUrl property.
    */
    public function setTroubleshootingUrl(?string $value ): void {
        $this->troubleshootingUrl = $value;
    }

}
