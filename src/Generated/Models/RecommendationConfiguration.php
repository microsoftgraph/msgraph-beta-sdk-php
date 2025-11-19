<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RecommendationConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new RecommendationConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecommendationConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecommendationConfiguration {
        return new RecommendationConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isNotificationEnabled' => fn(ParseNode $n) => $o->setIsNotificationEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isNotificationEnabled property value. Indicates whether notifications for recommendations are enabled.
     * @return bool|null
    */
    public function getIsNotificationEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isNotificationEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isNotificationEnabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isNotificationEnabled', $this->getIsNotificationEnabled());
    }

    /**
     * Sets the isNotificationEnabled property value. Indicates whether notifications for recommendations are enabled.
     * @param bool|null $value Value to set for the isNotificationEnabled property.
    */
    public function setIsNotificationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isNotificationEnabled', $value);
    }

}
