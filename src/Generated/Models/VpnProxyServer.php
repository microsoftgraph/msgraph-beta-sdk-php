<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VpnProxyServer implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $address Address.
    */
    private ?string $address = null;
    
    /**
     * @var string|null $automaticConfigurationScriptUrl Proxy's automatic configuration script url.
    */
    private ?string $automaticConfigurationScriptUrl = null;
    
    /**
     * @var int|null $port Port. Valid values 0 to 65535
    */
    private ?int $port = null;
    
    /**
     * Instantiates a new vpnProxyServer and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VpnProxyServer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VpnProxyServer {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.windows10VpnProxyServer': return new Windows10VpnProxyServer();
                case '#microsoft.graph.windows81VpnProxyServer': return new Windows81VpnProxyServer();
            }
        }
        return new VpnProxyServer();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the address property value. Address.
     * @return string|null
    */
    public function getAddress(): ?string {
        return $this->address;
    }

    /**
     * Gets the automaticConfigurationScriptUrl property value. Proxy's automatic configuration script url.
     * @return string|null
    */
    public function getAutomaticConfigurationScriptUrl(): ?string {
        return $this->automaticConfigurationScriptUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'address' => function (ParseNode $n) use ($o) { $o->setAddress($n->getStringValue()); },
            'automaticConfigurationScriptUrl' => function (ParseNode $n) use ($o) { $o->setAutomaticConfigurationScriptUrl($n->getStringValue()); },
            'port' => function (ParseNode $n) use ($o) { $o->setPort($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the port property value. Port. Valid values 0 to 65535
     * @return int|null
    */
    public function getPort(): ?int {
        return $this->port;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('address', $this->address);
        $writer->writeStringValue('automaticConfigurationScriptUrl', $this->automaticConfigurationScriptUrl);
        $writer->writeIntegerValue('port', $this->port);
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
     * Sets the address property value. Address.
     *  @param string|null $value Value to set for the address property.
    */
    public function setAddress(?string $value ): void {
        $this->address = $value;
    }

    /**
     * Sets the automaticConfigurationScriptUrl property value. Proxy's automatic configuration script url.
     *  @param string|null $value Value to set for the automaticConfigurationScriptUrl property.
    */
    public function setAutomaticConfigurationScriptUrl(?string $value ): void {
        $this->automaticConfigurationScriptUrl = $value;
    }

    /**
     * Sets the port property value. Port. Valid values 0 to 65535
     *  @param int|null $value Value to set for the port property.
    */
    public function setPort(?int $value ): void {
        $this->port = $value;
    }

}
