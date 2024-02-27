<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DirectoryRoleAccessReviewPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new DirectoryRoleAccessReviewPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DirectoryRoleAccessReviewPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DirectoryRoleAccessReviewPolicy {
        return new DirectoryRoleAccessReviewPolicy();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([AccessReviewScheduleSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the settings property value. The settings property
     * @return AccessReviewScheduleSettings|null
    */
    public function getSettings(): ?AccessReviewScheduleSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof AccessReviewScheduleSettings) {
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
        $writer->writeObjectValue('settings', $this->getSettings());
    }

    /**
     * Sets the settings property value. The settings property
     * @param AccessReviewScheduleSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?AccessReviewScheduleSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

}
