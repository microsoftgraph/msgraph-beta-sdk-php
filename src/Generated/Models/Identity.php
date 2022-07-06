<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Identity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $displayName The identity's display name. Note that this may not always be available or up to date. For example, if a user changes their display name, the API may show the new value in a future response, but the items associated with the user won't show up as having changed when using delta.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $id Unique identifier for the identity.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new identity and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Identity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Identity {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.azureCommunicationServicesUserIdentity': return new AzureCommunicationServicesUserIdentity();
                case '#microsoft.graph.communicationsApplicationIdentity': return new CommunicationsApplicationIdentity();
                case '#microsoft.graph.communicationsApplicationInstanceIdentity': return new CommunicationsApplicationInstanceIdentity();
                case '#microsoft.graph.communicationsEncryptedIdentity': return new CommunicationsEncryptedIdentity();
                case '#microsoft.graph.communicationsGuestIdentity': return new CommunicationsGuestIdentity();
                case '#microsoft.graph.communicationsPhoneIdentity': return new CommunicationsPhoneIdentity();
                case '#microsoft.graph.communicationsUserIdentity': return new CommunicationsUserIdentity();
                case '#microsoft.graph.emailIdentity': return new EmailIdentity();
                case '#microsoft.graph.initiator': return new Initiator();
                case '#microsoft.graph.programResource': return new ProgramResource();
                case '#microsoft.graph.provisionedIdentity': return new ProvisionedIdentity();
                case '#microsoft.graph.provisioningServicePrincipal': return new ProvisioningServicePrincipal();
                case '#microsoft.graph.provisioningSystem': return new ProvisioningSystem();
                case '#microsoft.graph.servicePrincipalIdentity': return new ServicePrincipalIdentity();
                case '#microsoft.graph.sharePointIdentity': return new SharePointIdentity();
                case '#microsoft.graph.teamworkApplicationIdentity': return new TeamworkApplicationIdentity();
                case '#microsoft.graph.teamworkConversationIdentity': return new TeamworkConversationIdentity();
                case '#microsoft.graph.teamworkTagIdentity': return new TeamworkTagIdentity();
                case '#microsoft.graph.teamworkUserIdentity': return new TeamworkUserIdentity();
                case '#microsoft.graph.userIdentity': return new UserIdentity();
            }
        }
        return new Identity();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. The identity's display name. Note that this may not always be available or up to date. For example, if a user changes their display name, the API may show the new value in a future response, but the items associated with the user won't show up as having changed when using delta.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'id' => function (ParseNode $n) use ($o) { $o->setId($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdatatype($n->getStringValue()); },
        ];
    }

    /**
     * Gets the id property value. Unique identifier for the identity.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the @odata.type property value. The type property
     * @return string|null
    */
    public function getOdatatype(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('id', $this->id);
        $writer->writeStringValue('@odata.type', $this->type);
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
     * Sets the displayName property value. The identity's display name. Note that this may not always be available or up to date. For example, if a user changes their display name, the API may show the new value in a future response, but the items associated with the user won't show up as having changed when using delta.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the id property value. Unique identifier for the identity.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the @odata.type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setOdatatype(?string $value ): void {
        $this->type = $value;
    }

}
