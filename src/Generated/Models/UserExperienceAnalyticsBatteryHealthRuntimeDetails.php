<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsBatteryHealthRuntimeDetails extends Entity implements Parsable 
{
    /**
     * @var int|null $activeDevices Number of active devices within the tenant. Valid values -2147483648 to 2147483647
    */
    private ?int $activeDevices = null;
    
    /**
     * @var int|null $batteryRuntimeFair Number of devices whose active runtime is greater than 3 hours but lesser than 5 hours. Valid values -2147483648 to 2147483647
    */
    private ?int $batteryRuntimeFair = null;
    
    /**
     * @var int|null $batteryRuntimeGood Number of devices  whose active runtime is greater than 5 hours. Valid values -2147483648 to 2147483647
    */
    private ?int $batteryRuntimeGood = null;
    
    /**
     * @var int|null $batteryRuntimePoor Number of devices whose active runtime is lesser than 3 hours. Valid values -2147483648 to 2147483647
    */
    private ?int $batteryRuntimePoor = null;
    
    /**
     * @var DateTime|null $lastRefreshedDateTime Recorded date time of this runtime details instance.
    */
    private ?DateTime $lastRefreshedDateTime = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsBatteryHealthRuntimeDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userExperienceAnalyticsBatteryHealthRuntimeDetails');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsBatteryHealthRuntimeDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsBatteryHealthRuntimeDetails {
        return new UserExperienceAnalyticsBatteryHealthRuntimeDetails();
    }

    /**
     * Gets the activeDevices property value. Number of active devices within the tenant. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getActiveDevices(): ?int {
        return $this->activeDevices;
    }

    /**
     * Gets the batteryRuntimeFair property value. Number of devices whose active runtime is greater than 3 hours but lesser than 5 hours. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getBatteryRuntimeFair(): ?int {
        return $this->batteryRuntimeFair;
    }

    /**
     * Gets the batteryRuntimeGood property value. Number of devices  whose active runtime is greater than 5 hours. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getBatteryRuntimeGood(): ?int {
        return $this->batteryRuntimeGood;
    }

    /**
     * Gets the batteryRuntimePoor property value. Number of devices whose active runtime is lesser than 3 hours. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getBatteryRuntimePoor(): ?int {
        return $this->batteryRuntimePoor;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeDevices' => function (ParseNode $n) use ($o) { $o->setActiveDevices($n->getIntegerValue()); },
            'batteryRuntimeFair' => function (ParseNode $n) use ($o) { $o->setBatteryRuntimeFair($n->getIntegerValue()); },
            'batteryRuntimeGood' => function (ParseNode $n) use ($o) { $o->setBatteryRuntimeGood($n->getIntegerValue()); },
            'batteryRuntimePoor' => function (ParseNode $n) use ($o) { $o->setBatteryRuntimePoor($n->getIntegerValue()); },
            'lastRefreshedDateTime' => function (ParseNode $n) use ($o) { $o->setLastRefreshedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the lastRefreshedDateTime property value. Recorded date time of this runtime details instance.
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
        $writer->writeIntegerValue('batteryRuntimeFair', $this->batteryRuntimeFair);
        $writer->writeIntegerValue('batteryRuntimeGood', $this->batteryRuntimeGood);
        $writer->writeIntegerValue('batteryRuntimePoor', $this->batteryRuntimePoor);
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
     * Sets the batteryRuntimeFair property value. Number of devices whose active runtime is greater than 3 hours but lesser than 5 hours. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the batteryRuntimeFair property.
    */
    public function setBatteryRuntimeFair(?int $value ): void {
        $this->batteryRuntimeFair = $value;
    }

    /**
     * Sets the batteryRuntimeGood property value. Number of devices  whose active runtime is greater than 5 hours. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the batteryRuntimeGood property.
    */
    public function setBatteryRuntimeGood(?int $value ): void {
        $this->batteryRuntimeGood = $value;
    }

    /**
     * Sets the batteryRuntimePoor property value. Number of devices whose active runtime is lesser than 3 hours. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the batteryRuntimePoor property.
    */
    public function setBatteryRuntimePoor(?int $value ): void {
        $this->batteryRuntimePoor = $value;
    }

    /**
     * Sets the lastRefreshedDateTime property value. Recorded date time of this runtime details instance.
     *  @param DateTime|null $value Value to set for the lastRefreshedDateTime property.
    */
    public function setLastRefreshedDateTime(?DateTime $value ): void {
        $this->lastRefreshedDateTime = $value;
    }

}
