<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SearchQuery implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var SearchQueryString|null $query_string  */
    private ?SearchQueryString $query_string = null;
    
    /** @var string|null $queryString The search query containing the search terms. Required. */
    private ?string $queryString = null;
    
    /** @var string|null $queryTemplate  */
    private ?string $queryTemplate = null;
    
    /**
     * Instantiates a new searchQuery and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SearchQuery
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SearchQuery {
        return new SearchQuery();
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
        return  [
            'query_string' => function (self $o, ParseNode $n) { $o->setQuery_string($n->getObjectValue(SearchQueryString::class)); },
            'queryString' => function (self $o, ParseNode $n) { $o->setQueryString($n->getStringValue()); },
            'queryTemplate' => function (self $o, ParseNode $n) { $o->setQueryTemplate($n->getStringValue()); },
        ];
    }

    /**
     * Gets the query_string property value. 
     * @return SearchQueryString|null
    */
    public function getQuery_string(): ?SearchQueryString {
        return $this->query_string;
    }

    /**
     * Gets the queryString property value. The search query containing the search terms. Required.
     * @return string|null
    */
    public function getQueryString(): ?string {
        return $this->queryString;
    }

    /**
     * Gets the queryTemplate property value. 
     * @return string|null
    */
    public function getQueryTemplate(): ?string {
        return $this->queryTemplate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('query_string', $this->query_string);
        $writer->writeStringValue('queryString', $this->queryString);
        $writer->writeStringValue('queryTemplate', $this->queryTemplate);
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
     * Sets the query_string property value. 
     *  @param SearchQueryString|null $value Value to set for the query_string property.
    */
    public function setQuery_string(?SearchQueryString $value ): void {
        $this->query_string = $value;
    }

    /**
     * Sets the queryString property value. The search query containing the search terms. Required.
     *  @param string|null $value Value to set for the queryString property.
    */
    public function setQueryString(?string $value ): void {
        $this->queryString = $value;
    }

    /**
     * Sets the queryTemplate property value. 
     *  @param string|null $value Value to set for the queryTemplate property.
    */
    public function setQueryTemplate(?string $value ): void {
        $this->queryTemplate = $value;
    }

}
