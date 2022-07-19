<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SynchronizationTaskExecution implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $activityIdentifier Identifier of the job run.
    */
    private ?string $activityIdentifier = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $countEntitled Count of processed entries that were assigned for this application.
    */
    private ?int $countEntitled = null;
    
    /**
     * @var int|null $countEntitledForProvisioning Count of processed entries that were assigned for provisioning.
    */
    private ?int $countEntitledForProvisioning = null;
    
    /**
     * @var int|null $countEscrowed Count of entries that were escrowed (errors).
    */
    private ?int $countEscrowed = null;
    
    /**
     * @var int|null $countEscrowedRaw Count of entries that were escrowed, including system-generated escrows.
    */
    private ?int $countEscrowedRaw = null;
    
    /**
     * @var int|null $countExported Count of exported entries.
    */
    private ?int $countExported = null;
    
    /**
     * @var int|null $countExports Count of entries that were expected to be exported.
    */
    private ?int $countExports = null;
    
    /**
     * @var int|null $countImported Count of imported entries.
    */
    private ?int $countImported = null;
    
    /**
     * @var int|null $countImportedDeltas Count of imported delta-changes.
    */
    private ?int $countImportedDeltas = null;
    
    /**
     * @var int|null $countImportedReferenceDeltas Count of imported delta-changes pertaining to reference changes.
    */
    private ?int $countImportedReferenceDeltas = null;
    
    /**
     * @var SynchronizationError|null $error If an error was encountered, contains a synchronizationError object with details.
    */
    private ?SynchronizationError $error = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var SynchronizationTaskExecutionResult|null $state The state property
    */
    private ?SynchronizationTaskExecutionResult $state = null;
    
    /**
     * @var DateTime|null $timeBegan Time when this job run began. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $timeBegan = null;
    
    /**
     * @var DateTime|null $timeEnded Time when this job run ended. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $timeEnded = null;
    
    /**
     * Instantiates a new synchronizationTaskExecution and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.synchronizationTaskExecution');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationTaskExecution
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationTaskExecution {
        return new SynchronizationTaskExecution();
    }

    /**
     * Gets the activityIdentifier property value. Identifier of the job run.
     * @return string|null
    */
    public function getActivityIdentifier(): ?string {
        return $this->activityIdentifier;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the countEntitled property value. Count of processed entries that were assigned for this application.
     * @return int|null
    */
    public function getCountEntitled(): ?int {
        return $this->countEntitled;
    }

    /**
     * Gets the countEntitledForProvisioning property value. Count of processed entries that were assigned for provisioning.
     * @return int|null
    */
    public function getCountEntitledForProvisioning(): ?int {
        return $this->countEntitledForProvisioning;
    }

    /**
     * Gets the countEscrowed property value. Count of entries that were escrowed (errors).
     * @return int|null
    */
    public function getCountEscrowed(): ?int {
        return $this->countEscrowed;
    }

    /**
     * Gets the countEscrowedRaw property value. Count of entries that were escrowed, including system-generated escrows.
     * @return int|null
    */
    public function getCountEscrowedRaw(): ?int {
        return $this->countEscrowedRaw;
    }

    /**
     * Gets the countExported property value. Count of exported entries.
     * @return int|null
    */
    public function getCountExported(): ?int {
        return $this->countExported;
    }

    /**
     * Gets the countExports property value. Count of entries that were expected to be exported.
     * @return int|null
    */
    public function getCountExports(): ?int {
        return $this->countExports;
    }

    /**
     * Gets the countImported property value. Count of imported entries.
     * @return int|null
    */
    public function getCountImported(): ?int {
        return $this->countImported;
    }

    /**
     * Gets the countImportedDeltas property value. Count of imported delta-changes.
     * @return int|null
    */
    public function getCountImportedDeltas(): ?int {
        return $this->countImportedDeltas;
    }

    /**
     * Gets the countImportedReferenceDeltas property value. Count of imported delta-changes pertaining to reference changes.
     * @return int|null
    */
    public function getCountImportedReferenceDeltas(): ?int {
        return $this->countImportedReferenceDeltas;
    }

    /**
     * Gets the error property value. If an error was encountered, contains a synchronizationError object with details.
     * @return SynchronizationError|null
    */
    public function getError(): ?SynchronizationError {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activityIdentifier' => function (ParseNode $n) use ($o) { $o->setActivityIdentifier($n->getStringValue()); },
            'countEntitled' => function (ParseNode $n) use ($o) { $o->setCountEntitled($n->getIntegerValue()); },
            'countEntitledForProvisioning' => function (ParseNode $n) use ($o) { $o->setCountEntitledForProvisioning($n->getIntegerValue()); },
            'countEscrowed' => function (ParseNode $n) use ($o) { $o->setCountEscrowed($n->getIntegerValue()); },
            'countEscrowedRaw' => function (ParseNode $n) use ($o) { $o->setCountEscrowedRaw($n->getIntegerValue()); },
            'countExported' => function (ParseNode $n) use ($o) { $o->setCountExported($n->getIntegerValue()); },
            'countExports' => function (ParseNode $n) use ($o) { $o->setCountExports($n->getIntegerValue()); },
            'countImported' => function (ParseNode $n) use ($o) { $o->setCountImported($n->getIntegerValue()); },
            'countImportedDeltas' => function (ParseNode $n) use ($o) { $o->setCountImportedDeltas($n->getIntegerValue()); },
            'countImportedReferenceDeltas' => function (ParseNode $n) use ($o) { $o->setCountImportedReferenceDeltas($n->getIntegerValue()); },
            'error' => function (ParseNode $n) use ($o) { $o->setError($n->getObjectValue(array(SynchronizationError::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(SynchronizationTaskExecutionResult::class)); },
            'timeBegan' => function (ParseNode $n) use ($o) { $o->setTimeBegan($n->getDateTimeValue()); },
            'timeEnded' => function (ParseNode $n) use ($o) { $o->setTimeEnded($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the state property value. The state property
     * @return SynchronizationTaskExecutionResult|null
    */
    public function getState(): ?SynchronizationTaskExecutionResult {
        return $this->state;
    }

    /**
     * Gets the timeBegan property value. Time when this job run began. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getTimeBegan(): ?DateTime {
        return $this->timeBegan;
    }

    /**
     * Gets the timeEnded property value. Time when this job run ended. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getTimeEnded(): ?DateTime {
        return $this->timeEnded;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('activityIdentifier', $this->activityIdentifier);
        $writer->writeIntegerValue('countEntitled', $this->countEntitled);
        $writer->writeIntegerValue('countEntitledForProvisioning', $this->countEntitledForProvisioning);
        $writer->writeIntegerValue('countEscrowed', $this->countEscrowed);
        $writer->writeIntegerValue('countEscrowedRaw', $this->countEscrowedRaw);
        $writer->writeIntegerValue('countExported', $this->countExported);
        $writer->writeIntegerValue('countExports', $this->countExports);
        $writer->writeIntegerValue('countImported', $this->countImported);
        $writer->writeIntegerValue('countImportedDeltas', $this->countImportedDeltas);
        $writer->writeIntegerValue('countImportedReferenceDeltas', $this->countImportedReferenceDeltas);
        $writer->writeObjectValue('error', $this->error);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeDateTimeValue('timeBegan', $this->timeBegan);
        $writer->writeDateTimeValue('timeEnded', $this->timeEnded);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the activityIdentifier property value. Identifier of the job run.
     *  @param string|null $value Value to set for the activityIdentifier property.
    */
    public function setActivityIdentifier(?string $value ): void {
        $this->activityIdentifier = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the countEntitled property value. Count of processed entries that were assigned for this application.
     *  @param int|null $value Value to set for the countEntitled property.
    */
    public function setCountEntitled(?int $value ): void {
        $this->countEntitled = $value;
    }

    /**
     * Sets the countEntitledForProvisioning property value. Count of processed entries that were assigned for provisioning.
     *  @param int|null $value Value to set for the countEntitledForProvisioning property.
    */
    public function setCountEntitledForProvisioning(?int $value ): void {
        $this->countEntitledForProvisioning = $value;
    }

    /**
     * Sets the countEscrowed property value. Count of entries that were escrowed (errors).
     *  @param int|null $value Value to set for the countEscrowed property.
    */
    public function setCountEscrowed(?int $value ): void {
        $this->countEscrowed = $value;
    }

    /**
     * Sets the countEscrowedRaw property value. Count of entries that were escrowed, including system-generated escrows.
     *  @param int|null $value Value to set for the countEscrowedRaw property.
    */
    public function setCountEscrowedRaw(?int $value ): void {
        $this->countEscrowedRaw = $value;
    }

    /**
     * Sets the countExported property value. Count of exported entries.
     *  @param int|null $value Value to set for the countExported property.
    */
    public function setCountExported(?int $value ): void {
        $this->countExported = $value;
    }

    /**
     * Sets the countExports property value. Count of entries that were expected to be exported.
     *  @param int|null $value Value to set for the countExports property.
    */
    public function setCountExports(?int $value ): void {
        $this->countExports = $value;
    }

    /**
     * Sets the countImported property value. Count of imported entries.
     *  @param int|null $value Value to set for the countImported property.
    */
    public function setCountImported(?int $value ): void {
        $this->countImported = $value;
    }

    /**
     * Sets the countImportedDeltas property value. Count of imported delta-changes.
     *  @param int|null $value Value to set for the countImportedDeltas property.
    */
    public function setCountImportedDeltas(?int $value ): void {
        $this->countImportedDeltas = $value;
    }

    /**
     * Sets the countImportedReferenceDeltas property value. Count of imported delta-changes pertaining to reference changes.
     *  @param int|null $value Value to set for the countImportedReferenceDeltas property.
    */
    public function setCountImportedReferenceDeltas(?int $value ): void {
        $this->countImportedReferenceDeltas = $value;
    }

    /**
     * Sets the error property value. If an error was encountered, contains a synchronizationError object with details.
     *  @param SynchronizationError|null $value Value to set for the error property.
    */
    public function setError(?SynchronizationError $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the state property value. The state property
     *  @param SynchronizationTaskExecutionResult|null $value Value to set for the state property.
    */
    public function setState(?SynchronizationTaskExecutionResult $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the timeBegan property value. Time when this job run began. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the timeBegan property.
    */
    public function setTimeBegan(?DateTime $value ): void {
        $this->timeBegan = $value;
    }

    /**
     * Sets the timeEnded property value. Time when this job run ended. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the timeEnded property.
    */
    public function setTimeEnded(?DateTime $value ): void {
        $this->timeEnded = $value;
    }

}
