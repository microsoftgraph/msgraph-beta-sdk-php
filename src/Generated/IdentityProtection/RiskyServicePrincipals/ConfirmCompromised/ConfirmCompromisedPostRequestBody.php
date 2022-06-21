<?php

namespace Microsoft\Graph\Beta\Generated\IdentityProtection\RiskyServicePrincipals\ConfirmCompromised;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConfirmCompromisedPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $servicePrincipalIds The servicePrincipalIds property
    */
    private ?array $servicePrincipalIds = null;
    
    /**
     * Instantiates a new confirmCompromisedPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConfirmCompromisedPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConfirmCompromisedPostRequestBody {
        return new ConfirmCompromisedPostRequestBody();
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
            'servicePrincipalIds' => function (ParseNode $n) use ($o) { $o->setServicePrincipalIds($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the servicePrincipalIds property value. The servicePrincipalIds property
     * @return array<string>|null
    */
    public function getServicePrincipalIds(): ?array {
        return $this->servicePrincipalIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('servicePrincipalIds', $this->servicePrincipalIds);
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
     * Sets the servicePrincipalIds property value. The servicePrincipalIds property
     *  @param array<string>|null $value Value to set for the servicePrincipalIds property.
    */
    public function setServicePrincipalIds(?array $value ): void {
        $this->servicePrincipalIds = $value;
    }

}
