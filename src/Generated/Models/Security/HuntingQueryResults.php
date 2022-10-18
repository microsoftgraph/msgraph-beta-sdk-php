<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HuntingQueryResults implements AdditionalDataHolder, Parsable 
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
     * @var array<HuntingRowResult>|null $results The results of the hunting query.
    */
    private ?array $results = null;
    
    /**
     * @var array<SinglePropertySchema>|null $schema The schema for the response.
    */
    private ?array $schema = null;
    
    /**
     * Instantiates a new huntingQueryResults and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.security.huntingQueryResults');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HuntingQueryResults
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HuntingQueryResults {
        return new HuntingQueryResults();
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'results' => fn(ParseNode $n) => $o->setResults($n->getCollectionOfObjectValues([HuntingRowResult::class, 'createFromDiscriminatorValue'])),
            'schema' => fn(ParseNode $n) => $o->setSchema($n->getCollectionOfObjectValues([SinglePropertySchema::class, 'createFromDiscriminatorValue'])),
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
     * Gets the results property value. The results of the hunting query.
     * @return array<HuntingRowResult>|null
    */
    public function getResults(): ?array {
        return $this->results;
    }

    /**
     * Gets the schema property value. The schema for the response.
     * @return array<SinglePropertySchema>|null
    */
    public function getSchema(): ?array {
        return $this->schema;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfObjectValues('results', $this->results);
        $writer->writeCollectionOfObjectValues('schema', $this->schema);
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
     * Sets the results property value. The results of the hunting query.
     *  @param array<HuntingRowResult>|null $value Value to set for the results property.
    */
    public function setResults(?array $value ): void {
        $this->results = $value;
    }

    /**
     * Sets the schema property value. The schema for the response.
     *  @param array<SinglePropertySchema>|null $value Value to set for the schema property.
    */
    public function setSchema(?array $value ): void {
        $this->schema = $value;
    }

}
