<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignmentFilterEvaluateRequest implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $orderBy Order the devices should be sorted in. Default is ascending on device name. */
    private ?array $orderBy = null;
    
    /** @var DevicePlatformType|null $platform Platform type of the devices on which the Assignment Filter will be applicable. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown. */
    private ?DevicePlatformType $platform = null;
    
    /** @var string|null $rule Rule definition of the Assignment Filter. */
    private ?string $rule = null;
    
    /** @var int|null $skip Number of records to skip. Default value is 0 */
    private ?int $skip = null;
    
    /** @var int|null $top Limit of records per request. Default value is 100, if provided less than 0 or greater than 100 */
    private ?int $top = null;
    
    /**
     * Instantiates a new assignmentFilterEvaluateRequest and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignmentFilterEvaluateRequest
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AssignmentFilterEvaluateRequest {
        return new AssignmentFilterEvaluateRequest();
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
        return  [
            'orderBy' => function (self $o, ParseNode $n) { $o->setOrderBy($n->getCollectionOfPrimitiveValues()); },
            'platform' => function (self $o, ParseNode $n) { $o->setPlatform($n->getEnumValue(DevicePlatformType::class)); },
            'rule' => function (self $o, ParseNode $n) { $o->setRule($n->getStringValue()); },
            'skip' => function (self $o, ParseNode $n) { $o->setSkip($n->getIntegerValue()); },
            'top' => function (self $o, ParseNode $n) { $o->setTop($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the orderBy property value. Order the devices should be sorted in. Default is ascending on device name.
     * @return array<string>|null
    */
    public function getOrderBy(): ?array {
        return $this->orderBy;
    }

    /**
     * Gets the platform property value. Platform type of the devices on which the Assignment Filter will be applicable. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown.
     * @return DevicePlatformType|null
    */
    public function getPlatform(): ?DevicePlatformType {
        return $this->platform;
    }

    /**
     * Gets the rule property value. Rule definition of the Assignment Filter.
     * @return string|null
    */
    public function getRule(): ?string {
        return $this->rule;
    }

    /**
     * Gets the skip property value. Number of records to skip. Default value is 0
     * @return int|null
    */
    public function getSkip(): ?int {
        return $this->skip;
    }

    /**
     * Gets the top property value. Limit of records per request. Default value is 100, if provided less than 0 or greater than 100
     * @return int|null
    */
    public function getTop(): ?int {
        return $this->top;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('orderBy', $this->orderBy);
        $writer->writeEnumValue('platform', $this->platform);
        $writer->writeStringValue('rule', $this->rule);
        $writer->writeIntegerValue('skip', $this->skip);
        $writer->writeIntegerValue('top', $this->top);
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
     * Sets the orderBy property value. Order the devices should be sorted in. Default is ascending on device name.
     *  @param array<string>|null $value Value to set for the orderBy property.
    */
    public function setOrderBy(?array $value ): void {
        $this->orderBy = $value;
    }

    /**
     * Sets the platform property value. Platform type of the devices on which the Assignment Filter will be applicable. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown.
     *  @param DevicePlatformType|null $value Value to set for the platform property.
    */
    public function setPlatform(?DevicePlatformType $value ): void {
        $this->platform = $value;
    }

    /**
     * Sets the rule property value. Rule definition of the Assignment Filter.
     *  @param string|null $value Value to set for the rule property.
    */
    public function setRule(?string $value ): void {
        $this->rule = $value;
    }

    /**
     * Sets the skip property value. Number of records to skip. Default value is 0
     *  @param int|null $value Value to set for the skip property.
    */
    public function setSkip(?int $value ): void {
        $this->skip = $value;
    }

    /**
     * Sets the top property value. Limit of records per request. Default value is 100, if provided less than 0 or greater than 100
     *  @param int|null $value Value to set for the top property.
    */
    public function setTop(?int $value ): void {
        $this->top = $value;
    }

}
