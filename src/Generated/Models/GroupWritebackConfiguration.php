<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupWritebackConfiguration extends WritebackConfiguration implements Parsable 
{
    /**
     * @var string|null $onPremisesGroupType The onPremisesGroupType property
    */
    private ?string $onPremisesGroupType = null;
    
    /**
     * Instantiates a new GroupWritebackConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupWritebackConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupWritebackConfiguration {
        return new GroupWritebackConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'onPremisesGroupType' => function (ParseNode $n) use ($o) { $o->setOnPremisesGroupType($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the onPremisesGroupType property value. The onPremisesGroupType property
     * @return string|null
    */
    public function getOnPremisesGroupType(): ?string {
        return $this->onPremisesGroupType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('onPremisesGroupType', $this->onPremisesGroupType);
    }

    /**
     * Sets the onPremisesGroupType property value. The onPremisesGroupType property
     *  @param string|null $value Value to set for the onPremisesGroupType property.
    */
    public function setOnPremisesGroupType(?string $value ): void {
        $this->onPremisesGroupType = $value;
    }

}
