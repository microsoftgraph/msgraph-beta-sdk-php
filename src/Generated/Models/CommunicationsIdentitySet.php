<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CommunicationsIdentitySet extends IdentitySet implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Identity|null $assertedIdentity The assertedIdentity property
    */
    private ?Identity $assertedIdentity = null;
    
    /**
     * @var Identity|null $azureCommunicationServicesUser The azureCommunicationServicesUser property
    */
    private ?Identity $azureCommunicationServicesUser = null;
    
    /**
     * @var EndpointType|null $endpointType The endpointType property
    */
    private ?EndpointType $endpointType = null;
    
    /**
     * Instantiates a new CommunicationsIdentitySet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CommunicationsIdentitySet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CommunicationsIdentitySet {
        return new CommunicationsIdentitySet();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assertedIdentity property value. The assertedIdentity property
     * @return Identity|null
    */
    public function getAssertedIdentity(): ?Identity {
        return $this->assertedIdentity;
    }

    /**
     * Gets the azureCommunicationServicesUser property value. The azureCommunicationServicesUser property
     * @return Identity|null
    */
    public function getAzureCommunicationServicesUser(): ?Identity {
        return $this->azureCommunicationServicesUser;
    }

    /**
     * Gets the endpointType property value. The endpointType property
     * @return EndpointType|null
    */
    public function getEndpointType(): ?EndpointType {
        return $this->endpointType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assertedIdentity' => function (ParseNode $n) use ($o) { $o->setAssertedIdentity($n->getObjectValue(array(Identity::class, 'createFromDiscriminatorValue'))); },
            'azureCommunicationServicesUser' => function (ParseNode $n) use ($o) { $o->setAzureCommunicationServicesUser($n->getObjectValue(array(Identity::class, 'createFromDiscriminatorValue'))); },
            'endpointType' => function (ParseNode $n) use ($o) { $o->setEndpointType($n->getEnumValue(EndpointType::class)); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('assertedIdentity', $this->assertedIdentity);
        $writer->writeObjectValue('azureCommunicationServicesUser', $this->azureCommunicationServicesUser);
        $writer->writeEnumValue('endpointType', $this->endpointType);
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
     * Sets the assertedIdentity property value. The assertedIdentity property
     *  @param Identity|null $value Value to set for the assertedIdentity property.
    */
    public function setAssertedIdentity(?Identity $value ): void {
        $this->assertedIdentity = $value;
    }

    /**
     * Sets the azureCommunicationServicesUser property value. The azureCommunicationServicesUser property
     *  @param Identity|null $value Value to set for the azureCommunicationServicesUser property.
    */
    public function setAzureCommunicationServicesUser(?Identity $value ): void {
        $this->azureCommunicationServicesUser = $value;
    }

    /**
     * Sets the endpointType property value. The endpointType property
     *  @param EndpointType|null $value Value to set for the endpointType property.
    */
    public function setEndpointType(?EndpointType $value ): void {
        $this->endpointType = $value;
    }

}
