<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsMetric extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $unit The unit of the user experience analytics metric.
    */
    private ?string $unit = null;
    
    /**
     * @var float|null $value The value of the user experience analytics metric.
    */
    private ?float $value = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsMetric and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsMetric
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsMetric {
        return new UserExperienceAnalyticsMetric();
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
            'unit' => function (ParseNode $n) use ($o) { $o->setUnit($n->getStringValue()); },
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getFloatValue()); },
        ]);
    }

    /**
     * Gets the unit property value. The unit of the user experience analytics metric.
     * @return string|null
    */
    public function getUnit(): ?string {
        return $this->unit;
    }

    /**
     * Gets the value property value. The value of the user experience analytics metric.
     * @return float|null
    */
    public function getValue(): ?float {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('unit', $this->unit);
        $writer->writeFloatValue('value', $this->value);
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
     * Sets the unit property value. The unit of the user experience analytics metric.
     *  @param string|null $value Value to set for the unit property.
    */
    public function setUnit(?string $value ): void {
        $this->unit = $value;
    }

    /**
     * Sets the value property value. The value of the user experience analytics metric.
     *  @param float|null $value Value to set for the value property.
    */
    public function setValue(?float $value ): void {
        $this->value = $value;
    }

}
