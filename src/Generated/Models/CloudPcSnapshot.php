<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcSnapshot extends Entity implements Parsable 
{
    /**
     * @var string|null $cloudPcId The unique identifier for the Cloud PC.
    */
    private ?string $cloudPcId = null;
    
    /**
     * @var DateTime|null $createdDateTime The date and time at which the snapshot was taken. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var DateTime|null $lastRestoredDateTime The date and time at which the snapshot was last used to restore the Cloud PC device. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $lastRestoredDateTime = null;
    
    /**
     * @var CloudPcSnapshotStatus|null $status The status of the Cloud PC snapshot. The possible values are: ready, unknownFutureValue.
    */
    private ?CloudPcSnapshotStatus $status = null;
    
    /**
     * Instantiates a new CloudPcSnapshot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcSnapshot');
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
        return $this->cloudPcId;
    }

    /**
     * Gets the createdDateTime property value. The date and time at which the snapshot was taken. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cloudPcId' => fn(ParseNode $n) => $o->setCloudPcId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'lastRestoredDateTime' => fn(ParseNode $n) => $o->setLastRestoredDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CloudPcSnapshotStatus::class)),
        ]);
    }

    /**
     * Gets the lastRestoredDateTime property value. The date and time at which the snapshot was last used to restore the Cloud PC device. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastRestoredDateTime(): ?DateTime {
        return $this->lastRestoredDateTime;
    }

    /**
     * Gets the status property value. The status of the Cloud PC snapshot. The possible values are: ready, unknownFutureValue.
     * @return CloudPcSnapshotStatus|null
    */
    public function getStatus(): ?CloudPcSnapshotStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('cloudPcId', $this->cloudPcId);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeDateTimeValue('lastRestoredDateTime', $this->lastRestoredDateTime);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the cloudPcId property value. The unique identifier for the Cloud PC.
     *  @param string|null $value Value to set for the cloudPcId property.
    */
    public function setCloudPcId(?string $value ): void {
        $this->cloudPcId = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time at which the snapshot was taken. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the lastRestoredDateTime property value. The date and time at which the snapshot was last used to restore the Cloud PC device. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the lastRestoredDateTime property.
    */
    public function setLastRestoredDateTime(?DateTime $value ): void {
        $this->lastRestoredDateTime = $value;
    }

    /**
     * Sets the status property value. The status of the Cloud PC snapshot. The possible values are: ready, unknownFutureValue.
     *  @param CloudPcSnapshotStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CloudPcSnapshotStatus $value ): void {
        $this->status = $value;
    }

}
