<?php

namespace Microsoft\Graph\Beta\Generated\TrustFramework\KeySets\Item\GenerateKey;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GenerateKeyPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $EscapedUse The use property
    */
    private ?string $escapedUse = null;
    
    /**
     * @var int|null $exp The exp property
    */
    private ?int $exp = null;
    
    /**
     * @var string|null $kty The kty property
    */
    private ?string $kty = null;
    
    /**
     * @var int|null $nbf The nbf property
    */
    private ?int $nbf = null;
    
    /**
     * Instantiates a new generateKeyPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GenerateKeyPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GenerateKeyPostRequestBody {
        return new GenerateKeyPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the exp property value. The exp property
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
            'use' => function (ParseNode $n) use ($o) { $o->setUse($n->getStringValue()); },
            'exp' => function (ParseNode $n) use ($o) { $o->setExp($n->getIntegerValue()); },
            'kty' => function (ParseNode $n) use ($o) { $o->setKty($n->getStringValue()); },
            'nbf' => function (ParseNode $n) use ($o) { $o->setNbf($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the kty property value. The kty property
     * @return string|null
    */
    public function getKty(): ?string {
        return $this->kty;
    }

    /**
     * Gets the nbf property value. The nbf property
     * @return int|null
    */
    public function getNbf(): ?int {
        return $this->nbf;
    }

    /**
     * Gets the use property value. The use property
     * @return string|null
    */
    public function getUse(): ?string {
        return $this->escapedUse;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('use', $this->escapedUse);
        $writer->writeIntegerValue('exp', $this->exp);
        $writer->writeStringValue('kty', $this->kty);
        $writer->writeIntegerValue('nbf', $this->nbf);
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
     * Sets the exp property value. The exp property
     *  @param int|null $value Value to set for the exp property.
    */
    public function setExp(?int $value ): void {
        $this->exp = $value;
    }

    /**
     * Sets the kty property value. The kty property
     *  @param string|null $value Value to set for the kty property.
    */
    public function setKty(?string $value ): void {
        $this->kty = $value;
    }

    /**
     * Sets the nbf property value. The nbf property
     *  @param int|null $value Value to set for the nbf property.
    */
    public function setNbf(?int $value ): void {
        $this->nbf = $value;
    }

    /**
     * Sets the use property value. The use property
     *  @param string|null $value Value to set for the EscapedUse property.
    */
    public function setUse(?string $value ): void {
        $this->escapedUse = $value;
    }

}
