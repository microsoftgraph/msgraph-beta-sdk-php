<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceCompliancePolicySettingStateSummary extends Entity implements Parsable 
{
    /**
     * @var int|null $conflictDeviceCount The number of devices in a conflict state. Optional. Read-only.
    */
    private ?int $conflictDeviceCount = null;
    
    /**
     * @var int|null $errorDeviceCount The number of devices in an error state. Optional. Read-only.
    */
    private ?int $errorDeviceCount = null;
    
    /**
     * @var int|null $failedDeviceCount The number of devices in a failed state. Optional. Read-only.
    */
    private ?int $failedDeviceCount = null;
    
    /**
     * @var string|null $intuneAccountId The identifer for the Microsoft Intune account. Required. Read-only.
    */
    private ?string $intuneAccountId = null;
    
    /**
     * @var string|null $intuneSettingId The identifier for the Intune setting. Optional. Read-only.
    */
    private ?string $intuneSettingId = null;
    
    /**
     * @var DateTime|null $lastRefreshedDateTime Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
    */
    private ?DateTime $lastRefreshedDateTime = null;
    
    /**
     * @var int|null $notApplicableDeviceCount The number of devices in a not applicable state. Optional. Read-only.
    */
    private ?int $notApplicableDeviceCount = null;
    
    /**
     * @var int|null $pendingDeviceCount The number of devices in a pending state. Optional. Read-only.
    */
    private ?int $pendingDeviceCount = null;
    
    /**
     * @var string|null $policyType The type for the device compliance policy. Optional. Read-only.
    */
    private ?string $policyType = null;
    
    /**
     * @var string|null $settingName The name for the setting within the device compliance policy. Optional. Read-only.
    */
    private ?string $settingName = null;
    
    /**
     * @var int|null $succeededDeviceCount The number of devices in a succeeded state. Optional. Read-only.
    */
    private ?int $succeededDeviceCount = null;
    
    /**
     * @var string|null $tenantDisplayName The display name for the managed tenant. Required. Read-only.
    */
    private ?string $tenantDisplayName = null;
    
    /**
     * @var string|null $tenantId The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
    */
    private ?string $tenantId = null;
    
    /**
     * Instantiates a new deviceCompliancePolicySettingStateSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedTenants.deviceCompliancePolicySettingStateSummary');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceCompliancePolicySettingStateSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceCompliancePolicySettingStateSummary {
        return new DeviceCompliancePolicySettingStateSummary();
    }

    /**
     * Gets the conflictDeviceCount property value. The number of devices in a conflict state. Optional. Read-only.
     * @return int|null
    */
    public function getConflictDeviceCount(): ?int {
        return $this->conflictDeviceCount;
    }

    /**
     * Gets the errorDeviceCount property value. The number of devices in an error state. Optional. Read-only.
     * @return int|null
    */
    public function getErrorDeviceCount(): ?int {
        return $this->errorDeviceCount;
    }

    /**
     * Gets the failedDeviceCount property value. The number of devices in a failed state. Optional. Read-only.
     * @return int|null
    */
    public function getFailedDeviceCount(): ?int {
        return $this->failedDeviceCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'conflictDeviceCount' => fn(ParseNode $n) => $o->setConflictDeviceCount($n->getIntegerValue()),
            'errorDeviceCount' => fn(ParseNode $n) => $o->setErrorDeviceCount($n->getIntegerValue()),
            'failedDeviceCount' => fn(ParseNode $n) => $o->setFailedDeviceCount($n->getIntegerValue()),
            'intuneAccountId' => fn(ParseNode $n) => $o->setIntuneAccountId($n->getStringValue()),
            'intuneSettingId' => fn(ParseNode $n) => $o->setIntuneSettingId($n->getStringValue()),
            'lastRefreshedDateTime' => fn(ParseNode $n) => $o->setLastRefreshedDateTime($n->getDateTimeValue()),
            'notApplicableDeviceCount' => fn(ParseNode $n) => $o->setNotApplicableDeviceCount($n->getIntegerValue()),
            'pendingDeviceCount' => fn(ParseNode $n) => $o->setPendingDeviceCount($n->getIntegerValue()),
            'policyType' => fn(ParseNode $n) => $o->setPolicyType($n->getStringValue()),
            'settingName' => fn(ParseNode $n) => $o->setSettingName($n->getStringValue()),
            'succeededDeviceCount' => fn(ParseNode $n) => $o->setSucceededDeviceCount($n->getIntegerValue()),
            'tenantDisplayName' => fn(ParseNode $n) => $o->setTenantDisplayName($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the intuneAccountId property value. The identifer for the Microsoft Intune account. Required. Read-only.
     * @return string|null
    */
    public function getIntuneAccountId(): ?string {
        return $this->intuneAccountId;
    }

    /**
     * Gets the intuneSettingId property value. The identifier for the Intune setting. Optional. Read-only.
     * @return string|null
    */
    public function getIntuneSettingId(): ?string {
        return $this->intuneSettingId;
    }

    /**
     * Gets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastRefreshedDateTime(): ?DateTime {
        return $this->lastRefreshedDateTime;
    }

    /**
     * Gets the notApplicableDeviceCount property value. The number of devices in a not applicable state. Optional. Read-only.
     * @return int|null
    */
    public function getNotApplicableDeviceCount(): ?int {
        return $this->notApplicableDeviceCount;
    }

    /**
     * Gets the pendingDeviceCount property value. The number of devices in a pending state. Optional. Read-only.
     * @return int|null
    */
    public function getPendingDeviceCount(): ?int {
        return $this->pendingDeviceCount;
    }

    /**
     * Gets the policyType property value. The type for the device compliance policy. Optional. Read-only.
     * @return string|null
    */
    public function getPolicyType(): ?string {
        return $this->policyType;
    }

    /**
     * Gets the settingName property value. The name for the setting within the device compliance policy. Optional. Read-only.
     * @return string|null
    */
    public function getSettingName(): ?string {
        return $this->settingName;
    }

    /**
     * Gets the succeededDeviceCount property value. The number of devices in a succeeded state. Optional. Read-only.
     * @return int|null
    */
    public function getSucceededDeviceCount(): ?int {
        return $this->succeededDeviceCount;
    }

    /**
     * Gets the tenantDisplayName property value. The display name for the managed tenant. Required. Read-only.
     * @return string|null
    */
    public function getTenantDisplayName(): ?string {
        return $this->tenantDisplayName;
    }

    /**
     * Gets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('conflictDeviceCount', $this->conflictDeviceCount);
        $writer->writeIntegerValue('errorDeviceCount', $this->errorDeviceCount);
        $writer->writeIntegerValue('failedDeviceCount', $this->failedDeviceCount);
        $writer->writeStringValue('intuneAccountId', $this->intuneAccountId);
        $writer->writeStringValue('intuneSettingId', $this->intuneSettingId);
        $writer->writeDateTimeValue('lastRefreshedDateTime', $this->lastRefreshedDateTime);
        $writer->writeIntegerValue('notApplicableDeviceCount', $this->notApplicableDeviceCount);
        $writer->writeIntegerValue('pendingDeviceCount', $this->pendingDeviceCount);
        $writer->writeStringValue('policyType', $this->policyType);
        $writer->writeStringValue('settingName', $this->settingName);
        $writer->writeIntegerValue('succeededDeviceCount', $this->succeededDeviceCount);
        $writer->writeStringValue('tenantDisplayName', $this->tenantDisplayName);
        $writer->writeStringValue('tenantId', $this->tenantId);
    }

    /**
     * Sets the conflictDeviceCount property value. The number of devices in a conflict state. Optional. Read-only.
     *  @param int|null $value Value to set for the conflictDeviceCount property.
    */
    public function setConflictDeviceCount(?int $value ): void {
        $this->conflictDeviceCount = $value;
    }

    /**
     * Sets the errorDeviceCount property value. The number of devices in an error state. Optional. Read-only.
     *  @param int|null $value Value to set for the errorDeviceCount property.
    */
    public function setErrorDeviceCount(?int $value ): void {
        $this->errorDeviceCount = $value;
    }

    /**
     * Sets the failedDeviceCount property value. The number of devices in a failed state. Optional. Read-only.
     *  @param int|null $value Value to set for the failedDeviceCount property.
    */
    public function setFailedDeviceCount(?int $value ): void {
        $this->failedDeviceCount = $value;
    }

    /**
     * Sets the intuneAccountId property value. The identifer for the Microsoft Intune account. Required. Read-only.
     *  @param string|null $value Value to set for the intuneAccountId property.
    */
    public function setIntuneAccountId(?string $value ): void {
        $this->intuneAccountId = $value;
    }

    /**
     * Sets the intuneSettingId property value. The identifier for the Intune setting. Optional. Read-only.
     *  @param string|null $value Value to set for the intuneSettingId property.
    */
    public function setIntuneSettingId(?string $value ): void {
        $this->intuneSettingId = $value;
    }

    /**
     * Sets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the lastRefreshedDateTime property.
    */
    public function setLastRefreshedDateTime(?DateTime $value ): void {
        $this->lastRefreshedDateTime = $value;
    }

    /**
     * Sets the notApplicableDeviceCount property value. The number of devices in a not applicable state. Optional. Read-only.
     *  @param int|null $value Value to set for the notApplicableDeviceCount property.
    */
    public function setNotApplicableDeviceCount(?int $value ): void {
        $this->notApplicableDeviceCount = $value;
    }

    /**
     * Sets the pendingDeviceCount property value. The number of devices in a pending state. Optional. Read-only.
     *  @param int|null $value Value to set for the pendingDeviceCount property.
    */
    public function setPendingDeviceCount(?int $value ): void {
        $this->pendingDeviceCount = $value;
    }

    /**
     * Sets the policyType property value. The type for the device compliance policy. Optional. Read-only.
     *  @param string|null $value Value to set for the policyType property.
    */
    public function setPolicyType(?string $value ): void {
        $this->policyType = $value;
    }

    /**
     * Sets the settingName property value. The name for the setting within the device compliance policy. Optional. Read-only.
     *  @param string|null $value Value to set for the settingName property.
    */
    public function setSettingName(?string $value ): void {
        $this->settingName = $value;
    }

    /**
     * Sets the succeededDeviceCount property value. The number of devices in a succeeded state. Optional. Read-only.
     *  @param int|null $value Value to set for the succeededDeviceCount property.
    */
    public function setSucceededDeviceCount(?int $value ): void {
        $this->succeededDeviceCount = $value;
    }

    /**
     * Sets the tenantDisplayName property value. The display name for the managed tenant. Required. Read-only.
     *  @param string|null $value Value to set for the tenantDisplayName property.
    */
    public function setTenantDisplayName(?string $value ): void {
        $this->tenantDisplayName = $value;
    }

    /**
     * Sets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
