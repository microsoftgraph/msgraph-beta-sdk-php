<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernanceSubject extends Entity implements Parsable 
{
    /**
     * @var string|null $displayName The display name of the subject.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $email The email address of the user subject. If the subject is in other types, it is empty.
    */
    private ?string $email = null;
    
    /**
     * @var string|null $principalName The principal name of the user subject. If the subject is in other types, it is empty.
    */
    private ?string $principalName = null;
    
    /**
     * @var string|null $type The type of the subject. The value can be User, Group, and ServicePrincipal.
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new governanceSubject and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.governanceSubject');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernanceSubject
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GovernanceSubject {
        return new GovernanceSubject();
    }

    /**
     * Gets the displayName property value. The display name of the subject.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the email property value. The email address of the user subject. If the subject is in other types, it is empty.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'principalName' => fn(ParseNode $n) => $o->setPrincipalName($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the principalName property value. The principal name of the user subject. If the subject is in other types, it is empty.
     * @return string|null
    */
    public function getPrincipalName(): ?string {
        return $this->principalName;
    }

    /**
     * Gets the type property value. The type of the subject. The value can be User, Group, and ServicePrincipal.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('email', $this->email);
        $writer->writeStringValue('principalName', $this->principalName);
        $writer->writeStringValue('type', $this->type);
    }

    /**
     * Sets the displayName property value. The display name of the subject.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the email property value. The email address of the user subject. If the subject is in other types, it is empty.
     *  @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value ): void {
        $this->email = $value;
    }

    /**
     * Sets the principalName property value. The principal name of the user subject. If the subject is in other types, it is empty.
     *  @param string|null $value Value to set for the principalName property.
    */
    public function setPrincipalName(?string $value ): void {
        $this->principalName = $value;
    }

    /**
     * Sets the type property value. The type of the subject. The value can be User, Group, and ServicePrincipal.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

}
