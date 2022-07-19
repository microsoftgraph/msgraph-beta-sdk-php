<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VpnTrafficRule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $appId App identifier, if this traffic rule is triggered by an app.
    */
    private ?string $appId = null;
    
    /**
     * @var VpnTrafficRuleAppType|null $appType Indicates the type of app that a VPN traffic rule is associated with.
    */
    private ?VpnTrafficRuleAppType $appType = null;
    
    /**
     * @var string|null $claims Claims associated with this traffic rule.
    */
    private ?string $claims = null;
    
    /**
     * @var array<IPv4Range>|null $localAddressRanges Local address range. This collection can contain a maximum of 500 elements.
    */
    private ?array $localAddressRanges = null;
    
    /**
     * @var array<NumberRange>|null $localPortRanges Local port range can be set only when protocol is either TCP or UDP (6 or 17). This collection can contain a maximum of 500 elements.
    */
    private ?array $localPortRanges = null;
    
    /**
     * @var string|null $name Name.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $protocols Protocols (0-255). Valid values 0 to 255
    */
    private ?int $protocols = null;
    
    /**
     * @var array<IPv4Range>|null $remoteAddressRanges Remote address range. This collection can contain a maximum of 500 elements.
    */
    private ?array $remoteAddressRanges = null;
    
    /**
     * @var array<NumberRange>|null $remotePortRanges Remote port range can be set only when protocol is either TCP or UDP (6 or 17). This collection can contain a maximum of 500 elements.
    */
    private ?array $remotePortRanges = null;
    
    /**
     * @var VpnTrafficRuleRoutingPolicyType|null $routingPolicyType Specifies the routing policy for a VPN traffic rule.
    */
    private ?VpnTrafficRuleRoutingPolicyType $routingPolicyType = null;
    
    /**
     * Instantiates a new vpnTrafficRule and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.vpnTrafficRule');
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
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appId property value. App identifier, if this traffic rule is triggered by an app.
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->appId;
    }

    /**
     * Gets the appType property value. Indicates the type of app that a VPN traffic rule is associated with.
     * @return VpnTrafficRuleAppType|null
    */
    public function getAppType(): ?VpnTrafficRuleAppType {
        return $this->appType;
    }

    /**
     * Gets the claims property value. Claims associated with this traffic rule.
     * @return string|null
    */
    public function getClaims(): ?string {
        return $this->claims;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appId' => function (ParseNode $n) use ($o) { $o->setAppId($n->getStringValue()); },
            'appType' => function (ParseNode $n) use ($o) { $o->setAppType($n->getEnumValue(VpnTrafficRuleAppType::class)); },
            'claims' => function (ParseNode $n) use ($o) { $o->setClaims($n->getStringValue()); },
            'localAddressRanges' => function (ParseNode $n) use ($o) { $o->setLocalAddressRanges($n->getCollectionOfObjectValues(array(IPv4Range::class, 'createFromDiscriminatorValue'))); },
            'localPortRanges' => function (ParseNode $n) use ($o) { $o->setLocalPortRanges($n->getCollectionOfObjectValues(array(NumberRange::class, 'createFromDiscriminatorValue'))); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'protocols' => function (ParseNode $n) use ($o) { $o->setProtocols($n->getIntegerValue()); },
            'remoteAddressRanges' => function (ParseNode $n) use ($o) { $o->setRemoteAddressRanges($n->getCollectionOfObjectValues(array(IPv4Range::class, 'createFromDiscriminatorValue'))); },
            'remotePortRanges' => function (ParseNode $n) use ($o) { $o->setRemotePortRanges($n->getCollectionOfObjectValues(array(NumberRange::class, 'createFromDiscriminatorValue'))); },
            'routingPolicyType' => function (ParseNode $n) use ($o) { $o->setRoutingPolicyType($n->getEnumValue(VpnTrafficRuleRoutingPolicyType::class)); },
        ];
    }

    /**
     * Gets the localAddressRanges property value. Local address range. This collection can contain a maximum of 500 elements.
     * @return array<IPv4Range>|null
    */
    public function getLocalAddressRanges(): ?array {
        return $this->localAddressRanges;
    }

    /**
     * Gets the localPortRanges property value. Local port range can be set only when protocol is either TCP or UDP (6 or 17). This collection can contain a maximum of 500 elements.
     * @return array<NumberRange>|null
    */
    public function getLocalPortRanges(): ?array {
        return $this->localPortRanges;
    }

    /**
     * Gets the name property value. Name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the protocols property value. Protocols (0-255). Valid values 0 to 255
     * @return int|null
    */
    public function getProtocols(): ?int {
        return $this->protocols;
    }

    /**
     * Gets the remoteAddressRanges property value. Remote address range. This collection can contain a maximum of 500 elements.
     * @return array<IPv4Range>|null
    */
    public function getRemoteAddressRanges(): ?array {
        return $this->remoteAddressRanges;
    }

    /**
     * Gets the remotePortRanges property value. Remote port range can be set only when protocol is either TCP or UDP (6 or 17). This collection can contain a maximum of 500 elements.
     * @return array<NumberRange>|null
    */
    public function getRemotePortRanges(): ?array {
        return $this->remotePortRanges;
    }

    /**
     * Gets the routingPolicyType property value. Specifies the routing policy for a VPN traffic rule.
     * @return VpnTrafficRuleRoutingPolicyType|null
    */
    public function getRoutingPolicyType(): ?VpnTrafficRuleRoutingPolicyType {
        return $this->routingPolicyType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('appId', $this->appId);
        $writer->writeEnumValue('appType', $this->appType);
        $writer->writeStringValue('claims', $this->claims);
        $writer->writeCollectionOfObjectValues('localAddressRanges', $this->localAddressRanges);
        $writer->writeCollectionOfObjectValues('localPortRanges', $this->localPortRanges);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('protocols', $this->protocols);
        $writer->writeCollectionOfObjectValues('remoteAddressRanges', $this->remoteAddressRanges);
        $writer->writeCollectionOfObjectValues('remotePortRanges', $this->remotePortRanges);
        $writer->writeEnumValue('routingPolicyType', $this->routingPolicyType);
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
     * Sets the appId property value. App identifier, if this traffic rule is triggered by an app.
     *  @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value ): void {
        $this->appId = $value;
    }

    /**
     * Sets the appType property value. Indicates the type of app that a VPN traffic rule is associated with.
     *  @param VpnTrafficRuleAppType|null $value Value to set for the appType property.
    */
    public function setAppType(?VpnTrafficRuleAppType $value ): void {
        $this->appType = $value;
    }

    /**
     * Sets the claims property value. Claims associated with this traffic rule.
     *  @param string|null $value Value to set for the claims property.
    */
    public function setClaims(?string $value ): void {
        $this->claims = $value;
    }

    /**
     * Sets the localAddressRanges property value. Local address range. This collection can contain a maximum of 500 elements.
     *  @param array<IPv4Range>|null $value Value to set for the localAddressRanges property.
    */
    public function setLocalAddressRanges(?array $value ): void {
        $this->localAddressRanges = $value;
    }

    /**
     * Sets the localPortRanges property value. Local port range can be set only when protocol is either TCP or UDP (6 or 17). This collection can contain a maximum of 500 elements.
     *  @param array<NumberRange>|null $value Value to set for the localPortRanges property.
    */
    public function setLocalPortRanges(?array $value ): void {
        $this->localPortRanges = $value;
    }

    /**
     * Sets the name property value. Name.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the protocols property value. Protocols (0-255). Valid values 0 to 255
     *  @param int|null $value Value to set for the protocols property.
    */
    public function setProtocols(?int $value ): void {
        $this->protocols = $value;
    }

    /**
     * Sets the remoteAddressRanges property value. Remote address range. This collection can contain a maximum of 500 elements.
     *  @param array<IPv4Range>|null $value Value to set for the remoteAddressRanges property.
    */
    public function setRemoteAddressRanges(?array $value ): void {
        $this->remoteAddressRanges = $value;
    }

    /**
     * Sets the remotePortRanges property value. Remote port range can be set only when protocol is either TCP or UDP (6 or 17). This collection can contain a maximum of 500 elements.
     *  @param array<NumberRange>|null $value Value to set for the remotePortRanges property.
    */
    public function setRemotePortRanges(?array $value ): void {
        $this->remotePortRanges = $value;
    }

    /**
     * Sets the routingPolicyType property value. Specifies the routing policy for a VPN traffic rule.
     *  @param VpnTrafficRuleRoutingPolicyType|null $value Value to set for the routingPolicyType property.
    */
    public function setRoutingPolicyType(?VpnTrafficRuleRoutingPolicyType $value ): void {
        $this->routingPolicyType = $value;
    }

}
