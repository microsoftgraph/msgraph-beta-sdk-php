<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcPolicyScheduledApplyActionDetail extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcPolicyScheduledApplyActionDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcPolicyScheduledApplyActionDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcPolicyScheduledApplyActionDetail {
        return new CloudPcPolicyScheduledApplyActionDetail();
    }

    /**
     * Gets the cronScheduleExpression property value. An expression that specifies the cron schedule. (For example, '0 0 0 20  ' means schedules a job to run at midnight on the 20th of every month) Administrators can set a cron expression to define the scheduling rules for automatic regular application. When auto provision is disabled, cronScheduleExpression is set to null, stopping the automatic task scheduling. Read-Only.
     * @return string|null
    */
    public function getCronScheduleExpression(): ?string {
        $val = $this->getBackingStore()->get('cronScheduleExpression');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cronScheduleExpression'");
    }

    /**
     * Gets the endDateTime property value. Indicates IT Admins can set an end date to define the last scheduler run before this time. If not set, the scheduler runs continuously. There is no time zone information at this time; it needs to be coordinated with timezone, for example, '2025-02-01 00:00:00' with 'China Standard Time' means the scheduling rule takes effect before Feb 01 2025 00:00:00 GMT+0800 (China Standard Time).
     * @return string|null
    */
    public function getEndDateTime(): ?string {
        $val = $this->getBackingStore()->get('endDateTime');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cronScheduleExpression' => fn(ParseNode $n) => $o->setCronScheduleExpression($n->getStringValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getStringValue()),
            'nextRunDateTime' => fn(ParseNode $n) => $o->setNextRunDateTime($n->getStringValue()),
            'reservePercentage' => fn(ParseNode $n) => $o->setReservePercentage($n->getIntegerValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getStringValue()),
            'timezone' => fn(ParseNode $n) => $o->setTimezone($n->getEnumValue(CloudPcPolicyTimezone::class)),
        ]);
    }

    /**
     * Gets the nextRunDateTime property value. Indicates IT Admins can see when the next automatic regular apply is executed. It needs to be coordinated with timezone, for example, '2025-01-01 00:00:00' with 'China Standard Time' means the next task executes at Jan 01 2025 00:00:00 GMT+0800 (China Standard Time). Read-Only.
     * @return string|null
    */
    public function getNextRunDateTime(): ?string {
        $val = $this->getBackingStore()->get('nextRunDateTime');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nextRunDateTime'");
    }

    /**
     * Gets the reservePercentage property value. The percentage of Cloud PCs to keep available. Administrators can set this property to a value from 0 to 99. Cloud PCs are reprovisioned only when there are no active and connected Cloud PC users. Frontline shared only.
     * @return int|null
    */
    public function getReservePercentage(): ?int {
        $val = $this->getBackingStore()->get('reservePercentage');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reservePercentage'");
    }

    /**
     * Gets the startDateTime property value. Indicates IT Admins can set a start date to define the first scheduler run after this time. If not set, the default is the current time. There is no time zone information at this time, it needs to be coordinated with timezone, for example, '2025-01-01 00:00:00' with 'China Standard Time' means the scheduling rule takes effect after Jan 01 2025 00:00:00 GMT+0800 (China Standard Time).
     * @return string|null
    */
    public function getStartDateTime(): ?string {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the timezone property value. The timezone property
     * @return CloudPcPolicyTimezone|null
    */
    public function getTimezone(): ?CloudPcPolicyTimezone {
        $val = $this->getBackingStore()->get('timezone');
        if (is_null($val) || $val instanceof CloudPcPolicyTimezone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timezone'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('cronScheduleExpression', $this->getCronScheduleExpression());
        $writer->writeStringValue('endDateTime', $this->getEndDateTime());
        $writer->writeStringValue('nextRunDateTime', $this->getNextRunDateTime());
        $writer->writeIntegerValue('reservePercentage', $this->getReservePercentage());
        $writer->writeStringValue('startDateTime', $this->getStartDateTime());
        $writer->writeEnumValue('timezone', $this->getTimezone());
    }

    /**
     * Sets the cronScheduleExpression property value. An expression that specifies the cron schedule. (For example, '0 0 0 20  ' means schedules a job to run at midnight on the 20th of every month) Administrators can set a cron expression to define the scheduling rules for automatic regular application. When auto provision is disabled, cronScheduleExpression is set to null, stopping the automatic task scheduling. Read-Only.
     * @param string|null $value Value to set for the cronScheduleExpression property.
    */
    public function setCronScheduleExpression(?string $value): void {
        $this->getBackingStore()->set('cronScheduleExpression', $value);
    }

    /**
     * Sets the endDateTime property value. Indicates IT Admins can set an end date to define the last scheduler run before this time. If not set, the scheduler runs continuously. There is no time zone information at this time; it needs to be coordinated with timezone, for example, '2025-02-01 00:00:00' with 'China Standard Time' means the scheduling rule takes effect before Feb 01 2025 00:00:00 GMT+0800 (China Standard Time).
     * @param string|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?string $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the nextRunDateTime property value. Indicates IT Admins can see when the next automatic regular apply is executed. It needs to be coordinated with timezone, for example, '2025-01-01 00:00:00' with 'China Standard Time' means the next task executes at Jan 01 2025 00:00:00 GMT+0800 (China Standard Time). Read-Only.
     * @param string|null $value Value to set for the nextRunDateTime property.
    */
    public function setNextRunDateTime(?string $value): void {
        $this->getBackingStore()->set('nextRunDateTime', $value);
    }

    /**
     * Sets the reservePercentage property value. The percentage of Cloud PCs to keep available. Administrators can set this property to a value from 0 to 99. Cloud PCs are reprovisioned only when there are no active and connected Cloud PC users. Frontline shared only.
     * @param int|null $value Value to set for the reservePercentage property.
    */
    public function setReservePercentage(?int $value): void {
        $this->getBackingStore()->set('reservePercentage', $value);
    }

    /**
     * Sets the startDateTime property value. Indicates IT Admins can set a start date to define the first scheduler run after this time. If not set, the default is the current time. There is no time zone information at this time, it needs to be coordinated with timezone, for example, '2025-01-01 00:00:00' with 'China Standard Time' means the scheduling rule takes effect after Jan 01 2025 00:00:00 GMT+0800 (China Standard Time).
     * @param string|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?string $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the timezone property value. The timezone property
     * @param CloudPcPolicyTimezone|null $value Value to set for the timezone property.
    */
    public function setTimezone(?CloudPcPolicyTimezone $value): void {
        $this->getBackingStore()->set('timezone', $value);
    }

}
