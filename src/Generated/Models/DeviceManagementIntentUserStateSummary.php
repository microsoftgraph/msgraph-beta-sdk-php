<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementIntentUserStateSummary extends Entity implements Parsable 
{
    /**
     * @var int|null $conflictCount Number of users in conflict
    */
    private ?int $conflictCount = null;
    
    /**
     * @var int|null $errorCount Number of error users
    */
    private ?int $errorCount = null;
    
    /**
     * @var int|null $failedCount Number of failed users
    */
    private ?int $failedCount = null;
    
    /**
     * @var int|null $notApplicableCount Number of not applicable users
    */
    private ?int $notApplicableCount = null;
    
    /**
     * @var int|null $successCount Number of succeeded users
    */
    private ?int $successCount = null;
    
    /**
     * Instantiates a new deviceManagementIntentUserStateSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementIntentUserStateSummary');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementIntentUserStateSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementIntentUserStateSummary {
        return new DeviceManagementIntentUserStateSummary();
    }

    /**
     * Gets the conflictCount property value. Number of users in conflict
     * @return int|null
    */
    public function getConflictCount(): ?int {
        return $this->conflictCount;
    }

    /**
     * Gets the errorCount property value. Number of error users
     * @return int|null
    */
    public function getErrorCount(): ?int {
        return $this->errorCount;
    }

    /**
     * Gets the failedCount property value. Number of failed users
     * @return int|null
    */
    public function getFailedCount(): ?int {
        return $this->failedCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'conflictCount' => function (ParseNode $n) use ($o) { $o->setConflictCount($n->getIntegerValue()); },
            'errorCount' => function (ParseNode $n) use ($o) { $o->setErrorCount($n->getIntegerValue()); },
            'failedCount' => function (ParseNode $n) use ($o) { $o->setFailedCount($n->getIntegerValue()); },
            'notApplicableCount' => function (ParseNode $n) use ($o) { $o->setNotApplicableCount($n->getIntegerValue()); },
            'successCount' => function (ParseNode $n) use ($o) { $o->setSuccessCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the notApplicableCount property value. Number of not applicable users
     * @return int|null
    */
    public function getNotApplicableCount(): ?int {
        return $this->notApplicableCount;
    }

    /**
     * Gets the successCount property value. Number of succeeded users
     * @return int|null
    */
    public function getSuccessCount(): ?int {
        return $this->successCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('conflictCount', $this->conflictCount);
        $writer->writeIntegerValue('errorCount', $this->errorCount);
        $writer->writeIntegerValue('failedCount', $this->failedCount);
        $writer->writeIntegerValue('notApplicableCount', $this->notApplicableCount);
        $writer->writeIntegerValue('successCount', $this->successCount);
    }

    /**
     * Sets the conflictCount property value. Number of users in conflict
     *  @param int|null $value Value to set for the conflictCount property.
    */
    public function setConflictCount(?int $value ): void {
        $this->conflictCount = $value;
    }

    /**
     * Sets the errorCount property value. Number of error users
     *  @param int|null $value Value to set for the errorCount property.
    */
    public function setErrorCount(?int $value ): void {
        $this->errorCount = $value;
    }

    /**
     * Sets the failedCount property value. Number of failed users
     *  @param int|null $value Value to set for the failedCount property.
    */
    public function setFailedCount(?int $value ): void {
        $this->failedCount = $value;
    }

    /**
     * Sets the notApplicableCount property value. Number of not applicable users
     *  @param int|null $value Value to set for the notApplicableCount property.
    */
    public function setNotApplicableCount(?int $value ): void {
        $this->notApplicableCount = $value;
    }

    /**
     * Sets the successCount property value. Number of succeeded users
     *  @param int|null $value Value to set for the successCount property.
    */
    public function setSuccessCount(?int $value ): void {
        $this->successCount = $value;
    }

}
