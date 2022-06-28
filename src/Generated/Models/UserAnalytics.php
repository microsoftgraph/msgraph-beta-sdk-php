<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserAnalytics extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<ActivityStatistics>|null $activityStatistics The collection of work activities that a user spent time on during and outside of working hours. Read-only. Nullable.
    */
    private ?array $activityStatistics = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Settings|null $settings The current settings for a user to use the analytics API.
    */
    private ?Settings $settings = null;
    
    /**
     * Instantiates a new UserAnalytics and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserAnalytics
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserAnalytics {
        return new UserAnalytics();
    }

    /**
     * Gets the activityStatistics property value. The collection of work activities that a user spent time on during and outside of working hours. Read-only. Nullable.
     * @return array<ActivityStatistics>|null
    */
    public function getActivityStatistics(): ?array {
        return $this->activityStatistics;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activityStatistics' => function (ParseNode $n) use ($o) { $o->setActivityStatistics($n->getCollectionOfObjectValues(array(ActivityStatistics::class, 'createFromDiscriminatorValue'))); },
            'settings' => function (ParseNode $n) use ($o) { $o->setSettings($n->getObjectValue(array(Settings::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the settings property value. The current settings for a user to use the analytics API.
     * @return Settings|null
    */
    public function getSettings(): ?Settings {
        return $this->settings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('activityStatistics', $this->activityStatistics);
        $writer->writeObjectValue('settings', $this->settings);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the activityStatistics property value. The collection of work activities that a user spent time on during and outside of working hours. Read-only. Nullable.
     *  @param array<ActivityStatistics>|null $value Value to set for the activityStatistics property.
    */
    public function setActivityStatistics(?array $value ): void {
        $this->activityStatistics = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the settings property value. The current settings for a user to use the analytics API.
     *  @param Settings|null $value Value to set for the settings property.
    */
    public function setSettings(?Settings $value ): void {
        $this->settings = $value;
    }

}
