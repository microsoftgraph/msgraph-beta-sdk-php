<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EventPropagationResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $location The name of the specific location in the workload associated with the event.
    */
    private ?string $location = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $serviceName The name of the workload associated with the event.
    */
    private ?string $serviceName = null;
    
    /**
     * @var EventPropagationStatus|null $status Indicates the status of the event creation request. The possible values are: none, inProcessing, failed, success.
    */
    private ?EventPropagationStatus $status = null;
    
    /**
     * @var string|null $statusInformation Additional information about the status of the event creation request.
    */
    private ?string $statusInformation = null;
    
    /**
     * Instantiates a new eventPropagationResult and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.security.eventPropagationResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EventPropagationResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EventPropagationResult {
        return new EventPropagationResult();
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
            'location' => function (ParseNode $n) use ($o) { $o->setLocation($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'serviceName' => function (ParseNode $n) use ($o) { $o->setServiceName($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(EventPropagationStatus::class)); },
            'statusInformation' => function (ParseNode $n) use ($o) { $o->setStatusInformation($n->getStringValue()); },
        ];
    }

    /**
     * Gets the location property value. The name of the specific location in the workload associated with the event.
     * @return string|null
    */
    public function getLocation(): ?string {
        return $this->location;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the serviceName property value. The name of the workload associated with the event.
     * @return string|null
    */
    public function getServiceName(): ?string {
        return $this->serviceName;
    }

    /**
     * Gets the status property value. Indicates the status of the event creation request. The possible values are: none, inProcessing, failed, success.
     * @return EventPropagationStatus|null
    */
    public function getStatus(): ?EventPropagationStatus {
        return $this->status;
    }

    /**
     * Gets the statusInformation property value. Additional information about the status of the event creation request.
     * @return string|null
    */
    public function getStatusInformation(): ?string {
        return $this->statusInformation;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('location', $this->location);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('serviceName', $this->serviceName);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('statusInformation', $this->statusInformation);
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
     * Sets the location property value. The name of the specific location in the workload associated with the event.
     *  @param string|null $value Value to set for the location property.
    */
    public function setLocation(?string $value ): void {
        $this->location = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the serviceName property value. The name of the workload associated with the event.
     *  @param string|null $value Value to set for the serviceName property.
    */
    public function setServiceName(?string $value ): void {
        $this->serviceName = $value;
    }

    /**
     * Sets the status property value. Indicates the status of the event creation request. The possible values are: none, inProcessing, failed, success.
     *  @param EventPropagationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?EventPropagationStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the statusInformation property value. Additional information about the status of the event creation request.
     *  @param string|null $value Value to set for the statusInformation property.
    */
    public function setStatusInformation(?string $value ): void {
        $this->statusInformation = $value;
    }

}
