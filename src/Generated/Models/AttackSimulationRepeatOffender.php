<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AttackSimulationRepeatOffender implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var AttackSimulationUser|null $attackSimulationUser User in an attack simulation and training campaign. */
    private ?AttackSimulationUser $attackSimulationUser = null;
    
    /** @var int|null $repeatOffenceCount Number of repeat offences of the user in attack simulation and training campaigns. */
    private ?int $repeatOffenceCount = null;
    
    /**
     * Instantiates a new attackSimulationRepeatOffender and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttackSimulationRepeatOffender
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AttackSimulationRepeatOffender {
        return new AttackSimulationRepeatOffender();
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
        return  [
            'attackSimulationUser' => function (self $o, ParseNode $n) { $o->setAttackSimulationUser($n->getObjectValue(AttackSimulationUser::class)); },
            'repeatOffenceCount' => function (self $o, ParseNode $n) { $o->setRepeatOffenceCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the repeatOffenceCount property value. Number of repeat offences of the user in attack simulation and training campaigns.
     * @return int|null
    */
    public function getRepeatOffenceCount(): ?int {
        return $this->repeatOffenceCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('attackSimulationUser', $this->attackSimulationUser);
        $writer->writeIntegerValue('repeatOffenceCount', $this->repeatOffenceCount);
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
     * Sets the repeatOffenceCount property value. Number of repeat offences of the user in attack simulation and training campaigns.
     *  @param int|null $value Value to set for the repeatOffenceCount property.
    */
    public function setRepeatOffenceCount(?int $value ): void {
        $this->repeatOffenceCount = $value;
    }

}
