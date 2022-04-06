<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAccountEnterpriseSettings\CompleteSignup;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CompleteSignupRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $enterpriseToken The enterpriseToken property */
    private ?string $enterpriseToken = null;
    
    /**
     * Instantiates a new completeSignupRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CompleteSignupRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CompleteSignupRequestBody {
        return new CompleteSignupRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the enterpriseToken property value. The enterpriseToken property
     * @return string|null
    */
    public function getEnterpriseToken(): ?string {
        return $this->enterpriseToken;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'enterpriseToken' => function (self $o, ParseNode $n) { $o->setEnterpriseToken($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('enterpriseToken', $this->enterpriseToken);
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
     * Sets the enterpriseToken property value. The enterpriseToken property
     *  @param string|null $value Value to set for the enterpriseToken property.
    */
    public function setEnterpriseToken(?string $value ): void {
        $this->enterpriseToken = $value;
    }

}
