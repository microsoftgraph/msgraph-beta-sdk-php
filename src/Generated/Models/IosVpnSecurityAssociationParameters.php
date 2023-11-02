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
 * VPN Security Association Parameters
*/
class IosVpnSecurityAssociationParameters implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new iosVpnSecurityAssociationParameters and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'lifetimeInMinutes' => fn(ParseNode $n) => $o->setLifetimeInMinutes($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'securityDiffieHellmanGroup' => fn(ParseNode $n) => $o->setSecurityDiffieHellmanGroup($n->getIntegerValue()),
            'securityEncryptionAlgorithm' => fn(ParseNode $n) => $o->setSecurityEncryptionAlgorithm($n->getEnumValue(VpnEncryptionAlgorithmType::class)),
            'securityIntegrityAlgorithm' => fn(ParseNode $n) => $o->setSecurityIntegrityAlgorithm($n->getEnumValue(VpnIntegrityAlgorithmType::class)),
        ];
    }

    /**
     * Gets the lifetimeInMinutes property value. Lifetime (minutes)
     * @return int|null
    */
    public function getLifetimeInMinutes(): ?int {
        $val = $this->getBackingStore()->get('lifetimeInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lifetimeInMinutes'");
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
     * Gets the securityDiffieHellmanGroup property value. Diffie-Hellman Group
     * @return int|null
    */
    public function getSecurityDiffieHellmanGroup(): ?int {
        $val = $this->getBackingStore()->get('securityDiffieHellmanGroup');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityDiffieHellmanGroup'");
    }

    /**
     * Gets the securityEncryptionAlgorithm property value. Encryption algorithm. Possible values are: aes256, des, tripleDes, aes128, aes128Gcm, aes256Gcm, aes192, aes192Gcm, chaCha20Poly1305.
     * @return VpnEncryptionAlgorithmType|null
    */
    public function getSecurityEncryptionAlgorithm(): ?VpnEncryptionAlgorithmType {
        $val = $this->getBackingStore()->get('securityEncryptionAlgorithm');
        if (is_null($val) || $val instanceof VpnEncryptionAlgorithmType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityEncryptionAlgorithm'");
    }

    /**
     * Gets the securityIntegrityAlgorithm property value. Integrity algorithm. Possible values are: sha2256, sha196, sha1160, sha2384, sha2_512, md5.
     * @return VpnIntegrityAlgorithmType|null
    */
    public function getSecurityIntegrityAlgorithm(): ?VpnIntegrityAlgorithmType {
        $val = $this->getBackingStore()->get('securityIntegrityAlgorithm');
        if (is_null($val) || $val instanceof VpnIntegrityAlgorithmType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityIntegrityAlgorithm'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('lifetimeInMinutes', $this->getLifetimeInMinutes());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('securityDiffieHellmanGroup', $this->getSecurityDiffieHellmanGroup());
        $writer->writeEnumValue('securityEncryptionAlgorithm', $this->getSecurityEncryptionAlgorithm());
        $writer->writeEnumValue('securityIntegrityAlgorithm', $this->getSecurityIntegrityAlgorithm());
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
     * Sets the lifetimeInMinutes property value. Lifetime (minutes)
     * @param int|null $value Value to set for the lifetimeInMinutes property.
    */
    public function setLifetimeInMinutes(?int $value): void {
        $this->getBackingStore()->set('lifetimeInMinutes', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the securityDiffieHellmanGroup property value. Diffie-Hellman Group
     * @param int|null $value Value to set for the securityDiffieHellmanGroup property.
    */
    public function setSecurityDiffieHellmanGroup(?int $value): void {
        $this->getBackingStore()->set('securityDiffieHellmanGroup', $value);
    }

    /**
     * Sets the securityEncryptionAlgorithm property value. Encryption algorithm. Possible values are: aes256, des, tripleDes, aes128, aes128Gcm, aes256Gcm, aes192, aes192Gcm, chaCha20Poly1305.
     * @param VpnEncryptionAlgorithmType|null $value Value to set for the securityEncryptionAlgorithm property.
    */
    public function setSecurityEncryptionAlgorithm(?VpnEncryptionAlgorithmType $value): void {
        $this->getBackingStore()->set('securityEncryptionAlgorithm', $value);
    }

    /**
     * Sets the securityIntegrityAlgorithm property value. Integrity algorithm. Possible values are: sha2256, sha196, sha1160, sha2384, sha2_512, md5.
     * @param VpnIntegrityAlgorithmType|null $value Value to set for the securityIntegrityAlgorithm property.
    */
    public function setSecurityIntegrityAlgorithm(?VpnIntegrityAlgorithmType $value): void {
        $this->getBackingStore()->set('securityIntegrityAlgorithm', $value);
    }

}
