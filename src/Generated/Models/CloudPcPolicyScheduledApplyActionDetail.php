<?php

namespace Microsoft\Graph\Beta\Generated\Models;

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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cronScheduleExpression' => fn(ParseNode $n) => $o->setCronScheduleExpression($n->getStringValue()),
            'reservePercentage' => fn(ParseNode $n) => $o->setReservePercentage($n->getIntegerValue()),
        ]);
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('cronScheduleExpression', $this->getCronScheduleExpression());
        $writer->writeIntegerValue('reservePercentage', $this->getReservePercentage());
    }

    /**
     * Sets the cronScheduleExpression property value. An expression that specifies the cron schedule. (For example, '0 0 0 20  ' means schedules a job to run at midnight on the 20th of every month) Administrators can set a cron expression to define the scheduling rules for automatic regular application. When auto provision is disabled, cronScheduleExpression is set to null, stopping the automatic task scheduling. Read-Only.
     * @param string|null $value Value to set for the cronScheduleExpression property.
    */
    public function setCronScheduleExpression(?string $value): void {
        $this->getBackingStore()->set('cronScheduleExpression', $value);
    }

    /**
     * Sets the reservePercentage property value. The percentage of Cloud PCs to keep available. Administrators can set this property to a value from 0 to 99. Cloud PCs are reprovisioned only when there are no active and connected Cloud PC users. Frontline shared only.
     * @param int|null $value Value to set for the reservePercentage property.
    */
    public function setReservePercentage(?int $value): void {
        $this->getBackingStore()->set('reservePercentage', $value);
    }

}
