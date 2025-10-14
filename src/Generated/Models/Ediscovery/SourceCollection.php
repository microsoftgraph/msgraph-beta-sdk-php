<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Ediscovery;

use DateTime;
use Microsoft\\Graph\\Beta\\Generated\Models\Entity;
use Microsoft\\Graph\\Beta\\Generated\Models\IdentitySet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SourceCollection extends Entity implements Parsable 
{
    /**
     * Instantiates a new SourceCollection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('additionalSources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DataSource::class);
            /** @var array<DataSource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalSources'");
    }

    /**
     * Gets the addToReviewSetOperation property value. Adds the results of the sourceCollection to the specified reviewSet.
     * @return AddToReviewSetOperation|null
    */
    public function getAddToReviewSetOperation(): ?AddToReviewSetOperation {
        $val = $this->getBackingStore()->get('addToReviewSetOperation');
        if (is_null($val) || $val instanceof AddToReviewSetOperation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addToReviewSetOperation'");
    }

    /**
     * Gets the contentQuery property value. The query string in KQL (Keyword Query Language) query. For details, see Keyword queries and search conditions for Content Search and eDiscovery. You can refine searches by using fields paired with values; for example, subject:'Quarterly Financials' AND Date>=06/01/2016 AND Date<=07/01/2016.
     * @return string|null
    */
    public function getContentQuery(): ?string {
        $val = $this->getBackingStore()->get('contentQuery');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentQuery'");
    }

    /**
     * Gets the createdBy property value. The user who created the sourceCollection.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. The date and time the sourceCollection was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the custodianSources property value. Custodian sources that are included in the sourceCollection.
     * @return array<DataSource>|null
    */
    public function getCustodianSources(): ?array {
        $val = $this->getBackingStore()->get('custodianSources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DataSource::class);
            /** @var array<DataSource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'custodianSources'");
    }

    /**
     * Gets the dataSourceScopes property value. When specified, the collection spans across a service for an entire workload. Possible values are: none, allTenantMailboxes, allTenantSites, allCaseCustodians, allCaseNoncustodialDataSources.
     * @return DataSourceScopes|null
    */
    public function getDataSourceScopes(): ?DataSourceScopes {
        $val = $this->getBackingStore()->get('dataSourceScopes');
        if (is_null($val) || $val instanceof DataSourceScopes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataSourceScopes'");
    }

    /**
     * Gets the description property value. The description of the sourceCollection.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The display name of the sourceCollection.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalSources' => fn(ParseNode $n) => $o->setAdditionalSources($n->getCollectionOfObjectValues([DataSource::class, 'createFromDiscriminatorValue'])),
            'addToReviewSetOperation' => fn(ParseNode $n) => $o->setAddToReviewSetOperation($n->getObjectValue([AddToReviewSetOperation::class, 'createFromDiscriminatorValue'])),
            'contentQuery' => fn(ParseNode $n) => $o->setContentQuery($n->getStringValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'custodianSources' => fn(ParseNode $n) => $o->setCustodianSources($n->getCollectionOfObjectValues([DataSource::class, 'createFromDiscriminatorValue'])),
            'dataSourceScopes' => fn(ParseNode $n) => $o->setDataSourceScopes($n->getEnumValue(DataSourceScopes::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastEstimateStatisticsOperation' => fn(ParseNode $n) => $o->setLastEstimateStatisticsOperation($n->getObjectValue([EstimateStatisticsOperation::class, 'createFromDiscriminatorValue'])),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'noncustodialSources' => fn(ParseNode $n) => $o->setNoncustodialSources($n->getCollectionOfObjectValues([NoncustodialDataSource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastEstimateStatisticsOperation property value. The last estimate operation associated with the sourceCollection.
     * @return EstimateStatisticsOperation|null
    */
    public function getLastEstimateStatisticsOperation(): ?EstimateStatisticsOperation {
        $val = $this->getBackingStore()->get('lastEstimateStatisticsOperation');
        if (is_null($val) || $val instanceof EstimateStatisticsOperation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastEstimateStatisticsOperation'");
    }

    /**
     * Gets the lastModifiedBy property value. The last user who modified the sourceCollection.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The last date and time the sourceCollection was modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the noncustodialSources property value. noncustodialDataSource sources that are included in the sourceCollection
     * @return array<NoncustodialDataSource>|null
    */
    public function getNoncustodialSources(): ?array {
        $val = $this->getBackingStore()->get('noncustodialSources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, NoncustodialDataSource::class);
            /** @var array<NoncustodialDataSource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'noncustodialSources'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('additionalSources', $this->getAdditionalSources());
        $writer->writeObjectValue('addToReviewSetOperation', $this->getAddToReviewSetOperation());
        $writer->writeStringValue('contentQuery', $this->getContentQuery());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('custodianSources', $this->getCustodianSources());
        $writer->writeEnumValue('dataSourceScopes', $this->getDataSourceScopes());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('lastEstimateStatisticsOperation', $this->getLastEstimateStatisticsOperation());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfObjectValues('noncustodialSources', $this->getNoncustodialSources());
    }

    /**
     * Sets the additionalSources property value. Adds an additional source to the sourceCollection.
     * @param array<DataSource>|null $value Value to set for the additionalSources property.
    */
    public function setAdditionalSources(?array $value): void {
        $this->getBackingStore()->set('additionalSources', $value);
    }

    /**
     * Sets the addToReviewSetOperation property value. Adds the results of the sourceCollection to the specified reviewSet.
     * @param AddToReviewSetOperation|null $value Value to set for the addToReviewSetOperation property.
    */
    public function setAddToReviewSetOperation(?AddToReviewSetOperation $value): void {
        $this->getBackingStore()->set('addToReviewSetOperation', $value);
    }

    /**
     * Sets the contentQuery property value. The query string in KQL (Keyword Query Language) query. For details, see Keyword queries and search conditions for Content Search and eDiscovery. You can refine searches by using fields paired with values; for example, subject:'Quarterly Financials' AND Date>=06/01/2016 AND Date<=07/01/2016.
     * @param string|null $value Value to set for the contentQuery property.
    */
    public function setContentQuery(?string $value): void {
        $this->getBackingStore()->set('contentQuery', $value);
    }

    /**
     * Sets the createdBy property value. The user who created the sourceCollection.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time the sourceCollection was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the custodianSources property value. Custodian sources that are included in the sourceCollection.
     * @param array<DataSource>|null $value Value to set for the custodianSources property.
    */
    public function setCustodianSources(?array $value): void {
        $this->getBackingStore()->set('custodianSources', $value);
    }

    /**
     * Sets the dataSourceScopes property value. When specified, the collection spans across a service for an entire workload. Possible values are: none, allTenantMailboxes, allTenantSites, allCaseCustodians, allCaseNoncustodialDataSources.
     * @param DataSourceScopes|null $value Value to set for the dataSourceScopes property.
    */
    public function setDataSourceScopes(?DataSourceScopes $value): void {
        $this->getBackingStore()->set('dataSourceScopes', $value);
    }

    /**
     * Sets the description property value. The description of the sourceCollection.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the sourceCollection.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastEstimateStatisticsOperation property value. The last estimate operation associated with the sourceCollection.
     * @param EstimateStatisticsOperation|null $value Value to set for the lastEstimateStatisticsOperation property.
    */
    public function setLastEstimateStatisticsOperation(?EstimateStatisticsOperation $value): void {
        $this->getBackingStore()->set('lastEstimateStatisticsOperation', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The last user who modified the sourceCollection.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The last date and time the sourceCollection was modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the noncustodialSources property value. noncustodialDataSource sources that are included in the sourceCollection
     * @param array<NoncustodialDataSource>|null $value Value to set for the noncustodialSources property.
    */
    public function setNoncustodialSources(?array $value): void {
        $this->getBackingStore()->set('noncustodialSources', $value);
    }

}
