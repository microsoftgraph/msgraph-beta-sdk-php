<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProfileCardProperty extends Entity implements Parsable 
{
    /**
     * Instantiates a new profileCardProperty and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.profileCardProperty');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProfileCardProperty
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProfileCardProperty {
        return new ProfileCardProperty();
    }

    /**
     * Gets the annotations property value. Allows an administrator to set a custom display label for the directory property and localize it for the users in their tenant.
     * @return array<ProfileCardAnnotation>|null
    */
    public function getAnnotations(): ?array {
        return $this->getBackingStore()->get('annotations');
    }

    /**
     * Gets the directoryPropertyName property value. Identifies a profileCardProperty resource in Get, Update, or Delete operations. Allows an administrator to surface hidden Azure Active Directory (Azure AD) properties on the Microsoft 365 profile card within their tenant. When present, the Azure AD field referenced in this field will be visible to all users in your tenant on the contact pane of the profile card. Allowed values for this field are: UserPrincipalName, Fax, StreetAddress, PostalCode, StateOrProvince, Alias, CustomAttribute1,  CustomAttribute2, CustomAttribute3, CustomAttribute4, CustomAttribute5, CustomAttribute6, CustomAttribute7, CustomAttribute8, CustomAttribute9, CustomAttribute10, CustomAttribute11, CustomAttribute12, CustomAttribute13, CustomAttribute14, CustomAttribute15.
     * @return string|null
    */
    public function getDirectoryPropertyName(): ?string {
        return $this->getBackingStore()->get('directoryPropertyName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'annotations' => fn(ParseNode $n) => $o->setAnnotations($n->getCollectionOfObjectValues([ProfileCardAnnotation::class, 'createFromDiscriminatorValue'])),
            'directoryPropertyName' => fn(ParseNode $n) => $o->setDirectoryPropertyName($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('annotations', $this->getAnnotations());
        $writer->writeStringValue('directoryPropertyName', $this->getDirectoryPropertyName());
    }

    /**
     * Sets the annotations property value. Allows an administrator to set a custom display label for the directory property and localize it for the users in their tenant.
     *  @param array<ProfileCardAnnotation>|null $value Value to set for the annotations property.
    */
    public function setAnnotations(?array $value): void {
        $this->getBackingStore()->set('annotations', $value);
    }

    /**
     * Sets the directoryPropertyName property value. Identifies a profileCardProperty resource in Get, Update, or Delete operations. Allows an administrator to surface hidden Azure Active Directory (Azure AD) properties on the Microsoft 365 profile card within their tenant. When present, the Azure AD field referenced in this field will be visible to all users in your tenant on the contact pane of the profile card. Allowed values for this field are: UserPrincipalName, Fax, StreetAddress, PostalCode, StateOrProvince, Alias, CustomAttribute1,  CustomAttribute2, CustomAttribute3, CustomAttribute4, CustomAttribute5, CustomAttribute6, CustomAttribute7, CustomAttribute8, CustomAttribute9, CustomAttribute10, CustomAttribute11, CustomAttribute12, CustomAttribute13, CustomAttribute14, CustomAttribute15.
     *  @param string|null $value Value to set for the directoryPropertyName property.
    */
    public function setDirectoryPropertyName(?string $value): void {
        $this->getBackingStore()->set('directoryPropertyName', $value);
    }

}
