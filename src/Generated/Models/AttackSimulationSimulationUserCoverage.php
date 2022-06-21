<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AttackSimulationSimulationUserCoverage implements AdditionalDataHolder, Parsable 
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
     * @var int|null $clickCount Number of link clicks in the received payloads by the user in attack simulation and training campaigns.
    */
    private ?int $clickCount = null;
    
    /**
     * @var int|null $compromisedCount Number of compromising actions by the user in attack simulation and training campaigns.
    */
    private ?int $compromisedCount = null;
    
    /**
     * @var DateTime|null $latestSimulationDateTime Date and time of latest attack simulation and training campaign that the user was included in.
    */
    private ?DateTime $latestSimulationDateTime = null;
    
    /**
     * @var int|null $simulationCount Number of attack simulation and training campaigns that the user was included in.
    */
    private ?int $simulationCount = null;
    
    /**
     * Instantiates a new attackSimulationSimulationUserCoverage and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttackSimulationSimulationUserCoverage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttackSimulationSimulationUserCoverage {
        return new AttackSimulationSimulationUserCoverage();
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
     * Gets the clickCount property value. Number of link clicks in the received payloads by the user in attack simulation and training campaigns.
     * @return int|null
    */
    public function getClickCount(): ?int {
        return $this->clickCount;
    }

    /**
     * Gets the compromisedCount property value. Number of compromising actions by the user in attack simulation and training campaigns.
     * @return int|null
    */
    public function getCompromisedCount(): ?int {
        return $this->compromisedCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attackSimulationUser' => function (ParseNode $n) use ($o) { $o->setAttackSimulationUser($n->getObjectValue(array(AttackSimulationUser::class, 'createFromDiscriminatorValue'))); },
            'clickCount' => function (ParseNode $n) use ($o) { $o->setClickCount($n->getIntegerValue()); },
            'compromisedCount' => function (ParseNode $n) use ($o) { $o->setCompromisedCount($n->getIntegerValue()); },
            'latestSimulationDateTime' => function (ParseNode $n) use ($o) { $o->setLatestSimulationDateTime($n->getDateTimeValue()); },
            'simulationCount' => function (ParseNode $n) use ($o) { $o->setSimulationCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the latestSimulationDateTime property value. Date and time of latest attack simulation and training campaign that the user was included in.
     * @return DateTime|null
    */
    public function getLatestSimulationDateTime(): ?DateTime {
        return $this->latestSimulationDateTime;
    }

    /**
     * Gets the simulationCount property value. Number of attack simulation and training campaigns that the user was included in.
     * @return int|null
    */
    public function getSimulationCount(): ?int {
        return $this->simulationCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('attackSimulationUser', $this->attackSimulationUser);
        $writer->writeIntegerValue('clickCount', $this->clickCount);
        $writer->writeIntegerValue('compromisedCount', $this->compromisedCount);
        $writer->writeDateTimeValue('latestSimulationDateTime', $this->latestSimulationDateTime);
        $writer->writeIntegerValue('simulationCount', $this->simulationCount);
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
     * Sets the clickCount property value. Number of link clicks in the received payloads by the user in attack simulation and training campaigns.
     *  @param int|null $value Value to set for the clickCount property.
    */
    public function setClickCount(?int $value ): void {
        $this->clickCount = $value;
    }

    /**
     * Sets the compromisedCount property value. Number of compromising actions by the user in attack simulation and training campaigns.
     *  @param int|null $value Value to set for the compromisedCount property.
    */
    public function setCompromisedCount(?int $value ): void {
        $this->compromisedCount = $value;
    }

    /**
     * Sets the latestSimulationDateTime property value. Date and time of latest attack simulation and training campaign that the user was included in.
     *  @param DateTime|null $value Value to set for the latestSimulationDateTime property.
    */
    public function setLatestSimulationDateTime(?DateTime $value ): void {
        $this->latestSimulationDateTime = $value;
    }

    /**
     * Sets the simulationCount property value. Number of attack simulation and training campaigns that the user was included in.
     *  @param int|null $value Value to set for the simulationCount property.
    */
    public function setSimulationCount(?int $value ): void {
        $this->simulationCount = $value;
    }

}
