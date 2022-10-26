<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SynchronizationSchedule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $expiration Date and time when this job will expire. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $expiration = null;
    
    /**
     * @var DateInterval|null $interval The interval between synchronization iterations. The value is represented in ISO 8601 format for durations. For example, PT1M represents a period of 1 month.
    */
    private ?DateInterval $interval = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var SynchronizationScheduleState|null $state The state property
    */
    private ?SynchronizationScheduleState $state = null;
    
    /**
     * Instantiates a new synchronizationSchedule and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.synchronizationSchedule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationSchedule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationSchedule {
        return new SynchronizationSchedule();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the expiration property value. Date and time when this job will expire. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getExpiration(): ?DateTime {
        return $this->expiration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expiration' => fn(ParseNode $n) => $o->setExpiration($n->getDateTimeValue()),
            'interval' => fn(ParseNode $n) => $o->setInterval($n->getDateIntervalValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(SynchronizationScheduleState::class)),
        ];
    }

    /**
     * Gets the interval property value. The interval between synchronization iterations. The value is represented in ISO 8601 format for durations. For example, PT1M represents a period of 1 month.
     * @return DateInterval|null
    */
    public function getInterval(): ?DateInterval {
        return $this->interval;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the state property value. The state property
     * @return SynchronizationScheduleState|null
    */
    public function getState(): ?SynchronizationScheduleState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('expiration', $this->expiration);
        $writer->writeDateIntervalValue('interval', $this->interval);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('state', $this->state);
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
     * Sets the expiration property value. Date and time when this job will expire. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the expiration property.
    */
    public function setExpiration(?DateTime $value ): void {
        $this->expiration = $value;
    }

    /**
     * Sets the interval property value. The interval between synchronization iterations. The value is represented in ISO 8601 format for durations. For example, PT1M represents a period of 1 month.
     *  @param DateInterval|null $value Value to set for the interval property.
    */
    public function setInterval(?DateInterval $value ): void {
        $this->interval = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the state property value. The state property
     *  @param SynchronizationScheduleState|null $value Value to set for the state property.
    */
    public function setState(?SynchronizationScheduleState $value ): void {
        $this->state = $value;
    }

}
