<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartAreaFormat extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var WorkbookChartFill|null $fill Represents the fill format of an object, which includes background formatting information. Read-only.
    */
    private ?WorkbookChartFill $fill = null;
    
    /**
     * @var WorkbookChartFont|null $font Represents the font attributes (font name, font size, color, etc.) for the current object. Read-only.
    */
    private ?WorkbookChartFont $font = null;
    
    /**
     * Instantiates a new workbookChartAreaFormat and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartAreaFormat
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartAreaFormat {
        return new WorkbookChartAreaFormat();
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
        return array_merge(parent::getFieldDeserializers(), [
            'fill' => function (ParseNode $n) use ($o) { $o->setFill($n->getObjectValue(array(WorkbookChartFill::class, 'createFromDiscriminatorValue'))); },
            'font' => function (ParseNode $n) use ($o) { $o->setFont($n->getObjectValue(array(WorkbookChartFont::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the fill property value. Represents the fill format of an object, which includes background formatting information. Read-only.
     * @return WorkbookChartFill|null
    */
    public function getFill(): ?WorkbookChartFill {
        return $this->fill;
    }

    /**
     * Gets the font property value. Represents the font attributes (font name, font size, color, etc.) for the current object. Read-only.
     * @return WorkbookChartFont|null
    */
    public function getFont(): ?WorkbookChartFont {
        return $this->font;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('fill', $this->fill);
        $writer->writeObjectValue('font', $this->font);
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
     * Sets the fill property value. Represents the fill format of an object, which includes background formatting information. Read-only.
     *  @param WorkbookChartFill|null $value Value to set for the fill property.
    */
    public function setFill(?WorkbookChartFill $value ): void {
        $this->fill = $value;
    }

    /**
     * Sets the font property value. Represents the font attributes (font name, font size, color, etc.) for the current object. Read-only.
     *  @param WorkbookChartFont|null $value Value to set for the font property.
    */
    public function setFont(?WorkbookChartFont $value ): void {
        $this->font = $value;
    }

}
