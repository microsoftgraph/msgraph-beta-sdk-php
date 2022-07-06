<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HuntingQueryResults implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<HuntingRowResult>|null $results The results property
    */
    private ?array $results = null;
    
    /**
     * @var array<SinglePropertySchema>|null $schema The schema property
    */
    private ?array $schema = null;
    
    /**
     * Instantiates a new HuntingQueryResults and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
            'results' => function (ParseNode $n) use ($o) { $o->setResults($n->getCollectionOfObjectValues(array(HuntingRowResult::class, 'createFromDiscriminatorValue'))); },
            'schema' => function (ParseNode $n) use ($o) { $o->setSchema($n->getCollectionOfObjectValues(array(SinglePropertySchema::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the results property value. The results property
     * @return array<HuntingRowResult>|null
    */
    public function getResults(): ?array {
        return $this->results;
    }

    /**
     * Gets the schema property value. The schema property
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
     * Sets the results property value. The results property
     *  @param array<HuntingRowResult>|null $value Value to set for the results property.
    */
    public function setResults(?array $value ): void {
        $this->results = $value;
    }

    /**
     * Sets the schema property value. The schema property
     *  @param array<SinglePropertySchema>|null $value Value to set for the schema property.
    */
    public function setSchema(?array $value ): void {
        $this->schema = $value;
    }

}
