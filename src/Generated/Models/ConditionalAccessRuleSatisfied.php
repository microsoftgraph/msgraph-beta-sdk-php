<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ConditionalAccessRuleSatisfied implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ConditionalAccessRuleSatisfied and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessRuleSatisfied
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessRuleSatisfied {
        return new ConditionalAccessRuleSatisfied();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the conditionalAccessCondition property value. Refers to the conditional access policy conditions that are satisfied. The possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client, ipAddressSeenByAzureAD, ipAddressSeenByResourceProvider, unknownFutureValue, servicePrincipals, servicePrincipalRisk, authenticationFlows, insiderRisk. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: servicePrincipals, servicePrincipalRisk, authenticationFlows, insiderRisk. conditionalAccessConditions is a multi-valued enumeration and the property can contain multiple values in a comma-separated list.
     * @return ConditionalAccessConditions|null
    */
    public function getConditionalAccessCondition(): ?ConditionalAccessConditions {
        $val = $this->getBackingStore()->get('conditionalAccessCondition');
        if (is_null($val) || $val instanceof ConditionalAccessConditions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditionalAccessCondition'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'conditionalAccessCondition' => fn(ParseNode $n) => $o->setConditionalAccessCondition($n->getEnumValue(ConditionalAccessConditions::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'ruleSatisfied' => fn(ParseNode $n) => $o->setRuleSatisfied($n->getEnumValue(ConditionalAccessRule::class)),
        ];
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
     * Gets the ruleSatisfied property value. Refers to the conditional access policy conditions that were satisfied. The possible values are: allApps, firstPartyApps, office365, appId, acr, appFilter, allUsers, guest, groupId, roleId, userId, allDevicePlatforms, devicePlatform, allLocations, insideCorpnet, allTrustedLocations, locationId, allDevices, deviceFilter, deviceState, unknownFutureValue, deviceFilterIncludeRuleNotMatched, allDeviceStates, anonymizedIPAddress, unfamiliarFeatures, nationStateIPAddress, realTimeThreatIntelligence, internalGuest, b2bCollaborationGuest, b2bCollaborationMember, b2bDirectConnectUser, otherExternalUser, serviceProvider, microsoftAdminPortals, deviceCodeFlow, accountTransfer, insiderRisk. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: deviceFilterIncludeRuleNotMatched, allDeviceStates, anonymizedIPAddress, unfamiliarFeatures, nationStateIPAddress, realTimeThreatIntelligence, internalGuest, b2bCollaborationGuest, b2bCollaborationMember, b2bDirectConnectUser, otherExternalUser, serviceProvider, microsoftAdminPortals, deviceCodeFlow, accountTransfer, insiderRisk.
     * @return ConditionalAccessRule|null
    */
    public function getRuleSatisfied(): ?ConditionalAccessRule {
        $val = $this->getBackingStore()->get('ruleSatisfied');
        if (is_null($val) || $val instanceof ConditionalAccessRule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ruleSatisfied'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('conditionalAccessCondition', $this->getConditionalAccessCondition());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('ruleSatisfied', $this->getRuleSatisfied());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the conditionalAccessCondition property value. Refers to the conditional access policy conditions that are satisfied. The possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client, ipAddressSeenByAzureAD, ipAddressSeenByResourceProvider, unknownFutureValue, servicePrincipals, servicePrincipalRisk, authenticationFlows, insiderRisk. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: servicePrincipals, servicePrincipalRisk, authenticationFlows, insiderRisk. conditionalAccessConditions is a multi-valued enumeration and the property can contain multiple values in a comma-separated list.
     * @param ConditionalAccessConditions|null $value Value to set for the conditionalAccessCondition property.
    */
    public function setConditionalAccessCondition(?ConditionalAccessConditions $value): void {
        $this->getBackingStore()->set('conditionalAccessCondition', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the ruleSatisfied property value. Refers to the conditional access policy conditions that were satisfied. The possible values are: allApps, firstPartyApps, office365, appId, acr, appFilter, allUsers, guest, groupId, roleId, userId, allDevicePlatforms, devicePlatform, allLocations, insideCorpnet, allTrustedLocations, locationId, allDevices, deviceFilter, deviceState, unknownFutureValue, deviceFilterIncludeRuleNotMatched, allDeviceStates, anonymizedIPAddress, unfamiliarFeatures, nationStateIPAddress, realTimeThreatIntelligence, internalGuest, b2bCollaborationGuest, b2bCollaborationMember, b2bDirectConnectUser, otherExternalUser, serviceProvider, microsoftAdminPortals, deviceCodeFlow, accountTransfer, insiderRisk. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: deviceFilterIncludeRuleNotMatched, allDeviceStates, anonymizedIPAddress, unfamiliarFeatures, nationStateIPAddress, realTimeThreatIntelligence, internalGuest, b2bCollaborationGuest, b2bCollaborationMember, b2bDirectConnectUser, otherExternalUser, serviceProvider, microsoftAdminPortals, deviceCodeFlow, accountTransfer, insiderRisk.
     * @param ConditionalAccessRule|null $value Value to set for the ruleSatisfied property.
    */
    public function setRuleSatisfied(?ConditionalAccessRule $value): void {
        $this->getBackingStore()->set('ruleSatisfied', $value);
    }

}
