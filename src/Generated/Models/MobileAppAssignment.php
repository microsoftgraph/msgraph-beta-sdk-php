<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppAssignment extends Entity 
{
    /** @var InstallIntent|null $intent The install intent defined by the admin. Possible values are: available, required, uninstall, availableWithoutEnrollment. */
    private ?InstallIntent $intent = null;
    
    /** @var MobileAppAssignmentSettings|null $settings The settings for target assignment defined by the admin. */
    private ?MobileAppAssignmentSettings $settings = null;
    
    /** @var DeviceAndAppManagementAssignmentSource|null $source The resource type which is the source for the assignment. Possible values are: direct, policySets. */
    private ?DeviceAndAppManagementAssignmentSource $source = null;
    
    /** @var string|null $sourceId The identifier of the source of the assignment. */
    private ?string $sourceId = null;
    
    /** @var DeviceAndAppManagementAssignmentTarget|null $target The target group assignment defined by the admin. */
    private ?DeviceAndAppManagementAssignmentTarget $target = null;
    
    /**
     * Instantiates a new mobileAppAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppAssignment
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppAssignment {
        return new MobileAppAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'intent' => function (self $o, ParseNode $n) { $o->setIntent($n->getEnumValue(InstallIntent::class)); },
            'settings' => function (self $o, ParseNode $n) { $o->setSettings($n->getObjectValue(MobileAppAssignmentSettings::class)); },
            'source' => function (self $o, ParseNode $n) { $o->setSource($n->getEnumValue(DeviceAndAppManagementAssignmentSource::class)); },
            'sourceId' => function (self $o, ParseNode $n) { $o->setSourceId($n->getStringValue()); },
            'target' => function (self $o, ParseNode $n) { $o->setTarget($n->getObjectValue(DeviceAndAppManagementAssignmentTarget::class)); },
        ]);
    }

    /**
     * Gets the intent property value. The install intent defined by the admin. Possible values are: available, required, uninstall, availableWithoutEnrollment.
     * @return InstallIntent|null
    */
    public function getIntent(): ?InstallIntent {
        return $this->intent;
    }

    /**
     * Gets the settings property value. The settings for target assignment defined by the admin.
     * @return MobileAppAssignmentSettings|null
    */
    public function getSettings(): ?MobileAppAssignmentSettings {
        return $this->settings;
    }

    /**
     * Gets the source property value. The resource type which is the source for the assignment. Possible values are: direct, policySets.
     * @return DeviceAndAppManagementAssignmentSource|null
    */
    public function getSource(): ?DeviceAndAppManagementAssignmentSource {
        return $this->source;
    }

    /**
     * Gets the sourceId property value. The identifier of the source of the assignment.
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the target property value. The target group assignment defined by the admin.
     * @return DeviceAndAppManagementAssignmentTarget|null
    */
    public function getTarget(): ?DeviceAndAppManagementAssignmentTarget {
        return $this->target;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('intent', $this->intent);
        $writer->writeObjectValue('settings', $this->settings);
        $writer->writeEnumValue('source', $this->source);
        $writer->writeStringValue('sourceId', $this->sourceId);
        $writer->writeObjectValue('target', $this->target);
    }

    /**
     * Sets the intent property value. The install intent defined by the admin. Possible values are: available, required, uninstall, availableWithoutEnrollment.
     *  @param InstallIntent|null $value Value to set for the intent property.
    */
    public function setIntent(?InstallIntent $value ): void {
        $this->intent = $value;
    }

    /**
     * Sets the settings property value. The settings for target assignment defined by the admin.
     *  @param MobileAppAssignmentSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?MobileAppAssignmentSettings $value ): void {
        $this->settings = $value;
    }

    /**
     * Sets the source property value. The resource type which is the source for the assignment. Possible values are: direct, policySets.
     *  @param DeviceAndAppManagementAssignmentSource|null $value Value to set for the source property.
    */
    public function setSource(?DeviceAndAppManagementAssignmentSource $value ): void {
        $this->source = $value;
    }

    /**
     * Sets the sourceId property value. The identifier of the source of the assignment.
     *  @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value ): void {
        $this->sourceId = $value;
    }

    /**
     * Sets the target property value. The target group assignment defined by the admin.
     *  @param DeviceAndAppManagementAssignmentTarget|null $value Value to set for the target property.
    */
    public function setTarget(?DeviceAndAppManagementAssignmentTarget $value ): void {
        $this->target = $value;
    }

}
