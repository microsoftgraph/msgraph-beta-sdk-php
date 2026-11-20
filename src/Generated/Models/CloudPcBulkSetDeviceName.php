<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcBulkSetDeviceName extends CloudPcBulkAction implements Parsable 
{
    /**
     * Instantiates a new CloudPcBulkSetDeviceName and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcBulkSetDeviceName');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcBulkSetDeviceName
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcBulkSetDeviceName {
        return new CloudPcBulkSetDeviceName();
    }

    /**
     * Gets the deviceNamingTemplate property value. The template used to generate a unique device name for each Cloud PC. Required when creating the action. Use an optional prefix followed by one %RAND:x% macro, where x is the number of random alphanumeric characters and is at least 5. The generated name must be 5–15 characters long. The prefix can contain ASCII letters, digits, and hyphens, and must not start with a hyphen. The prefix length plus x must not exceed 15. For example, ACRA-%RAND:5% generates a ten-character name such as ACRA-A1B2C.
     * @return string|null
    */
    public function getDeviceNamingTemplate(): ?string {
        $val = $this->getBackingStore()->get('deviceNamingTemplate');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceNamingTemplate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceNamingTemplate' => fn(ParseNode $n) => $o->setDeviceNamingTemplate($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceNamingTemplate', $this->getDeviceNamingTemplate());
    }

    /**
     * Sets the deviceNamingTemplate property value. The template used to generate a unique device name for each Cloud PC. Required when creating the action. Use an optional prefix followed by one %RAND:x% macro, where x is the number of random alphanumeric characters and is at least 5. The generated name must be 5–15 characters long. The prefix can contain ASCII letters, digits, and hyphens, and must not start with a hyphen. The prefix length plus x must not exceed 15. For example, ACRA-%RAND:5% generates a ten-character name such as ACRA-A1B2C.
     * @param string|null $value Value to set for the deviceNamingTemplate property.
    */
    public function setDeviceNamingTemplate(?string $value): void {
        $this->getBackingStore()->set('deviceNamingTemplate', $value);
    }

}
