<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsCategory extends Entity implements Parsable 
{
    /**
     * @var array<UserExperienceAnalyticsInsight>|null $insights The insights for the user experience analytics category.
    */
    private ?array $insights = null;
    
    /**
     * @var array<UserExperienceAnalyticsMetric>|null $metricValues The metric values for the user experience analytics category.
    */
    private ?array $metricValues = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsCategory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsCategory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsCategory {
        return new UserExperienceAnalyticsCategory();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'insights' => function (ParseNode $n) use ($o) { $o->setInsights($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsInsight::class, 'createFromDiscriminatorValue'))); },
            'metricValues' => function (ParseNode $n) use ($o) { $o->setMetricValues($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsMetric::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the insights property value. The insights for the user experience analytics category.
     * @return array<UserExperienceAnalyticsInsight>|null
    */
    public function getInsights(): ?array {
        return $this->insights;
    }

    /**
     * Gets the metricValues property value. The metric values for the user experience analytics category.
     * @return array<UserExperienceAnalyticsMetric>|null
    */
    public function getMetricValues(): ?array {
        return $this->metricValues;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('insights', $this->insights);
        $writer->writeCollectionOfObjectValues('metricValues', $this->metricValues);
    }

    /**
     * Sets the insights property value. The insights for the user experience analytics category.
     *  @param array<UserExperienceAnalyticsInsight>|null $value Value to set for the insights property.
    */
    public function setInsights(?array $value ): void {
        $this->insights = $value;
    }

    /**
     * Sets the metricValues property value. The metric values for the user experience analytics category.
     *  @param array<UserExperienceAnalyticsMetric>|null $value Value to set for the metricValues property.
    */
    public function setMetricValues(?array $value ): void {
        $this->metricValues = $value;
    }

}
