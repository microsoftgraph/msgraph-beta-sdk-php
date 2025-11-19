<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FullServiceBackupBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new FullServiceBackupBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FullServiceBackupBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FullServiceBackupBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.allDrivesBackup': return new AllDrivesBackup();
                case '#microsoft.graph.allMailboxesBackup': return new AllMailboxesBackup();
                case '#microsoft.graph.allSitesBackup': return new AllSitesBackup();
            }
        }
        return new FullServiceBackupBase();
    }

    /**
     * Gets the actionOnExistingPolicy property value. The actionOnExistingPolicy property
     * @return FullServiceBackupDisableMode|null
    */
    public function getActionOnExistingPolicy(): ?FullServiceBackupDisableMode {
        $val = $this->getBackingStore()->get('actionOnExistingPolicy');
        if (is_null($val) || $val instanceof FullServiceBackupDisableMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionOnExistingPolicy'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionOnExistingPolicy' => fn(ParseNode $n) => $o->setActionOnExistingPolicy($n->getEnumValue(FullServiceBackupDisableMode::class)),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'lastRunDateTime' => fn(ParseNode $n) => $o->setLastRunDateTime($n->getDateTimeValue()),
            'policyId' => fn(ParseNode $n) => $o->setPolicyId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(FullServiceBackupStatus::class)),
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. The lastModifiedBy property
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the lastRunDateTime property value. The lastRunDateTime property
     * @return DateTime|null
    */
    public function getLastRunDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastRunDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastRunDateTime'");
    }

    /**
     * Gets the policyId property value. The policyId property
     * @return string|null
    */
    public function getPolicyId(): ?string {
        $val = $this->getBackingStore()->get('policyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyId'");
    }

    /**
     * Gets the status property value. The status property
     * @return FullServiceBackupStatus|null
    */
    public function getStatus(): ?FullServiceBackupStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof FullServiceBackupStatus) {
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
        $writer->writeEnumValue('actionOnExistingPolicy', $this->getActionOnExistingPolicy());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeDateTimeValue('lastRunDateTime', $this->getLastRunDateTime());
        $writer->writeStringValue('policyId', $this->getPolicyId());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the actionOnExistingPolicy property value. The actionOnExistingPolicy property
     * @param FullServiceBackupDisableMode|null $value Value to set for the actionOnExistingPolicy property.
    */
    public function setActionOnExistingPolicy(?FullServiceBackupDisableMode $value): void {
        $this->getBackingStore()->set('actionOnExistingPolicy', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The lastModifiedBy property
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the lastRunDateTime property value. The lastRunDateTime property
     * @param DateTime|null $value Value to set for the lastRunDateTime property.
    */
    public function setLastRunDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastRunDateTime', $value);
    }

    /**
     * Sets the policyId property value. The policyId property
     * @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value): void {
        $this->getBackingStore()->set('policyId', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param FullServiceBackupStatus|null $value Value to set for the status property.
    */
    public function setStatus(?FullServiceBackupStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
