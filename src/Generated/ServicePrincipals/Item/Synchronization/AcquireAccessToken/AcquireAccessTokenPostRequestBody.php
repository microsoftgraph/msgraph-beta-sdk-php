<?php

namespace Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Synchronization\AcquireAccessToken;

use Microsoft\Graph\Beta\Generated\Models\SynchronizationSecretKeyStringValuePair;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AcquireAccessTokenPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<SynchronizationSecretKeyStringValuePair>|null $credentials The credentials property
    */
    private ?array $credentials = null;
    
    /**
     * Instantiates a new acquireAccessTokenPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AcquireAccessTokenPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AcquireAccessTokenPostRequestBody {
        return new AcquireAccessTokenPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
            'credentials' => function (ParseNode $n) use ($o) { $o->setCredentials($n->getCollectionOfObjectValues(array(SynchronizationSecretKeyStringValuePair::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('credentials', $this->credentials);
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
     * Sets the credentials property value. The credentials property
     *  @param array<SynchronizationSecretKeyStringValuePair>|null $value Value to set for the credentials property.
    */
    public function setCredentials(?array $value ): void {
        $this->credentials = $value;
    }

}
