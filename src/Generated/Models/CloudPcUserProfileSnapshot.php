<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcUserProfileSnapshot extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcUserProfileSnapshot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcUserProfileSnapshot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcUserProfileSnapshot {
        return new CloudPcUserProfileSnapshot();
    }

    /**
     * Gets the cloudProfileId property value. The cloudProfileId property
     * @return string|null
    */
    public function getCloudProfileId(): ?string {
        $val = $this->getBackingStore()->get('cloudProfileId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudProfileId'");
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
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
     * Gets the expirationDateTime property value. The expirationDateTime property
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
            'cloudProfileId' => fn(ParseNode $n) => $o->setCloudProfileId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'lastRestoredDateTime' => fn(ParseNode $n) => $o->setLastRestoredDateTime($n->getDateTimeValue()),
            'snapshotSizeInGB' => fn(ParseNode $n) => $o->setSnapshotSizeInGB($n->getIntegerValue()),
            'snapshotType' => fn(ParseNode $n) => $o->setSnapshotType($n->getEnumValue(CloudPcUserSettingsPersistenceSnapshotType::class)),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastRestoredDateTime property value. The lastRestoredDateTime property
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
     * Gets the snapshotSizeInGB property value. The snapshotSizeInGB property
     * @return int|null
    */
    public function getSnapshotSizeInGB(): ?int {
        $val = $this->getBackingStore()->get('snapshotSizeInGB');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'snapshotSizeInGB'");
    }

    /**
     * Gets the snapshotType property value. The snapshotType property
     * @return CloudPcUserSettingsPersistenceSnapshotType|null
    */
    public function getSnapshotType(): ?CloudPcUserSettingsPersistenceSnapshotType {
        $val = $this->getBackingStore()->get('snapshotType');
        if (is_null($val) || $val instanceof CloudPcUserSettingsPersistenceSnapshotType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'snapshotType'");
    }

    /**
     * Gets the userPrincipalName property value. The userPrincipalName property
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('cloudProfileId', $this->getCloudProfileId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeDateTimeValue('lastRestoredDateTime', $this->getLastRestoredDateTime());
        $writer->writeIntegerValue('snapshotSizeInGB', $this->getSnapshotSizeInGB());
        $writer->writeEnumValue('snapshotType', $this->getSnapshotType());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the cloudProfileId property value. The cloudProfileId property
     * @param string|null $value Value to set for the cloudProfileId property.
    */
    public function setCloudProfileId(?string $value): void {
        $this->getBackingStore()->set('cloudProfileId', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the expirationDateTime property value. The expirationDateTime property
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the lastRestoredDateTime property value. The lastRestoredDateTime property
     * @param DateTime|null $value Value to set for the lastRestoredDateTime property.
    */
    public function setLastRestoredDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastRestoredDateTime', $value);
    }

    /**
     * Sets the snapshotSizeInGB property value. The snapshotSizeInGB property
     * @param int|null $value Value to set for the snapshotSizeInGB property.
    */
    public function setSnapshotSizeInGB(?int $value): void {
        $this->getBackingStore()->set('snapshotSizeInGB', $value);
    }

    /**
     * Sets the snapshotType property value. The snapshotType property
     * @param CloudPcUserSettingsPersistenceSnapshotType|null $value Value to set for the snapshotType property.
    */
    public function setSnapshotType(?CloudPcUserSettingsPersistenceSnapshotType $value): void {
        $this->getBackingStore()->set('snapshotType', $value);
    }

    /**
     * Sets the userPrincipalName property value. The userPrincipalName property
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
