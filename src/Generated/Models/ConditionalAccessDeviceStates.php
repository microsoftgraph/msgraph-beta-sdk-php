<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessDeviceStates implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $excludeStates States excluded from the scope of the policy. Possible values: Compliant, DomainJoined.
    */
    private ?array $excludeStates = null;
    
    /**
     * @var array<string>|null $includeStates States in the scope of the policy. All is the only allowed value.
    */
    private ?array $includeStates = null;
    
    /**
     * Instantiates a new conditionalAccessDeviceStates and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessDeviceStates
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessDeviceStates {
        return new ConditionalAccessDeviceStates();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the excludeStates property value. States excluded from the scope of the policy. Possible values: Compliant, DomainJoined.
     * @return array<string>|null
    */
    public function getExcludeStates(): ?array {
        return $this->excludeStates;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excludeStates' => function (ParseNode $n) use ($o) { $o->setExcludeStates($n->getCollectionOfPrimitiveValues()); },
            'includeStates' => function (ParseNode $n) use ($o) { $o->setIncludeStates($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the includeStates property value. States in the scope of the policy. All is the only allowed value.
     * @return array<string>|null
    */
    public function getIncludeStates(): ?array {
        return $this->includeStates;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('excludeStates', $this->excludeStates);
        $writer->writeCollectionOfPrimitiveValues('includeStates', $this->includeStates);
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
     * Sets the excludeStates property value. States excluded from the scope of the policy. Possible values: Compliant, DomainJoined.
     *  @param array<string>|null $value Value to set for the excludeStates property.
    */
    public function setExcludeStates(?array $value ): void {
        $this->excludeStates = $value;
    }

    /**
     * Sets the includeStates property value. States in the scope of the policy. All is the only allowed value.
     *  @param array<string>|null $value Value to set for the includeStates property.
    */
    public function setIncludeStates(?array $value ): void {
        $this->includeStates = $value;
    }

}
