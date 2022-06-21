<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PasswordSingleSignOnCredentialSet implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<Credential>|null $credentials A list of credential objects that define the complete sign in flow. */
    private ?array $credentials = null;
    
    /** @var string|null $id The ID of the user or group this credential set belongs to. */
    private ?string $id = null;
    
    /**
     * Instantiates a new passwordSingleSignOnCredentialSet and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PasswordSingleSignOnCredentialSet
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PasswordSingleSignOnCredentialSet {
        return new PasswordSingleSignOnCredentialSet();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the credentials property value. A list of credential objects that define the complete sign in flow.
     * @return array<Credential>|null
    */
    public function getCredentials(): ?array {
        return $this->credentials;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'credentials' => function (self $o, ParseNode $n) { $o->setCredentials($n->getCollectionOfObjectValues(Credential::class)); },
            'id' => function (self $o, ParseNode $n) { $o->setId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the id property value. The ID of the user or group this credential set belongs to.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('credentials', $this->credentials);
        $writer->writeStringValue('id', $this->id);
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
     * Sets the credentials property value. A list of credential objects that define the complete sign in flow.
     *  @param array<Credential>|null $value Value to set for the credentials property.
    */
    public function setCredentials(?array $value ): void {
        $this->credentials = $value;
    }

    /**
     * Sets the id property value. The ID of the user or group this credential set belongs to.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

}
