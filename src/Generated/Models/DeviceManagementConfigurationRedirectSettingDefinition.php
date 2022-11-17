<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationRedirectSettingDefinition extends DeviceManagementConfigurationSettingDefinition implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementConfigurationRedirectSettingDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationRedirectSettingDefinition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationRedirectSettingDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationRedirectSettingDefinition {
        return new DeviceManagementConfigurationRedirectSettingDefinition();
    }

    /**
     * Gets the deepLink property value. A deep link that points to the specific location in the Intune console where feature support must be managed from.
     * @return string|null
    */
    public function getDeepLink(): ?string {
        return $this->getBackingStore()->get('deepLink');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deepLink' => fn(ParseNode $n) => $o->setDeepLink($n->getStringValue()),
            'redirectMessage' => fn(ParseNode $n) => $o->setRedirectMessage($n->getStringValue()),
            'redirectReason' => fn(ParseNode $n) => $o->setRedirectReason($n->getStringValue()),
        ]);
    }

    /**
     * Gets the redirectMessage property value. A message that explains that clicking the link will redirect the user to a supported page to manage the settings.
     * @return string|null
    */
    public function getRedirectMessage(): ?string {
        return $this->getBackingStore()->get('redirectMessage');
    }

    /**
     * Gets the redirectReason property value. Indicates the reason for redirecting the user to an alternative location in the console.  For example: WiFi profiles are not supported in the settings catalog and must be created with a template policy.
     * @return string|null
    */
    public function getRedirectReason(): ?string {
        return $this->getBackingStore()->get('redirectReason');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deepLink', $this->getDeepLink());
        $writer->writeStringValue('redirectMessage', $this->getRedirectMessage());
        $writer->writeStringValue('redirectReason', $this->getRedirectReason());
    }

    /**
     * Sets the deepLink property value. A deep link that points to the specific location in the Intune console where feature support must be managed from.
     *  @param string|null $value Value to set for the deepLink property.
    */
    public function setDeepLink(?string $value): void {
        $this->getBackingStore()->set('deepLink', $value);
    }

    /**
     * Sets the redirectMessage property value. A message that explains that clicking the link will redirect the user to a supported page to manage the settings.
     *  @param string|null $value Value to set for the redirectMessage property.
    */
    public function setRedirectMessage(?string $value): void {
        $this->getBackingStore()->set('redirectMessage', $value);
    }

    /**
     * Sets the redirectReason property value. Indicates the reason for redirecting the user to an alternative location in the console.  For example: WiFi profiles are not supported in the settings catalog and must be created with a template policy.
     *  @param string|null $value Value to set for the redirectReason property.
    */
    public function setRedirectReason(?string $value): void {
        $this->getBackingStore()->set('redirectReason', $value);
    }

}
