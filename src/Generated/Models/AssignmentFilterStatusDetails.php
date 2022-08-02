<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignmentFilterStatusDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<KeyValuePair>|null $deviceProperties Device properties used for filter evaluation during device check-in time.
    */
    private ?array $deviceProperties = null;
    
    /**
     * @var array<AssignmentFilterEvaluationSummary>|null $evalutionSummaries Evaluation result summaries for each filter associated to device and payload
    */
    private ?array $evalutionSummaries = null;
    
    /**
     * @var string|null $managedDeviceId Unique identifier for the device object.
    */
    private ?string $managedDeviceId = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $payloadId Unique identifier for payload object.
    */
    private ?string $payloadId = null;
    
    /**
     * @var string|null $userId Unique identifier for UserId object. Can be null
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new assignmentFilterStatusDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.assignmentFilterStatusDetails');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignmentFilterStatusDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignmentFilterStatusDetails {
        return new AssignmentFilterStatusDetails();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceProperties property value. Device properties used for filter evaluation during device check-in time.
     * @return array<KeyValuePair>|null
    */
    public function getDeviceProperties(): ?array {
        return $this->deviceProperties;
    }

    /**
     * Gets the evalutionSummaries property value. Evaluation result summaries for each filter associated to device and payload
     * @return array<AssignmentFilterEvaluationSummary>|null
    */
    public function getEvalutionSummaries(): ?array {
        return $this->evalutionSummaries;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceProperties' => function (ParseNode $n) use ($o) { $o->setDeviceProperties($n->getCollectionOfObjectValues(array(KeyValuePair::class, 'createFromDiscriminatorValue'))); },
            'evalutionSummaries' => function (ParseNode $n) use ($o) { $o->setEvalutionSummaries($n->getCollectionOfObjectValues(array(AssignmentFilterEvaluationSummary::class, 'createFromDiscriminatorValue'))); },
            'managedDeviceId' => function (ParseNode $n) use ($o) { $o->setManagedDeviceId($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'payloadId' => function (ParseNode $n) use ($o) { $o->setPayloadId($n->getStringValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the managedDeviceId property value. Unique identifier for the device object.
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->managedDeviceId;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the payloadId property value. Unique identifier for payload object.
     * @return string|null
    */
    public function getPayloadId(): ?string {
        return $this->payloadId;
    }

    /**
     * Gets the userId property value. Unique identifier for UserId object. Can be null
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('deviceProperties', $this->deviceProperties);
        $writer->writeCollectionOfObjectValues('evalutionSummaries', $this->evalutionSummaries);
        $writer->writeStringValue('managedDeviceId', $this->managedDeviceId);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('payloadId', $this->payloadId);
        $writer->writeStringValue('userId', $this->userId);
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
     * Sets the deviceProperties property value. Device properties used for filter evaluation during device check-in time.
     *  @param array<KeyValuePair>|null $value Value to set for the deviceProperties property.
    */
    public function setDeviceProperties(?array $value ): void {
        $this->deviceProperties = $value;
    }

    /**
     * Sets the evalutionSummaries property value. Evaluation result summaries for each filter associated to device and payload
     *  @param array<AssignmentFilterEvaluationSummary>|null $value Value to set for the evalutionSummaries property.
    */
    public function setEvalutionSummaries(?array $value ): void {
        $this->evalutionSummaries = $value;
    }

    /**
     * Sets the managedDeviceId property value. Unique identifier for the device object.
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value ): void {
        $this->managedDeviceId = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the payloadId property value. Unique identifier for payload object.
     *  @param string|null $value Value to set for the payloadId property.
    */
    public function setPayloadId(?string $value ): void {
        $this->payloadId = $value;
    }

    /**
     * Sets the userId property value. Unique identifier for UserId object. Can be null
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
