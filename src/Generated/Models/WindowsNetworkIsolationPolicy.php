<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsNetworkIsolationPolicy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<ProxiedDomain>|null $enterpriseCloudResources Contains a list of enterprise resource domains hosted in the cloud that need to be protected. Connections to these resources are considered enterprise data. If a proxy is paired with a cloud resource, traffic to the cloud resource will be routed through the enterprise network via the denoted proxy server (on Port 80). A proxy server used for this purpose must also be configured using the EnterpriseInternalProxyServers policy. This collection can contain a maximum of 500 elements.
    */
    private ?array $enterpriseCloudResources = null;
    
    /**
     * @var array<string>|null $enterpriseInternalProxyServers This is the comma-separated list of internal proxy servers. For example, '157.54.14.28, 157.54.11.118, 10.202.14.167, 157.53.14.163, 157.69.210.59'. These proxies have been configured by the admin to connect to specific resources on the Internet. They are considered to be enterprise network locations. The proxies are only leveraged in configuring the EnterpriseCloudResources policy to force traffic to the matched cloud resources through these proxies.
    */
    private ?array $enterpriseInternalProxyServers = null;
    
    /**
     * @var array<IpRange>|null $enterpriseIPRanges Sets the enterprise IP ranges that define the computers in the enterprise network. Data that comes from those computers will be considered part of the enterprise and protected. These locations will be considered a safe destination for enterprise data to be shared to. This collection can contain a maximum of 500 elements.
    */
    private ?array $enterpriseIPRanges = null;
    
    /**
     * @var bool|null $enterpriseIPRangesAreAuthoritative Boolean value that tells the client to accept the configured list and not to use heuristics to attempt to find other subnets. Default is false.
    */
    private ?bool $enterpriseIPRangesAreAuthoritative = null;
    
    /**
     * @var array<string>|null $enterpriseNetworkDomainNames This is the list of domains that comprise the boundaries of the enterprise. Data from one of these domains that is sent to a device will be considered enterprise data and protected. These locations will be considered a safe destination for enterprise data to be shared to.
    */
    private ?array $enterpriseNetworkDomainNames = null;
    
    /**
     * @var array<string>|null $enterpriseProxyServers This is a list of proxy servers. Any server not on this list is considered non-enterprise.
    */
    private ?array $enterpriseProxyServers = null;
    
    /**
     * @var bool|null $enterpriseProxyServersAreAuthoritative Boolean value that tells the client to accept the configured list of proxies and not try to detect other work proxies. Default is false
    */
    private ?bool $enterpriseProxyServersAreAuthoritative = null;
    
    /**
     * @var array<string>|null $neutralDomainResources List of domain names that can used for work or personal resource.
    */
    private ?array $neutralDomainResources = null;
    
    /**
     * Instantiates a new windowsNetworkIsolationPolicy and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the enterpriseCloudResources property value. Contains a list of enterprise resource domains hosted in the cloud that need to be protected. Connections to these resources are considered enterprise data. If a proxy is paired with a cloud resource, traffic to the cloud resource will be routed through the enterprise network via the denoted proxy server (on Port 80). A proxy server used for this purpose must also be configured using the EnterpriseInternalProxyServers policy. This collection can contain a maximum of 500 elements.
     * @return array<ProxiedDomain>|null
    */
    public function getEnterpriseCloudResources(): ?array {
        return $this->enterpriseCloudResources;
    }

    /**
     * Gets the enterpriseInternalProxyServers property value. This is the comma-separated list of internal proxy servers. For example, '157.54.14.28, 157.54.11.118, 10.202.14.167, 157.53.14.163, 157.69.210.59'. These proxies have been configured by the admin to connect to specific resources on the Internet. They are considered to be enterprise network locations. The proxies are only leveraged in configuring the EnterpriseCloudResources policy to force traffic to the matched cloud resources through these proxies.
     * @return array<string>|null
    */
    public function getEnterpriseInternalProxyServers(): ?array {
        return $this->enterpriseInternalProxyServers;
    }

    /**
     * Gets the enterpriseIPRanges property value. Sets the enterprise IP ranges that define the computers in the enterprise network. Data that comes from those computers will be considered part of the enterprise and protected. These locations will be considered a safe destination for enterprise data to be shared to. This collection can contain a maximum of 500 elements.
     * @return array<IpRange>|null
    */
    public function getEnterpriseIPRanges(): ?array {
        return $this->enterpriseIPRanges;
    }

    /**
     * Gets the enterpriseIPRangesAreAuthoritative property value. Boolean value that tells the client to accept the configured list and not to use heuristics to attempt to find other subnets. Default is false.
     * @return bool|null
    */
    public function getEnterpriseIPRangesAreAuthoritative(): ?bool {
        return $this->enterpriseIPRangesAreAuthoritative;
    }

    /**
     * Gets the enterpriseNetworkDomainNames property value. This is the list of domains that comprise the boundaries of the enterprise. Data from one of these domains that is sent to a device will be considered enterprise data and protected. These locations will be considered a safe destination for enterprise data to be shared to.
     * @return array<string>|null
    */
    public function getEnterpriseNetworkDomainNames(): ?array {
        return $this->enterpriseNetworkDomainNames;
    }

    /**
     * Gets the enterpriseProxyServers property value. This is a list of proxy servers. Any server not on this list is considered non-enterprise.
     * @return array<string>|null
    */
    public function getEnterpriseProxyServers(): ?array {
        return $this->enterpriseProxyServers;
    }

    /**
     * Gets the enterpriseProxyServersAreAuthoritative property value. Boolean value that tells the client to accept the configured list of proxies and not try to detect other work proxies. Default is false
     * @return bool|null
    */
    public function getEnterpriseProxyServersAreAuthoritative(): ?bool {
        return $this->enterpriseProxyServersAreAuthoritative;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enterpriseCloudResources' => function (ParseNode $n) use ($o) { $o->setEnterpriseCloudResources($n->getCollectionOfObjectValues(array(ProxiedDomain::class, 'createFromDiscriminatorValue'))); },
            'enterpriseInternalProxyServers' => function (ParseNode $n) use ($o) { $o->setEnterpriseInternalProxyServers($n->getCollectionOfPrimitiveValues()); },
            'enterpriseIPRanges' => function (ParseNode $n) use ($o) { $o->setEnterpriseIPRanges($n->getCollectionOfObjectValues(array(IpRange::class, 'createFromDiscriminatorValue'))); },
            'enterpriseIPRangesAreAuthoritative' => function (ParseNode $n) use ($o) { $o->setEnterpriseIPRangesAreAuthoritative($n->getBooleanValue()); },
            'enterpriseNetworkDomainNames' => function (ParseNode $n) use ($o) { $o->setEnterpriseNetworkDomainNames($n->getCollectionOfPrimitiveValues()); },
            'enterpriseProxyServers' => function (ParseNode $n) use ($o) { $o->setEnterpriseProxyServers($n->getCollectionOfPrimitiveValues()); },
            'enterpriseProxyServersAreAuthoritative' => function (ParseNode $n) use ($o) { $o->setEnterpriseProxyServersAreAuthoritative($n->getBooleanValue()); },
            'neutralDomainResources' => function (ParseNode $n) use ($o) { $o->setNeutralDomainResources($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the neutralDomainResources property value. List of domain names that can used for work or personal resource.
     * @return array<string>|null
    */
    public function getNeutralDomainResources(): ?array {
        return $this->neutralDomainResources;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('enterpriseCloudResources', $this->enterpriseCloudResources);
        $writer->writeCollectionOfPrimitiveValues('enterpriseInternalProxyServers', $this->enterpriseInternalProxyServers);
        $writer->writeCollectionOfObjectValues('enterpriseIPRanges', $this->enterpriseIPRanges);
        $writer->writeBooleanValue('enterpriseIPRangesAreAuthoritative', $this->enterpriseIPRangesAreAuthoritative);
        $writer->writeCollectionOfPrimitiveValues('enterpriseNetworkDomainNames', $this->enterpriseNetworkDomainNames);
        $writer->writeCollectionOfPrimitiveValues('enterpriseProxyServers', $this->enterpriseProxyServers);
        $writer->writeBooleanValue('enterpriseProxyServersAreAuthoritative', $this->enterpriseProxyServersAreAuthoritative);
        $writer->writeCollectionOfPrimitiveValues('neutralDomainResources', $this->neutralDomainResources);
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
     * Sets the enterpriseCloudResources property value. Contains a list of enterprise resource domains hosted in the cloud that need to be protected. Connections to these resources are considered enterprise data. If a proxy is paired with a cloud resource, traffic to the cloud resource will be routed through the enterprise network via the denoted proxy server (on Port 80). A proxy server used for this purpose must also be configured using the EnterpriseInternalProxyServers policy. This collection can contain a maximum of 500 elements.
     *  @param array<ProxiedDomain>|null $value Value to set for the enterpriseCloudResources property.
    */
    public function setEnterpriseCloudResources(?array $value ): void {
        $this->enterpriseCloudResources = $value;
    }

    /**
     * Sets the enterpriseInternalProxyServers property value. This is the comma-separated list of internal proxy servers. For example, '157.54.14.28, 157.54.11.118, 10.202.14.167, 157.53.14.163, 157.69.210.59'. These proxies have been configured by the admin to connect to specific resources on the Internet. They are considered to be enterprise network locations. The proxies are only leveraged in configuring the EnterpriseCloudResources policy to force traffic to the matched cloud resources through these proxies.
     *  @param array<string>|null $value Value to set for the enterpriseInternalProxyServers property.
    */
    public function setEnterpriseInternalProxyServers(?array $value ): void {
        $this->enterpriseInternalProxyServers = $value;
    }

    /**
     * Sets the enterpriseIPRanges property value. Sets the enterprise IP ranges that define the computers in the enterprise network. Data that comes from those computers will be considered part of the enterprise and protected. These locations will be considered a safe destination for enterprise data to be shared to. This collection can contain a maximum of 500 elements.
     *  @param array<IpRange>|null $value Value to set for the enterpriseIPRanges property.
    */
    public function setEnterpriseIPRanges(?array $value ): void {
        $this->enterpriseIPRanges = $value;
    }

    /**
     * Sets the enterpriseIPRangesAreAuthoritative property value. Boolean value that tells the client to accept the configured list and not to use heuristics to attempt to find other subnets. Default is false.
     *  @param bool|null $value Value to set for the enterpriseIPRangesAreAuthoritative property.
    */
    public function setEnterpriseIPRangesAreAuthoritative(?bool $value ): void {
        $this->enterpriseIPRangesAreAuthoritative = $value;
    }

    /**
     * Sets the enterpriseNetworkDomainNames property value. This is the list of domains that comprise the boundaries of the enterprise. Data from one of these domains that is sent to a device will be considered enterprise data and protected. These locations will be considered a safe destination for enterprise data to be shared to.
     *  @param array<string>|null $value Value to set for the enterpriseNetworkDomainNames property.
    */
    public function setEnterpriseNetworkDomainNames(?array $value ): void {
        $this->enterpriseNetworkDomainNames = $value;
    }

    /**
     * Sets the enterpriseProxyServers property value. This is a list of proxy servers. Any server not on this list is considered non-enterprise.
     *  @param array<string>|null $value Value to set for the enterpriseProxyServers property.
    */
    public function setEnterpriseProxyServers(?array $value ): void {
        $this->enterpriseProxyServers = $value;
    }

    /**
     * Sets the enterpriseProxyServersAreAuthoritative property value. Boolean value that tells the client to accept the configured list of proxies and not try to detect other work proxies. Default is false
     *  @param bool|null $value Value to set for the enterpriseProxyServersAreAuthoritative property.
    */
    public function setEnterpriseProxyServersAreAuthoritative(?bool $value ): void {
        $this->enterpriseProxyServersAreAuthoritative = $value;
    }

    /**
     * Sets the neutralDomainResources property value. List of domain names that can used for work or personal resource.
     *  @param array<string>|null $value Value to set for the neutralDomainResources property.
    */
    public function setNeutralDomainResources(?array $value ): void {
        $this->neutralDomainResources = $value;
    }

}
