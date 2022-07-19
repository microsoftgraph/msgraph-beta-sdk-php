<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerDeltaCollectionResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataNextLink The OdataNextLink property
    */
    private ?string $odataNextLink = null;
    
    /**
     * @var array<PlannerDelta>|null $value The value property
    */
    private ?array $value = null;
    
    /**
     * Instantiates a new PlannerDeltaCollectionResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerDeltaCollectionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerDeltaCollectionResponse {
        return new PlannerDeltaCollectionResponse();
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
            '@odata.nextLink' => function (ParseNode $n) use ($o) { $o->setOdataNextLink($n->getStringValue()); },
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getCollectionOfObjectValues(array(PlannerDelta::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the @odata.nextLink property value. The OdataNextLink property
     * @return string|null
    */
    public function getOdataNextLink(): ?string {
        return $this->odataNextLink;
    }

    /**
     * Gets the value property value. The value property
     * @return array<PlannerDelta>|null
    */
    public function getValue(): ?array {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.nextLink', $this->odataNextLink);
        $writer->writeCollectionOfObjectValues('value', $this->value);
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
     * Sets the @odata.nextLink property value. The OdataNextLink property
     *  @param string|null $value Value to set for the OdataNextLink property.
    */
    public function setOdataNextLink(?string $value ): void {
        $this->odataNextLink = $value;
    }

    /**
     * Sets the value property value. The value property
     *  @param array<PlannerDelta>|null $value Value to set for the value property.
    */
    public function setValue(?array $value ): void {
        $this->value = $value;
    }

}
