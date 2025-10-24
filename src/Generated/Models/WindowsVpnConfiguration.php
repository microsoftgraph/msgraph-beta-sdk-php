<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

/**
 * Windows VPN configuration profile.
*/
class WindowsVpnConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new WindowsVpnConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsVpnConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsVpnConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsVpnConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.windows10VpnConfiguration': return new Windows10VpnConfiguration();
                case '#microsoft.graph.windows81VpnConfiguration': return new Windows81VpnConfiguration();
                case '#microsoft.graph.windowsPhone81VpnConfiguration': return new WindowsPhone81VpnConfiguration();
            }
        }
        return new WindowsVpnConfiguration();
    }

    /**
     * Gets the connectionName property value. Connection name displayed to the user.
     * @return string|null
    */
    public function getConnectionName(): ?string {
        $val = $this->getBackingStore()->get('connectionName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectionName'");
    }

    /**
     * Gets the customXml property value. Custom XML commands that configures the VPN connection. (UTF8 encoded byte array)
     * @return StreamInterface|null
    */
    public function getCustomXml(): ?StreamInterface {
        $val = $this->getBackingStore()->get('customXml');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customXml'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'connectionName' => fn(ParseNode $n) => $o->setConnectionName($n->getStringValue()),
            'customXml' => fn(ParseNode $n) => $o->setCustomXml($n->getBinaryContent()),
            'servers' => fn(ParseNode $n) => $o->setServers($n->getCollectionOfObjectValues([VpnServer::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the servers property value. List of VPN Servers on the network. Make sure end users can access these network locations. This collection can contain a maximum of 500 elements.
     * @return array<VpnServer>|null
    */
    public function getServers(): ?array {
        $val = $this->getBackingStore()->get('servers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VpnServer::class);
            /** @var array<VpnServer>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servers'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('connectionName', $this->getConnectionName());
        $writer->writeBinaryContent('customXml', $this->getCustomXml());
        $writer->writeCollectionOfObjectValues('servers', $this->getServers());
    }

    /**
     * Sets the connectionName property value. Connection name displayed to the user.
     * @param string|null $value Value to set for the connectionName property.
    */
    public function setConnectionName(?string $value): void {
        $this->getBackingStore()->set('connectionName', $value);
    }

    /**
     * Sets the customXml property value. Custom XML commands that configures the VPN connection. (UTF8 encoded byte array)
     * @param StreamInterface|null $value Value to set for the customXml property.
    */
    public function setCustomXml(?StreamInterface $value): void {
        $this->getBackingStore()->set('customXml', $value);
    }

    /**
     * Sets the servers property value. List of VPN Servers on the network. Make sure end users can access these network locations. This collection can contain a maximum of 500 elements.
     * @param array<VpnServer>|null $value Value to set for the servers property.
    */
    public function setServers(?array $value): void {
        $this->getBackingStore()->set('servers', $value);
    }

}
