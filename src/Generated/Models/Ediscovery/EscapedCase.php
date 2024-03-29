<?php

namespace Microsoft\Graph\Beta\Generated\Models\Ediscovery;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Graph\Beta\Generated\Models\IdentitySet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EscapedCase extends Entity implements Parsable 
{
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
        $val = $this->getBackingStore()->get('closedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'closedBy'");
    }

    /**
     * Gets the closedDateTime property value. The date and time when the case was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getClosedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('closedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'closedDateTime'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when the entity was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
     * Gets the custodians property value. Returns a list of case custodian objects for this case.  Nullable.
     * @return array<Custodian>|null
    */
    public function getCustodians(): ?array {
        $val = $this->getBackingStore()->get('custodians');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Custodian::class);
            /** @var array<Custodian>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'custodians'");
    }

    /**
     * Gets the description property value. The case description.
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
     * Gets the displayName property value. The case name.
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
     * Gets the externalId property value. The external case number for customer reference.
     * @return string|null
    */
    public function getExternalId(): ?string {
        $val = $this->getBackingStore()->get('externalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'closedBy' => fn(ParseNode $n) => $o->setClosedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'closedDateTime' => fn(ParseNode $n) => $o->setClosedDateTime($n->getDateTimeValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'custodians' => fn(ParseNode $n) => $o->setCustodians($n->getCollectionOfObjectValues([Custodian::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'legalHolds' => fn(ParseNode $n) => $o->setLegalHolds($n->getCollectionOfObjectValues([LegalHold::class, 'createFromDiscriminatorValue'])),
            'noncustodialDataSources' => fn(ParseNode $n) => $o->setNoncustodialDataSources($n->getCollectionOfObjectValues([NoncustodialDataSource::class, 'createFromDiscriminatorValue'])),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([CaseOperation::class, 'createFromDiscriminatorValue'])),
            'reviewSets' => fn(ParseNode $n) => $o->setReviewSets($n->getCollectionOfObjectValues([ReviewSet::class, 'createFromDiscriminatorValue'])),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([CaseSettings::class, 'createFromDiscriminatorValue'])),
            'sourceCollections' => fn(ParseNode $n) => $o->setSourceCollections($n->getCollectionOfObjectValues([SourceCollection::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CaseStatus::class)),
            'tags' => fn(ParseNode $n) => $o->setTags($n->getCollectionOfObjectValues([Tag::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. The last user who modified the entity.
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
     * Gets the lastModifiedDateTime property value. The latest date and time when the case was modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
     * Gets the legalHolds property value. Returns a list of case legalHold objects for this case.  Nullable.
     * @return array<LegalHold>|null
    */
    public function getLegalHolds(): ?array {
        $val = $this->getBackingStore()->get('legalHolds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LegalHold::class);
            /** @var array<LegalHold>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'legalHolds'");
    }

    /**
     * Gets the noncustodialDataSources property value. Returns a list of case noncustodialDataSource objects for this case.  Nullable.
     * @return array<NoncustodialDataSource>|null
    */
    public function getNoncustodialDataSources(): ?array {
        $val = $this->getBackingStore()->get('noncustodialDataSources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, NoncustodialDataSource::class);
            /** @var array<NoncustodialDataSource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'noncustodialDataSources'");
    }

    /**
     * Gets the operations property value. Returns a list of case operation objects for this case. Nullable.
     * @return array<CaseOperation>|null
    */
    public function getOperations(): ?array {
        $val = $this->getBackingStore()->get('operations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CaseOperation::class);
            /** @var array<CaseOperation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operations'");
    }

    /**
     * Gets the reviewSets property value. Returns a list of reviewSet objects in the case. Read-only. Nullable.
     * @return array<ReviewSet>|null
    */
    public function getReviewSets(): ?array {
        $val = $this->getBackingStore()->get('reviewSets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ReviewSet::class);
            /** @var array<ReviewSet>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewSets'");
    }

    /**
     * Gets the settings property value. The settings property
     * @return CaseSettings|null
    */
    public function getSettings(): ?CaseSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof CaseSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Gets the sourceCollections property value. Returns a list of sourceCollection objects associated with this case.
     * @return array<SourceCollection>|null
    */
    public function getSourceCollections(): ?array {
        $val = $this->getBackingStore()->get('sourceCollections');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SourceCollection::class);
            /** @var array<SourceCollection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceCollections'");
    }

    /**
     * Gets the status property value. The case status. Possible values are unknown, active, pendingDelete, closing, closed, and closedWithError. For details, see the following table.
     * @return CaseStatus|null
    */
    public function getStatus(): ?CaseStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof CaseStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the tags property value. Returns a list of tag objects associated to this case.
     * @return array<Tag>|null
    */
    public function getTags(): ?array {
        $val = $this->getBackingStore()->get('tags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Tag::class);
            /** @var array<Tag>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tags'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('closedBy', $this->getClosedBy());
        $writer->writeDateTimeValue('closedDateTime', $this->getClosedDateTime());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('custodians', $this->getCustodians());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfObjectValues('legalHolds', $this->getLegalHolds());
        $writer->writeCollectionOfObjectValues('noncustodialDataSources', $this->getNoncustodialDataSources());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
        $writer->writeCollectionOfObjectValues('reviewSets', $this->getReviewSets());
        $writer->writeObjectValue('settings', $this->getSettings());
        $writer->writeCollectionOfObjectValues('sourceCollections', $this->getSourceCollections());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeCollectionOfObjectValues('tags', $this->getTags());
    }

    /**
     * Sets the closedBy property value. The user who closed the case.
     * @param IdentitySet|null $value Value to set for the closedBy property.
    */
    public function setClosedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('closedBy', $value);
    }

    /**
     * Sets the closedDateTime property value. The date and time when the case was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the closedDateTime property.
    */
    public function setClosedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('closedDateTime', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the entity was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the custodians property value. Returns a list of case custodian objects for this case.  Nullable.
     * @param array<Custodian>|null $value Value to set for the custodians property.
    */
    public function setCustodians(?array $value): void {
        $this->getBackingStore()->set('custodians', $value);
    }

    /**
     * Sets the description property value. The case description.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The case name.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the externalId property value. The external case number for customer reference.
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->getBackingStore()->set('externalId', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The last user who modified the entity.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The latest date and time when the case was modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the legalHolds property value. Returns a list of case legalHold objects for this case.  Nullable.
     * @param array<LegalHold>|null $value Value to set for the legalHolds property.
    */
    public function setLegalHolds(?array $value): void {
        $this->getBackingStore()->set('legalHolds', $value);
    }

    /**
     * Sets the noncustodialDataSources property value. Returns a list of case noncustodialDataSource objects for this case.  Nullable.
     * @param array<NoncustodialDataSource>|null $value Value to set for the noncustodialDataSources property.
    */
    public function setNoncustodialDataSources(?array $value): void {
        $this->getBackingStore()->set('noncustodialDataSources', $value);
    }

    /**
     * Sets the operations property value. Returns a list of case operation objects for this case. Nullable.
     * @param array<CaseOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

    /**
     * Sets the reviewSets property value. Returns a list of reviewSet objects in the case. Read-only. Nullable.
     * @param array<ReviewSet>|null $value Value to set for the reviewSets property.
    */
    public function setReviewSets(?array $value): void {
        $this->getBackingStore()->set('reviewSets', $value);
    }

    /**
     * Sets the settings property value. The settings property
     * @param CaseSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?CaseSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the sourceCollections property value. Returns a list of sourceCollection objects associated with this case.
     * @param array<SourceCollection>|null $value Value to set for the sourceCollections property.
    */
    public function setSourceCollections(?array $value): void {
        $this->getBackingStore()->set('sourceCollections', $value);
    }

    /**
     * Sets the status property value. The case status. Possible values are unknown, active, pendingDelete, closing, closed, and closedWithError. For details, see the following table.
     * @param CaseStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CaseStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the tags property value. Returns a list of tag objects associated to this case.
     * @param array<Tag>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

}
