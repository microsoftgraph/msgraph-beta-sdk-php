<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsPhone81VpnConfiguration extends Windows81VpnConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var VpnAuthenticationMethod|null $authenticationMethod Authentication method. Possible values are: certificate, usernameAndPassword, sharedSecret, derivedCredential, azureAD.
    */
    private ?VpnAuthenticationMethod $authenticationMethod = null;
    
    /**
     * @var bool|null $bypassVpnOnCompanyWifi Bypass VPN on company Wi-Fi.
    */
    private ?bool $bypassVpnOnCompanyWifi = null;
    
    /**
     * @var bool|null $bypassVpnOnHomeWifi Bypass VPN on home Wi-Fi.
    */
    private ?bool $bypassVpnOnHomeWifi = null;
    
    /**
     * @var array<string>|null $dnsSuffixSearchList DNS suffix search list.
    */
    private ?array $dnsSuffixSearchList = null;
    
    /**
     * @var WindowsPhone81CertificateProfileBase|null $identityCertificate Identity certificate for client authentication when authentication method is certificate.
    */
    private ?WindowsPhone81CertificateProfileBase $identityCertificate = null;
    
    /**
     * @var bool|null $rememberUserCredentials Remember user credentials.
    */
    private ?bool $rememberUserCredentials = null;
    
    /**
     * Instantiates a new WindowsPhone81VpnConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the authenticationMethod property value. Authentication method. Possible values are: certificate, usernameAndPassword, sharedSecret, derivedCredential, azureAD.
     * @return VpnAuthenticationMethod|null
    */
    public function getAuthenticationMethod(): ?VpnAuthenticationMethod {
        return $this->authenticationMethod;
    }

    /**
     * Gets the bypassVpnOnCompanyWifi property value. Bypass VPN on company Wi-Fi.
     * @return bool|null
    */
    public function getBypassVpnOnCompanyWifi(): ?bool {
        return $this->bypassVpnOnCompanyWifi;
    }

    /**
     * Gets the bypassVpnOnHomeWifi property value. Bypass VPN on home Wi-Fi.
     * @return bool|null
    */
    public function getBypassVpnOnHomeWifi(): ?bool {
        return $this->bypassVpnOnHomeWifi;
    }

    /**
     * Gets the dnsSuffixSearchList property value. DNS suffix search list.
     * @return array<string>|null
    */
    public function getDnsSuffixSearchList(): ?array {
        return $this->dnsSuffixSearchList;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationMethod' => function (ParseNode $n) use ($o) { $o->setAuthenticationMethod($n->getEnumValue(VpnAuthenticationMethod::class)); },
            'bypassVpnOnCompanyWifi' => function (ParseNode $n) use ($o) { $o->setBypassVpnOnCompanyWifi($n->getBooleanValue()); },
            'bypassVpnOnHomeWifi' => function (ParseNode $n) use ($o) { $o->setBypassVpnOnHomeWifi($n->getBooleanValue()); },
            'dnsSuffixSearchList' => function (ParseNode $n) use ($o) { $o->setDnsSuffixSearchList($n->getCollectionOfPrimitiveValues()); },
            'identityCertificate' => function (ParseNode $n) use ($o) { $o->setIdentityCertificate($n->getObjectValue(array(WindowsPhone81CertificateProfileBase::class, 'createFromDiscriminatorValue'))); },
            'rememberUserCredentials' => function (ParseNode $n) use ($o) { $o->setRememberUserCredentials($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     * @return WindowsPhone81CertificateProfileBase|null
    */
    public function getIdentityCertificate(): ?WindowsPhone81CertificateProfileBase {
        return $this->identityCertificate;
    }

    /**
     * Gets the rememberUserCredentials property value. Remember user credentials.
     * @return bool|null
    */
    public function getRememberUserCredentials(): ?bool {
        return $this->rememberUserCredentials;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('authenticationMethod', $this->authenticationMethod);
        $writer->writeBooleanValue('bypassVpnOnCompanyWifi', $this->bypassVpnOnCompanyWifi);
        $writer->writeBooleanValue('bypassVpnOnHomeWifi', $this->bypassVpnOnHomeWifi);
        $writer->writeCollectionOfPrimitiveValues('dnsSuffixSearchList', $this->dnsSuffixSearchList);
        $writer->writeObjectValue('identityCertificate', $this->identityCertificate);
        $writer->writeBooleanValue('rememberUserCredentials', $this->rememberUserCredentials);
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
     * Sets the authenticationMethod property value. Authentication method. Possible values are: certificate, usernameAndPassword, sharedSecret, derivedCredential, azureAD.
     *  @param VpnAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?VpnAuthenticationMethod $value ): void {
        $this->authenticationMethod = $value;
    }

    /**
     * Sets the bypassVpnOnCompanyWifi property value. Bypass VPN on company Wi-Fi.
     *  @param bool|null $value Value to set for the bypassVpnOnCompanyWifi property.
    */
    public function setBypassVpnOnCompanyWifi(?bool $value ): void {
        $this->bypassVpnOnCompanyWifi = $value;
    }

    /**
     * Sets the bypassVpnOnHomeWifi property value. Bypass VPN on home Wi-Fi.
     *  @param bool|null $value Value to set for the bypassVpnOnHomeWifi property.
    */
    public function setBypassVpnOnHomeWifi(?bool $value ): void {
        $this->bypassVpnOnHomeWifi = $value;
    }

    /**
     * Sets the dnsSuffixSearchList property value. DNS suffix search list.
     *  @param array<string>|null $value Value to set for the dnsSuffixSearchList property.
    */
    public function setDnsSuffixSearchList(?array $value ): void {
        $this->dnsSuffixSearchList = $value;
    }

    /**
     * Sets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     *  @param WindowsPhone81CertificateProfileBase|null $value Value to set for the identityCertificate property.
    */
    public function setIdentityCertificate(?WindowsPhone81CertificateProfileBase $value ): void {
        $this->identityCertificate = $value;
    }

    /**
     * Sets the rememberUserCredentials property value. Remember user credentials.
     *  @param bool|null $value Value to set for the rememberUserCredentials property.
    */
    public function setRememberUserCredentials(?bool $value ): void {
        $this->rememberUserCredentials = $value;
    }

}
