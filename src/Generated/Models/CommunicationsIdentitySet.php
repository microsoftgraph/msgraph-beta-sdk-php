<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CommunicationsIdentitySet extends IdentitySet implements Parsable 
{
    /**
     * @var Identity|null $applicationInstance The application instance associated with this action.
    */
    private ?Identity $applicationInstance = null;
    
    /**
     * @var Identity|null $assertedIdentity An identity the participant would like to present itself as to the other participants in the call.
    */
    private ?Identity $assertedIdentity = null;
    
    /**
     * @var Identity|null $azureCommunicationServicesUser The Azure Communication Services user associated with this action.
    */
    private ?Identity $azureCommunicationServicesUser = null;
    
    /**
     * @var Identity|null $encrypted The encrypted user associated with this action.
    */
    private ?Identity $encrypted = null;
    
    /**
     * @var EndpointType|null $endpointType Type of endpoint the participant is using. Possible values are: default, voicemail, skypeForBusiness, skypeForBusinessVoipPhone and unknownFutureValue.
    */
    private ?EndpointType $endpointType = null;
    
    /**
     * @var Identity|null $guest The guest user associated with this action.
    */
    private ?Identity $guest = null;
    
    /**
     * @var Identity|null $onPremises The Skype for Business On-Premises user associated with this action.
    */
    private ?Identity $onPremises = null;
    
    /**
     * @var Identity|null $phone Inherited from identitySet. The phone user associated with this action.
    */
    private ?Identity $phone = null;
    
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
     * Gets the applicationInstance property value. The application instance associated with this action.
     * @return Identity|null
    */
    public function getApplicationInstance(): ?Identity {
        return $this->applicationInstance;
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
     * Gets the encrypted property value. The encrypted user associated with this action.
     * @return Identity|null
    */
    public function getEncrypted(): ?Identity {
        return $this->encrypted;
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
            'applicationInstance' => function (ParseNode $n) use ($o) { $o->setApplicationInstance($n->getObjectValue(array(Identity::class, 'createFromDiscriminatorValue'))); },
            'assertedIdentity' => function (ParseNode $n) use ($o) { $o->setAssertedIdentity($n->getObjectValue(array(Identity::class, 'createFromDiscriminatorValue'))); },
            'azureCommunicationServicesUser' => function (ParseNode $n) use ($o) { $o->setAzureCommunicationServicesUser($n->getObjectValue(array(Identity::class, 'createFromDiscriminatorValue'))); },
            'encrypted' => function (ParseNode $n) use ($o) { $o->setEncrypted($n->getObjectValue(array(Identity::class, 'createFromDiscriminatorValue'))); },
            'endpointType' => function (ParseNode $n) use ($o) { $o->setEndpointType($n->getEnumValue(EndpointType::class)); },
            'guest' => function (ParseNode $n) use ($o) { $o->setGuest($n->getObjectValue(array(Identity::class, 'createFromDiscriminatorValue'))); },
            'onPremises' => function (ParseNode $n) use ($o) { $o->setOnPremises($n->getObjectValue(array(Identity::class, 'createFromDiscriminatorValue'))); },
            'phone' => function (ParseNode $n) use ($o) { $o->setPhone($n->getObjectValue(array(Identity::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the guest property value. The guest user associated with this action.
     * @return Identity|null
    */
    public function getGuest(): ?Identity {
        return $this->guest;
    }

    /**
     * Gets the onPremises property value. The Skype for Business On-Premises user associated with this action.
     * @return Identity|null
    */
    public function getOnPremises(): ?Identity {
        return $this->onPremises;
    }

    /**
     * Gets the phone property value. Inherited from identitySet. The phone user associated with this action.
     * @return Identity|null
    */
    public function getPhone(): ?Identity {
        return $this->phone;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('applicationInstance', $this->applicationInstance);
        $writer->writeObjectValue('assertedIdentity', $this->assertedIdentity);
        $writer->writeObjectValue('azureCommunicationServicesUser', $this->azureCommunicationServicesUser);
        $writer->writeObjectValue('encrypted', $this->encrypted);
        $writer->writeEnumValue('endpointType', $this->endpointType);
        $writer->writeObjectValue('guest', $this->guest);
        $writer->writeObjectValue('onPremises', $this->onPremises);
        $writer->writeObjectValue('phone', $this->phone);
    }

    /**
     * Sets the applicationInstance property value. The application instance associated with this action.
     *  @param Identity|null $value Value to set for the applicationInstance property.
    */
    public function setApplicationInstance(?Identity $value ): void {
        $this->applicationInstance = $value;
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
     * Sets the encrypted property value. The encrypted user associated with this action.
     *  @param Identity|null $value Value to set for the encrypted property.
    */
    public function setEncrypted(?Identity $value ): void {
        $this->encrypted = $value;
    }

    /**
     * Sets the endpointType property value. Type of endpoint the participant is using. Possible values are: default, voicemail, skypeForBusiness, skypeForBusinessVoipPhone and unknownFutureValue.
     *  @param EndpointType|null $value Value to set for the endpointType property.
    */
    public function setEndpointType(?EndpointType $value ): void {
        $this->endpointType = $value;
    }

    /**
     * Sets the guest property value. The guest user associated with this action.
     *  @param Identity|null $value Value to set for the guest property.
    */
    public function setGuest(?Identity $value ): void {
        $this->guest = $value;
    }

    /**
     * Sets the onPremises property value. The Skype for Business On-Premises user associated with this action.
     *  @param Identity|null $value Value to set for the onPremises property.
    */
    public function setOnPremises(?Identity $value ): void {
        $this->onPremises = $value;
    }

    /**
     * Sets the phone property value. Inherited from identitySet. The phone user associated with this action.
     *  @param Identity|null $value Value to set for the phone property.
    */
    public function setPhone(?Identity $value ): void {
        $this->phone = $value;
    }

}
