<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CloudPCUserSettingsPersistenceDetail extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPCUserSettingsPersistenceDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPCUserSettingsPersistenceDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPCUserSettingsPersistenceDetail {
        return new CloudPCUserSettingsPersistenceDetail();
    }

    /**
     * Gets the autoCleanupDetail property value. The autoCleanupDetail property
     * @return CloudPCUserSettingsPersistenceAutoCleanupDetail|null
    */
    public function getAutoCleanupDetail(): ?CloudPCUserSettingsPersistenceAutoCleanupDetail {
        $val = $this->getBackingStore()->get('autoCleanupDetail');
        if (is_null($val) || $val instanceof CloudPCUserSettingsPersistenceAutoCleanupDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autoCleanupDetail'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'autoCleanupDetail' => fn(ParseNode $n) => $o->setAutoCleanupDetail($n->getObjectValue([CloudPCUserSettingsPersistenceAutoCleanupDetail::class, 'createFromDiscriminatorValue'])),
            'gracePeriodEndDateTime' => fn(ParseNode $n) => $o->setGracePeriodEndDateTime($n->getDateTimeValue()),
            'snapshotConfiguration' => fn(ParseNode $n) => $o->setSnapshotConfiguration($n->getObjectValue([CloudPcUserSettingsPersistenceSnapshotConfiguration::class, 'createFromDiscriminatorValue'])),
            'storageConfiguration' => fn(ParseNode $n) => $o->setStorageConfiguration($n->getObjectValue([CloudPcStorageConfiguration::class, 'createFromDiscriminatorValue'])),
            'userProfileSnapshots' => fn(ParseNode $n) => $o->setUserProfileSnapshots($n->getCollectionOfObjectValues([CloudPcUserProfileSnapshot::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the gracePeriodEndDateTime property value. Indicates the grace period end time when user settings persistence exceeds the available quota. If usage exceeds the available quota when the grace period expires, the system automatically deletes the profile with the oldest last attached timestamp. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getGracePeriodEndDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('gracePeriodEndDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gracePeriodEndDateTime'");
    }

    /**
     * Gets the snapshotConfiguration property value. The snapshotConfiguration property
     * @return CloudPcUserSettingsPersistenceSnapshotConfiguration|null
    */
    public function getSnapshotConfiguration(): ?CloudPcUserSettingsPersistenceSnapshotConfiguration {
        $val = $this->getBackingStore()->get('snapshotConfiguration');
        if (is_null($val) || $val instanceof CloudPcUserSettingsPersistenceSnapshotConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'snapshotConfiguration'");
    }

    /**
     * Gets the storageConfiguration property value. The storageConfiguration property
     * @return CloudPcStorageConfiguration|null
    */
    public function getStorageConfiguration(): ?CloudPcStorageConfiguration {
        $val = $this->getBackingStore()->get('storageConfiguration');
        if (is_null($val) || $val instanceof CloudPcStorageConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageConfiguration'");
    }

    /**
     * Gets the userProfileSnapshots property value. The userProfileSnapshots property
     * @return array<CloudPcUserProfileSnapshot>|null
    */
    public function getUserProfileSnapshots(): ?array {
        $val = $this->getBackingStore()->get('userProfileSnapshots');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcUserProfileSnapshot::class);
            /** @var array<CloudPcUserProfileSnapshot>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userProfileSnapshots'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('autoCleanupDetail', $this->getAutoCleanupDetail());
        $writer->writeDateTimeValue('gracePeriodEndDateTime', $this->getGracePeriodEndDateTime());
        $writer->writeObjectValue('snapshotConfiguration', $this->getSnapshotConfiguration());
        $writer->writeObjectValue('storageConfiguration', $this->getStorageConfiguration());
        $writer->writeCollectionOfObjectValues('userProfileSnapshots', $this->getUserProfileSnapshots());
    }

    /**
     * Sets the autoCleanupDetail property value. The autoCleanupDetail property
     * @param CloudPCUserSettingsPersistenceAutoCleanupDetail|null $value Value to set for the autoCleanupDetail property.
    */
    public function setAutoCleanupDetail(?CloudPCUserSettingsPersistenceAutoCleanupDetail $value): void {
        $this->getBackingStore()->set('autoCleanupDetail', $value);
    }

    /**
     * Sets the gracePeriodEndDateTime property value. Indicates the grace period end time when user settings persistence exceeds the available quota. If usage exceeds the available quota when the grace period expires, the system automatically deletes the profile with the oldest last attached timestamp. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the gracePeriodEndDateTime property.
    */
    public function setGracePeriodEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('gracePeriodEndDateTime', $value);
    }

    /**
     * Sets the snapshotConfiguration property value. The snapshotConfiguration property
     * @param CloudPcUserSettingsPersistenceSnapshotConfiguration|null $value Value to set for the snapshotConfiguration property.
    */
    public function setSnapshotConfiguration(?CloudPcUserSettingsPersistenceSnapshotConfiguration $value): void {
        $this->getBackingStore()->set('snapshotConfiguration', $value);
    }

    /**
     * Sets the storageConfiguration property value. The storageConfiguration property
     * @param CloudPcStorageConfiguration|null $value Value to set for the storageConfiguration property.
    */
    public function setStorageConfiguration(?CloudPcStorageConfiguration $value): void {
        $this->getBackingStore()->set('storageConfiguration', $value);
    }

    /**
     * Sets the userProfileSnapshots property value. The userProfileSnapshots property
     * @param array<CloudPcUserProfileSnapshot>|null $value Value to set for the userProfileSnapshots property.
    */
    public function setUserProfileSnapshots(?array $value): void {
        $this->getBackingStore()->set('userProfileSnapshots', $value);
    }

}
