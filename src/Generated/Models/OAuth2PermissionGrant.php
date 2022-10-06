<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OAuth2PermissionGrant extends Entity implements Parsable 
{
    /**
     * @var string|null $clientId The id of the client service principal for the application which is authorized to act on behalf of a signed-in user when accessing an API. Required. Supports $filter (eq only).
    */
    private ?string $clientId = null;
    
    /**
     * @var string|null $consentType Indicates whether authorization is granted for the client application to impersonate all users or only a specific user. AllPrincipals indicates authorization to impersonate all users. Principal indicates authorization to impersonate a specific user. Consent on behalf of all users can be granted by an administrator. Non-admin users may be authorized to consent on behalf of themselves in some cases, for some delegated permissions. Required. Supports $filter (eq only).
    */
    private ?string $consentType = null;
    
    /**
     * @var DateTime|null $expiryTime Currently, the end time value is ignored, but a value is required when creating an oAuth2PermissionGrant. Required.
    */
    private ?DateTime $expiryTime = null;
    
    /**
     * @var string|null $principalId The id of the user on behalf of whom the client is authorized to access the resource, when consentType is Principal. If consentType is AllPrincipals this value is null. Required when consentType is Principal. Supports $filter (eq only).
    */
    private ?string $principalId = null;
    
    /**
     * @var string|null $resourceId The id of the resource service principal to which access is authorized. This identifies the API which the client is authorized to attempt to call on behalf of a signed-in user. Supports $filter (eq only).
    */
    private ?string $resourceId = null;
    
    /**
     * @var string|null $scope A space-separated list of the claim values for delegated permissions which should be included in access tokens for the resource application (the API). For example, openid User.Read GroupMember.Read.All. Each claim value should match the value field of one of the delegated permissions defined by the API, listed in the publishedPermissionScopes property of the resource service principal. Must not exceed 3850 characters in length.
    */
    private ?string $scope = null;
    
    /**
     * @var DateTime|null $startTime Currently, the start time value is ignored, but a value is required when creating an oAuth2PermissionGrant. Required.
    */
    private ?DateTime $startTime = null;
    
    /**
     * Instantiates a new oAuth2PermissionGrant and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.oAuth2PermissionGrant');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OAuth2PermissionGrant
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OAuth2PermissionGrant {
        return new OAuth2PermissionGrant();
    }

    /**
     * Gets the clientId property value. The id of the client service principal for the application which is authorized to act on behalf of a signed-in user when accessing an API. Required. Supports $filter (eq only).
     * @return string|null
    */
    public function getClientId(): ?string {
        return $this->clientId;
    }

    /**
     * Gets the consentType property value. Indicates whether authorization is granted for the client application to impersonate all users or only a specific user. AllPrincipals indicates authorization to impersonate all users. Principal indicates authorization to impersonate a specific user. Consent on behalf of all users can be granted by an administrator. Non-admin users may be authorized to consent on behalf of themselves in some cases, for some delegated permissions. Required. Supports $filter (eq only).
     * @return string|null
    */
    public function getConsentType(): ?string {
        return $this->consentType;
    }

    /**
     * Gets the expiryTime property value. Currently, the end time value is ignored, but a value is required when creating an oAuth2PermissionGrant. Required.
     * @return DateTime|null
    */
    public function getExpiryTime(): ?DateTime {
        return $this->expiryTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'clientId' => function (ParseNode $n) use ($o) { $o->setClientId($n->getStringValue()); },
            'consentType' => function (ParseNode $n) use ($o) { $o->setConsentType($n->getStringValue()); },
            'expiryTime' => function (ParseNode $n) use ($o) { $o->setExpiryTime($n->getDateTimeValue()); },
            'principalId' => function (ParseNode $n) use ($o) { $o->setPrincipalId($n->getStringValue()); },
            'resourceId' => function (ParseNode $n) use ($o) { $o->setResourceId($n->getStringValue()); },
            'scope' => function (ParseNode $n) use ($o) { $o->setScope($n->getStringValue()); },
            'startTime' => function (ParseNode $n) use ($o) { $o->setStartTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the principalId property value. The id of the user on behalf of whom the client is authorized to access the resource, when consentType is Principal. If consentType is AllPrincipals this value is null. Required when consentType is Principal. Supports $filter (eq only).
     * @return string|null
    */
    public function getPrincipalId(): ?string {
        return $this->principalId;
    }

    /**
     * Gets the resourceId property value. The id of the resource service principal to which access is authorized. This identifies the API which the client is authorized to attempt to call on behalf of a signed-in user. Supports $filter (eq only).
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->resourceId;
    }

    /**
     * Gets the scope property value. A space-separated list of the claim values for delegated permissions which should be included in access tokens for the resource application (the API). For example, openid User.Read GroupMember.Read.All. Each claim value should match the value field of one of the delegated permissions defined by the API, listed in the publishedPermissionScopes property of the resource service principal. Must not exceed 3850 characters in length.
     * @return string|null
    */
    public function getScope(): ?string {
        return $this->scope;
    }

    /**
     * Gets the startTime property value. Currently, the start time value is ignored, but a value is required when creating an oAuth2PermissionGrant. Required.
     * @return DateTime|null
    */
    public function getStartTime(): ?DateTime {
        return $this->startTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('clientId', $this->clientId);
        $writer->writeStringValue('consentType', $this->consentType);
        $writer->writeDateTimeValue('expiryTime', $this->expiryTime);
        $writer->writeStringValue('principalId', $this->principalId);
        $writer->writeStringValue('resourceId', $this->resourceId);
        $writer->writeStringValue('scope', $this->scope);
        $writer->writeDateTimeValue('startTime', $this->startTime);
    }

    /**
     * Sets the clientId property value. The id of the client service principal for the application which is authorized to act on behalf of a signed-in user when accessing an API. Required. Supports $filter (eq only).
     *  @param string|null $value Value to set for the clientId property.
    */
    public function setClientId(?string $value ): void {
        $this->clientId = $value;
    }

    /**
     * Sets the consentType property value. Indicates whether authorization is granted for the client application to impersonate all users or only a specific user. AllPrincipals indicates authorization to impersonate all users. Principal indicates authorization to impersonate a specific user. Consent on behalf of all users can be granted by an administrator. Non-admin users may be authorized to consent on behalf of themselves in some cases, for some delegated permissions. Required. Supports $filter (eq only).
     *  @param string|null $value Value to set for the consentType property.
    */
    public function setConsentType(?string $value ): void {
        $this->consentType = $value;
    }

    /**
     * Sets the expiryTime property value. Currently, the end time value is ignored, but a value is required when creating an oAuth2PermissionGrant. Required.
     *  @param DateTime|null $value Value to set for the expiryTime property.
    */
    public function setExpiryTime(?DateTime $value ): void {
        $this->expiryTime = $value;
    }

    /**
     * Sets the principalId property value. The id of the user on behalf of whom the client is authorized to access the resource, when consentType is Principal. If consentType is AllPrincipals this value is null. Required when consentType is Principal. Supports $filter (eq only).
     *  @param string|null $value Value to set for the principalId property.
    */
    public function setPrincipalId(?string $value ): void {
        $this->principalId = $value;
    }

    /**
     * Sets the resourceId property value. The id of the resource service principal to which access is authorized. This identifies the API which the client is authorized to attempt to call on behalf of a signed-in user. Supports $filter (eq only).
     *  @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value ): void {
        $this->resourceId = $value;
    }

    /**
     * Sets the scope property value. A space-separated list of the claim values for delegated permissions which should be included in access tokens for the resource application (the API). For example, openid User.Read GroupMember.Read.All. Each claim value should match the value field of one of the delegated permissions defined by the API, listed in the publishedPermissionScopes property of the resource service principal. Must not exceed 3850 characters in length.
     *  @param string|null $value Value to set for the scope property.
    */
    public function setScope(?string $value ): void {
        $this->scope = $value;
    }

    /**
     * Sets the startTime property value. Currently, the start time value is ignored, but a value is required when creating an oAuth2PermissionGrant. Required.
     *  @param DateTime|null $value Value to set for the startTime property.
    */
    public function setStartTime(?DateTime $value ): void {
        $this->startTime = $value;
    }

}
