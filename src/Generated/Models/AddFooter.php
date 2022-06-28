<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AddFooter extends MarkContent implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Alignment|null $alignment The alignment property
    */
    private ?Alignment $alignment = null;
    
    /**
     * @var int|null $margin The margin property
    */
    private ?int $margin = null;
    
    /**
     * Instantiates a new AddFooter and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AddFooter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AddFooter {
        return new AddFooter();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the alignment property value. The alignment property
     * @return Alignment|null
    */
    public function getAlignment(): ?Alignment {
        return $this->alignment;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alignment' => function (ParseNode $n) use ($o) { $o->setAlignment($n->getEnumValue(Alignment::class)); },
            'margin' => function (ParseNode $n) use ($o) { $o->setMargin($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the margin property value. The margin property
     * @return int|null
    */
    public function getMargin(): ?int {
        return $this->margin;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('alignment', $this->alignment);
        $writer->writeIntegerValue('margin', $this->margin);
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
     * Sets the alignment property value. The alignment property
     *  @param Alignment|null $value Value to set for the alignment property.
    */
    public function setAlignment(?Alignment $value ): void {
        $this->alignment = $value;
    }

    /**
     * Sets the margin property value. The margin property
     *  @param int|null $value Value to set for the margin property.
    */
    public function setMargin(?int $value ): void {
        $this->margin = $value;
    }

}
