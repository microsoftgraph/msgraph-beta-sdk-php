<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartPoint extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var WorkbookChartPointFormat|null $format Encapsulates the format properties chart point. Read-only.
    */
    private ?WorkbookChartPointFormat $format = null;
    
    /**
     * @var Json|null $value Returns the value of a chart point. Read-only.
    */
    private ?Json $value = null;
    
    /**
     * Instantiates a new workbookChartPoint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartPoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartPoint {
        return new WorkbookChartPoint();
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
            'format' => function (ParseNode $n) use ($o) { $o->setFormat($n->getObjectValue(array(WorkbookChartPointFormat::class, 'createFromDiscriminatorValue'))); },
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getObjectValue(array(Json::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the format property value. Encapsulates the format properties chart point. Read-only.
     * @return WorkbookChartPointFormat|null
    */
    public function getFormat(): ?WorkbookChartPointFormat {
        return $this->format;
    }

    /**
     * Gets the value property value. Returns the value of a chart point. Read-only.
     * @return Json|null
    */
    public function getValue(): ?Json {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('format', $this->format);
        $writer->writeObjectValue('value', $this->value);
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
     * Sets the format property value. Encapsulates the format properties chart point. Read-only.
     *  @param WorkbookChartPointFormat|null $value Value to set for the format property.
    */
    public function setFormat(?WorkbookChartPointFormat $value ): void {
        $this->format = $value;
    }

    /**
     * Sets the value property value. Returns the value of a chart point. Read-only.
     *  @param Json|null $value Value to set for the value property.
    */
    public function setValue(?Json $value ): void {
        $this->value = $value;
    }

}
