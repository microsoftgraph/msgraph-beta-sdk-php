<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PlannerPlanConfigurationLocalization extends Entity implements Parsable 
{
    /**
     * Instantiates a new PlannerPlanConfigurationLocalization and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerPlanConfigurationLocalization
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerPlanConfigurationLocalization {
        return new PlannerPlanConfigurationLocalization();
    }

    /**
     * Gets the buckets property value. Localized names for configured buckets in the plan configuration.
     * @return array<PlannerPlanConfigurationBucketLocalization>|null
    */
    public function getBuckets(): ?array {
        $val = $this->getBackingStore()->get('buckets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlannerPlanConfigurationBucketLocalization::class);
            /** @var array<PlannerPlanConfigurationBucketLocalization>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'buckets'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'buckets' => fn(ParseNode $n) => $o->setBuckets($n->getCollectionOfObjectValues([PlannerPlanConfigurationBucketLocalization::class, 'createFromDiscriminatorValue'])),
            'languageTag' => fn(ParseNode $n) => $o->setLanguageTag($n->getStringValue()),
            'planTitle' => fn(ParseNode $n) => $o->setPlanTitle($n->getStringValue()),
        ]);
    }

    /**
     * Gets the languageTag property value. The language code associated with the localized names in this object.
     * @return string|null
    */
    public function getLanguageTag(): ?string {
        $val = $this->getBackingStore()->get('languageTag');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'languageTag'");
    }

    /**
     * Gets the planTitle property value. Localized title of the plan.
     * @return string|null
    */
    public function getPlanTitle(): ?string {
        $val = $this->getBackingStore()->get('planTitle');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'planTitle'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('buckets', $this->getBuckets());
        $writer->writeStringValue('languageTag', $this->getLanguageTag());
        $writer->writeStringValue('planTitle', $this->getPlanTitle());
    }

    /**
     * Sets the buckets property value. Localized names for configured buckets in the plan configuration.
     * @param array<PlannerPlanConfigurationBucketLocalization>|null $value Value to set for the buckets property.
    */
    public function setBuckets(?array $value): void {
        $this->getBackingStore()->set('buckets', $value);
    }

    /**
     * Sets the languageTag property value. The language code associated with the localized names in this object.
     * @param string|null $value Value to set for the languageTag property.
    */
    public function setLanguageTag(?string $value): void {
        $this->getBackingStore()->set('languageTag', $value);
    }

    /**
     * Sets the planTitle property value. Localized title of the plan.
     * @param string|null $value Value to set for the planTitle property.
    */
    public function setPlanTitle(?string $value): void {
        $this->getBackingStore()->set('planTitle', $value);
    }

}
