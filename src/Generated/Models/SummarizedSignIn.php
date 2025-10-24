<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\\Graph\\Beta\\Generated\Models\Agentic\AgentSignIn;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SummarizedSignIn extends Entity implements Parsable 
{
    /**
     * Instantiates a new SummarizedSignIn and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SummarizedSignIn
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SummarizedSignIn {
        return new SummarizedSignIn();
    }

    /**
     * Gets the agent property value. Represents details about the agentic sign-in. Includes the type of agent as well as parent appId in some cases. Supports $filter (eq) for agentType.
     * @return AgentSignIn|null
    */
    public function getAgent(): ?AgentSignIn {
        $val = $this->getBackingStore()->get('agent');
        if (is_null($val) || $val instanceof AgentSignIn) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agent'");
    }

    /**
     * Gets the aggregationDateTime property value. The aggregated day for which the summary applies to. This property always represents the entire day. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getAggregationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('aggregationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aggregationDateTime'");
    }

    /**
     * Gets the appDisplayName property value. The application name displayed in the Microsoft Entra admin center. Supports $filter (eq).
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        $val = $this->getBackingStore()->get('appDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appDisplayName'");
    }

    /**
     * Gets the appId property value. The application identifier (client ID) in Microsoft Entra ID. Supports $filter (eq).
     * @return string|null
    */
    public function getAppId(): ?string {
        $val = $this->getBackingStore()->get('appId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appId'");
    }

    /**
     * Gets the conditionalAccessStatus property value. The status of the conditional access policy triggered. The possible values are: success, failure, notApplied, unknownFutureValue. Supports $filter (eq).
     * @return ConditionalAccessStatus|null
    */
    public function getConditionalAccessStatus(): ?ConditionalAccessStatus {
        $val = $this->getBackingStore()->get('conditionalAccessStatus');
        if (is_null($val) || $val instanceof ConditionalAccessStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditionalAccessStatus'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agent' => fn(ParseNode $n) => $o->setAgent($n->getObjectValue([AgentSignIn::class, 'createFromDiscriminatorValue'])),
            'aggregationDateTime' => fn(ParseNode $n) => $o->setAggregationDateTime($n->getDateTimeValue()),
            'appDisplayName' => fn(ParseNode $n) => $o->setAppDisplayName($n->getStringValue()),
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'conditionalAccessStatus' => fn(ParseNode $n) => $o->setConditionalAccessStatus($n->getEnumValue(ConditionalAccessStatus::class)),
            'firstSignInDateTime' => fn(ParseNode $n) => $o->setFirstSignInDateTime($n->getDateTimeValue()),
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getStringValue()),
            'managedServiceIdentity' => fn(ParseNode $n) => $o->setManagedServiceIdentity($n->getObjectValue([ManagedIdentity::class, 'createFromDiscriminatorValue'])),
            'resourceDisplayName' => fn(ParseNode $n) => $o->setResourceDisplayName($n->getStringValue()),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
            'servicePrincipalId' => fn(ParseNode $n) => $o->setServicePrincipalId($n->getStringValue()),
            'servicePrincipalName' => fn(ParseNode $n) => $o->setServicePrincipalName($n->getStringValue()),
            'signInCount' => fn(ParseNode $n) => $o->setSignInCount($n->getIntegerValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getObjectValue([SignInStatus::class, 'createFromDiscriminatorValue'])),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the firstSignInDateTime property value. The earliest sign-in event included in this summary. This property always represents the entire day. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getFirstSignInDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('firstSignInDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firstSignInDateTime'");
    }

    /**
     * Gets the ipAddress property value. The IP address a user or autonomous agent used to reach a resource provider, used to determine Conditional Access compliance for some policies. For example, when a user interacts with Exchange Online, the IP address that Microsoft Exchange receives from the user can be recorded here. This value is often null. Supports $filter (eq, startswith).
     * @return string|null
    */
    public function getIpAddress(): ?string {
        $val = $this->getBackingStore()->get('ipAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipAddress'");
    }

    /**
     * Gets the managedServiceIdentity property value. Contains information about the managed identity used for the sign in, including its type, associated Azure Resource Manager resource ID, and federated token information. Supports $filter (eq) for msiType.
     * @return ManagedIdentity|null
    */
    public function getManagedServiceIdentity(): ?ManagedIdentity {
        $val = $this->getBackingStore()->get('managedServiceIdentity');
        if (is_null($val) || $val instanceof ManagedIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedServiceIdentity'");
    }

    /**
     * Gets the resourceDisplayName property value. The name of the resource that the user signed in to. Supports $filter (eq).
     * @return string|null
    */
    public function getResourceDisplayName(): ?string {
        $val = $this->getBackingStore()->get('resourceDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceDisplayName'");
    }

    /**
     * Gets the resourceId property value. The application identifier of the resource application that the user signed in to. Supports $filter (eq).
     * @return string|null
    */
    public function getResourceId(): ?string {
        $val = $this->getBackingStore()->get('resourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceId'");
    }

    /**
     * Gets the servicePrincipalId property value. The application identifier of the specific service principal instance of the application identifier used for sign-in. This field is populated when you're signing in using an application and is different than the appId property. Supports $filter (eq).
     * @return string|null
    */
    public function getServicePrincipalId(): ?string {
        $val = $this->getBackingStore()->get('servicePrincipalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipalId'");
    }

    /**
     * Gets the servicePrincipalName property value. The application name used for sign-in. This field is populated when you're signing in using an application. Supports $filter (eq, startswith).
     * @return string|null
    */
    public function getServicePrincipalName(): ?string {
        $val = $this->getBackingStore()->get('servicePrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipalName'");
    }

    /**
     * Gets the signInCount property value. The total number of sign-in events included in the summary.
     * @return int|null
    */
    public function getSignInCount(): ?int {
        $val = $this->getBackingStore()->get('signInCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signInCount'");
    }

    /**
     * Gets the status property value. The sign-in status. Includes the error code and description of the error (for a sign-in failure). Supports $filter (eq) for errorCode.
     * @return SignInStatus|null
    */
    public function getStatus(): ?SignInStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof SignInStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the tenantId property value. The tenant identifier of the user initiating the sign-in. Supports $filter (eq).
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Gets the userPrincipalName property value. User principal name of the user that initiated the sign-in. This value is always in lowercase. For guest users whose values in the user object typically contain #EXT# before the domain part, this property stores the value in both lowercase and the 'true' format. For example, while the user object stores AdeleVance_fabrikam.com#EXT#@contoso.com, the sign-in logs store adelevance@fabrikam.com. Supports $filter (eq).
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('agent', $this->getAgent());
        $writer->writeDateTimeValue('aggregationDateTime', $this->getAggregationDateTime());
        $writer->writeStringValue('appDisplayName', $this->getAppDisplayName());
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeEnumValue('conditionalAccessStatus', $this->getConditionalAccessStatus());
        $writer->writeDateTimeValue('firstSignInDateTime', $this->getFirstSignInDateTime());
        $writer->writeStringValue('ipAddress', $this->getIpAddress());
        $writer->writeObjectValue('managedServiceIdentity', $this->getManagedServiceIdentity());
        $writer->writeStringValue('resourceDisplayName', $this->getResourceDisplayName());
        $writer->writeStringValue('resourceId', $this->getResourceId());
        $writer->writeStringValue('servicePrincipalId', $this->getServicePrincipalId());
        $writer->writeStringValue('servicePrincipalName', $this->getServicePrincipalName());
        $writer->writeIntegerValue('signInCount', $this->getSignInCount());
        $writer->writeObjectValue('status', $this->getStatus());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the agent property value. Represents details about the agentic sign-in. Includes the type of agent as well as parent appId in some cases. Supports $filter (eq) for agentType.
     * @param AgentSignIn|null $value Value to set for the agent property.
    */
    public function setAgent(?AgentSignIn $value): void {
        $this->getBackingStore()->set('agent', $value);
    }

    /**
     * Sets the aggregationDateTime property value. The aggregated day for which the summary applies to. This property always represents the entire day. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the aggregationDateTime property.
    */
    public function setAggregationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('aggregationDateTime', $value);
    }

    /**
     * Sets the appDisplayName property value. The application name displayed in the Microsoft Entra admin center. Supports $filter (eq).
     * @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('appDisplayName', $value);
    }

    /**
     * Sets the appId property value. The application identifier (client ID) in Microsoft Entra ID. Supports $filter (eq).
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the conditionalAccessStatus property value. The status of the conditional access policy triggered. The possible values are: success, failure, notApplied, unknownFutureValue. Supports $filter (eq).
     * @param ConditionalAccessStatus|null $value Value to set for the conditionalAccessStatus property.
    */
    public function setConditionalAccessStatus(?ConditionalAccessStatus $value): void {
        $this->getBackingStore()->set('conditionalAccessStatus', $value);
    }

    /**
     * Sets the firstSignInDateTime property value. The earliest sign-in event included in this summary. This property always represents the entire day. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the firstSignInDateTime property.
    */
    public function setFirstSignInDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstSignInDateTime', $value);
    }

    /**
     * Sets the ipAddress property value. The IP address a user or autonomous agent used to reach a resource provider, used to determine Conditional Access compliance for some policies. For example, when a user interacts with Exchange Online, the IP address that Microsoft Exchange receives from the user can be recorded here. This value is often null. Supports $filter (eq, startswith).
     * @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value): void {
        $this->getBackingStore()->set('ipAddress', $value);
    }

    /**
     * Sets the managedServiceIdentity property value. Contains information about the managed identity used for the sign in, including its type, associated Azure Resource Manager resource ID, and federated token information. Supports $filter (eq) for msiType.
     * @param ManagedIdentity|null $value Value to set for the managedServiceIdentity property.
    */
    public function setManagedServiceIdentity(?ManagedIdentity $value): void {
        $this->getBackingStore()->set('managedServiceIdentity', $value);
    }

    /**
     * Sets the resourceDisplayName property value. The name of the resource that the user signed in to. Supports $filter (eq).
     * @param string|null $value Value to set for the resourceDisplayName property.
    */
    public function setResourceDisplayName(?string $value): void {
        $this->getBackingStore()->set('resourceDisplayName', $value);
    }

    /**
     * Sets the resourceId property value. The application identifier of the resource application that the user signed in to. Supports $filter (eq).
     * @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value): void {
        $this->getBackingStore()->set('resourceId', $value);
    }

    /**
     * Sets the servicePrincipalId property value. The application identifier of the specific service principal instance of the application identifier used for sign-in. This field is populated when you're signing in using an application and is different than the appId property. Supports $filter (eq).
     * @param string|null $value Value to set for the servicePrincipalId property.
    */
    public function setServicePrincipalId(?string $value): void {
        $this->getBackingStore()->set('servicePrincipalId', $value);
    }

    /**
     * Sets the servicePrincipalName property value. The application name used for sign-in. This field is populated when you're signing in using an application. Supports $filter (eq, startswith).
     * @param string|null $value Value to set for the servicePrincipalName property.
    */
    public function setServicePrincipalName(?string $value): void {
        $this->getBackingStore()->set('servicePrincipalName', $value);
    }

    /**
     * Sets the signInCount property value. The total number of sign-in events included in the summary.
     * @param int|null $value Value to set for the signInCount property.
    */
    public function setSignInCount(?int $value): void {
        $this->getBackingStore()->set('signInCount', $value);
    }

    /**
     * Sets the status property value. The sign-in status. Includes the error code and description of the error (for a sign-in failure). Supports $filter (eq) for errorCode.
     * @param SignInStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SignInStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the tenantId property value. The tenant identifier of the user initiating the sign-in. Supports $filter (eq).
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the userPrincipalName property value. User principal name of the user that initiated the sign-in. This value is always in lowercase. For guest users whose values in the user object typically contain #EXT# before the domain part, this property stores the value in both lowercase and the 'true' format. For example, while the user object stores AdeleVance_fabrikam.com#EXT#@contoso.com, the sign-in logs store adelevance@fabrikam.com. Supports $filter (eq).
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
