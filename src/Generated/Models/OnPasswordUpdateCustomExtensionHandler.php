<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnPasswordUpdateCustomExtensionHandler extends OnPasswordUpdateHandler implements Parsable 
{
    /**
     * Instantiates a new OnPasswordUpdateCustomExtensionHandler and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onPasswordUpdateCustomExtensionHandler');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPasswordUpdateCustomExtensionHandler
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPasswordUpdateCustomExtensionHandler {
        return new OnPasswordUpdateCustomExtensionHandler();
    }

    /**
     * Gets the configuration property value. Configuration that overrides the default settings from the referenced custom extension, such as timeout and retry values.
     * @return CustomExtensionOverwriteConfiguration|null
    */
    public function getConfiguration(): ?CustomExtensionOverwriteConfiguration {
        $val = $this->getBackingStore()->get('configuration');
        if (is_null($val) || $val instanceof CustomExtensionOverwriteConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configuration'");
    }

    /**
     * Gets the customExtension property value. The customExtension property
     * @return OnPasswordUpdateCustomExtension|null
    */
    public function getCustomExtension(): ?OnPasswordUpdateCustomExtension {
        $val = $this->getBackingStore()->get('customExtension');
        if (is_null($val) || $val instanceof OnPasswordUpdateCustomExtension) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customExtension'");
    }

    /**
     * Gets the expirationDateTime property value. The date and time at which the listener stops invoking the custom extension. The value must be in the future and can't be more than six months after the create or PATCH request. Renew the value by updating the listener. After the value passes, the callout is skipped until the listener is renewed or recreated.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configuration' => fn(ParseNode $n) => $o->setConfiguration($n->getObjectValue([CustomExtensionOverwriteConfiguration::class, 'createFromDiscriminatorValue'])),
            'customExtension' => fn(ParseNode $n) => $o->setCustomExtension($n->getObjectValue([OnPasswordUpdateCustomExtension::class, 'createFromDiscriminatorValue'])),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('configuration', $this->getConfiguration());
        $writer->writeObjectValue('customExtension', $this->getCustomExtension());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
    }

    /**
     * Sets the configuration property value. Configuration that overrides the default settings from the referenced custom extension, such as timeout and retry values.
     * @param CustomExtensionOverwriteConfiguration|null $value Value to set for the configuration property.
    */
    public function setConfiguration(?CustomExtensionOverwriteConfiguration $value): void {
        $this->getBackingStore()->set('configuration', $value);
    }

    /**
     * Sets the customExtension property value. The customExtension property
     * @param OnPasswordUpdateCustomExtension|null $value Value to set for the customExtension property.
    */
    public function setCustomExtension(?OnPasswordUpdateCustomExtension $value): void {
        $this->getBackingStore()->set('customExtension', $value);
    }

    /**
     * Sets the expirationDateTime property value. The date and time at which the listener stops invoking the custom extension. The value must be in the future and can't be more than six months after the create or PATCH request. Renew the value by updating the listener. After the value passes, the callout is skipped until the listener is renewed or recreated.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

}
