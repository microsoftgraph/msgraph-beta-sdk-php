<?php

namespace Microsoft\Graph\Beta\Generated\Models\Ediscovery;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Graph\Beta\Generated\Models\IdentitySet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SourceCollection extends Entity implements Parsable 
{
    /**
     * @var array<DataSource>|null $additionalSources Adds an additional source to the sourceCollection.
    */
    private ?array $additionalSources = null;
    
    /**
     * @var AddToReviewSetOperation|null $addToReviewSetOperation Adds the results of the sourceCollection to the specified reviewSet.
    */
    private ?AddToReviewSetOperation $addToReviewSetOperation = null;
    
    /**
     * @var string|null $contentQuery The query string in KQL (Keyword Query Language) query. For details, see Keyword queries and search conditions for Content Search and eDiscovery. You can refine searches by using fields paired with values; for example, subject:'Quarterly Financials' AND Date>=06/01/2016 AND Date<=07/01/2016.
    */
    private ?string $contentQuery = null;
    
    /**
     * @var IdentitySet|null $createdBy The user who created the sourceCollection.
    */
    private ?IdentitySet $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime The date and time the sourceCollection was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var array<DataSource>|null $custodianSources Custodian sources that are included in the sourceCollection.
    */
    private ?array $custodianSources = null;
    
    /**
     * @var DataSourceScopes|null $dataSourceScopes When specified, the collection will span across a service for an entire workload. Possible values are: none, allTenantMailboxes, allTenantSites, allCaseCustodians, allCaseNoncustodialDataSources.
    */
    private ?DataSourceScopes $dataSourceScopes = null;
    
    /**
     * @var string|null $description The description of the sourceCollection.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name of the sourceCollection.
    */
    private ?string $displayName = null;
    
    /**
     * @var EstimateStatisticsOperation|null $lastEstimateStatisticsOperation The last estimate operation associated with the sourceCollection.
    */
    private ?EstimateStatisticsOperation $lastEstimateStatisticsOperation = null;
    
    /**
     * @var IdentitySet|null $lastModifiedBy The last user who modified the sourceCollection.
    */
    private ?IdentitySet $lastModifiedBy = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The last date and time the sourceCollection was modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var array<NoncustodialDataSource>|null $noncustodialSources noncustodialDataSource sources that are included in the sourceCollection
    */
    private ?array $noncustodialSources = null;
    
    /**
     * Instantiates a new sourceCollection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.ediscovery.sourceCollection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SourceCollection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SourceCollection {
        return new SourceCollection();
    }

    /**
     * Gets the additionalSources property value. Adds an additional source to the sourceCollection.
     * @return array<DataSource>|null
    */
    public function getAdditionalSources(): ?array {
        return $this->additionalSources;
    }

    /**
     * Gets the addToReviewSetOperation property value. Adds the results of the sourceCollection to the specified reviewSet.
     * @return AddToReviewSetOperation|null
    */
    public function getAddToReviewSetOperation(): ?AddToReviewSetOperation {
        return $this->addToReviewSetOperation;
    }

    /**
     * Gets the contentQuery property value. The query string in KQL (Keyword Query Language) query. For details, see Keyword queries and search conditions for Content Search and eDiscovery. You can refine searches by using fields paired with values; for example, subject:'Quarterly Financials' AND Date>=06/01/2016 AND Date<=07/01/2016.
     * @return string|null
    */
    public function getContentQuery(): ?string {
        return $this->contentQuery;
    }

    /**
     * Gets the createdBy property value. The user who created the sourceCollection.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The date and time the sourceCollection was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the custodianSources property value. Custodian sources that are included in the sourceCollection.
     * @return array<DataSource>|null
    */
    public function getCustodianSources(): ?array {
        return $this->custodianSources;
    }

    /**
     * Gets the dataSourceScopes property value. When specified, the collection will span across a service for an entire workload. Possible values are: none, allTenantMailboxes, allTenantSites, allCaseCustodians, allCaseNoncustodialDataSources.
     * @return DataSourceScopes|null
    */
    public function getDataSourceScopes(): ?DataSourceScopes {
        return $this->dataSourceScopes;
    }

    /**
     * Gets the description property value. The description of the sourceCollection.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name of the sourceCollection.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalSources' => function (ParseNode $n) use ($o) { $o->setAdditionalSources($n->getCollectionOfObjectValues(array(DataSource::class, 'createFromDiscriminatorValue'))); },
            'addToReviewSetOperation' => function (ParseNode $n) use ($o) { $o->setAddToReviewSetOperation($n->getObjectValue(array(AddToReviewSetOperation::class, 'createFromDiscriminatorValue'))); },
            'contentQuery' => function (ParseNode $n) use ($o) { $o->setContentQuery($n->getStringValue()); },
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'custodianSources' => function (ParseNode $n) use ($o) { $o->setCustodianSources($n->getCollectionOfObjectValues(array(DataSource::class, 'createFromDiscriminatorValue'))); },
            'dataSourceScopes' => function (ParseNode $n) use ($o) { $o->setDataSourceScopes($n->getEnumValue(DataSourceScopes::class)); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastEstimateStatisticsOperation' => function (ParseNode $n) use ($o) { $o->setLastEstimateStatisticsOperation($n->getObjectValue(array(EstimateStatisticsOperation::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedBy' => function (ParseNode $n) use ($o) { $o->setLastModifiedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'noncustodialSources' => function (ParseNode $n) use ($o) { $o->setNoncustodialSources($n->getCollectionOfObjectValues(array(NoncustodialDataSource::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the lastEstimateStatisticsOperation property value. The last estimate operation associated with the sourceCollection.
     * @return EstimateStatisticsOperation|null
    */
    public function getLastEstimateStatisticsOperation(): ?EstimateStatisticsOperation {
        return $this->lastEstimateStatisticsOperation;
    }

    /**
     * Gets the lastModifiedBy property value. The last user who modified the sourceCollection.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. The last date and time the sourceCollection was modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the noncustodialSources property value. noncustodialDataSource sources that are included in the sourceCollection
     * @return array<NoncustodialDataSource>|null
    */
    public function getNoncustodialSources(): ?array {
        return $this->noncustodialSources;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('additionalSources', $this->additionalSources);
        $writer->writeObjectValue('addToReviewSetOperation', $this->addToReviewSetOperation);
        $writer->writeStringValue('contentQuery', $this->contentQuery);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeCollectionOfObjectValues('custodianSources', $this->custodianSources);
        $writer->writeEnumValue('dataSourceScopes', $this->dataSourceScopes);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('lastEstimateStatisticsOperation', $this->lastEstimateStatisticsOperation);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeCollectionOfObjectValues('noncustodialSources', $this->noncustodialSources);
    }

    /**
     * Sets the additionalSources property value. Adds an additional source to the sourceCollection.
     *  @param array<DataSource>|null $value Value to set for the additionalSources property.
    */
    public function setAdditionalSources(?array $value ): void {
        $this->additionalSources = $value;
    }

    /**
     * Sets the addToReviewSetOperation property value. Adds the results of the sourceCollection to the specified reviewSet.
     *  @param AddToReviewSetOperation|null $value Value to set for the addToReviewSetOperation property.
    */
    public function setAddToReviewSetOperation(?AddToReviewSetOperation $value ): void {
        $this->addToReviewSetOperation = $value;
    }

    /**
     * Sets the contentQuery property value. The query string in KQL (Keyword Query Language) query. For details, see Keyword queries and search conditions for Content Search and eDiscovery. You can refine searches by using fields paired with values; for example, subject:'Quarterly Financials' AND Date>=06/01/2016 AND Date<=07/01/2016.
     *  @param string|null $value Value to set for the contentQuery property.
    */
    public function setContentQuery(?string $value ): void {
        $this->contentQuery = $value;
    }

    /**
     * Sets the createdBy property value. The user who created the sourceCollection.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time the sourceCollection was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the custodianSources property value. Custodian sources that are included in the sourceCollection.
     *  @param array<DataSource>|null $value Value to set for the custodianSources property.
    */
    public function setCustodianSources(?array $value ): void {
        $this->custodianSources = $value;
    }

    /**
     * Sets the dataSourceScopes property value. When specified, the collection will span across a service for an entire workload. Possible values are: none, allTenantMailboxes, allTenantSites, allCaseCustodians, allCaseNoncustodialDataSources.
     *  @param DataSourceScopes|null $value Value to set for the dataSourceScopes property.
    */
    public function setDataSourceScopes(?DataSourceScopes $value ): void {
        $this->dataSourceScopes = $value;
    }

    /**
     * Sets the description property value. The description of the sourceCollection.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name of the sourceCollection.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastEstimateStatisticsOperation property value. The last estimate operation associated with the sourceCollection.
     *  @param EstimateStatisticsOperation|null $value Value to set for the lastEstimateStatisticsOperation property.
    */
    public function setLastEstimateStatisticsOperation(?EstimateStatisticsOperation $value ): void {
        $this->lastEstimateStatisticsOperation = $value;
    }

    /**
     * Sets the lastModifiedBy property value. The last user who modified the sourceCollection.
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The last date and time the sourceCollection was modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the noncustodialSources property value. noncustodialDataSource sources that are included in the sourceCollection
     *  @param array<NoncustodialDataSource>|null $value Value to set for the noncustodialSources property.
    */
    public function setNoncustodialSources(?array $value ): void {
        $this->noncustodialSources = $value;
    }

}
