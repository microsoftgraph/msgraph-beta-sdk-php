<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OrganizationalMessageLogoDimensions implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $maxHeight Maximum height of the logo
    */
    private ?int $maxHeight = null;
    
    /**
     * @var int|null $maxWidth Maximum width of the logo
    */
    private ?int $maxWidth = null;
    
    /**
     * @var int|null $minHeight Minimum height of the logo
    */
    private ?int $minHeight = null;
    
    /**
     * @var int|null $minWidth Minimum width of the logo
    */
    private ?int $minWidth = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new organizationalMessageLogoDimensions and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.organizationalMessageLogoDimensions');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationalMessageLogoDimensions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationalMessageLogoDimensions {
        return new OrganizationalMessageLogoDimensions();
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
            'maxHeight' => function (ParseNode $n) use ($o) { $o->setMaxHeight($n->getIntegerValue()); },
            'maxWidth' => function (ParseNode $n) use ($o) { $o->setMaxWidth($n->getIntegerValue()); },
            'minHeight' => function (ParseNode $n) use ($o) { $o->setMinHeight($n->getIntegerValue()); },
            'minWidth' => function (ParseNode $n) use ($o) { $o->setMinWidth($n->getIntegerValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the maxHeight property value. Maximum height of the logo
     * @return int|null
    */
    public function getMaxHeight(): ?int {
        return $this->maxHeight;
    }

    /**
     * Gets the maxWidth property value. Maximum width of the logo
     * @return int|null
    */
    public function getMaxWidth(): ?int {
        return $this->maxWidth;
    }

    /**
     * Gets the minHeight property value. Minimum height of the logo
     * @return int|null
    */
    public function getMinHeight(): ?int {
        return $this->minHeight;
    }

    /**
     * Gets the minWidth property value. Minimum width of the logo
     * @return int|null
    */
    public function getMinWidth(): ?int {
        return $this->minWidth;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('maxHeight', $this->maxHeight);
        $writer->writeIntegerValue('maxWidth', $this->maxWidth);
        $writer->writeIntegerValue('minHeight', $this->minHeight);
        $writer->writeIntegerValue('minWidth', $this->minWidth);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the maxHeight property value. Maximum height of the logo
     *  @param int|null $value Value to set for the maxHeight property.
    */
    public function setMaxHeight(?int $value ): void {
        $this->maxHeight = $value;
    }

    /**
     * Sets the maxWidth property value. Maximum width of the logo
     *  @param int|null $value Value to set for the maxWidth property.
    */
    public function setMaxWidth(?int $value ): void {
        $this->maxWidth = $value;
    }

    /**
     * Sets the minHeight property value. Minimum height of the logo
     *  @param int|null $value Value to set for the minHeight property.
    */
    public function setMinHeight(?int $value ): void {
        $this->minHeight = $value;
    }

    /**
     * Sets the minWidth property value. Minimum width of the logo
     *  @param int|null $value Value to set for the minWidth property.
    */
    public function setMinWidth(?int $value ): void {
        $this->minWidth = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
