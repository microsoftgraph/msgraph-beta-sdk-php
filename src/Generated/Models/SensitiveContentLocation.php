<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SensitiveContentLocation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $confidence The confidence property
    */
    private ?int $confidence = null;
    
    /**
     * @var array<SensitiveContentEvidence>|null $evidences The evidences property
    */
    private ?array $evidences = null;
    
    /**
     * @var string|null $idMatch The idMatch property
    */
    private ?string $idMatch = null;
    
    /**
     * @var int|null $length The length property
    */
    private ?int $length = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $offset The offset property
    */
    private ?int $offset = null;
    
    /**
     * Instantiates a new sensitiveContentLocation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.sensitiveContentLocation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SensitiveContentLocation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SensitiveContentLocation {
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
     * Gets the confidence property value. The confidence property
     * @return int|null
    */
    public function getConfidence(): ?int {
        return $this->confidence;
    }

    /**
     * Gets the evidences property value. The evidences property
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
        $o = $this;
        return  [
            'confidence' => function (ParseNode $n) use ($o) { $o->setConfidence($n->getIntegerValue()); },
            'evidences' => function (ParseNode $n) use ($o) { $o->setEvidences($n->getCollectionOfObjectValues(array(SensitiveContentEvidence::class, 'createFromDiscriminatorValue'))); },
            'idMatch' => function (ParseNode $n) use ($o) { $o->setIdMatch($n->getStringValue()); },
            'length' => function (ParseNode $n) use ($o) { $o->setLength($n->getIntegerValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'offset' => function (ParseNode $n) use ($o) { $o->setOffset($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the idMatch property value. The idMatch property
     * @return string|null
    */
    public function getIdMatch(): ?string {
        return $this->idMatch;
    }

    /**
     * Gets the length property value. The length property
     * @return int|null
    */
    public function getLength(): ?int {
        return $this->length;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the offset property value. The offset property
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
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the confidence property value. The confidence property
     *  @param int|null $value Value to set for the confidence property.
    */
    public function setConfidence(?int $value ): void {
        $this->confidence = $value;
    }

    /**
     * Sets the evidences property value. The evidences property
     *  @param array<SensitiveContentEvidence>|null $value Value to set for the evidences property.
    */
    public function setEvidences(?array $value ): void {
        $this->evidences = $value;
    }

    /**
     * Sets the idMatch property value. The idMatch property
     *  @param string|null $value Value to set for the idMatch property.
    */
    public function setIdMatch(?string $value ): void {
        $this->idMatch = $value;
    }

    /**
     * Sets the length property value. The length property
     *  @param int|null $value Value to set for the length property.
    */
    public function setLength(?int $value ): void {
        $this->length = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the offset property value. The offset property
     *  @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value ): void {
        $this->offset = $value;
    }

}
