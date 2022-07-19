<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppPolicySetItem extends PolicySetItem implements Parsable 
{
    /**
     * @var InstallIntent|null $intent Possible values for the install intent chosen by the admin.
    */
    private ?InstallIntent $intent = null;
    
    /**
     * @var MobileAppAssignmentSettings|null $settings Settings of the MobileAppPolicySetItem.
    */
    private ?MobileAppAssignmentSettings $settings = null;
    
    /**
     * Instantiates a new MobileAppPolicySetItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.mobileAppPolicySetItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppPolicySetItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppPolicySetItem {
        return new MobileAppPolicySetItem();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'intent' => function (ParseNode $n) use ($o) { $o->setIntent($n->getEnumValue(InstallIntent::class)); },
            'settings' => function (ParseNode $n) use ($o) { $o->setSettings($n->getObjectValue(array(MobileAppAssignmentSettings::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the intent property value. Possible values for the install intent chosen by the admin.
     * @return InstallIntent|null
    */
    public function getIntent(): ?InstallIntent {
        return $this->intent;
    }

    /**
     * Gets the settings property value. Settings of the MobileAppPolicySetItem.
     * @return MobileAppAssignmentSettings|null
    */
    public function getSettings(): ?MobileAppAssignmentSettings {
        return $this->settings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('intent', $this->intent);
        $writer->writeObjectValue('settings', $this->settings);
    }

    /**
     * Sets the intent property value. Possible values for the install intent chosen by the admin.
     *  @param InstallIntent|null $value Value to set for the intent property.
    */
    public function setIntent(?InstallIntent $value ): void {
        $this->intent = $value;
    }

    /**
     * Sets the settings property value. Settings of the MobileAppPolicySetItem.
     *  @param MobileAppAssignmentSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?MobileAppAssignmentSettings $value ): void {
        $this->settings = $value;
    }

}
