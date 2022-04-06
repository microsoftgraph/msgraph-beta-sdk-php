<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class StaffAvailabilityItem implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<AvailabilityItem>|null $availabilityItems The availabilityItems property */
    private ?array $availabilityItems = null;
    
    /** @var string|null $staffId The staffId property */
    private ?string $staffId = null;
    
    /**
     * Instantiates a new staffAvailabilityItem and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StaffAvailabilityItem
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): StaffAvailabilityItem {
        return new StaffAvailabilityItem();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the availabilityItems property value. The availabilityItems property
     * @return array<AvailabilityItem>|null
    */
    public function getAvailabilityItems(): ?array {
        return $this->availabilityItems;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'availabilityItems' => function (self $o, ParseNode $n) { $o->setAvailabilityItems($n->getCollectionOfObjectValues(AvailabilityItem::class)); },
            'staffId' => function (self $o, ParseNode $n) { $o->setStaffId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the staffId property value. The staffId property
     * @return string|null
    */
    public function getStaffId(): ?string {
        return $this->staffId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('availabilityItems', $this->availabilityItems);
        $writer->writeStringValue('staffId', $this->staffId);
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
     * Sets the availabilityItems property value. The availabilityItems property
     *  @param array<AvailabilityItem>|null $value Value to set for the availabilityItems property.
    */
    public function setAvailabilityItems(?array $value ): void {
        $this->availabilityItems = $value;
    }

    /**
     * Sets the staffId property value. The staffId property
     *  @param string|null $value Value to set for the staffId property.
    */
    public function setStaffId(?string $value ): void {
        $this->staffId = $value;
    }

}
