<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ResourceAccessProfiles\QueryByPlatformType;

use Microsoft\Graph\Beta\Generated\Models\PolicyPlatformType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class QueryByPlatformTypePostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var PolicyPlatformType|null $platformType Supported platform types for policies.
    */
    private ?PolicyPlatformType $platformType = null;
    
    /**
     * Instantiates a new queryByPlatformTypePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return QueryByPlatformTypePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): QueryByPlatformTypePostRequestBody {
        return new QueryByPlatformTypePostRequestBody();
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
            'platformType' => function (ParseNode $n) use ($o) { $o->setPlatformType($n->getEnumValue(PolicyPlatformType::class)); },
        ];
    }

    /**
     * Gets the platformType property value. Supported platform types for policies.
     * @return PolicyPlatformType|null
    */
    public function getPlatformType(): ?PolicyPlatformType {
        return $this->platformType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('platformType', $this->platformType);
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
     * Sets the platformType property value. Supported platform types for policies.
     *  @param PolicyPlatformType|null $value Value to set for the platformType property.
    */
    public function setPlatformType(?PolicyPlatformType $value ): void {
        $this->platformType = $value;
    }

}
