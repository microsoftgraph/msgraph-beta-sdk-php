<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessRuleSatisfied implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var ConditionalAccessConditions|null $conditionalAccessCondition Refers to the conditional access policy conditions that are satisfied. The possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client, ipAddressSeenByAzureAD, ipAddressSeenByResourceProvider, unknownFutureValue, servicePrincipals, servicePrincipalRisk. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: servicePrincipals, servicePrincipalRisk. */
    private ?ConditionalAccessConditions $conditionalAccessCondition = null;
    
    /** @var ConditionalAccessRule|null $ruleSatisfied Refers to the conditional access policy conditions that were satisfied. The possible values are: allApps, firstPartyApps, office365, appId, acr, appFilter, allUsers, guest, groupId, roleId, userId, allDevicePlatforms, devicePlatform, allLocations, insideCorpnet, allTrustedLocations, locationId, allDevices, deviceFilter, deviceState, unknownFutureValue, deviceFilterIncludeRuleNotMatched, allDeviceStates. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: deviceFilterIncludeRuleNotMatched, allDeviceStates. */
    private ?ConditionalAccessRule $ruleSatisfied = null;
    
    /**
     * Instantiates a new conditionalAccessRuleSatisfied and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessRuleSatisfied
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessRuleSatisfied {
        return new ConditionalAccessRuleSatisfied();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the conditionalAccessCondition property value. Refers to the conditional access policy conditions that are satisfied. The possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client, ipAddressSeenByAzureAD, ipAddressSeenByResourceProvider, unknownFutureValue, servicePrincipals, servicePrincipalRisk. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: servicePrincipals, servicePrincipalRisk.
     * @return ConditionalAccessConditions|null
    */
    public function getConditionalAccessCondition(): ?ConditionalAccessConditions {
        return $this->conditionalAccessCondition;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'conditionalAccessCondition' => function (self $o, ParseNode $n) { $o->setConditionalAccessCondition($n->getEnumValue(ConditionalAccessConditions::class)); },
            'ruleSatisfied' => function (self $o, ParseNode $n) { $o->setRuleSatisfied($n->getEnumValue(ConditionalAccessRule::class)); },
        ];
    }

    /**
     * Gets the ruleSatisfied property value. Refers to the conditional access policy conditions that were satisfied. The possible values are: allApps, firstPartyApps, office365, appId, acr, appFilter, allUsers, guest, groupId, roleId, userId, allDevicePlatforms, devicePlatform, allLocations, insideCorpnet, allTrustedLocations, locationId, allDevices, deviceFilter, deviceState, unknownFutureValue, deviceFilterIncludeRuleNotMatched, allDeviceStates. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: deviceFilterIncludeRuleNotMatched, allDeviceStates.
     * @return ConditionalAccessRule|null
    */
    public function getRuleSatisfied(): ?ConditionalAccessRule {
        return $this->ruleSatisfied;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('conditionalAccessCondition', $this->conditionalAccessCondition);
        $writer->writeEnumValue('ruleSatisfied', $this->ruleSatisfied);
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
     * Sets the conditionalAccessCondition property value. Refers to the conditional access policy conditions that are satisfied. The possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client, ipAddressSeenByAzureAD, ipAddressSeenByResourceProvider, unknownFutureValue, servicePrincipals, servicePrincipalRisk. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: servicePrincipals, servicePrincipalRisk.
     *  @param ConditionalAccessConditions|null $value Value to set for the conditionalAccessCondition property.
    */
    public function setConditionalAccessCondition(?ConditionalAccessConditions $value ): void {
        $this->conditionalAccessCondition = $value;
    }

    /**
     * Sets the ruleSatisfied property value. Refers to the conditional access policy conditions that were satisfied. The possible values are: allApps, firstPartyApps, office365, appId, acr, appFilter, allUsers, guest, groupId, roleId, userId, allDevicePlatforms, devicePlatform, allLocations, insideCorpnet, allTrustedLocations, locationId, allDevices, deviceFilter, deviceState, unknownFutureValue, deviceFilterIncludeRuleNotMatched, allDeviceStates. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: deviceFilterIncludeRuleNotMatched, allDeviceStates.
     *  @param ConditionalAccessRule|null $value Value to set for the ruleSatisfied property.
    */
    public function setRuleSatisfied(?ConditionalAccessRule $value ): void {
        $this->ruleSatisfied = $value;
    }

}
