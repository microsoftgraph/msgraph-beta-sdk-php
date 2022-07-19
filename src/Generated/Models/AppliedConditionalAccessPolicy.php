<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppliedConditionalAccessPolicy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AuthenticationStrength|null $authenticationStrength The custom authentication strength enforced in a Conditional Access policy.
    */
    private ?AuthenticationStrength $authenticationStrength = null;
    
    /**
     * @var ConditionalAccessConditions|null $conditionsNotSatisfied Refers to the conditional access policy conditions that are not satisfied. The possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client,ipAddressSeenByAzureAD,ipAddressSeenByResourceProvider,unknownFutureValue,servicePrincipals,servicePrincipalRisk. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: servicePrincipals,servicePrincipalRisk.
    */
    private ?ConditionalAccessConditions $conditionsNotSatisfied = null;
    
    /**
     * @var ConditionalAccessConditions|null $conditionsSatisfied Refers to the conditional access policy conditions that are satisfied. The possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client,ipAddressSeenByAzureAD,ipAddressSeenByResourceProvider,unknownFutureValue,servicePrincipals,servicePrincipalRisk. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: servicePrincipals,servicePrincipalRisk.
    */
    private ?ConditionalAccessConditions $conditionsSatisfied = null;
    
    /**
     * @var string|null $displayName Name of the conditional access policy.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<string>|null $enforcedGrantControls Refers to the grant controls enforced by the conditional access policy (example: 'Require multi-factor authentication').
    */
    private ?array $enforcedGrantControls = null;
    
    /**
     * @var array<string>|null $enforcedSessionControls Refers to the session controls enforced by the conditional access policy (example: 'Require app enforced controls').
    */
    private ?array $enforcedSessionControls = null;
    
    /**
     * @var array<ConditionalAccessRuleSatisfied>|null $excludeRulesSatisfied List of key-value pairs containing each matched exclude condition in the conditional access policy. Example: [{'devicePlatform' : 'DevicePlatform'}] means the policy didn’t apply, because the DevicePlatform condition was a match.
    */
    private ?array $excludeRulesSatisfied = null;
    
    /**
     * @var string|null $id Identifier of the conditional access policy.
    */
    private ?string $id = null;
    
    /**
     * @var array<ConditionalAccessRuleSatisfied>|null $includeRulesSatisfied List of key-value pairs containing each matched include condition in the conditional access policy. Example: [{ 'application' : 'AllApps'}, {'users': 'Group'}], meaning Application condition was a match because AllApps are included and Users condition was a match because the user was part of the included Group rule.
    */
    private ?array $includeRulesSatisfied = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var AppliedConditionalAccessPolicyResult|null $result Indicates the result of the CA policy that was triggered. Possible values are: success, failure, notApplied (Policy isn't applied because policy conditions were not met),notEnabled (This is due to the policy in disabled state), unknown, unknownFutureValue, reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted.
    */
    private ?AppliedConditionalAccessPolicyResult $result = null;
    
    /**
     * @var array<string>|null $sessionControlsNotSatisfied Refers to the session controls that a sign-in activity did not satisfy. (Example: Application enforced Restrictions).
    */
    private ?array $sessionControlsNotSatisfied = null;
    
    /**
     * Instantiates a new appliedConditionalAccessPolicy and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.appliedConditionalAccessPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppliedConditionalAccessPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppliedConditionalAccessPolicy {
        return new AppliedConditionalAccessPolicy();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the authenticationStrength property value. The custom authentication strength enforced in a Conditional Access policy.
     * @return AuthenticationStrength|null
    */
    public function getAuthenticationStrength(): ?AuthenticationStrength {
        return $this->authenticationStrength;
    }

    /**
     * Gets the conditionsNotSatisfied property value. Refers to the conditional access policy conditions that are not satisfied. The possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client,ipAddressSeenByAzureAD,ipAddressSeenByResourceProvider,unknownFutureValue,servicePrincipals,servicePrincipalRisk. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: servicePrincipals,servicePrincipalRisk.
     * @return ConditionalAccessConditions|null
    */
    public function getConditionsNotSatisfied(): ?ConditionalAccessConditions {
        return $this->conditionsNotSatisfied;
    }

    /**
     * Gets the conditionsSatisfied property value. Refers to the conditional access policy conditions that are satisfied. The possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client,ipAddressSeenByAzureAD,ipAddressSeenByResourceProvider,unknownFutureValue,servicePrincipals,servicePrincipalRisk. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: servicePrincipals,servicePrincipalRisk.
     * @return ConditionalAccessConditions|null
    */
    public function getConditionsSatisfied(): ?ConditionalAccessConditions {
        return $this->conditionsSatisfied;
    }

    /**
     * Gets the displayName property value. Name of the conditional access policy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the enforcedGrantControls property value. Refers to the grant controls enforced by the conditional access policy (example: 'Require multi-factor authentication').
     * @return array<string>|null
    */
    public function getEnforcedGrantControls(): ?array {
        return $this->enforcedGrantControls;
    }

    /**
     * Gets the enforcedSessionControls property value. Refers to the session controls enforced by the conditional access policy (example: 'Require app enforced controls').
     * @return array<string>|null
    */
    public function getEnforcedSessionControls(): ?array {
        return $this->enforcedSessionControls;
    }

    /**
     * Gets the excludeRulesSatisfied property value. List of key-value pairs containing each matched exclude condition in the conditional access policy. Example: [{'devicePlatform' : 'DevicePlatform'}] means the policy didn’t apply, because the DevicePlatform condition was a match.
     * @return array<ConditionalAccessRuleSatisfied>|null
    */
    public function getExcludeRulesSatisfied(): ?array {
        return $this->excludeRulesSatisfied;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authenticationStrength' => function (ParseNode $n) use ($o) { $o->setAuthenticationStrength($n->getObjectValue(array(AuthenticationStrength::class, 'createFromDiscriminatorValue'))); },
            'conditionsNotSatisfied' => function (ParseNode $n) use ($o) { $o->setConditionsNotSatisfied($n->getEnumValue(ConditionalAccessConditions::class)); },
            'conditionsSatisfied' => function (ParseNode $n) use ($o) { $o->setConditionsSatisfied($n->getEnumValue(ConditionalAccessConditions::class)); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'enforcedGrantControls' => function (ParseNode $n) use ($o) { $o->setEnforcedGrantControls($n->getCollectionOfPrimitiveValues()); },
            'enforcedSessionControls' => function (ParseNode $n) use ($o) { $o->setEnforcedSessionControls($n->getCollectionOfPrimitiveValues()); },
            'excludeRulesSatisfied' => function (ParseNode $n) use ($o) { $o->setExcludeRulesSatisfied($n->getCollectionOfObjectValues(array(ConditionalAccessRuleSatisfied::class, 'createFromDiscriminatorValue'))); },
            'id' => function (ParseNode $n) use ($o) { $o->setId($n->getStringValue()); },
            'includeRulesSatisfied' => function (ParseNode $n) use ($o) { $o->setIncludeRulesSatisfied($n->getCollectionOfObjectValues(array(ConditionalAccessRuleSatisfied::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'result' => function (ParseNode $n) use ($o) { $o->setResult($n->getEnumValue(AppliedConditionalAccessPolicyResult::class)); },
            'sessionControlsNotSatisfied' => function (ParseNode $n) use ($o) { $o->setSessionControlsNotSatisfied($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the id property value. Identifier of the conditional access policy.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the includeRulesSatisfied property value. List of key-value pairs containing each matched include condition in the conditional access policy. Example: [{ 'application' : 'AllApps'}, {'users': 'Group'}], meaning Application condition was a match because AllApps are included and Users condition was a match because the user was part of the included Group rule.
     * @return array<ConditionalAccessRuleSatisfied>|null
    */
    public function getIncludeRulesSatisfied(): ?array {
        return $this->includeRulesSatisfied;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the result property value. Indicates the result of the CA policy that was triggered. Possible values are: success, failure, notApplied (Policy isn't applied because policy conditions were not met),notEnabled (This is due to the policy in disabled state), unknown, unknownFutureValue, reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted.
     * @return AppliedConditionalAccessPolicyResult|null
    */
    public function getResult(): ?AppliedConditionalAccessPolicyResult {
        return $this->result;
    }

    /**
     * Gets the sessionControlsNotSatisfied property value. Refers to the session controls that a sign-in activity did not satisfy. (Example: Application enforced Restrictions).
     * @return array<string>|null
    */
    public function getSessionControlsNotSatisfied(): ?array {
        return $this->sessionControlsNotSatisfied;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('authenticationStrength', $this->authenticationStrength);
        $writer->writeEnumValue('conditionsNotSatisfied', $this->conditionsNotSatisfied);
        $writer->writeEnumValue('conditionsSatisfied', $this->conditionsSatisfied);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfPrimitiveValues('enforcedGrantControls', $this->enforcedGrantControls);
        $writer->writeCollectionOfPrimitiveValues('enforcedSessionControls', $this->enforcedSessionControls);
        $writer->writeCollectionOfObjectValues('excludeRulesSatisfied', $this->excludeRulesSatisfied);
        $writer->writeStringValue('id', $this->id);
        $writer->writeCollectionOfObjectValues('includeRulesSatisfied', $this->includeRulesSatisfied);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('result', $this->result);
        $writer->writeCollectionOfPrimitiveValues('sessionControlsNotSatisfied', $this->sessionControlsNotSatisfied);
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
     * Sets the authenticationStrength property value. The custom authentication strength enforced in a Conditional Access policy.
     *  @param AuthenticationStrength|null $value Value to set for the authenticationStrength property.
    */
    public function setAuthenticationStrength(?AuthenticationStrength $value ): void {
        $this->authenticationStrength = $value;
    }

    /**
     * Sets the conditionsNotSatisfied property value. Refers to the conditional access policy conditions that are not satisfied. The possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client,ipAddressSeenByAzureAD,ipAddressSeenByResourceProvider,unknownFutureValue,servicePrincipals,servicePrincipalRisk. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: servicePrincipals,servicePrincipalRisk.
     *  @param ConditionalAccessConditions|null $value Value to set for the conditionsNotSatisfied property.
    */
    public function setConditionsNotSatisfied(?ConditionalAccessConditions $value ): void {
        $this->conditionsNotSatisfied = $value;
    }

    /**
     * Sets the conditionsSatisfied property value. Refers to the conditional access policy conditions that are satisfied. The possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client,ipAddressSeenByAzureAD,ipAddressSeenByResourceProvider,unknownFutureValue,servicePrincipals,servicePrincipalRisk. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: servicePrincipals,servicePrincipalRisk.
     *  @param ConditionalAccessConditions|null $value Value to set for the conditionsSatisfied property.
    */
    public function setConditionsSatisfied(?ConditionalAccessConditions $value ): void {
        $this->conditionsSatisfied = $value;
    }

    /**
     * Sets the displayName property value. Name of the conditional access policy.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the enforcedGrantControls property value. Refers to the grant controls enforced by the conditional access policy (example: 'Require multi-factor authentication').
     *  @param array<string>|null $value Value to set for the enforcedGrantControls property.
    */
    public function setEnforcedGrantControls(?array $value ): void {
        $this->enforcedGrantControls = $value;
    }

    /**
     * Sets the enforcedSessionControls property value. Refers to the session controls enforced by the conditional access policy (example: 'Require app enforced controls').
     *  @param array<string>|null $value Value to set for the enforcedSessionControls property.
    */
    public function setEnforcedSessionControls(?array $value ): void {
        $this->enforcedSessionControls = $value;
    }

    /**
     * Sets the excludeRulesSatisfied property value. List of key-value pairs containing each matched exclude condition in the conditional access policy. Example: [{'devicePlatform' : 'DevicePlatform'}] means the policy didn’t apply, because the DevicePlatform condition was a match.
     *  @param array<ConditionalAccessRuleSatisfied>|null $value Value to set for the excludeRulesSatisfied property.
    */
    public function setExcludeRulesSatisfied(?array $value ): void {
        $this->excludeRulesSatisfied = $value;
    }

    /**
     * Sets the id property value. Identifier of the conditional access policy.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the includeRulesSatisfied property value. List of key-value pairs containing each matched include condition in the conditional access policy. Example: [{ 'application' : 'AllApps'}, {'users': 'Group'}], meaning Application condition was a match because AllApps are included and Users condition was a match because the user was part of the included Group rule.
     *  @param array<ConditionalAccessRuleSatisfied>|null $value Value to set for the includeRulesSatisfied property.
    */
    public function setIncludeRulesSatisfied(?array $value ): void {
        $this->includeRulesSatisfied = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the result property value. Indicates the result of the CA policy that was triggered. Possible values are: success, failure, notApplied (Policy isn't applied because policy conditions were not met),notEnabled (This is due to the policy in disabled state), unknown, unknownFutureValue, reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted.
     *  @param AppliedConditionalAccessPolicyResult|null $value Value to set for the result property.
    */
    public function setResult(?AppliedConditionalAccessPolicyResult $value ): void {
        $this->result = $value;
    }

    /**
     * Sets the sessionControlsNotSatisfied property value. Refers to the session controls that a sign-in activity did not satisfy. (Example: Application enforced Restrictions).
     *  @param array<string>|null $value Value to set for the sessionControlsNotSatisfied property.
    */
    public function setSessionControlsNotSatisfied(?array $value ): void {
        $this->sessionControlsNotSatisfied = $value;
    }

}
