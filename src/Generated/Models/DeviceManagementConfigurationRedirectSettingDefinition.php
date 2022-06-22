<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationRedirectSettingDefinition extends DeviceManagementConfigurationSettingDefinition implements Parsable 
{
    /**
     * @var string|null $deepLink A deep link that points to the specific location in the Intune console where feature support must be managed from.
    */
    private ?string $deepLink = null;
    
    /**
     * @var string|null $redirectMessage A message that explains that clicking the link will redirect the user to a supported page to manage the settings.
    */
    private ?string $redirectMessage = null;
    
    /**
     * @var string|null $redirectReason Indicates the reason for redirecting the user to an alternative location in the console.  For example: WiFi profiles are not supported in the settings catalog and must be created with a template policy.
    */
    private ?string $redirectReason = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationRedirectSettingDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->deepLink;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deepLink' => function (ParseNode $n) use ($o) { $o->setDeepLink($n->getStringValue()); },
            'redirectMessage' => function (ParseNode $n) use ($o) { $o->setRedirectMessage($n->getStringValue()); },
            'redirectReason' => function (ParseNode $n) use ($o) { $o->setRedirectReason($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the redirectMessage property value. A message that explains that clicking the link will redirect the user to a supported page to manage the settings.
     * @return string|null
    */
    public function getRedirectMessage(): ?string {
        return $this->redirectMessage;
    }

    /**
     * Gets the redirectReason property value. Indicates the reason for redirecting the user to an alternative location in the console.  For example: WiFi profiles are not supported in the settings catalog and must be created with a template policy.
     * @return string|null
    */
    public function getRedirectReason(): ?string {
        return $this->redirectReason;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deepLink', $this->deepLink);
        $writer->writeStringValue('redirectMessage', $this->redirectMessage);
        $writer->writeStringValue('redirectReason', $this->redirectReason);
    }

    /**
     * Sets the deepLink property value. A deep link that points to the specific location in the Intune console where feature support must be managed from.
     *  @param string|null $value Value to set for the deepLink property.
    */
    public function setDeepLink(?string $value ): void {
        $this->deepLink = $value;
    }

    /**
     * Sets the redirectMessage property value. A message that explains that clicking the link will redirect the user to a supported page to manage the settings.
     *  @param string|null $value Value to set for the redirectMessage property.
    */
    public function setRedirectMessage(?string $value ): void {
        $this->redirectMessage = $value;
    }

    /**
     * Sets the redirectReason property value. Indicates the reason for redirecting the user to an alternative location in the console.  For example: WiFi profiles are not supported in the settings catalog and must be created with a template policy.
     *  @param string|null $value Value to set for the redirectReason property.
    */
    public function setRedirectReason(?string $value ): void {
        $this->redirectReason = $value;
    }

}
