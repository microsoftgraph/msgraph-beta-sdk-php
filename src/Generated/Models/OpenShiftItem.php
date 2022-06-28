<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OpenShiftItem extends ShiftItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $openSlotCount Count of the number of slots for the given open shift.
    */
    private ?int $openSlotCount = null;
    
    /**
     * Instantiates a new OpenShiftItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OpenShiftItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OpenShiftItem {
        return new OpenShiftItem();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'openSlotCount' => function (ParseNode $n) use ($o) { $o->setOpenSlotCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the openSlotCount property value. Count of the number of slots for the given open shift.
     * @return int|null
    */
    public function getOpenSlotCount(): ?int {
        return $this->openSlotCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('openSlotCount', $this->openSlotCount);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the openSlotCount property value. Count of the number of slots for the given open shift.
     *  @param int|null $value Value to set for the openSlotCount property.
    */
    public function setOpenSlotCount(?int $value ): void {
        $this->openSlotCount = $value;
    }

}
