<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcDevice extends Entity implements Parsable 
{
    /**
     * Instantiates a new cloudPcDevice and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedTenants.cloudPcDevice');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcDevice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcDevice {
        return new CloudPcDevice();
    }

    /**
     * Gets the cloudPcStatus property value. The status of the cloud PC. Possible values are: notProvisioned, provisioning, provisioned, upgrading, inGracePeriod, deprovisioning, failed. Required. Read-only.
     * @return string|null
    */
    public function getCloudPcStatus(): ?string {
        return $this->getBackingStore()->get('cloudPcStatus');
    }

    /**
     * Gets the deviceSpecification property value. The specification of the cloud PC device. Required. Read-only.
     * @return string|null
    */
    public function getDeviceSpecification(): ?string {
        return $this->getBackingStore()->get('deviceSpecification');
    }

    /**
     * Gets the displayName property value. The display name  of the cloud PC device. Required. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cloudPcStatus' => fn(ParseNode $n) => $o->setCloudPcStatus($n->getStringValue()),
            'deviceSpecification' => fn(ParseNode $n) => $o->setDeviceSpecification($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastRefreshedDateTime' => fn(ParseNode $n) => $o->setLastRefreshedDateTime($n->getDateTimeValue()),
            'managedDeviceId' => fn(ParseNode $n) => $o->setManagedDeviceId($n->getStringValue()),
            'managedDeviceName' => fn(ParseNode $n) => $o->setManagedDeviceName($n->getStringValue()),
            'provisioningPolicyId' => fn(ParseNode $n) => $o->setProvisioningPolicyId($n->getStringValue()),
            'servicePlanName' => fn(ParseNode $n) => $o->setServicePlanName($n->getStringValue()),
            'servicePlanType' => fn(ParseNode $n) => $o->setServicePlanType($n->getStringValue()),
            'tenantDisplayName' => fn(ParseNode $n) => $o->setTenantDisplayName($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Required. Read-only.
     * @return DateTime|null
    */
    public function getLastRefreshedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastRefreshedDateTime');
    }

    /**
     * Gets the managedDeviceId property value. The managed device identifier of the cloud PC device. Optional. Read-only.
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->getBackingStore()->get('managedDeviceId');
    }

    /**
     * Gets the managedDeviceName property value. The managed device display name of the cloud PC device. Optional. Read-only.
     * @return string|null
    */
    public function getManagedDeviceName(): ?string {
        return $this->getBackingStore()->get('managedDeviceName');
    }

    /**
     * Gets the provisioningPolicyId property value. The provisioning policy identifier for the cloud PC device. Required. Read-only.
     * @return string|null
    */
    public function getProvisioningPolicyId(): ?string {
        return $this->getBackingStore()->get('provisioningPolicyId');
    }

    /**
     * Gets the servicePlanName property value. The service plan name of the cloud PC device. Required. Read-only.
     * @return string|null
    */
    public function getServicePlanName(): ?string {
        return $this->getBackingStore()->get('servicePlanName');
    }

    /**
     * Gets the servicePlanType property value. The service plan type of the cloud PC device. Required. Read-only.
     * @return string|null
    */
    public function getServicePlanType(): ?string {
        return $this->getBackingStore()->get('servicePlanType');
    }

    /**
     * Gets the tenantDisplayName property value. The display name for the managed tenant. Required. Read-only.
     * @return string|null
    */
    public function getTenantDisplayName(): ?string {
        return $this->getBackingStore()->get('tenantDisplayName');
    }

    /**
     * Gets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->getBackingStore()->get('tenantId');
    }

    /**
     * Gets the userPrincipalName property value. The user principal name (UPN) of the user assigned to the cloud PC device. Required. Read-only.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('cloudPcStatus', $this->getCloudPcStatus());
        $writer->writeStringValue('deviceSpecification', $this->getDeviceSpecification());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastRefreshedDateTime', $this->getLastRefreshedDateTime());
        $writer->writeStringValue('managedDeviceId', $this->getManagedDeviceId());
        $writer->writeStringValue('managedDeviceName', $this->getManagedDeviceName());
        $writer->writeStringValue('provisioningPolicyId', $this->getProvisioningPolicyId());
        $writer->writeStringValue('servicePlanName', $this->getServicePlanName());
        $writer->writeStringValue('servicePlanType', $this->getServicePlanType());
        $writer->writeStringValue('tenantDisplayName', $this->getTenantDisplayName());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the cloudPcStatus property value. The status of the cloud PC. Possible values are: notProvisioned, provisioning, provisioned, upgrading, inGracePeriod, deprovisioning, failed. Required. Read-only.
     *  @param string|null $value Value to set for the cloudPcStatus property.
    */
    public function setCloudPcStatus(?string $value): void {
        $this->getBackingStore()->set('cloudPcStatus', $value);
    }

    /**
     * Sets the deviceSpecification property value. The specification of the cloud PC device. Required. Read-only.
     *  @param string|null $value Value to set for the deviceSpecification property.
    */
    public function setDeviceSpecification(?string $value): void {
        $this->getBackingStore()->set('deviceSpecification', $value);
    }

    /**
     * Sets the displayName property value. The display name  of the cloud PC device. Required. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Required. Read-only.
     *  @param DateTime|null $value Value to set for the lastRefreshedDateTime property.
    */
    public function setLastRefreshedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastRefreshedDateTime', $value);
    }

    /**
     * Sets the managedDeviceId property value. The managed device identifier of the cloud PC device. Optional. Read-only.
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value): void {
        $this->getBackingStore()->set('managedDeviceId', $value);
    }

    /**
     * Sets the managedDeviceName property value. The managed device display name of the cloud PC device. Optional. Read-only.
     *  @param string|null $value Value to set for the managedDeviceName property.
    */
    public function setManagedDeviceName(?string $value): void {
        $this->getBackingStore()->set('managedDeviceName', $value);
    }

    /**
     * Sets the provisioningPolicyId property value. The provisioning policy identifier for the cloud PC device. Required. Read-only.
     *  @param string|null $value Value to set for the provisioningPolicyId property.
    */
    public function setProvisioningPolicyId(?string $value): void {
        $this->getBackingStore()->set('provisioningPolicyId', $value);
    }

    /**
     * Sets the servicePlanName property value. The service plan name of the cloud PC device. Required. Read-only.
     *  @param string|null $value Value to set for the servicePlanName property.
    */
    public function setServicePlanName(?string $value): void {
        $this->getBackingStore()->set('servicePlanName', $value);
    }

    /**
     * Sets the servicePlanType property value. The service plan type of the cloud PC device. Required. Read-only.
     *  @param string|null $value Value to set for the servicePlanType property.
    */
    public function setServicePlanType(?string $value): void {
        $this->getBackingStore()->set('servicePlanType', $value);
    }

    /**
     * Sets the tenantDisplayName property value. The display name for the managed tenant. Required. Read-only.
     *  @param string|null $value Value to set for the tenantDisplayName property.
    */
    public function setTenantDisplayName(?string $value): void {
        $this->getBackingStore()->set('tenantDisplayName', $value);
    }

    /**
     * Sets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the userPrincipalName property value. The user principal name (UPN) of the user assigned to the cloud PC device. Required. Read-only.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
