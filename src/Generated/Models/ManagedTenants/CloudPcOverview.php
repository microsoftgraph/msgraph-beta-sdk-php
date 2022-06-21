<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcOverview extends Entity 
{
    /** @var DateTime|null $lastRefreshedDateTime Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only. */
    private ?DateTime $lastRefreshedDateTime = null;
    
    /** @var int|null $numberOfCloudPcConnectionStatusFailed The number of cloud PC connections that have a status of failed. Optional. Read-only. */
    private ?int $numberOfCloudPcConnectionStatusFailed = null;
    
    /** @var int|null $numberOfCloudPcConnectionStatusPassed The number of cloud PC connections that have a status of passed. Optional. Read-only. */
    private ?int $numberOfCloudPcConnectionStatusPassed = null;
    
    /** @var int|null $numberOfCloudPcConnectionStatusPending The number of cloud PC connections that have a status of pending. Optional. Read-only. */
    private ?int $numberOfCloudPcConnectionStatusPending = null;
    
    /** @var int|null $numberOfCloudPcConnectionStatusRunning The number of cloud PC connections that have a status of running. Optional. Read-only. */
    private ?int $numberOfCloudPcConnectionStatusRunning = null;
    
    /** @var int|null $numberOfCloudPcConnectionStatusUnkownFutureValue The number of cloud PC connections that have a status of unknownFutureValue. Optional. Read-only. */
    private ?int $numberOfCloudPcConnectionStatusUnkownFutureValue = null;
    
    /** @var int|null $numberOfCloudPcStatusDeprovisioning The number of cloud PCs that have a status of deprovisioning. Optional. Read-only. */
    private ?int $numberOfCloudPcStatusDeprovisioning = null;
    
    /** @var int|null $numberOfCloudPcStatusFailed The number of cloud PCs that have a status of failed. Optional. Read-only. */
    private ?int $numberOfCloudPcStatusFailed = null;
    
    /** @var int|null $numberOfCloudPcStatusInGracePeriod The number of cloud PCs that have a status of inGracePeriod. Optional. Read-only. */
    private ?int $numberOfCloudPcStatusInGracePeriod = null;
    
    /** @var int|null $numberOfCloudPcStatusNotProvisioned The number of cloud PCs that have a status of notProvisioned. Optional. Read-only. */
    private ?int $numberOfCloudPcStatusNotProvisioned = null;
    
    /** @var int|null $numberOfCloudPcStatusProvisioned The number of cloud PCs that have a status of provisioned. Optional. Read-only. */
    private ?int $numberOfCloudPcStatusProvisioned = null;
    
    /** @var int|null $numberOfCloudPcStatusProvisioning The number of cloud PCs that have a status of provisioning. Optional. Read-only. */
    private ?int $numberOfCloudPcStatusProvisioning = null;
    
    /** @var int|null $numberOfCloudPcStatusUnknown The number of cloud PCs that have a status of unknown. Optional. Read-only. */
    private ?int $numberOfCloudPcStatusUnknown = null;
    
    /** @var int|null $numberOfCloudPcStatusUpgrading The number of cloud PCs that have a status of upgrading. Optional. Read-only. */
    private ?int $numberOfCloudPcStatusUpgrading = null;
    
    /** @var string|null $tenantDisplayName The display name for the managed tenant. Optional. Read-only. */
    private ?string $tenantDisplayName = null;
    
    /** @var string|null $tenantId The tenantId property */
    private ?string $tenantId = null;
    
    /** @var int|null $totalBusinessLicenses The totalBusinessLicenses property */
    private ?int $totalBusinessLicenses = null;
    
    /** @var int|null $totalCloudPcConnectionStatus The total number of cloud PC connection statuses for the given managed tenant. Optional. Read-only. */
    private ?int $totalCloudPcConnectionStatus = null;
    
    /** @var int|null $totalCloudPcStatus The total number of cloud PC statues for the given managed tenant. Optional. Read-only. */
    private ?int $totalCloudPcStatus = null;
    
    /** @var int|null $totalEnterpriseLicenses The totalEnterpriseLicenses property */
    private ?int $totalEnterpriseLicenses = null;
    
    /**
     * Instantiates a new cloudPcOverview and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcOverview
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcOverview {
        return new CloudPcOverview();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'lastRefreshedDateTime' => function (self $o, ParseNode $n) { $o->setLastRefreshedDateTime($n->getDateTimeValue()); },
            'numberOfCloudPcConnectionStatusFailed' => function (self $o, ParseNode $n) { $o->setNumberOfCloudPcConnectionStatusFailed($n->getIntegerValue()); },
            'numberOfCloudPcConnectionStatusPassed' => function (self $o, ParseNode $n) { $o->setNumberOfCloudPcConnectionStatusPassed($n->getIntegerValue()); },
            'numberOfCloudPcConnectionStatusPending' => function (self $o, ParseNode $n) { $o->setNumberOfCloudPcConnectionStatusPending($n->getIntegerValue()); },
            'numberOfCloudPcConnectionStatusRunning' => function (self $o, ParseNode $n) { $o->setNumberOfCloudPcConnectionStatusRunning($n->getIntegerValue()); },
            'numberOfCloudPcConnectionStatusUnkownFutureValue' => function (self $o, ParseNode $n) { $o->setNumberOfCloudPcConnectionStatusUnkownFutureValue($n->getIntegerValue()); },
            'numberOfCloudPcStatusDeprovisioning' => function (self $o, ParseNode $n) { $o->setNumberOfCloudPcStatusDeprovisioning($n->getIntegerValue()); },
            'numberOfCloudPcStatusFailed' => function (self $o, ParseNode $n) { $o->setNumberOfCloudPcStatusFailed($n->getIntegerValue()); },
            'numberOfCloudPcStatusInGracePeriod' => function (self $o, ParseNode $n) { $o->setNumberOfCloudPcStatusInGracePeriod($n->getIntegerValue()); },
            'numberOfCloudPcStatusNotProvisioned' => function (self $o, ParseNode $n) { $o->setNumberOfCloudPcStatusNotProvisioned($n->getIntegerValue()); },
            'numberOfCloudPcStatusProvisioned' => function (self $o, ParseNode $n) { $o->setNumberOfCloudPcStatusProvisioned($n->getIntegerValue()); },
            'numberOfCloudPcStatusProvisioning' => function (self $o, ParseNode $n) { $o->setNumberOfCloudPcStatusProvisioning($n->getIntegerValue()); },
            'numberOfCloudPcStatusUnknown' => function (self $o, ParseNode $n) { $o->setNumberOfCloudPcStatusUnknown($n->getIntegerValue()); },
            'numberOfCloudPcStatusUpgrading' => function (self $o, ParseNode $n) { $o->setNumberOfCloudPcStatusUpgrading($n->getIntegerValue()); },
            'tenantDisplayName' => function (self $o, ParseNode $n) { $o->setTenantDisplayName($n->getStringValue()); },
            'tenantId' => function (self $o, ParseNode $n) { $o->setTenantId($n->getStringValue()); },
            'totalBusinessLicenses' => function (self $o, ParseNode $n) { $o->setTotalBusinessLicenses($n->getIntegerValue()); },
            'totalCloudPcConnectionStatus' => function (self $o, ParseNode $n) { $o->setTotalCloudPcConnectionStatus($n->getIntegerValue()); },
            'totalCloudPcStatus' => function (self $o, ParseNode $n) { $o->setTotalCloudPcStatus($n->getIntegerValue()); },
            'totalEnterpriseLicenses' => function (self $o, ParseNode $n) { $o->setTotalEnterpriseLicenses($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastRefreshedDateTime(): ?DateTime {
        return $this->lastRefreshedDateTime;
    }

    /**
     * Gets the numberOfCloudPcConnectionStatusFailed property value. The number of cloud PC connections that have a status of failed. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcConnectionStatusFailed(): ?int {
        return $this->numberOfCloudPcConnectionStatusFailed;
    }

    /**
     * Gets the numberOfCloudPcConnectionStatusPassed property value. The number of cloud PC connections that have a status of passed. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcConnectionStatusPassed(): ?int {
        return $this->numberOfCloudPcConnectionStatusPassed;
    }

    /**
     * Gets the numberOfCloudPcConnectionStatusPending property value. The number of cloud PC connections that have a status of pending. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcConnectionStatusPending(): ?int {
        return $this->numberOfCloudPcConnectionStatusPending;
    }

    /**
     * Gets the numberOfCloudPcConnectionStatusRunning property value. The number of cloud PC connections that have a status of running. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcConnectionStatusRunning(): ?int {
        return $this->numberOfCloudPcConnectionStatusRunning;
    }

    /**
     * Gets the numberOfCloudPcConnectionStatusUnkownFutureValue property value. The number of cloud PC connections that have a status of unknownFutureValue. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcConnectionStatusUnkownFutureValue(): ?int {
        return $this->numberOfCloudPcConnectionStatusUnkownFutureValue;
    }

    /**
     * Gets the numberOfCloudPcStatusDeprovisioning property value. The number of cloud PCs that have a status of deprovisioning. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcStatusDeprovisioning(): ?int {
        return $this->numberOfCloudPcStatusDeprovisioning;
    }

    /**
     * Gets the numberOfCloudPcStatusFailed property value. The number of cloud PCs that have a status of failed. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcStatusFailed(): ?int {
        return $this->numberOfCloudPcStatusFailed;
    }

    /**
     * Gets the numberOfCloudPcStatusInGracePeriod property value. The number of cloud PCs that have a status of inGracePeriod. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcStatusInGracePeriod(): ?int {
        return $this->numberOfCloudPcStatusInGracePeriod;
    }

    /**
     * Gets the numberOfCloudPcStatusNotProvisioned property value. The number of cloud PCs that have a status of notProvisioned. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcStatusNotProvisioned(): ?int {
        return $this->numberOfCloudPcStatusNotProvisioned;
    }

    /**
     * Gets the numberOfCloudPcStatusProvisioned property value. The number of cloud PCs that have a status of provisioned. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcStatusProvisioned(): ?int {
        return $this->numberOfCloudPcStatusProvisioned;
    }

    /**
     * Gets the numberOfCloudPcStatusProvisioning property value. The number of cloud PCs that have a status of provisioning. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcStatusProvisioning(): ?int {
        return $this->numberOfCloudPcStatusProvisioning;
    }

    /**
     * Gets the numberOfCloudPcStatusUnknown property value. The number of cloud PCs that have a status of unknown. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcStatusUnknown(): ?int {
        return $this->numberOfCloudPcStatusUnknown;
    }

    /**
     * Gets the numberOfCloudPcStatusUpgrading property value. The number of cloud PCs that have a status of upgrading. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCloudPcStatusUpgrading(): ?int {
        return $this->numberOfCloudPcStatusUpgrading;
    }

    /**
     * Gets the tenantDisplayName property value. The display name for the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getTenantDisplayName(): ?string {
        return $this->tenantDisplayName;
    }

    /**
     * Gets the tenantId property value. The tenantId property
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Gets the totalBusinessLicenses property value. The totalBusinessLicenses property
     * @return int|null
    */
    public function getTotalBusinessLicenses(): ?int {
        return $this->totalBusinessLicenses;
    }

    /**
     * Gets the totalCloudPcConnectionStatus property value. The total number of cloud PC connection statuses for the given managed tenant. Optional. Read-only.
     * @return int|null
    */
    public function getTotalCloudPcConnectionStatus(): ?int {
        return $this->totalCloudPcConnectionStatus;
    }

    /**
     * Gets the totalCloudPcStatus property value. The total number of cloud PC statues for the given managed tenant. Optional. Read-only.
     * @return int|null
    */
    public function getTotalCloudPcStatus(): ?int {
        return $this->totalCloudPcStatus;
    }

    /**
     * Gets the totalEnterpriseLicenses property value. The totalEnterpriseLicenses property
     * @return int|null
    */
    public function getTotalEnterpriseLicenses(): ?int {
        return $this->totalEnterpriseLicenses;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('lastRefreshedDateTime', $this->lastRefreshedDateTime);
        $writer->writeIntegerValue('numberOfCloudPcConnectionStatusFailed', $this->numberOfCloudPcConnectionStatusFailed);
        $writer->writeIntegerValue('numberOfCloudPcConnectionStatusPassed', $this->numberOfCloudPcConnectionStatusPassed);
        $writer->writeIntegerValue('numberOfCloudPcConnectionStatusPending', $this->numberOfCloudPcConnectionStatusPending);
        $writer->writeIntegerValue('numberOfCloudPcConnectionStatusRunning', $this->numberOfCloudPcConnectionStatusRunning);
        $writer->writeIntegerValue('numberOfCloudPcConnectionStatusUnkownFutureValue', $this->numberOfCloudPcConnectionStatusUnkownFutureValue);
        $writer->writeIntegerValue('numberOfCloudPcStatusDeprovisioning', $this->numberOfCloudPcStatusDeprovisioning);
        $writer->writeIntegerValue('numberOfCloudPcStatusFailed', $this->numberOfCloudPcStatusFailed);
        $writer->writeIntegerValue('numberOfCloudPcStatusInGracePeriod', $this->numberOfCloudPcStatusInGracePeriod);
        $writer->writeIntegerValue('numberOfCloudPcStatusNotProvisioned', $this->numberOfCloudPcStatusNotProvisioned);
        $writer->writeIntegerValue('numberOfCloudPcStatusProvisioned', $this->numberOfCloudPcStatusProvisioned);
        $writer->writeIntegerValue('numberOfCloudPcStatusProvisioning', $this->numberOfCloudPcStatusProvisioning);
        $writer->writeIntegerValue('numberOfCloudPcStatusUnknown', $this->numberOfCloudPcStatusUnknown);
        $writer->writeIntegerValue('numberOfCloudPcStatusUpgrading', $this->numberOfCloudPcStatusUpgrading);
        $writer->writeStringValue('tenantDisplayName', $this->tenantDisplayName);
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeIntegerValue('totalBusinessLicenses', $this->totalBusinessLicenses);
        $writer->writeIntegerValue('totalCloudPcConnectionStatus', $this->totalCloudPcConnectionStatus);
        $writer->writeIntegerValue('totalCloudPcStatus', $this->totalCloudPcStatus);
        $writer->writeIntegerValue('totalEnterpriseLicenses', $this->totalEnterpriseLicenses);
    }

    /**
     * Sets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the lastRefreshedDateTime property.
    */
    public function setLastRefreshedDateTime(?DateTime $value ): void {
        $this->lastRefreshedDateTime = $value;
    }

    /**
     * Sets the numberOfCloudPcConnectionStatusFailed property value. The number of cloud PC connections that have a status of failed. Optional. Read-only.
     *  @param int|null $value Value to set for the numberOfCloudPcConnectionStatusFailed property.
    */
    public function setNumberOfCloudPcConnectionStatusFailed(?int $value ): void {
        $this->numberOfCloudPcConnectionStatusFailed = $value;
    }

    /**
     * Sets the numberOfCloudPcConnectionStatusPassed property value. The number of cloud PC connections that have a status of passed. Optional. Read-only.
     *  @param int|null $value Value to set for the numberOfCloudPcConnectionStatusPassed property.
    */
    public function setNumberOfCloudPcConnectionStatusPassed(?int $value ): void {
        $this->numberOfCloudPcConnectionStatusPassed = $value;
    }

    /**
     * Sets the numberOfCloudPcConnectionStatusPending property value. The number of cloud PC connections that have a status of pending. Optional. Read-only.
     *  @param int|null $value Value to set for the numberOfCloudPcConnectionStatusPending property.
    */
    public function setNumberOfCloudPcConnectionStatusPending(?int $value ): void {
        $this->numberOfCloudPcConnectionStatusPending = $value;
    }

    /**
     * Sets the numberOfCloudPcConnectionStatusRunning property value. The number of cloud PC connections that have a status of running. Optional. Read-only.
     *  @param int|null $value Value to set for the numberOfCloudPcConnectionStatusRunning property.
    */
    public function setNumberOfCloudPcConnectionStatusRunning(?int $value ): void {
        $this->numberOfCloudPcConnectionStatusRunning = $value;
    }

    /**
     * Sets the numberOfCloudPcConnectionStatusUnkownFutureValue property value. The number of cloud PC connections that have a status of unknownFutureValue. Optional. Read-only.
     *  @param int|null $value Value to set for the numberOfCloudPcConnectionStatusUnkownFutureValue property.
    */
    public function setNumberOfCloudPcConnectionStatusUnkownFutureValue(?int $value ): void {
        $this->numberOfCloudPcConnectionStatusUnkownFutureValue = $value;
    }

    /**
     * Sets the numberOfCloudPcStatusDeprovisioning property value. The number of cloud PCs that have a status of deprovisioning. Optional. Read-only.
     *  @param int|null $value Value to set for the numberOfCloudPcStatusDeprovisioning property.
    */
    public function setNumberOfCloudPcStatusDeprovisioning(?int $value ): void {
        $this->numberOfCloudPcStatusDeprovisioning = $value;
    }

    /**
     * Sets the numberOfCloudPcStatusFailed property value. The number of cloud PCs that have a status of failed. Optional. Read-only.
     *  @param int|null $value Value to set for the numberOfCloudPcStatusFailed property.
    */
    public function setNumberOfCloudPcStatusFailed(?int $value ): void {
        $this->numberOfCloudPcStatusFailed = $value;
    }

    /**
     * Sets the numberOfCloudPcStatusInGracePeriod property value. The number of cloud PCs that have a status of inGracePeriod. Optional. Read-only.
     *  @param int|null $value Value to set for the numberOfCloudPcStatusInGracePeriod property.
    */
    public function setNumberOfCloudPcStatusInGracePeriod(?int $value ): void {
        $this->numberOfCloudPcStatusInGracePeriod = $value;
    }

    /**
     * Sets the numberOfCloudPcStatusNotProvisioned property value. The number of cloud PCs that have a status of notProvisioned. Optional. Read-only.
     *  @param int|null $value Value to set for the numberOfCloudPcStatusNotProvisioned property.
    */
    public function setNumberOfCloudPcStatusNotProvisioned(?int $value ): void {
        $this->numberOfCloudPcStatusNotProvisioned = $value;
    }

    /**
     * Sets the numberOfCloudPcStatusProvisioned property value. The number of cloud PCs that have a status of provisioned. Optional. Read-only.
     *  @param int|null $value Value to set for the numberOfCloudPcStatusProvisioned property.
    */
    public function setNumberOfCloudPcStatusProvisioned(?int $value ): void {
        $this->numberOfCloudPcStatusProvisioned = $value;
    }

    /**
     * Sets the numberOfCloudPcStatusProvisioning property value. The number of cloud PCs that have a status of provisioning. Optional. Read-only.
     *  @param int|null $value Value to set for the numberOfCloudPcStatusProvisioning property.
    */
    public function setNumberOfCloudPcStatusProvisioning(?int $value ): void {
        $this->numberOfCloudPcStatusProvisioning = $value;
    }

    /**
     * Sets the numberOfCloudPcStatusUnknown property value. The number of cloud PCs that have a status of unknown. Optional. Read-only.
     *  @param int|null $value Value to set for the numberOfCloudPcStatusUnknown property.
    */
    public function setNumberOfCloudPcStatusUnknown(?int $value ): void {
        $this->numberOfCloudPcStatusUnknown = $value;
    }

    /**
     * Sets the numberOfCloudPcStatusUpgrading property value. The number of cloud PCs that have a status of upgrading. Optional. Read-only.
     *  @param int|null $value Value to set for the numberOfCloudPcStatusUpgrading property.
    */
    public function setNumberOfCloudPcStatusUpgrading(?int $value ): void {
        $this->numberOfCloudPcStatusUpgrading = $value;
    }

    /**
     * Sets the tenantDisplayName property value. The display name for the managed tenant. Optional. Read-only.
     *  @param string|null $value Value to set for the tenantDisplayName property.
    */
    public function setTenantDisplayName(?string $value ): void {
        $this->tenantDisplayName = $value;
    }

    /**
     * Sets the tenantId property value. The tenantId property
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

    /**
     * Sets the totalBusinessLicenses property value. The totalBusinessLicenses property
     *  @param int|null $value Value to set for the totalBusinessLicenses property.
    */
    public function setTotalBusinessLicenses(?int $value ): void {
        $this->totalBusinessLicenses = $value;
    }

    /**
     * Sets the totalCloudPcConnectionStatus property value. The total number of cloud PC connection statuses for the given managed tenant. Optional. Read-only.
     *  @param int|null $value Value to set for the totalCloudPcConnectionStatus property.
    */
    public function setTotalCloudPcConnectionStatus(?int $value ): void {
        $this->totalCloudPcConnectionStatus = $value;
    }

    /**
     * Sets the totalCloudPcStatus property value. The total number of cloud PC statues for the given managed tenant. Optional. Read-only.
     *  @param int|null $value Value to set for the totalCloudPcStatus property.
    */
    public function setTotalCloudPcStatus(?int $value ): void {
        $this->totalCloudPcStatus = $value;
    }

    /**
     * Sets the totalEnterpriseLicenses property value. The totalEnterpriseLicenses property
     *  @param int|null $value Value to set for the totalEnterpriseLicenses property.
    */
    public function setTotalEnterpriseLicenses(?int $value ): void {
        $this->totalEnterpriseLicenses = $value;
    }

}
