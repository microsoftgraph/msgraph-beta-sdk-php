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
class CryptographySuite implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new cryptographySuite and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the authenticationTransformConstants property value. Authentication Transform Constants. Possible values are: md596, sha196, sha256128, aes128Gcm, aes192Gcm, aes256Gcm.
     * @return CryptographySuite_authenticationTransformConstants|null
    */
    public function getAuthenticationTransformConstants(): ?CryptographySuite_authenticationTransformConstants {
        $val = $this->getBackingStore()->get('authenticationTransformConstants');
        if (is_null($val) || $val instanceof CryptographySuite_authenticationTransformConstants) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationTransformConstants'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the cipherTransformConstants property value. Cipher Transform Constants. Possible values are: aes256, des, tripleDes, aes128, aes128Gcm, aes256Gcm, aes192, aes192Gcm, chaCha20Poly1305.
     * @return CryptographySuite_cipherTransformConstants|null
    */
    public function getCipherTransformConstants(): ?CryptographySuite_cipherTransformConstants {
        $val = $this->getBackingStore()->get('cipherTransformConstants');
        if (is_null($val) || $val instanceof CryptographySuite_cipherTransformConstants) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cipherTransformConstants'");
    }

    /**
     * Gets the dhGroup property value. Diffie Hellman Group. Possible values are: group1, group2, group14, ecp256, ecp384, group24.
     * @return CryptographySuite_dhGroup|null
    */
    public function getDhGroup(): ?CryptographySuite_dhGroup {
        $val = $this->getBackingStore()->get('dhGroup');
        if (is_null($val) || $val instanceof CryptographySuite_dhGroup) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dhGroup'");
    }

    /**
     * Gets the encryptionMethod property value. Encryption Method. Possible values are: aes256, des, tripleDes, aes128, aes128Gcm, aes256Gcm, aes192, aes192Gcm, chaCha20Poly1305.
     * @return CryptographySuite_encryptionMethod|null
    */
    public function getEncryptionMethod(): ?CryptographySuite_encryptionMethod {
        $val = $this->getBackingStore()->get('encryptionMethod');
        if (is_null($val) || $val instanceof CryptographySuite_encryptionMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'encryptionMethod'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authenticationTransformConstants' => fn(ParseNode $n) => $o->setAuthenticationTransformConstants($n->getEnumValue(CryptographySuite_authenticationTransformConstants::class)),
            'cipherTransformConstants' => fn(ParseNode $n) => $o->setCipherTransformConstants($n->getEnumValue(CryptographySuite_cipherTransformConstants::class)),
            'dhGroup' => fn(ParseNode $n) => $o->setDhGroup($n->getEnumValue(CryptographySuite_dhGroup::class)),
            'encryptionMethod' => fn(ParseNode $n) => $o->setEncryptionMethod($n->getEnumValue(CryptographySuite_encryptionMethod::class)),
            'integrityCheckMethod' => fn(ParseNode $n) => $o->setIntegrityCheckMethod($n->getEnumValue(CryptographySuite_integrityCheckMethod::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'pfsGroup' => fn(ParseNode $n) => $o->setPfsGroup($n->getEnumValue(CryptographySuite_pfsGroup::class)),
        ];
    }

    /**
     * Gets the integrityCheckMethod property value. Integrity Check Method. Possible values are: sha2256, sha196, sha1160, sha2384, sha2_512, md5.
     * @return CryptographySuite_integrityCheckMethod|null
    */
    public function getIntegrityCheckMethod(): ?CryptographySuite_integrityCheckMethod {
        $val = $this->getBackingStore()->get('integrityCheckMethod');
        if (is_null($val) || $val instanceof CryptographySuite_integrityCheckMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'integrityCheckMethod'");
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
     * Gets the pfsGroup property value. Perfect Forward Secrecy Group. Possible values are: pfs1, pfs2, pfs2048, ecp256, ecp384, pfsMM, pfs24.
     * @return CryptographySuite_pfsGroup|null
    */
    public function getPfsGroup(): ?CryptographySuite_pfsGroup {
        $val = $this->getBackingStore()->get('pfsGroup');
        if (is_null($val) || $val instanceof CryptographySuite_pfsGroup) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pfsGroup'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('authenticationTransformConstants', $this->getAuthenticationTransformConstants());
        $writer->writeEnumValue('cipherTransformConstants', $this->getCipherTransformConstants());
        $writer->writeEnumValue('dhGroup', $this->getDhGroup());
        $writer->writeEnumValue('encryptionMethod', $this->getEncryptionMethod());
        $writer->writeEnumValue('integrityCheckMethod', $this->getIntegrityCheckMethod());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('pfsGroup', $this->getPfsGroup());
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
     * Sets the authenticationTransformConstants property value. Authentication Transform Constants. Possible values are: md596, sha196, sha256128, aes128Gcm, aes192Gcm, aes256Gcm.
     * @param CryptographySuite_authenticationTransformConstants|null $value Value to set for the authenticationTransformConstants property.
    */
    public function setAuthenticationTransformConstants(?CryptographySuite_authenticationTransformConstants $value): void {
        $this->getBackingStore()->set('authenticationTransformConstants', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the cipherTransformConstants property value. Cipher Transform Constants. Possible values are: aes256, des, tripleDes, aes128, aes128Gcm, aes256Gcm, aes192, aes192Gcm, chaCha20Poly1305.
     * @param CryptographySuite_cipherTransformConstants|null $value Value to set for the cipherTransformConstants property.
    */
    public function setCipherTransformConstants(?CryptographySuite_cipherTransformConstants $value): void {
        $this->getBackingStore()->set('cipherTransformConstants', $value);
    }

    /**
     * Sets the dhGroup property value. Diffie Hellman Group. Possible values are: group1, group2, group14, ecp256, ecp384, group24.
     * @param CryptographySuite_dhGroup|null $value Value to set for the dhGroup property.
    */
    public function setDhGroup(?CryptographySuite_dhGroup $value): void {
        $this->getBackingStore()->set('dhGroup', $value);
    }

    /**
     * Sets the encryptionMethod property value. Encryption Method. Possible values are: aes256, des, tripleDes, aes128, aes128Gcm, aes256Gcm, aes192, aes192Gcm, chaCha20Poly1305.
     * @param CryptographySuite_encryptionMethod|null $value Value to set for the encryptionMethod property.
    */
    public function setEncryptionMethod(?CryptographySuite_encryptionMethod $value): void {
        $this->getBackingStore()->set('encryptionMethod', $value);
    }

    /**
     * Sets the integrityCheckMethod property value. Integrity Check Method. Possible values are: sha2256, sha196, sha1160, sha2384, sha2_512, md5.
     * @param CryptographySuite_integrityCheckMethod|null $value Value to set for the integrityCheckMethod property.
    */
    public function setIntegrityCheckMethod(?CryptographySuite_integrityCheckMethod $value): void {
        $this->getBackingStore()->set('integrityCheckMethod', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the pfsGroup property value. Perfect Forward Secrecy Group. Possible values are: pfs1, pfs2, pfs2048, ecp256, ecp384, pfsMM, pfs24.
     * @param CryptographySuite_pfsGroup|null $value Value to set for the pfsGroup property.
    */
    public function setPfsGroup(?CryptographySuite_pfsGroup $value): void {
        $this->getBackingStore()->set('pfsGroup', $value);
    }

}
