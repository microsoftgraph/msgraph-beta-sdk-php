<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPcAuditActor implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new cloudPcAuditActor and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
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
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the applicationDisplayName property value. Name of the application.
     * @return string|null
    */
    public function getApplicationDisplayName(): ?string {
        return $this->getBackingStore()->get('applicationDisplayName');
    }

    /**
     * Gets the applicationId property value. Azure AD application ID.
     * @return string|null
    */
    public function getApplicationId(): ?string {
        return $this->getBackingStore()->get('applicationId');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicationDisplayName' => fn(ParseNode $n) => $o->setApplicationDisplayName($n->getStringValue()),
            'applicationId' => fn(ParseNode $n) => $o->setApplicationId($n->getStringValue()),
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'remoteTenantId' => fn(ParseNode $n) => $o->setRemoteTenantId($n->getStringValue()),
            'remoteUserId' => fn(ParseNode $n) => $o->setRemoteUserId($n->getStringValue()),
            'servicePrincipalName' => fn(ParseNode $n) => $o->setServicePrincipalName($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(CloudPcAuditActorType::class)),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userPermissions' => fn(ParseNode $n) => $o->setUserPermissions($n->getCollectionOfPrimitiveValues()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
            'userRoleScopeTags' => fn(ParseNode $n) => $o->setUserRoleScopeTags($n->getCollectionOfObjectValues([CloudPcUserRoleScopeTagInfo::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the ipAddress property value. IP address.
     * @return string|null
    */
    public function getIpAddress(): ?string {
        return $this->getBackingStore()->get('ipAddress');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the remoteTenantId property value. The delegated partner tenant ID.
     * @return string|null
    */
    public function getRemoteTenantId(): ?string {
        return $this->getBackingStore()->get('remoteTenantId');
    }

    /**
     * Gets the remoteUserId property value. The delegated partner user ID.
     * @return string|null
    */
    public function getRemoteUserId(): ?string {
        return $this->getBackingStore()->get('remoteUserId');
    }

    /**
     * Gets the servicePrincipalName property value. Service Principal Name (SPN).
     * @return string|null
    */
    public function getServicePrincipalName(): ?string {
        return $this->getBackingStore()->get('servicePrincipalName');
    }

    /**
     * Gets the type property value. The type property
     * @return CloudPcAuditActorType|null
    */
    public function getType(): ?CloudPcAuditActorType {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Gets the userId property value. Azure AD user ID.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->getBackingStore()->get('userId');
    }

    /**
     * Gets the userPermissions property value. List of user permissions and application permissions when the audit event was performed.
     * @return array<string>|null
    */
    public function getUserPermissions(): ?array {
        return $this->getBackingStore()->get('userPermissions');
    }

    /**
     * Gets the userPrincipalName property value. User Principal Name (UPN).
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
    }

    /**
     * Gets the userRoleScopeTags property value. List of role scope tags.
     * @return array<CloudPcUserRoleScopeTagInfo>|null
    */
    public function getUserRoleScopeTags(): ?array {
        return $this->getBackingStore()->get('userRoleScopeTags');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('applicationDisplayName', $this->getApplicationDisplayName());
        $writer->writeStringValue('applicationId', $this->getApplicationId());
        $writer->writeStringValue('ipAddress', $this->getIpAddress());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('remoteTenantId', $this->getRemoteTenantId());
        $writer->writeStringValue('remoteUserId', $this->getRemoteUserId());
        $writer->writeStringValue('servicePrincipalName', $this->getServicePrincipalName());
        $writer->writeEnumValue('type', $this->getType());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeCollectionOfPrimitiveValues('userPermissions', $this->getUserPermissions());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeCollectionOfObjectValues('userRoleScopeTags', $this->getUserRoleScopeTags());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the applicationDisplayName property value. Name of the application.
     *  @param string|null $value Value to set for the applicationDisplayName property.
    */
    public function setApplicationDisplayName(?string $value): void {
        $this->getBackingStore()->set('applicationDisplayName', $value);
    }

    /**
     * Sets the applicationId property value. Azure AD application ID.
     *  @param string|null $value Value to set for the applicationId property.
    */
    public function setApplicationId(?string $value): void {
        $this->getBackingStore()->set('applicationId', $value);
    }

    /**
     * Sets the ipAddress property value. IP address.
     *  @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value): void {
        $this->getBackingStore()->set('ipAddress', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the remoteTenantId property value. The delegated partner tenant ID.
     *  @param string|null $value Value to set for the remoteTenantId property.
    */
    public function setRemoteTenantId(?string $value): void {
        $this->getBackingStore()->set('remoteTenantId', $value);
    }

    /**
     * Sets the remoteUserId property value. The delegated partner user ID.
     *  @param string|null $value Value to set for the remoteUserId property.
    */
    public function setRemoteUserId(?string $value): void {
        $this->getBackingStore()->set('remoteUserId', $value);
    }

    /**
     * Sets the servicePrincipalName property value. Service Principal Name (SPN).
     *  @param string|null $value Value to set for the servicePrincipalName property.
    */
    public function setServicePrincipalName(?string $value): void {
        $this->getBackingStore()->set('servicePrincipalName', $value);
    }

    /**
     * Sets the type property value. The type property
     *  @param CloudPcAuditActorType|null $value Value to set for the type property.
    */
    public function setType(?CloudPcAuditActorType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the userId property value. Azure AD user ID.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userPermissions property value. List of user permissions and application permissions when the audit event was performed.
     *  @param array<string>|null $value Value to set for the userPermissions property.
    */
    public function setUserPermissions(?array $value): void {
        $this->getBackingStore()->set('userPermissions', $value);
    }

    /**
     * Sets the userPrincipalName property value. User Principal Name (UPN).
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

    /**
     * Sets the userRoleScopeTags property value. List of role scope tags.
     *  @param array<CloudPcUserRoleScopeTagInfo>|null $value Value to set for the userRoleScopeTags property.
    */
    public function setUserRoleScopeTags(?array $value): void {
        $this->getBackingStore()->set('userRoleScopeTags', $value);
    }

}
