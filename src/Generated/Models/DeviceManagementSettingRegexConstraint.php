<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementSettingRegexConstraint extends DeviceManagementConstraint implements Parsable 
{
    /**
     * @var string|null $regex The RegEx pattern to match against
    */
    private ?string $regex = null;
    
    /**
     * Instantiates a new DeviceManagementSettingRegexConstraint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementSettingRegexConstraint');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettingRegexConstraint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettingRegexConstraint {
        return new DeviceManagementSettingRegexConstraint();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'regex' => fn(ParseNode $n) => $o->setRegex($n->getStringValue()),
        ]);
    }

    /**
     * Gets the regex property value. The RegEx pattern to match against
     * @return string|null
    */
    public function getRegex(): ?string {
        return $this->regex;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('regex', $this->regex);
    }

    /**
     * Sets the regex property value. The RegEx pattern to match against
     *  @param string|null $value Value to set for the regex property.
    */
    public function setRegex(?string $value ): void {
        $this->regex = $value;
    }

}
