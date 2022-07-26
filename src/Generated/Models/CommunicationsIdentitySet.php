<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CommunicationsIdentitySet extends IdentitySet implements Parsable 
{
    /**
     * @var Identity|null $assertedIdentity An identity the participant would like to present itself as to the other participants in the call.
    */
    private ?Identity $assertedIdentity = null;
    
    /**
     * @var Identity|null $azureCommunicationServicesUser The Azure Communication Services user associated with this action.
    */
    private ?Identity $azureCommunicationServicesUser = null;
    
    /**
     * @var EndpointType|null $endpointType Type of endpoint the participant is using. Possible values are: default, voicemail, skypeForBusiness, skypeForBusinessVoipPhone and unknownFutureValue.
    */
    private ?EndpointType $endpointType = null;
    
    /**
     * Instantiates a new CommunicationsIdentitySet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.communicationsIdentitySet');
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
     * Gets the assertedIdentity property value. An identity the participant would like to present itself as to the other participants in the call.
     * @return Identity|null
    */
    public function getAssertedIdentity(): ?Identity {
        return $this->assertedIdentity;
    }

    /**
     * Gets the azureCommunicationServicesUser property value. The Azure Communication Services user associated with this action.
     * @return Identity|null
    */
    public function getAzureCommunicationServicesUser(): ?Identity {
        return $this->azureCommunicationServicesUser;
    }

    /**
     * Gets the endpointType property value. Type of endpoint the participant is using. Possible values are: default, voicemail, skypeForBusiness, skypeForBusinessVoipPhone and unknownFutureValue.
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
    }

    /**
     * Sets the assertedIdentity property value. An identity the participant would like to present itself as to the other participants in the call.
     *  @param Identity|null $value Value to set for the assertedIdentity property.
    */
    public function setAssertedIdentity(?Identity $value ): void {
        $this->assertedIdentity = $value;
    }

    /**
     * Sets the azureCommunicationServicesUser property value. The Azure Communication Services user associated with this action.
     *  @param Identity|null $value Value to set for the azureCommunicationServicesUser property.
    */
    public function setAzureCommunicationServicesUser(?Identity $value ): void {
        $this->azureCommunicationServicesUser = $value;
    }

    /**
     * Sets the endpointType property value. Type of endpoint the participant is using. Possible values are: default, voicemail, skypeForBusiness, skypeForBusinessVoipPhone and unknownFutureValue.
     *  @param EndpointType|null $value Value to set for the endpointType property.
    */
    public function setEndpointType(?EndpointType $value ): void {
        $this->endpointType = $value;
    }

}
