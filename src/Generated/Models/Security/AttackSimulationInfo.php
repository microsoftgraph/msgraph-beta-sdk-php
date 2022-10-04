<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateInterval;
use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AttackSimulationInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $attackSimDateTime The date and time of the attack simulation.
    */
    private ?DateTime $attackSimDateTime = null;
    
    /**
     * @var DateInterval|null $attackSimDurationTime The duration (in time) for the attack simulation.
    */
    private ?DateInterval $attackSimDurationTime = null;
    
    /**
     * @var string|null $attackSimId The activity ID for the attack simulation.
    */
    private ?string $attackSimId = null;
    
    /**
     * @var string|null $attackSimUserId The unique identifier for the user who got the attack simulation email.
    */
    private ?string $attackSimUserId = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new attackSimulationInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.security.attackSimulationInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttackSimulationInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttackSimulationInfo {
        return new AttackSimulationInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the attackSimDateTime property value. The date and time of the attack simulation.
     * @return DateTime|null
    */
    public function getAttackSimDateTime(): ?DateTime {
        return $this->attackSimDateTime;
    }

    /**
     * Gets the attackSimDurationTime property value. The duration (in time) for the attack simulation.
     * @return DateInterval|null
    */
    public function getAttackSimDurationTime(): ?DateInterval {
        return $this->attackSimDurationTime;
    }

    /**
     * Gets the attackSimId property value. The activity ID for the attack simulation.
     * @return string|null
    */
    public function getAttackSimId(): ?string {
        return $this->attackSimId;
    }

    /**
     * Gets the attackSimUserId property value. The unique identifier for the user who got the attack simulation email.
     * @return string|null
    */
    public function getAttackSimUserId(): ?string {
        return $this->attackSimUserId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attackSimDateTime' => function (ParseNode $n) use ($o) { $o->setAttackSimDateTime($n->getDateTimeValue()); },
            'attackSimDurationTime' => function (ParseNode $n) use ($o) { $o->setAttackSimDurationTime($n->getDateIntervalValue()); },
            'attackSimId' => function (ParseNode $n) use ($o) { $o->setAttackSimId($n->getStringValue()); },
            'attackSimUserId' => function (ParseNode $n) use ($o) { $o->setAttackSimUserId($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('attackSimDateTime', $this->attackSimDateTime);
        $writer->writeDateIntervalValue('attackSimDurationTime', $this->attackSimDurationTime);
        $writer->writeStringValue('attackSimId', $this->attackSimId);
        $writer->writeStringValue('attackSimUserId', $this->attackSimUserId);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the attackSimDateTime property value. The date and time of the attack simulation.
     *  @param DateTime|null $value Value to set for the attackSimDateTime property.
    */
    public function setAttackSimDateTime(?DateTime $value ): void {
        $this->attackSimDateTime = $value;
    }

    /**
     * Sets the attackSimDurationTime property value. The duration (in time) for the attack simulation.
     *  @param DateInterval|null $value Value to set for the attackSimDurationTime property.
    */
    public function setAttackSimDurationTime(?DateInterval $value ): void {
        $this->attackSimDurationTime = $value;
    }

    /**
     * Sets the attackSimId property value. The activity ID for the attack simulation.
     *  @param string|null $value Value to set for the attackSimId property.
    */
    public function setAttackSimId(?string $value ): void {
        $this->attackSimId = $value;
    }

    /**
     * Sets the attackSimUserId property value. The unique identifier for the user who got the attack simulation email.
     *  @param string|null $value Value to set for the attackSimUserId property.
    */
    public function setAttackSimUserId(?string $value ): void {
        $this->attackSimUserId = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
