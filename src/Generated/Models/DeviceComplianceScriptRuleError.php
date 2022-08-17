<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceComplianceScriptRuleError extends DeviceComplianceScriptError implements Parsable 
{
    /**
     * @var string|null $settingName Setting name for the rule with error.
    */
    private ?string $settingName = null;
    
    /**
     * Instantiates a new DeviceComplianceScriptRuleError and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceComplianceScriptRuleError');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceComplianceScriptRuleError
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceComplianceScriptRuleError {
        return new DeviceComplianceScriptRuleError();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'settingName' => function (ParseNode $n) use ($o) { $o->setSettingName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the settingName property value. Setting name for the rule with error.
     * @return string|null
    */
    public function getSettingName(): ?string {
        return $this->settingName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('settingName', $this->settingName);
    }

    /**
     * Sets the settingName property value. Setting name for the rule with error.
     *  @param string|null $value Value to set for the settingName property.
    */
    public function setSettingName(?string $value ): void {
        $this->settingName = $value;
    }

}
