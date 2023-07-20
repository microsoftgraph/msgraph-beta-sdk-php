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
 * Windows Network Isolation Policy
*/
class WindowsNetworkIsolationPolicy implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new windowsNetworkIsolationPolicy and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsNetworkIsolationPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsNetworkIsolationPolicy {
        return new WindowsNetworkIsolationPolicy();
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the enterpriseCloudResources property value. Contains a list of enterprise resource domains hosted in the cloud that need to be protected. Connections to these resources are considered enterprise data. If a proxy is paired with a cloud resource, traffic to the cloud resource will be routed through the enterprise network via the denoted proxy server (on Port 80). A proxy server used for this purpose must also be configured using the EnterpriseInternalProxyServers policy. This collection can contain a maximum of 500 elements.
     * @return array<ProxiedDomain>|null
    */
    public function getEnterpriseCloudResources(): ?array {
        $val = $this->getBackingStore()->get('enterpriseCloudResources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProxiedDomain::class);
            /** @var array<ProxiedDomain>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseCloudResources'");
    }

    /**
     * Gets the enterpriseInternalProxyServers property value. This is the comma-separated list of internal proxy servers. For example, '157.54.14.28, 157.54.11.118, 10.202.14.167, 157.53.14.163, 157.69.210.59'. These proxies have been configured by the admin to connect to specific resources on the Internet. They are considered to be enterprise network locations. The proxies are only leveraged in configuring the EnterpriseCloudResources policy to force traffic to the matched cloud resources through these proxies.
     * @return array<string>|null
    */
    public function getEnterpriseInternalProxyServers(): ?array {
        $val = $this->getBackingStore()->get('enterpriseInternalProxyServers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseInternalProxyServers'");
    }

    /**
     * Gets the enterpriseIPRanges property value. Sets the enterprise IP ranges that define the computers in the enterprise network. Data that comes from those computers will be considered part of the enterprise and protected. These locations will be considered a safe destination for enterprise data to be shared to. This collection can contain a maximum of 500 elements.
     * @return array<IpRange>|null
    */
    public function getEnterpriseIPRanges(): ?array {
        $val = $this->getBackingStore()->get('enterpriseIPRanges');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IpRange::class);
            /** @var array<IpRange>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseIPRanges'");
    }

    /**
     * Gets the enterpriseIPRangesAreAuthoritative property value. Boolean value that tells the client to accept the configured list and not to use heuristics to attempt to find other subnets. Default is false.
     * @return bool|null
    */
    public function getEnterpriseIPRangesAreAuthoritative(): ?bool {
        $val = $this->getBackingStore()->get('enterpriseIPRangesAreAuthoritative');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseIPRangesAreAuthoritative'");
    }

    /**
     * Gets the enterpriseNetworkDomainNames property value. This is the list of domains that comprise the boundaries of the enterprise. Data from one of these domains that is sent to a device will be considered enterprise data and protected. These locations will be considered a safe destination for enterprise data to be shared to.
     * @return array<string>|null
    */
    public function getEnterpriseNetworkDomainNames(): ?array {
        $val = $this->getBackingStore()->get('enterpriseNetworkDomainNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseNetworkDomainNames'");
    }

    /**
     * Gets the enterpriseProxyServers property value. This is a list of proxy servers. Any server not on this list is considered non-enterprise.
     * @return array<string>|null
    */
    public function getEnterpriseProxyServers(): ?array {
        $val = $this->getBackingStore()->get('enterpriseProxyServers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseProxyServers'");
    }

    /**
     * Gets the enterpriseProxyServersAreAuthoritative property value. Boolean value that tells the client to accept the configured list of proxies and not try to detect other work proxies. Default is false
     * @return bool|null
    */
    public function getEnterpriseProxyServersAreAuthoritative(): ?bool {
        $val = $this->getBackingStore()->get('enterpriseProxyServersAreAuthoritative');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseProxyServersAreAuthoritative'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enterpriseCloudResources' => fn(ParseNode $n) => $o->setEnterpriseCloudResources($n->getCollectionOfObjectValues([ProxiedDomain::class, 'createFromDiscriminatorValue'])),
            'enterpriseInternalProxyServers' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setEnterpriseInternalProxyServers($val);
            },
            'enterpriseIPRanges' => fn(ParseNode $n) => $o->setEnterpriseIPRanges($n->getCollectionOfObjectValues([IpRange::class, 'createFromDiscriminatorValue'])),
            'enterpriseIPRangesAreAuthoritative' => fn(ParseNode $n) => $o->setEnterpriseIPRangesAreAuthoritative($n->getBooleanValue()),
            'enterpriseNetworkDomainNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setEnterpriseNetworkDomainNames($val);
            },
            'enterpriseProxyServers' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setEnterpriseProxyServers($val);
            },
            'enterpriseProxyServersAreAuthoritative' => fn(ParseNode $n) => $o->setEnterpriseProxyServersAreAuthoritative($n->getBooleanValue()),
            'neutralDomainResources' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setNeutralDomainResources($val);
            },
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the neutralDomainResources property value. List of domain names that can used for work or personal resource.
     * @return array<string>|null
    */
    public function getNeutralDomainResources(): ?array {
        $val = $this->getBackingStore()->get('neutralDomainResources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'neutralDomainResources'");
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
        $writer->writeCollectionOfObjectValues('enterpriseCloudResources', $this->getEnterpriseCloudResources());
        $writer->writeCollectionOfPrimitiveValues('enterpriseInternalProxyServers', $this->getEnterpriseInternalProxyServers());
        $writer->writeCollectionOfObjectValues('enterpriseIPRanges', $this->getEnterpriseIPRanges());
        $writer->writeBooleanValue('enterpriseIPRangesAreAuthoritative', $this->getEnterpriseIPRangesAreAuthoritative());
        $writer->writeCollectionOfPrimitiveValues('enterpriseNetworkDomainNames', $this->getEnterpriseNetworkDomainNames());
        $writer->writeCollectionOfPrimitiveValues('enterpriseProxyServers', $this->getEnterpriseProxyServers());
        $writer->writeBooleanValue('enterpriseProxyServersAreAuthoritative', $this->getEnterpriseProxyServersAreAuthoritative());
        $writer->writeCollectionOfPrimitiveValues('neutralDomainResources', $this->getNeutralDomainResources());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the enterpriseCloudResources property value. Contains a list of enterprise resource domains hosted in the cloud that need to be protected. Connections to these resources are considered enterprise data. If a proxy is paired with a cloud resource, traffic to the cloud resource will be routed through the enterprise network via the denoted proxy server (on Port 80). A proxy server used for this purpose must also be configured using the EnterpriseInternalProxyServers policy. This collection can contain a maximum of 500 elements.
     * @param array<ProxiedDomain>|null $value Value to set for the enterpriseCloudResources property.
    */
    public function setEnterpriseCloudResources(?array $value): void {
        $this->getBackingStore()->set('enterpriseCloudResources', $value);
    }

    /**
     * Sets the enterpriseInternalProxyServers property value. This is the comma-separated list of internal proxy servers. For example, '157.54.14.28, 157.54.11.118, 10.202.14.167, 157.53.14.163, 157.69.210.59'. These proxies have been configured by the admin to connect to specific resources on the Internet. They are considered to be enterprise network locations. The proxies are only leveraged in configuring the EnterpriseCloudResources policy to force traffic to the matched cloud resources through these proxies.
     * @param array<string>|null $value Value to set for the enterpriseInternalProxyServers property.
    */
    public function setEnterpriseInternalProxyServers(?array $value): void {
        $this->getBackingStore()->set('enterpriseInternalProxyServers', $value);
    }

    /**
     * Sets the enterpriseIPRanges property value. Sets the enterprise IP ranges that define the computers in the enterprise network. Data that comes from those computers will be considered part of the enterprise and protected. These locations will be considered a safe destination for enterprise data to be shared to. This collection can contain a maximum of 500 elements.
     * @param array<IpRange>|null $value Value to set for the enterpriseIPRanges property.
    */
    public function setEnterpriseIPRanges(?array $value): void {
        $this->getBackingStore()->set('enterpriseIPRanges', $value);
    }

    /**
     * Sets the enterpriseIPRangesAreAuthoritative property value. Boolean value that tells the client to accept the configured list and not to use heuristics to attempt to find other subnets. Default is false.
     * @param bool|null $value Value to set for the enterpriseIPRangesAreAuthoritative property.
    */
    public function setEnterpriseIPRangesAreAuthoritative(?bool $value): void {
        $this->getBackingStore()->set('enterpriseIPRangesAreAuthoritative', $value);
    }

    /**
     * Sets the enterpriseNetworkDomainNames property value. This is the list of domains that comprise the boundaries of the enterprise. Data from one of these domains that is sent to a device will be considered enterprise data and protected. These locations will be considered a safe destination for enterprise data to be shared to.
     * @param array<string>|null $value Value to set for the enterpriseNetworkDomainNames property.
    */
    public function setEnterpriseNetworkDomainNames(?array $value): void {
        $this->getBackingStore()->set('enterpriseNetworkDomainNames', $value);
    }

    /**
     * Sets the enterpriseProxyServers property value. This is a list of proxy servers. Any server not on this list is considered non-enterprise.
     * @param array<string>|null $value Value to set for the enterpriseProxyServers property.
    */
    public function setEnterpriseProxyServers(?array $value): void {
        $this->getBackingStore()->set('enterpriseProxyServers', $value);
    }

    /**
     * Sets the enterpriseProxyServersAreAuthoritative property value. Boolean value that tells the client to accept the configured list of proxies and not try to detect other work proxies. Default is false
     * @param bool|null $value Value to set for the enterpriseProxyServersAreAuthoritative property.
    */
    public function setEnterpriseProxyServersAreAuthoritative(?bool $value): void {
        $this->getBackingStore()->set('enterpriseProxyServersAreAuthoritative', $value);
    }

    /**
     * Sets the neutralDomainResources property value. List of domain names that can used for work or personal resource.
     * @param array<string>|null $value Value to set for the neutralDomainResources property.
    */
    public function setNeutralDomainResources(?array $value): void {
        $this->getBackingStore()->set('neutralDomainResources', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
