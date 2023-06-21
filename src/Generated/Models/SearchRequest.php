<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SearchRequest implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SearchRequest and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SearchRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SearchRequest {
        return new SearchRequest();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the aggregationFilters property value. Contains one or more filters to obtain search results aggregated and filtered to a specific value of a field. Optional.Build this filter based on a prior search that aggregates by the same field. From the response of the prior search, identify the searchBucket that filters results to the specific value of the field, use the string in its aggregationFilterToken property, and build an aggregation filter string in the format '{field}:/'{aggregationFilterToken}/''. If multiple values for the same field need to be provided, use the strings in its aggregationFilterToken property and build an aggregation filter string in the format '{field}:or(/'{aggregationFilterToken1}/',/'{aggregationFilterToken2}/')'. For example, searching and aggregating drive items by file type returns a searchBucket for the file type docx in the response. You can conveniently use the aggregationFilterToken returned for this searchBucket in a subsequent search query and filter matches down to drive items of the docx file type. Example 1 and example 2 show the actual requests and responses.
     * @return array<string>|null
    */
    public function getAggregationFilters(): ?array {
        return $this->getBackingStore()->get('aggregationFilters');
    }

    /**
     * Gets the aggregations property value. Specifies aggregations (also known as refiners) to be returned alongside search results. Optional.
     * @return array<AggregationOption>|null
    */
    public function getAggregations(): ?array {
        return $this->getBackingStore()->get('aggregations');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the collapseProperties property value. Contains the ordered collection of fields and limit to collapse results. Optional.
     * @return array<CollapseProperty>|null
    */
    public function getCollapseProperties(): ?array {
        return $this->getBackingStore()->get('collapseProperties');
    }

    /**
     * Gets the contentSources property value. Contains the connection to be targeted. Respects the following format : /external/connections/connectionid where connectionid is the ConnectionId defined in the Connectors Administration.  Note: contentSource is only applicable when entityType=externalItem. Optional.
     * @return array<string>|null
    */
    public function getContentSources(): ?array {
        return $this->getBackingStore()->get('contentSources');
    }

    /**
     * Gets the enableTopResults property value. This triggers hybrid sort for messages: the first 3 messages are the most relevant. This property is only applicable to entityType=message. Optional.
     * @return bool|null
    */
    public function getEnableTopResults(): ?bool {
        return $this->getBackingStore()->get('enableTopResults');
    }

    /**
     * Gets the entityTypes property value. One or more types of resources expected in the response. Possible values are: list, site, listItem, message, event, drive, driveItem, person, externalItem, acronym, bookmark, chatMessage. For details about combinations of two or more entity types that are supported in the same search request, see known limitations. Required.
     * @return array<EntityType>|null
    */
    public function getEntityTypes(): ?array {
        return $this->getBackingStore()->get('entityTypes');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aggregationFilters' => fn(ParseNode $n) => $o->setAggregationFilters($n->getCollectionOfPrimitiveValues()),
            'aggregations' => fn(ParseNode $n) => $o->setAggregations($n->getCollectionOfObjectValues([AggregationOption::class, 'createFromDiscriminatorValue'])),
            'collapseProperties' => fn(ParseNode $n) => $o->setCollapseProperties($n->getCollectionOfObjectValues([CollapseProperty::class, 'createFromDiscriminatorValue'])),
            'contentSources' => fn(ParseNode $n) => $o->setContentSources($n->getCollectionOfPrimitiveValues()),
            'enableTopResults' => fn(ParseNode $n) => $o->setEnableTopResults($n->getBooleanValue()),
            'entityTypes' => fn(ParseNode $n) => $o->setEntityTypes($n->getCollectionOfEnumValues(EntityType::class)),
            'fields' => fn(ParseNode $n) => $o->setFields($n->getCollectionOfPrimitiveValues()),
            'from' => fn(ParseNode $n) => $o->setFrom($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'query' => fn(ParseNode $n) => $o->setQuery($n->getObjectValue([SearchQuery::class, 'createFromDiscriminatorValue'])),
            'queryAlterationOptions' => fn(ParseNode $n) => $o->setQueryAlterationOptions($n->getObjectValue([SearchAlterationOptions::class, 'createFromDiscriminatorValue'])),
            'region' => fn(ParseNode $n) => $o->setRegion($n->getStringValue()),
            'resultTemplateOptions' => fn(ParseNode $n) => $o->setResultTemplateOptions($n->getObjectValue([ResultTemplateOption::class, 'createFromDiscriminatorValue'])),
            'sharePointOneDriveOptions' => fn(ParseNode $n) => $o->setSharePointOneDriveOptions($n->getObjectValue([SharePointOneDriveOptions::class, 'createFromDiscriminatorValue'])),
            'size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
            'sortProperties' => fn(ParseNode $n) => $o->setSortProperties($n->getCollectionOfObjectValues([SortProperty::class, 'createFromDiscriminatorValue'])),
            'stored_fields' => fn(ParseNode $n) => $o->setStoredFields($n->getCollectionOfPrimitiveValues()),
            'trimDuplicates' => fn(ParseNode $n) => $o->setTrimDuplicates($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the fields property value. Contains the fields to be returned for each resource object specified in entityTypes, allowing customization of the fields returned by default otherwise, including additional fields such as custom managed properties from SharePoint and OneDrive, or custom fields in externalItem from content that Microsoft Graph connectors bring in. The fields property can be using the semantic labels applied to properties. For example, if a property is label as title, you can retrieve it using the following syntax : label_title.Optional.
     * @return array<string>|null
    */
    public function getFields(): ?array {
        return $this->getBackingStore()->get('fields');
    }

    /**
     * Gets the from property value. Specifies the offset for the search results. Offset 0 returns the very first result. Optional.
     * @return int|null
    */
    public function getFrom(): ?int {
        return $this->getBackingStore()->get('from');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the query property value. The query property
     * @return SearchQuery|null
    */
    public function getQuery(): ?SearchQuery {
        return $this->getBackingStore()->get('query');
    }

    /**
     * Gets the queryAlterationOptions property value. Provides query alteration options formatted as a JSON blob that contains two optional flags related to spelling correction. Optional.
     * @return SearchAlterationOptions|null
    */
    public function getQueryAlterationOptions(): ?SearchAlterationOptions {
        return $this->getBackingStore()->get('queryAlterationOptions');
    }

    /**
     * Gets the region property value. Required for searches that use application permissions. Represents the geographic location for the search. For details, see Get the region value.
     * @return string|null
    */
    public function getRegion(): ?string {
        return $this->getBackingStore()->get('region');
    }

    /**
     * Gets the resultTemplateOptions property value. Provides the search result templates options for rendering connectors search results.
     * @return ResultTemplateOption|null
    */
    public function getResultTemplateOptions(): ?ResultTemplateOption {
        return $this->getBackingStore()->get('resultTemplateOptions');
    }

    /**
     * Gets the sharePointOneDriveOptions property value. Indicates the kind of contents to be searched when a search is performed using application permissions. Optional.
     * @return SharePointOneDriveOptions|null
    */
    public function getSharePointOneDriveOptions(): ?SharePointOneDriveOptions {
        return $this->getBackingStore()->get('sharePointOneDriveOptions');
    }

    /**
     * Gets the size property value. The size of the page to be retrieved. The maximum value is 500. Optional.
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->getBackingStore()->get('size');
    }

    /**
     * Gets the sortProperties property value. Contains the ordered collection of fields and direction to sort results. There can be at most 5 sort properties in the collection. Optional.
     * @return array<SortProperty>|null
    */
    public function getSortProperties(): ?array {
        return $this->getBackingStore()->get('sortProperties');
    }

    /**
     * Gets the stored_fields property value. The stored_fields property
     * @return array<string>|null
    */
    public function getStoredFields(): ?array {
        return $this->getBackingStore()->get('stored_fields');
    }

    /**
     * Gets the trimDuplicates property value. Indicates whether to trim away the duplicate SharePoint files from search results. Default value is false. Optional.
     * @return bool|null
    */
    public function getTrimDuplicates(): ?bool {
        return $this->getBackingStore()->get('trimDuplicates');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('aggregationFilters', $this->getAggregationFilters());
        $writer->writeCollectionOfObjectValues('aggregations', $this->getAggregations());
        $writer->writeCollectionOfObjectValues('collapseProperties', $this->getCollapseProperties());
        $writer->writeCollectionOfPrimitiveValues('contentSources', $this->getContentSources());
        $writer->writeBooleanValue('enableTopResults', $this->getEnableTopResults());
        $writer->writeCollectionOfEnumValues('entityTypes', $this->getEntityTypes());
        $writer->writeCollectionOfPrimitiveValues('fields', $this->getFields());
        $writer->writeIntegerValue('from', $this->getFrom());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('query', $this->getQuery());
        $writer->writeObjectValue('queryAlterationOptions', $this->getQueryAlterationOptions());
        $writer->writeStringValue('region', $this->getRegion());
        $writer->writeObjectValue('resultTemplateOptions', $this->getResultTemplateOptions());
        $writer->writeObjectValue('sharePointOneDriveOptions', $this->getSharePointOneDriveOptions());
        $writer->writeIntegerValue('size', $this->getSize());
        $writer->writeCollectionOfObjectValues('sortProperties', $this->getSortProperties());
        $writer->writeCollectionOfPrimitiveValues('stored_fields', $this->getStoredFields());
        $writer->writeBooleanValue('trimDuplicates', $this->getTrimDuplicates());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the aggregationFilters property value. Contains one or more filters to obtain search results aggregated and filtered to a specific value of a field. Optional.Build this filter based on a prior search that aggregates by the same field. From the response of the prior search, identify the searchBucket that filters results to the specific value of the field, use the string in its aggregationFilterToken property, and build an aggregation filter string in the format '{field}:/'{aggregationFilterToken}/''. If multiple values for the same field need to be provided, use the strings in its aggregationFilterToken property and build an aggregation filter string in the format '{field}:or(/'{aggregationFilterToken1}/',/'{aggregationFilterToken2}/')'. For example, searching and aggregating drive items by file type returns a searchBucket for the file type docx in the response. You can conveniently use the aggregationFilterToken returned for this searchBucket in a subsequent search query and filter matches down to drive items of the docx file type. Example 1 and example 2 show the actual requests and responses.
     * @param array<string>|null $value Value to set for the aggregationFilters property.
    */
    public function setAggregationFilters(?array $value): void {
        $this->getBackingStore()->set('aggregationFilters', $value);
    }

    /**
     * Sets the aggregations property value. Specifies aggregations (also known as refiners) to be returned alongside search results. Optional.
     * @param array<AggregationOption>|null $value Value to set for the aggregations property.
    */
    public function setAggregations(?array $value): void {
        $this->getBackingStore()->set('aggregations', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the collapseProperties property value. Contains the ordered collection of fields and limit to collapse results. Optional.
     * @param array<CollapseProperty>|null $value Value to set for the collapseProperties property.
    */
    public function setCollapseProperties(?array $value): void {
        $this->getBackingStore()->set('collapseProperties', $value);
    }

    /**
     * Sets the contentSources property value. Contains the connection to be targeted. Respects the following format : /external/connections/connectionid where connectionid is the ConnectionId defined in the Connectors Administration.  Note: contentSource is only applicable when entityType=externalItem. Optional.
     * @param array<string>|null $value Value to set for the contentSources property.
    */
    public function setContentSources(?array $value): void {
        $this->getBackingStore()->set('contentSources', $value);
    }

    /**
     * Sets the enableTopResults property value. This triggers hybrid sort for messages: the first 3 messages are the most relevant. This property is only applicable to entityType=message. Optional.
     * @param bool|null $value Value to set for the enableTopResults property.
    */
    public function setEnableTopResults(?bool $value): void {
        $this->getBackingStore()->set('enableTopResults', $value);
    }

    /**
     * Sets the entityTypes property value. One or more types of resources expected in the response. Possible values are: list, site, listItem, message, event, drive, driveItem, person, externalItem, acronym, bookmark, chatMessage. For details about combinations of two or more entity types that are supported in the same search request, see known limitations. Required.
     * @param array<EntityType>|null $value Value to set for the entityTypes property.
    */
    public function setEntityTypes(?array $value): void {
        $this->getBackingStore()->set('entityTypes', $value);
    }

    /**
     * Sets the fields property value. Contains the fields to be returned for each resource object specified in entityTypes, allowing customization of the fields returned by default otherwise, including additional fields such as custom managed properties from SharePoint and OneDrive, or custom fields in externalItem from content that Microsoft Graph connectors bring in. The fields property can be using the semantic labels applied to properties. For example, if a property is label as title, you can retrieve it using the following syntax : label_title.Optional.
     * @param array<string>|null $value Value to set for the fields property.
    */
    public function setFields(?array $value): void {
        $this->getBackingStore()->set('fields', $value);
    }

    /**
     * Sets the from property value. Specifies the offset for the search results. Offset 0 returns the very first result. Optional.
     * @param int|null $value Value to set for the from property.
    */
    public function setFrom(?int $value): void {
        $this->getBackingStore()->set('from', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the query property value. The query property
     * @param SearchQuery|null $value Value to set for the query property.
    */
    public function setQuery(?SearchQuery $value): void {
        $this->getBackingStore()->set('query', $value);
    }

    /**
     * Sets the queryAlterationOptions property value. Provides query alteration options formatted as a JSON blob that contains two optional flags related to spelling correction. Optional.
     * @param SearchAlterationOptions|null $value Value to set for the queryAlterationOptions property.
    */
    public function setQueryAlterationOptions(?SearchAlterationOptions $value): void {
        $this->getBackingStore()->set('queryAlterationOptions', $value);
    }

    /**
     * Sets the region property value. Required for searches that use application permissions. Represents the geographic location for the search. For details, see Get the region value.
     * @param string|null $value Value to set for the region property.
    */
    public function setRegion(?string $value): void {
        $this->getBackingStore()->set('region', $value);
    }

    /**
     * Sets the resultTemplateOptions property value. Provides the search result templates options for rendering connectors search results.
     * @param ResultTemplateOption|null $value Value to set for the resultTemplateOptions property.
    */
    public function setResultTemplateOptions(?ResultTemplateOption $value): void {
        $this->getBackingStore()->set('resultTemplateOptions', $value);
    }

    /**
     * Sets the sharePointOneDriveOptions property value. Indicates the kind of contents to be searched when a search is performed using application permissions. Optional.
     * @param SharePointOneDriveOptions|null $value Value to set for the sharePointOneDriveOptions property.
    */
    public function setSharePointOneDriveOptions(?SharePointOneDriveOptions $value): void {
        $this->getBackingStore()->set('sharePointOneDriveOptions', $value);
    }

    /**
     * Sets the size property value. The size of the page to be retrieved. The maximum value is 500. Optional.
     * @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value): void {
        $this->getBackingStore()->set('size', $value);
    }

    /**
     * Sets the sortProperties property value. Contains the ordered collection of fields and direction to sort results. There can be at most 5 sort properties in the collection. Optional.
     * @param array<SortProperty>|null $value Value to set for the sortProperties property.
    */
    public function setSortProperties(?array $value): void {
        $this->getBackingStore()->set('sortProperties', $value);
    }

    /**
     * Sets the stored_fields property value. The stored_fields property
     * @param array<string>|null $value Value to set for the stored_fields property.
    */
    public function setStoredFields(?array $value): void {
        $this->getBackingStore()->set('stored_fields', $value);
    }

    /**
     * Sets the trimDuplicates property value. Indicates whether to trim away the duplicate SharePoint files from search results. Default value is false. Optional.
     * @param bool|null $value Value to set for the trimDuplicates property.
    */
    public function setTrimDuplicates(?bool $value): void {
        $this->getBackingStore()->set('trimDuplicates', $value);
    }

}
