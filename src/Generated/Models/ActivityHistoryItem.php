<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ActivityHistoryItem extends Entity implements Parsable 
{
    /**
     * @var int|null $activeDurationSeconds The activeDurationSeconds property
    */
    private ?int $activeDurationSeconds = null;
    
    /**
     * @var UserActivity|null $activity The activity property
    */
    private ?UserActivity $activity = null;
    
    /**
     * @var DateTime|null $createdDateTime The createdDateTime property
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var DateTime|null $expirationDateTime The expirationDateTime property
    */
    private ?DateTime $expirationDateTime = null;
    
    /**
     * @var DateTime|null $lastActiveDateTime The lastActiveDateTime property
    */
    private ?DateTime $lastActiveDateTime = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var DateTime|null $startedDateTime The startedDateTime property
    */
    private ?DateTime $startedDateTime = null;
    
    /**
     * @var Status|null $status The status property
    */
    private ?Status $status = null;
    
    /**
     * @var string|null $userTimezone The userTimezone property
    */
    private ?string $userTimezone = null;
    
    /**
     * Instantiates a new activityHistoryItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.activityHistoryItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ActivityHistoryItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ActivityHistoryItem {
        return new ActivityHistoryItem();
    }

    /**
     * Gets the activeDurationSeconds property value. The activeDurationSeconds property
     * @return int|null
    */
    public function getActiveDurationSeconds(): ?int {
        return $this->activeDurationSeconds;
    }

    /**
     * Gets the activity property value. The activity property
     * @return UserActivity|null
    */
    public function getActivity(): ?UserActivity {
        return $this->activity;
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the expirationDateTime property value. The expirationDateTime property
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeDurationSeconds' => function (ParseNode $n) use ($o) { $o->setActiveDurationSeconds($n->getIntegerValue()); },
            'activity' => function (ParseNode $n) use ($o) { $o->setActivity($n->getObjectValue(array(UserActivity::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'expirationDateTime' => function (ParseNode $n) use ($o) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'lastActiveDateTime' => function (ParseNode $n) use ($o) { $o->setLastActiveDateTime($n->getDateTimeValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'startedDateTime' => function (ParseNode $n) use ($o) { $o->setStartedDateTime($n->getDateTimeValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(Status::class)); },
            'userTimezone' => function (ParseNode $n) use ($o) { $o->setUserTimezone($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastActiveDateTime property value. The lastActiveDateTime property
     * @return DateTime|null
    */
    public function getLastActiveDateTime(): ?DateTime {
        return $this->lastActiveDateTime;
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the startedDateTime property value. The startedDateTime property
     * @return DateTime|null
    */
    public function getStartedDateTime(): ?DateTime {
        return $this->startedDateTime;
    }

    /**
     * Gets the status property value. The status property
     * @return Status|null
    */
    public function getStatus(): ?Status {
        return $this->status;
    }

    /**
     * Gets the userTimezone property value. The userTimezone property
     * @return string|null
    */
    public function getUserTimezone(): ?string {
        return $this->userTimezone;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('activeDurationSeconds', $this->activeDurationSeconds);
        $writer->writeObjectValue('activity', $this->activity);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeDateTimeValue('lastActiveDateTime', $this->lastActiveDateTime);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeDateTimeValue('startedDateTime', $this->startedDateTime);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('userTimezone', $this->userTimezone);
    }

    /**
     * Sets the activeDurationSeconds property value. The activeDurationSeconds property
     *  @param int|null $value Value to set for the activeDurationSeconds property.
    */
    public function setActiveDurationSeconds(?int $value ): void {
        $this->activeDurationSeconds = $value;
    }

    /**
     * Sets the activity property value. The activity property
     *  @param UserActivity|null $value Value to set for the activity property.
    */
    public function setActivity(?UserActivity $value ): void {
        $this->activity = $value;
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the expirationDateTime property value. The expirationDateTime property
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the lastActiveDateTime property value. The lastActiveDateTime property
     *  @param DateTime|null $value Value to set for the lastActiveDateTime property.
    */
    public function setLastActiveDateTime(?DateTime $value ): void {
        $this->lastActiveDateTime = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the startedDateTime property value. The startedDateTime property
     *  @param DateTime|null $value Value to set for the startedDateTime property.
    */
    public function setStartedDateTime(?DateTime $value ): void {
        $this->startedDateTime = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param Status|null $value Value to set for the status property.
    */
    public function setStatus(?Status $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the userTimezone property value. The userTimezone property
     *  @param string|null $value Value to set for the userTimezone property.
    */
    public function setUserTimezone(?string $value ): void {
        $this->userTimezone = $value;
    }

}
