<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\OnPremisesConnections\Item\UpdateAdDomainPassword;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateAdDomainPasswordPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $adDomainPassword The adDomainPassword property
    */
    private ?string $adDomainPassword = null;
    
    /**
     * Instantiates a new updateAdDomainPasswordPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateAdDomainPasswordPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateAdDomainPasswordPostRequestBody {
        return new UpdateAdDomainPasswordPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the adDomainPassword property value. The adDomainPassword property
     * @return string|null
    */
    public function getAdDomainPassword(): ?string {
        return $this->adDomainPassword;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adDomainPassword' => function (ParseNode $n) use ($o) { $o->setAdDomainPassword($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('adDomainPassword', $this->adDomainPassword);
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
     * Sets the adDomainPassword property value. The adDomainPassword property
     *  @param string|null $value Value to set for the adDomainPassword property.
    */
    public function setAdDomainPassword(?string $value ): void {
        $this->adDomainPassword = $value;
    }

}
