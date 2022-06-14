<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\UploadDepToken;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UploadDepTokenPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $appleId The appleId property
    */
    private ?string $appleId = null;
    
    /**
     * @var string|null $depToken The depToken property
    */
    private ?string $depToken = null;
    
    /**
     * Instantiates a new uploadDepTokenPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UploadDepTokenPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UploadDepTokenPostRequestBody {
        return new UploadDepTokenPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appleId property value. The appleId property
     * @return string|null
    */
    public function getAppleId(): ?string {
        return $this->appleId;
    }

    /**
     * Gets the depToken property value. The depToken property
     * @return string|null
    */
    public function getDepToken(): ?string {
        return $this->depToken;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appleId' => function (ParseNode $n) use ($o) { $o->setAppleId($n->getStringValue()); },
            'depToken' => function (ParseNode $n) use ($o) { $o->setDepToken($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('appleId', $this->appleId);
        $writer->writeStringValue('depToken', $this->depToken);
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
     * Sets the appleId property value. The appleId property
     *  @param string|null $value Value to set for the appleId property.
    */
    public function setAppleId(?string $value ): void {
        $this->appleId = $value;
    }

    /**
     * Sets the depToken property value. The depToken property
     *  @param string|null $value Value to set for the depToken property.
    */
    public function setDepToken(?string $value ): void {
        $this->depToken = $value;
    }

}
