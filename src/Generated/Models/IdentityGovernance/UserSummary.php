<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $failedTasks The number of failed tasks for users in a user summary.
    */
    private ?int $failedTasks = null;
    
    /**
     * @var int|null $failedUsers The number of failed users in a user summary.
    */
    private ?int $failedUsers = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $successfulUsers The number of successful users in a user summary.
    */
    private ?int $successfulUsers = null;
    
    /**
     * @var int|null $totalTasks The total tasks of users in a user summary.
    */
    private ?int $totalTasks = null;
    
    /**
     * @var int|null $totalUsers The total number of users in a user summary
    */
    private ?int $totalUsers = null;
    
    /**
     * Instantiates a new userSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.identityGovernance.userSummary');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserSummary {
        return new UserSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the failedTasks property value. The number of failed tasks for users in a user summary.
     * @return int|null
    */
    public function getFailedTasks(): ?int {
        return $this->failedTasks;
    }

    /**
     * Gets the failedUsers property value. The number of failed users in a user summary.
     * @return int|null
    */
    public function getFailedUsers(): ?int {
        return $this->failedUsers;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'failedTasks' => function (ParseNode $n) use ($o) { $o->setFailedTasks($n->getIntegerValue()); },
            'failedUsers' => function (ParseNode $n) use ($o) { $o->setFailedUsers($n->getIntegerValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'successfulUsers' => function (ParseNode $n) use ($o) { $o->setSuccessfulUsers($n->getIntegerValue()); },
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
     * Gets the successfulUsers property value. The number of successful users in a user summary.
     * @return int|null
    */
    public function getSuccessfulUsers(): ?int {
        return $this->successfulUsers;
    }

    /**
     * Gets the totalTasks property value. The total tasks of users in a user summary.
     * @return int|null
    */
    public function getTotalTasks(): ?int {
        return $this->totalTasks;
    }

    /**
     * Gets the totalUsers property value. The total number of users in a user summary
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
        $writer->writeIntegerValue('failedTasks', $this->failedTasks);
        $writer->writeIntegerValue('failedUsers', $this->failedUsers);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('successfulUsers', $this->successfulUsers);
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
     * Sets the failedTasks property value. The number of failed tasks for users in a user summary.
     *  @param int|null $value Value to set for the failedTasks property.
    */
    public function setFailedTasks(?int $value ): void {
        $this->failedTasks = $value;
    }

    /**
     * Sets the failedUsers property value. The number of failed users in a user summary.
     *  @param int|null $value Value to set for the failedUsers property.
    */
    public function setFailedUsers(?int $value ): void {
        $this->failedUsers = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the successfulUsers property value. The number of successful users in a user summary.
     *  @param int|null $value Value to set for the successfulUsers property.
    */
    public function setSuccessfulUsers(?int $value ): void {
        $this->successfulUsers = $value;
    }

    /**
     * Sets the totalTasks property value. The total tasks of users in a user summary.
     *  @param int|null $value Value to set for the totalTasks property.
    */
    public function setTotalTasks(?int $value ): void {
        $this->totalTasks = $value;
    }

    /**
     * Sets the totalUsers property value. The total number of users in a user summary
     *  @param int|null $value Value to set for the totalUsers property.
    */
    public function setTotalUsers(?int $value ): void {
        $this->totalUsers = $value;
    }

}
