<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationRedirectSettingDefinition extends DeviceManagementConfigurationSettingDefinition implements Parsable 
{
    /**
     * Instantiates a new deviceManagementConfigurationRedirectSettingDefinition and sets the default values.
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
        $val = $this->getBackingStore()->get('deepLink');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deepLink'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deepLink' => fn(ParseNode $n) => $o->setDeepLink($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'redirectMessage' => fn(ParseNode $n) => $o->setRedirectMessage($n->getStringValue()),
            'redirectReason' => fn(ParseNode $n) => $o->setRedirectReason($n->getStringValue()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the redirectMessage property value. A message that explains that clicking the link will redirect the user to a supported page to manage the settings.
     * @return string|null
    */
    public function getRedirectMessage(): ?string {
        $val = $this->getBackingStore()->get('redirectMessage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'redirectMessage'");
    }

    /**
     * Gets the redirectReason property value. Indicates the reason for redirecting the user to an alternative location in the console.  For example: WiFi profiles are not supported in the settings catalog and must be created with a template policy.
     * @return string|null
    */
    public function getRedirectReason(): ?string {
        $val = $this->getBackingStore()->get('redirectReason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'redirectReason'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deepLink', $this->getDeepLink());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('redirectMessage', $this->getRedirectMessage());
        $writer->writeStringValue('redirectReason', $this->getRedirectReason());
    }

    /**
     * Sets the deepLink property value. A deep link that points to the specific location in the Intune console where feature support must be managed from.
     * @param string|null $value Value to set for the deepLink property.
    */
    public function setDeepLink(?string $value): void {
        $this->getBackingStore()->set('deepLink', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the redirectMessage property value. A message that explains that clicking the link will redirect the user to a supported page to manage the settings.
     * @param string|null $value Value to set for the redirectMessage property.
    */
    public function setRedirectMessage(?string $value): void {
        $this->getBackingStore()->set('redirectMessage', $value);
    }

    /**
     * Sets the redirectReason property value. Indicates the reason for redirecting the user to an alternative location in the console.  For example: WiFi profiles are not supported in the settings catalog and must be created with a template policy.
     * @param string|null $value Value to set for the redirectReason property.
    */
    public function setRedirectReason(?string $value): void {
        $this->getBackingStore()->set('redirectReason', $value);
    }

}
