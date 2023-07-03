<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UserAnalytics extends Entity implements Parsable 
{
    /**
     * Instantiates a new userAnalytics and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('activityStatistics');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ActivityStatistics::class);
            /** @var array<ActivityStatistics>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityStatistics'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activityStatistics' => fn(ParseNode $n) => $o->setActivityStatistics($n->getCollectionOfObjectValues([ActivityStatistics::class, 'createFromDiscriminatorValue'])),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([Settings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the settings property value. The current settings for a user to use the analytics API.
     * @return Settings|null
    */
    public function getSettings(): ?Settings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof Settings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('activityStatistics', $this->getActivityStatistics());
        $writer->writeObjectValue('settings', $this->getSettings());
    }

    /**
     * Sets the activityStatistics property value. The collection of work activities that a user spent time on during and outside of working hours. Read-only. Nullable.
     * @param array<ActivityStatistics>|null $value Value to set for the activityStatistics property.
    */
    public function setActivityStatistics(?array $value): void {
        $this->getBackingStore()->set('activityStatistics', $value);
    }

    /**
     * Sets the settings property value. The current settings for a user to use the analytics API.
     * @param Settings|null $value Value to set for the settings property.
    */
    public function setSettings(?Settings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

}
