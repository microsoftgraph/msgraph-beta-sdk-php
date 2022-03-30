<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsBatteryHealthCapacityDetails extends Entity 
{
    /** @var int|null $activeDevices Number of active devices within the tenant. Valid values -2147483648 to 2147483647 */
    private ?int $activeDevices = null;
    
    /** @var int|null $batteryCapacityFair Number of devices whose battery maximum capacity is greater than 50% but lesser than 80%. Valid values -2147483648 to 2147483647 */
    private ?int $batteryCapacityFair = null;
    
    /** @var int|null $batteryCapacityGood Number of devices whose battery maximum capacity is greater than 80%. Valid values -2147483648 to 2147483647 */
    private ?int $batteryCapacityGood = null;
    
    /** @var int|null $batteryCapacityPoor Number of devices whose battery maximum capacity is lesser than 50%. Valid values -2147483648 to 2147483647 */
    private ?int $batteryCapacityPoor = null;
    
    /** @var DateTime|null $lastRefreshedDateTime Recorded date time of this capacity details instance. */
    private ?DateTime $lastRefreshedDateTime = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsBatteryHealthCapacityDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsBatteryHealthCapacityDetails
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsBatteryHealthCapacityDetails {
        return new UserExperienceAnalyticsBatteryHealthCapacityDetails();
    }

    /**
     * Gets the activeDevices property value. Number of active devices within the tenant. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getActiveDevices(): ?int {
        return $this->activeDevices;
    }

    /**
     * Gets the batteryCapacityFair property value. Number of devices whose battery maximum capacity is greater than 50% but lesser than 80%. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getBatteryCapacityFair(): ?int {
        return $this->batteryCapacityFair;
    }

    /**
     * Gets the batteryCapacityGood property value. Number of devices whose battery maximum capacity is greater than 80%. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getBatteryCapacityGood(): ?int {
        return $this->batteryCapacityGood;
    }

    /**
     * Gets the batteryCapacityPoor property value. Number of devices whose battery maximum capacity is lesser than 50%. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getBatteryCapacityPoor(): ?int {
        return $this->batteryCapacityPoor;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'activeDevices' => function (self $o, ParseNode $n) { $o->setActiveDevices($n->getIntegerValue()); },
            'batteryCapacityFair' => function (self $o, ParseNode $n) { $o->setBatteryCapacityFair($n->getIntegerValue()); },
            'batteryCapacityGood' => function (self $o, ParseNode $n) { $o->setBatteryCapacityGood($n->getIntegerValue()); },
            'batteryCapacityPoor' => function (self $o, ParseNode $n) { $o->setBatteryCapacityPoor($n->getIntegerValue()); },
            'lastRefreshedDateTime' => function (self $o, ParseNode $n) { $o->setLastRefreshedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the lastRefreshedDateTime property value. Recorded date time of this capacity details instance.
     * @return DateTime|null
    */
    public function getLastRefreshedDateTime(): ?DateTime {
        return $this->lastRefreshedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('activeDevices', $this->activeDevices);
        $writer->writeIntegerValue('batteryCapacityFair', $this->batteryCapacityFair);
        $writer->writeIntegerValue('batteryCapacityGood', $this->batteryCapacityGood);
        $writer->writeIntegerValue('batteryCapacityPoor', $this->batteryCapacityPoor);
        $writer->writeDateTimeValue('lastRefreshedDateTime', $this->lastRefreshedDateTime);
    }

    /**
     * Sets the activeDevices property value. Number of active devices within the tenant. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the activeDevices property.
    */
    public function setActiveDevices(?int $value ): void {
        $this->activeDevices = $value;
    }

    /**
     * Sets the batteryCapacityFair property value. Number of devices whose battery maximum capacity is greater than 50% but lesser than 80%. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the batteryCapacityFair property.
    */
    public function setBatteryCapacityFair(?int $value ): void {
        $this->batteryCapacityFair = $value;
    }

    /**
     * Sets the batteryCapacityGood property value. Number of devices whose battery maximum capacity is greater than 80%. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the batteryCapacityGood property.
    */
    public function setBatteryCapacityGood(?int $value ): void {
        $this->batteryCapacityGood = $value;
    }

    /**
     * Sets the batteryCapacityPoor property value. Number of devices whose battery maximum capacity is lesser than 50%. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the batteryCapacityPoor property.
    */
    public function setBatteryCapacityPoor(?int $value ): void {
        $this->batteryCapacityPoor = $value;
    }

    /**
     * Sets the lastRefreshedDateTime property value. Recorded date time of this capacity details instance.
     *  @param DateTime|null $value Value to set for the lastRefreshedDateTime property.
    */
    public function setLastRefreshedDateTime(?DateTime $value ): void {
        $this->lastRefreshedDateTime = $value;
    }

}
