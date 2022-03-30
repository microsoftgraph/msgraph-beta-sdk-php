<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GetAssignmentFiltersStatusDetails;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetAssignmentFiltersStatusDetailsRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $assignmentFilterIds  */
    private ?array $assignmentFilterIds = null;
    
    /** @var string|null $managedDeviceId  */
    private ?string $managedDeviceId = null;
    
    /** @var string|null $payloadId  */
    private ?string $payloadId = null;
    
    /** @var int|null $skip  */
    private ?int $skip = null;
    
    /** @var int|null $top  */
    private ?int $top = null;
    
    /** @var string|null $userId  */
    private ?string $userId = null;
    
    /**
     * Instantiates a new getAssignmentFiltersStatusDetailsRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetAssignmentFiltersStatusDetailsRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): GetAssignmentFiltersStatusDetailsRequestBody {
        return new GetAssignmentFiltersStatusDetailsRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignmentFilterIds property value. 
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
        return  [
            'assignmentFilterIds' => function (self $o, ParseNode $n) { $o->setAssignmentFilterIds($n->getCollectionOfPrimitiveValues()); },
            'managedDeviceId' => function (self $o, ParseNode $n) { $o->setManagedDeviceId($n->getStringValue()); },
            'payloadId' => function (self $o, ParseNode $n) { $o->setPayloadId($n->getStringValue()); },
            'skip' => function (self $o, ParseNode $n) { $o->setSkip($n->getIntegerValue()); },
            'top' => function (self $o, ParseNode $n) { $o->setTop($n->getIntegerValue()); },
            'userId' => function (self $o, ParseNode $n) { $o->setUserId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the managedDeviceId property value. 
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->managedDeviceId;
    }

    /**
     * Gets the payloadId property value. 
     * @return string|null
    */
    public function getPayloadId(): ?string {
        return $this->payloadId;
    }

    /**
     * Gets the skip property value. 
     * @return int|null
    */
    public function getSkip(): ?int {
        return $this->skip;
    }

    /**
     * Gets the top property value. 
     * @return int|null
    */
    public function getTop(): ?int {
        return $this->top;
    }

    /**
     * Gets the userId property value. 
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
     * Sets the assignmentFilterIds property value. 
     *  @param array<string>|null $value Value to set for the assignmentFilterIds property.
    */
    public function setAssignmentFilterIds(?array $value ): void {
        $this->assignmentFilterIds = $value;
    }

    /**
     * Sets the managedDeviceId property value. 
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value ): void {
        $this->managedDeviceId = $value;
    }

    /**
     * Sets the payloadId property value. 
     *  @param string|null $value Value to set for the payloadId property.
    */
    public function setPayloadId(?string $value ): void {
        $this->payloadId = $value;
    }

    /**
     * Sets the skip property value. 
     *  @param int|null $value Value to set for the skip property.
    */
    public function setSkip(?int $value ): void {
        $this->skip = $value;
    }

    /**
     * Sets the top property value. 
     *  @param int|null $value Value to set for the top property.
    */
    public function setTop(?int $value ): void {
        $this->top = $value;
    }

    /**
     * Sets the userId property value. 
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
