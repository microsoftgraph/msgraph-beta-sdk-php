<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsWorkFromAnywhereMetric extends Entity implements Parsable 
{
    /**
     * @var array<UserExperienceAnalyticsWorkFromAnywhereDevice>|null $metricDevices The work from anywhere metric devices.
    */
    private ?array $metricDevices = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsWorkFromAnywhereMetric and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userExperienceAnalyticsWorkFromAnywhereMetric');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsWorkFromAnywhereMetric
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsWorkFromAnywhereMetric {
        return new UserExperienceAnalyticsWorkFromAnywhereMetric();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'metricDevices' => function (ParseNode $n) use ($o) { $o->setMetricDevices($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsWorkFromAnywhereDevice::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the metricDevices property value. The work from anywhere metric devices.
     * @return array<UserExperienceAnalyticsWorkFromAnywhereDevice>|null
    */
    public function getMetricDevices(): ?array {
        return $this->metricDevices;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('metricDevices', $this->metricDevices);
    }

    /**
     * Sets the metricDevices property value. The work from anywhere metric devices.
     *  @param array<UserExperienceAnalyticsWorkFromAnywhereDevice>|null $value Value to set for the metricDevices property.
    */
    public function setMetricDevices(?array $value ): void {
        $this->metricDevices = $value;
    }

}
