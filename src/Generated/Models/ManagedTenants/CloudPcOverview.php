<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcOverview extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcOverview and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcOverview
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcOverview {
        return new CloudPcOverview();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'frontlineLicensesCount' => fn(ParseNode $n) => $o->setFrontlineLicensesCount($n->getIntegerValue()),
            'lastRefreshedDateTime' => fn(ParseNode $n) => $o->setLastRefreshedDateTime($n->getDateTimeValue()),
            'numberOfCloudPcConnectionStatusFailed' => fn(ParseNode $n) => $o->setNumberOfCloudPcConnectionStatusFailed($n->getIntegerValue()),
            'numberOfCloudPcConnectionStatusPassed' => fn(ParseNode $n) => $o->setNumberOfCloudPcConnectionStatusPassed($n->getIntegerValue()),
            'numberOfCloudPcConnectionStatusPending' => fn(ParseNode $n) => $o->setNumberOfCloudPcConnectionStatusPending($n->getIntegerValue()),
            'numberOfCloudPcConnectionStatusRunning' => fn(ParseNode $n) => $o->setNumberOfCloudPcConnectionStatusRunning($n->getIntegerValue()),
            'numberOfCloudPcConnectionStatusUnkownFutureValue' => fn(ParseNode $n) => $o->setNumberOfCloudPcConnectionStatusUnkownFutureValue($n->getIntegerValue()),
            'numberOfCloudPcStatusDeprovisioning' => fn(ParseNode $n) => $o->setNumberOfCloudPcStatusDeprovisioning($n->getIntegerValue()),
            'numberOfCloudPcStatusFailed' => fn(ParseNode $n) => $o->setNumberOfCloudPcStatusFailed($n->getIntegerValue()),
            'numberOfCloudPcStatusInGracePeriod' => fn(ParseNode $n) => $o->setNumberOfCloudPcStatusInGracePeriod($n->getIntegerValue()),
            'numberOfCloudPcStatusNotProvisioned' => fn(ParseNode $n) => $o->setNumberOfCloudPcStatusNotProvisioned($n->getIntegerValue()),
            'numberOfCloudPcStatusProvisioned' => fn(ParseNode $n) => $o->setNumberOfCloudPcStatusProvisioned($n->getIntegerValue()),
            'numberOfCloudPcStatusProvisioning' => fn(ParseNode $n) => $o->setNumberOfCloudPcStatusProvisioning($n->getIntegerValue()),
            'numberOfCloudPcStatusUnknown' => fn(ParseNode $n) => $o->setNumberOfCloudPcStatusUnknown($n->getIntegerValue()),
            'numberOfCloudPcStatusUpgrading' => fn(ParseNode $n) => $o->setNumberOfCloudPcStatusUpgrading($n->getIntegerValue()),
            'tenantDisplayName' => fn(ParseNode $n) => $o->setTenantDisplayName($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'totalBusinessLicenses' => fn(ParseNode $n) => $o->setTotalBusinessLicenses($n->getIntegerValue()),
            'totalCloudPcConnectionStatus' => fn(ParseNode $n) => $o->setTotalCloudPcConnectionStatus($n->getIntegerValue()),
            'totalCloudPcStatus' => fn(ParseNode $n) => $o->setTotalCloudPcStatus($n->getIntegerValue()),
            'totalEnterpriseLicenses' => fn(ParseNode $n) => $o->setTotalEnterpriseLicenses($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the frontlineLicensesCount property value. The total number of cloud PC devices that have the Frontline SKU. Optional. Read-only.
     * @return int|null
    */
    public function getFrontlineLicensesCount(): ?int {
        $val = $this->getBackingStore()->get('frontlineLicensesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'frontlineLicensesCount'");
    }

    /**
     * Gets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastRefreshedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastRefreshedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastRefreshedDateTime'");
    }

    /**
     * Gets the numberOfCloudPcConnectionStatusFailed property value. The number of cloud PC connections that have a status of failed. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcConnectionStatusFailed(): ?int {
        $val = $this->getBackingStore()->get('numberOfCloudPcConnectionStatusFailed');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberOfCloudPcConnectionStatusFailed'");
    }

    /**
     * Gets the numberOfCloudPcConnectionStatusPassed property value. The number of cloud PC connections that have a status of passed. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcConnectionStatusPassed(): ?int {
        $val = $this->getBackingStore()->get('numberOfCloudPcConnectionStatusPassed');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberOfCloudPcConnectionStatusPassed'");
    }

    /**
     * Gets the numberOfCloudPcConnectionStatusPending property value. The number of cloud PC connections that have a status of pending. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcConnectionStatusPending(): ?int {
        $val = $this->getBackingStore()->get('numberOfCloudPcConnectionStatusPending');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberOfCloudPcConnectionStatusPending'");
    }

    /**
     * Gets the numberOfCloudPcConnectionStatusRunning property value. The number of cloud PC connections that have a status of running. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcConnectionStatusRunning(): ?int {
        $val = $this->getBackingStore()->get('numberOfCloudPcConnectionStatusRunning');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberOfCloudPcConnectionStatusRunning'");
    }

    /**
     * Gets the numberOfCloudPcConnectionStatusUnkownFutureValue property value. The number of cloud PC connections that have a status of unknownFutureValue. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcConnectionStatusUnkownFutureValue(): ?int {
        $val = $this->getBackingStore()->get('numberOfCloudPcConnectionStatusUnkownFutureValue');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberOfCloudPcConnectionStatusUnkownFutureValue'");
    }

    /**
     * Gets the numberOfCloudPcStatusDeprovisioning property value. The number of cloud PCs that have a status of deprovisioning. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcStatusDeprovisioning(): ?int {
        $val = $this->getBackingStore()->get('numberOfCloudPcStatusDeprovisioning');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberOfCloudPcStatusDeprovisioning'");
    }

    /**
     * Gets the numberOfCloudPcStatusFailed property value. The number of cloud PCs that have a status of failed. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcStatusFailed(): ?int {
        $val = $this->getBackingStore()->get('numberOfCloudPcStatusFailed');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberOfCloudPcStatusFailed'");
    }

    /**
     * Gets the numberOfCloudPcStatusInGracePeriod property value. The number of cloud PCs that have a status of inGracePeriod. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcStatusInGracePeriod(): ?int {
        $val = $this->getBackingStore()->get('numberOfCloudPcStatusInGracePeriod');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberOfCloudPcStatusInGracePeriod'");
    }

    /**
     * Gets the numberOfCloudPcStatusNotProvisioned property value. The number of cloud PCs that have a status of notProvisioned. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcStatusNotProvisioned(): ?int {
        $val = $this->getBackingStore()->get('numberOfCloudPcStatusNotProvisioned');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberOfCloudPcStatusNotProvisioned'");
    }

    /**
     * Gets the numberOfCloudPcStatusProvisioned property value. The number of cloud PCs that have a status of provisioned. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcStatusProvisioned(): ?int {
        $val = $this->getBackingStore()->get('numberOfCloudPcStatusProvisioned');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberOfCloudPcStatusProvisioned'");
    }

    /**
     * Gets the numberOfCloudPcStatusProvisioning property value. The number of cloud PCs that have a status of provisioning. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcStatusProvisioning(): ?int {
        $val = $this->getBackingStore()->get('numberOfCloudPcStatusProvisioning');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberOfCloudPcStatusProvisioning'");
    }

    /**
     * Gets the numberOfCloudPcStatusUnknown property value. The number of cloud PCs that have a status of unknown. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcStatusUnknown(): ?int {
        $val = $this->getBackingStore()->get('numberOfCloudPcStatusUnknown');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberOfCloudPcStatusUnknown'");
    }

    /**
     * Gets the numberOfCloudPcStatusUpgrading property value. The number of cloud PCs that have a status of upgrading. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcStatusUpgrading(): ?int {
        $val = $this->getBackingStore()->get('numberOfCloudPcStatusUpgrading');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberOfCloudPcStatusUpgrading'");
    }

    /**
     * Gets the tenantDisplayName property value. The display name for the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getTenantDisplayName(): ?string {
        $val = $this->getBackingStore()->get('tenantDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantDisplayName'");
    }

    /**
     * Gets the tenantId property value. The tenantId property
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Gets the totalBusinessLicenses property value. The total number of cloud PC devices that have the Business SKU. Optional. Read-only.
     * @return int|null
    */
    public function getTotalBusinessLicenses(): ?int {
        $val = $this->getBackingStore()->get('totalBusinessLicenses');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalBusinessLicenses'");
    }

    /**
     * Gets the totalCloudPcConnectionStatus property value. The total number of cloud PC connection statuses for the given managed tenant. Optional. Read-only.
     * @return int|null
    */
    public function getTotalCloudPcConnectionStatus(): ?int {
        $val = $this->getBackingStore()->get('totalCloudPcConnectionStatus');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalCloudPcConnectionStatus'");
    }

    /**
     * Gets the totalCloudPcStatus property value. The total number of cloud PC statues for the given managed tenant. Optional. Read-only.
     * @return int|null
    */
    public function getTotalCloudPcStatus(): ?int {
        $val = $this->getBackingStore()->get('totalCloudPcStatus');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalCloudPcStatus'");
    }

    /**
     * Gets the totalEnterpriseLicenses property value. The total number of cloud PC devices that have the Enterprise SKU. Optional. Read-only.
     * @return int|null
    */
    public function getTotalEnterpriseLicenses(): ?int {
        $val = $this->getBackingStore()->get('totalEnterpriseLicenses');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalEnterpriseLicenses'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('frontlineLicensesCount', $this->getFrontlineLicensesCount());
        $writer->writeDateTimeValue('lastRefreshedDateTime', $this->getLastRefreshedDateTime());
        $writer->writeIntegerValue('numberOfCloudPcConnectionStatusFailed', $this->getNumberOfCloudPcConnectionStatusFailed());
        $writer->writeIntegerValue('numberOfCloudPcConnectionStatusPassed', $this->getNumberOfCloudPcConnectionStatusPassed());
        $writer->writeIntegerValue('numberOfCloudPcConnectionStatusPending', $this->getNumberOfCloudPcConnectionStatusPending());
        $writer->writeIntegerValue('numberOfCloudPcConnectionStatusRunning', $this->getNumberOfCloudPcConnectionStatusRunning());
        $writer->writeIntegerValue('numberOfCloudPcConnectionStatusUnkownFutureValue', $this->getNumberOfCloudPcConnectionStatusUnkownFutureValue());
        $writer->writeIntegerValue('numberOfCloudPcStatusDeprovisioning', $this->getNumberOfCloudPcStatusDeprovisioning());
        $writer->writeIntegerValue('numberOfCloudPcStatusFailed', $this->getNumberOfCloudPcStatusFailed());
        $writer->writeIntegerValue('numberOfCloudPcStatusInGracePeriod', $this->getNumberOfCloudPcStatusInGracePeriod());
        $writer->writeIntegerValue('numberOfCloudPcStatusNotProvisioned', $this->getNumberOfCloudPcStatusNotProvisioned());
        $writer->writeIntegerValue('numberOfCloudPcStatusProvisioned', $this->getNumberOfCloudPcStatusProvisioned());
        $writer->writeIntegerValue('numberOfCloudPcStatusProvisioning', $this->getNumberOfCloudPcStatusProvisioning());
        $writer->writeIntegerValue('numberOfCloudPcStatusUnknown', $this->getNumberOfCloudPcStatusUnknown());
        $writer->writeIntegerValue('numberOfCloudPcStatusUpgrading', $this->getNumberOfCloudPcStatusUpgrading());
        $writer->writeStringValue('tenantDisplayName', $this->getTenantDisplayName());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeIntegerValue('totalBusinessLicenses', $this->getTotalBusinessLicenses());
        $writer->writeIntegerValue('totalCloudPcConnectionStatus', $this->getTotalCloudPcConnectionStatus());
        $writer->writeIntegerValue('totalCloudPcStatus', $this->getTotalCloudPcStatus());
        $writer->writeIntegerValue('totalEnterpriseLicenses', $this->getTotalEnterpriseLicenses());
    }

    /**
     * Sets the frontlineLicensesCount property value. The total number of cloud PC devices that have the Frontline SKU. Optional. Read-only.
     * @param int|null $value Value to set for the frontlineLicensesCount property.
    */
    public function setFrontlineLicensesCount(?int $value): void {
        $this->getBackingStore()->set('frontlineLicensesCount', $value);
    }

    /**
     * Sets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
     * @param DateTime|null $value Value to set for the lastRefreshedDateTime property.
    */
    public function setLastRefreshedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastRefreshedDateTime', $value);
    }

    /**
     * Sets the numberOfCloudPcConnectionStatusFailed property value. The number of cloud PC connections that have a status of failed. Optional. Read-only.
     * @param int|null $value Value to set for the numberOfCloudPcConnectionStatusFailed property.
    */
    public function setNumberOfCloudPcConnectionStatusFailed(?int $value): void {
        $this->getBackingStore()->set('numberOfCloudPcConnectionStatusFailed', $value);
    }

    /**
     * Sets the numberOfCloudPcConnectionStatusPassed property value. The number of cloud PC connections that have a status of passed. Optional. Read-only.
     * @param int|null $value Value to set for the numberOfCloudPcConnectionStatusPassed property.
    */
    public function setNumberOfCloudPcConnectionStatusPassed(?int $value): void {
        $this->getBackingStore()->set('numberOfCloudPcConnectionStatusPassed', $value);
    }

    /**
     * Sets the numberOfCloudPcConnectionStatusPending property value. The number of cloud PC connections that have a status of pending. Optional. Read-only.
     * @param int|null $value Value to set for the numberOfCloudPcConnectionStatusPending property.
    */
    public function setNumberOfCloudPcConnectionStatusPending(?int $value): void {
        $this->getBackingStore()->set('numberOfCloudPcConnectionStatusPending', $value);
    }

    /**
     * Sets the numberOfCloudPcConnectionStatusRunning property value. The number of cloud PC connections that have a status of running. Optional. Read-only.
     * @param int|null $value Value to set for the numberOfCloudPcConnectionStatusRunning property.
    */
    public function setNumberOfCloudPcConnectionStatusRunning(?int $value): void {
        $this->getBackingStore()->set('numberOfCloudPcConnectionStatusRunning', $value);
    }

    /**
     * Sets the numberOfCloudPcConnectionStatusUnkownFutureValue property value. The number of cloud PC connections that have a status of unknownFutureValue. Optional. Read-only.
     * @param int|null $value Value to set for the numberOfCloudPcConnectionStatusUnkownFutureValue property.
    */
    public function setNumberOfCloudPcConnectionStatusUnkownFutureValue(?int $value): void {
        $this->getBackingStore()->set('numberOfCloudPcConnectionStatusUnkownFutureValue', $value);
    }

    /**
     * Sets the numberOfCloudPcStatusDeprovisioning property value. The number of cloud PCs that have a status of deprovisioning. Optional. Read-only.
     * @param int|null $value Value to set for the numberOfCloudPcStatusDeprovisioning property.
    */
    public function setNumberOfCloudPcStatusDeprovisioning(?int $value): void {
        $this->getBackingStore()->set('numberOfCloudPcStatusDeprovisioning', $value);
    }

    /**
     * Sets the numberOfCloudPcStatusFailed property value. The number of cloud PCs that have a status of failed. Optional. Read-only.
     * @param int|null $value Value to set for the numberOfCloudPcStatusFailed property.
    */
    public function setNumberOfCloudPcStatusFailed(?int $value): void {
        $this->getBackingStore()->set('numberOfCloudPcStatusFailed', $value);
    }

    /**
     * Sets the numberOfCloudPcStatusInGracePeriod property value. The number of cloud PCs that have a status of inGracePeriod. Optional. Read-only.
     * @param int|null $value Value to set for the numberOfCloudPcStatusInGracePeriod property.
    */
    public function setNumberOfCloudPcStatusInGracePeriod(?int $value): void {
        $this->getBackingStore()->set('numberOfCloudPcStatusInGracePeriod', $value);
    }

    /**
     * Sets the numberOfCloudPcStatusNotProvisioned property value. The number of cloud PCs that have a status of notProvisioned. Optional. Read-only.
     * @param int|null $value Value to set for the numberOfCloudPcStatusNotProvisioned property.
    */
    public function setNumberOfCloudPcStatusNotProvisioned(?int $value): void {
        $this->getBackingStore()->set('numberOfCloudPcStatusNotProvisioned', $value);
    }

    /**
     * Sets the numberOfCloudPcStatusProvisioned property value. The number of cloud PCs that have a status of provisioned. Optional. Read-only.
     * @param int|null $value Value to set for the numberOfCloudPcStatusProvisioned property.
    */
    public function setNumberOfCloudPcStatusProvisioned(?int $value): void {
        $this->getBackingStore()->set('numberOfCloudPcStatusProvisioned', $value);
    }

    /**
     * Sets the numberOfCloudPcStatusProvisioning property value. The number of cloud PCs that have a status of provisioning. Optional. Read-only.
     * @param int|null $value Value to set for the numberOfCloudPcStatusProvisioning property.
    */
    public function setNumberOfCloudPcStatusProvisioning(?int $value): void {
        $this->getBackingStore()->set('numberOfCloudPcStatusProvisioning', $value);
    }

    /**
     * Sets the numberOfCloudPcStatusUnknown property value. The number of cloud PCs that have a status of unknown. Optional. Read-only.
     * @param int|null $value Value to set for the numberOfCloudPcStatusUnknown property.
    */
    public function setNumberOfCloudPcStatusUnknown(?int $value): void {
        $this->getBackingStore()->set('numberOfCloudPcStatusUnknown', $value);
    }

    /**
     * Sets the numberOfCloudPcStatusUpgrading property value. The number of cloud PCs that have a status of upgrading. Optional. Read-only.
     * @param int|null $value Value to set for the numberOfCloudPcStatusUpgrading property.
    */
    public function setNumberOfCloudPcStatusUpgrading(?int $value): void {
        $this->getBackingStore()->set('numberOfCloudPcStatusUpgrading', $value);
    }

    /**
     * Sets the tenantDisplayName property value. The display name for the managed tenant. Optional. Read-only.
     * @param string|null $value Value to set for the tenantDisplayName property.
    */
    public function setTenantDisplayName(?string $value): void {
        $this->getBackingStore()->set('tenantDisplayName', $value);
    }

    /**
     * Sets the tenantId property value. The tenantId property
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the totalBusinessLicenses property value. The total number of cloud PC devices that have the Business SKU. Optional. Read-only.
     * @param int|null $value Value to set for the totalBusinessLicenses property.
    */
    public function setTotalBusinessLicenses(?int $value): void {
        $this->getBackingStore()->set('totalBusinessLicenses', $value);
    }

    /**
     * Sets the totalCloudPcConnectionStatus property value. The total number of cloud PC connection statuses for the given managed tenant. Optional. Read-only.
     * @param int|null $value Value to set for the totalCloudPcConnectionStatus property.
    */
    public function setTotalCloudPcConnectionStatus(?int $value): void {
        $this->getBackingStore()->set('totalCloudPcConnectionStatus', $value);
    }

    /**
     * Sets the totalCloudPcStatus property value. The total number of cloud PC statues for the given managed tenant. Optional. Read-only.
     * @param int|null $value Value to set for the totalCloudPcStatus property.
    */
    public function setTotalCloudPcStatus(?int $value): void {
        $this->getBackingStore()->set('totalCloudPcStatus', $value);
    }

    /**
     * Sets the totalEnterpriseLicenses property value. The total number of cloud PC devices that have the Enterprise SKU. Optional. Read-only.
     * @param int|null $value Value to set for the totalEnterpriseLicenses property.
    */
    public function setTotalEnterpriseLicenses(?int $value): void {
        $this->getBackingStore()->set('totalEnterpriseLicenses', $value);
    }

}
