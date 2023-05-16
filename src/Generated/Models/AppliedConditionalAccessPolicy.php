<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AppliedConditionalAccessPolicy implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new appliedConditionalAccessPolicy and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the authenticationStrength property value. The custom authentication strength enforced in a Conditional Access policy.
     * @return AuthenticationStrength|null
    */
    public function getAuthenticationStrength(): ?AuthenticationStrength {
        return $this->getBackingStore()->get('authenticationStrength');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the conditionsNotSatisfied property value. Refers to the conditional access policy conditions that are not satisfied. The possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client,ipAddressSeenByAzureAD,ipAddressSeenByResourceProvider,unknownFutureValue,servicePrincipals,servicePrincipalRisk. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: servicePrincipals,servicePrincipalRisk.
     * @return array<ConditionalAccessConditions>|null
    */
    public function getConditionsNotSatisfied(): ?array {
        return $this->getBackingStore()->get('conditionsNotSatisfied');
    }

    /**
     * Gets the conditionsSatisfied property value. Refers to the conditional access policy conditions that are satisfied. The possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client,ipAddressSeenByAzureAD,ipAddressSeenByResourceProvider,unknownFutureValue,servicePrincipals,servicePrincipalRisk. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: servicePrincipals,servicePrincipalRisk.
     * @return array<ConditionalAccessConditions>|null
    */
    public function getConditionsSatisfied(): ?array {
        return $this->getBackingStore()->get('conditionsSatisfied');
    }

    /**
     * Gets the displayName property value. Name of the conditional access policy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the enforcedGrantControls property value. Refers to the grant controls enforced by the conditional access policy (example: 'Require multi-factor authentication').
     * @return array<string>|null
    */
    public function getEnforcedGrantControls(): ?array {
        return $this->getBackingStore()->get('enforcedGrantControls');
    }

    /**
     * Gets the enforcedSessionControls property value. Refers to the session controls enforced by the conditional access policy (example: 'Require app enforced controls').
     * @return array<string>|null
    */
    public function getEnforcedSessionControls(): ?array {
        return $this->getBackingStore()->get('enforcedSessionControls');
    }

    /**
     * Gets the excludeRulesSatisfied property value. List of key-value pairs containing each matched exclude condition in the conditional access policy. Example: [{'devicePlatform' : 'DevicePlatform'}] means the policy didn’t apply, because the DevicePlatform condition was a match.
     * @return array<ConditionalAccessRuleSatisfied>|null
    */
    public function getExcludeRulesSatisfied(): ?array {
        return $this->getBackingStore()->get('excludeRulesSatisfied');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authenticationStrength' => fn(ParseNode $n) => $o->setAuthenticationStrength($n->getObjectValue([AuthenticationStrength::class, 'createFromDiscriminatorValue'])),
            'conditionsNotSatisfied' => fn(ParseNode $n) => $o->setConditionsNotSatisfied($n->getCollectionOfEnumValues(ConditionalAccessConditions::class)),
            'conditionsSatisfied' => fn(ParseNode $n) => $o->setConditionsSatisfied($n->getCollectionOfEnumValues(ConditionalAccessConditions::class)),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'enforcedGrantControls' => fn(ParseNode $n) => $o->setEnforcedGrantControls($n->getCollectionOfPrimitiveValues()),
            'enforcedSessionControls' => fn(ParseNode $n) => $o->setEnforcedSessionControls($n->getCollectionOfPrimitiveValues()),
            'excludeRulesSatisfied' => fn(ParseNode $n) => $o->setExcludeRulesSatisfied($n->getCollectionOfObjectValues([ConditionalAccessRuleSatisfied::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'includeRulesSatisfied' => fn(ParseNode $n) => $o->setIncludeRulesSatisfied($n->getCollectionOfObjectValues([ConditionalAccessRuleSatisfied::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'result' => fn(ParseNode $n) => $o->setResult($n->getEnumValue(AppliedConditionalAccessPolicyResult::class)),
            'sessionControlsNotSatisfied' => fn(ParseNode $n) => $o->setSessionControlsNotSatisfied($n->getCollectionOfPrimitiveValues()),
        ];
    }

    /**
     * Gets the id property value. Identifier of the conditional access policy.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->getBackingStore()->get('id');
    }

    /**
     * Gets the includeRulesSatisfied property value. List of key-value pairs containing each matched include condition in the conditional access policy. Example: [{ 'application' : 'AllApps'}, {'users': 'Group'}], meaning Application condition was a match because AllApps are included and Users condition was a match because the user was part of the included Group rule.
     * @return array<ConditionalAccessRuleSatisfied>|null
    */
    public function getIncludeRulesSatisfied(): ?array {
        return $this->getBackingStore()->get('includeRulesSatisfied');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the result property value. Indicates the result of the CA policy that was triggered. Possible values are: success, failure, notApplied (Policy isn't applied because policy conditions were not met),notEnabled (This is due to the policy in disabled state), unknown, unknownFutureValue, reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted.
     * @return AppliedConditionalAccessPolicyResult|null
    */
    public function getResult(): ?AppliedConditionalAccessPolicyResult {
        return $this->getBackingStore()->get('result');
    }

    /**
     * Gets the sessionControlsNotSatisfied property value. Refers to the session controls that a sign-in activity did not satisfy. (Example: Application enforced Restrictions).
     * @return array<string>|null
    */
    public function getSessionControlsNotSatisfied(): ?array {
        return $this->getBackingStore()->get('sessionControlsNotSatisfied');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('authenticationStrength', $this->getAuthenticationStrength());
        $writer->writeCollectionOfEnumValues('conditionsNotSatisfied', $this->getConditionsNotSatisfied());
        $writer->writeCollectionOfEnumValues('conditionsSatisfied', $this->getConditionsSatisfied());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfPrimitiveValues('enforcedGrantControls', $this->getEnforcedGrantControls());
        $writer->writeCollectionOfPrimitiveValues('enforcedSessionControls', $this->getEnforcedSessionControls());
        $writer->writeCollectionOfObjectValues('excludeRulesSatisfied', $this->getExcludeRulesSatisfied());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeCollectionOfObjectValues('includeRulesSatisfied', $this->getIncludeRulesSatisfied());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('result', $this->getResult());
        $writer->writeCollectionOfPrimitiveValues('sessionControlsNotSatisfied', $this->getSessionControlsNotSatisfied());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the authenticationStrength property value. The custom authentication strength enforced in a Conditional Access policy.
     * @param AuthenticationStrength|null $value Value to set for the authenticationStrength property.
    */
    public function setAuthenticationStrength(?AuthenticationStrength $value): void {
        $this->getBackingStore()->set('authenticationStrength', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the conditionsNotSatisfied property value. Refers to the conditional access policy conditions that are not satisfied. The possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client,ipAddressSeenByAzureAD,ipAddressSeenByResourceProvider,unknownFutureValue,servicePrincipals,servicePrincipalRisk. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: servicePrincipals,servicePrincipalRisk.
     * @param array<ConditionalAccessConditions>|null $value Value to set for the conditionsNotSatisfied property.
    */
    public function setConditionsNotSatisfied(?array $value): void {
        $this->getBackingStore()->set('conditionsNotSatisfied', $value);
    }

    /**
     * Sets the conditionsSatisfied property value. Refers to the conditional access policy conditions that are satisfied. The possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client,ipAddressSeenByAzureAD,ipAddressSeenByResourceProvider,unknownFutureValue,servicePrincipals,servicePrincipalRisk. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: servicePrincipals,servicePrincipalRisk.
     * @param array<ConditionalAccessConditions>|null $value Value to set for the conditionsSatisfied property.
    */
    public function setConditionsSatisfied(?array $value): void {
        $this->getBackingStore()->set('conditionsSatisfied', $value);
    }

    /**
     * Sets the displayName property value. Name of the conditional access policy.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the enforcedGrantControls property value. Refers to the grant controls enforced by the conditional access policy (example: 'Require multi-factor authentication').
     * @param array<string>|null $value Value to set for the enforcedGrantControls property.
    */
    public function setEnforcedGrantControls(?array $value): void {
        $this->getBackingStore()->set('enforcedGrantControls', $value);
    }

    /**
     * Sets the enforcedSessionControls property value. Refers to the session controls enforced by the conditional access policy (example: 'Require app enforced controls').
     * @param array<string>|null $value Value to set for the enforcedSessionControls property.
    */
    public function setEnforcedSessionControls(?array $value): void {
        $this->getBackingStore()->set('enforcedSessionControls', $value);
    }

    /**
     * Sets the excludeRulesSatisfied property value. List of key-value pairs containing each matched exclude condition in the conditional access policy. Example: [{'devicePlatform' : 'DevicePlatform'}] means the policy didn’t apply, because the DevicePlatform condition was a match.
     * @param array<ConditionalAccessRuleSatisfied>|null $value Value to set for the excludeRulesSatisfied property.
    */
    public function setExcludeRulesSatisfied(?array $value): void {
        $this->getBackingStore()->set('excludeRulesSatisfied', $value);
    }

    /**
     * Sets the id property value. Identifier of the conditional access policy.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the includeRulesSatisfied property value. List of key-value pairs containing each matched include condition in the conditional access policy. Example: [{ 'application' : 'AllApps'}, {'users': 'Group'}], meaning Application condition was a match because AllApps are included and Users condition was a match because the user was part of the included Group rule.
     * @param array<ConditionalAccessRuleSatisfied>|null $value Value to set for the includeRulesSatisfied property.
    */
    public function setIncludeRulesSatisfied(?array $value): void {
        $this->getBackingStore()->set('includeRulesSatisfied', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the result property value. Indicates the result of the CA policy that was triggered. Possible values are: success, failure, notApplied (Policy isn't applied because policy conditions were not met),notEnabled (This is due to the policy in disabled state), unknown, unknownFutureValue, reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted.
     * @param AppliedConditionalAccessPolicyResult|null $value Value to set for the result property.
    */
    public function setResult(?AppliedConditionalAccessPolicyResult $value): void {
        $this->getBackingStore()->set('result', $value);
    }

    /**
     * Sets the sessionControlsNotSatisfied property value. Refers to the session controls that a sign-in activity did not satisfy. (Example: Application enforced Restrictions).
     * @param array<string>|null $value Value to set for the sessionControlsNotSatisfied property.
    */
    public function setSessionControlsNotSatisfied(?array $value): void {
        $this->getBackingStore()->set('sessionControlsNotSatisfied', $value);
    }

}
