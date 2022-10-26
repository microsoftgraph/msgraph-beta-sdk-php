<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RunSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $failedRuns The number of failed workflow runs.
    */
    private ?int $failedRuns = null;
    
    /**
     * @var int|null $failedTasks The number of failed tasks of a workflow.
    */
    private ?int $failedTasks = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $successfulRuns The number of successful workflow runs.
    */
    private ?int $successfulRuns = null;
    
    /**
     * @var int|null $totalRuns The total number of runs for a workflow.
    */
    private ?int $totalRuns = null;
    
    /**
     * @var int|null $totalTasks The totalTasks property
    */
    private ?int $totalTasks = null;
    
    /**
     * @var int|null $totalUsers The totalUsers property
    */
    private ?int $totalUsers = null;
    
    /**
     * Instantiates a new runSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.identityGovernance.runSummary');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RunSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RunSummary {
        return new RunSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the failedRuns property value. The number of failed workflow runs.
     * @return int|null
    */
    public function getFailedRuns(): ?int {
        return $this->failedRuns;
    }

    /**
     * Gets the failedTasks property value. The number of failed tasks of a workflow.
     * @return int|null
    */
    public function getFailedTasks(): ?int {
        return $this->failedTasks;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'failedRuns' => fn(ParseNode $n) => $o->setFailedRuns($n->getIntegerValue()),
            'failedTasks' => fn(ParseNode $n) => $o->setFailedTasks($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'successfulRuns' => fn(ParseNode $n) => $o->setSuccessfulRuns($n->getIntegerValue()),
            'totalRuns' => fn(ParseNode $n) => $o->setTotalRuns($n->getIntegerValue()),
            'totalTasks' => fn(ParseNode $n) => $o->setTotalTasks($n->getIntegerValue()),
            'totalUsers' => fn(ParseNode $n) => $o->setTotalUsers($n->getIntegerValue()),
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
     * Gets the successfulRuns property value. The number of successful workflow runs.
     * @return int|null
    */
    public function getSuccessfulRuns(): ?int {
        return $this->successfulRuns;
    }

    /**
     * Gets the totalRuns property value. The total number of runs for a workflow.
     * @return int|null
    */
    public function getTotalRuns(): ?int {
        return $this->totalRuns;
    }

    /**
     * Gets the totalTasks property value. The totalTasks property
     * @return int|null
    */
    public function getTotalTasks(): ?int {
        return $this->totalTasks;
    }

    /**
     * Gets the totalUsers property value. The totalUsers property
     * @return int|null
    */
    public function getTotalUsers(): ?int {
        return $this->totalUsers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('failedRuns', $this->failedRuns);
        $writer->writeIntegerValue('failedTasks', $this->failedTasks);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('successfulRuns', $this->successfulRuns);
        $writer->writeIntegerValue('totalRuns', $this->totalRuns);
        $writer->writeIntegerValue('totalTasks', $this->totalTasks);
        $writer->writeIntegerValue('totalUsers', $this->totalUsers);
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
     * Sets the failedRuns property value. The number of failed workflow runs.
     *  @param int|null $value Value to set for the failedRuns property.
    */
    public function setFailedRuns(?int $value ): void {
        $this->failedRuns = $value;
    }

    /**
     * Sets the failedTasks property value. The number of failed tasks of a workflow.
     *  @param int|null $value Value to set for the failedTasks property.
    */
    public function setFailedTasks(?int $value ): void {
        $this->failedTasks = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the successfulRuns property value. The number of successful workflow runs.
     *  @param int|null $value Value to set for the successfulRuns property.
    */
    public function setSuccessfulRuns(?int $value ): void {
        $this->successfulRuns = $value;
    }

    /**
     * Sets the totalRuns property value. The total number of runs for a workflow.
     *  @param int|null $value Value to set for the totalRuns property.
    */
    public function setTotalRuns(?int $value ): void {
        $this->totalRuns = $value;
    }

    /**
     * Sets the totalTasks property value. The totalTasks property
     *  @param int|null $value Value to set for the totalTasks property.
    */
    public function setTotalTasks(?int $value ): void {
        $this->totalTasks = $value;
    }

    /**
     * Sets the totalUsers property value. The totalUsers property
     *  @param int|null $value Value to set for the totalUsers property.
    */
    public function setTotalUsers(?int $value ): void {
        $this->totalUsers = $value;
    }

}
