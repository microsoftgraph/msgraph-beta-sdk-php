<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkUserIdentity extends Identity implements Parsable 
{
    /**
     * Instantiates a new TeamworkUserIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.teamworkUserIdentity');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkUserIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkUserIdentity {
        return new TeamworkUserIdentity();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'userIdentityType' => fn(ParseNode $n) => $o->setUserIdentityType($n->getEnumValue(TeamworkUserIdentityType::class)),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the userIdentityType property value. Type of user. Possible values are: aadUser, onPremiseAadUser, anonymousGuest, federatedUser, personalMicrosoftAccountUser, skypeUser, phoneUser, emailUser and azureCommunicationServicesUser.
     * @return TeamworkUserIdentityType|null
    */
    public function getUserIdentityType(): ?TeamworkUserIdentityType {
        $val = $this->getBackingStore()->get('userIdentityType');
        if (is_null($val) || $val instanceof TeamworkUserIdentityType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userIdentityType'");
    }

    /**
     * Gets the userPrincipalName property value. User principal name (UPN) of the user.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('userIdentityType', $this->getUserIdentityType());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the userIdentityType property value. Type of user. Possible values are: aadUser, onPremiseAadUser, anonymousGuest, federatedUser, personalMicrosoftAccountUser, skypeUser, phoneUser, emailUser and azureCommunicationServicesUser.
     * @param TeamworkUserIdentityType|null $value Value to set for the userIdentityType property.
    */
    public function setUserIdentityType(?TeamworkUserIdentityType $value): void {
        $this->getBackingStore()->set('userIdentityType', $value);
    }

    /**
     * Sets the userPrincipalName property value. User principal name (UPN) of the user.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
