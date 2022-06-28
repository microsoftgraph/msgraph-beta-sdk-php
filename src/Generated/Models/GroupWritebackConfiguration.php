<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupWritebackConfiguration extends WritebackConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $onPremisesGroupType The onPremisesGroupType property
    */
    private ?string $onPremisesGroupType = null;
    
    /**
     * Instantiates a new GroupWritebackConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Sets the onPremisesGroupType property value. The onPremisesGroupType property
     *  @param string|null $value Value to set for the onPremisesGroupType property.
    */
    public function setOnPremisesGroupType(?string $value ): void {
        $this->onPremisesGroupType = $value;
    }

}
