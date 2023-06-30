<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class WindowsPhone81VpnConfiguration extends Windows81VpnConfiguration implements Parsable 
{
    /**
     * Instantiates a new WindowsPhone81VpnConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsPhone81VpnConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsPhone81VpnConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsPhone81VpnConfiguration {
        return new WindowsPhone81VpnConfiguration();
    }

    /**
     * Gets the authenticationMethod property value. VPN Authentication Method.
     * @return VpnAuthenticationMethod|null
    */
    public function getAuthenticationMethod(): ?VpnAuthenticationMethod {
        $val = $this->getBackingStore()->get('authenticationMethod');
        if (is_null($val) || $val instanceof VpnAuthenticationMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationMethod'");
    }

    /**
     * Gets the bypassVpnOnCompanyWifi property value. Bypass VPN on company Wi-Fi.
     * @return bool|null
    */
    public function getBypassVpnOnCompanyWifi(): ?bool {
        $val = $this->getBackingStore()->get('bypassVpnOnCompanyWifi');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bypassVpnOnCompanyWifi'");
    }

    /**
     * Gets the bypassVpnOnHomeWifi property value. Bypass VPN on home Wi-Fi.
     * @return bool|null
    */
    public function getBypassVpnOnHomeWifi(): ?bool {
        $val = $this->getBackingStore()->get('bypassVpnOnHomeWifi');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bypassVpnOnHomeWifi'");
    }

    /**
     * Gets the dnsSuffixSearchList property value. DNS suffix search list.
     * @return array<string>|null
    */
    public function getDnsSuffixSearchList(): ?array {
        $val = $this->getBackingStore()->get('dnsSuffixSearchList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dnsSuffixSearchList'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationMethod' => fn(ParseNode $n) => $o->setAuthenticationMethod($n->getEnumValue(VpnAuthenticationMethod::class)),
            'bypassVpnOnCompanyWifi' => fn(ParseNode $n) => $o->setBypassVpnOnCompanyWifi($n->getBooleanValue()),
            'bypassVpnOnHomeWifi' => fn(ParseNode $n) => $o->setBypassVpnOnHomeWifi($n->getBooleanValue()),
            'dnsSuffixSearchList' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDnsSuffixSearchList($val);
            },
            'identityCertificate' => fn(ParseNode $n) => $o->setIdentityCertificate($n->getObjectValue([WindowsPhone81CertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'rememberUserCredentials' => fn(ParseNode $n) => $o->setRememberUserCredentials($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     * @return WindowsPhone81CertificateProfileBase|null
    */
    public function getIdentityCertificate(): ?WindowsPhone81CertificateProfileBase {
        $val = $this->getBackingStore()->get('identityCertificate');
        if (is_null($val) || $val instanceof WindowsPhone81CertificateProfileBase) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityCertificate'");
    }

    /**
     * Gets the rememberUserCredentials property value. Remember user credentials.
     * @return bool|null
    */
    public function getRememberUserCredentials(): ?bool {
        $val = $this->getBackingStore()->get('rememberUserCredentials');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rememberUserCredentials'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('authenticationMethod', $this->getAuthenticationMethod());
        $writer->writeBooleanValue('bypassVpnOnCompanyWifi', $this->getBypassVpnOnCompanyWifi());
        $writer->writeBooleanValue('bypassVpnOnHomeWifi', $this->getBypassVpnOnHomeWifi());
        $writer->writeCollectionOfPrimitiveValues('dnsSuffixSearchList', $this->getDnsSuffixSearchList());
        $writer->writeObjectValue('identityCertificate', $this->getIdentityCertificate());
        $writer->writeBooleanValue('rememberUserCredentials', $this->getRememberUserCredentials());
    }

    /**
     * Sets the authenticationMethod property value. VPN Authentication Method.
     * @param VpnAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?VpnAuthenticationMethod $value): void {
        $this->getBackingStore()->set('authenticationMethod', $value);
    }

    /**
     * Sets the bypassVpnOnCompanyWifi property value. Bypass VPN on company Wi-Fi.
     * @param bool|null $value Value to set for the bypassVpnOnCompanyWifi property.
    */
    public function setBypassVpnOnCompanyWifi(?bool $value): void {
        $this->getBackingStore()->set('bypassVpnOnCompanyWifi', $value);
    }

    /**
     * Sets the bypassVpnOnHomeWifi property value. Bypass VPN on home Wi-Fi.
     * @param bool|null $value Value to set for the bypassVpnOnHomeWifi property.
    */
    public function setBypassVpnOnHomeWifi(?bool $value): void {
        $this->getBackingStore()->set('bypassVpnOnHomeWifi', $value);
    }

    /**
     * Sets the dnsSuffixSearchList property value. DNS suffix search list.
     * @param array<string>|null $value Value to set for the dnsSuffixSearchList property.
    */
    public function setDnsSuffixSearchList(?array $value): void {
        $this->getBackingStore()->set('dnsSuffixSearchList', $value);
    }

    /**
     * Sets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     * @param WindowsPhone81CertificateProfileBase|null $value Value to set for the identityCertificate property.
    */
    public function setIdentityCertificate(?WindowsPhone81CertificateProfileBase $value): void {
        $this->getBackingStore()->set('identityCertificate', $value);
    }

    /**
     * Sets the rememberUserCredentials property value. Remember user credentials.
     * @param bool|null $value Value to set for the rememberUserCredentials property.
    */
    public function setRememberUserCredentials(?bool $value): void {
        $this->getBackingStore()->set('rememberUserCredentials', $value);
    }

}
