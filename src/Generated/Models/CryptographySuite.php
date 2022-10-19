<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CryptographySuite implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AuthenticationTransformConstant|null $authenticationTransformConstants Authentication Transform Constants. Possible values are: md5_96, sha1_96, sha_256_128, aes128Gcm, aes192Gcm, aes256Gcm.
    */
    private ?AuthenticationTransformConstant $authenticationTransformConstants = null;
    
    /**
     * @var VpnEncryptionAlgorithmType|null $cipherTransformConstants Cipher Transform Constants. Possible values are: aes256, des, tripleDes, aes128, aes128Gcm, aes256Gcm, aes192, aes192Gcm, chaCha20Poly1305.
    */
    private ?VpnEncryptionAlgorithmType $cipherTransformConstants = null;
    
    /**
     * @var DiffieHellmanGroup|null $dhGroup Diffie Hellman Group. Possible values are: group1, group2, group14, ecp256, ecp384, group24.
    */
    private ?DiffieHellmanGroup $dhGroup = null;
    
    /**
     * @var VpnEncryptionAlgorithmType|null $encryptionMethod Encryption Method. Possible values are: aes256, des, tripleDes, aes128, aes128Gcm, aes256Gcm, aes192, aes192Gcm, chaCha20Poly1305.
    */
    private ?VpnEncryptionAlgorithmType $encryptionMethod = null;
    
    /**
     * @var VpnIntegrityAlgorithmType|null $integrityCheckMethod Integrity Check Method. Possible values are: sha2_256, sha1_96, sha1_160, sha2_384, sha2_512, md5.
    */
    private ?VpnIntegrityAlgorithmType $integrityCheckMethod = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var PerfectForwardSecrecyGroup|null $pfsGroup Perfect Forward Secrecy Group. Possible values are: pfs1, pfs2, pfs2048, ecp256, ecp384, pfsMM, pfs24.
    */
    private ?PerfectForwardSecrecyGroup $pfsGroup = null;
    
    /**
     * Instantiates a new cryptographySuite and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.cryptographySuite');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CryptographySuite
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CryptographySuite {
        return new CryptographySuite();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the authenticationTransformConstants property value. Authentication Transform Constants. Possible values are: md5_96, sha1_96, sha_256_128, aes128Gcm, aes192Gcm, aes256Gcm.
     * @return AuthenticationTransformConstant|null
    */
    public function getAuthenticationTransformConstants(): ?AuthenticationTransformConstant {
        return $this->authenticationTransformConstants;
    }

    /**
     * Gets the cipherTransformConstants property value. Cipher Transform Constants. Possible values are: aes256, des, tripleDes, aes128, aes128Gcm, aes256Gcm, aes192, aes192Gcm, chaCha20Poly1305.
     * @return VpnEncryptionAlgorithmType|null
    */
    public function getCipherTransformConstants(): ?VpnEncryptionAlgorithmType {
        return $this->cipherTransformConstants;
    }

    /**
     * Gets the dhGroup property value. Diffie Hellman Group. Possible values are: group1, group2, group14, ecp256, ecp384, group24.
     * @return DiffieHellmanGroup|null
    */
    public function getDhGroup(): ?DiffieHellmanGroup {
        return $this->dhGroup;
    }

    /**
     * Gets the encryptionMethod property value. Encryption Method. Possible values are: aes256, des, tripleDes, aes128, aes128Gcm, aes256Gcm, aes192, aes192Gcm, chaCha20Poly1305.
     * @return VpnEncryptionAlgorithmType|null
    */
    public function getEncryptionMethod(): ?VpnEncryptionAlgorithmType {
        return $this->encryptionMethod;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authenticationTransformConstants' => fn(ParseNode $n) => $o->setAuthenticationTransformConstants($n->getEnumValue(AuthenticationTransformConstant::class)),
            'cipherTransformConstants' => fn(ParseNode $n) => $o->setCipherTransformConstants($n->getEnumValue(VpnEncryptionAlgorithmType::class)),
            'dhGroup' => fn(ParseNode $n) => $o->setDhGroup($n->getEnumValue(DiffieHellmanGroup::class)),
            'encryptionMethod' => fn(ParseNode $n) => $o->setEncryptionMethod($n->getEnumValue(VpnEncryptionAlgorithmType::class)),
            'integrityCheckMethod' => fn(ParseNode $n) => $o->setIntegrityCheckMethod($n->getEnumValue(VpnIntegrityAlgorithmType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'pfsGroup' => fn(ParseNode $n) => $o->setPfsGroup($n->getEnumValue(PerfectForwardSecrecyGroup::class)),
        ];
    }

    /**
     * Gets the integrityCheckMethod property value. Integrity Check Method. Possible values are: sha2_256, sha1_96, sha1_160, sha2_384, sha2_512, md5.
     * @return VpnIntegrityAlgorithmType|null
    */
    public function getIntegrityCheckMethod(): ?VpnIntegrityAlgorithmType {
        return $this->integrityCheckMethod;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the pfsGroup property value. Perfect Forward Secrecy Group. Possible values are: pfs1, pfs2, pfs2048, ecp256, ecp384, pfsMM, pfs24.
     * @return PerfectForwardSecrecyGroup|null
    */
    public function getPfsGroup(): ?PerfectForwardSecrecyGroup {
        return $this->pfsGroup;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('authenticationTransformConstants', $this->authenticationTransformConstants);
        $writer->writeEnumValue('cipherTransformConstants', $this->cipherTransformConstants);
        $writer->writeEnumValue('dhGroup', $this->dhGroup);
        $writer->writeEnumValue('encryptionMethod', $this->encryptionMethod);
        $writer->writeEnumValue('integrityCheckMethod', $this->integrityCheckMethod);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('pfsGroup', $this->pfsGroup);
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
     * Sets the authenticationTransformConstants property value. Authentication Transform Constants. Possible values are: md5_96, sha1_96, sha_256_128, aes128Gcm, aes192Gcm, aes256Gcm.
     *  @param AuthenticationTransformConstant|null $value Value to set for the authenticationTransformConstants property.
    */
    public function setAuthenticationTransformConstants(?AuthenticationTransformConstant $value ): void {
        $this->authenticationTransformConstants = $value;
    }

    /**
     * Sets the cipherTransformConstants property value. Cipher Transform Constants. Possible values are: aes256, des, tripleDes, aes128, aes128Gcm, aes256Gcm, aes192, aes192Gcm, chaCha20Poly1305.
     *  @param VpnEncryptionAlgorithmType|null $value Value to set for the cipherTransformConstants property.
    */
    public function setCipherTransformConstants(?VpnEncryptionAlgorithmType $value ): void {
        $this->cipherTransformConstants = $value;
    }

    /**
     * Sets the dhGroup property value. Diffie Hellman Group. Possible values are: group1, group2, group14, ecp256, ecp384, group24.
     *  @param DiffieHellmanGroup|null $value Value to set for the dhGroup property.
    */
    public function setDhGroup(?DiffieHellmanGroup $value ): void {
        $this->dhGroup = $value;
    }

    /**
     * Sets the encryptionMethod property value. Encryption Method. Possible values are: aes256, des, tripleDes, aes128, aes128Gcm, aes256Gcm, aes192, aes192Gcm, chaCha20Poly1305.
     *  @param VpnEncryptionAlgorithmType|null $value Value to set for the encryptionMethod property.
    */
    public function setEncryptionMethod(?VpnEncryptionAlgorithmType $value ): void {
        $this->encryptionMethod = $value;
    }

    /**
     * Sets the integrityCheckMethod property value. Integrity Check Method. Possible values are: sha2_256, sha1_96, sha1_160, sha2_384, sha2_512, md5.
     *  @param VpnIntegrityAlgorithmType|null $value Value to set for the integrityCheckMethod property.
    */
    public function setIntegrityCheckMethod(?VpnIntegrityAlgorithmType $value ): void {
        $this->integrityCheckMethod = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the pfsGroup property value. Perfect Forward Secrecy Group. Possible values are: pfs1, pfs2, pfs2048, ecp256, ecp384, pfsMM, pfs24.
     *  @param PerfectForwardSecrecyGroup|null $value Value to set for the pfsGroup property.
    */
    public function setPfsGroup(?PerfectForwardSecrecyGroup $value ): void {
        $this->pfsGroup = $value;
    }

}
