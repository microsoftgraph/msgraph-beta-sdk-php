<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicies\SetScheduledRetireState;

use Microsoft\Graph\Beta\Generated\Models\ScheduledRetireState;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SetScheduledRetireStatePostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $managedDeviceIds The managedDeviceIds property
    */
    private ?array $managedDeviceIds = null;
    
    /**
     * @var ScheduledRetireState|null $state Cancel or confirm scheduled retire 
    */
    private ?ScheduledRetireState $state = null;
    
    /**
     * Instantiates a new setScheduledRetireStatePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetScheduledRetireStatePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SetScheduledRetireStatePostRequestBody {
        return new SetScheduledRetireStatePostRequestBody();
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
        return  [
            'managedDeviceIds' => function (ParseNode $n) use ($o) { $o->setManagedDeviceIds($n->getCollectionOfPrimitiveValues()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(ScheduledRetireState::class)); },
        ];
    }

    /**
     * Gets the managedDeviceIds property value. The managedDeviceIds property
     * @return array<string>|null
    */
    public function getManagedDeviceIds(): ?array {
        return $this->managedDeviceIds;
    }

    /**
     * Gets the state property value. Cancel or confirm scheduled retire 
     * @return ScheduledRetireState|null
    */
    public function getState(): ?ScheduledRetireState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('managedDeviceIds', $this->managedDeviceIds);
        $writer->writeEnumValue('state', $this->state);
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
     * Sets the managedDeviceIds property value. The managedDeviceIds property
     *  @param array<string>|null $value Value to set for the managedDeviceIds property.
    */
    public function setManagedDeviceIds(?array $value ): void {
        $this->managedDeviceIds = $value;
    }

    /**
     * Sets the state property value. Cancel or confirm scheduled retire 
     *  @param ScheduledRetireState|null $value Value to set for the state property.
    */
    public function setState(?ScheduledRetireState $value ): void {
        $this->state = $value;
    }

}
