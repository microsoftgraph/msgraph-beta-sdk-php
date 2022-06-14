<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VpnDnsRule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $autoTrigger Automatically connect to the VPN when the device connects to this domain: Default False.
    */
    private ?bool $autoTrigger = null;
    
    /**
     * @var string|null $name Name.
    */
    private ?string $name = null;
    
    /**
     * @var bool|null $persistent Keep this rule active even when the VPN is not connected: Default False
    */
    private ?bool $persistent = null;
    
    /**
     * @var string|null $proxyServerUri Proxy Server Uri.
    */
    private ?string $proxyServerUri = null;
    
    /**
     * @var array<string>|null $servers Servers.
    */
    private ?array $servers = null;
    
    /**
     * Instantiates a new vpnDnsRule and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VpnDnsRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VpnDnsRule {
        return new VpnDnsRule();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the autoTrigger property value. Automatically connect to the VPN when the device connects to this domain: Default False.
     * @return bool|null
    */
    public function getAutoTrigger(): ?bool {
        return $this->autoTrigger;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'autoTrigger' => function (ParseNode $n) use ($o) { $o->setAutoTrigger($n->getBooleanValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'persistent' => function (ParseNode $n) use ($o) { $o->setPersistent($n->getBooleanValue()); },
            'proxyServerUri' => function (ParseNode $n) use ($o) { $o->setProxyServerUri($n->getStringValue()); },
            'servers' => function (ParseNode $n) use ($o) { $o->setServers($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the name property value. Name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the persistent property value. Keep this rule active even when the VPN is not connected: Default False
     * @return bool|null
    */
    public function getPersistent(): ?bool {
        return $this->persistent;
    }

    /**
     * Gets the proxyServerUri property value. Proxy Server Uri.
     * @return string|null
    */
    public function getProxyServerUri(): ?string {
        return $this->proxyServerUri;
    }

    /**
     * Gets the servers property value. Servers.
     * @return array<string>|null
    */
    public function getServers(): ?array {
        return $this->servers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('autoTrigger', $this->autoTrigger);
        $writer->writeStringValue('name', $this->name);
        $writer->writeBooleanValue('persistent', $this->persistent);
        $writer->writeStringValue('proxyServerUri', $this->proxyServerUri);
        $writer->writeCollectionOfPrimitiveValues('servers', $this->servers);
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
     * Sets the autoTrigger property value. Automatically connect to the VPN when the device connects to this domain: Default False.
     *  @param bool|null $value Value to set for the autoTrigger property.
    */
    public function setAutoTrigger(?bool $value ): void {
        $this->autoTrigger = $value;
    }

    /**
     * Sets the name property value. Name.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the persistent property value. Keep this rule active even when the VPN is not connected: Default False
     *  @param bool|null $value Value to set for the persistent property.
    */
    public function setPersistent(?bool $value ): void {
        $this->persistent = $value;
    }

    /**
     * Sets the proxyServerUri property value. Proxy Server Uri.
     *  @param string|null $value Value to set for the proxyServerUri property.
    */
    public function setProxyServerUri(?string $value ): void {
        $this->proxyServerUri = $value;
    }

    /**
     * Sets the servers property value. Servers.
     *  @param array<string>|null $value Value to set for the servers property.
    */
    public function setServers(?array $value ): void {
        $this->servers = $value;
    }

}
