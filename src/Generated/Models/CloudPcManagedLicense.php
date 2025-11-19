<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcManagedLicense extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcManagedLicense and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcManagedLicense
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcManagedLicense {
        return new CloudPcManagedLicense();
    }

    /**
     * Gets the activeDateTime property value. The date and time when the license becomes active. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, gt, ge, lt, le). Read-only.
     * @return DateTime|null
    */
    public function getActiveDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('activeDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeDateTime'");
    }

    /**
     * Gets the allotmentLicensesCount property value. The number of licenses that are allocated to assignments. The total number of allotted licenses can't be greater than the total license count. The allowed range is from 0 to the value of licensesCount. Supports $filter (eq, ne, gt, ge, lt, le). Read-only. Nullable.
     * @return int|null
    */
    public function getAllotmentLicensesCount(): ?int {
        $val = $this->getBackingStore()->get('allotmentLicensesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allotmentLicensesCount'");
    }

    /**
     * Gets the assignedCount property value. The number of licenses currently assigned to users. The allowed range is from 0 to the value of licensesCount. Supports $filter (eq, ne, gt, ge, lt, le). Read-only.
     * @return int|null
    */
    public function getAssignedCount(): ?int {
        $val = $this->getBackingStore()->get('assignedCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedCount'");
    }

    /**
     * Gets the displayName property value. The display name of the license. For example, Cloud PC Enterprise 4vCPU/16GB/256GB. Supports $filter (eq, ne, in, startsWith). Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the expirationDateTime property value. The date and time when the license expires. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, gt, ge, lt, le). Read-only.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeDateTime' => fn(ParseNode $n) => $o->setActiveDateTime($n->getDateTimeValue()),
            'allotmentLicensesCount' => fn(ParseNode $n) => $o->setAllotmentLicensesCount($n->getIntegerValue()),
            'assignedCount' => fn(ParseNode $n) => $o->setAssignedCount($n->getIntegerValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'latestLicenseStartDateTime' => fn(ParseNode $n) => $o->setLatestLicenseStartDateTime($n->getDateTimeValue()),
            'licensesCount' => fn(ParseNode $n) => $o->setLicensesCount($n->getIntegerValue()),
            'licenseType' => fn(ParseNode $n) => $o->setLicenseType($n->getEnumValue(CloudPcManagedLicenseType::class)),
            'nextBillingDateTime' => fn(ParseNode $n) => $o->setNextBillingDateTime($n->getDateTimeValue()),
            'servicePlanId' => fn(ParseNode $n) => $o->setServicePlanId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CloudPcManagedLicenseStatus::class)),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the latestLicenseStartDateTime property value. The start date of the current license term. This date is the date of the initial purchase or the most recent renewal. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, gt, ge, lt, le). Read-only.
     * @return DateTime|null
    */
    public function getLatestLicenseStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('latestLicenseStartDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'latestLicenseStartDateTime'");
    }

    /**
     * Gets the licensesCount property value. The total number of licenses purchased. The allowed range is fropm 0 to 2,147,483,647. Supports $filter (eq, ne, gt, ge, lt, le). Read-only.
     * @return int|null
    */
    public function getLicensesCount(): ?int {
        $val = $this->getBackingStore()->get('licensesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'licensesCount'");
    }

    /**
     * Gets the licenseType property value. The licenseType property
     * @return CloudPcManagedLicenseType|null
    */
    public function getLicenseType(): ?CloudPcManagedLicenseType {
        $val = $this->getBackingStore()->get('licenseType');
        if (is_null($val) || $val instanceof CloudPcManagedLicenseType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'licenseType'");
    }

    /**
     * Gets the nextBillingDateTime property value. The date and time of the next billing cycle. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, gt, ge, lt, le). Read-only.
     * @return DateTime|null
    */
    public function getNextBillingDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('nextBillingDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nextBillingDateTime'");
    }

    /**
     * Gets the servicePlanId property value. The unique identifier for the service plan that defines the specific stock keeping unit (SKU) of the license. For example, this ID maps to a specific offering like Cloud PC Enterprise 4vCPU/16GB/256GB. For example, 3a94476b-504b-41a4-9f6a-18c5199a55e9. Supports $filter (eq). Read-only.
     * @return string|null
    */
    public function getServicePlanId(): ?string {
        $val = $this->getBackingStore()->get('servicePlanId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePlanId'");
    }

    /**
     * Gets the status property value. The status property
     * @return CloudPcManagedLicenseStatus|null
    */
    public function getStatus(): ?CloudPcManagedLicenseStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof CloudPcManagedLicenseStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the subscriptionId property value. The ID of the Azure commercial subscription to which the license belongs. This unique identifier specifies the subscription where the organization purchased and manages the license. For example, 0d5b1a2b-4d6e-4b8e-88e2-3e7a5b9d0f1a. Supports $filter (eq). Read-only.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        $val = $this->getBackingStore()->get('subscriptionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subscriptionId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('activeDateTime', $this->getActiveDateTime());
        $writer->writeIntegerValue('allotmentLicensesCount', $this->getAllotmentLicensesCount());
        $writer->writeIntegerValue('assignedCount', $this->getAssignedCount());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeDateTimeValue('latestLicenseStartDateTime', $this->getLatestLicenseStartDateTime());
        $writer->writeIntegerValue('licensesCount', $this->getLicensesCount());
        $writer->writeEnumValue('licenseType', $this->getLicenseType());
        $writer->writeDateTimeValue('nextBillingDateTime', $this->getNextBillingDateTime());
        $writer->writeStringValue('servicePlanId', $this->getServicePlanId());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
    }

    /**
     * Sets the activeDateTime property value. The date and time when the license becomes active. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, gt, ge, lt, le). Read-only.
     * @param DateTime|null $value Value to set for the activeDateTime property.
    */
    public function setActiveDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('activeDateTime', $value);
    }

    /**
     * Sets the allotmentLicensesCount property value. The number of licenses that are allocated to assignments. The total number of allotted licenses can't be greater than the total license count. The allowed range is from 0 to the value of licensesCount. Supports $filter (eq, ne, gt, ge, lt, le). Read-only. Nullable.
     * @param int|null $value Value to set for the allotmentLicensesCount property.
    */
    public function setAllotmentLicensesCount(?int $value): void {
        $this->getBackingStore()->set('allotmentLicensesCount', $value);
    }

    /**
     * Sets the assignedCount property value. The number of licenses currently assigned to users. The allowed range is from 0 to the value of licensesCount. Supports $filter (eq, ne, gt, ge, lt, le). Read-only.
     * @param int|null $value Value to set for the assignedCount property.
    */
    public function setAssignedCount(?int $value): void {
        $this->getBackingStore()->set('assignedCount', $value);
    }

    /**
     * Sets the displayName property value. The display name of the license. For example, Cloud PC Enterprise 4vCPU/16GB/256GB. Supports $filter (eq, ne, in, startsWith). Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the expirationDateTime property value. The date and time when the license expires. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, gt, ge, lt, le). Read-only.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the latestLicenseStartDateTime property value. The start date of the current license term. This date is the date of the initial purchase or the most recent renewal. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, gt, ge, lt, le). Read-only.
     * @param DateTime|null $value Value to set for the latestLicenseStartDateTime property.
    */
    public function setLatestLicenseStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('latestLicenseStartDateTime', $value);
    }

    /**
     * Sets the licensesCount property value. The total number of licenses purchased. The allowed range is fropm 0 to 2,147,483,647. Supports $filter (eq, ne, gt, ge, lt, le). Read-only.
     * @param int|null $value Value to set for the licensesCount property.
    */
    public function setLicensesCount(?int $value): void {
        $this->getBackingStore()->set('licensesCount', $value);
    }

    /**
     * Sets the licenseType property value. The licenseType property
     * @param CloudPcManagedLicenseType|null $value Value to set for the licenseType property.
    */
    public function setLicenseType(?CloudPcManagedLicenseType $value): void {
        $this->getBackingStore()->set('licenseType', $value);
    }

    /**
     * Sets the nextBillingDateTime property value. The date and time of the next billing cycle. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, gt, ge, lt, le). Read-only.
     * @param DateTime|null $value Value to set for the nextBillingDateTime property.
    */
    public function setNextBillingDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('nextBillingDateTime', $value);
    }

    /**
     * Sets the servicePlanId property value. The unique identifier for the service plan that defines the specific stock keeping unit (SKU) of the license. For example, this ID maps to a specific offering like Cloud PC Enterprise 4vCPU/16GB/256GB. For example, 3a94476b-504b-41a4-9f6a-18c5199a55e9. Supports $filter (eq). Read-only.
     * @param string|null $value Value to set for the servicePlanId property.
    */
    public function setServicePlanId(?string $value): void {
        $this->getBackingStore()->set('servicePlanId', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param CloudPcManagedLicenseStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CloudPcManagedLicenseStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the subscriptionId property value. The ID of the Azure commercial subscription to which the license belongs. This unique identifier specifies the subscription where the organization purchased and manages the license. For example, 0d5b1a2b-4d6e-4b8e-88e2-3e7a5b9d0f1a. Supports $filter (eq). Read-only.
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->getBackingStore()->set('subscriptionId', $value);
    }

}
