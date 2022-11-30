<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Recommendation extends Entity implements Parsable 
{
    /**
     * Instantiates a new recommendation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Recommendation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Recommendation {
        return new Recommendation();
    }

    /**
     * Gets the actionSteps property value. The actionSteps property
     * @return array<ActionStep>|null
    */
    public function getActionSteps(): ?array {
        return $this->getBackingStore()->get('actionSteps');
    }

    /**
     * Gets the benefits property value. The benefits property
     * @return string|null
    */
    public function getBenefits(): ?string {
        return $this->getBackingStore()->get('benefits');
    }

    /**
     * Gets the category property value. The category property
     * @return RecommendationCategory|null
    */
    public function getCategory(): ?RecommendationCategory {
        return $this->getBackingStore()->get('category');
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
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
            'actionSteps' => fn(ParseNode $n) => $o->setActionSteps($n->getCollectionOfObjectValues([ActionStep::class, 'createFromDiscriminatorValue'])),
            'benefits' => fn(ParseNode $n) => $o->setBenefits($n->getStringValue()),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(RecommendationCategory::class)),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'impactedResources' => fn(ParseNode $n) => $o->setImpactedResources($n->getCollectionOfObjectValues([RecommendationResource::class, 'createFromDiscriminatorValue'])),
            'impactStartDateTime' => fn(ParseNode $n) => $o->setImpactStartDateTime($n->getDateTimeValue()),
            'impactType' => fn(ParseNode $n) => $o->setImpactType($n->getStringValue()),
            'insights' => fn(ParseNode $n) => $o->setInsights($n->getStringValue()),
            'lastCheckedDateTime' => fn(ParseNode $n) => $o->setLastCheckedDateTime($n->getDateTimeValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'postponeUntilDateTime' => fn(ParseNode $n) => $o->setPostponeUntilDateTime($n->getDateTimeValue()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getEnumValue(RecommendationPriority::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(RecommendationStatus::class)),
        ]);
    }

    /**
     * Gets the impactedResources property value. The impactedResources property
     * @return array<RecommendationResource>|null
    */
    public function getImpactedResources(): ?array {
        return $this->getBackingStore()->get('impactedResources');
    }

    /**
     * Gets the impactStartDateTime property value. The impactStartDateTime property
     * @return DateTime|null
    */
    public function getImpactStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('impactStartDateTime');
    }

    /**
     * Gets the impactType property value. The impactType property
     * @return string|null
    */
    public function getImpactType(): ?string {
        return $this->getBackingStore()->get('impactType');
    }

    /**
     * Gets the insights property value. The insights property
     * @return string|null
    */
    public function getInsights(): ?string {
        return $this->getBackingStore()->get('insights');
    }

    /**
     * Gets the lastCheckedDateTime property value. The lastCheckedDateTime property
     * @return DateTime|null
    */
    public function getLastCheckedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastCheckedDateTime');
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
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the postponeUntilDateTime property value. The postponeUntilDateTime property
     * @return DateTime|null
    */
    public function getPostponeUntilDateTime(): ?DateTime {
        return $this->getBackingStore()->get('postponeUntilDateTime');
    }

    /**
     * Gets the priority property value. The priority property
     * @return RecommendationPriority|null
    */
    public function getPriority(): ?RecommendationPriority {
        return $this->getBackingStore()->get('priority');
    }

    /**
     * Gets the status property value. The status property
     * @return RecommendationStatus|null
    */
    public function getStatus(): ?RecommendationStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('actionSteps', $this->getActionSteps());
        $writer->writeStringValue('benefits', $this->getBenefits());
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('impactedResources', $this->getImpactedResources());
        $writer->writeDateTimeValue('impactStartDateTime', $this->getImpactStartDateTime());
        $writer->writeStringValue('impactType', $this->getImpactType());
        $writer->writeStringValue('insights', $this->getInsights());
        $writer->writeDateTimeValue('lastCheckedDateTime', $this->getLastCheckedDateTime());
        $writer->writeStringValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeDateTimeValue('postponeUntilDateTime', $this->getPostponeUntilDateTime());
        $writer->writeEnumValue('priority', $this->getPriority());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the actionSteps property value. The actionSteps property
     *  @param array<ActionStep>|null $value Value to set for the actionSteps property.
    */
    public function setActionSteps(?array $value): void {
        $this->getBackingStore()->set('actionSteps', $value);
    }

    /**
     * Sets the benefits property value. The benefits property
     *  @param string|null $value Value to set for the benefits property.
    */
    public function setBenefits(?string $value): void {
        $this->getBackingStore()->set('benefits', $value);
    }

    /**
     * Sets the category property value. The category property
     *  @param RecommendationCategory|null $value Value to set for the category property.
    */
    public function setCategory(?RecommendationCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the impactedResources property value. The impactedResources property
     *  @param array<RecommendationResource>|null $value Value to set for the impactedResources property.
    */
    public function setImpactedResources(?array $value): void {
        $this->getBackingStore()->set('impactedResources', $value);
    }

    /**
     * Sets the impactStartDateTime property value. The impactStartDateTime property
     *  @param DateTime|null $value Value to set for the impactStartDateTime property.
    */
    public function setImpactStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('impactStartDateTime', $value);
    }

    /**
     * Sets the impactType property value. The impactType property
     *  @param string|null $value Value to set for the impactType property.
    */
    public function setImpactType(?string $value): void {
        $this->getBackingStore()->set('impactType', $value);
    }

    /**
     * Sets the insights property value. The insights property
     *  @param string|null $value Value to set for the insights property.
    */
    public function setInsights(?string $value): void {
        $this->getBackingStore()->set('insights', $value);
    }

    /**
     * Sets the lastCheckedDateTime property value. The lastCheckedDateTime property
     *  @param DateTime|null $value Value to set for the lastCheckedDateTime property.
    */
    public function setLastCheckedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastCheckedDateTime', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The lastModifiedBy property
     *  @param string|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?string $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the postponeUntilDateTime property value. The postponeUntilDateTime property
     *  @param DateTime|null $value Value to set for the postponeUntilDateTime property.
    */
    public function setPostponeUntilDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('postponeUntilDateTime', $value);
    }

    /**
     * Sets the priority property value. The priority property
     *  @param RecommendationPriority|null $value Value to set for the priority property.
    */
    public function setPriority(?RecommendationPriority $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the status property value. The status property
     *  @param RecommendationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?RecommendationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
