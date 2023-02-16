<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * VPN Traffic Rule definition.
*/
class VpnTrafficRule implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new vpnTrafficRule and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VpnTrafficRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VpnTrafficRule {
        return new VpnTrafficRule();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the appId property value. App identifier, if this traffic rule is triggered by an app.
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->getBackingStore()->get('appId');
    }

    /**
     * Gets the appType property value. Indicates the type of app that a VPN traffic rule is associated with.
     * @return VpnTrafficRuleAppType|null
    */
    public function getAppType(): ?VpnTrafficRuleAppType {
        return $this->getBackingStore()->get('appType');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the claims property value. Claims associated with this traffic rule.
     * @return string|null
    */
    public function getClaims(): ?string {
        return $this->getBackingStore()->get('claims');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'appType' => fn(ParseNode $n) => $o->setAppType($n->getEnumValue(VpnTrafficRuleAppType::class)),
            'claims' => fn(ParseNode $n) => $o->setClaims($n->getStringValue()),
            'localAddressRanges' => fn(ParseNode $n) => $o->setLocalAddressRanges($n->getCollectionOfObjectValues([IPv4Range::class, 'createFromDiscriminatorValue'])),
            'localPortRanges' => fn(ParseNode $n) => $o->setLocalPortRanges($n->getCollectionOfObjectValues([NumberRange::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'protocols' => fn(ParseNode $n) => $o->setProtocols($n->getIntegerValue()),
            'remoteAddressRanges' => fn(ParseNode $n) => $o->setRemoteAddressRanges($n->getCollectionOfObjectValues([IPv4Range::class, 'createFromDiscriminatorValue'])),
            'remotePortRanges' => fn(ParseNode $n) => $o->setRemotePortRanges($n->getCollectionOfObjectValues([NumberRange::class, 'createFromDiscriminatorValue'])),
            'routingPolicyType' => fn(ParseNode $n) => $o->setRoutingPolicyType($n->getEnumValue(VpnTrafficRuleRoutingPolicyType::class)),
        ];
    }

    /**
     * Gets the localAddressRanges property value. Local address range. This collection can contain a maximum of 500 elements.
     * @return array<IPv4Range>|null
    */
    public function getLocalAddressRanges(): ?array {
        return $this->getBackingStore()->get('localAddressRanges');
    }

    /**
     * Gets the localPortRanges property value. Local port range can be set only when protocol is either TCP or UDP (6 or 17). This collection can contain a maximum of 500 elements.
     * @return array<NumberRange>|null
    */
    public function getLocalPortRanges(): ?array {
        return $this->getBackingStore()->get('localPortRanges');
    }

    /**
     * Gets the name property value. Name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the protocols property value. Protocols (0-255). Valid values 0 to 255
     * @return int|null
    */
    public function getProtocols(): ?int {
        return $this->getBackingStore()->get('protocols');
    }

    /**
     * Gets the remoteAddressRanges property value. Remote address range. This collection can contain a maximum of 500 elements.
     * @return array<IPv4Range>|null
    */
    public function getRemoteAddressRanges(): ?array {
        return $this->getBackingStore()->get('remoteAddressRanges');
    }

    /**
     * Gets the remotePortRanges property value. Remote port range can be set only when protocol is either TCP or UDP (6 or 17). This collection can contain a maximum of 500 elements.
     * @return array<NumberRange>|null
    */
    public function getRemotePortRanges(): ?array {
        return $this->getBackingStore()->get('remotePortRanges');
    }

    /**
     * Gets the routingPolicyType property value. Specifies the routing policy for a VPN traffic rule.
     * @return VpnTrafficRuleRoutingPolicyType|null
    */
    public function getRoutingPolicyType(): ?VpnTrafficRuleRoutingPolicyType {
        return $this->getBackingStore()->get('routingPolicyType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeEnumValue('appType', $this->getAppType());
        $writer->writeStringValue('claims', $this->getClaims());
        $writer->writeCollectionOfObjectValues('localAddressRanges', $this->getLocalAddressRanges());
        $writer->writeCollectionOfObjectValues('localPortRanges', $this->getLocalPortRanges());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('protocols', $this->getProtocols());
        $writer->writeCollectionOfObjectValues('remoteAddressRanges', $this->getRemoteAddressRanges());
        $writer->writeCollectionOfObjectValues('remotePortRanges', $this->getRemotePortRanges());
        $writer->writeEnumValue('routingPolicyType', $this->getRoutingPolicyType());
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
     * Sets the appId property value. App identifier, if this traffic rule is triggered by an app.
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the appType property value. Indicates the type of app that a VPN traffic rule is associated with.
     * @param VpnTrafficRuleAppType|null $value Value to set for the appType property.
    */
    public function setAppType(?VpnTrafficRuleAppType $value): void {
        $this->getBackingStore()->set('appType', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the claims property value. Claims associated with this traffic rule.
     * @param string|null $value Value to set for the claims property.
    */
    public function setClaims(?string $value): void {
        $this->getBackingStore()->set('claims', $value);
    }

    /**
     * Sets the localAddressRanges property value. Local address range. This collection can contain a maximum of 500 elements.
     * @param array<IPv4Range>|null $value Value to set for the localAddressRanges property.
    */
    public function setLocalAddressRanges(?array $value): void {
        $this->getBackingStore()->set('localAddressRanges', $value);
    }

    /**
     * Sets the localPortRanges property value. Local port range can be set only when protocol is either TCP or UDP (6 or 17). This collection can contain a maximum of 500 elements.
     * @param array<NumberRange>|null $value Value to set for the localPortRanges property.
    */
    public function setLocalPortRanges(?array $value): void {
        $this->getBackingStore()->set('localPortRanges', $value);
    }

    /**
     * Sets the name property value. Name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the protocols property value. Protocols (0-255). Valid values 0 to 255
     * @param int|null $value Value to set for the protocols property.
    */
    public function setProtocols(?int $value): void {
        $this->getBackingStore()->set('protocols', $value);
    }

    /**
     * Sets the remoteAddressRanges property value. Remote address range. This collection can contain a maximum of 500 elements.
     * @param array<IPv4Range>|null $value Value to set for the remoteAddressRanges property.
    */
    public function setRemoteAddressRanges(?array $value): void {
        $this->getBackingStore()->set('remoteAddressRanges', $value);
    }

    /**
     * Sets the remotePortRanges property value. Remote port range can be set only when protocol is either TCP or UDP (6 or 17). This collection can contain a maximum of 500 elements.
     * @param array<NumberRange>|null $value Value to set for the remotePortRanges property.
    */
    public function setRemotePortRanges(?array $value): void {
        $this->getBackingStore()->set('remotePortRanges', $value);
    }

    /**
     * Sets the routingPolicyType property value. Specifies the routing policy for a VPN traffic rule.
     * @param VpnTrafficRuleRoutingPolicyType|null $value Value to set for the routingPolicyType property.
    */
    public function setRoutingPolicyType(?VpnTrafficRuleRoutingPolicyType $value): void {
        $this->getBackingStore()->set('routingPolicyType', $value);
    }

}
