<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsBatteryHealthRuntimeDetails extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthRuntimeDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('activeDevices');
    }

    /**
     * Gets the batteryRuntimeFair property value. Number of devices whose active runtime is greater than 3 hours but lesser than 5 hours. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getBatteryRuntimeFair(): ?int {
        return $this->getBackingStore()->get('batteryRuntimeFair');
    }

    /**
     * Gets the batteryRuntimeGood property value. Number of devices  whose active runtime is greater than 5 hours. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getBatteryRuntimeGood(): ?int {
        return $this->getBackingStore()->get('batteryRuntimeGood');
    }

    /**
     * Gets the batteryRuntimePoor property value. Number of devices whose active runtime is lesser than 3 hours. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getBatteryRuntimePoor(): ?int {
        return $this->getBackingStore()->get('batteryRuntimePoor');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeDevices' => fn(ParseNode $n) => $o->setActiveDevices($n->getIntegerValue()),
            'batteryRuntimeFair' => fn(ParseNode $n) => $o->setBatteryRuntimeFair($n->getIntegerValue()),
            'batteryRuntimeGood' => fn(ParseNode $n) => $o->setBatteryRuntimeGood($n->getIntegerValue()),
            'batteryRuntimePoor' => fn(ParseNode $n) => $o->setBatteryRuntimePoor($n->getIntegerValue()),
            'lastRefreshedDateTime' => fn(ParseNode $n) => $o->setLastRefreshedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the lastRefreshedDateTime property value. Recorded date time of this runtime details instance.
     * @return DateTime|null
    */
    public function getLastRefreshedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastRefreshedDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('activeDevices', $this->getActiveDevices());
        $writer->writeIntegerValue('batteryRuntimeFair', $this->getBatteryRuntimeFair());
        $writer->writeIntegerValue('batteryRuntimeGood', $this->getBatteryRuntimeGood());
        $writer->writeIntegerValue('batteryRuntimePoor', $this->getBatteryRuntimePoor());
        $writer->writeDateTimeValue('lastRefreshedDateTime', $this->getLastRefreshedDateTime());
    }

    /**
     * Sets the activeDevices property value. Number of active devices within the tenant. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the activeDevices property.
    */
    public function setActiveDevices(?int $value): void {
        $this->getBackingStore()->set('activeDevices', $value);
    }

    /**
     * Sets the batteryRuntimeFair property value. Number of devices whose active runtime is greater than 3 hours but lesser than 5 hours. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the batteryRuntimeFair property.
    */
    public function setBatteryRuntimeFair(?int $value): void {
        $this->getBackingStore()->set('batteryRuntimeFair', $value);
    }

    /**
     * Sets the batteryRuntimeGood property value. Number of devices  whose active runtime is greater than 5 hours. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the batteryRuntimeGood property.
    */
    public function setBatteryRuntimeGood(?int $value): void {
        $this->getBackingStore()->set('batteryRuntimeGood', $value);
    }

    /**
     * Sets the batteryRuntimePoor property value. Number of devices whose active runtime is lesser than 3 hours. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the batteryRuntimePoor property.
    */
    public function setBatteryRuntimePoor(?int $value): void {
        $this->getBackingStore()->set('batteryRuntimePoor', $value);
    }

    /**
     * Sets the lastRefreshedDateTime property value. Recorded date time of this runtime details instance.
     * @param DateTime|null $value Value to set for the lastRefreshedDateTime property.
    */
    public function setLastRefreshedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastRefreshedDateTime', $value);
    }

}
