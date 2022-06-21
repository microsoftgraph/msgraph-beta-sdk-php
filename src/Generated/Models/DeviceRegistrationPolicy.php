<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceRegistrationPolicy extends Entity implements Parsable 
{
    /**
     * @var AzureAdJoinPolicy|null $azureADJoin Specifies the authorization policy for controlling registration of new devices using Azure AD Join within your organization. Required. For more information, see What is a device identity?.
    */
    private ?AzureAdJoinPolicy $azureADJoin = null;
    
    /**
     * @var AzureADRegistrationPolicy|null $azureADRegistration Specifies the authorization policy for controlling registration of new devices using Azure AD registered within your organization. Required. For more information, see What is a device identity?.
    */
    private ?AzureADRegistrationPolicy $azureADRegistration = null;
    
    /**
     * @var string|null $description The description of the device registration policy. It is always set to Tenant-wide policy that manages intial provisioning controls using quota restrictions, additional authentication and authorization checks. Read-only.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The name of the device registration policy. It is always set to Device Registration Policy. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * @var MultiFactorAuthConfiguration|null $multiFactorAuthConfiguration Specifies the authentication policy for a user to complete registration using Azure AD Join or Azure AD registered within your organization. The possible values are: 0 (meaning notRequired), 1 (meaning required), and 2 (meaning unknownFutureValue). The default value is 0.
    */
    private ?MultiFactorAuthConfiguration $multiFactorAuthConfiguration = null;
    
    /**
     * @var int|null $userDeviceQuota Specifies the maximum number of devices that a user can have within your organization before blocking new device registrations. The default value is set to 50. If this property is not specified during the policy update operation, it is automatically reset to 0 to indicate that users are not allowed to join any devices.
    */
    private ?int $userDeviceQuota = null;
    
    /**
     * Instantiates a new deviceRegistrationPolicy and sets the default values.
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
        return $this->azureADJoin;
    }

    /**
     * Gets the azureADRegistration property value. Specifies the authorization policy for controlling registration of new devices using Azure AD registered within your organization. Required. For more information, see What is a device identity?.
     * @return AzureADRegistrationPolicy|null
    */
    public function getAzureADRegistration(): ?AzureADRegistrationPolicy {
        return $this->azureADRegistration;
    }

    /**
     * Gets the description property value. The description of the device registration policy. It is always set to Tenant-wide policy that manages intial provisioning controls using quota restrictions, additional authentication and authorization checks. Read-only.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The name of the device registration policy. It is always set to Device Registration Policy. Read-only.
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
            'azureADJoin' => function (ParseNode $n) use ($o) { $o->setAzureADJoin($n->getObjectValue(array(AzureAdJoinPolicy::class, 'createFromDiscriminatorValue'))); },
            'azureADRegistration' => function (ParseNode $n) use ($o) { $o->setAzureADRegistration($n->getObjectValue(array(AzureADRegistrationPolicy::class, 'createFromDiscriminatorValue'))); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'multiFactorAuthConfiguration' => function (ParseNode $n) use ($o) { $o->setMultiFactorAuthConfiguration($n->getEnumValue(MultiFactorAuthConfiguration::class)); },
            'userDeviceQuota' => function (ParseNode $n) use ($o) { $o->setUserDeviceQuota($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the multiFactorAuthConfiguration property value. Specifies the authentication policy for a user to complete registration using Azure AD Join or Azure AD registered within your organization. The possible values are: 0 (meaning notRequired), 1 (meaning required), and 2 (meaning unknownFutureValue). The default value is 0.
     * @return MultiFactorAuthConfiguration|null
    */
    public function getMultiFactorAuthConfiguration(): ?MultiFactorAuthConfiguration {
        return $this->multiFactorAuthConfiguration;
    }

    /**
     * Gets the userDeviceQuota property value. Specifies the maximum number of devices that a user can have within your organization before blocking new device registrations. The default value is set to 50. If this property is not specified during the policy update operation, it is automatically reset to 0 to indicate that users are not allowed to join any devices.
     * @return int|null
    */
    public function getUserDeviceQuota(): ?int {
        return $this->userDeviceQuota;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('azureADJoin', $this->azureADJoin);
        $writer->writeObjectValue('azureADRegistration', $this->azureADRegistration);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('multiFactorAuthConfiguration', $this->multiFactorAuthConfiguration);
        $writer->writeIntegerValue('userDeviceQuota', $this->userDeviceQuota);
    }

    /**
     * Sets the azureADJoin property value. Specifies the authorization policy for controlling registration of new devices using Azure AD Join within your organization. Required. For more information, see What is a device identity?.
     *  @param AzureAdJoinPolicy|null $value Value to set for the azureADJoin property.
    */
    public function setAzureADJoin(?AzureAdJoinPolicy $value ): void {
        $this->azureADJoin = $value;
    }

    /**
     * Sets the azureADRegistration property value. Specifies the authorization policy for controlling registration of new devices using Azure AD registered within your organization. Required. For more information, see What is a device identity?.
     *  @param AzureADRegistrationPolicy|null $value Value to set for the azureADRegistration property.
    */
    public function setAzureADRegistration(?AzureADRegistrationPolicy $value ): void {
        $this->azureADRegistration = $value;
    }

    /**
     * Sets the description property value. The description of the device registration policy. It is always set to Tenant-wide policy that manages intial provisioning controls using quota restrictions, additional authentication and authorization checks. Read-only.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The name of the device registration policy. It is always set to Device Registration Policy. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the multiFactorAuthConfiguration property value. Specifies the authentication policy for a user to complete registration using Azure AD Join or Azure AD registered within your organization. The possible values are: 0 (meaning notRequired), 1 (meaning required), and 2 (meaning unknownFutureValue). The default value is 0.
     *  @param MultiFactorAuthConfiguration|null $value Value to set for the multiFactorAuthConfiguration property.
    */
    public function setMultiFactorAuthConfiguration(?MultiFactorAuthConfiguration $value ): void {
        $this->multiFactorAuthConfiguration = $value;
    }

    /**
     * Sets the userDeviceQuota property value. Specifies the maximum number of devices that a user can have within your organization before blocking new device registrations. The default value is set to 50. If this property is not specified during the policy update operation, it is automatically reset to 0 to indicate that users are not allowed to join any devices.
     *  @param int|null $value Value to set for the userDeviceQuota property.
    */
    public function setUserDeviceQuota(?int $value ): void {
        $this->userDeviceQuota = $value;
    }

}
