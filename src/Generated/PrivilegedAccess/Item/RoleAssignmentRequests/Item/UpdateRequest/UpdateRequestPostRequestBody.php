<?php

namespace Microsoft\Graph\Beta\Generated\PrivilegedAccess\Item\RoleAssignmentRequests\Item\UpdateRequest;

use Microsoft\Graph\Beta\Generated\Models\GovernanceSchedule;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateRequestPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $assignmentState The assignmentState property
    */
    private ?string $assignmentState = null;
    
    /**
     * @var string|null $decision The decision property
    */
    private ?string $decision = null;
    
    /**
     * @var string|null $reason The reason property
    */
    private ?string $reason = null;
    
    /**
     * @var GovernanceSchedule|null $schedule The schedule property
    */
    private ?GovernanceSchedule $schedule = null;
    
    /**
     * Instantiates a new updateRequestPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateRequestPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateRequestPostRequestBody {
        return new UpdateRequestPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignmentState property value. The assignmentState property
     * @return string|null
    */
    public function getAssignmentState(): ?string {
        return $this->assignmentState;
    }

    /**
     * Gets the decision property value. The decision property
     * @return string|null
    */
    public function getDecision(): ?string {
        return $this->decision;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignmentState' => function (ParseNode $n) use ($o) { $o->setAssignmentState($n->getStringValue()); },
            'decision' => function (ParseNode $n) use ($o) { $o->setDecision($n->getStringValue()); },
            'reason' => function (ParseNode $n) use ($o) { $o->setReason($n->getStringValue()); },
            'schedule' => function (ParseNode $n) use ($o) { $o->setSchedule($n->getObjectValue(array(GovernanceSchedule::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the reason property value. The reason property
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Gets the schedule property value. The schedule property
     * @return GovernanceSchedule|null
    */
    public function getSchedule(): ?GovernanceSchedule {
        return $this->schedule;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('assignmentState', $this->assignmentState);
        $writer->writeStringValue('decision', $this->decision);
        $writer->writeStringValue('reason', $this->reason);
        $writer->writeObjectValue('schedule', $this->schedule);
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
     * Sets the assignmentState property value. The assignmentState property
     *  @param string|null $value Value to set for the assignmentState property.
    */
    public function setAssignmentState(?string $value ): void {
        $this->assignmentState = $value;
    }

    /**
     * Sets the decision property value. The decision property
     *  @param string|null $value Value to set for the decision property.
    */
    public function setDecision(?string $value ): void {
        $this->decision = $value;
    }

    /**
     * Sets the reason property value. The reason property
     *  @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value ): void {
        $this->reason = $value;
    }

    /**
     * Sets the schedule property value. The schedule property
     *  @param GovernanceSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?GovernanceSchedule $value ): void {
        $this->schedule = $value;
    }

}
