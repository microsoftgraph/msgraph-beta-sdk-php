<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeliveryOptimizationGroupIdCustom extends DeliveryOptimizationGroupIdSource implements Parsable 
{
    /**
     * @var string|null $groupIdCustom Specifies an arbitrary group ID that the device belongs to
    */
    private ?string $groupIdCustom = null;
    
    /**
     * Instantiates a new DeliveryOptimizationGroupIdCustom and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deliveryOptimizationGroupIdCustom');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeliveryOptimizationGroupIdCustom
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeliveryOptimizationGroupIdCustom {
        return new DeliveryOptimizationGroupIdCustom();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'groupIdCustom' => function (ParseNode $n) use ($o) { $o->setGroupIdCustom($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the groupIdCustom property value. Specifies an arbitrary group ID that the device belongs to
     * @return string|null
    */
    public function getGroupIdCustom(): ?string {
        return $this->groupIdCustom;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('groupIdCustom', $this->groupIdCustom);
    }

    /**
     * Sets the groupIdCustom property value. Specifies an arbitrary group ID that the device belongs to
     *  @param string|null $value Value to set for the groupIdCustom property.
    */
    public function setGroupIdCustom(?string $value ): void {
        $this->groupIdCustom = $value;
    }

}
