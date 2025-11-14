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
 * Trusted DNS server configuration for Zero Trust DNS
*/
class WindowsZtdnsSecureDnsServer implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new WindowsZtdnsSecureDnsServer and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsZtdnsSecureDnsServer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsZtdnsSecureDnsServer {
        return new WindowsZtdnsSecureDnsServer();
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
     * Gets the displayName property value. Name assigned to the trusted server entry
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
     * Gets the dnsOverHttpsConfiguration property value. DNS over HTTPS (DoH) configuration settings for the secure DNS server
     * @return WindowsZtdnsSecureDnsServerDnsOverHttpsConfiguration|null
    */
    public function getDnsOverHttpsConfiguration(): ?WindowsZtdnsSecureDnsServerDnsOverHttpsConfiguration {
        $val = $this->getBackingStore()->get('dnsOverHttpsConfiguration');
        if (is_null($val) || $val instanceof WindowsZtdnsSecureDnsServerDnsOverHttpsConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dnsOverHttpsConfiguration'");
    }

    /**
     * Gets the dnsOverTlsConfiguration property value. DNS over TLS (DoT) configuration settings for the secure DNS server
     * @return WindowsZtdnsSecureDnsServerDnsOverTlsConfiguration|null
    */
    public function getDnsOverTlsConfiguration(): ?WindowsZtdnsSecureDnsServerDnsOverTlsConfiguration {
        $val = $this->getBackingStore()->get('dnsOverTlsConfiguration');
        if (is_null($val) || $val instanceof WindowsZtdnsSecureDnsServerDnsOverTlsConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dnsOverTlsConfiguration'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'dnsOverHttpsConfiguration' => fn(ParseNode $n) => $o->setDnsOverHttpsConfiguration($n->getObjectValue([WindowsZtdnsSecureDnsServerDnsOverHttpsConfiguration::class, 'createFromDiscriminatorValue'])),
            'dnsOverTlsConfiguration' => fn(ParseNode $n) => $o->setDnsOverTlsConfiguration($n->getObjectValue([WindowsZtdnsSecureDnsServerDnsOverTlsConfiguration::class, 'createFromDiscriminatorValue'])),
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the ipAddress property value. IP address of a trusted DNS server for ZTDNS (IPv4 or IPv6)
     * @return string|null
    */
    public function getIpAddress(): ?string {
        $val = $this->getBackingStore()->get('ipAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipAddress'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('dnsOverHttpsConfiguration', $this->getDnsOverHttpsConfiguration());
        $writer->writeObjectValue('dnsOverTlsConfiguration', $this->getDnsOverTlsConfiguration());
        $writer->writeStringValue('ipAddress', $this->getIpAddress());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the displayName property value. Name assigned to the trusted server entry
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the dnsOverHttpsConfiguration property value. DNS over HTTPS (DoH) configuration settings for the secure DNS server
     * @param WindowsZtdnsSecureDnsServerDnsOverHttpsConfiguration|null $value Value to set for the dnsOverHttpsConfiguration property.
    */
    public function setDnsOverHttpsConfiguration(?WindowsZtdnsSecureDnsServerDnsOverHttpsConfiguration $value): void {
        $this->getBackingStore()->set('dnsOverHttpsConfiguration', $value);
    }

    /**
     * Sets the dnsOverTlsConfiguration property value. DNS over TLS (DoT) configuration settings for the secure DNS server
     * @param WindowsZtdnsSecureDnsServerDnsOverTlsConfiguration|null $value Value to set for the dnsOverTlsConfiguration property.
    */
    public function setDnsOverTlsConfiguration(?WindowsZtdnsSecureDnsServerDnsOverTlsConfiguration $value): void {
        $this->getBackingStore()->set('dnsOverTlsConfiguration', $value);
    }

    /**
     * Sets the ipAddress property value. IP address of a trusted DNS server for ZTDNS (IPv4 or IPv6)
     * @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value): void {
        $this->getBackingStore()->set('ipAddress', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
