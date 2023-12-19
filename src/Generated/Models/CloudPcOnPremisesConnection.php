<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CloudPcOnPremisesConnection extends Entity implements Parsable 
{
    /**
     * Instantiates a new cloudPcOnPremisesConnection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('adDomainName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'adDomainName'");
    }

    /**
     * Gets the adDomainPassword property value. The password associated with adDomainUsername.
     * @return string|null
    */
    public function getAdDomainPassword(): ?string {
        $val = $this->getBackingStore()->get('adDomainPassword');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'adDomainPassword'");
    }

    /**
     * Gets the adDomainUsername property value. The username of an Active Directory account (user or service account) that has permissions to create computer objects in Active Directory. Required format: admin@contoso.com. Optional.
     * @return string|null
    */
    public function getAdDomainUsername(): ?string {
        $val = $this->getBackingStore()->get('adDomainUsername');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'adDomainUsername'");
    }

    /**
     * Gets the alternateResourceUrl property value. The interface URL of the partner service's resource that links to this Azure network connection. Returned only on $select.
     * @return string|null
    */
    public function getAlternateResourceUrl(): ?string {
        $val = $this->getBackingStore()->get('alternateResourceUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alternateResourceUrl'");
    }

    /**
     * Gets the connectionType property value. The connectionType property
     * @return CloudPcOnPremisesConnection_connectionType|null
    */
    public function getConnectionType(): ?CloudPcOnPremisesConnection_connectionType {
        $val = $this->getBackingStore()->get('connectionType');
        if (is_null($val) || $val instanceof CloudPcOnPremisesConnection_connectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectionType'");
    }

    /**
     * Gets the displayName property value. The display name for the Azure network connection.
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
            'adDomainName' => fn(ParseNode $n) => $o->setAdDomainName($n->getStringValue()),
            'adDomainPassword' => fn(ParseNode $n) => $o->setAdDomainPassword($n->getStringValue()),
            'adDomainUsername' => fn(ParseNode $n) => $o->setAdDomainUsername($n->getStringValue()),
            'alternateResourceUrl' => fn(ParseNode $n) => $o->setAlternateResourceUrl($n->getStringValue()),
            'connectionType' => fn(ParseNode $n) => $o->setConnectionType($n->getEnumValue(CloudPcOnPremisesConnection_connectionType::class)),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'healthCheckStatus' => fn(ParseNode $n) => $o->setHealthCheckStatus($n->getEnumValue(CloudPcOnPremisesConnectionStatus::class)),
            'healthCheckStatusDetail' => fn(ParseNode $n) => $o->setHealthCheckStatusDetail($n->getObjectValue([CloudPcOnPremisesConnectionStatusDetail::class, 'createFromDiscriminatorValue'])),
            'healthCheckStatusDetails' => fn(ParseNode $n) => $o->setHealthCheckStatusDetails($n->getObjectValue([CloudPcOnPremisesConnectionStatusDetails::class, 'createFromDiscriminatorValue'])),
            'inUse' => fn(ParseNode $n) => $o->setInUse($n->getBooleanValue()),
            'managedBy' => fn(ParseNode $n) => $o->setManagedBy($n->getEnumValue(CloudPcManagementService::class)),
            'organizationalUnit' => fn(ParseNode $n) => $o->setOrganizationalUnit($n->getStringValue()),
            'resourceGroupId' => fn(ParseNode $n) => $o->setResourceGroupId($n->getStringValue()),
            'scopeIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setScopeIds($val);
            },
            'subnetId' => fn(ParseNode $n) => $o->setSubnetId($n->getStringValue()),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
            'subscriptionName' => fn(ParseNode $n) => $o->setSubscriptionName($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(CloudPcOnPremisesConnection_type::class)),
            'virtualNetworkId' => fn(ParseNode $n) => $o->setVirtualNetworkId($n->getStringValue()),
            'virtualNetworkLocation' => fn(ParseNode $n) => $o->setVirtualNetworkLocation($n->getStringValue()),
        ]);
    }

    /**
     * Gets the healthCheckStatus property value. The healthCheckStatus property
     * @return CloudPcOnPremisesConnectionStatus|null
    */
    public function getHealthCheckStatus(): ?CloudPcOnPremisesConnectionStatus {
        $val = $this->getBackingStore()->get('healthCheckStatus');
        if (is_null($val) || $val instanceof CloudPcOnPremisesConnectionStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'healthCheckStatus'");
    }

    /**
     * Gets the healthCheckStatusDetail property value. The healthCheckStatusDetail property
     * @return CloudPcOnPremisesConnectionStatusDetail|null
    */
    public function getHealthCheckStatusDetail(): ?CloudPcOnPremisesConnectionStatusDetail {
        $val = $this->getBackingStore()->get('healthCheckStatusDetail');
        if (is_null($val) || $val instanceof CloudPcOnPremisesConnectionStatusDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'healthCheckStatusDetail'");
    }

    /**
     * Gets the healthCheckStatusDetails property value. The details of the connection's health checks and the corresponding results. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an Azure network connection, including healthCheckStatusDetails. Read-only.
     * @return CloudPcOnPremisesConnectionStatusDetails|null
    */
    public function getHealthCheckStatusDetails(): ?CloudPcOnPremisesConnectionStatusDetails {
        $val = $this->getBackingStore()->get('healthCheckStatusDetails');
        if (is_null($val) || $val instanceof CloudPcOnPremisesConnectionStatusDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'healthCheckStatusDetails'");
    }

    /**
     * Gets the inUse property value. When true, the Azure network connection is in use. When false, the connection isn't in use. You can't delete a connection that’s in use. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an Azure network connection, including healthCheckStatusDetails. Read-only.
     * @return bool|null
    */
    public function getInUse(): ?bool {
        $val = $this->getBackingStore()->get('inUse');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inUse'");
    }

    /**
     * Gets the managedBy property value. The managedBy property
     * @return CloudPcManagementService|null
    */
    public function getManagedBy(): ?CloudPcManagementService {
        $val = $this->getBackingStore()->get('managedBy');
        if (is_null($val) || $val instanceof CloudPcManagementService) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedBy'");
    }

    /**
     * Gets the organizationalUnit property value. The organizational unit (OU) in which the computer account is created. If left null, the OU that’s configured as the default (a well-known computer object container) in your Active Directory domain (OU) is used. Optional.
     * @return string|null
    */
    public function getOrganizationalUnit(): ?string {
        $val = $this->getBackingStore()->get('organizationalUnit');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizationalUnit'");
    }

    /**
     * Gets the resourceGroupId property value. The ID of the target resource group. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}.
     * @return string|null
    */
    public function getResourceGroupId(): ?string {
        $val = $this->getBackingStore()->get('resourceGroupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceGroupId'");
    }

    /**
     * Gets the scopeIds property value. The scopeIds property
     * @return array<string>|null
    */
    public function getScopeIds(): ?array {
        $val = $this->getBackingStore()->get('scopeIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopeIds'");
    }

    /**
     * Gets the subnetId property value. The ID of the target subnet. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkId}/subnets/{subnetName}.
     * @return string|null
    */
    public function getSubnetId(): ?string {
        $val = $this->getBackingStore()->get('subnetId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subnetId'");
    }

    /**
     * Gets the subscriptionId property value. The ID of the target Azure subscription that’s associated with your tenant.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        $val = $this->getBackingStore()->get('subscriptionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subscriptionId'");
    }

    /**
     * Gets the subscriptionName property value. The name of the target Azure subscription. Read-only.
     * @return string|null
    */
    public function getSubscriptionName(): ?string {
        $val = $this->getBackingStore()->get('subscriptionName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subscriptionName'");
    }

    /**
     * Gets the type property value. Specifies how the provisioned Cloud PC is joined to Microsoft Entra ID. Default value is hybridAzureADJoin. Possible values are: azureADJoin, hybridAzureADJoin, unknownFutureValue.
     * @return CloudPcOnPremisesConnection_type|null
    */
    public function getType(): ?CloudPcOnPremisesConnection_type {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof CloudPcOnPremisesConnection_type) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Gets the virtualNetworkId property value. The ID of the target virtual network. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkName}.
     * @return string|null
    */
    public function getVirtualNetworkId(): ?string {
        $val = $this->getBackingStore()->get('virtualNetworkId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'virtualNetworkId'");
    }

    /**
     * Gets the virtualNetworkLocation property value. Indicates resource location of the virtual target network. Read-only, computed value.
     * @return string|null
    */
    public function getVirtualNetworkLocation(): ?string {
        $val = $this->getBackingStore()->get('virtualNetworkLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'virtualNetworkLocation'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('adDomainName', $this->getAdDomainName());
        $writer->writeStringValue('adDomainPassword', $this->getAdDomainPassword());
        $writer->writeStringValue('adDomainUsername', $this->getAdDomainUsername());
        $writer->writeStringValue('alternateResourceUrl', $this->getAlternateResourceUrl());
        $writer->writeEnumValue('connectionType', $this->getConnectionType());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('healthCheckStatus', $this->getHealthCheckStatus());
        $writer->writeObjectValue('healthCheckStatusDetail', $this->getHealthCheckStatusDetail());
        $writer->writeObjectValue('healthCheckStatusDetails', $this->getHealthCheckStatusDetails());
        $writer->writeBooleanValue('inUse', $this->getInUse());
        $writer->writeEnumValue('managedBy', $this->getManagedBy());
        $writer->writeStringValue('organizationalUnit', $this->getOrganizationalUnit());
        $writer->writeStringValue('resourceGroupId', $this->getResourceGroupId());
        $writer->writeCollectionOfPrimitiveValues('scopeIds', $this->getScopeIds());
        $writer->writeStringValue('subnetId', $this->getSubnetId());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
        $writer->writeStringValue('subscriptionName', $this->getSubscriptionName());
        $writer->writeEnumValue('type', $this->getType());
        $writer->writeStringValue('virtualNetworkId', $this->getVirtualNetworkId());
        $writer->writeStringValue('virtualNetworkLocation', $this->getVirtualNetworkLocation());
    }

    /**
     * Sets the adDomainName property value. The fully qualified domain name (FQDN) of the Active Directory domain you want to join. Optional.
     * @param string|null $value Value to set for the adDomainName property.
    */
    public function setAdDomainName(?string $value): void {
        $this->getBackingStore()->set('adDomainName', $value);
    }

    /**
     * Sets the adDomainPassword property value. The password associated with adDomainUsername.
     * @param string|null $value Value to set for the adDomainPassword property.
    */
    public function setAdDomainPassword(?string $value): void {
        $this->getBackingStore()->set('adDomainPassword', $value);
    }

    /**
     * Sets the adDomainUsername property value. The username of an Active Directory account (user or service account) that has permissions to create computer objects in Active Directory. Required format: admin@contoso.com. Optional.
     * @param string|null $value Value to set for the adDomainUsername property.
    */
    public function setAdDomainUsername(?string $value): void {
        $this->getBackingStore()->set('adDomainUsername', $value);
    }

    /**
     * Sets the alternateResourceUrl property value. The interface URL of the partner service's resource that links to this Azure network connection. Returned only on $select.
     * @param string|null $value Value to set for the alternateResourceUrl property.
    */
    public function setAlternateResourceUrl(?string $value): void {
        $this->getBackingStore()->set('alternateResourceUrl', $value);
    }

    /**
     * Sets the connectionType property value. The connectionType property
     * @param CloudPcOnPremisesConnection_connectionType|null $value Value to set for the connectionType property.
    */
    public function setConnectionType(?CloudPcOnPremisesConnection_connectionType $value): void {
        $this->getBackingStore()->set('connectionType', $value);
    }

    /**
     * Sets the displayName property value. The display name for the Azure network connection.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the healthCheckStatus property value. The healthCheckStatus property
     * @param CloudPcOnPremisesConnectionStatus|null $value Value to set for the healthCheckStatus property.
    */
    public function setHealthCheckStatus(?CloudPcOnPremisesConnectionStatus $value): void {
        $this->getBackingStore()->set('healthCheckStatus', $value);
    }

    /**
     * Sets the healthCheckStatusDetail property value. The healthCheckStatusDetail property
     * @param CloudPcOnPremisesConnectionStatusDetail|null $value Value to set for the healthCheckStatusDetail property.
    */
    public function setHealthCheckStatusDetail(?CloudPcOnPremisesConnectionStatusDetail $value): void {
        $this->getBackingStore()->set('healthCheckStatusDetail', $value);
    }

    /**
     * Sets the healthCheckStatusDetails property value. The details of the connection's health checks and the corresponding results. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an Azure network connection, including healthCheckStatusDetails. Read-only.
     * @param CloudPcOnPremisesConnectionStatusDetails|null $value Value to set for the healthCheckStatusDetails property.
    */
    public function setHealthCheckStatusDetails(?CloudPcOnPremisesConnectionStatusDetails $value): void {
        $this->getBackingStore()->set('healthCheckStatusDetails', $value);
    }

    /**
     * Sets the inUse property value. When true, the Azure network connection is in use. When false, the connection isn't in use. You can't delete a connection that’s in use. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an Azure network connection, including healthCheckStatusDetails. Read-only.
     * @param bool|null $value Value to set for the inUse property.
    */
    public function setInUse(?bool $value): void {
        $this->getBackingStore()->set('inUse', $value);
    }

    /**
     * Sets the managedBy property value. The managedBy property
     * @param CloudPcManagementService|null $value Value to set for the managedBy property.
    */
    public function setManagedBy(?CloudPcManagementService $value): void {
        $this->getBackingStore()->set('managedBy', $value);
    }

    /**
     * Sets the organizationalUnit property value. The organizational unit (OU) in which the computer account is created. If left null, the OU that’s configured as the default (a well-known computer object container) in your Active Directory domain (OU) is used. Optional.
     * @param string|null $value Value to set for the organizationalUnit property.
    */
    public function setOrganizationalUnit(?string $value): void {
        $this->getBackingStore()->set('organizationalUnit', $value);
    }

    /**
     * Sets the resourceGroupId property value. The ID of the target resource group. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}.
     * @param string|null $value Value to set for the resourceGroupId property.
    */
    public function setResourceGroupId(?string $value): void {
        $this->getBackingStore()->set('resourceGroupId', $value);
    }

    /**
     * Sets the scopeIds property value. The scopeIds property
     * @param array<string>|null $value Value to set for the scopeIds property.
    */
    public function setScopeIds(?array $value): void {
        $this->getBackingStore()->set('scopeIds', $value);
    }

    /**
     * Sets the subnetId property value. The ID of the target subnet. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkId}/subnets/{subnetName}.
     * @param string|null $value Value to set for the subnetId property.
    */
    public function setSubnetId(?string $value): void {
        $this->getBackingStore()->set('subnetId', $value);
    }

    /**
     * Sets the subscriptionId property value. The ID of the target Azure subscription that’s associated with your tenant.
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->getBackingStore()->set('subscriptionId', $value);
    }

    /**
     * Sets the subscriptionName property value. The name of the target Azure subscription. Read-only.
     * @param string|null $value Value to set for the subscriptionName property.
    */
    public function setSubscriptionName(?string $value): void {
        $this->getBackingStore()->set('subscriptionName', $value);
    }

    /**
     * Sets the type property value. Specifies how the provisioned Cloud PC is joined to Microsoft Entra ID. Default value is hybridAzureADJoin. Possible values are: azureADJoin, hybridAzureADJoin, unknownFutureValue.
     * @param CloudPcOnPremisesConnection_type|null $value Value to set for the type property.
    */
    public function setType(?CloudPcOnPremisesConnection_type $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the virtualNetworkId property value. The ID of the target virtual network. Required format: /subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkName}.
     * @param string|null $value Value to set for the virtualNetworkId property.
    */
    public function setVirtualNetworkId(?string $value): void {
        $this->getBackingStore()->set('virtualNetworkId', $value);
    }

    /**
     * Sets the virtualNetworkLocation property value. Indicates resource location of the virtual target network. Read-only, computed value.
     * @param string|null $value Value to set for the virtualNetworkLocation property.
    */
    public function setVirtualNetworkLocation(?string $value): void {
        $this->getBackingStore()->set('virtualNetworkLocation', $value);
    }

}
