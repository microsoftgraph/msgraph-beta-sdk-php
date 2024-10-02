<?php

namespace Microsoft\Graph\Beta\Generated\Models\HealthMonitoring;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AlertConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new AlertConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AlertConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AlertConfiguration {
        return new AlertConfiguration();
    }

    /**
     * Gets the emailNotificationConfigurations property value. The emailNotificationConfigurations property
     * @return array<EmailNotificationConfiguration>|null
    */
    public function getEmailNotificationConfigurations(): ?array {
        $val = $this->getBackingStore()->get('emailNotificationConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EmailNotificationConfiguration::class);
            /** @var array<EmailNotificationConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailNotificationConfigurations'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'emailNotificationConfigurations' => fn(ParseNode $n) => $o->setEmailNotificationConfigurations($n->getCollectionOfObjectValues([EmailNotificationConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('emailNotificationConfigurations', $this->getEmailNotificationConfigurations());
    }

    /**
     * Sets the emailNotificationConfigurations property value. The emailNotificationConfigurations property
     * @param array<EmailNotificationConfiguration>|null $value Value to set for the emailNotificationConfigurations property.
    */
    public function setEmailNotificationConfigurations(?array $value): void {
        $this->getBackingStore()->set('emailNotificationConfigurations', $value);
    }

}
