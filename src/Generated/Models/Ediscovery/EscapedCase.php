<?php

namespace Microsoft\Graph\Beta\Generated\Models\Ediscovery;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Graph\Beta\Generated\Models\IdentitySet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EscapedCase extends Entity implements Parsable 
{
    /**
     * @var IdentitySet|null $closedBy The user who closed the case.
    */
    private ?IdentitySet $closedBy = null;
    
    /**
     * @var DateTime|null $closedDateTime The date and time when the case was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $closedDateTime = null;
    
    /**
     * @var DateTime|null $createdDateTime The date and time when the entity was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var array<Custodian>|null $custodians Returns a list of case custodian objects for this case.  Nullable.
    */
    private ?array $custodians = null;
    
    /**
     * @var string|null $description The case description.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The case name.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $externalId The external case number for customer reference.
    */
    private ?string $externalId = null;
    
    /**
     * @var IdentitySet|null $lastModifiedBy The last user who modified the entity.
    */
    private ?IdentitySet $lastModifiedBy = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The latest date and time when the case was modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var array<LegalHold>|null $legalHolds Returns a list of case legalHold objects for this case.  Nullable.
    */
    private ?array $legalHolds = null;
    
    /**
     * @var array<NoncustodialDataSource>|null $noncustodialDataSources Returns a list of case noncustodialDataSource objects for this case.  Nullable.
    */
    private ?array $noncustodialDataSources = null;
    
    /**
     * @var array<CaseOperation>|null $operations Returns a list of case operation objects for this case. Nullable.
    */
    private ?array $operations = null;
    
    /**
     * @var array<ReviewSet>|null $reviewSets Returns a list of reviewSet objects in the case. Read-only. Nullable.
    */
    private ?array $reviewSets = null;
    
    /**
     * @var CaseSettings|null $settings The settings property
    */
    private ?CaseSettings $settings = null;
    
    /**
     * @var array<SourceCollection>|null $sourceCollections Returns a list of sourceCollection objects associated with this case.
    */
    private ?array $sourceCollections = null;
    
    /**
     * @var CaseStatus|null $status The case status. Possible values are unknown, active, pendingDelete, closing, closed, and closedWithError. For details, see the following table.
    */
    private ?CaseStatus $status = null;
    
    /**
     * @var array<Tag>|null $tags Returns a list of tag objects associated to this case.
    */
    private ?array $tags = null;
    
    /**
     * Instantiates a new EscapedCase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EscapedCase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EscapedCase {
        return new EscapedCase();
    }

    /**
     * Gets the closedBy property value. The user who closed the case.
     * @return IdentitySet|null
    */
    public function getClosedBy(): ?IdentitySet {
        return $this->closedBy;
    }

    /**
     * Gets the closedDateTime property value. The date and time when the case was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getClosedDateTime(): ?DateTime {
        return $this->closedDateTime;
    }

    /**
     * Gets the createdDateTime property value. The date and time when the entity was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the custodians property value. Returns a list of case custodian objects for this case.  Nullable.
     * @return array<Custodian>|null
    */
    public function getCustodians(): ?array {
        return $this->custodians;
    }

    /**
     * Gets the description property value. The case description.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The case name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the externalId property value. The external case number for customer reference.
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->externalId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'closedBy' => function (ParseNode $n) use ($o) { $o->setClosedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'closedDateTime' => function (ParseNode $n) use ($o) { $o->setClosedDateTime($n->getDateTimeValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'custodians' => function (ParseNode $n) use ($o) { $o->setCustodians($n->getCollectionOfObjectValues(array(Custodian::class, 'createFromDiscriminatorValue'))); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'externalId' => function (ParseNode $n) use ($o) { $o->setExternalId($n->getStringValue()); },
            'lastModifiedBy' => function (ParseNode $n) use ($o) { $o->setLastModifiedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'legalHolds' => function (ParseNode $n) use ($o) { $o->setLegalHolds($n->getCollectionOfObjectValues(array(LegalHold::class, 'createFromDiscriminatorValue'))); },
            'noncustodialDataSources' => function (ParseNode $n) use ($o) { $o->setNoncustodialDataSources($n->getCollectionOfObjectValues(array(NoncustodialDataSource::class, 'createFromDiscriminatorValue'))); },
            'operations' => function (ParseNode $n) use ($o) { $o->setOperations($n->getCollectionOfObjectValues(array(CaseOperation::class, 'createFromDiscriminatorValue'))); },
            'reviewSets' => function (ParseNode $n) use ($o) { $o->setReviewSets($n->getCollectionOfObjectValues(array(ReviewSet::class, 'createFromDiscriminatorValue'))); },
            'settings' => function (ParseNode $n) use ($o) { $o->setSettings($n->getObjectValue(array(CaseSettings::class, 'createFromDiscriminatorValue'))); },
            'sourceCollections' => function (ParseNode $n) use ($o) { $o->setSourceCollections($n->getCollectionOfObjectValues(array(SourceCollection::class, 'createFromDiscriminatorValue'))); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(CaseStatus::class)); },
            'tags' => function (ParseNode $n) use ($o) { $o->setTags($n->getCollectionOfObjectValues(array(Tag::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. The last user who modified the entity.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. The latest date and time when the case was modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the legalHolds property value. Returns a list of case legalHold objects for this case.  Nullable.
     * @return array<LegalHold>|null
    */
    public function getLegalHolds(): ?array {
        return $this->legalHolds;
    }

    /**
     * Gets the noncustodialDataSources property value. Returns a list of case noncustodialDataSource objects for this case.  Nullable.
     * @return array<NoncustodialDataSource>|null
    */
    public function getNoncustodialDataSources(): ?array {
        return $this->noncustodialDataSources;
    }

    /**
     * Gets the operations property value. Returns a list of case operation objects for this case. Nullable.
     * @return array<CaseOperation>|null
    */
    public function getOperations(): ?array {
        return $this->operations;
    }

    /**
     * Gets the reviewSets property value. Returns a list of reviewSet objects in the case. Read-only. Nullable.
     * @return array<ReviewSet>|null
    */
    public function getReviewSets(): ?array {
        return $this->reviewSets;
    }

    /**
     * Gets the settings property value. The settings property
     * @return CaseSettings|null
    */
    public function getSettings(): ?CaseSettings {
        return $this->settings;
    }

    /**
     * Gets the sourceCollections property value. Returns a list of sourceCollection objects associated with this case.
     * @return array<SourceCollection>|null
    */
    public function getSourceCollections(): ?array {
        return $this->sourceCollections;
    }

    /**
     * Gets the status property value. The case status. Possible values are unknown, active, pendingDelete, closing, closed, and closedWithError. For details, see the following table.
     * @return CaseStatus|null
    */
    public function getStatus(): ?CaseStatus {
        return $this->status;
    }

    /**
     * Gets the tags property value. Returns a list of tag objects associated to this case.
     * @return array<Tag>|null
    */
    public function getTags(): ?array {
        return $this->tags;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('closedBy', $this->closedBy);
        $writer->writeDateTimeValue('closedDateTime', $this->closedDateTime);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeCollectionOfObjectValues('custodians', $this->custodians);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('externalId', $this->externalId);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeCollectionOfObjectValues('legalHolds', $this->legalHolds);
        $writer->writeCollectionOfObjectValues('noncustodialDataSources', $this->noncustodialDataSources);
        $writer->writeCollectionOfObjectValues('operations', $this->operations);
        $writer->writeCollectionOfObjectValues('reviewSets', $this->reviewSets);
        $writer->writeObjectValue('settings', $this->settings);
        $writer->writeCollectionOfObjectValues('sourceCollections', $this->sourceCollections);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeCollectionOfObjectValues('tags', $this->tags);
    }

    /**
     * Sets the closedBy property value. The user who closed the case.
     *  @param IdentitySet|null $value Value to set for the closedBy property.
    */
    public function setClosedBy(?IdentitySet $value ): void {
        $this->closedBy = $value;
    }

    /**
     * Sets the closedDateTime property value. The date and time when the case was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the closedDateTime property.
    */
    public function setClosedDateTime(?DateTime $value ): void {
        $this->closedDateTime = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time when the entity was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the custodians property value. Returns a list of case custodian objects for this case.  Nullable.
     *  @param array<Custodian>|null $value Value to set for the custodians property.
    */
    public function setCustodians(?array $value ): void {
        $this->custodians = $value;
    }

    /**
     * Sets the description property value. The case description.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The case name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the externalId property value. The external case number for customer reference.
     *  @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value ): void {
        $this->externalId = $value;
    }

    /**
     * Sets the lastModifiedBy property value. The last user who modified the entity.
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The latest date and time when the case was modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the legalHolds property value. Returns a list of case legalHold objects for this case.  Nullable.
     *  @param array<LegalHold>|null $value Value to set for the legalHolds property.
    */
    public function setLegalHolds(?array $value ): void {
        $this->legalHolds = $value;
    }

    /**
     * Sets the noncustodialDataSources property value. Returns a list of case noncustodialDataSource objects for this case.  Nullable.
     *  @param array<NoncustodialDataSource>|null $value Value to set for the noncustodialDataSources property.
    */
    public function setNoncustodialDataSources(?array $value ): void {
        $this->noncustodialDataSources = $value;
    }

    /**
     * Sets the operations property value. Returns a list of case operation objects for this case. Nullable.
     *  @param array<CaseOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value ): void {
        $this->operations = $value;
    }

    /**
     * Sets the reviewSets property value. Returns a list of reviewSet objects in the case. Read-only. Nullable.
     *  @param array<ReviewSet>|null $value Value to set for the reviewSets property.
    */
    public function setReviewSets(?array $value ): void {
        $this->reviewSets = $value;
    }

    /**
     * Sets the settings property value. The settings property
     *  @param CaseSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?CaseSettings $value ): void {
        $this->settings = $value;
    }

    /**
     * Sets the sourceCollections property value. Returns a list of sourceCollection objects associated with this case.
     *  @param array<SourceCollection>|null $value Value to set for the sourceCollections property.
    */
    public function setSourceCollections(?array $value ): void {
        $this->sourceCollections = $value;
    }

    /**
     * Sets the status property value. The case status. Possible values are unknown, active, pendingDelete, closing, closed, and closedWithError. For details, see the following table.
     *  @param CaseStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CaseStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the tags property value. Returns a list of tag objects associated to this case.
     *  @param array<Tag>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value ): void {
        $this->tags = $value;
    }

}
