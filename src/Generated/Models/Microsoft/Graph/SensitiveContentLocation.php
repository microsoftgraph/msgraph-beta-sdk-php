<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SensitiveContentLocation implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $confidence  */
    private ?int $confidence = null;
    
    /** @var array<SensitiveContentEvidence>|null $evidences  */
    private ?array $evidences = null;
    
    /** @var string|null $idMatch  */
    private ?string $idMatch = null;
    
    /** @var int|null $length  */
    private ?int $length = null;
    
    /** @var int|null $offset  */
    private ?int $offset = null;
    
    /**
     * Instantiates a new sensitiveContentLocation and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SensitiveContentLocation
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SensitiveContentLocation {
        return new SensitiveContentLocation();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the confidence property value. 
     * @return int|null
    */
    public function getConfidence(): ?int {
        return $this->confidence;
    }

    /**
     * Gets the evidences property value. 
     * @return array<SensitiveContentEvidence>|null
    */
    public function getEvidences(): ?array {
        return $this->evidences;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'confidence' => function (self $o, ParseNode $n) { $o->setConfidence($n->getIntegerValue()); },
            'evidences' => function (self $o, ParseNode $n) { $o->setEvidences($n->getCollectionOfObjectValues(SensitiveContentEvidence::class)); },
            'idMatch' => function (self $o, ParseNode $n) { $o->setIdMatch($n->getStringValue()); },
            'length' => function (self $o, ParseNode $n) { $o->setLength($n->getIntegerValue()); },
            'offset' => function (self $o, ParseNode $n) { $o->setOffset($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the idMatch property value. 
     * @return string|null
    */
    public function getIdMatch(): ?string {
        return $this->idMatch;
    }

    /**
     * Gets the length property value. 
     * @return int|null
    */
    public function getLength(): ?int {
        return $this->length;
    }

    /**
     * Gets the offset property value. 
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('confidence', $this->confidence);
        $writer->writeCollectionOfObjectValues('evidences', $this->evidences);
        $writer->writeStringValue('idMatch', $this->idMatch);
        $writer->writeIntegerValue('length', $this->length);
        $writer->writeIntegerValue('offset', $this->offset);
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
     * Sets the confidence property value. 
     *  @param int|null $value Value to set for the confidence property.
    */
    public function setConfidence(?int $value ): void {
        $this->confidence = $value;
    }

    /**
     * Sets the evidences property value. 
     *  @param array<SensitiveContentEvidence>|null $value Value to set for the evidences property.
    */
    public function setEvidences(?array $value ): void {
        $this->evidences = $value;
    }

    /**
     * Sets the idMatch property value. 
     *  @param string|null $value Value to set for the idMatch property.
    */
    public function setIdMatch(?string $value ): void {
        $this->idMatch = $value;
    }

    /**
     * Sets the length property value. 
     *  @param int|null $value Value to set for the length property.
    */
    public function setLength(?int $value ): void {
        $this->length = $value;
    }

    /**
     * Sets the offset property value. 
     *  @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value ): void {
        $this->offset = $value;
    }

}
