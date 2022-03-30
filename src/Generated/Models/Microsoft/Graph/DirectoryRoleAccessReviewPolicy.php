<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DirectoryRoleAccessReviewPolicy extends Entity 
{
    /** @var AccessReviewScheduleSettings|null $settings  */
    private ?AccessReviewScheduleSettings $settings = null;
    
    /**
     * Instantiates a new directoryRoleAccessReviewPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DirectoryRoleAccessReviewPolicy
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DirectoryRoleAccessReviewPolicy {
        return new DirectoryRoleAccessReviewPolicy();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'settings' => function (self $o, ParseNode $n) { $o->setSettings($n->getObjectValue(AccessReviewScheduleSettings::class)); },
        ]);
    }

    /**
     * Gets the settings property value. 
     * @return AccessReviewScheduleSettings|null
    */
    public function getSettings(): ?AccessReviewScheduleSettings {
        return $this->settings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('settings', $this->settings);
    }

    /**
     * Sets the settings property value. 
     *  @param AccessReviewScheduleSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?AccessReviewScheduleSettings $value ): void {
        $this->settings = $value;
    }

}
