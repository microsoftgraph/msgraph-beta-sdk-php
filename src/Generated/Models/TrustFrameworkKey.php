<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TrustFrameworkKey implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $d RSA Key - private exponent. Field cannot be read back.
    */
    private ?string $d = null;
    
    /**
     * @var string|null $dp RSA Key - first exponent. Field cannot be read back.
    */
    private ?string $dp = null;
    
    /**
     * @var string|null $dq RSA Key - second exponent. Field cannot be read back.
    */
    private ?string $dq = null;
    
    /**
     * @var string|null $e RSA Key - public exponent
    */
    private ?string $e = null;
    
    /**
     * @var string|null $escapedUse The use (public key use) parameter identifies the intended use of the public key.  The use parameter is employed to indicate whether a public key is used for encrypting data or verifying the signature on data. Possible values are: sig (signature), enc (encryption)
    */
    private ?string $escapedUse = null;
    
    /**
     * @var int|null $exp This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
    */
    private ?int $exp = null;
    
    /**
     * @var string|null $k Symmetric Key for oct key type. Field cannot be read back.
    */
    private ?string $k = null;
    
    /**
     * @var string|null $kid The unique identifier for the key.
    */
    private ?string $kid = null;
    
    /**
     * @var string|null $kty The kty (key type) parameter identifies the cryptographic algorithm family used with the key, The valid values are rsa, oct.
    */
    private ?string $kty = null;
    
    /**
     * @var string|null $n RSA Key - modulus
    */
    private ?string $n = null;
    
    /**
     * @var int|null $nbf This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
    */
    private ?int $nbf = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $p RSA Key - first prime. Field cannot be read back.
    */
    private ?string $p = null;
    
    /**
     * @var string|null $q RSA Key - second prime. Field cannot be read back.
    */
    private ?string $q = null;
    
    /**
     * @var string|null $qi RSA Key - Coefficient. Field cannot be read back.
    */
    private ?string $qi = null;
    
    /**
     * @var array<string>|null $x5c The x5c (X.509 certificate chain) parameter contains a chain of one or more PKIX certificates RFC 5280.
    */
    private ?array $x5c = null;
    
    /**
     * @var string|null $x5t The x5t (X.509 certificate SHA-1 thumbprint) parameter is a base64url-encoded SHA-1 thumbprint (a.k.a. digest) of the DER encoding of an X.509 certificate RFC 5280.
    */
    private ?string $x5t = null;
    
    /**
     * Instantiates a new trustFrameworkKey and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.trustFrameworkKey');
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
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the d property value. RSA Key - private exponent. Field cannot be read back.
     * @return string|null
    */
    public function getD(): ?string {
        return $this->d;
    }

    /**
     * Gets the dp property value. RSA Key - first exponent. Field cannot be read back.
     * @return string|null
    */
    public function getDp(): ?string {
        return $this->dp;
    }

    /**
     * Gets the dq property value. RSA Key - second exponent. Field cannot be read back.
     * @return string|null
    */
    public function getDq(): ?string {
        return $this->dq;
    }

    /**
     * Gets the e property value. RSA Key - public exponent
     * @return string|null
    */
    public function getE(): ?string {
        return $this->e;
    }

    /**
     * Gets the exp property value. This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
     * @return int|null
    */
    public function getExp(): ?int {
        return $this->exp;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'd' => function (ParseNode $n) use ($o) { $o->setD($n->getStringValue()); },
            'dp' => function (ParseNode $n) use ($o) { $o->setDp($n->getStringValue()); },
            'dq' => function (ParseNode $n) use ($o) { $o->setDq($n->getStringValue()); },
            'e' => function (ParseNode $n) use ($o) { $o->setE($n->getStringValue()); },
            'use' => function (ParseNode $n) use ($o) { $o->setUse($n->getStringValue()); },
            'exp' => function (ParseNode $n) use ($o) { $o->setExp($n->getIntegerValue()); },
            'k' => function (ParseNode $n) use ($o) { $o->setK($n->getStringValue()); },
            'kid' => function (ParseNode $n) use ($o) { $o->setKid($n->getStringValue()); },
            'kty' => function (ParseNode $n) use ($o) { $o->setKty($n->getStringValue()); },
            'n' => function (ParseNode $n) use ($o) { $o->setN($n->getStringValue()); },
            'nbf' => function (ParseNode $n) use ($o) { $o->setNbf($n->getIntegerValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'p' => function (ParseNode $n) use ($o) { $o->setP($n->getStringValue()); },
            'q' => function (ParseNode $n) use ($o) { $o->setQ($n->getStringValue()); },
            'qi' => function (ParseNode $n) use ($o) { $o->setQi($n->getStringValue()); },
            'x5c' => function (ParseNode $n) use ($o) { $o->setX5c($n->getCollectionOfPrimitiveValues()); },
            'x5t' => function (ParseNode $n) use ($o) { $o->setX5t($n->getStringValue()); },
        ];
    }

    /**
     * Gets the k property value. Symmetric Key for oct key type. Field cannot be read back.
     * @return string|null
    */
    public function getK(): ?string {
        return $this->k;
    }

    /**
     * Gets the kid property value. The unique identifier for the key.
     * @return string|null
    */
    public function getKid(): ?string {
        return $this->kid;
    }

    /**
     * Gets the kty property value. The kty (key type) parameter identifies the cryptographic algorithm family used with the key, The valid values are rsa, oct.
     * @return string|null
    */
    public function getKty(): ?string {
        return $this->kty;
    }

    /**
     * Gets the n property value. RSA Key - modulus
     * @return string|null
    */
    public function getN(): ?string {
        return $this->n;
    }

    /**
     * Gets the nbf property value. This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
     * @return int|null
    */
    public function getNbf(): ?int {
        return $this->nbf;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the p property value. RSA Key - first prime. Field cannot be read back.
     * @return string|null
    */
    public function getP(): ?string {
        return $this->p;
    }

    /**
     * Gets the q property value. RSA Key - second prime. Field cannot be read back.
     * @return string|null
    */
    public function getQ(): ?string {
        return $this->q;
    }

    /**
     * Gets the qi property value. RSA Key - Coefficient. Field cannot be read back.
     * @return string|null
    */
    public function getQi(): ?string {
        return $this->qi;
    }

    /**
     * Gets the use property value. The use (public key use) parameter identifies the intended use of the public key.  The use parameter is employed to indicate whether a public key is used for encrypting data or verifying the signature on data. Possible values are: sig (signature), enc (encryption)
     * @return string|null
    */
    public function getUse(): ?string {
        return $this->escapedUse;
    }

    /**
     * Gets the x5c property value. The x5c (X.509 certificate chain) parameter contains a chain of one or more PKIX certificates RFC 5280.
     * @return array<string>|null
    */
    public function getX5c(): ?array {
        return $this->x5c;
    }

    /**
     * Gets the x5t property value. The x5t (X.509 certificate SHA-1 thumbprint) parameter is a base64url-encoded SHA-1 thumbprint (a.k.a. digest) of the DER encoding of an X.509 certificate RFC 5280.
     * @return string|null
    */
    public function getX5t(): ?string {
        return $this->x5t;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('d', $this->d);
        $writer->writeStringValue('dp', $this->dp);
        $writer->writeStringValue('dq', $this->dq);
        $writer->writeStringValue('e', $this->e);
        $writer->writeStringValue('use', $this->escapedUse);
        $writer->writeIntegerValue('exp', $this->exp);
        $writer->writeStringValue('k', $this->k);
        $writer->writeStringValue('kid', $this->kid);
        $writer->writeStringValue('kty', $this->kty);
        $writer->writeStringValue('n', $this->n);
        $writer->writeIntegerValue('nbf', $this->nbf);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('p', $this->p);
        $writer->writeStringValue('q', $this->q);
        $writer->writeStringValue('qi', $this->qi);
        $writer->writeCollectionOfPrimitiveValues('x5c', $this->x5c);
        $writer->writeStringValue('x5t', $this->x5t);
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
     * Sets the d property value. RSA Key - private exponent. Field cannot be read back.
     *  @param string|null $value Value to set for the d property.
    */
    public function setD(?string $value ): void {
        $this->d = $value;
    }

    /**
     * Sets the dp property value. RSA Key - first exponent. Field cannot be read back.
     *  @param string|null $value Value to set for the dp property.
    */
    public function setDp(?string $value ): void {
        $this->dp = $value;
    }

    /**
     * Sets the dq property value. RSA Key - second exponent. Field cannot be read back.
     *  @param string|null $value Value to set for the dq property.
    */
    public function setDq(?string $value ): void {
        $this->dq = $value;
    }

    /**
     * Sets the e property value. RSA Key - public exponent
     *  @param string|null $value Value to set for the e property.
    */
    public function setE(?string $value ): void {
        $this->e = $value;
    }

    /**
     * Sets the exp property value. This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
     *  @param int|null $value Value to set for the exp property.
    */
    public function setExp(?int $value ): void {
        $this->exp = $value;
    }

    /**
     * Sets the k property value. Symmetric Key for oct key type. Field cannot be read back.
     *  @param string|null $value Value to set for the k property.
    */
    public function setK(?string $value ): void {
        $this->k = $value;
    }

    /**
     * Sets the kid property value. The unique identifier for the key.
     *  @param string|null $value Value to set for the kid property.
    */
    public function setKid(?string $value ): void {
        $this->kid = $value;
    }

    /**
     * Sets the kty property value. The kty (key type) parameter identifies the cryptographic algorithm family used with the key, The valid values are rsa, oct.
     *  @param string|null $value Value to set for the kty property.
    */
    public function setKty(?string $value ): void {
        $this->kty = $value;
    }

    /**
     * Sets the n property value. RSA Key - modulus
     *  @param string|null $value Value to set for the n property.
    */
    public function setN(?string $value ): void {
        $this->n = $value;
    }

    /**
     * Sets the nbf property value. This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
     *  @param int|null $value Value to set for the nbf property.
    */
    public function setNbf(?int $value ): void {
        $this->nbf = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the p property value. RSA Key - first prime. Field cannot be read back.
     *  @param string|null $value Value to set for the p property.
    */
    public function setP(?string $value ): void {
        $this->p = $value;
    }

    /**
     * Sets the q property value. RSA Key - second prime. Field cannot be read back.
     *  @param string|null $value Value to set for the q property.
    */
    public function setQ(?string $value ): void {
        $this->q = $value;
    }

    /**
     * Sets the qi property value. RSA Key - Coefficient. Field cannot be read back.
     *  @param string|null $value Value to set for the qi property.
    */
    public function setQi(?string $value ): void {
        $this->qi = $value;
    }

    /**
     * Sets the use property value. The use (public key use) parameter identifies the intended use of the public key.  The use parameter is employed to indicate whether a public key is used for encrypting data or verifying the signature on data. Possible values are: sig (signature), enc (encryption)
     *  @param string|null $value Value to set for the EscapedUse property.
    */
    public function setUse(?string $value ): void {
        $this->escapedUse = $value;
    }

    /**
     * Sets the x5c property value. The x5c (X.509 certificate chain) parameter contains a chain of one or more PKIX certificates RFC 5280.
     *  @param array<string>|null $value Value to set for the x5c property.
    */
    public function setX5c(?array $value ): void {
        $this->x5c = $value;
    }

    /**
     * Sets the x5t property value. The x5t (X.509 certificate SHA-1 thumbprint) parameter is a base64url-encoded SHA-1 thumbprint (a.k.a. digest) of the DER encoding of an X.509 certificate RFC 5280.
     *  @param string|null $value Value to set for the x5t property.
    */
    public function setX5t(?string $value ): void {
        $this->x5t = $value;
    }

}
