<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Windows Zero Trust DNS configuration profile
*/
class WindowsZtdnsConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new WindowsZtdnsConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsZtdnsConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsZtdnsConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsZtdnsConfiguration {
        return new WindowsZtdnsConfiguration();
    }

    /**
     * Gets the auditModeEnabled property value. Indicates the audit operational mode. When true, unsecured traffic will be logged but not blocked. When false, unsecured DNS traffic will be blocked unless specifically exempted.
     * @return bool|null
    */
    public function getAuditModeEnabled(): ?bool {
        $val = $this->getBackingStore()->get('auditModeEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'auditModeEnabled'");
    }

    /**
     * Gets the exemptionRules property value. Exemptions to the ZTDNS rules, allowing access to specific addresses or subnets via unsecured lookup. This collection can contain a maximum of 500 elements.
     * @return array<WindowsZtdnsExemptionRule>|null
    */
    public function getExemptionRules(): ?array {
        $val = $this->getBackingStore()->get('exemptionRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsZtdnsExemptionRule::class);
            /** @var array<WindowsZtdnsExemptionRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exemptionRules'");
    }

    /**
     * Gets the extendedKeyUsagesForClientAuthentication property value. Extended key usage definitions for client authentication with secure DNS servers. This collection can contain a maximum of 500 elements.
     * @return array<ExtendedKeyUsage>|null
    */
    public function getExtendedKeyUsagesForClientAuthentication(): ?array {
        $val = $this->getBackingStore()->get('extendedKeyUsagesForClientAuthentication');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ExtendedKeyUsage::class);
            /** @var array<ExtendedKeyUsage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extendedKeyUsagesForClientAuthentication'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'auditModeEnabled' => fn(ParseNode $n) => $o->setAuditModeEnabled($n->getBooleanValue()),
            'exemptionRules' => fn(ParseNode $n) => $o->setExemptionRules($n->getCollectionOfObjectValues([WindowsZtdnsExemptionRule::class, 'createFromDiscriminatorValue'])),
            'extendedKeyUsagesForClientAuthentication' => fn(ParseNode $n) => $o->setExtendedKeyUsagesForClientAuthentication($n->getCollectionOfObjectValues([ExtendedKeyUsage::class, 'createFromDiscriminatorValue'])),
            'hostsFileResolutionEnabled' => fn(ParseNode $n) => $o->setHostsFileResolutionEnabled($n->getBooleanValue()),
            'loopbackDnsForwarderEnabled' => fn(ParseNode $n) => $o->setLoopbackDnsForwarderEnabled($n->getBooleanValue()),
            'loopbackTrafficBlocked' => fn(ParseNode $n) => $o->setLoopbackTrafficBlocked($n->getBooleanValue()),
            'maximumConnectionTimeInSeconds' => fn(ParseNode $n) => $o->setMaximumConnectionTimeInSeconds($n->getIntegerValue()),
            'rootCertificatesForClientValidation' => fn(ParseNode $n) => $o->setRootCertificatesForClientValidation($n->getCollectionOfObjectValues([Windows81TrustedRootCertificate::class, 'createFromDiscriminatorValue'])),
            'rootCertificatesForServerValidation' => fn(ParseNode $n) => $o->setRootCertificatesForServerValidation($n->getCollectionOfObjectValues([Windows81TrustedRootCertificate::class, 'createFromDiscriminatorValue'])),
            'secureDnsServers' => fn(ParseNode $n) => $o->setSecureDnsServers($n->getCollectionOfObjectValues([WindowsZtdnsSecureDnsServer::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the hostsFileResolutionEnabled property value. Indicates whether the DNS Client can resolve queries using the hosts file.
     * @return bool|null
    */
    public function getHostsFileResolutionEnabled(): ?bool {
        $val = $this->getBackingStore()->get('hostsFileResolutionEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hostsFileResolutionEnabled'");
    }

    /**
     * Gets the loopbackDnsForwarderEnabled property value. Creates a localhost DNS server for securely forwarding plaintext queries to trusted DNS servers.
     * @return bool|null
    */
    public function getLoopbackDnsForwarderEnabled(): ?bool {
        $val = $this->getBackingStore()->get('loopbackDnsForwarderEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'loopbackDnsForwarderEnabled'");
    }

    /**
     * Gets the loopbackTrafficBlocked property value. Indicates whether traffic to loopback addresses should be blocked.
     * @return bool|null
    */
    public function getLoopbackTrafficBlocked(): ?bool {
        $val = $this->getBackingStore()->get('loopbackTrafficBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'loopbackTrafficBlocked'");
    }

    /**
     * Gets the maximumConnectionTimeInSeconds property value. Maximum time in seconds for which connections to an IP address will be allowed after successful name resolution. Valid values 30 to 604800
     * @return int|null
    */
    public function getMaximumConnectionTimeInSeconds(): ?int {
        $val = $this->getBackingStore()->get('maximumConnectionTimeInSeconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumConnectionTimeInSeconds'");
    }

    /**
     * Gets the rootCertificatesForClientValidation property value. Root certificates for client authentication. This collection can contain a maximum of 500 elements.
     * @return array<Windows81TrustedRootCertificate>|null
    */
    public function getRootCertificatesForClientValidation(): ?array {
        $val = $this->getBackingStore()->get('rootCertificatesForClientValidation');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Windows81TrustedRootCertificate::class);
            /** @var array<Windows81TrustedRootCertificate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rootCertificatesForClientValidation'");
    }

    /**
     * Gets the rootCertificatesForServerValidation property value. Root certificates for server validation. This collection can contain a maximum of 500 elements.
     * @return array<Windows81TrustedRootCertificate>|null
    */
    public function getRootCertificatesForServerValidation(): ?array {
        $val = $this->getBackingStore()->get('rootCertificatesForServerValidation');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Windows81TrustedRootCertificate::class);
            /** @var array<Windows81TrustedRootCertificate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rootCertificatesForServerValidation'");
    }

    /**
     * Gets the secureDnsServers property value. Collection of secure DNS servers used to resolve ZTDNS queries. Must contain at least one item. This collection can contain a maximum of 500 elements.
     * @return array<WindowsZtdnsSecureDnsServer>|null
    */
    public function getSecureDnsServers(): ?array {
        $val = $this->getBackingStore()->get('secureDnsServers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsZtdnsSecureDnsServer::class);
            /** @var array<WindowsZtdnsSecureDnsServer>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'secureDnsServers'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('auditModeEnabled', $this->getAuditModeEnabled());
        $writer->writeCollectionOfObjectValues('exemptionRules', $this->getExemptionRules());
        $writer->writeCollectionOfObjectValues('extendedKeyUsagesForClientAuthentication', $this->getExtendedKeyUsagesForClientAuthentication());
        $writer->writeBooleanValue('hostsFileResolutionEnabled', $this->getHostsFileResolutionEnabled());
        $writer->writeBooleanValue('loopbackDnsForwarderEnabled', $this->getLoopbackDnsForwarderEnabled());
        $writer->writeBooleanValue('loopbackTrafficBlocked', $this->getLoopbackTrafficBlocked());
        $writer->writeIntegerValue('maximumConnectionTimeInSeconds', $this->getMaximumConnectionTimeInSeconds());
        $writer->writeCollectionOfObjectValues('rootCertificatesForClientValidation', $this->getRootCertificatesForClientValidation());
        $writer->writeCollectionOfObjectValues('rootCertificatesForServerValidation', $this->getRootCertificatesForServerValidation());
        $writer->writeCollectionOfObjectValues('secureDnsServers', $this->getSecureDnsServers());
    }

    /**
     * Sets the auditModeEnabled property value. Indicates the audit operational mode. When true, unsecured traffic will be logged but not blocked. When false, unsecured DNS traffic will be blocked unless specifically exempted.
     * @param bool|null $value Value to set for the auditModeEnabled property.
    */
    public function setAuditModeEnabled(?bool $value): void {
        $this->getBackingStore()->set('auditModeEnabled', $value);
    }

    /**
     * Sets the exemptionRules property value. Exemptions to the ZTDNS rules, allowing access to specific addresses or subnets via unsecured lookup. This collection can contain a maximum of 500 elements.
     * @param array<WindowsZtdnsExemptionRule>|null $value Value to set for the exemptionRules property.
    */
    public function setExemptionRules(?array $value): void {
        $this->getBackingStore()->set('exemptionRules', $value);
    }

    /**
     * Sets the extendedKeyUsagesForClientAuthentication property value. Extended key usage definitions for client authentication with secure DNS servers. This collection can contain a maximum of 500 elements.
     * @param array<ExtendedKeyUsage>|null $value Value to set for the extendedKeyUsagesForClientAuthentication property.
    */
    public function setExtendedKeyUsagesForClientAuthentication(?array $value): void {
        $this->getBackingStore()->set('extendedKeyUsagesForClientAuthentication', $value);
    }

    /**
     * Sets the hostsFileResolutionEnabled property value. Indicates whether the DNS Client can resolve queries using the hosts file.
     * @param bool|null $value Value to set for the hostsFileResolutionEnabled property.
    */
    public function setHostsFileResolutionEnabled(?bool $value): void {
        $this->getBackingStore()->set('hostsFileResolutionEnabled', $value);
    }

    /**
     * Sets the loopbackDnsForwarderEnabled property value. Creates a localhost DNS server for securely forwarding plaintext queries to trusted DNS servers.
     * @param bool|null $value Value to set for the loopbackDnsForwarderEnabled property.
    */
    public function setLoopbackDnsForwarderEnabled(?bool $value): void {
        $this->getBackingStore()->set('loopbackDnsForwarderEnabled', $value);
    }

    /**
     * Sets the loopbackTrafficBlocked property value. Indicates whether traffic to loopback addresses should be blocked.
     * @param bool|null $value Value to set for the loopbackTrafficBlocked property.
    */
    public function setLoopbackTrafficBlocked(?bool $value): void {
        $this->getBackingStore()->set('loopbackTrafficBlocked', $value);
    }

    /**
     * Sets the maximumConnectionTimeInSeconds property value. Maximum time in seconds for which connections to an IP address will be allowed after successful name resolution. Valid values 30 to 604800
     * @param int|null $value Value to set for the maximumConnectionTimeInSeconds property.
    */
    public function setMaximumConnectionTimeInSeconds(?int $value): void {
        $this->getBackingStore()->set('maximumConnectionTimeInSeconds', $value);
    }

    /**
     * Sets the rootCertificatesForClientValidation property value. Root certificates for client authentication. This collection can contain a maximum of 500 elements.
     * @param array<Windows81TrustedRootCertificate>|null $value Value to set for the rootCertificatesForClientValidation property.
    */
    public function setRootCertificatesForClientValidation(?array $value): void {
        $this->getBackingStore()->set('rootCertificatesForClientValidation', $value);
    }

    /**
     * Sets the rootCertificatesForServerValidation property value. Root certificates for server validation. This collection can contain a maximum of 500 elements.
     * @param array<Windows81TrustedRootCertificate>|null $value Value to set for the rootCertificatesForServerValidation property.
    */
    public function setRootCertificatesForServerValidation(?array $value): void {
        $this->getBackingStore()->set('rootCertificatesForServerValidation', $value);
    }

    /**
     * Sets the secureDnsServers property value. Collection of secure DNS servers used to resolve ZTDNS queries. Must contain at least one item. This collection can contain a maximum of 500 elements.
     * @param array<WindowsZtdnsSecureDnsServer>|null $value Value to set for the secureDnsServers property.
    */
    public function setSecureDnsServers(?array $value): void {
        $this->getBackingStore()->set('secureDnsServers', $value);
    }

}
