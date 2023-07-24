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
 * VPN Proxy Server.
*/
class VpnProxyServer implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new vpnProxyServer and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the address property value. Address.
     * @return string|null
    */
    public function getAddress(): ?string {
        $val = $this->getBackingStore()->get('address');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'address'");
    }

    /**
     * Gets the automaticConfigurationScriptUrl property value. Proxy's automatic configuration script url.
     * @return string|null
    */
    public function getAutomaticConfigurationScriptUrl(): ?string {
        $val = $this->getBackingStore()->get('automaticConfigurationScriptUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'automaticConfigurationScriptUrl'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'address' => fn(ParseNode $n) => $o->setAddress($n->getStringValue()),
            'automaticConfigurationScriptUrl' => fn(ParseNode $n) => $o->setAutomaticConfigurationScriptUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'port' => fn(ParseNode $n) => $o->setPort($n->getIntegerValue()),
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
     * Gets the port property value. Port. Valid values 0 to 65535
     * @return int|null
    */
    public function getPort(): ?int {
        $val = $this->getBackingStore()->get('port');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'port'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('address', $this->getAddress());
        $writer->writeStringValue('automaticConfigurationScriptUrl', $this->getAutomaticConfigurationScriptUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('port', $this->getPort());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the address property value. Address.
     * @param string|null $value Value to set for the address property.
    */
    public function setAddress(?string $value): void {
        $this->getBackingStore()->set('address', $value);
    }

    /**
     * Sets the automaticConfigurationScriptUrl property value. Proxy's automatic configuration script url.
     * @param string|null $value Value to set for the automaticConfigurationScriptUrl property.
    */
    public function setAutomaticConfigurationScriptUrl(?string $value): void {
        $this->getBackingStore()->set('automaticConfigurationScriptUrl', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the port property value. Port. Valid values 0 to 65535
     * @param int|null $value Value to set for the port property.
    */
    public function setPort(?int $value): void {
        $this->getBackingStore()->set('port', $value);
    }

}
