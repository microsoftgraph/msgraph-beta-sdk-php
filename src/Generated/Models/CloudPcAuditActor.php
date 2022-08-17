<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcAuditActor implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $applicationDisplayName Name of the application.
    */
    private ?string $applicationDisplayName = null;
    
    /**
     * @var string|null $applicationId Azure AD application ID.
    */
    private ?string $applicationId = null;
    
    /**
     * @var string|null $ipAddress IP address.
    */
    private ?string $ipAddress = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $remoteTenantId The delegated partner tenant ID.
    */
    private ?string $remoteTenantId = null;
    
    /**
     * @var string|null $remoteUserId The delegated partner user ID.
    */
    private ?string $remoteUserId = null;
    
    /**
     * @var string|null $servicePrincipalName Service Principal Name (SPN).
    */
    private ?string $servicePrincipalName = null;
    
    /**
     * @var CloudPcAuditActorType|null $type The type property
    */
    private ?CloudPcAuditActorType $type = null;
    
    /**
     * @var string|null $userId Azure AD user ID.
    */
    private ?string $userId = null;
    
    /**
     * @var array<string>|null $userPermissions List of user permissions and application permissions when the audit event was performed.
    */
    private ?array $userPermissions = null;
    
    /**
     * @var string|null $userPrincipalName User Principal Name (UPN).
    */
    private ?string $userPrincipalName = null;
    
    /**
     * @var array<CloudPcUserRoleScopeTagInfo>|null $userRoleScopeTags List of role scope tags.
    */
    private ?array $userRoleScopeTags = null;
    
    /**
     * Instantiates a new cloudPcAuditActor and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.cloudPcAuditActor');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcAuditActor
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcAuditActor {
        return new CloudPcAuditActor();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applicationDisplayName property value. Name of the application.
     * @return string|null
    */
    public function getApplicationDisplayName(): ?string {
        return $this->applicationDisplayName;
    }

    /**
     * Gets the applicationId property value. Azure AD application ID.
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
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'remoteTenantId' => function (ParseNode $n) use ($o) { $o->setRemoteTenantId($n->getStringValue()); },
            'remoteUserId' => function (ParseNode $n) use ($o) { $o->setRemoteUserId($n->getStringValue()); },
            'servicePrincipalName' => function (ParseNode $n) use ($o) { $o->setServicePrincipalName($n->getStringValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getEnumValue(CloudPcAuditActorType::class)); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
            'userPermissions' => function (ParseNode $n) use ($o) { $o->setUserPermissions($n->getCollectionOfPrimitiveValues()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
            'userRoleScopeTags' => function (ParseNode $n) use ($o) { $o->setUserRoleScopeTags($n->getCollectionOfObjectValues(array(CloudPcUserRoleScopeTagInfo::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the ipAddress property value. IP address.
     * @return string|null
    */
    public function getIpAddress(): ?string {
        return $this->ipAddress;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the remoteTenantId property value. The delegated partner tenant ID.
     * @return string|null
    */
    public function getRemoteTenantId(): ?string {
        return $this->remoteTenantId;
    }

    /**
     * Gets the remoteUserId property value. The delegated partner user ID.
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
     * Gets the type property value. The type property
     * @return CloudPcAuditActorType|null
    */
    public function getType(): ?CloudPcAuditActorType {
        return $this->type;
    }

    /**
     * Gets the userId property value. Azure AD user ID.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userPermissions property value. List of user permissions and application permissions when the audit event was performed.
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
     * Gets the userRoleScopeTags property value. List of role scope tags.
     * @return array<CloudPcUserRoleScopeTagInfo>|null
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
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('remoteTenantId', $this->remoteTenantId);
        $writer->writeStringValue('remoteUserId', $this->remoteUserId);
        $writer->writeStringValue('servicePrincipalName', $this->servicePrincipalName);
        $writer->writeEnumValue('type', $this->type);
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
     * Sets the applicationDisplayName property value. Name of the application.
     *  @param string|null $value Value to set for the applicationDisplayName property.
    */
    public function setApplicationDisplayName(?string $value ): void {
        $this->applicationDisplayName = $value;
    }

    /**
     * Sets the applicationId property value. Azure AD application ID.
     *  @param string|null $value Value to set for the applicationId property.
    */
    public function setApplicationId(?string $value ): void {
        $this->applicationId = $value;
    }

    /**
     * Sets the ipAddress property value. IP address.
     *  @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value ): void {
        $this->ipAddress = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the remoteTenantId property value. The delegated partner tenant ID.
     *  @param string|null $value Value to set for the remoteTenantId property.
    */
    public function setRemoteTenantId(?string $value ): void {
        $this->remoteTenantId = $value;
    }

    /**
     * Sets the remoteUserId property value. The delegated partner user ID.
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
     * Sets the type property value. The type property
     *  @param CloudPcAuditActorType|null $value Value to set for the type property.
    */
    public function setType(?CloudPcAuditActorType $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the userId property value. Azure AD user ID.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the userPermissions property value. List of user permissions and application permissions when the audit event was performed.
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
     * Sets the userRoleScopeTags property value. List of role scope tags.
     *  @param array<CloudPcUserRoleScopeTagInfo>|null $value Value to set for the userRoleScopeTags property.
    */
    public function setUserRoleScopeTags(?array $value ): void {
        $this->userRoleScopeTags = $value;
    }

}
