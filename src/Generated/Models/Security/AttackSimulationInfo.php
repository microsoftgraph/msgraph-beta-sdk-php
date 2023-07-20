<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateInterval;
use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AttackSimulationInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new attackSimulationInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the attackSimDateTime property value. The date and time of the attack simulation.
     * @return DateTime|null
    */
    public function getAttackSimDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('attackSimDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attackSimDateTime'");
    }

    /**
     * Gets the attackSimDurationTime property value. The duration (in time) for the attack simulation.
     * @return DateInterval|null
    */
    public function getAttackSimDurationTime(): ?DateInterval {
        $val = $this->getBackingStore()->get('attackSimDurationTime');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attackSimDurationTime'");
    }

    /**
     * Gets the attackSimId property value. The activity ID for the attack simulation.
     * @return string|null
    */
    public function getAttackSimId(): ?string {
        $val = $this->getBackingStore()->get('attackSimId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attackSimId'");
    }

    /**
     * Gets the attackSimUserId property value. The unique identifier for the user who got the attack simulation email.
     * @return string|null
    */
    public function getAttackSimUserId(): ?string {
        $val = $this->getBackingStore()->get('attackSimUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attackSimUserId'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attackSimDateTime' => fn(ParseNode $n) => $o->setAttackSimDateTime($n->getDateTimeValue()),
            'attackSimDurationTime' => fn(ParseNode $n) => $o->setAttackSimDurationTime($n->getDateIntervalValue()),
            'attackSimId' => fn(ParseNode $n) => $o->setAttackSimId($n->getStringValue()),
            'attackSimUserId' => fn(ParseNode $n) => $o->setAttackSimUserId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('attackSimDateTime', $this->getAttackSimDateTime());
        $writer->writeDateIntervalValue('attackSimDurationTime', $this->getAttackSimDurationTime());
        $writer->writeStringValue('attackSimId', $this->getAttackSimId());
        $writer->writeStringValue('attackSimUserId', $this->getAttackSimUserId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the attackSimDateTime property value. The date and time of the attack simulation.
     * @param DateTime|null $value Value to set for the attackSimDateTime property.
    */
    public function setAttackSimDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('attackSimDateTime', $value);
    }

    /**
     * Sets the attackSimDurationTime property value. The duration (in time) for the attack simulation.
     * @param DateInterval|null $value Value to set for the attackSimDurationTime property.
    */
    public function setAttackSimDurationTime(?DateInterval $value): void {
        $this->getBackingStore()->set('attackSimDurationTime', $value);
    }

    /**
     * Sets the attackSimId property value. The activity ID for the attack simulation.
     * @param string|null $value Value to set for the attackSimId property.
    */
    public function setAttackSimId(?string $value): void {
        $this->getBackingStore()->set('attackSimId', $value);
    }

    /**
     * Sets the attackSimUserId property value. The unique identifier for the user who got the attack simulation email.
     * @param string|null $value Value to set for the attackSimUserId property.
    */
    public function setAttackSimUserId(?string $value): void {
        $this->getBackingStore()->set('attackSimUserId', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
