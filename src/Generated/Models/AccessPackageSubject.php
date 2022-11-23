<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageSubject extends Entity implements Parsable 
{
    /**
     * Instantiates a new accessPackageSubject and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('altSecId');
    }

    /**
     * Gets the connectedOrganization property value. The connected organization of the subject. Read-only. Nullable.
     * @return ConnectedOrganization|null
    */
    public function getConnectedOrganization(): ?ConnectedOrganization {
        return $this->getBackingStore()->get('connectedOrganization');
    }

    /**
     * Gets the connectedOrganizationId property value. The identifier of the connected organization of the subject.
     * @return string|null
    */
    public function getConnectedOrganizationId(): ?string {
        return $this->getBackingStore()->get('connectedOrganizationId');
    }

    /**
     * Gets the displayName property value. The display name of the subject.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the email property value. The email address of the subject.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->getBackingStore()->get('email');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'altSecId' => fn(ParseNode $n) => $o->setAltSecId($n->getStringValue()),
            'connectedOrganization' => fn(ParseNode $n) => $o->setConnectedOrganization($n->getObjectValue([ConnectedOrganization::class, 'createFromDiscriminatorValue'])),
            'connectedOrganizationId' => fn(ParseNode $n) => $o->setConnectedOrganizationId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'objectId' => fn(ParseNode $n) => $o->setObjectId($n->getStringValue()),
            'onPremisesSecurityIdentifier' => fn(ParseNode $n) => $o->setOnPremisesSecurityIdentifier($n->getStringValue()),
            'principalName' => fn(ParseNode $n) => $o->setPrincipalName($n->getStringValue()),
            'subjectLifecycle' => fn(ParseNode $n) => $o->setSubjectLifecycle($n->getEnumValue(AccessPackageSubjectLifecycle::class)),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the objectId property value. The object identifier of the subject. null if the subject is not yet a user in the tenant.
     * @return string|null
    */
    public function getObjectId(): ?string {
        return $this->getBackingStore()->get('objectId');
    }

    /**
     * Gets the onPremisesSecurityIdentifier property value. The onPremisesSecurityIdentifier property
     * @return string|null
    */
    public function getOnPremisesSecurityIdentifier(): ?string {
        return $this->getBackingStore()->get('onPremisesSecurityIdentifier');
    }

    /**
     * Gets the principalName property value. The principal name, if known, of the subject.
     * @return string|null
    */
    public function getPrincipalName(): ?string {
        return $this->getBackingStore()->get('principalName');
    }

    /**
     * Gets the subjectLifecycle property value. The subjectLifecycle property
     * @return AccessPackageSubjectLifecycle|null
    */
    public function getSubjectLifecycle(): ?AccessPackageSubjectLifecycle {
        return $this->getBackingStore()->get('subjectLifecycle');
    }

    /**
     * Gets the type property value. The resource type of the subject.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('altSecId', $this->getAltSecId());
        $writer->writeObjectValue('connectedOrganization', $this->getConnectedOrganization());
        $writer->writeStringValue('connectedOrganizationId', $this->getConnectedOrganizationId());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('objectId', $this->getObjectId());
        $writer->writeStringValue('onPremisesSecurityIdentifier', $this->getOnPremisesSecurityIdentifier());
        $writer->writeStringValue('principalName', $this->getPrincipalName());
        $writer->writeEnumValue('subjectLifecycle', $this->getSubjectLifecycle());
        $writer->writeStringValue('type', $this->getType());
    }

    /**
     * Sets the altSecId property value. The altSecId property
     *  @param string|null $value Value to set for the altSecId property.
    */
    public function setAltSecId(?string $value): void {
        $this->getBackingStore()->set('altSecId', $value);
    }

    /**
     * Sets the connectedOrganization property value. The connected organization of the subject. Read-only. Nullable.
     *  @param ConnectedOrganization|null $value Value to set for the connectedOrganization property.
    */
    public function setConnectedOrganization(?ConnectedOrganization $value): void {
        $this->getBackingStore()->set('connectedOrganization', $value);
    }

    /**
     * Sets the connectedOrganizationId property value. The identifier of the connected organization of the subject.
     *  @param string|null $value Value to set for the connectedOrganizationId property.
    */
    public function setConnectedOrganizationId(?string $value): void {
        $this->getBackingStore()->set('connectedOrganizationId', $value);
    }

    /**
     * Sets the displayName property value. The display name of the subject.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the email property value. The email address of the subject.
     *  @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->getBackingStore()->set('email', $value);
    }

    /**
     * Sets the objectId property value. The object identifier of the subject. null if the subject is not yet a user in the tenant.
     *  @param string|null $value Value to set for the objectId property.
    */
    public function setObjectId(?string $value): void {
        $this->getBackingStore()->set('objectId', $value);
    }

    /**
     * Sets the onPremisesSecurityIdentifier property value. The onPremisesSecurityIdentifier property
     *  @param string|null $value Value to set for the onPremisesSecurityIdentifier property.
    */
    public function setOnPremisesSecurityIdentifier(?string $value): void {
        $this->getBackingStore()->set('onPremisesSecurityIdentifier', $value);
    }

    /**
     * Sets the principalName property value. The principal name, if known, of the subject.
     *  @param string|null $value Value to set for the principalName property.
    */
    public function setPrincipalName(?string $value): void {
        $this->getBackingStore()->set('principalName', $value);
    }

    /**
     * Sets the subjectLifecycle property value. The subjectLifecycle property
     *  @param AccessPackageSubjectLifecycle|null $value Value to set for the subjectLifecycle property.
    */
    public function setSubjectLifecycle(?AccessPackageSubjectLifecycle $value): void {
        $this->getBackingStore()->set('subjectLifecycle', $value);
    }

    /**
     * Sets the type property value. The resource type of the subject.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
