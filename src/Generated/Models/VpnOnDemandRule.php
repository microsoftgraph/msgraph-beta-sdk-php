<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VpnOnDemandRule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var VpnOnDemandRuleConnectionAction|null $action Action. Possible values are: connect, evaluateConnection, ignore, disconnect.
    */
    private ?VpnOnDemandRuleConnectionAction $action = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $dnsSearchDomains DNS Search Domains.
    */
    private ?array $dnsSearchDomains = null;
    
    /**
     * @var VpnOnDemandRuleConnectionDomainAction|null $domainAction Domain Action (Only applicable when Action is evaluate connection). Possible values are: connectIfNeeded, neverConnect.
    */
    private ?VpnOnDemandRuleConnectionDomainAction $domainAction = null;
    
    /**
     * @var array<string>|null $domains Domains (Only applicable when Action is evaluate connection).
    */
    private ?array $domains = null;
    
    /**
     * @var string|null $probeRequiredUrl Probe Required Url (Only applicable when Action is evaluate connection and DomainAction is connect if needed).
    */
    private ?string $probeRequiredUrl = null;
    
    /**
     * @var string|null $probeUrl A URL to probe. If this URL is successfully fetched (returning a 200 HTTP status code) without redirection, this rule matches.
    */
    private ?string $probeUrl = null;
    
    /**
     * @var array<string>|null $ssids Network Service Set Identifiers (SSIDs).
    */
    private ?array $ssids = null;
    
    /**
     * Instantiates a new vpnOnDemandRule and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VpnOnDemandRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VpnOnDemandRule {
        return new VpnOnDemandRule();
    }

    /**
     * Gets the action property value. Action. Possible values are: connect, evaluateConnection, ignore, disconnect.
     * @return VpnOnDemandRuleConnectionAction|null
    */
    public function getAction(): ?VpnOnDemandRuleConnectionAction {
        return $this->action;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the dnsSearchDomains property value. DNS Search Domains.
     * @return array<string>|null
    */
    public function getDnsSearchDomains(): ?array {
        return $this->dnsSearchDomains;
    }

    /**
     * Gets the domainAction property value. Domain Action (Only applicable when Action is evaluate connection). Possible values are: connectIfNeeded, neverConnect.
     * @return VpnOnDemandRuleConnectionDomainAction|null
    */
    public function getDomainAction(): ?VpnOnDemandRuleConnectionDomainAction {
        return $this->domainAction;
    }

    /**
     * Gets the domains property value. Domains (Only applicable when Action is evaluate connection).
     * @return array<string>|null
    */
    public function getDomains(): ?array {
        return $this->domains;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'action' => function (ParseNode $n) use ($o) { $o->setAction($n->getEnumValue(VpnOnDemandRuleConnectionAction::class)); },
            'dnsSearchDomains' => function (ParseNode $n) use ($o) { $o->setDnsSearchDomains($n->getCollectionOfPrimitiveValues()); },
            'domainAction' => function (ParseNode $n) use ($o) { $o->setDomainAction($n->getEnumValue(VpnOnDemandRuleConnectionDomainAction::class)); },
            'domains' => function (ParseNode $n) use ($o) { $o->setDomains($n->getCollectionOfPrimitiveValues()); },
            'probeRequiredUrl' => function (ParseNode $n) use ($o) { $o->setProbeRequiredUrl($n->getStringValue()); },
            'probeUrl' => function (ParseNode $n) use ($o) { $o->setProbeUrl($n->getStringValue()); },
            'ssids' => function (ParseNode $n) use ($o) { $o->setSsids($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the probeRequiredUrl property value. Probe Required Url (Only applicable when Action is evaluate connection and DomainAction is connect if needed).
     * @return string|null
    */
    public function getProbeRequiredUrl(): ?string {
        return $this->probeRequiredUrl;
    }

    /**
     * Gets the probeUrl property value. A URL to probe. If this URL is successfully fetched (returning a 200 HTTP status code) without redirection, this rule matches.
     * @return string|null
    */
    public function getProbeUrl(): ?string {
        return $this->probeUrl;
    }

    /**
     * Gets the ssids property value. Network Service Set Identifiers (SSIDs).
     * @return array<string>|null
    */
    public function getSsids(): ?array {
        return $this->ssids;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('action', $this->action);
        $writer->writeCollectionOfPrimitiveValues('dnsSearchDomains', $this->dnsSearchDomains);
        $writer->writeEnumValue('domainAction', $this->domainAction);
        $writer->writeCollectionOfPrimitiveValues('domains', $this->domains);
        $writer->writeStringValue('probeRequiredUrl', $this->probeRequiredUrl);
        $writer->writeStringValue('probeUrl', $this->probeUrl);
        $writer->writeCollectionOfPrimitiveValues('ssids', $this->ssids);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the action property value. Action. Possible values are: connect, evaluateConnection, ignore, disconnect.
     *  @param VpnOnDemandRuleConnectionAction|null $value Value to set for the action property.
    */
    public function setAction(?VpnOnDemandRuleConnectionAction $value ): void {
        $this->action = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the dnsSearchDomains property value. DNS Search Domains.
     *  @param array<string>|null $value Value to set for the dnsSearchDomains property.
    */
    public function setDnsSearchDomains(?array $value ): void {
        $this->dnsSearchDomains = $value;
    }

    /**
     * Sets the domainAction property value. Domain Action (Only applicable when Action is evaluate connection). Possible values are: connectIfNeeded, neverConnect.
     *  @param VpnOnDemandRuleConnectionDomainAction|null $value Value to set for the domainAction property.
    */
    public function setDomainAction(?VpnOnDemandRuleConnectionDomainAction $value ): void {
        $this->domainAction = $value;
    }

    /**
     * Sets the domains property value. Domains (Only applicable when Action is evaluate connection).
     *  @param array<string>|null $value Value to set for the domains property.
    */
    public function setDomains(?array $value ): void {
        $this->domains = $value;
    }

    /**
     * Sets the probeRequiredUrl property value. Probe Required Url (Only applicable when Action is evaluate connection and DomainAction is connect if needed).
     *  @param string|null $value Value to set for the probeRequiredUrl property.
    */
    public function setProbeRequiredUrl(?string $value ): void {
        $this->probeRequiredUrl = $value;
    }

    /**
     * Sets the probeUrl property value. A URL to probe. If this URL is successfully fetched (returning a 200 HTTP status code) without redirection, this rule matches.
     *  @param string|null $value Value to set for the probeUrl property.
    */
    public function setProbeUrl(?string $value ): void {
        $this->probeUrl = $value;
    }

    /**
     * Sets the ssids property value. Network Service Set Identifiers (SSIDs).
     *  @param array<string>|null $value Value to set for the ssids property.
    */
    public function setSsids(?array $value ): void {
        $this->ssids = $value;
    }

}
