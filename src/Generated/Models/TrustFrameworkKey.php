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

class TrustFrameworkKey implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new trustFrameworkKey and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TrustFrameworkKey
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TrustFrameworkKey {
        return new TrustFrameworkKey();
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
     * Gets the d property value. RSA Key - private exponent. Field cannot be read back.
     * @return string|null
    */
    public function getD(): ?string {
        $val = $this->getBackingStore()->get('d');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'd'");
    }

    /**
     * Gets the dp property value. RSA Key - first exponent. Field cannot be read back.
     * @return string|null
    */
    public function getDp(): ?string {
        $val = $this->getBackingStore()->get('dp');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dp'");
    }

    /**
     * Gets the dq property value. RSA Key - second exponent. Field cannot be read back.
     * @return string|null
    */
    public function getDq(): ?string {
        $val = $this->getBackingStore()->get('dq');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dq'");
    }

    /**
     * Gets the e property value. RSA Key - public exponent
     * @return string|null
    */
    public function getE(): ?string {
        $val = $this->getBackingStore()->get('e');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'e'");
    }

    /**
     * Gets the exp property value. This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
     * @return int|null
    */
    public function getExp(): ?int {
        $val = $this->getBackingStore()->get('exp');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exp'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'd' => fn(ParseNode $n) => $o->setD($n->getStringValue()),
            'dp' => fn(ParseNode $n) => $o->setDp($n->getStringValue()),
            'dq' => fn(ParseNode $n) => $o->setDq($n->getStringValue()),
            'e' => fn(ParseNode $n) => $o->setE($n->getStringValue()),
            'use' => fn(ParseNode $n) => $o->setUse($n->getStringValue()),
            'exp' => fn(ParseNode $n) => $o->setExp($n->getIntegerValue()),
            'k' => fn(ParseNode $n) => $o->setK($n->getStringValue()),
            'kid' => fn(ParseNode $n) => $o->setKid($n->getStringValue()),
            'kty' => fn(ParseNode $n) => $o->setKty($n->getStringValue()),
            'n' => fn(ParseNode $n) => $o->setN($n->getStringValue()),
            'nbf' => fn(ParseNode $n) => $o->setNbf($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'p' => fn(ParseNode $n) => $o->setP($n->getStringValue()),
            'q' => fn(ParseNode $n) => $o->setQ($n->getStringValue()),
            'qi' => fn(ParseNode $n) => $o->setQi($n->getStringValue()),
            'x5c' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setX5c($val);
            },
            'x5t' => fn(ParseNode $n) => $o->setX5t($n->getStringValue()),
        ];
    }

    /**
     * Gets the k property value. Symmetric Key for oct key type. Field cannot be read back.
     * @return string|null
    */
    public function getK(): ?string {
        $val = $this->getBackingStore()->get('k');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'k'");
    }

    /**
     * Gets the kid property value. The unique identifier for the key.
     * @return string|null
    */
    public function getKid(): ?string {
        $val = $this->getBackingStore()->get('kid');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kid'");
    }

    /**
     * Gets the kty property value. The kty (key type) parameter identifies the cryptographic algorithm family used with the key, The valid values are rsa, oct.
     * @return string|null
    */
    public function getKty(): ?string {
        $val = $this->getBackingStore()->get('kty');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kty'");
    }

    /**
     * Gets the n property value. RSA Key - modulus
     * @return string|null
    */
    public function getN(): ?string {
        $val = $this->getBackingStore()->get('n');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'n'");
    }

    /**
     * Gets the nbf property value. This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
     * @return int|null
    */
    public function getNbf(): ?int {
        $val = $this->getBackingStore()->get('nbf');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nbf'");
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
     * Gets the p property value. RSA Key - first prime. Field cannot be read back.
     * @return string|null
    */
    public function getP(): ?string {
        $val = $this->getBackingStore()->get('p');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'p'");
    }

    /**
     * Gets the q property value. RSA Key - second prime. Field cannot be read back.
     * @return string|null
    */
    public function getQ(): ?string {
        $val = $this->getBackingStore()->get('q');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'q'");
    }

    /**
     * Gets the qi property value. RSA Key - Coefficient. Field cannot be read back.
     * @return string|null
    */
    public function getQi(): ?string {
        $val = $this->getBackingStore()->get('qi');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'qi'");
    }

    /**
     * Gets the use property value. The use (public key use) parameter identifies the intended use of the public key.  The use parameter is employed to indicate whether a public key is used for encrypting data or verifying the signature on data. Possible values are: sig (signature), enc (encryption)
     * @return string|null
    */
    public function getUse(): ?string {
        $val = $this->getBackingStore()->get('escapedUse');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'escapedUse'");
    }

    /**
     * Gets the x5c property value. The x5c (X.509 certificate chain) parameter contains a chain of one or more PKIX certificates RFC 5280.
     * @return array<string>|null
    */
    public function getX5c(): ?array {
        $val = $this->getBackingStore()->get('x5c');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'x5c'");
    }

    /**
     * Gets the x5t property value. The x5t (X.509 certificate SHA-1 thumbprint) parameter is a base64url-encoded SHA-1 thumbprint (a.k.a. digest) of the DER encoding of an X.509 certificate RFC 5280.
     * @return string|null
    */
    public function getX5t(): ?string {
        $val = $this->getBackingStore()->get('x5t');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'x5t'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('d', $this->getD());
        $writer->writeStringValue('dp', $this->getDp());
        $writer->writeStringValue('dq', $this->getDq());
        $writer->writeStringValue('e', $this->getE());
        $writer->writeStringValue('use', $this->getUse());
        $writer->writeIntegerValue('exp', $this->getExp());
        $writer->writeStringValue('k', $this->getK());
        $writer->writeStringValue('kid', $this->getKid());
        $writer->writeStringValue('kty', $this->getKty());
        $writer->writeStringValue('n', $this->getN());
        $writer->writeIntegerValue('nbf', $this->getNbf());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('p', $this->getP());
        $writer->writeStringValue('q', $this->getQ());
        $writer->writeStringValue('qi', $this->getQi());
        $writer->writeCollectionOfPrimitiveValues('x5c', $this->getX5c());
        $writer->writeStringValue('x5t', $this->getX5t());
        $writer->writeAdditionalData($this->getAdditionalData());
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
     * Sets the d property value. RSA Key - private exponent. Field cannot be read back.
     * @param string|null $value Value to set for the d property.
    */
    public function setD(?string $value): void {
        $this->getBackingStore()->set('d', $value);
    }

    /**
     * Sets the dp property value. RSA Key - first exponent. Field cannot be read back.
     * @param string|null $value Value to set for the dp property.
    */
    public function setDp(?string $value): void {
        $this->getBackingStore()->set('dp', $value);
    }

    /**
     * Sets the dq property value. RSA Key - second exponent. Field cannot be read back.
     * @param string|null $value Value to set for the dq property.
    */
    public function setDq(?string $value): void {
        $this->getBackingStore()->set('dq', $value);
    }

    /**
     * Sets the e property value. RSA Key - public exponent
     * @param string|null $value Value to set for the e property.
    */
    public function setE(?string $value): void {
        $this->getBackingStore()->set('e', $value);
    }

    /**
     * Sets the exp property value. This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
     * @param int|null $value Value to set for the exp property.
    */
    public function setExp(?int $value): void {
        $this->getBackingStore()->set('exp', $value);
    }

    /**
     * Sets the k property value. Symmetric Key for oct key type. Field cannot be read back.
     * @param string|null $value Value to set for the k property.
    */
    public function setK(?string $value): void {
        $this->getBackingStore()->set('k', $value);
    }

    /**
     * Sets the kid property value. The unique identifier for the key.
     * @param string|null $value Value to set for the kid property.
    */
    public function setKid(?string $value): void {
        $this->getBackingStore()->set('kid', $value);
    }

    /**
     * Sets the kty property value. The kty (key type) parameter identifies the cryptographic algorithm family used with the key, The valid values are rsa, oct.
     * @param string|null $value Value to set for the kty property.
    */
    public function setKty(?string $value): void {
        $this->getBackingStore()->set('kty', $value);
    }

    /**
     * Sets the n property value. RSA Key - modulus
     * @param string|null $value Value to set for the n property.
    */
    public function setN(?string $value): void {
        $this->getBackingStore()->set('n', $value);
    }

    /**
     * Sets the nbf property value. This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
     * @param int|null $value Value to set for the nbf property.
    */
    public function setNbf(?int $value): void {
        $this->getBackingStore()->set('nbf', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the p property value. RSA Key - first prime. Field cannot be read back.
     * @param string|null $value Value to set for the p property.
    */
    public function setP(?string $value): void {
        $this->getBackingStore()->set('p', $value);
    }

    /**
     * Sets the q property value. RSA Key - second prime. Field cannot be read back.
     * @param string|null $value Value to set for the q property.
    */
    public function setQ(?string $value): void {
        $this->getBackingStore()->set('q', $value);
    }

    /**
     * Sets the qi property value. RSA Key - Coefficient. Field cannot be read back.
     * @param string|null $value Value to set for the qi property.
    */
    public function setQi(?string $value): void {
        $this->getBackingStore()->set('qi', $value);
    }

    /**
     * Sets the use property value. The use (public key use) parameter identifies the intended use of the public key.  The use parameter is employed to indicate whether a public key is used for encrypting data or verifying the signature on data. Possible values are: sig (signature), enc (encryption)
     * @param string|null $value Value to set for the EscapedUse property.
    */
    public function setUse(?string $value): void {
        $this->getBackingStore()->set('escapedUse', $value);
    }

    /**
     * Sets the x5c property value. The x5c (X.509 certificate chain) parameter contains a chain of one or more PKIX certificates RFC 5280.
     * @param array<string>|null $value Value to set for the x5c property.
    */
    public function setX5c(?array $value): void {
        $this->getBackingStore()->set('x5c', $value);
    }

    /**
     * Sets the x5t property value. The x5t (X.509 certificate SHA-1 thumbprint) parameter is a base64url-encoded SHA-1 thumbprint (a.k.a. digest) of the DER encoding of an X.509 certificate RFC 5280.
     * @param string|null $value Value to set for the x5t property.
    */
    public function setX5t(?string $value): void {
        $this->getBackingStore()->set('x5t', $value);
    }

}
