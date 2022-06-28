<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementSettingCollectionConstraint extends DeviceManagementConstraint implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $maximumLength The maximum number of elements in the collection
    */
    private ?int $maximumLength = null;
    
    /**
     * @var int|null $minimumLength The minimum number of elements in the collection
    */
    private ?int $minimumLength = null;
    
    /**
     * Instantiates a new DeviceManagementSettingCollectionConstraint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettingCollectionConstraint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettingCollectionConstraint {
        return new DeviceManagementSettingCollectionConstraint();
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
            'maximumLength' => function (ParseNode $n) use ($o) { $o->setMaximumLength($n->getIntegerValue()); },
            'minimumLength' => function (ParseNode $n) use ($o) { $o->setMinimumLength($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the maximumLength property value. The maximum number of elements in the collection
     * @return int|null
    */
    public function getMaximumLength(): ?int {
        return $this->maximumLength;
    }

    /**
     * Gets the minimumLength property value. The minimum number of elements in the collection
     * @return int|null
    */
    public function getMinimumLength(): ?int {
        return $this->minimumLength;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('maximumLength', $this->maximumLength);
        $writer->writeIntegerValue('minimumLength', $this->minimumLength);
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
     * Sets the maximumLength property value. The maximum number of elements in the collection
     *  @param int|null $value Value to set for the maximumLength property.
    */
    public function setMaximumLength(?int $value ): void {
        $this->maximumLength = $value;
    }

    /**
     * Sets the minimumLength property value. The minimum number of elements in the collection
     *  @param int|null $value Value to set for the minimumLength property.
    */
    public function setMinimumLength(?int $value ): void {
        $this->minimumLength = $value;
    }

}
