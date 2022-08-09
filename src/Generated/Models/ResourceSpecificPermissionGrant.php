<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ResourceSpecificPermissionGrant extends DirectoryObject implements Parsable 
{
    /**
     * @var string|null $clientAppId ID of the service principal of the Azure AD app that has been granted access. Read-only.
    */
    private ?string $clientAppId = null;
    
    /**
     * @var string|null $clientId ID of the Azure AD app that has been granted access. Read-only.
    */
    private ?string $clientId = null;
    
    /**
     * @var string|null $permission The name of the resource-specific permission. Read-only.
    */
    private ?string $permission = null;
    
    /**
     * @var string|null $permissionType The type of permission. Possible values are: Application, Delegated. Read-only.
    */
    private ?string $permissionType = null;
    
    /**
     * @var string|null $resourceAppId ID of the Azure AD app that is hosting the resource. Read-only.
    */
    private ?string $resourceAppId = null;
    
    /**
     * Instantiates a new resourceSpecificPermissionGrant and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.resourceSpecificPermissionGrant');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResourceSpecificPermissionGrant
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResourceSpecificPermissionGrant {
        return new ResourceSpecificPermissionGrant();
    }

    /**
     * Gets the clientAppId property value. ID of the service principal of the Azure AD app that has been granted access. Read-only.
     * @return string|null
    */
    public function getClientAppId(): ?string {
        return $this->clientAppId;
    }

    /**
     * Gets the clientId property value. ID of the Azure AD app that has been granted access. Read-only.
     * @return string|null
    */
    public function getClientId(): ?string {
        return $this->clientId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'clientAppId' => function (ParseNode $n) use ($o) { $o->setClientAppId($n->getStringValue()); },
            'clientId' => function (ParseNode $n) use ($o) { $o->setClientId($n->getStringValue()); },
            'permission' => function (ParseNode $n) use ($o) { $o->setPermission($n->getStringValue()); },
            'permissionType' => function (ParseNode $n) use ($o) { $o->setPermissionType($n->getStringValue()); },
            'resourceAppId' => function (ParseNode $n) use ($o) { $o->setResourceAppId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the permission property value. The name of the resource-specific permission. Read-only.
     * @return string|null
    */
    public function getPermission(): ?string {
        return $this->permission;
    }

    /**
     * Gets the permissionType property value. The type of permission. Possible values are: Application, Delegated. Read-only.
     * @return string|null
    */
    public function getPermissionType(): ?string {
        return $this->permissionType;
    }

    /**
     * Gets the resourceAppId property value. ID of the Azure AD app that is hosting the resource. Read-only.
     * @return string|null
    */
    public function getResourceAppId(): ?string {
        return $this->resourceAppId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('clientAppId', $this->clientAppId);
        $writer->writeStringValue('clientId', $this->clientId);
        $writer->writeStringValue('permission', $this->permission);
        $writer->writeStringValue('permissionType', $this->permissionType);
        $writer->writeStringValue('resourceAppId', $this->resourceAppId);
    }

    /**
     * Sets the clientAppId property value. ID of the service principal of the Azure AD app that has been granted access. Read-only.
     *  @param string|null $value Value to set for the clientAppId property.
    */
    public function setClientAppId(?string $value ): void {
        $this->clientAppId = $value;
    }

    /**
     * Sets the clientId property value. ID of the Azure AD app that has been granted access. Read-only.
     *  @param string|null $value Value to set for the clientId property.
    */
    public function setClientId(?string $value ): void {
        $this->clientId = $value;
    }

    /**
     * Sets the permission property value. The name of the resource-specific permission. Read-only.
     *  @param string|null $value Value to set for the permission property.
    */
    public function setPermission(?string $value ): void {
        $this->permission = $value;
    }

    /**
     * Sets the permissionType property value. The type of permission. Possible values are: Application, Delegated. Read-only.
     *  @param string|null $value Value to set for the permissionType property.
    */
    public function setPermissionType(?string $value ): void {
        $this->permissionType = $value;
    }

    /**
     * Sets the resourceAppId property value. ID of the Azure AD app that is hosting the resource. Read-only.
     *  @param string|null $value Value to set for the resourceAppId property.
    */
    public function setResourceAppId(?string $value ): void {
        $this->resourceAppId = $value;
    }

}
