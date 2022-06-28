<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppPolicySetItem extends PolicySetItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var InstallIntent|null $intent Install intent of the MobileAppPolicySetItem. Possible values are: available, required, uninstall, availableWithoutEnrollment.
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
        $this->additionalData = [];
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
            'intent' => function (ParseNode $n) use ($o) { $o->setIntent($n->getEnumValue(InstallIntent::class)); },
            'settings' => function (ParseNode $n) use ($o) { $o->setSettings($n->getObjectValue(array(MobileAppAssignmentSettings::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the intent property value. Install intent of the MobileAppPolicySetItem. Possible values are: available, required, uninstall, availableWithoutEnrollment.
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
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the intent property value. Install intent of the MobileAppPolicySetItem. Possible values are: available, required, uninstall, availableWithoutEnrollment.
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
