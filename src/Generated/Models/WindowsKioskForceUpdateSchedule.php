<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsKioskForceUpdateSchedule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $dayofMonth Day of month. Valid values 1 to 31
    */
    private ?int $dayofMonth = null;
    
    /**
     * @var DayOfWeek|null $dayofWeek Day of week. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday.
    */
    private ?DayOfWeek $dayofWeek = null;
    
    /**
     * @var Windows10AppsUpdateRecurrence|null $recurrence Recurrence schedule. Possible values are: none, daily, weekly, monthly.
    */
    private ?Windows10AppsUpdateRecurrence $recurrence = null;
    
    /**
     * @var bool|null $runImmediatelyIfAfterStartDateTime If true, runs the task immediately if StartDateTime is in the past, else, runs at the next recurrence.
    */
    private ?bool $runImmediatelyIfAfterStartDateTime = null;
    
    /**
     * @var DateTime|null $startDateTime The start time for the force restart.
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * Instantiates a new windowsKioskForceUpdateSchedule and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsKioskForceUpdateSchedule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsKioskForceUpdateSchedule {
        return new WindowsKioskForceUpdateSchedule();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the dayofMonth property value. Day of month. Valid values 1 to 31
     * @return int|null
    */
    public function getDayofMonth(): ?int {
        return $this->dayofMonth;
    }

    /**
     * Gets the dayofWeek property value. Day of week. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday.
     * @return DayOfWeek|null
    */
    public function getDayofWeek(): ?DayOfWeek {
        return $this->dayofWeek;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dayofMonth' => function (ParseNode $n) use ($o) { $o->setDayofMonth($n->getIntegerValue()); },
            'dayofWeek' => function (ParseNode $n) use ($o) { $o->setDayofWeek($n->getEnumValue(DayOfWeek::class)); },
            'recurrence' => function (ParseNode $n) use ($o) { $o->setRecurrence($n->getEnumValue(Windows10AppsUpdateRecurrence::class)); },
            'runImmediatelyIfAfterStartDateTime' => function (ParseNode $n) use ($o) { $o->setRunImmediatelyIfAfterStartDateTime($n->getBooleanValue()); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the recurrence property value. Recurrence schedule. Possible values are: none, daily, weekly, monthly.
     * @return Windows10AppsUpdateRecurrence|null
    */
    public function getRecurrence(): ?Windows10AppsUpdateRecurrence {
        return $this->recurrence;
    }

    /**
     * Gets the runImmediatelyIfAfterStartDateTime property value. If true, runs the task immediately if StartDateTime is in the past, else, runs at the next recurrence.
     * @return bool|null
    */
    public function getRunImmediatelyIfAfterStartDateTime(): ?bool {
        return $this->runImmediatelyIfAfterStartDateTime;
    }

    /**
     * Gets the startDateTime property value. The start time for the force restart.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('dayofMonth', $this->dayofMonth);
        $writer->writeEnumValue('dayofWeek', $this->dayofWeek);
        $writer->writeEnumValue('recurrence', $this->recurrence);
        $writer->writeBooleanValue('runImmediatelyIfAfterStartDateTime', $this->runImmediatelyIfAfterStartDateTime);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
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
     * Sets the dayofMonth property value. Day of month. Valid values 1 to 31
     *  @param int|null $value Value to set for the dayofMonth property.
    */
    public function setDayofMonth(?int $value ): void {
        $this->dayofMonth = $value;
    }

    /**
     * Sets the dayofWeek property value. Day of week. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday.
     *  @param DayOfWeek|null $value Value to set for the dayofWeek property.
    */
    public function setDayofWeek(?DayOfWeek $value ): void {
        $this->dayofWeek = $value;
    }

    /**
     * Sets the recurrence property value. Recurrence schedule. Possible values are: none, daily, weekly, monthly.
     *  @param Windows10AppsUpdateRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?Windows10AppsUpdateRecurrence $value ): void {
        $this->recurrence = $value;
    }

    /**
     * Sets the runImmediatelyIfAfterStartDateTime property value. If true, runs the task immediately if StartDateTime is in the past, else, runs at the next recurrence.
     *  @param bool|null $value Value to set for the runImmediatelyIfAfterStartDateTime property.
    */
    public function setRunImmediatelyIfAfterStartDateTime(?bool $value ): void {
        $this->runImmediatelyIfAfterStartDateTime = $value;
    }

    /**
     * Sets the startDateTime property value. The start time for the force restart.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

}
