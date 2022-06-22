<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GetAssignmentFiltersStatusDetails;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetAssignmentFiltersStatusDetailsPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $assignmentFilterIds The assignmentFilterIds property
    */
    private ?array $assignmentFilterIds = null;
    
    /**
     * @var string|null $managedDeviceId The managedDeviceId property
    */
    private ?string $managedDeviceId = null;
    
    /**
     * @var string|null $payloadId The payloadId property
    */
    private ?string $payloadId = null;
    
    /**
     * @var int|null $skip The skip property
    */
    private ?int $skip = null;
    
    /**
     * @var int|null $top The top property
    */
    private ?int $top = null;
    
    /**
     * @var string|null $userId The userId property
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new getAssignmentFiltersStatusDetailsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetAssignmentFiltersStatusDetailsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetAssignmentFiltersStatusDetailsPostRequestBody {
        return new GetAssignmentFiltersStatusDetailsPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignmentFilterIds property value. The assignmentFilterIds property
     * @return array<string>|null
    */
    public function getAssignmentFilterIds(): ?array {
        return $this->assignmentFilterIds;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignmentFilterIds' => function (ParseNode $n) use ($o) { $o->setAssignmentFilterIds($n->getCollectionOfPrimitiveValues()); },
            'managedDeviceId' => function (ParseNode $n) use ($o) { $o->setManagedDeviceId($n->getStringValue()); },
            'payloadId' => function (ParseNode $n) use ($o) { $o->setPayloadId($n->getStringValue()); },
            'skip' => function (ParseNode $n) use ($o) { $o->setSkip($n->getIntegerValue()); },
            'top' => function (ParseNode $n) use ($o) { $o->setTop($n->getIntegerValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the managedDeviceId property value. The managedDeviceId property
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->managedDeviceId;
    }

    /**
     * Gets the payloadId property value. The payloadId property
     * @return string|null
    */
    public function getPayloadId(): ?string {
        return $this->payloadId;
    }

    /**
     * Gets the skip property value. The skip property
     * @return int|null
    */
    public function getSkip(): ?int {
        return $this->skip;
    }

    /**
     * Gets the top property value. The top property
     * @return int|null
    */
    public function getTop(): ?int {
        return $this->top;
    }

    /**
     * Gets the userId property value. The userId property
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
        $writer->writeCollectionOfPrimitiveValues('assignmentFilterIds', $this->assignmentFilterIds);
        $writer->writeStringValue('managedDeviceId', $this->managedDeviceId);
        $writer->writeStringValue('payloadId', $this->payloadId);
        $writer->writeIntegerValue('skip', $this->skip);
        $writer->writeIntegerValue('top', $this->top);
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
     * Sets the assignmentFilterIds property value. The assignmentFilterIds property
     *  @param array<string>|null $value Value to set for the assignmentFilterIds property.
    */
    public function setAssignmentFilterIds(?array $value ): void {
        $this->assignmentFilterIds = $value;
    }

    /**
     * Sets the managedDeviceId property value. The managedDeviceId property
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value ): void {
        $this->managedDeviceId = $value;
    }

    /**
     * Sets the payloadId property value. The payloadId property
     *  @param string|null $value Value to set for the payloadId property.
    */
    public function setPayloadId(?string $value ): void {
        $this->payloadId = $value;
    }

    /**
     * Sets the skip property value. The skip property
     *  @param int|null $value Value to set for the skip property.
    */
    public function setSkip(?int $value ): void {
        $this->skip = $value;
    }

    /**
     * Sets the top property value. The top property
     *  @param int|null $value Value to set for the top property.
    */
    public function setTop(?int $value ): void {
        $this->top = $value;
    }

    /**
     * Sets the userId property value. The userId property
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
