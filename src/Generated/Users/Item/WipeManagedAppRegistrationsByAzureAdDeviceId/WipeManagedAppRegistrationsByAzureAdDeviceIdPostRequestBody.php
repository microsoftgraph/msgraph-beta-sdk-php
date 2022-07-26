<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\WipeManagedAppRegistrationsByAzureAdDeviceId;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WipeManagedAppRegistrationsByAzureAdDeviceIdPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $azureAdDeviceId The azureAdDeviceId property
    */
    private ?string $azureAdDeviceId = null;
    
    /**
     * Instantiates a new wipeManagedAppRegistrationsByAzureAdDeviceIdPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WipeManagedAppRegistrationsByAzureAdDeviceIdPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WipeManagedAppRegistrationsByAzureAdDeviceIdPostRequestBody {
        return new WipeManagedAppRegistrationsByAzureAdDeviceIdPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the azureAdDeviceId property value. The azureAdDeviceId property
     * @return string|null
    */
    public function getAzureAdDeviceId(): ?string {
        return $this->azureAdDeviceId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'azureAdDeviceId' => function (ParseNode $n) use ($o) { $o->setAzureAdDeviceId($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('azureAdDeviceId', $this->azureAdDeviceId);
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
     * Sets the azureAdDeviceId property value. The azureAdDeviceId property
     *  @param string|null $value Value to set for the azureAdDeviceId property.
    */
    public function setAzureAdDeviceId(?string $value ): void {
        $this->azureAdDeviceId = $value;
    }

}
