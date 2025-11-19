<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPcSnapshotImportActionResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPcSnapshotImportActionResult and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcSnapshotImportActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcSnapshotImportActionResult {
        return new CloudPcSnapshotImportActionResult();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the additionalDetail property value. More details about the snapshot import action. For example, The snapshot import has failed because the file format is incorrect. This property only contains a value when errors occur during the process. Read-only.
     * @return string|null
    */
    public function getAdditionalDetail(): ?string {
        $val = $this->getBackingStore()->get('additionalDetail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalDetail'");
    }

    /**
     * Gets the assignedUserPrincipalName property value. The assigned user's principal name. For example, ryan@contoso.com.
     * @return string|null
    */
    public function getAssignedUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('assignedUserPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedUserPrincipalName'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the endDateTime property value. The end time of the snapshot import action. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appear as 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('endDateTime');
        if (is_null($val) || $val instanceof DateTime) {
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
        return  [
            'additionalDetail' => fn(ParseNode $n) => $o->setAdditionalDetail($n->getStringValue()),
            'assignedUserPrincipalName' => fn(ParseNode $n) => $o->setAssignedUserPrincipalName($n->getStringValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'filename' => fn(ParseNode $n) => $o->setFilename($n->getStringValue()),
            'importStatus' => fn(ParseNode $n) => $o->setImportStatus($n->getEnumValue(CloudPcSnapshotImportActionStatus::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'policyName' => fn(ParseNode $n) => $o->setPolicyName($n->getStringValue()),
            'snapshotId' => fn(ParseNode $n) => $o->setSnapshotId($n->getStringValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'usageStatus' => fn(ParseNode $n) => $o->setUsageStatus($n->getEnumValue(CloudPcImportedSnapshotState::class)),
        ];
    }

    /**
     * Gets the filename property value. The file name for the imported snapshot. For example: MyCloudPc.vhd. Read-only.
     * @return string|null
    */
    public function getFilename(): ?string {
        $val = $this->getBackingStore()->get('filename');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filename'");
    }

    /**
     * Gets the importStatus property value. The importStatus property
     * @return CloudPcSnapshotImportActionStatus|null
    */
    public function getImportStatus(): ?CloudPcSnapshotImportActionStatus {
        $val = $this->getBackingStore()->get('importStatus');
        if (is_null($val) || $val instanceof CloudPcSnapshotImportActionStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'importStatus'");
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
     * Gets the policyName property value. The name of the assigned provisioning policy for the upload action. This policy takes effect if a new Cloud PC is provisioned. For example, MyProvisioningPolicy. Read-only.
     * @return string|null
    */
    public function getPolicyName(): ?string {
        $val = $this->getBackingStore()->get('policyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyName'");
    }

    /**
     * Gets the snapshotId property value. The unique identifier for the imported snapshot. For example, d09ae73d-b70f-4836-95c1-59652c947e1c. Read-only.
     * @return string|null
    */
    public function getSnapshotId(): ?string {
        $val = $this->getBackingStore()->get('snapshotId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'snapshotId'");
    }

    /**
     * Gets the startDateTime property value. The start time of the snapshot import action. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appear as 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the usageStatus property value. The usageStatus property
     * @return CloudPcImportedSnapshotState|null
    */
    public function getUsageStatus(): ?CloudPcImportedSnapshotState {
        $val = $this->getBackingStore()->get('usageStatus');
        if (is_null($val) || $val instanceof CloudPcImportedSnapshotState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usageStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('additionalDetail', $this->getAdditionalDetail());
        $writer->writeStringValue('assignedUserPrincipalName', $this->getAssignedUserPrincipalName());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeStringValue('filename', $this->getFilename());
        $writer->writeEnumValue('importStatus', $this->getImportStatus());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('policyName', $this->getPolicyName());
        $writer->writeStringValue('snapshotId', $this->getSnapshotId());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeEnumValue('usageStatus', $this->getUsageStatus());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the additionalDetail property value. More details about the snapshot import action. For example, The snapshot import has failed because the file format is incorrect. This property only contains a value when errors occur during the process. Read-only.
     * @param string|null $value Value to set for the additionalDetail property.
    */
    public function setAdditionalDetail(?string $value): void {
        $this->getBackingStore()->set('additionalDetail', $value);
    }

    /**
     * Sets the assignedUserPrincipalName property value. The assigned user's principal name. For example, ryan@contoso.com.
     * @param string|null $value Value to set for the assignedUserPrincipalName property.
    */
    public function setAssignedUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('assignedUserPrincipalName', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the endDateTime property value. The end time of the snapshot import action. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appear as 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the filename property value. The file name for the imported snapshot. For example: MyCloudPc.vhd. Read-only.
     * @param string|null $value Value to set for the filename property.
    */
    public function setFilename(?string $value): void {
        $this->getBackingStore()->set('filename', $value);
    }

    /**
     * Sets the importStatus property value. The importStatus property
     * @param CloudPcSnapshotImportActionStatus|null $value Value to set for the importStatus property.
    */
    public function setImportStatus(?CloudPcSnapshotImportActionStatus $value): void {
        $this->getBackingStore()->set('importStatus', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the policyName property value. The name of the assigned provisioning policy for the upload action. This policy takes effect if a new Cloud PC is provisioned. For example, MyProvisioningPolicy. Read-only.
     * @param string|null $value Value to set for the policyName property.
    */
    public function setPolicyName(?string $value): void {
        $this->getBackingStore()->set('policyName', $value);
    }

    /**
     * Sets the snapshotId property value. The unique identifier for the imported snapshot. For example, d09ae73d-b70f-4836-95c1-59652c947e1c. Read-only.
     * @param string|null $value Value to set for the snapshotId property.
    */
    public function setSnapshotId(?string $value): void {
        $this->getBackingStore()->set('snapshotId', $value);
    }

    /**
     * Sets the startDateTime property value. The start time of the snapshot import action. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appear as 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the usageStatus property value. The usageStatus property
     * @param CloudPcImportedSnapshotState|null $value Value to set for the usageStatus property.
    */
    public function setUsageStatus(?CloudPcImportedSnapshotState $value): void {
        $this->getBackingStore()->set('usageStatus', $value);
    }

}
