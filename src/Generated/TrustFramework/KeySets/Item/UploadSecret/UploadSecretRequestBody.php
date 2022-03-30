<?php

namespace Microsoft\Graph\Beta\Generated\TrustFramework\KeySets\Item\UploadSecret;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UploadSecretRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $EscapedUse  */
    private ?string $escapedUse = null;
    
    /** @var int|null $exp  */
    private ?int $exp = null;
    
    /** @var string|null $k  */
    private ?string $k = null;
    
    /** @var int|null $nbf  */
    private ?int $nbf = null;
    
    /**
     * Instantiates a new uploadSecretRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UploadSecretRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UploadSecretRequestBody {
        return new UploadSecretRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the exp property value. 
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
        return  [
            'use' => function (self $o, ParseNode $n) { $o->setEscapedUse($n->getStringValue()); },
            'exp' => function (self $o, ParseNode $n) { $o->setExp($n->getIntegerValue()); },
            'k' => function (self $o, ParseNode $n) { $o->setK($n->getStringValue()); },
            'nbf' => function (self $o, ParseNode $n) { $o->setNbf($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the k property value. 
     * @return string|null
    */
    public function getK(): ?string {
        return $this->k;
    }

    /**
     * Gets the nbf property value. 
     * @return int|null
    */
    public function getNbf(): ?int {
        return $this->nbf;
    }

    /**
     * Gets the use property value. 
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
        $writer->writeStringValue('k', $this->k);
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
     * Sets the exp property value. 
     *  @param int|null $value Value to set for the exp property.
    */
    public function setExp(?int $value ): void {
        $this->exp = $value;
    }

    /**
     * Sets the k property value. 
     *  @param string|null $value Value to set for the k property.
    */
    public function setK(?string $value ): void {
        $this->k = $value;
    }

    /**
     * Sets the nbf property value. 
     *  @param int|null $value Value to set for the nbf property.
    */
    public function setNbf(?int $value ): void {
        $this->nbf = $value;
    }

    /**
     * Sets the use property value. 
     *  @param string|null $value Value to set for the EscapedUse property.
    */
    public function setUse(?string $value ): void {
        $this->escapedUse = $value;
    }

}
