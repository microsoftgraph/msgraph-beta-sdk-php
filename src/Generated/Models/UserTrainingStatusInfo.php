<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserTrainingStatusInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $assignedDateTime Date and time of assignment of the training to the user.
    */
    private ?DateTime $assignedDateTime = null;
    
    /**
     * @var DateTime|null $completionDateTime Date and time of completion of the training by the user.
    */
    private ?DateTime $completionDateTime = null;
    
    /**
     * @var string|null $displayName Display name of the assigned training.
    */
    private ?string $displayName = null;
    
    /**
     * @var TrainingStatus|null $trainingStatus Status of the training assigned to the user. Possible values are: unknown, assigned, inProgress, completed, overdue, unknownFutureValue.
    */
    private ?TrainingStatus $trainingStatus = null;
    
    /**
     * Instantiates a new userTrainingStatusInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserTrainingStatusInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserTrainingStatusInfo {
        return new UserTrainingStatusInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignedDateTime property value. Date and time of assignment of the training to the user.
     * @return DateTime|null
    */
    public function getAssignedDateTime(): ?DateTime {
        return $this->assignedDateTime;
    }

    /**
     * Gets the completionDateTime property value. Date and time of completion of the training by the user.
     * @return DateTime|null
    */
    public function getCompletionDateTime(): ?DateTime {
        return $this->completionDateTime;
    }

    /**
     * Gets the displayName property value. Display name of the assigned training.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignedDateTime' => function (ParseNode $n) use ($o) { $o->setAssignedDateTime($n->getDateTimeValue()); },
            'completionDateTime' => function (ParseNode $n) use ($o) { $o->setCompletionDateTime($n->getDateTimeValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'trainingStatus' => function (ParseNode $n) use ($o) { $o->setTrainingStatus($n->getEnumValue(TrainingStatus::class)); },
        ];
    }

    /**
     * Gets the trainingStatus property value. Status of the training assigned to the user. Possible values are: unknown, assigned, inProgress, completed, overdue, unknownFutureValue.
     * @return TrainingStatus|null
    */
    public function getTrainingStatus(): ?TrainingStatus {
        return $this->trainingStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('assignedDateTime', $this->assignedDateTime);
        $writer->writeDateTimeValue('completionDateTime', $this->completionDateTime);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('trainingStatus', $this->trainingStatus);
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
     * Sets the assignedDateTime property value. Date and time of assignment of the training to the user.
     *  @param DateTime|null $value Value to set for the assignedDateTime property.
    */
    public function setAssignedDateTime(?DateTime $value ): void {
        $this->assignedDateTime = $value;
    }

    /**
     * Sets the completionDateTime property value. Date and time of completion of the training by the user.
     *  @param DateTime|null $value Value to set for the completionDateTime property.
    */
    public function setCompletionDateTime(?DateTime $value ): void {
        $this->completionDateTime = $value;
    }

    /**
     * Sets the displayName property value. Display name of the assigned training.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the trainingStatus property value. Status of the training assigned to the user. Possible values are: unknown, assigned, inProgress, completed, overdue, unknownFutureValue.
     *  @param TrainingStatus|null $value Value to set for the trainingStatus property.
    */
    public function setTrainingStatus(?TrainingStatus $value ): void {
        $this->trainingStatus = $value;
    }

}
