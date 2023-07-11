<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics battery health capacity entity contains count of devices broken down into 3 categories - devices with capacity > 80%, devices with capacity 50-80% and devices with capacity < 50 %.This API provides the count of devices in these 3 categories..
*/
class UserExperienceAnalyticsBatteryHealthCapacityDetails extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsBatteryHealthCapacityDetails {
        return new UserExperienceAnalyticsBatteryHealthCapacityDetails();
    }

    /**
     * Gets the activeDevices property value. Number of active devices within the tenant. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getActiveDevices(): ?int {
        $val = $this->getBackingStore()->get('activeDevices');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeDevices'");
    }

    /**
     * Gets the batteryCapacityFair property value. Number of devices whose battery maximum capacity is greater than 50% but lesser than 80%. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getBatteryCapacityFair(): ?int {
        $val = $this->getBackingStore()->get('batteryCapacityFair');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'batteryCapacityFair'");
    }

    /**
     * Gets the batteryCapacityGood property value. Number of devices whose battery maximum capacity is greater than 80%. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getBatteryCapacityGood(): ?int {
        $val = $this->getBackingStore()->get('batteryCapacityGood');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'batteryCapacityGood'");
    }

    /**
     * Gets the batteryCapacityPoor property value. Number of devices whose battery maximum capacity is lesser than 50%. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getBatteryCapacityPoor(): ?int {
        $val = $this->getBackingStore()->get('batteryCapacityPoor');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'batteryCapacityPoor'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeDevices' => fn(ParseNode $n) => $o->setActiveDevices($n->getIntegerValue()),
            'batteryCapacityFair' => fn(ParseNode $n) => $o->setBatteryCapacityFair($n->getIntegerValue()),
            'batteryCapacityGood' => fn(ParseNode $n) => $o->setBatteryCapacityGood($n->getIntegerValue()),
            'batteryCapacityPoor' => fn(ParseNode $n) => $o->setBatteryCapacityPoor($n->getIntegerValue()),
            'lastRefreshedDateTime' => fn(ParseNode $n) => $o->setLastRefreshedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastRefreshedDateTime property value. Recorded date time of this capacity details instance.
     * @return DateTime|null
    */
    public function getLastRefreshedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastRefreshedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastRefreshedDateTime'");
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
        parent::serialize($writer);
        $writer->writeIntegerValue('activeDevices', $this->getActiveDevices());
        $writer->writeIntegerValue('batteryCapacityFair', $this->getBatteryCapacityFair());
        $writer->writeIntegerValue('batteryCapacityGood', $this->getBatteryCapacityGood());
        $writer->writeIntegerValue('batteryCapacityPoor', $this->getBatteryCapacityPoor());
        $writer->writeDateTimeValue('lastRefreshedDateTime', $this->getLastRefreshedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the activeDevices property value. Number of active devices within the tenant. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the activeDevices property.
    */
    public function setActiveDevices(?int $value): void {
        $this->getBackingStore()->set('activeDevices', $value);
    }

    /**
     * Sets the batteryCapacityFair property value. Number of devices whose battery maximum capacity is greater than 50% but lesser than 80%. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the batteryCapacityFair property.
    */
    public function setBatteryCapacityFair(?int $value): void {
        $this->getBackingStore()->set('batteryCapacityFair', $value);
    }

    /**
     * Sets the batteryCapacityGood property value. Number of devices whose battery maximum capacity is greater than 80%. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the batteryCapacityGood property.
    */
    public function setBatteryCapacityGood(?int $value): void {
        $this->getBackingStore()->set('batteryCapacityGood', $value);
    }

    /**
     * Sets the batteryCapacityPoor property value. Number of devices whose battery maximum capacity is lesser than 50%. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the batteryCapacityPoor property.
    */
    public function setBatteryCapacityPoor(?int $value): void {
        $this->getBackingStore()->set('batteryCapacityPoor', $value);
    }

    /**
     * Sets the lastRefreshedDateTime property value. Recorded date time of this capacity details instance.
     * @param DateTime|null $value Value to set for the lastRefreshedDateTime property.
    */
    public function setLastRefreshedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastRefreshedDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
