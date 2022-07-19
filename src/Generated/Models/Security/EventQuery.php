<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EventQuery implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $query The query property
    */
    private ?string $query = null;
    
    /**
     * @var QueryType|null $queryType The queryType property
    */
    private ?QueryType $queryType = null;
    
    /**
     * Instantiates a new eventQuery and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.security.eventQuery');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EventQuery
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EventQuery {
        return new EventQuery();
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
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'query' => function (ParseNode $n) use ($o) { $o->setQuery($n->getStringValue()); },
            'queryType' => function (ParseNode $n) use ($o) { $o->setQueryType($n->getEnumValue(QueryType::class)); },
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
     * Gets the query property value. The query property
     * @return string|null
    */
    public function getQuery(): ?string {
        return $this->query;
    }

    /**
     * Gets the queryType property value. The queryType property
     * @return QueryType|null
    */
    public function getQueryType(): ?QueryType {
        return $this->queryType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('query', $this->query);
        $writer->writeEnumValue('queryType', $this->queryType);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the query property value. The query property
     *  @param string|null $value Value to set for the query property.
    */
    public function setQuery(?string $value ): void {
        $this->query = $value;
    }

    /**
     * Sets the queryType property value. The queryType property
     *  @param QueryType|null $value Value to set for the queryType property.
    */
    public function setQueryType(?QueryType $value ): void {
        $this->queryType = $value;
    }

}
