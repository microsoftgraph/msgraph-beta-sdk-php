<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuditActor implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $applicationDisplayName Name of the Application.
    */
    private ?string $applicationDisplayName = null;
    
    /**
     * @var string|null $applicationId AAD Application Id.
    */
    private ?string $applicationId = null;
    
    /**
     * @var string|null $ipAddress IPAddress.
    */
    private ?string $ipAddress = null;
    
    /**
     * @var string|null $remoteTenantId Remote Tenant Id
    */
    private ?string $remoteTenantId = null;
    
    /**
     * @var string|null $remoteUserId Remote User Id
    */
    private ?string $remoteUserId = null;
    
    /**
     * @var string|null $servicePrincipalName Service Principal Name (SPN).
    */
    private ?string $servicePrincipalName = null;
    
    /**
     * @var string|null $type Actor Type.
    */
    private ?string $type = null;
    
    /**
     * @var string|null $userId User Id.
    */
    private ?string $userId = null;
    
    /**
     * @var array<string>|null $userPermissions List of user permissions when the audit was performed.
    */
    private ?array $userPermissions = null;
    
    /**
     * @var string|null $userPrincipalName User Principal Name (UPN).
    */
    private ?string $userPrincipalName = null;
    
    /**
     * @var array<RoleScopeTagInfo>|null $userRoleScopeTags List of user scope tags when the audit was performed.
    */
    private ?array $userRoleScopeTags = null;
    
    /**
     * Instantiates a new auditActor and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuditActor
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuditActor {
        return new AuditActor();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applicationDisplayName property value. Name of the Application.
     * @return string|null
    */
    public function getApplicationDisplayName(): ?string {
        return $this->applicationDisplayName;
    }

    /**
     * Gets the applicationId property value. AAD Application Id.
     * @return string|null
    */
    public function getApplicationId(): ?string {
        return $this->applicationId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicationDisplayName' => function (ParseNode $n) use ($o) { $o->setApplicationDisplayName($n->getStringValue()); },
            'applicationId' => function (ParseNode $n) use ($o) { $o->setApplicationId($n->getStringValue()); },
            'ipAddress' => function (ParseNode $n) use ($o) { $o->setIpAddress($n->getStringValue()); },
            'remoteTenantId' => function (ParseNode $n) use ($o) { $o->setRemoteTenantId($n->getStringValue()); },
            'remoteUserId' => function (ParseNode $n) use ($o) { $o->setRemoteUserId($n->getStringValue()); },
            'servicePrincipalName' => function (ParseNode $n) use ($o) { $o->setServicePrincipalName($n->getStringValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getStringValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
            'userPermissions' => function (ParseNode $n) use ($o) { $o->setUserPermissions($n->getCollectionOfPrimitiveValues()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
            'userRoleScopeTags' => function (ParseNode $n) use ($o) { $o->setUserRoleScopeTags($n->getCollectionOfObjectValues(array(RoleScopeTagInfo::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the ipAddress property value. IPAddress.
     * @return string|null
    */
    public function getIpAddress(): ?string {
        return $this->ipAddress;
    }

    /**
     * Gets the remoteTenantId property value. Remote Tenant Id
     * @return string|null
    */
    public function getRemoteTenantId(): ?string {
        return $this->remoteTenantId;
    }

    /**
     * Gets the remoteUserId property value. Remote User Id
     * @return string|null
    */
    public function getRemoteUserId(): ?string {
        return $this->remoteUserId;
    }

    /**
     * Gets the servicePrincipalName property value. Service Principal Name (SPN).
     * @return string|null
    */
    public function getServicePrincipalName(): ?string {
        return $this->servicePrincipalName;
    }

    /**
     * Gets the type property value. Actor Type.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Gets the userId property value. User Id.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userPermissions property value. List of user permissions when the audit was performed.
     * @return array<string>|null
    */
    public function getUserPermissions(): ?array {
        return $this->userPermissions;
    }

    /**
     * Gets the userPrincipalName property value. User Principal Name (UPN).
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Gets the userRoleScopeTags property value. List of user scope tags when the audit was performed.
     * @return array<RoleScopeTagInfo>|null
    */
    public function getUserRoleScopeTags(): ?array {
        return $this->userRoleScopeTags;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('applicationDisplayName', $this->applicationDisplayName);
        $writer->writeStringValue('applicationId', $this->applicationId);
        $writer->writeStringValue('ipAddress', $this->ipAddress);
        $writer->writeStringValue('remoteTenantId', $this->remoteTenantId);
        $writer->writeStringValue('remoteUserId', $this->remoteUserId);
        $writer->writeStringValue('servicePrincipalName', $this->servicePrincipalName);
        $writer->writeStringValue('type', $this->type);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeCollectionOfPrimitiveValues('userPermissions', $this->userPermissions);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
        $writer->writeCollectionOfObjectValues('userRoleScopeTags', $this->userRoleScopeTags);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the applicationDisplayName property value. Name of the Application.
     *  @param string|null $value Value to set for the applicationDisplayName property.
    */
    public function setApplicationDisplayName(?string $value ): void {
        $this->applicationDisplayName = $value;
    }

    /**
     * Sets the applicationId property value. AAD Application Id.
     *  @param string|null $value Value to set for the applicationId property.
    */
    public function setApplicationId(?string $value ): void {
        $this->applicationId = $value;
    }

    /**
     * Sets the ipAddress property value. IPAddress.
     *  @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value ): void {
        $this->ipAddress = $value;
    }

    /**
     * Sets the remoteTenantId property value. Remote Tenant Id
     *  @param string|null $value Value to set for the remoteTenantId property.
    */
    public function setRemoteTenantId(?string $value ): void {
        $this->remoteTenantId = $value;
    }

    /**
     * Sets the remoteUserId property value. Remote User Id
     *  @param string|null $value Value to set for the remoteUserId property.
    */
    public function setRemoteUserId(?string $value ): void {
        $this->remoteUserId = $value;
    }

    /**
     * Sets the servicePrincipalName property value. Service Principal Name (SPN).
     *  @param string|null $value Value to set for the servicePrincipalName property.
    */
    public function setServicePrincipalName(?string $value ): void {
        $this->servicePrincipalName = $value;
    }

    /**
     * Sets the type property value. Actor Type.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the userId property value. User Id.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the userPermissions property value. List of user permissions when the audit was performed.
     *  @param array<string>|null $value Value to set for the userPermissions property.
    */
    public function setUserPermissions(?array $value ): void {
        $this->userPermissions = $value;
    }

    /**
     * Sets the userPrincipalName property value. User Principal Name (UPN).
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

    /**
     * Sets the userRoleScopeTags property value. List of user scope tags when the audit was performed.
     *  @param array<RoleScopeTagInfo>|null $value Value to set for the userRoleScopeTags property.
    */
    public function setUserRoleScopeTags(?array $value ): void {
        $this->userRoleScopeTags = $value;
    }

}
