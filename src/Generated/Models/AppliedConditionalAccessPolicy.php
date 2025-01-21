<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AppliedConditionalAccessPolicy implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AppliedConditionalAccessPolicy and sets the default values.
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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the authenticationStrength property value. The custom authentication strength enforced in a Conditional Access policy.
     * @return AuthenticationStrength|null
    */
    public function getAuthenticationStrength(): ?AuthenticationStrength {
        $val = $this->getBackingStore()->get('authenticationStrength');
        if (is_null($val) || $val instanceof AuthenticationStrength) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationStrength'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the conditionsNotSatisfied property value. Refers to the conditional access policy conditions that aren't satisfied. The possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client,ipAddressSeenByAzureAD,ipAddressSeenByResourceProvider,unknownFutureValue,servicePrincipals,servicePrincipalRisk, authenticationFlows, insiderRisk . Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: servicePrincipals,servicePrincipalRisk, authenticationFlows, insiderRisk. conditionalAccessConditions is a multi-valued enumeration and the property can contain multiple values in a comma-separated list.
     * @return ConditionalAccessConditions|null
    */
    public function getConditionsNotSatisfied(): ?ConditionalAccessConditions {
        $val = $this->getBackingStore()->get('conditionsNotSatisfied');
        if (is_null($val) || $val instanceof ConditionalAccessConditions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditionsNotSatisfied'");
    }

    /**
     * Gets the conditionsSatisfied property value. Refers to the conditional access policy conditions that are satisfied. The possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client,ipAddressSeenByAzureAD,ipAddressSeenByResourceProvider,unknownFutureValue,servicePrincipals,servicePrincipalRisk, authenticationFlows, insiderRisk. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: servicePrincipals,servicePrincipalRisk, authenticationFlows, insiderRisk. conditionalAccessConditions is a multi-valued enumeration and the property can contain multiple values in a comma-separated list.
     * @return ConditionalAccessConditions|null
    */
    public function getConditionsSatisfied(): ?ConditionalAccessConditions {
        $val = $this->getBackingStore()->get('conditionsSatisfied');
        if (is_null($val) || $val instanceof ConditionalAccessConditions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditionsSatisfied'");
    }

    /**
     * Gets the displayName property value. Name of the conditional access policy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the enforcedGrantControls property value. Refers to the grant controls enforced by the conditional access policy (example: 'Require multifactor authentication').
     * @return array<string>|null
    */
    public function getEnforcedGrantControls(): ?array {
        $val = $this->getBackingStore()->get('enforcedGrantControls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enforcedGrantControls'");
    }

    /**
     * Gets the enforcedSessionControls property value. Refers to the session controls enforced by the conditional access policy (example: 'Require app enforced controls').
     * @return array<string>|null
    */
    public function getEnforcedSessionControls(): ?array {
        $val = $this->getBackingStore()->get('enforcedSessionControls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enforcedSessionControls'");
    }

    /**
     * Gets the excludeRulesSatisfied property value. List of key-value pairs containing each matched exclude condition in the conditional access policy. Example: [{'devicePlatform' : 'DevicePlatform'}] means the policy didn't apply, because the DevicePlatform condition was a match.
     * @return array<ConditionalAccessRuleSatisfied>|null
    */
    public function getExcludeRulesSatisfied(): ?array {
        $val = $this->getBackingStore()->get('excludeRulesSatisfied');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConditionalAccessRuleSatisfied::class);
            /** @var array<ConditionalAccessRuleSatisfied>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludeRulesSatisfied'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authenticationStrength' => fn(ParseNode $n) => $o->setAuthenticationStrength($n->getObjectValue([AuthenticationStrength::class, 'createFromDiscriminatorValue'])),
            'conditionsNotSatisfied' => fn(ParseNode $n) => $o->setConditionsNotSatisfied($n->getEnumValue(ConditionalAccessConditions::class)),
            'conditionsSatisfied' => fn(ParseNode $n) => $o->setConditionsSatisfied($n->getEnumValue(ConditionalAccessConditions::class)),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'enforcedGrantControls' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setEnforcedGrantControls($val);
            },
            'enforcedSessionControls' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setEnforcedSessionControls($val);
            },
            'excludeRulesSatisfied' => fn(ParseNode $n) => $o->setExcludeRulesSatisfied($n->getCollectionOfObjectValues([ConditionalAccessRuleSatisfied::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'includeRulesSatisfied' => fn(ParseNode $n) => $o->setIncludeRulesSatisfied($n->getCollectionOfObjectValues([ConditionalAccessRuleSatisfied::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'result' => fn(ParseNode $n) => $o->setResult($n->getEnumValue(AppliedConditionalAccessPolicyResult::class)),
            'sessionControlsNotSatisfied' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSessionControlsNotSatisfied($val);
            },
        ];
    }

    /**
     * Gets the id property value. Identifier of the conditional access policy.
     * @return string|null
    */
    public function getId(): ?string {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
    }

    /**
     * Gets the includeRulesSatisfied property value. List of key-value pairs containing each matched include condition in the conditional access policy. Example: [{ 'application' : 'AllApps'}, {'users': 'Group'}], meaning Application condition was a match because AllApps are included and Users condition was a match because the user was part of the included Group rule.
     * @return array<ConditionalAccessRuleSatisfied>|null
    */
    public function getIncludeRulesSatisfied(): ?array {
        $val = $this->getBackingStore()->get('includeRulesSatisfied');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConditionalAccessRuleSatisfied::class);
            /** @var array<ConditionalAccessRuleSatisfied>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includeRulesSatisfied'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the result property value. Indicates the result of the CA policy that was triggered. Possible values are: success, failure, notApplied (policy isn't applied because policy conditions weren't met), notEnabled (this is due to the policy in a disabled state), unknown, unknownFutureValue, reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted.
     * @return AppliedConditionalAccessPolicyResult|null
    */
    public function getResult(): ?AppliedConditionalAccessPolicyResult {
        $val = $this->getBackingStore()->get('result');
        if (is_null($val) || $val instanceof AppliedConditionalAccessPolicyResult) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'result'");
    }

    /**
     * Gets the sessionControlsNotSatisfied property value. Refers to the session controls that a sign-in activity didn't satisfy. (Example: Application enforced Restrictions).
     * @return array<string>|null
    */
    public function getSessionControlsNotSatisfied(): ?array {
        $val = $this->getBackingStore()->get('sessionControlsNotSatisfied');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sessionControlsNotSatisfied'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('authenticationStrength', $this->getAuthenticationStrength());
        $writer->writeEnumValue('conditionsNotSatisfied', $this->getConditionsNotSatisfied());
        $writer->writeEnumValue('conditionsSatisfied', $this->getConditionsSatisfied());
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
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the conditionsNotSatisfied property value. Refers to the conditional access policy conditions that aren't satisfied. The possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client,ipAddressSeenByAzureAD,ipAddressSeenByResourceProvider,unknownFutureValue,servicePrincipals,servicePrincipalRisk, authenticationFlows, insiderRisk . Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: servicePrincipals,servicePrincipalRisk, authenticationFlows, insiderRisk. conditionalAccessConditions is a multi-valued enumeration and the property can contain multiple values in a comma-separated list.
     * @param ConditionalAccessConditions|null $value Value to set for the conditionsNotSatisfied property.
    */
    public function setConditionsNotSatisfied(?ConditionalAccessConditions $value): void {
        $this->getBackingStore()->set('conditionsNotSatisfied', $value);
    }

    /**
     * Sets the conditionsSatisfied property value. Refers to the conditional access policy conditions that are satisfied. The possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client,ipAddressSeenByAzureAD,ipAddressSeenByResourceProvider,unknownFutureValue,servicePrincipals,servicePrincipalRisk, authenticationFlows, insiderRisk. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: servicePrincipals,servicePrincipalRisk, authenticationFlows, insiderRisk. conditionalAccessConditions is a multi-valued enumeration and the property can contain multiple values in a comma-separated list.
     * @param ConditionalAccessConditions|null $value Value to set for the conditionsSatisfied property.
    */
    public function setConditionsSatisfied(?ConditionalAccessConditions $value): void {
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
     * Sets the enforcedGrantControls property value. Refers to the grant controls enforced by the conditional access policy (example: 'Require multifactor authentication').
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
     * Sets the excludeRulesSatisfied property value. List of key-value pairs containing each matched exclude condition in the conditional access policy. Example: [{'devicePlatform' : 'DevicePlatform'}] means the policy didn't apply, because the DevicePlatform condition was a match.
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
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the result property value. Indicates the result of the CA policy that was triggered. Possible values are: success, failure, notApplied (policy isn't applied because policy conditions weren't met), notEnabled (this is due to the policy in a disabled state), unknown, unknownFutureValue, reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: reportOnlySuccess, reportOnlyFailure, reportOnlyNotApplied, reportOnlyInterrupted.
     * @param AppliedConditionalAccessPolicyResult|null $value Value to set for the result property.
    */
    public function setResult(?AppliedConditionalAccessPolicyResult $value): void {
        $this->getBackingStore()->set('result', $value);
    }

    /**
     * Sets the sessionControlsNotSatisfied property value. Refers to the session controls that a sign-in activity didn't satisfy. (Example: Application enforced Restrictions).
     * @param array<string>|null $value Value to set for the sessionControlsNotSatisfied property.
    */
    public function setSessionControlsNotSatisfied(?array $value): void {
        $this->getBackingStore()->set('sessionControlsNotSatisfied', $value);
    }

}
