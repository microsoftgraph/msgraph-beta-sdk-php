<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ResourcePolicyEvaluationEvent extends Entity implements Parsable 
{
    /**
     * Instantiates a new ResourcePolicyEvaluationEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResourcePolicyEvaluationEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResourcePolicyEvaluationEvent {
        return new ResourcePolicyEvaluationEvent();
    }

    /**
     * Gets the apiVersion property value. The apiVersion property
     * @return string|null
    */
    public function getApiVersion(): ?string {
        $val = $this->getBackingStore()->get('apiVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'apiVersion'");
    }

    /**
     * Gets the appDisplayName property value. The appDisplayName property
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
     * Gets the appId property value. The appId property
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
     * Gets the applicablePoliciesCount property value. The applicablePoliciesCount property
     * @return int|null
    */
    public function getApplicablePoliciesCount(): ?int {
        $val = $this->getBackingStore()->get('applicablePoliciesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicablePoliciesCount'");
    }

    /**
     * Gets the auditPoliciesCount property value. The auditPoliciesCount property
     * @return int|null
    */
    public function getAuditPoliciesCount(): ?int {
        $val = $this->getBackingStore()->get('auditPoliciesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'auditPoliciesCount'");
    }

    /**
     * Gets the clientRequestId property value. The clientRequestId property
     * @return string|null
    */
    public function getClientRequestId(): ?string {
        $val = $this->getBackingStore()->get('clientRequestId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientRequestId'");
    }

    /**
     * Gets the denyPoliciesCount property value. The denyPoliciesCount property
     * @return int|null
    */
    public function getDenyPoliciesCount(): ?int {
        $val = $this->getBackingStore()->get('denyPoliciesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'denyPoliciesCount'");
    }

    /**
     * Gets the durationMs property value. The durationMs property
     * @return int|null
    */
    public function getDurationMs(): ?int {
        $val = $this->getBackingStore()->get('durationMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'durationMs'");
    }

    /**
     * Gets the errorPoliciesCount property value. The errorPoliciesCount property
     * @return int|null
    */
    public function getErrorPoliciesCount(): ?int {
        $val = $this->getBackingStore()->get('errorPoliciesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorPoliciesCount'");
    }

    /**
     * Gets the evaluatedDateTime property value. The evaluatedDateTime property
     * @return DateTime|null
    */
    public function getEvaluatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('evaluatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'evaluatedDateTime'");
    }

    /**
     * Gets the evaluatedPoliciesCount property value. The evaluatedPoliciesCount property
     * @return int|null
    */
    public function getEvaluatedPoliciesCount(): ?int {
        $val = $this->getBackingStore()->get('evaluatedPoliciesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'evaluatedPoliciesCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'apiVersion' => fn(ParseNode $n) => $o->setApiVersion($n->getStringValue()),
            'appDisplayName' => fn(ParseNode $n) => $o->setAppDisplayName($n->getStringValue()),
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'applicablePoliciesCount' => fn(ParseNode $n) => $o->setApplicablePoliciesCount($n->getIntegerValue()),
            'auditPoliciesCount' => fn(ParseNode $n) => $o->setAuditPoliciesCount($n->getIntegerValue()),
            'clientRequestId' => fn(ParseNode $n) => $o->setClientRequestId($n->getStringValue()),
            'denyPoliciesCount' => fn(ParseNode $n) => $o->setDenyPoliciesCount($n->getIntegerValue()),
            'durationMs' => fn(ParseNode $n) => $o->setDurationMs($n->getIntegerValue()),
            'errorPoliciesCount' => fn(ParseNode $n) => $o->setErrorPoliciesCount($n->getIntegerValue()),
            'evaluatedDateTime' => fn(ParseNode $n) => $o->setEvaluatedDateTime($n->getDateTimeValue()),
            'evaluatedPoliciesCount' => fn(ParseNode $n) => $o->setEvaluatedPoliciesCount($n->getIntegerValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getStringValue()),
            'operationId' => fn(ParseNode $n) => $o->setOperationId($n->getStringValue()),
            'policyDecision' => fn(ParseNode $n) => $o->setPolicyDecision($n->getEnumValue(ResourcePolicyDecision::class)),
            'policyDetails' => fn(ParseNode $n) => $o->setPolicyDetails($n->getCollectionOfObjectValues([PolicyEvaluationDetail::class, 'createFromDiscriminatorValue'])),
            'requestId' => fn(ParseNode $n) => $o->setRequestId($n->getStringValue()),
            'requestMethod' => fn(ParseNode $n) => $o->setRequestMethod($n->getStringValue()),
            'requestUri' => fn(ParseNode $n) => $o->setRequestUri($n->getStringValue()),
            'servicePrincipalId' => fn(ParseNode $n) => $o->setServicePrincipalId($n->getStringValue()),
            'targetResourceId' => fn(ParseNode $n) => $o->setTargetResourceId($n->getStringValue()),
            'targetResourceName' => fn(ParseNode $n) => $o->setTargetResourceName($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'totalFetchDurationMs' => fn(ParseNode $n) => $o->setTotalFetchDurationMs($n->getIntegerValue()),
            'totalPolicyEvaluationDurationMs' => fn(ParseNode $n) => $o->setTotalPolicyEvaluationDurationMs($n->getIntegerValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the location property value. The location property
     * @return string|null
    */
    public function getLocation(): ?string {
        $val = $this->getBackingStore()->get('location');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'location'");
    }

    /**
     * Gets the operationId property value. The operationId property
     * @return string|null
    */
    public function getOperationId(): ?string {
        $val = $this->getBackingStore()->get('operationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operationId'");
    }

    /**
     * Gets the policyDecision property value. The policyDecision property
     * @return ResourcePolicyDecision|null
    */
    public function getPolicyDecision(): ?ResourcePolicyDecision {
        $val = $this->getBackingStore()->get('policyDecision');
        if (is_null($val) || $val instanceof ResourcePolicyDecision) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyDecision'");
    }

    /**
     * Gets the policyDetails property value. The policyDetails property
     * @return array<PolicyEvaluationDetail>|null
    */
    public function getPolicyDetails(): ?array {
        $val = $this->getBackingStore()->get('policyDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PolicyEvaluationDetail::class);
            /** @var array<PolicyEvaluationDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyDetails'");
    }

    /**
     * Gets the requestId property value. The requestId property
     * @return string|null
    */
    public function getRequestId(): ?string {
        $val = $this->getBackingStore()->get('requestId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestId'");
    }

    /**
     * Gets the requestMethod property value. The requestMethod property
     * @return string|null
    */
    public function getRequestMethod(): ?string {
        $val = $this->getBackingStore()->get('requestMethod');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestMethod'");
    }

    /**
     * Gets the requestUri property value. The requestUri property
     * @return string|null
    */
    public function getRequestUri(): ?string {
        $val = $this->getBackingStore()->get('requestUri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestUri'");
    }

    /**
     * Gets the servicePrincipalId property value. The servicePrincipalId property
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
     * Gets the targetResourceId property value. The targetResourceId property
     * @return string|null
    */
    public function getTargetResourceId(): ?string {
        $val = $this->getBackingStore()->get('targetResourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetResourceId'");
    }

    /**
     * Gets the targetResourceName property value. The targetResourceName property
     * @return string|null
    */
    public function getTargetResourceName(): ?string {
        $val = $this->getBackingStore()->get('targetResourceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetResourceName'");
    }

    /**
     * Gets the tenantId property value. The tenantId property
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
     * Gets the totalFetchDurationMs property value. The totalFetchDurationMs property
     * @return int|null
    */
    public function getTotalFetchDurationMs(): ?int {
        $val = $this->getBackingStore()->get('totalFetchDurationMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalFetchDurationMs'");
    }

    /**
     * Gets the totalPolicyEvaluationDurationMs property value. The totalPolicyEvaluationDurationMs property
     * @return int|null
    */
    public function getTotalPolicyEvaluationDurationMs(): ?int {
        $val = $this->getBackingStore()->get('totalPolicyEvaluationDurationMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalPolicyEvaluationDurationMs'");
    }

    /**
     * Gets the userId property value. The userId property
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('apiVersion', $this->getApiVersion());
        $writer->writeStringValue('appDisplayName', $this->getAppDisplayName());
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeIntegerValue('applicablePoliciesCount', $this->getApplicablePoliciesCount());
        $writer->writeIntegerValue('auditPoliciesCount', $this->getAuditPoliciesCount());
        $writer->writeStringValue('clientRequestId', $this->getClientRequestId());
        $writer->writeIntegerValue('denyPoliciesCount', $this->getDenyPoliciesCount());
        $writer->writeIntegerValue('durationMs', $this->getDurationMs());
        $writer->writeIntegerValue('errorPoliciesCount', $this->getErrorPoliciesCount());
        $writer->writeDateTimeValue('evaluatedDateTime', $this->getEvaluatedDateTime());
        $writer->writeIntegerValue('evaluatedPoliciesCount', $this->getEvaluatedPoliciesCount());
        $writer->writeStringValue('location', $this->getLocation());
        $writer->writeStringValue('operationId', $this->getOperationId());
        $writer->writeEnumValue('policyDecision', $this->getPolicyDecision());
        $writer->writeCollectionOfObjectValues('policyDetails', $this->getPolicyDetails());
        $writer->writeStringValue('requestId', $this->getRequestId());
        $writer->writeStringValue('requestMethod', $this->getRequestMethod());
        $writer->writeStringValue('requestUri', $this->getRequestUri());
        $writer->writeStringValue('servicePrincipalId', $this->getServicePrincipalId());
        $writer->writeStringValue('targetResourceId', $this->getTargetResourceId());
        $writer->writeStringValue('targetResourceName', $this->getTargetResourceName());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeIntegerValue('totalFetchDurationMs', $this->getTotalFetchDurationMs());
        $writer->writeIntegerValue('totalPolicyEvaluationDurationMs', $this->getTotalPolicyEvaluationDurationMs());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the apiVersion property value. The apiVersion property
     * @param string|null $value Value to set for the apiVersion property.
    */
    public function setApiVersion(?string $value): void {
        $this->getBackingStore()->set('apiVersion', $value);
    }

    /**
     * Sets the appDisplayName property value. The appDisplayName property
     * @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('appDisplayName', $value);
    }

    /**
     * Sets the appId property value. The appId property
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the applicablePoliciesCount property value. The applicablePoliciesCount property
     * @param int|null $value Value to set for the applicablePoliciesCount property.
    */
    public function setApplicablePoliciesCount(?int $value): void {
        $this->getBackingStore()->set('applicablePoliciesCount', $value);
    }

    /**
     * Sets the auditPoliciesCount property value. The auditPoliciesCount property
     * @param int|null $value Value to set for the auditPoliciesCount property.
    */
    public function setAuditPoliciesCount(?int $value): void {
        $this->getBackingStore()->set('auditPoliciesCount', $value);
    }

    /**
     * Sets the clientRequestId property value. The clientRequestId property
     * @param string|null $value Value to set for the clientRequestId property.
    */
    public function setClientRequestId(?string $value): void {
        $this->getBackingStore()->set('clientRequestId', $value);
    }

    /**
     * Sets the denyPoliciesCount property value. The denyPoliciesCount property
     * @param int|null $value Value to set for the denyPoliciesCount property.
    */
    public function setDenyPoliciesCount(?int $value): void {
        $this->getBackingStore()->set('denyPoliciesCount', $value);
    }

    /**
     * Sets the durationMs property value. The durationMs property
     * @param int|null $value Value to set for the durationMs property.
    */
    public function setDurationMs(?int $value): void {
        $this->getBackingStore()->set('durationMs', $value);
    }

    /**
     * Sets the errorPoliciesCount property value. The errorPoliciesCount property
     * @param int|null $value Value to set for the errorPoliciesCount property.
    */
    public function setErrorPoliciesCount(?int $value): void {
        $this->getBackingStore()->set('errorPoliciesCount', $value);
    }

    /**
     * Sets the evaluatedDateTime property value. The evaluatedDateTime property
     * @param DateTime|null $value Value to set for the evaluatedDateTime property.
    */
    public function setEvaluatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('evaluatedDateTime', $value);
    }

    /**
     * Sets the evaluatedPoliciesCount property value. The evaluatedPoliciesCount property
     * @param int|null $value Value to set for the evaluatedPoliciesCount property.
    */
    public function setEvaluatedPoliciesCount(?int $value): void {
        $this->getBackingStore()->set('evaluatedPoliciesCount', $value);
    }

    /**
     * Sets the location property value. The location property
     * @param string|null $value Value to set for the location property.
    */
    public function setLocation(?string $value): void {
        $this->getBackingStore()->set('location', $value);
    }

    /**
     * Sets the operationId property value. The operationId property
     * @param string|null $value Value to set for the operationId property.
    */
    public function setOperationId(?string $value): void {
        $this->getBackingStore()->set('operationId', $value);
    }

    /**
     * Sets the policyDecision property value. The policyDecision property
     * @param ResourcePolicyDecision|null $value Value to set for the policyDecision property.
    */
    public function setPolicyDecision(?ResourcePolicyDecision $value): void {
        $this->getBackingStore()->set('policyDecision', $value);
    }

    /**
     * Sets the policyDetails property value. The policyDetails property
     * @param array<PolicyEvaluationDetail>|null $value Value to set for the policyDetails property.
    */
    public function setPolicyDetails(?array $value): void {
        $this->getBackingStore()->set('policyDetails', $value);
    }

    /**
     * Sets the requestId property value. The requestId property
     * @param string|null $value Value to set for the requestId property.
    */
    public function setRequestId(?string $value): void {
        $this->getBackingStore()->set('requestId', $value);
    }

    /**
     * Sets the requestMethod property value. The requestMethod property
     * @param string|null $value Value to set for the requestMethod property.
    */
    public function setRequestMethod(?string $value): void {
        $this->getBackingStore()->set('requestMethod', $value);
    }

    /**
     * Sets the requestUri property value. The requestUri property
     * @param string|null $value Value to set for the requestUri property.
    */
    public function setRequestUri(?string $value): void {
        $this->getBackingStore()->set('requestUri', $value);
    }

    /**
     * Sets the servicePrincipalId property value. The servicePrincipalId property
     * @param string|null $value Value to set for the servicePrincipalId property.
    */
    public function setServicePrincipalId(?string $value): void {
        $this->getBackingStore()->set('servicePrincipalId', $value);
    }

    /**
     * Sets the targetResourceId property value. The targetResourceId property
     * @param string|null $value Value to set for the targetResourceId property.
    */
    public function setTargetResourceId(?string $value): void {
        $this->getBackingStore()->set('targetResourceId', $value);
    }

    /**
     * Sets the targetResourceName property value. The targetResourceName property
     * @param string|null $value Value to set for the targetResourceName property.
    */
    public function setTargetResourceName(?string $value): void {
        $this->getBackingStore()->set('targetResourceName', $value);
    }

    /**
     * Sets the tenantId property value. The tenantId property
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the totalFetchDurationMs property value. The totalFetchDurationMs property
     * @param int|null $value Value to set for the totalFetchDurationMs property.
    */
    public function setTotalFetchDurationMs(?int $value): void {
        $this->getBackingStore()->set('totalFetchDurationMs', $value);
    }

    /**
     * Sets the totalPolicyEvaluationDurationMs property value. The totalPolicyEvaluationDurationMs property
     * @param int|null $value Value to set for the totalPolicyEvaluationDurationMs property.
    */
    public function setTotalPolicyEvaluationDurationMs(?int $value): void {
        $this->getBackingStore()->set('totalPolicyEvaluationDurationMs', $value);
    }

    /**
     * Sets the userId property value. The userId property
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
