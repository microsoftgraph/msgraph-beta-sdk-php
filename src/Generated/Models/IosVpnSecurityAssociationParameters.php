<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosVpnSecurityAssociationParameters implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $lifetimeInMinutes Lifetime (minutes)
    */
    private ?int $lifetimeInMinutes = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $securityDiffieHellmanGroup Diffie-Hellman Group
    */
    private ?int $securityDiffieHellmanGroup = null;
    
    /**
     * @var VpnEncryptionAlgorithmType|null $securityEncryptionAlgorithm Encryption algorithm. Possible values are: aes256, des, tripleDes, aes128, aes128Gcm, aes256Gcm, aes192, aes192Gcm, chaCha20Poly1305.
    */
    private ?VpnEncryptionAlgorithmType $securityEncryptionAlgorithm = null;
    
    /**
     * @var VpnIntegrityAlgorithmType|null $securityIntegrityAlgorithm Integrity algorithm. Possible values are: sha2_256, sha1_96, sha1_160, sha2_384, sha2_512, md5.
    */
    private ?VpnIntegrityAlgorithmType $securityIntegrityAlgorithm = null;
    
    /**
     * Instantiates a new iosVpnSecurityAssociationParameters and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.iosVpnSecurityAssociationParameters');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosVpnSecurityAssociationParameters
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosVpnSecurityAssociationParameters {
        return new IosVpnSecurityAssociationParameters();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'lifetimeInMinutes' => function (ParseNode $n) use ($o) { $o->setLifetimeInMinutes($n->getIntegerValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'securityDiffieHellmanGroup' => function (ParseNode $n) use ($o) { $o->setSecurityDiffieHellmanGroup($n->getIntegerValue()); },
            'securityEncryptionAlgorithm' => function (ParseNode $n) use ($o) { $o->setSecurityEncryptionAlgorithm($n->getEnumValue(VpnEncryptionAlgorithmType::class)); },
            'securityIntegrityAlgorithm' => function (ParseNode $n) use ($o) { $o->setSecurityIntegrityAlgorithm($n->getEnumValue(VpnIntegrityAlgorithmType::class)); },
        ];
    }

    /**
     * Gets the lifetimeInMinutes property value. Lifetime (minutes)
     * @return int|null
    */
    public function getLifetimeInMinutes(): ?int {
        return $this->lifetimeInMinutes;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the securityDiffieHellmanGroup property value. Diffie-Hellman Group
     * @return int|null
    */
    public function getSecurityDiffieHellmanGroup(): ?int {
        return $this->securityDiffieHellmanGroup;
    }

    /**
     * Gets the securityEncryptionAlgorithm property value. Encryption algorithm. Possible values are: aes256, des, tripleDes, aes128, aes128Gcm, aes256Gcm, aes192, aes192Gcm, chaCha20Poly1305.
     * @return VpnEncryptionAlgorithmType|null
    */
    public function getSecurityEncryptionAlgorithm(): ?VpnEncryptionAlgorithmType {
        return $this->securityEncryptionAlgorithm;
    }

    /**
     * Gets the securityIntegrityAlgorithm property value. Integrity algorithm. Possible values are: sha2_256, sha1_96, sha1_160, sha2_384, sha2_512, md5.
     * @return VpnIntegrityAlgorithmType|null
    */
    public function getSecurityIntegrityAlgorithm(): ?VpnIntegrityAlgorithmType {
        return $this->securityIntegrityAlgorithm;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('lifetimeInMinutes', $this->lifetimeInMinutes);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('securityDiffieHellmanGroup', $this->securityDiffieHellmanGroup);
        $writer->writeEnumValue('securityEncryptionAlgorithm', $this->securityEncryptionAlgorithm);
        $writer->writeEnumValue('securityIntegrityAlgorithm', $this->securityIntegrityAlgorithm);
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
     * Sets the lifetimeInMinutes property value. Lifetime (minutes)
     *  @param int|null $value Value to set for the lifetimeInMinutes property.
    */
    public function setLifetimeInMinutes(?int $value ): void {
        $this->lifetimeInMinutes = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the securityDiffieHellmanGroup property value. Diffie-Hellman Group
     *  @param int|null $value Value to set for the securityDiffieHellmanGroup property.
    */
    public function setSecurityDiffieHellmanGroup(?int $value ): void {
        $this->securityDiffieHellmanGroup = $value;
    }

    /**
     * Sets the securityEncryptionAlgorithm property value. Encryption algorithm. Possible values are: aes256, des, tripleDes, aes128, aes128Gcm, aes256Gcm, aes192, aes192Gcm, chaCha20Poly1305.
     *  @param VpnEncryptionAlgorithmType|null $value Value to set for the securityEncryptionAlgorithm property.
    */
    public function setSecurityEncryptionAlgorithm(?VpnEncryptionAlgorithmType $value ): void {
        $this->securityEncryptionAlgorithm = $value;
    }

    /**
     * Sets the securityIntegrityAlgorithm property value. Integrity algorithm. Possible values are: sha2_256, sha1_96, sha1_160, sha2_384, sha2_512, md5.
     *  @param VpnIntegrityAlgorithmType|null $value Value to set for the securityIntegrityAlgorithm property.
    */
    public function setSecurityIntegrityAlgorithm(?VpnIntegrityAlgorithmType $value ): void {
        $this->securityIntegrityAlgorithm = $value;
    }

}
