<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicyPresentationCheckBox extends GroupPolicyPresentation implements Parsable 
{
    /**
     * @var bool|null $defaultChecked Default value for the check box. The default value is false.
    */
    private ?bool $defaultChecked = null;
    
    /**
     * Instantiates a new GroupPolicyPresentationCheckBox and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyPresentationCheckBox
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyPresentationCheckBox {
        return new GroupPolicyPresentationCheckBox();
    }

    /**
     * Gets the defaultChecked property value. Default value for the check box. The default value is false.
     * @return bool|null
    */
    public function getDefaultChecked(): ?bool {
        return $this->defaultChecked;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultChecked' => function (ParseNode $n) use ($o) { $o->setDefaultChecked($n->getBooleanValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('defaultChecked', $this->defaultChecked);
    }

    /**
     * Sets the defaultChecked property value. Default value for the check box. The default value is false.
     *  @param bool|null $value Value to set for the defaultChecked property.
    */
    public function setDefaultChecked(?bool $value ): void {
        $this->defaultChecked = $value;
    }

}
