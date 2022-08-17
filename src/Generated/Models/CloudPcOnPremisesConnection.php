<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcOnPremisesConnection extends Entity implements Parsable 
{
    /**
     * @var string|null $adDomainName The fully qualified domain name (FQDN) of the Active Directory domain you want to join. Optional.
    */
    private ?string $adDomainName = null;
    
    /**
     * @var string|null $adDomainPassword The password associated with adDomainUsername.
    */
    private ?string $adDomainPassword = null;
    
    /**
     * @var string|null $adDomainUsername The username of an Active Directory account (user or service account) that has permissions to create computer objects in Active Directory. Required format: admin@contoso.com. Optional.
    */
    private ?string $adDomainUsername = null;
    
    /**
     * @var string|null $alternateResourceUrl The interface URL of the partner service's resource that links to this Azure network connection. Returned only on $select.
    */
    private ?string $alternateResourceUrl = null;
    
    /**
     * @var string|null $displayName The display name for the Azure network connection.
    */
    private ?string $displayName = null;
    
    /**
     * @var CloudPcOnPremisesConnectionStatus|null $healthCheckStatus The healthCheckStatus property
    */
    private ?CloudPcOnPremisesConnectionStatus $healthCheckStatus = null;
    
    /**
     * @var CloudPcOnPremisesConnectionStatusDetails|null $healthCheckStatusDetails The details of the connection's health checks and the corresponding results. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an Azure network connection, including healthCheckStatusDetails. Read-only.
    */
    private ?CloudPcOnPremisesConnectionStatusDetails $healthCheckStatusDetails = null;
    
    /**
     * @var bool|null $inUse When true, the Azure network connection is in use. When false, the connection is not in use. You cannot delete a connection that’s in use. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an Azure network connection, including healthCheckStatusDetails. Read-only.
    */
    private ?bool $inUse = null;
    
    /**
     * @var CloudPcManagementService|null $managedBy The managedBy property
    */
    private ?CloudPcManagementService $managedBy = null;
    
    /**
     * @var string|null $organizationalUnit The organizational unit (OU) in which the computer account is created. If left null, the OU that’s configured as the default (a well-known computer object container) in your Active Directory domain (OU) is used. Optional.
    */
    private ?string $organizationalUnit = null;
    
    /**
     * @var string|null $resourceGroupId The ID of the target resource group. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}.
    */
    private ?string $resourceGroupId = null;
    
    /**
     * @var string|null $subnetId The ID of the target subnet. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkId}/subnets/{subnetName}.
    */
    private ?string $subnetId = null;
    
    /**
     * @var string|null $subscriptionId The ID of the target Azure subscription that’s associated with your tenant.
    */
    private ?string $subscriptionId = null;
    
    /**
     * @var string|null $subscriptionName The name of the target Azure subscription. Read-only.
    */
    private ?string $subscriptionName = null;
    
    /**
     * @var CloudPcOnPremisesConnectionType|null $type Specifies how the provisioned Cloud PC will be joined to Azure Active Directory. Default value is hybridAzureADJoin. Possible values are: azureADJoin, hybridAzureADJoin, unknownFutureValue.
    */
    private ?CloudPcOnPremisesConnectionType $type = null;
    
    /**
     * @var string|null $virtualNetworkId The ID of the target virtual network. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkName}.
    */
    private ?string $virtualNetworkId = null;
    
    /**
     * Instantiates a new CloudPcOnPremisesConnection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcOnPremisesConnection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcOnPremisesConnection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcOnPremisesConnection {
        return new CloudPcOnPremisesConnection();
    }

    /**
     * Gets the adDomainName property value. The fully qualified domain name (FQDN) of the Active Directory domain you want to join. Optional.
     * @return string|null
    */
    public function getAdDomainName(): ?string {
        return $this->adDomainName;
    }

    /**
     * Gets the adDomainPassword property value. The password associated with adDomainUsername.
     * @return string|null
    */
    public function getAdDomainPassword(): ?string {
        return $this->adDomainPassword;
    }

    /**
     * Gets the adDomainUsername property value. The username of an Active Directory account (user or service account) that has permissions to create computer objects in Active Directory. Required format: admin@contoso.com. Optional.
     * @return string|null
    */
    public function getAdDomainUsername(): ?string {
        return $this->adDomainUsername;
    }

    /**
     * Gets the alternateResourceUrl property value. The interface URL of the partner service's resource that links to this Azure network connection. Returned only on $select.
     * @return string|null
    */
    public function getAlternateResourceUrl(): ?string {
        return $this->alternateResourceUrl;
    }

    /**
     * Gets the displayName property value. The display name for the Azure network connection.
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'adDomainName' => function (ParseNode $n) use ($o) { $o->setAdDomainName($n->getStringValue()); },
            'adDomainPassword' => function (ParseNode $n) use ($o) { $o->setAdDomainPassword($n->getStringValue()); },
            'adDomainUsername' => function (ParseNode $n) use ($o) { $o->setAdDomainUsername($n->getStringValue()); },
            'alternateResourceUrl' => function (ParseNode $n) use ($o) { $o->setAlternateResourceUrl($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'healthCheckStatus' => function (ParseNode $n) use ($o) { $o->setHealthCheckStatus($n->getEnumValue(CloudPcOnPremisesConnectionStatus::class)); },
            'healthCheckStatusDetails' => function (ParseNode $n) use ($o) { $o->setHealthCheckStatusDetails($n->getObjectValue(array(CloudPcOnPremisesConnectionStatusDetails::class, 'createFromDiscriminatorValue'))); },
            'inUse' => function (ParseNode $n) use ($o) { $o->setInUse($n->getBooleanValue()); },
            'managedBy' => function (ParseNode $n) use ($o) { $o->setManagedBy($n->getEnumValue(CloudPcManagementService::class)); },
            'organizationalUnit' => function (ParseNode $n) use ($o) { $o->setOrganizationalUnit($n->getStringValue()); },
            'resourceGroupId' => function (ParseNode $n) use ($o) { $o->setResourceGroupId($n->getStringValue()); },
            'subnetId' => function (ParseNode $n) use ($o) { $o->setSubnetId($n->getStringValue()); },
            'subscriptionId' => function (ParseNode $n) use ($o) { $o->setSubscriptionId($n->getStringValue()); },
            'subscriptionName' => function (ParseNode $n) use ($o) { $o->setSubscriptionName($n->getStringValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getEnumValue(CloudPcOnPremisesConnectionType::class)); },
            'virtualNetworkId' => function (ParseNode $n) use ($o) { $o->setVirtualNetworkId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the healthCheckStatus property value. The healthCheckStatus property
     * @return CloudPcOnPremisesConnectionStatus|null
    */
    public function getHealthCheckStatus(): ?CloudPcOnPremisesConnectionStatus {
        return $this->healthCheckStatus;
    }

    /**
     * Gets the healthCheckStatusDetails property value. The details of the connection's health checks and the corresponding results. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an Azure network connection, including healthCheckStatusDetails. Read-only.
     * @return CloudPcOnPremisesConnectionStatusDetails|null
    */
    public function getHealthCheckStatusDetails(): ?CloudPcOnPremisesConnectionStatusDetails {
        return $this->healthCheckStatusDetails;
    }

    /**
     * Gets the inUse property value. When true, the Azure network connection is in use. When false, the connection is not in use. You cannot delete a connection that’s in use. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an Azure network connection, including healthCheckStatusDetails. Read-only.
     * @return bool|null
    */
    public function getInUse(): ?bool {
        return $this->inUse;
    }

    /**
     * Gets the managedBy property value. The managedBy property
     * @return CloudPcManagementService|null
    */
    public function getManagedBy(): ?CloudPcManagementService {
        return $this->managedBy;
    }

    /**
     * Gets the organizationalUnit property value. The organizational unit (OU) in which the computer account is created. If left null, the OU that’s configured as the default (a well-known computer object container) in your Active Directory domain (OU) is used. Optional.
     * @return string|null
    */
    public function getOrganizationalUnit(): ?string {
        return $this->organizationalUnit;
    }

    /**
     * Gets the resourceGroupId property value. The ID of the target resource group. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}.
     * @return string|null
    */
    public function getResourceGroupId(): ?string {
        return $this->resourceGroupId;
    }

    /**
     * Gets the subnetId property value. The ID of the target subnet. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkId}/subnets/{subnetName}.
     * @return string|null
    */
    public function getSubnetId(): ?string {
        return $this->subnetId;
    }

    /**
     * Gets the subscriptionId property value. The ID of the target Azure subscription that’s associated with your tenant.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        return $this->subscriptionId;
    }

    /**
     * Gets the subscriptionName property value. The name of the target Azure subscription. Read-only.
     * @return string|null
    */
    public function getSubscriptionName(): ?string {
        return $this->subscriptionName;
    }

    /**
     * Gets the type property value. Specifies how the provisioned Cloud PC will be joined to Azure Active Directory. Default value is hybridAzureADJoin. Possible values are: azureADJoin, hybridAzureADJoin, unknownFutureValue.
     * @return CloudPcOnPremisesConnectionType|null
    */
    public function getType(): ?CloudPcOnPremisesConnectionType {
        return $this->type;
    }

    /**
     * Gets the virtualNetworkId property value. The ID of the target virtual network. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkName}.
     * @return string|null
    */
    public function getVirtualNetworkId(): ?string {
        return $this->virtualNetworkId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('adDomainName', $this->adDomainName);
        $writer->writeStringValue('adDomainPassword', $this->adDomainPassword);
        $writer->writeStringValue('adDomainUsername', $this->adDomainUsername);
        $writer->writeStringValue('alternateResourceUrl', $this->alternateResourceUrl);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('healthCheckStatus', $this->healthCheckStatus);
        $writer->writeObjectValue('healthCheckStatusDetails', $this->healthCheckStatusDetails);
        $writer->writeBooleanValue('inUse', $this->inUse);
        $writer->writeEnumValue('managedBy', $this->managedBy);
        $writer->writeStringValue('organizationalUnit', $this->organizationalUnit);
        $writer->writeStringValue('resourceGroupId', $this->resourceGroupId);
        $writer->writeStringValue('subnetId', $this->subnetId);
        $writer->writeStringValue('subscriptionId', $this->subscriptionId);
        $writer->writeStringValue('subscriptionName', $this->subscriptionName);
        $writer->writeEnumValue('type', $this->type);
        $writer->writeStringValue('virtualNetworkId', $this->virtualNetworkId);
    }

    /**
     * Sets the adDomainName property value. The fully qualified domain name (FQDN) of the Active Directory domain you want to join. Optional.
     *  @param string|null $value Value to set for the adDomainName property.
    */
    public function setAdDomainName(?string $value ): void {
        $this->adDomainName = $value;
    }

    /**
     * Sets the adDomainPassword property value. The password associated with adDomainUsername.
     *  @param string|null $value Value to set for the adDomainPassword property.
    */
    public function setAdDomainPassword(?string $value ): void {
        $this->adDomainPassword = $value;
    }

    /**
     * Sets the adDomainUsername property value. The username of an Active Directory account (user or service account) that has permissions to create computer objects in Active Directory. Required format: admin@contoso.com. Optional.
     *  @param string|null $value Value to set for the adDomainUsername property.
    */
    public function setAdDomainUsername(?string $value ): void {
        $this->adDomainUsername = $value;
    }

    /**
     * Sets the alternateResourceUrl property value. The interface URL of the partner service's resource that links to this Azure network connection. Returned only on $select.
     *  @param string|null $value Value to set for the alternateResourceUrl property.
    */
    public function setAlternateResourceUrl(?string $value ): void {
        $this->alternateResourceUrl = $value;
    }

    /**
     * Sets the displayName property value. The display name for the Azure network connection.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the healthCheckStatus property value. The healthCheckStatus property
     *  @param CloudPcOnPremisesConnectionStatus|null $value Value to set for the healthCheckStatus property.
    */
    public function setHealthCheckStatus(?CloudPcOnPremisesConnectionStatus $value ): void {
        $this->healthCheckStatus = $value;
    }

    /**
     * Sets the healthCheckStatusDetails property value. The details of the connection's health checks and the corresponding results. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an Azure network connection, including healthCheckStatusDetails. Read-only.
     *  @param CloudPcOnPremisesConnectionStatusDetails|null $value Value to set for the healthCheckStatusDetails property.
    */
    public function setHealthCheckStatusDetails(?CloudPcOnPremisesConnectionStatusDetails $value ): void {
        $this->healthCheckStatusDetails = $value;
    }

    /**
     * Sets the inUse property value. When true, the Azure network connection is in use. When false, the connection is not in use. You cannot delete a connection that’s in use. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an Azure network connection, including healthCheckStatusDetails. Read-only.
     *  @param bool|null $value Value to set for the inUse property.
    */
    public function setInUse(?bool $value ): void {
        $this->inUse = $value;
    }

    /**
     * Sets the managedBy property value. The managedBy property
     *  @param CloudPcManagementService|null $value Value to set for the managedBy property.
    */
    public function setManagedBy(?CloudPcManagementService $value ): void {
        $this->managedBy = $value;
    }

    /**
     * Sets the organizationalUnit property value. The organizational unit (OU) in which the computer account is created. If left null, the OU that’s configured as the default (a well-known computer object container) in your Active Directory domain (OU) is used. Optional.
     *  @param string|null $value Value to set for the organizationalUnit property.
    */
    public function setOrganizationalUnit(?string $value ): void {
        $this->organizationalUnit = $value;
    }

    /**
     * Sets the resourceGroupId property value. The ID of the target resource group. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}.
     *  @param string|null $value Value to set for the resourceGroupId property.
    */
    public function setResourceGroupId(?string $value ): void {
        $this->resourceGroupId = $value;
    }

    /**
     * Sets the subnetId property value. The ID of the target subnet. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkId}/subnets/{subnetName}.
     *  @param string|null $value Value to set for the subnetId property.
    */
    public function setSubnetId(?string $value ): void {
        $this->subnetId = $value;
    }

    /**
     * Sets the subscriptionId property value. The ID of the target Azure subscription that’s associated with your tenant.
     *  @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value ): void {
        $this->subscriptionId = $value;
    }

    /**
     * Sets the subscriptionName property value. The name of the target Azure subscription. Read-only.
     *  @param string|null $value Value to set for the subscriptionName property.
    */
    public function setSubscriptionName(?string $value ): void {
        $this->subscriptionName = $value;
    }

    /**
     * Sets the type property value. Specifies how the provisioned Cloud PC will be joined to Azure Active Directory. Default value is hybridAzureADJoin. Possible values are: azureADJoin, hybridAzureADJoin, unknownFutureValue.
     *  @param CloudPcOnPremisesConnectionType|null $value Value to set for the type property.
    */
    public function setType(?CloudPcOnPremisesConnectionType $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the virtualNetworkId property value. The ID of the target virtual network. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkName}.
     *  @param string|null $value Value to set for the virtualNetworkId property.
    */
    public function setVirtualNetworkId(?string $value ): void {
        $this->virtualNetworkId = $value;
    }

}
