<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsOverview extends Entity implements Parsable 
{
    /**
     * @var array<UserExperienceAnalyticsInsight>|null $insights The user experience analytics insights.
    */
    private ?array $insights = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsOverview and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsOverview
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsOverview {
        return new UserExperienceAnalyticsOverview();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'insights' => function (ParseNode $n) use ($o) { $o->setInsights($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsInsight::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the insights property value. The user experience analytics insights.
     * @return array<UserExperienceAnalyticsInsight>|null
    */
    public function getInsights(): ?array {
        return $this->insights;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('insights', $this->insights);
    }

    /**
     * Sets the insights property value. The user experience analytics insights.
     *  @param array<UserExperienceAnalyticsInsight>|null $value Value to set for the insights property.
    */
    public function setInsights(?array $value ): void {
        $this->insights = $value;
    }

}
