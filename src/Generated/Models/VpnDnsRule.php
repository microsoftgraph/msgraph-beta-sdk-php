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

/**
 * VPN DNS Rule definition.
*/
class VpnDnsRule implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new vpnDnsRule and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the autoTrigger property value. Automatically connect to the VPN when the device connects to this domain: Default False.
     * @return bool|null
    */
    public function getAutoTrigger(): ?bool {
        $val = $this->getBackingStore()->get('autoTrigger');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autoTrigger'");
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
            'autoTrigger' => fn(ParseNode $n) => $o->setAutoTrigger($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'persistent' => fn(ParseNode $n) => $o->setPersistent($n->getBooleanValue()),
            'proxyServerUri' => fn(ParseNode $n) => $o->setProxyServerUri($n->getStringValue()),
            'servers' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setServers($val);
            },
        ];
    }

    /**
     * Gets the name property value. Name.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
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
     * Gets the persistent property value. Keep this rule active even when the VPN is not connected: Default False
     * @return bool|null
    */
    public function getPersistent(): ?bool {
        $val = $this->getBackingStore()->get('persistent');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'persistent'");
    }

    /**
     * Gets the proxyServerUri property value. Proxy Server Uri.
     * @return string|null
    */
    public function getProxyServerUri(): ?string {
        $val = $this->getBackingStore()->get('proxyServerUri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'proxyServerUri'");
    }

    /**
     * Gets the servers property value. Servers.
     * @return array<string>|null
    */
    public function getServers(): ?array {
        $val = $this->getBackingStore()->get('servers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servers'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('autoTrigger', $this->getAutoTrigger());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('persistent', $this->getPersistent());
        $writer->writeStringValue('proxyServerUri', $this->getProxyServerUri());
        $writer->writeCollectionOfPrimitiveValues('servers', $this->getServers());
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
     * Sets the autoTrigger property value. Automatically connect to the VPN when the device connects to this domain: Default False.
     * @param bool|null $value Value to set for the autoTrigger property.
    */
    public function setAutoTrigger(?bool $value): void {
        $this->getBackingStore()->set('autoTrigger', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
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
     * Sets the persistent property value. Keep this rule active even when the VPN is not connected: Default False
     * @param bool|null $value Value to set for the persistent property.
    */
    public function setPersistent(?bool $value): void {
        $this->getBackingStore()->set('persistent', $value);
    }

    /**
     * Sets the proxyServerUri property value. Proxy Server Uri.
     * @param string|null $value Value to set for the proxyServerUri property.
    */
    public function setProxyServerUri(?string $value): void {
        $this->getBackingStore()->set('proxyServerUri', $value);
    }

    /**
     * Sets the servers property value. Servers.
     * @param array<string>|null $value Value to set for the servers property.
    */
    public function setServers(?array $value): void {
        $this->getBackingStore()->set('servers', $value);
    }

}
