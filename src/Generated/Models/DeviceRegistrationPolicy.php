<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceRegistrationPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceRegistrationPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceRegistrationPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceRegistrationPolicy {
        return new DeviceRegistrationPolicy();
    }

    /**
     * Gets the azureADJoin property value. Specifies the authorization policy for controlling registration of new devices using Azure AD Join within your organization. Required. For more information, see What is a device identity?.
     * @return AzureAdJoinPolicy|null
    */
    public function getAzureADJoin(): ?AzureAdJoinPolicy {
        return $this->getBackingStore()->get('azureADJoin');
    }

    /**
     * Gets the azureADRegistration property value. Specifies the authorization policy for controlling registration of new devices using Azure AD registered within your organization. Required. For more information, see What is a device identity?.
     * @return AzureADRegistrationPolicy|null
    */
    public function getAzureADRegistration(): ?AzureADRegistrationPolicy {
        return $this->getBackingStore()->get('azureADRegistration');
    }

    /**
     * Gets the description property value. The description of the device registration policy. It is always set to Tenant-wide policy that manages intial provisioning controls using quota restrictions, additional authentication and authorization checks. Read-only.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The name of the device registration policy. It is always set to Device Registration Policy. Read-only.
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
            'azureADJoin' => fn(ParseNode $n) => $o->setAzureADJoin($n->getObjectValue([AzureAdJoinPolicy::class, 'createFromDiscriminatorValue'])),
            'azureADRegistration' => fn(ParseNode $n) => $o->setAzureADRegistration($n->getObjectValue([AzureADRegistrationPolicy::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'multiFactorAuthConfiguration' => fn(ParseNode $n) => $o->setMultiFactorAuthConfiguration($n->getEnumValue(MultiFactorAuthConfiguration::class)),
            'userDeviceQuota' => fn(ParseNode $n) => $o->setUserDeviceQuota($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the multiFactorAuthConfiguration property value. The multiFactorAuthConfiguration property
     * @return MultiFactorAuthConfiguration|null
    */
    public function getMultiFactorAuthConfiguration(): ?MultiFactorAuthConfiguration {
        return $this->getBackingStore()->get('multiFactorAuthConfiguration');
    }

    /**
     * Gets the userDeviceQuota property value. Specifies the maximum number of devices that a user can have within your organization before blocking new device registrations. The default value is set to 50. If this property is not specified during the policy update operation, it is automatically reset to 0 to indicate that users are not allowed to join any devices.
     * @return int|null
    */
    public function getUserDeviceQuota(): ?int {
        return $this->getBackingStore()->get('userDeviceQuota');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('azureADJoin', $this->getAzureADJoin());
        $writer->writeObjectValue('azureADRegistration', $this->getAzureADRegistration());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('multiFactorAuthConfiguration', $this->getMultiFactorAuthConfiguration());
        $writer->writeIntegerValue('userDeviceQuota', $this->getUserDeviceQuota());
    }

    /**
     * Sets the azureADJoin property value. Specifies the authorization policy for controlling registration of new devices using Azure AD Join within your organization. Required. For more information, see What is a device identity?.
     * @param AzureAdJoinPolicy|null $value Value to set for the azureADJoin property.
    */
    public function setAzureADJoin(?AzureAdJoinPolicy $value): void {
        $this->getBackingStore()->set('azureADJoin', $value);
    }

    /**
     * Sets the azureADRegistration property value. Specifies the authorization policy for controlling registration of new devices using Azure AD registered within your organization. Required. For more information, see What is a device identity?.
     * @param AzureADRegistrationPolicy|null $value Value to set for the azureADRegistration property.
    */
    public function setAzureADRegistration(?AzureADRegistrationPolicy $value): void {
        $this->getBackingStore()->set('azureADRegistration', $value);
    }

    /**
     * Sets the description property value. The description of the device registration policy. It is always set to Tenant-wide policy that manages intial provisioning controls using quota restrictions, additional authentication and authorization checks. Read-only.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The name of the device registration policy. It is always set to Device Registration Policy. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the multiFactorAuthConfiguration property value. The multiFactorAuthConfiguration property
     * @param MultiFactorAuthConfiguration|null $value Value to set for the multiFactorAuthConfiguration property.
    */
    public function setMultiFactorAuthConfiguration(?MultiFactorAuthConfiguration $value): void {
        $this->getBackingStore()->set('multiFactorAuthConfiguration', $value);
    }

    /**
     * Sets the userDeviceQuota property value. Specifies the maximum number of devices that a user can have within your organization before blocking new device registrations. The default value is set to 50. If this property is not specified during the policy update operation, it is automatically reset to 0 to indicate that users are not allowed to join any devices.
     * @param int|null $value Value to set for the userDeviceQuota property.
    */
    public function setUserDeviceQuota(?int $value): void {
        $this->getBackingStore()->set('userDeviceQuota', $value);
    }

}
