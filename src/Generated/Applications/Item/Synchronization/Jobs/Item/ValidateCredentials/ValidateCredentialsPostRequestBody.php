<?php

namespace Microsoft\Graph\Beta\Generated\Applications\Item\Synchronization\Jobs\Item\ValidateCredentials;

use Microsoft\Graph\Beta\Generated\Models\SynchronizationSecretKeyStringValuePair;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ValidateCredentialsPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $applicationIdentifier The applicationIdentifier property
    */
    private ?string $applicationIdentifier = null;
    
    /**
     * @var array<SynchronizationSecretKeyStringValuePair>|null $credentials The credentials property
    */
    private ?array $credentials = null;
    
    /**
     * @var string|null $templateId The templateId property
    */
    private ?string $templateId = null;
    
    /**
     * @var bool|null $useSavedCredentials The useSavedCredentials property
    */
    private ?bool $useSavedCredentials = null;
    
    /**
     * Instantiates a new validateCredentialsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ValidateCredentialsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ValidateCredentialsPostRequestBody {
        return new ValidateCredentialsPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applicationIdentifier property value. The applicationIdentifier property
     * @return string|null
    */
    public function getApplicationIdentifier(): ?string {
        return $this->applicationIdentifier;
    }

    /**
     * Gets the credentials property value. The credentials property
     * @return array<SynchronizationSecretKeyStringValuePair>|null
    */
    public function getCredentials(): ?array {
        return $this->credentials;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicationIdentifier' => function (ParseNode $n) use ($o) { $o->setApplicationIdentifier($n->getStringValue()); },
            'credentials' => function (ParseNode $n) use ($o) { $o->setCredentials($n->getCollectionOfObjectValues(array(SynchronizationSecretKeyStringValuePair::class, 'createFromDiscriminatorValue'))); },
            'templateId' => function (ParseNode $n) use ($o) { $o->setTemplateId($n->getStringValue()); },
            'useSavedCredentials' => function (ParseNode $n) use ($o) { $o->setUseSavedCredentials($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the templateId property value. The templateId property
     * @return string|null
    */
    public function getTemplateId(): ?string {
        return $this->templateId;
    }

    /**
     * Gets the useSavedCredentials property value. The useSavedCredentials property
     * @return bool|null
    */
    public function getUseSavedCredentials(): ?bool {
        return $this->useSavedCredentials;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('applicationIdentifier', $this->applicationIdentifier);
        $writer->writeCollectionOfObjectValues('credentials', $this->credentials);
        $writer->writeStringValue('templateId', $this->templateId);
        $writer->writeBooleanValue('useSavedCredentials', $this->useSavedCredentials);
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
     * Sets the applicationIdentifier property value. The applicationIdentifier property
     *  @param string|null $value Value to set for the applicationIdentifier property.
    */
    public function setApplicationIdentifier(?string $value ): void {
        $this->applicationIdentifier = $value;
    }

    /**
     * Sets the credentials property value. The credentials property
     *  @param array<SynchronizationSecretKeyStringValuePair>|null $value Value to set for the credentials property.
    */
    public function setCredentials(?array $value ): void {
        $this->credentials = $value;
    }

    /**
     * Sets the templateId property value. The templateId property
     *  @param string|null $value Value to set for the templateId property.
    */
    public function setTemplateId(?string $value ): void {
        $this->templateId = $value;
    }

    /**
     * Sets the useSavedCredentials property value. The useSavedCredentials property
     *  @param bool|null $value Value to set for the useSavedCredentials property.
    */
    public function setUseSavedCredentials(?bool $value ): void {
        $this->useSavedCredentials = $value;
    }

}
