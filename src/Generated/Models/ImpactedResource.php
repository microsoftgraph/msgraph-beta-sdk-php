<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ImpactedResource extends Entity implements Parsable 
{
    /**
     * Instantiates a new impactedResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImpactedResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImpactedResource {
        return new ImpactedResource();
    }

    /**
     * Gets the addedDateTime property value. The addedDateTime property
     * @return DateTime|null
    */
    public function getAddedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('addedDateTime');
    }

    /**
     * Gets the additionalDetails property value. The additionalDetails property
     * @return array<KeyValue>|null
    */
    public function getAdditionalDetails(): ?array {
        return $this->getBackingStore()->get('additionalDetails');
    }

    /**
     * Gets the apiUrl property value. The apiUrl property
     * @return string|null
    */
    public function getApiUrl(): ?string {
        return $this->getBackingStore()->get('apiUrl');
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'addedDateTime' => fn(ParseNode $n) => $o->setAddedDateTime($n->getDateTimeValue()),
            'additionalDetails' => fn(ParseNode $n) => $o->setAdditionalDetails($n->getCollectionOfObjectValues([KeyValue::class, 'createFromDiscriminatorValue'])),
            'apiUrl' => fn(ParseNode $n) => $o->setApiUrl($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getStringValue()),
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getStringValue()),
            'portalUrl' => fn(ParseNode $n) => $o->setPortalUrl($n->getStringValue()),
            'postponeUntilDateTime' => fn(ParseNode $n) => $o->setPostponeUntilDateTime($n->getDateTimeValue()),
            'rank' => fn(ParseNode $n) => $o->setRank($n->getIntegerValue()),
            'recommendationId' => fn(ParseNode $n) => $o->setRecommendationId($n->getStringValue()),
            'resourceType' => fn(ParseNode $n) => $o->setResourceType($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(RecommendationStatus::class)),
            'subjectId' => fn(ParseNode $n) => $o->setSubjectId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. The lastModifiedBy property
     * @return string|null
    */
    public function getLastModifiedBy(): ?string {
        return $this->getBackingStore()->get('lastModifiedBy');
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return string|null
    */
    public function getLastModifiedDateTime(): ?string {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the owner property value. The owner property
     * @return string|null
    */
    public function getOwner(): ?string {
        return $this->getBackingStore()->get('owner');
    }

    /**
     * Gets the portalUrl property value. The portalUrl property
     * @return string|null
    */
    public function getPortalUrl(): ?string {
        return $this->getBackingStore()->get('portalUrl');
    }

    /**
     * Gets the postponeUntilDateTime property value. The postponeUntilDateTime property
     * @return DateTime|null
    */
    public function getPostponeUntilDateTime(): ?DateTime {
        return $this->getBackingStore()->get('postponeUntilDateTime');
    }

    /**
     * Gets the rank property value. The rank property
     * @return int|null
    */
    public function getRank(): ?int {
        return $this->getBackingStore()->get('rank');
    }

    /**
     * Gets the recommendationId property value. The recommendationId property
     * @return string|null
    */
    public function getRecommendationId(): ?string {
        return $this->getBackingStore()->get('recommendationId');
    }

    /**
     * Gets the resourceType property value. The resourceType property
     * @return string|null
    */
    public function getResourceType(): ?string {
        return $this->getBackingStore()->get('resourceType');
    }

    /**
     * Gets the status property value. The status property
     * @return RecommendationStatus|null
    */
    public function getStatus(): ?RecommendationStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the subjectId property value. The subjectId property
     * @return string|null
    */
    public function getSubjectId(): ?string {
        return $this->getBackingStore()->get('subjectId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('addedDateTime', $this->getAddedDateTime());
        $writer->writeCollectionOfObjectValues('additionalDetails', $this->getAdditionalDetails());
        $writer->writeStringValue('apiUrl', $this->getApiUrl());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeStringValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('owner', $this->getOwner());
        $writer->writeStringValue('portalUrl', $this->getPortalUrl());
        $writer->writeDateTimeValue('postponeUntilDateTime', $this->getPostponeUntilDateTime());
        $writer->writeIntegerValue('rank', $this->getRank());
        $writer->writeStringValue('recommendationId', $this->getRecommendationId());
        $writer->writeStringValue('resourceType', $this->getResourceType());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('subjectId', $this->getSubjectId());
    }

    /**
     * Sets the addedDateTime property value. The addedDateTime property
     * @param DateTime|null $value Value to set for the addedDateTime property.
    */
    public function setAddedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('addedDateTime', $value);
    }

    /**
     * Sets the additionalDetails property value. The additionalDetails property
     * @param array<KeyValue>|null $value Value to set for the additionalDetails property.
    */
    public function setAdditionalDetails(?array $value): void {
        $this->getBackingStore()->set('additionalDetails', $value);
    }

    /**
     * Sets the apiUrl property value. The apiUrl property
     * @param string|null $value Value to set for the apiUrl property.
    */
    public function setApiUrl(?string $value): void {
        $this->getBackingStore()->set('apiUrl', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The lastModifiedBy property
     * @param string|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?string $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param string|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?string $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the owner property value. The owner property
     * @param string|null $value Value to set for the owner property.
    */
    public function setOwner(?string $value): void {
        $this->getBackingStore()->set('owner', $value);
    }

    /**
     * Sets the portalUrl property value. The portalUrl property
     * @param string|null $value Value to set for the portalUrl property.
    */
    public function setPortalUrl(?string $value): void {
        $this->getBackingStore()->set('portalUrl', $value);
    }

    /**
     * Sets the postponeUntilDateTime property value. The postponeUntilDateTime property
     * @param DateTime|null $value Value to set for the postponeUntilDateTime property.
    */
    public function setPostponeUntilDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('postponeUntilDateTime', $value);
    }

    /**
     * Sets the rank property value. The rank property
     * @param int|null $value Value to set for the rank property.
    */
    public function setRank(?int $value): void {
        $this->getBackingStore()->set('rank', $value);
    }

    /**
     * Sets the recommendationId property value. The recommendationId property
     * @param string|null $value Value to set for the recommendationId property.
    */
    public function setRecommendationId(?string $value): void {
        $this->getBackingStore()->set('recommendationId', $value);
    }

    /**
     * Sets the resourceType property value. The resourceType property
     * @param string|null $value Value to set for the resourceType property.
    */
    public function setResourceType(?string $value): void {
        $this->getBackingStore()->set('resourceType', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param RecommendationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?RecommendationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the subjectId property value. The subjectId property
     * @param string|null $value Value to set for the subjectId property.
    */
    public function setSubjectId(?string $value): void {
        $this->getBackingStore()->set('subjectId', $value);
    }

}
