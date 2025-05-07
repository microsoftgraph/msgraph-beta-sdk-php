<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcSnapshot extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcSnapshot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcSnapshot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcSnapshot {
        return new CloudPcSnapshot();
    }

    /**
     * Gets the cloudPcId property value. The unique identifier for the Cloud PC.
     * @return string|null
    */
    public function getCloudPcId(): ?string {
        $val = $this->getBackingStore()->get('cloudPcId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPcId'");
    }

    /**
     * Gets the createdDateTime property value. The date and time at which the snapshot was taken. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the expirationDateTime property value. The date and time when the snapshot expires. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
            'cloudPcId' => fn(ParseNode $n) => $o->setCloudPcId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'healthCheckStatus' => fn(ParseNode $n) => $o->setHealthCheckStatus($n->getEnumValue(CloudPcSnapshotHealthCheckStatus::class)),
            'lastRestoredDateTime' => fn(ParseNode $n) => $o->setLastRestoredDateTime($n->getDateTimeValue()),
            'snapshotType' => fn(ParseNode $n) => $o->setSnapshotType($n->getEnumValue(CloudPcSnapshotType::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CloudPcSnapshotStatus::class)),
        ]);
    }

    /**
     * Gets the healthCheckStatus property value. Indicates the health check status of the Cloud PC snapshot. Possible values are, unknown, healthy, unhealthy, unknownFutureValue. The default value is unknown. Read-only. Nullable.
     * @return CloudPcSnapshotHealthCheckStatus|null
    */
    public function getHealthCheckStatus(): ?CloudPcSnapshotHealthCheckStatus {
        $val = $this->getBackingStore()->get('healthCheckStatus');
        if (is_null($val) || $val instanceof CloudPcSnapshotHealthCheckStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'healthCheckStatus'");
    }

    /**
     * Gets the lastRestoredDateTime property value. The date and time at which the snapshot was last used to restore the Cloud PC device. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastRestoredDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastRestoredDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastRestoredDateTime'");
    }

    /**
     * Gets the snapshotType property value. The type of snapshot that indicates how to create the snapshot. Possible values are automatic, manual. Default value is automatic.
     * @return CloudPcSnapshotType|null
    */
    public function getSnapshotType(): ?CloudPcSnapshotType {
        $val = $this->getBackingStore()->get('snapshotType');
        if (is_null($val) || $val instanceof CloudPcSnapshotType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'snapshotType'");
    }

    /**
     * Gets the status property value. The status of the Cloud PC snapshot. The possible values are: ready, unknownFutureValue.
     * @return CloudPcSnapshotStatus|null
    */
    public function getStatus(): ?CloudPcSnapshotStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof CloudPcSnapshotStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('cloudPcId', $this->getCloudPcId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeEnumValue('healthCheckStatus', $this->getHealthCheckStatus());
        $writer->writeDateTimeValue('lastRestoredDateTime', $this->getLastRestoredDateTime());
        $writer->writeEnumValue('snapshotType', $this->getSnapshotType());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the cloudPcId property value. The unique identifier for the Cloud PC.
     * @param string|null $value Value to set for the cloudPcId property.
    */
    public function setCloudPcId(?string $value): void {
        $this->getBackingStore()->set('cloudPcId', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time at which the snapshot was taken. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the expirationDateTime property value. The date and time when the snapshot expires. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the healthCheckStatus property value. Indicates the health check status of the Cloud PC snapshot. Possible values are, unknown, healthy, unhealthy, unknownFutureValue. The default value is unknown. Read-only. Nullable.
     * @param CloudPcSnapshotHealthCheckStatus|null $value Value to set for the healthCheckStatus property.
    */
    public function setHealthCheckStatus(?CloudPcSnapshotHealthCheckStatus $value): void {
        $this->getBackingStore()->set('healthCheckStatus', $value);
    }

    /**
     * Sets the lastRestoredDateTime property value. The date and time at which the snapshot was last used to restore the Cloud PC device. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastRestoredDateTime property.
    */
    public function setLastRestoredDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastRestoredDateTime', $value);
    }

    /**
     * Sets the snapshotType property value. The type of snapshot that indicates how to create the snapshot. Possible values are automatic, manual. Default value is automatic.
     * @param CloudPcSnapshotType|null $value Value to set for the snapshotType property.
    */
    public function setSnapshotType(?CloudPcSnapshotType $value): void {
        $this->getBackingStore()->set('snapshotType', $value);
    }

    /**
     * Sets the status property value. The status of the Cloud PC snapshot. The possible values are: ready, unknownFutureValue.
     * @param CloudPcSnapshotStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CloudPcSnapshotStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
