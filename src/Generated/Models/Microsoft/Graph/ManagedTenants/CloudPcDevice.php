<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcDevice extends Entity 
{
    /** @var string|null $cloudPcStatus The status of the cloud PC. Possible values are: notProvisioned, provisioning, provisioned, upgrading, inGracePeriod, deprovisioning, failed. Required. Read-only. */
    private ?string $cloudPcStatus = null;
    
    /** @var string|null $deviceSpecification  */
    private ?string $deviceSpecification = null;
    
    /** @var string|null $displayName The display name for the cloud PC. Required. Read-only. */
    private ?string $displayName = null;
    
    /** @var DateTime|null $lastRefreshedDateTime Date and time the entity was last updated in the multi-tenant management platform. Required. Read-only. */
    private ?DateTime $lastRefreshedDateTime = null;
    
    /** @var string|null $managedDeviceId The managed device identifier for the cloud PC. Optional. Read-only. */
    private ?string $managedDeviceId = null;
    
    /** @var string|null $managedDeviceName The managed device display name for the cloud PC. Optional. Read-only. */
    private ?string $managedDeviceName = null;
    
    /** @var string|null $provisioningPolicyId The provisioning policy identifier for the cloud PC. Required. Read-only. */
    private ?string $provisioningPolicyId = null;
    
    /** @var string|null $servicePlanName The service plan name for the cloud PC. Required. Read-only. */
    private ?string $servicePlanName = null;
    
    /** @var string|null $servicePlanType  */
    private ?string $servicePlanType = null;
    
    /** @var string|null $tenantDisplayName The display name for the managed tenant. Required. Read-only. */
    private ?string $tenantDisplayName = null;
    
    /** @var string|null $tenantId The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only. */
    private ?string $tenantId = null;
    
    /** @var string|null $userPrincipalName The user principal name (UPN) of the user assigned to the cloud PC. Required. Read-only. */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new cloudPcDevice and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcDevice
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcDevice {
        return new CloudPcDevice();
    }

    /**
     * Gets the cloudPcStatus property value. The status of the cloud PC. Possible values are: notProvisioned, provisioning, provisioned, upgrading, inGracePeriod, deprovisioning, failed. Required. Read-only.
     * @return string|null
    */
    public function getCloudPcStatus(): ?string {
        return $this->cloudPcStatus;
    }

    /**
     * Gets the deviceSpecification property value. 
     * @return string|null
    */
    public function getDeviceSpecification(): ?string {
        return $this->deviceSpecification;
    }

    /**
     * Gets the displayName property value. The display name for the cloud PC. Required. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'cloudPcStatus' => function (self $o, ParseNode $n) { $o->setCloudPcStatus($n->getStringValue()); },
            'deviceSpecification' => function (self $o, ParseNode $n) { $o->setDeviceSpecification($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'lastRefreshedDateTime' => function (self $o, ParseNode $n) { $o->setLastRefreshedDateTime($n->getDateTimeValue()); },
            'managedDeviceId' => function (self $o, ParseNode $n) { $o->setManagedDeviceId($n->getStringValue()); },
            'managedDeviceName' => function (self $o, ParseNode $n) { $o->setManagedDeviceName($n->getStringValue()); },
            'provisioningPolicyId' => function (self $o, ParseNode $n) { $o->setProvisioningPolicyId($n->getStringValue()); },
            'servicePlanName' => function (self $o, ParseNode $n) { $o->setServicePlanName($n->getStringValue()); },
            'servicePlanType' => function (self $o, ParseNode $n) { $o->setServicePlanType($n->getStringValue()); },
            'tenantDisplayName' => function (self $o, ParseNode $n) { $o->setTenantDisplayName($n->getStringValue()); },
            'tenantId' => function (self $o, ParseNode $n) { $o->setTenantId($n->getStringValue()); },
            'userPrincipalName' => function (self $o, ParseNode $n) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Required. Read-only.
     * @return DateTime|null
    */
    public function getLastRefreshedDateTime(): ?DateTime {
        return $this->lastRefreshedDateTime;
    }

    /**
     * Gets the managedDeviceId property value. The managed device identifier for the cloud PC. Optional. Read-only.
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->managedDeviceId;
    }

    /**
     * Gets the managedDeviceName property value. The managed device display name for the cloud PC. Optional. Read-only.
     * @return string|null
    */
    public function getManagedDeviceName(): ?string {
        return $this->managedDeviceName;
    }

    /**
     * Gets the provisioningPolicyId property value. The provisioning policy identifier for the cloud PC. Required. Read-only.
     * @return string|null
    */
    public function getProvisioningPolicyId(): ?string {
        return $this->provisioningPolicyId;
    }

    /**
     * Gets the servicePlanName property value. The service plan name for the cloud PC. Required. Read-only.
     * @return string|null
    */
    public function getServicePlanName(): ?string {
        return $this->servicePlanName;
    }

    /**
     * Gets the servicePlanType property value. 
     * @return string|null
    */
    public function getServicePlanType(): ?string {
        return $this->servicePlanType;
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
     * Gets the userPrincipalName property value. The user principal name (UPN) of the user assigned to the cloud PC. Required. Read-only.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('cloudPcStatus', $this->cloudPcStatus);
        $writer->writeStringValue('deviceSpecification', $this->deviceSpecification);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastRefreshedDateTime', $this->lastRefreshedDateTime);
        $writer->writeStringValue('managedDeviceId', $this->managedDeviceId);
        $writer->writeStringValue('managedDeviceName', $this->managedDeviceName);
        $writer->writeStringValue('provisioningPolicyId', $this->provisioningPolicyId);
        $writer->writeStringValue('servicePlanName', $this->servicePlanName);
        $writer->writeStringValue('servicePlanType', $this->servicePlanType);
        $writer->writeStringValue('tenantDisplayName', $this->tenantDisplayName);
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the cloudPcStatus property value. The status of the cloud PC. Possible values are: notProvisioned, provisioning, provisioned, upgrading, inGracePeriod, deprovisioning, failed. Required. Read-only.
     *  @param string|null $value Value to set for the cloudPcStatus property.
    */
    public function setCloudPcStatus(?string $value ): void {
        $this->cloudPcStatus = $value;
    }

    /**
     * Sets the deviceSpecification property value. 
     *  @param string|null $value Value to set for the deviceSpecification property.
    */
    public function setDeviceSpecification(?string $value ): void {
        $this->deviceSpecification = $value;
    }

    /**
     * Sets the displayName property value. The display name for the cloud PC. Required. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Required. Read-only.
     *  @param DateTime|null $value Value to set for the lastRefreshedDateTime property.
    */
    public function setLastRefreshedDateTime(?DateTime $value ): void {
        $this->lastRefreshedDateTime = $value;
    }

    /**
     * Sets the managedDeviceId property value. The managed device identifier for the cloud PC. Optional. Read-only.
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value ): void {
        $this->managedDeviceId = $value;
    }

    /**
     * Sets the managedDeviceName property value. The managed device display name for the cloud PC. Optional. Read-only.
     *  @param string|null $value Value to set for the managedDeviceName property.
    */
    public function setManagedDeviceName(?string $value ): void {
        $this->managedDeviceName = $value;
    }

    /**
     * Sets the provisioningPolicyId property value. The provisioning policy identifier for the cloud PC. Required. Read-only.
     *  @param string|null $value Value to set for the provisioningPolicyId property.
    */
    public function setProvisioningPolicyId(?string $value ): void {
        $this->provisioningPolicyId = $value;
    }

    /**
     * Sets the servicePlanName property value. The service plan name for the cloud PC. Required. Read-only.
     *  @param string|null $value Value to set for the servicePlanName property.
    */
    public function setServicePlanName(?string $value ): void {
        $this->servicePlanName = $value;
    }

    /**
     * Sets the servicePlanType property value. 
     *  @param string|null $value Value to set for the servicePlanType property.
    */
    public function setServicePlanType(?string $value ): void {
        $this->servicePlanType = $value;
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

    /**
     * Sets the userPrincipalName property value. The user principal name (UPN) of the user assigned to the cloud PC. Required. Read-only.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
