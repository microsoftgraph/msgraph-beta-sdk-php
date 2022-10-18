<?php

namespace Microsoft\Graph\Beta\Generated\Identity\CustomAuthenticationExtensions\ValidateAuthenticationConfiguration;

use Microsoft\Graph\Beta\Generated\Models\CustomExtensionAuthenticationConfiguration;
use Microsoft\Graph\Beta\Generated\Models\CustomExtensionEndpointConfiguration;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ValidateAuthenticationConfigurationPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var CustomExtensionAuthenticationConfiguration|null $authenticationConfiguration The authenticationConfiguration property
    */
    private ?CustomExtensionAuthenticationConfiguration $authenticationConfiguration = null;
    
    /**
     * @var CustomExtensionEndpointConfiguration|null $endpointConfiguration The endpointConfiguration property
    */
    private ?CustomExtensionEndpointConfiguration $endpointConfiguration = null;
    
    /**
     * Instantiates a new validateAuthenticationConfigurationPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ValidateAuthenticationConfigurationPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ValidateAuthenticationConfigurationPostRequestBody {
        return new ValidateAuthenticationConfigurationPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the authenticationConfiguration property value. The authenticationConfiguration property
     * @return CustomExtensionAuthenticationConfiguration|null
    */
    public function getAuthenticationConfiguration(): ?CustomExtensionAuthenticationConfiguration {
        return $this->authenticationConfiguration;
    }

    /**
     * Gets the endpointConfiguration property value. The endpointConfiguration property
     * @return CustomExtensionEndpointConfiguration|null
    */
    public function getEndpointConfiguration(): ?CustomExtensionEndpointConfiguration {
        return $this->endpointConfiguration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authenticationConfiguration' => fn(ParseNode $n) => $o->setAuthenticationConfiguration($n->getObjectValue([CustomExtensionAuthenticationConfiguration::class, 'createFromDiscriminatorValue'])),
            'endpointConfiguration' => fn(ParseNode $n) => $o->setEndpointConfiguration($n->getObjectValue([CustomExtensionEndpointConfiguration::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('authenticationConfiguration', $this->authenticationConfiguration);
        $writer->writeObjectValue('endpointConfiguration', $this->endpointConfiguration);
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
     * Sets the authenticationConfiguration property value. The authenticationConfiguration property
     *  @param CustomExtensionAuthenticationConfiguration|null $value Value to set for the authenticationConfiguration property.
    */
    public function setAuthenticationConfiguration(?CustomExtensionAuthenticationConfiguration $value ): void {
        $this->authenticationConfiguration = $value;
    }

    /**
     * Sets the endpointConfiguration property value. The endpointConfiguration property
     *  @param CustomExtensionEndpointConfiguration|null $value Value to set for the endpointConfiguration property.
    */
    public function setEndpointConfiguration(?CustomExtensionEndpointConfiguration $value ): void {
        $this->endpointConfiguration = $value;
    }

}
