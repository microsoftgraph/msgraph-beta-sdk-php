<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CloudPcBulkAction extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcBulkAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcBulkAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcBulkAction {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.cloudPcBulkDisasterRecoveryFailback': return new CloudPcBulkDisasterRecoveryFailback();
                case '#microsoft.graph.cloudPcBulkDisasterRecoveryFailover': return new CloudPcBulkDisasterRecoveryFailover();
                case '#microsoft.graph.cloudPcBulkModifyDiskEncryptionType': return new CloudPcBulkModifyDiskEncryptionType();
                case '#microsoft.graph.cloudPcBulkPowerOff': return new CloudPcBulkPowerOff();
                case '#microsoft.graph.cloudPcBulkPowerOn': return new CloudPcBulkPowerOn();
                case '#microsoft.graph.cloudPcBulkReprovision': return new CloudPcBulkReprovision();
                case '#microsoft.graph.cloudPcBulkResize': return new CloudPcBulkResize();
                case '#microsoft.graph.cloudPcBulkRestart': return new CloudPcBulkRestart();
                case '#microsoft.graph.cloudPcBulkRestore': return new CloudPcBulkRestore();
                case '#microsoft.graph.cloudPcBulkTroubleshoot': return new CloudPcBulkTroubleshoot();
            }
        }
        return new CloudPcBulkAction();
    }

    /**
     * Gets the actionSummary property value. Run summary of this bulk action.
     * @return CloudPcBulkActionSummary|null
    */
    public function getActionSummary(): ?CloudPcBulkActionSummary {
        $val = $this->getBackingStore()->get('actionSummary');
        if (is_null($val) || $val instanceof CloudPcBulkActionSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionSummary'");
    }

    /**
     * Gets the cloudPcIds property value. The cloudPcIds property
     * @return array<string>|null
    */
    public function getCloudPcIds(): ?array {
        $val = $this->getBackingStore()->get('cloudPcIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPcIds'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when the bulk action was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the displayName property value. Name of the bulk action.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionSummary' => fn(ParseNode $n) => $o->setActionSummary($n->getObjectValue([CloudPcBulkActionSummary::class, 'createFromDiscriminatorValue'])),
            'cloudPcIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCloudPcIds($val);
            },
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'scheduledDuringMaintenanceWindow' => fn(ParseNode $n) => $o->setScheduledDuringMaintenanceWindow($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the scheduledDuringMaintenanceWindow property value. Indicates whether the bulk actions can be initiated during maintenance window. When true, bulk action will use maintenance window to schedule action, When false means bulk action will not use the maintenance window. Default value is false.
     * @return bool|null
    */
    public function getScheduledDuringMaintenanceWindow(): ?bool {
        $val = $this->getBackingStore()->get('scheduledDuringMaintenanceWindow');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scheduledDuringMaintenanceWindow'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('actionSummary', $this->getActionSummary());
        $writer->writeCollectionOfPrimitiveValues('cloudPcIds', $this->getCloudPcIds());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('scheduledDuringMaintenanceWindow', $this->getScheduledDuringMaintenanceWindow());
    }

    /**
     * Sets the actionSummary property value. Run summary of this bulk action.
     * @param CloudPcBulkActionSummary|null $value Value to set for the actionSummary property.
    */
    public function setActionSummary(?CloudPcBulkActionSummary $value): void {
        $this->getBackingStore()->set('actionSummary', $value);
    }

    /**
     * Sets the cloudPcIds property value. The cloudPcIds property
     * @param array<string>|null $value Value to set for the cloudPcIds property.
    */
    public function setCloudPcIds(?array $value): void {
        $this->getBackingStore()->set('cloudPcIds', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the bulk action was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. Name of the bulk action.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the scheduledDuringMaintenanceWindow property value. Indicates whether the bulk actions can be initiated during maintenance window. When true, bulk action will use maintenance window to schedule action, When false means bulk action will not use the maintenance window. Default value is false.
     * @param bool|null $value Value to set for the scheduledDuringMaintenanceWindow property.
    */
    public function setScheduledDuringMaintenanceWindow(?bool $value): void {
        $this->getBackingStore()->set('scheduledDuringMaintenanceWindow', $value);
    }

}
