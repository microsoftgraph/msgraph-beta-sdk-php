<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageSubject extends Entity implements Parsable 
{
    /**
     * @var string|null $altSecId The altSecId property
    */
    private ?string $altSecId = null;
    
    /**
     * @var ConnectedOrganization|null $connectedOrganization The connected organization of the subject. Read-only. Nullable.
    */
    private ?ConnectedOrganization $connectedOrganization = null;
    
    /**
     * @var string|null $connectedOrganizationId The identifier of the connected organization of the subject.
    */
    private ?string $connectedOrganizationId = null;
    
    /**
     * @var string|null $displayName The display name of the subject.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $email The email address of the subject.
    */
    private ?string $email = null;
    
    /**
     * @var string|null $objectId The object identifier of the subject. null if the subject is not yet a user in the tenant.
    */
    private ?string $objectId = null;
    
    /**
     * @var string|null $onPremisesSecurityIdentifier The onPremisesSecurityIdentifier property
    */
    private ?string $onPremisesSecurityIdentifier = null;
    
    /**
     * @var string|null $principalName The principal name, if known, of the subject.
    */
    private ?string $principalName = null;
    
    /**
     * @var AccessPackageSubjectLifecycle|null $subjectLifecycle The subjectLifecycle property
    */
    private ?AccessPackageSubjectLifecycle $subjectLifecycle = null;
    
    /**
     * @var string|null $type The resource type of the subject.
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new accessPackageSubject and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessPackageSubject');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageSubject
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageSubject {
        return new AccessPackageSubject();
    }

    /**
     * Gets the altSecId property value. The altSecId property
     * @return string|null
    */
    public function getAltSecId(): ?string {
        return $this->altSecId;
    }

    /**
     * Gets the connectedOrganization property value. The connected organization of the subject. Read-only. Nullable.
     * @return ConnectedOrganization|null
    */
    public function getConnectedOrganization(): ?ConnectedOrganization {
        return $this->connectedOrganization;
    }

    /**
     * Gets the connectedOrganizationId property value. The identifier of the connected organization of the subject.
     * @return string|null
    */
    public function getConnectedOrganizationId(): ?string {
        return $this->connectedOrganizationId;
    }

    /**
     * Gets the displayName property value. The display name of the subject.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the email property value. The email address of the subject.
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
            'altSecId' => function (ParseNode $n) use ($o) { $o->setAltSecId($n->getStringValue()); },
            'connectedOrganization' => function (ParseNode $n) use ($o) { $o->setConnectedOrganization($n->getObjectValue(array(ConnectedOrganization::class, 'createFromDiscriminatorValue'))); },
            'connectedOrganizationId' => function (ParseNode $n) use ($o) { $o->setConnectedOrganizationId($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'email' => function (ParseNode $n) use ($o) { $o->setEmail($n->getStringValue()); },
            'objectId' => function (ParseNode $n) use ($o) { $o->setObjectId($n->getStringValue()); },
            'onPremisesSecurityIdentifier' => function (ParseNode $n) use ($o) { $o->setOnPremisesSecurityIdentifier($n->getStringValue()); },
            'principalName' => function (ParseNode $n) use ($o) { $o->setPrincipalName($n->getStringValue()); },
            'subjectLifecycle' => function (ParseNode $n) use ($o) { $o->setSubjectLifecycle($n->getEnumValue(AccessPackageSubjectLifecycle::class)); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the objectId property value. The object identifier of the subject. null if the subject is not yet a user in the tenant.
     * @return string|null
    */
    public function getObjectId(): ?string {
        return $this->objectId;
    }

    /**
     * Gets the onPremisesSecurityIdentifier property value. The onPremisesSecurityIdentifier property
     * @return string|null
    */
    public function getOnPremisesSecurityIdentifier(): ?string {
        return $this->onPremisesSecurityIdentifier;
    }

    /**
     * Gets the principalName property value. The principal name, if known, of the subject.
     * @return string|null
    */
    public function getPrincipalName(): ?string {
        return $this->principalName;
    }

    /**
     * Gets the subjectLifecycle property value. The subjectLifecycle property
     * @return AccessPackageSubjectLifecycle|null
    */
    public function getSubjectLifecycle(): ?AccessPackageSubjectLifecycle {
        return $this->subjectLifecycle;
    }

    /**
     * Gets the type property value. The resource type of the subject.
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
        $writer->writeStringValue('altSecId', $this->altSecId);
        $writer->writeObjectValue('connectedOrganization', $this->connectedOrganization);
        $writer->writeStringValue('connectedOrganizationId', $this->connectedOrganizationId);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('email', $this->email);
        $writer->writeStringValue('objectId', $this->objectId);
        $writer->writeStringValue('onPremisesSecurityIdentifier', $this->onPremisesSecurityIdentifier);
        $writer->writeStringValue('principalName', $this->principalName);
        $writer->writeEnumValue('subjectLifecycle', $this->subjectLifecycle);
        $writer->writeStringValue('type', $this->type);
    }

    /**
     * Sets the altSecId property value. The altSecId property
     *  @param string|null $value Value to set for the altSecId property.
    */
    public function setAltSecId(?string $value ): void {
        $this->altSecId = $value;
    }

    /**
     * Sets the connectedOrganization property value. The connected organization of the subject. Read-only. Nullable.
     *  @param ConnectedOrganization|null $value Value to set for the connectedOrganization property.
    */
    public function setConnectedOrganization(?ConnectedOrganization $value ): void {
        $this->connectedOrganization = $value;
    }

    /**
     * Sets the connectedOrganizationId property value. The identifier of the connected organization of the subject.
     *  @param string|null $value Value to set for the connectedOrganizationId property.
    */
    public function setConnectedOrganizationId(?string $value ): void {
        $this->connectedOrganizationId = $value;
    }

    /**
     * Sets the displayName property value. The display name of the subject.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the email property value. The email address of the subject.
     *  @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value ): void {
        $this->email = $value;
    }

    /**
     * Sets the objectId property value. The object identifier of the subject. null if the subject is not yet a user in the tenant.
     *  @param string|null $value Value to set for the objectId property.
    */
    public function setObjectId(?string $value ): void {
        $this->objectId = $value;
    }

    /**
     * Sets the onPremisesSecurityIdentifier property value. The onPremisesSecurityIdentifier property
     *  @param string|null $value Value to set for the onPremisesSecurityIdentifier property.
    */
    public function setOnPremisesSecurityIdentifier(?string $value ): void {
        $this->onPremisesSecurityIdentifier = $value;
    }

    /**
     * Sets the principalName property value. The principal name, if known, of the subject.
     *  @param string|null $value Value to set for the principalName property.
    */
    public function setPrincipalName(?string $value ): void {
        $this->principalName = $value;
    }

    /**
     * Sets the subjectLifecycle property value. The subjectLifecycle property
     *  @param AccessPackageSubjectLifecycle|null $value Value to set for the subjectLifecycle property.
    */
    public function setSubjectLifecycle(?AccessPackageSubjectLifecycle $value ): void {
        $this->subjectLifecycle = $value;
    }

    /**
     * Sets the type property value. The resource type of the subject.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

}
