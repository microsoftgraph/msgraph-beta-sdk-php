<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SearchAggregation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<SearchBucket>|null $buckets Defines the actual buckets of the computed aggregation.
    */
    private ?array $buckets = null;
    
    /**
     * @var string|null $field Defines on which field the aggregation was computed on.
    */
    private ?string $field = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new searchAggregation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.searchAggregation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SearchAggregation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SearchAggregation {
        return new SearchAggregation();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the buckets property value. Defines the actual buckets of the computed aggregation.
     * @return array<SearchBucket>|null
    */
    public function getBuckets(): ?array {
        return $this->buckets;
    }

    /**
     * Gets the field property value. Defines on which field the aggregation was computed on.
     * @return string|null
    */
    public function getField(): ?string {
        return $this->field;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'buckets' => function (ParseNode $n) use ($o) { $o->setBuckets($n->getCollectionOfObjectValues(array(SearchBucket::class, 'createFromDiscriminatorValue'))); },
            'field' => function (ParseNode $n) use ($o) { $o->setField($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('buckets', $this->buckets);
        $writer->writeStringValue('field', $this->field);
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
     * Sets the buckets property value. Defines the actual buckets of the computed aggregation.
     *  @param array<SearchBucket>|null $value Value to set for the buckets property.
    */
    public function setBuckets(?array $value ): void {
        $this->buckets = $value;
    }

    /**
     * Sets the field property value. Defines on which field the aggregation was computed on.
     *  @param string|null $value Value to set for the field property.
    */
    public function setField(?string $value ): void {
        $this->field = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
