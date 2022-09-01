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
     * @var int|null $failedRuns The failedRuns property
    */
    private ?int $failedRuns = null;
    
    /**
     * @var int|null $failedTasks The failedTasks property
    */
    private ?int $failedTasks = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $successfulRuns The successfulRuns property
    */
    private ?int $successfulRuns = null;
    
    /**
     * @var int|null $totalRuns The totalRuns property
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
     * Gets the failedRuns property value. The failedRuns property
     * @return int|null
    */
    public function getFailedRuns(): ?int {
        return $this->failedRuns;
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
            'failedRuns' => function (ParseNode $n) use ($o) { $o->setFailedRuns($n->getIntegerValue()); },
            'failedTasks' => function (ParseNode $n) use ($o) { $o->setFailedTasks($n->getIntegerValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'successfulRuns' => function (ParseNode $n) use ($o) { $o->setSuccessfulRuns($n->getIntegerValue()); },
            'totalRuns' => function (ParseNode $n) use ($o) { $o->setTotalRuns($n->getIntegerValue()); },
            'totalTasks' => function (ParseNode $n) use ($o) { $o->setTotalTasks($n->getIntegerValue()); },
            'totalUsers' => function (ParseNode $n) use ($o) { $o->setTotalUsers($n->getIntegerValue()); },
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
     * Gets the successfulRuns property value. The successfulRuns property
     * @return int|null
    */
    public function getSuccessfulRuns(): ?int {
        return $this->successfulRuns;
    }

    /**
     * Gets the totalRuns property value. The totalRuns property
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
     * Sets the failedRuns property value. The failedRuns property
     *  @param int|null $value Value to set for the failedRuns property.
    */
    public function setFailedRuns(?int $value ): void {
        $this->failedRuns = $value;
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
     * Sets the successfulRuns property value. The successfulRuns property
     *  @param int|null $value Value to set for the successfulRuns property.
    */
    public function setSuccessfulRuns(?int $value ): void {
        $this->successfulRuns = $value;
    }

    /**
     * Sets the totalRuns property value. The totalRuns property
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
