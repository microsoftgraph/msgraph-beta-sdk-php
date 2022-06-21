<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AttackSimulationTrainingUserCoverage implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AttackSimulationUser|null $attackSimulationUser User in an attack simulation and training campaign.
    */
    private ?AttackSimulationUser $attackSimulationUser = null;
    
    /**
     * @var array<UserTrainingStatusInfo>|null $userTrainings List of assigned trainings' and their statuses for the user.
    */
    private ?array $userTrainings = null;
    
    /**
     * Instantiates a new attackSimulationTrainingUserCoverage and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttackSimulationTrainingUserCoverage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttackSimulationTrainingUserCoverage {
        return new AttackSimulationTrainingUserCoverage();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the attackSimulationUser property value. User in an attack simulation and training campaign.
     * @return AttackSimulationUser|null
    */
    public function getAttackSimulationUser(): ?AttackSimulationUser {
        return $this->attackSimulationUser;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attackSimulationUser' => function (ParseNode $n) use ($o) { $o->setAttackSimulationUser($n->getObjectValue(array(AttackSimulationUser::class, 'createFromDiscriminatorValue'))); },
            'userTrainings' => function (ParseNode $n) use ($o) { $o->setUserTrainings($n->getCollectionOfObjectValues(array(UserTrainingStatusInfo::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the userTrainings property value. List of assigned trainings' and their statuses for the user.
     * @return array<UserTrainingStatusInfo>|null
    */
    public function getUserTrainings(): ?array {
        return $this->userTrainings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('attackSimulationUser', $this->attackSimulationUser);
        $writer->writeCollectionOfObjectValues('userTrainings', $this->userTrainings);
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
     * Sets the attackSimulationUser property value. User in an attack simulation and training campaign.
     *  @param AttackSimulationUser|null $value Value to set for the attackSimulationUser property.
    */
    public function setAttackSimulationUser(?AttackSimulationUser $value ): void {
        $this->attackSimulationUser = $value;
    }

    /**
     * Sets the userTrainings property value. List of assigned trainings' and their statuses for the user.
     *  @param array<UserTrainingStatusInfo>|null $value Value to set for the userTrainings property.
    */
    public function setUserTrainings(?array $value ): void {
        $this->userTrainings = $value;
    }

}
