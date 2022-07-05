<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppleExpeditedCheckinConfigurationBase extends DeviceConfiguration implements Parsable 
{
    /**
     * @var bool|null $enableExpeditedCheckin Gets or sets whether to enable expedited device check-ins.
    */
    private ?bool $enableExpeditedCheckin = null;
    
    /**
     * Instantiates a new AppleExpeditedCheckinConfigurationBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppleExpeditedCheckinConfigurationBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppleExpeditedCheckinConfigurationBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.iosExpeditedCheckinConfiguration': return new IosExpeditedCheckinConfiguration();
            }
        }
        return new AppleExpeditedCheckinConfigurationBase();
    }

    /**
     * Gets the enableExpeditedCheckin property value. Gets or sets whether to enable expedited device check-ins.
     * @return bool|null
    */
    public function getEnableExpeditedCheckin(): ?bool {
        return $this->enableExpeditedCheckin;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enableExpeditedCheckin' => function (ParseNode $n) use ($o) { $o->setEnableExpeditedCheckin($n->getBooleanValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('enableExpeditedCheckin', $this->enableExpeditedCheckin);
    }

    /**
     * Sets the enableExpeditedCheckin property value. Gets or sets whether to enable expedited device check-ins.
     *  @param bool|null $value Value to set for the enableExpeditedCheckin property.
    */
    public function setEnableExpeditedCheckin(?bool $value ): void {
        $this->enableExpeditedCheckin = $value;
    }

}
