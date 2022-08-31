<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TaskReportSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $failedTasks The failedTasks property
    */
    private ?int $failedTasks = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $successfulTasks The successfulTasks property
    */
    private ?int $successfulTasks = null;
    
    /**
     * @var int|null $totalTasks The totalTasks property
    */
    private ?int $totalTasks = null;
    
    /**
     * @var int|null $unprocessedTasks The unprocessedTasks property
    */
    private ?int $unprocessedTasks = null;
    
    /**
     * Instantiates a new taskReportSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.identityGovernance.taskReportSummary');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TaskReportSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TaskReportSummary {
        return new TaskReportSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the failedTasks property value. The failedTasks property
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
            'failedTasks' => function (ParseNode $n) use ($o) { $o->setFailedTasks($n->getIntegerValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'successfulTasks' => function (ParseNode $n) use ($o) { $o->setSuccessfulTasks($n->getIntegerValue()); },
            'totalTasks' => function (ParseNode $n) use ($o) { $o->setTotalTasks($n->getIntegerValue()); },
            'unprocessedTasks' => function (ParseNode $n) use ($o) { $o->setUnprocessedTasks($n->getIntegerValue()); },
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
     * Gets the successfulTasks property value. The successfulTasks property
     * @return int|null
    */
    public function getSuccessfulTasks(): ?int {
        return $this->successfulTasks;
    }

    /**
     * Gets the totalTasks property value. The totalTasks property
     * @return int|null
    */
    public function getTotalTasks(): ?int {
        return $this->totalTasks;
    }

    /**
     * Gets the unprocessedTasks property value. The unprocessedTasks property
     * @return int|null
    */
    public function getUnprocessedTasks(): ?int {
        return $this->unprocessedTasks;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('failedTasks', $this->failedTasks);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('successfulTasks', $this->successfulTasks);
        $writer->writeIntegerValue('totalTasks', $this->totalTasks);
        $writer->writeIntegerValue('unprocessedTasks', $this->unprocessedTasks);
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
     * Sets the failedTasks property value. The failedTasks property
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
     * Sets the successfulTasks property value. The successfulTasks property
     *  @param int|null $value Value to set for the successfulTasks property.
    */
    public function setSuccessfulTasks(?int $value ): void {
        $this->successfulTasks = $value;
    }

    /**
     * Sets the totalTasks property value. The totalTasks property
     *  @param int|null $value Value to set for the totalTasks property.
    */
    public function setTotalTasks(?int $value ): void {
        $this->totalTasks = $value;
    }

    /**
     * Sets the unprocessedTasks property value. The unprocessedTasks property
     *  @param int|null $value Value to set for the unprocessedTasks property.
    */
    public function setUnprocessedTasks(?int $value ): void {
        $this->unprocessedTasks = $value;
    }

}
