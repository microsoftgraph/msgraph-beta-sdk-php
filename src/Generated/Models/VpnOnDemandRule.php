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
 * VPN On-Demand Rule definition.
*/
class VpnOnDemandRule implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new vpnOnDemandRule and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the action property value. VPN On-Demand Rule Connection Action.
     * @return VpnOnDemandRuleConnectionAction|null
    */
    public function getAction(): ?VpnOnDemandRuleConnectionAction {
        $val = $this->getBackingStore()->get('action');
        if (is_null($val) || $val instanceof VpnOnDemandRuleConnectionAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'action'");
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
     * Gets the dnsSearchDomains property value. DNS Search Domains.
     * @return array<string>|null
    */
    public function getDnsSearchDomains(): ?array {
        $val = $this->getBackingStore()->get('dnsSearchDomains');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dnsSearchDomains'");
    }

    /**
     * Gets the dnsServerAddressMatch property value. DNS Search Server Address.
     * @return array<string>|null
    */
    public function getDnsServerAddressMatch(): ?array {
        $val = $this->getBackingStore()->get('dnsServerAddressMatch');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dnsServerAddressMatch'");
    }

    /**
     * Gets the domainAction property value. VPN On-Demand Rule Connection Domain Action.
     * @return VpnOnDemandRuleConnectionDomainAction|null
    */
    public function getDomainAction(): ?VpnOnDemandRuleConnectionDomainAction {
        $val = $this->getBackingStore()->get('domainAction');
        if (is_null($val) || $val instanceof VpnOnDemandRuleConnectionDomainAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainAction'");
    }

    /**
     * Gets the domains property value. Domains (Only applicable when Action is evaluate connection).
     * @return array<string>|null
    */
    public function getDomains(): ?array {
        $val = $this->getBackingStore()->get('domains');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domains'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(VpnOnDemandRuleConnectionAction::class)),
            'dnsSearchDomains' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDnsSearchDomains($val);
            },
            'dnsServerAddressMatch' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDnsServerAddressMatch($val);
            },
            'domainAction' => fn(ParseNode $n) => $o->setDomainAction($n->getEnumValue(VpnOnDemandRuleConnectionDomainAction::class)),
            'domains' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDomains($val);
            },
            'interfaceTypeMatch' => fn(ParseNode $n) => $o->setInterfaceTypeMatch($n->getEnumValue(VpnOnDemandRuleInterfaceTypeMatch::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'probeRequiredUrl' => fn(ParseNode $n) => $o->setProbeRequiredUrl($n->getStringValue()),
            'probeUrl' => fn(ParseNode $n) => $o->setProbeUrl($n->getStringValue()),
            'ssids' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSsids($val);
            },
        ];
    }

    /**
     * Gets the interfaceTypeMatch property value. VPN On-Demand Rule Connection network interface type.
     * @return VpnOnDemandRuleInterfaceTypeMatch|null
    */
    public function getInterfaceTypeMatch(): ?VpnOnDemandRuleInterfaceTypeMatch {
        $val = $this->getBackingStore()->get('interfaceTypeMatch');
        if (is_null($val) || $val instanceof VpnOnDemandRuleInterfaceTypeMatch) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'interfaceTypeMatch'");
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
     * Gets the probeRequiredUrl property value. Probe Required Url (Only applicable when Action is evaluate connection and DomainAction is connect if needed).
     * @return string|null
    */
    public function getProbeRequiredUrl(): ?string {
        $val = $this->getBackingStore()->get('probeRequiredUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'probeRequiredUrl'");
    }

    /**
     * Gets the probeUrl property value. A URL to probe. If this URL is successfully fetched (returning a 200 HTTP status code) without redirection, this rule matches.
     * @return string|null
    */
    public function getProbeUrl(): ?string {
        $val = $this->getBackingStore()->get('probeUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'probeUrl'");
    }

    /**
     * Gets the ssids property value. Network Service Set Identifiers (SSIDs).
     * @return array<string>|null
    */
    public function getSsids(): ?array {
        $val = $this->getBackingStore()->get('ssids');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ssids'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('action', $this->getAction());
        $writer->writeCollectionOfPrimitiveValues('dnsSearchDomains', $this->getDnsSearchDomains());
        $writer->writeCollectionOfPrimitiveValues('dnsServerAddressMatch', $this->getDnsServerAddressMatch());
        $writer->writeEnumValue('domainAction', $this->getDomainAction());
        $writer->writeCollectionOfPrimitiveValues('domains', $this->getDomains());
        $writer->writeEnumValue('interfaceTypeMatch', $this->getInterfaceTypeMatch());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('probeRequiredUrl', $this->getProbeRequiredUrl());
        $writer->writeStringValue('probeUrl', $this->getProbeUrl());
        $writer->writeCollectionOfPrimitiveValues('ssids', $this->getSsids());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the action property value. VPN On-Demand Rule Connection Action.
     * @param VpnOnDemandRuleConnectionAction|null $value Value to set for the action property.
    */
    public function setAction(?VpnOnDemandRuleConnectionAction $value): void {
        $this->getBackingStore()->set('action', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the dnsSearchDomains property value. DNS Search Domains.
     * @param array<string>|null $value Value to set for the dnsSearchDomains property.
    */
    public function setDnsSearchDomains(?array $value): void {
        $this->getBackingStore()->set('dnsSearchDomains', $value);
    }

    /**
     * Sets the dnsServerAddressMatch property value. DNS Search Server Address.
     * @param array<string>|null $value Value to set for the dnsServerAddressMatch property.
    */
    public function setDnsServerAddressMatch(?array $value): void {
        $this->getBackingStore()->set('dnsServerAddressMatch', $value);
    }

    /**
     * Sets the domainAction property value. VPN On-Demand Rule Connection Domain Action.
     * @param VpnOnDemandRuleConnectionDomainAction|null $value Value to set for the domainAction property.
    */
    public function setDomainAction(?VpnOnDemandRuleConnectionDomainAction $value): void {
        $this->getBackingStore()->set('domainAction', $value);
    }

    /**
     * Sets the domains property value. Domains (Only applicable when Action is evaluate connection).
     * @param array<string>|null $value Value to set for the domains property.
    */
    public function setDomains(?array $value): void {
        $this->getBackingStore()->set('domains', $value);
    }

    /**
     * Sets the interfaceTypeMatch property value. VPN On-Demand Rule Connection network interface type.
     * @param VpnOnDemandRuleInterfaceTypeMatch|null $value Value to set for the interfaceTypeMatch property.
    */
    public function setInterfaceTypeMatch(?VpnOnDemandRuleInterfaceTypeMatch $value): void {
        $this->getBackingStore()->set('interfaceTypeMatch', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the probeRequiredUrl property value. Probe Required Url (Only applicable when Action is evaluate connection and DomainAction is connect if needed).
     * @param string|null $value Value to set for the probeRequiredUrl property.
    */
    public function setProbeRequiredUrl(?string $value): void {
        $this->getBackingStore()->set('probeRequiredUrl', $value);
    }

    /**
     * Sets the probeUrl property value. A URL to probe. If this URL is successfully fetched (returning a 200 HTTP status code) without redirection, this rule matches.
     * @param string|null $value Value to set for the probeUrl property.
    */
    public function setProbeUrl(?string $value): void {
        $this->getBackingStore()->set('probeUrl', $value);
    }

    /**
     * Sets the ssids property value. Network Service Set Identifiers (SSIDs).
     * @param array<string>|null $value Value to set for the ssids property.
    */
    public function setSsids(?array $value): void {
        $this->getBackingStore()->set('ssids', $value);
    }

}
