<?php

namespace Microsoft\Graph\Beta\Generated\Models\DeviceManagement;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RuleThreshold implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AggregationType|null $aggregation The aggregation property
    */
    private ?AggregationType $aggregation = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var OperatorType|null $operator The operator property
    */
    private ?OperatorType $operator = null;
    
    /**
     * @var int|null $target The target property
    */
    private ?int $target = null;
    
    /**
     * Instantiates a new ruleThreshold and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.deviceManagement.ruleThreshold');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RuleThreshold
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RuleThreshold {
        return new RuleThreshold();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the aggregation property value. The aggregation property
     * @return AggregationType|null
    */
    public function getAggregation(): ?AggregationType {
        return $this->aggregation;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aggregation' => function (ParseNode $n) use ($o) { $o->setAggregation($n->getEnumValue(AggregationType::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'operator' => function (ParseNode $n) use ($o) { $o->setOperator($n->getEnumValue(OperatorType::class)); },
            'target' => function (ParseNode $n) use ($o) { $o->setTarget($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the operator property value. The operator property
     * @return OperatorType|null
    */
    public function getOperator(): ?OperatorType {
        return $this->operator;
    }

    /**
     * Gets the target property value. The target property
     * @return int|null
    */
    public function getTarget(): ?int {
        return $this->target;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('aggregation', $this->aggregation);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('operator', $this->operator);
        $writer->writeIntegerValue('target', $this->target);
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
     * Sets the aggregation property value. The aggregation property
     *  @param AggregationType|null $value Value to set for the aggregation property.
    */
    public function setAggregation(?AggregationType $value ): void {
        $this->aggregation = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the operator property value. The operator property
     *  @param OperatorType|null $value Value to set for the operator property.
    */
    public function setOperator(?OperatorType $value ): void {
        $this->operator = $value;
    }

    /**
     * Sets the target property value. The target property
     *  @param int|null $value Value to set for the target property.
    */
    public function setTarget(?int $value ): void {
        $this->target = $value;
    }

}
