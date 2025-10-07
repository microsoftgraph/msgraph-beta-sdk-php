<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PlannerPlanConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new PlannerPlanConfiguration and sets the default values.
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
     * Gets the buckets property value. List the buckets that should be created in the plan.
     * @return array<PlannerPlanConfigurationBucketDefinition>|null
    */
    public function getBuckets(): ?array {
        $val = $this->getBackingStore()->get('buckets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlannerPlanConfigurationBucketDefinition::class);
            /** @var array<PlannerPlanConfigurationBucketDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'buckets'");
    }

    /**
     * Gets the createdBy property value. The identity of the creator of the plan configuration.
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
     * Gets the createdDateTime property value. The date and time when the plan configuration was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the defaultLanguage property value. The language code for the default language to be used for the names of the objects created for the plan.
     * @return string|null
    */
    public function getDefaultLanguage(): ?string {
        $val = $this->getBackingStore()->get('defaultLanguage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultLanguage'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
     * Gets the lastModifiedBy property value. The identity of the user who last modified the plan configuration.
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
     * Gets the lastModifiedDateTime property value. The date and time when the plan configuration was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the localizations property value. Localized names for the plan configuration.
     * @return array<PlannerPlanConfigurationLocalization>|null
    */
    public function getLocalizations(): ?array {
        $val = $this->getBackingStore()->get('localizations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlannerPlanConfigurationLocalization::class);
            /** @var array<PlannerPlanConfigurationLocalization>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localizations'");
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
     * Sets the buckets property value. List the buckets that should be created in the plan.
     * @param array<PlannerPlanConfigurationBucketDefinition>|null $value Value to set for the buckets property.
    */
    public function setBuckets(?array $value): void {
        $this->getBackingStore()->set('buckets', $value);
    }

    /**
     * Sets the createdBy property value. The identity of the creator of the plan configuration.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the plan configuration was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the defaultLanguage property value. The language code for the default language to be used for the names of the objects created for the plan.
     * @param string|null $value Value to set for the defaultLanguage property.
    */
    public function setDefaultLanguage(?string $value): void {
        $this->getBackingStore()->set('defaultLanguage', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The identity of the user who last modified the plan configuration.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the plan configuration was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the localizations property value. Localized names for the plan configuration.
     * @param array<PlannerPlanConfigurationLocalization>|null $value Value to set for the localizations property.
    */
    public function setLocalizations(?array $value): void {
        $this->getBackingStore()->set('localizations', $value);
    }

}
