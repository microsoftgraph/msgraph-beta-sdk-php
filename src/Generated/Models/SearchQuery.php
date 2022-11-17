<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SearchQuery implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new searchQuery and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.searchQuery');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SearchQuery
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SearchQuery {
        return new SearchQuery();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'query_string' => fn(ParseNode $n) => $o->setQuery_string($n->getObjectValue([SearchQueryString::class, 'createFromDiscriminatorValue'])),
            'queryString' => fn(ParseNode $n) => $o->setQueryString($n->getStringValue()),
            'queryTemplate' => fn(ParseNode $n) => $o->setQueryTemplate($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the query_string property value. The query_string property
     * @return SearchQueryString|null
    */
    public function getQuery_string(): ?SearchQueryString {
        return $this->getBackingStore()->get('query_string');
    }

    /**
     * Gets the queryString property value. The search query containing the search terms. Required.
     * @return string|null
    */
    public function getQueryString(): ?string {
        return $this->getBackingStore()->get('queryString');
    }

    /**
     * Gets the queryTemplate property value. Provides a way to decorate the query string. Supports both KQL and query variables. Optional.
     * @return string|null
    */
    public function getQueryTemplate(): ?string {
        return $this->getBackingStore()->get('queryTemplate');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('queryString', $this->getQueryString());
        $writer->writeStringValue('queryTemplate', $this->getQueryTemplate());
        $writer->writeObjectValue('query_string', $this->getQuery_string());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the query_string property value. The query_string property
     *  @param SearchQueryString|null $value Value to set for the query_string property.
    */
    public function setQuery_string(?SearchQueryString $value): void {
        $this->getBackingStore()->set('query_string', $value);
    }

    /**
     * Sets the queryString property value. The search query containing the search terms. Required.
     *  @param string|null $value Value to set for the queryString property.
    */
    public function setQueryString(?string $value): void {
        $this->getBackingStore()->set('queryString', $value);
    }

    /**
     * Sets the queryTemplate property value. Provides a way to decorate the query string. Supports both KQL and query variables. Optional.
     *  @param string|null $value Value to set for the queryTemplate property.
    */
    public function setQueryTemplate(?string $value): void {
        $this->getBackingStore()->set('queryTemplate', $value);
    }

}
