<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerPlanConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new plannerPlanConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerPlanConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerPlanConfiguration {
        return new PlannerPlanConfiguration();
    }

    /**
     * Gets the buckets property value. The buckets property
     * @return array<PlannerPlanConfigurationBucketDefinition>|null
    */
    public function getBuckets(): ?array {
        return $this->getBackingStore()->get('buckets');
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the defaultLanguage property value. The defaultLanguage property
     * @return string|null
    */
    public function getDefaultLanguage(): ?string {
        return $this->getBackingStore()->get('defaultLanguage');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'buckets' => fn(ParseNode $n) => $o->setBuckets($n->getCollectionOfObjectValues([PlannerPlanConfigurationBucketDefinition::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'defaultLanguage' => fn(ParseNode $n) => $o->setDefaultLanguage($n->getStringValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'localizations' => fn(ParseNode $n) => $o->setLocalizations($n->getCollectionOfObjectValues([PlannerPlanConfigurationLocalization::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. The lastModifiedBy property
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
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
     * Gets the localizations property value. The localizations property
     * @return array<PlannerPlanConfigurationLocalization>|null
    */
    public function getLocalizations(): ?array {
        return $this->getBackingStore()->get('localizations');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('buckets', $this->getBuckets());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('defaultLanguage', $this->getDefaultLanguage());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfObjectValues('localizations', $this->getLocalizations());
    }

    /**
     * Sets the buckets property value. The buckets property
     *  @param array<PlannerPlanConfigurationBucketDefinition>|null $value Value to set for the buckets property.
    */
    public function setBuckets(?array $value): void {
        $this->getBackingStore()->set('buckets', $value);
    }

    /**
     * Sets the createdBy property value. The createdBy property
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the defaultLanguage property value. The defaultLanguage property
     *  @param string|null $value Value to set for the defaultLanguage property.
    */
    public function setDefaultLanguage(?string $value): void {
        $this->getBackingStore()->set('defaultLanguage', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The lastModifiedBy property
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
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
     * Sets the localizations property value. The localizations property
     *  @param array<PlannerPlanConfigurationLocalization>|null $value Value to set for the localizations property.
    */
    public function setLocalizations(?array $value): void {
        $this->getBackingStore()->set('localizations', $value);
    }

}
