<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
     * Gets the addedDateTime property value. The date and time when the impactedResource object was initially associated with the recommendation.
     * @return DateTime|null
    */
    public function getAddedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('addedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addedDateTime'");
    }

    /**
     * Gets the additionalDetails property value. Additional information unique to the impactedResource to help contextualize the recommendation.
     * @return array<KeyValue>|null
    */
    public function getAdditionalDetails(): ?array {
        $val = $this->getBackingStore()->get('additionalDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValue::class);
            /** @var array<KeyValue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalDetails'");
    }

    /**
     * Gets the apiUrl property value. The URL link to the corresponding Azure AD resource.
     * @return string|null
    */
    public function getApiUrl(): ?string {
        $val = $this->getBackingStore()->get('apiUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'apiUrl'");
    }

    /**
     * Gets the displayName property value. Friendly name of the Azure AD resource.
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
            'addedDateTime' => fn(ParseNode $n) => $o->setAddedDateTime($n->getDateTimeValue()),
            'additionalDetails' => fn(ParseNode $n) => $o->setAdditionalDetails($n->getCollectionOfObjectValues([KeyValue::class, 'createFromDiscriminatorValue'])),
            'apiUrl' => fn(ParseNode $n) => $o->setApiUrl($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Gets the lastModifiedBy property value. Name of the user or service that last updated the status.
     * @return string|null
    */
    public function getLastModifiedBy(): ?string {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the status was last updated.
     * @return string|null
    */
    public function getLastModifiedDateTime(): ?string {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the owner property value. The user responsible for maintaining the resource.
     * @return string|null
    */
    public function getOwner(): ?string {
        $val = $this->getBackingStore()->get('owner');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'owner'");
    }

    /**
     * Gets the portalUrl property value. The URL link to the corresponding Azure AD portal page of the resource.
     * @return string|null
    */
    public function getPortalUrl(): ?string {
        $val = $this->getBackingStore()->get('portalUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'portalUrl'");
    }

    /**
     * Gets the postponeUntilDateTime property value. The future date and time when the status of a postponed impactedResource will be active again.
     * @return DateTime|null
    */
    public function getPostponeUntilDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('postponeUntilDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'postponeUntilDateTime'");
    }

    /**
     * Gets the rank property value. Indicates the importance of the resource. A resource with a rank equal to 1 is of the highest importance.
     * @return int|null
    */
    public function getRank(): ?int {
        $val = $this->getBackingStore()->get('rank');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rank'");
    }

    /**
     * Gets the recommendationId property value. The unique identifier of the recommendation that the resource is associated with.
     * @return string|null
    */
    public function getRecommendationId(): ?string {
        $val = $this->getBackingStore()->get('recommendationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recommendationId'");
    }

    /**
     * Gets the resourceType property value. Indicates the type of Azure AD resource. Examples include user, application.
     * @return string|null
    */
    public function getResourceType(): ?string {
        $val = $this->getBackingStore()->get('resourceType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceType'");
    }

    /**
     * Gets the status property value. The status property
     * @return RecommendationStatus|null
    */
    public function getStatus(): ?RecommendationStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof RecommendationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the subjectId property value. The related unique identifier, depending on the resourceType. For example, this property is set to the applicationId if the resourceType is an application.
     * @return string|null
    */
    public function getSubjectId(): ?string {
        $val = $this->getBackingStore()->get('subjectId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subjectId'");
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
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the addedDateTime property value. The date and time when the impactedResource object was initially associated with the recommendation.
     * @param DateTime|null $value Value to set for the addedDateTime property.
    */
    public function setAddedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('addedDateTime', $value);
    }

    /**
     * Sets the additionalDetails property value. Additional information unique to the impactedResource to help contextualize the recommendation.
     * @param array<KeyValue>|null $value Value to set for the additionalDetails property.
    */
    public function setAdditionalDetails(?array $value): void {
        $this->getBackingStore()->set('additionalDetails', $value);
    }

    /**
     * Sets the apiUrl property value. The URL link to the corresponding Azure AD resource.
     * @param string|null $value Value to set for the apiUrl property.
    */
    public function setApiUrl(?string $value): void {
        $this->getBackingStore()->set('apiUrl', $value);
    }

    /**
     * Sets the displayName property value. Friendly name of the Azure AD resource.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Name of the user or service that last updated the status.
     * @param string|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?string $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the status was last updated.
     * @param string|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?string $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the owner property value. The user responsible for maintaining the resource.
     * @param string|null $value Value to set for the owner property.
    */
    public function setOwner(?string $value): void {
        $this->getBackingStore()->set('owner', $value);
    }

    /**
     * Sets the portalUrl property value. The URL link to the corresponding Azure AD portal page of the resource.
     * @param string|null $value Value to set for the portalUrl property.
    */
    public function setPortalUrl(?string $value): void {
        $this->getBackingStore()->set('portalUrl', $value);
    }

    /**
     * Sets the postponeUntilDateTime property value. The future date and time when the status of a postponed impactedResource will be active again.
     * @param DateTime|null $value Value to set for the postponeUntilDateTime property.
    */
    public function setPostponeUntilDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('postponeUntilDateTime', $value);
    }

    /**
     * Sets the rank property value. Indicates the importance of the resource. A resource with a rank equal to 1 is of the highest importance.
     * @param int|null $value Value to set for the rank property.
    */
    public function setRank(?int $value): void {
        $this->getBackingStore()->set('rank', $value);
    }

    /**
     * Sets the recommendationId property value. The unique identifier of the recommendation that the resource is associated with.
     * @param string|null $value Value to set for the recommendationId property.
    */
    public function setRecommendationId(?string $value): void {
        $this->getBackingStore()->set('recommendationId', $value);
    }

    /**
     * Sets the resourceType property value. Indicates the type of Azure AD resource. Examples include user, application.
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
     * Sets the subjectId property value. The related unique identifier, depending on the resourceType. For example, this property is set to the applicationId if the resourceType is an application.
     * @param string|null $value Value to set for the subjectId property.
    */
    public function setSubjectId(?string $value): void {
        $this->getBackingStore()->set('subjectId', $value);
    }

}
