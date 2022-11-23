<?php

namespace Microsoft\Graph\Beta\Generated\Identity\CustomAuthenticationExtensions\ValidateAuthenticationConfiguration;

use Microsoft\Graph\Beta\Generated\Models\CustomExtensionAuthenticationConfiguration;
use Microsoft\Graph\Beta\Generated\Models\CustomExtensionEndpointConfiguration;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ValidateAuthenticationConfigurationPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new validateAuthenticationConfigurationPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
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
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the authenticationConfiguration property value. The authenticationConfiguration property
     * @return CustomExtensionAuthenticationConfiguration|null
    */
    public function getAuthenticationConfiguration(): ?CustomExtensionAuthenticationConfiguration {
        return $this->getBackingStore()->get('authenticationConfiguration');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the endpointConfiguration property value. The endpointConfiguration property
     * @return CustomExtensionEndpointConfiguration|null
    */
    public function getEndpointConfiguration(): ?CustomExtensionEndpointConfiguration {
        return $this->getBackingStore()->get('endpointConfiguration');
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
        $writer->writeObjectValue('authenticationConfiguration', $this->getAuthenticationConfiguration());
        $writer->writeObjectValue('endpointConfiguration', $this->getEndpointConfiguration());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the authenticationConfiguration property value. The authenticationConfiguration property
     *  @param CustomExtensionAuthenticationConfiguration|null $value Value to set for the authenticationConfiguration property.
    */
    public function setAuthenticationConfiguration(?CustomExtensionAuthenticationConfiguration $value): void {
        $this->getBackingStore()->set('authenticationConfiguration', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the endpointConfiguration property value. The endpointConfiguration property
     *  @param CustomExtensionEndpointConfiguration|null $value Value to set for the endpointConfiguration property.
    */
    public function setEndpointConfiguration(?CustomExtensionEndpointConfiguration $value): void {
        $this->getBackingStore()->set('endpointConfiguration', $value);
    }

}
